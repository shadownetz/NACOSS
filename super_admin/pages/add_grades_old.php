<?php include('includes/php/process_upload_result.php'); ?>
<?php require_once('includes/php/assign_variables.php'); ?>
<?php 
    $rnumber = $_SESSION['rnumber'];
    $dataDB = $_SESSION['type'] ;
?>
<?php if(isset($_POST['upload'])){
    global $dataDB;

    $array = $_SESSION['submit'];
    $offered = $_SESSION['offered'];
    $x=0;
    $query_string = "";
    while($x<count($array)){
        $value = $array[$x];
        $tablename = $_POST["$value"];
        $tablename = "'".$tablename."'";
        if($x+1 == count($array)){ 
            $query_string .= $value.'='.$tablename;
         }else{
            $query_string .= $value.'='.$tablename.",";
         }
        
    $x++;
    }
    $ask = User::find_by_sql("SELECT id FROM $dataDB WHERE rnumber='{$rnumber}' AND students_id='{$session->user_id}' AND department='{$department}' LIMIT 1");
    if($database->num_rows($ask)>0){
        while($row=$database->fetch_array($ask)){
            $user_id = $row['id'];
            $clear_query = User::find_by_sql(truncateRecord($user_id, $dataDB));
        }
            $query = User::find_by_sql("UPDATE $dataDB SET date=NOW(), students_id='{$session->user_id}', rnumber='{$rnumber}', offered='{$offered}',status=1, department='{$department}', $query_string");
            if($query){      echo "<script> alert('Successfully Updated your result!'); window.location='upload_result.php'; </script>"; }
        }else{
        $query = User::find_by_sql("INSERT INTO `$dataDB` SET date=NOW(), students_id='{$session->user_id}', rnumber='{$rnumber}', offered='{$offered}',status=1, department='{$department}', $query_string");
            if($query){      echo "<script> alert('Successfully Uploaded your result!'); window.location='upload_result.php'; </script>"; }
    }

} ?>
<?php
$result_type = explode_my_year();
$submit = array();
$offerd = "";
if(isset($_POST['proceed_ff'])){
    
    if(isset($_POST['cos101'])){ array_push($submit, $_POST['cos101']); if($offerd==""){ $offerd .=$_POST['cos101']; }else{ $offerd.="~".$_POST['cos101']; } }
    if(isset($_POST['mth111'])){ array_push($submit, $_POST['mth111']); if($offerd==""){ $offerd .=$_POST['mth111']; }else{ $offerd.="~".$_POST['mth111']; } }
    if(isset($_POST['mth121'])){ array_push($submit, $_POST['mth121']); if($offerd==""){ $offerd .=$_POST['mth121']; }else{ $offerd.="~".$_POST['mth121']; } }
    if(isset($_POST['phy115'])){ array_push($submit, $_POST['phy115']); if($offerd==""){ $offerd .=$_POST['phy115']; }else{ $offerd.="~".$_POST['phy115']; } }
    if(isset($_POST['phy191'])){ array_push($submit, $_POST['phy191']); if($offerd==""){ $offerd .=$_POST['phy191']; }else{ $offerd.="~".$_POST['phy191']; } }
    if(isset($_POST['phy121'])){ array_push($submit, $_POST['phy121']); if($offerd==""){ $offerd .=$_POST['phy121']; }else{ $offerd.="~".$_POST['phy121']; } }
    if(isset($_POST['sta111'])){ array_push($submit, $_POST['sta111']); if($offerd==""){ $offerd .=$_POST['sta111']; }else{ $offerd.="~".$_POST['sta111']; } }
    if(isset($_POST['sta131'])){ array_push($submit, $_POST['sta131']); if($offerd==""){ $offerd .=$_POST['sta131']; }else{ $offerd.="~".$_POST['sta131']; } }
    if(isset($_POST['gsp101'])){ array_push($submit, $_POST['gsp101']); if($offerd==""){ $offerd .=$_POST['gsp101']; }else{ $offerd.="~".$_POST['gsp101']; } }
    if(isset($_POST['gsp111'])){ array_push($submit, $_POST['gsp111']); if($offerd==""){ $offerd .=$_POST['gsp111']; }else{ $offerd.="~".$_POST['gsp111']; } }
    if(isset($_POST['chm101'])){ array_push($submit, $_POST['chm101']); if($offerd==""){ $offerd .=$_POST['chm101']; }else{ $offerd.="~".$_POST['chm101']; } }
    if(isset($_POST['bio151'])){ array_push($submit, $_POST['bio151']); if($offerd==""){ $offerd .=$_POST['bio151']; }else{ $offerd.="~".$_POST['bio151']; } }
    if(isset($_POST['engr101'])){ array_push($submit, $_POST['engr101']); if($offerd==""){ $offerd .=$_POST['engr101']; }else{ $offerd.="~".$_POST['engr101']; } }

    $_SESSION['submit'] = $submit;
    $_SESSION['offered'] =$offerd;
}
if(isset($_POST['proceed_fs'])){
    
    if(isset($_POST['cos102'])){ array_push($submit, $_POST['cos102']); if($offerd==""){ $offerd .=$_POST['cos102']; }else{ $offerd.="~".$_POST['cos101']; } }
    if(isset($_POST['cos104'])){ array_push($submit, $_POST['cos104']); if($offerd==""){ $offerd .=$_POST['cos104']; }else{ $offerd.="~".$_POST['cos104']; } }
    if(isset($_POST['mth122'])){ array_push($submit, $_POST['mth122']); if($offerd==""){ $offerd .=$_POST['mth122']; }else{ $offerd.="~".$_POST['mth122']; } }
    if(isset($_POST['mth132'])){ array_push($submit, $_POST['mth132']); if($offerd==""){ $offerd .=$_POST['mth132']; }else{ $offerd.="~".$_POST['mth132']; } }
    if(isset($_POST['phy116'])){ array_push($submit, $_POST['phy116']); if($offerd==""){ $offerd .=$_POST['phy116']; }else{ $offerd.="~".$_POST['phy116']; } }
    if(isset($_POST['phy118'])){ array_push($submit, $_POST['phy118']); if($offerd==""){ $offerd .=$_POST['phy118']; }else{ $offerd.="~".$_POST['phy118']; } }
    if(isset($_POST['phy122'])){ array_push($submit, $_POST['phy122']); if($offerd==""){ $offerd .=$_POST['phy122']; }else{ $offerd.="~".$_POST['phy122']; } }
    if(isset($_POST['sta112'])){ array_push($submit, $_POST['sta112']); if($offerd==""){ $offerd .=$_POST['sta112']; }else{ $offerd.="~".$_POST['sta112']; } }
    if(isset($_POST['sta132'])){ array_push($submit, $_POST['sta132']); if($offerd==""){ $offerd .=$_POST['sta132']; }else{ $offerd.="~".$_POST['sta132']; } }
    if(isset($_POST['sta172'])){ array_push($submit, $_POST['sta172']); if($offerd==""){ $offerd .=$_POST['sta172']; }else{ $offerd.="~".$_POST['sta172']; } }
    if(isset($_POST['gsp102'])){ array_push($submit, $_POST['gsp102']); if($offerd==""){ $offerd .=$_POST['gsp102']; }else{ $offerd.="~".$_POST['gsp102']; } }
    if(isset($_POST['chm111'])){ array_push($submit, $_POST['chm111']); if($offerd==""){ $offerd .=$_POST['chm111']; }else{ $offerd.="~".$_POST['chm111']; } }
    if(isset($_POST['bio152'])){ array_push($submit, $_POST['bio152']); if($offerd==""){ $offerd .=$_POST['bio152']; }else{ $offerd.="~".$_POST['bio152']; } }

    $_SESSION['submit'] = $submit;
    $_SESSION['offered'] =$offerd;
}
if(isset($_POST['proceed_sf'])){
    
    if(isset($_POST['cos201'])){ array_push($submit, $_POST['cos201']); if($offerd==""){ $offerd .=$_POST['cos201']; }else{ $offerd.="~".$_POST['cos201']; } }
    if(isset($_POST['cos251'])){ array_push($submit, $_POST['cos251']); if($offerd==""){ $offerd .=$_POST['cos251']; }else{ $offerd.="~".$_POST['cos251']; } }
    if(isset($_POST['mth211'])){ array_push($submit, $_POST['mth211']); if($offerd==""){ $offerd .=$_POST['mth211']; }else{ $offerd.="~".$_POST['mth211']; } }
    if(isset($_POST['mth215'])){ array_push($submit, $_POST['mth215']); if($offerd==""){ $offerd .=$_POST['mth215']; }else{ $offerd.="~".$_POST['mth215']; } }
    if(isset($_POST['mth221'])){ array_push($submit, $_POST['mth221']); if($offerd==""){ $offerd .=$_POST['mth221']; }else{ $offerd.="~".$_POST['mth221']; } }
    if(isset($_POST['mth207'])){ array_push($submit, $_POST['mth207']); if($offerd==""){ $offerd .=$_POST['mth207']; }else{ $offerd.="~".$_POST['mth207']; } }
    if(isset($_POST['sta205'])){ array_push($submit, $_POST['sta205']); if($offerd==""){ $offerd .=$_POST['sta205']; }else{ $offerd.="~".$_POST['sta205']; } }
    if(isset($_POST['sta211'])){ array_push($submit, $_POST['sta211']); if($offerd==""){ $offerd .=$_POST['sta211']; }else{ $offerd.="~".$_POST['sta211']; } }
    if(isset($_POST['sta231'])){ array_push($submit, $_POST['sta231']); if($offerd==""){ $offerd .=$_POST['sta231']; }else{ $offerd.="~".$_POST['sta231']; } }
    if(isset($_POST['gsp201'])){ array_push($submit, $_POST['gsp201']); if($offerd==""){ $offerd .=$_POST['gsp201']; }else{ $offerd.="~".$_POST['gsp201']; } }
    if(isset($_POST['gsp207'])){ array_push($submit, $_POST['gsp207']); if($offerd==""){ $offerd .=$_POST['gsp207']; }else{ $offerd.="~".$_POST['gsp207']; } }
    if(isset($_POST['eee211'])){ array_push($submit, $_POST['eee211']); if($offerd==""){ $offerd .=$_POST['eee211']; }else{ $offerd.="~".$_POST['eee211']; } }
    if(isset($_POST['phy211'])){ array_push($submit, $_POST['phy211']); if($offerd==""){ $offerd .=$_POST['phy211']; }else{ $offerd.="~".$_POST['phy211']; } }
    if(isset($_POST['phy221'])){ array_push($submit, $_POST['phy221']); if($offerd==""){ $offerd .=$_POST['phy221']; }else{ $offerd.="~".$_POST['phy221']; } }
    if(isset($_POST['phy241'])){ array_push($submit, $_POST['phy241']); if($offerd==""){ $offerd .=$_POST['phy241']; }else{ $offerd.="~".$_POST['phy241']; } }

    $_SESSION['submit'] = $submit;
    $_SESSION['offered'] =$offerd;
}
if(isset($_POST['proceed_ss'])){

    if(isset($_POST['cos202'])){ array_push($submit, $_POST['cos202']); if($offerd==""){ $offerd .=$_POST['cos202']; }else{ $offerd.="~".$_POST['cos202']; } }
    if(isset($_POST['cos222'])){ array_push($submit, $_POST['cos222']); if($offerd==""){ $offerd .=$_POST['cos222']; }else{ $offerd.="~".$_POST['cos222']; } }
    if(isset($_POST['sta206'])){ array_push($submit, $_POST['sta206']); if($offerd==""){ $offerd .=$_POST['sta206']; }else{ $offerd.="~".$_POST['sta206']; } }
    if(isset($_POST['sta212'])){ array_push($submit, $_POST['sta212']); if($offerd==""){ $offerd .=$_POST['sta212']; }else{ $offerd.="~".$_POST['sta212']; } }
    if(isset($_POST['sta272'])){ array_push($submit, $_POST['sta272']); if($offerd==""){ $offerd .=$_POST['sta272']; }else{ $offerd.="~".$_POST['sta272']; } }
    if(isset($_POST['gsp202'])){ array_push($submit, $_POST['gsp202']); if($offerd==""){ $offerd .=$_POST['gsp202']; }else{ $offerd.="~".$_POST['gsp202']; } }
    if(isset($_POST['gsp208'])){ array_push($submit, $_POST['gsp208']); if($offerd==""){ $offerd .=$_POST['gsp208']; }else{ $offerd.="~".$_POST['gsp208']; } }
    if(isset($_POST['mth216'])){ array_push($submit, $_POST['mth216']); if($offerd==""){ $offerd .=$_POST['mth216']; }else{ $offerd.="~".$_POST['mth216']; } }
    if(isset($_POST['mth222'])){ array_push($submit, $_POST['mth222']); if($offerd==""){ $offerd .=$_POST['mth222']; }else{ $offerd.="~".$_POST['mth222']; } }
    if(isset($_POST['mth242'])){ array_push($submit, $_POST['mth242']); if($offerd==""){ $offerd .=$_POST['mth242']; }else{ $offerd.="~".$_POST['mth242']; } }
    if(isset($_POST['mth206'])){ array_push($submit, $_POST['mth206']); if($offerd==""){ $offerd .=$_POST['mth206']; }else{ $offerd.="~".$_POST['mth206']; } }
    if(isset($_POST['mth223'])){ array_push($submit, $_POST['mth223']); if($offerd==""){ $offerd .=$_POST['mth223']; }else{ $offerd.="~".$_POST['mth223']; } }
    if(isset($_POST['phy262'])){ array_push($submit, $_POST['phy262']); if($offerd==""){ $offerd .=$_POST['phy262']; }else{ $offerd.="~".$_POST['phy262']; } }

    $_SESSION['submit'] = $submit;
    $_SESSION['offered'] =$offerd;
}
if(isset($_POST['proceed_tf'])){

    if(isset($_POST['cos301'])){ array_push($submit, $_POST['cos301']); if($offerd==""){ $offerd .=$_POST['cos301']; }else{ $offerd.="~".$_POST['cos301']; } }
    if(isset($_POST['cos303'])){ array_push($submit, $_POST['cos303']); if($offerd==""){ $offerd .=$_POST['cos303']; }else{ $offerd.="~".$_POST['cos303']; } }
    if(isset($_POST['cos311'])){ array_push($submit, $_POST['cos311']); if($offerd==""){ $offerd .=$_POST['cos311']; }else{ $offerd.="~".$_POST['cos311']; } }
    if(isset($_POST['cos331'])){ array_push($submit, $_POST['cos331']); if($offerd==""){ $offerd .=$_POST['cos331']; }else{ $offerd.="~".$_POST['cos331']; } }
    if(isset($_POST['cos333'])){ array_push($submit, $_POST['cos333']); if($offerd==""){ $offerd .=$_POST['cos333']; }else{ $offerd.="~".$_POST['cos333']; } }
    if(isset($_POST['cos341'])){ array_push($submit, $_POST['cos341']); if($offerd==""){ $offerd .=$_POST['cos341']; }else{ $offerd.="~".$_POST['cos341']; } }
    if(isset($_POST['cos315'])){ array_push($submit, $_POST['cos315']); if($offerd==""){ $offerd .=$_POST['cos315']; }else{ $offerd.="~".$_POST['cos315']; } }
    if(isset($_POST['cos321'])){ array_push($submit, $_POST['cos321']); if($offerd==""){ $offerd .=$_POST['cos321']; }else{ $offerd.="~".$_POST['cos321']; } }
    if(isset($_POST['cos335'])){ array_push($submit, $_POST['cos335']); if($offerd==""){ $offerd .=$_POST['cos335']; }else{ $offerd.="~".$_POST['cos335']; } }
    if(isset($_POST['cos313'])){ array_push($submit, $_POST['cos313']); if($offerd==""){ $offerd .=$_POST['cos313']; }else{ $offerd.="~".$_POST['cos313']; } }
    if(isset($_POST['cos314'])){ array_push($submit, $_POST['cos314']); if($offerd==""){ $offerd .=$_POST['cos314']; }else{ $offerd.="~".$_POST['cos314']; } }
    if(isset($_POST['cos312'])){ array_push($submit, $_POST['cos312']); if($offerd==""){ $offerd .=$_POST['cos312']; }else{ $offerd.="~".$_POST['cos312']; } }
    if(isset($_POST['cos352'])){ array_push($submit, $_POST['cos352']); if($offerd==""){ $offerd .=$_POST['cos352']; }else{ $offerd.="~".$_POST['cos352']; } }
    if(isset($_POST['cos332'])){ array_push($submit, $_POST['cos332']); if($offerd==""){ $offerd .=$_POST['cos332']; }else{ $offerd.="~".$_POST['cos332']; } }
    if(isset($_POST['ced341'])){ array_push($submit, $_POST['ced341']); if($offerd==""){ $offerd .=$_POST['ced341']; }else{ $offerd.="~".$_POST['ced341']; } }
    if(isset($_POST['ece311'])){ array_push($submit, $_POST['ece311']); if($offerd==""){ $offerd .=$_POST['ece311']; }else{ $offerd.="~".$_POST['ece311']; } }
    if(isset($_POST['ece321'])){ array_push($submit, $_POST['ece321']); if($offerd==""){ $offerd .=$_POST['ece321']; }else{ $offerd.="~".$_POST['ece321']; } }
    if(isset($_POST['phy301'])){ array_push($submit, $_POST['phy301']); if($offerd==""){ $offerd .=$_POST['phy301']; }else{ $offerd.="~".$_POST['phy301']; } }
    if(isset($_POST['phy321'])){ array_push($submit, $_POST['phy321']); if($offerd==""){ $offerd .=$_POST['phy321']; }else{ $offerd.="~".$_POST['phy321']; } }
    if(isset($_POST['phy351'])){ array_push($submit, $_POST['phy351']); if($offerd==""){ $offerd .=$_POST['phy351']; }else{ $offerd.="~".$_POST['phy351']; } }
    if(isset($_POST['phy393'])){ array_push($submit, $_POST['phy393']); if($offerd==""){ $offerd .=$_POST['phy393']; }else{ $offerd.="~".$_POST['phy393']; } }
    if(isset($_POST['phy334'])){ array_push($submit, $_POST['phy334']); if($offerd==""){ $offerd .=$_POST['phy334']; }else{ $offerd.="~".$_POST['phy334']; } }
    if(isset($_POST['phy391'])){ array_push($submit, $_POST['phy391']); if($offerd==""){ $offerd .=$_POST['phy391']; }else{ $offerd.="~".$_POST['phy391']; } }
    if(isset($_POST['mth341'])){ array_push($submit, $_POST['mth341']); if($offerd==""){ $offerd .=$_POST['mth341']; }else{ $offerd.="~".$_POST['mth341']; } }
    if(isset($_POST['mth311'])){ array_push($submit, $_POST['mth311']); if($offerd==""){ $offerd .=$_POST['mth311']; }else{ $offerd.="~".$_POST['mth311']; } }
    if(isset($_POST['mth322'])){ array_push($submit, $_POST['mth322']); if($offerd==""){ $offerd .=$_POST['mth322']; }else{ $offerd.="~".$_POST['mth322']; } }
    if(isset($_POST['mth332'])){ array_push($submit, $_POST['mth332']); if($offerd==""){ $offerd .=$_POST['mth332']; }else{ $offerd.="~".$_POST['mth332']; } }
    if(isset($_POST['mth331'])){ array_push($submit, $_POST['mth111']); if($offerd==""){ $offerd .=$_POST['mth111']; }else{ $offerd.="~".$_POST['mth111']; } }
    if(isset($_POST['mth321'])){ array_push($submit, $_POST['mth321']); if($offerd==""){ $offerd .=$_POST['mth321']; }else{ $offerd.="~".$_POST['mth321']; } }
    if(isset($_POST['phy115'])){ array_push($submit, $_POST['phy115']); if($offerd==""){ $offerd .=$_POST['phy115']; }else{ $offerd.="~".$_POST['phy115']; } }
    if(isset($_POST['mth334'])){ array_push($submit, $_POST['mth334']); if($offerd==""){ $offerd .=$_POST['mth334']; }else{ $offerd.="~".$_POST['mth334']; } }
    if(isset($_POST['sta311'])){ array_push($submit, $_POST['sta311']); if($offerd==""){ $offerd .=$_POST['sta311']; }else{ $offerd.="~".$_POST['sta311']; } }
    if(isset($_POST['sta321'])){ array_push($submit, $_POST['sta321']); if($offerd==""){ $offerd .=$_POST['sta321']; }else{ $offerd.="~".$_POST['sta321']; } }
    if(isset($_POST['sta331'])){ array_push($submit, $_POST['sta331']); if($offerd==""){ $offerd .=$_POST['sta331']; }else{ $offerd.="~".$_POST['sta331']; } }
    if(isset($_POST['sta341'])){ array_push($submit, $_POST['sta341']); if($offerd==""){ $offerd .=$_POST['sta341']; }else{ $offerd.="~".$_POST['sta341']; } }

    $_SESSION['submit'] = $submit;
    $_SESSION['offered'] =$offerd;
}

