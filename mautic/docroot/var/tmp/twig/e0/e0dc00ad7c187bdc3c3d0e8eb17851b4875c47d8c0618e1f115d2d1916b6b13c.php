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

/* @bundles/CoreBundle/Helper/PhoneNumberHelper.php */
class __TwigTemplate_6662a010efefcac83d0a183cc2032f530efb469824880e49c95d6cbaf1c45284 extends Template
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

namespace Mautic\\CoreBundle\\Helper;

use libphonenumber\\PhoneNumberFormat;
use libphonenumber\\PhoneNumberUtil;

class PhoneNumberHelper
{
    /**
     * @param     \$number
     * @param int \$format
     *
     * @return string
     */
    public function format(\$number, \$format = PhoneNumberFormat::E164)
    {
        \$phoneUtil   = PhoneNumberUtil::getInstance();
        \$phoneNumber = \$phoneUtil->parse(\$number, 'US');

        return \$phoneUtil->format(\$phoneNumber, \$format);
    }

    /**
     * @param \$number
     *
     * @return array
     */
    public function getFormattedNumberList(\$number)
    {
        return array_unique(
            [
                \$number,
                \$this->format(\$number, PhoneNumberFormat::E164),
                \$this->formatNumericalNational(\$number),
                \$this->format(\$number, PhoneNumberFormat::NATIONAL),
                \$this->formatDelimitedNational(\$number),
                \$this->format(\$number, PhoneNumberFormat::INTERNATIONAL),
                \$this->formatNumericalInternational(\$number),
                \$this->formatDelimitedNational(\$number, '.'),
            ]
        );
    }

    /**
     * @param \$number
     *
     * @return string
     */
    public function formatNumericalInternational(\$number)
    {
        return preg_replace('/[^0-9]/', '', \$this->format(\$number, PhoneNumberFormat::INTERNATIONAL));
    }

    /**
     * @param \$number
     *
     * @return string
     */
    public function formatNumericalNational(\$number)
    {
        return preg_replace('/[^0-9]/', '', \$this->format(\$number, PhoneNumberFormat::NATIONAL));
    }

    /**
     * @param string \$number
     * @param string \$delimiter
     *
     * @return string
     */
    public function formatDelimitedNational(\$number, \$delimiter = '-')
    {
        \$national = \$this->format(\$number, PhoneNumberFormat::NATIONAL);
        \$national = str_replace([') ', '-'], \$delimiter, \$national);

        return preg_replace('/[^0-9'.\$delimiter.']/', '', \$national);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Helper/PhoneNumberHelper.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/PhoneNumberHelper.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Helper/PhoneNumberHelper.php");
    }
}
