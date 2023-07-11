<?php
    $config = json_decode(file_get_contents('config.json'), false);
?>
<!doctype html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $config->settings->title ?></title>

    <meta name="robots" content="noindex, nofollow"/>

    <meta name="author" content="<?php echo $config->settings->author ?>"/>
    <meta name="title" content="<?php echo $config->settings->title ?>"/>
    <meta name="description" content="<?php echo $config->settings->description ?>"/>
    <meta name="keywords" content="<?php echo $config->settings->keywords ?>">
    <meta name="theme-color" content="<?php echo $config->settings->color ?>">
    <meta name="google-site-verification" content="<?php echo $config->settings->google ?>" />

    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?php echo $config->settings->site_name ?>">
    <meta property="og:author" content="<?php echo $config->settings->author ?>">
    <meta property="og:title" content="<?php echo $config->settings->title ?>">
    <meta property="og:description" content="<?php echo $config->settings->description ?>">
    <meta property="og:url" content="<?php echo $config->settings->url ?>">
    <meta property="og:image" content="<?php echo $config->settings->image ?>">
    <meta property="og:image:type" content="<?php echo $config->settings->type ?>">
    <meta property="og:image:height" content="<?php echo $config->settings->size ?>">
    <meta property="og:image:width" content="<?php echo $config->settings->size ?>">

    <link rel="icon" href="favicon.ico" sizes="any">
    <link rel="stylesheet" href="static/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="static/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="static/main/main.css">
</head>
<body class="d-flex flex-column h-100">

<header>
<div class="container-fluid">
    <div class="row">
        <div class="col text-center">
            <img src="static/images/title.png" class="img-fluid center-block" alt="Title">
        </div>
    </div>
</div>
</header>

<main class="flex-shrink-0">
<div class="container-fluid p-3">

    <div class="row justify-content-center">

        <div class="col-auto mb-2">
            <div class="card text-center transparent" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title text-white"><i class="fa-solid fa-circle-down"></i> Download Teamspeak</h5>
                    <p class="card-text">Download and Install TeamSpeak for your Operating System.</p>
                    <a href="https://teamspeak.com/en/downloads/" class="card-link" target="_blank">
                        TeamSpeak Downloads <i class="fas fa-external-link-alt ms-1"></i></a>
                </div>
            </div>
        </div>

        <div class="col-auto mb-2">
            <div class="card text-center transparent" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title text-white"><i class="fa-solid fa-circle-right"></i> Connect to TeamSpeak</h5>
                    <p class="card-text">TeamSpeak Server Address:<br><kbd>teamspeak.cssnr.com</kbd>
                        <a class="clip" role="button" data-clipboard-text="teamspeak.cssnr.com">
                            <i class="fa-regular fa-clipboard text-white ms-1"></i></a></p>
                    <a href="ts3server://teamspeak.cssnr.com?port=9987&channel=MyDefaultChannel&addbookmark=SmAsHeD"
                       class="card-link" target="_blank">Server Connect Link <i class="fa-solid fa-link"></i></a>
                </div>
            </div>
        </div>

        <div class="col-auto mb-2">
            <div class="card text-center transparent" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title text-white"><i class="fa-solid fa-circle-left"></i> Back to Discord</h5>
                    <p class="card-text">Discord Invite Code:<br><kbd>discord.gg/<?php echo $config->links->discord_code ?></kbd>
                        <a class="clip" role="button" data-clipboard-text="https://discord.gg/<?php echo $config->links->discord_code ?>">
                            <i class="fa-regular fa-clipboard text-white ms-1"></i></a></p>
                    <a href="https://discord.gg/<?php echo $config->links->discord_code ?>" class="card-link" target="_blank">
                        Discord Invite <i class="fa-brands fa-discord"></i></a>
                </div>
            </div>
        </div>

    </div>

</div>
</main>

<footer class="footer mt-auto">
<div class="container-fluid p-3">
    <div class="row">
        <div class="col text-center">
            <ul class="list-inline mb-0">
                <li class="list-inline-item"><a class="text-white" href="/">Home</a></li>
                <li class="list-inline-item">
                    <a class="text-white" href="<?php echo $config->links->source ?>" target="_blank">
                        Source</a></li>
                <li class="list-inline-item">
                    <a class="text-white" href="<?php echo $config->links->status ?>" target="_blank">
                        Status</a></li>
            </ul>
        </div>
    </div>
</div>
</footer>

<button type="button" class="btn btn-primary btn-floating" id="btn-back-to-top">
    <i class="fas fa-arrow-up"></i>
</button>

<script type="text/javascript" src="static/jquery/jquery-3.7.0.min.js"></script>
<script type="text/javascript" src="static/popper-js/popper.min.js"></script>
<script type="text/javascript" src="static/bootstrap/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="static/bootstrap/theme.js"></script>
<script type="text/javascript" src="static/clipboard-js/clipboard.min.js"></script>
<script type="text/javascript" src="static/font-awesome/js/all.min.js"></script>
<script type="text/javascript" src="static/main/main.js"></script>

</body>
</html>
