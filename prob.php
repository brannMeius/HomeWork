<?php
//file_put_contents('index.json', json_encode($client, JSON_UNESCAPED_UNICODE));
//$clients = json_decode(file_get_contents('index.json'), true);
    class Into
    {
        public function getClassName()
        {
            echo __CLASS__;
        }
    }
    //второе и третье
    class Math
    {
        public function summa($kol)
        {
            $number = 0;
            for ($i = 1; $i <= $kol; $i++) {
                if ($i === 1) $x = (int)readline("Введите первое число:\n");
                else $x = (int)readline("Введите следующее число:\n");
                $number = $number + $x;
            } return $number;
        }
        public function otn($kol)
        {
            $number = 0;
            if ($kol >= 1) {
                for ($i = 1; $i <= $kol; $i++) {
                    if ($i === 1) $x = - (int)readline("Введите первое число:\n");
                    else $x = (int)readline("Введите следующее число:\n");
                    $number = $number - $x;
                }
            } return $number;
        }
        public function del($kol)
        {
            $number = 1;
            if ($kol >= 1) {
                for ($i = 1; $i <= $kol; $i++) {
                    if ($i === 1) {
                        $x = (int)readline("Введите первое число:\n");
                        $number = $number * $x;
                    }
                    else {
                        $x = (int)readline("Введите следующее число:\n");
                        $number = $number / $x;
                    }
                }
            } return $number;
        }
        public function mno($kol)
        {
            $number = 1;
            if ($kol >= 1) {
                for ($i = 1; $i <= $kol; $i++) {
                    if ($i === 1) $x = (int)readline("Введите первое число:\n");
                    else $x = (int)readline("Введите следующее число:\n");
                    $number = $number * $x;
                }
            } return $number;
        }
        public function calcFactorial($number)
        {
            $j=1;
            if (gettype($number) === 'integer' && $number >= 1) {
                for ($i=1; $i <= $number; $i++) {
                    $j = $j * $i;
                }
            } return ($j);
        }
    }
    // Четвертое
    class Sort_Array
    {
        public function Input_Sort($j)
        {
            for ($i=0; $i <= $j-1; $i++) {
                $a[$i]=(int)readline("Введите элемент массива №". ($i+1). "  \n");
            }
            sort($a);
            echo ('Отсортированный массив:'. "\n");
            var_dump($a);
        }
    }
    //Пятое
