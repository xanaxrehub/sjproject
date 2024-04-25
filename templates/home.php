<?php
    include_once('partials/header.php');
?> 
    <!--Vstup image-->
      <div class="container-fluid text-center" style="padding-top: 100px; padding-bottom: 185px;">
        <div class="row align-items-center">
          <div class="col-lg-8">
            <img src="../assets/img/background.jpg" class="img-fluid rounded hlavnyphoto" alt="">
          </div>
          <div class="col-lg-4">
            <h1 style="font-size: 70px; font-family: 'Kaushan Script', cursive;">HORWOOD</h1>
            <h2 style="font-size: 50px; font-family: 'Kaushan Script', cursive;">Virtuálne cestovanie</h2>
          </div>
        </div>
      </div>
      <!--/Vstup image-->
      <!--Reccom box-->
      <div class="container text-center">
        <div class="row gx-5 gy-5">
          <div class="col-lg-3 col-md-12 mx-auto rec  rounded">
           <div class="p-4">
            <img class="rec-photo" src="../assets/img/возможность.png" width="80px" alt="">
            <p style="color: #c9d1c8; font-size: 23px; font-weight: 700; font-family: 'Montserrat', sans-serif;">Naša stránka vám dáva možnosť dozvedieť sa niečo nové o krajinách, pozrieť sa na ich pamiatky bez toho, aby ste opustili prehliadač</p>
           </div>
          </div>
          <div class="col-lg-3 col-md-12 mx-auto rec rounded">
            <div class="p-4">
              <img class="rec2-photo" src="../assets/img/компактность.png" width="80px" alt="">
              <p style="color: #c9d1c8; font-size: 23px; font-weight: 700; font-family: 'Montserrat', sans-serif;">Používaním našej stránky ušetríte veľa času a nebudete musieť hľadať všetky informácie na internete</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-12 mx-auto rec rounded">
            <div class="p-4">
              <img class="rec3-photo" src="../assets/img/идея.png" width="80px" alt="">
              <p style="color: #c9d1c8; font-size: 23px; font-weight: 700; font-family: 'Montserrat', sans-serif;">Zozbierali sme tie najzaujímavejšie informácie a krásne fotografie, ani si nevšimnete, ako rýchlo ubehol čas</p>
            </div>
          </div>
        </div>
      </div>
      <!--/Reccom box-->
      <!--Text-->
      <div class="container text-center" style="padding-top: 100px;">
        <div class="ukrajine-text">
          <h2 style="font-size: 40px; text-transform: uppercase; font-family: 'Kaushan Script', cursive;">Dnes budeme hovoriť o</h2>
          <h1 style="font-size: 65px; text-transform: uppercase; font-family: 'Kaushan Script', cursive; font-weight: 700">Ukrajine</h1>
        </div>
      </div>
      <!--/Text-->
      <!--Slideshow-->
      <div class="container" style=" padding-bottom: 175px;" >
        <div id="carouselExampleFade" class="carousel slide carousel-fade">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img style="border-radius: 20px;" src="../assets/img/ukrajina1.jpg" class="d-block w-100 img-fluid" alt="...">
            </div>
            <div class="carousel-item">
              <img style="border-radius: 20px;" src="../assets/img/ukrajina2.jpg" class="d-block w-100 img-fluid" alt="...">
            </div>
            <div class="carousel-item">
              <img style="border-radius: 20px;" src="../assets/img/ukrajina3.jpg" src="img/ukrajina3.jpg" class="d-block w-100 img-fluid" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Предыдущий</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Следующий</span>
          </button>
        </div>
      </div>
      <!--/Slideshow-->
<?php
  include_once('partials/footer.php')
?>  