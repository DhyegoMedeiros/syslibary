<?php require 'assets/config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <style>
        html, body {
            height: 100%;
            overflow: hidden;
        }

        .error-page {
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            height: 100%;
            font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
        }

        .error-page h1 {
            font-size: 30vh;
            font-weight: bold;
            position: relative;
            margin: -8vh 0 0;
            padding: 0;
        }

        .error-page h1:after {
            content: attr(data-h1);
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            color: transparent;
            /* webkit only for graceful degradation to IE */
            background: -webkit-repeating-linear-gradient(
                -45deg,
                #71b7e6,
                #69a6ce,
                #b98acc,
                #ee8176,
                #b98acc,
                #69a6ce,
                #9b59b6
            );
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-size: 400%;
            text-shadow: 1px 1px 2px transparentize(#fff, 0.75);
            animation: animateTextBackground 10s ease-in-out infinite;
        }

        .error-page h1 + p {
            color: #d6d6d6;
            font-size: 8vh;
            font-weight: bold;
            line-height: 10vh;
            max-width: 600px;
            position: relative;
        }

        .error-page h1 + p:after {
            content: attr(data-p);
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            color: transparent;
            text-shadow: 1px 1px 2px transparentize(#fff, 0.5);
            -webkit-background-clip: text;
            -moz-background-clip: text;
            background-clip: text;
        }

        #tsparticles {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
        }

        @keyframes animateTextBackground {
            0% {
                background-position: 0 0;
            }

            25% {
                background-position: 100% 0;
            }

            50% {
                background-position: 100% 100%;
            }

            75% {
                background-position: 0 100%;
            }

            100% {
                background-position: 0 0;
            }
        }

        @media (max-width: 767px) {
            .error-page h1 {
                font-size: 32vw;
            }

            .error-page h1 + p {
                font-size: 8vw;
                line-height: 10vw;
                max-width: 70vw;
            }
        }

        a.back {
            z-index: 2;
            position: fixed;
            right: 40px;
            bottom: 40px;
            background: -webkit-repeating-linear-gradient(-45deg, #71b7e6, #69a6ce, #b98acc, #ee8176);
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            line-height: 24px;
            padding: 15px 30px;
            text-decoration: none;
            transition: 0.25s all ease-in-out;
        }

        a.back:hover {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.4);
        }
    </style>
</head>
<body>
    <div class="error-page">
        <div>
            <h1 data-h1="404">404</h1>
            <p data-p="NOT FOUND">PÁGINA NÃO ENCONTRADA</p>
        </div>
    </div>
    <a href="<?php echo $host;?>" class="back">VOLTAR</a>
    <div id="tsparticles"></div>
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/tsparticles@2.3.4/tsparticles.bundle.min.js"></script>
    <script type="text/javascript">
        tsParticles.load("tsparticles", {
            fpsLimit: 60,
            particles: {
                number: {
                    value: 5,
                    density: {
                        enable: true,
                        area: 800
                    }
                },
                color: {
                    value: "#fcfcfc"
                },
                shape: {
                    type: "circle"
                },
                opacity: {
                    value: 0.5,
                    random: {
                        enable: true,
                        minimumValue: 0.1
                    },
                },
                size: {
                    value: 140,
                    random: {
                        enable: true,
                        minimumValue: 40
                    },
                    animation: {
                        enable: true,
                        speed: 10,
                        minimumValue: 40,
                        sync: false
                    }
                },
                move: {
                    enable: true,
                    speed: 4,
                    direction: "none",
                    random: false,
                    straight: false,
                    outModes: {
                        default: "out"
                    }
                }
            },
            interactivity: {
                detectsOn: "canvas",
                events: {
                    resize: true
                }
            },
            detectRetina: true
        });
        document.addEventListener('DOMContentLoaded', function () {
    var botaoVoltar = document.querySelector('.back');
    botaoVoltar.addEventListener('click', function (event) {
        console.log('Botão "VOLTAR" clicado.');
    });
});
    </script>
</body>
</html>