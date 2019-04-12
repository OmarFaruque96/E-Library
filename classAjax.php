<?php
	include('connection.php');

	$i=1;
	$q=intval($_GET['data']);
	echo $q;
	$query="SELECT * FROM class WHERE level_id='$q'";
        $result=mysqli_query($conn,$query);
        if(mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_array($result))
			echo"<option value=". $i++ .">" .$row['class_name']."</option>";
		}	
	mysqli_close($con);
?>