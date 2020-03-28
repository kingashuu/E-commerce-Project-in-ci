<?php
echo Modules::run('homepage_blocks/_draw_blocks');
?>
<div class="blog-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="section-title text-uppercase mb-40">
                    <h4>latest blog</h4>
                </div>
            </div>                      
        </div>
        
                <?php echo Modules::run('blog/_draw_feed_hp');?> 
                
         
    </div>
</div>