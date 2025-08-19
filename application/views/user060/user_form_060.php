<?php
$this->load->view('head');
?>

<div class="container-fluid p-5 w-75">
    <div class="card">
        <div class="card-body">
            <h3 class="text-center">USERS FORM</h3>
            <?php
            if(isset($user)) {
                $username=$user->username_060;
                $password=$user->password_060;
                $usertype=$user->usertype_060;
                $fullname=$user->fullname_060;
            }else{
            $username='';
            $password='';
            $usertype='';
            $fullname='';
            }
            ?>
            <form action="" method="post">
                <table>
                        <div class="form-floating mb-2 mt-3">
                            <input type="text" class="form-control" placeholder="Enter username" name="username_060" value="<?=$username?>" required>
                            <label for="username">Username</label>
                        </div>
                        <div class="form-floating mb-2 mt-3">
                            <select class="form-select" id="sel1" name="usertype_060" required>
                                <option value="">Choose UserType</option>
                                <option value="Manager"<?= $usertype=='Manager'?'selected':''?>>Manager</option>
                                <option value="Cashier"<?= $usertype=='Cashier'?'selected':''?>>Cashier</option>
                            </select>
                            <label for="sel1" class="form-label">Select list (select one):</label>
                        </div>
                        <div class="form-floating mb-2 mt-3">
                            <input type="text" class="form-control" placeholder="Enter Fullname" name="fullname_060" value="<?=$fullname?>" required>
                            <label for="Fullname">FullName</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="d-grid col">
                            <input type="submit" name="submit" class="btn btn-success" value="SAVE">
                        </div>
                        <div class="d-grid col">
                            <a class="btn btn-warning" href="<?=site_url('users060')?>">CANCEL</a>
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
