<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<?= $this->include('components/header') ?>
<?= $this->include('components/sidebar') ?>

<div class="container mt-4">
    <h2>Data User</h2>
    <a href="/user/create" class="btn btn-primary mb-2">Tambah User</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th><th>Username</th><th>Email</th><th>Role</th><th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $user['id']; ?></td>
                <td><?= $user['username']; ?></td>
                <td><?= $user['email']; ?></td>
                <td><?= $user['role']; ?></td>
                <td>
                    <a href="/user/edit/<?= $user['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="/user/delete/<?= $user['id']; ?>" onclick="return confirm('Yakin hapus?')" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>
<?= $this->include('components/footer') ?>
