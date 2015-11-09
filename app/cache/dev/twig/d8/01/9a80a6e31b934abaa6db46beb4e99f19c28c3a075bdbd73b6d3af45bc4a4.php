<?php

/* SiteRisingAionBundle:AionViews:userProfile.html.twig */
class __TwigTemplate_d8019a80a6e31b934abaa6db46beb4e99f19c28c3a075bdbd73b6d3af45bc4a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SiteRisingAionBundle:AionViews:index.html.twig");

        $this->blocks = array(
            'profile' => array($this, 'block_profile'),
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
    public function block_profile($context, array $blocks = array())
    {
        // line 4
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("RasFlashAlertBundle:Alert:displayAlerts"));
        echo "
<article class=\"content\">
<div class=\"page-title\">Gestion de mon Compte</div>
        <div class=\"img-page account\">
            <div class=\"welcome-message\">
                    Bienvenu(e),<br/>
                    <span class=\"w-1-name\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "html", null, true);
        echo "</span>
            </div>
                <section class=\"account-p\">
                        <center>
                                <div class=\"account-type\">Rang du compte: <span class=\"acc-color\">Daeva</span></div>
                        </center>
                        <div class=\"the-tab\">
                                <ul id=\"tabs\">
                                <li id=\"current\"><a href=\"#\" title=\"tab1\">Mes Informations</a></li>
                                    <li><a href=\"#\" title=\"tab2\">Mes Personnages</a></li>
                                    <li><a href=\"#\" title=\"tab3\">Mes Paramètres</a></li>    
                                </ul>

                                <div id=\"t-content\" class=\"t-c\">
                                        <div id=\"tab1\" style=\"display: block;\">
                                                <span class=\"list-info\">
                                                        <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siterisingaion/images/icon-ip.png"), "html", null, true);
        echo "\"> Dernière Ip de connexion: <span>";
        echo twig_escape_filter($this->env, (isset($context["ip"]) ? $context["ip"] : $this->getContext($context, "ip")), "html", null, true);
        echo "</span><br/>
                                                        <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siterisingaion/images/icon-email.png"), "html", null, true);
        echo "\"> Email du compte: <span>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
        echo "</span><br/>
                                                        <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siterisingaion/images/icon-acc-status.png"), "html", null, true);
        echo "\"> Etat du compte: <span class=\"activated\">Activé !</span>
                                                </span>
                                                <span class=\"d-avat\">
                                                        <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siterisingaion/images/default-avat.png"), "html", null, true);
        echo "\">
                                                </span>
                                                <span class=\"warn-info\">
                                                        Vous êtes tenu responsable de toute modifications sur votre compte, aucun membre du staff ne vous 
                                                        demandera vos informations personnelles. <a href=\"http://forum.aion-rising.fr/index.php?/topic/709-r%C3%A8glement-en-jeu/\">ICI</a> La charte à lire.\t\t\t
                                                </span>

                                        </div>
                                    <div id=\"tab2\" style=\"display: none;\">
                                                <center>
                                                        <span class=\"list-characters\" style=\"width:660px;\">
                                                                <table>
                                                                        <tr> 
                                                                                <td>
                                                                                        ..::..
                                                                                </td>
                                                                                <td >
                                                                                        Nom
                                                                                </td>
                                                                                <td >
                                                                                        Niveau
                                                                                </td>
                                                                                <td>
                                                                                        Race
                                                                                </td>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                                                <td>
                                                                                        Sexe
                                                                                </td>
                                                                                <td>
                                                                                        Classe
                                                                                </td>
                                                                                <td>
                                                                                        Points PvP
                                                                                </td>
                                                                                <td>
                                                                                        Points Bg
                                                                                </td>
                                                                                <td>
                                                                                        Points FFa
                                                                                </td>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                                        </tr>
                                                                        <tr>
                                                                                <td >
                                                                                        1
                                                                                </td>
                                                                                <td>
                                                                                        Alibaba
                                                                                </td>
                                                                                <td>
                                                                                        65
                                                                                </td>
                                                                                <td>
                                                                                        <img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siterisingaion/images/class/race_0.gif"), "html", null, true);
        echo "\">
                                                                                </td>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                                                <td>
                                                                                        <img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siterisingaion/images/class/male.png"), "html", null, true);
        echo "\">
                                                                                </td>
                                                                                <td>
                                                                                        <img src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siterisingaion/images/class/icon_emblem_bard.png"), "html", null, true);
        echo "\">
                                                                                </td>
                                                                                <td>
                                                                                        65000
                                                                                </td>
                                                                                <td>
                                                                                        650
                                                                                </td>
                                                                                <td>
                                                                                        6504
                                                                                </td>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                                        </tr>\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                                        <tr>
                                                                                <td >
                                                                                        2
                                                                                </td>
                                                                                <td>
                                                                                        Zougataga
                                                                                </td>
                                                                                <td>
                                                                                        65
                                                                                </td>
                                                                                <td>
                                                                                        <img src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siterisingaion/images/class/race_0.gif"), "html", null, true);
        echo "\">
                                                                                </td>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                                                <td>
                                                                                        <img src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siterisingaion/images/class/male.png"), "html", null, true);
        echo "\">
                                                                                </td>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                                                <td>
                                                                                        <img src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siterisingaion/images/class/icon_emblem_gunner.png"), "html", null, true);
        echo "\">
                                                                                </td>
                                                                                <td>
                                                                                        65000
                                                                                </td>
                                                                                <td>
                                                                                        650
                                                                                </td>
                                                                                <td>
                                                                                        6504
                                                                                </td>
                                                                        </tr>
                                                                        <tr>
                                                                                <td >
                                                                                        3
                                                                                </td>
                                                                                <td>
                                                                                        MrFree
                                                                                </td>
                                                                                <td>
                                                                                        65
                                                                                </td>
                                                                                <td>
                                                                                        <img src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siterisingaion/images/class/race_0.gif"), "html", null, true);
        echo "\">
                                                                                </td>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                                                <td>
                                                                                        <img src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siterisingaion/images/class/male.png"), "html", null, true);
        echo "\">
                                                                                </td>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                                                <td>
                                                                                        <img src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siterisingaion/images/class/icon_emblem_rider.png"), "html", null, true);
        echo "\">
                                                                                </td>
                                                                                <td>
                                                                                        65000
                                                                                </td>
                                                                                <td>
                                                                                        650
                                                                                </td>
                                                                                <td>
                                                                                        6504
                                                                                </td>
                                                                        </tr>\t
                                                                        <tr>
                                                                                <td >
                                                                                        4
                                                                                </td>
                                                                                <td>
                                                                                        JeanMouloud
                                                                                </td>
                                                                                <td>
                                                                                        65
                                                                                </td>
                                                                                <td>
                                                                                        <img src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siterisingaion/images/class/race_0.gif"), "html", null, true);
        echo "\">
                                                                                </td>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                                                <td>
                                                                                        <img src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siterisingaion/images/class/male.png"), "html", null, true);
        echo "\">
                                                                                </td>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                                                <td>
                                                                                        <img src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siterisingaion/images/class/icon_emblem_knight.png"), "html", null, true);
        echo "\">
                                                                                </td>
                                                                                <td>
                                                                                        65000
                                                                                </td>
                                                                                <td>
                                                                                        650
                                                                                </td>
                                                                                <td>
                                                                                        6504
                                                                                </td>
                                                                        </tr>
                                                                        <tr>
                                                                                <td >
                                                                                        5
                                                                                </td>
                                                                                <td>
                                                                                        Robert
                                                                                </td>
                                                                                <td>
                                                                                        65
                                                                                </td>
                                                                                <td>
                                                                                        <img src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siterisingaion/images/class/race_0.gif"), "html", null, true);
        echo "\">
                                                                                </td>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                                                <td>
                                                                                        <img src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siterisingaion/images/class/male.png"), "html", null, true);
        echo "\">
                                                                                </td>\t\t\t\t\t\t\t\t
                                                                                <td>
                                                                                        <img src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/siterisingaion/images/class/icon_emblem_bard.png"), "html", null, true);
        echo "\">
                                                                                </td>
                                                                                <td>
                                                                                        65000
                                                                                </td>
                                                                                <td>
                                                                                        650
                                                                                </td>
                                                                                <td>
                                                                                        6504
                                                                                </td>
                                                                        </tr>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                                </table>
                                                        </span>
                                                </center>\t\t\t\t\t\t\t\t\t\t    \t
                                    </div>
                                    <div id=\"tab3\" style=\"display: none;\">
                                                <span class=\"password-e block\">
                                                <span class=\"title-p-c block\" align=\"center\">Modification du mot de passe</span>
                                                     <form class=\"register-f\" action=\"";
        // line 224
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\">
                                                                <span class=\"password-label-title block\">";
        // line 225
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password"), 'label');
        echo "</span><br/>
                                                                <span class=\"r-input block\"> 
                                                                    ";
        // line 227
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password"), 'widget', array("attr" => array("class" => "inner-password-input", "placeholder" => "Votre ancien mot de passe...", "maxlenght" => "16")));
        echo "
                                                                    ";
        // line 228
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password"), 'errors');
        echo "
                                                                </span>

                                                                <span class=\"password-label-title block\">";
        // line 231
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "new"), "first"), 'label');
        echo "</span><br/>
                                                                <span class=\"r-input block\"> 
                                                                    ";
        // line 233
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "new"), "first"), 'widget', array("attr" => array("class" => "inner-password-input", "placeholder" => "Votre mot de passe...", "maxlenght" => "23")));
        echo "
                                                                    ";
        // line 234
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "new"), "first"), 'errors');
        echo "
                                                                </span>

                                                                <span class=\"password-label-title block\">";
        // line 237
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "new"), "second"), 'label');
        echo "</span><br/>
                                                                <span class=\"r-input block\">
                                                                    ";
        // line 239
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "new"), "second"), 'widget', array("attr" => array("class" => "inner-password-input", "placeholder" => "Confirmez le mot de passe...", "maxlenght" => "23")));
        echo "
                                                                    ";
        // line 240
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "new"), "second"), 'errors');
        echo "
                                                                </span><br/>

                                                                <button name=\"register-process\" class=\"register-process\">Envoyer</button>
                                                           ";
        // line 244
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                                                        </form>   
                                                </span>\t\t\t\t\t\t\t\t\t    \t

                                    </div>
                                </div>\t\t\t\t\t\t\t\t\t\t\t
                        </div>

                </section>
        </div>

