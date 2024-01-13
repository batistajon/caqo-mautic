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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/extras/quicklook.googledocs.js */
class __TwigTemplate_d2522d15f3504efad3f772b8531698b38e4c7f855f7e0e99d2dbcd340abb1703 extends Template
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
        echo "(function(root, factory) {
\tif (typeof define === 'function' && define.amd) {
\t\tdefine(['elfinder'], factory);
\t} else if (typeof exports !== 'undefined') {
\t\tmodule.exports = factory(require('elfinder'));
\t} else {
\t\tfactory(root.elFinder);
\t}
}(this, function(elFinder) {
\"use strict\";
try {
\tif (! elFinder.prototype.commands.quicklook.plugins) {
\t\telFinder.prototype.commands.quicklook.plugins = [];
\t}
\telFinder.prototype.commands.quicklook.plugins.push(function(ql) {
\t\tvar fm      = ql.fm,
\t\t\tpreview = ql.preview;
\t\t\t
\t\tpreview.on('update', function(e) {
\t\t\tvar win  = ql.window,
\t\t\t\tfile = e.file, node, loading;
\t\t\t
\t\t\tif (file.mime.indexOf('application/vnd.google-apps.') === 0) {
\t\t\t\tif (file.url == '1') {
\t\t\t\t\tpreview.hide();
\t\t\t\t\t\$('<div class=\"elfinder-quicklook-info-data\"><button class=\"elfinder-info-button\">'+fm.i18n('getLink')+'</button></div>').appendTo(ql.info.find('.elfinder-quicklook-info'))
\t\t\t\t\t.on('click', function() {
\t\t\t\t\t\t\$(this).html('<span class=\"elfinder-spinner\">');
\t\t\t\t\t\tfm.request({
\t\t\t\t\t\t\tdata : {cmd : 'url', target : file.hash},
\t\t\t\t\t\t\tpreventDefault : true
\t\t\t\t\t\t})
\t\t\t\t\t\t.always(function() {
\t\t\t\t\t\t\tpreview.show();
\t\t\t\t\t\t\t\$(this).html('');
\t\t\t\t\t\t})
\t\t\t\t\t\t.done(function(data) {
\t\t\t\t\t\t\tvar rfile = fm.file(file.hash);
\t\t\t\t\t\t\tql.value.url = rfile.url = data.url || '';
\t\t\t\t\t\t\tif (ql.value.url) {
\t\t\t\t\t\t\t\tpreview.trigger(\$.Event('update', {file : ql.value}));
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t});
\t\t\t\t}
\t\t\t\tif (file.url !== '' && file.url != '1') {
\t\t\t\t\te.stopImmediatePropagation();

\t\t\t\t\tloading = \$('<div class=\"elfinder-quicklook-info-data\"><span class=\"elfinder-spinner-text\">'+fm.i18n('nowLoading')+'</span><span class=\"elfinder-spinner\"></span></div>').appendTo(ql.info.find('.elfinder-quicklook-info'));

\t\t\t\t\tnode = \$('<iframe class=\"elfinder-quicklook-preview-iframe\"></iframe>')
\t\t\t\t\t\t.css('background-color', 'transparent')
\t\t\t\t\t\t.on('load', function() {
\t\t\t\t\t\t\tql.hideinfo();
\t\t\t\t\t\t\tloading.remove();
\t\t\t\t\t\t\tnode.css('background-color', '#fff');
\t\t\t\t\t\t})
\t\t\t\t\t\t.on('error', function() {
\t\t\t\t\t\t\tloading.remove();
\t\t\t\t\t\t\tnode.remove();
\t\t\t\t\t\t})
\t\t\t\t\t\t.appendTo(preview)
\t\t\t\t\t\t.attr('src', fm.url(file.hash));

\t\t\t\t\tpreview.one('change', function() {
\t\t\t\t\t\tloading.remove();
\t\t\t\t\t\tnode.off('load').remove();
\t\t\t\t\t});
\t\t\t\t}
\t\t\t}
\t\t\t
\t\t});
\t});
} catch(e) {}
}));
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/extras/quicklook.googledocs.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/extras/quicklook.googledocs.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/extras/quicklook.googledocs.js");
    }
}
