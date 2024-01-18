<?php
    /* Template Name: A propos */
    get_header();
    $contenus = get_field('contenu_de_la_page', 'options');
    $sponsors = get_field('sponsors', 'options');
?>
<div class="about">
    <?php
foreach ($contenus as $content) {
                            
    $template_name = $content['acf_fc_layout'];
    $template_file = sprintf('%s/layouts/%s.php', get_template_directory(), $template_name);
    if (file_exists($template_file)) {

        printf('<section class="layout_%s">', $template_name);
        include($template_file);
        printf('</section>');
    }
}

?>

<div class="sponsors">
    <div class="text">
    <?php
foreach ($sponsors as $content) {
                            
    $template_name = $content['acf_fc_layout'];
    $template_file = sprintf('%s/layouts/%s.php', get_template_directory(), $template_name);
    if (file_exists($template_file)) {
        if($template_name == "sponsor"){
            
        }else {
            printf('<section class="layout_%s">', $template_name);
            include($template_file);
            printf('</section>');
        }

       
    }
}
?>

    </div>
    <div class="logos">
<?php
foreach ($sponsors as $content) {
                            
    $template_name = $content['acf_fc_layout'];
    $template_file = sprintf('%s/layouts/%s.php', get_template_directory(), $template_name);
    if (file_exists($template_file)) {
        if($template_name == "sponsor"){
            printf('<section class="layout_%s">', $template_name);
            include($template_file);
            printf('</section>');
        }else {
           
        }

       
    }
}

?>
</div>
</div>


</div>

<?php

get_footer();

?>