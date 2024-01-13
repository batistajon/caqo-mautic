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

/* @bundles/FormBundle/Translations/en_US/validators.ini */
class __TwigTemplate_5930ae294f05af106c4126940da3b90e7d13cefdbadee796a89a6fc7923ee9ba extends Template
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
        echo "mautic.form.field.fields.count=\"The form requires at least one field.\"
mautic.form.field.generic.required=\"This is required.\"
mautic.form.field.generic.validationfailed=\"'%label%' is required.\"
mautic.form.field.label.notblank=\"Label is required.\"
mautic.form.form.fields.notempty=\"At least one field is required. Use the Fields tab to add one.\"
mautic.form.form.postactionproperty_message.notblank=\"Fill in a message to display.\"
mautic.form.form.postactionproperty_redirect.notblank=\"Fill in a valid URL.\"
mautic.form.schema.failed=\"There was an error creating the submission results table. Try a different name.\"
mautic.form.submission.captcha.invalid=\"The answer to %label% is incorrect. Please try again.\"
mautic.form.submission.email.invalid=\"The email is invalid.\"
mautic.form.submission.url.invalid=\"The URL is invalid.\"
mautic.form.submission.phone.invalid=\"Please use the following international phone number format [+][country code][subscriber number] for this field (eg: ‪+14028650000).\"
mautic.form.submission.email.donotsubmit.invalid=\"Cannot be sent with this email\"
mautic.form.submission.error.file.extension=\"Upload failed as the file extension, %fileExtension%, is not in the list of allowed extensions (%extensions%).\"
mautic.form.submission.error.file.size=\"Upload failed as the file is %fileSize% MB which exceeds the maximum allowed file size of %maxSize% MB.\"
mautic.form.submission.error.file.uploadFailed=\"Upload failed.\"
mautic.form.form.progressive_profiling_limit.error=\"This value should be empty or greater than 0\"
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Translations/en_US/validators.ini";
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
        return new Source("", "@bundles/FormBundle/Translations/en_US/validators.ini", "/var/www/html/mautic/docroot/app/bundles/FormBundle/Translations/en_US/validators.ini");
    }
}
