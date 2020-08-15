
<div class="side_right">
    <div class="mt-2"></div>
    <div class="clearfix"></div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 ">
          <h2 class="page_txt">Order Management </h2>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 ">
          <ul class="btn_ul">
            <li> <a href="<?php echo base_url();?>admin/admin/order_view/0" class="btn btn-primary">
				<i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;&nbsp;Back</a> </li>
          </ul>
        </div>
      </div>
    </div>
<?php if(isset($order_list)){
          foreach($order_list as $val){
              $delivery=$val['delivery_charge'];
              $total=$val['order_value'];
?>
    <div class="shadow-sm p-3 mb-2 bg-white" style="position:relative" >
      <div class="row">
        <div class="col-lg-12 ">
          <div class="row">
            <div class="col-lg-8 col-lg-8 col-sm-12">
              <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-4 text-center">
                  <div style="border-radius: 50% ; height:100px; width: 100px;background:#eee url(<?php echo base_url(); ?><?= $val['photo']; ?>);background-size: cover; display: inline-block"></div>
                </div>
                <div class="col-lg-10 col-md-8 col-sm-8">
                  <ul class="quatation_ul" style="margin-top: 5px">
                     <li style="padding-left:0">
                      <h3 style="    font-size: 20px; margin-bottom: 5px;font-weight: bold;color: #ea6227;"> <?= $val['customer']; ?> </h3>
                      <p style="font-size: 14px;    color: #6b6b6b;"> <?= $val['address']; ?> </p>
                      <p style="margin-bottom:5px;"> <i class="fa fa-whatsapp"></i>&nbsp;&nbsp;<?= $val['phone']; ?></p>
                      <p style="font-size: 13px"></p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="col-lg-12 col-md-8 col-sm-8">
                  <ul class="quatation_ul" style="margin-top: 5px">
                     <li style="padding-left:0"><h4  class="oid"><?= $val['orderno']; ?></h4></li>
                  </ul>
                </div>
    <?php } } ?>    
      </div>
    </div>
   </div>  
   <div class="shadow-sm p-3 mb-2 bg-white" style="position:relative" >
      <div class="row">
          <div class="table-responsive">
              <table style="font-size: 15px; " class="table  table-hover srp_table" width="100%" border="1">
                  <thead>
                      <tr>
                          <td>Sl.No.</td>
                          <td>Product</td>
                          <td>Qty</td>
                          <td>Price</td>
                      </tr>
                  </thead>
                  <tbody>
                      <?php if(isset($order_list_more)){
                                  $i=0;
                                  foreach($order_list_more as $v){
                        ?>
                      <tr>
                          <td><?= ++$i; ?></td>
                          <td><strong style="    margin-bottom: 5px;display: block;color: #ea6227;"><?= $v['name']; ?></strong>
                               <p style="line-height: 19px; color:#000;"><?= $v['code']; ?></p></td>
                          <td><?= $v['qty'].' '.$v['unit_symbol']; ?></td>
                          <td><?= 'Ush '.$v['price']; ?></td>
                      </tr>
                      <?php } } ?>
                  </tbody>
                  <tfoot>
                      <tr>
                          <td colspan="3">Delivery Charge</td>
                          <td><?='Ush '.$delivery; ?></td>
                      </tr>
                      <tr>
                          <td colspan="3">Total</td>
                          <td><strong><?='Ush '.$total; ?></strong></td>
                      </tr>
                  </tfoot>
              </table>
          </div>
      </div>
   </div>      
    <div class="clearfix"></div>
    <br>
    


