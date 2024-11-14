
<html>
<head>
     <title>Mark Entry Form</title>
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
            width: 300px;
            text-align: center;
        }

        .form-container h2 {
            margin-bottom: 15px;
            font-size: 24px;
            color: #333;
        }

        .form-container label {
            display: block;
            margin-bottom: 8px;
            font-size: 16px;
            color: #555;
        }

        .form-container input[type="number"] {
            width: 80%;
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
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Enter Your Mark</h2>
        <form method='post' action="">
            <label for="mark">Mark:</label>
            <input type="number" id="mark" name="mark" required>
            <button type="submit" name='submit'>Calculate Grade</button>
        </form>
        
   
<?php
  $grade='';
if(isset($_POST['submit'])){
    $mark = $_POST['mark'];
    

    if($mark>=60){
    $grade='A';
    }
    else if($mark>=45){
    $grade='B';
    }
    else if($mark>=35){
    $grade='C';
    }
    else{
    $grade='D';
    
    }
    echo "<h4>Your Grade is:$grade</h4>";
}
?>
    </div>
    
    

</body>
</html>

