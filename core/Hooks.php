<?php

declare(strict_types=1);

namespace Landing;

defined('ABSPATH') || exit;

class Hooks
{
    public function init(): void
    {
        // Disable comments
        add_action('init', array($this, 'disable_comments'));

        // Disable Gutenberg Block Editor
        add_filter( 'use_block_editor_for_post', '__return_false' );

        // Disable Widgets Block Editor
        add_filter( 'use_widgets_block_editor', '__return_false' );

        // SVG
        add_action( 'admin_head', array($this, 'fix_svg') );
        add_filter( 'upload_mimes', array($this, 'cc_mime_types') );
//        add_filter( 'wp_check_filetype_and_ext', array($this, 'allow_svg') );

        // Remove wrapper - CF7
        add_filter('wpcf7_autop_or_not', '__return_false');
        add_filter('wpcf7_form_elements', array($this, 'contact_form_remove_checkbox_wrapping') );
    }

    public function disable_comments(): void
    {
        // Disable support for comments on posts and pages
        remove_post_type_support('post', 'comments');
        remove_post_type_support('page', 'comments');

        // Close existing comments
        update_option('default_comment_status', 'closed');
    }

    public function fix_svg(): void
    {
        echo '<style type="text/css">
        .attachment-266x266, .thumbnail img {
             width: 100% !important;
             height: auto !important;
        }
        </style>';
    }
    
    public function cc_mime_types( $mimes )
    {
        $mimes['svg'] = 'image/svg+xml';
        return $mimes;
    }

    public function allow_svg($data, $file, $filename, $mimes)
    {
        global $wp_version;
        if ( $wp_version !== '4.7.1' ) {
            return $data;
        }

        $filetype = wp_check_filetype( $filename, $mimes );

        return [
            'ext'             => $filetype['ext'],
            'type'            => $filetype['type'],
            'proper_filename' => $data['proper_filename']
        ];
    }

    public function contact_form_remove_checkbox_wrapping( $content ): array|string|null
    {
        return preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);
    }

}
