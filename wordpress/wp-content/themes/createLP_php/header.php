<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        薬剤師転職エージェント
    </title>
    <!-- css -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"/>
    <link rel="stylesheet" href="http://fonts.googleapis.com/earlyaccess/notosansjp.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/style.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/modal_win.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/error_msg.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/humberger.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/responsive.css">


    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick-theme.css" media="screen" />
    
    <?php wp_head();?>
</head>
<body>
    <header>
        <nav>
            <a class="logo" href="#top"><img src="<?php echo get_template_directory_uri() ?>/IMAGE/logo.png" alt=""><p>薬剤師専門の</br>転職エージェント</p></a>
            <ul>
                <li><a href="#service-info">サービスについて</a></li>
                <li><a href="#matter-info">求人情報</a></li>
                <li><a href="#user-info">ユーザーの声</a></li>
                <li><a href="#flow-info">転職の流れ</a></li>
                <li><a href="#question-info">よくある質問</a></li>
                <li><a href="#form-info" class="form-tab"><i class="fa fa-commenting-o" aria-hidden="true"></i>無料相談はこちら</a></li>
            </ul>
            <div id="nav-drawer">
                <input id="nav-input" type="checkbox" class="nav-unshown" />
                <label id="nav-open" for="nav-input"><span></span></label>
                <label class="nav-unshown" id="nav-close" for="nav-input"></label>
                <div id="nav-content">
                  <li><a href="#service-info">サービスについて</a></li>
                  <li><a href="#matter-info">求人情報</a></li>
                  <li><a href="#user-info">ユーザーの声</a></li>
                  <li><a href="#flow-info">転職の流れ</a></li>
                  <li><a href="#question-info">よくある質問</a></li>
                  <li class="login-sp"><a href="#form-info">お問い合わせ</a></li>
                </div>
            </div>
        </nav>
    </header>