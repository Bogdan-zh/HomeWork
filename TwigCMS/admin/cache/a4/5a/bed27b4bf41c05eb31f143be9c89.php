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
        echo "<script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
<script>
      tinymce.init({
        selector: '#mytextarea'
      });
</script>
<h1 style=\"text-align: center;\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name"), "html", null, true);
        echo "</h1>
<div class=\"single_item\">

    <form method=\"post\" enctype=\"multipart/form-data\">
        <input type=\"hidden\" name=\"id\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"), "html", null, true);
        echo "\">
        <div class=\"form-group\">
            <label>Название</label>
            <input class=\"form-control\" type=\"text\" name=\"name\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name"), "html", null, true);
        echo "\" required>
        </div>
        <div class=\"form-group\">
            <label>URL</label>
            <input class=\"form-control\" type=\"text\" name=\"url\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "url"), "html", null, true);
        echo "\">
        </div>
        <div class=\"price_amount\">
            <div class=\"form-group\">
                <label>Цена</label>
                <input class=\"form-control\" type=\"text\" name=\"price\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price"), "html", null, true);
        echo "\">
            </div>
            <div class=\"form-group\">
                <label>Количество</label>
                <input class=\"form-control\" type=\"text\" name=\"amount\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "amount"), "html", null, true);
        echo "\">
            </div>
        </div>
        <div class=\"form-group\">
            <label>Видимость </label>

            ";
        // line 37
        if (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "visible") == 1)) {
            // line 38
            echo "            <input data-toggle=\"toggle\" type=\"checkbox\" value=\"1\" name=\"visible\" checked>
            ";
        } else {
            // line 40
            echo "            <input data-toggle=\"toggle\" type=\"checkbox\" value=\"1\" name=\"visible\">
            ";
        }
        // line 42
        echo "
        </div>
        <div class=\"form-group\">
            <label>Хиты продаж </label>

            ";
        // line 47
        if (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "bestseller") == 1)) {
            // line 48
            echo "            <input data-toggle=\"toggle\" name=\"bestseller\" type=\"checkbox\" value=\"1\" checked>
            ";
        } else {
            // line 50
            echo "            <input data-toggle=\"toggle\" name=\"bestseller\" type=\"checkbox\" value=\"1\">
            ";
        }
        // line 52
        echo "
        </div>
        <div class=\"form-group\">
            <label>Картинка</label><br>
            
            ";
        // line 57
        if ((($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "image") == "noimage.png") || (!$this->getAttribute((isset($context["product"]) ? $context["product"] : null), "image", array(), "any", true, true)))) {
            // line 58
            echo "                <img class=\"avatar_in_product\" src=\"/admin/theme/assets/img/noimage.png\" alt=\"\" width=\"200\">
            ";
        } else {
            // line 60
            echo "                <img class=\"avatar_in_product\" src=\"/uploads/products/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "image"), "html", null, true);
            echo "\" alt=\"\" width=\"200\">
            ";
        }
        // line 62
        echo "            
            <input class=\"form-control\" type=\"file\" name=\"files[]\" value=\"\">
            <input class=\"btn btn-lg btn-danger\" style=\"margin-top: 10px;\" type=\"submit\" name=\"del\" value=\"Удалить картинку\">
        </div>
        <div class=\"form-group\">
            <label>Описание</label>
            <textarea class=\"form-control\" id=\"mytextarea\" name=\"description\">";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description"), "html", null, true);
        echo "</textarea>
        </div>
        <div class=\"form-group\">
            <label>Категория: </label>
            <select name=\"categories\">
                ";
        // line 73
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 74
            echo "                    <option ";
            if (($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id") == $this->getAttribute((isset($context["selected_category"]) ? $context["selected_category"] : null), "category_id"))) {
                echo " selected ";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name"), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 76
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
        return array (  164 => 76,  149 => 74,  145 => 73,  137 => 68,  129 => 62,  123 => 60,  119 => 58,  117 => 57,  110 => 52,  106 => 50,  102 => 48,  100 => 47,  93 => 42,  89 => 40,  85 => 38,  83 => 37,  74 => 31,  67 => 27,  59 => 22,  52 => 18,  46 => 15,  39 => 11,  31 => 5,  28 => 4,);
    }
}
