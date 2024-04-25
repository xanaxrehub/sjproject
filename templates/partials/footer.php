      <!--Footer-->
      <footer class="text-center" style="background-color: #5B7065; font-family: 'Montserrat', sans-serif;">
        <div class="container p-4">
          <section class="mb-4">
            <?php
              $pages = array('Facebook'=>'https://sk-sk.facebook.com/',
              'Twitter'=>'https://twitter.com/',
              'Youtube'=>'https://www.youtube.com/',
              'Instagram'=>'https://www.instagram.com/',
              'GitHub'=>'https://github.com/');
              $menu_object = new Links($pages);
              echo($menu_object->generate_menu());
            ?>
          </section>
          <section class="mb-4">
              <h3>HorWood</h3>
              <p>stránky, ktoré vytvoria atmosféru cestovania, ponoria vás do kultúry úplne inej krajiny</p>
          </section>
          <h4>Kontaktujte nás</h4>
          <i class="fa fa-envelope" aria-hidden="true"><a href="mailto:livia.kelebercova@gmail.com" style="color: #c9d1c8; font-weight: bold; text-decoration: none;">shtefanets206@gmail.com</a></i>
          <i class="fa fa-phone" aria-hidden="true"><a href="tel:0909500600" style="color: #c9d1c8; padding-left: 20px; font-weight: bold; text-decoration: none; ">0905052535</a></i>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
          © 2023 Copyright:
          Ihor Shtefanets
        </div>
      </footer>
      <!--/Footer-->
      <?php
      $page_object = new Page();
      echo($page_object->add_scripts());
    ?>
</body>
</html>