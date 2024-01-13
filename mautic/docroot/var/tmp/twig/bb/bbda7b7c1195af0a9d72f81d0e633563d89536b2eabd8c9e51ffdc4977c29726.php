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

/* @bundles/CoreBundle/Service/LocalFileAdapterService.php */
class __TwigTemplate_5df34e11f13412f257db8e5bd6885a0c7e6b2ed1dae2450585559563a1c96c6c extends Template
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

namespace Mautic\\CoreBundle\\Service;

use League\\Flysystem\\Adapter\\Local;

class LocalFileAdapterService extends Local
{
    /**
     * @var array<string, array<string, int>>
     */
    protected static \$permissions = [
        'file' => [
            'public'  => 0666,
            'private' => 0600,
        ],
        'dir'  => [
            'public'  => 0777,
            'private' => 0700,
        ],
    ];

    public function __construct(string \$root)
    {
        parent::__construct(\$root, LOCK_EX, self::DISALLOW_LINKS, self::\$permissions);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Service/LocalFileAdapterService.php";
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
        return new Source("", "@bundles/CoreBundle/Service/LocalFileAdapterService.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Service/LocalFileAdapterService.php");
    }
}
