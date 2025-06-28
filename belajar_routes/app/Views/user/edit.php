<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<?= $this->include('components/header') ?>
<?= $this->include('components/sidebar') ?>

<div class="container mt-4">
    <h2>Edit User</h2>
    <form method="post" action="/user/update/<?= $user['id'] ?>">
        <div class="mb-3">
            <label>Username</label>
            <input type="text" name="username" value="<?= $user['username'] ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" value="<?= $user['email'] ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Password (kosongkan jika tidak ingin ubah)</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="mb-3">
            <label>Role</label>
            <select name="role" class="form-select">
                <option value="admin" <?= $user['role'] == 'admin' ? 'selected' : '' ?>>Admin</option>
                <option value="guest" <?= $user['role'] == 'guest' ? 'selected' : '' ?>>Guest</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

<?= $this->endSection() ?>
<?= $this->include('components/footer') ?>
