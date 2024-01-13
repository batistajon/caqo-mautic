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

/* @bundles/CoreBundle/Assets/js/14.marketplace.js */
class __TwigTemplate_79a9879cd10cbb0ae60e50a1db833517204a6e36cf241fa7907a00faf10a7ca4 extends Template
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
        echo "'use strict';

Mautic.Marketplace = {
    /**
     * @param string vendorName The packagist vendor name
     * @param string packageName The packagist package name to install
     * @param callback successCallback Callback to be executed on success (jQuery success object)
     * @param callback errorCallback Callback to be executed on error (jQuery error object)
     */
    installPackage: (vendorName, packageName, successCallback, errorCallback) => {
        mQuery.ajax({
            showLoadingBar: true,
            url: mauticAjaxUrl + `?action=marketplace:installPackage`,
            type: 'POST',
            data: JSON.stringify({
                vendor: vendorName,
                package: packageName
            }),
            dataType: 'json',
            success: successCallback,
            error: errorCallback
        });
    },

    /**
     * @param string vendorName The packagist vendor name
     * @param string packageName The packagist package name to remove
     * @param callback successCallback Callback to be executed on success (jQuery success object)
     * @param callback errorCallback Callback to be executed on error (jQuery error object)
     */
    removePackage: (vendorName, packageName, successCallback, errorCallback) => {
        mQuery.ajax({
            showLoadingBar: true,
            url: mauticAjaxUrl + `?action=marketplace:removePackage`,
            type: 'POST',
            data: JSON.stringify({
                vendor: vendorName,
                package: packageName
            }),
            dataType: 'json',
            success: successCallback,
            error: errorCallback
        });
    },
}";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/14.marketplace.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/14.marketplace.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/14.marketplace.js");
    }
}
