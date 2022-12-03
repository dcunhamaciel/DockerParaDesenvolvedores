<?

$message = $_POST["message"];

$files = scandir('./messages');

$num_files = is_array($files) ? count($files) - 2 : 0;

$fileName = "msg-{$num_files}.txt";

$file = fopen("./messages/{$fileName}", "x");

fwrite($file, $message);

fclose($file);

header("Location: index.php");
