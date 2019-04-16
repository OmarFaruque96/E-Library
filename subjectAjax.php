<?php
	include('connection.php');

	if(isset($_GET['data'])){
      $q=$_GET['data'];
    }
	
	$query="SELECT subject_name FROM subject WHERE class_id=(SELECT class_id FROM class WHERE class_name='$q')";
        $result=mysqli_query($conn,$query);
        if(mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_array($result))
			echo"<option value=".$row['subject_name'].">" .$row['subject_name']."</option>";
		}	
	mysqli_close($con);
?>