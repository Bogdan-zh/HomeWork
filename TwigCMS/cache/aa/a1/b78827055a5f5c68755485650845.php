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
        echo "\t<h1 style=\"text-align: center;\">";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</h1>
\t<style>
\t\t.login-form {
\t\t\tmargin: 0 auto;
\t\t\twidth: 500px;
\t\t}
\t</style>
\t<div class=\"login-form\">
\t\t<div class=\"form-group\">
\t\t\t<input class=\"form-control login-field\" value=\"\" placeholder=\"Enter your name\" id=\"login-name\" type=\"text\">
\t\t\t<label class=\"login-field-icon fui-user\" for=\"login-name\"></label>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<input class=\"form-control login-field\" value=\"\" placeholder=\"Password\" id=\"login-pass\" type=\"password\">
\t\t\t<label class=\"login-field-icon fui-lock\" for=\"login-pass\"></label>
\t\t</div>

\t\t<a class=\"btn btn-primary btn-lg btn-block\" href=\"#\">Войти</a>
\t</div>
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