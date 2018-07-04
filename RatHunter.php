<?php
system('clear');
require("Functions.php");
require("Header.php");
echo "\n";
echo "	   ";
$file = readline("Enter File Name: ");
if (preg_match("/.exe/",$file))
{
if(!file_exists($file))
{
echo $cyan."file not found !";
exit(1);
}
else
{
exe($file);
}
}
elseif(preg_match("/.apk/",$file))
{
if(!file_exists($file))
{
echo $cyan."file not found !";
exit(1);
}
else
{
apk($file);
}
}
else
{
echo $cyan."File type unsupported !";
exit(1);
}
?>
