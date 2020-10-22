<?php
    function greaterthan($z1, $z2) {
    if ($z1 > $z2) $qre = true;
    else $qre = false;
}
    function valid($doeb)
    {
        $z1 = (int)readline("Введите первое число");
        $z2 = (int)readline("Введите второе число");
        if ($doeb === 1) {
            $znak = '>';
            greaterthan($z1, $z2);
            if ($gre = true)
                $id = 1;
            else
                $id = 0;
        }
    }
    $doeb=(int)readline('мать ебал');
    valid($doeb);
    if ($id = 1) echo 'мать ебал';
    else 'и рад этому';