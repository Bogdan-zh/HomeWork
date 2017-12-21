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
        echo "<h1>";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "</h1>
<div class=\"col-lg-12\">
    <form method=\"post\">
        <input type=\"hidden\" name=\"id\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"), "html", null, true);
        echo "\">
        <div class=\"form-group\">
            <label>Название</label>
            <input class=\"form-control\" type=\"text\" name=\"name\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name"), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group\">
            <label>URL</label>
            <input class=\"form-control\" type=\"text\" name=\"url\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "url"), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group\">
            <label>Видимость</label>
            <input class=\"form-control\" type=\"checkbox\" name=\"visible\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "visible"), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group\">
            <label>Картинка</label>
            <input class=\"form-control\" type=\"file\" name=\"image\" value=\"\">
        </div>
        <div class=\"form-group\">
            <label>Описание</label>
            <textarea class=\"form-control\" name=\"description\">";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description"), "html", null, true);
        echo "</textarea>
        </div>

        <input type=\"submit\" name=\"save\" value=\"Сохранить\">
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
        return array (  69 => 27,  58 => 19,  51 => 15,  44 => 11,  38 => 8,  31 => 5,  28 => 4,);
    }
}
