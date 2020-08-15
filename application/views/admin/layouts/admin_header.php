<!doctype html>
<html>
<head>

<title> Online Shop</title>
<link rel="icon" href="<?php echo base_url(); ?>/assets/admin/img/fav_icon.png" type="image/png" sizes="35x35">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/admin/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/admin/css/sidebar.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/admin/css/responsive.css" />
<link href="<?php echo base_url(); ?>/assets/admin/js/plugin/select2/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/admin/css/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/admin/font-awesome-4.6.3/css/font-awesome.css" />
<!--<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600" rel="stylesheet">-->
	

<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
<script>
  var OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: "acd96361-3450-4f29-b80d-d43f46950e73",
    });
  });
</script>

</head>
<body>
<div class="brand_section">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6"> <a class="bran_logo" href="#"> <img src="<?php echo base_url(); ?>" height="40"/></a> </div>
      <div class="col-lg-6 col-md-6 col-sm-6"> <a href="#" class=""> </a> <a href="#" id="open-left" class=" icon-menu head_user  "> M </a>
        <div class="loged" style="display: none"> <img src="<?php echo base_url(); ?>/assets/admin/img/prof_img.gif" class="media media-object img-circle">
          <div> Hi, <b>Ajay Gosh</b> <br>
            Welcome to account </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="nav_body" id="header">
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item dropdown  <?php  if(isset($this->notification)) echo 'active'; else echo ''; ?>"> 
            
          <a class="nav-link dropdown-toggle count_ct" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
           <i class="fa fa-bell-o" aria-hidden="true"></i>
             <?php if(!empty($this->notification)){ ?><div class="count"><?php echo count($this->notification); ?></div><?php } ?>
			  </a>
			    
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="overflow-y: auto;max-height: 240px;"> 
              <?php if(!empty($this->notification)){
                         foreach($this->notification as $val){
              ?>
			  <a class="dropdown-item"  href="<?php echo base_url();?>admin/admin/view_order/<?php echo $val['orderno']; ?>">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;New Order Received - <?php echo $val['orderno']; ?></a>
			  <?php } ?>
			  <hr style="border-bottom: 1px solid #ea6227;">
			  <a class="dropdown-item text-center" href="<?php echo base_url();?>admin/admin/order_view/0">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;&nbsp;View All</a>
			  <?php } else { ?>
			  <a class="dropdown-item text-center">
			      <div>
			          <hr>
			          <i class="fa fa-bell-o fa-5x" aria-hidden="true"></i>
			          <h3>I'm Empty<br>Now!</h3>
			          <hr>
			          <p></p>
			      </div>
			  </a>
			  <?php } ?>
			  </div>
          </li>
          <li class="nav-item dropdown  <?php  if(isset($this->enquiry)) echo 'active'; else echo ''; ?>"> 
          <a class="nav-link dropdown-toggle count_ct" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">    
			  <i class="fa fa-commenting-o" aria-hidden="true"></i>
			  <?php if(!empty($this->enquiry)){ ?><div class="count"><?php echo count($this->enquiry);  ?></div><?php } ?>
			  </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="overflow-y: auto;max-height: 240px;"> 
              <?php if(!empty($this->enquiry)){
                         foreach($this->enquiry as $val){
              ?>
			  <a class="dropdown-item" class="eid" href="<?php echo base_url();?>admin/admin/enquiry">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-commenting-o" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;New Enquiry Received - <?php echo $val['subject']; ?></a>
			  <?php } ?>
			  <hr style="border-bottom: 1px solid #ea6227;">
			  <a class="dropdown-item text-center" href="<?php echo base_url();?>admin/admin/enquiry">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;&nbsp;View All</a>
			  <?php } else { ?>
			  <a class="dropdown-item text-center">
			      <div>
			          <hr>
			          <i class="fa fa-commenting-o" aria-hidden="true"></i>
			          <h3>I'm Empty<br>Now!</h3>
			          <hr>
			          <p></p>
			      </div>
			  </a>
			  <?php } ?>
			  </div>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</div>
