<?= $this->extend('default-layout') ?>


<?= $this->section('content') ?>

<div class="container">
    <h1 class="text-center"><?= $customer_biz->customer_biz_name ?></h1>
    <div class="biz-screens-wrap">
        <div class="list-group">
            <?php foreach ($biz_screens as $screen) : ?>
                <?php
                    $biz_name = name_to_url($customer_biz->customer_biz_name);
                    $screen_name = name_to_url($screen->biz_screen_name); 
                    $url = "/biz/$biz_name/$screen_name";
                ?>
                <a href="<?= $url ?>" class="list-group-item list-group-item list-group-item-action">
                    <?= $screen->biz_screen_name ?>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?= $this->endSection() ?>