<?php

/* SiteRisingAionBundle:AionViews:index.html.twig */
class __TwigTemplate_4c4802f87cf26b17ccb50b452b3afce889e76a6a7f545c876144da3c1da47bd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SiteRisingAionBundle::layout.html.twig");

        $this->blocks = array(
            'page' => array($this, 'block_page'),
            'register' => array($this, 'block_register'),
            'news' => array($this, 'block_news'),
            'profile' => array($this, 'block_profile'),
            'nousRejoindre' => array($this, 'block_nousRejoindre'),
            'confirmeRegister' => array($this, 'block_confirmeRegister'),
            'registerLog' => array($this, 'block_registerLog'),
            'forgetPassword' => array($this, 'block_forgetPassword'),
            'newPassword' => array($this, 'block_newPassword'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SiteRisingAionBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"top-cont\"></div>
\t\t\t<div class=\"page-repeat\">
\t\t\t\t<div class=\"page-head\">
\t\t\t\t\t<div class=\"page-foot\">
\t\t\t\t\t\t<div class=\"sidebar\">
\t\t\t\t\t\t\t<aside>
\t\t\t\t\t\t\t\t<div class=\"membership\">
\t\t\t\t\t\t\t\t<span class=\"m-title\">Menu Membre</span>
                                                                    ";
        // line 12
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 13
            echo "                                                                        ";
            $this->env->loadTemplate("SiteRisingUserBundle::profile.html.twig")->display($context);
            // line 14
            echo "                                                                    ";
        } else {
            // line 15
            echo "\t\t\t\t\t\t\t\t\t";
            $this->env->loadTemplate("SiteRisingUserBundle::connexion.html.twig")->display($context);
            // line 16
            echo "                                                                    ";
        }
        // line 17
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"sdb-divide\">Divide</div><!-- barre de separation-->
\t\t\t\t\t\t\t\t<div class=\"sdb-r-title\">STATISTIQUE DU SERVEUR</div>
\t\t\t\t\t\t\t\t<p class=\"stats-server\">
\t\t\t\t\t\t\t\t\tServeur de jeu : <span class=\"online-s\">En ligne</span></br>
\t\t\t\t\t\t\t\t\tUpTime : <span class=\"online-s\">8heure(s) 12min </span></br>
\t\t\t\t\t\t\t\t\tTeamSpeak : <span class=\"online-s\">En ligne</span></br>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<span class=\"online-title\">Joueur(s) en ligne</span>
\t\t\t\t\t\t\t\t<div class=\"online-players\">
\t\t\t\t\t\t\t\t\t<div class=\"inner-progress\" style=\"width:125px;\"></div><!-- Taille de la jauge de progression 250px maximum-->
\t\t\t\t\t\t\t\t\t<span class=\"count-online\">250/500</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"sdb-divide\">Divide</div><!-- barre de separation-->
\t\t\t\t\t\t\t\t<div class=\"sdb-r-title\">Classement top 5</div>

\t\t\t\t\t\t\t\t<div class=\"top-rank\" style=\"width:265px;\">
\t\t\t\t\t\t\t\t\t<table >
\t\t\t\t\t\t\t\t\t\t<tr> 
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\tRang
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td >
\t\t\t\t\t\t\t\t\t\t\t\tJoueur
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\tClasse
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\tPoints
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td >
\t\t\t\t\t\t\t\t\t\t\t\t1
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\tTintin
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siterisingaion/images/class/icon_emblem_bard.png"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t65000
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td >
\t\t\t\t\t\t\t\t\t\t\t\t2
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\tZoumzo
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siterisingaion/images/class/icon_emblem_gunner.png"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t64000
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td >
\t\t\t\t\t\t\t\t\t\t\t\t3
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\tTinzo
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siterisingaion/images/class/icon_emblem_rider.png"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t63000
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>\t
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td >
\t\t\t\t\t\t\t\t\t\t\t\t4
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\tSinza
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siterisingaion/images/class/icon_emblem_knight.png"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t62000
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td >
\t\t\t\t\t\t\t\t\t\t\t\t5
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\tIntiz
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siterisingaion/images/class/icon_emblem_bard.png"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t61000
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"sdb-r-title\" id=\"vote\">Square des votes</div>
                                                                <nav>
                                                                    ";
        // line 125
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 126
            echo "                                                                    ";
            $this->env->loadTemplate("SiteRisingAionBundle:AionViews:VotedSquare.html.twig")->display($context);
            // line 127
            echo "                                                                    ";
        } else {
            // line 128
            echo "                                                                    <p><font color=\"white\">Vous devez vous inscrire pour avoir accès à la section de vote.Merci</font></p>
                                                                    ";
        }
        // line 130
        echo "                                                                    <div class=\"clearfloat\"></div>

                                                                </nav>
