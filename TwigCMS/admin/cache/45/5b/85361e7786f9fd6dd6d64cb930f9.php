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

<a class=\"btn btn-primary btn-lg add_something\" href=\"/admin/product\">Добавить товар</a>

<form method=\"post\" style=\"display: inline-block; margin: 0;\">
    <button type=\"submit\" name=\"export_products\" class=\"btn btn-lg btn-info\" value=\"1\">Экспорт товаров в CSV</button>
    <!-- <button type=\"submit\" name=\"feed\" class=\"btn btn-lg btn-info\">Создать ФИД XML</button> -->
    <a class=\"btn btn-lg btn-info\" href=\"/feed2.php\">ФИД XML</a>
</form>

";
        // line 16
        if ((!twig_test_empty((isset($context["export"]) ? $context["export"] : null)))) {
            // line 17
            echo "    <p>
        ";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["export"]) ? $context["export"] : null), "html", null, true);
            echo "
        Ссылка на скачивание
        <a download href=\"/products.csv\">products.csv</a>
    </p>
";
        }
        // line 23
        echo "
";
        // line 24
        if ((!twig_test_empty((isset($context["feed"]) ? $context["feed"] : null)))) {
            // line 25
            echo "    <p>
        Фид создан в корне сайта. 
        Ссылка на скачивание: 
        <a download href=\"";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["feed"]) ? $context["feed"] : null), "html", null, true);
            echo "\">feed.xml</a>
    </p>
";
        }
        // line 31
        echo "

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
        // line 49
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 50
            echo "            <tr class=\"products\">
                <td>
                    <input class=\"checkbox\" type=\"checkbox\" name=\"check[]\" value=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"), "html", null, true);
            echo "\">
                </td>
                <td>
                    ";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"), "html", null, true);
            echo "
                    <input type=\"hidden\" name=\"id\" value=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"), "html", null, true);
            echo "\">
                </td>
                <td>
                    <a href=\"/admin/product?id=";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"), "html", null, true);
            echo "\">

                        ";
            // line 61
            if ((($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "image") == "noimage.png") || (!$this->getAttribute((isset($context["product"]) ? $context["product"] : null), "image", array(), "any", true, true)))) {
                // line 62
                echo "                        <img class=\"avatars\" src=\"/admin/theme/assets/img/noimage.png\" alt=\"\">
                        ";
            } else {
                // line 64
                echo "                        <img class=\"avatars\" src=\"/uploads/products/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "image"), "html", null, true);
                echo "\" alt=\"\">
                        ";
            }
            // line 66
            echo "
                        ";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name"), "html", null, true);
            echo "
                    </a>
                </td>
                <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price"), "html", null, true);
            echo "</td>
                <td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "amount"), "html", null, true);
            echo " шт.</td>
                <td class=\"description\">";
            // line 72
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description"), 0, 50), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 74
            if (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "visible") == 1)) {
                // line 75
                echo "                    <input disabled data-toggle=\"toggle\" type=\"checkbox\" value=\"1\" name=\"visible\" checked>
                    ";
            } else {
                // line 77
                echo "                    <input disabled data-toggle=\"toggle\" type=\"checkbox\" value=\"1\" name=\"visible\">
                    ";
            }
            // line 79
            echo "                </td>
                <td>
                    ";
            // line 81
            if (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "bestseller") == 1)) {
                // line 82
                echo "                    <img src=\"/admin/theme/assets/img/hit.png\" alt=\"\" width=\"40\">
                    ";
            }
            // line 84
            echo "                </td>
                <td>
                    <a class=\"view_on_site\" href=\"/products/";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "url"), "html", null, true);
            echo "\" title=\"Посмотреть на сайте\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" viewBox=\"0 0 460 460\" width=\"30px\" height=\"30px\">
                            <path d=\"M0,67.5v285h460v-285H0z M30,97.5h400v225H30V97.5z M130,362.5l-20,20v10h240v-10l-20-20H130z\" fill=\"currentColor\"></path>
                        </svg>
                    </a>
                </td>
                <td>
                    <label class=\"label_for_hidden_del\">X
                        <input class=\"hidden_del\" type=\"submit\" name=\"del[]\" value=\"";
            // line 94
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
        // line 99
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
        return array (  205 => 99,  194 => 94,  183 => 86,  179 => 84,  175 => 82,  173 => 81,  169 => 79,  165 => 77,  161 => 75,  159 => 74,  154 => 72,  150 => 71,  146 => 70,  140 => 67,  137 => 66,  131 => 64,  127 => 62,  125 => 61,  120 => 59,  114 => 56,  110 => 55,  104 => 52,  100 => 50,  96 => 49,  76 => 31,  70 => 28,  65 => 25,  63 => 24,  60 => 23,  52 => 18,  49 => 17,  47 => 16,  34 => 6,  31 => 5,  28 => 4,);
    }
}
