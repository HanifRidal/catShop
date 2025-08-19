<?php
$this->load->view('head');
?>

<div class="container-fluid p-5 w-75">
    <div class="card">
        <div class="card-body">
            <h3 class="text-center">CATS FORM</h3>
            <?php
            if(isset($cat)) {
                $name=$cat->name_060;
                $type=$cat->type_060;
                $gender=$cat->gender_060;
                $age=$cat->age_060;
                $price=$cat->price_060;
            }else{
            $name='';
            $type='';
            $gender='';
            $age='';
            $price='';
            }
            ?>
            <form action="" method="post">
                <table>
                        <div class="form-floating mb-2 mt-3">
                            <input type="text" class="form-control" placeholder="Enter name" name="name_060" value="<?=$name?>" required>
                            <label for="name">Name</label>
                        </div>
                        <div class="form-floating mb-2 mt-3">
                            <select class="form-select" id="sel1" name="type_060" required>
                                <option value="">Choose Type</option>
                                <?php foreach($category as $cate) { ?>
                                <option value="<?= $cate->cate_name_060?>" <?= $type=='cate_name_060'?'selected':'' ?>><?= $cate->cate_name_060?></option>

                                <?php }?>
                            </select>
                            <label for="sel1" class="form-label">Select list (select one):</label>
                        </div>
                        <div class="form-control mb-2 mt-3">
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="gender_060" value="Male" <?=$gender=='Male'?'checked':''?> required>Male
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="gender_060" value="Female" <?=$gender=='Female'?'checked':''?> required>Female
                            </div>
                        </div>
                        <div class="form-floating mb-2 mt-3">
                            <input type="number" class="form-control" name="age_060" placeholder="Enter Age" value="<?=$age?>" required>
                            <label for="Age">Age</label>
                        </div>
                        <div class="form-floating mb-3 mt-3">
                            <input type="number" class="form-control" name="price_060" placeholder="Enter Price" value="<?=$price?>" required>
                            <label for="Price ($)">Price ($)</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="d-grid col">
                            <input type="submit" name="submit" class="btn btn-success" value="SAVE">
                        </div>
                        <div class="d-grid col">
                            <a class="btn btn-warning" href="<?=site_url('cats060')?>">CANCEL</a>
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
