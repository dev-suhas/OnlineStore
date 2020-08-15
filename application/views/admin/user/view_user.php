<div class="side_right">
    <div class="mt-2"></div>
    <div class="clearfix"></div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 ">
          <h2 class="page_txt">Customer Management </h2>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 ">
          <ul class="btn_ul">
            <li> <a href="<?php echo base_url();?>index.php/admin/admin/user_view" class="btn btn-danger">Back</a> </li>
          </ul>
        </div>
      </div>
    </div>
	 <?php foreach($user_list as $val){ ?>
    <div class="shadow-sm p-3 mb-2 bg-white" style="position:relative" >
      <div class="row">
        <div class="col-lg-12 ">
          <div class="row">
            <div class="col-lg-8 col-lg-8 col-sm-12">
              <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-4 text-center">
                  <div style="border-radius: 50% ; height:100px; width: 100px; 
							  background:#eee url(<?php echo base_url(); ?>assets/admin/img/shop_logo_old.png);    background-size: cover; display: inline-block"></div>
                </div>
                <div class="col-lg-10 col-md-8 col-sm-8">
                  <ul class="quatation_ul" style="margin-top: 5px">
                    <li style="padding-left:0">
                      <h3 style="    font-size: 20px;
    margin-bottom: 5px;
    font-weight: bold;
    color: #da251d;"><?= $val['name']; ?></h3>
                      <p style="font-size: 14px;    color: #6b6b6b;"><?= $val['address']; ?></p>
                      <p style="margin-bottom:5px;"> <i class="fa fa-mobile" aria-hidden="true"></i>&nbsp;&nbsp;<?= $val['phone']; ?></p>
                      <p style="font-size: 13px"></p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
             
          </div>
          <hr>
          <table align="left" style="font-size: 15px; max-width: 400px" class="table table-borderless" width="" border="0">
            <tbody>
              <tr>
                <td> Name </td>
                <td><strong ><?= $val['name']; ?></strong></td>
              </tr>
              <tr>
                <td>Phone No. </td>
                <td><strong><?= $val['phone']; ?></strong></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
	<?php } ?>
    <div class="clearfix"></div>
    <br>