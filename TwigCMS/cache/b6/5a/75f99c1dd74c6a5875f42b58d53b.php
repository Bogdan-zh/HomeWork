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
    <ul>
        ";
        // line 54
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 55
            echo "            ";
            if (($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "visible") == 1)) {
                // line 56
                echo "            <li>
                <a href=\"/catalog/";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "url"), "html", null, true);
                echo "\" class=\"\">
                    <span>";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name"), "html", null, true);
                echo "</span>
                </a>
            </li>
            ";
            }
            // line 62
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 63
        echo "    </ul>
    

";
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
        return array (  168 => 63,  162 => 62,  155 => 58,  151 => 57,  148 => 56,  145 => 55,  141 => 54,  137 => 52,  134 => 51,  127 => 45,  121 => 44,  118 => 43,  116 => 42,  110 => 39,  104 => 36,  100 => 34,  94 => 32,  90 => 30,  88 => 29,  81 => 26,  78 => 25,  74 => 24,  66 => 20,  63 => 19,  55 => 14,  48 => 10,  44 => 9,  41 => 8,  38 => 7,  33 => 6,  30 => 5,);
    }
}
