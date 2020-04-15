<p style="margin-top: 30px">

  <a href="<?= base_url()?>sliders/create/<?= $parent_id ?>"><button type="button" class="btn btn-success">Backe to previous page</button></a>
 
  
  <!-- Button trigger modal -->
  <a href="#myModal" role="button" class="btn btn-large btn-info" data-toggle="modal">Creat New Slide
  </a>
  <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModal">
    <div class="modal-header" style="background-color: white;">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
      <h3 id="myModalLabel">Creat Slide</h3>
    </div>
    <div class="modal-body" style="background-color: white;">

      <form class="form-horizontal" action="<?= $form_location?>" method="post">
        <p>
            <div class="form-group">
            <label for="recipient-name" class="control-label">Target URL (Optional): </label>
            <input type="text" class="form-control span8" id="recipient-name" name="target_url" placeholder="Enter the Target URL her" >
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">Header Title:</label>
            <input type="text" class="form-control span8" id="recipient-name" name="header_title" placeholder="Enter the header title her for slider" >
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Sub TitleS:</label>
            <textarea class="form-control span8" id="message-text" name="sub_title" placeholder="Enter sub title her"></textarea>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">Alt Text (Optional): </label>
            <input type="text" class="form-control span8" id="recipient-name" name="alt_text" placeholder="Enter the alt-text her" >
          </div>
          


        
       </p>
     </div>
     <div class="modal-footer">
      <button class="btn" data-dismiss="modal" aria-hidden="true">Cloce</button>
      <button class="btn btn-primary" name="Submit" value="Submit" type="Submit">Submit</button>
    </div>
    <?php 
    echo form_hidden('parent_id', $parent_id);
    ?>
  </form> 
</div>
</p>