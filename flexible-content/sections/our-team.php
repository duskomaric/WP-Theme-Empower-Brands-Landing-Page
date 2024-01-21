<section class="our-team-section">
    <div class="wrapper">
        <h2><?= $args['title']; ?></h2>
        <div class="members">
            <?php foreach ($args['members'] as $member) { ?>
            <div class="member">
                <img src="<?= $member['image']['url']; ?>"alt="<?= $member['image']['description']; ?>">
                <div class="bottom-left">
                    <p class="name"><?= $member['name']; ?></p>
                    <p class="position"><?= $member['position']; ?></p>
                </div>

                <div class="shadow"></div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>