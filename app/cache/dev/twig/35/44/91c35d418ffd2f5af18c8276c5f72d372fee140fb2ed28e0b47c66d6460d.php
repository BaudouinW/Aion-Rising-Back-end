<?php

/* SiteRisingUserBundle::profile.html.twig */
class __TwigTemplate_354491c35d418ffd2f5af18c8276c5f72d372fee140fb2ed28e0b47c66d6460d extends Twig_Template
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
        echo "<div class=\"m-cont\">
    <center>
            <span class=\"w-message\">Vous êtes connecté en tant que <span class=\"w-name\">";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "html", null, true);
        echo "</span>.</span><br/>
            Vous disposez de : <a href=\"#\">";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getCashShopMoney"), "html", null, true);
        echo "</a> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siterisingaion/images/coin.png"), "html", null, true);
        echo "\"><br/>
            <a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("site_rising_shop");
        echo "\">Boutique Rising</a><br/>
            <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("site_rising_userProfile");
        echo "\">Mon profil</a><br/>
            <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">Se deconnecter</a>
    </center>
</div>
";
    }

    public function getTemplateName()
    {
        return "SiteRisingUserBundle::profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 7,  37 => 6,  33 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
