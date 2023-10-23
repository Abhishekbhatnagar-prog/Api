<?php  
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: POST");
include_once "config.php";

// To read and get contents in an array form 
$data = json_decode(file_get_contents("php://input"));
// print_r($data); die ;

$student_name = $data->name;
$student_age = $data->age;
$student_city = $data->city;


$sql = "INSERT INTO `students` FIELDS(`student_name`,`age`,`city`) VALUES ('aman','55','Nepal')";
$result = mysqli_query($conn,$sql);
print_r($result); die;

if(mysqli_num_rows($result) > 0 ){

// fetching all data using output as a variable
$output = mysqli_fetch_all($result, MYSQLI_ASSOC);



}else{
echo json_encode(array('message' => 'No Record Found', 'status' => 'false'));
}
?>