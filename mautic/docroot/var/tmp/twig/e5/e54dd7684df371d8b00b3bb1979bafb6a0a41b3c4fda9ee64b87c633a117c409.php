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

/* @bundles/CoreBundle/Templating/Twig/Extension/DateExtension.php */
class __TwigTemplate_27b8e18e92200fd67c7d9b5519ccefadb9815cba5cc0ca8487afdc639109beb5 extends Template
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

use Mautic\\CoreBundle\\Templating\\Helper\\DateHelper;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;

class DateExtension extends AbstractExtension
{
    protected DateHelper \$dateHelper;

    public function __construct(DateHelper \$dateHelper)
    {
        \$this->dateHelper = \$dateHelper;
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('dateToText', [\$this, 'toText'], ['is_safe' => ['all']]),
        ];
    }

    /**
     * Returns date/time like Today, 10:00 AM.
     *
     * @param mixed \$datetime
     * @param bool  \$forceDateForNonText If true, return as full date/time rather than \"29 days ago\"
     */
    public function toText(\$datetime, string \$timezone = 'local', string \$fromFormat = 'Y-m-d H:i:s', bool \$forceDateForNonText = false): string
    {
        return \$this->dateHelper->toText(\$datetime, \$timezone, \$fromFormat, \$forceDateForNonText);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Templating/Twig/Extension/DateExtension.php";
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
        return new Source("", "@bundles/CoreBundle/Templating/Twig/Extension/DateExtension.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Templating/Twig/Extension/DateExtension.php");
    }
}
