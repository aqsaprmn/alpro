<?php
_admin();
$admin = Admin::_info();
$ui->assign('_admin', $admin);
$action = $routes['1'];

require './vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


switch ($action) {
    case 'earnings':
        if ($admin['user_type'] != 'Admin') {
            r2(U . "dashboard", 'e', $_L['Do_NotAccess']);
        }

        $name = $_FILES['excel']['name'];
        $tmp_name = $_FILES['excel']['tmp_name'];
        $error = $_FILES['excel']['error'];


        if ($error === 4) {
            r2(U . "earnings/list", 'e', 'Please Input File');
        }

        $eks = explode('.', $name);
        $eks = end($eks);

        $valid_eks = ['xlsx', 'csv'];

        if (!in_array($eks, $valid_eks)) {
            r2(U . "earnings/list", 'e', 'Ekstensi File Must xlsx OR csv');
        }

        $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader("Xlsx");
        $spreadsheet = $reader->load($tmp_name);
        $sheetData = $spreadsheet->getActiveSheet()->toArray();

        $jumlah_data = 0;

        for ($i = 1; $i < count($sheetData); $i++) {
            $id_odp = $sheetData[$i][0];
            $port_odp = $sheetData[$i][1];
            $date = $sheetData[$i][2];
            $revenue = $sheetData[$i][3];
            $no_inet = $sheetData[$i][4];

            if ($id_odp == 'NULL' || $id_odp == '') $id_odp = null;
            if ($port_odp == 'NULL' || $port_odp == '') $port_odp = null;

            $tanggal = explode('/', $date);

            $day = $tanggal[1];
            $month = $tanggal[0];
            $year = $tanggal[2];

            $date = $year . '/' . $month . '/' . $day;

            echo "$id_odp, $port_odp, $date,$day,$month,$year, $revenue, $no_inet</br>";

            $d = ORM::for_table('tbl_revenue_port')->create();
            $d->id_odp = $id_odp;
            $d->port_odp = $port_odp;
            $d->tanggal = $date;
            $d->day = $day;
            $d->month = $month;
            $d->year = $year;
            $d->revenue = $revenue;
            $d->no_inet = $no_inet;
            $d->save();

            $jumlah_data++;
        }

        if ($jumlah_data > 0) {
            $new_name = 'ImportEarnings-' . date('d-m-Y');
            $new_name .= '-' . uniqid() . '.'  . $eks;
            $dest = 'system/uploads/import/' . $new_name;

            move_uploaded_file($tmp_name, $dest);

            r2(U . "earnings/list", 's', 'Import ' . $jumlah_data . ' Data Successfull');
        } else {
            r2(U . "earnings/list", 'e', 'Import Data Failed');
        }

        break;

    default:
        break;
}
