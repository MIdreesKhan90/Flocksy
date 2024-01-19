<?php
$home_page_id = FLOCKSY_HOME_PAGE_ID;
?>
<div class="logo-banner-section custom-section">
    <div class="container">
        <ul class="logo-list">
            <?php
            if (is_page_template('home.php')) {
                $rows = get_field('logo_banner_images');
            }else{
                $rows = get_field('logo_banner_images',$home_page_id);
            }

            if ($rows) {
                foreach ($rows as $row) {
                    ?>
                    <li class="logo-item">
                        <img src="<?php echo $row['logo_images']; ?>" alt="logo">
                    </li>
                    <?php
                }
            }
            ?>
        </ul>
    </div>
</div>