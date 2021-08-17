<?= $this->extend('default-layout') ?>


<?= $this->section('content') ?>

<div class="screen-js-module" data-module="HomeCreateForm">

    <div class="container">
        <h1 class="text-center"><?= $customer_biz->customer_biz_name ?></h1>
        <h3 class="text-center"><?= $biz_screen->biz_screen_name ?></h3>
        <h3 class="text-center"><?= $biz_screen->biz_form_name ?></h3>

        <div class="biz-forms-wrap">
            <div class="list-group">
                <?php foreach ($biz_forms as $form) : ?>
                    <div class="list-group-item list-group-item list-group-item-action">
                        <input type="hidden" id="form-id" value="<?= $form->biz_form_id ?>">
                        <form id="frame" class="form col col-sm-10 col-md-8 my-3"></form>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</div>

<?= $this->endSection() ?>