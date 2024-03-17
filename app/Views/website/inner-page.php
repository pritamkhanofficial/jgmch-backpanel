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
        <?php
        if(empty($content->banner)){
        ?>
        <img src="<?=base_url('front/')?>images/banner/banner.png" width="100%">
        <?php  }else{ ?>
        <img src="<?=base_url('get-file/' . $content->banner)?>" width="100%">
        <?php } ?>
    </div>
    <!-- ends banner  section ends -->
    <!-- info / secondary -->
    <div class="container">
        <h3 class="text-center py-5 fw-bolder mob-about-hos"><?=$content->page?></h3>
        <div class="row border border-darkblue rounded py-4 my-4">
            <h4 class=" px-4 fw-bolder mob-about-hos1"></h4>
            <div class="text-justify px-4">
                <table class="table-bordered w-100 no-datatable" style="text-align:center">
                    <thead>
                        <tr>
                            <th class="py-2 px-3">SL No </th>
                            <th class="py-2 px-3"> Name </th>
                            <td class="text-center">Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for($i = 1; $i <= 8; $i++) { ?>
                        <?php if(!empty($content->{'title_'.$i})) { ?>
                        <tr>
                            <th class="py-2 px-3"> <?=$i?></th>
                            <th class="py-2 px-3"> <?=$content->{'title_'.$i}?></th>
                            <td class="text-center"><a href="<?=base_url('get-file/' . $content->{'file_'.$i})?>"
                                    target="_blank">Click here</a></td>
                        </tr>
                        <?php } ?>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?=view('component/front/footer') ?>
    <?=view('component/front/script') ?>
</body>

</html>