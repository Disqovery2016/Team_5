<?php
   
   $dbhost = 'localhost:3306';
   $dbuser = 'root';
   $dbpass = '';
   $conn = mysqli_connect($dbhost, $dbuser, "");
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_connect_error());
   }
   
   echo 'Connected successfully<br>';
   echo'--------------------------------<br>';
   
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

echo 'vehicle details<br>';
echo'--------------------------------<br>';

$sql = 'SELECT vehicle_no,name, validity FROM vehicle';
 
    $retval = mysqli_query($conn, $sql );
   
   if(! $retval ) {
      die('Could not get data: ' . mysqli_error());
   }
   
   while($row = mysqli_fetch_array($retval, MYSQL_ASSOC)) {
      echo "vehicle_no :{$row['vehicle_no']}  <br> ".
         "NAME : {$row['name']} <br> ".
         "validity : {$row['validity']} <br> ".
         "--------------------------------<br>";
   }
   
   echo "Fetched vehicle data successfully!!!!!!!!!!!!!<br><br>";
   echo'--------------------------------<br>';
   
   echo 'lecense details<br>';
   echo'--------------------------------<br>';

   
   $sq2 = 'SELECT license_no,name, exp_date FROM license';
 
    $retval1 = mysqli_query($conn, $sq2 );
   
   if(! $retval1 ) {
      die('Could not get data: ' . mysqli_error());
   }
   
   while($row = mysqli_fetch_array($retval1, MYSQL_ASSOC)) {
      echo "license_no :{$row['license_no']}  <br> ".
         "NAME : {$row['name']} <br> ".
         "exp_date : {$row['exp_date']} <br> ".
         "--------------------------------<br>";
   }
           echo "Fetched license data successfully<br>";
   echo'--------------------------------<br>';


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