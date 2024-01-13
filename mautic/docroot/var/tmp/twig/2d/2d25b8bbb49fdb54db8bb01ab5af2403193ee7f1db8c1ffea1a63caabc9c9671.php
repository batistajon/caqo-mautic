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

/* @bundles/EmailBundle/MonitoredEmail/Processor/Bounce/BouncedEmail.php */
class __TwigTemplate_bb292f7e1782c4312e3c5988a610d1c5c1904b609cc2d4afb3400fa740965438 extends Template
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

namespace Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce;

class BouncedEmail
{
    /**
     * @var string|null
     */
    private \$email;

    /**
     * @var string|null
     */
    private \$ruleCategory;

    /**
     * @var string|null
     */
    private \$ruleNumber;

    /**
     * @var string|null
     */
    private \$bounceType;

    /**
     * @var int
     */
    private \$final = 0;

    /**
     * @var string|null
     */
    private \$bounceAddress;

    /**
     * @return string
     */
    public function getContactEmail()
    {
        return \$this->email;
    }

    /**
     * @param string \$email
     *
     * @return BouncedEmail
     */
    public function setContactEmail(\$email)
    {
        \$this->email = \$email;

        return \$this;
    }

    /**
     * @return string
     */
    public function getRuleCategory()
    {
        return \$this->ruleCategory;
    }

    /**
     * @param string \$ruleCategory
     *
     * @return BouncedEmail
     */
    public function setRuleCategory(\$ruleCategory)
    {
        \$this->ruleCategory = \$ruleCategory;

        return \$this;
    }

    /**
     * @return string
     */
    public function getRuleNumber()
    {
        return \$this->ruleNumber;
    }

    /**
     * @param string \$ruleNumber
     *
     * @return BouncedEmail
     */
    public function setRuleNumber(\$ruleNumber)
    {
        \$this->ruleNumber = \$ruleNumber;

        return \$this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return \$this->bounceType;
    }

    /**
     * @param mixed \$bounceType
     *
     * @return BouncedEmail
     */
    public function setType(\$bounceType)
    {
        \$this->bounceType = \$bounceType;

        return \$this;
    }

    /**
     * @return int
     */
    public function isFinal()
    {
        return \$this->final;
    }

    /**
     * @param bool \$final
     *
     * @return BouncedEmail
     */
    public function setIsFinal(\$final)
    {
        \$this->final = (bool) \$final;

        return \$this;
    }

    /**
     * @return string
     */
    public function getBounceAddress()
    {
        return \$this->bounceAddress;
    }

    /**
     * @param string \$originalTo
     *
     * @return BouncedEmail
     */
    public function setBounceAddress(\$bounceAddress)
    {
        \$this->bounceAddress = \$bounceAddress;

        return \$this;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/MonitoredEmail/Processor/Bounce/BouncedEmail.php";
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
        return new Source("", "@bundles/EmailBundle/MonitoredEmail/Processor/Bounce/BouncedEmail.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/MonitoredEmail/Processor/Bounce/BouncedEmail.php");
    }
}
