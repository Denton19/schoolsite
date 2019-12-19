<?php
require_once 'src/bootstrap.php';

$db = Db::connect();

$title = "Contact Us";

include 'includes/header.php'; ?>
</br></br></br>
<div class = "container"> 
<div class="row">
            <div class="col-lg-4">
            <img src="img/k.png"class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
                <h2>1876</h2>
                <p> Morbi leo risus, porta commodo cursus magna.</p>
                
            </div


<?php include 'includes/footer.php';