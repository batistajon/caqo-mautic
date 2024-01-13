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

/* @bundles/EmailBundle/Swiftmailer/Momentum/Callback/ResponseItem.php */
class __TwigTemplate_c441e788d66224785cc56c78ad173c9ecc5245bb533983b83b28817719fb14bb extends Template
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

namespace Mautic\\EmailBundle\\Swiftmailer\\Momentum\\Callback;

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
     * @var string
     */
    private \$statHash;

    /**
     * @throws ResponseItemException
     */
    public function __construct(array \$item)
    {
        if (empty(\$item['rcpt_to'])) {
            throw new ResponseItemException();
        }
        \$this->email     = \$item['rcpt_to'];
        \$this->dncReason = CallbackEnum::convertEventToDncReason(\$item['type']);
        \$this->reason    = CallbackEnum::getDncComments(\$item['type'], \$item);
        \$this->statHash  = (!empty(\$item['rcpt_meta']['hashId'])) ? \$item['rcpt_meta']['hashId'] : null;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return \$this->email;
    }

    /**
     * @return string|null
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

    /**
     * @return string|null
     */
    public function getStatHash()
    {
        return \$this->statHash;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Swiftmailer/Momentum/Callback/ResponseItem.php";
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
        return new Source("", "@bundles/EmailBundle/Swiftmailer/Momentum/Callback/ResponseItem.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Swiftmailer/Momentum/Callback/ResponseItem.php");
    }
}
