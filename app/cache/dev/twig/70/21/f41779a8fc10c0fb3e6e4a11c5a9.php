<?php

/* FDGsbBundle::layout.html.twig */
class __TwigTemplate_7021f41779a8fc10c0fb3e6e4a11c5a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
            'body1' => array($this, 'block_body1'),
            'javascripts' => array($this, 'block_javascripts'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <header>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "\t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdGsb/css/style.css"), "html", null, true);
        echo "\"
\t\ttype=\"text/css\" media=\"all\" />
\t\t
\t\t
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        ";
        // line 12
        $this->displayBlock('head', $context, $blocks);
        // line 18
        echo "\t    
    </header>
    <body>
        
        <div id=Menu>";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 27
        echo "        </div>
        <div id=bodyPresentation>";
        // line 28
        $this->displayBlock('body1', $context, $blocks);
        echo "</div>
        
        ";
        // line 30
        $this->displayBlock('javascripts', $context, $blocks);
        // line 31
        echo "    </body>
<footer>
";
        // line 33
        $this->displayBlock('footer', $context, $blocks);
        // line 34
        echo "</footer>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Bienvenu(e)";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 12
    public function block_head($context, array $blocks = array())
    {
        echo " 
        <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdGsb/images/logo.jpg"), "html", null, true);
        echo "\" alt=\"logo\" align=left width=\"160\" height=\"120\" />
        <br>
        <h1>Le laboratoire pharmaceutique GSB : Galaxy-Swiss Bourdin</h1>
        <br>
        ";
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        // line 23
        echo "            <br>    
            <div id=center> Le Menu :</div> <br>
            Présentation<br>
                     ";
    }

    // line 28
    public function block_body1($context, array $blocks = array())
    {
        echo "Index site";
    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 33
    public function block_footer($context, array $blocks = array())
    {
        echo "Copyright © 2013 Danel Florian - Reproduction interdite sans accord du webmaster";
    }

    public function getTemplateName()
    {
        return "FDGsbBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 33,  123 => 30,  117 => 28,  110 => 23,  107 => 22,  98 => 13,  93 => 12,  88 => 6,  82 => 5,  76 => 34,  74 => 33,  70 => 31,  68 => 30,  63 => 28,  60 => 27,  58 => 22,  52 => 18,  50 => 12,  46 => 11,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
