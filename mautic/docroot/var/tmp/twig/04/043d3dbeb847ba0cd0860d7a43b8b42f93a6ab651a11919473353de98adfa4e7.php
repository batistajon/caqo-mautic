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

/* @bundles/ConfigBundle/Tests/Mapper/Helper/RestrictionHelperTest.php */
class __TwigTemplate_71d03222046bd3dc2e4d8f1266bd459a65b97c49cf7787c9829395f6179fc82f extends Template
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

namespace Mautic\\ConfigBundle\\Tests\\Mapper\\Helper;

use Mautic\\ConfigBundle\\Mapper\\Helper\\RestrictionHelper;

class RestrictionHelperTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var array
     */
    private \$restrictedFields = [
        'db_host',
        'db_user',
        'monitored_email' => [
            'EmailBundle_bounces',
            'EmailBundle_unsubscribes' => [
                'address',
            ],
        ],
    ];

    /**
     * @testdox Ensure a mixed numeric/string keyed array is formatted to all string based keys
     *
     * @covers  \\Mautic\\ConfigBundle\\Mapper\\Helper\\RestrictionHelper::prepareRestrictions()
     */
    public function testRestrictedConfigArrayIsFormattedCorrectly()
    {
        \$expected = [
            'db_host'         => 'db_host',
            'db_user'         => 'db_user',
            'monitored_email' => [
                'EmailBundle_bounces'      => 'EmailBundle_bounces',
                'EmailBundle_unsubscribes' => [
                    'address' => 'address',
                ],
            ],
        ];

        \$this->assertEquals(\$expected, RestrictionHelper::prepareRestrictions(\$this->restrictedFields));
    }

    /**
     * @testdox Ensure a restrictions are recursively applied
     * @covers  \\Mautic\\ConfigBundle\\Mapper\\Helper\\RestrictionHelper::prepareRestrictions()
     * @covers  \\Mautic\\ConfigBundle\\Mapper\\Helper\\RestrictionHelper::applyRestrictions()
     */
    public function testApplyingRestrictionsToConfigArray()
    {
        \$config = [
            'db_host'         => 'dbhost',
            'db_user'         => 'dbuser',
            'api_enabled'     => 1,
            'monitored_email' => [
                'general' => [
                    'address'    => 'test@test.com',
                    'host'       => 'test.com',
                    'port'       => '143',
                    'encryption' => '/tls/novalidate-cert',
                    'user'       => 'test@test.com',
                    'password'   => 'password',
                ],
                'EmailBundle_bounces' => [
                    'address'           => '',
                    'host'              => '',
                    'port'              => '993',
                    'encryption'        => '/ssl',
                    'user'              => '',
                    'password'          => '',
                    'override_settings' => 0,
                    'folder'            => 'INBOX',
                ],
                'EmailBundle_unsubscribes' => [
                    'address'           => null,
                    'host'              => null,
                    'port'              => '993',
                    'encryption'        => '/ssl',
                    'user'              => null,
                    'password'          => null,
                    'override_settings' => 0,
                    'folder'            => 'INBOX',
                ],
            ],
        ];

        \$expected = [
            'api_enabled'     => 1,
            'monitored_email' => [
                'general' => [
                    'address'    => 'test@test.com',
                    'host'       => 'test.com',
                    'port'       => '143',
                    'encryption' => '/tls/novalidate-cert',
                    'user'       => 'test@test.com',
                    'password'   => 'password',
                ],
                'EmailBundle_unsubscribes' => [
                    'host'              => null,
                    'port'              => '993',
                    'encryption'        => '/ssl',
                    'user'              => null,
                    'password'          => null,
                    'override_settings' => 0,
                    'folder'            => 'INBOX',
                ],
            ],
        ];

        \$restrictedFields = RestrictionHelper::prepareRestrictions(\$this->restrictedFields);
        \$this->assertEquals(\$expected, RestrictionHelper::applyRestrictions(\$config, \$restrictedFields));
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ConfigBundle/Tests/Mapper/Helper/RestrictionHelperTest.php";
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
        return new Source("", "@bundles/ConfigBundle/Tests/Mapper/Helper/RestrictionHelperTest.php", "/var/www/html/mautic/docroot/app/bundles/ConfigBundle/Tests/Mapper/Helper/RestrictionHelperTest.php");
    }
}
