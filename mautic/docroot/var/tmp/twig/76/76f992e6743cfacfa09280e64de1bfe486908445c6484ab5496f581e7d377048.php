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

/* @bundles/CoreBundle/Event/GlobalSearchEvent.php */
class __TwigTemplate_24328f73747037586a905d627df8259d08e9e78f03f432e01a242a456c6597ee extends Template
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

namespace Mautic\\CoreBundle\\Event;

use Symfony\\Component\\EventDispatcher\\Event;

/**
 * Class GlobalSearchEvent.
 */
class GlobalSearchEvent extends Event
{
    /**
     * @var array
     */
    protected \$results = [];

    /**
     * @var string
     */
    protected \$searchString;

    /**
     * @var \\Symfony\\Bundle\\FrameworkBundle\\Translation\\Translator
     */
    protected \$translator;

    /**
     * @param string                                                 \$searchString
     * @param \\Symfony\\Bundle\\FrameworkBundle\\Translation\\Translator \$translator
     */
    public function __construct(\$searchString, \$translator)
    {
        \$this->searchString = strtolower(trim(strip_tags(\$searchString)));
        \$this->translator   = \$translator;
    }

    /**
     * Returns the string to be searched.
     *
     * @return string
     */
    public function getSearchString()
    {
        return \$this->searchString;
    }

    /**
     * Add an array of results from a search query to be listed in right side panel
     * Each result should be the ENTIRE html to be rendered.
     *
     * @param string \$header  String name for section header
     * @param array  \$results Array of HTML output that will be wrapped in <li /> elements
     */
    public function addResults(\$header, array \$results)
    {
        \$header                 = \$this->translator->trans(\$header);
        \$this->results[\$header] = \$results;
    }

    /**
     * Returns the results.
     *
     * @return array
     */
    public function getResults()
    {
        uksort(\$this->results, 'strnatcmp');

        return \$this->results;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Event/GlobalSearchEvent.php";
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
        return new Source("", "@bundles/CoreBundle/Event/GlobalSearchEvent.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Event/GlobalSearchEvent.php");
    }
}
