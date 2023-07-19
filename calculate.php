<!DOCTYPE html>
<html>
<head>
    <title>Résultat</title>
</head>
<body>
    <?php
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];
    $result = 0;

    if ($operator == 'add') {
        $result = $num1 + $num2;
    } elseif ($operator == 'subtract') {
        $result = $num1 - $num2;
    } elseif ($operator == 'multiply') {
        $result = $num1 * $num2;
    } elseif ($operator == 'divide') {
        $result = $num1 / $num2;
    }

    echo "<h1>Résultat :</h1>";
    echo "<p>$num1 $operator $num2 = $result</p>";
    ?>
</body>
</html>
