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

/* @bundles/EmailBundle/Helper/EmailValidator.php */
class __TwigTemplate_6fd99c39928fec094696a0998f9cd3c3b62b771efd12e9f1b1cd79405a05ba5b extends Template
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

namespace Mautic\\EmailBundle\\Helper;

use Mautic\\EmailBundle\\EmailEvents;
use Mautic\\EmailBundle\\Event\\EmailValidationEvent;
use Mautic\\EmailBundle\\Exception\\InvalidEmailException;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\Translation\\TranslatorInterface;

/**
 * Class EmailValidator.
 */
class EmailValidator
{
    /**
     * @var TranslatorInterface
     */
    protected \$translator;

    /**
     * @var EventDispatcherInterface
     */
    protected \$dispatcher;

    /**
     * EmailValidator constructor.
     */
    public function __construct(TranslatorInterface \$translator, EventDispatcherInterface \$dispatcher)
    {
        \$this->translator = \$translator;
        \$this->dispatcher = \$dispatcher;
    }

    /**
     * Validate that an email is the correct format, doesn't have invalid characters, a MX record is associated with the domain, and
     * leverage integrations to validate.
     *
     * @param \$address
     * @param bool \$doDnsCheck
     *
     * @throws InvalidEmailException
     */
    public function validate(\$address, \$doDnsCheck = false)
    {
        if (!\$this->isValidFormat(\$address)) {
            throw new InvalidEmailException(\$address, \$this->translator->trans('mautic.email.address.invalid_format', ['%email%' => \$address ?: '?']));
        }

        if (\$this->hasValidCharacters(\$address)) {
            throw new InvalidEmailException(\$address, \$this->translator->trans('mautic.email.address.invalid_characters', ['%email%' => \$address]));
        }

        if (\$doDnsCheck && !\$this->hasValidDomain(\$address)) {
            throw new InvalidEmailException(\$address, \$this->translator->trans('mautic.email.address.invalid_domain', ['%email%' => \$address]));
        }

        \$this->doPluginValidation(\$address);
    }

    /**
     * Validates that email is in an acceptable format.
     *
     * @param \$address
     *
     * @returns bool
     */
    public function isValidFormat(\$address)
    {
        return !empty(\$address) && filter_var(\$address, FILTER_VALIDATE_EMAIL);
    }

    /**
     * Validates that email does not have invalid characters.
     *
     * @param \$address
     *
     * @returns bool
     */
    public function hasValidCharacters(\$address)
    {
        \$invalidChar = strpbrk(\$address, '^&*%');

        return \$invalidChar ? substr(\$invalidChar, 0, 1) : \$invalidChar;
    }

    /**
     * Validates if the domain of an email.
     *
     * @param \$address
     *
     * @returns bool
     */
    public function hasValidDomain(\$address)
    {
        list(\$user, \$domain) = explode('@', \$address);

        return checkdnsrr(\$domain, 'MX');
    }

    /**
     * Validate using 3rd party integrations.
     *
     * @param \$address
     *
     * @throws InvalidEmailException
     */
    public function doPluginValidation(\$address)
    {
        \$event = \$this->dispatcher->dispatch(
            EmailEvents::ON_EMAIL_VALIDATION,
            new EmailValidationEvent(\$address)
        );

        if (!\$event->isValid()) {
            throw new InvalidEmailException(\$address, \$event->getInvalidReason());
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
        return "@bundles/EmailBundle/Helper/EmailValidator.php";
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
        return new Source("", "@bundles/EmailBundle/Helper/EmailValidator.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Helper/EmailValidator.php");
    }
}
