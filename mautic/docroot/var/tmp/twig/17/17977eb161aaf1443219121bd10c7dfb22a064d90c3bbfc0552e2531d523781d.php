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

/* @bundles/EmailBundle/Swiftmailer/Momentum/Callback/ResponseItems.php */
class __TwigTemplate_3e18d3e1807d3983b4cfca3930729430bfdf622596c695e7ec3a6b7e2698ca95 extends Template
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
use Symfony\\Component\\HttpFoundation\\Request;

class ResponseItems implements \\Iterator
{
    /**
     * @var int
     */
    private \$position = 0;

    /**
     * @var ResponseItem[]
     */
    private \$items = [];

    public function __construct(Request \$request)
    {
        \$payload = \$request->request->all();
        foreach (\$payload as \$item) {
            \$msys = \$item['msys'];
            if (isset(\$msys['message_event'])) {
                \$event = \$msys['message_event'];
            } elseif (isset(\$msys['unsubscribe_event'])) {
                \$event = \$msys['unsubscribe_event'];
            } else {
                continue;
            }

            if (isset(\$event['rcpt_type']) && 'to' !== \$event['rcpt_type']) {
                // Ignore cc/bcc

                continue;
            }

            \$bounceClass = isset(\$event['bounce_class']) ? (int) \$event['bounce_class'] : null;
            if (empty(\$event['type']) || !CallbackEnum::shouldBeEventProcessed(\$event['type'], \$bounceClass)) {
                continue;
            }

            try {
                \$this->items[] = new ResponseItem(\$event);
            } catch (ResponseItemException \$e) {
            }
        }
    }

    /**
     * Return the current element.
     *
     * @see  http://php.net/manual/en/iterator.current.php
     *
     * @return ResponseItem
     */
    public function current()
    {
        return \$this->items[\$this->position];
    }

    /**
     * Move forward to next element.
     *
     * @see  http://php.net/manual/en/iterator.next.php
     */
    public function next()
    {
        ++\$this->position;
    }

    /**
     * Return the key of the current element.
     *
     * @see  http://php.net/manual/en/iterator.key.php
     *
     * @return int
     */
    public function key()
    {
        return \$this->position;
    }

    /**
     * Checks if current position is valid.
     *
     * @see  http://php.net/manual/en/iterator.valid.php
     *
     * @return bool
     */
    public function valid()
    {
        return isset(\$this->items[\$this->position]);
    }

    /**
     * Rewind the Iterator to the first element.
     *
     * @see  http://php.net/manual/en/iterator.rewind.php
     */
    public function rewind()
    {
        \$this->position = 0;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Swiftmailer/Momentum/Callback/ResponseItems.php";
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
        return new Source("", "@bundles/EmailBundle/Swiftmailer/Momentum/Callback/ResponseItems.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Swiftmailer/Momentum/Callback/ResponseItems.php");
    }
}
