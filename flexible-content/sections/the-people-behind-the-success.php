<section class="people-section">

    <div class="wrapper">
        <h2 class="title"><?= $args['title']; ?></h2>

        <div class="people">
            <?php
            foreach ($args['people'] as $person) {?>

                <div class="person">
                    <div class="person-image">
                        <img src="<?php echo $person['image']; ?>" alt="">
                    </div>
                    <div class="about">
                        <h3><?= $person['name']; ?></h3>
                        <p class="description"><?= $person['description']; ?></p>
                    </div>
                    <div class="achievements">
                        <?php
                        foreach ($person['achievements'] as $achievement) { ?>
                            <p class="achievement">
                                <?= $achievement['text']; ?>
                            </p>
                        <?php } ?>
                    </div>
                </div>

            <?php } ?>
        </div>
    </div>
</section>
