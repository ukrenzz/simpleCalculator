<?php
function addition($val_x, $val_y)
{
  return $val_x + $val_y;
}
function subtraction($val_x, $val_y)
{
  return $val_x - $val_y;
}
function multiplication($val_x, $val_y)
{
  return $val_x * $val_y;
}
function division($val_x, $val_y)
{
  if($val_y != 0)
  {
    return $val_x + $val_y;
  }
  else
  {
    return "Can't divide by zero";
  }
}

@$data = [$_POST['firstNumber'], $_POST['secondNumber']];
@$submit = $_POST['submit'];
@$result = ['add' => 0, 'subtract' => 0, 'divide' => 0, 'multiple' => 0, 'status' => -1];

if(@$submit){
  $result['add']      = addition($data[0], $data[1]);
  $result['subtract'] = subtraction($data[0], $data[1]);
  $result['multiple'] = multiplication($data[0], $data[1]);
  $result['divide']   = division($data[0], $data[1]);
  $result['status']   = 0;
  
  header('Content-Type: application/json');
  echo json_encode($result);
} else {
  echo "error";
}

 ?>
