<p style="margin-top: 30px">


  <!-- Button trigger modal -->
  <a href="#myModal" role="button" class="btn btn-large btn-info" data-toggle="modal">Creat New Link
  </a>
  <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModal">
    <div class="modal-header" style="background-color: white;">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
      <h3 id="myModalLabel">Creat Bottom navigation Link</h3>
    </div>
    <div class="modal-body" style="background-color: white;">

      <form class="form-horizontal" action="<?= $form_location?>" method="post">
          <div class="control-group">
              <label class="control-label" for="typeahead">Page URL:</label>
              <div class="controls">
                <?php
                $additional_dd_code = 'id="selectError3"';
                echo form_dropdown('page_id', $options, '', $additional_dd_code)
                ?>
              </div>
            </div>
     </div>
     <div class="modal-footer">
      <button class="btn" data-dismiss="modal" aria-hidden="true" name="" value="cancel"> Cloce</button>
      <button class="btn btn-primary" name="submit" value="Submit" type="submit">Submit</button>
    </div>
    
  </form> 
</div>
</p>