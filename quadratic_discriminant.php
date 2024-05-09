<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quadratic Discriminant Calculator Result</title>
</head>
<body>
    <h2>Quadratic Discriminant Calculator Result</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];

        $discriminant = $b * $b - 4 * $a * $c;

        echo "<p>The discriminant value is: $discriminant</p>";
    }
    ?>
</body>
</html>
