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

/* @bundles/EmailBundle/Event/MonitoredEmailEvent.php */
class __TwigTemplate_8349536338b67ee875a370ff89ef00c781c64bf908edadf3c091494be46bf83a extends Template
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
use Symfony\\Component\\Form\\FormBuilder;

class MonitoredEmailEvent extends Event
{
    /**
     * @var FormBuilder
     */
    private \$formBuilder;

    /**
     * @var array
     */
    private \$data;

    /**
     * @var array
     */
    private \$folders = [];

    public function __construct(FormBuilder \$builder, array \$data)
    {
        \$this->formBuilder = \$builder;
        \$this->data        = \$data;
    }

    /**
     * Get the FormBuilder for monitored_mailboxes FormType.
     *
     * @return FormBuilder
     */
    public function getFormBuilder()
    {
        return \$this->formBuilder;
    }

    /**
     * Insert a folder to configure.
     *
     * @param        \$bundleKey
     * @param        \$folderKey
     * @param        \$label
     * @param string \$default
     */
    public function addFolder(\$bundleKey, \$folderKey, \$label, \$default = '')
    {
        \$keyName = (\$folderKey) ? \$bundleKey.'_'.\$folderKey : \$bundleKey;

        \$this->folders[\$keyName] = [
            'label'   => \$label,
            'default' => \$default,
        ];
    }

    /**
     * Get the value set for a specific bundle/folder.
     *
     * @param \$bundleKey
     * @param \$folderKey
     * @param \$default
     *
     * @return string
     */
    public function getData(\$bundleKey, \$folderKey, \$default = '')
    {
        \$keyName = \$bundleKey.'_'.\$folderKey;

        return (isset(\$this->data[\$keyName])) ? \$this->data[\$keyName] : \$default;
    }

    /**
     * Get array of folders.
     *
     * @return array
     */
    public function getFolders()
    {
        return \$this->folders;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Event/MonitoredEmailEvent.php";
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
        return new Source("", "@bundles/EmailBundle/Event/MonitoredEmailEvent.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Event/MonitoredEmailEvent.php");
    }
}
