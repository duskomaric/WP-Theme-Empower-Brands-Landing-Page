<section class="the-right-place-section">
    <div class="wrapper">
        <div class="the-right-place">
            <h2><?= $args['title']; ?></h2>
            <div class="are-you">
                <?php foreach ($args['are_you'] as $are_you) { ?>
                    <div class="question">
                        <img src="<?= $are_you['icon']['url']; ?>" alt="<?= $are_you['icon']['description']; ?>">
                        <p><?= $are_you['text']; ?></p>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>