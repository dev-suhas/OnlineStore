  <div class="side_right">
    <div class="mt-2"></div>
    <div class="clearfix"></div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 ">
          <h2 class="page_txt"> General Settings </h2>
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
        <li><a href="<?php echo base_url();?>admin/admin/category_view"><i class="fa fa-cube" aria-hidden="true"></i>&nbsp;&nbsp;Category </a></li>
        <li><a href="<?php echo base_url();?>admin/admin/subcategory_view" class="active"><i class="fa fa-cubes" aria-hidden="true"></i>&nbsp;&nbsp;Sub Category </a></li>
       <li><a href="<?php echo base_url();?>admin/admin/unit_view"><i class="fa fa-tags" aria-hidden="true"></i>&nbsp;&nbsp;Unit</a></li>
		<li><a href="<?php echo base_url();?>index.php/admin/admin/state_view"><i class="fa fa-globe" aria-hidden="true"></i>&nbsp;&nbsp;State </a></li>
		<li><a href="<?php echo base_url();?>index.php/admin/admin/district_view" ><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;District </a></li>
		<li><a href="<?php echo base_url();?>index.php/admin/admin/district_view" ><i class="fa fa-thumb-tack" aria-hidden="true"></i>&nbsp;&nbsp;Pincode </a></li>
      </ul>
	  <hr>
      <div class="clearfix"></div>
	   <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 ">
          <h2 class="page_txt"><i class="fa fa-cubes" aria-hidden="true"></i>&nbsp;&nbsp;Sub Category </h2>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 ">
          <ul class="btn_ul">
            <li> <a href="<?php echo base_url();?>admin/admin/add_subcategory" class="btn btn-primary">Add New&nbsp;&nbsp;<i class="fa fa-plus" aria-hidden="true"></i></a> </li>
          </ul>
        </div>
	   </div>
	  </div>
       <div class="row">
	     <div class="col-lg-12 col-md-12 col-sm-12 ">
		  <div class="shadow-sm p-3 mb-2 bg-white" style="position:relative" >
			<div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 ">
                <h2 class="page_txt"><i class="fa fa-list-ol" aria-hidden="true"></i>&nbsp;&nbsp;List of Sub Category </h2>
              </div>
			 </div>		
	       <div class="table-responsive">
				<table class="table  table-hover srp_table" width="100%" border="1">
				  <thead>
					<tr>
					  <th scope="col" width="">SL No </th>
					  <th scope="col" width="">Name</th>
					  <th scope="col" width="">Parent Category</th>
					  <th scope="col" width="">Image</th>
					  <th scope="col" width="">Status</th>
					  <th scope="col" width=""> Action </th>
					</tr>
				  </thead>
					<?php if(!empty($subcategory_list)){
	                         $i=0;
	                         foreach($subcategory_list as $val){  ?>
				  <tbody>
					<tr>
					  <td><?= ++$i; ?></td>
					  <td><a href="#"> <strong style="margin-bottom: 5px;display: block;     color: #ea6227;"><?=$val['name']; ?></strong>
						<p style="line-height: 19px; color:#000;"><?=$val['description']; ?> </p>
						</a></td>
						<td><?= $val['cat_name']; ?></td>
						<td><img src="<?= base_url().$val['photo']; ?>" alt="" height="20px"/></td>
					    <td><?= ($val['status']!=0) ? '<span class="badge badge-success">Active</span>' : '<span class="badge badge-danger">Inactive</span>'; ?></td>
					  <td><div class="btn-group"> 
						   <!--<a href="view_subcategory/<?= $val['id']; ?>" class="btn btn-outline-primary" style="padding:6px;" title="View"> <i class="fa fa-eye"></i></a>-->
						  <a href="edit_subcategory/<?=$val['id']; ?>" class="btn btn-outline-info" style="padding:6px;" title="Edit"> <i class="fa fa-edit"></i></a> 
						  <a href="delete_subcategory/<?=$val['id']; ?>" class="btn btn-outline-danger"  onclick="return confirm('Are you sure you want to delete?')" style="padding:6px;" title="Delete"> <i class="fa fa-trash"></i></a> </div></td>
					</tr>
				  </tbody>
					<?php } }
                       else	{ ?>
					   <tr><td colspan="6" class="text-center">No Data Found!</td></tr>
					<?php } ?>					
				</table>
             </div>
			</div> 
          </div>
	    </div>
       </div>
	</div>
    <div class="clearfix"></div>
    <br>