</article><!-- end .content -->
<script>
\$(document).ready(function() {
\t\$(\"#tabs li:first\").attr(\"id\",\"current\"); // Activate first tab
\t\$(\"#content div:first\").fadeIn(); // Show first tab content
    
    \$('#tabs a').click(function(e) {
        e.preventDefault();        
        \$(\"#t-content div\").hide(); //Hide all content
        \$(\"#tabs li\").attr(\"id\",\"\"); //Reset id's
        \$(this).parent().attr(\"id\",\"current\"); // Activate this
        \$('#' + \$(this).attr('title')).fadeIn(); // Show content for current tab
    });
})();
</script>
";
    }

    public function getTemplateName()
    {
        return "SiteRisingAionBundle:AionViews:userProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  370 => 244,  363 => 240,  359 => 239,  354 => 237,  348 => 234,  344 => 233,  339 => 231,  333 => 228,  329 => 227,  324 => 225,  318 => 224,  296 => 205,  290 => 202,  284 => 199,  258 => 176,  252 => 173,  246 => 170,  220 => 147,  214 => 144,  208 => 141,  182 => 118,  176 => 115,  170 => 112,  144 => 89,  138 => 86,  132 => 83,  77 => 31,  71 => 28,  65 => 27,  59 => 26,  40 => 10,  31 => 4,  28 => 3,);
    }
}
