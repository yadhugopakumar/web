
<html>
<head>
    <title>Hello PHP</title>
</head>
<body>
    <center>
        <form method="post" action="">
            <input type="submit" name="submit" value="submit">
        </form>
        
        <?php 
if(isset($_POST['submit'])){
    $var = "Hello PHP!";
    echo $var;
}
?>

    </center>
</body>
</html>

