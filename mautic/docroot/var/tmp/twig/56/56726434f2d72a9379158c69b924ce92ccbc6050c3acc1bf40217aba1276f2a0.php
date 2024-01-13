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

/* @bundles/EmailBundle/Swiftmailer/Momentum/DTO/TransmissionDTO/RecipientDTO/AddressDTO.php */
class __TwigTemplate_3af2afa048ad7974c558c002ca606d9e45f1a70a1b8cf5ebf7ab7205bccd5335 extends Template
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

namespace Mautic\\EmailBundle\\Swiftmailer\\Momentum\\DTO\\TransmissionDTO\\RecipientDTO;

/**
 * Class AddressDTO.
 */
final class AddressDTO implements \\JsonSerializable
{
    /**
     * @var string
     */
    private \$email;

    /**
     * @var string
     */
    private \$name;

    /**
     * @var string|null
     */
    private \$headerTo;

    /**
     * AddressDTO constructor.
     *
     * @param string \$email
     * @param string \$name
     * @param bool   \$bcc
     */
    public function __construct(\$email, \$name, \$bcc = false)
    {
        \$this->email = \$email;
        \$this->name  = \$name;
        if (false === \$bcc) {
            \$this->headerTo = \$email;
        }
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        \$json = [
            'email' => \$this->email,
            'name'  => \$this->name,
        ];
        if (null !== \$this->headerTo) {
            \$json['header_to'] = \$this->headerTo;
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
        return "@bundles/EmailBundle/Swiftmailer/Momentum/DTO/TransmissionDTO/RecipientDTO/AddressDTO.php";
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
        return new Source("", "@bundles/EmailBundle/Swiftmailer/Momentum/DTO/TransmissionDTO/RecipientDTO/AddressDTO.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Swiftmailer/Momentum/DTO/TransmissionDTO/RecipientDTO/AddressDTO.php");
    }
}
