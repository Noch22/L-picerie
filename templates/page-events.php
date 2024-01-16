<?php
/* Template Name: Évènements */
get_header();
$actual_year = intval(get_term(get_field('annee_en_cours', 'options'))->name);
$next_year = intval($actual_year) + 1;
$year = $actual_year . '-' . $next_year;

?>
<div class="top">
<h1><?= $year ?></h1>
</div>

<?php

    get_footer();
?>