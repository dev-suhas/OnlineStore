  <div class="side_right">
    <div class="mt-2"></div>
    <div class="clearfix"></div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 ">
          <h2 class="page_txt"> Order Management </h2>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 ">
          <ul class="btn_ul">
            <li> <a href="<?php echo base_url();?>admin/admin/dashboard" class="btn btn-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;&nbsp; Back</a> </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="shadow-sm p-3 mb-2 bg-white" style="position:relative" >
       <ul class="tp_tab">
        <li><a href="<?php echo base_url();?>admin/admin/order_view/0" class="<?php echo ($this->uri->segment(4)==0)? 'active' : '' ; ?>"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;&nbsp;Pending Order </a></li>
        <li><a href="<?php echo base_url();?>admin/admin/order_view/1" class="<?php echo ($this->uri->segment(4)==1)? 'active' : '' ; ?>"> <i class="fa fa-check-square-o" aria-hidden="true"></i>&nbsp;&nbsp;Delivered Order </a></li>
        <li><a href="<?php echo base_url();?>admin/admin/order_view/2" class="<?php echo ($this->uri->segment(4)==2)? 'active' : '' ; ?>"><i class="fa fa-times" aria-hidden="true"></i>&nbsp;&nbsp;Cancelled Order</a></li>
      </ul>    
	  <hr>
      <div class="clearfix"></div>
	   <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 ">
          <h2 class="page_txt">
              <?php if($this->uri->segment(4)==0){ ?>
                  <i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;&nbsp;Pending Order </h2>
              <?php } else if($this->uri->segment(4)==1){ ?>
                  <i class="fa fa-check-square-o" aria-hidden="true"></i>&nbsp;&nbsp;Delivered Order </h2>
              <?php } else { ?>
                  <i class="fa fa-times" aria-hidden="true"></i>&nbsp;&nbsp;Cancelled Order </h2>
              <?php } ?>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 ">
        </div>
	   </div>
	  </div>
       <div class="row">
	     <div class="col-lg-12 col-md-12 col-sm-12 ">
		  <div class="shadow-sm p-3 mb-2 bg-white" style="position:relative" >
			<div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 ">
                <h2 class="page_txt"><i class="fa fa-list-ol" aria-hidden="true"></i>&nbsp;&nbsp;List of Order </h2>
              </div>
			 </div>		
			  
	       <div class="table-responsive">
				<table class="table  table-hover srp_table" width="100%" border="1">
				  <thead>
					<tr>
					  <th scope="col" >SL No </th>
					  <th scope="col" >Order No.</th>
					  <th scope="col" >Order Date</th>
					  <th scope="col" >Order Value</th>
					  <th scope="col" > Action </th>
					</tr>
				  </thead>
				  <tbody>
				  <?php if(!empty($order_list)){
				      $i=0;
				      foreach($order_list as $val){ ?>
					<tr>
					  <td><?php echo ++$i; ?></td>
					  <td><?php echo $val['orderno']; ?></td>
					  <td><?php echo $val['order_date']; ?></td>
					  <td><?php echo $val['order_value']; ?></td>
					  <td><div class="btn-group"> <a href="<?php  echo base_url();?>admin/admin/view_order/<?php echo $val['orderno']; ?>" class="btn btn-outline-primary" style="padding:6px;" title="View"><i class="fa fa-file" aria-hidden="true"></i></a></div></td>
					</tr>
					<?php } } else { ?>
					<tr>
					    <td>No Data Found!</td>
					</tr>
					<?php } ?>
				  </tbody>
				</table>
             </div>
             
	           <br>
			</div> 
          </div>
	    </div>
       </div>
	</div>
    <div class="clearfix"></div>
    <br>