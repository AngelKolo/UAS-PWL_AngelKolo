<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<?= $this->include('components/header') ?>
<?= $this->include('components/sidebar') ?>

<div class="container mt-4">
    <h2>Tambah User Baru</h2>
    <form method="post" action="/user/store">
        <div class="mb-3">
            <label>Username</label>
            <input type="text" name="username" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Role</label>
            <select name="role" class="form-select">
                <option value="admin">Admin</option>
                <option value="guest">Guest</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>


<?= $this->endSection() ?>
<?= $this->include('components/footer') ?>
