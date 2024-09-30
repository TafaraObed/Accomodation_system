<?php if (isset($_SESSION['message'])): ?>
    <div id="sessionAlert" class="alert alert-info alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']; ?>
    </div>
<?php endif; ?>

<?php if (isset($_SESSION['error'])): ?>
    <div id="errorAlert" class="alert alert-danger alert-dismissible fade show" role="alert">
        <?= $_SESSION['error']; ?>
    </div>
<?php endif; ?>

<script>
    // Automatically dismiss the alerts after 5 seconds
    setTimeout(function() {
        const alertElement = document.getElementById('sessionAlert');
        if (alertElement) {
            $(alertElement).alert('close');
        }
    }, 3000); // 5000 milliseconds = 5 seconds

    setTimeout(function() {
        const errorElement = document.getElementById('errorAlert');
        if (errorElement) {
            $(errorElement).alert('close');
        }
    }, 3000); // 5000 milliseconds = 5 seconds
</script>
