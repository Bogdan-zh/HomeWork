<?php

/* main.html */
class __TwigTemplate_b65a75f99c1dd74c6a5875f42b58d53b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("index.html");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Twig Shop";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
    <!-- <h1>";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "</h1> -->
    <h2>Хиты продаж</h2>

    <div class=\"bestsellers\">
        ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 12
            echo "            ";
            if ((((($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "visible") == 1) && ($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "bestseller") == 1)) && ($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "amount") > 0)) && ((isset($context["i"]) ? $context["i"] : null) < 4))) {
                // line 13
                echo "                <div class=\"box\">
                    <a href=\"products/";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "url"), "html", null, true);
                echo "\">
                        <img class=\"bestseller_img\" src=\"theme/assets/img/hit.png\" alt=\"\">
                        <div class=\"box_avatar\">
                            ";
                // line 17
                if ((($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "image") == "noimage.png") || (!$this->getAttribute((isset($context["product"]) ? $context["product"] : null), "image", array(), "any", true, true)))) {
                    // line 18
                    echo "                            <img src=\"/admin/theme/assets/img/noimage.png\" alt=\"\">
                            ";
                } else {
                    // line 20
                    echo "                            <img src=\"/uploads/products/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "image"), "html", null, true);
                    echo "\" alt=\"\">
                            ";
                }
                // line 22
                echo "                        </div>
                        <div class=\"box_name\">
                            ";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name"), "html", null, true);
                echo "
                        </div>
                    </a>
                    <div class=\"bottom_in_box\">
                        <div class=\"box_price\">
                            ";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price"), "html", null, true);
                echo " грн
                        </div>
                        <form method=\"post\">
                            <input type=\"hidden\" name=\"id\" value=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"), "html", null, true);
                echo "\">
                            <input type=\"hidden\" name=\"amount\" value=\"1\">
                            <input class=\"to_cart\" name=\"to_cart\" type=\"submit\" value=\"В корзину\">
                        </form>
                    </div>
                </div>
                ";
                // line 38
                $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
                // line 39
                echo "            ";
            }
            // line 40
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 41
        echo "    </div>

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
        return array (  114 => 41,  108 => 40,  105 => 39,  103 => 38,  94 => 32,  88 => 29,  80 => 24,  76 => 22,  70 => 20,  66 => 18,  64 => 17,  58 => 14,  55 => 13,  52 => 12,  48 => 11,  41 => 7,  38 => 6,  35 => 5,  29 => 3,);
    }
}
