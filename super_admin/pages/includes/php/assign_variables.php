<?php
        $result_set = User::find_students_by_id($session->user_id);
while ($row = $database->fetch_array($result_set)) {	
        $user_type = $row['user_type'];
        $logged = $row['logged'];
        $id = $row['id'];
        $fname = $row['fname'];
        $lname = $row['lname'];
        $oname = $row['oname'];
        $uname = $row['uname'];
        $semail = $row['semail'];
        $oemail = $row['oemail'];
        $level = $row['level'];
        $pword = $row['pword'];
        $pnumber = $row['pnumber'];
        $rnumber = $row['rnumber'];
        $gender = $row['gender'];
        $date = $row['date'];
        $aim = $row['aim'];
        $skills = $row['skills'];
        $full_name = $fname." ".$lname;
        $picture = $row['picture'];
        $imagepath= "../../photos/".$picture;
        $my_chat_image = "../../photos/".$picture;
        $_SESSION['rnumber'] = $rnumber;
        }
?>
<?php
//$oname = "come";
$take_in = array();
$left = array();
if($oname != ""){
    array_push($take_in, "oname");
}else{
    array_push($left, "oname");
}

if($oemail != ""){
    array_push($take_in, "oemail");
}else{
     array_push($left, "oemail");
}

if($aim != ""){
    array_push($take_in, "aim");
}else{
    array_push($left, "aim");
}

if($picture != "default.png"){
    array_push($take_in, "picture");
}else{
    array_push($left, "picture");
}



//print_r(count($take_in));

$completed = 60;
if(!empty($take_in)){
    $incompleted = 10 * count($take_in);
    $completed += $incompleted;
}
?>