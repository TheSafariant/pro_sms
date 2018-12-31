<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title"><?php echo get_phrase('News'); ?></h4> 
    </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>index.php?parents/parents_dashboard"><?php echo get_phrase('Dashboard');?></a></li>
            <li class="active"><?php echo get_phrase('News'); ?></li>
        </ol>
    </div>
</div>
<div class="row">
		<?php include $room_page . '.php';?>
</div>