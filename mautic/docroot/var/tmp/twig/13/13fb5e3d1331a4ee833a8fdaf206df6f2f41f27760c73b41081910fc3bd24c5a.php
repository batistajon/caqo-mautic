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

/* @bundles/EmailBundle/Swiftmailer/Momentum/Callback/MomentumCallback.php */
class __TwigTemplate_7d4b1c05a6bde8876a561d74eef50bcce4d8bea5faf0b94ef72736f1aa4d27c6 extends Template
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

use Mautic\\EmailBundle\\Model\\TransportCallback;
use Mautic\\EmailBundle\\Swiftmailer\\Message\\MauticMessage;
use Mautic\\LeadBundle\\Entity\\DoNotContact;
use Symfony\\Component\\HttpFoundation\\Request;

final class MomentumCallback implements MomentumCallbackInterface
{
    /**
     * @var TransportCallback
     */
    private \$transportCallback;

    /**
     * MomentumCallback constructor.
     */
    public function __construct(TransportCallback \$transportCallback)
    {
        \$this->transportCallback = \$transportCallback;
    }

    public function processCallbackRequest(Request \$request)
    {
        \$responseItems = new ResponseItems(\$request);

        foreach (\$responseItems as \$item) {
            if (\$statHash = \$item->getStatHash()) {
                \$this->transportCallback->addFailureByHashId(\$statHash, \$item->getReason(), \$item->getDncReason());
            } else {
                \$this->transportCallback->addFailureByAddress(\$item->getEmail(), \$item->getReason(), \$item->getDncReason());
            }
        }
    }

    /**
     * @return mixed|void
     */
    public function processImmediateFeedback(\\Swift_Mime_SimpleMessage \$message, array \$response)
    {
        if (!empty(\$response['errors'][0]['code']) && 1902 == (int) \$response['errors'][0]['code']) {
            \$comments     = \$response['errors'][0]['description'];
            \$metadata     = (\$message instanceof MauticMessage) ? \$message->getMetadata() : [];
            \$emailAddress = key(\$message->getTo());

            if (isset(\$metadata[\$emailAddress]) && isset(\$metadata[\$emailAddress]['leadId'])) {
                \$emailId = (!empty(\$metadata[\$emailAddress]['emailId'])) ? \$metadata[\$emailAddress]['emailId'] : null;
                \$this->transportCallback->addFailureByContactId(\$metadata[\$emailAddress]['leadId'], \$comments, DoNotContact::BOUNCED, \$emailId);
            }
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Swiftmailer/Momentum/Callback/MomentumCallback.php";
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
        return new Source("", "@bundles/EmailBundle/Swiftmailer/Momentum/Callback/MomentumCallback.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Swiftmailer/Momentum/Callback/MomentumCallback.php");
    }
}
