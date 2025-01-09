<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body></body>
</html><form action="rev.php" method="post">
Enter a number: <input type="text" name="num">
<input type="submit" name="submit" value="Reverse">
</form>
<?php
if (isset($_POST['submit'])) {
$num = $_POST['num'];
$reverse = strrev($num);
echo "Reverse of $num is: $reverse";
}
