<section class="path-to-success-section">
    <div class="wrapper"><?php //dd($args);?>
        <img src="<?= $args['image']['url']; ?>" alt="<?= $args['image']['description']; ?>">
        <div class="text">
            <h2><?= $args['title']; ?></h2>
            <p><?= $args['description']; ?></p>
            <div class="key-aspects">

                <ul>
                    <?php foreach ($args['key_aspects'] as $key_aspect) { ?>
                    <li class="key-aspect"><p><?= $key_aspect['key_aspect']; ?></p></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>