<?php

/* SiteRisingAionBundle:AionViews:register.html.twig */
class __TwigTemplate_697cb396f2cd5f87431cc6e56b0ec3683983ba9459654a6d75acf5b5b6325ead extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SiteRisingAionBundle:AionViews:index.html.twig");

        $this->blocks = array(
            'register' => array($this, 'block_register'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SiteRisingAionBundle:AionViews:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_register($context, array $blocks = array())
    {
        echo "\t\t\t
<article class=\"content\">
<div class=\"page-title\">Square des inscriptions</div>
        <div class=\"img-page\">
                <div class=\"r-cadre-infos\">
                        <div class=\"c-title\">Les inscriptions c'est par ici Daeva !</div>
                        <div class=\"c-desc\">
                            Vous souhaitez venir aux abords de l'embarcadère de Rising ?</br>
                                Alors, merci de remplir les champs ci-dessous.
                        </div>
                </div>
                <section class=\"p-cont\">\t\t\t\t\t\t\t\t\t
                   ";
        // line 15
        $this->env->loadTemplate("SiteRisingAionBundle:AionViews:FormulaireInscription.html.twig")->display($context);
        echo "        
                </section>
        </div>

</article><!-- end .content -->\t\t\t\t\t\t
";
    }

    public function getTemplateName()
    {
        return "SiteRisingAionBundle:AionViews:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 15,  28 => 3,);
    }
}
