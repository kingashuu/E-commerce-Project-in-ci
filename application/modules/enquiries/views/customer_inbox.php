
<section id="page-content" class="page-wrapper">
  <!-- Start Wishlist Area -->
  <div class="wishlist-area section-padding">
    <div class="container ">
      <h2 class="text-center">Your <?= $folder_type?></h2>
      <?php
      if (isset($flash)) {
        echo $flash;
      }
      $create_msg_url =base_url()."yourmessages/create"
      ?>

      <p style="margin-top: 30px">
        <a href="<?= $create_msg_url ?>"><button class="btn btn-large btn-success" type="submit">Compose Message </button></a>
      </p>

    <div class="row">
      <div class="col-md-12">
        <div class="wishlist-content">
          <form action="#">
            <div class="wishlist-table table-responsive p-30 text-uppercase">



              <table>
                <thead>
                  <tr>
                    <th class="product-thumbnail"></th>
                    <th class="product-name"><span class="nobr"> Date Sent</span></th>
                    <th class="product-name"><span class="nobr"> Sent By</span></th>
                    <th class="product-prices"><span class="nobr"> Subject</span></th>
                    <th class="product-stock-stauts"><span class="nobr"> Actions </span></th>

                  </tr>
                </thead>

                <tbody>
                 <?php
                 $this->load->module('site_settings');
                 $this->load->module('store_accounts');
                 $this->load->module('timedate');
                 $team_name = $this->site_settings->_get_support_team_name();

                 foreach ($query->result() as $row) {
                   $view_url=base_url()."yourmessages/view/".$row->code;

                   $customer_data['firstname']=$row->firstname;
                   $customer_data['lastname']=$row->lastname;
                   $customer_data['company']=$row->company;
                   $opened=$row->opened;

                   if ($opened== 1) {
                     $icon='<span class=" glyphicon glyphicon-envelope" aria-hidden="true"></span>';

                   }else{
                     $icon='<span  style="color: orange;" class=" glyphicon glyphicon-envelope" aria-hidden="true"></span>';
                   }
                   $date_sent = $this->timedate->get_nice_date($row->date_created,'mini');
                   if ($row->sent_by==0) {
                     $sent_by = $team_name;
                   }else{
                    $sent_by=$this->store_accounts->_get_customer_name($row->sent_by, $customer_data);
                  } 

                  ?>

                  <tr>
                    <td class="product-thumbnail"><?= $icon?></td>
                    <td class="product-name pull-left mt-20"><?= $date_sent?></td>
                    <td class="product-prices"><span class="amount"><?= $sent_by?></span></td>
                    <td class="product-stock-status"><span class="wishlist-in-stock"><?= $row->subject?></span></td>
                    <td class=""><a class="btn btn-info" href="<?= $view_url ?>">
                      <span class=" glyphicon glyphicon-eye-open" aria-hidden="true"></span> View 
                    </a>
                  </td></td>
                </tr>
                <?php
              }
              ?>
            </tbody>
          </table>

        </div>  
      </form>
    </div>                            
  </div>
</div>

</div>
</div>
</section>