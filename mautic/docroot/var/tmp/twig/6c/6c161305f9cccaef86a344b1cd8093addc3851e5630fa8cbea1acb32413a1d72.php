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

/* @bundles/LeadBundle/DataObject/LeadManipulator.php */
class __TwigTemplate_8d34d16962ababaa2dcd695a8d56c1f0d0a03860c133ebd521a738b240bb21a9 extends Template
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

namespace Mautic\\LeadBundle\\DataObject;

class LeadManipulator
{
    /**
     * @var string|null
     */
    private \$bundleName;

    /**
     * @var string|null
     */
    private \$objectName;

    /**
     * @var int|null
     */
    private \$objectId;

    /**
     * @var string|null
     */
    private \$objectDescription;

    /**
     * If true then the manipulator was logged and should not be logged for the second time.
     *
     * @var bool
     */
    private \$logged = false;

    /**
     * @param ?string \$bundleName
     * @param ?string \$objectName
     * @param ?int    \$objectId
     * @param ?string \$objectDescription
     */
    public function __construct(\$bundleName = null, \$objectName = null, \$objectId = null, \$objectDescription = null)
    {
        \$this->bundleName        = \$bundleName;
        \$this->objectName        = \$objectName;
        \$this->objectId          = \$objectId;
        \$this->objectDescription = \$objectDescription;
    }

    /**
     * @return ?string
     */
    public function getBundleName()
    {
        return \$this->bundleName;
    }

    /**
     * @return ?string
     */
    public function getObjectName()
    {
        return \$this->objectName;
    }

    /**
     * @return ?int
     */
    public function getObjectId()
    {
        return \$this->objectId;
    }

    /**
     * @return ?string
     */
    public function getObjectDescription()
    {
        return \$this->objectDescription;
    }

    /**
     * Check if the manipulator was logged already or not.
     *
     * @return bool
     */
    public function wasLogged()
    {
        return \$this->logged;
    }

    /**
     * Set manipulator as logged so it wouldn't be logged for the second time in the same request.
     */
    public function setAsLogged()
    {
        \$this->logged = true;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/DataObject/LeadManipulator.php";
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
        return new Source("", "@bundles/LeadBundle/DataObject/LeadManipulator.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/DataObject/LeadManipulator.php");
    }
}
