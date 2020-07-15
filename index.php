<?php
if(! isset($_GET['num1'])&& ! isset($_GET['num2'])) {
  echo "Enter botn the Number!";
}
else if($_GET['num1']>$_GET['num2']) {
  echo "Enter botn the Number Correctly !";
}
else {
  echo "LIST OF PRIME NUMBERS BETWEEN ".$_GET['num1']." AND ".$_GET['num2'].":\n";
  function prime($n)
  {
    if ($n == 1) {
      return 0;
    }
    for ($i = 2; $i < $n; $i++) {
      if ($n % $i == 0) {
        return 0;
      }
    }
    return 1;
  }
  $a = $_GET["num1"];
  $b = $_GET["num2"];
  for ($i = $a; $i <= $b; $i++) {
    $p = prime($i);
    if ($p == 1) {
      echo $i." ";
    }
  }
}
 ?>


<form class="" action="" method="get">
  <input type="text" name="num1" value=""><br>
  <input type="text" name="num2" value=""><br>
  <input type="submit" name="" value="Submit">

</form>
