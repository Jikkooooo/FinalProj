<?php 

if(isset($_POST['fname']) && 
	isset($_POST['lname']) && 
	isset($_POST['email']) && 
	isset($_POST['uname']) && 
	isset($_POST['pass'])){

    include "../db_conn.php";

    $fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];

    $data = "fname=".$fname."lname=".$lname."email=".$email."&uname=".$uname;
    
    if (empty($fname)) {
    	$em = "Full name is required";
    	header("Location: ../registration.php?error=$em&$data");
	    exit;
    }else if(empty($lname)){
    	$em = "Last name is required";
    	header("Location: ../registration.php?error=$em&$data");
	    exit;
	}else if(empty($email)){
    	$em = "Email is required";
    	header("Location: ../registration.php?error=$em&$data");
	    exit;
    }else if(empty($uname)){
    	$em = "User name is required";
    	header("Location: ../registration.php?error=$em&$data");
	    exit;
    }else if(empty($pass)){
    	$em = "Password is required";
    	header("Location: ../registration.php?error=$em&$data");
	    exit;
    }else {

    	// hashing the password
    	$pass = password_hash($pass, PASSWORD_DEFAULT);

    	$sql = "INSERT INTO users(fname, lname, email, username, password) 
    	        VALUES(?,?,?,?,?)";
    	$stmt = $conn->prepare($sql);
    	$stmt->execute([$fname, $lname, $email, $uname, $pass]);

    	header("Location: ../registration.php?success=Your account has been created successfully");
	    exit;
    }


}else {
	header("Location: ../registration.php?error=error");
	exit;
}
