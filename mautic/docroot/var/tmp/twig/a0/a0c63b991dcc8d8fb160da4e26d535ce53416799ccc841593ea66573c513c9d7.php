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

/* @bundles/PageBundle/Assets/js/page.js */
class __TwigTemplate_7081e75632dec2ef122cb04a4f57ca63c267aeb60ee1afe006dcbdbcdcaf8bf9 extends Template
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
        echo "//PageBundle
Mautic.pageOnLoad = function (container, response) {
    if (mQuery(container + ' #list-search').length) {
        Mautic.activateSearchAutocomplete('list-search', 'page.page');
    }

    if (mQuery(container + ' #page_template').length) {
        Mautic.toggleBuilderButton(mQuery('#page_template').val() == '');

        //Handle autohide of \"Redirect URL\" field if \"Redirect Type\" is none
        if (mQuery(container + ' select[name=\"page[redirectType]\"]').length) {
            //Auto-hide on page loading
            Mautic.autoHideRedirectUrl(container);

            //Auto-hide on select changing
            mQuery(container + ' select[name=\"page[redirectType]\"]').chosen().change(function(){
                Mautic.autoHideRedirectUrl(container);
            });
        }

        // Preload tokens for code mode builder
        Mautic.getTokens(Mautic.getBuilderTokensMethod(), function(){});
        Mautic.initSelectTheme(mQuery('#page_template'));
    }

    // Open the builder directly when saved from the builder
    if (response && response.inBuilder) {
        Mautic.launchBuilder('page');
        Mautic.processBuilderErrors(response);
    }
};

Mautic.getPageAbTestWinnerForm = function(abKey) {
    if (abKey && mQuery(abKey).val() && mQuery(abKey).closest('.form-group').hasClass('has-error')) {
        mQuery(abKey).closest('.form-group').removeClass('has-error');
        if (mQuery(abKey).next().hasClass('help-block')) {
            mQuery(abKey).next().remove();
        }
    }

    Mautic.activateLabelLoadingIndicator('page_variantSettings_winnerCriteria');

    var pageId = mQuery('#page_sessionId').val();
    var query  = \"action=page:getAbTestForm&abKey=\" + mQuery(abKey).val() + \"&pageId=\" + pageId;

    mQuery.ajax({
        url: mauticAjaxUrl,
        type: \"POST\",
        data: query,
        dataType: \"json\",
        success: function (response) {
            if (typeof response.html != 'undefined') {
                if (mQuery('#page_variantSettings_properties').length) {
                    mQuery('#page_variantSettings_properties').replaceWith(response.html);
                } else {
                    mQuery('#page_variantSettings').append(response.html);
                }

                if (response.html != '') {
                    Mautic.onPageLoad('#page_variantSettings_properties', response);
                }
            }

            Mautic.removeLabelLoadingIndicator();

        },
        error: function (request, textStatus, errorThrown) {
            Mautic.processAjaxError(request, textStatus, errorThrown);
            spinner.remove();
        },
        complete: function () {
            Mautic.removeLabelLoadingIndicator();
        }
    });
};

Mautic.autoHideRedirectUrl = function(container) {
    var select = mQuery(container + ' select[name=\"page[redirectType]\"]');
    var input = mQuery(container + ' input[name=\"page[redirectUrl]\"]');

    //If value is none we autohide the \"Redirect URL\" field and empty it
    if (select.val() == '') {
        input.closest('.form-group').hide();
        input.val('');
    } else {
        input.closest('.form-group').show();
    }
};";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PageBundle/Assets/js/page.js";
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
        return new Source("", "@bundles/PageBundle/Assets/js/page.js", "/var/www/html/mautic/docroot/app/bundles/PageBundle/Assets/js/page.js");
    }
}
