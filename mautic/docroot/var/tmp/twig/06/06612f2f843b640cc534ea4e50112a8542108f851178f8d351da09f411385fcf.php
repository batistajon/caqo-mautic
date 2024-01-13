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

/* @bundles/EmailBundle/Swiftmailer/Momentum/DTO/TransmissionDTO/ContentDTO/FromDTO.php */
class __TwigTemplate_b988ee194ca7c81adab8db938534b8941d1effce380e22fd56e7fc15323c493a extends Template
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
 * Class FromDTO.
 */
final class FromDTO implements \\JsonSerializable
{
    /**
     * @var string
     */
    private \$email;

    /**
     * @var string|null
     */
    private \$name;

    /**
     * FromDTO constructor.
     *
     * @param string \$email
     */
    public function __construct(\$email)
    {
        \$this->email = \$email;
    }

    /**
     * @param string|null \$name
     *
     * @return FromDTO
     */
    public function setName(\$name = null)
    {
        \$this->name = \$name;

        return \$this;
    }

    /**
     * @return mixed
     */
    public function jsonSerialize()
    {
        \$json = [
            'email' => \$this->email,
        ];
        if (null !== \$this->name) {
            \$json['name'] = \$this->name;
        }

        return \$json;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Swiftmailer/Momentum/DTO/TransmissionDTO/ContentDTO/FromDTO.php";
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
        return new Source("", "@bundles/EmailBundle/Swiftmailer/Momentum/DTO/TransmissionDTO/ContentDTO/FromDTO.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Swiftmailer/Momentum/DTO/TransmissionDTO/ContentDTO/FromDTO.php");
    }
}
