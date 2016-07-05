<?php
    include_once ("../includes/connection.php");

    if(!empty($_GET["word"])){ //Принимаем данные
    
//        $word = trim(strip_tags(stripcslashes(htmlspecialchars($_GET["word"]))));
    
        $db_word = mysqli_query($connection, "SELECT * FROM words WHERE word LIKE '%".$_GET['word']."%'")
        or die('Ошибка №'.__LINE__.'<br>Обратитесь к администратору сайта пожалуйста, сообщив номер ошибки.');
    
        while ($row = mysqli_fetch_array($db_word)) {
            echo "\n<li>".$row["word"].": ".$row["sense"]."</li>"; //$row["name"] - имя поля таблицы
        }
    }

    if (!empty($_GET["kind"]) && !empty($_GET["category"])) {
        $db_word = mysqli_query($connection, "SELECT * FROM words WHERE category_id = ' ".$_GET['category']." ' and kind_id = ' ".$_GET["kind"]."';");

        while ($row = mysqli_fetch_array($db_word)) {
            echo "\n<li>".$row["word"].": ".$row["sense"]."</li>";
        }
    } else
    if (!empty($_GET["category"])) {
        $db_word = mysqli_query($connection, "SELECT * FROM words WHERE category_id = ' ".$_GET["category"]." '");

        while ($row = mysqli_fetch_array($db_word)) {
            echo "\n<li>".$row["word"].": ".$row["sense"]."</li>";
        }
    } else
    if (!empty($_GET["kind"])) {
        $db_word = mysqli_query($connection, "SELECT * FROM words WHERE kind_id = ' ".$_GET["kind"]." '");

        while ($row = mysqli_fetch_array($db_word)) {
            echo "\n<li>".$row["word"].": ".$row["sense"]."</li>";
        }
    }

