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

/* @bundles/LeadBundle/Views/Lead/email.html.php */
class __TwigTemplate_3b96d12a69b2dea3e396eb13ff5b8aae44963e3c594686b83ef8fe96a4cca5d9 extends Template
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

if (\$dnc && \\Mautic\\LeadBundle\\Entity\\DoNotContact::BOUNCED === \$dnc->getReason()) {
    echo '<div class=\"alert alert-warning\">'.\$view['translator']->trans('mautic.lead.do.not.contact_bounced').': '.\$dnc->getComments().'</div>';
} else {
    echo \$view['form']->start(\$form);

    echo \$view['form']->row(\$form['fromname']);
    echo \$view['form']->row(\$form['from']);
    echo \$view['form']->row(\$form['subject']);
    echo \$view['form']->row(\$form['body']);
    echo \$view['form']->row(\$form['templates']);

    echo \$view['form']->end(\$form);
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Views/Lead/email.html.php";
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
        return new Source("", "@bundles/LeadBundle/Views/Lead/email.html.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Views/Lead/email.html.php");
    }
}
