    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Selamat Datang, <?= $user->username; ?>!</h4>
            <p>Anda login sebagai <strong><?= $user->level; ?></strong> , Semoga harimu menyenangkan.</p>
            <hr>
        </div> -->
        <!-- /.container-fluid -->
        <?php if ($user->level == 'Admin' || $user->level == 'EDP') { ?>
            <div class="row">
                <div class="col-xl-4 col-md-6 mb-4"><a href="<?= base_url('inventaris/transaksi_barang') ?>">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Transaksi Barang</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $transaksi_barang; ?></div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-user fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-md-6 mb-4"><a href="<?= base_url('inventaris/transaksi_berulang') ?>">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Transaksi Berulang</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $transaksi_berulang; ?></div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-user fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-md-6 mb-4"><a href="<?= base_url('inventaris/vendor') ?>">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Vendor</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $vendor; ?></div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-user fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-md-6 mb-4"><a href="<?= base_url('inventaris/kode_radio') ?>">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Radio</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $kode_radio; ?></div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-user fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-md-6 mb-4"><a href="<?= base_url('inventaris/jenis_barang') ?>">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jenis Barang</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jenis_barang; ?></div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-user fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-md-6 mb-4"><a href="<?= base_url('inventaris/status') ?>">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Status Barang</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $status; ?></div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-user fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        <?php } else { ?>
            <div class="row">
                <div class="col-xl-4 col-md-6 mb-4"><a href="<?= base_url('inventaris/transaksi_barang') ?>">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Transaksi Barang</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $transaksi_barang_id; ?></div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-user fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-md-6 mb-4"><a href="<?= base_url('inventaris/transaksi_berulang') ?>">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Transaksi Berulang</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $transaksi_berulang_id; ?></div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-user fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        <?php } ?>

        <h3>Laporan</h3>
        <div class="row">
            <div class="col-xl-6 col-md-6 mb-4"><a href="<?= base_url('laporan/transaksi_barang') ?>">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Transaksi Barang</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                </div>
                                <div class="col-auto"><i class="fas fa-print fa-2x text-gray-600"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-6 col-md-6 mb-4"><a href="<?= base_url('laporan/transaksi_berulang') ?>">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Transaksi Berulang</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                </div>
                                <div class="col-auto"><i class="fas fa-print fa-2x text-gray-600"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>


    </div>