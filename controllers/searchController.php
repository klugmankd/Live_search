<?php
    include_once ("../includes/connection.php");

    if(!empty($_GET["word"])){ //Принимаем данные
    
//        $word = trim(strip_tags(stripcslashes(htmlspecialchars($_GET["word"]))));
    
        $db_word = mysqli_query($connection, "SELECT * FROM words WHERE word LIKE '%".$_GET['word']."%'")
        or die('Ошибка №'.__LINE__.'<br>Обратитесь к администратору сайта пожалуйста, сообщив номер ошибки.');
    
        while ($row = mysqli_fetch_array($db_word)) {
            echo "\n<li>".$row["word"]."</li>"; //$row["name"] - имя поля таблицы
        }
    }