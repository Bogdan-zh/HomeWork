<?php

/* index.html */
class __TwigTemplate_b1b427ff80900a6a54b0405c7f97c31c extends Twig_Template
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
    <link href=\"theme/assets/css/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"theme/assets/css/flat-ui.css\" rel=\"stylesheet\">
</head>
<body class=\"page-home layout-default\">
    <header class=\"header-navbar clearfix\">
        <nav class=\"navbar navbar-inverse navbar-fixed-top\">
            <div class=\"container\">

                <div class=\"collapse navbar-collapse navbar-main-collapse\">
                    <a class=\"navbar-brand\" href=\"/\">TwigCMS</a>
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li class=\"\">
                            <a href=\"/\" class=\"\">
                                Главная
                            </a>
                        </li>
                        <li class=\" \">
                            <a href=\"/admin/\" class=\"\">
                                Админка
                            </a>
                        </li>
                        <li class=\" \">
                            <a href=\"/products\" class=\"\">
                                Catalog
                            </a>
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
        // line 41
        $this->displayBlock('content', $context, $blocks);
        // line 43
        echo "            </div>
        </section>
    </div>
</body>
</html>";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
    }

    // line 41
    public function block_content($context, array $blocks = array())
    {
        // line 42
        echo "                ";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function getDebugInfo()
    {
        return array (  84 => 42,  81 => 41,  76 => 4,  68 => 43,  66 => 41,  26 => 4,  21 => 1,  31 => 4,  28 => 3,);
    }
}
