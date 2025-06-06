<!DOCTYPE html>
<html lang="en">
<?php include 'style.php'; ?>

<head>
    <meta charset="utf-8">

    <title>Standalone example</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="NHS digital service manual - standalone example" />

    <link rel="shortcut icon" href="/nhsuk-frontend/assets/favicons/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="/nhsuk-frontend/assets/favicons/apple-touch-icon-180x180.png">
    <link rel="mask-icon" href="/nhsuk-frontend/assets/favicons/favicon.svg" color="#005eb8">
    <link rel="icon" sizes="192x192" href="/nhsuk-frontend/assets/favicons/favicon-192x192.png">
    <meta name="msapplication-TileImage" content="/nhsuk-frontend/assets/favicons/mediumtile-144x144.png">
    <meta name="msapplication-TileColor" content="#005eb8">
    <meta name="msapplication-square70x70logo" content="/nhsuk-frontend/assets/favicons/smalltile-70x70.png">
    <meta name="msapplication-square150x150logo" content="/nhsuk-frontend/assets/favicons/mediumtile-150x150.png">
    <meta name="msapplication-wide310x150logo" content="/nhsuk-frontend/assets/favicons/widetile-310x150.png">
    <meta name="msapplication-square310x310logo" content="/nhsuk-frontend/assets/favicons/largetile-310x310.png">

    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/design-example-overrides.css">

    <script src="/js/main.min.js" defer></script>
</head>

<script>
    document.body.className = ((document.body.className) ? document.body.className + ' js-enabled' : 'js-enabled');
</script>

<header class="nhsuk-header nhsuk-header--organisation nhsuk-header--white nhsuk-header--white-nav" role="banner">

    <div class="nhsuk-header__container">
        <div class="nhsuk-header__logo">
            <a class="nhsuk-header__link" href="https://www.chesterfieldroyal.nhs.uk/" aria-label="Anytown Anyplace Anywhere NHS Foundation Trust homepage">
                <svg class="nhsuk-logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 16" height="40" width="100">
                    <path class="nhsuk-logo__background" fill="#005eb8" d="M0 0h40v16H0z"></path>
                    <path class="nhsuk-logo__text" fill="#fff" d="M3.9 1.5h4.4l2.6 9h.1l1.8-9h3.3l-2.8 13H9l-2.7-9h-.1l-1.8 9H1.1M17.3 1.5h3.6l-1 4.9h4L25 1.5h3.5l-2.7 13h-3.5l1.1-5.6h-4.1l-1.2 5.6h-3.4M37.7 4.4c-.7-.3-1.6-.6-2.9-.6-1.4 0-2.5.2-2.5 1.3 0 1.8 5.1 1.2 5.1 5.1 0 3.6-3.3 4.5-6.4 4.5-1.3 0-2.9-.3-4-.7l.8-2.7c.7.4 2.1.7 3.2.7s2.8-.2 2.8-1.5c0-2.1-5.1-1.3-5.1-5 0-3.4 2.9-4.4 5.8-4.4 1.6 0 3.1.2 4 .6"></path>
                </svg>

                <span class="nhsuk-organisation-name">Chesterfield <span class="nhsuk-organisation-name-split">Royal Hospital</span></span>
                <span class="nhsuk-organisation-descriptor">Map</span>
            </a>
        </div>

        <div class="nhsuk-header__content" id="content-header">
            <div class="nhsuk-header__search">
                <div class="nhsuk-header__search-wrap" id="wrap-search">
                    <form class="nhsuk-header__search-form" id="search" action=" " method="get" role="search">
                        <label class="nhsuk-u-visually-hidden" for="search-field">Search the NHS website</label>
                        <input class="nhsuk-search__input" id="search-field" name="search-field" type="search" placeholder="Search" autocomplete="off">
                        <button class="nhsuk-search__submit" type="submit">
                            <svg class="nhsuk-icon nhsuk-icon__search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                                <path d="M19.71 18.29l-4.11-4.1a7 7 0 1 0-1.41 1.41l4.1 4.11a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42zM5 10a5 5 0 1 1 5 5 5 5 0 0 1-5-5z"></path>
                            </svg>
                            <span class="nhsuk-u-visually-hidden">Search</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <div class="nhsuk-navigation-container">
        <nav class="nhsuk-navigation" id="header-navigation" role="navigation" aria-label="Primary navigation">
            <ul class="nhsuk-header__navigation-list">
                <li class="nhsuk-header__navigation-item">
                    <a class="nhsuk-header__navigation-link" href="index.php">
                        Our home page
                    </a>
                </li>
                <li class="nhsuk-header__navigation-item">
                    <a class="nhsuk-header__navigation-link" href="https://www.chesterfieldroyal.nhs.uk/application/files/5117/0004/6480/47878_Chesterfield_Hosp_Site_Map_A3.pdf">
                        Site map
                    </a>
                </li>
                <li class="nhsuk-header__navigation-item">
                    <a class="nhsuk-header__navigation-link" href="about_us.php">
                        About us
                    </a>
                </li>
                <li class="nhsuk-header__navigation-item">
                    <a class="nhsuk-header__navigation-link" href="staff_login.php">
                        Staff login
                    </a>
                </li>
                <li class="nhsuk-header__navigation-item">
                    <a class="nhsuk-header__navigation-link" href="admin_login.php">
                        Admin login
                    </a>
                </li>
                <li class="nhsuk-header__navigation-item">
                    <a class="nhsuk-header__navigation-link" href="path_find.php">
                        Path
                    </a>
                </li>
                <li class="nhsuk-header__navigation-item nhsuk-header__navigation-item--home">
                    <a class="nhsuk-header__navigation-link" href="/">
                        Home
                    </a>
                </li>
                <li class="nhsuk-mobile-menu-container">
                    <button class="nhsuk-header__menu-toggle nhsuk-header__navigation-link" id="toggle-menu" aria-expanded="false">
                        <span class="nhsuk-u-visually-hidden">Browse</span>
                        More
                        <svg class="nhsuk-icon nhsuk-icon__chevron-down" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                            <path d="M15.5 12a1 1 0 0 1-.29.71l-5 5a1 1 0 0 1-1.42-1.42l4.3-4.29-4.3-4.29a1 1 0 0 1 1.42-1.42l5 5a1 1 0 0 1 .29.71z"></path>
                        </svg>
                    </button>
                </li>
            </ul>
        </nav>
    </div>

</header>