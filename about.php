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
        <h2 class="featurette-heading">Overview of School <span class="text-muted"></span></h2>
        <p class="lead">White Hall Primary School is located approximately 14 kilometres North West of the capital Morant Bay in the parish of St. Thomas. 
             The school, which was built in1948 and opened  in 1951, consists of various stakeholders including 6 teachers, the principal and a guidance counsellor. 
             Fifty percent (50%) of the teachers reside within the community. Although 50% of the teachers reside outside the community, should there be a crisis, 
             school can still be held. Whenever there is a crisis the classes are merged and the school operates as multi grade though if per longed causes a problem
              to the teaching and learning process. The current enrolment is 73 boys and 89 girls totalling 162 students. 
    The Opal Foundation which was founded by Mrs. Opal Robinson, and is Canadian based, partially constructed a perimeter fence inclusive of a gate that as it may, 
    there are times when the school is used as pathways and animals roam the premises. This is chiefly due to the non existence of time-tabled watchmen during the contact period. 
    The school’s premises are owned by the Anglican Church, but the institution is operated and governed by the Ministry of Education. The building is a concrete one with concrete
     partition which is located to the left of the grade one and six classes, and a mesh partition which is located to the left of grade two and grade three classes. There is one big classroom which houses grades three to six classes. Each class is separated by a single chalkboard. In March 2008, the St. Thomas Church of Christ which is situated in Morant Bay donated eight (8) boards which are used as partitions. In the summer of 2016 the Opal Foundation and friends transformed the six chalkboards into whiteboards. 
</p>
    </div>
    <div class="col-md-5">
    <img src="img/c.png" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="400" height="400" xmlns="http://www.w3.org/2000/svg" 
    preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500">
    <title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
    </div>
</div>

<hr class="featurette-divider">

<div class="row featurette">
    <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Today <span class="text-muted"></span></h2>
        <p class="lead">Due to the board partitions the classrooms are oftentimes very dark therefore, electric lights have to be used to be used more so when it rains.  However the electric lights at the school continue to malfunction. 
	There is also a principal’s cottage, which is occupied however, urgent attention needs to be given to the refurbishing of the cottage, as the fixtures have been deteriorated, hence they are falling apart. The school has a modern sanitation block, which has to be refurbished regularly; as fixtures are very old. Hence, there have been constant problems with the toilet as the present pit is now overflowing and this poses a serious risk to the students’ health. The education official MR. Grant was made aware of the problem and he visited the school and looked at the problem and the electrical short circuit. He advised that I continue to call Mr. Gutsmore (the building officer) who will in turn call the central office to disperse funds to the regional office so that the electrical problem can be addressed.  The St. Thomas Cesspool was contacted, however the principal was informed by the manager that the vehicle is under repair, hence the pit has not been drawn. The principal will continue to dialogue with the cesspool manager to have the problem corrected. 
	For years, there were no electric lights on the Sanitation block, however, funds were raised by the members of the then Parent Teachers Association, and the instillation of the electric lights was undertaken. Although this was done for the past 2 years we continue to experience block outs at the school.  In 2007 and upgrading of the electrical fixtures was undertaken by the Ministry of Education. The school’s bathrooms were re-roofed and the electricity was upgraded in both buildings. That as it may be, the newly roofed school still leaks in some classrooms whenever it rains. In the same breath the doors to the grade two classroom need to be replaced as the mesh and board are often damaged by the constant storage of things in the classroom especially during the summer holidays. To this end, a store room is urgently needed to store furniture and other resources for the school. 
	The driveway was paved in 2016 by The Honourable James Robertson, MP for Western St. Thomas. The premises is a large one, but has a hilly terrain, this has limited the playing area greatly. With proper landscaping of a section of the premises, there could be a lovely site for football, netball, and cricket. 
	In April 2017, The PTA held a fund raising Fish Fry and the funds from it was used to assist with the construction of a Watchman Post. The post is partially completed and it is hoped that it will be completed by December 2019. 
	The school is posed for greater improvement, that as it may can only be achieved if all stakeholders work towards achieving the organizational goals. 
</p>
    </div>
    <div class="col-md-5 order-md-1">
    <img src="img/d.png" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="400" height="400" xmlns="http://www.w3.org/2000/svg"
     preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title>
    <rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
    </div>
</div>

<hr class="featurette-divider">

<!-- /END THE FEATURETTES -->

</div><!-- /.container -->
</main>

<?php include 'includes/footer.php';