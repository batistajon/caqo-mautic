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

/* @bundles/EmailBundle/MonitoredEmail/Processor/Reply/Parser.php */
class __TwigTemplate_918a38728569fa042159d5c9199bc70fb4c6fd470d00feb2679176f4721bc878 extends Template
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

namespace Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Reply;

use Mautic\\EmailBundle\\MonitoredEmail\\Exception\\ReplyNotFound;
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
     * Only sure way is to parse the content for the stat ID otherwise attempt the from.
     *
     * @return RepliedEmail
     *
     * @throws ReplyNotFound
     */
    public function parse()
    {
        if (!preg_match('/email\\/([a-zA-Z0-9]+)\\.gif/', \$this->message->textHtml, \$parts)) {
            throw new ReplyNotFound();
        }

        \$hashId = \$parts[1];

        return new RepliedEmail(\$this->message->fromAddress, \$hashId);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/MonitoredEmail/Processor/Reply/Parser.php";
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
        return new Source("", "@bundles/EmailBundle/MonitoredEmail/Processor/Reply/Parser.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/MonitoredEmail/Processor/Reply/Parser.php");
    }
}
