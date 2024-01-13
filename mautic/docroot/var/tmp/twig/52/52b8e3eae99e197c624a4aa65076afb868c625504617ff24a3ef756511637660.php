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

/* @bundles/CoreBundle/Doctrine/Type/UTCDateTimeType.php */
class __TwigTemplate_60a55923eaad0e1d0cb7162ed4d0309753162f0e36eaf7b4ffc6b7142f6dd1c3 extends Template
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

namespace Mautic\\CoreBundle\\Doctrine\\Type;

use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use Doctrine\\DBAL\\Types\\ConversionException;
use Doctrine\\DBAL\\Types\\DateTimeType;
use Mautic\\CoreBundle\\Helper\\DateTimeHelper;

/**
 * Class UTCDateTimeType.
 */
class UTCDateTimeType extends DateTimeType
{
    /**
     * @var \\DateTimeZone
     */
    private static \$utc;

    /**
     * @param \\DateTime \$value
     *
     * @return string|null
     */
    public function convertToDatabaseValue(\$value, AbstractPlatform \$platform)
    {
        if (null === \$value) {
            return null;
        }

        if (!self::\$utc) {
            self::\$utc = new \\DateTimeZone('UTC');
        }

        if (!is_object(\$value)) {
            \$dateHelper = new DateTimeHelper(\$value);
            \$value      = \$dateHelper->getDateTime();
        } else {
            \$value = clone \$value;
        }

        \$value->setTimezone(self::\$utc);

        return parent::convertToDatabaseValue(\$value, \$platform);
    }

    /**
     * @param mixed \$value
     *
     * @return \\DateTime|null
     *
     * @throws ConversionException
     */
    public function convertToPHPValue(\$value, AbstractPlatform \$platform)
    {
        if (null === \$value) {
            return null;
        }

        if (!self::\$utc) {
            self::\$utc = new \\DateTimeZone('UTC');
        }

        // Set to UTC before converting to DateTime
        \$timezone = date_default_timezone_get();
        date_default_timezone_set('UTC');

        \$value = parent::convertToPHPValue(\$value, \$platform);

        // Set to local timezone
        date_default_timezone_set(\$timezone);
        \$value->setTimezone(new \\DateTimeZone(\$timezone));

        return \$value;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Doctrine/Type/UTCDateTimeType.php";
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
        return new Source("", "@bundles/CoreBundle/Doctrine/Type/UTCDateTimeType.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Doctrine/Type/UTCDateTimeType.php");
    }
}
