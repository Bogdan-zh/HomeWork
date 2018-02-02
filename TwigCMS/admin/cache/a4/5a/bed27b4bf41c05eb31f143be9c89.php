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
        echo "
<h1 style=\"text-align: center;\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name"), "html", null, true);
        echo "</h1>
<div class=\"single_item\">

    <form method=\"post\" enctype=\"multipart/form-data\">
        <input type=\"hidden\" name=\"id\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"), "html", null, true);
        echo "\">
        <div class=\"form-group\">
            <label>Название</label>
            <input class=\"form-control\" type=\"text\" name=\"name\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name"), "html", null, true);
        echo "\" required>
        </div>
        <div class=\"form-group\">
            <label>URL</label>
            <input class=\"form-control\" type=\"text\" name=\"url\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "url"), "html", null, true);
        echo "\">
        </div>
        <div class=\"price_amount\">
            <div class=\"form-group\">
                <label>Цена</label>
                <input class=\"form-control\" type=\"text\" name=\"price\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price"), "html", null, true);
        echo "\">
            </div>
            <div class=\"form-group\">
                <label>Количество</label>
                <input class=\"form-control\" type=\"text\" name=\"amount\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "amount"), "html", null, true);
        echo "\">
            </div>
        </div>
        <div class=\"form-group\">
            <label>Видимость </label>

            ";
        // line 32
        if (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "visible") == 1)) {
            // line 33
            echo "            <input data-toggle=\"toggle\" type=\"checkbox\" value=\"1\" name=\"visible\" checked>
            ";
        } else {
            // line 35
            echo "            <input data-toggle=\"toggle\" type=\"checkbox\" value=\"1\" name=\"visible\">
            ";
        }
        // line 37
        echo "
        </div>
        <div class=\"form-group\">
            <label>Хиты продаж </label>

            ";
        // line 42
        if (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "bestseller") == 1)) {
            // line 43
            echo "            <input data-toggle=\"toggle\" name=\"bestseller\" type=\"checkbox\" value=\"1\" checked>
            ";
        } else {
            // line 45
            echo "            <input data-toggle=\"toggle\" name=\"bestseller\" type=\"checkbox\" value=\"1\">
            ";
        }
        // line 47
        echo "
        </div>
        <div class=\"form-group\">
            <label>Картинка</label><br>
            
            ";
        // line 52
        if ((($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "image") == "noimage.png") || (!$this->getAttribute((isset($context["product"]) ? $context["product"] : null), "image", array(), "any", true, true)))) {
            // line 53
            echo "                <img class=\"avatar_in_product\" src=\"/admin/theme/assets/img/noimage.png\" alt=\"\" width=\"200\">
            ";
        } else {
            // line 55
            echo "                <img class=\"avatar_in_product\" src=\"/uploads/products/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "image"), "html", null, true);
            echo "\" alt=\"\" width=\"200\">
            ";
        }
        // line 57
        echo "            
            <input class=\"form-control\" type=\"file\" name=\"files[]\" value=\"\">
            <input class=\"btn btn-lg btn-danger\" style=\"margin-top: 10px;\" type=\"submit\" name=\"del\" value=\"Удалить картинку\">
        </div>
        <div class=\"form-group\">
            <label>Описание</label>
            <textarea class=\"form-control\" rows=\"5\" name=\"description\">";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description"), "html", null, true);
        echo "</textarea>
        </div>
        <div class=\"form-group\">
            <label>Категория: </label>
            <select name=\"categories\"> 
                ";
        // line 68
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 69
            echo "                     ";
            if (($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "parent_id") == 0)) {
                echo " <!-- чтобы вернуть как раньше, удалить первое(это) условие -->
                        <option 
                            disabled 
                            value=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name"), "html", null, true);
                echo "
                        </option>
                     ";
            } else {
                // line 75
                echo "                        <option 
                            ";
                // line 76
                if (($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id") == $this->getAttribute((isset($context["selected_category"]) ? $context["selected_category"] : null), "category_id"))) {
                    echo " selected ";
                }
                echo " 
                            value=\"";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id"), "html", null, true);
                echo "\">--";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name"), "html", null, true);
                echo "
                        </option>
                    ";
            }
            // line 80
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 81
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
        return array (  182 => 81,  176 => 80,  168 => 77,  162 => 76,  159 => 75,  151 => 72,  144 => 69,  140 => 68,  132 => 63,  124 => 57,  118 => 55,  114 => 53,  112 => 52,  105 => 47,  101 => 45,  97 => 43,  95 => 42,  88 => 37,  84 => 35,  80 => 33,  78 => 32,  69 => 26,  62 => 22,  54 => 17,  47 => 13,  41 => 10,  34 => 6,  31 => 5,  28 => 4,);
    }
}
