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

/* @bundles/EmailBundle/Event/ParseEmailEvent.php */
class __TwigTemplate_ccb9f4e3b4ba35de9feb61522aea5f204cbfba0380dbaa1252ba7738b5607104 extends Template
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

namespace Mautic\\EmailBundle\\Event;

use Symfony\\Component\\EventDispatcher\\Event;

class ParseEmailEvent extends Event
{
    /**
     * @var array
     */
    private \$messages;

    /**
     * @var array
     */
    private \$keys;

    /**
     * @var array
     */
    private \$criteriaRequests = [];

    /**
     * @var array
     */
    private \$markAsSeen = [];

    public function __construct(array \$messages = [], array \$applicableKeys = [])
    {
        \$this->messages = \$messages;
        \$this->keys     = \$applicableKeys;
    }

    /**
     * Get the array of messages.
     *
     * @return \\Mautic\\EmailBundle\\MonitoredEmail\\Message[]
     */
    public function getMessages()
    {
        return \$this->messages;
    }

    /**
     * @param \$messages
     *
     * @return \$this
     */
    public function setMessages(\$messages)
    {
        \$this->messages = \$messages;

        return \$this;
    }

    /**
     * @return array
     */
    public function getKeys()
    {
        return \$this->keys;
    }

    /**
     * @param array \$keys
     *
     * @return \$this
     */
    public function setKeys(\$keys)
    {
        \$this->keys = \$keys;

        return \$this;
    }

    /**
     * Check if the set of messages is applicable and should be processed by the listener.
     *
     * @param \$bundleKey
     * @param \$folderKeys
     *
     * @return bool
     */
    public function isApplicable(\$bundleKey, \$folderKeys)
    {
        if (!is_array(\$folderKeys)) {
            \$folderKeys = [\$folderKeys];
        }

        foreach (\$folderKeys as \$folderKey) {
            \$key = \$bundleKey.'_'.\$folderKey;

            if (in_array(\$key, \$this->keys)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Set a criteria request for filtering fetched mail.
     *
     * @param string \$bundleKey
     * @param string \$folderKeys
     * @param string \$criteria   Should be a string using combinations of Mautic\\EmailBundle\\MonitoredEmail\\Mailbox::CRITERIA_* constants
     * @param bool   \$markAsSeen Mark the message as read after being processed
     */
    public function setCriteriaRequest(\$bundleKey, \$folderKeys, \$criteria, \$markAsSeen = true)
    {
        if (!is_array(\$folderKeys)) {
            \$folderKeys = [\$folderKeys];
        }

        foreach (\$folderKeys as \$folderKey) {
            \$key = \$bundleKey.'_'.\$folderKey;

            \$this->criteriaRequests[\$key] = \$criteria;
            \$this->markAsSeen[\$key]       = \$markAsSeen;
        }
    }

    /**
     * @return array
     */
    public function getCriteriaRequests()
    {
        return \$this->criteriaRequests;
    }

    /**
     * @return array
     */
    public function getMarkAsSeenInstructions()
    {
        return \$this->markAsSeen;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Event/ParseEmailEvent.php";
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
        return new Source("", "@bundles/EmailBundle/Event/ParseEmailEvent.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Event/ParseEmailEvent.php");
    }
}
