<?php
require_once("database.php");

class User{
    
    public $id;
    public $picture;
    public $fname;
    public $lname;
    public $oname;
    public $uname;
    public $semail;
    public $oemail;
    public $level;
    public $pword;
    public $pnumber;
    public $rnumber;
    public $gender;
	public $bio;
    public $date;
    

    public static function find_by_sql($query=""){
        global $database;
        $result_set = $database->query($query);
        return $result_set;
    }
    
     public static function admin_login($uname="", $pword=""){
         global $database;
         return self::find_by_sql("SELECT * FROM admin WHERE uname='$uname' AND password='$pword' AND status='1' LIMIT 1");
       
    }
    
    public static function create_candidate_query($user_rnumber="", $user_full_name="", $post=""){
         global $database;
         return self::find_by_sql("INSERT INTO `voting_system` SET rnumber='$user_rnumber', full_name='$user_full_name', post='$post', date=NOW() ");  
    }
    
    public static function update_candidate_query($user_rnumber="", $user_full_name="", $post="", $registrar=""){
         global $database;
         return self::find_by_sql("UPDATE `voting_system` SET registrar='$registrar', rnumber='$user_rnumber', full_name='$user_full_name', post='$post', date=NOW() WHERE rnumber='$user_rnumber' ");  
    }
    
    public static function admin_mailer($address="",$msg=""){

        $to = $address;
		$subject = "NACOSS HELP DESK";
		$message = '
		NACOSS UNN | NATIONAL ASSOCIATION OF COMPUTER SCIENCE STUDENTS UNN CHAPTER
		'.$msg.'.

		Please click this link to visit our site anytime:
		http://www.nacosunn.com

		'; // Our message above including the link

		$headers  = 'From: Bulk Service <noreply10@2ools.co.za>' ."\r\n"
						.'Bcc: ' ."\r\n"
						.'MIME-Version: 1.0' ."\r\n"
						.'Content-type: text/html; charset=iso-8859-1' ."\r\n"
						.'X-Mailer: PHP/' . phpversion();

		mail($to, $subject, $message, $headers); // Send our email

    }
    
    public static function mailer($uname="", $pword="", $semail="", $oemail="", $id=""){
        global $database;

        $to = $semail;
		$subject = "ACCOUNT REGISTRATION SUCCESSFUL";
		$message = '
		NACOSS UNN | NATIONAL ASSOCIATION OF COMPUTER SCIENCE STUDENTS UNN CHAPTER
		Thanks for signing up on National Associacion of Computer Science Students UNN CHAPTER Website!
		Your account has been created, your login credentials  are below, You can login with your credentials after your account has been confirmed and activated by the Administrator.


		------------------------
		UserName: '.$uname.'
		Password: '.$pword.'
		------------------------

		Please click this link to visit our site for help:
		http://www.nacosunn.com

		'; // Our message above including the link

		$headers  = 'From: Bulk Service <noreply10@2ools.co.za>' ."\r\n"
						.'Bcc: ' ."\r\n"
						.'MIME-Version: 1.0' ."\r\n"
						.'Content-type: text/html; charset=iso-8859-1' ."\r\n"
						.'X-Mailer: PHP/' . phpversion();

		mail($to, $subject, $message, $headers); // Send our email
        
        
        $current_year = date('Y'); $current_month = date('m'); $current_day = date('d'); $current_hour = date('H'); $current_min = date('i'); $current_sec = date('s');

        $spliter = str_split($id);

        $alpha = $spliter[0].$spliter[1].$spliter[2];
        $delta = $spliter[3].$spliter[4].$spliter[5];
        $zigma = $spliter[6].$spliter[7];

        $identify = 'NACOSS-'.$current_day.'-'.$current_month.'-'.$current_year.'-'.$current_hour.'-'.$alpha.'-'.$current_min.'-'.$delta.'-'.$current_sec.'-'.$zigma;
        
        $to = $semail;
		$subject = "ACCOUNT VERIFICATION";
		$message = '
		NACOSS UNN | NATIONAL ASSOCIATION OF COMPUTER SCIENCE STUDENTS UNN CHAPTER

		Please click this link to confirm your registration:
		http://www.nacosunn.com/?confirm='.$identify.'
        
        Do not comfirm if you are not aware of this account, the account will be deactivated after 7 days without confirmation.
        Kindly bear with us.
		'; // Our message above including the link

		$headers  = 'From: Bulk Service <noreply10@2ools.co.za>' ."\r\n"
						.'Bcc: ' ."\r\n"
						.'MIME-Version: 1.0' ."\r\n"
						.'Content-type: text/html; charset=iso-8859-1' ."\r\n"
						.'X-Mailer: PHP/' . phpversion();

		mail($to, $subject, $message, $headers); // Send our email  

    }
    
