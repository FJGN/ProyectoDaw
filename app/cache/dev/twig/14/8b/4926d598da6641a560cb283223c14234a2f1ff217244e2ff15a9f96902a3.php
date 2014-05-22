<?php

/* TeachingGeneralBundle:Exception:exception.html.twig */
class __TwigTemplate_148b4926d598da6641a560cb283223c14234a2f1ff217244e2ff15a9f96902a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TeachingGeneralBundle::template.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TeachingGeneralBundle::template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Página no encontrada";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
    <div style=\"text-align: center\">
        <br/><br/>
        <h1>Error ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "statusCode"), "html", null, true);
        echo "</h1>

        <br/><br/><br/>

        <p style=\"font-size: 20px;\">
            El recurso al que querías acceder no se encuentra disponible.
            
            <br/><br/>
            <p style=\"font-size: 17px;\">
                Puedes volver a <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("teaching_homepage");
        echo "\">Inicio</a>
                <br/><br/><br/>
                
            </p>
        </p>
    </div>
    
";
    }

    public function getTemplateName()
    {
        return "TeachingGeneralBundle:Exception:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 20,  43 => 11,  38 => 8,  35 => 7,  29 => 4,);
    }
}
