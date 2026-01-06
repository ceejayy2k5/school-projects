<!DOCTYPE html>
<html>
<head>
    <title>BMI Calculator</title>
</head>
<body>
<h2>BMI Calculator</h2>
<form method="post">
    Weight (kg): <input type="number" step="0.1" name="weight" required><br><br>
    Height (m): <input type="number" step="0.01" name="height" required><br><br>
    <input type="submit" name="submit" value="Calculate BMI">
</form>

<?php
if(isset($_POST['submit'])){
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $bmi = $weight / ($height * $height);
    $bmi = round($bmi, 2);
    
    echo "<h3>Your BMI: $bmi</h3>";

    if($bmi < 18.5) echo "<p>Category: Underweight</p>";
    elseif($bmi < 25) echo "<p>Category: Normal weight</p>";
    elseif($bmi < 30) echo "<p>Category: Overweight</p>";
    else echo "<p>Category: Obese</p>";
}
?>
</body>
</html>