<?php

/* SiteRisingAionBundle:AionViews:accueil.html.twig */
class __TwigTemplate_6918daaa9f30f68b5659d8ab992962564a3b7af94379a0027d9656a4e969f0a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SiteRisingAionBundle:AionViews:index.html.twig");

        $this->blocks = array(
            'news' => array($this, 'block_news'),
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
    public function block_news($context, array $blocks = array())
    {
        // line 4
        echo "<article class=\"content\">
<div class=\"page-title\">Actualités récentes</div>

        <section>
                <div class=\"news-title\">Maintenance hebdomadaire du 19.06.2014</div>
                <div class=\"meta\">
                        Posté le <span class=\"meta-color\">19 juin 2014</span> à <span class=\"meta-color\">22:51</span> par <span class=\"meta-color\">Thenice</span> dans <span class=\"meta-color\">Annonce</span> 
                </div>
                <div class=\"img-news-categ\">
                        <img class=\"news-category\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siterisingaion/images/news-category/maintenance.jpg"), "html", null, true);
        echo "\">
                </div>

                <p>Notez que le code CSS de ces mises en forme contient une grande quantité de commentaires. Si vous travaillez principalement en mode Création, jetez un coup d'œil au code afin d'obtenir des conseils sur l'utilisation du code CSS pour les mises en forme fixes. Vous pouvez supprimer ces commentaires avant de lancer votre site. Pour en savoir plus sur les techniques utilisées dans ces mises en forme CSS, consultez l'article suivant sur le Pôle de développement Adobe .</p>

                <a href=\"#\" class=\"read-more\">Lire plus...</a>
                <div class=\"clearfloat\"></div>
                <div class=\"divide\"><img class=\"divide-news\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siterisingaion/images/divide-news.png"), "html", null, true);
        echo "\" align=\"center\"></div>
        </section>
        <section>
                <div class=\"news-title\">Ce qui vous attend sur Rising</div>
                <div class=\"meta\">
                        Posté le <span class=\"meta-color\">19 juin 2014</span> à <span class=\"meta-color\">22:51</span> par <span class=\"meta-color\">Thenice</span> dans <span class=\"meta-color\">Annonce</span> 
                </div>
                <div class=\"img-news-categ\">
                        <img class=\"news-category\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siterisingaion/images/news-category/announce.jpg"), "html", null, true);
        echo "\">
                </div>

                <p>Notez que le code CSS de ces mises en forme contient une grande quantité de commentaires. Si vous travaillez principalement en mode Création, jetez un coup d'œil au code afin d'obtenir des conseils sur l'utilisation du code CSS pour les mises en forme fixes. Vous pouvez supprimer ces commentaires avant de lancer votre site. Pour en savoir plus sur les techniques utilisées dans ces mises en forme CSS, consultez l'article suivant sur le Pôle de développement Adobe .</p>

                <a href=\"#\" class=\"read-more\">Lire plus...</a>
                <div class=\"clearfloat\"></div>
                <div class=\"divide\"><img class=\"divide-news\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siterisingaion/images/divide-news.png"), "html", null, true);
        echo "\" align=\"center\"></div>
        </section>

        <a href=\"#\" class=\"view-more\">Afficher plus</a>
</article><!-- end .content -->
";
    }

    public function getTemplateName()
    {
        return "SiteRisingAionBundle:AionViews:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 35,  63 => 28,  52 => 20,  42 => 13,  31 => 4,  28 => 3,);
    }
}
