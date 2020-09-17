
<?php
include 'includes/db.inc.php';

if(isset($_POST['fname'])){
    $data= $mysqli->query("INSERT INTO `moyouth`.`talents` (`phone_number`, `fname`, `sname`, `tname`, `lname`, `age`, `gender`, `education`, `talent_type`, `email`, `video_link`)
     VALUES ('$_POST[phoneN]', '$_POST[fname]', '$_POST[sname]', '$_POST[tname]', '$_POST[lname]', '$_POST[age]', '$_POST[gender]', '$_POST[education]', '$_POST[talent]', '$_POST[email]', '$_POST[videoLink]');");
    if($data)
        echo 'inserted';
    
    else
    echo $mysqli->error;

};



