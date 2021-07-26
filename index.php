<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Выполненые задачи</title>
</head>
<body>
<h2>Задача №1</h2>
<?php
    $a = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate molestiae nemo placeat ratione rem repudiandae similique voluptatum! Accusantium adipisci alias animi aut autem beatae culpa cupiditate dolores ea esse eum facere id, ipsum laudantium magnam magni mollitia obcaecati odit quisquam repudiandae sed temporibus ullam! Distinctio dolorem est iste iure, laboriosam nemo nihil nobis nulla, praesentium quam, saepe sequi suscipit! Ab, aliquid eius enim error iusto, maxime nisi nobis non, nostrum nulla soluta tempore unde vel. Amet aperiam architecto eos fugit in iusto magni nihil odit placeat quo rem rerum sequi, temporibus. Aspernatur dicta dignissimos distinctio dolor eius eligendi esse fugiat illum labore magni molestiae mollitia natus nostrum perspiciatis placeat quam qui quia quod reiciendis rem sapiente sed, tempora temporibus tenetur voluptas voluptate voluptatibus. Ab, ad aspernatur aut dolorem eligendi enim excepturi exercitationem inventore ipsum iure labore maiores neque nihil numquam, quo sint suscipit, ullam? Adipisci, aliquid consectetur distinctio dolores, doloribus excepturi facilis fuga inventore ipsa laudantium modi neque nisi pariatur possimus quidem quos soluta. Deleniti dolores harum id minus molestiae odit officia qui quis repellat ullam! Ea eum quo recusandae unde voluptatum! Aliquid cum deleniti fuga, nam quasi voluptatum. Ad at dolor fugit laudantium nostrum odit sequi totam voluptas voluptate?";
    $b = substr($a, 0, 177).'...'; // Здесь я записываю в переменную $b сокращенный текст новости с приписанным многоточием.
    // Тут могут возникнуть проблемма, если обрезанная версия новости будет иметь на конце пробел, это можно решить с помощью метода trimю
    $link = "index.html"; // Ссылка на страницу с новостью
    $sentence = explode(' ', $b); // Разбиваю текст новости на отдельные слова
    $lastWords = implode( ' ', array_slice($sentence, count($sentence)-2)); // Выписываю два последних слова
    array_pop($sentence); // Убераю последнее слово
    array_pop($sentence); // Убераю последнее слово
    echo $sentence = implode(' ', $sentence).' '."<a href='$link'>$lastWords</a>"; // Вывожу текст новости и добавляю в конеце ссылку на новость в виде последних слов
?>
<h2>Задача №2</h2>
<?php
    $heightImage = 'image.png'; // Указываю исходное изображение
    $smallImage = 'smallImage.png'; // Указываю выходное изображение
    $src = imagecreatefrompng($heightImage); // Создаю объект для php
    $size = getimagesize($heightImage); // Получаю размер исходного изображения
    $width = $size[0]; // Переменная для указания ширины исходного изображения для метода imagecopyresampled
    $height = $size[1]; // Переменная для указания высоты исходного изображения для метода imagecopyresampled
    $nWidth = 200; // Переменная для указания желаемой ширины выходного изображения для метода imagecopyresampled
    $nHeight = 100; // Переменная для указания желаемой высоты выходного изображения для метода imagecopyresampled
    $tmp = imagecreatetruecolor($nWidth, $nHeight); // Создание объекта временного изображения для метода imagecopyresampled
    imagecopyresampled($tmp, $src, 0, 0, 0, 0, $nWidth, $nHeight, $width, $height); // Вставляем обрезанную версию исходного изображения в $tmp
    imagepng($tmp, $smallImage); // Сохраняем обрезанную версию изображения под названием указанным в переменной $smallImage
    //echo "<img src='image.png' alt='Стандартная версия'/>"; // Можно вывести исходное изображение для сравнения
    echo "<img src='smallImage.png' alt='Уменьшенная версия'/>"; // Выводим полученное изображение
?>
<h2>Задача №3</h2>

<h2>Задача №4</h2>
<?php
    $array = []; // Создаем массив для значений
    for($i = 0; $i < 100; $i++){ //
        $array[$i] = rand(0, 5); // Заполняю массив сотней значений в промежутке от 0 до 5 для наглядности
    }                            //
    $i = 1;
    $value = 0;
    foreach ($array as $item) { //
        echo $item.' ';         // Вывожу массив чтобы можно было проверить результат
    }                           //
    echo '<br/>';
    do {                               //
        if($array[$i-1] == $array[$i]) // Ищу в массиве пары значений сравнивая значения прошлого и текущего элементов
            $value += 1;               // Подсчитываю, если нахожу
        $i++;                          //
    } while($i < 100);                 //
    echo $value; // Вывожу результат подсчета
?>
</body>
</html>