<?php
$this->load->view('head');
?>
<div class="container-fluid p-5 w-75">
    <h3 class="text-center">CATEGORY LIST</h3>
    <i><?=$this->session->flashdata('msg')?></i>
    <a class="btn btn-primary" href="<?=site_url('Categories060/add') ?>">+ Category</a>
    <hr>
    <table class="table table-striped">
        <tr class="text-center">
            <th>No</th>
            <th>Category</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        <?php 
        $i=1;
        foreach($categories as $cat) { 
        ?>
        <tr>
            <td><?=$i++?></td>
            <td><?=$cat->cate_name_060?></td>
            <td><?=$cat->description_060?></td>
            <td class="">
                <div class="btn-group">
                    <a class="btn btn-outline-warning" href="<?=site_url('Categories060/edit/'.$cat->cate_id_060)?>">Edit</a>
                    <a class="btn btn-danger" href="<?=site_url('Categories060/delete/'.$cat->cate_id_060)?>" onclick="return confirm('Are you sure?')" >Delete</a>
                </div>
            </td>
        </tr>
        <?php } ?>
    </table>

    
</div>
<?php
$this->load->view('foot');
?>
