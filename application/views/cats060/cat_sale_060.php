<?php
$this->load->view('head');
?>

<div class="container-fluid p-5 w-75">
    <div class="card">
        <div class="card-body">
            <h3 class="text-center">CAT SALE FORM</h3>
            <form action="" method="post">
                <table>
                        <label>Cat Id  : <?=$cat->id_060?></label><br>

                        <label>Cat Name: <?=$cat->name_060?></label><br>

                        <label>Cat Type : <?=$cat->type_060?></label><br>

                        <label>Cat Price : <?=$cat->price_060?></label><br>
                        <div class="form-floating mb-2 mt-3">
                            <input type="text" class="form-control" placeholder="" name="costumer_name_060" value="" required>
                            <label for="">Costumer Name</label>
                        </div>
                        <div class="form-floating mb-4 mt-3">
                            <textarea class="form-control" style="height: 100px;" id="Address" placeholder="" name="costumer_address_060"></textarea>
                            <label for="">Costumer Address</label>
                        </div>
                        <div class="form-floating mb-2 mt-3">
                            <input type="text" class="form-control" placeholder="" name="costumer_phone_060" value="" required>
                            <label for="">Costumer Phone</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="d-grid col">
                            <input type="submit" name="submit" class="btn btn-success" value="SALE">
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
