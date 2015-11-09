<?php

/* AionShopBundle::ShopRising.html.twig */
class __TwigTemplate_85de6640a8f042ab68942a3cc8f334edd6bbb3034611a704d00a77b7a61af8d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'accueil' => array($this, 'block_accueil'),
            'items' => array($this, 'block_items'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"content-style-type\" content=\"text/css\">
        <meta property=\"og:title\" content=\"Aion Rising - Serveur Privé Aion\">
        <meta name=\"revisit-after\" content=\"5 Days\">
        <meta name=\"Description\" content=\"Venez vivre des moments fabuleux grâce à notre serveur privé Aion ! On attend que vous !\">
        <meta name=\"Abstract\" content=\"Venez vivre des moments fabuleux grâce à notre serveur privé Aion ! On attend que vous !\">
        <meta name=\"Keywords\" content=\"Serveur, Aion, privé, français, francais, gratuit, free, mmorpg\">
        <meta name=\"author\" content=\"TheNice\">
        <meta name=\"subject\" content=\"Aion Serveur\">
        <meta name=\"Classification\" content=\"Aion serveur gratuit\">
        <meta name=\"publisher\" content=\"Aion-fr - www.aion-rising.fr\">
        <meta name=\"distribution\" content=\"Global\">
        <meta name=\"resource-type\" content=\"document\">
        <meta name=\"copyright\" content=\"2012, 2014, Aion Rising, L'Equipe Aion Rising\">
        <meta name=\"robots\" content=\"index, follow, all\">
        <meta name=\"identifier-url\" content=\"http://www.aion-rising.fr\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"iE=EmulateiE7\">
  \t";
        // line 21
        $this->displayBlock('title', $context, $blocks);
        // line 22
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/aionshop/css/shop.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <!--[if lt IE 9]>
        <script src=\"http://html5shiv.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
        <!--[if lt IE 7 ]> <html class=\"ie6\" lang=\"en\"> <![endif]-->
        <!--[if IE 7 ]>    <html class=\"ie7\" lang=\"en\"> <![endif]-->
        <!--[if IE 8 ]>    <html class=\"ie8\" lang=\"en\"> <![endif]-->
        <!--[if (gte IE 9)|!(IE)]><!--> <html lang=\"en\"> <!--<![endif]-->
\t";
        // line 30
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "6672758_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6672758_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/6672758_jquery-1.9.1.min_1.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"), "html", null, true);
            echo "\"></script>";
        } else {
            // asset "6672758"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6672758") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/6672758.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"), "html", null, true);
            echo "\"></script>";
        }
        unset($context["asset_url"]);
        // line 31
        echo "<script type=\"text/javascript\">

var bind_shop = function()
{
\t\$('a button.btn-add').on('click', function(e){
\te.stopPropagation();
\te.preventDefault();
\tvar href = \$(this).parent().attr('href');
\tvar selectVal = \$('#select-perso').val();
\tif(selectVal == '0')
\t\treturn false ;
\thref = href.substring(0, href.length - 1)  + selectVal;
\twindow.location.href = href ;
\t});
};
\$( document ).ready(function() {
\tbind_shop();
});

