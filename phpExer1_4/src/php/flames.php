<?php 
    $status = 400;
    $data = "Error"; 

    $name1 = str_replace(" ","", strtolower($_REQUEST['name1']));
    $name2 = str_replace(" ","", strtolower($_REQUEST['name2']));

    /* START FLAMES CODE */
    
    /* END FLAMES CODE */

    $myObj = array(
        'status' => $status,
        'data' => $data,
    );
    echo json_encode($myObj, JSON_FORCE_OBJECT);
?>