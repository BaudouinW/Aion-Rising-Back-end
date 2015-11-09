<?php

/* AionShopBundle:ShopViews:RisingShopViews/Items.html.twig */
class __TwigTemplate_f1834fe8cca77303774f0a03564919b360e84dd32c5f3e9372ea44c23c8e9742 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AionShopBundle::ShopRising.html.twig");

        $this->blocks = array(
            'items' => array($this, 'block_items'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AionShopBundle::ShopRising.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_items($context, array $blocks = array())
    {
        // line 4
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("RasFlashAlertBundle:Alert:displayAlerts"));
        echo "
<div class=\"head-item-view\">
    <div class=\"search\">
        <form>
            <label>Personnage :</label>
            <select id=\"select-perso\">
                <option selected=\"selected\" value=\"0\">Choississez le personnage</option>
                ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["players"]) ? $context["players"] : $this->getContext($context, "players")));
        foreach ($context['_seq'] as $context["_key"] => $context["perso"]) {
            // line 12
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["perso"]) ? $context["perso"] : $this->getContext($context, "perso")), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["perso"]) ? $context["perso"] : $this->getContext($context, "perso")), "name"), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['perso'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "            </select>
        </form>
    </div>
</div>
<section>
    <div class=\"head-tab\">
        <nav>
            <li class=\"item-name\">Nom de l'item</li>
            <li class=\"item-level\">Quantité</li>
            <li class=\"item-price\">Prix</li>
            <li class=\"item-action\">Action</li>
        </nav>
    </div>
    ";
        // line 27
        if ((twig_length_filter($this->env, (isset($context["items"]) ? $context["items"] : $this->getContext($context, "items"))) != 0)) {
            // line 28
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 29
                echo "    <div class=\"item-list\">
        <div class=\"item-pic\"><img src=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/aionshop/image/img-unknow-item.png"), "html", null, true);
                echo "\"></div>
        <span class=\"item-v-name\">
            <div class=\"item-text-n\">
                <h3 class=\"eternal\">";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "nom"), "html", null, true);
                echo "</h3>
                <div class=\"desc\">
                    Plus d'information sur l'item <a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "lien"), "html", null, true);
                echo "\"> ici</a>.
                </div>
            </div>
        </span>
        <span class=\"item-v-level\">
         ";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "packet"), "html", null, true);
                echo "
        </span>
        <span class=\"item-v-price\">
            <div class=\"item-text-p\">
                <img src=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/aionshop/image/money/rggold.png"), "html", null, true);
                echo "\"> <span class=\"rgcolor\">Rising Gold:</span>  ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "prix"), "html", null, true);
                echo " <br/>
                <!--<img src=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/aionshop/image/money/pvp-gold.png"), "html", null, true);
                echo "\"> <span class=\"pgcolor\">PvP Gold:</span> 250 <br/>
                <img src=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/aionshop/image/money/bg-gold.png"), "html", null, true);
                echo "\"> <span class=\"bgcolor\">BG Gold:</span> 250 <br/>
                <img src=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/aionshop/image/money/ffa-gold.png"), "html", null, true);
                echo "\"> <span class=\"fgcolor\">FFA Gold:</span> 250 <br/> -->
            </div>
        </span>
        <span class=\"item-v-action\">
            <div class=\"item-text-a\">
                <a href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("acheter", array("item" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"), "perso" => "_")), "html", null, true);
                echo "\"><button class=\"btn-add\" name=\"btn-add\" ></button></a>
            </div>
        </span>
    </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "<!--repeat-->
    <div class=\"clearfloat\"></div> <!--A ne pas supprimer-->
    <div class=\"paginate\">
        ";
            // line 59
            echo $this->env->getExtension('knp_pagination')->render((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")));
            echo "
    </div>
    ";
        } else {
            // line 62
            echo "    <center>Aucun item</center>
    ";
        }
        // line 64
        echo "
</section>
";
    }

    public function getTemplateName()
    {
        return "AionShopBundle:ShopViews:RisingShopViews/Items.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 64,  151 => 62,  145 => 59,  140 => 56,  129 => 52,  121 => 47,  117 => 46,  113 => 45,  107 => 44,  100 => 40,  92 => 35,  87 => 33,  81 => 30,  78 => 29,  73 => 28,  71 => 27,  56 => 14,  45 => 12,  41 => 11,  31 => 4,  28 => 3,);
    }
}
