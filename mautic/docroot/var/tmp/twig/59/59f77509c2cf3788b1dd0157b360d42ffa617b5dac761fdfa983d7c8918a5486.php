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

/* @bundles/ReportBundle/Tests/Fixtures.php */
class __TwigTemplate_843333556567ad070e42c9114f4fc3d903ec56a3edbbfcbad190950707c6a7c4 extends Template
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

namespace Mautic\\ReportBundle\\Tests;

class Fixtures
{
    /**
     * @return array
     */
    public static function getValidReportResult()
    {
        return [
            'totalResults' => '11',
            'data'         => self::getValidReportData(),
            'dataColumns'  => [
                'city'            => 'l.city',
                'company'         => 'l.company',
                'country'         => 'l.country',
                'date_identified' => 'l.date_identified',
                'email'           => 'l.email',
            ],
            'columns' => [
                'l.city' => [
                    'label' => 'City',
                    'type'  => self::getStringType(),
                    'alias' => 'city',
                ],
                'l.company' => [
                    'label' => 'Company',
                    'type'  => self::getStringType(),
                    'alias' => 'company',
                ],
                'l.country' => [
                    'label' => 'Country',
                    'type'  => self::getStringType(),
                    'alias' => 'country',
                ],
                'l.date_identified' => [
                    'label'          => 'Date identified',
                    'type'           => self::getDateType(),
                    'groupByFormula' => 'DATE(l.date_identified)',
                    'alias'          => 'date_identified',
                ],
                'l.email' => [
                    'label' => 'Email',
                    'type'  => self::getEmailType(),
                    'alias' => 'email',
                ],
            ],
            'limit' => 10000,
        ];
    }

    /**
     * @return array
     */
    public static function getValidReportData()
    {
        return [
            [
                'city'            => 'City',
                'company'         => '',
                'country'         => '',
                'date_identified' => '',
                'email'           => '',
            ],
            [
                'city'            => '',
                'company'         => 'Company',
                'country'         => '',
                'date_identified' => '',
                'email'           => '',
            ],
            [
                'city'            => '',
                'company'         => '',
                'country'         => 'Country',
                'date_identified' => '',
                'email'           => '',
            ],
            [
                'city'            => '',
                'company'         => 'ConnectWise',
                'country'         => '',
                'date_identified' => '2017-10-10',
                'email'           => 'connectwise@example.com',
            ],
            [
                'city'            => '',
                'company'         => '',
                'country'         => '',
                'date_identified' => '2017-10-10',
                'email'           => 'mytest@example.com',
            ],
            [
                'city'            => '',
                'company'         => '',
                'country'         => '',
                'date_identified' => '2017-10-10',
                'email'           => 'john@example.com',
            ],
            [
                'city'            => '',
                'company'         => '',
                'country'         => '',
                'date_identified' => '2017-10-10',
                'email'           => 'bogus@example.com',
            ],
            [
                'city'            => '',
                'company'         => '',
                'country'         => '',
                'date_identified' => '2017-10-10',
                'email'           => 'date-test@example.com',
            ],
            [
                'city'            => '',
                'company'         => 'Bodega Club',
                'country'         => '',
                'date_identified' => '2017-10-10',
                'email'           => 'club@example.com',
            ],
            [
                'city'            => '',
                'company'         => '',
                'country'         => '',
                'date_identified' => '2017-10-11',
                'email'           => 'test@example.com',
            ],
            [
                'city'            => '',
                'company'         => '',
                'country'         => '',
                'date_identified' => '2017-10-12',
                'email'           => 'test@example.com',
            ],
        ];
    }

    public static function getValidReportHeaders()
    {
        return [
            'City',
            'Company',
            'Country',
            'Date identified',
            'Email',
        ];
    }

    /**
     * @return int
     */
    public static function getValidReportTotalResult()
    {
        return 11;
    }

    /**
     * @return string
     */
    public static function getStringType()
    {
        return 'string';
    }

    public static function getIntegerType(): string
    {
        return 'int';
    }

    public static function getBooleanType(): string
    {
        return 'bool';
    }

    /**
     * @return string
     */
    public static function getDateType()
    {
        return 'datetime';
    }

    /**
     * @return string
     */
    public static function getEmailType()
    {
        return 'email';
    }

    public static function getReportBuilderEventData()
    {
        return [
            'all' => [
                'tables' => [
                    'assets' => [
                        'display_name' => 'mautic.asset.assets',
                        'columns'      => [
                            'a.alias' => [
                                'label' => 'Alias',
                                'type'  => 'string',
                                'alias' => 'alias',
                            ],
                            'a.description' => [
                                'label' => 'Description',
                                'type'  => 'string',
                                'alias' => 'a_description',
                            ],
                        ],
                        'group' => 'assets',
                    ],
                ],
                'graphs' => [
                    'all'                 => [],
                    'mautic.asset.assets' => [
                        'tables' => [],
                    ],
                ],
            ],
        ];
    }

    public static function getGoodColumnList()
    {
        \$list          = new \\stdClass();
        \$list->choices = [
            'a.alias'       => 'Alias',
            'a.description' => 'Description',
        ];
        \$list->choiceHtml  = '<option value=\"a.alias\">Alias</option>\\n<option value=\"a.description\">Description</option>\\n';
        \$list->definitions = [
            'a.alias' => [
                'label' => 'Alias',
                'type'  => 'string',
                'alias' => 'alias',
            ],
            'a.description' => [
                'label' => 'Description',
                'type'  => 'string',
                'alias' => 'a_description',
            ],
        ];

        return \$list;
    }

    /**
     * @return mixed[]
     */
    public static function getValidReportResultWithAggregatedColumns(): array
    {
        return [
            'totalResults' => '2',
            'data'         => self::getValidReportDataAggregatedColumns(),
            'dataColumns'  => [
                'e_id'           => 'e.id',
                'e_name'         => 'e.name',
                'SUM es.is_read' => 'es.is_read',
                'COUNT l.id'     => 'l.id',
            ],
            'columns' => [
                'e.id' => [
                    'label' => 'ID',
                    'type'  => self::getIntegerType(),
                    'link'  => 'mautic_email_action',
                    'alias' => 'e_id',
                ],
                'e.name' => [
                    'label' => 'Name',
                    'type'  => self::getStringType(),
                    'alias' => 'e_name',
                ],
                'es.is_read' => [
                    'label' => 'Read',
                    'type'  => self::getBooleanType(),
                    'alias' => 'is_read',
                ],
                'l.id' => [
                    'label' => 'Contact ID',
                    'type'  => self::getIntegerType(),
                    'link'  => 'mautic_email_action',
                    'alias' => 'contactId',
                ],
            ],
            'aggregatorColumns' => [
                'SUM es.is_read' => 'es.is_read',
                'COUNT l.id'     => 'l.id',
            ],
            'limit' => 0,
        ];
    }

    /**
     * @return mixed[]
     */
    public static function getValidReportDataAggregatedColumns(): array
    {
        return [
            [
                'e_id'           => '1',
                'e_name'         => 'Email 1',
                'SUM es.is_read' => '50',
                'COUNT l.id'     => '100',
            ],
            [
                'e_id'           => '2',
                'e_name'         => 'Email 2',
                'SUM es.is_read' => '10',
                'COUNT l.id'     => '60',
            ],
        ];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Tests/Fixtures.php";
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
        return new Source("", "@bundles/ReportBundle/Tests/Fixtures.php", "/var/www/html/mautic/docroot/app/bundles/ReportBundle/Tests/Fixtures.php");
    }
}
