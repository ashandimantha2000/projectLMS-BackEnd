<?php

include '../connection.php';

// Retrieve the sign-in data
$username = $_GET['std_email'];
$password = $_GET['std_password'];

// Perform sign-in logic and return a response
// ...

// Return a response to the Flutter application
$response = ['message' => 'Sign-in successful'];
header('Content-Type: application/json');
echo json_encode($response);










//this is the end '?/' at the bottom 

/*

$email = $_POST['std_email'];
$pass = $_POST['std_password']; //use md5(message digestion alogorithm) for security (converts to binary)


$sql = "SELECT * FROM students where std_email = '$email' && std_password = '$pass';";
$result = mysqli_query($conn, $sql);


//check if success or fail


$resultOfQuery = $conn->query($sql);


if($resultOfQuery->num_rows>0)
{ 
  $userRecord[]=array();
  // echo $userRecord;
  while($rowFound=$resultOfQuery->fetch_assoc())
  {
    $userRecord=$rowFound;
  }
  echo json_encode(array(
    "success"=>true,
    "userData"=>$userRecord[0],
    )
);




}
else
{
  echo json_encode(array("successerer"=>false));
}


*/




/*

if (mysqli_num_rows($result) > 0) {
  echo json_encode(array(
    "success"=>true,
    "userData"=>$userRecord[0],
} else {
  echo json_encode(array("successerer"=>false));
}



*/


?>

