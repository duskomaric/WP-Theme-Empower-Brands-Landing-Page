<section class="solutions-section">
    <div class="wrapper">
        <h2><?= $args['title']; ?></h2>
        <div class="solutions">
            <?php foreach ($args['options'] as $solution) { ?>
            <div class="solution">
                <h3><?= $solution['title']; ?></h3>
                <span class="border"></span>
<!--                <ul>-->
                    <?php foreach ($solution['options_rep'] as $option) { ?>
                        <p><?= $option['option']; ?></p>
                    <?php }?>

<!--                </ul>-->
            </div>
            <?php } ?>
        </div>
    </div>
</section>