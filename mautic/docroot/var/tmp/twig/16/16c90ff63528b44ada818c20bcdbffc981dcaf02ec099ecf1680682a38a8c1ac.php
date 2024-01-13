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

/* @bundles/QueueBundle/Queue/QueueConsumerResults.php */
class __TwigTemplate_1b26a9a632e0196c6c60ffca7c9116646ac44c2b9e775c4bef09ea15b1b8ac2d extends Template
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

namespace Mautic\\QueueBundle\\Queue;

/**
 * Class QueueConsumerResults.
 */
final class QueueConsumerResults
{
    const ACKNOWLEDGE        = 'delete';
    const DO_NOT_ACKNOWLEDGE = 'do_not_acknowledge';
    const REJECT             = 'do_not_retry';
    const TEMPORARY_REJECT   = 'temporary_reject';
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/QueueBundle/Queue/QueueConsumerResults.php";
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
        return new Source("", "@bundles/QueueBundle/Queue/QueueConsumerResults.php", "/var/www/html/mautic/docroot/app/bundles/QueueBundle/Queue/QueueConsumerResults.php");
    }
}
