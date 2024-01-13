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

/* @bundles/EmailBundle/Event/EmailValidationEvent.php */
class __TwigTemplate_e00bbbedb46194cefb9003f6e82ded3b52e059beb119f84b6db10412982f2e01 extends Template
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

namespace Mautic\\EmailBundle\\Event;

use Symfony\\Component\\EventDispatcher\\Event;

/**
 * Class EmailValidationEvent.
 */
class EmailValidationEvent extends Event
{
    /**
     * @var string
     */
    protected \$address;

    /**
     * @var bool
     */
    protected \$isValid = true;

    /**
     * @var string|null
     */
    protected \$invalidReason;

    /**
     * EmailValidationEvent constructor.
     *
     * @param \$address
     */
    public function __construct(\$address)
    {
        \$this->address = \$address;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return \$this->address;
    }

    /**
     * @param \$reason
     */
    public function setInvalid(\$reason)
    {
        \$this->isValid       = false;
        \$this->invalidReason = \$reason;

        \$this->stopPropagation();
    }

    /**
     * @return bool
     */
    public function isValid()
    {
        return \$this->isValid;
    }

    /**
     * @return string|null
     */
    public function getInvalidReason()
    {
        return \$this->invalidReason;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Event/EmailValidationEvent.php";
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
        return new Source("", "@bundles/EmailBundle/Event/EmailValidationEvent.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Event/EmailValidationEvent.php");
    }
}
