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

/* @bundles/UserBundle/Security/SAML/Store/EntityDescriptorStore.php */
class __TwigTemplate_d0cb1a8449e29942e79f52d154c86b211fc2aede33a71b77c849e3259d17eee6 extends Template
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

namespace Mautic\\UserBundle\\Security\\SAML\\Store;

use LightSaml\\Model\\Metadata\\EntityDescriptor;
use LightSaml\\Store\\EntityDescriptor\\EntityDescriptorStoreInterface;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;

class EntityDescriptorStore implements EntityDescriptorStoreInterface
{
    /**
     * @var CoreParametersHelper
     */
    private \$coreParametersHelper;

    /**
     * @var EntityDescriptor
     */
    private \$entityDescriptor;

    public function __construct(CoreParametersHelper \$coreParametersHelper)
    {
        \$this->coreParametersHelper = \$coreParametersHelper;
    }

    public function get(\$entityId): ?EntityDescriptor
    {
        if (\$this->entityDescriptor) {
            return \$this->entityDescriptor;
        }

        \$this->createEntityDescriptor();

        if (\$entityId !== \$this->entityDescriptor->getEntityID()) {
            return null;
        }

        return \$this->entityDescriptor;
    }

    public function has(\$entityId): bool
    {
        // SAML is not enabled
        if (!\$this->coreParametersHelper->get('saml_idp_metadata')) {
            return false;
        }

        \$entityDescriptor = \$this->get(\$entityId);

        // EntityIds do not match
        if (!\$entityDescriptor) {
            return false;
        }

        return true;
    }

    /**
     * @return array|EntityDescriptor[]
     */
    public function all(): array
    {
        if (!\$this->entityDescriptor) {
            \$this->createEntityDescriptor();
        }

        return [\$this->entityDescriptor];
    }

    private function createEntityDescriptor(): void
    {
        \$xml = base64_decode(\$this->coreParametersHelper->get('saml_idp_metadata'));

        \$this->entityDescriptor = EntityDescriptor::loadXml(\$xml);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/UserBundle/Security/SAML/Store/EntityDescriptorStore.php";
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
        return new Source("", "@bundles/UserBundle/Security/SAML/Store/EntityDescriptorStore.php", "/var/www/html/mautic/docroot/app/bundles/UserBundle/Security/SAML/Store/EntityDescriptorStore.php");
    }
}
