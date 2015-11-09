<?php

/* AionShopBundle:ShopViews:RisingShopViews/Pagination.html.twig */
class __TwigTemplate_ed26484447fc67557df160ffd12da81cba911b5105576542ef73ebaeda336b21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<nav>
";
        // line 2
        if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > 1)) {
            // line 3
            echo "    <div class=\"paginate\">
    ";
            // line 4
            if ((array_key_exists("first", $context) && ((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")) != (isset($context["first"]) ? $context["first"] : $this->getContext($context, "first"))))) {
                // line 5
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["first"]) ? $context["first"] : $this->getContext($context, "first"))))), "html", null, true);
                echo "\">
            <li class=\"first-page\">first</li>
        </a>
    ";
            }
            // line 9
            echo "
    ";
            // line 10
            if (array_key_exists("previous", $context)) {
                // line 11
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["previous"]) ? $context["previous"] : $this->getContext($context, "previous"))))), "html", null, true);
                echo "\">
            <li class=\"previous-page\" >previous</li>
        </a>
    ";
            }
            // line 15
            echo "
    ";
            // line 16
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) ? $context["pagesInRange"] : $this->getContext($context, "pagesInRange")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 17
                echo "        ";
                if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) != (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")))) {
                    // line 18
                    echo "            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page"))))), "html", null, true);
                    echo "\">
                <li class=\"numb-page-view\">";
                    // line 19
                    echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                    echo "</li>
            </a>
        ";
                } else {
                    // line 22
                    echo "            <li class=\"numb-page-view\">";
                    echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                    echo "</li>
        ";
                }
                // line 24
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "
    ";
            // line 27
            if (array_key_exists("next", $context)) {
                // line 28
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["next"]) ? $context["next"] : $this->getContext($context, "next"))))), "html", null, true);
                echo "\">
            <li class=\"next-page\">next</li>
        </a>
    ";
            }
            // line 32
            echo "
    ";
            // line 33
            if ((array_key_exists("last", $context) && ((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")) != (isset($context["last"]) ? $context["last"] : $this->getContext($context, "last"))))) {
                // line 34
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["last"]) ? $context["last"] : $this->getContext($context, "last"))))), "html", null, true);
                echo "\">
            <li class=\"last-page\">last</li>
        </a>
    ";
            }
            // line 38
            echo "    </div>
";
        }
        // line 40
        echo "</nav>
";
    }

    public function getTemplateName()
    {
        return "AionShopBundle:ShopViews:RisingShopViews/Pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 40,  102 => 34,  97 => 32,  89 => 28,  84 => 26,  77 => 24,  65 => 19,  60 => 18,  57 => 17,  53 => 16,  50 => 15,  42 => 11,  40 => 10,  29 => 5,  27 => 4,  24 => 3,  37 => 9,  26 => 3,  23 => 2,  19 => 1,  336 => 169,  333 => 168,  329 => 167,  326 => 166,  320 => 21,  291 => 185,  285 => 182,  271 => 170,  268 => 168,  266 => 166,  253 => 155,  251 => 154,  245 => 151,  241 => 150,  237 => 149,  230 => 144,  228 => 143,  218 => 136,  213 => 133,  211 => 132,  200 => 123,  198 => 122,  191 => 117,  189 => 116,  182 => 111,  180 => 110,  173 => 105,  171 => 104,  164 => 99,  162 => 98,  153 => 92,  146 => 87,  144 => 86,  137 => 81,  135 => 80,  110 => 38,  105 => 60,  103 => 59,  58 => 30,  46 => 22,  44 => 21,  22 => 2,  155 => 93,  151 => 62,  145 => 59,  140 => 56,  129 => 52,  121 => 69,  117 => 46,  113 => 45,  107 => 44,  100 => 33,  92 => 35,  87 => 27,  81 => 30,  78 => 29,  73 => 31,  71 => 22,  56 => 14,  45 => 12,  41 => 11,  31 => 4,  28 => 3,);
    }
}
