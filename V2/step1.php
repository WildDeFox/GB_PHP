<?php
while (true) {
  $quest = readline("«В каком году произошло крещение
  Руси? (Варианты: 810, 990 или 740 год)");
  if ($quest == "810") {
    echo "Поздравляю, ответ правильный";
    break;
  } else if ($quest == "990" OR $quest == "740") {
    echo "Ответ неверный";
    break;
  } else {
    continue;
  }
}
