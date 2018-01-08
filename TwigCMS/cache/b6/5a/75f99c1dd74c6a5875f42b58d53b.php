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
    \t";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 10
            echo "\t    \t";
            if ((($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "visible") == 1) && ($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "bestseller") == 1))) {
                // line 11
                echo "\t            <div class=\"box\">
\t            \t<img class=\"bestseller_img\" src=\"theme/assets/img/hit.png\" alt=\"\">
\t            \t<div class=\"box_avatar\">
\t            \t\t<img src=\"../uploads/";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "image"), "html", null, true);
                echo "\" alt=\"\">
\t            \t</div>
\t            \t<div class=\"box_name\">
\t            \t\t<a href=\"products/";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "url"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name"), "html", null, true);
                echo "</a>
\t            \t</div>
\t            \t<div class=\"box_price\">
\t            \t\t";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price"), "html", null, true);
                echo " грн
\t            \t</div>
\t            </div>
\t        ";
            }
            // line 24
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 25
        echo "    </div>
\t

";
    }

    // line 31
    public function block_sidebar($context, array $blocks = array())
    {
        // line 32
        echo "<!-- <div class=\"aside\">
\t<ul>
\t\t";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 35
            echo "\t\t";
            if (($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "visible") == 1)) {
                // line 36
                echo "\t\t<li>
\t\t\t<a href=\"catalog/";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "url"), "html", null, true);
                echo "\" class=\"\">
\t\t\t\t<span>";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name"), "html", null, true);
                echo "</span>
\t\t\t</a>
\t\t</li>
\t\t";
            }
            // line 42
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 43
        echo "\t</ul>
\t
</div> -->
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
        return array (  120 => 43,  114 => 42,  107 => 38,  103 => 37,  100 => 36,  97 => 35,  93 => 34,  89 => 32,  86 => 31,  79 => 25,  73 => 24,  66 => 20,  58 => 17,  52 => 14,  47 => 11,  44 => 10,  40 => 9,  32 => 5,  29 => 4,);
    }
}
