<?php

/* SiteRisingAionBundle::layout.html.twig */
class __TwigTemplate_4cfce8f9424c96931f2706dc7c920a76fd50aa074d0b2c4f8023338605979a87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page' => array($this, 'block_page'),
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
        <title>";
        // line 21
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siterisingaion/css/index.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" >
        <!--[if lt IE 9]>
        <script src=\"http://html5shiv.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
        <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siterisingaion/themes/default/default.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
        <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siterisingaion/css/nivo-slider.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
\t";
        // line 28
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
        // line 29
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "27199a2_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_27199a2_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/27199a2_jquery.nivo.slider_1.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siterisingaion/js/jquery.nivo.slider.js"), "html", null, true);
            echo "\"></script>";
        } else {
            // asset "27199a2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_27199a2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/27199a2.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siterisingaion/js/jquery.nivo.slider.js"), "html", null, true);
            echo "\"></script>";
        }
        unset($context["asset_url"]);
        // line 30
        echo "\t";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "b2123a1_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b2123a1_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/b2123a1_voting_timer_rpg_1.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siterisingaion/js/voting_timer_rpg.js"), "html", null, true);
            echo "\"></script>";
        } else {
            // asset "b2123a1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b2123a1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/b2123a1.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siterisingaion/js/voting_timer_rpg.js"), "html", null, true);
            echo "\"></script>";
        }
        unset($context["asset_url"]);
        // line 31
        echo "\t";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "1505c13_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1505c13_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/1505c13_voting_timer_gowonda_1.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siterisingaion/js/voting_timer_gowonda.js"), "html", null, true);
            echo "\"></script>";
        } else {
            // asset "1505c13"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1505c13") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/1505c13.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siterisingaion/js/voting_timer_gowonda.js"), "html", null, true);
            echo "\"></script>";
        }
        unset($context["asset_url"]);
        // line 32
        echo "        <script type=\"text/javascript\">
            \$(window).load(function() {
                \$('#slider').nivoSlider({
                    effect: 'fade', // Specify sets like: 'fold,fade,sliceDown'
                    slices: 15, // For slice animations
                    boxCols: 8, // For box animations
                    boxRows: 4, // For box animations
                    animSpeed: 500, // Slide transition speed
                    pauseTime: 5000, // How long each slide will show
                    startSlide: 0, // Set starting Slide (0 index)
                    directionNav: true, // Next & Prev navigation
                    controlNav: false, // 1,2,3... navigation
                    controlNavThumbs: false, // Use thumbnails for Control Nav
                    pauseOnHover: true, // Stop animation while hovering
                    manualAdvance: false, // Force manual transitions
                    prevText: 'Prev', // Prev directionNav text
                    nextText: 'Next', // Next directionNav text
                    randomStart: false, // Start on a random slide
                    beforeChange: function() {
                    }, // Triggers before a slide transition
                    afterChange: function() {
                    }, // Triggers after a slide transition
                    slideshowEnd: function() {
                    }, // Triggers after all slides have been shown
                    lastSlide: function() {
                    }, // Triggers when last slide is shown
                    afterLoad: function() {
                    }         // Triggers when slider has loaded
                });


            });
        </script>

    </head>

    <body>
        <div class=\"owner\">
            <div class=\"container\">
                <div class=\"top-menu-left\">
                    <nav class=\"navigation-left\">
                        <a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("site_rising_accueil");
        echo "\">Accueil</a>
                    ";
        // line 74
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 75
            echo "                        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("site_rising_accueil");
            echo "\">S'inscrire</a>
                    ";
        } else {
            // line 77
            echo "                        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">S'inscrire</a>
                    ";
        }
        // line 79
        echo "                        <a href=\"#\">Nous rejoindre</a>
                    </nav>
                </div>
                <div class=\"top-menu-right\">
                    <nav class=\"navigation-right\">
                        <a href=\"#\">Classement</a>
                        <a href=\"http://forum.aion-rising.fr/\">Forum</a>
                        <a href=\"#\">Equipe</a>
                    </nav>
                </div>
                <header>
                    <div class=\"slide\">
                        <div class=\"slider-wrapper theme-default\">
                            <div id=\"slider\" class=\"nivoSlider\">
                                <img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siterisingaion/images/slider/bg1.jpg"), "html", null, true);
        echo "\" title=\"#htmlcaption1\" />
                                <img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siterisingaion/images/slider/bg1.jpg"), "html", null, true);
        echo "\" title=\"#htmlcaption2\" />
                            </div>
                            <div id=\"htmlcaption1\" class=\"nivo-html-caption\">
                                <span class=\"title-flash-news\">Ouverture du serveur Aion-Rising</span><br>
                                Le commencement d’une nouvelle ère d’avalanche ! 
                            </div>
                            <div id=\"htmlcaption2\" class=\"nivo-html-caption\">
                                <span class=\"title-flash-news\">Ouverture du Aion-Rising</span><br>
                                Le commencement d’une nouvelle ère d’avalanche !
                            </div>
                        </div>
                    </div>

                    <div class=\"download-btn\">
                        <a href=\"";
        // line 108
        echo $this->env->getExtension('routing')->getPath("site_rising_joinUs");
        echo "\" class=\"second-btn-play\">Telechargement</a>
                    </div>
                </header>           
            ";
        // line 111
        $this->displayBlock('page', $context, $blocks);
        // line 112
        echo "   
                <footer role=\"contentinfo\"></footer>
            </div><!-- end .container -->
        </div><!-- end .owner -->
        <div class=\"bg-foot\"></div>
    </body>
</html>";
    }

    // line 21
    public function block_title($context, array $blocks = array())
    {
        echo "Aion Rising | Mist of Nightmare";
    }

    // line 111
    public function block_page($context, array $blocks = array())
    {
        // line 112
        echo "            ";
    }

    public function getTemplateName()
    {
        return "SiteRisingAionBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 112,  247 => 111,  241 => 21,  231 => 112,  206 => 94,  202 => 93,  186 => 79,  180 => 77,  172 => 74,  168 => 73,  125 => 32,  109 => 31,  93 => 30,  77 => 29,  62 => 28,  58 => 27,  47 => 22,  43 => 21,  21 => 1,  298 => 158,  295 => 157,  291 => 156,  288 => 155,  284 => 154,  281 => 153,  277 => 152,  274 => 151,  270 => 150,  267 => 149,  263 => 148,  260 => 147,  256 => 146,  253 => 145,  249 => 144,  246 => 143,  238 => 159,  235 => 157,  232 => 155,  229 => 111,  226 => 151,  223 => 108,  220 => 147,  217 => 145,  215 => 143,  200 => 130,  196 => 128,  193 => 127,  190 => 126,  188 => 125,  174 => 75,  157 => 100,  140 => 86,  123 => 72,  105 => 57,  60 => 16,  57 => 15,  54 => 26,  51 => 13,  49 => 12,  39 => 4,  36 => 3,  73 => 35,  63 => 17,  52 => 20,  42 => 13,  31 => 4,  28 => 3,);
    }
}
