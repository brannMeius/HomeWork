<?php
    require_once 'funct.php';
    $d=(int)readline('какое задание из трех будем проверять?');
    if ($d === 1) {
        $t=(int)readline('Введите номер действия которое вам нужно: 
        1-перевести цельсии в фаренгейты.
        2-перевести фаренгейты в цельсии.');
        perevod($t);
    }
    elseif ($d === 2) {
        $z=(int)readline("Выберите действие которое хотите провернуть \n
        1-складывать\n
        2-делить\n
        3-умножать\n
        4-вычитать\n.");
        calculator($z);
    }
    elseif ($d === 3) {
        $doeb=(int)readline("Какое число должно быть больше?\n
        1-первое\n
        2-второе\n
        3-числа равны\n");
        valid($doeb);
    }
    else echo "Ну и какого хуя?". "\n";
