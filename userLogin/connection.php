<?php
session_start();
//initialize variable
$email="";
$errors=array();

//connect to mysqlDatabase

$conn=mysqli_connect('localhost','root','Herdi@123..','registrationdb');

//  REGISTER USER
if (isset($_POST['$reg_user'])) {
  // receive all input values from the form
  $fname=mysqli_real_escape_character($conn,$_POST['fname']);
  $lname=mysqli_real_escape_character($conn,$_POST['lname']);
  $email=mysqli_real_escape_character($conn,$_POST['email']);
  $password=mysqli_real_escape_character($conn,$_POST['pass1']);
  $passwor_2=mysqli_real_escape_character($conn,$_POST['pass2']);

  //form validation.
  //Ensure that all fields are filled as required...
  if (empty($fname)){array_push($errors,"First Name Required please...");}
  if (empty($lname)){array_push($errors,"Last Name Required please...");}
  if (empty($email)){array_push($errors,"Email Required please...");}
  if (empty($password)){array_push($errors,"Password Required please...");}
  if($password != $passwor_2){
    array_push($errors,"Password mismatch");
  }
  //check database to make sure a user does not already exist.
  $sql="SELECT * FROM usertb WHERE email= '$email' LIMIT 1";
  $result=mysqli_query($conn,$sql);
  //$user=mysqli_fetch_assoc($result);
  //if user exists.
  if ($result) {
    echo "inserted successfully";
    if ($result['email']==$email) {
      array_push($errors,"Email already exists...");
    }
  }
  //Register user if there are no errors in the form.
  if (count(errors)==0) {
    $password=md5($pass1);
    $query="INSERT INTO usertb (fname,lname,email,password)VALUES ('$fname','$lname','$email','$password')";
    mysqli_query($conn,$query);

    /*$_SESSION['Fname']=$fname;
    $_SESSION['success']="You are now logged in";
    header('location: index.php');*/
  }

}


 ?>
