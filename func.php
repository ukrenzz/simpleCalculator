<?php

function checkOperator($value)
{
    if(count(explode('+', $value)) > 1 || count(explode('-', $value)) > 1 || count(explode('*', $value)) > 1 || count(explode('/', $value)) > 1)
        return true;
    return false;
}
function checkError($arrayOperator, $arrayNumber, $code, $operator)
{
  echo $code . " ". $operator ." </br>";
  print_r($arrayOperator);
  echo "</br>";
  print_r($arrayNumber);
  echo "</br></br>";
}

function splitString($string)
{
  $lengthString = strlen($string);
  $number = [];
  $operator = [];
  $tempNumber = "";
  $i = 0;

  for ($strChar=0; $strChar < $lengthString; $strChar++) {
      $value = $string[$strChar];
      if(++$i === $lengthString){
          $tempNumber .= (string)$value;
          array_push($number, $tempNumber);
          $tempNumber = "";

      }
      else if ($value == '+' || $value == '-' || $value == '*' || $value == '/') {
          array_push($operator, $value);
          array_push($number, $tempNumber);
          $tempNumber = "";

      }
      else {
          $tempNumber .= (string)$value;
      }
  }

  $result = ["number"=>$number, "operator"=>$operator, "stringLength"=>$lengthString];
  return $result;
}

function eliminate($number, $operator)
{
  $tempNumber = [];
  $tempOperator = [];
  $index=0;
  foreach ($operator as $value)
  {

      // checkError($tempOperator, $tempNumber, '0', $operator[$index]);
      $tempRes = 0;
      $subTempRes = 0;
      if(count($operator) < 2){
        if($operator[$index] == '*')
          $tempRes = $number[$index] * $number[$index + 1];
        else if($operator[$index] == '/')
          $tempRes = $number[$index] / $number[$index + 1];
        else if($operator[$index] == '+')
          $tempRes = $number[$index] + $number[$index + 1];
        else if($operator[$index] == '-')
          $tempRes = $number[$index] - $number[$index + 1];
        array_push($tempNumber, $tempRes);

        // checkError($tempOperator, $tempNumber, '1', $operator[$index]);

      }
      else
      {

        if($index == 0 || $index == count($operator) - 1)
        {
          if(($operator[$index] == '*' || $operator[$index] == '/'))
          {
            if($operator[$index] == '*')
              $tempRes = $number[$index] * $number[$index + 1];
            else if($operator[$index] == '/')
              $tempRes = $number[$index] / $number[$index + 1];
            array_push($tempNumber, $tempRes);

            // checkError($tempOperator, $tempNumber, '2', $operator[$index]);
          }
          else if($index == 0)
          {
            if(
              ($operator[$index] == '+' || $operator[$index] == '-') &&
              ($operator[$index + 1] == '*' || $operator[$index + 1] == '/')
              )
            {
              array_push($tempOperator, $operator[$index]);
              array_push($tempNumber, $number[$index]);

              // checkError($tempOperator, $tempNumber, '3', $operator[$index]);
            }
            else if(
              ($operator[$index] == '+' || $operator[$index] == '-') &&
              ($operator[$index + 1] == '+' || $operator[$index + 1] == '-')
              )
            {
              if($operator[$index] == '+')
                $tempRes = $number[$index] + $number[$index+1];
              else if($operator[$index] == '-')
                $tempRes = $number[$index] - $number[$index+1];
              array_push($tempNumber, $tempRes);

              // checkError($tempOperator, $tempNumber, '4', $operator[$index]);
            }
          } else if($index == count($operator) -1)
          {
            if(
              ($operator[$index] == '+' || $operator[$index] == '-') &&
              ($operator[$index - 1] == '*' || $operator[$index - 1] == '/')
              )
            {
              array_push($tempOperator, $operator[$index]);
              array_push($tempNumber, $number[$index+1]);

              // checkError($tempOperator, $tempNumber, '5', $operator[$index]);
            }
            else if(
              ($operator[$index] == '+' || $operator[$index] == '-') &&
              ($operator[$index - 1] == '+' || $operator[$index - 1] == '-')
              )
            {
              $subTempRes = $tempNumber[count($tempNumber) - 1];
              if($operator[$index] == '+')
                $tempRes = $subTempRes + $number[$index + 1];
              else if($operator[$index] == '-')
                $tempRes = $subTempRes - $number[$index + 1];
              $tempNumber[count($tempNumber) - 1] = $tempRes;

              // checkError($tempOperator, $tempNumber, '6', $operator[$index]);
            }
          }

        }
        else if($index > 0 && $index < count($operator) - 1){
          if(($operator[$index] == '+' || $operator[$index] == '-'))
          {
            if(
              ($operator[$index + 1] == '*' || $operator[$index + 1] == '/') ||
              ($operator[$index - 1] == '*' || $operator[$index - 1] == '/')
              )
            {
              // save operator
              array_push($tempOperator, $operator[$index]);

              // checkError($tempOperator, $tempNumber, '7', $operator[$index]);
            }
            else if(
              ($operator[$index + 1] == '+' || $operator[$index + 1] == '-') &&
              ($operator[$index - 1] == '+' || $operator[$index - 1] == '-')
              )
            {
              // calc back
              $subTempRes = $tempNumber[count($tempNumber) - 1];
              if($operator[$index] == '+')
                $tempRes = $subTempRes + $number[$index + 1];
              else if($operator[$index] == '-')
                $tempRes = $subTempRes - $number[$index + 1];
              $tempNumber[count($tempNumber) - 1] = $tempRes;

              // checkError($tempOperator, $tempNumber, '8', $operator[$index]);
            }
          }
          else if(($operator[$index] == '*' || $operator[$index] == '/'))
          {
            if(
              (($operator[$index + 1] == '*' || $operator[$index + 1] == '/') ||
              ($operator[$index - 1] == '*' || $operator[$index - 1] == '/')) &&
              (($operator[$index + 1] == '+' || $operator[$index + 1] == '-') ||
              ($operator[$index - 1] == '*' || $operator[$index - 1] == '/'))
              )
            {
              // calc back
              $subTempRes = $tempNumber[count($tempNumber) - 1];
              if($operator[$index] == '*')
                $tempRes = $subTempRes * $number[$index + 1];
              else if($operator[$index] == '/')
                $tempRes = $subTempRes / $number[$index + 1];
              $tempNumber[count($tempNumber) - 1] = $tempRes;

              // checkError($tempOperator, $tempNumber, '9', $operator[$index]);
            }
            else if(
              (($operator[$index + 1] == '+' || $operator[$index + 1] == '-') &&
              ($operator[$index - 1] == '+' || $operator[$index - 1] == '-')) ||
              (($operator[$index + 1] == '*' || $operator[$index + 1] == '/') &&
              ($operator[$index - 1] == '+' || $operator[$index - 1] == '-'))
              )
            {
              // calc this
              if($operator[$index] == '*')
                $tempRes = $number[$index] * $number[$index + 1];
              else if($operator[$index] == '/')
                $tempRes = $number[$index] / $number[$index + 1];

              array_push($tempNumber, $tempRes);

              // checkError($tempOperator, $tempNumber, '10', $operator[$index]);
            }
          }
        }
      }
      $index++;
  }
  return ['number'=>$tempNumber, 'operator'=>$tempOperator];
}
function finishingCalculate($number, $operator){
  $index=0;
  $res = $number[$index];
  foreach ($operator as $value)
  {
      if($value == '+')
          $res += $number[$index + 1];
      else if($value == '-')
          $res -= $number[$index + 1];
      $index++;
  }
  return $res;
}

