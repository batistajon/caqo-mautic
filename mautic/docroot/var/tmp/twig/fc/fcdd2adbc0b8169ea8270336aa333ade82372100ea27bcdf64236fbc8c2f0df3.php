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

/* @bundles/LeadBundle/Command/DeduplicateCommand.php */
class __TwigTemplate_a28a45f0a291af546b55a0e0833b82f315526a0acbd8b42ecd22c97970dd7368 extends Template
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

namespace Mautic\\LeadBundle\\Command;

use Mautic\\CoreBundle\\Command\\ModeratedCommand;
use Mautic\\LeadBundle\\Deduplicate\\ContactDeduper;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Translation\\TranslatorInterface;

class DeduplicateCommand extends ModeratedCommand
{
    /**
     * @var ContactDeduper
     */
    private \$contactDeduper;

    /**
     * @var TranslatorInterface
     */
    private \$translator;

    /**
     * DeduplicateCommand constructor.
     */
    public function __construct(ContactDeduper \$contactDeduper, TranslatorInterface \$translator)
    {
        parent::__construct();

        \$this->contactDeduper = \$contactDeduper;
        \$this->translator     = \$translator;
    }

    public function configure()
    {
        parent::configure();

        \$this->setName('mautic:contacts:deduplicate')
            ->setDescription('Merge contacts based on same unique identifiers')
            ->addOption(
                '--newer-into-older',
                null,
                InputOption::VALUE_NONE,
                'By default, this command will merge older contacts and activity into the newer. Use this flag to reverse that behavior.'
            )
            ->setHelp(
                <<<'EOT'
The <info>%command.name%</info> command will dedpulicate contacts based on unique identifier values. 

<info>php %command.full_name%</info>
EOT
            );
    }

    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$newerIntoOlder = (bool) \$input->getOption('newer-into-older');
        \$count          = \$this->contactDeduper->deduplicate(\$newerIntoOlder, \$output);

        \$output->writeln('');
        \$output->writeln(
            \$this->translator->trans(
                'mautic.lead.merge.count',
                [
                    '%count%' => \$count,
                ]
            )
        );
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Command/DeduplicateCommand.php";
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
        return new Source("", "@bundles/LeadBundle/Command/DeduplicateCommand.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Command/DeduplicateCommand.php");
    }
}
