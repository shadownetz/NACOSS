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
    
    if(isset($_POST['cos103'])){ array_push($submit, $_POST['cos103']); if($offerd==""){ $offerd .=$_POST['cos103']; }else{ $offerd.="~".$_POST['cos103']; } }
    if(isset($_POST['cos105'])){ array_push($submit, $_POST['cos105']); if($offerd==""){ $offerd .=$_POST['cos105']; }else{ $offerd.="~".$_POST['cos105']; } }
    if(isset($_POST['mth111'])){ array_push($submit, $_POST['mth111']); if($offerd==""){ $offerd .=$_POST['mth111']; }else{ $offerd.="~".$_POST['mth111']; } }
    if(isset($_POST['mth121'])){ array_push($submit, $_POST['mth121']); if($offerd==""){ $offerd .=$_POST['mth121']; }else{ $offerd.="~".$_POST['mth121']; } }
    if(isset($_POST['phy107'])){ array_push($submit, $_POST['phy107']); if($offerd==""){ $offerd .=$_POST['phy107']; }else{ $offerd.="~".$_POST['phy107']; } }
    if(isset($_POST['phy115'])){ array_push($submit, $_POST['phy115']); if($offerd==""){ $offerd .=$_POST['phy115']; }else{ $offerd.="~".$_POST['phy115']; } }
    if(isset($_POST['sta111'])){ array_push($submit, $_POST['sta111']); if($offerd==""){ $offerd .=$_POST['sta111']; }else{ $offerd.="~".$_POST['sta111']; } }
    if(isset($_POST['sta131'])){ array_push($submit, $_POST['sta131']); if($offerd==""){ $offerd .=$_POST['sta131']; }else{ $offerd.="~".$_POST['sta131']; } }
    if(isset($_POST['gsp101'])){ array_push($submit, $_POST['gsp101']); if($offerd==""){ $offerd .=$_POST['gsp101']; }else{ $offerd.="~".$_POST['gsp101']; } }
    if(isset($_POST['gsp111'])){ array_push($submit, $_POST['gsp111']); if($offerd==""){ $offerd .=$_POST['gsp111']; }else{ $offerd.="~".$_POST['gsp111']; } }
    if(isset($_POST['chm101'])){ array_push($submit, $_POST['chm101']); if($offerd==""){ $offerd .=$_POST['chm101']; }else{ $offerd.="~".$_POST['chm101']; } }
    
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
    if(isset($_POST['phy124'])){ array_push($submit, $_POST['phy124']); if($offerd==""){ $offerd .=$_POST['phy124']; }else{ $offerd.="~".$_POST['phy124']; } }
    if(isset($_POST['phy196'])){ array_push($submit, $_POST['phy196']); if($offerd==""){ $offerd .=$_POST['phy196']; }else{ $offerd.="~".$_POST['phy196']; } }
    if(isset($_POST['chm112'])){ array_push($submit, $_POST['chm112']); if($offerd==""){ $offerd .=$_POST['chm112']; }else{ $offerd.="~".$_POST['chm112']; } }    
    if(isset($_POST['sta112'])){ array_push($submit, $_POST['sta112']); if($offerd==""){ $offerd .=$_POST['sta112']; }else{ $offerd.="~".$_POST['sta112']; } }
    if(isset($_POST['sta132'])){ array_push($submit, $_POST['sta132']); if($offerd==""){ $offerd .=$_POST['sta132']; }else{ $offerd.="~".$_POST['sta132']; } }
    if(isset($_POST['sta172'])){ array_push($submit, $_POST['sta172']); if($offerd==""){ $offerd .=$_POST['sta172']; }else{ $offerd.="~".$_POST['sta172']; } }
    if(isset($_POST['gsp102'])){ array_push($submit, $_POST['gsp102']); if($offerd==""){ $offerd .=$_POST['gsp102']; }else{ $offerd.="~".$_POST['gsp102']; } }
   
    $_SESSION['submit'] = $submit;
    $_SESSION['offered'] =$offerd;
}
if(isset($_POST['proceed_sf'])){
    
    if(isset($_POST['cos201'])){ array_push($submit, $_POST['cos201']); if($offerd==""){ $offerd .=$_POST['cos201']; }else{ $offerd.="~".$_POST['cos201']; } }
    if(isset($_POST['cos203'])){ array_push($submit, $_POST['cos203']); if($offerd==""){ $offerd .=$_POST['cos203']; }else{ $offerd.="~".$_POST['cos203']; } }
    if(isset($_POST['cos231'])){ array_push($submit, $_POST['cos231']); if($offerd==""){ $offerd .=$_POST['cos231']; }else{ $offerd.="~".$_POST['cos231']; } }
    if(isset($_POST['mth211'])){ array_push($submit, $_POST['mth211']); if($offerd==""){ $offerd .=$_POST['mth211']; }else{ $offerd.="~".$_POST['mth211']; } }
    if(isset($_POST['mth215'])){ array_push($submit, $_POST['mth215']); if($offerd==""){ $offerd .=$_POST['mth215']; }else{ $offerd.="~".$_POST['mth215']; } }
    if(isset($_POST['mth221'])){ array_push($submit, $_POST['mth221']); if($offerd==""){ $offerd .=$_POST['mth221']; }else{ $offerd.="~".$_POST['mth221']; } }
    if(isset($_POST['mth311'])){ array_push($submit, $_POST['mth311']); if($offerd==""){ $offerd .=$_POST['mth311']; }else{ $offerd.="~".$_POST['mth311']; } }
    if(isset($_POST['mth207'])){ array_push($submit, $_POST['mth207']); if($offerd==""){ $offerd .=$_POST['mth207']; }else{ $offerd.="~".$_POST['mth207']; } }
    if(isset($_POST['sta205'])){ array_push($submit, $_POST['sta205']); if($offerd==""){ $offerd .=$_POST['sta205']; }else{ $offerd.="~".$_POST['sta205']; } }
    if(isset($_POST['sta211'])){ array_push($submit, $_POST['sta211']); if($offerd==""){ $offerd .=$_POST['sta211']; }else{ $offerd.="~".$_POST['sta211']; } }
    if(isset($_POST['sta231'])){ array_push($submit, $_POST['sta231']); if($offerd==""){ $offerd .=$_POST['sta231']; }else{ $offerd.="~".$_POST['sta231']; } }
    if(isset($_POST['gsp201'])){ array_push($submit, $_POST['gsp201']); if($offerd==""){ $offerd .=$_POST['gsp201']; }else{ $offerd.="~".$_POST['gsp201']; } }
    if(isset($_POST['gsp207'])){ array_push($submit, $_POST['gsp207']); if($offerd==""){ $offerd .=$_POST['gsp207']; }else{ $offerd.="~".$_POST['gsp207']; } }
    if(isset($_POST['eee211'])){ array_push($submit, $_POST['eee211']); if($offerd==""){ $offerd .=$_POST['eee211']; }else{ $offerd.="~".$_POST['eee211']; } }
    if(isset($_POST['phy211'])){ array_push($submit, $_POST['phy211']); if($offerd==""){ $offerd .=$_POST['phy211']; }else{ $offerd.="~".$_POST['phy211']; } }
    if(isset($_POST['phy221'])){ array_push($submit, $_POST['phy221']); if($offerd==""){ $offerd .=$_POST['phy221']; }else{ $offerd.="~".$_POST['phy221']; } }
    
    $_SESSION['submit'] = $submit;
    $_SESSION['offered'] =$offerd;
}
if(isset($_POST['proceed_ss'])){

    if(isset($_POST['cos202'])){ array_push($submit, $_POST['cos202']); if($offerd==""){ $offerd .=$_POST['cos202']; }else{ $offerd.="~".$_POST['cos202']; } }
    if(isset($_POST['cos204'])){ array_push($submit, $_POST['cos204']); if($offerd==""){ $offerd .=$_POST['cos204']; }else{ $offerd.="~".$_POST['cos204']; } }
    if(isset($_POST['cos232'])){ array_push($submit, $_POST['cos232']); if($offerd==""){ $offerd .=$_POST['cos232']; }else{ $offerd.="~".$_POST['cos232']; } }
    if(isset($_POST['cos242'])){ array_push($submit, $_POST['cos242']); if($offerd==""){ $offerd .=$_POST['cos242']; }else{ $offerd.="~".$_POST['cos242']; } }
    if(isset($_POST['sta206'])){ array_push($submit, $_POST['sta206']); if($offerd==""){ $offerd .=$_POST['sta206']; }else{ $offerd.="~".$_POST['sta206']; } }
    if(isset($_POST['sta212'])){ array_push($submit, $_POST['sta212']); if($offerd==""){ $offerd .=$_POST['sta212']; }else{ $offerd.="~".$_POST['sta212']; } }
    if(isset($_POST['sta272'])){ array_push($submit, $_POST['sta272']); if($offerd==""){ $offerd .=$_POST['sta272']; }else{ $offerd.="~".$_POST['sta272']; } }
    if(isset($_POST['gsp202'])){ array_push($submit, $_POST['gsp202']); if($offerd==""){ $offerd .=$_POST['gsp202']; }else{ $offerd.="~".$_POST['gsp202']; } }
    if(isset($_POST['gsp208'])){ array_push($submit, $_POST['gsp208']); if($offerd==""){ $offerd .=$_POST['gsp208']; }else{ $offerd.="~".$_POST['gsp208']; } }
    if(isset($_POST['mth216'])){ array_push($submit, $_POST['mth216']); if($offerd==""){ $offerd .=$_POST['mth216']; }else{ $offerd.="~".$_POST['mth216']; } }
    if(isset($_POST['mth222'])){ array_push($submit, $_POST['mth222']); if($offerd==""){ $offerd .=$_POST['mth222']; }else{ $offerd.="~".$_POST['mth222']; } }
    if(isset($_POST['mth242'])){ array_push($submit, $_POST['mth242']); if($offerd==""){ $offerd .=$_POST['mth242']; }else{ $offerd.="~".$_POST['mth242']; } }
    if(isset($_POST['mth206'])){ array_push($submit, $_POST['mth206']); if($offerd==""){ $offerd .=$_POST['mth206']; }else{ $offerd.="~".$_POST['mth206']; } }
    if(isset($_POST['phy242'])){ array_push($submit, $_POST['phy242']); if($offerd==""){ $offerd .=$_POST['phy242']; }else{ $offerd.="~".$_POST['phy242']; } }
    if(isset($_POST['phy262'])){ array_push($submit, $_POST['phy262']); if($offerd==""){ $offerd .=$_POST['phy262']; }else{ $offerd.="~".$_POST['phy262']; } }

    $_SESSION['submit'] = $submit;
    $_SESSION['offered'] =$offerd;
}
if(isset($_POST['proceed_tf'])){

    if(isset($_POST['cos311'])){ array_push($submit, $_POST['cos311']); if($offerd==""){ $offerd .=$_POST['cos311']; }else{ $offerd.="~".$_POST['cos311']; } }
    if(isset($_POST['cos331'])){ array_push($submit, $_POST['cos331']); if($offerd==""){ $offerd .=$_POST['cos331']; }else{ $offerd.="~".$_POST['cos331']; } }
    if(isset($_POST['cos333'])){ array_push($submit, $_POST['cos333']); if($offerd==""){ $offerd .=$_POST['cos333']; }else{ $offerd.="~".$_POST['cos333']; } }
    if(isset($_POST['cos335'])){ array_push($submit, $_POST['cos335']); if($offerd==""){ $offerd .=$_POST['cos335']; }else{ $offerd.="~".$_POST['cos335']; } }
    if(isset($_POST['cos337'])){ array_push($submit, $_POST['cos337']); if($offerd==""){ $offerd .=$_POST['cos337']; }else{ $offerd.="~".$_POST['cos337']; } }
    if(isset($_POST['cos351'])){ array_push($submit, $_POST['cos351']); if($offerd==""){ $offerd .=$_POST['cos351']; }else{ $offerd.="~".$_POST['cos351']; } }
    if(isset($_POST['cos341'])){ array_push($submit, $_POST['cos341']); if($offerd==""){ $offerd .=$_POST['cos341']; }else{ $offerd.="~".$_POST['cos341']; } }
    if(isset($_POST['ced341'])){ array_push($submit, $_POST['ced341']); if($offerd==""){ $offerd .=$_POST['ced341']; }else{ $offerd.="~".$_POST['ced341']; } }
    if(isset($_POST['phy301'])){ array_push($submit, $_POST['phy301']); if($offerd==""){ $offerd .=$_POST['phy301']; }else{ $offerd.="~".$_POST['phy301']; } }
    if(isset($_POST['phy321'])){ array_push($submit, $_POST['phy321']); if($offerd==""){ $offerd .=$_POST['phy321']; }else{ $offerd.="~".$_POST['phy321']; } }
    if(isset($_POST['phy351'])){ array_push($submit, $_POST['phy351']); if($offerd==""){ $offerd .=$_POST['phy351']; }else{ $offerd.="~".$_POST['phy351']; } }
    if(isset($_POST['phy393'])){ array_push($submit, $_POST['phy393']); if($offerd==""){ $offerd .=$_POST['phy393']; }else{ $offerd.="~".$_POST['phy393']; } }
    if(isset($_POST['phy331'])){ array_push($submit, $_POST['phy331']); if($offerd==""){ $offerd .=$_POST['phy331']; }else{ $offerd.="~".$_POST['phy331']; } }
    if(isset($_POST['mth327'])){ array_push($submit, $_POST['mth327']); if($offerd==""){ $offerd .=$_POST['mth327']; }else{ $offerd.="~".$_POST['mth327']; } }
    if(isset($_POST['mth331'])){ array_push($submit, $_POST['mth331']); if($offerd==""){ $offerd .=$_POST['mth331']; }else{ $offerd.="~".$_POST['mth331']; } }
    if(isset($_POST['mth321'])){ array_push($submit, $_POST['mth321']); if($offerd==""){ $offerd .=$_POST['mth321']; }else{ $offerd.="~".$_POST['mth321']; } }
    if(isset($_POST['mth337'])){ array_push($submit, $_POST['mth337']); if($offerd==""){ $offerd .=$_POST['mth337']; }else{ $offerd.="~".$_POST['mth337']; } }
    if(isset($_POST['mth339'])){ array_push($submit, $_POST['mth339']); if($offerd==""){ $offerd .=$_POST['mth339']; }else{ $offerd.="~".$_POST['mth339']; } }
    if(isset($_POST['sta311'])){ array_push($submit, $_POST['sta311']); if($offerd==""){ $offerd .=$_POST['sta311']; }else{ $offerd.="~".$_POST['sta311']; } }
    if(isset($_POST['sta321'])){ array_push($submit, $_POST['sta321']); if($offerd==""){ $offerd .=$_POST['sta321']; }else{ $offerd.="~".$_POST['sta321']; } }
    if(isset($_POST['sta331'])){ array_push($submit, $_POST['sta331']); if($offerd==""){ $offerd .=$_POST['sta331']; }else{ $offerd.="~".$_POST['sta331']; } }
    
    $_SESSION['submit'] = $submit;
    $_SESSION['offered'] =$offerd;
}