    public static function mailer_successful($semail){

        $to       = $semail; 
        $subject  = "ACCOUNT VERIFICATION SUCCESSFUL";
        $message =  '
		NACOSS UNN | NATIONAL ASSOCIATION OF COMPUTER SCIENCE STUDENTS UNN CHAPTER

		Your account has been verified successfully, Your account will be fully activated by the administrator.
        
        Please click this link to visit our site for help:
		http://www.nacosunn.com
		';

        $headers  = 'From: Bulk Service <noreply10@2ools.co.za>' ."\r\n"
						.'Bcc: ' ."\r\n"
						.'MIME-Version: 1.0' ."\r\n"
						.'Content-type: text/html; charset=iso-8859-1' ."\r\n"
						.'X-Mailer: PHP/' . phpversion();
        mail($to, $subject, $message, $headers);
    }
    
     public static function student_login($uname="", $pword=""){
         global $database;
         return self::find_by_sql("SELECT * FROM all_students WHERE uname='$uname' AND pword='$pword' AND status='1' AND verified='1' LIMIT 1");
       
    }
    
        public static function logout($table="", $id=0){
            global $database;
           return self::find_by_sql("UPDATE $table SET logged = NOW() WHERE id = '$id'");
        }
        
        public static function de_activate_person($table="", $id=0){
            global $database;
           return self::find_by_sql("UPDATE $table SET status = '0' WHERE id = '$id'");
        }

        

    public static function users_login($uname="", $pword=""){
         global $database;
        return self::find_by_sql("SELECT * FROM users WHERE uname='$uname' AND password='$pword' AND status= '1' LIMIT 1");
    }
    
     

    public static function find_all(){
        return self::find_by_sql("SELECT * FROM nacoss");
    }
    
    
    public static function find_admin_by_status($id=0){
        global $database;
        return $result_set = self::find_by_sql("SELECT * FROM admin WHERE status={$id}");
         //$database->fetch_array($result_set);
    }
    

     public static function find_students_by_id($id=0){
        global $database;
        return $result_set = self::find_by_sql("SELECT * FROM all_students WHERE id={$id} LIMIT 1");
    }
    
    public static function find_users_by_status($status=0){
        global $database;
        return $result_set = self::find_by_sql("SELECT * FROM students WHERE status={$status}");
    }
 
    public static function find_admin_by_id($id=0){
        global $database;
        return $result_set = self::find_by_sql("SELECT * FROM admin WHERE id={$id} LIMIT 1");
    }
    
    public static function find_user_by_id($id=0){
        global $database;
        return $result_set = self::find_by_sql("SELECT * FROM user WHERE id={$id} LIMIT 1");
    }
    

    
    public static function num_rows($result_set){
        return mysqli_num_rows($result_set);
    }

