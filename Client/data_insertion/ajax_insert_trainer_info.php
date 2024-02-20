<?php
$conn=mysqli_connect(
    "localhost",
    "root",
    "",
    "biodwar"
);
$id=$_POST["id"];
$first_name=$_POST["first_name"];
$last_name=$_POST["last_name"];
$gender=$_POST["gender"];
$date_of_birth=$_POST["date_of_birth"];
$age=$_POST["age"];
$phone=$_POST["phone"];
$date_of_joining=$_POST["date_of_joining"];
$address=$_POST["address"];
$email=$_POST["email"];
$duplicate=mysqli_query($conn,"SELECT * FROM trainer_info WHERE id='$id'");
if(mysqli_num_rows($duplicate)>0){
    return "Id already taken";
}
else{
    $image_name=$_FILES['image_t']['name'];
    $type=$_FILES['image_t']['type'];
    $temp=$_FILES['image_t']['tmp_name'];
    $imageExtension=pathinfo($image_name,PATHINFO_EXTENSION);
    $allowExt=strtolower($imageExtension);
    $new_img_name=$id.'.'.$imageExtension;
    $extension=array('png','jpg','jpeg');
    $target="../images/".$new_img_name;

    $sql="INSERT into trainer_info VALUES($id,'$first_name','$last_name','$gender','$date_of_birth','$age','$phone','$date_of_joining','$address','$email','$new_img_name')";
    mysqli_query($conn,$sql);
    move_uploaded_file($temp,$target);
    echo $image_name;
    

}

?>