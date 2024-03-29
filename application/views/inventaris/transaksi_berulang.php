<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col">
            <h1 class="h3 mb-2 text-gray-800"><?= $judul; ?></h1>
        </div>
        <div class="col">
            <a href="<?= base_url('inventaris/transaksi_berulang_add'); ?>" class="btn btn-primary mb-3 float-right"><i class="fas fa-plus"></i> Tambah</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <?= $this->session->flashdata('pesan'); ?>
        </div>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="5%">#</th>
                            <th>Kode Transaksi</th>
                            <th>Kode Transaksi Barang</th>
                            <th>Tanggal Input</th>
                            <th>Staff On Duty</th>
                            <th>Status Detail</th>
                            <th width="16%">Aksi</th>
                        </tr>
                    </thead>
                    <?php
                    $no = 1;
                    foreach ($transaksi_berulang as $row) { ?>
                        <tbody>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $row->kode_transaksi; ?></td>
                                <td><?= $row->kode_transaksibarang; ?></td>
                                <td><?= $row->tanggal_input; ?></td>
                                <td><?= $row->nama; ?></td>
                                <td><?= $row->status_detail; ?></td>
                                <td>
                                    <a href="<?= base_url('inventaris/transaksi_berulang_detail/' . $row->id_berulang); ?>" class="btn btn-sm btn-info" title="detail transaksi"><i class="fas fa-eye"></i></a>
                                    <a href="<?= base_url('inventaris/transaksi_berulang_edit/' . $row->id_berulang); ?>" class="btn btn-sm btn-success" title="edit"><i class="fas fa-pen"></i></a>
                                    <a href="<?= base_url('inventaris/transaksi_berulang_delete/' . $row->id_berulang); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus ?')" title="detail transaksi"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>