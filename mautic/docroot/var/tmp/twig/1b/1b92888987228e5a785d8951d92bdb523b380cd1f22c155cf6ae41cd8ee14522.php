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

/* @bundles/CoreBundle/IpLookup/DoNotSellList/MaxMindDoNotSellList.php */
class __TwigTemplate_0abb9fb3a4e639b80d432908a2d5664a1f32a84c2c67e2629f255f16f8572100 extends Template
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

namespace Mautic\\CoreBundle\\IpLookup\\DoNotSellList;

use Mautic\\CoreBundle\\Exception\\BadConfigurationException;
use Mautic\\CoreBundle\\Exception\\FileNotFoundException;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;

class MaxMindDoNotSellList implements DoNotSellListInterface
{
    private \$position = 0;

    private \$list = [];

    private \$listPath;

    public function __construct(CoreParametersHelper \$coreParametersHelper)
    {
        \$this->listPath  = \$coreParametersHelper->get('maxmind_do_not_sell_list_path', '');
    }

    public function loadList(): bool
    {
        \$listPath = \$this->getListPath();

        if (false == \$listPath) {
            throw new BadConfigurationException('Please configure the path to the MaxMind Do Not Sell List.');
        }

        if (!file_exists(\$listPath)) {
            throw new FileNotFoundException('Please make sure the MaxMind Do Not Sell List file has been downloaded.');
        }

        \$json = file_get_contents(\$listPath);

        if (\$data = json_decode(\$json, true)) {
            \$this->list = \$data['exclusions'];

            return true;
        }

        return false;
    }

    public function getListPath(): string
    {
        return \$this->listPath;
    }

    public function setListPath(string \$path): void
    {
        \$this->listPath = \$path;
    }

    public function getList(): array
    {
        return \$this->list;
    }

    public function rewind()
    {
        \$this->position = 0;
    }

    public function current()
    {
        return \$this->list[\$this->position];
    }

    public function key()
    {
        return \$this->position;
    }

    public function next()
    {
        ++\$this->position;
    }

    public function valid()
    {
        return isset(\$this->list[\$this->position]);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/IpLookup/DoNotSellList/MaxMindDoNotSellList.php";
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
        return new Source("", "@bundles/CoreBundle/IpLookup/DoNotSellList/MaxMindDoNotSellList.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/IpLookup/DoNotSellList/MaxMindDoNotSellList.php");
    }
}
