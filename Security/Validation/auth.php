<?php
// header("Location: ./../../Users/View-car-info/");
include_once("./../../Database/config.php");
session_start();
$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['password'];

$username_admin = "SELECT * FROM admin WHERE username = '".$_SESSION['username']."' AND password = '".$_SESSION['password']."'";
$query_admin = mysqli_query($con, $username_admin);
$row_admin = mysqli_num_rows($query_admin);
// echo "<br>".$username_admin;
if($row_admin == 1){
    header("Location: ./../../Admin/Add-delete-car/index.php");
} else{
    echo "cant";
    //header ('Location: ./../Login/invalid.php');
}

$username_employee = "SELECT * FROM employee WHERE username = '".$_SESSION['username']."' AND password = '".$_SESSION['password']."'";
$query_employee = mysqli_query($con, $username_employee);
$row_employee = mysqli_num_rows($query_employee);
// echo "<br>".$username_employee;
if($row_employee == 1){
    // echo "employee";
    header("Location: ./../../Users/View-car-info/employee-check.php");
} else{
    echo "cant";
    //header ('Location: ./../Login/invalid.php');
}

$username_customer = "SELECT * FROM customer WHERE username = '".$_SESSION['username']."' AND password = '".$_SESSION['password']."'";
$query_customer = mysqli_query($con, $username_customer);
// echo "<br>".$username_customer;
$row_customer = mysqli_num_rows($query_customer);
if($row_customer == 1){
    // echo "customer";
    header("Location: ./../../Users/View-car-info/");
    
} else{
    echo "cant";
    //header ('Location: ./../Login/invalid.php');
}

$username_manager = "SELECT * FROM manager WHERE username = '".$_SESSION['username']."' AND password = '".$_SESSION['password']."'";
$query_manager = mysqli_query($con, $username_manager);
// echo "<br>".$username_customer;
$row_manager = mysqli_num_rows($query_manager);
if($row_manager == 1){
    // echo "customer";
    header("Location: ./../../Users/View-car-info/maintain-car");
    
} else{
    echo "cant";
    // header ('Location: ./../Login/invalid.php');
}




?>