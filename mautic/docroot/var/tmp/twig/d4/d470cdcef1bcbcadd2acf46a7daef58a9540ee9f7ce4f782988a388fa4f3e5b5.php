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

/* @bundles/CoreBundle/Controller/FormErrorMessagesTrait.php */
class __TwigTemplate_8a7db5394f5b74c0a7515ec466c81687ae4cc1fe00448e9a1c6af9826c6b0043 extends Template
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

namespace Mautic\\CoreBundle\\Controller;

use Symfony\\Component\\Form\\Form;

trait FormErrorMessagesTrait
{
    /**
     * @return string
     */
    public function getFormErrorMessage(array \$formErrors)
    {
        \$msg = '';

        if (\$formErrors) {
            foreach (\$formErrors as \$key => \$error) {
                if (!\$error) {
                    continue;
                }

                if (\$msg) {
                    \$msg .= ', ';
                }

                if (is_string(\$key)) {
                    \$msg .= \$key.': ';
                }

                if (is_array(\$error)) {
                    \$msg .= \$this->getFormErrorMessage(\$error);
                } else {
                    \$msg .= \$error;
                }
            }
        }

        return \$msg;
    }

    /**
     * @return array
     */
    public function getFormErrorMessages(Form \$form)
    {
        \$errors = [];

        foreach (\$form->getErrors(true) as \$error) {
            if (isset(\$errors[\$error->getOrigin()->getName()])) {
                \$errors[\$error->getOrigin()->getName()] = [\$error->getMessage()];
            } else {
                \$errors[\$error->getOrigin()->getName()][] = \$error->getMessage();
            }
        }

        return \$errors;
    }

    public function getFormErrorCodes(Form \$form): array
    {
        \$codes = [];

        foreach (\$form->getErrors(true) as \$error) {
            \$code         = \$error->getCause()->getCode();
            \$codes[\$code] = \$code;
        }

        return \$codes;
    }

    public function getFormErrorForBuilder(Form \$form)
    {
        if (!\$form->isSubmitted()) {
            return null;
        }

        if (\$form->isValid()) {
            return null;
        }

        \$validationErrors = \$this->getFormErrorMessages(\$form);

        if (!\$validationErrors) {
            return null;
        }

        \$validationError = \$this->getFormErrorMessage(\$validationErrors);

        return \$this->get('translator')->trans('mautic.core.form.builder.error', ['%error%' => \$validationError]);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Controller/FormErrorMessagesTrait.php";
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
        return new Source("", "@bundles/CoreBundle/Controller/FormErrorMessagesTrait.php", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Controller/FormErrorMessagesTrait.php");
    }
}
