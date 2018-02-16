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
                <!-- <ul class=\"reg_log\">
                    <li><a href=\"#\">Логин</a></li>
                    <li>&nbsp;/&nbsp;</li>
                    <li><a href=\"#\">Регистрация</a></li>
                </ul> -->
            </div>
        </div>

        <header>
            <div class=\"container\">
                
                <ul class=\"my_menu\">
                    <li><a href=\"/\">Twig Shop</a></li>
                    
                    ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 32
            echo "                        ";
            if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "visible") == 1)) {
                // line 33
                echo "                        <li>
                            <a href=\"/";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url"), "html", null, true);
                echo "\" class=\"\">
                                <span>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "name"), "html", null, true);
                echo "</span>
                            </a>
                        </li>
                        ";
            }
            // line 39
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 40
        echo "                </ul>
                
            </div>
        </header>
        <div class=\"bottom_header\">
            <div class=\"container\">
                <div>
                <div class=\"menuToggle\" style=\"cursor: pointer;\"><span class=\"fui-list-columned\" style=\"margin-right: 10px;\"></span>Каталог</div>
                
                ";
        // line 49
        $this->displayBlock('sidebar', $context, $blocks);
        // line 75
        echo "                </div>
                <ul class=\"my_cart\">
                    <li>
                        ";
        // line 78
        if (((isset($context["amount_in_cart"]) ? $context["amount_in_cart"] : null) == 0)) {
            echo " 
                            <a style=\"cursor: default; pointer-events: none;\" class=\"cart\" href=\"\"><img src=\"/theme/assets/img/cart1.png\" alt=\"\">
                            <span class=\"amount_in_cart1\">";
            // line 80
            echo 0;
            echo "</span>
                        </a>
                        ";
        } else {
            // line 83
            echo "                        <a class=\"cart\" href=\"/cart\"><img src=\"/theme/assets/img/cart1.png\" alt=\"\">
                            <span class=\"amount_in_cart1\">
                                ";
            // line 85
            if (((isset($context["amount_in_cart"]) ? $context["amount_in_cart"] : null) > 0)) {
                echo " 
                                   ";
                // line 86
                echo twig_escape_filter($this->env, (isset($context["amount_in_cart"]) ? $context["amount_in_cart"] : null), "html", null, true);
                echo " 
                                ";
            } else {
                // line 88
                echo "                                    ";
                echo 0;
                echo "
                                ";
            }
            // line 90
            echo "                            </span>
                            <span>
                                ";
            // line 92
            if (((isset($context["total"]) ? $context["total"] : null) > 0)) {
                echo " 
                                    ";
                // line 93
                echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : null), "html", null, true);
                echo " грн 
                                ";
            }
            // line 95
            echo "                            </span>
                        </a>
                        ";
        }
        // line 98
        echo "                    </li>
                </ul>
            </div>
        </div>
        <div class=\"content\">
            <div class=\"container\">
                ";
        // line 104
        $this->displayBlock('content', $context, $blocks);
        // line 106
        echo "            </div>
        </div>

        <script>
            // для выпадающего каталога
            \$(function() { 
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

    // line 49
    public function block_sidebar($context, array $blocks = array())
    {
        // line 50
        echo "                    ";
        // line 67
        echo "
                    ";
        // line 68
        $context["macros"] = $this;
        // line 69
        echo "                    <div class=\"navi\">
                        <ul class=\"main-menu\">
                            ";
        // line 71
        echo $context["macros"]->getmenu_categories((isset($context["categories_tree"]) ? $context["categories_tree"] : null));
        echo "
                        </ul>
                    </div>
                ";
    }

    // line 104
    public function block_content($context, array $blocks = array())
    {
        // line 105
        echo "                ";
    }

    // line 50
    public function getmenu_categories($_categories_tree = null)
    {
        $context = $this->env->mergeGlobals(array(
            "categories_tree" => $_categories_tree,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 51
            echo "                    ";
            $context["macros"] = $this;
            // line 52
            echo "                        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories_tree"]) ? $context["categories_tree"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 53
                echo "                            ";
                if ($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "visible")) {
                    // line 54
                    echo "                            <li>
                                <a href=\"/catalog/";
                    // line 55
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "url"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name"), "html", null, true);
                    echo "</a>
                                ";
                    // line 56
                    if ($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "visible")) {
                        // line 57
                        echo "                                    ";
                        if ($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "subcategories")) {
                            // line 58
                            echo "                                        <ul class=\"sub-menu\">
                                            ";
                            // line 59
                            echo $context["macros"]->getmenu_categories($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "subcategories"));
                            echo "
                                        </ul>
                                    ";
                        }
                        // line 62
                        echo "                                ";
                    }
                    // line 63
                    echo "                            </li>
                            ";
                }
                // line 65
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 66
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
        return array (  275 => 66,  269 => 65,  265 => 63,  262 => 62,  256 => 59,  253 => 58,  250 => 57,  248 => 56,  242 => 55,  239 => 54,  236 => 53,  231 => 52,  228 => 51,  217 => 50,  213 => 105,  210 => 104,  202 => 71,  198 => 69,  196 => 68,  193 => 67,  191 => 50,  188 => 49,  183 => 4,  160 => 106,  158 => 104,  150 => 98,  145 => 95,  140 => 93,  136 => 92,  132 => 90,  126 => 88,  121 => 86,  117 => 85,  113 => 83,  107 => 80,  102 => 78,  97 => 75,  95 => 49,  84 => 40,  78 => 39,  71 => 35,  67 => 34,  64 => 33,  61 => 32,  57 => 31,  27 => 4,  22 => 1,);
    }
}
