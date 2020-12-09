<?php 
$form_location= base_url().'Search/search_resalt'; 
?>
<div class="col-sm-4">
    <div class="header-top">
        <ul>
            <!--start of searche bar-->
            <li class="lh-50">

                <div class="header-bottom-search header-top-downx header-top-hover lh-35">
                    <form class="header-search-box" action="<?= $form_location ?>" method="POST">
                        <div>
                            <input type="text" name="searched_keyword" value="<?= $searched_keyword?>" placeholder=" Search" autocomplete="off">
                            <button class="btn btn-search" type="submit">
                                <i class="zmdi zmdi-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </li>
            <!--end of searche bar-->
        </ul>
    </div>
</div>