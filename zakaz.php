<?php
    require_once 'prob.php';

    $N = (int)readline("Какую часть из 4х проверяем?  ");
    if ($N === 1) {
        $into = new Into();
        $into->getClassName();
    } elseif ($N === 2) {
        $dey = (int)readline(" Что будем делать с числами?\n
        1-Суммировать\n
        2-Вычитать\n
        3-Умножать\n
        4-Делить\n
        5-Найдем факториал числа\n");
        if ($dey >= 1 && $dey <= 4) {
            $kol = (int)readline('Сколько чисел будет участвовать в выражении?  ');
            if ($kol >= 1) {
                {
                    if ($dey === 1) {
                        $math = new Math();
                        $number = $math->summa($kol);
                        echo "Сумма чисел = $number\n";
                    }
                    if ($dey === 2) {
                        $math = new Math();
                        $number = $math->otn($kol);
                        echo "Вычитание чисел = $number\n";
                    }
                    if ($dey === 3) {
                        $math = new Math();
                        $number = $math->mno($kol);
                        echo "Умножение чисел = $number\n";
                    }
                    if ($dey === 4) {
                        $math = new Math();
                        $number = $math->del($kol);
                        echo "Деление чисел = $number\n";
                    }
                }
            } else echo('Невозможно работать с таким к-вом чисел' . "\n");
        } elseif ($dey === 5) {
            $number = (int)readline('Введите число факториал с которого желаете получить: ');
            $math = new Math();
            $x = $math->calcFactorial($number);
            var_dump($x);
        } else echo 'Такого варианта нет';
    } elseif ($N === 3) {
        $j = (int)readline("Введите количество элементов массива: \n");
        $SA = new Sort_Array();
        $SA->Input_Sort($j);
    } elseif ($N === 4) {
        $pr = (int)readline("Какое действие нужно сделать?  \n
        1- Вывести всех пользователей. \n
        2- Найти клиента по id.  \n
        3- Добавить нового пользователя.\n
        4- Удалить пользователя.\n
        5- Изменение данных пользователя.\n
        ");
        $clients = json_decode(file_get_contents('index.json'), true);
        if ($pr === 1) var_dump($clients);
        // поиск по айди
        elseif ($pr === 2) {
            $id = readline('Введите ID пользователя: ');
            foreach ($clients as $value) {
                    if ($value['id'] === $id) var_dump($value);
            }
        } elseif ($pr === 3) {
            $name = readline('Введите имя пользователя: ');
            $id = readline('Введите id пользователя: ');
            $hb = readline('Введите дату рождения пользователя: ');
            $number = readline('Введите номер пользователя: ');
            $data = [$id=>['name'=>$name, 'id'=>$id, 'hb'=>$hb, 'number'=>$number]];
            $clients = $clients + $data;
            file_put_contents('index.json', json_encode($clients, JSON_UNESCAPED_UNICODE));
            var_dump($clients);
        } elseif ($pr === 4) {
            $id = readline('Введите ID пользователя: ');
            foreach ($clients as $kkk => $value) {
                foreach ($value as $key => $val) {
                    if ($val === $id) {
                        unset($clients[$kkk]);
                        file_put_contents('index.json', json_encode($clients, JSON_UNESCAPED_UNICODE));
                        var_dump($clients);
                    }
                }
            }
        } elseif ($pr === 5) {
            $id = readline('Введите ID пользователя: ');
            foreach ($clients as $kkk => $value) {
                foreach ($value as $key => $val) {
                    if ($val === $id) {
                        $nm = (int)readline("Что именно нужно изменить? \n
                        1- Имя.    2- Дата рождения.    3- Номер телефона.");
                        if ($nm === 1) {
                            $value['name'] = readline("Введите имя:  ");
                            $clients = [$id=>[$value['name'],$value['id'],$value['hb'],$value['number']]];
                            file_put_contents('index.json', json_encode($clients, JSON_UNESCAPED_UNICODE));
                        } elseif ($nm === 2) {
                            $value['hb'] = readline("Введите дату рождения:  ");
                            $clients = [$id=>[$value['name'],$value['id'],$value['hb'],$value['number']]];
                            file_put_contents('index.json', json_encode($clients, JSON_UNESCAPED_UNICODE));
                        } elseif ($nm === 3) {
                            $value['number'] = readline("Введите номер телефона:  ");
                            $clients = [$id=>[$value['name'],$value['id'],$value['hb'],$value['number']]];
                            file_put_contents('index.json', json_encode($clients[$kkk], JSON_UNESCAPED_UNICODE));
                        } else echo 'Нет такого варианта';
                    }
                }
            }
        }
    }