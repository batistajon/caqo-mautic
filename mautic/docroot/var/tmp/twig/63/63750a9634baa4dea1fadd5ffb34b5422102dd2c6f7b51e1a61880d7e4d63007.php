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

/* @bundles/LeadBundle/Field/Command/CreateCustomFieldCommand.php */
class __TwigTemplate_4a9ae389a00a027163da2729412963ed1f21c92edcaa8e0b5fd046c0f6b20937 extends Template
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

declare(strict_types=1);

namespace Mautic\\LeadBundle\\Field\\Command;

use Doctrine\\DBAL\\DBALException;
use Doctrine\\DBAL\\Exception\\DriverException;
use Doctrine\\DBAL\\Schema\\SchemaException;
use Mautic\\LeadBundle\\Entity\\LeadFieldRepository;
use Mautic\\LeadBundle\\Field\\BackgroundService;
use Mautic\\LeadBundle\\Field\\Exception\\AbortColumnCreateException;
use Mautic\\LeadBundle\\Field\\Exception\\ColumnAlreadyCreatedException;
use Mautic\\LeadBundle\\Field\\Exception\\CustomFieldLimitException;
use Mautic\\LeadBundle\\Field\\Exception\\LeadFieldWasNotFoundException;
use Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerAwareCommand;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Translation\\TranslatorInterface;

class CreateCustomFieldCommand extends ContainerAwareCommand
{
    /**
     * @var BackgroundService
     */
    private \$backgroundService;

    /**
     * @var TranslatorInterface
     */
    private \$translator;

    /**
     * @var LeadFieldRepository
     */
    private \$leadFieldRepository;

    public function __construct(
        BackgroundService \$backgroundService,
        TranslatorInterface \$translator,
        LeadFieldRepository \$leadFieldRepository
    ) {
        parent::__construct();
        \$this->backgroundService   = \$backgroundService;
        \$this->translator          = \$translator;
        \$this->leadFieldRepository = \$leadFieldRepository;
    }

    public function configure(): void
    {
        parent::configure();

        \$this->setName('mautic:custom-field:create-column')
            ->setDescription('Create custom field column in the background')
            ->addOption('--id', '-i', InputOption::VALUE_REQUIRED, 'LeadField ID.')
            ->addOption('--user', '-u', InputOption::VALUE_OPTIONAL, 'User ID - User which receives a notification.')
            ->setHelp(
                <<<'EOT'
The <info>%command.name%</info> command will create a column in a lead_fields table if the proces should run in background.

<info>php %command.full_name%</info>
EOT
            );
    }

    protected function execute(InputInterface \$input, OutputInterface \$output): int
    {
        \$leadFieldId = (int) \$input->getOption('id');
        \$userId      = (int) \$input->getOption('user');

        if (!\$leadFieldId) {
            \$leadField = \$this->leadFieldRepository->getFieldThatIsMissingColumn();

            if (!\$leadField) {
                \$output->writeln('<info>'.\$this->translator->trans('mautic.lead.field.all_fields_have_columns').'</info>');

                return 0;
            }

            \$leadFieldId = \$leadField->getId();
            \$userId      = \$leadField->getCreatedBy();
        }

        try {
            \$this->backgroundService->addColumn(\$leadFieldId, \$userId);
        } catch (LeadFieldWasNotFoundException \$e) {
            \$output->writeln('<error>'.\$this->translator->trans('mautic.lead.field.notfound').'</error>');

            return 1;
        } catch (ColumnAlreadyCreatedException \$e) {
            \$output->writeln('<error>'.\$this->translator->trans('mautic.lead.field.column_already_created').'</error>');

            return 0;
        } catch (AbortColumnCreateException \$e) {
            \$output->writeln('<error>'.\$this->translator->trans('mautic.lead.field.column_creation_aborted').'</error>');

            return 0;
        } catch (CustomFieldLimitException \$e) {
            \$output->writeln('<error>'.\$this->translator->trans(\$e->getMessage()).'</error>');

            return 1;
        } catch (DriverException \$e) {
            \$output->writeln('<error>'.\$this->translator->trans(\$e->getMessage()).'</error>');

            return 1;
        } catch (SchemaException \$e) {
            \$output->writeln('<error>'.\$this->translator->trans(\$e->getMessage()).'</error>');

            return 1;
        } catch (DBALException \$e) {
            \$output->writeln('<error>'.\$this->translator->trans(\$e->getMessage()).'</error>');

            return 1;
        } catch (\\Mautic\\CoreBundle\\Exception\\SchemaException \$e) {
            \$output->writeln('<error>'.\$this->translator->trans(\$e->getMessage()).'</error>');

            return 1;
        }

        \$output->writeln('');
        \$output->writeln('<info>'.\$this->translator->trans('mautic.lead.field.column_was_created', ['%id%' => \$leadFieldId]).'</info>');

        return 0;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Field/Command/CreateCustomFieldCommand.php";
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
        return new Source("", "@bundles/LeadBundle/Field/Command/CreateCustomFieldCommand.php", "/var/www/html/mautic/docroot/app/bundles/LeadBundle/Field/Command/CreateCustomFieldCommand.php");
    }
}
