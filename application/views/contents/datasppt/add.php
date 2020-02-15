
<div class="row">

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong><i class="fa fa-plus"></i> Tambah Data SPPT</strong>
        </div>
        <form action="<?=base_url()?>datasppt/addSave" method="post" class="form-horizontal">
            <div class="card-body card-block">
                    <?=$this->load->view('contents/datasppt/form', '',TRUE)?>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm">SUBMIT
                </button>
            </div>
        </form>
    </div>
</div>
</div>