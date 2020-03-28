<?php 
$form_location= current_url(); 
?>
<div class="row">
  <div class="col-md-8">
    <h2><?= $headline ?></h2>
    <?php 
    echo validation_errors("<p style='color:red;'>", "</p>");
    ?>
    <form action="<?= $form_location ?>" method="post" style="margin-top: 24px;">
      <?php 
      if ($code=="") {
       ?>
       <div class="form-group">
        <label for="subject">Subject</label>
        <input type="text" name="subject" value="<?=$subject ?>" class="form-control" id="exampleInputEmail1" placeholder="Subject">
      </div>
      <?php 
    }else{
      echo form_hidden('subject', $subject);
    }
    ?>
    <div class="form-group">
      <label for="message">Message</label>
      <textarea  name="message" class="form-control" rows="6" placeholder=" Enter your message here"><?= $message ?></textarea>
    </div>
    <div class="checkbox">
      <label>
        <input name="urgent" value="1" type="checkbox"><?php 
        if ($urgent==1) {
         echo "checked";
       }
       ?>
       Urgent
     </label>
   </div>
   <button type="submit" name="submit" value="submit" class="btn btn-success">Submit</button> 
   <button type="submit" name="submit" value="Cancel" class="btn btn-default">Cancel</button>
 </form>
</div>
</div>
