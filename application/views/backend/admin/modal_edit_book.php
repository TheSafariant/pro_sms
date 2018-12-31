<?php 
$edit_data		=	$this->db->get_where('book' , array('book_id' => $param2) )->result_array();
?>

<div class="tab-pane box active" id="edit" style="padding: 5px">
    <div class="box-content">
        <?php foreach($edit_data as $row):?>
        <?php echo form_open(base_url() . 'index.php?admin/library/do_update/'.$row['book_id'] , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
        <br>
                <div class="form-group">
                    <label class="col-sm-4 control-label"><?php echo get_phrase('Name');?></label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="name" value="<?php echo $row['name'];?>"
                            required />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label"><?php echo get_phrase('Author');?></label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="author" value="<?php echo $row['author'];?>"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label"><?php echo get_phrase('Description');?></label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="description" value="<?php echo $row['description'];?>"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label"><?php echo get_phrase('Price');?></label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="price" value="<?php echo $row['price'];?>"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label"><?php echo get_phrase('Class');?></label>
                    <div class="col-sm-5">
                        <select name="class_id" class="form-control selectboxit">
                            <?php 
                            $classes = $this->db->get('class')->result_array();
                            foreach($classes as $row2):
                            ?>
                                <option value="<?php echo $row2['class_id'];?>"
                                    <?php if($row['class_id']==$row2['class_id'])echo 'selected';?>><?php echo $row2['name'];?></option>
                            <?php
                            endforeach;
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label"><?php echo get_phrase('Status');?></label>
                    <div class="col-sm-5">
                        <select name="status" class="form-control selectboxit">
                            <option value="1" <?php if($row['status']=='1')echo 'selected';?>><?php echo get_phrase('Availab');?></option>
                            <option value="0" <?php if($row['status']=='0')echo 'selected';?>><?php echo get_phrase('Unavailab');?></option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-3 col-sm-5">
                      <button type="submit" class="btn btn-info"><?php echo get_phrase('Edit');?></button>
                  </div>
                </div>
        </form>
        <?php endforeach;?>
    </div>
</div>