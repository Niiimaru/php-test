<?php

for ($i = 1; $i <=100; $i++) {
    //echo $i.' ';
    if ($i % 15 === 0) {
        echo 'FizzBuzz'.'<br>';
    } else if ($i % 5 === 0) {
        echo 'Fizz'.'<br>';
    } else if ($i % 3 === 0) {
        echo 'Buzz'.'<br>';
    } else {
        echo $i.'<br>';
    }
}

echo '<br><br>';

for ($i = 1; $i <= 10000; $i++) {

    $point = 0;
  
    for ($j = 1; $j <= $i; $j++) {
      if ($i % $j === 0) {
        $point += 1;
      }
    }
  
    if ($point == 2) {
      echo $i .'<br>';
    }
  
  }