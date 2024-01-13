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

/* @bundles/FormBundle/Event/Service/FieldValueTransformer.php */
class __TwigTemplate_993e94403ca784f91f920210338b1d975c3a7ef5a3470ebbcd21fd31ea593cfc extends Template
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

namespace Mautic\\FormBundle\\Event\\Service;

use Mautic\\FormBundle\\Entity\\Field;
use Mautic\\FormBundle\\Event\\SubmissionEvent;
use Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface;
use Symfony\\Component\\Routing\\RouterInterface;

class FieldValueTransformer
{
    /**
     * @var RouterInterface
     */
    private \$router;

    /**
     * @var array
     */
    private \$contactFieldsToUpdate = [];

    /**
     * @var array
     */
    private \$tokensToUpdate = [];

    /**
     * @var bool
     */
    private \$isTransformed = false;

    /**
     * FieldValueTransformer constructor.
     */
    public function __construct(RouterInterface \$router)
    {
        \$this->router = \$router;
    }

    public function transformValuesAfterSubmit(SubmissionEvent \$submissionEvent)
    {
        if (\$this->isIsTransformed()) {
            return;
        }
        \$fields              = \$submissionEvent->getForm()->getFields();
        \$contactFieldMatches = \$submissionEvent->getContactFieldMatches();
        \$tokens              = \$submissionEvent->getTokens();

        /** @var Field \$field */
        foreach (\$fields as \$field) {
            switch (\$field->getType()) {
                case 'file':
                    \$newValue = \$this->router->generate(
                        'mautic_form_file_download',
                        [
                            'submissionId' => \$submissionEvent->getSubmission()->getId(),
                            'field'        => \$field->getAlias(),
                        ],
                        UrlGeneratorInterface::ABSOLUTE_URL
                    );

                    \$tokenAlias = \"{formfield={\$field->getAlias()}}\";

                    if (!empty(\$tokens[\$tokenAlias])) {
                        \$this->tokensToUpdate[\$tokenAlias] = \$tokens[\$tokenAlias] = \$newValue;
                    }

                    \$contactFieldAlias = \$field->getLeadField();
                    if (!empty(\$contactFieldMatches[\$contactFieldAlias])) {
                        \$this->contactFieldsToUpdate[\$contactFieldAlias] = \$contactFieldMatches[\$contactFieldAlias] = \$newValue;
                    }

                    break;
            }
        }

        \$submissionEvent->setTokens(\$tokens);
        \$submissionEvent->setContactFieldMatches(\$contactFieldMatches);
        \$this->isTransformed = true;
    }

    /**
     * @return array
     */
    public function getContactFieldsToUpdate()
    {
        return \$this->contactFieldsToUpdate;
    }

    /**
     * @return array
     */
    public function getTokensToUpdate()
    {
        return \$this->tokensToUpdate;
    }

    /**
     * @return bool
     */
    public function isIsTransformed()
    {
        return \$this->isTransformed;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Event/Service/FieldValueTransformer.php";
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
        return new Source("", "@bundles/FormBundle/Event/Service/FieldValueTransformer.php", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Event/Service/FieldValueTransformer.php");
    }
}
