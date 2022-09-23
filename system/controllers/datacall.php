<?php

$action = $routes['1'];

switch ($action) {
    case 'type':

        if (isset($routes['2']) && $routes['2'] != '') {
            $keyword = $routes['2'];
            $data = ORM::for_table('v_tipe_tbl_lokasi')->where_any_is(array(
                array('tipe' => '%' . $keyword . '%'),
            ), 'LIKE')->find_array();

            $count = count($data);
            $rows = array();

            for ($i = 0; $i < $count; $i++) {
                $rows[] = $data[$i];
            }

            echo json_encode($rows);
        } else {
            $data = ORM::for_table('v_tipe_tbl_lokasi')->find_array();
            $count = count($data);
            $rows = array();

            for ($i = 0; $i < $count; $i++) {
                $rows[] = $data[$i];
            }

            echo json_encode($rows);
        }

        break;

    case 'idcustomer':

        if (isset($routes['2']) && $routes['2'] != '') {
            $keyword = $routes['2'];
            $data = ORM::for_table('tbl_pelanggan')->select('id')->select('nama')->where_any_is(array(
                array('id' => '%' . $keyword . '%'),
                array('nama' => '%' . $keyword . '%')
            ), 'LIKE')->find_array();

            $count = count($data);
            $rows = array();

            for ($i = 0; $i < $count; $i++) {
                $rows[] = $data[$i];
            }

            echo json_encode($rows);
        } else {
            $data = ORM::for_table('tbl_pelanggan')->select('id')->select('nama')->find_array();
            $count = count($data);
            $rows = array();

            for ($i = 0; $i < $count; $i++) {
                $rows[] = $data[$i];
            }

            echo json_encode($rows);
        }

        break;

    case 'idlokasi':

        if (isset($routes['2']) && $routes['2'] != '') {
            $keyword = $routes['2'];
            $data = ORM::for_table('tbl_lokasi')->select('id')->select('nama')->where_any_is(array(
                array('id' => '%' . $keyword . '%'),
                array('nama' => '%' . $keyword . '%')
            ), 'LIKE')->find_array();

            $count = count($data);
            $rows = array();

            for ($i = 0; $i < $count; $i++) {
                $rows[] = $data[$i];
            }

            echo json_encode($rows);
        } else {
            $data = ORM::for_table('tbl_lokasi')->select('id')->select('nama')->find_array();
            $count = count($data);
            $rows = array();

            for ($i = 0; $i < $count; $i++) {
                $rows[] = $data[$i];
            }

            echo json_encode($rows);
        }

        break;

    case 'idodc':

        if (isset($routes['2']) && $routes['2'] != '') {
            $keyword = $routes['2'];
            $data = ORM::for_table('tbl_odc')->select('id')->select('nama')->where_any_is(array(
                array('id' => '%' . $keyword . '%'),
                array('nama' => '%' . $keyword . '%')
            ), 'LIKE')->find_array();

            $count = count($data);
            $rows = array();

            for ($i = 0; $i < $count; $i++) {
                $rows[] = $data[$i];
            }

            echo json_encode($rows);
        } else {
            $data = ORM::for_table('tbl_odc')->select('id')->select('nama')->find_array();
            $count = count($data);
            $rows = array();

            for ($i = 0; $i < $count; $i++) {
                $rows[] = $data[$i];
            }

            echo json_encode($rows);
        }

        break;

    case 'portodc':

        if (isset($routes['2']) && $routes['2'] != '') {
            $idodc = $routes['2'];
            $portKapOdc = ORM::for_table('tbl_odc')->select('kapasitas')->where('id', $idodc)->find_one();
            $portUseOdc = ORM::for_table('tbl_odp')->select('port_odc')->where('id_odc', $idodc)->find_many();

            $count = count($portUseOdc);
            if (isset($routes['3']) && $routes['3'] != '') {
                $idodp = $routes['3'];
                $portOdcOdp = ORM::for_table('tbl_odp')->select('port_odc')->where('id', $idodp)->find_one();
                $portAda = [];
                for ($i = 0; $i < $count; $i++) {
                    $portAda[] = $portUseOdc[$i]['port_odc'];
                }

                $portSisa = [];
                $portSisa[] = (int)$portOdcOdp['port_odc'];
                for ($i = 1; $i <= $portKapOdc['kapasitas']; $i++) {
                    if (!in_array($i, $portAda)) {
                        $portSisa[] = $i;
                    }
                }
                sort($portSisa);
            } else {
                $portAda = [];
                for ($i = 0; $i < $count; $i++) {
                    $portAda[] = $portUseOdc[$i]['port_odc'];
                }

                $portSisa = [];
                for ($i = 1; $i <= $portKapOdc['kapasitas']; $i++) {
                    if (!in_array($i, $portAda)) {
                        $portSisa[] = $i;
                    }
                }
            }

            echo json_encode($portSisa);
        }

        break;

    case 'idregion':

        if (isset($routes['2']) && $routes['2'] != '') {
            $keyword = $routes['2'];
            $data = ORM::for_table('tbl_region')->select('id')->select('nama')->where_any_is(array(
                array('id' => '%' . $keyword . '%'),
                array('nama' => '%' . $keyword . '%')
            ), 'LIKE')->find_array();

            $count = count($data);
            $rows = array();

            for ($i = 0; $i < $count; $i++) {
                $rows[] = $data[$i];
            }

            echo json_encode($rows);
        } else {
            $data = ORM::for_table('tbl_region')->select('id')->select('nama')->find_array();
            $count = count($data);
            $rows = array();

            for ($i = 0; $i < $count; $i++) {
                $rows[] = $data[$i];
            }

            echo json_encode($rows);
        }

        break;

    case 'noinet':
        if (isset($routes['2']) && $routes['2'] != '') {
            $keyword = $routes['2'];
            $data = ORM::for_table('v_inet_pelanggan')->select('no_inet')->select('nama')->where_any_is(array(
                array('no_inet' => '%' . $keyword . '%'),
                array('nama' => '%' . $keyword . '%')
            ), 'LIKE')->find_array();

            $count = count($data);
            $rows = array();

            for ($i = 0; $i < $count; $i++) {
                $rows[] = $data[$i];
            }

            echo json_encode($rows);
        } else {
            $data = ORM::for_table('v_inet_pelanggan')->select('no_inet')->select('nama')->find_array();

            $count = count($data);
            $rows = array();

            for ($i = 0; $i < $count; $i++) {
                $rows[] = $data[$i];
            }

            echo json_encode($rows);
        }


        break;

    case 'region':

        $data['reg'] = ORM::for_table('tbl_region')->find_array();

        $data['total'] = ORM::for_table('v_total_data_bf')->select_expr('COUNT(DISTINCT id_odc)', 'total_odc')->select_expr('COUNT(DISTINCT id_odp)', 'total_odp')->select_expr('COUNT(port_odp)', 'total_port')->select_expr('COUNT(nama)', 'total_pelanggan')->find_array();

        echo json_encode($data);

        break;

    case 'location':

        $reg = _post('name');

        if ($reg == 'all') {
            $data['total'] = ORM::for_table('v_total_data_bf')->select_expr('COUNT(DISTINCT id_odc)', 'total_odc')->select_expr('COUNT(DISTINCT id_odp)', 'total_odp')->select_expr('COUNT(port_odp)', 'total_port')->select_expr('COUNT(nama)', 'total_pelanggan')->find_array();
        } else {
            $data['loc'] = ORM::for_table('v_reg_loc')->where('nama_reg', $reg)->find_array();

            $data['total'] = ORM::for_table('v_total_data_bf')->select_expr('COUNT(DISTINCT id_odc)', 'total_odc')->select_expr('COUNT(DISTINCT id_odp)', 'total_odp')->select_expr('COUNT(port_odp)', 'total_port')->select_expr('COUNT(nama)', 'total_pelanggan')->where('nama_reg', $reg)->find_array();
        }

        echo json_encode($data);

        break;

    case 'subloc':

        $reg = _post('reg');
        $loc = _post('lok');

        if ($loc == "all") {
            $data['total'] = ORM::for_table('v_total_data_bf')->select_expr('COUNT(DISTINCT id_odc)', 'total_odc')->select_expr('COUNT(DISTINCT id_odp)', 'total_odp')->select_expr('COUNT(port_odp)', 'total_port')->select_expr('COUNT(nama)', 'total_pelanggan')->where('nama_reg', $reg)->find_array();
        } else {
            $data['subloc'] = ORM::for_table('v_loc_subloc')->where('nama_loc', $loc)->find_array();

            $data['total'] = ORM::for_table('v_total_data_bf')->select_expr('COUNT(DISTINCT id_odc)', 'total_odc')->select_expr('COUNT(DISTINCT id_odp)', 'total_odp')->select_expr('COUNT(port_odp)', 'total_port')->select_expr('COUNT(nama)', 'total_pelanggan')->where('nama_reg', $reg)->where('nama_lok', $loc)->find_array();
        }

        echo json_encode($data);

        break;

    case 'subloc_end':
        $reg = _post('region');
        $loc = _post('location');
        $subloc = _post('subloc');

        if ($subloc != 'all') {
            $data['total'] = ORM::for_table('v_total_data_bf')->select_expr('COUNT(DISTINCT id_odc)', 'total_odc')->select_expr('COUNT(DISTINCT id_odp)', 'total_odp')->select_expr('COUNT(port_odp)', 'total_port')->select_expr('COUNT(nama)', 'total_pelanggan')->where('nama_reg', $reg)->where('nama_lok', $loc)->where('nama_sub_lok', $subloc)->find_array();
        } else {
            $data['total'] = ORM::for_table('v_total_data_bf')->select_expr('COUNT(DISTINCT id_odc)', 'total_odc')->select_expr('COUNT(DISTINCT id_odp)', 'total_odp')->select_expr('COUNT(port_odp)', 'total_port')->select_expr('COUNT(nama)', 'total_pelanggan')->where('nama_reg', $reg)->where('nama_lok', $loc)->find_array();
        }



        echo json_encode($data);
        break;

    case 'revenue_month':

        $year = _post('year');

        $data['data'] = ORM::for_table('tbl_revenue_port')->select('month')->select('year')->select_expr('SUM(revenue)', 'total_rev')->where('year', $year)->group_by('month')->find_array();

        echo json_encode($data);

        break;

    case 'revenue_day':

        $date = _post('month');
        $date = explode('-', $date);

        $ydate = $date[0];
        $mdate = (int)$date[1];

        $data['data'] = ORM::for_table('tbl_revenue_port')->select('tanggal')->select('month')->select('year')->select_expr('SUM(revenue)', 'total_rev')->where('year', $ydate)->where('month', $mdate)->group_by('tanggal')->find_array();

        echo json_encode($data);

        break;

    case 'revenue_between':

        $start = _post('start');
        $end =  _post('end');

        $data['data'] = ORM::for_table('tbl_revenue_port')->raw_query("SELECT tanggal, year, sum(revenue) AS total_rev FROM tbl_revenue_port WHERE year BETWEEN $start AND $end GROUP BY year")->find_array();

        echo json_encode($data);

        break;

    default:
        echo 'Data Not Found';
        break;
}
