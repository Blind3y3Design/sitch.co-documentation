<?php

/* partials/navigation.html.twig */
class __TwigTemplate_aed9423491d08b840f67a1058781a1a6c21a89e464df3519e00b55f390201658 extends Twig_Template
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
        echo "<ul class=\"navigation\">
    ";
        // line 2
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), "antimatter", array()), "dropdown", array()), "enabled", array())) {
            // line 3
            echo "        ";
            echo $this->getAttribute($this, "loop", array(0 => (isset($context["pages"]) ? $context["pages"] : null)), "method");
            echo "
    ";
        } else {
            // line 5
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 6
                echo "            ";
                if ($this->getAttribute($context["page"], "visible", array())) {
                    // line 7
                    echo "                ";
                    $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("active") : (""));
                    // line 8
                    echo "                <li class=\"";
                    echo (isset($context["current_page"]) ? $context["current_page"] : null);
                    echo "\">
                    <a href=\"";
                    // line 9
                    echo $this->getAttribute($context["page"], "url", array());
                    echo "\">
                        ";
                    // line 10
                    if ($this->getAttribute($this->getAttribute($context["page"], "header", array()), "icon", array())) {
                        echo "<i class=\"fa fa-";
                        echo $this->getAttribute($this->getAttribute($context["page"], "header", array()), "icon", array());
                        echo "\"></i>";
                    }
                    // line 11
                    echo "                        ";
                    echo $this->getAttribute($context["page"], "menu", array());
                    echo "
                    </a>
                </li>
            ";
                }
                // line 15
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "    ";
        }
        // line 17
        echo "    <li><a href=\"http://www.situationinteractive.com/\" target=\"_blank\">Situation Homepage</a></li>
</ul>  ";
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 17,  70 => 16,  64 => 15,  56 => 11,  50 => 10,  46 => 9,  41 => 8,  38 => 7,  35 => 6,  30 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
