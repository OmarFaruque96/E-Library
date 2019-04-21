<html>
<head>
	<title> Search product </title>
</head>
<body>

	<table height="100" width="900" align="center" bgcolor="#f4f4f4">

		<?php

$searchval = "";
if (isset($_POST['search']))
    $searchval = $_POST['search'];

try {
    $con = new PDO("mysql:host=localhost;dbname=elibrary", "root", "");
     $stmt ="select * from books where books_title like '%$searchval%';";
    $pdostmt = $con->query($stmt); 
    $table = $pdostmt->fetchAll(PDO::FETCH_NUM);

    $htmlcode="";
    foreach ($table as $row) {
?>
      <tr>
      	<td><?php print $row[0]?></td>
      	<td><a href="<?php print $row[3]?>"><?php print $row[1]?></a></td>
      </tr>
        <?php
    }

   
} catch (PDOException $ex) {
    echo "<tr><td colspan='5' style='text-align:center'>No Data Exists</td></tr>";
}
?>
	 </table>

</body>
</html>