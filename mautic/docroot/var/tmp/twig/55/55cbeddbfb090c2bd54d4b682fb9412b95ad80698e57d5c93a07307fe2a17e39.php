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

/* @bundles/PageBundle/Assets/js/prefcenter.js */
class __TwigTemplate_ddcb07a672b1415a04acb1899fb40d83942c576ac2e695e7a27513f35be2bae7 extends Template
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
        echo "/** This section is only needed once per page if manually copying **/
if (typeof MauticPrefCenterLoaded === 'undefined') {
    var MauticPrefCenterLoaded = true;

    function replaceSlotParams(slot){
        var i;
        var text = slot.dataset['paramLabelText'];

        if (text) {
            setLabelText(slot, 'label.control-label', text);
            var channels = slot.querySelectorAll('label[data-channel]');
            for (i = 0; i < channels.length; i++) {
                channels[i].innerHTML = text.replace('%channel%', channels[i].dataset['channel']);
            }
        }

        var numOfLabelsInSlot = 4;
        for (i = 1; i <= numOfLabelsInSlot; i++) {
            text = slot.dataset['paramLabelText' + i];
            if (typeof text !== \"undefined\") {
                setLabelText(slot, 'label.label' + i, text);
            }
        }
        // button value replace
        text = slot.dataset['paramLinkText'];
        if (typeof text !== \"undefined\") {
            var labels = slot.querySelectorAll('.button');
            labels[0].innerHTML = text;
        }
    }

    function setLabelText(slot, querySelector, text) {
        var labels = slot.querySelectorAll(querySelector);

        for (var i = 0; i < labels.length; i++) {
            labels[i].innerHTML = text;
        }
    }

    // Handler when the DOM is fully loaded
    var callback = function(){
        var slots = document.querySelectorAll('div[data-slot=\"segmentlist\"], div[data-slot=\"categorylist\"], div[data-slot=\"preferredchannel\"], div[data-slot=\"channelfrequency\"],div[data-slot=\"saveprefsbutton\"]');
        for (var i = 0; i < slots.length; i++) {
            replaceSlotParams(slots[i]);
        }
    };

    if (document.readyState === \"complete\" || !(document.readyState === \"loading\" || document.documentElement.doScroll)) {
        callback();
    } else {
        document.addEventListener(\"DOMContentLoaded\", callback);
    }

    function togglePreferredChannel(channel) {
        var status = document.getElementById(channel).checked;
        if (status) {
            document.getElementById('lead_contact_frequency_rules_frequency_number_' + channel).disabled = false;
            document.getElementById('lead_contact_frequency_rules_frequency_time_' + channel).disabled = false;
            document.getElementById('lead_contact_frequency_rules_contact_pause_start_date_' + channel).disabled = false;
            document.getElementById('lead_contact_frequency_rules_contact_pause_end_date_' + channel).disabled = false;
        } else {
            document.getElementById('lead_contact_frequency_rules_frequency_number_' + channel).disabled = true;
            document.getElementById('lead_contact_frequency_rules_frequency_time_' + channel).disabled = true;
            document.getElementById('lead_contact_frequency_rules_contact_pause_start_date_' + channel).disabled = true;
            document.getElementById('lead_contact_frequency_rules_contact_pause_end_date_' + channel).disabled = true;
        }
    }

    function saveUnsubscribePreferences(formId) {
        var forms = document.getElementsByName(formId);
        for (var i = 0; i < forms.length; i++) {
            if (forms[i].tagName === 'FORM') {
                forms[i].submit();
            }
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PageBundle/Assets/js/prefcenter.js";
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
        return new Source("", "@bundles/PageBundle/Assets/js/prefcenter.js", "/var/www/html/mautic/docroot/app/bundles/PageBundle/Assets/js/prefcenter.js");
    }
}
