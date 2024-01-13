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

/* @bundles/CoreBundle/Templating/Twig/Extension/TranslatorExtension.php */
class __TwigTemplate_d0e0e0b038f101494935f2bcb2a422d1501b44eac3a25496f2edf249ad0bbf63 extends Template
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

declare(strict_types=1);

namespace Mautic\\CoreBundle\\Templating\\Twig\\Extension;

use Mautic\\CoreBundle\\Templating\\Helper\\TranslatorHelper;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;

class TranslatorExtension extends AbstractExtension
{
    private TranslatorHelper \$translatorHelper;

    public function __construct(TranslatorHelper \$translatorHelper)
    {
        \$this->translatorHelper = \$translatorHelper;
    }

    public function getFunctions()
    {
        return [
            new TwigFunction('translatorGetJsLang', [\$this, 'getJsLang']),
        ];
    }

    public function getJsLang(): string
    {
        return \$this->translatorHelper->getJsLang();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Templating/Twig/Extension/TranslatorExtension.php";
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
        return new Source("", "@bundles/CoreBundle/Templating/Twig/Extension/TranslatorExtension.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Templating/Twig/Extension/TranslatorExtension.php");
    }
}
