<?php

/* partials/development_item.html.twig */
class __TwigTemplate_624c66911e55b42737a19a088b3da37c83b97bc125543e49a2d38c9bf68a2a13 extends Twig_Template
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
        echo "<div class=\"list-item\">
    <div class=\"list-dev-header\">
            <h4><a href=\"";
        // line 3
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
        echo "\">";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</a></h4>
    </div>
    <div class=\"list-dev-padding\">
        ";
        // line 6
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "except", array())) {
            // line 7
            echo "            <p>";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "except", array());
            echo "</p>
        ";
        }
        // line 9
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/development_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 9,  33 => 7,  31 => 6,  23 => 3,  19 => 1,);
    }
}
