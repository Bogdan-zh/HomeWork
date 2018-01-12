<?php

/* login.html */
class __TwigTemplate_aaa1b78827055a5f5c68755485650845 extends Twig_Template
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h1 style=\"text-align: center;\">";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</h1>

    <div class=\"login-form\">
        <div class=\"form-group\">
            <input class=\"form-control login-field\" value=\"\" placeholder=\"Enter your name\" id=\"login-name\" type=\"text\">
            <label class=\"login-field-icon fui-user\" for=\"login-name\"></label>
        </div>

        <div class=\"form-group\">
            <input class=\"form-control login-field\" value=\"\" placeholder=\"Password\" id=\"login-pass\" type=\"password\">
            <label class=\"login-field-icon fui-lock\" for=\"login-pass\"></label>
        </div>

        <a class=\"btn btn-primary btn-lg btn-block\" href=\"#\">Войти</a>
    </div>
";
    }

    public function getTemplateName()
    {
        return "login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}
