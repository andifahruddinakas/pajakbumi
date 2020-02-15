
<?php 

if(isset($data)){
    $d = $data->row();
?>
<div class="row">
    <div class="col-md-6 col-lg-6">
        <div class="statistic__item">
            <span class="desc">Jumlah NOP</span>
            <h2 class="number"><?=$d->jumlah_nop?></h2>
            <span class="desc">Pajak (Rp.)</span>
            <h2 class="number"><?=$rupiah($d->total_pajak)?></h2>
            <div class="icon">
                <i class="zmdi zmdi-account-o"></i>
            </div>
            <hr>
            <a href="<?=base_url()?>datasppt">
                <i class="fa fa-link"></i> Lihat Data
            </a>
        </div>
    </div>
    <div class="col-md-6 col-lg-6">
        <div class="statistic__item">
            <span class="desc">Lunas</span>
            <h2 class="number"><?=$d->lunas?></h2>
            <span class="desc">Pajak (Rp.)</span>
            <h2 class="number"><?=$rupiah($d->pajak_lunas)?></h2>
            <div class="icon">
                <i class="zmdi zmdi-account-o"></i>
            </div>
            <hr>
            <a href="<?=base_url()?>pbblunas">
                <i class="fa fa-link"></i> Lihat Data
            </a>
        </div>
    </div>
    
    <div class="col-md-6 col-lg-6">
        <div class="statistic__item">
            <span class="desc">Terhutang</span>
            <h2 class="number"><?=$d->terhutang?></h2>
            <span class="desc">Pajak (Rp.)</span>
            <h2 class="number"><?=$rupiah($d->pajak_terhutang)?></h2>
            <div class="icon">
                <i class="zmdi zmdi-account-o"></i>
            </div>
            <hr>
            <a href="<?=base_url()?>pbbterhutang">
                <i class="fa fa-link"></i> Lihat Data
            </a>
        </div>
    </div>
    
    <div class="col-md-6 col-lg-6">
        <div class="statistic__item">
            <span class="desc">Presentase Lunas</span>
            <h2 class="number"><?=$d->presentase?> %</h2>
            <span class="desc">-</span>
            <h2 class="number">-</h2>
            <div class="icon">
                <i class="zmdi zmdi-account-o"></i>
            </div>
            <hr>
            <a href="<?=base_url()?>datasppt">
                <i class="fa fa-link"></i> Lihat Data
            </a>
        </div>
    </div>
</div>
<?php

}
?>
