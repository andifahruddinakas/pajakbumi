
<div class="row">
    <div class="col-lg-12">
        <!-- USER DATA-->
        <div class="user-data m-b-30">
            <h3 class="title-3 m-b-30">
                Petugas</h3>
                
            <div class="table-responsive ">
                <table class="table table-borderless table-data3" id="myTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th>No.Telp</th>
                            <th>Level</th>
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
                            <td><?=$d->uname?></td>
                            <td><?=$d->hp?></td>
                            <td><?=$d->level?></td>
                            <td>
                                <div class="image"><img src="<?=site_url()?>/uploads/myassets/<?=$d->foto?>" width="50" alt="foto"></div></td>
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