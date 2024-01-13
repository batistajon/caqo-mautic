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

/* @bundles/PageBundle/Model/RedirectModel.php */
class __TwigTemplate_003cb397de8b66c33a0782c8be0c780b889f81d7205fb06ce3a9b638a98ab476 extends Template
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

namespace Mautic\\PageBundle\\Model;

use Mautic\\CoreBundle\\Helper\\UrlHelper;
use Mautic\\CoreBundle\\Model\\FormModel;
use Mautic\\PageBundle\\Entity\\Redirect;
use Mautic\\PageBundle\\Event\\RedirectGenerationEvent;
use Mautic\\PageBundle\\PageEvents;

/**
 * Class RedirectModel.
 */
class RedirectModel extends FormModel
{
    /**
     * @var UrlHelper
     */
    protected \$urlHelper;

    /**
     * RedirectModel constructor.
     */
    public function __construct(UrlHelper \$urlHelper)
    {
        \$this->urlHelper = \$urlHelper;
    }

    /**
     * {@inheritdoc}
     *
     * @return \\Mautic\\PageBundle\\Entity\\RedirectRepository
     */
    public function getRepository()
    {
        return \$this->em->getRepository('MauticPageBundle:Redirect');
    }

    /**
     * @param \$identifier
     *
     * @return Redirect|null
     */
    public function getRedirectById(\$identifier)
    {
        return \$this->getRepository()->findOneBy(['redirectId' => \$identifier]);
    }

    /**
     * Generate a Mautic redirect/passthrough URL.
     *
     * @param array \$clickthrough
     * @param bool  \$shortenUrl
     * @param array \$utmTags
     *
     * @return string
     */
    public function generateRedirectUrl(Redirect \$redirect, \$clickthrough = [], \$shortenUrl = false, \$utmTags = [])
    {
        if (\$this->dispatcher->hasListeners(PageEvents::ON_REDIRECT_GENERATE)) {
            \$event = new RedirectGenerationEvent(\$redirect, \$clickthrough);
            \$this->dispatcher->dispatch(PageEvents::ON_REDIRECT_GENERATE, \$event);

            \$clickthrough = \$event->getClickthrough();
        }

        \$url = \$this->buildUrl(
            'mautic_url_redirect',
            ['redirectId' => \$redirect->getRedirectId()],
            true,
            \$clickthrough,
            \$shortenUrl
        );

        if (!empty(\$utmTags)) {
            \$utmTags         = \$this->getUtmTagsForUrl(\$utmTags);
            \$appendUtmString = http_build_query(\$utmTags, '', '&');
            \$url             = UrlHelper::appendQueryToUrl(\$url, \$appendUtmString);
        }

        if (\$shortenUrl) {
            \$url = \$this->urlHelper->buildShortUrl(\$url);
        }

        return \$url;
    }

    /**
     * Generate UTMs params for url.
     *
     * @return array
     */
    public function getUtmTagsForUrl(\$rawUtmTags)
    {
        \$utmTags = [];
        foreach (\$rawUtmTags as \$utmTag => \$value) {
            \$utmTags[str_replace('utm', 'utm_', strtolower(\$utmTag))] = \$value;
        }

        return \$utmTags;
    }

    /**
     * Get a Redirect entity by URL.
     *
     * Use Mautic\\PageBundle\\Model\\TrackableModel::getTrackableByUrl() if associated with a channel
     *
     * @param  \$url
     *
     * @return Redirect|null
     */
    public function getRedirectByUrl(\$url)
    {
        // Ensure the URL saved to the database does not have encoded ampersands
        \$url = UrlHelper::decodeAmpersands(\$url);

        \$repo     = \$this->getRepository();
        \$redirect = \$repo->findOneBy(['url' => \$url]);

        if (null == \$redirect) {
            \$redirect = \$this->createRedirectEntity(\$url);
        }

        return \$redirect;
    }

    /**
     * Get Redirect entities by an array of URLs.
     *
     * @return array
     */
    public function getRedirectsByUrls(array \$urls)
    {
        \$redirects   = \$this->getRepository()->findByUrls(array_values(\$urls));
        \$newEntities = [];
        \$return      = [];
        \$byUrl       = [];

        foreach (\$redirects as \$redirect) {
            \$byUrl[\$redirect->getUrl()] = \$redirect;
        }

        foreach (\$urls as \$key => \$url) {
            if (empty(\$url)) {
                continue;
            }

            if (isset(\$byUrl[\$url])) {
                \$return[\$key] = \$byUrl[\$url];
            } else {
                \$redirect      = \$this->createRedirectEntity(\$url);
                \$newEntities[] = \$redirect;
                \$return[\$key]  = \$redirect;
            }
        }

        // Save new entities
        if (count(\$newEntities)) {
            \$this->getRepository()->saveEntities(\$newEntities);
        }

        unset(\$redirects, \$newEntities, \$byUrl);

        return \$return;
    }

    /**
     * Create a Redirect entity for URL.
     *
     * @param \$url
     *
     * @return Redirect
     */
    public function createRedirectEntity(\$url)
    {
        \$redirect = new Redirect();
        \$redirect->setUrl(\$url);
        \$redirect->setRedirectId();

        \$this->setTimestamps(\$redirect, true);

        return \$redirect;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PageBundle/Model/RedirectModel.php";
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
        return new Source("", "@bundles/PageBundle/Model/RedirectModel.php", "/var/www/html/mautic/docroot/app/bundles/PageBundle/Model/RedirectModel.php");
    }
}
