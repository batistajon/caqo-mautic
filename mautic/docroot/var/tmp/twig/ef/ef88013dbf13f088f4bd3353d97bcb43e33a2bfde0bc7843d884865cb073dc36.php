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

/* @bundles/AssetBundle/Security/Permissions/AssetPermissions.php */
class __TwigTemplate_738a20f529aa6f6dd1118a94e143f4468b94416f40f3c8dcfe6e801e7f3cfea8 extends Template
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

namespace Mautic\\AssetBundle\\Security\\Permissions;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Security\\Permissions\\AbstractPermissions;
use Symfony\\Component\\Form\\FormBuilderInterface;

class AssetPermissions extends AbstractPermissions
{
    public function __construct(CoreParametersHelper \$coreParametersHelper)
    {
        parent::__construct(\$coreParametersHelper->all());
    }

    public function definePermissions()
    {
        \$this->addExtendedPermissions('assets');
        \$this->addStandardPermissions('categories');
    }

    public function getName()
    {
        return 'asset';
    }

    public function buildForm(FormBuilderInterface &\$builder, array \$options, array \$data)
    {
        \$this->addStandardFormFields('asset', 'categories', \$builder, \$data);
        \$this->addExtendedFormFields('asset', 'assets', \$builder, \$data);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/AssetBundle/Security/Permissions/AssetPermissions.php";
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
        return new Source("", "@bundles/AssetBundle/Security/Permissions/AssetPermissions.php", "/var/www/html/mautic/docroot/app/bundles/AssetBundle/Security/Permissions/AssetPermissions.php");
    }
}
