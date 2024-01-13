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

/* @bundles/EmailBundle/MonitoredEmail/Accessor/ConfigAccessor.php */
class __TwigTemplate_e30dd95fd8d961a900b5eb9a428a6db3d1e4465b605de52ff167f84b278e2eb8 extends Template
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

namespace Mautic\\EmailBundle\\MonitoredEmail\\Accessor;

class ConfigAccessor
{
    private \$config;

    /**
     * ConfigAccessor constructor.
     */
    public function __construct(array \$config)
    {
        \$this->config = \$config;
    }

    /**
     * @return string
     */
    public function getPath()
    {
        return \$this->getProperty('imap_path');
    }

    /**
     * @return string
     */
    public function getUser()
    {
        return \$this->getProperty('user');
    }

    /**
     * @return string
     */
    public function getHost()
    {
        return \$this->getProperty('host');
    }

    /**
     * @return string
     */
    public function getFolder()
    {
        return \$this->getProperty('folder');
    }

    /**
     * @return string
     */
    public function getKey()
    {
        return \$this->getPath().'_'.\$this->getUser();
    }

    /**
     * @return bool
     */
    public function isConfigured()
    {
        return \$this->getHost() && \$this->getFolder();
    }

    /**
     * @param \$property
     *
     * @return string|null
     */
    protected function getProperty(\$property)
    {
        return isset(\$this->config[\$property]) ? \$this->config[\$property] : null;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/MonitoredEmail/Accessor/ConfigAccessor.php";
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
        return new Source("", "@bundles/EmailBundle/MonitoredEmail/Accessor/ConfigAccessor.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/MonitoredEmail/Accessor/ConfigAccessor.php");
    }
}
