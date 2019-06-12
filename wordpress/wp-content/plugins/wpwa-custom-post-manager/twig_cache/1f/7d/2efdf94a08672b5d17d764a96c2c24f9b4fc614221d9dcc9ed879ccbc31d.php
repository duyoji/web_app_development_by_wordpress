<?php

/* project_meta.html */
class __TwigTemplate_1f7d2efdf94a08672b5d17d764a96c2c24f9b4fc614221d9dcc9ed879ccbc31d extends Twig_Template
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
        echo "<input type=\"hidden\" name=\"project_meta_nonce\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["project_meta_nonce"]) ? $context["project_meta_nonce"] : null), "html", null, true);
        echo "\" />

<table class=\"form-table\">
    <tr>
        <th style=''><label for='Project Status'>Project Status *</label></th>
        <td>
            <select class='widefat' name=\"sel_project_status\" id=\"sel_project_status\">
                <option ";
        // line 8
        if (((isset($context["project_status"]) ? $context["project_status"] : null) == 0)) {
            echo "selected";
        }
        echo " value=\"0\">Select</option>
                <option ";
        // line 9
        if (((isset($context["project_status"]) ? $context["project_status"] : null) == "planned")) {
            echo "selected";
        }
        echo " value=\"planned\">Planned</option>
                <option ";
        // line 10
        if (((isset($context["project_status"]) ? $context["project_status"] : null) == "pending")) {
            echo "selected";
        }
        echo " value=\"pending\">Pending</option>
                <option ";
        // line 11
        if (((isset($context["project_status"]) ? $context["project_status"] : null) == "failed")) {
            echo "selected";
        }
        echo " value=\"failed\">Failed</option>
                <option ";
        // line 12
        if (((isset($context["project_status"]) ? $context["project_status"] : null) == "completed")) {
            echo "selected";
        }
        echo " value=\"completed\">Completed</option>
            </select>
        </td>
    </tr>
    <tr>
        <th style=''><label for='Project Duration'>Project Duration *</label></th>
        <td><input class='widefat' name='txt_duration' id='txt_duration' type='text' value='";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["project_duration"]) ? $context["project_duration"] : null), "html", null, true);
        echo "' /></td>
    </tr>
    <tr>
        <th style=''><label for='Project URL'>Project URL</label></th>
        <td>

            <input class='widefat' name='txt_url' id='txt_url' type='text' value='";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["project_url"]) ? $context["project_url"] : null), "html", null, true);
        echo "'  /></td>
    </tr>
    <tr>
        <th style=''><label for='Download URL'>Download URL</label></th>
        <td><input class='widefat' name='txt_download_url' id='txt_download_url' type='text'  value='";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["project_download_url"]) ? $context["project_download_url"] : null), "html", null, true);
        echo "' /></td>
    </tr>

</table>
";
    }

    public function getTemplateName()
    {
        return "project_meta.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 28,  74 => 24,  65 => 18,  54 => 12,  48 => 11,  42 => 10,  36 => 9,  30 => 8,  19 => 1,);
    }
}
