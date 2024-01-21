<section class="event-section">
    <div class="wrapper">
        <div class="event">
            <div class="image">
                <img src="<?= $args['image']['url']; ?>" alt="<?= $args['image']['description']; ?>">
                <p><?= $args['image']['description']; ?></p>
            </div>
            <div class="event-text">
                <h2><?= $args['title']; ?></h2>
                <p class="description"><?= $args['description']; ?></p>
                <a class="button" href="<?= $args['link']['url']; ?>" target="<?= $args['link']['target']; ?>"><?= $args['link']['title']; ?></a>
            </div>
        </div>

        <div class="teaser">
            <img src="<?= $args['teaser_image']['url']; ?>" alt="">
            <div class="text">
                <img src="<?= $args['teaser_logo']['url']; ?>" alt="">
                <p class="description"><?= $args['teaser_text']; ?></p>
            </div>
        </div>
    </div>
</section>