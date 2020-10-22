<?php
//require_once 'zakaz.php';
    $client=[
        'data 1' => [
            'name'=>'Денис Иванов',
            'id'=>'900451122',
            'hb'=>'15.04.1987',
            'number'=>'0994128816'
        ],
        'data 2' => [
            'name'=>'Альберт Тостой',
            'id'=>'901451122',
            'hb'=>'24.03.1997',
            'number'=>'0934669523'
        ],
        'data 3' => [
            'name'=>'Самуэль Прудченко',
            'id'=>'752451184',
            'hb'=>'22.11.1989',
            'number'=>'0983621132'
        ],
        'data 4' => [
            'name'=>'Дантес Ибрагим',
            'id'=>'277459933',
            'hb'=>'01.10.2000',
            'number'=>'0923740115'
        ],
        'data 5' => [
            'name'=>'Никита Игнатьев',
            'id'=>'900001122',
            'hb'=>'15.04.2001',
            'number'=>'0994124455'
        ]];

file_put_contents('index.json', json_encode($client, JSON_UNESCAPED_UNICODE));
//$clients = json_decode(file_get_contents('index.it json'), true);*/