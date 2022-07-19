<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <header>
        <nav class="nav">
            <a href="?page=Home">Home</a>
            <a href="?page=About">About</a>
            <a href="?page=Contact">Contact</a>
            <a href="?page=More">More</a>
        </nav>
    </header>

    <?php

    if (isset($_GET['page'])) {
        $page_to_load = $_GET['page'];
    } else {
        $page_to_load = 'Home';
    }
    // require_once позволяет включать удаленные файлы
    switch ($page_to_load) {
        case 'Home':
            require_once('home-page-main.php');
            break;
        case 'About':
            require_once('about-page-main.php');
            break;
        case 'Contact':
            require_once('contact-page-main.php');
            break;
        case 'More':
            require_once('more-page-main.php');
            break;

        default:
            # code...
            break;
    }
    ?>

    <footer>
        <?php
        // isset() проверяет, установлена ​​ли переменная, 
        // что означает, что она должна быть объявлена ​​и не равна NULL.

        // если переменная установлена, то выдавать информацию через функцию var_dump()
        // если же переменная не установлена, то выводим текст "Home loaded"

        if (isset($_GET['page'])) {
            var_dump($_GET['page']);
        } else {
            echo "Home loaded";
        }
        ?>
    </footer>
</body>

</html>