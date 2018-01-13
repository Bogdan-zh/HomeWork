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
    <form method=\"post\">
        <table class=\"table table-condensed table-hover\">

            <tr>
                <th></th>
                <th>id</th>
                <th>Название</th>
                <th>Цена</th>
                <th>Количество</th>
                <th>Описание</th>
                <th>Видимость</th>
                <th>Хиты продаж</th>
                <th></th>
            </tr>

            ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 26
            echo "            <tr class=\"products\">
                <td>
                    <input class=\"checkbox\" type=\"checkbox\" name=\"check[]\" value=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"), "html", null, true);
            echo "\">
                </td>
                <td>
                    ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"), "html", null, true);
            echo "
                    <input type=\"hidden\" name=\"id\" value=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"), "html", null, true);
            echo "\">
                </td>
                <td>
                    <a href=\"/admin/product?id=";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"), "html", null, true);
            echo "\">

                        ";
            // line 37
            if ((($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "image") == "noimage.png") || (!$this->getAttribute((isset($context["product"]) ? $context["product"] : null), "image", array(), "any", true, true)))) {
                // line 38
                echo "                        <img class=\"avatars\" src=\"../../../admin/theme/assets/img/noimage.png\" alt=\"\">
                        ";
            } else {
                // line 40
                echo "                        <img class=\"avatars\" src=\"../../../uploads/products/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "image"), "html", null, true);
                echo "\" alt=\"\">
                        ";
            }
            // line 42
            echo "
                        ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name"), "html", null, true);
            echo "
                    </a>
                </td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price"), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "amount"), "html", null, true);
            echo " шт.</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description"), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 50
            if (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "visible") == 1)) {
                // line 51
                echo "                    <input disabled data-toggle=\"toggle\" type=\"checkbox\" value=\"1\" name=\"visible\" checked>
                    ";
            } else {
                // line 53
                echo "                    <input disabled data-toggle=\"toggle\" type=\"checkbox\" value=\"1\" name=\"visible\">
                    ";
            }
            // line 55
            echo "                </td>
                <td>
                    ";
            // line 57
            if (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "bestseller") == 1)) {
                // line 58
                echo "                    <img src=\"theme/assets/img/hit.png\" alt=\"\" width=\"40\">
                    ";
            }
            // line 60
            echo "                </td>
                <td>
                    <label class=\"label_for_hidden_del\">X
                        <input class=\"hidden_del\" type=\"submit\" name=\"del[]\" value=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"), "html", null, true);
            echo "\">
                    </label>
                </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 68
        echo "        </table>
        <div class=\"select\">
            <select name=\"select\">
                <option value=\"enable\">Включить</option>
                <option value=\"disable\">Выключить</option>
                <option value=\"delete\">Удалить</option>
            </select>
            <input class=\"btn btn-lg btn-success\" type=\"submit\" name=\"send\" value=\"Применить\">
        </div>
    </form>
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
        return array (  155 => 68,  144 => 63,  139 => 60,  135 => 58,  133 => 57,  129 => 55,  125 => 53,  121 => 51,  119 => 50,  114 => 48,  110 => 47,  106 => 46,  100 => 43,  97 => 42,  91 => 40,  87 => 38,  85 => 37,  80 => 35,  74 => 32,  70 => 31,  64 => 28,  60 => 26,  56 => 25,  34 => 6,  31 => 5,  28 => 4,);
    }
}
