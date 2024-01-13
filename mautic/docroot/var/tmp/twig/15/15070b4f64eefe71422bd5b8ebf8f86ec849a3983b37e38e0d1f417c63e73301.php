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

/* @bundles/PluginBundle/Security/Permissions/PluginPermissions.php */
class __TwigTemplate_6cb9fd5fed353dc4c7bea0c80b042ac408f5802d2ffd2d77d3aef70ec1816a34 extends Template
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

namespace Mautic\\PluginBundle\\Security\\Permissions;

use Mautic\\CoreBundle\\Security\\Permissions\\AbstractPermissions;
use Symfony\\Component\\Form\\FormBuilderInterface;

/**
 * Class PluginPermissions.
 */
class PluginPermissions extends AbstractPermissions
{
    /**
     * {@inheritdoc}
     */
    public function __construct(\$params)
    {
        parent::__construct(\$params);
        \$this->addManagePermission('plugins');
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'plugin';
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface &\$builder, array \$options, array \$data)
    {
        \$this->addManageFormFields('plugin', 'plugins', \$builder, \$data);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PluginBundle/Security/Permissions/PluginPermissions.php";
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
        return new Source("", "@bundles/PluginBundle/Security/Permissions/PluginPermissions.php", "/var/www/html/mautic/docroot/app/bundles/PluginBundle/Security/Permissions/PluginPermissions.php");
    }
}
