<?php
    require 'lang.php';
?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/projects.css">
    <title>VikingR</title>
</head>

<body>

    <!-- HEADER -->
    <header class="header">
        <div class="container">
            <div class="header_inner">
                <div class="logo">
                    <div class="logo text"><a href="index.html">VIKING</a></div>
                </div>
                <nav class="nav">
                    <a class="nav_link" href="<?= getURL('index.php')?>"> <?= __('Главная');?></a>
                    <a class="nav_link" href="<?= getURL('index.php').'#about'?>"><?= __('Обо мне');?></a>
                    <a class="nav_link" href="<?= getURL('project.php')?>"><?= __('Проекты');?></a>
                    <a class="nav_link" href="<?= getURL('gallery.php')?>"><?= __('Галерея');?></a>
                    <a class="nav_link" href="<?= getURL('index.php').'#contact_form'?>"><?= __('Контакты');?></a>
                </nav>
                <div class="languages">
                    <a class="nav_link lv" href="index.php?lang=lv">LV</a>
                    <a class="nav_link ru" href="index.php?lang=ru">RU</a>
                </div>
            </div>
        </div>
    </header>

    <div class="projects_tittle"><h2>Проекты</h2></div>
    <div class="projects">
        <div class="in_shape">
            <div class="shape_photo"><img src="img/shape.png" alt=""></div>
            <div class="projects_text">
                <div class="projects_text_tittle"><h2>Приведи меня в форму</h2></div>
                <p>
                    Проект "Приведи меня в форму" - это видео тренировки отдельного человека,<br> 
                    которого мы приводим к желаемого результату (сброс веса, набор мышечной массы,<br>  
                    подготовка к соревнованиям и т.д.).
                </p>
                <div class="watchbtn">  <a href="https://www.youtube.com/playlist?list=PL7xurWtoCpLi2qwGu-_W4SjWfMliBrXA1" class="watch_more">Посмотреть еще</a></div>
            </div>
        </div>
        <div class="nac">
            <div><img class="nac_photo" src="img/nac.png" alt=""></div>
            <div class="projects_text">
                <div class="projects_text_tittle"><h2>NAC Latvia 2023</h2></div>
                <p>
                    Подготовка нашего тренера Дениса Корохода <br>  
                    к соревнованиям по бодибилдингу федерации "NAC Latvia" в 2023 году.
                </p>
                <div class="watchbtn">  <a href="https://www.youtube.com/playlist?list=PL7xurWtoCpLi4AcYLklI7Hixp2iikaCWi" class="watch_more">Посмотреть еще</a></div>
            </div>
        </div>
    </div>




    <!-- BOTTOM HEADER -->
 
    <header class="bottom_header">
        <div class="container">
            <div class="bottom_header_inner">
                <div class="bottom_logo">
                    <div class="bottom_logo text">VIKING</div>
                </div>
                <nav class="nav">
                    <a class="nav_link" href="<?= getURL('index.php')?>"> <?= __('Главная');?></a>
                    <a class="nav_link" href="<?= getURL('index.php').'#about'?>"><?= __('Обо мне');?></a>
                    <a class="nav_link" href="<?= getURL('project.php')?>"><?= __('Проекты');?></a>
                    <a class="nav_link" href="<?= getURL('gallery.php')?>"><?= __('Галерея');?></a>
                    <a class="nav_link" href="<?= getURL('index.php').'#contact_form'?>"><?= __('Контакты');?></a>
                </nav>
                <div class="name_space">
                    <span>© 2023 EDL Digital</span>
                </div>
            </div>
        </div>
    </header>


    <script src="script.js"></script>
</body>

</html>