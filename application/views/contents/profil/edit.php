
<div class="row">

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong><i class="fa fa-edit"></i> Edit Profil</strong>
        </div>
        <?php 
        if(isset($data)){
            $d['d'] = $data->row();
            $d['form']= 'edit';
        ?>
        <form action="<?=base_url()?>profil/editSave/<?=$d['d']->id?>" method="post" enctype="multipart/form-data" class="form-horizontal">
            <div class="card-body card-block">
                    <?=$this->load->view('contents/profil/form', $d,TRUE)?>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm">SUBMIT
                </button>
            </div>
        </form>
        <?php
        }
        ?>
    </div>
</div>
</div>