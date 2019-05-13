<?php 

require_once ("../../includes/initialize.php");

$session_student = $_SESSION['rnumber'];
    
if(isset($_POST['view'])){
    global $session_student;
    

    
    $level = $_POST['level'];
    $semester = $_POST['semester'];
    
    if ($level == "first" && $semester == "first"){
        $_SESSION['result_loc'] = 'first_first.php';
        $_SESSION['dataDb'] = 'first_yr_first_semester_results';
       header("Location: user_results.php");  
    }else
    if($level == "first" && $semester == "second"){
        $_SESSION['result_loc'] = 'first_second.php';
        $_SESSION['dataDb'] = 'first_yr_second_semester_results';
        header("Location: user_results.php");
    }else
    if($level == "second" && $semester == "first"){
        $_SESSION['result_loc'] = 'second_first.php';
        $_SESSION['dataDb'] = 'second_yr_first_semester_results';
        header("Location: user_results.php");
    }else
    if($level == "second" && $semester == "second"){
        $_SESSION['result_loc'] = 'second_second.php';
        $_SESSION['dataDb'] = 'second_yr_second_semester_results';
        header("Location: user_results.php");
    }else
    if($level == "third" && $semester == "first"){
        $_SESSION['result_loc'] = 'third_first.php';
        $_SESSION['dataDb'] = 'third_yr_first_semester_results';
        header("Location: user_results.php"); 
    }else
    if($level == "third" && $semester == "second"){
        $_SESSION['result_loc'] = 'third_second.php';
        $_SESSION['dataDb'] = 'third_yr_second_semester_results';
        header("Location: user_results.php");
    }else
    if($level == "final" && $semester == "first"){
        $_SESSION['result_loc'] = 'final_first.php';
        $_SESSION['dataDb'] = 'final_yr_first_semester_results';
        header("Location: user_results.php");
    }else
    if($level == "final" && $semester == "second"){
        $_SESSION['result_loc'] = 'final_second.php';
        $_SESSION['dataDb'] = 'final_yr_second_semester_results';
        header("Location: user_results.php");
    }else{
        echo "Invalid Input";
    }    
}


?>