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

/* @bundles/NotificationBundle/Security/Permissions/NotificationPermissions.php */
class __TwigTemplate_46057730703b6c6348429f4494854b29ddcb272b2cb21d9b1862c52887da00e1 extends Template
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

namespace Mautic\\NotificationBundle\\Security\\Permissions;

use Mautic\\CoreBundle\\Security\\Permissions\\AbstractPermissions;
use Symfony\\Component\\Form\\FormBuilderInterface;

/**
 * Class NotificationPermissions.
 */
class NotificationPermissions extends AbstractPermissions
{
    /**
     * {@inheritdoc}
     */
    public function __construct(\$params)
    {
        parent::__construct(\$params);
        \$this->addStandardPermissions('categories');
        \$this->addExtendedPermissions('notifications');
        \$this->addExtendedPermissions('mobile_notifications');
    }

    /**
     * {@inheritdoc}
     *
     * @return string|void
     */
    public function getName()
    {
        return 'notification';
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface &\$builder, array \$options, array \$data)
    {
        \$this->addStandardFormFields('notification', 'categories', \$builder, \$data);
        \$this->addExtendedFormFields('notification', 'notifications', \$builder, \$data);
        \$this->addExtendedFormFields('notification', 'mobile_notifications', \$builder, \$data);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/NotificationBundle/Security/Permissions/NotificationPermissions.php";
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
        return new Source("", "@bundles/NotificationBundle/Security/Permissions/NotificationPermissions.php", "/var/www/html/mautic/docroot/app/bundles/NotificationBundle/Security/Permissions/NotificationPermissions.php");
    }
}
