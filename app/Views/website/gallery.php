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
    <!-- start banner section -->
    <div>
        <img src="<?=base_url('front/')?>images/banner/banner.png" width="100%">
    </div>
    <!-- ends banner  section ends -->
    <!-- info / secondary -->
    <div class="container">
        <div class="d-flex justify-content-center align-items-center my-5">
            <h2 class="text-center text-black py-3 z-index-3 me-2 fw-bold">Gallery
            </h2>
        </div>
        <div class="row mt-5 mb-5">
            <?php if(!empty($gallery)){?>
            <?php foreach($gallery as $key=>$row){?>
            <div class="col-md-3 col-6 mb-3">
                <a class="example-image-link" href="<?=base_url('get-file/' . $row->image)?>" data-lightbox="example-1">
                    <img class="img-fluid" class="example-image img-fluid"
                        src="<?=base_url('get-file/' . $row->image)?>" alt="image-1" w="100" />
                </a>
            </div>
            <?php } ?>
            <?php }else{ ?>
            <div class="col-md-12"></div>
            <?php } ?>
        </div>
    </div>
    <?=view('component/front/footer') ?>
    <?=view('component/front/script') ?>
    <script src="<?=base_url('front/')?>js/lightbox-plus-jquery.js"></script>
</body>

</html>