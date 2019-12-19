<?php
require_once 'src/bootstrap.php';

$db = Db::connect();

$title = "About Us";

include 'includes/header.php'; ?>

<div class = "container"> 


  <!-- START THE FEATURETTES -->

  <hr class="featurette-divider">

<div class="row featurette">
    <div class="col-md-7">
        <h2 class="featurette-heading">Location <span class="text-muted"></span></h2>
        <p class="lead">Using Google Map</p>
    </div>
    <div class="col-md-5">
    <img src="img/j.png" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="400" height="400" xmlns="http://www.w3.org/2000/svg" 
    preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500">
 <p><a class="btn btn-info" href="https://www.google.com/maps/place/White+hall+primary+school/@17.9518525,-76.4515487,17z/data=!3m1!4b1!4m5!3m4!1s0x8ec4cb202f8809d3:0x616c127d0626a3f8!8m2!3d17.9518525!4d-76.44936" role="button">Click Here »</a></p>
    <title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
    </div>
</div>



<hr class="featurette-divider">

<!-- /END THE FEATURETTES -->

</div><!-- /.container -->
</main>

<?php include 'includes/footer.php';