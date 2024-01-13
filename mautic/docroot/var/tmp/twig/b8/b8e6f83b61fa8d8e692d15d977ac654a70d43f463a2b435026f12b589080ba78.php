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

/* @bundles/IntegrationsBundle/easy-coding-standard.yml */
class __TwigTemplate_5f0cab39f694d09ebd2526128a53bf218e5b5c5434e5236683215c9cf4937ceb extends Template
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
        echo "imports:
  - { resource: 'vendor/symplify/easy-coding-standard/config/set/clean-code.yaml' }
  - { resource: 'vendor/symplify/easy-coding-standard/config/set/php71.yaml' }
  - { resource: 'vendor/symplify/easy-coding-standard/config/set/symfony.yaml' }

services:
  PhpCsFixer\\Fixer\\Operator\\BinaryOperatorSpacesFixer:
    align_equals: true
    align_double_arrow: true

parameters:
  exclude_checkers:
    - 'PhpCsFixer\\Fixer\\Operator\\NotOperatorWithSuccessorSpaceFixer'
    - 'Symplify\\CodingStandard\\Fixer\\Commenting\\RemoveUselessDocBlockFixer'
    - 'PhpCsFixer\\Fixer\\Import\\OrderedImportsFixer'
  exclude_files:
    - 'vendor/*'
  skip:
    PhpCsFixer\\Fixer\\ArraNotation\\TrailingCommaInMultilineArrayFixer:
      - 'Config/config.php' # Forces us to do not use full path class names
    SlevomatCodingStandard\\Sniffs\\TypeHints\\TypeHintDeclarationSniff.MissingParameterTypeHint:
      - 'Tests/*'
    SlevomatCodingStandard\\Sniffs\\TypeHints\\TypeHintDeclarationSniff.MissingPropertyTypeHint:
      - 'Tests/*'
    SlevomatCodingStandard\\Sniffs\\Variables\\UnusedVariableSniff.UnusedVariable:
      - 'Sync/Helper/MappingHelper.php'
      - 'Helper/FieldValidationHelper.php'
      - 'Form/Type/IntegrationSyncSettingsFieldMappingsType.php'
      - 'DependencyInjection/Compiler/SyncIntegrationsPass.php'
      - 'DependencyInjection/Compiler/IntegrationsPass.php'
      - 'DependencyInjection/Compiler/ConfigIntegrationPass.php'
      - 'DependencyInjection/Compiler/AuthenticationIntegrationPass.php'
    SlevomatCodingStandard\\Sniffs\\Classes\\UnusedPrivateElementsSniff.WriteOnlyProperty:
      - 'Helper/FieldValidationHelper.php'

";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/easy-coding-standard.yml";
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
        return new Source("", "@bundles/IntegrationsBundle/easy-coding-standard.yml", "/var/www/html/mautic/docroot/app/bundles/IntegrationsBundle/easy-coding-standard.yml");
    }
}
