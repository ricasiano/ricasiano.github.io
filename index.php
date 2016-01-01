<?php require('config/default.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo META_DESCRIPTION; ?>">
    <meta name="author" content="<?php echo META_AUTHOR; ?>">
    <meta name="keywords" content="<?php echo META_KEYWORDS; ?>">

    <title><?php echo META_TITLE; ?></title>

    <?php require('assets/css.php'); ?>

</head>

<body id="page-top" class="index">

    <?php require('parts/navigation.php'); ?>

    <?php require('parts/main.php'); ?>

    <?php require('parts/services.php'); ?>

    <?php require('parts/hosting.php'); ?>

    <?php require('parts/about.php'); ?>

    <?php require('parts/footer.php'); ?>

    <?php require('parts/scroll.php'); ?>

    <?php require('modals/webdev.php'); ?>

    <?php require('modals/api.php'); ?>

    <?php require('modals/sms.php'); ?>

    <?php require('modals/hosting.php'); ?>

    <?php require('modals/bitcoin.php'); ?>

    <?php require('assets/js.php'); ?>


</body>
</html>
