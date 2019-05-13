<?php 

require_once ("../../includes/initialize.php");

$session_student = $_SESSION['rnumber'];
    
if(isset($_POST['upload_document'])){
    global $session_student;
    
    $result = User::find_by_sql("SELECT * FROM  nacoss.students_documents WHERE rnumber='$session_student' ");
    if(mysqli_num_rows($result) < 20){
    
    
    $document_name = $database->escape_value(htmlentities($_POST['document_name']));
    
    $fileName = $_FILES['file']['name'];
		$fileType = $_FILES['file']['type'];
        $file_size = $_FILES['file']['size'];
					$fileExt = explode('.',$fileName);
						$fileActualExt = strtolower(end($fileExt));
		$allowed = array('jpeg','jpg','png', 'doc', 'docx', 'txt', 'pdf');
		if (!in_array($fileActualExt, $allowed)){
			?>
               <script type="text/javascript">
            alert("Wrong file type selected!");

            window.location="upload_document.php";
            </script>
            <?php

            die();
		}
    $file_size = $_FILES['file']['size'];
        if($file_size>500000 || $file_size == 0){//500kb file allowed
            ?>
               <script type="text/javascript">
            alert("File too large, minimum of 500kb file allowed!");

            window.location="upload_document.php";
            </script>
            <?php

            die();
        }
    
        $file = $_FILES['file']['name'];

        $file_loc = $_FILES['file']['tmp_name'];
        $file_size = $_FILES['file']['size'];
        $file_type = $_FILES['file']['type'];
        
        $folder ="../../documents/";
    
        $new_file_name = strtolower($file);
        $final_file = str_replace(' ', '-', $new_file_name);
        
        $current_year = date('Y'); $current_month = date('m'); $current_day = date('d'); $current_hour = date('H'); $current_min = date('i'); $current_sec = date('s');
        if(strlen($current_month)==1){
            $current_new_month = '0'.$current_month;
        }else{
            $current_new_month = $current_month;
        }
        
        $edoc = explode(".", $file);
        $doc_type = end($edoc);
        
        $generate = uniqid('', true);
        $explode = explode('.', $generate);
        $array1 = $explode[0];
        $array2 = $explode[1];
        $doc_initial = "DOC-".$current_year.$current_new_month.$current_day.$current_hour.$current_min.$current_sec."-";
        $main_doc = $doc_initial.$array2.".".$doc_type;

        move_uploaded_file($file_loc, $folder.$main_doc);

                                        
        $create_table = User::find_by_sql("CREATE TABLE IF NOT EXISTS `nacoss`.`students_documents` (
          `id` int(11) NOT NULL auto_increment,
          `rnumber` varchar(50) NOT NULL,
          `document` varchar(50) NOT NULL,
          `name` varchar(100) NOT NULL,
          `size` varchar(50) NOT NULL,
          PRIMARY KEY  (`id`)
        ) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ");
        
            
            $str_split = str_split($file_size);
            if(count($str_split) > 3){
                $from = $str_split[3];
                $explode = explode($from, $file_size);
                $filesize = $explode[0]."kb";
            }else if(count($str_split) <= 3){
                $filesize = $file_size."kb";
            }
    
    
        $insert_query = User::find_by_sql( "INSERT INTO `nacoss`.`students_documents` SET rnumber = '$session_student', document='$main_doc', name='$document_name', size='$filesize' ");
    
        if($insert_query){
            

                 ?>
               <script type="text/javascript">
            alert("Changes Saved successfully");

            window.location="upload_document.php";
            </script>
            <?php

            die();

               }else{

                ?> 
                <script type="text/javascript">
                alert("Unable to Save Changes");
                window.location="upload_document.php";
                </script>

                <?php
                

        }

    }else{
        ?> 
                <script type="text/javascript">
                alert("Maximum Number bof Uploads reached!");
                window.location="upload_document.php";
                </script>

                <?php
    }
}

    
?>