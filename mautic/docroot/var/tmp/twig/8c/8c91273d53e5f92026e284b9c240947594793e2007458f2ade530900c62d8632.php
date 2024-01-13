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

/* @bundles/CoreBundle/Templating/Helper/TranslatorHelper.php */
class __TwigTemplate_bde2560bf8bfdfd2d723375debdc97e07ba33a6c0b42d9a216c4497531683d79 extends Template
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

namespace Mautic\\CoreBundle\\Templating\\Helper;

use Mautic\\CoreBundle\\Translation\\Translator;
use Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\TranslatorHelper as BaseHelper;

/**
 * Extended TranslatorHelper.
 *
 * @property Translator \$translator
 */
class TranslatorHelper extends BaseHelper
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
        return \$this->translator->hasId(\$id, \$domain, \$locale);
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
        return \$this->translator->transConditional(\$preferred, \$alternative, \$parameters, \$domain, \$locale);
    }

    /**
     * @return string
     */
    public function getJsLang()
    {
        \$defaultMessages = \$this->translator->getCatalogue('en_US')->all('javascript');
        \$messages        = \$this->translator->getCatalogue()->all('javascript');

        \$oldKeys = [
            'chosenChooseOne'     => \$this->trans('mautic.core.form.chooseone'),
            'chosenChooseMore'    => \$this->trans('mautic.core.form.choosemultiple'),
            'chosenNoResults'     => \$this->trans('mautic.core.form.nomatches'),
            'pleaseWait'          => \$this->trans('mautic.core.wait'),
            'popupBlockerMessage' => \$this->trans('mautic.core.popupblocked'),
        ];
        \$jsLang = array_merge(\$defaultMessages, \$messages, \$oldKeys);

        return json_encode(\$jsLang, JSON_PRETTY_PRINT | JSON_FORCE_OBJECT);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Templating/Helper/TranslatorHelper.php";
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
        return new Source("", "@bundles/CoreBundle/Templating/Helper/TranslatorHelper.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Templating/Helper/TranslatorHelper.php");
    }
}
