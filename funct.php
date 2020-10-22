<?php
    function calculator($z) {
        $x=0;
        $a1=(int)readline('Введите первое число'."\n");
        $a2=(int)readline('Введите второе число'."\n");
        if ($z == 1) {
            $cal = $a1 + $a2;
            $znak="+";
            }
            elseif ($z === 2) {
                if ($a2 === 0) {
                    echo 'пошел нахуй, уебок'. "\n";
                    $x=1;
                    }
                else {
                    $cal = $a1 / $a2;
                    $znak="/";
                }
            }
            elseif ($z === 3) {
                $cal = $a1 * $a2;
                $znak="*";
            }
            elseif ($z === 4) {
                $cal = $a1 - $a2;
                $znak='-';
            }
        if ($z <= 4 && $z >= 0 && $x === 0)
            echo "$a1 $znak $a2 = $cal". "\n";
    }
    function farengeit($C) {
        $F = ($C * 1.8) + 32;
        echo "Ваше значение в фаренгейтах: $F". "\n";
    }
    function celsiy($F) {
        $C = ($F - 32) * 0.55;
        echo "Ваше значение в цельсиях: $C". "\n";
    }
    function perevod($t) {
        if ($t === 1) {
            $C=(int)readline('Введите температуру в цельсиях, чтоб получить ответ в фаренгейтах:'. "\n");
            farengeit($C);
        }
        else if ($t === 2) {
            $F=(int)readline('Введите температуру в фаренгейтах, чтоб получить ответ в цельсиях:'. "\n");
            celsiy($F);
        }
        else echo 'Иди нахуй, уебок!'. "\n";
    }
    function greaterthan($z1, $z2) {
        if ($z1 > $z2) $gre = true;
        else $gre = false;
        return $gre;
    }
    function lessthan($z1, $z2) {
        if ($z1 < $z2) $les = true;
        else $les = false;
        return $les;
    }
    function equals($z1, $z2) {
        if ($z1 === $z2) $equ = true;
        else $equ = false;
        return $equ;
    }
    function valid($doeb)
    {
        if ($doeb >= 1 && $doeb <= 3) {
            $z1 = (int)readline("Введите первое число" . "\n");
            $z2 = (int)readline("Введите второе число" . "\n");
            if ($doeb === 1) {
                $znak = '>';
                $gre = greaterthan($z1, $z2);
                if ($gre === true)
                    $id = 1;
                else $id = 0;
            } elseif ($doeb === 2) {
                $znak = '<';
                $les = lessthan($z1, $z2);
                if ($les === true)
                    $id = 1;
                else $id = 0;
            } elseif ($doeb === 3) {
                $znak = '=';
                $equ = equals($z1, $z2);
                if ($equ === true)
                    $id = 1;
                else $id = 0;
            } else
                echo "Хватит вводить хуету" . "\n";
            if ($id === 1)
                echo "Ваше выражение $z1 $znak $z2 - верно" . "\n";
            elseif ($id === 0)
                echo "Ваше выражение $z1 $znak $z2 - ошибочно" . "\n";
            else ("Пошел нахуй");
        }
        else
            echo ("Пошел нахуй \n");
    }