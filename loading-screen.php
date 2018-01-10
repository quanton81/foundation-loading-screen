<!doctype html>
<html class="no-js" lang="en" dir="ltr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Loading Screen for Foundation</title>
        <link rel="stylesheet" href="css/foundation.css">
        <link rel="stylesheet" href="css/app.css">
        <link rel="stylesheet" href="foundation-icons/foundation-icons.css" />
        <style>
            .fi-loop {
                font-size: 2em;
                color: rgba(10, 10, 10, 0.75);
                text-shadow: 0px 0px 1px #FFF, 0px 0px 1px #FFF, 0px 0px 1px #FFF, 0px 0px 1px #FFF;
            }
            #wait-reveal {
                position: fixed;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                z-index: 1005;
                background-color: rgba(10, 10, 10, 0.45);
                overflow-y: scroll;
            }
            #wait-modal {
                background-color: transparent;
                border: none; 
                overflow: hidden;
                z-index: 1006;
                padding: 0;
                position: absolute;
                width: 4em;
                height: 4em;
                top: calc(50% - 2em);
                right: calc(50% - 2em);
                display: flex;
                align-items: center;
                justify-content: space-around;
                -webkit-animation: rotating 2s linear infinite; 
                -moz-animation: rotating 2s linear infinite;
                -ms-animation: rotating 2s linear infinite;
                -o-animation: rotating 2s linear infinite;
                animation: rotating 2s linear infinite; 
            }
            @-webkit-keyframes rotating {
                from   {
                    -webkit-transform: rotate(0deg);
                    -moz-transform: rotate(0deg);
                    -ms-transform: rotate(0deg);
                    -o-transform: rotate(0deg);
                    transform: rotate(0deg);}
                to  {
                    -webkit-transform: rotate(360deg);
                    -moz-transform: rotate(360deg);
                    -ms-transform: rotate(360deg);
                    -o-transform: rotate(360deg);
                    transform: rotate(360deg);}
            }
            /* Standard syntax */
            @keyframes rotating {
                from   {
                    -webkit-transform: rotate(0deg);
                    -moz-transform: rotate(0deg);
                    -ms-transform: rotate(0deg);
                    -o-transform: rotate(0deg);
                    transform: rotate(0deg);}
                to  {
                    -webkit-transform: rotate(360deg);
                    -moz-transform: rotate(360deg);
                    -ms-transform: rotate(360deg);
                    -o-transform: rotate(360deg);
                    transform: rotate(360deg);}
            }
        </style>
    </head>
    <body>
        <h1>Foundation Loading Screen</h1>
        <p>In this example it can be seen in action a loading screen, the loading screen will load on page load and disapear after a 3 seconds but in a real world scenario it can disapear after a resource loading with ajax or else.</p>
        <i>Attention: this example requires the use of Foundation icons</i>
        <div id="container"></div>
        <script src="js/vendor/jquery.js"></script>
        <script src="js/vendor/what-input.js"></script>
        <script src="js/vendor/foundation.js"></script>
        <script src="js/app.js"></script>
        <script>
            var wait = function (id) {
                $('#' + id).append('<div id="wait-reveal"><div id="wait-modal"><i class="fi-loop"></i></div></div>');
            };
            var done = function () {
                $("#wait-reveal").hide();
            };
            $(document).on("ready", function() {
                wait('container');
                setTimeout(function(){ done(); }, 3000);
            });
        </script>
    </body>
</html>
