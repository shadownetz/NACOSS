<?php
require_once ("../../includes/initialize.php");
    $session_student = $_SESSION['rnumber'];
        $host = "localhost";
        $user = "root";
        $pass = "";
        $database = "nacoss";

    $dbconnect = mysqli_connect($host, $user, $pass, $database);


    if(mysqli_connect_errno()){
        die("Database connection failed: ".
        mysqli_connect_error().
                "(".mysqli_connect_errno().")"
            );
     }
        $explodestudent = explode('/', $session_student);
        $start = $explodestudent[0];
        $end = end($explodestudent);
       
        $new_student = $start."_".$end;

$result = mysqli_query($dbconnect, "SELECT * FROM `discussions` ");

$counter=1;
        while ( $row = mysqli_fetch_array($result) ) {

        $discussion_id =$row['id'];
        $discussion_topic =$row['topic'];
        $discussion_type =$row['discussion_type'];
        $discussion_creator =$row['rnumber'];
        $discussion_date =$row['date'];
            
            
        $explode = uniqid('', true);
        $explodeid = explode('.', $explode);
        $new_end = end($explodeid);
        $new_start = $explodeid[0];

    ?>
        <tr>
                <td><?php echo $counter;?></td>
                <td><?php echo $discussion_topic;?></td>
                <td><?php echo $discussion_type;?></td>
                <td><a href="discussion_topic.php?alpha=<?php echo $new_start; ?>&delta=<?php echo $new_end; ?>&zigma=<?php echo $new_end.$discussion_id.$new_start;?>" target="blank">Join</a></td>
        </tr>
	<?php
        
        $explode = uniqid('', true);
        $explodeid = explode('.', $explode);
        $new_end = end($explodeid);
        $new_start = $explodeid[0];   
            
		$counter++;
}
	?>
	<hr>