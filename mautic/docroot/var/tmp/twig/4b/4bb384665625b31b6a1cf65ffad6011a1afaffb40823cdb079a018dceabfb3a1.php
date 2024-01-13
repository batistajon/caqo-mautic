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

/* @bundles/IntegrationsBundle/Sync/DAO/Sync/Report/FieldDAO.php */
class __TwigTemplate_05bd7d500391a17a03b8b1446c2b9e3af1179b5b65dc379032137b54436790c3 extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Report;

use Mautic\\IntegrationsBundle\\Sync\\DAO\\Value\\NormalizedValueDAO;

class FieldDAO
{
    const FIELD_CHANGED   = 'changed';
    const FIELD_REQUIRED  = 'required';
    const FIELD_UNCHANGED = 'unchanged';

    /**
     * @var string
     */
    private \$name;

    /**
     * @var NormalizedValueDAO
     */
    private \$value;

    /**
     * @var \\DateTimeInterface|null
     */
    private \$changeDateTime;

    /**
     * @var string
     */
    private \$state;

    public function __construct(string \$name, NormalizedValueDAO \$value, string \$state = self::FIELD_CHANGED)
    {
        \$this->name  = \$name;
        \$this->value = \$value;
        \$this->state = \$state;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return \$this->name;
    }

    public function getValue(): NormalizedValueDAO
    {
        return \$this->value;
    }

    public function getChangeDateTime(): ?\\DateTimeInterface
    {
        return \$this->changeDateTime;
    }

    /**
     * @return FieldDAO
     */
    public function setChangeDateTime(\\DateTimeInterface \$changeDateTime): self
    {
        \$this->changeDateTime = \$changeDateTime;

        return \$this;
    }

    public function getState(): string
    {
        return \$this->state;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Sync/DAO/Sync/Report/FieldDAO.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/DAO/Sync/Report/FieldDAO.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Sync/DAO/Sync/Report/FieldDAO.php");
    }
}
