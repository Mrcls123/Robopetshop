<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">LAPORAN PENJUALAN BARANG</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">
                Laporan Penjualan Barang
            </li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                <?= $title ?>
            </div>
            <div class="card-body">
                <!-- Filter -->
                <form action="/jual/laporan/filter" method="post">
                    <div class="container">
                        <div class="row">
                            <div class="col-4">
                                <input type="date" class="form-control" name="tgl_awal"
                                    value="<?= $tanggal['tgl_awal']?>" title="Tanggal Awal">
                            </div>
                            <div class="col-4">
                                <input type="date" class="form-control" name="tgl_akhir"
                                    value="<?= $tanggal['tgl_akhir']?>" title="Tanggal Akhir">
                            </div>
                            <div class="col-4">
                                <button class="btn btn-primary">Filter</button>
                            </div>
                        </div>
                    </div>
                </form>
                <br>
                <!-- Isi Report -->
                <a target="_blank" class="btn btn-primary mb-3" type="button" href="/jual/exportpdf">Export
                    PDF</a>
                <a class="btn btn-dark mb-3" type="button" href="/jual/exportexcel">Export Excel</a>
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nota</th>
                            <th>Tanggal Transaksi</th>
                            <th>User</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach($result as $value) : ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $value['sale_id'] ?></td>
                            <td><?= date("d/m/Y H:i:s", strtotime($value['tgl_transaksi'])) ?></td>
                            <td><?= $value['firstname'] ?> <?= $value['lastname'] ?></td>
                            <td><?= number_to_currency($value['total'], 'IDR', 'id_ID', 2)?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <div class="col">
                        <label class="col-form-label">TOTAL PEMASUKAN PENJUALAN PRODUK</label>
                        <?= number_to_currency($totalIncome, 'IDR', 'id_ID', 2) ?>
                </div>
                <!--  -->
            </div>
        </div>
    </div>
</main>
<?= $this->endSection()?>