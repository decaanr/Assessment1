<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $input1 = $_POST["input1"];
  $input2 = $_POST["input2"];
  $operator = $_POST["operator"];

  if ($operator == "+") {
    $result = $input1 + $input2;
  } else if ($operator == "-") {
    $result = $input1 - $input2;
  } else if ($operator == "*") {
    $result = $input1 * $input2;
  } else if ($operator == "/") {
    $result = $input1 / $input2;
  }

  echo "Hasil operasi " . $input1 . " " . $operator . " " . $input2 . " adalah: " . $result;
}
?>
