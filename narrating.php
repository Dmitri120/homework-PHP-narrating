<?php
$textStorage = [];

function add(&$textStorage, string $title, string $text)
{
    $textStorage[] = ['title' => $title, 'text' => $text];
}

add($textStorage, 'Работа', 'Как же я устаю на работе');
add($textStorage, 'Учеба', 'Как же я устаю на учебе');
var_dump($textStorage);

function remove(&$textStorage, $a)
{
    if (isset($textStorage[$a])) {
        unset($textStorage[$a]);
        return true;
    }
    return false;
}

var_dump(remove($textStorage, 0));
var_dump(remove($textStorage, 5));

var_dump($textStorage);

function edit(int $key,string $title,string $text,array &$textStorage)
{
    if(isset($textStorage[$key])){
        $textStorage[$key] = ['title' => $title, 'text' => $text];
        return true;
    }
    return false;
}

edit(1,'Тяжёлая учеба','Мне 35лет',$textStorage);

var_dump($textStorage);

var_dump(edit(99,'Mir','NO',$textStorage));