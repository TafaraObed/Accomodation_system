<h1>User Profile</h1>
<p>First Name: <?= htmlspecialchars($user->first_name); ?></p>
<p>Last Name: <?= htmlspecialchars($user->last_name); ?></p>
<p>Email: <?= htmlspecialchars($user->email); ?></p>
<a href="/users/edit?id=<?= $user->user_id; ?>">Edit Profile</a>