if(isset($_POST['proceed_ts'])){

    if(isset($_POST['cos352'])){ array_push($submit, $_POST['cos352']); if($offerd==""){ $offerd .=$_POST['cos352']; }else{ $offerd.="~".$_POST['cos352']; } }
    if(isset($_POST['cos372'])){ array_push($submit, $_POST['cos372']); if($offerd==""){ $offerd .=$_POST['cos372']; }else{ $offerd.="~".$_POST['cos372']; } }
    if(isset($_POST['cos374'])){ array_push($submit, $_POST['cos374']); if($offerd==""){ $offerd .=$_POST['cos374']; }else{ $offerd.="~".$_POST['cos374']; } }
    if(isset($_POST['cos314'])){ array_push($submit, $_POST['cos314']); if($offerd==""){ $offerd .=$_POST['cos314']; }else{ $offerd.="~".$_POST['cos314']; } }
    if(isset($_POST['cos316'])){ array_push($submit, $_POST['cos316']); if($offerd==""){ $offerd .=$_POST['cos316']; }else{ $offerd.="~".$_POST['cos316']; } }
    if(isset($_POST['cos322'])){ array_push($submit, $_POST['cos322']); if($offerd==""){ $offerd .=$_POST['cos322']; }else{ $offerd.="~".$_POST['cos322']; } }
    if(isset($_POST['cos334'])){ array_push($submit, $_POST['cos334']); if($offerd==""){ $offerd .=$_POST['cos334']; }else{ $offerd.="~".$_POST['cos334']; } }
    if(isset($_POST['cos342'])){ array_push($submit, $_POST['cos342']); if($offerd==""){ $offerd .=$_POST['cos342']; }else{ $offerd.="~".$_POST['cos342']; } }
    if(isset($_POST['ced342'])){ array_push($submit, $_POST['ced342']); if($offerd==""){ $offerd .=$_POST['ced342']; }else{ $offerd.="~".$_POST['ced342']; } }
    if(isset($_POST['ece312'])){ array_push($submit, $_POST['ece312']); if($offerd==""){ $offerd .=$_POST['ece312']; }else{ $offerd.="~".$_POST['ece312']; } }
    if(isset($_POST['ece332'])){ array_push($submit, $_POST['ece332']); if($offerd==""){ $offerd .=$_POST['ece332']; }else{ $offerd.="~".$_POST['ece332']; } }
    if(isset($_POST['mth342'])){ array_push($submit, $_POST['mth342']); if($offerd==""){ $offerd .=$_POST['mth342']; }else{ $offerd.="~".$_POST['mth342']; } }
    if(isset($_POST['mth312'])){ array_push($submit, $_POST['mth312']); if($offerd==""){ $offerd .=$_POST['mth312']; }else{ $offerd.="~".$_POST['mth312']; } }
    if(isset($_POST['mth326'])){ array_push($submit, $_POST['mth326']); if($offerd==""){ $offerd .=$_POST['mth326']; }else{ $offerd.="~".$_POST['mth326']; } }
    if(isset($_POST['mth333'])){ array_push($submit, $_POST['mth333']); if($offerd==""){ $offerd .=$_POST['mth333']; }else{ $offerd.="~".$_POST['mth333']; } }
    if(isset($_POST['mth335'])){ array_push($submit, $_POST['mth335']); if($offerd==""){ $offerd .=$_POST['mth335']; }else{ $offerd.="~".$_POST['mth335']; } }
    if(isset($_POST['phy302'])){ array_push($submit, $_POST['phy302']); if($offerd==""){ $offerd .=$_POST['phy302']; }else{ $offerd.="~".$_POST['phy302']; } }
    if(isset($_POST['phy361'])){ array_push($submit, $_POST['phy361']); if($offerd==""){ $offerd .=$_POST['phy361']; }else{ $offerd.="~".$_POST['phy361']; } }
    if(isset($_POST['phy381'])){ array_push($submit, $_POST['phy381']); if($offerd==""){ $offerd .=$_POST['phy381']; }else{ $offerd.="~".$_POST['phy381']; } }
    if(isset($_POST['phy394'])){ array_push($submit, $_POST['phy394']); if($offerd==""){ $offerd .=$_POST['phy394']; }else{ $offerd.="~".$_POST['phy394']; } }
    if(isset($_POST['phy395'])){ array_push($submit, $_POST['phy395']); if($offerd==""){ $offerd .=$_POST['phy395']; }else{ $offerd.="~".$_POST['phy395']; } }
    if(isset($_POST['sta312'])){ array_push($submit, $_POST['sta312']); if($offerd==""){ $offerd .=$_POST['sta312']; }else{ $offerd.="~".$_POST['sta312']; } }
    if(isset($_POST['sta323'])){ array_push($submit, $_POST['sta323']); if($offerd==""){ $offerd .=$_POST['sta323']; }else{ $offerd.="~".$_POST['sta323']; } }
    if(isset($_POST['sta332'])){ array_push($submit, $_POST['sta332']); if($offerd==""){ $offerd .=$_POST['sta332']; }else{ $offerd.="~".$_POST['sta332']; } }
    if(isset($_POST['sta342'])){ array_push($submit, $_POST['sta342']); if($offerd==""){ $offerd .=$_POST['sta342']; }else{ $offerd.="~".$_POST['sta342']; } }
    if(isset($_POST['sta343'])){ array_push($submit, $_POST['mth111']); if($offerd==""){ $offerd .=$_POST['mth111']; }else{ $offerd.="~".$_POST['mth111']; } }

    $_SESSION['submit'] = $submit;
    $_SESSION['offered'] =$offerd;
}

