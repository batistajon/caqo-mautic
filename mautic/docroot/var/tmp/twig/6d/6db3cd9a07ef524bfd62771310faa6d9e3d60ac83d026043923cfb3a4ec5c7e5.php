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

/* @bundles/CoreBundle/Form/Validator/Constraints/FileEncodingValidator.php */
class __TwigTemplate_c6bbe380daf779e5ffa04093a838666c83501f05541e695af048c145b0d6c078 extends Template
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

namespace Mautic\\CoreBundle\\Form\\Validator\\Constraints;

use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\ConstraintValidator;

/**
 * Throws an exception if the field alias is equal some segment filter keyword.
 * It would cause odd behavior with segment filters otherwise.
 */
class FileEncodingValidator extends ConstraintValidator
{
    /**
     * @param LeadField \$field
     */
    public function validate(\$field, Constraint \$constraint)
    {
        /*
            If the file uploaded exceeds the max size, it will not be considered,
            and the file path will be an empty string \"\". If that is the case
            no further checks are required. Just return.
        */
        if (!\$field || '' === \$field->getPathname() || null === \$field->getPathname()) {
            return;
        }

        /*
            If file is below the max size then only check for UTF-8 encoding.
        */
        if (!mb_check_encoding(file_get_contents(\$field->getPathname()), 'UTF-8')) {
            \$this->context->addViolation(\$constraint->encodingFormatMessage, ['%keyword%' => \$field->getClientOriginalName()]);
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Form/Validator/Constraints/FileEncodingValidator.php";
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
        return new Source("", "@bundles/CoreBundle/Form/Validator/Constraints/FileEncodingValidator.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Form/Validator/Constraints/FileEncodingValidator.php");
    }
}
