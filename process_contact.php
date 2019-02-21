<?php
if(isset($_POST['submit'])){
    require_once ("includes/initialize.php");
    
    $name = $database->escape_value($_POST ['name']);
    $email = $database->escape_value($_POST ['email']);
    $subject = $database->escape_value($_POST ['subject']);
    $message = $database->escape_value($_POST ['message']);
    
    
    $create_query = User::find_by_sql("CREATE TABLE IF NOT EXISTS `contact` (
      `id` int(11) NOT NULL auto_increment,
      `name` varchar(50) NOT NULL,
      `email` varchar(50) NOT NULL,
      `subject` varchar(50) NOT NULL,
      `message` varchar(50) NOT NULL,
      PRIMARY KEY  (`id`)
    )");
    
    $insert_query =  User::find_by_sql("INSERT INTO contact SET name='$name', email='$email', subject='$subject', message='$message'");
    if($insert_query){
        echo "<script> alert('Message delivered successfully!'); window.location='index.php'; </script>";
    }else{
        echo "<script> alert('Unable to deliver message at this time!'); window.location='index.php'; </script>";
    }
    
}




?>

