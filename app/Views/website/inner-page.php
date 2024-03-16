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
        <h3 class="text-center py-5 fw-bolder mob-about-hos">Academic Calender</h3>
        <div class="row border border-darkblue rounded py-4 my-4">
            <h4 class=" px-4 fw-bolder mob-about-hos1"></h4>
            <div class="text-justify px-4">
                <table class="table-bordered w-100 no-datatable">

                    <tbody>

                        <tr>
                            <th class="py-2 px-3"> Academic schedule phase 2 Batch 2022-23</th>
                            <td class="text-center"><a href="Assets for JGMCH/Adobe Scan 13-Dec-2023.pdf">Click here</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?=view('component/front/footer') ?>
    <?=view('component/front/script') ?>
</body>

</html>