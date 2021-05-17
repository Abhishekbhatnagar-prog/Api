<?php  
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');


// print_r($_GET['sid']);

$student_id = $_GET['sid'];

include "config.php";

$sql = "SELECT * FROM students WHERE id = $student_id";
$result = mysqli_query($conn,$sql) or die("connection failed");


if(mysqli_num_rows($result) > 0 ){

// fetching all data using output as a variable
$output = mysqli_fetch_all($result, MYSQLI_ASSOC);

// converting into json by using encoding 
echo json_encode($output);


}else{
echo json_encode(array('message' => 'No Record Found', 'status' => 'false'));
}


?>