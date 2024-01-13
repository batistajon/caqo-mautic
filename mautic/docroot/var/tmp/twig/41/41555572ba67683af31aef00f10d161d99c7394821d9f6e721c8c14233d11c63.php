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

/* @bundles/ChannelBundle/Model/ChannelActionModel.php */
class __TwigTemplate_0b62a3c7b6c0ca7ee1aef5012f9fad3b00642bdd9833d0910366f3749d0d4d8d extends Template
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

namespace Mautic\\ChannelBundle\\Model;

use Mautic\\LeadBundle\\Entity\\DoNotContact as DNC;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Model\\DoNotContact;
use Mautic\\LeadBundle\\Model\\LeadModel;
use Symfony\\Component\\Translation\\TranslatorInterface;

class ChannelActionModel
{
    /**
     * @var LeadModel
     */
    private \$contactModel;

    /**
     * @var DoNotContact
     */
    private \$doNotContact;

    /**
     * @var TranslatorInterface
     */
    private \$translator;

    public function __construct(
        LeadModel \$contactModel,
        DoNotContact \$doNotContact,
        TranslatorInterface \$translator
    ) {
        \$this->contactModel = \$contactModel;
        \$this->doNotContact = \$doNotContact;
        \$this->translator   = \$translator;
    }

    /**
     * Update channels and frequency rules.
     */
    public function update(array \$contactIds, array \$subscribedChannels)
    {
        \$contacts = \$this->contactModel->getLeadsByIds(\$contactIds);

        foreach (\$contacts as \$contact) {
            if (!\$this->contactModel->canEditContact(\$contact)) {
                continue;
            }

            \$this->addChannels(\$contact, \$subscribedChannels);
            \$this->removeChannels(\$contact, \$subscribedChannels);
        }
    }

    /**
     * Add contact's channels.
     * Only resubscribe if the contact did not opt out themselves.
     */
    private function addChannels(Lead \$contact, array \$subscribedChannels)
    {
        \$contactChannels = \$this->contactModel->getContactChannels(\$contact);

        foreach (\$subscribedChannels as \$subscribedChannel) {
            if (!array_key_exists(\$subscribedChannel, \$contactChannels)) {
                \$contactable = \$this->doNotContact->isContactable(\$contact, \$subscribedChannel);
                if (DNC::UNSUBSCRIBED !== \$contactable) {
                    \$this->doNotContact->removeDncForContact(\$contact->getId(), \$subscribedChannel);
                }
            }
        }
    }

    /**
     * Remove contact's channels.
     */
    private function removeChannels(Lead \$contact, array \$subscribedChannels)
    {
        \$allChannels = \$this->contactModel->getPreferenceChannels();
        \$dncChannels = array_diff(\$allChannels, \$subscribedChannels);

        if (empty(\$dncChannels)) {
            return;
        }

        foreach (\$dncChannels as \$channel) {
            \$this->doNotContact->addDncForContact(
                \$contact->getId(),
                \$channel,
                DNC::MANUAL,
                \$this->translator->trans('mautic.lead.event.donotcontact_manual')
            );
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
        return "@bundles/ChannelBundle/Model/ChannelActionModel.php";
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
        return new Source("", "@bundles/ChannelBundle/Model/ChannelActionModel.php", "/var/www/html/mautic/docroot/app/bundles/ChannelBundle/Model/ChannelActionModel.php");
    }
}
