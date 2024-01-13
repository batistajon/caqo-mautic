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

/* @bundles/CampaignBundle/Tests/Controller/CampaignUnpublishedWorkflowFunctionalTest.php */
class __TwigTemplate_e4270358de5dd4ee66a46e71cd17ef66b1900b30b5b925f358704c2e337654b8 extends Template
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

namespace Mautic\\CampaignBundle\\Tests\\Controller;

use DOMElement;
use Mautic\\CampaignBundle\\Tests\\Campaign\\AbstractCampaignTest;
use Symfony\\Component\\HttpFoundation\\Request;

final class CampaignUnpublishedWorkflowFunctionalTest extends AbstractCampaignTest
{
    public function testCreateCampaignPageShouldNotContainConformation(): void
    {
        // Check the message in the Campaign edit page
        \$crawler  = \$this->client->request('GET', '/s/campaigns/new');
        \$response = \$this->client->getResponse();
        \$this->assertTrue(\$response->isOk());

        \$attributes = [
            'data-toggle',
            'data-message',
            'data-confirm-text',
            'data-confirm-callback',
            'data-cancel-text',
            'data-cancel-callback',
        ];

        \$elements = \$crawler->filter('form input[name*=\"campaign[isPublished]\"]')->getIterator();

        /** @var DOMElement \$element */
        foreach (\$elements as \$element) {
            foreach (\$attributes as \$attribute) {
                \$this->assertFalse(\$element->hasAttribute(\$attribute), sprintf('The \"%s\" attribute is present.', \$attribute));
            }
        }
    }

    public function testCampaignEditPageCheckUnpublishWorkflowAttributesPresent(): void
    {
        \$campaign   = \$this->saveSomeCampaignLeadEventLogs();
        \$translator = \$this->getContainer()->get('translator');

        // Check the message in the Campaign edit page
        \$crawler  = \$this->client->request('GET', sprintf('/s/campaigns/edit/%d', \$campaign->getId()));
        \$response = \$this->client->getResponse();
        \$this->assertTrue(\$response->isOk());

        \$attributes = [
            'onchange'              => 'Mautic.showCampaignConfirmation(mQuery(this));',
            'data-toggle'           => 'confirmation',
            'data-message'          => \$translator->trans('mautic.campaign.form.confirmation.message'),
            'data-confirm-text'     => \$translator->trans('mautic.campaign.form.confirmation.confirm_text'),
            'data-confirm-callback' => 'dismissConfirmation',
            'data-cancel-text'      => \$translator->trans('mautic.campaign.form.confirmation.cancel_text'),
            'data-cancel-callback'  => 'setPublishedButtonToYes',
        ];

        \$elements = \$crawler->filter('form input[name*=\"campaign[isPublished]\"]')->getIterator();

        /** @var DOMElement \$element */
        foreach (\$elements as \$element) {
            foreach (\$attributes as \$key => \$val) {
                \$this->assertStringContainsString(\$val, \$element->getAttribute(\$key));
            }
        }
    }

    public function testCampaignListPageCheckUnpublishWorkflowAttributesPresent(): void
    {
        \$this->saveSomeCampaignLeadEventLogs();
        \$translator = \$this->getContainer()->get('translator');

        // Check the message in the Campaign listing page
        \$crawler  = \$this->client->request('GET', sprintf('/s/campaigns'));
        \$response = \$this->client->getResponse();
        \$this->assertTrue(\$response->isOk());

        \$attributes    = [
            'onclick'               => 'Mautic.confirmationCampaignPublishStatus(mQuery(this));',
            'data-toggle'           => 'confirmation',
            'data-confirm-callback' => 'confirmCallbackCampaignPublishStatus',
            'data-cancel-callback'  => 'dismissConfirmation',
            'data-message'          => \$translator->trans('mautic.campaign.form.confirmation.message'),
            'data-confirm-text'     => \$translator->trans('mautic.campaign.form.confirmation.confirm_text'),
            'data-cancel-text'      => \$translator->trans('mautic.campaign.form.confirmation.cancel_text'),
        ];

        \$toggleElement = \$crawler->filter('.toggle-publish-status');
        foreach (\$attributes as \$key => \$val) {
            \$this->assertStringContainsString(\$val, \$toggleElement->attr(\$key));
        }
    }

    public function testCampaignUnpublishToggle(): void
    {
        \$campaign   = \$this->saveSomeCampaignLeadEventLogs();
        \$translator = \$this->getContainer()->get('translator');

        \$this->client->request(Request::METHOD_POST, '/s/ajax', ['action' => 'togglePublishStatus', 'model' => 'campaign', 'id' => \$campaign->getId()]);
        \$response = \$this->client->getResponse();

        \$this->assertTrue(\$response->isOk());

        \$attributes    = [
            'onclick'               => 'Mautic.confirmationCampaignPublishStatus(mQuery(this));',
            'data-toggle'           => 'confirmation',
            'data-confirm-callback' => 'confirmCallbackCampaignPublishStatus',
            'data-cancel-callback'  => 'dismissConfirmation',
            'data-message'          => \$translator->trans('mautic.campaign.form.confirmation.message'),
            'data-confirm-text'     => \$translator->trans('mautic.campaign.form.confirmation.confirm_text'),
            'data-cancel-text'      => \$translator->trans('mautic.campaign.form.confirmation.cancel_text'),
        ];

        \$content = \$response->getContent();

        foreach (\$attributes as \$key => \$val) {
            \$this->assertStringContainsString(\$key, \$content);
            \$this->assertStringContainsString(\$val, \$content);
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
        return "@bundles/CampaignBundle/Tests/Controller/CampaignUnpublishedWorkflowFunctionalTest.php";
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
        return new Source("", "@bundles/CampaignBundle/Tests/Controller/CampaignUnpublishedWorkflowFunctionalTest.php", "/var/www/html/mautic/docroot/app/bundles/CampaignBundle/Tests/Controller/CampaignUnpublishedWorkflowFunctionalTest.php");
    }
}
