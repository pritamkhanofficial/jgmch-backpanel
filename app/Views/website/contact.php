<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contect</title>
    <?=view('component/front/head') ?>
</head>

<body>
    <?=view('component/front/header') ?>
    <!-- start banner section -->
    <div>
        <img src="<?=base_url('front/')?>images/banner/banner.png" width="100%">
    </div>
<?php
$hospital = getHospitalAbout();

?>
    <div class="container pb-5 pt-4">
        <div class="row ">
            <h3 class="text-center fw-bolder pb-4">Contact</h3>
            <div class="col-md-4 border px-5 py-4 abouthospital_div_padd">

                <div class="link_clr">
                    <h4>Contact information</h4>
                    <p>Principle Office:- </p>
                    <a href="tel:<?=$hospital->principle_phone?>" class="text-decoration-none">
                        <p><i class="bi bi-telephone-plus text-warning"> <?=$hospital->principle_phone?> (9am to 5.30
                                pm)</i>&nbsp;&nbsp;</p>
                    </a>
                    <p>MSVP:- </p>
                    <a href="tel:<?=$hospital->msvp_phone?>" class="text-decoration-none">
                        <i class="bi bi-telephone-plus text-warning"> <?=$hospital->msvp_phone?></i>&nbsp;&nbsp;
                    </a>

                    <a href="tel:<?=$hospital->msvp_phone_2?>" class="text-decoration-none">
                        <i class="bi bi-telephone-plus text-warning"> <?=$hospital->msvp_phone_2?></i>&nbsp;&nbsp;
                    </a>
                    <p>
                    </p>
                    <p>Information mail:-</p>
                    <a href="mailto:<?=$hospital->mail?>" class="text-decoration-none">
                        <p><i class="bi bi-envelope text-warning"></i>&nbsp; &nbsp;<?=$hospital->mail?></p>
                    </a>
                </div>
                <div>
                    <h4>Address: </h4>
                    <i class="bi bi-geo-alt-fill text-warning"></i>
                    <?=$hospital->address?>
                </div>
            </div>
            <div class="col-md-8">
                <section class="">
                    <!-- Jumbotron -->
                    <div class="px-4 py-5 px-md-5 text-center text-lg-start border m-small">
                        <div class="container">
                            <div class="row align-items-center">

                                <div class="col-lg-12 mb-5 mb-lg-0">
                                    <div class="form">
                                        <div class="card-body" style="text-align: justify;">

                                        <?=$hospital->contact_info?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Jumbotron -->
                </section>
                <!-- Section: Design Block -->
            </div>
        </div>
    </div>
    <?=view('component/front/footer') ?>
    <?=view('component/front/script') ?>
    <script src="<?=base_url('front/')?>js/lightbox-plus-jquery.js"></script>
</body>

</html>