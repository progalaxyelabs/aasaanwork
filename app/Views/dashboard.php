<?= $this->extend('default-layout') ?>


<?= $this->section('content') ?>

<div class="container" id="page-module" data-page-module="Dashboard">
    <h1 class="text-center">My Businesses</h1>
    <div class="customer-biz-wrap">
        <div class="list-group">
            <?php foreach ($customer_biz as $biz) : ?>
                <a href="/biz/<?= name_to_url($biz->customer_biz_name) ?>" class="list-group-item list-group-item-action">
                    <?= $biz->customer_biz_name ?>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?= $this->endSection() ?>