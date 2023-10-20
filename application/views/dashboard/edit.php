<div class="page page-center">
    <div class="container container-tight py-4">
        <form class="card card-md" action="" method="post">
            <div class="card-body">
                <h2 class="card-title text-center mb-4">Edit Data <?= $iduser['username']; ?></h2>
                <div class="mb-3">
                    <input type="hidden" name="id" value="<?= $iduser['id']; ?>">
                    <label class="form-label">Name</label>
                    <input type="text" id="name" name="name" class="form-control" value="<?= $iduser['name']; ?>">
                    <?= form_error('name', '<small class="text-danger pl-2">', '</small>'); ?>
                </div>
                <div class="mb-3">
                    <label class="form-label">Userame</label>
                    <input type="text" id="username" name="username" class="form-control" value="<?= $iduser['username']; ?>">
                    <?= form_error('username', '<small class="text-danger pl-2">', '</small>'); ?>
                </div>
                <div class="mb-3">
                    <label class="form-label">password</label>
                    <input type="text" id="password" name="password" class="form-control" value="<?= $iduser['password']; ?>" readonly>
                    <?= form_error('password', '<small class="text-danger pl-2">', '</small>'); ?>
                </div>
                <div class=" mb-3">
                    <label class="form-label">Level User</label>
                    <select class="form-select" aria-label="Default select example" id="role_id" name="role_id">
                        <?php foreach ($role as $r) : ?>
                            <?php if ($r['id'] == $iduser['role_id']) : ?>
                                <option value="<?= $r['id']; ?>" selected><?= $r['role_name']; ?></option>
                            <?php else : ?>
                                <option value="<?= $r['id']; ?>"><?= $r['role_name']; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="mb-3">
                    <div class="form-label">Access Item</div>
                    <div>
                        <label class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="sales" name="sales" value="1" <?php if ($iduser['sales'] === '1000000000000') echo 'checked' ?>>
                            Sales
                        </label>
                        <label class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="purchase" name="purchase" value="1" <?php if ($iduser['purchase'] === '1000000000000') echo 'checked' ?>>
                            Purchase
                        </label>
                        <label class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inventory" name="inventory" value="1" <?php if ($iduser['inventory'] === '1000000000000') echo 'checked' ?>>
                            Inventory
                        </label>
                    </div>
                </div>
                <div class="form-footer">
                    <button type="submit" name="edit" class="btn btn-primary w-100">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>