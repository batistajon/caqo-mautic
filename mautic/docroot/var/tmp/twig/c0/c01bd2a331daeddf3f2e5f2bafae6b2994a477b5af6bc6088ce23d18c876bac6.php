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

/* @bundles/ReportBundle/Tests/Unit/Model/ReportModelTest.php */
class __TwigTemplate_ab8f5b19a15fd0a790e66754690cfb77c4802698b83902e4b0ef0c8de15fc49f extends Template
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

namespace Mautic\\ReportBundle\\Tests\\Unit\\Model;

use Mautic\\CoreBundle\\Entity\\IpAddress;
use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\FormBundle\\Entity\\Form;
use Mautic\\FormBundle\\Entity\\Submission;
use Mautic\\ReportBundle\\Entity\\Report;
use Mautic\\ReportBundle\\Model\\ReportModel;
use PHPUnit\\Framework\\Assert;

final class ReportModelTest extends MauticMysqlTestCase
{
    public function testThatGetReportDataUsesCorrectDataRange(): void
    {
        \$report = new Report();
        \$report->setName('Test Report');
        \$report->setSource('form.submissions');
        \$report->setColumns(['fs.date_submitted']);
        \$report->setSettings([]);

        \$form = new Form();
        \$form->setName('Test Form');
        \$form->setAlias('create_a_c');

        \$ip = new IpAddress('127.0.0.1');

        \$this->em->persist(\$ip);
        \$this->em->persist(\$report);
        \$this->em->persist(\$form);
        \$this->em->flush();

        // I know I can use \\DateTimeImmutable, but getReportData expects \\DateTime
        \$now        = new \\DateTime('now', new \\DateTimeZone('UTC'));
        \$aDayAgo    = (clone \$now)->modify('-1 day');
        \$twoDaysAgo = (clone \$now)->modify('-2 days');

        \$this->em->persist(\$this->makeSubmission(\$form, \$ip, \$twoDaysAgo));
        \$this->em->persist(\$this->makeSubmission(\$form, \$ip, \$aDayAgo));
        \$this->em->persist(\$this->makeSubmission(\$form, \$ip, \$now));

        \$this->em->flush();

        \$reportModel = self::\$container->get('mautic.report.model.report');
        \\assert(\$reportModel instanceof ReportModel);

        \$aDayAgoBeginningOfTheDay = (clone \$aDayAgo)->setTime(0, 0, 0);

        \$reportData = \$reportModel->getReportData(\$report, null, [
            'dateFrom' => \$aDayAgoBeginningOfTheDay,
            'dateTo'   => clone \$aDayAgoBeginningOfTheDay,
        ]);

        Assert::assertSame(1, \$reportData['totalResults']);
        Assert::assertCount(1, \$reportData['data']);
    }

    private function makeSubmission(Form \$form, IpAddress \$ipAddress, \\DateTime \$dateSubmitted): Submission
    {
        \$submission = new Submission();
        \$submission->setForm(\$form);
        \$submission->setIpAddress(\$ipAddress);
        \$submission->setDateSubmitted(\$dateSubmitted);
        \$submission->setReferer('');

        return \$submission;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Tests/Unit/Model/ReportModelTest.php";
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
        return new Source("", "@bundles/ReportBundle/Tests/Unit/Model/ReportModelTest.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Tests/Unit/Model/ReportModelTest.php");
    }
}
