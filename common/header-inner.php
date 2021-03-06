<!DOCTYPE html>
<?php
function get_page_name() {
    $page_url = end(explode('/', $_SERVER['REQUEST_URI']));
    
    switch ($page_url) {
        case 'about-milestones.php':
            echo 'Milestones';
            break;
        case 'about-achievements.php':
            echo 'Achievements';
            break;
        case 'about-what-makes-us-different.php':
            echo 'What makes us Different';
            break;
        case 'programs.php':
            echo 'Programs';
            break;
        case 'work-with-us.php':
            echo 'Work with us';
            break;
        case 'reach-us.php':
            echo 'Reach us';
            break;
        case 'donate.php':
            echo 'Donate';
            break;
        default:
            echo 'Home';
    }
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loreto Rainbow Homes | <?php get_page_name(); ?></title>
    <link rel="stylesheet" href="styles/vendor/bulma.min.css">
    <link rel="stylesheet" href="styles/helpers.css">
    <link rel="stylesheet" href="styles/~debug.css">
    <link rel="stylesheet" href="styles/main.css">
</head>
<body>
    <div class="hero hero-inner is-medium">
        <div class="hero-head">
            <div class="columns gradient-bg">
                <div class="column is-one-third left">
                    <a href="index.php">
                        <figure class="navbar-item">
                            <img src="assets/images/logo.jpg" alt="Loreto Rainbow Homes Logo" title="Loreto Rainbow Homes Logo" />
                        </figure>
                    </a>
                </div>
                <div class="column is-two-thirds right">
                    <nav class="desktop">
                        <ul class="center">
                            <li class="navbar-item"><a class="heading is-size-6 has-text-weight-bold has-text-white" href="index.php">Home</a></li>
                            <li class="navbar-item"><a class="heading is-size-6 has-text-weight-bold has-text-white has-submenu" href="#">About us <span class="fa-fw select-all fas"></span></a>
                                <ul>
                                    <li class="heading is-size-6 has-text-white has-text-weight-bold"><a href="about-milestones.php" class="has-text-white">Milestones</a></li>
                                    <li class="heading is-size-6 has-text-white has-text-weight-bold"><a href="about-achievements.php" class="has-text-white">Achievements</a></li>
                                    <li class="heading is-size-6 has-text-white has-text-weight-bold"><a href="about-what-makes-us-different.php" class="has-text-white">What makes us different</a></li>
                                </ul>
                            </li>
                            <li class="navbar-item"><a class="heading is-size-6 has-text-weight-bold has-text-white" href="programs.php">Programs</a></li>
                            <li class="navbar-item"><a class="heading is-size-6 has-text-weight-bold has-text-white" href="work-with-us.php">Work with us</a></li>
                            <li class="navbar-item"><a class="heading is-size-6 has-text-weight-bold has-text-white has-submenu" href="">Media <span class="fa-fw select-all fas"></span></a>
                                <ul>
                                    <li class="heading is-size-6 has-text-white has-text-weight-bold">Blog</li>
                                    <li class="heading is-size-6 has-text-white has-text-weight-bold">Volunteer Now</li>
                                </ul>
                            </li>
                            <li class="navbar-item"><a class="heading is-size-6 has-text-weight-bold has-text-white" href="reach-us.php">Reach us</a></li>
                            <li class="navbar-item"><a class="heading is-size-6 has-text-weight-bold has-text-white" href="donate.php">Donate</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="hero-body">
        </div>
        <div class="hero-foot"></div>
    </div>