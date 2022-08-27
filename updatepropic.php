<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/test/resource/php/class/core/init.php';
require_once 'resource/php/class/config.php';
$user = new user();

if(isset($_POST['pic'])){
     $name = $_FILES['myfile']['name'];
     $type = $_FILES['myfile']['type'];
     $data = file_get_contents($_FILES['myfile']['tmp_name']);
    try {
        $user->update(array(
            'nm'=>$name,
            'mm'=> $type,
            'dp'=> $data
        ));
    } catch (Exception $e) {
        die($e->getMessage());
    }

    Redirect::to('template.php');
}else{
    Redirect::to('template.php');
}
 ?>
