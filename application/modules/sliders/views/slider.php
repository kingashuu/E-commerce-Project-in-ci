
<!-- <h1>hello from slider</h1> -->
<div id="ensign-nivoslider" class="slides">   
    <?php
    $count=0;
    foreach ($query_slides->result() as $row_slides) {
        $alt_text=$row_slides->alt_text;
        $pic_path=base_url().'slider_pics/'.$row_slides->picture;
        ?>
        <img src="<?= $pic_path?>" alt="<?= $alt_text ?>" title="#htmlcaption<?= $count?>"/>
        <?php
        $count++;

    }
    ?>
</div>
<?php
$count=0;
foreach ($query_slides->result() as $row_slides) {
    $target_url=$row_slides->target_url;
    $header_title=$row_slides->header_title;
    $sub_title=$row_slides->sub_title;
    $alt_text=$row_slides->alt_text;
    $pic_path=base_url().'slider_pics/'.$row_slides->picture;
    ?>

    <!-- direction 1 -->
    <div id="htmlcaption<?= $count?>" class="nivo-html-caption slider-caption-1" >
        <div class="container slider-height" >

            <div class="row slider-height" >
                <div class="col-md-7 slider-height" >

                    <div class="slide-text" >
                        <div class="cap-title cap-main-title wow bounceInDown mb-35 text-uppercase text-white" data-wow-duration="0.5s" data-wow-delay="0s">
                            <!-- <h2><strong>2020</strong></h2> -->
                        </div>
                        <div class="cap-sub-title cap-main-title wow bounceInDown mb-40 text-uppercase text-white" data-wow-duration="1s" data-wow-delay="0s">
                            <h2><?= $header_title?></h2>
                        </div>
                        <div class="cap-sub-title wow bounceInDown mb-30 text-white" data-wow-duration="1.5s" data-wow-delay="0s">
                            <p><?= $sub_title?></p>
                        </div>
                        <div class="cap-shop wow bounceInUp" data-wow-duration="2s" data-wow-delay=".5s">
                            <a href="<?= $target_url?>" class="button extra-small text-uppercase">
                                <span>Shop now</span>
                            </a>
                        </div> 

                    </div>
                </div>

            </div>
        </div>  
    </div>
    <?php 
    $count++;
} 
?>

