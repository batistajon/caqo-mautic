<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @bundles/UserBundle/Assets/css/user.css */
class __TwigTemplate_1f1d09f7c9ef18101062a5e79d1088e10630a9ecc427cbd5977f5075759240ec extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "/* UserBundle */

.profile-details {
    margin-bottom: 20px;
}

.col-user-id, .col-role-id {
    width: 75px;
}

.col-user-avatar {
    width: 75px;
}

.mautic-logo {
    width: 150px;
    margin: 0 auto;
    background: #ffffff;
}

.mautic-logo > svg.mautic-logo-figure .circle {
    fill: #4e5e9e;
}

.mautic-logo > svg.mautic-logo-figure .m,
.mautic-logo > svg.mautic-logo-figure .m-arrow {
      fill: #fdb933;
}

input:-webkit-autofill {
    -webkit-box-shadow: 0 0 0px 1000px white inset;
}

span.input-group-addon i.fa {
    width: 20px;
}

.inline-login .login-form {
    margin: 20px;
}";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/UserBundle/Assets/css/user.css";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@bundles/UserBundle/Assets/css/user.css", "/var/www/html/mautic/docroot/app/bundles/UserBundle/Assets/css/user.css");
    }
}
