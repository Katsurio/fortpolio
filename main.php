<!DOCTYPE html>
<html>
<head>
    <?php require_once(dirname(__FILE__). '/includes/head.php'); ?>
</head>
<body data-spy="scroll" data-target=".wrapper-spy">

<div class="body">
    <?php include_once(dirname(__FILE__). '/includes/header.php'); ?>

    <div role="main" class="main">
        <?php include_once(dirname(__FILE__). '/includes/about_me.php'); ?>
        <?php include_once(dirname(__FILE__). '/includes/exp.php'); ?>
        <?php include_once(dirname(__FILE__). '/includes/edu.php'); ?>
        <?php include_once(dirname(__FILE__). '/includes/skills.php'); ?>
        <?php include_once(dirname(__FILE__). '/includes/portfolio.php'); ?>
        <?php include_once(dirname(__FILE__). '/includes/recommendations.php'); ?>
        <?php include_once(dirname(__FILE__). '/includes/blog.php'); ?>
        <?php include_once(dirname(__FILE__). '/includes/contact.php'); ?>
        <?php include_once(dirname(__FILE__). '/includes/footer.php'); ?>
    </div>

    <?php include_once(dirname(__FILE__). '/includes/body_scripts.php'); ?>
</div>

</body>
</html>
