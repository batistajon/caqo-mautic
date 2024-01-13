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

/* @bundles/IntegrationsBundle/Facade/EncryptionService.php */
class __TwigTemplate_5d5fdd3c20824cf59e936db5cbc476de5d8ec50f8f13777f8d8cba62130eb8bb extends Template
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

namespace Mautic\\IntegrationsBundle\\Facade;

use Mautic\\CoreBundle\\Helper\\EncryptionHelper;

class EncryptionService
{
    /**
     * @var EncryptionHelper
     */
    private \$encryptionHelper;

    /**
     * EncryptionService constructor.
     */
    public function __construct(EncryptionHelper \$encryptionHelper)
    {
        \$this->encryptionHelper = \$encryptionHelper;
    }

    /**
     * @param mixed \$keys
     *
     * @return array|string
     */
    public function encrypt(\$keys)
    {
        if (!is_array(\$keys)) {
            return \$this->encryptionHelper->encrypt(\$keys);
        }

        foreach (\$keys as \$name => \$key) {
            \$keys[\$name] = \$this->encryptionHelper->encrypt(\$key);
        }

        return \$keys;
    }

    /**
     * @param      \$keys
     * @param bool \$onlyPrimaryCipher
     *
     * @return array|string
     */
    public function decrypt(\$keys, \$onlyPrimaryCipher = false)
    {
        if (!is_array(\$keys)) {
            return \$this->encryptionHelper->decrypt(\$keys, \$onlyPrimaryCipher);
        }

        foreach (\$keys as \$name => \$key) {
            \$keys[\$name] = \$this->encryptionHelper->decrypt(\$key, \$onlyPrimaryCipher);
        }

        return \$keys;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Facade/EncryptionService.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Facade/EncryptionService.php", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/Facade/EncryptionService.php");
    }
}
