<?php

            global $wpdb;
            $resultats = $wpdb->get_results("SELECT name FROM name_product WHERE name LIKE '" . $_GET['start'] . "%' LIMIT " . $_GET['max']);

            $array = array();

            foreach ($resultats as $value) {
                array_push($array, $value->name);
            }


            
            echo json_encode($array);
        ?>