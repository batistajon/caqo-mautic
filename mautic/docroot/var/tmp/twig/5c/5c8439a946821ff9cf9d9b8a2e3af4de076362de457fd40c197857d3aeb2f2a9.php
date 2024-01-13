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

/* @bundles/PageBundle/Event/UntrackableUrlsEvent.php */
class __TwigTemplate_b8d38a8270e78af567fccd544a18712236375519d10d36b65cb0d09a3fc2bbca extends Template
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

namespace Mautic\\PageBundle\\Event;

use Symfony\\Component\\EventDispatcher\\Event;

/**
 * Class UntrackableUrlsEvent.
 */
class UntrackableUrlsEvent extends Event
{
    /**
     * @var array
     */
    private \$doNotTrack = [
        '{webview_url}',
        '{unsubscribe_url}',
        '{trackable=(.*?)}',
    ];

    /**
     * @var string
     */
    private \$content;

    /**
     * TrackableEvent constructor.
     *
     * @param \$content
     */
    public function __construct(\$content)
    {
        \$this->content = \$content;
    }

    /**
     * set a URL or token to not convert to trackables.
     *
     * @param \$url
     */
    public function addNonTrackable(\$url)
    {
        \$this->doNotTrack[] = \$url;
    }

    /**
     * Get array of non-trackables.
     *
     * @return array
     */
    public function getDoNotTrackList()
    {
        return \$this->doNotTrack;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return \$this->content;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PageBundle/Event/UntrackableUrlsEvent.php";
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
        return new Source("", "@bundles/PageBundle/Event/UntrackableUrlsEvent.php", "/var/www/html/mautic/docroot/app/bundles/PageBundle/Event/UntrackableUrlsEvent.php");
    }
}
