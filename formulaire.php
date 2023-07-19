<!DOCTYPE html>
<html>
<head>
    <title>Calculatrice</title>
</head>
<body>
    <h1>Calculatrice</h1>
    <form action="calculate.php" method="post">
        <input type="number" name="num1" placeholder="Nombre 1" required>
        <input type="number" name="num2" placeholder="Nombre 2" required>
        <select name="operator">
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <button type="submit">Calculer</button>
    </form>
</body>
</html>

