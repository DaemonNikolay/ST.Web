<?php

use mdm\admin\components\Helper;
use pceuropa\menu\Menu;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

NavBar::begin(['brandLabel' => false]);

try {
    echo Nav::widget([
        'options' => [
            'class' => 'list-unstyled text-center',
            'id' => 'menu_area'
        ],
        'items' => Helper::filter(Menu::NavbarLeft(1))
    ]);
} catch (Exception $e) {
    echo $e;
}

NavBar::end();




<ul class="list-unstyled text-center" id="menu_area">
                            <li class="active">
                                <a href="index.html" data-hover="nav-01" class="animsition-link">Welcome </a>
                            </li>
                            <li class=""><a href="about.html" data-hover="nav-02" class="animsition-link">About-Me </a>
                            </li>
                            <li class="has-child"><a href="#" data-hover="nav-03">Projects
                                    <i class="ti-angle-double-right ic-ar"></i></a>
                                <ul>
                                    <li><a href="project_list_01.html" class="animsition-link">Project List 01</a></li>
                                    <li><a href="project_list_02.html" class="animsition-link">Project List 02</a></li>
                                    <li class="has-child"><a href="#">Project Details
<i class="ti-angle-double-right ic-ar"></i></a>
                                        <ul>
                                            <li><a href="project_single01.html" class="animsition-link">Project Single
                                                    01</a></li>
                                            <li><a href="project_single02.html" class="animsition-link">Project Single
                                                    02</a></li>
                                            <li class="has-child"><a href="#">Level 3
<i class="ti-angle-double-right ic-ar"></i></a>
                                                <ul>
                                                    <li><a href="#">Text Link 01</a></li>
                                                    <li><a href="#">Text Link 02</a></li>
                                                    <li><a href="#">Text Link 03</a></li>
                                                    <li><a href="#">Text Link 04</a></li>
                                                    <li><a href="#">Text Link 05</a></li>
                                                    <li><a href="#">Text Link 06</a></li>
                                                    <li><a href="#">Text Link 07</a></li>
                                                    <li><a href="#">Text Link 08</a></li>
                                                    <li><a href="#">End Link</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-child"><a href="#" data-hover="nav-04">Blog
                                    <i class="ti-angle-double-right ic-ar"></i></a>
                                <ul>
                                    <li><a href="blog_default.html" class="animsition-link">Blog Default</a></li>
                                    <li><a href="blog_sidebar.html" class="animsition-link">Blog Sidebar</a></li>
                                    <li class="has-child"><a href="#">Blog Details
<i class="ti-angle-double-right ic-ar"></i></a>
                                        <ul>
                                            <li><a href="blog_single01.html" class="animsition-link">Blog Single 01</a>
                                            </li>
                                            <li><a href="blog_single02.html" class="animsition-link">Blog Single 02</a>
                                            </li>
                                            <li><a href="theme_element.html" class="animsition-link">Theme Element</a>
                                            </li>
                                            <li><a href="404.html" data-hover="nav-06" class="animsition-link">404
                                                    Page</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class=""><a href="contact.html" data-hover="nav-05" class="animsition-link">Contact </a>
                            </li>
                        </ul>