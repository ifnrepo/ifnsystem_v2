<div class="page page-center">
    <div class="container container-tight py-4">
        <form action="" method="post">
            <?= $this->session->flashdata('password'); ?>
            <div class="form-group">
                <label for="current_password">Password Lama</label>
                <input type="hidden" name="id" value="<?= $iduser['id']; ?>">
                <input type="password" class="form-control" id="current_password" name="current_password">
                <?= form_error('current_password', '<small class="text-danger pl-2">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label for="new_password1">Password Baru</label>
                <input type="password" class="form-control" id="new_password1" name="new_password1">
                <?= form_error('new_password1', '<small class="text-danger pl-2">', '</small>'); ?>
            </div>
            <div class="form-group">
                <label for="new_password2">Verifikasi Password</label>
                <input type="password" class="form-control" id="new_password2" name="new_password2">
                <?= form_error('new_password2', '<small class="text-danger pl-2">', '</small>'); ?>
            </div>
            <br>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Change password</button>
            </div>
        </form>
    </div>
</div>