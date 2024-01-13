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

/* @bundles/MarketplaceBundle/Tests/ApiResponse/detail.json */
class __TwigTemplate_fb5051e3290b5741b0c991e6eb320c05332f187e074e0c8f520e74bf413301ec extends Template
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
        echo "{
    \"package\": {
        \"name\": \"koco\\/mautic-recaptcha-bundle\",
        \"description\": \"This plugin brings reCAPTCHA integration to mautic.\",
        \"time\": \"2018-01-10T09:30:31+00:00\",
        \"maintainers\": [
            {
                \"name\": \"koco\",
                \"avatar_url\": \"https:\\/\\/www.gravatar.com\\/avatar\\/73ad638ac9373ee1580bf6fb59e7538f?d=identicon\"
            }
        ],
        \"versions\": {
            \"dev-master\": {
                \"name\": \"koco\\/mautic-recaptcha-bundle\",
                \"description\": \"This plugin brings reCAPTCHA integration to mautic.\",
                \"keywords\": [],
                \"homepage\": \"\",
                \"version\": \"dev-master\",
                \"version_normalized\": \"dev-master\",
                \"license\": [
                    \"GPL-3.0-only\"
                ],
                \"authors\": [
                    {
                        \"name\": \"Konstantin Scheumann\",
                        \"email\": \"info@konstantin.codes\"
                    }
                ],
                \"source\": {
                    \"type\": \"git\",
                    \"url\": \"https:\\/\\/github.com\\/KonstantinCodes\\/mautic-recaptcha.git\",
                    \"reference\": \"4855321ffa22e8c8435cd4a5ec45afec9857df84\"
                },
                \"dist\": {
                    \"type\": \"zip\",
                    \"url\": \"https:\\/\\/api.github.com\\/repos\\/KonstantinCodes\\/mautic-recaptcha\\/zipball\\/4855321ffa22e8c8435cd4a5ec45afec9857df84\",
                    \"reference\": \"4855321ffa22e8c8435cd4a5ec45afec9857df84\",
                    \"shasum\": \"\"
                },
                \"type\": \"mautic-plugin\",
                \"support\": {
                    \"source\": \"https:\\/\\/github.com\\/KonstantinCodes\\/mautic-recaptcha\\/tree\\/3.0.1\",
                    \"issues\": \"https:\\/\\/github.com\\/KonstantinCodes\\/mautic-recaptcha\\/issues\"
                },
                \"time\": \"2020-07-22T10:07:15+00:00\",
                \"default-branch\": true,
                \"require\": {
                    \"mautic\\/composer-plugin\": \"^1.0\"
                }
            },
            \"dev-feature\\/circleci-store_test_results\": {
                \"name\": \"koco\\/mautic-recaptcha-bundle\",
                \"description\": \"This plugin brings reCAPTCHA integration to mautic.\",
                \"keywords\": [],
                \"homepage\": \"\",
                \"version\": \"dev-feature\\/circleci-store_test_results\",
                \"version_normalized\": \"dev-feature\\/circleci-store_test_results\",
                \"license\": [
                    \"GPL-3.0-only\"
                ],
                \"authors\": [
                    {
                        \"name\": \"Konstantin Scheumann\",
                        \"email\": \"info@konstantin.codes\"
                    }
                ],
                \"source\": {
                    \"type\": \"git\",
                    \"url\": \"https:\\/\\/github.com\\/KonstantinCodes\\/mautic-recaptcha.git\",
                    \"reference\": \"0cdbec1b2e7427dff64d57e80789f79128105dea\"
                },
                \"dist\": {
                    \"type\": \"zip\",
                    \"url\": \"https:\\/\\/api.github.com\\/repos\\/KonstantinCodes\\/mautic-recaptcha\\/zipball\\/0cdbec1b2e7427dff64d57e80789f79128105dea\",
                    \"reference\": \"0cdbec1b2e7427dff64d57e80789f79128105dea\",
                    \"shasum\": \"\"
                },
                \"type\": \"mautic-plugin\",
                \"support\": {
                    \"source\": \"https:\\/\\/github.com\\/KonstantinCodes\\/mautic-recaptcha\\/tree\\/feature\\/circleci-store_test_results\",
                    \"issues\": \"https:\\/\\/github.com\\/KonstantinCodes\\/mautic-recaptcha\\/issues\"
                },
                \"time\": \"2018-10-28T18:31:03+00:00\",
                \"require\": {
                    \"mautic\\/composer-plugin\": \"^1.0\"
                }
            },
            \"dev-feature\\/refactor\": {
                \"name\": \"koco\\/mautic-recaptcha-bundle\",
                \"description\": \"This plugin brings reCAPTCHA integration to mautic.\",
                \"keywords\": [],
                \"homepage\": \"\",
                \"version\": \"dev-feature\\/refactor\",
                \"version_normalized\": \"dev-feature\\/refactor\",
                \"license\": [
                    \"GPL-3.0-only\"
                ],
                \"authors\": [
                    {
                        \"name\": \"Konstantin Scheumann\",
                        \"email\": \"info@konstantin.codes\"
                    }
                ],
                \"source\": {
                    \"type\": \"git\",
                    \"url\": \"https:\\/\\/github.com\\/KonstantinCodes\\/mautic-recaptcha.git\",
                    \"reference\": \"702b25df5958f04cfdf1ccbfe34733082d379872\"
                },
                \"dist\": {
                    \"type\": \"zip\",
                    \"url\": \"https:\\/\\/api.github.com\\/repos\\/KonstantinCodes\\/mautic-recaptcha\\/zipball\\/702b25df5958f04cfdf1ccbfe34733082d379872\",
                    \"reference\": \"702b25df5958f04cfdf1ccbfe34733082d379872\",
                    \"shasum\": \"\"
                },
                \"type\": \"mautic-plugin\",
                \"support\": {
                    \"source\": \"https:\\/\\/github.com\\/KonstantinCodes\\/mautic-recaptcha\\/tree\\/feature\\/refactor\",
                    \"issues\": \"https:\\/\\/github.com\\/KonstantinCodes\\/mautic-recaptcha\\/issues\"
                },
                \"time\": \"2018-09-14T13:32:44+00:00\",
                \"require\": {
                    \"mautic\\/composer-plugin\": \"^1.0\"
                }
            },
            \"dev-feature\\/only-delete-new-leads\": {
                \"name\": \"koco\\/mautic-recaptcha-bundle\",
                \"description\": \"This plugin brings reCAPTCHA integration to mautic.\",
                \"keywords\": [],
                \"homepage\": \"\",
                \"version\": \"dev-feature\\/only-delete-new-leads\",
                \"version_normalized\": \"dev-feature\\/only-delete-new-leads\",
                \"license\": [
                    \"GPL-3.0-only\"
                ],
                \"authors\": [
                    {
                        \"name\": \"Konstantin Scheumann\",
                        \"email\": \"info@konstantin.codes\"
                    }
                ],
                \"source\": {
                    \"type\": \"git\",
                    \"url\": \"https:\\/\\/github.com\\/KonstantinCodes\\/mautic-recaptcha.git\",
                    \"reference\": \"a37a878ba7b54226d1c162d7ca78258b408151fe\"
                },
                \"dist\": {
                    \"type\": \"zip\",
                    \"url\": \"https:\\/\\/api.github.com\\/repos\\/KonstantinCodes\\/mautic-recaptcha\\/zipball\\/a37a878ba7b54226d1c162d7ca78258b408151fe\",
                    \"reference\": \"a37a878ba7b54226d1c162d7ca78258b408151fe\",
                    \"shasum\": \"\"
                },
                \"type\": \"mautic-plugin\",
                \"support\": {
                    \"source\": \"https:\\/\\/github.com\\/KonstantinCodes\\/mautic-recaptcha\\/tree\\/feature\\/only-delete-new-leads\",
                    \"issues\": \"https:\\/\\/github.com\\/KonstantinCodes\\/mautic-recaptcha\\/issues\"
                },
                \"time\": \"2018-05-30T09:28:07+00:00\",
                \"require\": {
                    \"mautic\\/composer-plugin\": \"^1.0\"
                }
            },
            \"dev-feature\\/delete-contact-on-invalid-form\": {
                \"name\": \"koco\\/mautic-recaptcha-bundle\",
                \"description\": \"This plugin brings reCAPTCHA integration to mautic.\",
                \"keywords\": [],
                \"homepage\": \"\",
                \"version\": \"dev-feature\\/delete-contact-on-invalid-form\",
                \"version_normalized\": \"dev-feature\\/delete-contact-on-invalid-form\",
                \"license\": [
                    \"GPL-3.0-only\"
                ],
                \"authors\": [
                    {
                        \"name\": \"Konstantin Scheumann\",
                        \"email\": \"info@konstantin.codes\"
                    }
                ],
                \"source\": {
                    \"type\": \"git\",
                    \"url\": \"https:\\/\\/github.com\\/KonstantinCodes\\/mautic-recaptcha.git\",
                    \"reference\": \"1d97afa904cc69da2a40066a7ffe67d2cea0aa0f\"
                },
                \"dist\": {
                    \"type\": \"zip\",
                    \"url\": \"https:\\/\\/api.github.com\\/repos\\/KonstantinCodes\\/mautic-recaptcha\\/zipball\\/1d97afa904cc69da2a40066a7ffe67d2cea0aa0f\",
                    \"reference\": \"1d97afa904cc69da2a40066a7ffe67d2cea0aa0f\",
                    \"shasum\": \"\"
                },
                \"type\": \"mautic-plugin\",
                \"support\": {
                    \"source\": \"https:\\/\\/github.com\\/KonstantinCodes\\/mautic-recaptcha\\/tree\\/feature\\/delete-contact-on-invalid-form\",
                    \"issues\": \"https:\\/\\/github.com\\/KonstantinCodes\\/mautic-recaptcha\\/issues\"
                },
                \"time\": \"2018-05-25T14:09:40+00:00\",
                \"require\": {
                    \"mautic\\/composer-plugin\": \"^1.0\"
                }
            },
            \"3.0.1\": {
                \"name\": \"koco\\/mautic-recaptcha-bundle\",
                \"description\": \"This plugin brings reCAPTCHA integration to mautic.\",
                \"keywords\": [],
                \"homepage\": \"\",
                \"version\": \"3.0.1\",
                \"version_normalized\": \"3.0.1.0\",
                \"license\": [
                    \"GPL-3.0-only\"
                ],
                \"authors\": [
                    {
                        \"name\": \"Konstantin Scheumann\",
                        \"email\": \"info@konstantin.codes\"
                    }
                ],
                \"source\": {
                    \"type\": \"git\",
                    \"url\": \"https:\\/\\/github.com\\/KonstantinCodes\\/mautic-recaptcha.git\",
                    \"reference\": \"4855321ffa22e8c8435cd4a5ec45afec9857df84\"
                },
                \"dist\": {
                    \"type\": \"zip\",
                    \"url\": \"https:\\/\\/api.github.com\\/repos\\/KonstantinCodes\\/mautic-recaptcha\\/zipball\\/4855321ffa22e8c8435cd4a5ec45afec9857df84\",
                    \"reference\": \"4855321ffa22e8c8435cd4a5ec45afec9857df84\",
                    \"shasum\": \"\"
                },
                \"type\": \"mautic-plugin\",
                \"support\": {
                    \"source\": \"https:\\/\\/github.com\\/KonstantinCodes\\/mautic-recaptcha\\/tree\\/3.0.1\",
                    \"issues\": \"https:\\/\\/github.com\\/KonstantinCodes\\/mautic-recaptcha\\/issues\"
                },
                \"time\": \"2020-07-22T10:07:15+00:00\",
                \"require\": {
                    \"mautic\\/composer-plugin\": \"^1.0\"
                }
            },
            \"3.0.0\": {
                \"name\": \"koco\\/mautic-recaptcha-bundle\",
                \"description\": \"This plugin brings reCAPTCHA integration to mautic.\",
                \"keywords\": [],
                \"homepage\": \"\",
                \"version\": \"3.0.0\",
                \"version_normalized\": \"3.0.0.0\",
                \"license\": [
                    \"GPL-3.0-only\"
                ],
                \"authors\": [
                    {
                        \"name\": \"Konstantin Scheumann\",
                        \"email\": \"info@konstantin.codes\"
                    }
                ],
                \"source\": {
                    \"type\": \"git\",
                    \"url\": \"https:\\/\\/github.com\\/KonstantinCodes\\/mautic-recaptcha.git\",
                    \"reference\": \"971e5d29a6dfae8831b1ad478ebd80b2740e5f1d\"
                },
                \"dist\": {
                    \"type\": \"zip\",
                    \"url\": \"https:\\/\\/api.github.com\\/repos\\/KonstantinCodes\\/mautic-recaptcha\\/zipball\\/971e5d29a6dfae8831b1ad478ebd80b2740e5f1d\",
                    \"reference\": \"971e5d29a6dfae8831b1ad478ebd80b2740e5f1d\",
                    \"shasum\": \"\"
                },
                \"type\": \"mautic-plugin\",
                \"support\": {
                    \"source\": \"https:\\/\\/github.com\\/KonstantinCodes\\/mautic-recaptcha\\/tree\\/master\",
                    \"issues\": \"https:\\/\\/github.com\\/KonstantinCodes\\/mautic-recaptcha\\/issues\"
                },
                \"time\": \"2020-04-20T14:45:33+00:00\",
                \"require\": {
                    \"mautic\\/composer-plugin\": \"^1.0\"
                }
            },
            \"1.1.3\": {
                \"name\": \"koco\\/mautic-recaptcha-bundle\",
                \"description\": \"This plugin brings reCAPTCHA integration to mautic.\",
                \"keywords\": [],
                \"homepage\": \"\",
                \"version\": \"1.1.3\",
                \"version_normalized\": \"1.1.3.0\",
                \"license\": [
                    \"GPL-3.0-only\"
                ],
                \"authors\": [
                    {
                        \"name\": \"Konstantin Scheumann\",
                        \"email\": \"info@konstantin.codes\"
                    }
                ],
                \"source\": {
                    \"type\": \"git\",
                    \"url\": \"https:\\/\\/github.com\\/KonstantinCodes\\/mautic-recaptcha.git\",
                    \"reference\": \"6736156e10ad53ddf64c300b618fe83b2790c944\"
                },
                \"dist\": {
                    \"type\": \"zip\",
                    \"url\": \"https:\\/\\/api.github.com\\/repos\\/KonstantinCodes\\/mautic-recaptcha\\/zipball\\/6736156e10ad53ddf64c300b618fe83b2790c944\",
                    \"reference\": \"6736156e10ad53ddf64c300b618fe83b2790c944\",
                    \"shasum\": \"\"
                },
                \"type\": \"mautic-plugin\",
                \"support\": {
                    \"source\": \"https:\\/\\/github.com\\/KonstantinCodes\\/mautic-recaptcha\\/tree\\/master\",
                    \"issues\": \"https:\\/\\/github.com\\/KonstantinCodes\\/mautic-recaptcha\\/issues\"
                },
                \"time\": \"2018-10-02T15:45:41+00:00\",
                \"require\": {
                    \"mautic\\/composer-plugin\": \"^1.0\"
                }
            },
            \"1.1.2\": {
                \"name\": \"koco\\/mautic-recaptcha-bundle\",
                \"description\": \"This plugin brings reCAPTCHA integration to mautic.\",
                \"keywords\": [],
                \"homepage\": \"\",
                \"version\": \"1.1.2\",
                \"version_normalized\": \"1.1.2.0\",
                \"license\": [
                    \"GPL-3.0-only\"
                ],
                \"authors\": [
                    {
                        \"name\": \"Konstantin Scheumann\",
                        \"email\": \"info@konstantin.codes\"
                    }
                ],
                \"source\": {
                    \"type\": \"git\",
                    \"url\": \"https:\\/\\/github.com\\/KonstantinCodes\\/mautic-recaptcha.git\",
                    \"reference\": \"ac6855b6aebb22f6a80aff2589088449c6a1feca\"
                },
                \"dist\": {
                    \"type\": \"zip\",
                    \"url\": \"https:\\/\\/api.github.com\\/repos\\/KonstantinCodes\\/mautic-recaptcha\\/zipball\\/ac6855b6aebb22f6a80aff2589088449c6a1feca\",
                    \"reference\": \"ac6855b6aebb22f6a80aff2589088449c6a1feca\",
                    \"shasum\": \"\"
                },
                \"type\": \"mautic-plugin\",
                \"support\": {
                    \"source\": \"https:\\/\\/github.com\\/KonstantinCodes\\/mautic-recaptcha\\/tree\\/master\",
                    \"issues\": \"https:\\/\\/github.com\\/KonstantinCodes\\/mautic-recaptcha\\/issues\"
                },
                \"time\": \"2018-09-14T13:35:51+00:00\",
                \"require\": {
                    \"mautic\\/composer-plugin\": \"^1.0\"
                }
            },
            \"1.1.1\": {
                \"name\": \"koco\\/mautic-recaptcha-bundle\",
                \"description\": \"This plugin brings reCAPTCHA integration to mautic.\",
                \"keywords\": [],
                \"homepage\": \"\",
                \"version\": \"1.1.1\",
                \"version_normalized\": \"1.1.1.0\",
                \"license\": [
                    \"GPL-3.0-only\"
                ],
                \"authors\": [
                    {
                        \"name\": \"Konstantin Scheumann\",
                        \"email\": \"info@konstantin.codes\"
                    }
                ],
                \"source\": {
                    \"type\": \"git\",
                    \"url\": \"https:\\/\\/github.com\\/KonstantinCodes\\/mautic-recaptcha.git\",
                    \"reference\": \"5d25d058fc246ff1ca9e196846443d113523af4a\"
                },
                \"dist\": {
                    \"type\": \"zip\",
                    \"url\": \"https:\\/\\/api.github.com\\/repos\\/KonstantinCodes\\/mautic-recaptcha\\/zipball\\/5d25d058fc246ff1ca9e196846443d113523af4a\",
                    \"reference\": \"5d25d058fc246ff1ca9e196846443d113523af4a\",
                    \"shasum\": \"\"
                },
                \"type\": \"mautic-plugin\",
                \"support\": {
                    \"source\": \"https:\\/\\/github.com\\/KonstantinCodes\\/mautic-recaptcha\\/tree\\/master\",
                    \"issues\": \"https:\\/\\/github.com\\/KonstantinCodes\\/mautic-recaptcha\\/issues\"
                },
                \"time\": \"2018-09-14T12:03:24+00:00\",
                \"require\": {
                    \"mautic\\/composer-plugin\": \"^1.0\"
                }
            },
            \"1.1.0\": {
                \"name\": \"koco\\/mautic-recaptcha-bundle\",
                \"description\": \"This plugin brings reCAPTCHA integration to mautic.\",
                \"keywords\": [],
                \"homepage\": \"\",
                \"version\": \"1.1.0\",
                \"version_normalized\": \"1.1.0.0\",
                \"license\": [
                    \"GPL-3.0-only\"
                ],
                \"authors\": [
                    {
                        \"name\": \"Konstantin Scheumann\",
                        \"email\": \"info@konstantin.codes\"
                    }
                ],
                \"source\": {
                    \"type\": \"git\",
                    \"url\": \"https:\\/\\/github.com\\/KonstantinCodes\\/mautic-recaptcha.git\",
                    \"reference\": \"2866cd4868ea5f44823b9fc341b68f0c7ae7d8c1\"
                },
                \"dist\": {
                    \"type\": \"zip\",
                    \"url\": \"https:\\/\\/api.github.com\\/repos\\/KonstantinCodes\\/mautic-recaptcha\\/zipball\\/2866cd4868ea5f44823b9fc341b68f0c7ae7d8c1\",
                    \"reference\": \"2866cd4868ea5f44823b9fc341b68f0c7ae7d8c1\",
                    \"shasum\": \"\"
                },
                \"type\": \"mautic-plugin\",
                \"support\": {
                    \"source\": \"https:\\/\\/github.com\\/KonstantinCodes\\/mautic-recaptcha\\/tree\\/master\",
                    \"issues\": \"https:\\/\\/github.com\\/KonstantinCodes\\/mautic-recaptcha\\/issues\"
                },
                \"time\": \"2018-05-30T09:37:18+00:00\",
                \"require\": {
                    \"mautic\\/composer-plugin\": \"^1.0\"
                }
            },
            \"1.0.1\": {
                \"name\": \"koco\\/mautic-recaptcha-bundle\",
                \"description\": \"This plugin brings reCAPTCHA integration to mautic.\",
                \"keywords\": [],
                \"homepage\": \"\",
                \"version\": \"1.0.1\",
                \"version_normalized\": \"1.0.1.0\",
                \"license\": [
                    \"GPL-3.0-only\"
                ],
                \"authors\": [
                    {
                        \"name\": \"Konstantin Scheumann\",
                        \"email\": \"info@konstantin.codes\"
                    }
                ],
                \"source\": {
                    \"type\": \"git\",
                    \"url\": \"https:\\/\\/github.com\\/KonstantinCodes\\/mautic-recaptcha.git\",
                    \"reference\": \"a29f1be60bf8c49a0b226712b700da29ab57a757\"
                },
                \"dist\": {
                    \"type\": \"zip\",
                    \"url\": \"https:\\/\\/api.github.com\\/repos\\/KonstantinCodes\\/mautic-recaptcha\\/zipball\\/a29f1be60bf8c49a0b226712b700da29ab57a757\",
                    \"reference\": \"a29f1be60bf8c49a0b226712b700da29ab57a757\",
                    \"shasum\": \"\"
                },
                \"type\": \"mautic-plugin\",
                \"support\": {
                    \"source\": \"https:\\/\\/github.com\\/KonstantinCodes\\/mautic-recaptcha\\/tree\\/master\",
                    \"issues\": \"https:\\/\\/github.com\\/KonstantinCodes\\/mautic-recaptcha\\/issues\"
                },
                \"time\": \"2018-02-19T13:28:13+00:00\",
                \"require\": {
                    \"mautic\\/composer-plugin\": \"^1.0\"
                }
            },
            \"1.0.0\": {
                \"name\": \"koco\\/mautic-recaptcha-bundle\",
                \"description\": \"This plugin brings reCAPTCHA integration to mautic.\",
                \"keywords\": [],
                \"homepage\": \"\",
                \"version\": \"1.0.0\",
                \"version_normalized\": \"1.0.0.0\",
                \"license\": [
                    \"GNU General Public License v3.0\"
                ],
                \"authors\": [
                    {
                        \"name\": \"Konstantin Scheumann\",
                        \"email\": \"info@konstantin.codes\"
                    }
                ],
                \"source\": {
                    \"type\": \"git\",
                    \"url\": \"https:\\/\\/github.com\\/KonstantinCodes\\/mautic-recaptcha.git\",
                    \"reference\": \"950854e08227187423e2ee99b028c9d92b4c1ba0\"
                },
                \"dist\": {
                    \"type\": \"zip\",
                    \"url\": \"https:\\/\\/api.github.com\\/repos\\/KonstantinCodes\\/mautic-recaptcha\\/zipball\\/950854e08227187423e2ee99b028c9d92b4c1ba0\",
                    \"reference\": \"950854e08227187423e2ee99b028c9d92b4c1ba0\",
                    \"shasum\": \"\"
                },
                \"type\": \"mautic-plugin\",
                \"support\": {
                    \"source\": \"https:\\/\\/github.com\\/KonstantinCodes\\/mautic-recaptcha\\/tree\\/master\",
                    \"issues\": \"https:\\/\\/github.com\\/KonstantinCodes\\/mautic-recaptcha\\/issues\"
                },
                \"time\": \"2018-01-10T10:53:07+00:00\",
                \"require\": {
                    \"mautic\\/composer-plugin\": \"^1.0\"
                }
            }
        },
        \"type\": \"mautic-plugin\",
        \"repository\": \"https:\\/\\/github.com\\/KonstantinCodes\\/mautic-recaptcha\",
        \"github_stars\": 23,
        \"github_watchers\": 9,
        \"github_forks\": 17,
        \"github_open_issues\": 9,
        \"language\": \"PHP\",
        \"dependents\": 0,
        \"suggesters\": 0,
        \"downloads\": {
            \"total\": 2662,
            \"monthly\": 430,
            \"daily\": 6
        },
        \"favers\": 24
    }
}";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/MarketplaceBundle/Tests/ApiResponse/detail.json";
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
        return new Source("", "@bundles/MarketplaceBundle/Tests/ApiResponse/detail.json", "/var/www/html/mautic/docroot/app/bundles/MarketplaceBundle/Tests/ApiResponse/detail.json");
    }
}
