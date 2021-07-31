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

  //５次元配列
$fat = array('アボカド', 'ナッツ類','オリーブオイル');
$protein = array('肉類', '乳製品', '豆類');
$carbo = array('米', 'パン', 'イモ類');

$food = array($fat, $protein, $carbo);

echo $food[0][1].'<br>';

$morning = array('高カロリー', '低GI食品');
$lunch = array('中カロリー', 'バランス重視');
$dinner = array('低カロリー', '早めに食べる');

$timing = array($morning, $lunch, $dinner);
echo $timing[0][0].'<br>';

$nutrition = array($food, $timing);
echo $nutrition[0][0][2].'<br>';


$wait = array('高重量低レップ', '低重量高レップ');
$aerobic = array('ランニング', 'ウオーキング', 'バイク');

$training = array($wait, $aerobic);

$exercise =  array('出勤前', '帰宅途中');
$jim = array('エニタイムフィットネス','ゴールドジム','アクトス');

$busy = array($exercise, $jim);

$play = array($training, $busy);
echo $play[0][0][0].'<br>';


$sleepy = array('寝る前にカモミールティーを飲む', '寝る２時間前に入浴', '寝る前にケータイ触らない');
$comfortable = array('アロマをたく', '間接照明をつける', '適度な温度');

$quality = array($sleepy, $comfortable);

$sleep = array($quality);
echo $sleep[0][1][0].'<br>';

$muscle = array($nutrition, $play, $sleep);
echo $muscle[0][0][0][0];