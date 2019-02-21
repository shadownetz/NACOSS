<?php 

require_once ("../../includes/initialize.php");

$session_student = $_SESSION['rnumber'];
    
if(isset($_POST['view'])){
    global $session_student;
    

    
    $level = $_POST['level'];
    $semester = $_POST['semester'];
    
    if ($level == "first" && $semester == "first"){
       header("Location: view-first_first.php");  
    }else
    if($level == "first" && $semester == "second"){
        header("Location: view-first_second.php");
    }else
    if($level == "second" && $semester == "first"){
        header("Location: view-second_first.php");
    }else
    if($level == "second" && $semester == "second"){
        header("Location: view-second_second.php");
    }else
    if($level == "third" && $semester == "first"){
        header("Location: view-third_first.php");
    }else
    if($level == "third" && $semester == "second"){
        header("Location: view-third_second.php");
    }else
    if($level == "final" && $semester == "first"){
        header("Location: view-final_first.php");
    }else
    if($level == "final" && $semester == "second"){
        header("Location: view-final_second.php");
    }else{
        echo "Invalid Input";
    }    
}


?>