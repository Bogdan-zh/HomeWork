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
        echo "<!DOCTYPE>
<html>
    <head>
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta http-equiv=\"Content-Type\" content=\"text/html;charset=UTF-8\"/>
        <link href=\"theme/assets/css/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
        <link href=\"theme/assets/css/flat-ui.min.css\" rel=\"stylesheet\">
        <link href=\"theme/assets/css/style.css\" rel=\"stylesheet\">
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
                        <a class=\"navbar-brand\" href=\"/\">TwigCMS</a>
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
                echo "                                <li>
                                    <a href=\"";
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
        echo "                        
                        
                    </ul>
                    <ul class=\"nav navbar-nav navbar-right menu\">
                        <li><a href=\"login\">Login</a></li>
                        <li><a href=\"register\">Registration</a></li>
                    </ul>
                </div>

            </div>
        </nav>
    </header>
    <div id=\"layout-content\">
        <section class=\"home-title\">
            <div class=\"aside\">
                
                ";
        // line 57
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 58
            echo "                    <ul>
                        ";
            // line 59
            if (($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "visible") == 1)) {
                // line 60
                echo "                            <li>
                                <a href=\"catalog/";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "url"), "html", null, true);
                echo "\" class=\"\">
                                    <span>";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name"), "html", null, true);
                echo "</span>
                                </a>
                            </li>
                        ";
            }
            // line 66
            echo "                    </ul>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 68
        echo "                
            </div>
            <div class=\"contain\">
                ";
        // line 71
        $this->displayBlock('content', $context, $blocks);
        // line 73
        echo "            </div>
        </section>
    </div>
    <script src=\"theme/assets/js/vendor/jquery.min.js\"></script>
    <script src=\"theme/assets/js/flat-ui.min.js\"></script>
</body>

</html>";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
    }

    // line 71
    public function block_content($context, array $blocks = array())
    {
        // line 72
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
        return array (  158 => 72,  155 => 71,  150 => 4,  139 => 73,  137 => 71,  132 => 68,  125 => 66,  118 => 62,  114 => 61,  111 => 60,  109 => 59,  106 => 58,  102 => 57,  84 => 41,  78 => 40,  71 => 36,  67 => 35,  64 => 34,  61 => 33,  57 => 32,  26 => 4,  21 => 1,);
    }
}
