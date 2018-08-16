<?php $sths = $db->query ("SELECT * FROM `login` WHERE `guid` = '1'");
  $details = $sths-> fetch();?>
<nav class="navbar-side" role="navigation">
  <div class="navbar-collapse sidebar-collapse collapse">
    <!--<div class="media-search">&nbsp; </div>-->
    <!-- END FIND MENU ITEM INPUT -->
    <ul id="side" class="nav navbar-nav side-nav">
      <li>
        <h4>Navigation</h4>
      </li>
      <!-- END Navigation category -->
      <li> <a class="active" href="<?php echo URL; ?>home.php"> <i class="fa fa-dashboard"></i> Dashboard </a> </li>
	  <li><a href="<?php echo URL; ?>plans.php"> <i class="glyphicon glyphicon-th-list"></i> Membership Plans</a> </li>
      <!-- BEGIN COMPONENTS DROPDOWN psub_category.php?sid=1 -->
      <li class="panel"> <a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#forms1"> <i class="fa fa-cogs"></i> Categories <span class="fa arrow"></span> </a>
        <ul class="collapse nav" id="forms1">
		  <li><a href="<?php echo URL; ?>countries.php"> <i class="glyphicon glyphicon-th-list"></i> Countries</a> </li>
		  <li><a href="<?php echo URL; ?>cities.php"> <i class="glyphicon glyphicon-th-list"></i> Cities</a> </li>
		  <li><a href="<?php echo URL; ?>languages.php"> <i class="glyphicon glyphicon-th-list"></i> Languages</a> </li>
		  <li><a href="<?php echo URL; ?>denomination.php"> <i class="glyphicon glyphicon-th-list"></i> Caste/Denomination</a> </li>
		  <li><a href="<?php echo URL; ?>religions.php"> <i class="glyphicon glyphicon-th-list"></i> Religions</a> </li>
		  <li><a href="<?php echo URL; ?>occupations.php"> <i class="glyphicon glyphicon-th-list"></i> Occupations</a> </li>
		  <li><a href="<?php echo URL; ?>qualifications.php"> <i class="glyphicon glyphicon-th-list"></i> Qualifications</a> </li>
        </ul>
      </li>
      <?php /*
      <li class="panel"> <a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#forms3"> <i class="fa fa-cogs"></i> Everyday Medicals <span class="fa arrow"></span> </a>
        <ul class="collapse nav" id="forms3">
          <li><a href="<?php echo URL; ?>psub_category.php?sid=7"> <i class="glyphicon glyphicon-th-list"></i> Sub Categories</a> </li>
          <li><a href="<?php echo URL; ?>eproducts.php"><i class="glyphicon glyphicon-th-list"></i> View Products </a></li>
          <li><a href="<?php echo URL; ?>eproducts.php?action=addNew"><i class="glyphicon glyphicon-th-list"></i> Add New Product </a></li>
        </ul>
      </li>
      <li><a href="<?php echo URL; ?>medical_prescriptions.php"> <i class="fa fa-money"></i> Prescription Orders </a> </li>
      <li><a href="<?php echo URL; ?>pmaincategory.php"> <i class="glyphicon glyphicon-th-list"></i> Product Categories</a> </li>
      <li class="panel"> <a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#forms2"> <i class="fa fa-cogs"></i> Products <span class="fa arrow"></span> </a>
        <ul class="collapse nav" id="forms2">
          <li><a href="<?php echo URL; ?>products.php"><i class="glyphicon glyphicon-th-list"></i> View Products </a></li>
          <li><a href="<?php echo URL; ?>products.php?action=addNew"><i class="glyphicon glyphicon-th-list"></i> Add New Product </a></li>
        </ul>
      </li>
     <li class="panel"> <a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#forms123"> <i class="fa fa-cogs"></i> Orders <span class="fa arrow"></span> </a>
        <ul class="collapse nav" id="forms123">
          <li><a href="<?php echo URL; ?>morders.php"><i class="glyphicon glyphicon-th-list"></i> View Medicine Orders </a></li>
          <li><a href="<?php echo URL; ?>porders.php"><i class="glyphicon glyphicon-th-list"></i> View Product Orders </a></li>
        </ul>
      </li>
     <li class="panel"> <a href="javascript:;" data-parent="#side" data-toggle="collapse" class="accordion-toggle" data-target="#forms22"> <i class="fa fa-cogs"></i> Profile Panel <span class="fa arrow"></span> </a>
        <ul class="collapse nav" id="forms22">
         <li> <a href="<?php echo URL; ?>userprofiles.php"> <i class="glyphicon glyphicon-user"></i> User Profiles </a> </li>
         <li> <a href="<?php echo URL; ?>profiles.php"> <i class="glyphicon glyphicon-user"></i> Delivery Boys </a> </li>
        </ul>
      </li>
      <?php */ ?>

    </ul>
  </div>
</nav>
