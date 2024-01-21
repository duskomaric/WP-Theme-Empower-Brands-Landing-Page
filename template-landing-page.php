<?php
/*
Template Name: Landing Page Template
*/


get_header();

while ( have_rows('content') ) {
    the_row();

            match (get_row_layout()) {
                'header' => get_template_part(
                    'flexible-content/sections/header',
                    null,
                    [
                        'logo' => get_sub_field('logo'),
                        'button' => get_sub_field('button'),
                    ]
                ),
                'hero' => get_template_part(
                    'flexible-content/sections/hero',
                    null,
                    [
                        'title' => get_sub_field('title'),
                        'text' => get_sub_field('text'),
                        'cf7_shortcode' => get_sub_field('cf7_shortcode'),
                        'video' => get_sub_field('video'),
                        'video_test' => get_sub_field('video_test'),
                    ]
                ),
                'logos' => get_template_part(
                    'flexible-content/sections/logos',
                    null,
                    [
                        'logos' => get_sub_field('logo_rep'),
                    ]
                ),
                'the_people_behind_the_success' => get_template_part(
                    'flexible-content/sections/the-people-behind-the-success',
                    null,
                    [
                        'people' => get_sub_field('people'),
                        'title' => get_sub_field('title'),
                    ]
                ),
                'event' => get_template_part(
                    'flexible-content/sections/event',
                    null,
                    [
                        'title' => get_sub_field('title'),
                        'description' => get_sub_field('description'),
                        'image' => get_sub_field('image'),
                        'link' => get_sub_field('link'),

                        'teaser_image' => get_sub_field('teaser_image'),
                        'teaser_logo' => get_sub_field('teaser_logo'),
                        'teaser_text' => get_sub_field('teaser_text'),
                    ]
                ),
                'path_to_success' => get_template_part(
                    'flexible-content/sections/path-to-success',
                    null,
                    [
                        'title' => get_sub_field('title'),
                        'description' => get_sub_field('description'),
                        'key_aspects' => get_sub_field('key_aspects'),
                        'image' => get_sub_field('image'),
                    ]
                ),
                'the_right_place' => get_template_part(
                    'flexible-content/sections/the-right-place',
                    null,
                    [
                        'title' => get_sub_field('title'),
                        'are_you' => get_sub_field('are_you'),
                    ]
                ),
                'evergreen_native_funnel_framework' => get_template_part(
                    'flexible-content/sections/evergreen-native-funnel-framework',
                    null,
                    [
                        'title' => get_sub_field('title'),
                        'what_you_get' => get_sub_field('what_you_get'),
                    ]
                ),
                'contact_us' => get_template_part(
                    'flexible-content/sections/contact-us',
                    null,
                    [
                        'text' => get_sub_field('text'),
                        'link' => get_sub_field('link'),
                    ]
                ),
                'sales' => get_template_part(
                    'flexible-content/sections/sales',
                    null,
                    [
                        'title' => get_sub_field('title'),
                        'subtitle' => get_sub_field('subtitle'),
                        'logo' => get_sub_field('logo'),
                        'images' => get_sub_field('images'),
                        'intro_line' => get_sub_field('intro_line'),
                        'description' => get_sub_field('description'),
                    ]
                ),
                'feedbacks' => get_template_part(
                    'flexible-content/sections/feedbacks',
                    null,
                    [
                        'title' => get_sub_field('title'),
                        'partners' => get_sub_field('partners'),
                        'link' => get_sub_field('link'),
                    ]
                ),
                'solutions' => get_template_part(
                    'flexible-content/sections/solutions',
                    null,
                    [
                        'title' => get_sub_field('title'),
                        'options' => get_sub_field('options'),
                    ]
                ),
                'solutions_comparing' => get_template_part(
                    'flexible-content/sections/solutions-comparing',
                    null,
                    [
                        'title' => get_sub_field('title'),
                        'keys' => get_sub_field('keys'),
                    ]
                ),
                'our_team' => get_template_part(
                    'flexible-content/sections/our-team',
                    null,
                    [
                        'title' => get_sub_field('title'),
                        'members' => get_sub_field('members'),
                    ]
                ),
                'faq' => get_template_part(
                    'flexible-content/sections/faq',
                    null,
                    [
                        'allow_to_open_multiple' => get_sub_field('allow_to_open_multiple'),
                        'faqs' => get_sub_field('faqs'),
                    ]
                ),
                'footer' => get_template_part(
                    'flexible-content/sections/footer',
                    null,
                    [
                        'logo' => get_sub_field('logo'),
                        'text' => get_sub_field('text'),
                        'sections' => get_sub_field('sections'),
                        'copyright_text' => get_sub_field('copyright_text'),
                    ]
                ),
                default => ''
            };

}


get_footer();