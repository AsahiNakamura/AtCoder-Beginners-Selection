<?php
// 問題文
// 黒板に N 個の正の整数 A1,…,AN が書かれています．

// すぬけ君は，黒板に書かれている整数がすべて偶数であるとき，次の操作を行うことができます．

// 黒板に書かれている整数すべてを，2 で割ったものに置き換える．
// すぬけ君は最大で何回操作を行うことができるかを求めてください．

// 制約
// 1≤N≤200
// 1≤Ai≤109

// 入力
// 入力は以下の形式で標準入力から与えられる。
// N
// A1 A2 ... AN

// 出力
// すぬけ君は最大で何回操作を行うことができるかを出力せよ．

fscanf(STDIN, '%d', $N); //N個の整数
$strA = fgets(STDIN); //整数たち

$aryA = preg_split("/[\s]+/", $strA, -1, PREG_SPLIT_NO_EMPTY);

$isEven = true;
$count = 0;

do {
    //偶数チェック. 偶数ならば続行.
    for($i = 0; $i < $N; $i++) {
        $rest = $aryA[$i] % 2;
        if($rest > 0) {
            $isEven = false;
            echo $count;
            return false;
        }
    }

    if($isEven) {
        for($j = 0; $j < $N; $j++) {
            $aryA[$j] = $aryA[$j] / 2;
        }
        $count++;
    }
} while($isEven);
?>