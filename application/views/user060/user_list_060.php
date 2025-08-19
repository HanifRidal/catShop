<?php
$this->load->view('head');
?>
<div class="container-fluid p-5 w-75">
    <h3 class="text-center">USERS LIST</h3>
    <i><?=$this->session->flashdata('msg')?></i>
    <a class="btn btn-primary" href="<?=site_url('Users060/add') ?>">+ User</a>
    <hr>
    <table class="table table-striped">
        <tr class="text-center">
            <th>No</th>
            <th>Username</th>
            <th>Usertype</th>
            <th>FullName</th>
            <th>Action</th>
        </tr>
        <?php 
        $i=1;
        foreach($users as $user) { 
        ?>
        <tr class="text-center">
            <td><?=$i++?></td>
            <td><?=$user->username_060?></td>
            <td><?=$user->usertype_060?></td>
            <td><?=$user->fullname_060?></td>
            <td>
                <div class="btn-group">
                    <a class="btn btn-outline-warning" href="<?=site_url('Users060/edit/'.$user->user_id_060)?>">Edit</a>
                    <a class="btn btn-danger" href="<?=site_url('Users060/delete/'.$user->user_id_060)?>" onclick="return confirm('Are you sure?')" >Delete</a>
                    <a class="btn btn-outline-info" href="<?=site_url('Users060/reset/'.$user->user_id_060)?>" onclick="return confirm('Are you sure reset password?')" >Reset Password</a>
                </div>
            </td>
        </tr>
        <?php } ?>
    </table>

    
</div>

<?php
$this->load->view('foot');
?>
