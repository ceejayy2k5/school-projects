<!DOCTYPE html>
<html>
<head>
    <title>Greeting App</title>
</head>
<body>
<h2>Greeting App</h2>
<form method="post">
    Name: <input type="text" name="name" required><br><br>
    Age: <input type="number" name="age" required><br><br>
    <input type="submit" name="submit" value="Greet Me">
</form>

<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $age = $_POST['age'];
    
    echo "<h3>Hello, $name!</h3>";

    if($age >= 18){
        echo "<p>You are an adult.</p>";
    } else {
        echo "<p>You are a minor.</p>";
    }
}
?>
</body>
</html>