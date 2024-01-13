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

/* @bundles/CoreBundle/Test/Session/FixedMockFileSessionStorage.php */
class __TwigTemplate_531aaa3e58db3db18dcb934d81fc2747ef1db1bd6b1eded80763b8d179ad797f extends Template
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

namespace Mautic\\CoreBundle\\Test\\Session;

use Symfony\\Component\\HttpFoundation\\Session\\Storage\\MockFileSessionStorage;

/**
 * Class FixedMockFileSessionStorage.
 *
 * Work around for Symfony bug https://github.com/symfony/symfony/issues/13450
 */
class FixedMockFileSessionStorage extends MockFileSessionStorage
{
    public function setId(\$id)
    {
        if (\$this->id !== \$id) {
            parent::setId(\$id);
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Test/Session/FixedMockFileSessionStorage.php";
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
        return new Source("", "@bundles/CoreBundle/Test/Session/FixedMockFileSessionStorage.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Test/Session/FixedMockFileSessionStorage.php");
    }
}
