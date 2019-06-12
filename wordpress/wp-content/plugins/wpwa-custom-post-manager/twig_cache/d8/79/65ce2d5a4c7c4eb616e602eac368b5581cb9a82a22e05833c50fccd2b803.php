<?php

/* book_meta.html */
class __TwigTemplate_d87965ce2d5a4c7c4eb616e602eac368b5581cb9a82a22e05833c50fccd2b803 extends Twig_Template
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
        echo "<input type=\"hidden\" name=\"book_meta_nonce\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["book_meta_nonce"]) ? $context["book_meta_nonce"] : null), "html", null, true);
        echo "\" />

<table class=\"form-table\">
    <tr>
        <th style=''><label for='Book Pages'>Book Pages *</label></th>
        <td><input class='widefat' name='txt_book_pages' id='txt_book_pages' type='text' value='";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["book_pages"]) ? $context["book_pages"] : null), "html", null, true);
        echo "' /></td>
    </tr>
    <tr>
        <th style=''><label for='Book URL'>Book URL</label></th>
        <td>
            
            <input class='widefat' name='txt_book_url' id='txt_book_url' type='text' value='";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["book_url"]) ? $context["book_url"] : null), "html", null, true);
        echo "'  /></td>
    </tr>    
    <tr>
        <th style=''><label for='Book Publisher'>Book Publisher</label></th>
        <td><input class='widefat' name='txt_book_publisher' id='txt_book_publisher' type='text'  value='";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["book_publisher"]) ? $context["book_publisher"] : null), "html", null, true);
        echo "' /></td>
    </tr>
    
</table>
";
    }

    public function getTemplateName()
    {
        return "book_meta.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 16,  37 => 12,  28 => 6,  19 => 1,);
    }
}