    public static function create_student($uname="", $fname="", $lname="",/* $oname="",*/ $semail="", /*$oemail="",*/ $level="", $pnumber="", $rnumber="", $gender="", $pword="", $id=""){
        global $database;
        $epassword = md5($pword);
        /*$query = "INSERT INTO all_students SET date=NOW(), uname='{$uname}', fname='{$fname}', lname='{$lname}', oname='{$oname}', semail='{$semail}', oemail='{$oemail}', level='{$level}', pnumber='{$pnumber}', rnumber='{$rnumber}', gender='{$gender}', pword='{$epassword}', unique_id='{$id}'";*/
        $query = "INSERT INTO all_students SET status='0', verified='0', date=NOW(), uname='{$uname}', fname='{$fname}', lname='{$lname}', semail='{$semail}', level='{$level}', pnumber='{$pnumber}', rnumber='{$rnumber}', gender='{$gender}', pword='{$epassword}', unique_id='{$id}', picture='default.png', user_type='user'";
        
        return $result_set = self::find_by_sql($query);
    }
    

    
    public static function create_admin($uname="", $fname="", $lname="", $email="", $password=""){
        global $database;
        $date = NOW();
        $epassword = md5($password);
        $query = "INSERT INTO admin(";
        $query .= " date, uname, fname, lname, email, password, status";
        $query .= ") VALUES (";
        $query .=" '{$date}', '{$uname}', '{$fname}', '{$lname}', '{$email}', '{$epassword}', '1'";
        $query .= ")";
        return $result_set = self::find_by_sql($query);  
    }
    

    
    public static function edit_student_profile($fname="", $lname="", $oname="", $oemail="", $level="", $pnumber="", $gender="", /*$pword="",*/ $bio="", $stud_id=0){
        global $database;
        if (empty($pword)){
        $query = "UPDATE all_students SET fname = '$fname', lname = '$lname', oname = '$oname', oemail = '$oemail', ";
        $query .="level = '$level', pnumber = '$pnumber', gender = '$gender', bio = '$bio' WHERE id = '$stud_id'";

        }else{
        $epassword = md5($pword);
        $query = "UPDATE all_students SET fname = '$fname', lname = '$lname', oname = '$oname', oemail = '$oemail', ";
        $query .="level = '$level', pnumber = '$pnumber', gender = '$gender', pword = '$epassword' WHERE id = '$stud_id'";
        }
        return $result_set = self::find_by_sql($query);  
    }
    public static function upload_student_document($student="", $document_name="", $id=0, $path=""){
        $query = "INSERT INTO $student SET document='$path', name='$document_name' ";
        return $result_set = self::find_by_sql($query);
    }
    
    
    public static function edit_admin_profile($uname="", $fname="",$lname="", $password="", $email="", $phone="", $gender="", $admin_id=0){
        global $database;
        if (empty($password)){
        $epassword = md5($password);
        $query = "UPDATE admin SET uname = '$uname', fname = '$fname', lname = '$lname', email = '$email', ";
        $query .="phone = '$phone', gender = '$gender' WHERE id = '$admin_id'";

        }else{
            $epassword = md5($password);
            $query = "UPDATE admin SET uname = '$uname', fname = '$fname', lname = '$lname', email = '$email', password = '$epassword', ";
            $query .="phone = '$phone', gender = '$gender' WHERE id = '$admin_id'";
        }
        return $result_set = self::find_by_sql($query);  
    }
    
    public static function edit_admin_profile_picture($id=0, $path=""){
        $query = "UPDATE admin SET picture='$path' WHERE id = '$id'";
        return $result_set = self::find_by_sql($query); 
    }
    
    public static function edit_staff_profile_picture($id=0, $path=""){
        $query = "UPDATE staff SET picture='$path' WHERE id = '$id'";
        return $result_set = self::find_by_sql($query); 
    }
    
    public static function edit_student_profile_picture($id=0, $path=""){
        $query = "UPDATE students SET picture='$path' WHERE id = '$id'";
        return $result_set = self::find_by_sql($query); 
    }
 

   
    
     public static function find_students_by_status($id=0){
        global $database;
        return $result_set = self::find_by_sql("SELECT * FROM students WHERE status={$id}");
         //$database->fetch_array($result_set);
    }

   
  
    public static function instantiate($record){
                $object = new self;
                $members_count =  mysqli_num_rows($result_set);
                $object->id = $row['id'];
                $object->picture = $row['picture'];
                $imagepath = "photo/".$picture;
                $object->fname = $row['fname'];
                $object->lname = $row['lname'];
                $object->oname = $row['oname'];
                $object->semail = $row['semail'];
                $object->oemail = $row['oemail'];
                $object->level = $row['level'];
                $object->uname = $row['uname'];
                $object->pword = $row['pword'];
                $object->pnumber = $row['pnumber'];
                $object->rnumber = $row['rnumber'];
                $object->gender = $row['gender'];
                $object->date = $row['date'];
                
                foreach($record as $attribute=>$value){
                    //if($object->has_attribute( $attribute)){
                        $object->$attribute = value;
                    //}
                }
                
                return $object;
    }
}

?>