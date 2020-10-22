<?php

require_once 'connector.php';

class Huilo1
{
    public function connector()
    {
        return 5 + $this->multiple(3,4);
    }

    private function multiple($first, $second)
    {
        return $first*$second;
    }
}

$second = new Huilo1();
$third = $second->connector();
$sum = new Huilo();
echo $sum->sum($third, 5);

