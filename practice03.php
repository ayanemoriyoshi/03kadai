<?php
$name ="森芳彩音";

if ($name = "森芳彩音") {
  echo "私は森芳彩音です";
} else {
    echo  "あなたの名前ではありません";
}

$total = 0;
echo $total;

for ($i = 0; $i <= 10000; $i++) {
  $total += $i;
}
echo $total;

$fruits = array("いちご", "マスカット", "みかん", "梨", "キウイ");
foreach($fruits as $fruit){
    echo $fruit;
}



// for文の始めの値を定義する
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for ($i = $start; $i <= $end; $i++) {

  // 5で割り切れたら{}内を実行する
  if ($i / 5 == 0){
    echo $i;
  }
}