
<html>
<head>
     <title>Array reverse</title>
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

        .form-container input[type="text"] {
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
        <h2>Array reverse</h2>
        <form method='post' action="">
            <label for="num">Enter array(comma seperated):</label>
            <input type="text" id="num" name="arraylist" required>
            <button type="submit" name='submit'>Reverse</button>
        </form>
        
   
<?php
if (isset($_POST['submit'])) {

    $arraylist = $_POST['arraylist'];
    $array = explode(',', $arraylist);
    rsort($array);

    echo "<h4>Reverse sorted array: " . implode(',', $array) . "</h4>";    
}
?>


    </div>
    
    

</body>
</html>

