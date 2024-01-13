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

/* @bundles/EmailBundle/Swiftmailer/Momentum/DTO/TransmissionDTO/RecipientDTO.php */
class __TwigTemplate_841fa985aa22efa06b0acc670e776a64bf05b0ae2ddbe51c3395390b8258db12 extends Template
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

namespace Mautic\\EmailBundle\\Swiftmailer\\Momentum\\DTO\\TransmissionDTO;

use Mautic\\EmailBundle\\Swiftmailer\\Momentum\\DTO\\TransmissionDTO\\RecipientDTO\\AddressDTO;

/**
 * Class RecipientDTO.
 */
final class RecipientDTO implements \\JsonSerializable
{
    /**
     * @var string|null
     */
    private \$returnPath;

    /**
     * @var AddressDTO
     */
    private \$address;

    /**
     * @var array
     */
    private \$tags = [];

    /**
     * @var array
     */
    private \$metadata = [];

    /**
     * @var array
     */
    private \$substitutionData = [];

    /**
     * RecipientDTO constructor.
     *
     * @param array \$metadata
     * @param array \$substitutionData
     */
    public function __construct(AddressDTO \$addressDTO, \$metadata = [], \$substitutionData = [])
    {
        \$this->address          = \$addressDTO;
        \$this->metadata         = \$metadata;
        \$this->substitutionData = \$substitutionData;
    }

    /**
     * @param string|null \$returnPath
     *
     * @return RecipientDTO
     */
    public function setReturnPath(\$returnPath)
    {
        \$this->returnPath = \$returnPath;

        return \$this;
    }

    /**
     * @param string \$key
     * @param string \$value
     *
     * @return RecipientDTO
     */
    public function addTag(\$key, \$value)
    {
        \$this->tags[\$key] = \$value;

        return \$this;
    }

    /**
     * @param string \$key
     * @param mixed  \$value
     *
     * @return RecipientDTO
     */
    public function addMetadata(\$key, \$value)
    {
        \$this->metadata[\$key] = \$value;

        return \$this;
    }

    /**
     * @param string \$key
     * @param mixed  \$value
     *
     * @return \$this
     */
    public function addSubstitutionData(\$key, \$value)
    {
        \$this->substitutionData[\$key] = \$value;

        return \$this;
    }

    /**
     * @return mixed
     */
    public function jsonSerialize()
    {
        \$json = [
            'address' => \$this->address,
        ];
        if (0 !== count(\$this->tags)) {
            \$json['tags'] = \$this->tags;
        }
        if (0 !== count(\$this->metadata)) {
            \$json['metadata'] = \$this->metadata;
        }

        if (0 === count(\$this->substitutionData)) {
            // `substitution_data` is required but Sparkpost will return the following error with empty arrays:
            // field 'substitution_data' is of type 'json_array', but needs to be of type 'json_object'
            \$json['substitution_data'] = new \\stdClass();
        } else {
            \$json['substitution_data'] = \$this->substitutionData;
        }

        if (null !== \$this->returnPath) {
            \$json['return_path'] = \$this->returnPath;
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
        return "@bundles/EmailBundle/Swiftmailer/Momentum/DTO/TransmissionDTO/RecipientDTO.php";
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
        return new Source("", "@bundles/EmailBundle/Swiftmailer/Momentum/DTO/TransmissionDTO/RecipientDTO.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Swiftmailer/Momentum/DTO/TransmissionDTO/RecipientDTO.php");
    }
}
