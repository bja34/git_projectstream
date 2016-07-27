<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c8fae1508548a826a440cce41bcfb3202abf113ec5695e77a2a084c6aa7a76a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3bb3f0a09d8eeb1d9b573af70163bf5613f562edd2f3d6be289f472b96809fe0 = $this->env->getExtension("native_profiler");
        $__internal_3bb3f0a09d8eeb1d9b573af70163bf5613f562edd2f3d6be289f472b96809fe0->enter($__internal_3bb3f0a09d8eeb1d9b573af70163bf5613f562edd2f3d6be289f472b96809fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bb3f0a09d8eeb1d9b573af70163bf5613f562edd2f3d6be289f472b96809fe0->leave($__internal_3bb3f0a09d8eeb1d9b573af70163bf5613f562edd2f3d6be289f472b96809fe0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f84da131d65a62b42753649f1180af5477a21bbe08ca2bee9620ecdcdfb6e126 = $this->env->getExtension("native_profiler");
        $__internal_f84da131d65a62b42753649f1180af5477a21bbe08ca2bee9620ecdcdfb6e126->enter($__internal_f84da131d65a62b42753649f1180af5477a21bbe08ca2bee9620ecdcdfb6e126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f84da131d65a62b42753649f1180af5477a21bbe08ca2bee9620ecdcdfb6e126->leave($__internal_f84da131d65a62b42753649f1180af5477a21bbe08ca2bee9620ecdcdfb6e126_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_373f8a33bcc50168fcc87cc0c6dcd677d24497b685e839adb0dda0a74c6dce66 = $this->env->getExtension("native_profiler");
        $__internal_373f8a33bcc50168fcc87cc0c6dcd677d24497b685e839adb0dda0a74c6dce66->enter($__internal_373f8a33bcc50168fcc87cc0c6dcd677d24497b685e839adb0dda0a74c6dce66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_373f8a33bcc50168fcc87cc0c6dcd677d24497b685e839adb0dda0a74c6dce66->leave($__internal_373f8a33bcc50168fcc87cc0c6dcd677d24497b685e839adb0dda0a74c6dce66_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7bbb7ff53052dfb04b2b22e07285d8e52fe900f934bb592768b889bc772bb318 = $this->env->getExtension("native_profiler");
        $__internal_7bbb7ff53052dfb04b2b22e07285d8e52fe900f934bb592768b889bc772bb318->enter($__internal_7bbb7ff53052dfb04b2b22e07285d8e52fe900f934bb592768b889bc772bb318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7bbb7ff53052dfb04b2b22e07285d8e52fe900f934bb592768b889bc772bb318->leave($__internal_7bbb7ff53052dfb04b2b22e07285d8e52fe900f934bb592768b889bc772bb318_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
