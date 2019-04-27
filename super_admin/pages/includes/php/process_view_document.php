<?php
require_once ("../../includes/initialize.php");
    $session_student = $_SESSION['rnumber'];
if(isset($_GET["delete_doc"]) && !empty($_GET["delete_doc"])){
    $id = $_GET["delete_doc"];
    $del_query = User::find_by_sql("DELETE FROM nacoss.students_documents WHERE rnumber='$session_student' AND id='$id'");
}

$result = User::find_by_sql("SELECT * FROM  nacoss.students_documents WHERE rnumber='$session_student' ");

$counter=1;
        while($row = mysqli_fetch_assoc($result)){

        $id =$row['id'];
        $name =$row['name'];
        $document =$row['document'];
        $size =$row['size'];
            
    ?>
<tr>
    <td><?php echo $counter;?></td>
    <td>
    <?php echo $name;?>
    </td>
    <td>
        <a href="../../documents/<?php echo $document;?>" target="_blank"><button class="nacoss-btn max-width">Download&nbsp;<i class="fa fa-download"></i></button></a>
    </td>
    <td>
        <a href="?delete_doc=<?php echo $id; ?>"><button class="nacoss-btn border-danger max-width">Delete&nbsp;<i class="fa fa-close"></i></button></a>
    </td>
</tr>

	<?php
		$counter++;
}
	?>