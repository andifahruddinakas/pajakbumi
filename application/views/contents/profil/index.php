
<div class="row">

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Profil</strong>
            </div>
            <div class="card-body card-block">
                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                <?php 
                if(isset($data)){
                    $d['d'] = $data->row();
                    $d['form']= 'index';
                ?>
                    <?=$this->load->view('contents/profil/form', $d,TRUE)?>
                <?php
                }
                ?>
                </form>
            </div>
            <div class="card-footer">
                <a href="<?=base_url()?>profil/editForm" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> EDIT</a>
            </div>
        </div>
    </div>
</div>