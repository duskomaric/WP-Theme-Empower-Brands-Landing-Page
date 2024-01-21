<section class="logos-section">
    <div class="wrapper">
        <div class="logos">
            <?php
            foreach ($args['logos'] as $logo) {
                if (!empty($logo['link'])) {?>
                <a href="<?= $logo['link']['url']?>" target="<?= $logo['link']['target']?>">
                    <?php } ?>
                <img src="<?= $logo['logo']?>" alt="Logo">
                    <?php if (!empty($logo['link'])) {?>
                    </a>
            <?php } ?>

            <?php } ?>
        </div>
    </div>
</section>