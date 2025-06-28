<?php include('components/header.php'); ?>
<?php include('components/sidebar.php'); ?>

<div class="container" style="padding: 20px;">
    <h2>Daftar Member</h2>
    <a href="<?= base_url('/members/create') ?>" class="btn btn-primary mb-3">Tambah Member</a>
    <table class="table table-dark table-bordered table-striped datatable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Role</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($members as $m): ?>
            <tr>
                <td><?= $m['id'] ?></td>
                <td><?= $m['username'] ?></td>
                <td><?= $m['email'] ?></td>
                <td><?= $m['role'] ?></td>
                <td>
                    <a href="<?= base_url('/members/edit/' . $m['id']) ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="<?= base_url('/members/delete/' . $m['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Delete</a>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<?php include('components/footer.php'); ?>
