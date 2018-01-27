<?php

/* main.html */
class __TwigTemplate_b65a75f99c1dd74c6a5875f42b58d53b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("index.html");

        $this->blocks = array(
            'pages' => array($this, 'block_pages'),
            'content' => array($this, 'block_content'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "index.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_pages($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 7
            echo "        ";
            if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "visible") == 1)) {
                // line 8
                echo "        <li>
            <a href=\"/";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url"), "html", null, true);
                echo "\" class=\"\">
                <span>";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "name"), "html", null, true);
                echo "</span>
            </a>
        </li>
        ";
            }
            // line 14
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        // line 20
        echo "    <h1>";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "</h1>
    <h3>Хиты продаж</h3>

    <div class=\"bestsellers\">
        ";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 25
            echo "            ";
            if ((((($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "visible") == 1) && ($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "bestseller") == 1)) && ($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "amount") > 0)) && ((isset($context["i"]) ? $context["i"] : null) < 6))) {
                // line 26
                echo "                <a class=\"box\" href=\"products/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "url"), "html", null, true);
                echo "\">
                    <img class=\"bestseller_img\" src=\"theme/assets/img/hit.png\" alt=\"\">
                    <div class=\"box_avatar\">
                        ";
                // line 29
                if ((($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "image") == "noimage.png") || (!$this->getAttribute((isset($context["product"]) ? $context["product"] : null), "image", array(), "any", true, true)))) {
                    // line 30
                    echo "                        <img src=\"/admin/theme/assets/img/noimage.png\" alt=\"\">
                        ";
                } else {
                    // line 32
                    echo "                        <img src=\"/uploads/products/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "image"), "html", null, true);
                    echo "\" alt=\"\">
                        ";
                }
                // line 34
                echo "                    </div>
                    <div class=\"box_name\">
                        ";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name"), "html", null, true);
                echo "
                    </div>
                    <div class=\"box_price\">
                        ";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price"), "html", null, true);
                echo " грн
                    </div>
                </a>
                ";
                // line 42
                $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
                // line 43
                echo "            ";
            }
            // line 44
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 45
        echo "    </div>
    

";
    }

    // line 51
    public function block_sidebar($context, array $blocks = array())
    {
        // line 52
        echo "
";
        // line 70
        echo "
";
        // line 71
        $context["macros"] = $this;
        // line 72
        echo "
<ul class=\"main-menu\">
    ";
        // line 74
        echo $context["macros"]->getmenu_categories((isset($context["categories_tree"]) ? $context["categories_tree"] : null));
        echo "
</ul>

    <!-- <ul>
        ";
        // line 78
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 79
            echo "            ";
            if (($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "visible") == 1)) {
                // line 80
                echo "            <li>
                <a href=\"/catalog/";
                // line 81
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "url"), "html", null, true);
                echo "\" class=\"\">
                    <span>";
                // line 82
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name"), "html", null, true);
                echo "</span>
                </a>
            </li>
            ";
            }
            // line 86
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 87
        echo "    </ul> -->
    

";
    }

    // line 53
    public function getmenu_categories($_categories_tree = null)
    {
        $context = $this->env->mergeGlobals(array(
            "categories_tree" => $_categories_tree,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 54
            $context["macros"] = $this;
            // line 55
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories_tree"]) ? $context["categories_tree"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 56
                echo "        ";
                if ($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "visible")) {
                    // line 57
                    echo "            <li>
                <a href=\"/catalog/";
                    // line 58
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "url"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name"), "html", null, true);
                    echo "</a>
                ";
                    // line 59
                    if ($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "visible")) {
                        // line 60
                        echo "                    ";
                        if ($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "subcategories")) {
                            // line 61
                            echo "                        <ul>
                            ";
                            // line 62
                            echo $context["macros"]->getmenu_categories($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "subcategories"));
                            echo "
                        </ul>
                    ";
                        }
                        // line 65
                        echo "                ";
                    }
                    // line 66
                    echo "            </li>
        ";
                }
                // line 68
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "main.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 68,  237 => 66,  234 => 65,  228 => 62,  225 => 61,  222 => 60,  220 => 59,  214 => 58,  211 => 57,  208 => 56,  203 => 55,  201 => 54,  190 => 53,  183 => 87,  177 => 86,  170 => 82,  166 => 81,  163 => 80,  160 => 79,  156 => 78,  149 => 74,  145 => 72,  143 => 71,  140 => 70,  137 => 52,  134 => 51,  127 => 45,  121 => 44,  118 => 43,  116 => 42,  110 => 39,  104 => 36,  100 => 34,  94 => 32,  90 => 30,  88 => 29,  81 => 26,  78 => 25,  74 => 24,  66 => 20,  63 => 19,  55 => 14,  48 => 10,  44 => 9,  41 => 8,  38 => 7,  33 => 6,  30 => 5,);
    }
}
