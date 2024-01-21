<section class="sales-section">
    <div class="wrapper">
        <h2><?= $args['title']; ?></h2>
        <h3><?= $args['subtitle']; ?></h3>
        <img class="logo" src="<?= $args['logo']['url']; ?>" alt="<?= $args['logo']['description']; ?>">
        <div class="images">
            <?php foreach ( $args['images'] as $image ) { ?>
                <img src="<?= $image['image']['url']; ?>" alt="<?= $image['image']['description']; ?>">
            <?php } ?>
        </div>
        <p><?= $args['description']; ?></p>
    </div>
</section>