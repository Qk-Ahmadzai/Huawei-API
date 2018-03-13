<?php


require_once __DIR__.'/crud.class.php';

    $db = Database::getInstance();
    $conn = $db->getConnection(); 

    $crud = Crud::getInstance();

    
    //$crud->addNewSms();
    echo "Get SMS";
    var_dump( $crud->getSms($conn) );

    echo "<br>Add SMS";
    var_dump( $crud->addNewSms($conn) );

    echo "<br>Add SMS Para";
    var_dump( $crud->addNewSmsPara($conn, 20030, '+9372889806', 'Though it is usually advisable to use some sort of framework or CMS', 1232132134) );

    

 
   
?>