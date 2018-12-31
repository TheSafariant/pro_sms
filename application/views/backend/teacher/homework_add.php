<?php $running_year = $this->db->get_where('settings' , array('type' => 'running_year'))->row()->description; ?>
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title"><?php echo get_phrase('homework'); ?></h4> 
    </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>index.php?teacher/teacher_dashboard"><?php echo get_phrase('Dashboard'); ?></a></li>
            <li class="active"><?php echo get_phrase('Add'); ?></li>
        </ol>
    </div>
</div>

<?php $class_info = $this->db->get('class')->result_array(); ?>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title" ><font color="white"><?php echo get_phrase('Send-Homework'); ?></font></div>
            </div>
            <br><br>
            <div class="panel-body">
                <?php echo form_open(base_url() . 'index.php?teacher/homework/create/', array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data')); ?>

                <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Title'); ?></label>

                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="title" id="title" data-validate="required" 
                               data-message-required="<?php echo get_phrase('Required'); ?>" value="" autofocus>
                    </div>
                </div>

                <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Description'); ?></label>

                    <div class="col-sm-8">
                <textarea class="form-control textarea_editor" rows="10" name="description" id="post_content" ></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Last-day-delivery'); ?></label>

                    <div class="col-sm-8">
                            <input type="text" class="form-control mydatepicker" name="time_end"  value="" >
                    </div>
                </div>

                <div class="form-group">
                
                    <label for="field-1" class="col-sm-3 control-label"><?php echo get_phrase('Class'); ?></label>

                    <div class="col-sm-8">
                        <select name="class_id" class="form-control selectboxit" id="class_id" onchange="get_class_subject(this.value); get_class_sections(this.value);">
                            <option value=""><?php echo get_phrase('Select'); ?></option>
                            <?php foreach ($class_info as $row) { ?>
                                <option value="<?php echo $row['class_id']; ?>"><?php echo $row['name']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>


                <div class="form-group">
                        <label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('Section'); ?></label>
                            <div class="col-sm-8">
                                <select name="section_id" class="form-control" id="section_selector_holder">
                                    <option value=""><?php echo get_phrase('Select-Class'); ?></option>
                                </select>
                            </div>
                    </div>

                <div class="form-group">
                    <label for="field-2" class="col-sm-3 control-label"><?php echo get_phrase('Subject'); ?></label>
                    <div class="col-sm-8">
                        <select name="subject_id" class="form-control" id="subject_selector_holder">
                            <option value=""><?php echo get_phrase('Select-Class'); ?></option>
                        </select>
                    </div>
                </div>

                 <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo get_phrase('File'); ?></label>

                    <div class="col-sm-8">

                        <input type="file" name="file_name" class="form-control file2 inline btn btn-primary" data-label="<i class='glyphicon glyphicon-file'></i> <?php echo get_phrase('Search'); ?>" />

                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-8">
                        <button type="submit" class="btn btn-info" id="submit-button">
                          <?php echo get_phrase('Send'); ?></button>
                        <span id="preloader-form"></span>
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>



<script type="text/javascript">
    function get_class_sections(class_id) 
    {
        $.ajax({
            url: '<?php echo base_url();?>index.php?admin/get_class_section/' + class_id ,
            success: function(response)
            {
                jQuery('#section_selector_holder').html(response);
            }
        });
    }
</script>

<script type="text/javascript">
    function get_class_subject(class_id) {
        $.ajax({
            url: '<?php echo base_url(); ?>index.php?teacher/get_class_subject/' + class_id,
            success: function (response)
            {
                jQuery('#subject_selector_holder').html(response);
            }
        });
    }
</script>
<script>
        $(document).ready(function () {
            $('.textarea_editor').wysihtml5();
        });
    </script>  