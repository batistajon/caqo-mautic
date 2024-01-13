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

/* @bundles/CalendarBundle/Assets/js/calendar.js */
class __TwigTemplate_eb6c197e470dfa9c48797c9438a8f0f816f8d11537f7494385c6eed9b081bbff extends Template
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
        echo "//CalendarBundle
Mautic.calendarOnLoad = function (container) {
    Mautic.loadCalendarEvents(container);
};

Mautic.calendarModalOnLoad = function (container, response) {
    mQuery('#calendar').fullCalendar( 'refetchEvents' );
    mQuery(container + \" a[data-toggle='ajax']\").off('click.ajax');
    mQuery(container + \" a[data-toggle='ajax']\").on('click.ajax', function (event) {
        event.preventDefault();
        mQuery('.modal').modal('hide');
        return Mautic.ajaxifyLink(this, event);
    });
};

Mautic.initializeCalendarModals = function (container) {
    mQuery(container + \" *[data-toggle='ajaxmodal']\").off('click.ajaxmodal');
    mQuery(container + \" *[data-toggle='ajaxmodal']\").on('click.ajaxmodal', function (event) {
        event.preventDefault();
        Mautic.ajaxifyModal(this, event);
    });
}

Mautic.loadCalendarEvents = function (container) {
    mQuery('#calendar').fullCalendar({
        events: mauticAjaxUrl + \"?action=calendar:generateData\",
        lang: mauticLocale,
        eventLimit: true,
        eventLimitText: \"more\",
        eventRender: function(event, element) {
            element = mQuery(element);
            if (event.iconClass) {
                element.find('.fc-title').before(mQuery('<i />').addClass(event.iconClass));
            }
            if (event.attr) {
                element.attr(event.attr);
            }
            if (event.description) {
                var checkDay = new Date(event.start._d);
                if (checkDay.getDay() == 0) {
                    element.tooltip({'title': event.description, placement: 'right'});
                } else {
                    element.tooltip({'title': event.description, placement: 'left'});
                }
            }
        },
        loading: function(bool) {
            // if calendar events are loaded
            if (!bool) {
                //initialize ajax'd modals
                Mautic.initializeCalendarModals(container);
            }
        },
        eventDrop: function(event, delta, revertFunc) {
            mQuery.ajax({
                url: mauticAjaxUrl + \"?action=calendar:updateEvent\",
                data: 'entityId=' + event.entityId + '&entityType=' + event.entityType + '&setter=' + event.setter + '&startDate=' + event.start.format(),
                type: \"POST\",
                dataType: \"json\",
                success: function (response) {
                    if (!response.success) {
                        revertFunc();
                    }
                    Mautic.initializeCalendarModals(container);
                    if (response.flashes) {
                        Mautic.setFlashes(response.flashes);
                        Mautic.hideFlashes();
                    }
                },
                error: function (response, textStatus, errorThrown) {
                    revertFunc();
                    Mautic.processAjaxError(response, textStatus, errorThrown, true);
                }
            });
        }
    });
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CalendarBundle/Assets/js/calendar.js";
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
        return new Source("", "@bundles/CalendarBundle/Assets/js/calendar.js", "/var/www/html/mautic/docroot/app/bundles/CalendarBundle/Assets/js/calendar.js");
    }
}
