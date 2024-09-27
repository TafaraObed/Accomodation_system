<h1>Edit Profile</h1>
<form method="POST">
    <input type="hidden" name="user_id" value="<?= $user->user_id; ?>">
    <input type="text" name="first_name" value="<?= htmlspecialchars($user->first_name); ?>" required>
    <input type="text" name="last_name" value="<?= htmlspecialchars($user->last_name); ?>" required>
    <input type="email" name="email" value="<?= htmlspecialchars($user->email); ?>" required>
    <button type="submit">Update Profile</button>
</form>
