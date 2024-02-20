<?php
$conn=mysqli_connect(
    "localhost",
    "root",
    "",
    "biodwar"
);
$select1=mysqli_query($conn,"SELECT * FROM costumer_info");
$countt1=mysqli_num_rows($select1);
$select2=mysqli_query($conn,"SELECT * FROM trainer_info");
$countt2=mysqli_num_rows($select2);
$return=array('costumercount' => "$countt1",'trainercount' => "$countt2");
mysqli_close($conn);
echo json_encode($return);
?>