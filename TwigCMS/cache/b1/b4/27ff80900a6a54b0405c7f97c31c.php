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
            'pages' => array($this, 'block_pages'),
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
                        <!-- ";
        // line 32
        $this->displayBlock('pages', $context, $blocks);
        // line 33
        echo " -->

                        ";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 36
            echo "                        ";
            if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "visible") == 1)) {
                // line 37
                echo "                        <li>
                            <a href=\"/";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url"), "html", null, true);
                echo "\" class=\"\">
                                <span>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "name"), "html", null, true);
                echo "</span>
                            </a>
                        </li>
                        ";
            }
            // line 43
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 44
        echo "

                    </ul>
                </div>

            </div>
        </nav>
    </header>
    <div id=\"layout-content\">
        <section class=\"home-title\">
            <div class=\"aside\">
            ";
        // line 55
        $this->displayBlock('sidebar', $context, $blocks);
        // line 57
        echo "                
                <!-- ";
        // line 58
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 59
            echo "                    <ul>
                        ";
            // line 60
            if (($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "visible") == 1)) {
                // line 61
                echo "                            <li>
                                <a href=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "url"), "html", null, true);
                echo "\" class=\"\">
                                    <span>";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name"), "html", null, true);
                echo "</span>
                                </a>
                            </li>
                        ";
            }
            // line 67
            echo "                    </ul>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 68
        echo " -->
                
            </div>
            <div class=\"contain\">
                ";
        // line 72
        $this->displayBlock('content', $context, $blocks);
        // line 74
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

    // line 32
    public function block_pages($context, array $blocks = array())
    {
        // line 33
        echo "                        ";
    }

    // line 55
    public function block_sidebar($context, array $blocks = array())
    {
        // line 56
        echo "            ";
    }

    // line 72
    public function block_content($context, array $blocks = array())
    {
        // line 73
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
        return array (  181 => 73,  178 => 72,  174 => 56,  171 => 55,  167 => 33,  164 => 32,  159 => 4,  148 => 74,  146 => 72,  140 => 68,  133 => 67,  126 => 63,  122 => 62,  119 => 61,  117 => 60,  114 => 59,  110 => 58,  107 => 57,  105 => 55,  92 => 44,  86 => 43,  79 => 39,  75 => 38,  72 => 37,  69 => 36,  65 => 35,  61 => 33,  59 => 32,  28 => 4,  23 => 1,);
    }
}
