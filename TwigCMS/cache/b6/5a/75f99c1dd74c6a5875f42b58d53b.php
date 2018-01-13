<?php

/* main.html */
class __TwigTemplate_b65a75f99c1dd74c6a5875f42b58d53b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("index.html");

        $this->blocks = array(
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

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    <h1>";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "</h1>
    <h3>Хиты продаж</h3>

    <div class=\"bestsellers\">
        ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 10
            echo "            ";
            if ((((($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "visible") == 1) && ($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "bestseller") == 1)) && ($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "amount") > 0)) && ((isset($context["i"]) ? $context["i"] : null) < 6))) {
                // line 11
                echo "                <a class=\"box\" href=\"products/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "url"), "html", null, true);
                echo "\">
                    <img class=\"bestseller_img\" src=\"theme/assets/img/hit.png\" alt=\"\">
                    <div class=\"box_avatar\">
                        ";
                // line 14
                if ((($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "image") == "noimage.png") || (!$this->getAttribute((isset($context["product"]) ? $context["product"] : null), "image", array(), "any", true, true)))) {
                    // line 15
                    echo "                        <img src=\"../admin/theme/assets/img/noimage.png\" alt=\"\">
                        ";
                } else {
                    // line 17
                    echo "                        <img src=\"../uploads/products/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "image"), "html", null, true);
                    echo "\" alt=\"\">
                        ";
                }
                // line 19
                echo "                    </div>
                    <div class=\"box_name\">
                        ";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name"), "html", null, true);
                echo "
                    </div>
                    <div class=\"box_price\">
                        ";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price"), "html", null, true);
                echo " грн
                    </div>
                </a>
                ";
                // line 27
                $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
                // line 28
                echo "            ";
            }
            // line 29
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 30
        echo "    </div>
    

";
    }

    // line 36
    public function block_sidebar($context, array $blocks = array())
    {
        // line 37
        echo "
    <ul>
        ";
        // line 39
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 40
            echo "            ";
            if (($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "visible") == 1)) {
                // line 41
                echo "            <li>
                <a href=\"catalog/";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "url"), "html", null, true);
                echo "\" class=\"\">
                    <span>";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name"), "html", null, true);
                echo "</span>
                </a>
            </li>
            ";
            }
            // line 47
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 48
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
        return array (  134 => 48,  128 => 47,  121 => 43,  117 => 42,  114 => 41,  111 => 40,  107 => 39,  103 => 37,  100 => 36,  93 => 30,  87 => 29,  84 => 28,  82 => 27,  76 => 24,  70 => 21,  66 => 19,  60 => 17,  56 => 15,  54 => 14,  47 => 11,  44 => 10,  40 => 9,  32 => 5,  29 => 4,);
    }
}
