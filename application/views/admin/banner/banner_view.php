<div class="side_right">
    <div class="mt-2"></div>
    <div class="clearfix"></div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 ">
          <h2 class="page_txt"> Website Settings </h2>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 ">
          <ul class="btn_ul">
            <li> <a href="<?php echo base_url();?>admin/admin/dashboard" class="btn btn-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;&nbsp; Back</a> </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="shadow-sm p-3 mb-2 bg-white" style="position:relative" >
    
      <div class="clearfix"></div>
	   <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 ">
          <h2 class="page_txt"><i class="fa fa-cube" aria-hidden="true"></i>&nbsp;&nbsp;Banner </h2>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 ">
          <ul class="btn_ul">
            <li> <a href="<?php echo base_url();?>admin/admin/addNewBanner" class="btn btn-primary">Add New&nbsp;&nbsp;<i class="fa fa-plus" aria-hidden="true"></i></a> </li>
          </ul>
        </div>
	   </div>
	  </div>
       <div class="row">
	     <div class="col-lg-12 col-md-12 col-sm-12 ">
		  <div class="shadow-sm p-3 mb-2 bg-white" style="position:relative" >
			<div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 ">
                <h2 class="page_txt"><i class="fa fa-list-ol" aria-hidden="true"></i>&nbsp;&nbsp;List of Banner </h2>
              </div>
			 </div>		
	       <div class="table-responsive">
				<table id="example" class="table  table-hover srp_table" width="100%" border="1">
				  <thead>
					<tr>
					  <th scope="col" width="">SL No </th>
					  <th scope="col" width="">Image</th>
					  <th scope="col" width="">Alt</th>
					  <th scope="col" width="">Action </th>
					</tr>
				  </thead>
				  <tbody>
					  <?php if(!empty($banner_list)){
	                    $i=0;
	                    foreach($banner_list as $val){ ?>
					<tr>
					  <td><?= ++$i; ?></td>
					  <td><img src="<?= base_url().$val['image']; ?>" alt="" height="85px"/></td>
					  <td><?= $val['name']; ?></td>
			 		    <td><div class="btn-group">
						  <a href="<?php echo base_url();?>admin/admin/edit_banner/<?= $val['id']; ?>" class="btn btn-outline-info" style="padding:6px;" title="Edit"> <i class="fa fa-edit"></i></a>  
						  <a href="<?php echo base_url();?>admin/admin/delete_banner/<?= $val['id']; ?>"  onclick="return confirm('Are you sure you want to delete?')" class="btn btn-outline-danger" style="padding:6px;" title="Delete"> <i class="fa fa-trash"></i></a> 
						  </div>
					    </td>
					</tr>
					  <?php } }
                     else {
					?>	
					<tr><td colspan="5" class="text-center">No Data Found!</td></tr>	
					<?php } ?>
				  </tbody>
					
				</table>
             </div>
			</div> 
          </div>
	    </div>
       </div>
	</div>
    <div class="clearfix"></div>
    <br>