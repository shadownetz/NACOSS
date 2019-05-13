<?php 

require_once ("../../includes/initialize.php");

$session_student = $_SESSION['rnumber'];
    
if(isset($_POST['next'])){
    global $session_student;
    

    
    $level = $_POST['level'];
    $semester = $_POST['semester'];
    
    if ($level == "first" && $semester == "first"){
        header("Location: first_first.php");
    }else
    if($level == "first" && $semester == "second"){
        header("Location: first_second.php");
    }else
    if($level == "second" && $semester == "first"){
        header("Location: second_first.php");
    }else
    if($level == "second" && $semester == "second"){
        header("Location: second_second.php");
    }else
    if($level == "third" && $semester == "first"){
        header("Location: third_first.php");
    }else
    if($level == "third" && $semester == "second"){
        header("Location: third_second.php");
    }else
    if($level == "final" && $semester == "first"){
        header("Location: final_first.php");
    }else
    if($level == "final" && $semester == "second"){
        header("Location: final_second.php");
    }else{
        echo "<script> alert('Invalid Input'); window.location='upload_result.php'; </script>";
    }    
}


?>