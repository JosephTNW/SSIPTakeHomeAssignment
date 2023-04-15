<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Exception</title>
</head>
<body>
    <form action="throw.php" method="POST">
        <legend>Divide things here! Beware There may be Exceptions!</legend>
        <label for="dividend">Dividend</label>
        <input id="dividend" name="dividend" placeholder="Ex: 8">
        <label for="divisor">Divisor</label>
        <input id="divisor" name="divisor" placeholder="Ex: 0">
        <button type="submit">Divide</button> <br>
    </form>
    <form action="trycatchfinally.php" method="POST">
        <legend>Divide things here! Beware There may be Exceptions! p.2</legend>
        <label for="dividend">Dividend</label>
        <input id="dividend" name="dividend" placeholder="Ex: 8">
        <label for="divisor">Divisor</label>
        <input id="divisor" name="divisor" placeholder="Ex: 0">
        <button type="submit">Divide</button> <br>
    </form>
    <form action="trycatch.php" method="POST">
        <legend>Input Your Height (Mandatory)</legend>
        <label for="height">Height</label>
        <input id="height" name="height" placeholder="Ex: 0">
        <button type="submit">Input</button> <br>
    </form>
</body>
</html>

