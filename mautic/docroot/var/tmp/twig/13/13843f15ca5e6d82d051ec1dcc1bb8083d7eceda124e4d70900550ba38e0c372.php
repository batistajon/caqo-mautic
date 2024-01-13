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

/* @bundles/EmailBundle/Swiftmailer/SendGrid/Callback/ResponseItem.php */
class __TwigTemplate_bce85383cd8f98fa02467ba01e89392514169d382613c225a461bc4317b2a7e7 extends Template
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

namespace Mautic\\EmailBundle\\Swiftmailer\\SendGrid\\Callback;

use Mautic\\EmailBundle\\Swiftmailer\\SendGrid\\Exception\\ResponseItemException;

class ResponseItem
{
    /**
     * @var string
     */
    private \$email;

    /**
     * @var string
     */
    private \$reason;

    /**
     * @var int
     */
    private \$dncReason;

    /**
     * @throws ResponseItemException
     */
    public function __construct(array \$item)
    {
        if (empty(\$item['email'])) {
            throw new ResponseItemException();
        }
        \$this->email     = \$item['email'];
        \$this->reason    = !empty(\$item['reason']) ? \$item['reason'] : null;
        \$this->dncReason = CallbackEnum::convertEventToDncReason(\$item['event']);
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return \$this->email;
    }

    /**
     * @return string
     */
    public function getReason()
    {
        return \$this->reason;
    }

    /**
     * @return int
     */
    public function getDncReason()
    {
        return \$this->dncReason;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Swiftmailer/SendGrid/Callback/ResponseItem.php";
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
        return new Source("", "@bundles/EmailBundle/Swiftmailer/SendGrid/Callback/ResponseItem.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Swiftmailer/SendGrid/Callback/ResponseItem.php");
    }
}
