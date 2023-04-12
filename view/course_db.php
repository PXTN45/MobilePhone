<?php 
include_once "model/ConDB.php";
include_once "model/Course.php";
$obj_name=new Mobile();
$rs2= $obj_name->getMobile();
?>

<?php
foreach ($rs2 as $result2){
?>
<!-- Course section -->
<div class="col mb-5">
                    <a href="../view/course_sci.php?id=<?= $result2['id'] ?>" class="card-link">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="<?=$result2['img'];?>" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-left">
                                    <!-- Product name-->
                                    <center>
                                    <h5 class="fw-bolder course-name"><?=$result2['name'];?></h5>
                                    <div class="course-note"> <h5 style="color: red;"><b><?=$result2['price'];?> บาท</b></h5></div>
                                    </center>

                                </div>
                            </div>
                        </div>
                    </a>
</div>
<!-- End Course section -->
<?php }?>