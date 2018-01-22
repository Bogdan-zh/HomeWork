<?php

/* index.html */
class __TwigTemplate_2defbef4fd1e00818a033facc3364c3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE>
<html>
    <head>
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta http-equiv=\"Content-Type\" content=\"text/html;charset=UTF-8\"/>
        <link href=\"/theme/assets/css/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
        <link href=\"https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css\" rel=\"stylesheet\">
        <link href=\"/theme/assets/css/flat-ui.min.css\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"/admin/theme/assets/css/style.css\">
    </head>
    <body class=\"page-home layout-default\">
    <header class=\"header-navbar clearfix\">
        <nav class=\"navbar navbar-inverse navbar-fixed-top\">
            <div class=\"containe\">

                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                        <ul class=\"nav navbar-nav navbar-left menu\">
                            <a class=\"navbar-brand\" href=\"/admin/\">TwigCMS</a>
                            <li class=\"go_to_site\">
                                <a href=\"/\">Перейти на сайт</a>
                            </li>
                            
                        </ul>
                        <!-- <ul class=\"nav navbar-nav navbar-right menu\">
                            <li class=\"dropdown\">
                                <a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">
                                    Pages
                                    <span class=\"caret\"></span>
                                </a>
                                <span class=\"dropdown-arrow\"></span>
                                <ul class=\"dropdown-menu\">
                                    <li class=\" \">
                                        <a href=\"http://october/about\" class=\"\">
                                            About Us
                                        </a>
                                    </li>
                                    <li class=\" \">
                                        <a href=\"http://october/contact\" class=\"\">
                                            Contact Us
                                        </a>
                                    </li>
                                    <li class=\" \">
                                        <a href=\"http://october/pricing-table\" class=\"\">
                                            Pricing Table
                                        </a>
                                    </li>
                                    <li class=\" \">
                                        <a href=\"http://october/services\" class=\"\">
                                            Services
                                        </a>
                                    </li>
                                    <li class=\" \">
                                        <a href=\"http://october/signin\" class=\"\">
                                            Sign In
                                        </a>
                                    </li>
                                    <li class=\" \">
                                        <a href=\"http://october/register\" class=\"\">
                                            Register
                                        </a>
                                    </li>
                                    <li class=\" \">
                                        <a href=\"http://october/error\" class=\"\">
                                            Error Page
                                        </a>
                                    </li>
                                    <li class=\" \">
                                        <a href=\"http://october/404\" class=\"\">
                                            404 Page
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul> -->
                    </ul>
                </div>

            </div>
        </nav>
    </header>


        
        <div id=\"layout-content\">
            <section class=\"home-title\">
                <div class=\"aside\">
                    <ul>
                        <!-- <li class=\" \">
                            <a href=\"/admin\" class=\"\">
                                Главная
                            </a>
                        </li> -->
                        <li class=\" \">
                            <a href=\"/admin/products\" class=\"\">
                                <span>Товары</span>
                                <img src=\"/theme/assets/img/cart.png\" alt=\"\" width=\"28\" height=\"28\">
                            </a>
                        </li>
                        <li class=\" \">
                            <a href=\"/admin/categories\" class=\"\">
                                <span>Категории</span>
                                <img src=\"/theme/assets/img/categories.png\" alt=\"\" width=\"28\" height=\"28\">
                            </a>
                        </li>
                        <li class=\" \">
                            <a href=\"/admin/pages\" class=\"\">
                                <span>Страницы</span>
                                <img src=\"/theme/assets/img/pages.png\" alt=\"\" width=\"25\" height=\"28\">
                            </a>
                        </li>
                        
                    </ul>
                </div>
                <div class=\"contain\">
                    ";
        // line 124
        $this->displayBlock('content', $context, $blocks);
        // line 126
        echo "                </div>
            </section>
        </div>


    </body>
    <script src=\"/admin/theme/assets/js/vendor/jquery.min.js\"></script>
    <script src=\"/admin/theme/assets/js/flat-ui.min.js\"></script>
    <script src=\"https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js\"></script>
</html>";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
    }

    // line 124
    public function block_content($context, array $blocks = array())
    {
        // line 125
        echo "                    ";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function getDebugInfo()
    {
        return array (  172 => 125,  169 => 124,  164 => 4,  151 => 126,  149 => 124,  26 => 4,  21 => 1,);
    }
}
