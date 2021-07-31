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

$muscle = array(isset($nutrition), isset($play), isset($sleep));


$nutrition = array(isset($meal), isset($timing));
$play = array(isset($training), isset($busy));
$sleep = array(isset($high_quality));

$meal = array(isset($fat), isset($protein), isset($carbo));
$timing = array(isset($morning), isset($lunch), isset($dinner));
$training = array(isset($wait), isset($aerobic));
$busy = array(isset($exercise), isset($jim));
$high_quality = array(isset($hoursleep), isset($comfortable));

$fat = array('アボカド', 'ナッツ類', 'オリーブオイル');
$protein = array('肉類', '乳製品', '豆類');
$carbo = array('米', 'パン');
$morning = array('高カロリー', '低GI食品');
$lunch = array('中カロリー', 'バランス重視');
$dinner = array('低カロリー', '早めに食べる');
$wait = array('高重量低レップ', '低重量高レップ');
$aerobic = array('ランニング', 'バイク', 'ウォーキング');
$exercise = array('出勤前', '帰宅途中');
$jim = array('エニタイムフィットネス', 'コナミスポーツクラブ', 'ゴールドジム');
$hoursleep = array('寝る前にカモミールティーを飲む', '寝る２時間前に入浴', '寝る前にケータイを触らない');
$comfortable = array('アロマをたく', '間接照明を用いる', '快適な温度管理');

var_dump($meal);