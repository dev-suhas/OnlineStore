  <div class="side_right">
    <div class="mt-2"></div>
    <div class="clearfix"></div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 ">
          <h2 class="page_txt"> Customer Management  </h2>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 ">
          <ul class="btn_ul">
            <li> <a href="<?php echo base_url();?>index.php/admin/admin/dashboard" class="btn btn-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;&nbsp; Back</a> </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="shadow-sm p-3 mb-2 bg-white" style="position:relative" >
      <div class="clearfix"></div>
	   <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 ">
          <h2 class="page_txt"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;&nbsp;Customer </h2>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 ">
          <ul class="btn_ul">
            <!--<li> <a href="<?php echo base_url();?>index.php/admin/admin/dashboard" class="btn btn-primary">Add New&nbsp;&nbsp;<i class="fa fa-plus" aria-hidden="true"></i></a> </li>-->
          </ul>
        </div>
	   </div>
	  </div>
       <div class="row">
	     <div class="col-lg-12 col-md-12 col-sm-12 ">
		  <div class="shadow-sm p-3 mb-2 bg-white" style="position:relative" >
			<div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 ">
                <h2 class="page_txt"><i class="fa fa-list-ol" aria-hidden="true"></i>&nbsp;&nbsp;List of Customer </h2>
              </div>
			 </div>	
			 <div class="col-lg-8 col-md-8 col-sm-8 ">
                  <form action="<?php echo base_url();?>admin/admin/user_search" method="post">
                      
                    <div class="row">
                  <div class="input-group col-lg-4 col-md-4 col-sm-4">
                      <input type="text" class="form-control" name="search" value=""  placeholder="Search User By Name" aria-label="Search User By Name" aria-describedby="basic-addon2">
                      <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                      </div>
                    </div>
                    <div class="input-group col-lg-4 col-md-4 col-sm-4">
                      <input type="text" class="form-control" name="phone" value="" placeholder="Search User By Phone No" aria-label="Search User By Phone No" aria-describedby="basic-addon2">
                      <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                      </div>
                    </div>
                    </div>
                    </form>
              </div>
	      <nav aria-label="Page navigation example">
			    <?php echo $links; ?>
			 </nav> 
	       <div class="table-responsive">
				<table id="example" class="table  table-hover srp_table" width="100%" border="1">
				  <thead>
					<tr>
					  <th scope="col" width="">Sl.No. </th>
					  <th scope="col" width="">Name</th>
					  <th scope="col" width="">Phone No,</th>
					  <th scope="col" width="">Action</th>
					</tr>
				  </thead>
					<?php if(isset($user_list)){
	                    $i=0;
	                    foreach($user_list as $val){ ?>
				  <tbody>
					<tr>
					  <td><?= ++$i; ?></td>
					  <td><a href="#"> <strong style="margin-bottom: 5px;display: block;color: #ea6227;"><?= $val['name']; ?></strong>
						<p style="line-height: 19px; color:#000;"><?= $val['address']; ?></p>
						</a>
					  </td>
					  <td><?= $val['phone']; ?></td>	
			 		  <td><div class="btn-group"> 
						  <a href="view_user/<?= $val['id']; ?>" class="btn btn-outline-primary" style="padding:6px;" title="View"> <i class="fa fa-eye"></i></a> 
						  </div>
					  </td>
					</tr>
				  </tbody>
					<?php } }
                     else {
					?>	
					<tbody><tr><td>No Data Found!</td></tr></tbody>	
					<?php } ?>
				</table>
             </div>
              <div class="col-lg-12 col-md-12 col-sm-12 ">
	                 <p><?php echo $links; ?></p>
	           </div>
	           <br>
			</div> 
          </div>
	    </div>
       </div>
	</div>
    <div class="clearfix"></div>
    <br>