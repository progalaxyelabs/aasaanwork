<?= $this->extend('default-layout') ?>


<?= $this->section('content') ?>

<div class="container">
    <h1 class="text-center"><?= $customer_biz->customer_biz_name ?></h1>
    <h3 class="text-center"><?= $biz_screen->biz_screen_name ?></h3>
    <div class="biz-forms-wrap">
        
            <?php foreach ($biz_forms as $form) : ?>
                
            <?php endforeach; ?>
        
    </div>
</div>

<?= $this->endSection() ?>