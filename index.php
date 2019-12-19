<?php
require_once 'src/bootstrap.php';
$db = Db::connect();
$title = "Home";
include 'includes/header.php'; ?>
<main role="main">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/white.png" class="bd-placeholder-img" width="80%" height="100%">
                <div class="container">
                    <div class="carousel-caption text-left">
                        <p><a class="btn btn-lg btn-warning" href="signup.php" role="button">Sign up today</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/parent.png" class="bd-placeholder-img" width="80%" height="100%">
                <div class="container">
                    <div class="carousel-caption">
                        <h1> Parents</h1>
                       </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/a.png" class="bd-placeholder-img" width="100%" height="100%">
                <div class="container">
                    <div class="carousel-caption">
                        <h1> First Day</h1>
                       </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/stu.png" class="bd-placeholder-img" width="100%" height="100%">
                <div class="container">
                    <div class="carousel-caption">
                        <h1> Eyewear Day</h1>
                       </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/cad.png" class="bd-placeholder-img" width="100%" height="100%">
                <div class="container">
                    <div class="carousel-caption">
                        <h1> Scouts</h1>
                       </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <img src="img/e.png" class="bd-placeholder-img" width="100%" height="100%">
                    <div class="carousel-caption text-right">
                        <h1>Sports Day</h1>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    <div class="container marketing">
        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-4">
            <img src="img/white.png"class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
                <h2>Principal</h2>
                <p> Mrs.....</p>
                </br>
                <p><a class="btn btn-warning" href="#" role="button">View details »</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
            <img src="img/sport.png"class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
                <h2>Vice Principal</h2>
                <p>Miss.</p>
                </br>
                <p><a class="btn btn-success" href="#" role="button">View details »</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
            <img src="img/b.png" class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
                <h2>Staff</h2>
                <p> tellus ac cursus cjusto sit a.</p>
                </br>
                <p><a class="btn btn-primary" href="#" role="button">View details »</a></p>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->

      
<?php include 'includes/footer.php';