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
        //if(empty($department->image)){
        ?>
        <img src="<?=base_url('front/')?>images/banner/banner.png" width="100%">
        <?php  //}else{ ?>
            <!-- <img src="< ?=base_url('get-file/' . $department->image)?>" width="100%"> -->
        <?php //} ?>
    </div>
    <!-- ends banner  section ends -->
    <!-- info / secondary -->
    <div class="container">
        <div>
            <h3 class="text-center mt-4"><?=$committee->label?></h3>
        </div>
        <div class="col-md-12">
            <table class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">SL NO</th>
                        <th class="text-center" scope="col">NAME</th>
                        <th class="text-center" scope="col">DESIGNATION</th>


                    </tr>
                </thead>
                <tbody>
                    <?php foreach($staff as $key=>$row){ ?>
                    <tr>
                        <th class="text-center" scope="row"><?=++$key?></th>
                        <td><?=$row->label?></td>
                        <td align="center"><?=$row->designation?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <?=view('component/front/footer') ?>
    <?=view('component/front/script') ?>
</body>

</html>