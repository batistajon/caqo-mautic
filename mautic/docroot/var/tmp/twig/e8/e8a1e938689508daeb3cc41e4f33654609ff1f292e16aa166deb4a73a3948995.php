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

/* @bundles/LeadBundle/Event/LeadListFiltersChoicesEvent.php */
class __TwigTemplate_7e4b439948f927186e963acf91880015b720d71afd3127ada451951b6349f68c extends Template
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

declare(strict_types=1);

namespace Mautic\\LeadBundle\\Event;

use Mautic\\CoreBundle\\Event\\AbstractCustomRequestEvent;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Translation\\TranslatorInterface;

class LeadListFiltersChoicesEvent extends AbstractCustomRequestEvent
{
    /**
     * Please refer to ListModel.php, inside getChoiceFields method, for examples of choices.
     *
     * @var mixed
     */
    protected \$choices;

    /**
     * Please refer to ListModel.php, inside getChoiceFields method, for default operators availabled.
     *
     * @var mixed[]
     */
    protected \$operators;

    /**
     * @var TranslatorInterface
     */
    protected \$translator;

    private string \$search;

    /**
     * @param mixed[] \$choices
     * @param mixed[] \$operators
     */
    public function __construct(\$choices, \$operators, TranslatorInterface \$translator, Request \$request = null, string \$search = '')
    {
        parent::__construct(\$request);

        \$this->choices    = \$choices;
        \$this->operators  = \$operators;
        \$this->translator = \$translator;
        \$this->search     = \$search;
    }

    /**
     * @return mixed[]
     */
    public function getChoices()
    {
        return \$this->choices;
    }

    /**
     * @return mixed[]
     */
    public function getOperators()
    {
        return \$this->operators;
    }

    /**
     * @return TranslatorInterface
     */
    public function getTranslator()
    {
        return \$this->translator;
    }

    public function getSearch(): string
    {
        return \$this->search;
    }

    /**
     * Add a new choice for list filters
     * Please refer to ListModel.php, inside getChoiceFields method, for examples of choices.
     *
     * @param string  \$object
     * @param string  \$choiceKey
     * @param mixed[] \$choiceConfig
     */
    public function addChoice(\$object, \$choiceKey, \$choiceConfig)
    {
        if (!isset(\$this->choices[\$object])) {
            \$this->choices[\$object] = [];
        }
        if (!array_key_exists(\$choiceKey, \$this->choices[\$object])) {
            \$this->choices[\$object][\$choiceKey] = \$choiceConfig;
        }
    }

    /**
     * @param mixed[] \$choiceConfig
     */
    public function setChoice(string \$object, string \$choiceKey, array \$choiceConfig): void
    {
        if (!isset(\$this->choices[\$object])) {
            \$this->choices[\$object] = [];
        }

        \$this->choices[\$object][\$choiceKey] = \$choiceConfig;
    }

    /**
     * @param array<string,array<string,string>> \$choices
     */
    public function setChoices(array \$choices): void
    {
        \$this->choices = \$choices;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Event/LeadListFiltersChoicesEvent.php";
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
        return new Source("", "@bundles/LeadBundle/Event/LeadListFiltersChoicesEvent.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Event/LeadListFiltersChoicesEvent.php");
    }
}
