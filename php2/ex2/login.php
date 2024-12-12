
<html>
<head>
<title>student list</title>
</head>
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

<body>
	
	 <div class="form-container">
        <h2>Login Form</h2>
        <form method='post' action="">

             <label for="num">Email:</label>
            <input type="text" id="num" name="email" required><br>
             <label for="num">Password:</label>
            <input type="text" id="num" name="pass" required>
            <button type="submit" name='submit'>Login</button>
        </form>
	<div>
	
	
	
</body>
</html>

<?php
// login_process.php: Processing the login
session_start();
include 'conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    // Fetch the user details from the database
    $sql = "SELECT * FROM `usertable` WHERE `email` = '$email' and `password`='$pass'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        
            $_SESSION['email'] = $user['email'];
            header("Location: index.php");
      
        } else {
            echo "<script>alert("invalid credentials")</script>;";
        }
    
}
?>

