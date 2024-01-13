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

/* @bundles/EmailBundle/Swiftmailer/Momentum/Validator/SwiftMessageValidator/SwiftMessageValidator.php */
class __TwigTemplate_2e350eb2596088dc9d120ef916e6dbdc6eb9e22be4f56a5d96d70eb8db84cc65 extends Template
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
use Symfony\\Component\\Translation\\TranslatorInterface;

/**
 * Class SwiftMessageValidator.
 */
final class SwiftMessageValidator implements SwiftMessageValidatorInterface
{
    /**
     * @var TranslatorInterface
     */
    private \$translator;

    /**
     * MomentumSwiftMessageValidator constructor.
     */
    public function __construct(
        TranslatorInterface \$translator
    ) {
        \$this->translator = \$translator;
    }

    /**
     * @throws SwiftMessageValidationException
     */
    public function validate(\\Swift_Mime_SimpleMessage \$message)
    {
        if (empty(\$message->getSubject())) {
            throw new SwiftMessageValidationException(\$this->translator->trans('mautic.email.subject.notblank', [], 'validators'));
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Swiftmailer/Momentum/Validator/SwiftMessageValidator/SwiftMessageValidator.php";
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
        return new Source("", "@bundles/EmailBundle/Swiftmailer/Momentum/Validator/SwiftMessageValidator/SwiftMessageValidator.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Swiftmailer/Momentum/Validator/SwiftMessageValidator/SwiftMessageValidator.php");
    }
}
