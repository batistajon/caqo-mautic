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

/* @bundles/CoreBundle/Translations/en_US/validators.ini */
class __TwigTemplate_d5ccf05734987ac5570355ba6c252823d405de15dec49a24f49930509b658a5c extends Template
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
        echo "mautic.core.ab_test.winner_criteria.not_blank=\"Select a winning criteria.\"
mautic.core.email.required=\"A valid email is required.\"
mautic.core.segment.circular_dependency_exists=\"Update cannot be completed as the current filters are conflicting with the filters of another segment. Make sure your segment filters are not creating impossible or contradictory conditions (e.g. Segment A must be a member of Segment B while Segment B must be a member of Segment A).\"
mautic.core.name.required=\"A name is required.\"
mautic.core.title.required=\"A title is required.\"
mautic.core.type.required=\"A type is required\"
mautic.core.value.required=\"A value is required.\"
mautic.core.subject.required=\"A subject is required.\"
mautic.core.variant_weights_invalid=\"The sum of weights between all variants cannot be more than 100%\"
mautic.form.lists.count=\"At least one list value is required.\"
mautic.form.lists.notblank=\"List values cannot be blank.\"
mautic.core.theme.missing.files=\"The theme you tried to install is missing the following required files and thus could not be installed: %files%\"
mautic.core.theme.default.cannot.overwrite=\"%name% is the default theme and therefore cannot be overwritten.\"
mautic.core.valid_url_required=\"A valid URL is required.\"
mautic.core.theme.upload.empty=\"The file was not selected. Select a ZIP file to upload.\"
mautic.core.invalid_file_type=\"Invalid file type ";
        // line 16
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo ". Use a file that matches one of the following mime types: ";
        echo twig_escape_filter($this->env, ($context["types"] ?? null), "html", null, true);
        echo ".\"
mautic.core.invalid_file_encoding=\"The file is not encoded correctly into UTF-8.\"
mautic.core.not.allowed.file.extension=\"%extension% is not an allowed file extension\"
mautic.core.regex.invalid=\"The regex syntax is invalid.\"
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Translations/en_US/validators.ini";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  54 => 16,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@bundles/CoreBundle/Translations/en_US/validators.ini", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Translations/en_US/validators.ini");
    }
}