</script>
    </head>

    <body>
        <div class=\"owner\">
            <div class=\"wrapper_in\">
                <div class=\"container\">
                    <div class=\"top-link\">
                        <nav>
                            ";
        // line 59
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("AionShopBundle:User:infoCo"), array());
        // line 60
        echo "                            <li class=\"link-follow\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("site_rising_accueil");
        echo "\">Retour au site</a></li>
                            <li class=\"logout\"><a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">Deconnexion</a></li>
                        </nav>
                    </div>
                    <header>
                        <div class=\"btn-buy-rg\">
                            <a href=\"#\" class=\"buy\">acheter des rg</a>
                        </div>
                        <div class=\"btn-earn-rg\">
                            <a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("site_rising_accueil");
        echo "\" class=\"earn-rg\">gagner des rg</a>
                        </div>
                    </header>
                    <div class=\"top-cont\">
                        <div class=\"menu\">
                            <nav class=\"menu-nav\">
                                <ul>
                                    <li class=\"m-pvp\"><a href=\"#\">Item PvP</a>
                                        <ul>
                                            <li>
                                                <ul>
                                                   ";
        // line 80
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("AionShopBundle:Emplacement:sousMenuArme"), array());
        // line 81
        echo "                                                </ul>
                                                <a href=\"#\" class=\"arrow-menu\">Armes</a>
                                            </li>
                                            <li>
                                                <ul>
                                                    ";
        // line 86
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("AionShopBundle:Emplacement:sousMenuCuir"), array());
        // line 87
        echo "                                                </ul>
                                                <a href=\"#\" class=\"arrow-menu\">Cuir</a>
                                            </li>
                                            <li>
                                                <ul>
                                                   ";
        // line 92
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("AionShopBundle:Emplacement:sousMenuCuirMagique"), array());
        // line 93
        echo "                                                </ul>
                                                <a href=\"#\" class=\"arrow-menu\">Cuir-magique</a>
                                            </li>
                                            <li>
                                                <ul>
                                                   ";
        // line 98
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("AionShopBundle:Emplacement:sousMenuMaille"), array());
        // line 99
        echo "                                                </ul>
                                                <a href=\"#\" class=\"arrow-menu\">Maille</a>
                                            </li>
                                            <li>
                                                <ul>
                                                  ";
        // line 104
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("AionShopBundle:Emplacement:sousMenuMaillePhysique"), array());
        // line 105
        echo "                                                </ul>
                                                <a href=\"#\" class=\"arrow-menu\">Maille-physique</a>
                                            </li>
                                            <li>
                                                <ul>
                                                   ";
        // line 110
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("AionShopBundle:Emplacement:sousMenuTissu"), array());
        // line 111
        echo "                                                </ul>
                                                <a href=\"#\" class=\"arrow-menu\">Tissu</a>
                                            </li>
                                            <li>
                                                <ul>
                                                   ";
        // line 116
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("AionShopBundle:Emplacement:sousMenuPlate"), array());
        // line 117
        echo "                                                </ul>
                                                <a href=\"#\" class=\"arrow-menu\">Plate</a>
                                            </li>
                                            <li>
                                                <ul>
                                                   ";
        // line 122
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("AionShopBundle:Emplacement:sousMenuBijoux"), array());
        // line 123
        echo "                                                </ul>
                                                <a href=\"#\" class=\"arrow-menu\">Bijoux</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=\"m-pve\"><a href=\"#\">Item PvE</a>
                                        <ul>
                                            <li>
                                                <ul>
                                                   ";
        // line 132
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("AionShopBundle:Emplacement:sousMenuArmePvE"), array());
        // line 133
        echo "                                                </ul>
                                                <a href=\"#\" class=\"arrow-menu\">Armes</a>
                                            </li>
                                            <li><a href=\"";
        // line 136
        echo $this->env->getExtension('routing')->getPath("ailes");
        echo "\" >Ailes</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"m-enchant\"><a href=\"#\">Enchantements</a>
                                        <ul>
                                            <li>
                                                <ul>
                                                    ";
        // line 143
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("AionShopBundle:Emplacement:sousMenuEnchant"), array());
        // line 144
        echo "                                                </ul>
                                                <a href=\"#\" class=\"arrow-menu\">Pierre de mana</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=\"m-food\"><a href=\"";
        // line 149
        echo $this->env->getExtension('routing')->getPath("nourriture");
        echo "\">Nourritures</a></li>
                                    <li class=\"m-pet\"><a href=\"";
        // line 150
        echo $this->env->getExtension('routing')->getPath("familier");
        echo "\">Familiers</a></li>
                                    <li class=\"m-mount\"><a href=\"";
        // line 151
        echo $this->env->getExtension('routing')->getPath("monture");
        echo "\">Montures</a></li>
                                    <li class=\"m-other\"><a href=\"#\" >Autres</a>
                                        <ul>
                                           ";
        // line 154
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("AionShopBundle:Emplacement:sousMenuAutre"), array());
        // line 155
        echo "                                        </ul>
                                    </li>

                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class=\"page-repeat\">
                        <div class=\"page-head\">
                            <div class=\"page-foot\">
                                <article class=\"content\">
                                ";
        // line 166
        $this->displayBlock('accueil', $context, $blocks);
        // line 168
        echo "\t\t\t\t";
        $this->displayBlock('items', $context, $blocks);
        // line 170
        echo "                                </article><!-- end .content -->
                                <div class=\"clearfloat\"></div>
                            </div><!-- end .page-foot-->
                        </div><!-- end .page-head-->
                    </div><!-- end .page-repeat-->
                    <div class=\"bottom-cont\"></div>
                    <footer role=\"contentinfo\"></footer>
                </div><!-- end .container -->
            </div><!-- end .wrapper_in -->
            <div class=\"footer\">
                <div class=\"footer_in\">
                    <div class=\"r-logo\">
                        <img src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/aionshop/image/logo.png"), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"w-logo\">
                        <img src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/aionshop/image/c-thenice.png"), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"footer-welcome\">
                        Bienvenue dans la boutique Rising ! Devenez un véritable héros en vous procurant des bienfaits de celle-ci. Partez à l'aventure avec nous dans ce MMORPG à l'action inégalée !
                    </div>
                    <div class=\"footer-link\">
                        <nav>
                            <a href=\"\">Aion Rising</a>   |   <a href=\"\">Forum</a>  |  <a href=\"\">Règles générales</a>  |  <a href=\"\">Support</a>
                        </nav>
                    </div>
                    <div class=\"footer-sep\"></div>
                    <div class=\"footer-copyright\">
                        Copyright © 2014 <span class=\"r-color\">Aion Rising</span>. Touts droits réservés.<br/>
                        Le site est présent à but éducatif et n'a aucune relation avec d'autres compagnies.<br/>
                        Il est interdit de copier partiellement ou entièrement le site. Les images et les fonctionnalités présentes sont la propriété de <span class=\"r-color\">Aion Rising</span>.
                        <br/>
                        Designed by <span class=\"r-color\">TheNice</span> | Coded by <span class=\"r-color\">Hatsuyo</span>.
                    </div>

                </div>
            </div>
        </div><!-- end .owner -->
    </body>
