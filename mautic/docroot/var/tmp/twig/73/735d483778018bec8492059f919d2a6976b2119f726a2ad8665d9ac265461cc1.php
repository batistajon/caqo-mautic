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

/* @bundles/EmailBundle/DataFixtures/ORM/LoadEmailData.php */
class __TwigTemplate_a25df63f84da6bb07e167bda653f25ffa99fcdfc5f58f932096c3935aadd8e63 extends Template
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

namespace Mautic\\EmailBundle\\DataFixtures\\ORM;

use Doctrine\\Common\\DataFixtures\\AbstractFixture;
use Doctrine\\Common\\DataFixtures\\OrderedFixtureInterface;
use Doctrine\\Persistence\\ObjectManager;
use Mautic\\CoreBundle\\Helper\\CsvHelper;
use Mautic\\CoreBundle\\Helper\\Serializer;
use Mautic\\EmailBundle\\Entity\\Email;
use Mautic\\EmailBundle\\Model\\EmailModel;

class LoadEmailData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * @var EmailModel
     */
    private \$emailModel;

    public function __construct(EmailModel \$emailModel)
    {
        \$this->emailModel = \$emailModel;
    }

    public function load(ObjectManager \$manager)
    {
        \$emails = CsvHelper::csv_to_array(__DIR__.'/fakeemaildata.csv');

        foreach (\$emails as \$count => \$rows) {
            \$email = new Email();
            \$email->setDateAdded(new \\DateTime());
            \$key = \$count + 1;
            foreach (\$rows as \$col => \$val) {
                if ('NULL' != \$val) {
                    \$setter = 'set'.ucfirst(\$col);
                    if (in_array(\$col, ['content', 'variantSettings'])) {
                        \$val = Serializer::decode(stripslashes(\$val));
                    }
                    \$email->\$setter(\$val);
                }
            }
            \$email->addList(\$this->getReference('lead-list'));

            \$this->emailModel->getRepository()->saveEntity(\$email);
            \$this->setReference('email-'.\$key, \$email);
        }
    }

    /**
     * @return int
     */
    public function getOrder()
    {
        return 9;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/DataFixtures/ORM/LoadEmailData.php";
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
        return new Source("", "@bundles/EmailBundle/DataFixtures/ORM/LoadEmailData.php", "/var/www/html/mautic/docroot/app/bundles/EmailBundle/DataFixtures/ORM/LoadEmailData.php");
    }
}
