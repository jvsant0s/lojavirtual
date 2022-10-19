<?php include_once 'header.php'?>  


<div class="container">
<div class="row">
  <div class="col-sm-12">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="images/pct.png">
        <div class="carousel-caption">   
        </div>
  	</div>

        <div class="item">
          <img src="images/hardwares.jpg">
          <div class="carousel-caption">
        </div>
  	</div>

        <div class="item">
          <img src="images/perifericos.png">
          <div class="carousel-caption">
        </div>  
        </div>

        <div class="item">
          <img src="images/smartfones.png">
          <div class="carousel-caption">
        </div>      
        </div>

        <div class="item">
          <img src="images/tv.png">
          <div class="carousel-caption">
        </div>      
        </div>

      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</div>
<hr>
</div>

</body>
</html>



<?php   include_once 'footer.php';?>

