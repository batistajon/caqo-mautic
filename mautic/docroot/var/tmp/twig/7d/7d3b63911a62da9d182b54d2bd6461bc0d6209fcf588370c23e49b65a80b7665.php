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

/* @bundles/DashboardBundle/Event/WidgetDetailEvent.php */
class __TwigTemplate_8daf04c2b43596fb0f3c1f476b889989aac92776807b391cbaf29994c04afe86 extends Template
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

namespace Mautic\\DashboardBundle\\Event;

use Mautic\\CoreBundle\\Event\\CommonEvent;
use Mautic\\CoreBundle\\Helper\\CacheStorageHelper;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\DashboardBundle\\Entity\\Widget;
use Symfony\\Component\\Translation\\TranslatorInterface;

/**
 * Class WidgetDetailEvent.
 */
class WidgetDetailEvent extends CommonEvent
{
    protected \$widget;
    protected \$type;
    protected \$template;
    protected \$templateData = [];
    protected \$errorMessage;
    protected \$uniqueId;
    protected \$cacheDir;
    protected \$uniqueCacheDir;
    protected \$cacheTimeout;
    protected \$startTime = 0;
    protected \$loadTime  = 0;
    protected \$translator;

    /**
     * @var CorePermissions
     */
    protected \$security;

    public function __construct(TranslatorInterface \$translator)
    {
        \$this->translator = \$translator;
        \$this->startTime  = microtime(true);
    }

    /**
     * Set the cache dir.
     *
     * @param string \$cacheDir
     */
    public function setCacheDir(\$cacheDir, \$uniqueCacheDir = null)
    {
        \$this->cacheDir       = \$cacheDir;
        \$this->uniqueCacheDir = \$uniqueCacheDir;
    }

    /**
     * Set the cache timeout.
     *
     * @param string \$cacheTimeout
     */
    public function setCacheTimeout(\$cacheTimeout)
    {
        \$this->cacheTimeout = (int) \$cacheTimeout;
    }

    /**
     * Set the widget type.
     *
     * @param string \$type
     */
    public function setType(\$type)
    {
        \$this->type = \$type;
    }

    /**
     * Get the widget type.
     *
     * @return string \$type
     */
    public function getType()
    {
        return \$this->type;
    }

    /**
     * Set the widget entity.
     */
    public function setWidget(Widget \$widget)
    {
        \$this->widget = \$widget;

        \$params = \$widget->getParams();

        // Set required params if undefined
        if (!isset(\$params['timeUnit'])) {
            \$params['timeUnit'] = null;
        }

        if (!isset(\$params['amount'])) {
            \$params['amount'] = null;
        }

        if (!isset(\$params['dateFormat'])) {
            \$params['dateFormat'] = null;
        }

        if (!isset(\$params['filter'])) {
            \$params['filter'] = [];
        }

        \$widget->setParams(\$params);

        \$this->setType(\$widget->getType());
        \$this->setCacheTimeout(\$widget->getCacheTimeout());
    }

    /**
     * Returns the widget entity.
     *
     * @return Widget \$widget
     */
    public function getWidget()
    {
        return \$this->widget;
    }

    /**
     * Set the widget template.
     *
     * @param string \$template
     */
    public function setTemplate(\$template)
    {
        \$this->template = \$template;
        \$this->widget->setTemplate(\$template);
    }

    /**
     * Get the widget template.
     *
     * @return string \$template
     */
    public function getTemplate()
    {
        return \$this->template;
    }

    /**
     * Set the widget template data.
     */
    public function setTemplateData(array \$templateData, \$skipCache = false)
    {
        \$this->templateData = \$templateData;
        \$this->widget->setTemplateData(\$templateData);
        \$this->widget->setLoadTime(abs(microtime(true) - \$this->startTime));

        // Store the template data to the cache
        if (!\$skipCache && \$this->cacheDir && \$this->widget->getCacheTimeout() > 0) {
            \$cache = new CacheStorageHelper(CacheStorageHelper::ADAPTOR_FILESYSTEM, \$this->uniqueCacheDir, null, \$this->cacheDir);
            // must pass a DateTime object or a int of seconds to expire as 3rd attribute to set().
            \$expireTime = \$this->widget->getCacheTimeout() * 60;
            \$cache->set(\$this->getUniqueWidgetId(), \$templateData, (int) \$expireTime);
        }
    }

    /**
     * Get the widget template data.
     *
     * @return string \$templateData
     */
    public function getTemplateData()
    {
        return \$this->templateData;
    }

    /**
     * Set en error message.
     *
     * @param array \$errorMessage
     */
    public function setErrorMessage(\$errorMessage)
    {
        \$this->errorMessage = \$errorMessage;
        \$this->widget->setErrorMessage(\$errorMessage);
    }

    /**
     * Get an error message.
     *
     * @return string \$errorMessage
     */
    public function getErrorMessage()
    {
        return \$this->errorMessage;
    }

    /**
     * Build a unique ID from type and widget params.
     *
     * @return string
     */
    public function getUniqueWidgetId()
    {
        if (\$this->uniqueId) {
            return \$this->uniqueId;
        }

        \$params = \$this->getWidget()->getParams();
        // Unset dateFrom and dateTo since they constantly change
        unset(\$params['dateFrom'], \$params['dateTo']);

        \$uniqueSettings = [
            'params' => \$params,
            'width'  => \$this->getWidget()->getWidth(),
            'height' => \$this->getWidget()->getHeight(),
            'locale' => \$this->translator->getLocale(),
        ];

        return \$this->uniqueId = \$this->getType().'_'.substr(md5(json_encode(\$uniqueSettings)), 0, 16);
    }

    /**
     * Checks the cache for the widget data.
     * If cache exists, it sets the TemplateData.
     *
     * @return string
     */
    public function isCached()
    {
        if (!\$this->cacheDir) {
            return false;
        }

        \$cache = new CacheStorageHelper(CacheStorageHelper::ADAPTOR_FILESYSTEM, \$this->uniqueCacheDir, null, \$this->cacheDir);
        \$data  = \$cache->get(\$this->getUniqueWidgetId(), \$this->cacheTimeout);

        if (\$data) {
            \$this->widget->setCached(true);
            \$this->setTemplateData(\$data, true);

            return true;
        }

        return false;
    }

    /**
     * Get the Translator object.
     *
     * @return TranslatorInterface
     */
    public function getTranslator()
    {
        return \$this->translator;
    }

    /**
     * Set security object to check the perimissions.
     */
    public function setSecurity(CorePermissions \$security)
    {
        \$this->security = \$security;
    }

    /**
     * Check if the user has at least one permission of defined array of permissions.
     *
     * @return bool
     */
    public function hasPermissions(array \$permissions)
    {
        if (!\$this->security) {
            return true;
        }
        \$perm = \$this->security->isGranted(\$permissions, 'RETURN_ARRAY');

        return in_array(true, \$perm);
    }

    /**
     * Check if the user has defined permission to see the widgets.
     *
     * @param string \$permission
     *
     * @return bool
     */
    public function hasPermission(\$permission)
    {
        if (!\$this->security) {
            return true;
        }

        return \$this->security->isGranted(\$permission);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/DashboardBundle/Event/WidgetDetailEvent.php";
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
        return new Source("", "@bundles/DashboardBundle/Event/WidgetDetailEvent.php", "/var/www/html/mautic/docroot/app/bundles/DashboardBundle/Event/WidgetDetailEvent.php");
    }
}