if(isset($_POST['proceed_ts'])){

    if(isset($_POST['cos382'])){ array_push($submit, $_POST['cos382']); if($offerd==""){ $offerd .=$_POST['cos382']; }else{ $offerd.="~".$_POST['cos382']; } }
    if(isset($_POST['cos384'])){ array_push($submit, $_POST['cos384']); if($offerd==""){ $offerd .=$_POST['cos384']; }else{ $offerd.="~".$_POST['cos384']; } }
    if(isset($_POST['cos386'])){ array_push($submit, $_POST['cos386']); if($offerd==""){ $offerd .=$_POST['cos386']; }else{ $offerd.="~".$_POST['cos386']; } }
    
    $_SESSION['submit'] = $submit;
    $_SESSION['offered'] =$offerd;
}

if(isset($_POST['proceed_final_f'])){

    if(isset($_POST['cos417'])){ array_push($submit, $_POST['cos417']); if($offerd==""){ $offerd .=$_POST['cos417']; }else{ $offerd.="~".$_POST['cos417']; } }
    if(isset($_POST['cos419'])){ array_push($submit, $_POST['cos419']); if($offerd==""){ $offerd .=$_POST['cos419']; }else{ $offerd.="~".$_POST['cos419']; } }
    if(isset($_POST['cos421'])){ array_push($submit, $_POST['cos421']); if($offerd==""){ $offerd .=$_POST['cos421']; }else{ $offerd.="~".$_POST['cos421']; } }
    if(isset($_POST['cos431'])){ array_push($submit, $_POST['cos431']); if($offerd==""){ $offerd .=$_POST['cos431']; }else{ $offerd.="~".$_POST['cos431']; } }
    if(isset($_POST['cos435'])){ array_push($submit, $_POST['cos435']); if($offerd==""){ $offerd .=$_POST['cos435']; }else{ $offerd.="~".$_POST['cos435']; } }
    if(isset($_POST['cos441'])){ array_push($submit, $_POST['cos441']); if($offerd==""){ $offerd .=$_POST['cos441']; }else{ $offerd.="~".$_POST['cos441']; } }
    if(isset($_POST['cos463'])){ array_push($submit, $_POST['cos463']); if($offerd==""){ $offerd .=$_POST['cos463']; }else{ $offerd.="~".$_POST['cos463']; } }
    if(isset($_POST['cos411'])){ array_push($submit, $_POST['cos411']); if($offerd==""){ $offerd .=$_POST['cos411']; }else{ $offerd.="~".$_POST['cos411']; } }
    if(isset($_POST['cos413'])){ array_push($submit, $_POST['cos413']); if($offerd==""){ $offerd .=$_POST['cos413']; }else{ $offerd.="~".$_POST['cos413']; } }
    if(isset($_POST['cos415'])){ array_push($submit, $_POST['cos415']); if($offerd==""){ $offerd .=$_POST['cos415']; }else{ $offerd.="~".$_POST['cos415']; } }
    if(isset($_POST['cos437'])){ array_push($submit, $_POST['cos437']); if($offerd==""){ $offerd .=$_POST['cos437']; }else{ $offerd.="~".$_POST['cos437']; } }
    if(isset($_POST['cos439'])){ array_push($submit, $_POST['cos439']); if($offerd==""){ $offerd .=$_POST['cos439']; }else{ $offerd.="~".$_POST['cos101']; } }
    if(isset($_POST['cos461'])){ array_push($submit, $_POST['cos461']); if($offerd==""){ $offerd .=$_POST['cos461']; }else{ $offerd.="~".$_POST['cos461']; } }
    if(isset($_POST['cos471'])){ array_push($submit, $_POST['cos471']); if($offerd==""){ $offerd .=$_POST['cos471']; }else{ $offerd.="~".$_POST['cos471']; } }
    if(isset($_POST['sta411'])){ array_push($submit, $_POST['sta411']); if($offerd==""){ $offerd .=$_POST['sta411']; }else{ $offerd.="~".$_POST['sta411']; } }
    if(isset($_POST['sta413'])){ array_push($submit, $_POST['sta413']); if($offerd==""){ $offerd .=$_POST['sta413']; }else{ $offerd.="~".$_POST['sta413']; } }
    if(isset($_POST['sta415'])){ array_push($submit, $_POST['sta415']); if($offerd==""){ $offerd .=$_POST['sta415']; }else{ $offerd.="~".$_POST['sta415']; } }
    if(isset($_POST['sta421'])){ array_push($submit, $_POST['sta421']); if($offerd==""){ $offerd .=$_POST['sta421']; }else{ $offerd.="~".$_POST['sta421']; } }
    if(isset($_POST['sta423'])){ array_push($submit, $_POST['sta423']); if($offerd==""){ $offerd .=$_POST['sta423']; }else{ $offerd.="~".$_POST['sta423']; } }
    if(isset($_POST['sta433'])){ array_push($submit, $_POST['sta433']); if($offerd==""){ $offerd .=$_POST['sta433']; }else{ $offerd.="~".$_POST['sta433']; } }
    if(isset($_POST['sta435'])){ array_push($submit, $_POST['sta435']); if($offerd==""){ $offerd .=$_POST['sta435']; }else{ $offerd.="~".$_POST['sta435']; } }    
    if(isset($_POST['sta441'])){ array_push($submit, $_POST['sta441']); if($offerd==""){ $offerd .=$_POST['sta441']; }else{ $offerd.="~".$_POST['sta441']; } }
    if(isset($_POST['mth421'])){ array_push($submit, $_POST['mth421']); if($offerd==""){ $offerd .=$_POST['mth421']; }else{ $offerd.="~".$_POST['mth421']; } }
    if(isset($_POST['mth425'])){ array_push($submit, $_POST['mth425']); if($offerd==""){ $offerd .=$_POST['mth425']; }else{ $offerd.="~".$_POST['mth425']; } }
    if(isset($_POST['mth427'])){ array_push($submit, $_POST['mth427']); if($offerd==""){ $offerd .=$_POST['mth427']; }else{ $offerd.="~".$_POST['mth427']; } }
    if(isset($_POST['mth429'])){ array_push($submit, $_POST['mth429']); if($offerd==""){ $offerd .=$_POST['mth429']; }else{ $offerd.="~".$_POST['mth429']; } }
    if(isset($_POST['phy401'])){ array_push($submit, $_POST['phy401']); if($offerd==""){ $offerd .=$_POST['phy401']; }else{ $offerd.="~".$_POST['phy401']; } }
    if(isset($_POST['phy403'])){ array_push($submit, $_POST['phy403']); if($offerd==""){ $offerd .=$_POST['phy403']; }else{ $offerd.="~".$_POST['phy403']; } }
    if(isset($_POST['phy421'])){ array_push($submit, $_POST['phy421']); if($offerd==""){ $offerd .=$_POST['phy421']; }else{ $offerd.="~".$_POST['phy421']; } }
    if(isset($_POST['phy451'])){ array_push($submit, $_POST['phy451']); if($offerd==""){ $offerd .=$_POST['phy451']; }else{ $offerd.="~".$_POST['phy451']; } }
    if(isset($_POST['phy461'])){ array_push($submit, $_POST['phy461']); if($offerd==""){ $offerd .=$_POST['phy461']; }else{ $offerd.="~".$_POST['phy461']; } }
    
    $_SESSION['submit'] = $submit;
    $_SESSION['offered'] =$offerd;
}

