<?php

/* product.html */
class __TwigTemplate_a45abed27b4bf41c05eb31f143be9c89 extends Twig_Template
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
        echo "<h1 style=\"text-align: center;\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name"), "html", null, true);
        echo "</h1>
<div class=\"single_item\">

    <form method=\"post\" enctype=\"multipart/form-data\">
        <input type=\"hidden\" name=\"id\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"), "html", null, true);
        echo "\">
        <div class=\"form-group\">
            <label>Название</label>
            <input class=\"form-control\" type=\"text\" name=\"name\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name"), "html", null, true);
        echo "\" required>
        </div>
        <div class=\"form-group\">
            <label>URL</label>
            <input class=\"form-control\" type=\"text\" name=\"url\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "url"), "html", null, true);
        echo "\">
        </div>
        <div class=\"price_amount\">
            <div class=\"form-group\">
                <label>Цена</label>
                <input class=\"form-control\" type=\"text\" name=\"price\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price"), "html", null, true);
        echo "\">
            </div>
            <div class=\"form-group\">
                <label>Количество</label>
                <input class=\"form-control\" type=\"text\" name=\"amount\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "amount"), "html", null, true);
        echo "\">
            </div>
        </div>
        <div class=\"form-group\">
            <label>Видимость </label>

            ";
        // line 31
        if (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "visible") == 1)) {
            // line 32
            echo "            <input data-toggle=\"toggle\" type=\"checkbox\" value=\"1\" name=\"visible\" checked>
            ";
        } else {
            // line 34
            echo "            <input data-toggle=\"toggle\" type=\"checkbox\" value=\"1\" name=\"visible\">
            ";
        }
        // line 36
        echo "
        </div>
        <div class=\"form-group\">
            <label>Хиты продаж </label>

            ";
        // line 41
        if (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "bestseller") == 1)) {
            // line 42
            echo "            <input data-toggle=\"toggle\" name=\"bestseller\" type=\"checkbox\" value=\"1\" checked>
            ";
        } else {
            // line 44
            echo "            <input data-toggle=\"toggle\" name=\"bestseller\" type=\"checkbox\" value=\"1\">
            ";
        }
        // line 46
        echo "
        </div>
        <div class=\"form-group\">
            <label>Картинка</label><br>
            
            ";
        // line 51
        if ((!$this->getAttribute((isset($context["product"]) ? $context["product"] : null), "image", array(), "any", true, true))) {
            // line 52
            echo "                <img class=\"avatar_in_product\" src=\"../../../uploads/noimage.png\" alt=\"\" width=\"200\">
            ";
        } else {
            // line 54
            echo "                <img class=\"avatar_in_product\" src=\"../../../uploads/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "image"), "html", null, true);
            echo "\" alt=\"\" width=\"200\">
            ";
        }
        // line 56
        echo "            
            <input class=\"form-control\" type=\"file\" name=\"files[]\" value=\"\">
            <input class=\"btn btn-lg btn-danger\" style=\"margin-top: 10px;\" type=\"submit\" name=\"del\" value=\"Удалить картинку\">
        </div>
        <div class=\"form-group\">
            <label>Описание</label>
            <textarea class=\"form-control\" name=\"description\">";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description"), "html", null, true);
        echo "</textarea>
        </div>
        <div class=\"form-group\">
            <label>Категория: </label> <!-- присваивает категорию, но не фиксирует ее в селекте  -->
            <p>";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["product_category"]) ? $context["product_category"] : null), "html", null, true);
        echo "</p> <!-- тут название текущей категории, которую нужно выводить в селект  -->
            <select name=\"categories\">
                ";
        // line 68
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 69
            echo "                    ";
            if (($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name") == (isset($context["product_category"]) ? $context["product_category"] : null))) {
                // line 70
                echo "                    <option checked value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name"), "html", null, true);
                echo "</option>
                    ";
            } else {
                // line 72
                echo "                    <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name"), "html", null, true);
                echo "</option>
                    ";
            }
            // line 74
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 75
        echo "            </select>
        </div>
        
        <input type=\"submit\" name=\"save\" value=\"Сохранить\" class=\"btn btn-block btn-lg btn-primary\">
    </form>

</div>
";
    }

    public function getTemplateName()
    {
        return "product.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 75,  165 => 74,  157 => 72,  149 => 70,  146 => 69,  142 => 68,  137 => 66,  130 => 62,  122 => 56,  116 => 54,  112 => 52,  110 => 51,  103 => 46,  99 => 44,  95 => 42,  93 => 41,  86 => 36,  82 => 34,  78 => 32,  76 => 31,  67 => 25,  60 => 21,  52 => 16,  45 => 12,  39 => 9,  31 => 5,  28 => 4,);
    }
}
