<?php 
    $transport_students = $this->db->get_where('student' , array('transport_id' => $param2))->result_array();
?>
<div class="row">
    <div class="col-md-12">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>#</td>
                    <td><?php echo get_phrase('Student');?></td>
                    <td><?php echo get_phrase('Phone');?></td>
                </tr>
            </thead>
            <tbody>
            <?php 
                $count = 1;
                foreach($transport_students as $row):
            ?>
                <tr>
                    <td><?php echo $count++;?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['phone'];?></td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>