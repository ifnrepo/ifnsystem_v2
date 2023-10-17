<div class="row">
    <div class="col-lg-4">
        <div class="container container-tight py-4">
            <form class="card card-md" action="<?= base_url('dashboard/regis'); ?>" method="post">
                <?= $registrasi = $this->session->flashdata('registrasi'); ?>
                <div class="card-body">
                    <h2 class="card-title text-center mb-4">Create account</h2>
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Full name">
                        <?= form_error('name', '<small class="text-danger pl-2">', '</small>'); ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Userame</label>
                        <input type="text" id="username" name="username" class="form-control" placeholder="Full name">
                        <?= form_error('username', '<small class="text-danger pl-2">', '</small>'); ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" id="password1" name="password1" placeholder="Password">
                        <?= form_error('password1', '<small class="text-danger pl-2">', '</small>'); ?>
                    </div>
                    <div class=" mb-3">
                        <label class="form-label">Repeat Password</label>
                        <input type="password" class="form-control " id="password2" name="password2" placeholder="Repeat Password">
                    </div>
                    <div class=" mb-3">
                        <select class="form-select" aria-label="Default select example" id="role_id" name="role_id">
                            <option selected>Level User</option>
                            <option value="1">Administrator</option>
                            <option value="2">User Approve</option>
                            <option value="3">User Marker</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <div class="form-label">Acces Item</div>
                        <div>
                            <label class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="sales" name="sales">
                                <option value="1">Sales</option>
                            </label>
                            <label class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="purchase" name="purchase">
                                <option value="1">Purchase</option>
                            </label>
                            <label class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="iventory" name="iventory">
                                <option value="1">Iventory</option>
                            </label>
                        </div>
                    </div>
                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary w-100">Create new account</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="col-lg-7">
        <br>
        <div class="card">
            <?= $hapus_user = $this->session->flashdata('hapus_user'); ?>
            <div class="card-header">
                <h3 class="card-title">User</h3>
            </div>
            <div class="card-body border-bottom py-3">
                <div class="d-flex">
                    <div class="ms-auto text-secondary">
                        Search:
                        <div class="ms-2 d-inline-block">
                            <input type="text" class="form-control form-control-sm" aria-label="Search invoice">
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table card-table table-vcenter text-nowrap datatable">
                    <thead>
                        <tr>
                            <th class="w-1"><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select all invoices"></th>
                            <th>No</th>
                            <th>Name</th>
                            <th>UserName</th>
                            <th>Password</th>
                            <th>Level User</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($alluser as $us) : ?>
                            <tr>
                                <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                                <td><?= $i; ?></td>
                                <td><?= $us['name']; ?></td>
                                <td><?= $us['username']; ?></td>
                                <td><?= $us['password']; ?></td>
                                <td><?= $us['role_name']; ?></td>
                                <td class="text-end">
                                    <span class="dropdown">
                                        <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <!-- <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#edit<?= $us['id']; ?>">Edit</a> -->
                                            <a href="<?= base_url(); ?>dashboard/edit/<?= $us['id']; ?>" class="dropdown-item">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-edit" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h3.5"></path>
                                                    <path d="M18.42 15.61a2.1 2.1 0 0 1 2.97 2.97l-3.39 3.42h-3v-3l3.42 -3.39z"></path>
                                                </svg> edit
                                            </a>

                                            <a href="<?= base_url(); ?>dashboard/hapus/<?= $us['id']; ?>" class="dropdown-item" onclick="return confirm('yakin ? user ini ingin di hapus ?');">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-off" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M8.18 8.189a4.01 4.01 0 0 0 2.616 2.627m3.507 -.545a4 4 0 1 0 -5.59 -5.552"></path>
                                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4c.412 0 .81 .062 1.183 .178m2.633 2.618c.12 .38 .184 .785 .184 1.204v2"></path>
                                                    <path d="M3 3l18 18"></path>
                                                </svg> Hapus
                                            </a>
                                        </div>
                                    </span>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="card-footer d-flex align-items-center">
                <p class="m-0 text-secondary">Showing <span>1</span> to <span>8</span> of <span>16</span> entries</p>
                <ul class="pagination m-0 ms-auto">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                            <!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M15 6l-6 6l6 6" />
                            </svg>
                            prev
                        </a>
                    </li>
                    <li class="page-item "><a class="page-link" href="<?= base_url('dashboard/show_users/1') ?>">1</a></li>
                    <li class="page-item "><a class="page-link" href="<?= base_url('dashboard/show_users/2') ?>">2</a></li>
                    <li class="page-item "><a class="page-link" href="<?= base_url('dashboard/show_users/3') ?>">3</a></li>
                    <li class="page-item "><a class="page-link" href="<?= base_url('dashboard/show_users/4') ?>">4</a></li>
                    <li class="page-item "><a class="page-link" href="<?= base_url('dashboard/show_users/5') ?>">5</a></li>

                    <li class="page-item">
                        <a class="page-link" href="#">
                            next <!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M9 6l6 6l-6 6" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>