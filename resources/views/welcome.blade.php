<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Task Sprint</title>
        <meta charset="utf-8" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="shortcut icon" href="assets/media/logos/favicon.png" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet" />
        <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/welcome.css" rel="stylesheet" type="text/css" />

        <style></style>
    </head>

    <body>
        <div class="wrapper">
            <div class="home">
                <a class="logo_link_block" href="{{ url('/') }}">
                    <img alt="Logo" src="assets/media/logos/logo.png" class="h-75px text-center" />
                </a>
                <div class="animation-example">
                    <div class="item">
                        <div class="line"></div>
                        <div class="dot"></div>
                        <div class="circle"></div>
                    </div>
                    <div class="item">
                        <div class="line"></div>
                        <div class="dot"></div>
                        <div class="circle"></div>
                    </div>
                    <div class="item">
                        <div class="line"></div>
                        <div class="dot"></div>
                        <div class="circle"></div>
                    </div>
                    <div class="item">
                        <div class="line"></div>
                        <div class="dot"></div>
                        <div class="circle"></div>
                    </div>
                    <div class="item -type2">
                        <div class="line"></div>
                        <div class="dot"></div>
                        <div class="circle"></div>
                    </div>
                    <div class="item -type2">
                        <div class="line"></div>
                        <div class="dot"></div>
                        <div class="circle"></div>
                    </div>
                    <div class="item -type2">
                        <div class="line"></div>
                        <div class="dot"></div>
                        <div class="circle"></div>
                    </div>
                    <div class="item -type2">
                        <div class="line"></div>
                        <div class="dot"></div>
                        <div class="circle"></div>
                    </div>
                    <div class="center">
                        <div class="circle"></div>
                        <div class="circle"></div>
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
          <div class="mt-4">
            <a class="button-animation" href="{{ route('login') }}"> Get Started</a>
                     
          </div>
        
        <script>
            // const button = document.querySelector('button')
            // console.log(button)

            // window.addEventListener('mousemove', (e) => {
            // console.log(e.clientX, e.clientY)
            // button.style.backgroundPosition = `bottom ${-e.clientY/25}%  right ${-e.clientX/25}%`
            // })
        </script>
    </body>
</html>
