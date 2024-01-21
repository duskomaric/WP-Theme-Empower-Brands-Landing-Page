<section class="feedbacks-section">
    <div class="wrapper">
        <h2><?= $args['title']; ?></h2>
        <div class="partners">
            <?php foreach ( $args['partners'] as $partner_feedback) { //dd($args);?>
            <div class="partner-feedback">
                <img class="image" src="<?= $partner_feedback['image']['url']; ?>" alt="<?= $partner_feedback['image']['description']; ?>">
                <h3><?= $partner_feedback['name']; ?></h3>
                <p class="position"><?= $partner_feedback['position']; ?></p>
                <p class="text"><?= $partner_feedback['text']; ?></p>
                <img class="company-logo" src="<?= $partner_feedback['company_logo']['url']; ?>" alt="<?= $partner_feedback['company_logo']['description']; ?>">
            </div>
            <?php } ?>
        </div>
        <a class="button" href="<?= $args['link']['url']; ?>" target="<?= $args['link']['target']; ?>"><?= $args['link']['title']; ?></a>
    </div>
</section>