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
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta http-equiv=\"Content-Type\" content=\"text/html;charset=UTF-8\"/>
        <link href=\"/admin/theme/assets/css/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
        <link href=\"/admin/theme/assets/css/flat-ui.css\" rel=\"stylesheet\">
        <link rel=\"shortcut icon\" href=\"../assets/img/favicon.ico\">
    </head>
    <body class=\"page-home layout-default\">
    <header class=\"header-navbar clearfix\">
        <nav class=\"navbar navbar-inverse navbar-fixed-top\">
            <div class=\"container\">
                <div class=\"collapse navbar-collapse navbar-main-collapse\">
                    <a class=\"navbar-brand\" href=\"/\">TwigCMS</a>
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li class=\" \">
                            <a href=\"/\" class=\"\">
                                Главная
                            </a>
                        </li>
                        <li class=\" \">
                            <a href=\"/admin/products/\" class=\"\">
                                Catalog
                            </a>
                        </li>
                        <li class=\"dropdown\">
                            <a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">
                                Pages
                                <span class=\"caret\"></span>
                            </a>
                            <span class=\"dropdown-arrow\"></span>
                            <ul class=\"dropdown-menu\">
                                <li class=\" \">
                                    <a href=\"http://twigcms/about\" class=\"\">
                                        About Us
                                    </a>
                                </li>
                                <li class=\" \">
                                    <a href=\"http://twigcms/contact\" class=\"\">
                                        Contact Us
                                    </a>
                                </li>
                                <li class=\" \">
                                    <a href=\"http://twigcms/pricing-table\" class=\"\">
                                        Pricing Table
                                    </a>
                                </li>
                                <li class=\" \">
                                    <a href=\"http://twigcms/services\" class=\"\">
                                        Services
                                    </a>
                                </li>
                                <li class=\" \">
                                    <a href=\"http://twigcms/login\" class=\"\">
                                        Login
                                    </a>
                                </li>
                                <li class=\" \">
                                    <a href=\"http://twigcms/register\" class=\"\">
                                        Register
                                    </a>
                                </li>
                                <li class=\" \">
                                    <a href=\"http://twigcms/error\" class=\"\">
                                        Error Page
                                    </a>
                                </li>
                                <li class=\" \">
                                    <a href=\"http://twigcms/404\" class=\"\">
                                        404 Page
                                    </a>
                                </li>

                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div id=\"layout-content\">
        <section class=\"home-title\">
            <div class=\"container\">
                ";
        // line 86
        $this->displayBlock('content', $context, $blocks);
        // line 88
        echo "            </div>
        </section>
    </div>
    
    </body>
    <script src=\"/admin/theme/assets/js/vendor/jquery.min.js\"></script>
    <script src=\"/admin/theme/assets/js/flat-ui.min.js\"></script>
</html>";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
    }

    // line 86
    public function block_content($context, array $blocks = array())
    {
        // line 87
        echo "                ";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function getDebugInfo()
    {
        return array (  132 => 87,  129 => 86,  124 => 4,  113 => 88,  111 => 86,  26 => 4,  21 => 1,);
    }
}
