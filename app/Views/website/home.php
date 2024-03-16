<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?=view('component/front/head') ?>
</head>

<body>
    <?=view('component/front/header') ?>
    <!-- start hero section -->
    <section id="hero-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-12 col-1024-12 p-0">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <?php
                        // getPrint($slider);
                        foreach($sliders as $ind=>$row){
                        ?>
                            <div class="carousel-item <?=$ind == 0?'active':'' ?>">
                                <img src="<?=base_url('get-file/'.$row->image)?>" class="d-block w-100" alt="...">
                            </div>
                            <?php 
                        }
                        ?>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-12 col-1024-12 ">
                    <!--mt-4-->
                    <div class="row  m-0">
                        <h5 class="bg-lightblue text-white mb-0 py-3 mt-2">Anti Ragging Section</h5>
                        <?php foreach($anti_ragging_section as $row){ ?>
                        <div class="col-1024-6 p-0">
                            <a class="px-1024-2 text-decoration-none border text-xl-left text-info py-1 my-1 d-flex justify-content-between align-items-center" href="<?=base_url('get-file/'.$row->file)?>">
                                <div class="p-2">
                                    <?=  $row->title ?>
                                </div>
                            </a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!--hero  section ends -->
    <!-- start attentiion section -->
    <section id="attention-section">
        <div class="container-fluid border bg-darkblue py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 d-flex justify-content-center align-items-center">
                        <div class="blink-style">
                            <a href="#" class="text-decoration-none ">
                                <h4 class=" p-1 m-0 rounded text-danger text-center fw-bolder attention ">News
                                </h4>
                                <!--bg-yellow border-->

                            </a>
                        </div>
                    </div>
                    <div class="col-md-10 d-flex justify-content-center align-items-center text-light">
                        <!--<a style="color:#fff" href="Assets for JGMCH/Housestaff_JGMCH.pdf">Invited for stipendiary Housestaffship</a>-->
                        <div class="ticker__viewport">
                            <ul class="ticker__list" data-ticker="list">
                                <!--<li class="ticker__item" data-ticker="item"><a href="about.php"><i class="material-icons"-->
                                <!--            style="position: relative; top: 5px;line-height: 0;"> </i>-->
                                <!--       will be updated soon-->
                                <!--    </a></li>-->
                                <li class="ticker__item" data-ticker="item">75% attendance under cctv surveillance is
                                    mandatory for every MBBS students.</li>
                            </ul>
                        </div>
                        <!--  -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end attentiion section -->
    <div class=" bg-g my-0 py-5">
        <div class="container">
            <!--<div class="text-center text-light pb-4">-->
            <!--    <h2>Academic Activities</h2>-->
            <!--</div>-->
            <div class="row justify-content-evenly">
                <?php if(!empty($notice)){ ?>
                <div class="col-md-3 bg-light">
                    <div class="row ">

                        <h5 class="text-center my-2 border-bottom"><strong>Notice</strong></h5>
                        <div class="scroll">
                            <ol class="mx-2">
                                <?php foreach($notice as $row){ ?>
                                <li class="mb-2">
                                    <a class="text-dark" href="<?=base_url('get-file/'.$row->file)?>"
                                        target="_blank"><?=$row->title?>
                                        <!-- <img
                                            src="Assets for JGMCH/new_gif.gif" style="width:30px;"> -->
                                    </a>
                                </li>
                                <?php } ?>
                            </ol>
                        </div>

                    </div>
                </div>
                <?php } ?>
                <?php if(!empty($tender)){ ?>
                <div class="col-md-3 bg-light">
                    <div class="row ">
                        <h5 class="text-center my-2 border-bottom"><strong>Tender</strong></h5>
                        <div class="scroll">
                            <ol class="mx-2">
                                <?php foreach($tender as $row){ ?>
                                <li class="mb-2">
                                    <a class="text-dark" href="<?=base_url('get-file/'.$row->file)?>"
                                        target="_blank"><?=$row->title?>
                                        <!-- <img
                                            src="Assets for JGMCH/new_gif.gif" style="width:30px;"> -->
                                    </a>
                                </li>
                                <?php } ?>
                            </ol>
                        </div>

                    </div>
                </div>
                <?php } ?>
                <?php if(!empty($news)){ ?>
                <div class="col-md-3 bg-light">
                    <div class="row ">

                        <h5 class="text-center my-2 border-bottom"><strong>News/Events</strong></h5>
                       
                        <div class="scroll">
                            <ol class="mx-2">
                                <?php foreach($news as $row){ ?>
                                <li class="mb-2">
                                    <a class="text-dark" href="<?=base_url('get-file/'.$row->file)?>"
                                        target="_blank"><?=$row->title?>
                                        <!-- <img
                                            src="Assets for JGMCH/new_gif.gif" style="width:30px;"> -->
                                    </a>
                                </li>
                                <?php } ?>
                            </ol>
                        </div>
                    </div>
                </div>
                <?php } ?>

            </div>
        </div>
    </div>
    <!--  start about section -->
    <section id="about-section">
        <div class="container pt-4">
            <div class="row paddi">
                <h3 class="text-center pb-3">About the Hospital</h3>
              
            </div>
        </div>
        <div class="container pt-3 pb-5">
            <div class="row text-center">
                <div class="col-md-12 d-flex justify-content-center align-items-center">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="row justify-content-center align-items-center abouthospital_div_padd">
                                <div class="col-md-11 col-12  border rounded-3 px-5 py-2">
                                    <?php 
                                    $hospital = getHospitalAbout();
                                    ?>
                                    <h5 class="fw-bold pt-2">
                                        Affiliated To</h5>
                                    <p><?=$hospital->affiliated_to?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row justify-content-center align-items-center abouthospital_div_padd">
                                <div class="col-md-11 col-12  border rounded-3 px-2 py-1">
                                    <h5 class="fw-bold pt-2">Vice Chancellor & Registrar</h5>
                                    <p> <?=$hospital->vice_chancellor?> </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row justify-content-center align-items-center abouthospital_div_padd">
                                <div class="col-md-11 col-12  border rounded-3 px-5 py-2">

                                    <h5 class="fw-bold pt-2">Year of Affiliation </h5>
                                    <p><?=$hospital->year_of_affiliation?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="container-fluid bg-grey pt-4">
            <div class="container ">
                <div class="row">

                </div>
                <div class="container pt-3 pb-5">
                    <div class="row text-center">
                        <div class="col-md-12 d-flex justify-content-center align-items-center">
                            <div class="row">
                                <?php foreach($hospital_head as $row){ ?>
                                <div class="col-md-4 ">
                                    <div class="row justify-content-center align-items-center">
                                        <div
                                            class="col-md-11 col-12  border border-darkblue rounded-3 px-2 py-2 aboutcollege_div_padd height-500 bg-white">
                                            <div class="d-flex justify-content-center pt-4 pb-3">
                                                <div class="width-60"><img class="border-2 img-fluid"
                                                        src="<?=base_url('get-file/'.$row->image)?>"
                                                        style="width:100%; object-fit:cover; height:200px"></div>
                                            </div>
                                            <h5 class="text-center fw-bold"> <?=$row->title?></h5>
                                            <p class="text-center"><?=$row->sub_title?></p>

                                            <span class="fw-bold ">Address:</span>
                                            <?=$row->address?>
                                            <p><span class="fw-bold">Phone: <?=$row->phone?></span></p>
                                            <p><span class="fw-bold">E-mail I.D: <?=$row->email?></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ends depertment section -->
    <!-- start gallery section -->
    <section id="gallery-section">
        <div class="container pb-4">
            <h3 class="text-center py-5">Gallery</h3>
            <div class="row">
                <div class="owl-carousel owl-theme">
                    <?php foreach($gallery as $row){ ?>
                    <div class="item"> <img class="img-fluid" src="<?=base_url('get-file/'.$row->image)?>">
                        <div>
                            <p class="text-center mb-0 pt-2"><?=$row->title?></p>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        </div>
    </section>
    <?=view('component/front/footer') ?>
    <?=view('component/front/script') ?>
</body>

</html>