\t\t\t\t\t\t\t\t<span class=\"vote-info\">
\t\t\t\t\t\t\t\t\tVote rpg toutes les 1h</br> Vote Gowonda toutes les 2h
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<div class=\"sdb-divide\">Divide</div><!-- barre de separation-->
\t\t\t\t\t\t\t\t


\t\t\t\t\t\t\t</aside>

\t\t\t\t\t\t</div><!-- end .sidebar -->
                                               ";
        // line 143
        $this->displayBlock('register', $context, $blocks);
        // line 145
        echo "                                               ";
        $this->displayBlock('news', $context, $blocks);
        // line 147
        echo "                                               ";
        $this->displayBlock('profile', $context, $blocks);
        // line 149
        echo "                                               ";
        $this->displayBlock('nousRejoindre', $context, $blocks);
        // line 151
        echo "                                               ";
        $this->displayBlock('confirmeRegister', $context, $blocks);
        // line 153
        echo "                                               ";
        $this->displayBlock('registerLog', $context, $blocks);
        // line 155
        echo "                                               ";
        $this->displayBlock('forgetPassword', $context, $blocks);
        // line 157
        echo "                                               ";
        $this->displayBlock('newPassword', $context, $blocks);
        // line 159
        echo "\t\t\t\t\t\t<div class=\"clearfloat\"></div>
\t\t\t\t\t</div><!-- end .page-foot-->
\t\t\t\t</div><!-- end .page-head-->
\t\t\t</div><!-- end .page-repeat-->
";
    }

    // line 143
    public function block_register($context, array $blocks = array())
    {
        // line 144
        echo "                                               ";
    }

    // line 145
    public function block_news($context, array $blocks = array())
    {
        // line 146
        echo "                                               ";
    }

    // line 147
    public function block_profile($context, array $blocks = array())
    {
        // line 148
        echo "                                               ";
    }

    // line 149
    public function block_nousRejoindre($context, array $blocks = array())
    {
        // line 150
        echo "                                               ";
    }

    // line 151
    public function block_confirmeRegister($context, array $blocks = array())
    {
        // line 152
        echo "                                               ";
    }

    // line 153
    public function block_registerLog($context, array $blocks = array())
    {
        // line 154
        echo "                                               ";
    }

    // line 155
    public function block_forgetPassword($context, array $blocks = array())
    {
        // line 156
        echo "                                               ";
    }

    // line 157
    public function block_newPassword($context, array $blocks = array())
    {
        // line 158
        echo "                                               ";
    }

    public function getTemplateName()
    {
        return "SiteRisingAionBundle:AionViews:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 158,  295 => 157,  291 => 156,  288 => 155,  284 => 154,  281 => 153,  277 => 152,  274 => 151,  270 => 150,  267 => 149,  263 => 148,  260 => 147,  256 => 146,  253 => 145,  249 => 144,  246 => 143,  238 => 159,  235 => 157,  232 => 155,  229 => 153,  226 => 151,  223 => 149,  220 => 147,  217 => 145,  215 => 143,  200 => 130,  196 => 128,  193 => 127,  190 => 126,  188 => 125,  174 => 114,  157 => 100,  140 => 86,  123 => 72,  105 => 57,  60 => 16,  57 => 15,  54 => 14,  51 => 13,  49 => 12,  39 => 4,  36 => 3,  73 => 35,  63 => 17,  52 => 20,  42 => 13,  31 => 4,  28 => 3,);
    }
}