</html>
";
    }

    // line 21
    public function block_title($context, array $blocks = array())
    {
        echo "<title>..::Aion Rising | Shop::..</title>";
    }

    // line 166
    public function block_accueil($context, array $blocks = array())
    {
        // line 167
        echo "                                ";
    }

    // line 168
    public function block_items($context, array $blocks = array())
    {
        // line 169
        echo "                                ";
    }

    public function getTemplateName()
    {
        return "AionShopBundle::ShopRising.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  336 => 169,  333 => 168,  329 => 167,  326 => 166,  320 => 21,  291 => 185,  285 => 182,  271 => 170,  268 => 168,  266 => 166,  253 => 155,  251 => 154,  245 => 151,  241 => 150,  237 => 149,  230 => 144,  228 => 143,  218 => 136,  213 => 133,  211 => 132,  200 => 123,  198 => 122,  191 => 117,  189 => 116,  182 => 111,  180 => 110,  173 => 105,  171 => 104,  164 => 99,  162 => 98,  153 => 92,  146 => 87,  144 => 86,  137 => 81,  135 => 80,  110 => 61,  105 => 60,  103 => 59,  58 => 30,  46 => 22,  44 => 21,  22 => 1,  155 => 93,  151 => 62,  145 => 59,  140 => 56,  129 => 52,  121 => 69,  117 => 46,  113 => 45,  107 => 44,  100 => 40,  92 => 35,  87 => 33,  81 => 30,  78 => 29,  73 => 31,  71 => 27,  56 => 14,  45 => 12,  41 => 11,  31 => 4,  28 => 3,);
    }
}
