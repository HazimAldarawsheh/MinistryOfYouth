<!-- DONE -->

<?php
include 'includes/db.inc.php';

if(isset($_POST['fname'])){
    $data= $mysqli->query("INSERT INTO `moyouth`.`volunteering` (`phone_number`, `fname`, `sname`, `tname`, `lname`, `age`, `major`, `gender`, `email`) 
     VALUES ('$_POST[phoneN]', '$_POST[fname]', '$_POST[sname]', '$_POST[tname]', '$_POST[lname]', '$_POST[age]', '$_POST[major]', '$_POST[gender]', '$_POST[email]');");
    if($data)
        echo 'inserted';
    
    else
    echo $mysqli->error;

};



