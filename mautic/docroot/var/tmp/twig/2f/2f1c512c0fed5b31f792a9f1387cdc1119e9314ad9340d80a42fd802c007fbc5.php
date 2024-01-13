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

/* @bundles/EmailBundle/Swiftmailer/Momentum/DTO/TransmissionDTO/OptionsDTO.php */
class __TwigTemplate_bf36527432ac013888b4bc11d4a2c78ac0b5ceaca70daeb1a87c48332ebf27d1 extends Template
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

/**
 * Class OptionsDTO.
 */
final class OptionsDTO implements \\JsonSerializable
{
    /**
     * @var string|null
     */
    private \$startTime;

    /**
     * @var bool|null
     */
    private \$openTracking;

    /**
     * @var bool|null
     */
    private \$clickTracking;

    /**
     * @return mixed
     */
    public function jsonSerialize()
    {
        \$json = [];
        if (null !== \$this->startTime) {
            \$json['start_time'] = \$this->startTime;
        }
        if (null !== \$this->openTracking) {
            \$json['open_tracking'] = \$this->openTracking;
        }
        if (null !== \$this->clickTracking) {
            \$json['click_tracking'] = \$this->clickTracking;
        }

        return \$json;
    }

    /**
     * @param string|null \$startTime
     *
     * @return OptionsDTO
     */
    public function setStartTime(\$startTime = null)
    {
        \$this->startTime = \$startTime;

        return \$this;
    }

    /**
     * @param bool|null \$openTracking
     *
     * @return OptionsDTO
     */
    public function setOpenTracking(\$openTracking = null)
    {
        \$this->openTracking = \$openTracking;

        return \$this;
    }

    /**
     * @param bool|null \$clickTracking
     *
     * @return OptionsDTO
     */
    public function setClickTracking(\$clickTracking = null)
    {
        \$this->clickTracking = \$clickTracking;

        return \$this;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Swiftmailer/Momentum/DTO/TransmissionDTO/OptionsDTO.php";
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
        return new Source("", "@bundles/EmailBundle/Swiftmailer/Momentum/DTO/TransmissionDTO/OptionsDTO.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/Swiftmailer/Momentum/DTO/TransmissionDTO/OptionsDTO.php");
    }
}
