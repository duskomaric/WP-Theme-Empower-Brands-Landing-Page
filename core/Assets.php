<?php

declare(strict_types=1);

namespace Landing;

defined('ABSPATH') || exit;

class Assets
{
    public function init(): void
    {
        \add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts_and_styles' ) );
    }

    public function enqueue_scripts_and_styles(): void
    {
        // Enqueue Styles
        wp_enqueue_style('landing-page-style-reset', get_template_directory_uri() . '/assets/css/reset.css', array(), '1.0');
        wp_enqueue_style('landing-page-style-common', get_template_directory_uri() . '/assets/css/common.css', array(), '1.0');

        // Enqueue Scripts
        wp_enqueue_script('landing-page-script', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0', true);


        // Enqueue SECTION Styles
        $sections = \get_field( 'content' );

        if ( empty( $sections ) ) {
            return;
        }

        $enqueueStyles = wp_list_pluck($sections, 'acf_fc_layout');

        foreach ( $enqueueStyles as $style ) {
            \wp_enqueue_style( 'style-' . $style,
                get_template_directory_uri() . '/assets/css/' . str_replace( '_', '-', $style ).'.css' );
        }

        // Add dynamic CSS
        $this->add_dynamic_css();
    }

    private function add_dynamic_css(): void
    {
        // Dynamic CSS
        $dynamic_css =
            '.hero-section {
            background: url("' . get_field('hero_background_image', 'options') . '") top center/auto 700px no-repeat;
        }
        
        .hero-section .hero {
        background: url(' . get_field('hero_background_image_on_top', 'options') . ') top center/auto 700px no-repeat;
        }
        
        .the-right-place-section {
        background: ' . get_field('the_right_place_background_color', 'options') . ';
        }
        
        .the-right-place-section .wrapper {
            background: linear-gradient(0deg, #E7F0F9 0%, #E7F0F9 100%), url("' . get_field('the_right_place_background_image', 'options') . '") lightgray 50% / cover no-repeat;
            background: url("' . get_field('the_right_place_background_image', 'options') . '") top center/auto 740px no-repeat;
        }
        
        .contact-us-section .contact {
            background: radial-gradient(50% 50% at 50% 50%, rgba(37, 37, 37, 0.46) 0%, rgba(37, 37, 37, 0.69) 100%), 
            url("' . get_field('contact_us_background_image', 'options') . '") top center/auto 280px no-repeat;
            }

        
        .solutions-section {
            background: url("' . get_field('solutions_background_image', 'options') . '") white top center/auto 542px no-repeat;
        }';

        wp_add_inline_style('landing-page-style-common', $dynamic_css);
    }


}
