<?php include('components/header.php'); ?>
<?php include('components/sidebar.php'); ?>

<div class="container" style="padding: 20px;">
    <h2>Edit Member</h2>
    <form action="<?= base_url('/members/update/' . $member['id']) ?>" method="post">
        <div class="mb-3">
            <label>Username</label>
            <input type="text" name="username" class="form-control" value="<?= $member['username'] ?>" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="<?= $member['email'] ?>" required>
        </div>
        <div class="mb-3">
            <label>Role</label>
            <select name="role" class="form-control" required>
                <option value="admin" <?= $member['role'] == 'admin' ? 'selected' : '' ?>>admin</option>
                <option value="guest" <?= $member['role'] == 'guest' ? 'selected' : '' ?>>guest</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

<?php include('components/footer.php'); ?>
