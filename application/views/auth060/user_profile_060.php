<?php
$this->load->view('head');
?>

<div class="container-fluid p-5 w-75">
    <div class="card">
        <div class="card-body">
            <h3 class="text-center">USER PROFILE</h3>
            <form action="" method="post" enctype="multipart/form-data">
                <table>
                        <div class="form-floating mb-2 mt-3">
                            <input type="text" class="form-control" placeholder="Enter username" name="username_060" value="<?=$this->session->userdata('username')?>" required disabled>
                            <label for="username">Username</label>
                        </div>
                        <div class="form-floating mb-2 mt-3">
                            <select class="form-select" id="sel1" name="usertype_060" required disabled>
                                <option value="">Choose UserType</option>
                                <option value="Manager"<?= $this->session->userdata('usertype')=='Manager'?'selected':''?>>Manager</option>
                                <option value="Cashier"<?= $this->session->userdata('usertype')=='Cashier'?'selected':''?>>Cashier</option>
                            </select>
                            <label for="sel1" class="form-label">Select list (select one):</label>
                        </div>
                        <div class="form-floating mb-2 mt-3">
                            <input type="text" class="form-control" placeholder="Enter Fullname" name="fullname_060" value="<?=$this->session->userdata('fullname')?>" required disabled>
                            <label for="Fullname">FullName</label>
                        </div>
                        <div class="form-floating mb-2 mt-3 text-center">
                            <label for="" class="form-control"></label>
                            <img src="<?=base_url('uploads/users/'.$this->session->userdata('photo'))?>" width="128" height="128" class="rounded-circle position-relative" alt="img-user">

                            <!-- <input type="text" class="form-control" placeholder="Enter Fullname" name="fullname_060" value="" disabled> -->
                            <label for="Photo">Current Photo</label>
                        </div>
                        <div class="form-floating mb-2 mt-3">
                            <input type="file" class="form-control" placeholder="Enter Photo" name="photo" required>
                            <label for="Photo">New Photo</label>
                        </div>
                    </div>
                    <i><?=$this->session->flashdata('msg')?></i>
                    <div class="text-danger"><?= $error?></div>
                    <div class="row">
                        <div class="d-grid col">
                            <input type="submit" name="upload" class="btn btn-success" value="UPLOAD">
                        </div>
                        <div class="d-grid col">
                            <a class="btn btn-warning" href="<?=site_url('')?>">CANCEL</a>
                        </div>
                    </div>
                        
                </table>
            </form>
        </div>
    </div>
</div>

<?php
$this->load->view('foot');
?>
