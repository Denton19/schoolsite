<?php
require_once 'src/bootstrap.php';

$db = Db::connect();

$title = "About Us";

include 'includes/header.php'; ?>
</br></br></br>

<div class="container marketing">
        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-4">
            <img src="img/i.jpg"fclass="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
                <h2>Sports</h2>
                <p> Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
            <img src="img/g.png"class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
                <h2>Mathematics Department</h2>
                <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
               
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
            <img src="img/h.png" class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
                <h2>Literacy Department</h2>
                <p>felis euismod semper. Fusce dapibus, tellus ac cursus cjusto sit amet risus.</p>
                
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->

<?php include 'includes/footer.php';