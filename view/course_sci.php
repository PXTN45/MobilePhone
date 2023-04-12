<?php 
$id = $_GET["id"];
include_once "../model/ConDB.php";
include_once "../model/Course.php";
$obj_name=new Mobile();
$rs2= $obj_name->getMobileDetail($id);
?>  


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>หลักสูตรระยะสั้น - คณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยราชภัฏนครปฐม</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <!-- <link href="css/styles.css" rel="stylesheet" /> -->

        <link href="../css/styles.css" rel="stylesheet" />
        <link href="../css/css.css" rel="stylesheet" />
        <script src="https://kit.fontawesome.com/c150442d6f.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=6146da0840d29100191b272f&product=inline-share-buttons" async="async"></script>
        <link rel="stylesheet" href="/view/mobile.css">
      </head>
    <body>

        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <div class="container">

                <a class="navbar-brand text-white " href="../"><i class="fas fa-angle-left"></i> BACK</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            </div>
        </nav>
        <div class="container">
          <div class="row">
            <div class="col-5">
              <img id="phone" src="<?=$rs2['img'];?>" alt="">
            </div>
            <div class="col-7">
              <center>
            <table>
                <tr id="button">
                  <td id="hello" > <img id="iconPhone" src="/images/12.png" alt=""><br><br><h5><?=$rs2['size'];?></h5> </td>
                  <td id="hello" ><img id="iconPhone" src="/images/camera.png" alt=""><br><br><h5><?=$rs2['camare'];?></h5></td>
                  <td><img id="iconPhone" src="/images/cpu.png" alt=""><br><br><h5><?=$rs2['CPU'];?></h5></td>
                </tr>
                <tr>
                  <td id="hello" ><img id="iconPhone" src="/images/android.png" alt=""><br><br><h5><?=$rs2['system'];?></h5></td>
                  <td id="hello" ><img id="iconPhone" src="/images/memory.jpg" alt=""><br><br><h5><?=$rs2['storage'];?></h5></td>
                  <td><img id="iconPhone" src="/images/battery.png" alt=""><br><br><h5><?=$rs2['battery'];?></h5></td>
                </tr>
              </table>
            </center>
            </div>
          </div>
        </div>
        </div>
        
        



        <!-- Footer-->
        <div class="container-fluid bg-orange d-lg-none fixed-bottom text-center">
            <div class="my-2 "><i class="fas fa-wallet"></i> ค่าลงทะเบียน 1,000 บาท/คน</div>
            <div class="mb-1">
              <a href="https://forms.gle/SC6zWtHG8bFuE2Vx5" target="_blank" class="btn btn-success " >ลงทะเบียน</a>
              <a href="#list-item-10" class="btn btn-light float-sm-right">สอบถามเพิ่มเติม</a>
            </div>

            <!-- <a href="#" class="btn btn-success stretched-link" style="position: fixed; bottom: 0px; right: 0px;">ลงทะเบียน</a> -->
        </div>

        <footer class="py-lg-5 bg-dark ">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Faculty of Humanities and Social Sciences Nakhon Pathom Rajabhat University 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>