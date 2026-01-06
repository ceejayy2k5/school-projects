<?php
// Array to store students and their scores
$students = [
    "Tomi" => 85,
    "Ada" => 92,
    "Chidi" => 78,
    "Emeka" => 60,
    "Sade" => 45
];

// Function to calculate grade
function getGrade($score) {
    if ($score >= 90) return "A";
    elseif ($score >= 80) return "B";
    elseif ($score >= 70) return "C";
    elseif ($score >= 60) return "D";
    else return "F";
}

// Display results
echo "<h2>Student Scores</h2>";
echo "<table border='1' cellpadding='5'>";
echo "<tr><th>Name</th><th>Score</th><th>Grade</th></tr>";

$total = 0;
foreach ($students as $name => $score) {
    $total += $score;
    echo "<tr>";
    echo "<td>$name</td>";
    echo "<td>$score</td>";
    echo "<td>" . getGrade($score) . "</td>";
    echo "</tr>";
}

$average = $total / count($students);
echo "</table>";
echo "<p><strong>Average Score: </strong>" . round($average, 2) . "</p>";
?>