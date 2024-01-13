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

/* @bundles/CoreBundle/Monolog/LogProcessor.php */
class __TwigTemplate_7d8fda89f9b245b7e9d4e91e8a0f9be43adb3ed427db677fb55850544fe5c223 extends Template
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

namespace Mautic\\CoreBundle\\Monolog;

class LogProcessor
{
    /**
     * @param array<string, mixed> \$record
     *
     * @return array<string, mixed>
     */
    public function __invoke(array \$record): array
    {
        \$record['extra'] = [
            'hostname' => gethostname(),
            'pid'      => getmypid(),
        ];

        return \$record;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Monolog/LogProcessor.php";
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
        return new Source("", "@bundles/CoreBundle/Monolog/LogProcessor.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Monolog/LogProcessor.php");
    }
}
