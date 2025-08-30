<!DOCTYPE html>
<html>
<head>
    <title>Student Report Card</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: auto;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        h2 {
            text-align: center;
        }
    </style>
</head>
<body>

<?php
// Student details
$name = "XYZ";

// Subjects and Marks
$subjects = [
    "Sub1" => 40,
    "Sub2" => 30,
    "Sub3" => 45,
    "Sub4" => 48,
    "Sub5" => 34
];

$max_marks_per_subject = 50;
$total_subjects = count($subjects);
$max_total = $max_marks_per_subject * $total_subjects;
$obtained_total = array_sum($subjects);
$percentage = ($obtained_total / $max_total) * 100;

// Result Logic
$passed = true;
foreach ($subjects as $marks) {
    if ($marks < 20) { // Assuming 40% passing per subject
        $passed = false;
        break;
    }
}

if ($passed) {
    if ($percentage >= 75) {
        $result = "With Distinction";
    } elseif ($percentage >= 60) {
        $result = "First Class";
    } else {
        $result = "Passed";
    }
} else {
    $result = "Failed";
}
?>

<h2>Name : <?php echo $name; ?></h2>

<table>
    <tr>
        <th>Subject Name</th>
        <th>Max Marks</th>
        <th>Obtained Marks</th>
    </tr>

    <?php foreach ($subjects as $subject => $marks): ?>
    <tr>
        <td><?php echo $subject; ?></td>
        <td><?php echo $max_marks_per_subject; ?></td>
        <td><?php echo $marks; ?></td>
    </tr>
    <?php endforeach; ?>

    <tr>
        <td><strong>Total</strong></td>
        <td><strong><?php echo $max_total; ?></strong></td>
        <td><strong><?php echo $obtained_total; ?></strong></td>
    </tr>

    <tr>
        <td><strong>Percentage</strong></td>
        <td colspan="2"><?php echo round($percentage, 1); ?></td>
    </tr>

    <tr>
        <td><strong>Result</strong></td>
        <td colspan="2"><?php echo ($passed ? "Passed" : "Failed") . " / " . $result; ?></td>
    </tr>
</table>

</body>
</html>