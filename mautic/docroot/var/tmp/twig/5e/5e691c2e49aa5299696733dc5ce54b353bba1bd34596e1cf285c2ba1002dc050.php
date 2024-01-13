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

/* @bundles/CoreBundle/Translation/Translator.php */
class __TwigTemplate_9c06b7c3faa6e32d567d05151d7a0e4d05affd80562b2b418e8d07789a9b102c extends Template
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

namespace Mautic\\CoreBundle\\Translation;

use Symfony\\Bundle\\FrameworkBundle\\Translation\\Translator as BaseTranslator;

/**
 * Extended Translator service.
 */
class Translator extends BaseTranslator
{
    /**
     * Check if the specified message ID exists.
     *
     * @param string      \$id     The message id (may also be an object that can be cast to string)
     * @param string|null \$domain The domain for the message or null to use the default
     * @param string|null \$locale The locale or null to use the default
     *
     * @return bool true if the message has a translation, false otherwise
     */
    public function hasId(\$id, \$domain = null, \$locale = null)
    {
        if (null === \$locale) {
            \$locale = \$this->getLocale();
        } else {
            \$this->assertValidLocale(\$locale);
        }

        if (null === \$domain) {
            \$domain = 'messages';
        }

        if (!isset(\$this->catalogues[\$locale])) {
            \$this->loadCatalogue(\$locale);
        }

        return \$this->getCatalogue(\$locale)->has((string) \$id, \$domain);
    }

    /**
     * {@inheritdoc}
     */
    protected function loadCatalogue(\$locale)
    {
        if ('en_US' != \$locale) {
            // Always force en_US so that it's available for fallback
            \$this->addResource('mautic', null, 'en_US', 'messages');
        }

        \$this->addResource('mautic', null, \$locale, 'messages');

        parent::loadCatalogue(\$locale);
    }

    /**
     * Checks for \$preferred string existence and returns translation if it does.  Otherwise, returns translation for
     * \$alternative.
     *
     * @param      \$preferred
     * @param      \$alternative
     * @param      \$parameters
     * @param null \$domain
     * @param null \$locale
     *
     * @return string
     */
    public function transConditional(\$preferred, \$alternative, \$parameters = [], \$domain = null, \$locale = null)
    {
        if (\$this->hasId(\$preferred, \$domain, \$locale)) {
            return \$this->trans(\$preferred, \$parameters, \$domain, \$locale);
        } else {
            return \$this->trans(\$alternative, \$parameters, \$domain, \$locale);
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
        return "@bundles/CoreBundle/Translation/Translator.php";
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
        return new Source("", "@bundles/CoreBundle/Translation/Translator.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Translation/Translator.php");
    }
}
