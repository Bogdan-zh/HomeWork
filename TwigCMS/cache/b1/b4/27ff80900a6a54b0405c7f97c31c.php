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
        <script src=\"/theme/assets/js/vendor/jquery.min.js\"></script>
        
    </head>
    <body>
        
        <div class=\"top_header\">
            <div class=\"container\">
                <ul class=\"go_to_admin\">
                    <li><a href=\"/admin/products\">Перейти в админку</a></li>
                </ul>
                <ul class=\"reg_log\">
                    <li><a href=\"#\">Логин</a></li>
                    <li>&nbsp;/&nbsp;</li>
                    <li><a href=\"#\">Регистрация</a></li>
                </ul>
            </div>
        </div>

        <header>
            <div class=\"container\">
                
                <ul class=\"my_menu\">
                    <li><a href=\"/\">Twig Shop</a></li>
                    
                    ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 34
            echo "                        ";
            if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "visible") == 1)) {
                // line 35
                echo "                        <li>
                            <a href=\"/";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url"), "html", null, true);
                echo "\" class=\"\">
                                <span>";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "name"), "html", null, true);
                echo "</span>
                            </a>
                        </li>
                        ";
            }
            // line 41
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 42
        echo "                </ul>
                
            </div>
        </header>
        <div class=\"bottom_header\">
            <div class=\"container\">
                <div>
                <div class=\"menuToggle\" style=\"cursor: pointer;\"><span class=\"fui-list-columned\" style=\"margin-right: 10px;\"></span>Каталог</div>
                
                ";
        // line 51
        $this->displayBlock('sidebar', $context, $blocks);
        // line 77
        echo "                </div>
                <ul class=\"my_cart\">
                    <li>
                        <a class=\"cart\" href=\"/cart\"><img src=\"/theme/assets/img/cart1.png\" alt=\"\">
                            <span>( ";
        // line 81
        echo twig_escape_filter($this->env, (isset($context["amount_in_cart"]) ? $context["amount_in_cart"] : null), "html", null, true);
        echo " )</span>
                            <span>";
        // line 82
        if (((isset($context["total"]) ? $context["total"] : null) > 0)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : null), "html", null, true);
            echo " грн ";
        }
        echo "</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"content\">
            <div class=\"container\">
                ";
        // line 90
        $this->displayBlock('content', $context, $blocks);
        // line 92
        echo "            </div>
        </div>

        <script>
            \$(function() { // для выпадающего каталога
                \$(\".menuToggle\").on(\"click\", function() {
                    \$(\".main-menu\").slideToggle(300, function() {
                        if(\$(this).css(\"display\") === \"none\") {
                            \$(this).removeAttr(\"style\");
                        }
                    });
                });
            });
        </script>

    <script src=\"/theme/assets/js/flat-ui.min.js\"></script>
</body>

</html>";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
    }

    // line 51
    public function block_sidebar($context, array $blocks = array())
    {
        // line 52
        echo "                    ";
        // line 69
        echo "
                    ";
        // line 70
        $context["macros"] = $this;
        // line 71
        echo "                    <div class=\"navi\">
                        <ul class=\"main-menu\">
                            ";
        // line 73
        echo $context["macros"]->getmenu_categories((isset($context["categories_tree"]) ? $context["categories_tree"] : null));
        echo "
                        </ul>
                    </div>
                ";
    }

    // line 90
    public function block_content($context, array $blocks = array())
    {
        // line 91
        echo "                ";
    }

    // line 52
    public function getmenu_categories($_categories_tree = null)
    {
        $context = $this->env->mergeGlobals(array(
            "categories_tree" => $_categories_tree,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 53
            echo "                    ";
            $context["macros"] = $this;
            // line 54
            echo "                        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories_tree"]) ? $context["categories_tree"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 55
                echo "                            ";
                if ($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "visible")) {
                    // line 56
                    echo "                            <li>
                                <a href=\"/catalog/";
                    // line 57
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "url"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name"), "html", null, true);
                    echo "</a>
                                ";
                    // line 58
                    if ($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "visible")) {
                        // line 59
                        echo "                                    ";
                        if ($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "subcategories")) {
                            // line 60
                            echo "                                        <ul class=\"sub-menu\">
                                            ";
                            // line 61
                            echo $context["macros"]->getmenu_categories($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "subcategories"));
                            echo "
                                        </ul>
                                    ";
                        }
                        // line 64
                        echo "                                ";
                    }
                    // line 65
                    echo "                            </li>
                            ";
                }
                // line 67
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 68
            echo "                    ";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
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
        return array (  240 => 68,  234 => 67,  230 => 65,  227 => 64,  221 => 61,  218 => 60,  215 => 59,  213 => 58,  207 => 57,  204 => 56,  201 => 55,  196 => 54,  193 => 53,  182 => 52,  178 => 91,  175 => 90,  167 => 73,  163 => 71,  161 => 70,  158 => 69,  156 => 52,  153 => 51,  148 => 4,  126 => 92,  124 => 90,  109 => 82,  105 => 81,  99 => 77,  97 => 51,  86 => 42,  80 => 41,  73 => 37,  69 => 36,  66 => 35,  63 => 34,  59 => 33,  27 => 4,  22 => 1,);
    }
}
