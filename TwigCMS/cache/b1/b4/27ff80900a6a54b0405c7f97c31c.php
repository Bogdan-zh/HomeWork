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
            'sidebar' => array($this, 'block_sidebar'),
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
        <link href=\"/theme/assets/css/flat-ui.min.css\" rel=\"stylesheet\">
        <link href=\"/theme/assets/css/style.css\" rel=\"stylesheet\">
    </head>
    <body class=\"\">
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
                        <a class=\"navbar-brand\" href=\"/\">Twig Shop</a>
                        <li class=\"go_to_site\">
                            <a href=\"/admin/\">Перейти в админку</a>
                        </li>
                    </ul>
                    <ul class=\"nav navbar-nav navbar-left menu\">
                        ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 33
            echo "                            ";
            if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "visible") == 1)) {
                // line 34
                echo "                            <li>
                                <a href=\"/";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url"), "html", null, true);
                echo "\" class=\"\">
                                    <span>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "name"), "html", null, true);
                echo "</span>
                                </a>
                            </li>
                            ";
            }
            // line 40
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 41
        echo "                    </ul>
                </div>

            </div>
        </nav>
    </header>
    <div id=\"layout-content\">
        <section class=\"home-title\">
            <div class=\"aside\">
                ";
        // line 50
        $this->displayBlock('sidebar', $context, $blocks);
        // line 52
        echo "            </div>
            <div class=\"contain\">
                ";
        // line 54
        $this->displayBlock('content', $context, $blocks);
        // line 56
        echo "            </div>
        </section>
    </div>
    <script src=\"/theme/assets/js/vendor/jquery.min.js\"></script>
    <script src=\"/theme/assets/js/flat-ui.min.js\"></script>
</body>

</html>";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
    }

    // line 50
    public function block_sidebar($context, array $blocks = array())
    {
        // line 51
        echo "                ";
    }

    // line 54
    public function block_content($context, array $blocks = array())
    {
        // line 55
        echo "                ";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 55,  123 => 51,  120 => 50,  115 => 4,  102 => 54,  98 => 52,  96 => 50,  85 => 41,  79 => 40,  72 => 36,  68 => 35,  65 => 34,  62 => 33,  58 => 32,  27 => 4,  22 => 1,  168 => 63,  162 => 62,  155 => 58,  151 => 57,  148 => 56,  145 => 55,  141 => 54,  137 => 52,  134 => 51,  127 => 54,  121 => 44,  118 => 43,  116 => 42,  110 => 39,  104 => 56,  100 => 34,  94 => 32,  90 => 30,  88 => 29,  81 => 26,  78 => 25,  74 => 24,  66 => 20,  63 => 19,  55 => 14,  48 => 10,  44 => 9,  41 => 8,  38 => 7,  33 => 6,  30 => 5,);
    }
}
