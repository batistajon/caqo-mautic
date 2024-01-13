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

/* @bundles/CoreBundle/Loader/TranslationLoader.php */
class __TwigTemplate_62c67f2191935c6a980884d7447a1cc6876c1b5eda0ef00adc7a1ea2ab27fa80 extends Template
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

namespace Mautic\\CoreBundle\\Loader;

use Mautic\\CoreBundle\\Helper\\BundleHelper;
use Mautic\\CoreBundle\\Helper\\PathsHelper;
use Symfony\\Component\\Finder\\Finder;
use Symfony\\Component\\Translation\\Loader\\ArrayLoader;
use Symfony\\Component\\Translation\\Loader\\LoaderInterface;
use Symfony\\Component\\Translation\\MessageCatalogue;

/**
 * Class TranslationLoader.
 */
class TranslationLoader extends ArrayLoader implements LoaderInterface
{
    /**
     * @var BundleHelper
     */
    private \$bundleHelper;

    /**
     * @var PathsHelper
     */
    private \$pathsHelper;

    /**
     * TranslationLoader constructor.
     */
    public function __construct(BundleHelper \$bundleHelper, PathsHelper \$pathsHelper)
    {
        \$this->bundleHelper = \$bundleHelper;
        \$this->pathsHelper  = \$pathsHelper;
    }

    /**
     * {@inheritdoc}
     */
    public function load(\$resource, \$locale, \$domain = 'messages')
    {
        \$bundles   = \$this->bundleHelper->getMauticBundles(true);
        \$catalogue = new MessageCatalogue(\$locale);

        //Bundle translations
        foreach (\$bundles as \$bundle) {
            //load translations
            \$translations = \$bundle['directory'].'/Translations/'.\$locale;
            if (file_exists(\$translations)) {
                \$iniFiles = new Finder();
                \$iniFiles->files()->in(\$translations)->name('*.ini');

                foreach (\$iniFiles as \$file) {
                    \$this->loadTranslations(\$catalogue, \$locale, \$file);
                }
            }
        }

        //Theme translations
        \$themeDir = \$this->pathsHelper->getSystemPath('current_theme', true);
        if (file_exists(\$themeTranslation = \$themeDir.'/translations/'.\$locale)) {
            \$iniFiles = new Finder();
            \$iniFiles->files()->in(\$themeTranslation)->name('*.ini');
            foreach (\$iniFiles as \$file) {
                \$this->loadTranslations(\$catalogue, \$locale, \$file);
            }
        }

        //3rd Party translations
        \$translationsDir = \$this->pathsHelper->getSystemPath('translations', true).'/'.\$locale;
        if (file_exists(\$translationsDir)) {
            \$iniFiles = new Finder();
            \$iniFiles->files()->in(\$translationsDir)->name('*.ini');

            foreach (\$iniFiles as \$file) {
                \$this->loadTranslations(\$catalogue, \$locale, \$file);
            }
        }

        //Overrides
        \$overridesDir = \$this->pathsHelper->getSystemPath('translations', true).'/overrides/'.\$locale;
        if (file_exists(\$overridesDir)) {
            \$iniFiles = new Finder();
            \$iniFiles->files()->in(\$overridesDir)->name('*.ini');

            foreach (\$iniFiles as \$file) {
                \$this->loadTranslations(\$catalogue, \$locale, \$file);
            }
        }

        return \$catalogue;
    }

    /**
     * Load the translation into the catalogue.
     *
     * @param \$catalogue
     * @param \$locale
     * @param \$file
     *
     * @throws \\Exception
     */
    private function loadTranslations(\$catalogue, \$locale, \$file)
    {
        \$iniFile  = \$file->getRealpath();
        \$content  = file_get_contents(\$iniFile);
        \$messages = parse_ini_string(\$content, true);
        if (false === \$messages) {
            // The translation file is corrupt
            if ('dev' === MAUTIC_ENV) {
                throw new \\Exception(\$iniFile.' is corrupted');
            }

            return;
        }

        \$domain        = substr(\$file->getFilename(), 0, -4);
        \$thisCatalogue = parent::load(\$messages, \$locale, \$domain);
        \$catalogue->addCatalogue(\$thisCatalogue);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Loader/TranslationLoader.php";
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
        return new Source("", "@bundles/CoreBundle/Loader/TranslationLoader.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Loader/TranslationLoader.php");
    }
}
