<section class="evergreen-native-funnel-framework-section">
    <div class="wrapper">
        <h2><?= $args['title']; ?></h2>
        <?php foreach ($args['what_you_get'] as $you_get) { ?>
        <div class="you-get <?= $you_get['image_position'] ==='Right' ? 'right' : ''?>" >
            <?php if ($you_get['image_position'] ==='Left') { ?>
            <img src="<?= $you_get['image']['url']; ?>" alt="<?= $you_get['image']['description']; ?>">
            <?php } ?>
            <div>
                <div class="circle"><?= $you_get['number']; ?></div>
                <h3><?= $you_get['title']; ?></h3>
                <span class="border"></span>
                <p><?= $you_get['description']; ?></p>
            </div>
            <?php if ($you_get['image_position'] ==='Right') { ?>
                <img src="<?= $you_get['image']['url']; ?>" alt="<?= $you_get['image']['description']; ?>">
            <?php } ?>
        </div>
        <?php } ?>
    </div>
</section>