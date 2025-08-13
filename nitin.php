<?php
if(isset($_POST['submit'])) {

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operation = $_POST['operation'];
switch ($operation) {
    case 'add':
        $result = $num1 + $num2;
        break;
        case 'subtract':
            $result = $num1 - $num2;
            break;
            case 'multiply':
                $result = $num1 * $num2;
                break;
               case 'divide':
                if ($num2 == 0) {
                    $result = "Error:Division by zero is not allowed.";
                  } else {
                    $result = $num1 / $num2;
                  }
                  break;
                  default:
                  $result = "Invaild operation!";
                  break;
                }
            }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php calculator</title>
</head>
<body>
    <h2> php calculator </h2>
    <form method ="post" action="">
        <input type ="number" name= "num1" placeholder ="enter first number">
        <input type ="number" name= "num2" placeholder ="enter second number">
        <select name ="operation">
            <option value ="add">add </option>
            <option value ="subtract ">subtract </option>
            <option value ="multiply ">multiply </option>
            <option value ="divide " >divide </option>
</select><br><br>
<input type ="submit" value ="calculate">
</from>
<?php
   if(isset($result)){
    echo $result;
   }
   ?>
   </body>
   </html>














