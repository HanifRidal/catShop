<?php
$this->load->view('head');
?>

<div class="container-fluid p-5 w-75">
    <div class="card">
        <div class="card-body">
            <h3 class="text-center">CATS PHOTO</h3>
            <?php
            if(isset($cat)) {
                $name=$cat->name_060;
                $type=$cat->type_060;
                $gender=$cat->gender_060;
                $age=$cat->age_060;
                $price=$cat->price_060;
                $photo=$cat->photo_060;
            }else{
            $name='';
            $type='';
            $gender='';
            $age='';
            $price='';
            $photo='';
            }
            ?>
            <form action="" method="post" enctype="multipart/form-data">
                <table>
                    <div class="form-floating mb-2 mt-3 text-center">
                            <label for="" class="form-control"></label>
                            <img src="<?=base_url('uploads/cats/'.$photo)?>" width="128" height="128" class="rounded-circle position-relative" alt="img-cat">

                            <!-- <input type="text" class="form-control" placeholder="Enter Fullname" name="fullname_060" value="" disabled> -->
                            <label for="Photo">Current Photo</label>
                        </div>
                        <div class="form-floating mb-2 mt-3">
                            <input type="file" class="form-control" placeholder="Enter Photo" name="cat_photo" required>
                            <label for="Photo">New Photo</label>
                        </div>
                    </div>
                    <i><?=$this->session->flashdata('msg')?></i>
                    <div class="text-danger"><?=validation_errors()?></div>
                    <div class="row">
                        <div class="d-grid col">
                            <input type="submit" name="upload" class="btn btn-success" value="UPLOAD">
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