if(isset($_POST['proceed_final_f'])){

    if(isset($_POST['cos451'])){ array_push($submit, $_POST['cos451']); if($offerd==""){ $offerd .=$_POST['cos451']; }else{ $offerd.="~".$_POST['cos451']; } }
    if(isset($_POST['cos461'])){ array_push($submit, $_POST['cos461']); if($offerd==""){ $offerd .=$_POST['cos461']; }else{ $offerd.="~".$_POST['cos461']; } }
    if(isset($_POST['cos471'])){ array_push($submit, $_POST['cos471']); if($offerd==""){ $offerd .=$_POST['cos471']; }else{ $offerd.="~".$_POST['cos471']; } }
    if(isset($_POST['cos411'])){ array_push($submit, $_POST['cos411']); if($offerd==""){ $offerd .=$_POST['cos411']; }else{ $offerd.="~".$_POST['cos411']; } }
    if(isset($_POST['cos415'])){ array_push($submit, $_POST['cos415']); if($offerd==""){ $offerd .=$_POST['cos415']; }else{ $offerd.="~".$_POST['cos415']; } }
    if(isset($_POST['cos413'])){ array_push($submit, $_POST['cos413']); if($offerd==""){ $offerd .=$_POST['cos413']; }else{ $offerd.="~".$_POST['cos413']; } }
    if(isset($_POST['cos431'])){ array_push($submit, $_POST['cos431']); if($offerd==""){ $offerd .=$_POST['cos431']; }else{ $offerd.="~".$_POST['cos431']; } }
    if(isset($_POST['cos453'])){ array_push($submit, $_POST['cos453']); if($offerd==""){ $offerd .=$_POST['cos453']; }else{ $offerd.="~".$_POST['cos453']; } }
    if(isset($_POST['cos455'])){ array_push($submit, $_POST['cos455']); if($offerd==""){ $offerd .=$_POST['cos455']; }else{ $offerd.="~".$_POST['cos455']; } }
    if(isset($_POST['cos457'])){ array_push($submit, $_POST['cos457']); if($offerd==""){ $offerd .=$_POST['cos457']; }else{ $offerd.="~".$_POST['cos457']; } }
    if(isset($_POST['cos472'])){ array_push($submit, $_POST['cos472']); if($offerd==""){ $offerd .=$_POST['cos472']; }else{ $offerd.="~".$_POST['cos472']; } }
    if(isset($_POST['mth451'])){ array_push($submit, $_POST['mth451']); if($offerd==""){ $offerd .=$_POST['mth451']; }else{ $offerd.="~".$_POST['mth451']; } }
    if(isset($_POST['mth421'])){ array_push($submit, $_POST['mth421']); if($offerd==""){ $offerd .=$_POST['mth421']; }else{ $offerd.="~".$_POST['mth421']; } }
    if(isset($_POST['mth422'])){ array_push($submit, $_POST['mth422']); if($offerd==""){ $offerd .=$_POST['mth422']; }else{ $offerd.="~".$_POST['mth422']; } }
    if(isset($_POST['mth425'])){ array_push($submit, $_POST['mth425']); if($offerd==""){ $offerd .=$_POST['mth425']; }else{ $offerd.="~".$_POST['mth425']; } }
    if(isset($_POST['phy463'])){ array_push($submit, $_POST['phy463']); if($offerd==""){ $offerd .=$_POST['phy463']; }else{ $offerd.="~".$_POST['phy463']; } }
    if(isset($_POST['phy401'])){ array_push($submit, $_POST['phy401']); if($offerd==""){ $offerd .=$_POST['phy401']; }else{ $offerd.="~".$_POST['phy401']; } }
    if(isset($_POST['phy402'])){ array_push($submit, $_POST['phy402']); if($offerd==""){ $offerd .=$_POST['phy402']; }else{ $offerd.="~".$_POST['phy402']; } }
    if(isset($_POST['phy421'])){ array_push($submit, $_POST['phy421']); if($offerd==""){ $offerd .=$_POST['phy421']; }else{ $offerd.="~".$_POST['phy421']; } }
    if(isset($_POST['phy451'])){ array_push($submit, $_POST['phy451']); if($offerd==""){ $offerd .=$_POST['phy451']; }else{ $offerd.="~".$_POST['phy451']; } }
    if(isset($_POST['phy461'])){ array_push($submit, $_POST['phy461']); if($offerd==""){ $offerd .=$_POST['phy461']; }else{ $offerd.="~".$_POST['phy461']; } }
    if(isset($_POST['sta491'])){ array_push($submit, $_POST['sta491']); if($offerd==""){ $offerd .=$_POST['sta491']; }else{ $offerd.="~".$_POST['sta491']; } }
    if(isset($_POST['sta412'])){ array_push($submit, $_POST['sta412']); if($offerd==""){ $offerd .=$_POST['sta412']; }else{ $offerd.="~".$_POST['sta412']; } }
    if(isset($_POST['sta421'])){ array_push($submit, $_POST['sta421']); if($offerd==""){ $offerd .=$_POST['sta421']; }else{ $offerd.="~".$_POST['sta421']; } }
    if(isset($_POST['sta425'])){ array_push($submit, $_POST['sta425']); if($offerd==""){ $offerd .=$_POST['sta425']; }else{ $offerd.="~".$_POST['sta425']; } }
    if(isset($_POST['sta432'])){ array_push($submit, $_POST['sta432']); if($offerd==""){ $offerd .=$_POST['sta432']; }else{ $offerd.="~".$_POST['sta432']; } }
    if(isset($_POST['sta433'])){ array_push($submit, $_POST['sta433']); if($offerd==""){ $offerd .=$_POST['sta433']; }else{ $offerd.="~".$_POST['sta433']; } }
    if(isset($_POST['sta441'])){ array_push($submit, $_POST['sta441']); if($offerd==""){ $offerd .=$_POST['sta441']; }else{ $offerd.="~".$_POST['sta441']; } }

    $_SESSION['submit'] = $submit;
    $_SESSION['offered'] =$offerd;
}

