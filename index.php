<?php include 'header.php';

?>
<br>
<br>
<div class="welcome-sign">
      <p class="fs-1 text-center text-white">WELCOME, <?php if($_SESSION){
        echo strtoupper($_SESSION['username']);
      }elseif(!$_SESSION){
        echo 'GAMER';
      } ?> !</p>
      <br>
        <p class="fs-2 text-center text-white">WE HAVE A HOLE GAME UNIVERSE FOR YOU TO EXPLORE !</p>
        </div>
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/Design fără titlu (1).png" class="d-block w-100 p-4 c-img" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/Design fără titlu 1.png" class="d-block w-100 p-4 c-img" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/Design fără titlu 2.png" class="d-block w-100 p-4 c-img" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon-bg-light" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon-bg-light" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      
  </div>
</div>
</body>
</html>