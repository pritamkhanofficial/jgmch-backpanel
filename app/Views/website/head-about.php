<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Head</title>
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
    <div class="container pb-5">
    <h3 class="pb-4 pt-5 text-center fw-bolder mob-about-hos"><?=$content->title?></h3>
    <div class="row" style="justify-content: center;">
        <div class="col-md-4 ">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-11 col-12  border border-darkblue rounded-3 px-2 py-2 aboutcollege_div_padd height-500 bg-white">
                    <div class="d-flex justify-content-center pt-4 pb-3">
                        <div class="width-60"><img class="border-2 img-fluid" src="<?=base_url('get-file/' . $content->image)?>" style="width:100%; object-fit:cover; height:250px"></div>
                    </div>
                    <p class="text-center"><?=$content->sub_title?></p>

                    <span class="fw-bold ">Address:</span>
                    <?=$content->address?>
                    <p><span class="fw-bold">Phone:<?=$content->phone?></span></p>
                    <p><span class="fw-bold">E-mail I.D: <?=$content->email?> </span>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-8 ">
            <?=$content->description ?? 'No Content'?> 
        </div>
    </div>
</div>
    <?=view('component/front/footer') ?>
    <?=view('component/front/script') ?>
</body>

</html>