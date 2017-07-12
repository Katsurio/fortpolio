<div class="body">
    <?php
        include_once(dirname(__FILE__) . '/header.php');
        include_once(dirname(__FILE__) . '/preloader.php');
    ?>

    <div role="main" class="main">
        <?php
            include_once(dirname(__FILE__) . '/about_me.php');
            include_once(dirname(__FILE__) . '/edu.php');
            include_once(dirname(__FILE__) . '/skills_services.php');
            include_once(dirname(__FILE__) . '/projects.php');
            include_once(dirname(__FILE__) . '/recommendations.php');
            include_once(dirname(__FILE__) . '/contact.php');
            include_once(dirname(__FILE__) . '/footer.php');
        ?>
    </div>

    <?php include_once(dirname(__FILE__) . '/body_scripts.php'); ?>
</div>