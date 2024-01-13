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

/* @bundles/CoreBundle/Tests/Unit/Helper/resource/paths/app/config/paths.php */
class __TwigTemplate_9d37dc4493c0710390991704dfae67f1972e4ef1506d982019aa8f1c1dca0d47 extends Template
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

if (!isset(\$root)) {
    \$root = __DIR__;
}

\$paths = [
    //customizable
    'themes'       => 'themes',
    'assets'       => 'media',
    'asset_prefix' => '',
    'plugins'      => 'plugins',
    'translations' => 'translations',
    'local_config' => __DIR__.'/local.php',
];

//allow easy overrides of the above
if (file_exists(__DIR__.'/paths_local.php')) {
    include __DIR__.'/paths_local.php';
}

//fixed
\$paths = array_merge(\$paths, [
    //remove /app from the root
    'root'    => substr(\$root, 0, -4),
    'app'     => 'app',
    'bundles' => 'app/bundles',
    'vendor'  => 'vendor',
]);
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/Helper/resource/paths/app/config/paths.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Helper/resource/paths/app/config/paths.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/Helper/resource/paths/app/config/paths.php");
    }
}
