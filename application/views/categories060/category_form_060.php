<?php
$this->load->view('head');
?>

<div class="container-fluid p-5 w-50">
    <div class="card">
        <div class="card-body">
            <h3 class="text-center">CATEGORIES FORM</h3>
            <?php
            if(isset($cat)) {
                $name=$cat->cate_name_060;
                $description=$cat->description_060;
            }else{
            $name='';
            $description='';
            }
            ?>
            <form action="" method="post">
                <table>
                        <div class="form-floating mb-2 mt-3">
                            <input type="text" class="form-control" placeholder="Enter category" name="cate_name_060" value="<?=$name?>" required>
                            <label for="name">Categories Cat</label>
                        </div>
                        <div class="form-floating mb-4 mt-3">
                            <textarea class="form-control" style="height: 100px;" id="description" name="description_060" placeholder="description goes here" ><?=$description?></textarea>
                            <label for="description">Description</label>
                        </div>
                    <div class="row">
                        <div class="d-grid col">
                            <input type="submit" name="submit" class="btn btn-success" value="SAVE">
                        </div>
                        <div class="d-grid col">
                            <a class="btn btn-warning" href="<?=site_url('categories060')?>">CANCEL</a>
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
