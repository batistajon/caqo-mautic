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

/* @bundles/InstallBundle/Configurator/Step/UserStep.php */
class __TwigTemplate_298c315761545b20c24d5e32df5f01a1afbc36ba7ac05f9367cafc1d387650fd extends Template
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

namespace Mautic\\InstallBundle\\Configurator\\Step;

use Mautic\\CoreBundle\\Configurator\\Step\\StepInterface;
use Mautic\\InstallBundle\\Configurator\\Form\\UserStepType;

class UserStep implements StepInterface
{
    /**
     * User's first name.
     */
    public \$firstname;

    /**
     * User's last name.
     */
    public \$lastname;

    /**
     * User's e-mail address.
     */
    public \$email;

    /**
     * User's username.
     */
    public \$username;

    /**
     * User's password.
     */
    public \$password;

    /**
     * {@inheritdoc}
     */
    public function getFormType()
    {
        return UserStepType::class;
    }

    /**
     * {@inheritdoc}
     */
    public function checkRequirements()
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function checkOptionalSettings()
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function getTemplate()
    {
        return 'MauticInstallBundle:Install:user.html.php';
    }

    /**
     * {@inheritdoc}
     */
    public function update(StepInterface \$data)
    {
        return [];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/InstallBundle/Configurator/Step/UserStep.php";
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
        return new Source("", "@bundles/InstallBundle/Configurator/Step/UserStep.php", "/var/www/html/mautic/docroot/app/bundles/InstallBundle/Configurator/Step/UserStep.php");
    }
}
