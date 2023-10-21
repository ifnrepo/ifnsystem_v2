<div class="page page-center">
    <div class="container container-tight py-4">
        <div class="card card-md">
            <div class="card-body">
                <h2 class="h2 text-center mb-4">Login page</h2>
                <?= $message = $this->session->flashdata('message'); ?>
                <form action="<?= base_url('auth'); ?>" method="post">
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?= set_value('username'); ?>" autocomplete="false">
                        <?= form_error('username', '<small class="text-danger pl-2">', '</small>'); ?>
                    </div>
                    <div class="mb-2">
                        <label class="form-label"> Password </label>
                        <div class="input-group input-group-flat">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Your password">
                            <?= form_error('password', '<small class="text-danger pl-2">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary w-100">Sign in</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="text-center text-secondary mt-3">

        </div>
    </div>
</div>