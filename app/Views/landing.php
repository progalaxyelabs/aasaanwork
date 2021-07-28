<?= $this->extend('default-layout') ?>


<?= $this->section('content') ?>

<h1 class="text-center">Aasaan Work</h1>
<p class="text-center">Simplfying business processes</p>

<div class="text-center">
    <?php if ($isSignedIn) : ?>
        <a class="btn btn-primary" href="/dashboard" title="Dashboard">Dashboard</a>
    <?php else : ?>
        <a class="btn btn-primary" href="/access" title="Sign in">Sign in</a>
    <?php endif; ?>
</div>

<?= $this->endSection() ?>