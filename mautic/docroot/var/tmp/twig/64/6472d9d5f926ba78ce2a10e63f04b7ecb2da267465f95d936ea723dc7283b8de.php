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

/* @bundles/EmailBundle/Swiftmailer/Momentum/Validator/SwiftMessageValidator/SwiftMessageValidatorInterface.php */
class __TwigTemplate_8c03ad57b1a14ed3ec3ce864a4463a3ee5d2d262fcbefd369020c8a65af94ae0 extends Template
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

namespace Mautic\\EmailBundle\\Swiftmailer\\Momentum\\Validator\\SwiftMessageValidator;

use Mautic\\EmailBundle\\Swiftmailer\\Momentum\\Exception\\Validator\\SwiftMessageValidator\\SwiftMessageValidationException;

/**
 * Interface SwiftMessageValidatorInterface.
 */
interface SwiftMessageValidatorInterface
{
    /**
     * @throws SwiftMessageValidationException
     */
    public function validate(\\Swift_Mime_SimpleMessage \$message);
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Swiftmailer/Momentum/Validator/SwiftMessageValidator/SwiftMessageValidatorInterface.php";
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
        return new Source("", "@bundles/EmailBundle/Swiftmailer/Momentum/Validator/SwiftMessageValidator/SwiftMessageValidatorInterface.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Swiftmailer/Momentum/Validator/SwiftMessageValidator/SwiftMessageValidatorInterface.php");
    }
}
