<!DOCTYPE html>
<html lang="en">
<head><title>Document</title></head><body></body>
</html><form action="factorial.php" method="post">
Enter a number: <input type="text" name="num">
<input type="submit" name="submit" value="Calculate Factorial">
</form>
<?php
if (isset($_POST['submit'])) {
$num = $_POST['num'];
$factorial = 1;
for ($i = 1; $i <= $num; $i++) {
$factorial *= $i;
}
echo "Factorial of $num is: $factorial";
}
