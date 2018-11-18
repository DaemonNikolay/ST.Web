<?php

use mdm\admin\components\Helper;
use pceuropa\menu\Menu;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;
use app\assets\GeneralAsset;

GeneralAsset::register($this);
?>

<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= Yii::$app->name ?></title>
        <link rel="icon" href="/web/customAssets/general/img/favicon.ico">
        <?= Html::csrfMetaTags() ?>
        <?php $this->head() ?>
        <!-- Yandex.Metrika counter -->
        <script type="text/javascript">
            (function (d, w, c) {
                (w[c] = w[c] || []).push(function () {
                    try {
                        w.yaCounter50926319 = new Ya.Metrika2({
                            id: 50926319,
                            clickmap: true,
                            trackLinks: true,
                            accurateTrackBounce: true
                        });
                    } catch (e) {
                    }
                });

                var n = d.getElementsByTagName("script")[0],
                    s = d.createElement("script"),
                    f = function () {
                        n.parentNode.insertBefore(s, n);
                    };
                s.type = "text/javascript";
                s.async = true;
                s.src = "https://mc.yandex.ru/metrika/tag.js";

                if (w.opera == "[object Opera]") {
                    d.addEventListener("DOMContentLoaded", f, false);
                } else {
                    f();
                }
            })(document, window, "yandex_metrika_callbacks2");
        </script>
        <noscript>
            <div><img src="https://mc.yandex.ru/watch/50926319" style="position:absolute; left:-9999px;" alt="" /></div>
        </noscript>
        <!-- /Yandex.Metrika counter -->
    </head>
    <body>
    <?php $this->beginBody() ?>

    <!-- Box Window -->
    <div class="box_bars">
        <div class="top-bar">
            <a href="index.php" class="link-top-site animsition-link"><?= Yii::$app->name ?></a>
        </div>
        <div class="bottom-bar"></div>
        <div class="left-bar"></div>
        <div class="right-bar"></div>
    </div><!-- end Box Window -->

    <!-- border box -->
    <div class="cover-border">
        <div class="top-mask"></div>
        <div class="bottom-mask"></div>
        <div class="left-mask"></div>
        <div class="right-mask"></div>
    </div><!-- end border box -->

    <!-- loading -->
    <div class="body-loading">
        <div class="mid-content2">
            <div class="spinner"></div>
        </div>
    </div><!-- end loading -->

    <!-- btn togle menu -->
    <a href="#" class="trigger-menu" id="site-navigation-trigger">
        <div class="icon-container">
            <span class="navigation-line navigation-line01"></span>
            <span class="navigation-line navigation-line02"></span>
            <span class="navigation-line navigation-line03"></span>
        </div>
    </a><!-- end btn togle menu -->

    <!-- site navigation -->
    <div class="site-navigation" id="site-navigation-area">

        <div class="navigation-bg-over nav-01 active" data-holdbg="/web/customAssets/general/img/bg1.jpg"></div>
        <div class="navigation-bg-over nav-02" data-holdbg="/web/customAssets/general/img/bg2.jpg"></div>
        <div class="navigation-bg-over nav-03" data-holdbg="/web/customAssets/general/img/bg3.jpg"></div>
        <div class="navigation-bg-over nav-04" data-holdbg="/web/customAssets/general/img/bg4.jpg"></div>
        <div class="navigation-bg-over nav-05" data-holdbg="/web/customAssets/general/img/bg5.jpg"></div>
        <div class="navigation-bg-over nav-06" data-holdbg="/web/customAssets/general/img/client.jpg"></div>

        <div class="navigation-bg-mask">
            <div class="cover-border">
                <div class="top-mask"></div>
                <div class="bottom-mask"></div>
                <div class="left-mask"></div>
                <div class="right-mask"></div>
            </div>
        </div>

        <div class="mid-content-area">
            <div class="mid-content">
                <div class="hidden-sc">
                    <div id="main_menu">
                        <button id="back_menu" class="btn"><i class="ti-arrow-left"></i></button>
                        <?php

                        NavBar::begin(['brandLabel' => false]);
                        echo Nav::widget([
                            'options' => [
                                'class' => 'list-unstyled text-center',
                                'id' => 'menu_area'
                            ],
                            'items' => Helper::filter(Menu::NavbarLeft(1))
                        ]);
                        NavBar::end();

                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end site navigation -->

    <!-- site content -->
    <div class="site-content">
        <div class="animsition">

            <!-- block full screen -->
            <section class="page-full-window relative-pos bg-fixed bg-overfly soft" data-holdbg="/web/customAssets/general/img/bg1.jpg">
                <div class="mid-content2">
                    <div class="container text-center color-white">
                        <h1 class="super-md-font "><a href="about.html" class="color-white animsition-link">Good
                                morning,
                                Nikulux</a></h1>
                        <div class="simple-line"></div>
                        <p class="let-space-3">A new day for new achievements</p>
                    </div>
                </div>
            </section><!-- end block full screen -->

        </div><!-- end .animsition -->
    </div><!-- end site content -->

    <!-- site footer -->
    <div class="site-footer">
        <div class="contact-me">
            <a href="#">
                <i class="ti-new-window"></i> Contact Me
            </a>
        </div>
        <div class="social-icns">
            <a href="#">
                <i class="ti-facebook"></i>
            </a>
            <a href="#">
                <i class="ti-twitter-alt"></i>
            </a>
            <a href="#">
                <i class="ti-github"></i>
            </a>
        </div>
        <div class="text-center">Self-Testing V.3.1.0
            <a href="#" class="black_link strong" target="_blank">Nikulux</a>
        </div>
    </div><!-- end site footer -->

    <script type="application/javascript">
        window.addEventListener('load', function () {
            FastClick.attach(document.body);
        }, false);
    </script>

    <?php $this->endBody() ?>
    </body>
    </html>

<?php $this->endPage() ?>