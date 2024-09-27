<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
	<title><?php echo $mainName; ?> - <?php echo $siteName; ?></title>
</head>
<body>

<header>  
	<div class="logo-container">
		<img src="images/logo.png" alt="Логотип" class="logo"> <!-- Добавлен логотип -->
	</div>
    <h1><span class="store-name"><?php echo $Name; ?></span><?php echo $header_text_mainName; ?></h1>
</header>


<nav class="navbar">
	<div class="burger" id="burger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
    <ul id="nav-list" class="nav-list">
        <li><a href="index">Головна</a></li>
        <li><a href="belts">Ремені</a></li>
        <li><a href="wallets">Гаманці</a></li>
        <li><a href="payment_delivery">Оплата і доставка</a></li>
        <li><a href="about">Про нас</a></li>
        <li><a href="contacts">Контакти</a></li>
        <li><a href="reviews">Відгуки</a></li>
    </ul>
</nav>

<!-- Слайдер -->
<div class="slider">
    <div class="slides">
        <img src="images/slide1.jpg" alt="Шкіряний ремінь 1">
        <img src="images/slide2.jpg" alt="Шкіряний гаманець 1">
        <img src="images/slide3.jpg" alt="Шкіряний ремінь 2">
        <img src="images/slide4.jpg" alt="Шкіряний гаманець 2">
        <img src="images/slide5.jpg" alt="Шкіряний ремінь 3">
    </div>
    <div class="navigation">
        <span class="prev" onclick="manualSlide(-1)">&#10094;</span>
        <span class="next" onclick="manualSlide(1)">&#10095;</span>
    </div>
</div>

<footer>
    <div class="social-icons">
        <p class="social-text"><?php echo $footer_social_text; ?></p>
        <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a href="https://t.me" target="_blank"><i class="fab fa-telegram-plane"></i></a>
    </div>
    <p class="footer-copyright"><?php echo $footer_copyright; ?></p>
</footer>

<script>
    let currentIndex = 0;
    const slides = document.querySelector('.slides');
    const totalSlides = slides.children.length;

    document.querySelectorAll('.slides img').forEach(slide => {
        slide.style.width = 100 / totalSlides + '%';
    });

    slides.style.width = `${totalSlides * 100}%`;

    function moveSlide(step) {
        currentIndex = (currentIndex + step + totalSlides) % totalSlides;
        slides.style.transform = `translateX(-${currentIndex * (100 / totalSlides)}%)`;
    }

    function autoSlide() {
        moveSlide(1);
    }

    let slideInterval = setInterval(autoSlide, 10000);

    function manualSlide(step) {
        clearInterval(slideInterval);
        moveSlide(step);
        slideInterval = setInterval(autoSlide, 10000);
    }

    document.querySelector('.prev').addEventListener('click', () => manualSlide(-1));
    document.querySelector('.next').addEventListener('click', () => manualSlide(1));
</script>
    <script>
        // Ваш JavaScript-код
        const burger = document.getElementById('burger');
        const navList = document.getElementById('nav-list');

        burger.addEventListener('click', () => {
            navList.classList.toggle('active'); // Добавляем или удаляем класс для показа меню
            burger.classList.toggle('active'); // Меняем бургер на крестик
        });
    </script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/66f5d99d4cbc4814f7df8843/1i8o5k3l7';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</body>
</html>
