<!doctype html>

<html lang="en">

    <head>

        {{-- General metas --}}
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="referrer" content="always">

        <title>Test!</title>

    </head>

    <body style="background: darkcyan">

        <style>

            .icon {
                display: inline-block;
                border-style: solid;
                border-width: 1px;
                border-color: white;
            }

            .burger-icon {
                width: 3.125rem;
            }

            .burger-icon:before,
            .burger-icon:after,
            .burger-icon>span {
                background-color: #FFF;
                border-radius: 3px;
                content: '';
                display: block;
                height: 5px;
                margin: 7px 0;
                transition: .3s;
            }

            .burger-icon:hover:before {
                transform: translateY(12px) rotate(135deg);
            }

            .burger-icon:hover:after {
                transform: translateY(-12px) rotate(-135deg);
            }

            .burger-icon:hover>span {
                transform: scale(0);
            }


            .s-icon {
                width: 3.125rem;
            }

            .s-icon,
            .s-icon:before,
            .s-icon:after {
                background-color: #FFF;
                border-radius: 3px;
                content: '';
                display: block;
                height: 5px;
                margin: 7px 0;
                transition: .3s;
            }

        </style>

        <div class="icon">
            <div class="burger-icon">
                <span></span>
            </div>
        </div>

        <div class="icon">
            <div class="s-icon"></div>
        </div>

    </body>

</html>
