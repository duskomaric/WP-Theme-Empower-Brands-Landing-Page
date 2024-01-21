<section class="hero-section">
    <div class="hero">
        <div class="wrapper">

            <h1 class="title"><?= $args['title']; ?></h1>
            <p class="text"><?= $args['text']; ?></p>

            <div class="form-video">
                <div class="form">
                    <?= do_shortcode($args['cf7_shortcode']); ?>
                </div>
                <div class="video">
                    <?= $args['video']; ?>
                </div>
            </div>

        </div>
    </div>
</section>
