<?php
$con=mysqli_connect("localhost","root","","ajs_product");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  
  $sql = "SELECT *  FROM whim where asin ='' limit 0,10";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    //   echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  

  $asin=file_get_contents("http://upctoasin.com/".$row["upc"]);
    $r="update whim set asin='".$asin."' where upc='".$row["upc"]."'";
	echo $r;
	echo "<br>";
mysqli_query($con,$r);
  }
} else {
    echo "0 results";
}


 
mysqli_close($con);



 
?>