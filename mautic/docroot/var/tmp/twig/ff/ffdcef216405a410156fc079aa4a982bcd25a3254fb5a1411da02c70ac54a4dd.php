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

/* @bundles/UserBundle/Security/SAML/Store/IdStore.php */
class __TwigTemplate_8d0400212a8831782ee80134eeb9965659aa703f814d470daad415b8bd4c17c2 extends Template
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

use Doctrine\\Persistence\\ObjectManager;
use LightSaml\\Provider\\TimeProvider\\TimeProviderInterface;
use LightSaml\\Store\\Id\\IdStoreInterface;
use Mautic\\UserBundle\\Entity\\IdEntry;

class IdStore implements IdStoreInterface
{
    /**
     * @var ObjectManager
     */
    private \$manager;

    /**
     * @var TimeProviderInterface
     */
    private \$timeProvider;

    public function __construct(ObjectManager \$manager, TimeProviderInterface \$timeProvider)
    {
        \$this->manager      = \$manager;
        \$this->timeProvider = \$timeProvider;
    }

    /**
     * @param string \$entityId
     * @param string \$id
     */
    public function set(\$entityId, \$id, \\DateTime \$expiryTime): void
    {
        \$idEntry = \$this->manager->find(IdEntry::class, ['entityId' => \$entityId, 'id' => \$id]);
        if (null == \$idEntry) {
            \$idEntry = new IdEntry();
        }
        \$idEntry->setEntityId(\$entityId)
            ->setId(\$id)
            ->setExpiryTime(\$expiryTime);
        \$this->manager->persist(\$idEntry);
        \$this->manager->flush();
    }

    /**
     * @param string \$entityId
     * @param string \$id
     */
    public function has(\$entityId, \$id): bool
    {
        /** @var IdEntry \$idEntry */
        \$idEntry = \$this->manager->find(IdEntry::class, ['entityId' => \$entityId, 'id' => \$id]);
        if (null == \$idEntry) {
            return false;
        }

        if (\$idEntry->getExpiryTime()->getTimestamp() < \$this->timeProvider->getTimestamp()) {
            return false;
        }

        return true;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/UserBundle/Security/SAML/Store/IdStore.php";
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
        return new Source("", "@bundles/UserBundle/Security/SAML/Store/IdStore.php", "/var/www/html/mautic/docroot/app/bundles/UserBundle/Security/SAML/Store/IdStore.php");
    }
}
