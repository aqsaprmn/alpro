<?php
_admin();
$admin = Admin::_info();
$ui->assign('_admin', $admin);
$action = $routes['1'];

require './vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

switch ($action) {
    case 'pdf':
        if ($admin['user_type'] != 'Admin') {
            r2(U . "dashboard", 'e', $_L['Do_NotAccess']);
        }

        define('_MPDF_PATH', 'system/vendors/mpdf/');
        require_once './system/vendors/mpdf/mpdf.php';

        $data = ORM::for_table('v_revenue')->find_array();

        $html = "
        <!DOCTYPE html>
        <html lang='en'>
        <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Document</title>
        <style>
            .container {
                width: 100%; 
                margin: 0 auto;
                font-family: sans-serif;
            }

            .table {
                width: 100%;
                border-collapse:collapse;
                font-family: sans-serif;
            }

            .table th, .table td {
                border: 1px solid black;
                font-size: 12px;
                padding: 6px;
            }

            .text-left {
                text-align: left;
            }

            .text-center {
                text-align: center;
            }

            .lh2 {
                line-height: 2px;
            }

            .title {
                margin-bottom: 5px;
            }

        </style>
        </head>
        <body>
            <div class='container'>
                <div class='title text-center'>
                    <h2 class='lh2'>LAPORAN PENDAPATAN</h2>
                    <h3 class='lh2'>PT AKSES PRIMA INDONESIA</h3>
                </div>
                <div class='data'>
                    <table class='table table-border table-collapse'>
                        <thead>
                            <tr>
                                <th>No</td>
                                <th class='text-left'>Nama</th>
                                <th>No Internet</td>
                                <th>Total</th>
                                <th>Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
        
                    ";
        $n = 1;
        for ($i = 0; $i < 40; $i++) {
            $datai = $data[$i];
            $html .= "<tr>
                                    <td class='text-center'>" . $n . "</td>
                                    <td>" . $datai['nama'] . "</td>
                                    <td class='text-center'>" . $datai['no_inet'] . "</td>
                                    <td class='text-center'>" . rupiah($datai['revenue']) . "</td>
                                    <td class='text-center'>" . date('d-m-yy', strtotime($datai['tgl_revenue'])) . "</td>
                                </tr>";

            $n++;
        }

        $html .= "</tbody>
                </table>
            </div>
        </div>          
        </body>
        </html>";

        $mpdf = new mPDF('c', 'A4', '', '', 16, 16, 12, 12, 0, 0);
        $mpdf->SetProtection(array('print'));
        $mpdf->AddPage('L');
        $mpdf->SetTitle('Report');;
        $mpdf->SetWatermarkText('PT AKSES PRIMA INDONESIA');
        $mpdf->showWatermarkText = true;
        $mpdf->watermarkTextAlpha = 0.1;
        $mpdf->SetAuthor('ALPRO');
        $mpdf->SetDisplayMode('fullpage');
        $mpdf->WriteHTML($html);
        $mpdf->Output('LaporanPendapatan.pdf', 'D');

        break;

    case 'excel':
        if ($admin['user_type'] != 'Admin') {
            r2(U . "dashboard", 'e', $_L['Do_NotAccess']);
        }

        $data = ORM::for_table('v_revenue')->find_array();

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A4', 'No');
        $sheet->setCellValue('B4', 'Nama');
        $sheet->setCellValue('C4', 'No Internet');
        $sheet->setCellValue('D4', 'Total');
        $sheet->setCellValue('E4', 'Tanggal');
        $n = 5;
        $u = 1;
        for ($i = 0; $i < 40; $i++) {
            $datai = $data[$i];

            $sheet->setCellValue('A' . $n, $u);
            $sheet->setCellValue('B' . $n, $datai['nama']);
            $sheet->setCellValue('C' . $n, $datai['no_inet']);
            $sheet->setCellValue('D' . $n, $datai['revenue']);
            $sheet->setCellValue('E' . $n, $datai['tgl_revenue']);

            $n++;
            $u++;
        }

        $writer = new Xlsx($spreadsheet);
        $filename = 'LaporanPendapatan';
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename . '.xlsx');
        header('Cache-Control: max-age=0');
        $writer->save('php://output');

        break;

    default:

        break;
}
