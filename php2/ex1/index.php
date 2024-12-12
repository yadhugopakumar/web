<?php
include('conn.php');
$query="SELECT * FROM `studentTable` "; 
$q=mysqli_query($con,$query);
if($q){
	
	if(mysqli_num_rows($q)>0){
		//while($row=mysqli_fetch_assoc($q)){
			//echo"$row[name]";
		//}
		
		$res=mysqli_num_rows($q);
	}
	
}
else{
	echo("error");
}
?>
<html>
<head>
<title>student list</title>
</head>
<style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction:row;
            justify-content: space-evenly;
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
        .table table{
      
        width:100%;
        }
    </style>

<body>
	
	 <div class="form-container">
        <h2>Add Details</h2>
        <form method='post' action="">
            <label for="num">Name:</label>
            <input type="text" id="num" name="name" required>
             <label for="num">Email:</label>
            <input type="text" id="num" name="email" required>
            <label for="num">Class:</label>
            <input type="text" id="num" name="class" required>
            <button type="submit" name='submit'>Add Details</button>
        </form>
	<div>
	
	<div class='table'>
		<h3>student details table</h3>
		<table border=2 width=200>
		
			<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Email</th>
			<th>Class</th>
			</tr>
		<tbody>
		<?php
		while($row=mysqli_fetch_assoc($q)){
		echo"<tr>";
		echo"<td>".$row["id"]."</td>";
		echo"<td>".$row["name"]."</td>";
		echo"<td>".$row["email"]."</td>";
		echo"<td>".$row["class"]."</td>";
		echo"</tr>";
			
			}
			?>
				<?php
				
				if(isset($_POST['submit'])){
				$name = $_POST['name'];
				$email = $_POST['email'];
				$class = $_POST['class'];
				$sql="INSERT INTO `studentTable`( `name`, `email`, `class`) VALUES ('$name','$email','$class')";
				$q=mysqli_query($con,$sql);
				if($q){
				
				echo"<script>alert('value inserted');</script>";
				header('location:index.php');
				
				}
				else{
				echo"<script>alert('error');</script>";
				}
				}	
		?>
		</tbody>
		</table>
	</div>
	
</body>
</html>
<?php
mysqli_close($con);
?>
