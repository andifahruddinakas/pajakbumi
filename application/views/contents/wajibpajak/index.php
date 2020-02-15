
<div class="row">
    <div class="col-lg-12">
        <!-- USER DATA-->
        <div class="user-data m-b-30">
            <h3 class="title-3 m-b-30">
                Data SPPT</h3>
                
                <div class="table-data__tool ml-5">
                    <div class="table-data__tool-left">
                    
                        <a href="<?=base_url()?>datasppt/addForm" class="au-btn au-btn-icon au-btn--green au-btn--small text-white">
                            <i class="zmdi zmdi-plus"></i>Tambah Data</a>
                    </div>
                </div>
            <?php 
            if($this->uri->segment(2) == 'added'){
            ?>

            <div class="alert alert-primary" role="alert">
                Data berhasil di tambah
            </div>
            <?php

            }
            ?>
            <?php 
            if($this->uri->segment(2) == 'edited'){
            ?>

            <div class="alert alert-primary" role="alert">
                Data berhasil di edit
            </div>
            <?php

            }
            ?>
            <?php 
            if($this->uri->segment(2) == 'deleted'){
            ?>

            <div class="alert alert-primary" role="alert">
                Data berhasil di hapus
            </div>
            <?php

            }
            ?>
            <div class="table-responsive ">
                <table class="table table-borderless table-data3" id="myTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th>Alamat</th>
                            <th>Bank/Rekening</th>
                            <th>Foto</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                    if($datas->num_rows() >0){
                        $no = 0;
                        foreach($datas->result() as $d){
                            $no++;
                    ?>
                        <tr>
                            <td><?=$no?></td>
                            <td><?=$d->nama?></td>
                            <td><?=$d->alamat?></td>
                            <td><?=$d->bank . '-' . $d->rek?></td>
                            <td>
                                <div class="image"><img src="<?=site_url()?>/uploads/nwp/<?=$d->foto?>" width="50" alt="foto"></div></td>
                        </tr>
                    <?php
                        }
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END USER DATA-->
    </div>
</div>

<div class="row mb-4">
    <div class="col">
    <?=$pagination?>
    </div>
</div>