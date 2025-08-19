<?php
$this->load->view('head');
?>

<div class="container-fluid p-5 w-75">
    <div class="card">
        <div class="card-body">
            <h3 class="text-center">CHANGE PASSWORD</h3>
            
            <form method="post" action="">
                <div class="form-floating mb-2 mt-3">
                    <input type="password" class="form-control" placeholder="Enter password" name="oldpassword" id="exampleInputPassword1" required>
                    <label for="password">Old Password</label>
                </div>
                <div class="form-floating mb-2 mt-3">
                    <input type="password" class="form-control" placeholder="Enter password" name="newpassword" id="exampleInputPassword2" required>
                    <label for="password">New Password</label>
                </div>

                <div class="d-flex justify-content-between">
                    <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" onclick="show()" id="exampleCheck1">
                    <label class="text-secondary" for="exampleCheck1" >Lihat Password</label>
                    </div>
                </div>

                <i><?=$this->session->flashdata('msg')?></i>
                <div class="text-danger"><?= validation_errors()?></div>
                
                <div class="row">

                    <div class="d-grid col">
                        <input type="submit" class="btn btn-success btn-login" name="change" value="CHANGE PASSWORD">
                    </div>
                    <div class="d-grid col">
                        <a class="btn btn-warning" href="<?=site_url('cats060')?>">CANCEL</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    function show() {
        var x = document.getElementById("exampleInputPassword1");
        var y = document.getElementById("exampleInputPassword2");
        if (x.type === "password" && y.type === "password") {
            x.type = "text";
            y.type = "text";
        } else {
            x.type = "password";
            y.type = "password";
        }  
    }
</script>

<?php
$this->load->view('foot');
?>