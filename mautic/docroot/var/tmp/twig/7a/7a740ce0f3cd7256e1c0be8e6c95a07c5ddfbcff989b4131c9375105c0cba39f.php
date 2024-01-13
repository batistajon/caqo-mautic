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

/* @bundles/EmailBundle/DataFixtures/ORM/fakeemaildata.csv */
class __TwigTemplate_d29725c039ec7287fdcda29f91829ae35863e5363268f7046b5e565051406df1 extends Template
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
        echo "\"name\",\"emailType\",\"subject\",\"template\",\"language\",\"content\",\"plainText\",\"publishUp\",\"publishDown\",\"readCount\",\"sentCount\",\"revision\",\"variantSettings\",\"variantStartDate\",\"variantSentCount\",\"variantReadCount\"
\"Kaleidoscope Conf List\",\"list\",\"Join us at the 2014  Kaleidoscope Conference!\",\"blank\",\"en\",\"a:2:{s:4:\\\"body\\\";s:113:\\\"<div>Dear {contactfield=firstname},</div><div>&nbsp;</div><div>Join us at the 2014 Kaleidoscope Conference!</div>\\\";s:6:\\\"footer\\\";s:71:\\\"<div>{webview_text}</div><div>&nbsp;</div><div>{unsubscribe_text}</div>\\\";}\",\"Join us at the 2014  Kaleidoscope Conference!\",NULL,NULL,0,0,1,\"a:0:{}\",NULL,0,0
\"Kaleidoscope Conf Campaign\",\"template\",\"Join us at the 2014  Kaleidoscope Conference!\",\"blank\",\"en\",\"a:2:{s:4:\\\"body\\\";s:113:\\\"<div>Dear {contactfield=firstname},</div><div>&nbsp;</div><div>Join us at the 2014 Kaleidoscope Conference!</div>\\\";s:6:\\\"footer\\\";s:71:\\\"<div>{webview_text}</div><div>&nbsp;</div><div>{unsubscribe_text}</div>\\\";}\",\"Join us at the 2014  Kaleidoscope Conference!\",NULL,NULL,0,0,1,\"a:0:{}\",NULL,0,0
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/DataFixtures/ORM/fakeemaildata.csv";
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
        return new Source("", "@bundles/EmailBundle/DataFixtures/ORM/fakeemaildata.csv", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/DataFixtures/ORM/fakeemaildata.csv");
    }
}
