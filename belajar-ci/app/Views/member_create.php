<?php include('components/header.php'); ?>
<?php include('components/sidebar.php'); ?>

<div class="container" style="padding: 20px;">
    <h2>Tambah Member</h2>
    <form action="<?= base_url('/members/store') ?>" method="post">
        <div class="mb-3">
            <label>Username</label>
            <input type="text" name="username" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Role</label>
            <select name="role" class="form-control" required>
                <option value="admin">admin</option>
                <option value="guest">guest</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

<?php include('components/footer.php'); ?>
