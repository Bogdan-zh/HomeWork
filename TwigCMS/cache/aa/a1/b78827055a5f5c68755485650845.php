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

    // line 23
    public function block_sidebar($context, array $blocks = array())
    {
        // line 24
        echo "<!-- <div class=\"aside\">
    <ul>
        ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 27
            echo "        ";
            if (($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "visible") == 1)) {
                // line 28
                echo "        <li>
            <a href=\"catalog/";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "url"), "html", null, true);
                echo "\" class=\"\">
                <span>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name"), "html", null, true);
                echo "</span>
            </a>
        </li>
        ";
            }
            // line 34
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 35
        echo "    </ul>
    
</div> -->
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
        return array (  87 => 35,  81 => 34,  74 => 30,  70 => 29,  67 => 28,  64 => 27,  60 => 26,  56 => 24,  53 => 23,  32 => 4,  29 => 3,);
    }
}
