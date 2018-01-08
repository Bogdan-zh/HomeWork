<?php

/* catalog.html */
class __TwigTemplate_455b85361e7786f9fd6dd6d64cb930f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("index.html");

        $this->blocks = array(
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

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
<h1>";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "</h1>

<a class=\"add_something\" href=\"/admin/product\">Добавить товар</a>
<div class=\"obertka\">
\t<form method=\"post\">
\t\t<table class=\"table table-condensed table-hover\">

\t\t\t<tr>
\t\t\t\t<th></th>
\t\t\t\t<th>id</th>
\t\t\t\t<th>Название</th>
\t\t\t\t<th>Цена</th>
\t\t\t\t<th>Количество</th>
\t\t\t\t<th>Описание</th>
\t\t\t\t<th>Видимость</th>
\t\t\t\t<th>Хиты продаж</th>
\t\t\t\t<th></th>
\t\t\t</tr>

\t\t\t";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 26
            echo "\t\t\t<tr class=\"products\">
\t\t\t\t<td>
\t\t\t\t\t<input class=\"checkbox\" type=\"checkbox\" name=\"check[]\" value=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"), "html", null, true);
            echo "\">
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"), "html", null, true);
            echo "
\t\t\t\t\t<input type=\"hidden\" name=\"id\" value=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"), "html", null, true);
            echo "\">
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t<a href=\"/admin/product?id=";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"), "html", null, true);
            echo "\">
\t\t\t\t\t\t<img class=\"avatars\" src=\"../../../uploads/";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "image"), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t\t";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name"), "html", null, true);
            echo "
\t\t\t\t\t</a>
\t\t\t\t</td>
\t\t\t\t<td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price"), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "amount"), "html", null, true);
            echo " шт.</td>
\t\t\t\t<td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description"), "html", null, true);
            echo "</td>
\t\t\t\t<td>
\t\t\t\t\t";
            // line 44
            if (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "visible") == 1)) {
                // line 45
                echo "\t\t\t\t\t<input disabled data-toggle=\"toggle\" type=\"checkbox\" value=\"1\" name=\"visible\" checked>
\t\t\t\t\t";
            } else {
                // line 47
                echo "\t\t\t\t\t<input disabled data-toggle=\"toggle\" type=\"checkbox\" value=\"1\" name=\"visible\">
\t\t\t\t\t";
            }
            // line 49
            echo "\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t";
            // line 51
            if (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "bestseller") == 1)) {
                // line 52
                echo "\t\t\t\t\t<img src=\"theme/assets/img/hit.png\" alt=\"\" width=\"40\">
\t\t\t\t\t";
            }
            // line 54
            echo "\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t<label class=\"label_for_hidden_del\">X
\t\t\t\t\t\t<input class=\"hidden_del\" type=\"submit\" name=\"del[]\" value=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"), "html", null, true);
            echo "\">
\t\t\t\t\t</label>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 62
        echo "\t\t</table>
\t\t<div class=\"select\">
\t\t\t<select name=\"select\">
\t\t\t\t<option value=\"enable\">Включить</option>
\t\t\t\t<option value=\"disable\">Выключить</option>
\t\t\t\t<option value=\"delete\">Удалить</option>
\t\t\t</select>
\t\t\t<input class=\"btn btn-lg btn-success\" type=\"submit\" name=\"send\" value=\"Применить\">
\t\t</div>
\t</form>
</div>

";
    }

    public function getTemplateName()
    {
        return "catalog.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 62,  132 => 57,  127 => 54,  123 => 52,  121 => 51,  117 => 49,  113 => 47,  109 => 45,  107 => 44,  102 => 42,  98 => 41,  94 => 40,  88 => 37,  84 => 36,  80 => 35,  74 => 32,  70 => 31,  64 => 28,  60 => 26,  56 => 25,  34 => 6,  31 => 5,  28 => 4,);
    }
}
