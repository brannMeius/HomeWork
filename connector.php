<?php
    function calculator($z)
    {
        $x=0;
        $a1=(int)readline('Введите первое число'."\n");
        $a2=(int)readline('Введите второе число'."\n");
        if ($z == 1)
        {
            $cal = $a1 + $a2;
            $znak="+";
        }
            elseif ($z == 2)
        {
            if ($a2 == 0) {
                echo 'пошел нахуй, уебок';
                $x=1;
            }
                else {
                $cal = $a1 / $a2;
                $znak="/";
                }
        }
                elseif ($z == 3)
        {
            $cal = $a1 * $a2;
            $znak="*";
        }
                    elseif ($z == 4)
        {
            $cal = $a1 - $a2;
            $znak="-";
        }
        if ($z <= 4 && $z >= 0 && $x == 0) echo "$a1 $znak $a2 = $cal";
    }
    function farengeit($C)
    {
        $F = ($C * 1.8) + 32;
        echo "Ваше значение в фаренгейтах: $F";
    }
    function celsiy($F)
    {
        $C = ($F - 32) * 0.55;
        echo "Ваше значение в цельсиях: $C";
    }
    function perevod($t)
    {
        if ($t == 1)
        {
            $C=(int)readline('Введите температуру в цельсиях, чтоб получить ответ в фаренгейтах:');
            farengeit($C);
        }
        else if ($t == 2)
        {
            $F=(int)readline('Введите температуру в фаренгейтах, чтоб получить ответ в цельсиях:');
            celsiy($F);
        }
        else echo 'Иди нахуй, уебок!';
    }
    $d=(int)readline('какое задание из трех будем проверять?');
    if ($d == 1) {
        $t=(int)readline('Введите номер действия которое вам нужно: 
    1-перевести цельсии в фаренгейты.
    2-перевести фаренгейты в цельсии.');
        perevod($t);
    }
        else if ($d == 2)
        {
            $z=(int)readline("Выберите действие которое хотите провернуть \n
        1-складывать\n
        2-делить\n
        3-умножать\n
        4-вычитать\n.");
            calculator($z);
        }
