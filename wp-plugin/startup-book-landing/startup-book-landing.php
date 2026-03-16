<?php
/**
 * Plugin Name:     Startup Book Landing Page
 * Plugin URI:      https://github.com/growthack88/startup-book-landing
 * Description:     صفحة هبوط كتاب طريقك لبناء STARTUP — تُضاف تلقائياً كـ Page Template
 * Version:         1.0.0
 * Author:          محمد حميدة
 * Text Domain:     startup-book
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// ── 1. سجّل الـ Template في قائمة القوالب ──────────────────────────────────
add_filter( 'theme_page_templates', function( $templates ) {
    $templates['startup-book-landing-tpl.php'] = 'Startup Book — Landing Page';
    return $templates;
});

// ── 2. وجّه WordPress لملف القالب الفعلي داخل البلاجن ─────────────────────
add_filter( 'template_include', function( $template ) {
    if ( is_page() && get_page_template_slug() === 'startup-book-landing-tpl.php' ) {
        $plugin_tpl = plugin_dir_path( __FILE__ ) . 'startup-book-landing-tpl.php';
        if ( file_exists( $plugin_tpl ) ) return $plugin_tpl;
    }
    return $template;
});
