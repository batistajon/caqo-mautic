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

/* @bundles/SmsBundle/Broadcast/BroadcastResult.php */
class __TwigTemplate_e62a7f4c1e49a48463c06fe20f66bd47cda1c8c2240bdda2744dc195b0c766a2 extends Template
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

namespace Mautic\\SmsBundle\\Broadcast;

class BroadcastResult
{
    /**
     * @var int
     */
    private \$sentCount = 0;

    /**
     * @var int
     */
    private \$failedCount = 0;

    public function process(array \$results)
    {
        foreach (\$results as \$result) {
            if (isset(\$result['sent']) && true === \$result['sent']) {
                \$this->sent();
            } else {
                \$this->failed();
            }
        }
    }

    public function sent()
    {
        ++\$this->sentCount;
    }

    public function failed()
    {
        ++\$this->failedCount;
    }

    /**
     * @return int
     */
    public function getSentCount()
    {
        return \$this->sentCount;
    }

    /**
     * @return int
     */
    public function getFailedCount()
    {
        return \$this->failedCount;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/SmsBundle/Broadcast/BroadcastResult.php";
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
        return new Source("", "@bundles/SmsBundle/Broadcast/BroadcastResult.php", "/var/www/html/mautic/docroot/app/bundles/SmsBundle/Broadcast/BroadcastResult.php");
    }
}
