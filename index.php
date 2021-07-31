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
//最下層
$fat = array('アボカド', 'ナッツ類','オリーブオイル');
$protein = array('肉類', '乳製品', '豆類');
$carbo = array('米', 'パン', 'イモ類');

//最下層の１個前
$food = array($fat, $protein, $carbo);


//最下層
$morning = array('高カロリー', '低GI食品');
$lunch = array('中カロリー', 'バランス重視');
$dinner = array('低カロリー', '早めに食べる');

//最下層の１個前
$timing = array($morning, $lunch, $dinner);

//最上位の１個下
$nutrition = array($food, $timing);
echo $nutrition[0][0][2].'<br>';

//最下層
$wait = array('高重量低レップ', '低重量高レップ');
$aerobic = array('ランニング', 'ウオーキング', 'バイク');

//最下層の１個前
$training = array($wait, $aerobic);

//最下層
$exercise =  array('出勤前', '帰宅途中');
$jim = array('エニタイムフィットネス','ゴールドジム','アクトス');

//最下層の１個前
$busy = array($exercise, $jim);

//最上位の１個下
$play = array($training, $busy);
echo $play[0][0][0].'<br>';

//最下層
$sleepy = array('寝る前にカモミールティーを飲む', '寝る２時間前に入浴', '寝る前にケータイ触らない');
$comfortable = array('アロマをたく', '間接照明をつける', '適度な温度');

//最下層の１個前
$quality = array($sleepy, $comfortable);

//最上位の１個下
$sleep = array($quality);
echo $sleep[0][1][0].'<br>';

//最上位
$muscle = array($nutrition, $play, $sleep);
echo $muscle[0][0][0][0];