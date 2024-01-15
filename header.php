<?php 
wp_head(); 
?>
<script src="https://cdn.tailwindcss.com"></script>
<?php if (get_option('enable_custom_bar') == 1) : ?>
    <div id="custom-header-bar">
        <p><?php echo get_option('custom_text_bar', 'Texte par défaut'); ?></p>
    </div>
<?php endif; ?>
<div class="header">
    <?php 
    the_custom_logo();
    wp_nav_menu(['primary_menu']);
    ?>
</div>

<style>
    #custom-header-bar {
        background-color: <?php echo get_option('custom_color_bar', '#001fbd'); ?>;
    }

    #custom-header-bar p {
        color: <?php echo get_option('custom_color_bar_text', '#141413'); ?>;
        <?php if (get_option('enable_scrolling') == 1) : ?>
        animation: marquee 20s linear infinite;
        padding-left: 100%;
        <?php endif; ?>
    }

</style>