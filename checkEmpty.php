<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $passErr = $DOBErr = $unameErr = $mobErr =
$lnameErr = $addErr = $designationErr =  $joiningErr = "";
$name = $email = $gender = $dob = $lname = $usname = $password = $joining =
$mobile = $designation = $Address = $institute = $image =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["fname"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["fname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["uname"])) {
    $unameErr = " UserName is required";
  } else {
    $usname = test_input($_POST["uname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["lname"])) {
    $lnameErr = "Last name is required";
  } else {
    $lname = test_input($_POST["lname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $lnameErr = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
 if (empty($_POST["institute"])) {
    $institute = "";
  } else {
    $institute = test_input($_POST["institute"]);
  }

  if (empty($_POST["joining "])) {
    $joiningErr = "";
  } else {
    $joining = test_input($_POST["joining"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  if (empty($_POST["password"])) {
    $passErr = "PASSWORD is required";
  } else {
    $password = test_input($_POST["password"]);
  }
  if (empty($_POST["dob"])) {
    $DOBErr = "DOB is required";
  } else {
    $dob = test_input($_POST["dob"]);
  }
  if (empty($_POST["mobile"])) {
    $mobErr = "Mo.no. is required";
  } else {
    $mobile = test_input($_POST["mobile"]);
  }
   if (empty($_POST["Address"])) {
    $addErr = "Address is required";
  } else {
    $Address = test_input($_POST["Address"]);
  }
   if (empty($_POST["Designation"])) {
   $designationErr = "";
  } else {
    $designation = test_input($_POST["Designation"]);
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>