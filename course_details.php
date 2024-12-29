<?php
require_once 'db.php';
$id=$_GET['id'];

$sql = "SELECT * FROM course_details WHERE c_id='".$id."'";

$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0) {
 
	echo "<table id='coursedetails'>";
	echo "<tr>
			<th>Course Name </th>
			<th>Course Duration </th>
			<th>Course Fee </th>
			<th>Start Date </th>
		  </tr>";
  while($row = mysqli_fetch_assoc($result)) {
	echo "<tr>
				<td>".$row["c_name"]."</td>
				<td>".$row["c_duration"]."</td>
				<td>".$row["c_fee"]."</td>
				<td>".$row["c_startdate"]."</td>
		 </tr>";
  }  
  echo "</table>";
}else{
  echo "No Records Found";
}
mysqli_close($conn);
?>