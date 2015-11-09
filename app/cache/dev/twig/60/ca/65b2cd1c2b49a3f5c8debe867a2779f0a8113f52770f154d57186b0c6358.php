<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_60ca65b2cd1c2b49a3f5c8debe867a2779f0a8113f52770f154d57186b0c6358 extends Twig_Template
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
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                options.maxTries = options.maxTries || 0;
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 !== xhr.readyState) {
                        return null;
                    }

                    if (xhr.status == 404 && options.maxTries > 1) {
                        setTimeout(function(){
                            options.maxTries--;
                            request(url, onSuccess, onError, payload, options);
                        }, 500);

                        return null;
                    }

                    if (200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className && el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                if (el.className) {
                    el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
                }
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) {
                    el.className += \" \" + klass;
                }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        '',
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  91 => 35,  83 => 30,  79 => 29,  75 => 28,  70 => 26,  66 => 25,  50 => 15,  46 => 14,  30 => 5,  26 => 3,  24 => 2,  53 => 15,  48 => 13,  38 => 8,  32 => 6,  27 => 4,  19 => 1,  250 => 112,  247 => 111,  241 => 21,  231 => 112,  206 => 94,  202 => 93,  186 => 79,  180 => 77,  172 => 74,  168 => 73,  125 => 32,  109 => 31,  93 => 30,  77 => 29,  62 => 24,  58 => 27,  47 => 22,  43 => 21,  21 => 2,  298 => 158,  295 => 157,  291 => 156,  288 => 155,  284 => 154,  281 => 153,  277 => 152,  274 => 151,  270 => 150,  267 => 149,  263 => 148,  260 => 147,  256 => 146,  253 => 145,  249 => 144,  246 => 143,  238 => 159,  235 => 157,  232 => 155,  229 => 111,  226 => 151,  223 => 108,  220 => 147,  217 => 145,  215 => 143,  200 => 130,  196 => 128,  193 => 127,  190 => 126,  188 => 125,  174 => 75,  157 => 100,  140 => 86,  123 => 72,  105 => 57,  60 => 16,  57 => 15,  54 => 26,  51 => 13,  49 => 12,  39 => 4,  36 => 3,  73 => 35,  63 => 17,  52 => 20,  42 => 12,  31 => 4,  28 => 3,);
    }
}
