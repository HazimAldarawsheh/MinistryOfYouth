<?php
include 'includes/db.inc.php';

if(isset($_POST['fname'])){
    $data= $mysqli->query("INSERT INTO `moyouth`.`complaint_form` (`fname`, `sname`, `lname`, `age`, `gender`, `city`, `club_name`, `phone_number`, `email`, `comp_title`, `comp_desc`)
     VALUES ('$_POST[fname]', '$_POST[sname]', '$_POST[lname]', '$_POST[age]', '$_POST[gender]', '$_POST[city]', '$_POST[club]', '$_POST[phoneN]', '$_POST[email]', '$_POST[topic]', '$_POST[mssg]');");
    if($data)
        echo 'inserted';
    
    else
    echo $mysqli->error;

};

