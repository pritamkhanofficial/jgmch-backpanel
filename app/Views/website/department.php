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
        <div class="row mt-5 mb-5">
            <?php if(!empty($department)){
                $colorClasses = array("bg-info", "bg-secondary"); // Define available color classes
                $colorIndex = 0; // Initialize a counter for color class assignment
            ?>
            <?php foreach($department as $key=>$row){
                $colorClass = $colorClasses[$colorIndex % count($colorClasses)]; 
                
            ?>
            <div class="col-md-6">
                <div class="row <?=$colorClass?>  m-0 mt-3" style="border-radius:8px;">
                    <div class="col-sm-12 col-xs-12 px-4 mb-2 m-1">
                        <h3 class="text-justify mar-t-less"><b><?=$row->label?></b></h3>
                        <p class="p-size text-justify"><b>Name of, HOD</b></p>
                        <a href="<?=base_url('department-details/' . $row->id)?>" class="pull-left" target="_self"><button
                                class="btn btn-primary">Click for details</button></a>
                    </div>
                </div>
            </div>
            <?php $colorIndex++; } ?>
            <?php }else{ ?>
            <div class="col-md-12"></div>
            <?php } ?>
        </div>
    </div>
    <?=view('component/front/footer') ?>
    <?=view('component/front/script') ?>
</body>

</html>