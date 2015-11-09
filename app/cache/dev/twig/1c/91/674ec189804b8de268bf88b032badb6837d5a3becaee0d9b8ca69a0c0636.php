<?php

/* SiteRisingUserBundle::connexion.html.twig */
class __TwigTemplate_1c91674ec189804b8de268bf88b032badb6837d5a3becaee0d9b8ca69a0c0636 extends Twig_Template
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
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 2
            echo "<div><font color=\"red\" size=\"1px\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</font></div>
";
        }
        // line 4
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"m-login\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fos_csrf_provider"]) ? $context["fos_csrf_provider"] : $this->getContext($context, "fos_csrf_provider")), "generateCsrfToken", array(0 => "authenticate"), "method"), "html", null, true);
        echo "\" />

    <span class=\"m-input-title\">Identifiant</span><br/>
    <div class=\"m-input\"><input type=\"text\" class=\"inner-input\" placeholder=\"Votre identifiant...\" maxlength=\"23\" id=\"username\" name=\"_username\" value=\"";
        // line 8
        if (array_key_exists("last_username", $context)) {
            echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        }
        echo "\" required=\"required\" /></div>

    <span class=\"m-input-title\">Mot de Passe</span><br/>
    <div class=\"m-input\"><input id=\"password\" name=\"_password\" type=\"password\" class=\"inner-input\" placeholder=\"Votre mot de passe...\" maxlength=\"23\" required=\"required\" /></div></br>

    <!--<a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\" class=\"forgotten-pass\">Mot de passe oublié ?</a>-->
  
    <input type=\"submit\" id=\"_submit\" name=\"login-process\" class=\"login-process\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
</form>

";
    }

    public function getTemplateName()
    {
        return "SiteRisingUserBundle::connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 15,  48 => 13,  38 => 8,  32 => 5,  27 => 4,  19 => 1,  250 => 112,  247 => 111,  241 => 21,  231 => 112,  206 => 94,  202 => 93,  186 => 79,  180 => 77,  172 => 74,  168 => 73,  125 => 32,  109 => 31,  93 => 30,  77 => 29,  62 => 28,  58 => 27,  47 => 22,  43 => 21,  21 => 2,  298 => 158,  295 => 157,  291 => 156,  288 => 155,  284 => 154,  281 => 153,  277 => 152,  274 => 151,  270 => 150,  267 => 149,  263 => 148,  260 => 147,  256 => 146,  253 => 145,  249 => 144,  246 => 143,  238 => 159,  235 => 157,  232 => 155,  229 => 111,  226 => 151,  223 => 108,  220 => 147,  217 => 145,  215 => 143,  200 => 130,  196 => 128,  193 => 127,  190 => 126,  188 => 125,  174 => 75,  157 => 100,  140 => 86,  123 => 72,  105 => 57,  60 => 16,  57 => 15,  54 => 26,  51 => 13,  49 => 12,  39 => 4,  36 => 3,  73 => 35,  63 => 17,  52 => 20,  42 => 13,  31 => 4,  28 => 3,);
    }
}
