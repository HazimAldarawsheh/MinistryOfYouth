<!-- DONE -->

<?php
include 'includes/db.inc.php';

if(isset($_POST['fname'])){
    $data= $mysqli->query("INSERT INTO `moyouth`.`education_form` (`phone_number`, `fname`, `sname`, `tname`, `lname`, `age`, `major`, `city`, `gender`, `address`, `targeted_group`, `division`, `email`)
     VALUES ('$_POST[phoneN]', '$_POST[fname]', '$_POST[sname]', '$_POST[tname]', '$_POST[lname]', '$_POST[age]', '$_POST[major]', '$_POST[city]', '$_POST[gender]', '$_POST[address]', '$_POST[target]', '$_POST[division]', '$_POST[email]');");
    if($data)
        echo 'inserted';
    
    else
    echo $mysqli->error;

};

