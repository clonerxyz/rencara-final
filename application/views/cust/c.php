<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="multikart">
    <meta name="keywords" content="multikart">
    <meta name="author" content="multikart">
     <link rel="icon" href="https://store.rencara.com/ct/img/rico.png" type="image/x-icon">
    <link rel="shortcut icon" href="https://store.rencara.com/ct/img/rico.png" type="image/x-icon">
    <title>Store rencara</title>

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="https://store.rencara.com/ct/css/fontawesome.css">

    <!--Slick slider css-->
    <link rel="stylesheet" type="text/css" href="https://store.rencara.com/ct/css/slick.css">
    <link rel="stylesheet" type="text/css" href="https://store.rencara.com/ct/css/slick-theme.css">

    <!-- Animate icon -->
    <link rel="stylesheet" type="text/css" href="https://store.rencara.com/ct/css/animate.css">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="https://store.rencara.com/ct/css/themify-icons.css">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="https://store.rencara.com/ct/css/bootstrap.css">

    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="https://store.rencara.com/ct/css/color1.css" media="screen" id="color">


</head>

<div class="col-md-12">
<?php $no = 1;foreach($cat as $c){ ?>
<div class="col-md-4">
<a class="sm pixelstrap" href="https://store.rencara.com/cust/search/<?php echo $c->n_cat ?>/0/11" target="_parent"><?php echo $c->n_cat ?></a>
</div>
<?php } ?>
</html>