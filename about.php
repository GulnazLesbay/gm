<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>О нас</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>
<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>Почему выбрали именно нас?</h3>
         <p>Наш сайт ориентирован на изучение английского языка.Сайт помогает вам учиться самостоятельно, предоставляя учебные материалы в удобное время и в удобном месте.</p>
         <a href="courses.php" class="inline-btn">Наши уроки</a>
      </div>
   </div>
   <div class="box-container">
      <div class="box">
         <i class="fas fa-graduation-cap"></i>
         <div>
            <h3>+1k</h3>
            <span>Новичкам</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-user-graduate"></i>
         <div>
            <h3>+2k</h3>
            <span>Уроки по грамматике</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-chalkboard-user"></i>
         <div>
            <h3>+1k</h3>
            <span>Тесты</span>
         </div>
      </div>
   </div>

</section>

<section class="reviews">

   <h1 class="heading">Отзывы студентов</h1>

   <div class="box-container">

      <div class="box">
         <p>Курс действительно эффективен! Увидела результаты уже после первых занятий.</p>
         <div class="user">
            <img src="images/pic-2.jpg" alt="">
            <div>
               <h3>Dana Eshmukhanova</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>Отличный курс! Преподаватели очень терпеливы и грамотно объясняют материал.</p>
         <div class="user">
            <img src="images/pic-3.jpg" alt="">
            <div>
               <h3>Kenzhabayev Arman</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>Занятия структурированы и интересны. Мне нравится, что курс охватывает все аспекты языка: чтение, письмо, разговорную практику. Рекомендую!</p>
         <div class="user">
            <img src="images/pic-4.jpg" alt="">
            <div>
               <h3>Serik Nurtay</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>Полезный опыт! Особенно понравились дополнительные ресурсы для самостоятельного изучения.</p>
         <div class="user">
            <img src="images/pic-5.jpg" alt="">
            <div>
               <h3>Dairabay Magzhan</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>Прекрасная атмосфера на занятиях. Преподаватели создают дружелюбное окружение, что существенно облегчает процесс обучения. </p>
         <div class="user">
            <img src="images/pic-6.jpg" alt="">
            <div>
               <h3>Zhakhan Aslan</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>Замечательный баланс между теорией и практикой. Каждый урок строится логично, и материал усваивается легко. </p>
         <div class="user">
            <img src="images/pic-7.jpg" alt="">
            <div>
               <h3>Mataeva Asem</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

   </div>

</section>


<?php include 'components/footer.php'; ?>
<script src="js/script.js"></script>
   
</body>
</html>