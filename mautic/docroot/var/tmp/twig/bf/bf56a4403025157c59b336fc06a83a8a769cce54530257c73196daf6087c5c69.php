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

/* @bundles/SmsBundle/Event/SmsEvent.php */
class __TwigTemplate_cde5a6e96361a240a67868c36ecf6e22c333420dc25cea9e38d4b0c87c38b385 extends Template
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

namespace Mautic\\SmsBundle\\Event;

use Mautic\\CoreBundle\\Event\\CommonEvent;
use Mautic\\SmsBundle\\Entity\\Sms;

/**
 * Class SmsEvent.
 */
class SmsEvent extends CommonEvent
{
    /**
     * @param bool \$isNew
     */
    public function __construct(Sms \$sms, \$isNew = false)
    {
        \$this->entity = \$sms;
        \$this->isNew  = \$isNew;
    }

    /**
     * Returns the Sms entity.
     *
     * @return Sms
     */
    public function getSms()
    {
        return \$this->entity;
    }

    /**
     * Sets the Sms entity.
     */
    public function setSms(Sms \$sms)
    {
        \$this->entity = \$sms;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/SmsBundle/Event/SmsEvent.php";
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
        return new Source("", "@bundles/SmsBundle/Event/SmsEvent.php", "/var/www/html/mautic/docroot/app/bundles/SmsBundle/Event/SmsEvent.php");
    }
}