if(isset($_POST['proceed_final_s'])){

    if(isset($_POST['cos438'])){ array_push($submit, $_POST['cos438']); if($offerd==""){ $offerd .=$_POST['cos438']; }else{ $offerd.="~".$_POST['cos438']; } }
    if(isset($_POST['cos490'])){ array_push($submit, $_POST['cos490']); if($offerd==""){ $offerd .=$_POST['cos490']; }else{ $offerd.="~".$_POST['cos490']; } }
    if(isset($_POST['cos452'])){ array_push($submit, $_POST['cos452']); if($offerd==""){ $offerd .=$_POST['cos452']; }else{ $offerd.="~".$_POST['cos452']; } }
    if(isset($_POST['ced342'])){ array_push($submit, $_POST['ced342']); if($offerd==""){ $offerd .=$_POST['ced342']; }else{ $offerd.="~".$_POST['ced342']; } }
    if(isset($_POST['cos434'])){ array_push($submit, $_POST['cos434']); if($offerd==""){ $offerd .=$_POST['cos434']; }else{ $offerd.="~".$_POST['cos434']; } }
    if(isset($_POST['cos436'])){ array_push($submit, $_POST['cos436']); if($offerd==""){ $offerd .=$_POST['cos436']; }else{ $offerd.="~".$_POST['cos436']; } }
    if(isset($_POST['cos442'])){ array_push($submit, $_POST['cos442']); if($offerd==""){ $offerd .=$_POST['cos442']; }else{ $offerd.="~".$_POST['cos442']; } }
    if(isset($_POST['cos444'])){ array_push($submit, $_POST['cos444']); if($offerd==""){ $offerd .=$_POST['cos444']; }else{ $offerd.="~".$_POST['cos444']; } }
    if(isset($_POST['cos464'])){ array_push($submit, $_POST['cos464']); if($offerd==""){ $offerd .=$_POST['cos464']; }else{ $offerd.="~".$_POST['cos464']; } }
    if(isset($_POST['sta492'])){ array_push($submit, $_POST['sta492']); if($offerd==""){ $offerd .=$_POST['sta492']; }else{ $offerd.="~".$_POST['sta492']; } }
    if(isset($_POST['sta416'])){ array_push($submit, $_POST['sta416']); if($offerd==""){ $offerd .=$_POST['sta416']; }else{ $offerd.="~".$_POST['sta416']; } }
    if(isset($_POST['sta422'])){ array_push($submit, $_POST['sta422']); if($offerd==""){ $offerd .=$_POST['sta422']; }else{ $offerd.="~".$_POST['cos101']; } }
    if(isset($_POST['sta434'])){ array_push($submit, $_POST['sta434']); if($offerd==""){ $offerd .=$_POST['sta434']; }else{ $offerd.="~".$_POST['sta434']; } }
    if(isset($_POST['sta452'])){ array_push($submit, $_POST['sta452']); if($offerd==""){ $offerd .=$_POST['sta452']; }else{ $offerd.="~".$_POST['sta452']; } }
    if(isset($_POST['sta414'])){ array_push($submit, $_POST['sta414']); if($offerd==""){ $offerd .=$_POST['sta414']; }else{ $offerd.="~".$_POST['sta414']; } }
    if(isset($_POST['mth452'])){ array_push($submit, $_POST['mth452']); if($offerd==""){ $offerd .=$_POST['mth452']; }else{ $offerd.="~".$_POST['mth452']; } }
    if(isset($_POST['mth428'])){ array_push($submit, $_POST['mth428']); if($offerd==""){ $offerd .=$_POST['mth428']; }else{ $offerd.="~".$_POST['mth428']; } }
    if(isset($_POST['mth326'])){ array_push($submit, $_POST['mth326']); if($offerd==""){ $offerd .=$_POST['mth326']; }else{ $offerd.="~".$_POST['mth326']; } }
    if(isset($_POST['mth312'])){ array_push($submit, $_POST['mth312']); if($offerd==""){ $offerd .=$_POST['mth312']; }else{ $offerd.="~".$_POST['mth312']; } }
    if(isset($_POST['phy412'])){ array_push($submit, $_POST['phy412']); if($offerd==""){ $offerd .=$_POST['phy412']; }else{ $offerd.="~".$_POST['phy412']; } }
    if(isset($_POST['phy494'])){ array_push($submit, $_POST['phy494']); if($offerd==""){ $offerd .=$_POST['phy494']; }else{ $offerd.="~".$_POST['phy494']; } }
    if(isset($_POST['phy438'])){ array_push($submit, $_POST['phy438']); if($offerd==""){ $offerd .=$_POST['phy438']; }else{ $offerd.="~".$_POST['phy438']; } }
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
                                            <h3 class="panel-title">Upload Results Here</h3>
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
                                                            <label style="float:left;"><?php echo checkCourseTitle_new($submit[$count]) ?></label>
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