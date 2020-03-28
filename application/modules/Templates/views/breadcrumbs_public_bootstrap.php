
        <div class="breadcrumbs-area section-padding">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumbs text-center text-white">
                           <h3 class="text-uppercase">PRODUCT  DETAILS</h3> 
                           <ul class="breadcrumbs-list breadcrumb ">
                           	<?php 
                           	foreach ($breadcrumbs_array as $key => $value) {
                           		echo '<li><a href="'.$key.'" title="Return to Home"  style="color: black;">'.$value.'</a></li>';
                           	}
                           	?>
                                <li><?= $current_page_title ?></li>
                            </ul>
                        </div>
                    </div>
             </div>
       
        </div>
        