function calculate($string = "5+5-0+5+3")
{
  $status = "";
  $code = "";
  $message = "";
  $result = "";
  try
  {
    // Checked for bracket operator
    if(strpos($string, '(') != false ){
      $openBracket = [];
      $closeBraceket = [];



    }


    $data = splitString($string);
    $lengthString = $data['stringLength'];
    $dataNumber = $data['number'];
    $dataOperator = $data['operator'];
    $res = 0;

    $eliminateData = eliminate($dataNumber, $dataOperator);
    $number = $eliminateData['number'];
    $operator = $eliminateData['operator'];

    if(count($number) > 1)
      $res = finishingCalculate($number, $operator);
    else if (count($number) == 1)
      $res = $number[0];

    $status = "Success";
    $code = 0;
    $message = "Your number has been calculated";
    $result = $res;

  }
  catch (Exception $e)
  {
    $status = "Failed";
    $code = $e.getCode();
    $message = $e.getMessage();
    $result = "-";
  }
  finally
  {
    return $data[] = array('status'=> $status, 'code'=> $code, 'message'=>$message, 'result'=>$result);
  }
}


@$text = $_POST['textvalue'];
@$submit = $_POST['submit'];


if(@$submit == "true"){
  $data = calculate($text);

  header('Content-Type: application/json');
  echo json_encode($data);

  exit;
}

?>
