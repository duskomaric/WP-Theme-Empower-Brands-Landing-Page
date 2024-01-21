<?php $number = 0; ?>

<section class="faq-section <?= $args['allow_to_open_multiple'] ? '' : 'faq-radio'?>">

    <div class="wrapper">
        <?php foreach ($args['faqs'] as $faq) {
            $number++; ?>
            <div class="tab">
                <input type="<?= $args['allow_to_open_multiple'] ? 'checkbox' : 'radio'?>" name="faq-<?= $number; ?>" id="faq<?= $number; ?>">
                <label for="faq<?= $number; ?>" class="tab__label"><?= $faq['question']; ?></label>
                <div class="tab-content">
                    <p><?= $faq['answer']; ?></p>
                </div>

            </div>
            <div class="border-dark-bg"></div>

        <?php } ?>
    </div>
</section>