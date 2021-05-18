<header class="header">
   <div class="container">
      <div class="header_inner">
         <div class="header_logo">TravelyGroup</div>

         <div class="nav">
            <a class="nav_link" href="index.php"> О нас</a>
            <a class="nav_link" href="tours.php"> Туры</a>
            <a class="nav_link" href="blog.php"> Новости</a>
            <a class="nav_link" href="contact.php"> Контакты</a>
            <a class="nav_link" href="bag.php"> Корзина</a>
            <?php 
               if(isset($_COOKIE['id'])) echo '<a class="nav_link" href="exit.php"> Выйти</a>';
               else echo '<a class="nav_link" href="login.php"> Войти</a>';
            ?>
         </div>
      </div>
   </div>
</header>