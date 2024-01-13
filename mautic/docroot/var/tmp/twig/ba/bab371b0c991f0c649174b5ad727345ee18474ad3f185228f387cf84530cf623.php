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

/* @bundles/EmailBundle/MonitoredEmail/Processor/Bounce/Parser.php */
class __TwigTemplate_156f61315bdaa855d518184cafed51d2d1d81e35b98648497f9c860cc59ae418 extends Template
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

use Mautic\\EmailBundle\\MonitoredEmail\\Exception\\BounceNotFound;
use Mautic\\EmailBundle\\MonitoredEmail\\Message;

class Parser
{
    /**
     * @var Message
     */
    private \$message;

    /**
     * Parser constructor.
     */
    public function __construct(Message \$message)
    {
        \$this->message = \$message;
    }

    /**
     * @return string|null
     */
    public function getFailedRecipients()
    {
        return (isset(\$this->message->xHeaders['x-failed-recipients'])) ? \$this->message->xHeaders['x-failed-recipients'] : null;
    }

    /**
     * @return BouncedEmail
     *
     * @throws BounceNotFound
     */
    public function parse()
    {
        \$bouncerAddress = null;
        foreach (\$this->message->to as \$to => \$name) {
            // Some ISPs strip the + email so will still process the content for a bounce
            // even if a +bounce address was not found
            if (false !== strpos(\$to, '+bounce')) {
                \$bouncerAddress = \$to;

                break;
            }
        }

        // First parse for a DSN report
        \$dsnParser = new DsnParser();
        try {
            \$bounce = \$dsnParser->getBounce(\$this->message);
        } catch (BounceNotFound \$exception) {
            // DSN report wasn't found so try parsing the body itself
            \$bodyParser = new BodyParser();
            \$bounce     = \$bodyParser->getBounce(\$this->message, \$this->getFailedRecipients());
        }

        \$bounce->setBounceAddress(\$bouncerAddress);

        return \$bounce;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/MonitoredEmail/Processor/Bounce/Parser.php";
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
        return new Source("", "@bundles/EmailBundle/MonitoredEmail/Processor/Bounce/Parser.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/MonitoredEmail/Processor/Bounce/Parser.php");
    }
}
