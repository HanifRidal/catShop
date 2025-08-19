<?php
$this->load->view('head');
?>
<div class="container-fluid p-5 w-75">
    <h3 class="text-center">CATS LIST</h3>
    <i><?=$this->session->flashdata('msg')?></i>
    <a class="btn btn-primary" href="<?=site_url('Cats060/add') ?>">+ Cat</a>
    <hr>
    <table class="table table-striped">
        <tr class="text-center">
            <th>No</th>
            <th>Name</th>
            <th>Type</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Price($)</th>
            <th>Photo</th>
            <th>Action</th>
        </tr>
        <?php foreach($cats as $cat) { ?>
        <tr class="text-center">
            <td><?=$i++?></td>
            <td><?=$cat->name_060?></td>
            <td><?=$cat->type_060?></td>
            <td><?=$cat->gender_060?></td>
            <td><?=$cat->age_060?></td>
            <td><?=$cat->price_060?></td>
            <td>
                <img src="<?=base_url('uploads/cats/'.$cat->photo_060)?>" alt="" width="32" height="32">
                <a class="btn btn-outline-dark" href="<?=site_url('Cats060/changephoto/'.$cat->id_060)?>">Change</a>
            </td>
            <td>
                <div class="btn-group">
                    <a class="btn btn-outline-warning" href="<?=site_url('Cats060/edit/'.$cat->id_060)?>">Edit</a>
                    <a class="btn btn-danger" href="<?=site_url('Cats060/delete/'.$cat->id_060)?>" onclick="return confirm('Are you sure?')" >Delete</a>
                    <?php if ($cat->sold_060==1) { ?>
                        <label for="" class="btn btn-outline-success">SOLD</label>
                    <?php
                    } else {
                    ?>
                    <a class="btn btn-outline-success" href="<?=site_url('Cats060/sale/'.$cat->id_060)?>">SALE</a>
                    <?php }?>
                </div>
            </td>
        </tr>
        <?php } ?>
    </table>
    <div aria-label="Page navigation text-center">
        <?=$links?>
    </div>
    
</div>

<?php
$this->load->view('foot');
?>
