<?php
    // Передача параметров по значению
    function increment($a)
    {
        echo "Текущее значение: $a<br>";
        $a++;
        echo "После увеличения: $a<br>";
    }

    // ...... здесь другой код программы

    $num = 10;
    echo "Начальное значение: $num<br>";
    increment($num);
    echo "После вызова функции: $num<br>";

    // выведет 10 10 11 10
?>
