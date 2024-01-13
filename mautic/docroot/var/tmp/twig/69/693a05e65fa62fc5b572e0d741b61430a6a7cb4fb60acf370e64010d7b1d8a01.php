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

/* @bundles/LeadBundle/Segment/DoNotContact/DoNotContactParts.php */
class __TwigTemplate_088c635d2057a4373c550fc24c2693ab911b5d002067c16e3433690a07c3957c extends Template
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
        echo "<?php

namespace Mautic\\LeadBundle\\Segment\\DoNotContact;

use Mautic\\LeadBundle\\Entity\\DoNotContact;

class DoNotContactParts
{
    private string \$channel = 'email';

    private int \$type = DoNotContact::UNSUBSCRIBED;

    /**
     * @param string \$field
     */
    public function __construct(\$field)
    {
        if (false !== strpos(\$field, '_manual')) {
            \$this->type = DoNotContact::MANUAL;
        }

        if (false !== strpos(\$field, '_bounced')) {
            \$this->type = DoNotContact::BOUNCED;
        }

        if (false !== strpos(\$field, '_sms')) {
            \$this->channel = 'sms';
        }
    }

    /**
     * @return string
     */
    public function getChannel()
    {
        return \$this->channel;
    }

    /**
     * @return int
     */
    public function getParameterType()
    {
        return \$this->type;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Segment/DoNotContact/DoNotContactParts.php";
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
        return new Source("", "@bundles/LeadBundle/Segment/DoNotContact/DoNotContactParts.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Segment/DoNotContact/DoNotContactParts.php");
    }
}