<div class="clearfix"></div>
<div class="container-fluid"> </div>
<div class="cp_col">
  <div class="side_left">
    <div class="clearfix"> </div>
    <div id="menu">
      <nav>
        <div id="acdnmenu" >
          <ul>
           <li> <a href="<?php echo base_url();?>admin/admin/dashboard">Dashboard</a> </li>  
			<li>Product Management&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+
              <ul>
                <li><a href="<?php echo base_url();?>admin/admin/products_view">View</a></li>
                <li><a href="<?php echo base_url();?>admin/admin/add_product">Add New </a></li>
              <!--  <li><a href="<?php echo base_url();?>admin/admin/manageProduct">Manage Price </a></li> -->
              </ul>
            </li> 
			<!-- <li>Merchant Management&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+
              <ul>
                <li><a href="<?php echo base_url();?>admin/admin/shop_view">View</a></li>
              </ul>
            </li> 
			<li>Customer Management&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+
              <ul>  
                <li><a href="<?php echo base_url();?>admin/admin/user_view">View</a></li>
              </ul>
            </li> -->
            <li>Website Management &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+
              <ul>
                <li><a href="<?php echo base_url();?>admin/admin/banner">Banner</a></li>
              </ul>
            </li> 
           <!-- <li> <a href="<?php echo base_url();?>admin/admin/order_view/0">Order Management</a> </li> 
			<li>Reports&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+
              <ul>
                <li><a href="#">Report 1</a></li>
                <li><a href="#">Report 2</a></li>
              </ul>
            </li>  
            <li> <a href="<?php echo base_url();?>admin/admin/enquiry">Enquiry</a> </li>   -->
			<li> <a href="<?php echo base_url();?>admin/admin/category_view">Master Settings</a> </li>  
          </ul>
        </div>
      </nav>
    </div>
  </div>
  <div class="pos-f-t clearfix subxms ">
    <div class="container-fluid">
      <nav class="navbar navbar-dark  ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation"> <i class="fa fa-bars"></i> </button>
      </nav>
      <div class="collapse" id="navbarToggleExternalContent">
        <div class="p-2">
          <div id="acdnmenu">
            <div id="acdnmenub" >
          <ul>
            <!-- 
			<li> <a href="<?php echo base_url();?>admin/admin/dashboard">Dashboard</a> </li>  
			<li>Product Management            +
              <ul>
                <li><a href="<?php echo base_url();?>admin/admin/products_view">View</a></li>
                <li><a href="<?php echo base_url();?>admin/admin/add_product">Add New </a></li>
                <li><a href="<?php echo base_url();?>admin/admin/managePrice">Manage Price</a></li>
              </ul>
            </li> 
			<li>Merchant Management +
              <ul>
                <li><a href="<?php echo base_url();?>admin/admin/shop_view">View</a></li>
              </ul>
            </li> 
			<li>Customer Management +
              <ul>
                <li><a href="<?php echo base_url();?>admin/admin/user_view">View</a></li>
              </ul>
            </li>
             <li>Vendor Management +
              <ul>
                <li><a href="<?php echo base_url();?>admin/admin/vendor_view">View</a></li>
                <li><a href="<?php echo base_url();?>admin/admin/add_vendor">Add New </a></li>
                <li><a href="<?php echo base_url();?>admin/admin/vendor_manage">Mange Product </a></li>
                <li><a href="<?php echo base_url();?>admin/admin/vendor_category">Category </a></li>
              </ul>
            </li> 
            <li> <a href="<?php echo base_url();?>admin/admin/order_view/0">Order Management</a> </li>
			<li>Reports +
              <ul>
                <li><a href="#">Report 1</a></li>
                <li><a href="#">Report 2</a></li>
              </ul>
            </li>
            <li> <a href="<?php echo base_url();?>admin/admin/enquiry">Enquiry</a> </li>-->
			<li> <a href="<?php echo base_url();?>admin/admin/category_view">Master Settings</a> </li>  
          </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>