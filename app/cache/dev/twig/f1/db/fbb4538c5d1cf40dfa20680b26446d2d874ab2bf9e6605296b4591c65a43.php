<?php

/* RasFlashAlertBundle:Alert:alerts.html.twig */
class __TwigTemplate_f1dbfbb4538c5d1cf40dfa20680b26446d2d874ab2bf9e6605296b4591c65a43 extends Twig_Template
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
        echo "<div id=\"ras-flash-alerts\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["flashAlerts"]) ? $context["flashAlerts"] : $this->getContext($context, "flashAlerts")));
        foreach ($context['_seq'] as $context["_key"] => $context["alert"]) {
            // line 3
            echo "        <div
            ";
            // line 4
            if ((isset($context["isAddStyles"]) ? $context["isAddStyles"] : $this->getContext($context, "isAddStyles"))) {
                // line 5
                echo "                style=\"
                        padding: 15px; margin-bottom: 20px; border: 1px solid transparent; border-radius: 4px;
                        padding-right: 35px;

                    ";
                // line 9
                if (($this->getAttribute((isset($context["alert"]) ? $context["alert"] : $this->getContext($context, "alert")), "type") == "success")) {
                    // line 10
                    echo "                        color: #3c763d; background-color: #b9df90; border-color: #a0d468;
                    ";
                } elseif (($this->getAttribute((isset($context["alert"]) ? $context["alert"] : $this->getContext($context, "alert")), "type") == "error")) {
                    // line 12
                    echo "                        color: #a94442; background-color: #f2838f; border-color: #ed5565;
                    ";
                } elseif (($this->getAttribute((isset($context["alert"]) ? $context["alert"] : $this->getContext($context, "alert")), "type") == "warning")) {
                    // line 14
                    echo "                        color: #8a6d3b; background-color: #ffdd87; border-color: #ffce54;
                    ";
                } elseif (($this->getAttribute((isset($context["alert"]) ? $context["alert"] : $this->getContext($context, "alert")), "type") == "info")) {
                    // line 16
                    echo "                        color: #31708f; background-color: #7cd1ef; border-color: #4fc1e9;
                    ";
                }
                // line 18
                echo "                    \"
            ";
            } else {
                // line 20
                echo "                class=\"alert alert-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alert"]) ? $context["alert"] : $this->getContext($context, "alert")), "type"), "html", null, true);
                echo " alert-dismissable\"
            ";
            }
            // line 22
            echo "            >
            <button type=\"button\" class=\"alert-close\"
                ";
            // line 24
            if ((isset($context["isAddStyles"]) ? $context["isAddStyles"] : $this->getContext($context, "isAddStyles"))) {
                // line 25
                echo "                    style=\"
                        position: relative; top: -2px; right: -21px; float: right; font-size: 21px; font-weight: bold;
                        line-height: 1; color: #000; text-shadow: 0 1px 0 #fff; filter: alpha(opacity=20);
                        opacity: .2; -webkit-appearance: none; padding: 0; cursor: pointer;
                        background: transparent; border: 0;
                        \"
                    onmouseover=\"
                        this.style.color            = 'black';
                        this.style.textDecoration   = 'none';
                        this.style.cursor           = 'pointer'
                        this.style.filter           = 'alpha(opacity=50)';
                        this.style.opacity          = '.5';
                        \"
                    onmouseout=\"
                        this.style.filter           = 'alpha(opacity=20)';
                        this.style.opacity          = '.2';
                        \"
                ";
            }
            // line 43
            echo "                >
                &times;
            </button>
            ";
            // line 46
            echo $this->getAttribute((isset($context["alert"]) ? $context["alert"] : $this->getContext($context, "alert")), "message");
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "</div>

<script type=\"text/javascript\">
    // Pure JavaScript implementation for flash alerts
    window.onload = function () {
        var elems = document.getElementById(\"ras-flash-alerts\").getElementsByTagName('button');
        for (var i in elems) {
            if ((\" \" + elems[i].className + \" \").indexOf(\"alert-close\") > -1) {
                elems[i].onclick = function () {
                    fadeout(this.parentNode);
                };
            }
        }
    }

    var fadeout = function(elem) {
        var o = 1;
        var timer = setInterval(function () {
            if (o <= 0.0) {
                elem.style.display = 'none';
                clearInterval(timer);

            }
            elem.style.opacity = o;
            elem.style.filter = 'alpha(opacity=' + o * 100 + \")\";
            o -= 0.1;
        }, 25);
    };
</script>
";
    }

    public function getTemplateName()
    {
        return "RasFlashAlertBundle:Alert:alerts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 49,  96 => 46,  91 => 43,  69 => 24,  55 => 18,  51 => 16,  47 => 14,  43 => 12,  39 => 10,  37 => 9,  29 => 4,  26 => 3,  22 => 2,  19 => 1,  370 => 244,  363 => 240,  359 => 239,  354 => 237,  348 => 234,  344 => 233,  339 => 231,  333 => 228,  329 => 227,  324 => 225,  318 => 224,  296 => 205,  290 => 202,  284 => 199,  258 => 176,  252 => 173,  246 => 170,  220 => 147,  214 => 144,  208 => 141,  182 => 118,  176 => 115,  170 => 112,  144 => 89,  138 => 86,  132 => 83,  77 => 31,  71 => 25,  65 => 22,  59 => 20,  40 => 10,  31 => 5,  28 => 3,);
    }
}
