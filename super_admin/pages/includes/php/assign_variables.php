<?php
        $result_set = User::find_students_by_id($session->user_id);
while ($row = $database->fetch_array($result_set)) {	
        $user_type = $row['user_type'];
        $logged = $row['logged'];
        $id = $row['id'];
        $fname = $row['fname'];
        $lname = $row['lname'];
        $oname = $row['oname'];
        $uname_main = $row['uname'];
        if($row['uname']==""){ $uname=$row['rnumber']; }else{ $uname = $row['uname']; }
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
        $department=$row['department'];
        }
?>
<?php
//$oname = "come";
$take_in = array();
$left = array();
if($uname_main != ""){
    array_push($take_in, "uname_main");
}else{
    array_push($left, "uname_main");
}

if($oname != ""){
    array_push($take_in, "oname");
}else{
    array_push($left, "oname");
}
if($pnumber != ""){
    array_push($take_in, "pnumber");
}else{
    array_push($left, "pnumber");
}

if($gender != ""){
    array_push($take_in, "gender");
}else{
    array_push($left, "gender");
}

if($skills != ""){
    array_push($take_in, "skills");
}else{
    array_push($left, "skills");
}

if($oemail != ""){
    array_push($take_in, "oemail");
}else{
     array_push($left, "oemail");
}

if($semail != ""){
    array_push($take_in, "semail");
}else{
     array_push($left, "semail");
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



$completed = 10;
if(!empty($take_in)){
    $incompleted = 10 * count($take_in);
    $completed += $incompleted;
}
?>