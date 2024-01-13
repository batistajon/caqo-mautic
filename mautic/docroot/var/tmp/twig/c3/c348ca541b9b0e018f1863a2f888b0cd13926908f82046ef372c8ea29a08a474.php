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

/* @bundles/PageBundle/Security/Permissions/PagePermissions.php */
class __TwigTemplate_2938c44f0409b0c8a21504dd45fd32692ee09e13f3248dbffa9d294ab30f0152 extends Template
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

namespace Mautic\\PageBundle\\Security\\Permissions;

use Mautic\\CoreBundle\\Security\\Permissions\\AbstractPermissions;
use Symfony\\Component\\Form\\FormBuilderInterface;

/**
 * Class PagePermissions.
 */
class PagePermissions extends AbstractPermissions
{
    /**
     * {@inheritdoc}
     */
    public function __construct(\$params)
    {
        parent::__construct(\$params);
        \$this->addExtendedPermissions('pages');
        \$this->addStandardPermissions('categories');
        \$this->addExtendedPermissions('preference_center');
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'page';
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface &\$builder, array \$options, array \$data)
    {
        \$this->addStandardFormFields('page', 'categories', \$builder, \$data);
        \$this->addExtendedFormFields('page', 'pages', \$builder, \$data);
        \$this->addExtendedFormFields('page', 'preference_center', \$builder, \$data);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PageBundle/Security/Permissions/PagePermissions.php";
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
        return new Source("", "@bundles/PageBundle/Security/Permissions/PagePermissions.php", "/var/www/html/mautic/docroot/app/bundles/PageBundle/Security/Permissions/PagePermissions.php");
    }
}
