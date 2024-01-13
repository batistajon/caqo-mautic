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

/* @bundles/EmailBundle/Exception/PartialEmailSendFailure.php */
class __TwigTemplate_c67b276825985678092b3206262d10fd4792ba6c303dfd3a744cb499c27ac6fb extends Template
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

namespace Mautic\\EmailBundle\\Exception;

use Throwable;

class PartialEmailSendFailure extends \\Exception
{
    /**
     * @var int
     */
    private \$sentCount = 0;

    /**
     * PartialEmailSendFailure constructor.
     *
     * @param int    \$sentCount
     * @param string \$failureReason
     * @param int    \$code
     */
    public function __construct(\$sentCount, \$failureReason, \$code = 0, Throwable \$previous = null)
    {
        \$this->sentCount = (int) \$sentCount;

        parent::__construct(\$failureReason, \$code, \$previous);
    }

    /**
     * @return int
     */
    public function getSentCount()
    {
        return \$this->sentCount;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Exception/PartialEmailSendFailure.php";
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
        return new Source("", "@bundles/EmailBundle/Exception/PartialEmailSendFailure.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Exception/PartialEmailSendFailure.php");
    }
}
