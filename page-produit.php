<?php 

if (isset($_POST['recherche']) && $_POST['recherche'] !== "") {
    
    $array = [];
    
    global $wpdb;
    $name = $_POST['recherche'];
    $id = $wpdb->get_results("SELECT * FROM name_product WHERE name = ('" . $name . "')");
    
    
    $newid = $id[0]->code_cis;
    $forme = $id[0]->forme;
    $voie = $id[0]->voie;
    $commercial = $id[0]->commercial;
    $lab = $id[0]->lab;
    
    
    array_push($array, $newid, $name, $forme, $voie, $commercial, $lab);
    
    $compo = $wpdb->get_results("SELECT * FROM compo_product WHERE code_cis = ('" . $newid . "') ");
    
    $element_compo = $compo[0]->element;
    $ingredient_compo = $compo[0]->name_ingredient;
    $dose_compo = $compo[0]->dosage;
    $unit_compo = $compo[0]->unit;
    
    array_push($array, $element_compo, $ingredient_compo, $dose_compo, $unit_compo);
    
    $deliv = $wpdb->get_results("SELECT label FROM deliv_product WHERE code_cis = ('" . $newid . "') ");
    
    $label_deliv = $deliv[0]->label;
    
    array_push($array, $label_deliv);
    
    $gener = $wpdb->get_results("SELECT label FROM gener_product WHERE code_cis = ('" . $newid . "') ");
    
    $label_gener = $gener[0]->label;
    
    array_push($array, $label_gener);
    
    $pres = $wpdb->get_results("SELECT label FROM pres_product WHERE code_cis = ('" . $newid . "') ");
    
    $label_pres = $pres[0]->label;
    
    array_push($array, $label_pres);
    
    echo json_encode($array);
    // var_dump($array);
    
    
    
    # code...
}    
