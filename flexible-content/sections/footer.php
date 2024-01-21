</main>
<footer>
    <section>
        <div class="wrapper">
            <div class="footer-main">
                <div class="info">
                    <a href="/">
                        <img src="<?= $args['logo']['url']; ?>" alt="<?= $args['logo']['description']; ?>">
                    </a>
                    <p class="text"><?= $args['text']; ?></p>
                </div>
                <?php foreach ($args['sections'] as $section) {

                    echo match ($section['acf_fc_layout']) {
                        'contact' => contact($section),
                        'information' => information($section),
                        'social_media' => social_media($section),
                    };
                } ?>
            </div>
            <div class="copyright">
                © <?= current_time('Y') . ' ' . $args['copyright_text']; ?>
            </div>

        </div>
    </section>

</footer>


<?php

function contact($section): string
{
    return '
    <div class="contact">
        <p class="title">' . $section['title'] . '</p>
        <a href="tel:' . $section['phone_number'] . '">' . $section['phone_number'] . '</a>
        <a href="mailto:' . $section['email'] . '">' . $section['email'] . '</a>
        <p>' . $section['address'] . '</p>
    </div>';
}

function information($section): string
{
    $linksHTML = '';

    foreach ($section['links'] as $link) {
        $linksHTML .= '<a 
        href="' . $link['link']['url'] . '" 
        target="'.$link['link']['target'].'">
        '.$link['link']['title'].'</a>';
    }

    return '
    <div class="information">
        <p class="title">' . $section['title'] . '</p>
        <div class="links">' . $linksHTML . '</div>
    </div>';
}


function social_media($section): string
{
    $socialMediaHTML = '';

    foreach ($section['links'] as $soc_link) {

        $icon = match ($soc_link['icon']) {
            'Instagram' => 'instagram',
            'Linkedin' => 'linkedin'
        };

        $socialMediaHTML .= '<a 
        class="'. $icon .'" 
        href="' . $soc_link['link']['url'] . '" 
        target="' . $soc_link['link']['target'] . '"
        title="'. $soc_link['icon'] . '"
        ></a>';
    }

    return '
    <div class="social-media">
        <p class="title">' . $section['title'] . '</p>
        <div class="links">' . $socialMediaHTML . '</div>
    </div>';
}
