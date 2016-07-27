<?php

/* home/home.html.twig */
class __TwigTemplate_e9352ab6bc2f78b40ac1eaac877380035ea1e21aa29d03eb0e897a3543224dab extends Twig_Template
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
        $__internal_8100c8099251e7c05f387e8b28b852d0555491afa758f2e74a6df6e3da8cb24a = $this->env->getExtension("native_profiler");
        $__internal_8100c8099251e7c05f387e8b28b852d0555491afa758f2e74a6df6e3da8cb24a->enter($__internal_8100c8099251e7c05f387e8b28b852d0555491afa758f2e74a6df6e3da8cb24a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <body>
        <h1>HELLO WORLD</h1>
        <h2>";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")), "html", null, true);
        echo "</h2>

    </body>
</html>
";
        
        $__internal_8100c8099251e7c05f387e8b28b852d0555491afa758f2e74a6df6e3da8cb24a->leave($__internal_8100c8099251e7c05f387e8b28b852d0555491afa758f2e74a6df6e3da8cb24a_prof);

    }

    public function getTemplateName()
    {
        return "home/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <body>*/
/*         <h1>HELLO WORLD</h1>*/
/*         <h2>{{ test }}</h2>*/
/* */
/*     </body>*/
/* </html>*/
/* */
