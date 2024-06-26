<?php wp_footer();
$instagram = get_field('instagram', 'options');
$facebook = get_field('facebook', 'options');
$actual_year = intval(get_term(get_field('annee_en_cours', 'options'))->name);
$next_year = intval($actual_year) + 1;
$year = str_split($actual_year)['2'] . str_split($actual_year)['3'] . '-' . str_split($next_year)['2'] . str_split($next_year)['3'];

$year_now = str_split($actual_year)['2'] . str_split($actual_year)['3'];
$year_after = str_split($next_year)['2'] . str_split($next_year)['3'];
?>
<footer <?php echo $pagename == 'rendez-vous' ? 'class="rdv_footer"' : ' '?>>
    <div class="parent_footer">

        <a href="<?= $instagram ?>" target="_blank">
            <div class="insta_footer">
                <svg width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.1719 6.62572C3.06177 8.53753 -1.15374 15.8538 0.758068 22.9639L6.29754 43.5655C8.20935 50.6756 15.5256 54.8911 22.6357 52.9793L43.2373 47.4398C50.3474 45.528 54.5629 38.2118 52.6511 31.1017L47.1116 10.5001C45.1998 3.38995 37.8836 -0.825559 30.7735 1.08625L10.1719 6.62572ZM37.3087 4.85178C38.7303 4.46956 40.1942 5.31303 40.5764 6.73454C40.9586 8.15605 40.1151 9.61995 38.6936 10.0022C37.2721 10.3844 35.8082 9.54092 35.426 8.11941C35.0438 6.6979 35.8872 5.234 37.3087 4.85178ZM23.2424 14.1568C30.3525 12.245 37.6688 16.4605 39.5806 23.5706C41.4924 30.6807 37.2769 37.997 30.1668 39.9088C23.0566 41.8206 15.7404 37.6051 13.8286 30.4949C11.9168 23.3848 16.1323 16.0686 23.2424 14.1568ZM24.6273 19.3072C22.5783 19.8581 20.8322 21.2004 19.7729 23.0388C18.7136 24.8772 18.4281 27.0611 18.979 29.1101C19.5299 31.159 20.8722 32.9052 22.7106 33.9645C24.549 35.0237 26.7329 35.3093 28.7819 34.7584C30.8308 34.2074 32.577 32.8651 33.6363 31.0267C34.6955 29.1883 34.9811 27.0044 34.4302 24.9555C33.8792 22.9065 32.5369 21.1603 30.6985 20.1011C28.8601 19.0418 26.6762 18.7562 24.6273 19.3072Z" fill="white"/>
                </svg>

            </div>
        </a>
        <div class="text_footer">
            <div id="saison">Saison</div>
            <div id="year">
                <span><?= $year_now ?></span>
                <span>-</span>
                <span id="after_year"><?= $year_after ?></span>
            </div>
        </div>

        <a href="<?= $facebook ?>" target="_blank">
            <div class="facebook_footer">
                <svg width="40" height="56" viewBox="0 0 32 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M28.8929 18.6534L19.7335 17.196L20.4877 12.4556C20.8769 10.0096 21.3403 8.50373 25.1834 9.11522L30.0372 9.88755L31.2365 2.35039C28.91 1.75177 26.5524 1.26485 24.1741 0.891279C17.1246 -0.230415 11.3549 2.87833 10.2076 10.0884L9.33983 15.5422L1.5446 14.3018L0.0360569 23.7825L7.83166 25.0205L4.43707 46.3545L14.8307 48.0083L18.2261 26.6696L26.1932 27.9349L28.8929 18.6534Z" fill="white"/>
                </svg>

            </div>
        </a>
    </div>
    <div class="footer_links">
        <a href="<?= get_site_url() . "/mentions-legales/" ?>">Mentions Légales</a>
    </div>
</footer>