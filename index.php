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
    <div class="content">
        <!-- INTRO -->
        <div class="intro_content">
            <div class="intro">
                <div class="container">
                    <img src="img\bg.png" alt="bg" class="bg_img">
                    <div class="intro_inner">
                        <div class="intro_contant">
                            <div class="intro_main">
                                <div class="intro_title"><?= __('Денис Короход');?></div>
                                <div class="intro_text"><?= __('Являюсь мастером спорта по пауэрлифтингу.');?> <br>
                                <?= __('уже как 15 лет я помогаю людям достигать своих целей в');?> <br> 
                                <?= __('области физического здоровья и фитнеса. Веду персональные и групповые тренировки. Составляю план тренировок, диеты.');?>
                                </div>
                            </div>
                            <button class="contact" onclick="location.href='<?= getURL('index.php').'#contact_form'?>'"><?= __('Контакты');?></button>
                            <button class="btnabout" onclick="location.href='<?= getURL('index.php').'#about'?>'"><?= __('Обо мне');?></button>

                            <div class="intro_photo">
                                <div class="circle small"></div>
                                <img class="photo" width="" src="img/intro.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- PRICE LIST -->
        <div class="price_list">
            <div class="prices">
                <div class="month_one">
                    <div class="services">
                        <span class="services_title"><?= __('Месячный абонимент');?></span>
                        <span class="price">€25</span>
                        <span class="bottom_services young"><br></span>
                        <div class="buy">
                            <button class="contact"onclick="location.href='<?= getURL('index.php').'#contact_form'?>'"><?= __('Записаться');?></button>
                        </div>
                    </div>
                </div>
                <div class="personal">
                    <div class="services">
                        <span class="services_title"><?= __('Персональная тренировка');?></span>
                        <span class="price">€10</span>
                        <span class="bottom_services young"><br></span>
                        <div class="buy"><button class="contact"
                        onclick="location.href='<?= getURL('index.php').'#contact_form'?>'"><?= __('Записаться');?></button> </div>                     
                    </div>
                </div>
                <div class="personal_three">
                    <div class="services">
                        <span class="services_title"><?= __('Персональная тренировка');?> x 3</span>
                        <span class="price">€25</span>
                        <span class="bottom_services young"><br></span>
                        <div class="buy"><button class="contact black"
                        onclick="location.href='<?= getURL('index.php').'#contact_form'?>'"><?= __('Записаться');?></button></div>
                        
                    </div>
                </div>
                <div class="month_young">
                    <div class="services">
                        <span class="services_title"><?= __('Групповые занятия');?></span>
                        <span class="price">€25</span>
                        <span class="bottom_services young"><i><?= __('для подростков в месяц');?></i></span>
                        <div class="buy"><button class="contact black"
                        onclick="location.href='<?= getURL('index.php').'#contact_form'?>'"><?= __('Записаться');?></button></div>
                        
                    </div>
                </div>
                <div class="month_personal">
                    <div class="services">
                        <span class="services_title"><?= __('Персональная тренировка');?></span>
                        <span class="price">€100</span>
                        <span class="bottom_services"><i><?= __('В неделю по 3 занятия');?></i></span>
                        <div class="buy"><button class="contact black"
                        onclick="location.href='<?= getURL('index.php').'#contact_form'?>'"><?= __('Записаться');?></button></div>
                        
                    </div>
                </div>

            </div>
        </div>

        <!-- ABOUT ME -->

        <div class="about" id="about">
            <div class="about_inner">
                <div class="about_photo"><img src="img/about.png" alt=""></div>

                <div class="about_contant">

                    <div class="about_title"><?= __('Обо мне');?></div>
                    <div class="about_text">
                        <p><?= __('Меня зовут Денис Короход, и я являюсь мастером спорта по пауэрлифтингу.');?> 
                        <?= __('Свыше 15 лет я помогаю людям достигать своих целей в области физического здоровья и фитнеса.');?>
                        <?= __('Я помогаю моим клиентам становиться сильнее и более здоровыми, я горжусь');?> 
                        <?= __('множеством довольных клиентов, которые достигли своих целей благодаря моей помощи.');?> 
                        <?= __('Моя миссия - помочь каждому человеку стать лучшей версией себя и достичь своих фитнес-целей.');?>  
                        </p>
                    </div>
                    <div class="about_bottom"><?= __('Следите за мной');?> </div>
                    <div>
                        <p><?= __('Следите за мной в социальных сетях за последним новостями.');?></p>
                    </div>
                    <div class="social">
                        <a href="https://www.facebook.com/denis.korohod">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M30.2267 0H1.77333C1.30409 0.00348891 0.855064 0.191442 0.523253 0.523253C0.191442 0.855064 0.00348891 1.30409 0 1.77333V30.2267C0.00348891 30.6959 0.191442 31.1449 0.523253 31.4767C0.855064 31.8086 1.30409 31.9965 1.77333 32H17.0933V19.6267H12.9333V14.7867H17.0933V11.2267C17.0933 7.09333 19.6133 4.84 23.32 4.84C24.56 4.84 25.8 4.84 27.04 5.02667V9.33333H24.4933C22.48 9.33333 22.0933 10.2933 22.0933 11.6933V14.7733H26.8933L26.2667 19.6133H22.0933V32H30.2267C30.6959 31.9965 31.1449 31.8086 31.4767 31.4767C31.8086 31.1449 31.9965 30.6959 32 30.2267V1.77333C31.9965 1.30409 31.8086 0.855064 31.4767 0.523253C31.1449 0.191442 30.6959 0.00348891 30.2267 0Z"
                                    fill="#D30000" />
                            </svg>
                        </a>

                        <a href="https://www.instagram.com/korohoddenis/">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="32" height="32" rx="3" fill="#D30000" />
                                <circle cx="16" cy="17" r="7" fill="#171717" />
                                <circle cx="25" cy="7" r="3" fill="#171717" />
                            </svg>
                        </a>

                        <a href="https://www.tiktok.com/@korohoddenis">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="32" height="32" rx="2" fill="#D30000" />
                                <path
                                    d="M21.2806 8.29C20.4959 7.37956 20.0634 6.21034 20.0638 5H16.5166V19.4667C16.4892 20.2495 16.164 20.9911 15.6094 21.5351C15.0548 22.0791 14.3142 22.3832 13.5434 22.3833C11.9133 22.3833 10.5587 21.03 10.5587 19.35C10.5587 17.3433 12.4643 15.8383 14.4273 16.4567V12.77C10.4668 12.2333 7 15.36 7 19.35C7 23.235 10.1684 26 13.5319 26C17.1365 26 20.0638 23.025 20.0638 19.35V12.0117C21.5022 13.0615 23.2291 13.6248 25 13.6217V10.0167C25 10.0167 22.8418 10.1217 21.2806 8.29Z"
                                    fill="#171717" />
                            </svg>
                        </a>

                        <a href="https://www.youtube.com/@deniskorohod8036">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="32" height="32" rx="3" fill="#D30000" />
                                <path d="M22 16.5L12.25 23.8612L12.25 9.13878L22 16.5Z" fill="#171717" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Projects and News -->
        <div class="recent_project">
            <div class="recent_project_header">
                <h2><?= __('Последние видео');?></h2>
                <a href="project.html"><?= __('Посмотреть все');?>
                    <svg width="4" height="8" viewBox="0 0 4 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 4.30769L0 8V0.615385L4 4.30769Z" fill="white" />
                    </svg>
                </a>
            </div>
            <div class="video-carousel">
                <div class="video-container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Cbj6vXWNsqg"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
                <div class="video-container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/v6f20u2lHmI"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
                <div class="video-container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/cUkt_86xRIY"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
                <div class="video-container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/01wL_FBakJ8"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <!-- About The Gym -->

        <div class="gym">

            <div class="gym_content">
                <div class="gym_inner">
                    <div class="gym_title"><?= __('О зале');?></div>
                    <div class="gym_text">
                        <p><?= __('Наш зал предлагает индивидуальные, групповые тренировки для подростков,');?> <br>
                        <?= __('которые помогут вам достичь ваших целей быстрее и эффективнее.');?> <br>
                        <?= __('У нас в наличие имеется оборудование для всех уровней подготовки,');?> <br>
                        <?= __('включая кардиотренажеры, силовые тренажеры и свободные веса.');?>  <br>
                        <?= __('"Vikingr" открыт с 8:00 до 23:00 каждый день, но при желании вы можете его посещать,');?> <br>
                        <?= __('по договорённости, в любое вам удобное время.');?> 
                        <?= __('Мы стремимся к тому,');?> <br> 
                        <?= __('чтобы наши клиенты чувствовали себя как дома,');?> 
                        <?= __('поэтому');?>  <br>
                        <?= __('в нашем зале всегда царит дружелюбная и поддерживающая атмосфера.');?>
                        </p>
                        <button class="contact" onclick="location.href='<?= getURL('index.php').'#contact_form'?>'"><?= __('Записаться');?></button>
                    </div>
                </div>
                <div class="gym_slider">
                    <div class="slideshow-container">
                        <div class="mySlides fade">
                            <img src="img/gym1.jpg" style="width:100%">
                        </div>

                        <div class="mySlides fade">
                            <img src="img/gym2.jpg" style="width:100%">
                        </div>

                        <div class="mySlides fade">
                            <img src="img/gym3.jpg" style="width:100%">
                        </div>

                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    </div>
                    <br>
                    <div style="text-align:center">
                        <span class="dot" onclick="currentSlide(1)"></span>
                        <span class="dot" onclick="currentSlide(2)"></span>
                        <span class="dot" onclick="currentSlide(3)"></span>
                    </div>
                </div>
            </div>
        </div>
        
        
        <!-- GALLERY -->

        <div class="gallery">
            <div class="gallery_header">
                <h2><?= __('Галерея');?></h2>
                <a href="gallery.html"><?= __('Посмотреть все');?>
                    <svg width="4" height="8" viewBox="0 0 4 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 4.30769L0 8V0.615385L4 4.30769Z" fill="white" />
                    </svg>
                </a>
            </div>
            <div class="images-carousel">
                <div class="images-container">
                    <img src="img/gym.png" alt="">
                </div>
                <div class="images-container">
                    <img src="img/gym.png" alt="">
                </div>
                <div class="images-container">
                    <img src="img/gym.png" alt="">
                </div>
                <div class="images-container">
                    <img src="img/gym.png" alt="">
                </div>
                <div class="images-container">
                    <img src="img/gym.png" alt="">
                </div>
                <div class="images-container">
                    <img src="img/gym.png" alt="">
                </div>
                <div class="images-container">
                    <img src="img/gym.png" alt="">
                </div>
                <div class="images-container">
                    <img src="img/gym.png" alt="">
                </div>
            </div>
        </div>

        <!-- CONTACT -->

        <?php if(!empty($statusMsg)){ ?>
            <div class="status-msg <?php echo $status; ?>"><?php echo $statusMsg; ?></div>
        <?php } ?>


        <div class="contact_form" id="contact_form">
            <h2><?= __('Отправить письмо');?></h2>
            <div class="contact_form_inner">
                <svg width="21" height="15" viewBox="0 0 21 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.9 0H2.1C0.945 0 0.0105 0.84375 0.0105 1.875L0 13.125C0 14.1562 0.945 15 2.1 15H18.9C20.055 15 21 14.1562 21 13.125V1.875C21 0.84375 20.055 0 18.9 0ZM18.9 3.75L10.5 8.4375L2.1 3.75V1.875L10.5 6.5625L18.9 1.875V3.75Z" fill="#D30000"/>
                </svg><span class="vikingr" > vikingr.latvia@gmail.com </span>
                <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.5556 0H1.77778C0.8 0 0 0.8 0 1.77778V14.2222C0 15.2 0.8 16 1.77778 16H19.5556C20.5333 16 21.3244 15.2 21.3244 14.2222L21.3333 1.77778C21.3333 0.8 20.5333 0 19.5556 0ZM7.11111 2.66667C8.58667 2.66667 9.77778 3.85778 9.77778 5.33333C9.77778 6.80889 8.58667 8 7.11111 8C5.63556 8 4.44444 6.80889 4.44444 5.33333C4.44444 3.85778 5.63556 2.66667 7.11111 2.66667ZM12.4444 13.3333H1.77778V12.4444C1.77778 10.6667 5.33333 9.68889 7.11111 9.68889C8.88889 9.68889 12.4444 10.6667 12.4444 12.4444V13.3333ZM15.8667 9.77778H17.3244L18.6667 11.5556L16.8978 13.3244C15.7202 12.4419 14.8671 11.1951 14.4711 9.77778C14.3111 9.20889 14.2222 8.61333 14.2222 8C14.2222 7.38667 14.3111 6.79111 14.4711 6.22222C14.8647 4.80381 15.7183 3.55629 16.8978 2.67556L18.6667 4.44444L17.3244 6.22222H15.8667C15.6711 6.78222 15.5556 7.37778 15.5556 8C15.5556 8.62222 15.6711 9.21778 15.8667 9.77778Z" fill="#D30000"/>
                </svg><span class="form_phone">+371 29458637</span>
            </div>

            <form action="" method="post">
                <div class="form-input">
                    <label for="name"><?= __('Имя');?></label><br>
                    <input type="text" name="name" class="name" placeholder="<?= __('Введите Ваше имя');?>" value="<?php echo !empty($postData['name'])?$postData['name']:''; ?>" required="">
                </div>
                <div class="form-input">
                    <label for="phone"><?= __('Телефон (По желанию)');?></label><br>
                    <input type="text" name="phone" class="phone" placeholder="<?= __('Введите Ваш телефонный номер');?>" value="<?php echo !empty($postData['phone'])?$postData['phone']:''; ?>">
                </div>
                <div class="form-input">
                    <label for="email"><?= __('Почтовый ящик');?></label><br>
                    <input type="email" name="email" class="email" placeholder="<?= __('Введите Вашу почту');?>" value="<?php echo !empty($postData['email'])?$postData['email']:''; ?>" required="">
                </div>
                <div class="form-input">
                    <label for="message"><?= __('Сообщение');?></label><br>
                    <textarea name="message" class="message" placeholder="<?= __('Напишите в какие дни Вы планировали ходить в зал');?>" required=""><?php echo !empty($postData['message'])?$postData['message']:''; ?></textarea>
                </div>
                
                <input type="submit" name="submit" class="submit" value="<?= __('Отправить');?>">
            </form>
        </div>

    </div>
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

    <?php 
        include_once 'submit.php'; 
    ?>
    <script src="script.js"></script>
</body>

</html>