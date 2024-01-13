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

/* @bundles/LeadBundle/Deduplicate/ContactDeduper.php */
class __TwigTemplate_7539d2af3f4f8aaa40c9a3bb6e093fdd3e9f2ee5daa8c3628c9309747f061d9d extends Template
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

namespace Mautic\\LeadBundle\\Deduplicate;

use Mautic\\LeadBundle\\Deduplicate\\Exception\\SameContactException;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Entity\\LeadRepository;
use Mautic\\LeadBundle\\Model\\FieldModel;
use Symfony\\Component\\Console\\Helper\\ProgressBar;
use Symfony\\Component\\Console\\Output\\OutputInterface;

class ContactDeduper
{
    use DeduperTrait;

    /**
     * @var ContactMerger
     */
    private \$contactMerger;

    /**
     * @var LeadRepository
     */
    private \$leadRepository;

    /**
     * @var bool
     */
    private \$mergeNewerIntoOlder = false;

    /**
     * DedupModel constructor.
     */
    public function __construct(FieldModel \$fieldModel, ContactMerger \$contactMerger, LeadRepository \$leadRepository)
    {
        \$this->fieldModel     = \$fieldModel;
        \$this->contactMerger  = \$contactMerger;
        \$this->leadRepository = \$leadRepository;
    }

    /**
     * @param bool \$mergeNewerIntoOlder
     *
     * @return int
     */
    public function deduplicate(\$mergeNewerIntoOlder = false, OutputInterface \$output = null)
    {
        \$this->mergeNewerIntoOlder = \$mergeNewerIntoOlder;
        \$lastContactId             = 0;
        \$totalContacts             = \$this->leadRepository->getIdentifiedContactCount();
        \$progress                  = null;

        if (\$output) {
            \$progress = new ProgressBar(\$output, \$totalContacts);
        }

        \$dupCount = 0;
        while (\$contact = \$this->leadRepository->getNextIdentifiedContact(\$lastContactId)) {
            \$lastContactId = \$contact->getId();
            \$fields        = \$contact->getProfileFields();
            \$duplicates    = \$this->checkForDuplicateContacts(\$fields);

            if (\$progress) {
                \$progress->advance();
            }

            // Were duplicates found?
            if (count(\$duplicates) > 1) {
                \$loser = reset(\$duplicates);
                while (\$winner = next(\$duplicates)) {
                    try {
                        \$this->contactMerger->merge(\$winner, \$loser);

                        ++\$dupCount;

                        if (\$progress) {
                            // Advance the progress bar for the deleted contacts that are no longer in the total count
                            \$progress->advance();
                        }
                    } catch (SameContactException \$exception) {
                    }

                    \$loser = \$winner;
                }
            }

            // Clear all entities in memory for RAM control
            \$this->leadRepository->clear();
            gc_collect_cycles();
        }

        return \$dupCount;
    }

    /**
     * @return Lead[]
     */
    public function checkForDuplicateContacts(array \$queryFields)
    {
        \$duplicates = [];
        \$uniqueData = \$this->getUniqueData(\$queryFields);
        if (!empty(\$uniqueData)) {
            \$duplicates = \$this->leadRepository->getLeadsByUniqueFields(\$uniqueData);

            // By default, duplicates are ordered by newest first
            if (!\$this->mergeNewerIntoOlder) {
                // Reverse the array so that oldest are on \"top\" in order to merge oldest into the next until they all have been merged into the
                // the newest record
                \$duplicates = array_reverse(\$duplicates);
            }
        }

        return \$duplicates;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Deduplicate/ContactDeduper.php";
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
        return new Source("", "@bundles/LeadBundle/Deduplicate/ContactDeduper.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Deduplicate/ContactDeduper.php");
    }
}
