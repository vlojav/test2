<?php

#if ($_POST && $_POST['address']) {
#$old_path = getcwd();
#chdir('/var/scripts/');
#exec ("./test.sh" . escapeshellarg($_POST['address']), $output); 
#exec ("/var/scripts/test.sh" . escapeshellarg($_POST['address']), $output); 
#echo $output;
#chdir($old_path);
#}

#$file = 'test.txt';
#$current = file_get_contents($file);
#$current .= "test\n";
#file_put_contents($file, $current);


if ($_GET['address'] != "false") {
$input = escapeshellarg($_GET['address']);
#echo $input;
$result=shell_exec("/var/scripts/test.sh '".$input."'");
echo $result;
}
else {
echo "Invalid";
}

#echo $_GET['address'];

$file = 'last_executed.txt';
$d = shell_exec('date');
file_put_contents($file, $d);
?>
