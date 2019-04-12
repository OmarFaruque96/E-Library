<?php
	include('connection.php');

	$i=1;
	$q=intval($_GET['data']);
	
	$query="SELECT * FROM level WHERE sector_id='$q'";
        $result=mysqli_query($conn,$query);
        if(mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_array($result)){
			echo"<option value=". $i .">" . $row['level_name'] ."</option>";
				$i++;
			}	
		}	
	mysqli_close($con);
?>