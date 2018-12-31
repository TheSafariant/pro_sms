<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title"><?php echo get_phrase('Homework'); ?></h4> 
    </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>index.php?teacher/teacher_dashboard"><?php echo get_phrase('Dashboard');?></a></li>
            <li class="active"><?php echo get_phrase('Homework'); ?></li>
        </ol>
    </div>
</div>

<div class="row">
	<div class="col-md-2">
		<a style="text-align: left;" href="<?php echo base_url();?>index.php?teacher/homeworkroom/details/<?php echo $homework_code;?>" 
			class="<?php if ($room_page == 'homework_details') echo 'btn btn-info'; 
			else echo 'btn btn-warning';?> btn-block btn-icon icon-left">
			<?php echo get_phrase('Homework'); ?>
			<i class="fa fa-info"></i>
		</a>

        <a style="text-align: left;" href="<?php echo base_url();?>index.php?teacher/homeworkroom/edit/<?php echo $homework_code;?>" 
			class="<?php if ($room_page == 'homework_edit') echo 'btn btn-danger';
			else echo 'btn btn-info';?> btn-block btn-icon icon-left">
			<?php echo get_phrase('Edit'); ?>
			<i class="fa fa-edit"></i>
		</a>
	</div>
		<div class="main_data">	
			<?php include $room_page . '.php';?>
		</div>
</div>