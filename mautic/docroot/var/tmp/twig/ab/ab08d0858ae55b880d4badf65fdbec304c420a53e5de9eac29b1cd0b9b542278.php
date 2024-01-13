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

/* @bundles/CoreBundle/Entity/UuidTrait.php */
class __TwigTemplate_fd777d92a16312c889397de763e36f23d20062847ff7cc115d745a534d6960ae extends Template
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

namespace Mautic\\CoreBundle\\Entity;

use Doctrine\\DBAL\\Types\\Types;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;
use Symfony\\Component\\Serializer\\Annotation\\Groups;

trait UuidTrait
{
    /**
     * @Groups({
     *     \"category:read\", \"category:write\",
     *     \"notification:read\", \"notification:write\",
     *     \"company:read\", \"company:write\",
     *     \"leadfield:read\", \"leadfield:write\",
     *     \"page:read\", \"page:write\",
     *     \"campaign:read\", \"campaign:write\",
     *     \"point:read\", \"point:write\",
     *     \"trigger:read\", \"trigger:write\",
     *     \"message:read\", \"message:write\",
     *     \"focus:read\", \"focus:write\",
     *     \"sms:read\", \"sms:write\",
     *     \"asset:read\", \"asset:write\",
     *     \"dynamicContent:read\", \"dynamicContent:write\",
     *     \"form:read\", \"form:write\",
     *     \"stage:read\", \"stage:write\",
     *     \"segment:read\", \"segment:write\",
     *     \"email:read\", \"email:write\"
     * })
     */
    private ?string \$uuid = null;

    public static function addUuidField(ClassMetadataBuilder \$builder): void
    {
        \$builder->createField('uuid', Types::GUID)
            ->nullable()
            ->build();
    }

    public function getUuid(): ?string
    {
        return \$this->uuid;
    }

    public function setUuid(string \$uuid): void
    {
        \$this->uuid = \$uuid;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Entity/UuidTrait.php";
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
        return new Source("", "@bundles/CoreBundle/Entity/UuidTrait.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Entity/UuidTrait.php");
    }
}
