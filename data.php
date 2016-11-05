<?php
   
   $dbhost = 'localhost:3306';
   $dbuser = 'root';
   $dbpass = '';
   $conn = mysqli_connect($dbhost, $dbuser, "");
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_connect_error());
   }
   
   echo 'Connected successfully';
  /* 
   $sql = "CREATE DATABASE sumitkal";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
mysqli_select_db( $conn,'sumitkal' );

// sql to create table
$sql = "CREATE TABLE dues( ".
 "Vehicle_no INT PRIMARY KEY, ".
 "Name VARCHAR(100) NOT NULL, ".
 "Amount INT);";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests3 created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

*/
mysqli_select_db( $conn,'sumitkal' );

$sql = 'SELECT vehicle_no,
 Name, Validity
 FROM vehicle';
//mysql_select_db('TUTORIALS');
$retval = mysqli_query( $conn,$sql  );
/*
if(! $retval )
{
 die('Could not get data: ' . mysqli_error());
}
while($row = mysqli_fetch_array($retval, MYSQL_ASSOC))
{
 echo "Vehicle Number :{$row['vehicle_no']} <br> ".
 "Name of Owner: {$row['name']} <br> ".
 "Validity of Vehicle: {$row['Validity']} <br> ".
 " <br> ".
 "--------------------------------<br>";
}
echo "Fetched data successfully\n"; */
   mysqli_close($conn);
?>