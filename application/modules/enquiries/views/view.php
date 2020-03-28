<?php $form_location=base_url().'comments/submit' ?>
<h1><?= $headline ?></h1>
<?= validation_errors("<p style='color: #ff0000'>","</p>");?>
<?php
if (isset($flash)) {
  echo $flash;
}
$this->load->module('store_accounts');
$this->load->module('timedate');
foreach ($query->result() as $row) {
 $view_url=base_url()."enquiries/view/".$row->id;

 $opened=$row->opened;

 if ($opened== 1) {
   $icon='<i class="icon-envelope"></i>';

 }else{
   $icon='<i class="icon-envelope-alt"  style="color:orange;"></i>';
 }
 $date_sent = $this->timedate->get_nice_date($row->date_created,'full');
 if ($row->sent_by==0) {
   $sent_by="Admin";
 }else{
  $sent_by=$this->store_accounts->_get_customer_name($row->sent_by);
}
$subject=$row->subject;
$message=$row->message;
$ranking=$row->ranking;
} 
?>
<p style="margin-top: 30px">
  <a href="<?= base_url()?>enquiries/create/<?= $update_id?>">
    <button class="btn btn-large btn-primary" type="submit"></i></span>Reply Message </button>
  </a>
  <!-- Button trigger modal -->
  <a href="#myModal" role="button" class="btn btn-large btn-info" data-toggle="modal">Creat New Comment
  </a>
  <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModal">
    <div class="modal-header" style="background-color: white;">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
      <h3 id="myModalLabel">Creat Comment</h3>
    </div>
    <div class="modal-body" style="background-color: white;">
      <form class="form-horizontal" action="<?= $form_location?>" method="post">
        <p>
          <div class="control-group">
            <label class="control-label" for="inputComment">Comment</label>
            <div class="controls">
             <textarea rows="6" name="comment"></textarea>
           </div>             
         </div>
       </p>
     </div>
     <div class="modal-footer">
      <button class="btn" data-dismiss="modal" aria-hidden="true">Cloce</button>
      <button class="btn btn-primary">Save Changes</button>
    </div>
    <?php 
    echo form_hidden('comment_type', 'e');
    echo form_hidden('update_id', $update_id);
    ?>
  </form> 
</div>
</p>
<div class="row-fluid sortable">
  <div class="box span12">
    <div class="box-header" data-original-title>
      <h2><i class="halflings-icon white star"></i><span class="break"></span>Enquiries Ranking</h2>
      <div class="box-icon">
        <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
        <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
      </div>
    </div>
    <div class="box-content">
      <?php
      $form_location = base_url()."enquiries/submit_ranking/" .$update_id;
      ?>
      <form class="form-horizontal" method="post" action="<?= $form_location ?>">
        <fieldset>
          <div class="control-group">
            <label class="control-label" for="typeahead">Ranking</label>
            <div class="controls">
              <?php
              $additional_dd_code = 'id="selectError3"';
              if ($ranking>0) {
                unset($options['']);
              }
              echo form_dropdown('ranking', $options, $ranking, $additional_dd_code);
              ?>
            </div>
          </div>

          <div class="form-actions">
            <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
            <button type="submit" class="btn " name="submit" value="Cancel">Cancel</button>
          </div>
        </fieldset>
      </form>
    </div>
  </div><!--/span-->
</div><!--/row-->

<div class="row-fluid sortable">
  <div class="box span12">
    <div class="box-header" data-original-title>
      <h2><i class="halflings-icon white edit"></i><span class="break"></span>Enquiry Details</h2>
      <div class="box-icon">
        <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
        <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
      </div>
    </div>
    <div class="box-content">

      <table class="table table-striped table-bordered bootstrap-datatable ">
        <tbody>
          <tr>
           <td style="font-weight: bold;">Date Sent</td><td><?= $date_sent?></td>
         </tr>
         <tr>
           <td style="font-weight: bold;"> Sent By</td><td><?= $sent_by?></td>
         </tr>
         <tr>
           <td style="font-weight: bold;">Subject</td><td><?= $subject?></td>
         </tr>
         <tr>
           <td style="font-weight: bold; vertical-align: top;">Message</td>

           <td style="vertical-align: top;"><?= nl2br($message)?></td>
         </tr>
       </tbody>
     </table>

   </div>
 </div> 
</div> 

<?php  
echo Modules::run('comments/_draw_comments', 'e', $update_id);
?>

