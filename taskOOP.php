<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>Task4_PHP_OOP</title>
</head>

<body>
    <h1>Классы и объекты в PHP</h1>
    <div class="container" style="margin: 0 70% 0 10%;">
        <?php
        //подключаем класс
        include "ClassNotePad.php";

        echo '<b>Задание 1. 2.</b>';          //задание 1-2
        echo '<hr>';

        $note1 = new NotePad(332, 'Masha', 'Batman');

        $note1->note_show();  //Вызвать метод note_show.
        echo $note1::TEXT_SIZE;   //Вывести значение TEXT_SIZE без использования метода note_show

        echo '<hr><br>';
        echo '<b>Задание 3.</b>';                  //задание 3
        echo '<hr>';

        $note2 = new NotePad(555, 'Vasia', 'Pupkin');
        $note2->note_show();

        echo '<hr><br>';
        echo '<b>Задание 4.</b>';                  //задание 4
        echo '<hr>';

        $note2_copy = clone $note2;       //Создать копию $note2_copy объекта $note2.
        $note2_copy->note_show();        

        echo '<hr><br>';
        echo '<b>Задание 5.6</b>';                  //задание 5-6
        echo '<hr>';

        $child1 = new NoteChild(338, 'Francy', 'Pauk');      // Создать объект $child1 класса NoteChild. 

        $child1 ->note_show();  
        $child1_copy = clone $child1;
        $child1_copy ->note_show();

        echo '<hr><br>';
        echo '<b>Задание 7</b>';                  //задание 7
        echo '<hr>';

        $child2 = new NoteChild(342223324324234, 'Aaaaaaaaaaaaaa', 'Qqqqqqqqqqqqqqqqqq');              
        $child2->note_show();
        echo '<br>';
        $child2->cut_note();                         //Создать объект $child2 класса NoteChild и вызвать для него метод cut_note. 
        $child2->note_show();;                             

        echo '<hr>';

        ?>
    </div>
</body>

</html>