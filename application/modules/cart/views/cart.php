<div class="breadcrumbs-area section-padding pt-0">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumbs text-center text-white">

                    <h3 class="text-uppercase">Cart</h3>
                    <?php
                    if ($num_rows < 1) {
                        echo "<p>Currently you have no item in your shopping basket.</p>";
                    } else {
                        echo "<p>" . $showing_statement . "</p>";
                        // $user_type = 'public';
                    }

                    ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php
if ($num_rows > 0) {
    $user_type = 'public';
    echo Modules::run('cart/_draw_cart_contents', $query, $user_type);
    echo Modules::run('cart/_attempt_draw_checkout_btn', $query);
}
?>