<?php
$this->load->view('head');
?>
<div class="container-fluid p-5 w-75">
    <h3 class="text-center">SALES LIST</h3>
    <hr>
    <table class="table table-striped">
        <tr class="">
            <th>No</th>
            <th>Sale ID</th>
            <th>Sale Date</th>
            <th>Cat Name</th>
            <th>Costumer Name</th>
            <th>Costumer Address</th>
            <th>Costumer Phone</th>
        </tr>
        <?php 
        $i=1;
        foreach($sales as $sale) { 
        ?>
        <tr class="">
            <td><?=$i++?></td>
            <td><?=$sale->sale_id_060?></td>
            <td><?=tgl($sale->sale_date_060)?></td>
            <td><?=$sale->name_060?></td>
            <td><?=$sale->costumer_name_060?></td>
            <td><?=$sale->costumer_address_060?></td>
            <td><?=$sale->costumer_phone_060?></td>
        </tr>
        <?php } ?>
    </table>
</div>

<?php
$this->load->view('foot');
?>
