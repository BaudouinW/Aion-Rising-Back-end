<?php

/* SiteRisingAionBundle:Aionviews:joinUs.html.twig */
class __TwigTemplate_c2df1fa005d349f07f47f564e0ce8de94b1b5ce03dd0b423b87c42c12662db67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SiteRisingAionBundle:AionViews:index.html.twig");

        $this->blocks = array(
            'nousRejoindre' => array($this, 'block_nousRejoindre'),
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

    // line 4
    public function block_nousRejoindre($context, array $blocks = array())
    {
        // line 5
        echo "<article class=\"content\">
<div class=\"page-title\">Square des nouveaux Daevas</div>
        <div class=\"img-page joinus\">
                <div class=\"r-cadre-infos\">
                        <div class=\"c-title\">Premier pas sur le serveur Rising ?</div>
                        <div class=\"c-desc\">
                                Sachez qu'ici tout est possible à l'intrépide,
                                il vous suffit de suivre le guide.<br/>
                                Si vous n'avez pas encore de compte, c'est <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">ICI</a>.
                        </div>
                </div>
                <section class=\"p-cont\">
                        <div class=\"step\">\t\t\t\t\t\t\t\t\t
                                <div class=\"step-title\"> <span class=\"numb\">1</span> Installation du client</div>
                                <div class=\"clearfloat\"></div>
                                <div class=\"step-cont\">
                                        <div class=\"arrow clearfloat\">a</div> Télécharger le jeu via le site officiel <a href=\"http://en.aion.gameforge.com/website/download/\">GameForge</a>.<br/>
                                        <div class=\"arrow clearfloat\">a</div> Une fois téléchargé, lancez le et attendez la fin de l'installation.
                                </div>
                        </div>
                        <div class=\"step\">\t\t\t\t\t\t\t\t\t
                                <div class=\"step-title\"> <span class=\"numb\">2</span> Téléchargement du jeu</div>
                                <div class=\"clearfloat\"></div>
                                <div class=\"step-cont\">
                                        <div class=\"arrow clearfloat\">a</div> Lancez le launcher GameForge Live une fois installé.<br/>
                                        <div class=\"arrow clearfloat\">a</div> Séléctionnez Aion et cliquez sur JOUER.<br/>
                                        <div class=\"arrow clearfloat\">a</div> Cliquez sur le bouton orange \"Lancer les mises à jour\". Attendez la fin du téléchargement.
                                </div>
                        </div>
                        <div class=\"step\">\t\t\t\t\t\t\t\t\t
                                <div class=\"step-title\"> <span class=\"numb\">3</span> Installation du launcher Rising</div>
                                <div class=\"clearfloat\"></div>
                                <div class=\"step-cont\">
                                        <div class=\"arrow clearfloat\">a</div> Téléchargé le launcher Rising <a href=\"#\">ICI</a>.<br/>
                                        <div class=\"arrow clearfloat\">a</div> Une fois téléchargé, veuillez le mettre à cette emplacement:<br/>
                                        \"C:\\Program Files (x86)\\GameforgeLive\\Games\\FRA_fr\\Aion\\Download\").<br/>
                                        <div class=\"arrow clearfloat\">a</div> Une fois mis en place, lancez ce dernier.

                                </div>
                        </div><br/>\t\t\t\t\t\t\t\t\t
                        <div class=\"endless-desc\">
                                Votre quête peut maintenant commencer. Faites preuve de bravoure, d'intelligence et d'héroïsme.<br/>
                                Préparez-vous à vivre une aventure hors du commun : les Rising n'attendent que vous !
                        </div>
                </section>
        </div>

</article><!-- end .content -->
";
    }

    public function getTemplateName()
    {
        return "SiteRisingAionBundle:Aionviews:joinUs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 13,  31 => 5,  28 => 4,);
    }
}
