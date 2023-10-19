<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title><?= $title; ?></title>

    <!-- CSS files -->
    <link rel="icon" href="<?= base_url('assets'); ?>/dist/img/gambarnew.png" alt="" width="150" height="50" type="image/x-icon">
    <link href="<?= base_url('assets'); ?>/dist/css/tabler.min.css?1692870487" rel="stylesheet" />
    <link href="<?= base_url('assets'); ?>/dist/css/tabler-flags.min.css?1692870487" rel="stylesheet" />
    <link href="<?= base_url('assets'); ?>/dist/css/tabler-payments.min.css?1692870487" rel="stylesheet" />
    <link href="<?= base_url('assets'); ?>/dist/css/tabler-vendors.min.css?1692870487" rel="stylesheet" />
    <link href="<?= base_url('assets'); ?>/dist/css/demo.min.css?1692870487" rel="stylesheet" />
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
</head>

<body>
    <script src="<?= base_url('assets'); ?>/dist/js/demo-theme.min.js?1692870487"></script>
    <div class="page">
        <!-- Navbar -->
        <header class="navbar-expand-md">
            <div class="collapse navbar-collapse" id="navbar-menu">
                <div class="navbar">
                    <div class="container-xl">
                        <ul class="navbar-nav">

                            <li class="nav-item active">
                                <a class="nav-link" href="<?= base_url('dashboard'); ?>">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                                            <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                            <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                                        </svg>
                                    </span>
                                    <span class="nav-link-title">
                                        Dashboard
                                    </span>
                                </a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/package -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 3l8 4.5l0 9l-8 4.5l-8 -4.5l0 -9l8 -4.5" />
                                            <path d="M12 12l8 -4.5" />
                                            <path d="M12 12l0 9" />
                                            <path d="M12 12l-8 -4.5" />
                                            <path d="M16 5.25l-8 4.5" />
                                        </svg>
                                    </span>
                                    <span class="nav-link-title">
                                        Sales
                                    </span>
                                </a>
                                <div class="dropdown-menu">
                                    <div class="dropdown-menu-columns">
                                        <div class="dropdown-menu-column">
                                            <a class="dropdown-item" href="./alerts.html">
                                                Alerts
                                            </a>
                                            <a class="dropdown-item" href="./accordion.html">
                                                Accordion
                                            </a>
                                            <div class="dropend">
                                                <a class="dropdown-item dropdown-toggle" href="#sidebar-authentication" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
                                                    Authentication
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a href="./sign-in.html" class="dropdown-item">
                                                        Sign in
                                                    </a>
                                                    <a href="./sign-in-link.html" class="dropdown-item">
                                                        Sign in link
                                                    </a>
                                                    <a href="./sign-in-illustration.html" class="dropdown-item">
                                                        Sign in with illustration
                                                    </a>
                                                    <a href="./sign-in-cover.html" class="dropdown-item">
                                                        Sign in with cover
                                                    </a>
                                                    <a href="./sign-up.html" class="dropdown-item">
                                                        Sign up
                                                    </a>
                                                    <a href="./forgot-password.html" class="dropdown-item">
                                                        Forgot password
                                                    </a>
                                                    <a href="./terms-of-service.html" class="dropdown-item">
                                                        Terms of service
                                                    </a>
                                                    <a href="./auth-lock.html" class="dropdown-item">
                                                        Lock screen
                                                    </a>
                                                    <a href="./2-step-verification.html" class="dropdown-item">
                                                        2 step verification
                                                    </a>
                                                    <a href="./2-step-verification-code.html" class="dropdown-item">
                                                        2 step verification code
                                                    </a>
                                                </div>
                                            </div>
                                            <a class="dropdown-item" href="./blank.html">
                                                Blank page
                                            </a>
                                            <a class="dropdown-item" href="./badges.html">
                                                Badges
                                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                            </a>
                                            <a class="dropdown-item" href="./buttons.html">
                                                Buttons
                                            </a>
                                            <div class="dropend">
                                                <a class="dropdown-item dropdown-toggle" href="#sidebar-cards" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
                                                    Cards
                                                    <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a href="./cards.html" class="dropdown-item">
                                                        Sample cards
                                                    </a>
                                                    <a href="./card-actions.html" class="dropdown-item">
                                                        Card actions
                                                        <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                                    </a>
                                                    <a href="./cards-masonry.html" class="dropdown-item">
                                                        Cards Masonry
                                                    </a>
                                                </div>
                                            </div>
                                            <a class="dropdown-item" href="./carousel.html">
                                                Carousel
                                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                            </a>
                                            <a class="dropdown-item" href="./charts.html">
                                                Charts
                                            </a>
                                            <a class="dropdown-item" href="./colors.html">
                                                Colors
                                            </a>
                                            <a class="dropdown-item" href="./colorpicker.html">
                                                Color picker
                                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                            </a>
                                            <a class="dropdown-item" href="./datagrid.html">
                                                Data grid
                                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                            </a>
                                            <a class="dropdown-item" href="<?= base_url('dashboard/tabel'); ?>">
                                                Datatables
                                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                            </a>
                                            <a class="dropdown-item" href="./dropdowns.html">
                                                Dropdowns
                                            </a>
                                            <a class="dropdown-item" href="./dropzone.html">
                                                Dropzone
                                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                            </a>
                                            <div class="dropend">
                                                <a class="dropdown-item dropdown-toggle" href="#sidebar-error" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
                                                    Error pages
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a href="./error-404.html" class="dropdown-item">
                                                        404 page
                                                    </a>
                                                    <a href="./error-500.html" class="dropdown-item">
                                                        500 page
                                                    </a>
                                                    <a href="./error-maintenance.html" class="dropdown-item">
                                                        Maintenance page
                                                    </a>
                                                </div>
                                            </div>
                                            <a class="dropdown-item" href="./flags.html">
                                                Flags
                                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                            </a>
                                            <a class="dropdown-item" href="./inline-player.html">
                                                Inline player
                                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                            </a>
                                        </div>
                                        <div class="dropdown-menu-column">
                                            <a class="dropdown-item" href="./lightbox.html">
                                                Lightbox
                                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                            </a>
                                            <a class="dropdown-item" href="./lists.html">
                                                Lists
                                            </a>
                                            <a class="dropdown-item" href="<?= base_url('dashboard/modal'); ?>">
                                                Modal
                                            </a>
                                            <a class="dropdown-item" href="./maps.html">
                                                Map
                                            </a>
                                            <a class="dropdown-item" href="./map-fullsize.html">
                                                Map fullsize
                                            </a>
                                            <a class="dropdown-item" href="./maps-vector.html">
                                                Map vector
                                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                            </a>
                                            <a class="dropdown-item" href="./markdown.html">
                                                Markdown
                                            </a>
                                            <a class="dropdown-item" href="./navigation.html">
                                                Navigation
                                            </a>
                                            <a class="dropdown-item" href="./offcanvas.html">
                                                Offcanvas
                                            </a>
                                            <a class="dropdown-item" href="./pagination.html">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/pie-chart -->
                                                Pagination
                                            </a>
                                            <a class="dropdown-item" href="./placeholder.html">
                                                Placeholder
                                            </a>
                                            <a class="dropdown-item" href="./steps.html">
                                                Steps
                                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                            </a>
                                            <a class="dropdown-item" href="./stars-rating.html">
                                                Stars rating
                                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                            </a>
                                            <a class="dropdown-item" href="./tabs.html">
                                                Tabs
                                            </a>
                                            <a class="dropdown-item" href="./tags.html">
                                                Tags
                                            </a>
                                            <a class="dropdown-item" href="./tables.html">
                                                Tables
                                            </a>
                                            <a class="dropdown-item" href="./typography.html">
                                                Typography
                                            </a>
                                            <a class="dropdown-item" href="./tinymce.html">
                                                TinyMCE
                                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#navbar-extra" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                                        </svg>
                                    </span>
                                    <span class="nav-link-title">
                                        Purchase
                                    </span>
                                </a>
                                <div class="dropdown-menu">
                                    <div class="dropdown-menu-columns">
                                        <div class="dropdown-menu-column">
                                            <a class="dropdown-item" href="<?= base_url('purchase'); ?>">
                                                Empty page
                                            </a>
                                            <a class="dropdown-item" href="./cookie-banner.html">
                                                Cookie banner
                                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                            </a>
                                            <a class="dropdown-item" href="./chat.html">
                                                Chat
                                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                            </a>
                                            <a class="dropdown-item" href="./activity.html">
                                                Activity
                                            </a>
                                            <a class="dropdown-item" href="./gallery.html">
                                                Gallery
                                            </a>
                                            <a class="dropdown-item" href="./invoice.html">
                                                Invoice
                                            </a>
                                            <a class="dropdown-item" href="./search-results.html">
                                                Search results
                                            </a>
                                            <a class="dropdown-item" href="./pricing.html">
                                                Pricing cards
                                            </a>
                                            <a class="dropdown-item" href="./pricing-table.html">
                                                Pricing table
                                            </a>
                                            <a class="dropdown-item" href="./faq.html">
                                                FAQ
                                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                            </a>
                                            <a class="dropdown-item" href="./users.html">
                                                Users
                                            </a>
                                            <a class="dropdown-item" href="./license.html">
                                                License
                                            </a>
                                        </div>
                                        <div class="dropdown-menu-column">
                                            <a class="dropdown-item" href="./logs.html">
                                                Logs
                                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                            </a>
                                            <a class="dropdown-item" href="./music.html">
                                                Music
                                            </a>
                                            <a class="dropdown-item" href="./photogrid.html">
                                                Photogrid
                                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                            </a>
                                            <a class="dropdown-item" href="./tasks.html">
                                                Tasks
                                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                            </a>
                                            <a class="dropdown-item" href="./uptime.html">
                                                Uptime monitor
                                            </a>
                                            <a class="dropdown-item" href="./widgets.html">
                                                Widgets
                                            </a>
                                            <a class="dropdown-item" href="./wizard.html">
                                                Wizard
                                            </a>
                                            <a class="dropdown-item" href="./settings.html">
                                                Settings
                                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                            </a>
                                            <a class="dropdown-item" href="./trial-ended.html">
                                                Trial ended
                                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                            </a>
                                            <a class="dropdown-item" href="./job-listing.html">
                                                Job listing
                                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                            </a>
                                            <a class="dropdown-item" href="./page-loader.html">
                                                Page loader
                                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#navbar-layout" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/layout-2 -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M4 4m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v1a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                                            <path d="M4 13m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                                            <path d="M14 4m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                                            <path d="M14 15m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v1a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                                        </svg>
                                    </span>
                                    <span class="nav-link-title">
                                        Inventory
                                    </span>
                                </a>
                                <div class="dropdown-menu">
                                    <div class="dropdown-menu-columns">
                                        <div class="dropdown-menu-column">
                                            <a class="dropdown-item" href="./layout-horizontal.html">
                                                Horizontal
                                            </a>
                                            <a class="dropdown-item" href="./layout-boxed.html">
                                                Boxed
                                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                            </a>
                                            <a class="dropdown-item" href="./layout-vertical.html">
                                                Vertical
                                            </a>
                                            <a class="dropdown-item" href="./layout-vertical-transparent.html">
                                                Vertical transparent
                                            </a>
                                            <a class="dropdown-item" href="./layout-vertical-right.html">
                                                Right vertical
                                            </a>
                                            <a class="dropdown-item" href="./layout-condensed.html">
                                                Condensed
                                            </a>
                                            <a class="dropdown-item" href="./layout-combo.html">
                                                Combined
                                            </a>
                                        </div>
                                        <div class="dropdown-menu-column">
                                            <a class="dropdown-item" href="./layout-navbar-dark.html">
                                                Navbar dark
                                            </a>
                                            <a class="dropdown-item" href="./layout-navbar-sticky.html">
                                                Navbar sticky
                                            </a>
                                            <a class="dropdown-item" href="./layout-navbar-overlap.html">
                                                Navbar overlap
                                            </a>
                                            <a class="dropdown-item" href="./layout-rtl.html">
                                                RTL mode
                                            </a>
                                            <a class="dropdown-item" href="./layout-fluid.html">
                                                Fluid
                                            </a>
                                            <a class="dropdown-item" href="./layout-fluid-vertical.html">
                                                Fluid vertical
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="my-2 my-md-0 flex-grow-1 flex-md-grow-0 order-first order-md-last">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#navbar-extra" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
                                        <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-framer-motion" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M12 12l-8 -8v16l16 -16v16l-4 -4"></path>
                                                <path d="M20 12l-8 8l-4 -4"></path>
                                            </svg>
                                        </span>
                                        <span class="nav-link-title">
                                            Master
                                        </span>
                                    </a>
                                    <div class="dropdown-menu">
                                        <div class="dropdown-menu-columns">
                                            <div class="dropdown-menu-column">
                                                <a class="dropdown-item" href="<?= base_url('dashboard/regis'); ?>">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                                                        <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                                        <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                                                    </svg>
                                                    <span class="nav-link-title">
                                                        User <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">Setting</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <div class="d-none d-md-flex">
                                    <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="Enable dark mode" data-bs-toggle="tooltip" data-bs-placement="bottom">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
                                        </svg>
                                    </a>
                                    <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode" data-bs-toggle="tooltip" data-bs-placement="bottom">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                            <path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" />
                                        </svg>
                                    </a>

                                </div>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                                        <span class="avatar avatar-sm" style="background-image: url(<?= base_url('assets'); ?>/static/avatars/000m.jpg)"></span>
                                        <div class="d-none d-xl-block ps-2">
                                            <div><?= $user['name']; ?></div>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <a href="<?= base_url('auth/logout') ?>" class="dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-run" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M13 4m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                                <path d="M4 17l5 1l.75 -1.5"></path>
                                                <path d="M15 21l0 -4l-4 -3l1 -6"></path>
                                                <path d="M7 12l0 -3l5 -1l3 3l3 1"></path>
                                            </svg>Logout</a>
                                    </div>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>