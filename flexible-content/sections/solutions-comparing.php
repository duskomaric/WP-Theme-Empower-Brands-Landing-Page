<section class="solutions-comparing-section">
    <div class="wrapper">
        <h2><?= $args['title']; ?></h2>

        <div class="keys-titles desktop">
        <?php foreach ($args['keys'] as $key) { ?>
            <div class="key-title">
                <img src="<?= $key['image']['url']; ?>" alt="<?= $key['image']['description']; ?>">
                    <h3><?= $key['title']; ?></h3>
            </div>
        <?php } ?>
        </div>

        <span class="border desktop"></span>

        <div class="solutions-comparing">

            <?php foreach ($args['keys'] as $key) { ?>

                <div class="solution-comparing">
                    <div class="key-title mobile">
                        <img src="<?= $key['image']['url']; ?>" alt="<?= $key['image']['description']; ?>">
                        <h3><?= $key['title']; ?></h3>
                    </div>
                    <span class="border mobile"></span>
                    <ul>
                        <?php foreach ($key['keys_rep'] as $item) { ?>
                            <li class="<?= $item['icon'] === 'Check' ? 'check' : 'minus'?>"><p><?= $item['text']; ?></p></li>
                        <?php }?>
                    </ul>
                </div>

            <?php } ?>
        </div>
    </div>
</section>