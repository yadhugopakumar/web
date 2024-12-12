
<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }

        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 400px;
            text-align: center;
        }

        .form-container h2 {
            margin-bottom: 15px;
            font-size: 24px;
            color: #333;
        }

        .form-container label {
            font-size: 16px;
            color: #555;
            display: block;
            text-align: left;
            margin-bottom: 5px;
        }

        .form-container input[type="text"], 
        .form-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }

        .form-container button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        .form-container button:hover {
            background-color: #45a049;
        }

        .form-container a {
            color: #4CAF50;
            text-decoration: none;
        }

        .form-container a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>(cookie)Register</h2>
        <form method="post" action="">
            <label for="fname">First Name:</label>
            <input type="text" id="fname" name="fname" required>

            <label for="lname">Last Name:</label>
            <input type="text" id="lname" name="lname" required>

            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required>

            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" required>

            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>

            <label for="zip">Zip:</label>
            <input type="text" id="zip" name="zip" required>

            <label for="pass">Password:</label>
            <input type="password" id="pass" name="pass" required>

            <label for="cpass">Confirm Password:</label>
            <input type="password" id="cpass" name="cpass" required>

            <button type="submit" name="submit">Register</button>
        </form>
        <p>Already registered? <a href="login.php">Login here</a></p>
    </div>
</body>
</html>


<?php
session_start();
include 'conn.php';

if (isset($_POST['submit'])) {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $zip = $_POST['zip'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
	
	if($cpass==$pass){
	
	
    $sql = "INSERT INTO `usertable`(`firstname`, `lastname`, `email`, `phone`, `address`, `zip`, `password`) VALUES ('$fname', '$lname', '$email', '$phone', '$address', '$zip', '$pass')";

    if (mysqli_query($con, $sql)) {
         echo "<script>alert('registered')</script>";
         header('Location:login.php');
   	 } else {
        echo "<script>alert('server error')</script>";
    	}
    }
    else{
    	echo "<script>alert('passwords arent matching')</script>";
    }
}

mysqli_close($con);
?>

