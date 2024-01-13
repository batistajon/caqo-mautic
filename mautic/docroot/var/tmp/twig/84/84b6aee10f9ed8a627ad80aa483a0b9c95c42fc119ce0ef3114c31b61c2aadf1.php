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

/* @bundles/EmailBundle/Swiftmailer/SendGrid/Callback/ResponseItems.php */
class __TwigTemplate_5d2f80088f6180a87efca47f02ec76fd9e27a2a89d0a1c1f29a2bb61702d5492 extends Template
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
            if (empty(\$item['event']) || !CallbackEnum::shouldBeEventProcessed(\$item['event'])) {
                continue;
            }
            try {
                \$this->items[] = new ResponseItem(\$item);
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
        return "@bundles/EmailBundle/Swiftmailer/SendGrid/Callback/ResponseItems.php";
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
        return new Source("", "@bundles/EmailBundle/Swiftmailer/SendGrid/Callback/ResponseItems.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Swiftmailer/SendGrid/Callback/ResponseItems.php");
    }
}
