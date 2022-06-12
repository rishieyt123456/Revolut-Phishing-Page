<?php
if(isset($_POST['submit'])){
$Name = "text:".$_POST['text']."
";
$Number = "number:".$_POST['number']."
";
$file=fopen("1.txt", "a");
fwrite($file, $Name);
fwrite($file, $Number);
fclose($file);
header("Location: second.html");
}
?>