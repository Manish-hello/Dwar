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
    $date_of_peyment=$_POST["date_of_peyment"];
    $date_of_expiry=$_POST["date_of_expiry"];
    $status="";
    $duplicatee=mysqli_query($conn,"SELECT * FROM memberships WHERE id='$id'");
    if(mysqli_num_rows($duplicatee)>0){
        echo "1";
    }
    else{
        date_default_timezone_set('Asia/Kathmandu');
        $currentdate=date('Y-m-d');
        if($currentdate>$date_of_expiry){
            $status="Unpaid";
        }
        else{
            $status="Paid";
        }
        $query="INSERT INTO memberships VALUES($id,'$first_name','$last_name','$date_of_peyment','$date_of_expiry','$status')";
        mysqli_query($conn,$query);
        echo "0";
    }
?>