if(isset($_POST['proceed_final_s'])){

    if(isset($_POST['cos452'])){ array_push($submit, $_POST['cos452']); if($offerd==""){ $offerd .=$_POST['cos452']; }else{ $offerd.="~".$_POST['cos452']; } }
    if(isset($_POST['cos462'])){ array_push($submit, $_POST['cos462']); if($offerd==""){ $offerd .=$_POST['cos462']; }else{ $offerd.="~".$_POST['cos462']; } }
    if(isset($_POST['cos432'])){ array_push($submit, $_POST['cos432']); if($offerd==""){ $offerd .=$_POST['cos432']; }else{ $offerd.="~".$_POST['cos432']; } }
    if(isset($_POST['cos454'])){ array_push($submit, $_POST['cos454']); if($offerd==""){ $offerd .=$_POST['cos454']; }else{ $offerd.="~".$_POST['cos454']; } }
    if(isset($_POST['cos414'])){ array_push($submit, $_POST['cos414']); if($offerd==""){ $offerd .=$_POST['cos414']; }else{ $offerd.="~".$_POST['cos414']; } }
    if(isset($_POST['cos412'])){ array_push($submit, $_POST['cos412']); if($offerd==""){ $offerd .=$_POST['cos412']; }else{ $offerd.="~".$_POST['cos412']; } }
    if(isset($_POST['cos458'])){ array_push($submit, $_POST['cos458']); if($offerd==""){ $offerd .=$_POST['cos458']; }else{ $offerd.="~".$_POST['cos458']; } }
    if(isset($_POST['cos464'])){ array_push($submit, $_POST['cos464']); if($offerd==""){ $offerd .=$_POST['cos464']; }else{ $offerd.="~".$_POST['cos464']; } }
    if(isset($_POST['cos472'])){ array_push($submit, $_POST['cos472']); if($offerd==""){ $offerd .=$_POST['cos472']; }else{ $offerd.="~".$_POST['cos472']; } }
    if(isset($_POST['cos456'])){ array_push($submit, $_POST['cos456']); if($offerd==""){ $offerd .=$_POST['cos456']; }else{ $offerd.="~".$_POST['cos456']; } }
    if(isset($_POST['sta414'])){ array_push($submit, $_POST['sta414']); if($offerd==""){ $offerd .=$_POST['sta414']; }else{ $offerd.="~".$_POST['sta414']; } }
    if(isset($_POST['sta422'])){ array_push($submit, $_POST['sta422']); if($offerd==""){ $offerd .=$_POST['sta422']; }else{ $offerd.="~".$_POST['sta422']; } }
    if(isset($_POST['sta436'])){ array_push($submit, $_POST['sta436']); if($offerd==""){ $offerd .=$_POST['sta436']; }else{ $offerd.="~".$_POST['sta436']; } }
    if(isset($_POST['sta434'])){ array_push($submit, $_POST['sta434']); if($offerd==""){ $offerd .=$_POST['sta434']; }else{ $offerd.="~".$_POST['sta434']; } }
    if(isset($_POST['sta442'])){ array_push($submit, $_POST['sta442']); if($offerd==""){ $offerd .=$_POST['sta442']; }else{ $offerd.="~".$_POST['sta442']; } }
    if(isset($_POST['mth423'])){ array_push($submit, $_POST['mth423']); if($offerd==""){ $offerd .=$_POST['mth423']; }else{ $offerd.="~".$_POST['mth423']; } }
    if(isset($_POST['mth411'])){ array_push($submit, $_POST['mth411']); if($offerd==""){ $offerd .=$_POST['mth411']; }else{ $offerd.="~".$_POST['mth411']; } }
    if(isset($_POST['mth424'])){ array_push($submit, $_POST['mth424']); if($offerd==""){ $offerd .=$_POST['mth424']; }else{ $offerd.="~".$_POST['mth424']; } }
    if(isset($_POST['mth426'])){ array_push($submit, $_POST['mth426']); if($offerd==""){ $offerd .=$_POST['mth426']; }else{ $offerd.="~".$_POST['mth426']; } }
    if(isset($_POST['phy411'])){ array_push($submit, $_POST['phy411']); if($offerd==""){ $offerd .=$_POST['phy411']; }else{ $offerd.="~".$_POST['phy411']; } }
    if(isset($_POST['phy431'])){ array_push($submit, $_POST['phy431']); if($offerd==""){ $offerd .=$_POST['phy431']; }else{ $offerd.="~".$_POST['phy431']; } }
    if(isset($_POST['phy462'])){ array_push($submit, $_POST['phy462']); if($offerd==""){ $offerd .=$_POST['phy462']; }else{ $offerd.="~".$_POST['phy462']; } }
    if(isset($_POST['phy492'])){ array_push($submit, $_POST['phy492']); if($offerd==""){ $offerd .=$_POST['phy492']; }else{ $offerd.="~".$_POST['phy492']; } }

    $_SESSION['submit'] = $submit;
    $_SESSION['offered'] =$offerd;
}
?>
<!-- Header -->
<?php include('includes/header.php'); ?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include('includes/navigation.php'); ?>


        <!-- Page Content -->
        <div id="page-wrapper" class="nacoss-form nacoss-new-discuss nacoss-upload">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 class="page-header">Upload your result</h1>
                               
                        <div class="container" class="nacoss-new-discuss">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-1">
                                    <div class="result-panel panel panel-default">
                                        

                                        <div class="panel-heading">
                                            <h3 class="panel-title">Upload Results Here </h3>
                                        </div>
                                        <div class="panel-body">
                                            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" role="form" enctype="multipart/form-data">
                                                <fieldset>
                                                    <div class="column">
                                                        <div class="col-md-8 col-sm-12" >
                                                            <label>LIST OF COURSES</label>
                                                        </div>
                                                        <div class="form-group col-md-4 col-sm-12">
                                                            <label>GRADE</label>
                                                        </div>
                                                    </div>
                                                    <br><hr>
                                                    
                                                    
                                                    
                                                    <div class="column">
<?php
$count = 0;
while($count < count($submit)){
?>
                                                        <div class="col-sm-6">
                                                            <label style="float:left;"><?php echo checkCourseTitle_old($submit[$count]) ?></label>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <select name="<?php echo $submit[$count] ?>" class="form-control" >
                                                                <option value="">Select Grade</option>
                                                                <option value="A">A</option>
                                                                <option value="B">B</option>
                                                                <option value="C">C</option>
                                                                <option value="D">D</option>
                                                                <option value="F">F</option>
                                                            </select>
                                                        </div>
<?php $count++; } ?>
                                                    </div>
                                                    
                                                    
                                                    
                                                    <div class="col-md-6 col-md-offset-3">
                                                    <button class="nacoss-btn" name="upload">Upload/Update Result</button>
                                                    </div>
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Footer -->
    <?php include('includes/footer.php'); ?>