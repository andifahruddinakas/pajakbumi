
<div class="row">
    <div class="col-md-12">
        <!-- DATA TABLE -->
        <h3 class="title-5 m-b-35">Rekapitulasi</h3>
        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2" id="myTable">
                <thead>
                    <tr>
                        <th>Jumlah Nop</th>
                        <th>Total Pajak (Rp.)</th>
                        <th>Lunas</th>
                        <th>Pajak (Rp.)</th>
                        <th>Terhutang</th>
                        <th>Pajak (Rp.)</th>
                        <th>Presentase</th>
                    </tr>
                </thead>
                <tbody>
                
                    <?php 
                    
                    if(isset($data)){
                        $d = $data->row();
                    ?>

                    <tr class="tr-shadow">
                        <td>
                            <?=$d->jumlah_nop?>
                        </td>
                        <td class="desc"><?=$rupiah($d->total_pajak)?></td>
                        <td><?=$d->lunas?></td>
                        <td class="desc"><?=$rupiah($d->pajak_lunas)?>
                        </td>
                        <td><?=$d->terhutang?></td>
                        <td class="desc"><?=$rupiah($d->pajak_terhutang)?></td>
                        <td><?=$d->presentase?> %</td>
                    </tr>
                    <tr class="spacer"></tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE -->
    </div>
</div>