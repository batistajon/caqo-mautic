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

/* @bundles/EmailBundle/Swiftmailer/Momentum/DTO/TransmissionDTO/ContentDTO/AttachementDTO.php */
class __TwigTemplate_b7a91b1319436a9ccbf2b6ec76470a126e3813707036d081248b1b6a181da9b2 extends Template
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

namespace Mautic\\EmailBundle\\Swiftmailer\\Momentum\\DTO\\TransmissionDTO\\ContentDTO;

/**
 * Class AttachementDTO.
 */
final class AttachementDTO implements \\JsonSerializable
{
    /**
     * @var string
     */
    private \$type;

    /**
     * @var string
     */
    private \$name;

    /**
     * @var mixed
     */
    private \$content;

    /**
     * AttachementDTO constructor.
     *
     * @param string \$type
     * @param string \$name
     * @param string \$content
     */
    public function __construct(\$type, \$name, \$content)
    {
        \$this->type    = \$type;
        \$this->name    = \$name;
        \$this->content = \$content;
    }

    /**
     * @return mixed
     */
    public function jsonSerialize()
    {
        return [
            'type' => \$this->type,
            'name' => \$this->name,
            'data' => \$this->content,
        ];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Swiftmailer/Momentum/DTO/TransmissionDTO/ContentDTO/AttachementDTO.php";
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
        return new Source("", "@bundles/EmailBundle/Swiftmailer/Momentum/DTO/TransmissionDTO/ContentDTO/AttachementDTO.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Swiftmailer/Momentum/DTO/TransmissionDTO/ContentDTO/AttachementDTO.php");
    }
}
