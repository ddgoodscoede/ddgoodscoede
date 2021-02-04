<!doctype html>

<html lang="{{ $page->language ?? 'ru' }}">

    <head>

        {{-- General metas --}}
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="referrer" content="always">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">

        <title>Bulma!</title>

    </head>

    <body class="has-navbar-fixed-top">

        <nav class="navbar is-fixed-top">
            <div class="navbar-brand">
                <a class="navbar-item" href="https://bulma.io">
                    <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
                </a>

                <a class="navbar-burger">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>

            <div class="navbar-menu is-active">
                <div class="navbar-start">
                    <a class="navbar-item">Home</a>
                    <a class="navbar-item">Documentation</a>

                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link">More</a>
                        <div class="navbar-dropdown">
                            <a class="navbar-item">About</a>
                            <a class="navbar-item">Jobs</a>
                            <a class="navbar-item">Contact</a>
                            <hr class="navbar-divider">
                            <a class="navbar-item">Report an issue</a>
                        </div>
                    </div>
                </div>

                <div class="navbar-end">
                    <div class="navbar-item">
                        <div class="buttons">
                            <a class="button is-primary"><strong>Sign up</strong></a>
                            <a class="button is-light">Log in</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <section>
            <div class="container">
                <h1 class="title is-1">Bulma!</h1>
                <div class="content" style="max-width: 65ch;">
                    <x-lorem/>
                </div>
            </div>
        </section>

    </body>

</html>
