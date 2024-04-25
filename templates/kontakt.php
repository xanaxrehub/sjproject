<?php
    include_once('partials/header.php');
?> 
      <div class="container" style="padding-top: 100px;">
        <div class="row text-center">
          <div class="col">
            <img class="img-fluid" src="../assets/img/logo.png" width="200px" alt="">
          </div>
        </div>
        <div class="row text-center" style="padding-top: 25px;">
          <div class="col">
            <h1 style="font-size: 70px; font-family: 'Kaushan Script', cursive;">HORWOOD</h1>
          </div>
        </div>
      </div>
      <div class="container" style="padding-top: 50px; padding-bottom: 80px;"> 
        <form> 
          <div class="mb-3"> 
              <label for="exampleInputMeno" class="form-label">Meno</label> 
              <input class="form-control" > 
            </div> 
          <div class="mb-3"> 
            <label for="exampleInputEmail1" class="form-label">Email</label> 
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> 
          </div> 
          <div class="mb-3"> 
            <label for="exampleInputTextarea" class="form-label">Textarea</label> 
            <input  class="form-control" > 
          </div> 
          <div class="mb-3 form-check"> 
            <input type="checkbox" class="form-check-input" id="exampleCheck1"> 
            <label class="form-check-label" for="exampleCheck1">Súhlas so spracovaním osobných údajov</label> 
          </div> 
          <button style="background-color: #5B7065; border: 10px;" type="submit" class="btn btn-primary"><a href="thankpage.php" style="text-decoration: none; color: #c9d1c8;">Odoslať</a></button> 
        </form> 
      </div>
<?php
  include_once('partials/footer.php')
?> 
