<?php

/* AionShopBundle:ShopViews:RisingShopViews/sousMenuAutre/sousMenuAutre.html.twig */
class __TwigTemplate_e7468aec8f0edae2113bbbe03da479dd925d83e0f68ded8a6caf755091cceb60 extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["EmplacementAutre"]) ? $context["EmplacementAutre"] : $this->getContext($context, "EmplacementAutre")));
        foreach ($context['_seq'] as $context["_key"] => $context["autre"]) {
            // line 2
            echo "    <li>
        <a href=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("emplacementAutre", array("autre" => $this->getAttribute((isset($context["autre"]) ? $context["autre"] : $this->getContext($context, "autre")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["autre"]) ? $context["autre"] : $this->getContext($context, "autre")), "nom"), "html", null, true);
            echo "</a>
    </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['autre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "AionShopBundle:ShopViews:RisingShopViews/sousMenuAutre/sousMenuAutre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 6,  26 => 3,  23 => 2,  19 => 1,  336 => 169,  333 => 168,  329 => 167,  326 => 166,  320 => 21,  291 => 185,  285 => 182,  271 => 170,  268 => 168,  266 => 166,  253 => 155,  251 => 154,  245 => 151,  241 => 150,  237 => 149,  230 => 144,  228 => 143,  218 => 136,  213 => 133,  211 => 132,  200 => 123,  198 => 122,  191 => 117,  189 => 116,  182 => 111,  180 => 110,  173 => 105,  171 => 104,  164 => 99,  162 => 98,  153 => 92,  146 => 87,  144 => 86,  137 => 81,  135 => 80,  110 => 61,  105 => 60,  103 => 59,  58 => 30,  46 => 22,  44 => 21,  22 => 1,  155 => 93,  151 => 62,  145 => 59,  140 => 56,  129 => 52,  121 => 69,  117 => 46,  113 => 45,  107 => 44,  100 => 40,  92 => 35,  87 => 33,  81 => 30,  78 => 29,  73 => 31,  71 => 27,  56 => 14,  45 => 12,  41 => 11,  31 => 4,  28 => 3,);
    }
}
