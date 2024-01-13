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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/extras/editors.default.js */
class __TwigTemplate_66d6beb53e8f8bb599e471d222f3488943d158663001fb5f2a730a1545a47610 extends Template
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
        echo "(function(editors, elFinder) {
\tif (typeof define === 'function' && define.amd) {
\t\tdefine(['elfinder'], editors);
\t} else if (elFinder) {
\t\tvar optEditors = elFinder.prototype._options.commandsOptions.edit.editors;
\t\telFinder.prototype._options.commandsOptions.edit.editors = optEditors.concat(editors(elFinder));
\t}
}(function(elFinder) {
\t\"use strict\";
\tvar apps = {},
\t\t// get query of getfile
\t\tgetfile = window.location.search.match(/getfile=([a-z]+)/),
\t\tuseRequire = elFinder.prototype.hasRequire,
\t\text2mime = {
\t\t\tbmp: 'image/x-ms-bmp',
\t\t\tdng: 'image/x-adobe-dng',
\t\t\tgif: 'image/gif',
\t\t\tjpeg: 'image/jpeg',
\t\t\tjpg: 'image/jpeg',
\t\t\tpdf: 'application/pdf',
\t\t\tpng: 'image/png',
\t\t\tppm: 'image/x-portable-pixmap',
\t\t\tpsd: 'image/vnd.adobe.photoshop',
\t\t\tpxd: 'image/x-pixlr-data',
\t\t\tsvg: 'image/svg+xml',
\t\t\ttiff: 'image/tiff',
\t\t\twebp: 'image/webp',
\t\t\txcf: 'image/x-xcf',
\t\t\tsketch: 'application/x-sketch',
\t\t\tico: 'image/x-icon',
\t\t\tdds: 'image/vnd-ms.dds',
\t\t\temf: 'application/x-msmetafile'
\t\t},
\t\tmime2ext,
\t\tgetExtention = function(mime, fm, jpeg) {
\t\t\tif (!mime2ext) {
\t\t\t\tmime2ext = fm.arrayFlip(ext2mime);
\t\t\t}
\t\t\tvar ext = mime2ext[mime] || fm.mimeTypes[mime];
\t\t\tif (!jpeg) {
\t\t\t\tif (ext === 'jpeg') {
\t\t\t\t\text = 'jpg';
\t\t\t\t}
\t\t\t} else {
\t\t\t\tif (ext === 'jpg') {
\t\t\t\t\text = 'jpeg';
\t\t\t\t}
\t\t\t}
\t\t\treturn ext;
\t\t},
\t\tchangeImageType = function(src, toMime) {
\t\t\tvar dfd = \$.Deferred();
\t\t\ttry {
\t\t\t\tvar canvas = document.createElement('canvas'),
\t\t\t\t\tctx = canvas.getContext('2d'),
\t\t\t\t\timg = new Image(),
\t\t\t\t\tconv = function() {
\t\t\t\t\t\tvar url = canvas.toDataURL(toMime),
\t\t\t\t\t\t\tmime, m;
\t\t\t\t\t\tif (m = url.match(/^data:([a-z0-9]+\\/[a-z0-9.+-]+)/i)) {
\t\t\t\t\t\t\tmime = m[1];
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tmime = '';
\t\t\t\t\t\t}
\t\t\t\t\t\tif (mime.toLowerCase() === toMime.toLowerCase()) {
\t\t\t\t\t\t\tdfd.resolve(canvas.toDataURL(toMime), canvas);
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tdfd.reject();
\t\t\t\t\t\t}
\t\t\t\t\t};

\t\t\t\timg.src = src;
\t\t\t\t\$(img).on('load', function() {
\t\t\t\t\ttry {
\t\t\t\t\t\tcanvas.width = img.width;
\t\t\t\t\t\tcanvas.height = img.height;
\t\t\t\t\t\tctx.drawImage(img, 0, 0);
\t\t\t\t\t\tconv();
\t\t\t\t\t} catch(e) {
\t\t\t\t\t\tdfd.reject();
\t\t\t\t\t}
\t\t\t\t}).on('error', function () {
\t\t\t\t\tdfd.reject();
\t\t\t\t});
\t\t\t\treturn dfd;
\t\t\t} catch(e) {
\t\t\t\treturn dfd.reject();
\t\t\t}
\t\t},
\t\tinitImgTag = function(id, file, content, fm) {
\t\t\tvar node = \$(this).children('img:first').data('ext', getExtention(file.mime, fm)),
\t\t\t\tspnr = \$('<div class=\"elfinder-edit-spinner elfinder-edit-image\"></div>')
\t\t\t\t\t.html('<span class=\"elfinder-spinner-text\">' + fm.i18n('ntfloadimg') + '</span><span class=\"elfinder-spinner\"></span>')
\t\t\t\t\t.hide()
\t\t\t\t\t.appendTo(this),
\t\t\t\tsetup = function() {
\t\t\t\t\tnode.attr('id', id+'-img')
\t\t\t\t\t\t.attr('src', url || content)
\t\t\t\t\t\t.css({'height':'', 'max-width':'100%', 'max-height':'100%', 'cursor':'pointer'})
\t\t\t\t\t\t.data('loading', function(done) {
\t\t\t\t\t\t\tvar btns = node.closest('.elfinder-dialog').find('button,.elfinder-titlebar-button');
\t\t\t\t\t\t\tbtns.prop('disabled', !done)[done? 'removeClass' : 'addClass']('ui-state-disabled');
\t\t\t\t\t\t\tnode.css('opacity', done? '' : '0.3');
\t\t\t\t\t\t\tspnr[done? 'hide' : 'show']();
\t\t\t\t\t\t\treturn node;
\t\t\t\t\t\t});
\t\t\t\t},
\t\t\t\turl;
\t\t\t
\t\t\tif (!content.match(/^data:/)) {
\t\t\t\tfm.openUrl(file.hash, false, function(v) {
\t\t\t\t\turl = v;
\t\t\t\t\tnode.attr('_src', content);
\t\t\t\t\tsetup();
\t\t\t\t});
\t\t\t} else {
\t\t\t\tsetup();
\t\t\t}
\t\t},
\t\timgBase64 = function(node, mime) {
\t\t\tvar style = node.attr('style'),
\t\t\t\timg, canvas, ctx, data;
\t\t\ttry {
\t\t\t\t// reset css for getting image size
\t\t\t\tnode.attr('style', '');
\t\t\t\t// img node
\t\t\t\timg = node.get(0);
\t\t\t\t// New Canvas
\t\t\t\tcanvas = document.createElement('canvas');
\t\t\t\tcanvas.width  = img.width;
\t\t\t\tcanvas.height = img.height;
\t\t\t\t// restore css
\t\t\t\tnode.attr('style', style);
\t\t\t\t// Draw Image
\t\t\t\tcanvas.getContext('2d').drawImage(img, 0, 0);
\t\t\t\t// To Base64
\t\t\t\tdata = canvas.toDataURL(mime);
\t\t\t} catch(e) {
\t\t\t\tdata = node.attr('src');
\t\t\t}
\t\t\treturn data;
\t\t},
\t\tiframeClose = function(ifm) {
\t\t\tvar \$ifm = \$(ifm),
\t\t\t\tdfd = \$.Deferred().always(function() {
\t\t\t\t\t\$ifm.off('load', load);
\t\t\t\t}),
\t\t\t\tab = 'about:blank',
\t\t\t\tchk = function() {
\t\t\t\t\ttm = setTimeout(function() {
\t\t\t\t\t\tvar src;
\t\t\t\t\t\ttry {
\t\t\t\t\t\t\tsrc = base.contentWindow.location.href;
\t\t\t\t\t\t} catch(e) {
\t\t\t\t\t\t\tsrc = null;
\t\t\t\t\t\t}
\t\t\t\t\t\tif (src === ab) {
\t\t\t\t\t\t\tdfd.resolve();
\t\t\t\t\t\t} else if (--cnt > 0){
\t\t\t\t\t\t\tchk();
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tdfd.reject();
\t\t\t\t\t\t}
\t\t\t\t\t}, 500);
\t\t\t\t},
\t\t\t\tload = function() {
\t\t\t\t\ttm && clearTimeout(tm);
\t\t\t\t\tdfd.resolve();
\t\t\t\t},
\t\t\t\tcnt = 20, // 500ms * 20 = 10sec wait
\t\t\t\ttm;
\t\t\t\$ifm.one('load', load);
\t\t\tifm.src = ab;
\t\t\tchk();
\t\t\treturn dfd;
\t\t};
\t
\t// check getfile callback function
\tif (getfile) {
\t\tgetfile = getfile[1];
\t\tif (getfile === 'ckeditor') {
\t\t\telFinder.prototype._options.getFileCallback = function(file, fm) {
\t\t\t\twindow.opener.CKEDITOR.tools.callFunction((function() {
\t\t\t\t\tvar reParam = new RegExp('(?:[\\?&]|&amp;)CKEditorFuncNum=([^&]+)', 'i'),
\t\t\t\t\t\tmatch = window.location.search.match(reParam);
\t\t\t\t\treturn (match && match.length > 1) ? match[1] : '';
\t\t\t\t})(), fm.convAbsUrl(file.url));
\t\t\t\tfm.destroy();
\t\t\t\twindow.close();
\t\t\t};
\t\t}
\t}
\t
\t// return editors Array
\treturn [
\t\t{
\t\t\t// tui.image-editor - https://github.com/nhnent/tui.image-editor
\t\t\tinfo : {
\t\t\t\tid: 'tuiimgedit',
\t\t\t\tname: 'TUI Image Editor',
\t\t\t\ticonImg: 'img/editor-icons.png 0 -48',
\t\t\t\tdataScheme: true,
\t\t\t\tschemeContent: true,
\t\t\t\topenMaximized: true,
\t\t\t\tcanMakeEmpty: false,
\t\t\t\tintegrate: {
\t\t\t\t\ttitle: 'TOAST UI Image Editor',
\t\t\t\t\tlink: 'http://ui.toast.com/tui-image-editor/'
\t\t\t\t}
\t\t\t},
\t\t\t// MIME types to accept
\t\t\tmimes : ['image/jpeg', 'image/png', 'image/gif', 'image/svg+xml', 'image/x-ms-bmp'],
\t\t\t// HTML of this editor
\t\t\thtml : '<div class=\"elfinder-edit-imageeditor\"><canvas></canvas></div>',
\t\t\t// called on initialization of elFinder cmd edit (this: this editor's config object)
\t\t\tsetup : function(opts, fm) {
\t\t\t\tif (fm.UA.ltIE8 || fm.UA.Mobile) {
\t\t\t\t\tthis.disabled = true;
\t\t\t\t} else {
\t\t\t\t\tthis.opts = Object.assign({
\t\t\t\t\t\tversion: 'v3.9.0'
\t\t\t\t\t}, opts.extraOptions.tuiImgEditOpts || {}, {
\t\t\t\t\t\ticonsPath : fm.baseUrl + 'img/tui-',
\t\t\t\t\t\ttheme : {}
\t\t\t\t\t});
\t\t\t\t\tif (!fm.isSameOrigin(this.opts.iconsPath)) {
\t\t\t\t\t\tthis.disabled = true;
\t\t\t\t\t\tfm.debug('warning', 'Setting `commandOptions.edit.extraOptions.tuiImgEditOpts.iconsPath` MUST follow the same origin policy.');
\t\t\t\t\t}
\t\t\t\t}
\t\t\t},
\t\t\t// Initialization of editing node (this: this editors HTML node)
\t\t\tinit : function(id, file, content, fm) {
\t\t\t\tthis.data('url', content);
\t\t\t},
\t\t\tload : function(base) {
\t\t\t\tvar self = this,
\t\t\t\t\tfm   = this.fm,
\t\t\t\t\tdfrd = \$.Deferred(),
\t\t\t\t\tcdns = fm.options.cdns,
\t\t\t\t\tver  = self.confObj.opts.version,
\t\t\t\t\tinit = function(editor) {
\t\t\t\t\t\tvar \$base = \$(base),
\t\t\t\t\t\t\tbParent = \$base.parent(),
\t\t\t\t\t\t\topts = self.confObj.opts,
\t\t\t\t\t\t\ticonsPath = opts.iconsPath,
\t\t\t\t\t\t\ttmpContainer = \$('<div class=\"tui-image-editor-container\">').appendTo(bParent),
\t\t\t\t\t\t\ttmpDiv = [
\t\t\t\t\t\t\t\t\$('<div class=\"tui-image-editor-submenu\"></div>').appendTo(tmpContainer),
\t\t\t\t\t\t\t\t\$('<div class=\"tui-image-editor-controls\"></div>').appendTo(tmpContainer)
\t\t\t\t\t\t\t],
\t\t\t\t\t\t\tiEditor = new editor(base, {
\t\t\t\t\t\t\t\tincludeUI: {
\t\t\t\t\t\t\t\t\tloadImage: {
\t\t\t\t\t\t\t\t\t\tpath: \$base.data('url'),
\t\t\t\t\t\t\t\t\t\tname: self.file.name
\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\ttheme: Object.assign(opts.theme, {
\t\t\t\t\t\t\t\t\t\t'menu.normalIcon.path': iconsPath + 'icon-d.svg',
\t\t\t\t\t\t\t\t\t\t'menu.normalIcon.name': 'icon-d',
\t\t\t\t\t\t\t\t\t\t'menu.activeIcon.path': iconsPath + 'icon-b.svg',
\t\t\t\t\t\t\t\t\t\t'menu.activeIcon.name': 'icon-b',
\t\t\t\t\t\t\t\t\t\t'menu.disabledIcon.path': iconsPath + 'icon-a.svg',
\t\t\t\t\t\t\t\t\t\t'menu.disabledIcon.name': 'icon-a',
\t\t\t\t\t\t\t\t\t\t'menu.hoverIcon.path': iconsPath + 'icon-c.svg',
\t\t\t\t\t\t\t\t\t\t'menu.hoverIcon.name': 'icon-c',
\t\t\t\t\t\t\t\t\t\t'submenu.normalIcon.path': iconsPath + 'icon-d.svg',
\t\t\t\t\t\t\t\t\t\t'submenu.normalIcon.name': 'icon-d',
\t\t\t\t\t\t\t\t\t\t'submenu.activeIcon.path': iconsPath + 'icon-c.svg',
\t\t\t\t\t\t\t\t\t\t'submenu.activeIcon.name': 'icon-c'
\t\t\t\t\t\t\t\t\t}),
\t\t\t\t\t\t\t\t\tinitMenu: 'filter',
\t\t\t\t\t\t\t\t\tmenuBarPosition: 'bottom'
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\tcssMaxWidth: Math.max(300, bParent.width()),
\t\t\t\t\t\t\t\tcssMaxHeight: Math.max(200, bParent.height() - (tmpDiv[0].height() + tmpDiv[1].height() + 3 /*margin*/)),
\t\t\t\t\t\t\t\tusageStatistics: false
\t\t\t\t\t\t\t}),
\t\t\t\t\t\t\tcanvas = \$base.find('canvas:first').get(0),
\t\t\t\t\t\t\tzoom = function(v) {
\t\t\t\t\t\t\t\tif (typeof v !== 'undefined') {
\t\t\t\t\t\t\t\t\tvar c = \$(canvas),
\t\t\t\t\t\t\t\t\t\tw = parseInt(c.attr('width')),
\t\t\t\t\t\t\t\t\t\th = parseInt(c.attr('height')),
\t\t\t\t\t\t\t\t\t\ta = w / h,
\t\t\t\t\t\t\t\t\t\tmw, mh;
\t\t\t\t\t\t\t\t\tif (v === 0) {
\t\t\t\t\t\t\t\t\t\tmw = w;
\t\t\t\t\t\t\t\t\t\tmh = h;
\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\tmw = parseInt(c.css('max-width')) + Number(v);
\t\t\t\t\t\t\t\t\t\tmh = mw / a;
\t\t\t\t\t\t\t\t\t\tif (mw > w && mh > h) {
\t\t\t\t\t\t\t\t\t\t\tmw = w;
\t\t\t\t\t\t\t\t\t\t\tmh = h;
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\tper.text(Math.round(mw / w * 100) + '%');
\t\t\t\t\t\t\t\t\tiEditor.resizeCanvasDimension({width: mw, height: mh});
\t\t\t\t\t\t\t\t\t// continually change more
\t\t\t\t\t\t\t\t\tif (zoomMore) {
\t\t\t\t\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\t\t\t\t\tzoomMore && zoom(v);
\t\t\t\t\t\t\t\t\t\t}, 50);
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tzup = \$('<span class=\"ui-icon ui-icon-plusthick\"></span>').data('val', 10),
\t\t\t\t\t\t\tzdown = \$('<span class=\"ui-icon ui-icon-minusthick\"></span>').data('val', -10),
\t\t\t\t\t\t\tper = \$('<button></button>').css('width', '4em').text('%').attr('title', '100%').data('val', 0),
\t\t\t\t\t\t\tquty, qutyTm, zoomTm, zoomMore;

\t\t\t\t\t\ttmpContainer.remove();
\t\t\t\t\t\t\$base.removeData('url').data('mime', self.file.mime);
\t\t\t\t\t\t// jpeg quality controls
\t\t\t\t\t\tif (self.file.mime === 'image/jpeg') {
\t\t\t\t\t\t\t\$base.data('quality', fm.storage('jpgQuality') || fm.option('jpgQuality'));
\t\t\t\t\t\t\tquty = \$('<input type=\"number\" class=\"ui-corner-all elfinder-resize-quality elfinder-tabstop\"/>')
\t\t\t\t\t\t\t\t.attr('min', '1')
\t\t\t\t\t\t\t\t.attr('max', '100')
\t\t\t\t\t\t\t\t.attr('title', '1 - 100')
\t\t\t\t\t\t\t\t.on('change', function() {
\t\t\t\t\t\t\t\t\tvar q = quty.val();
\t\t\t\t\t\t\t\t\t\$base.data('quality', q);
\t\t\t\t\t\t\t\t\tqutyTm && cancelAnimationFrame(qutyTm);
\t\t\t\t\t\t\t\t\tqutyTm = requestAnimationFrame(function() {
\t\t\t\t\t\t\t\t\t\tcanvas.toBlob(function(blob) {
\t\t\t\t\t\t\t\t\t\t\tblob && quty.next('span').text(' (' + fm.formatSize(blob.size) + ')');
\t\t\t\t\t\t\t\t\t\t}, 'image/jpeg', Math.max(Math.min(q, 100), 1) / 100);
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\t.val(\$base.data('quality'));
\t\t\t\t\t\t\t\$('<div class=\"ui-dialog-buttonset elfinder-edit-extras elfinder-edit-extras-quality\"></div>')
\t\t\t\t\t\t\t\t.append(
\t\t\t\t\t\t\t\t\t\$('<span>').html(fm.i18n('quality') + ' : '), quty, \$('<span></span>')
\t\t\t\t\t\t\t\t)
\t\t\t\t\t\t\t\t.prependTo(\$base.parent().next());
\t\t\t\t\t\t} else if (self.file.mime === 'image/svg+xml') {
\t\t\t\t\t\t\t\$base.closest('.ui-dialog').trigger('changeType', {
\t\t\t\t\t\t\t\textention: 'png',
\t\t\t\t\t\t\t\tmime : 'image/png',
\t\t\t\t\t\t\t\tkeepEditor: true
\t\t\t\t\t\t\t});
\t\t\t\t\t\t}
\t\t\t\t\t\t// zoom scale controls
\t\t\t\t\t\t\$('<div class=\"ui-dialog-buttonset elfinder-edit-extras\"></div>')
\t\t\t\t\t\t\t.append(
\t\t\t\t\t\t\t\tzdown, per, zup
\t\t\t\t\t\t\t)
\t\t\t\t\t\t\t.attr('title', fm.i18n('scale'))
\t\t\t\t\t\t\t.on('click', 'span,button', function() {
\t\t\t\t\t\t\t\tzoom(\$(this).data('val'));
\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t.on('mousedown mouseup mouseleave', 'span', function(e) {
\t\t\t\t\t\t\t\tzoomMore = false;
\t\t\t\t\t\t\t\tzoomTm && clearTimeout(zoomTm);
\t\t\t\t\t\t\t\tif (e.type === 'mousedown') {
\t\t\t\t\t\t\t\t\tzoomTm = setTimeout(function() {
\t\t\t\t\t\t\t\t\t\tzoomMore = true;
\t\t\t\t\t\t\t\t\t\tzoom(\$(e.target).data('val'));
\t\t\t\t\t\t\t\t\t}, 500);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t.prependTo(\$base.parent().next());

\t\t\t\t\t\t// wait canvas ready
\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\tdfrd.resolve(iEditor);
\t\t\t\t\t\t\tif (quty) {
\t\t\t\t\t\t\t\tquty.trigger('change');
\t\t\t\t\t\t\t\tiEditor.on('redoStackChanged undoStackChanged', function() {
\t\t\t\t\t\t\t\t\tquty.trigger('change');
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t// show initial scale
\t\t\t\t\t\t\tzoom(null);
\t\t\t\t\t\t}, 100);

\t\t\t\t\t\t// show color slider (maybe TUI-Image-Editor's bug)
\t\t\t\t\t\t// see https://github.com/nhn/tui.image-editor/issues/153
\t\t\t\t\t\t\$base.find('.tui-colorpicker-palette-container').on('click', '.tui-colorpicker-palette-preview', function() {
\t\t\t\t\t\t\t\$(this).closest('.color-picker-control').height('auto').find('.tui-colorpicker-slider-container').toggle();
\t\t\t\t\t\t});
\t\t\t\t\t\t\$base.on('click', function() {
\t\t\t\t\t\t\t\$base.find('.tui-colorpicker-slider-container').hide();
\t\t\t\t\t\t});
\t\t\t\t\t},
\t\t\t\t\tloader;

\t\t\t\tif (!self.confObj.editor) {
\t\t\t\t\tloader = \$.Deferred();
\t\t\t\t\tfm.loadCss([
\t\t\t\t\t\tcdns.tui + '/tui-color-picker/latest/tui-color-picker.css',
\t\t\t\t\t\tcdns.tui + '/tui-image-editor/'+ver+'/tui-image-editor.css'
\t\t\t\t\t]);
\t\t\t\t\tif (fm.hasRequire) {
\t\t\t\t\t\trequire.config({
\t\t\t\t\t\t\tpaths : {
\t\t\t\t\t\t\t\t'fabric/dist/fabric.require' : cdns.fabric + '/fabric.require.min', // for fabric < 2.0.1
\t\t\t\t\t\t\t\t'fabric' : cdns.fabric + '/fabric.min', // for fabric >= 2.0.1
\t\t\t\t\t\t\t\t'tui-code-snippet' : cdns.tui + '/tui.code-snippet/latest/tui-code-snippet.min',
\t\t\t\t\t\t\t\t'tui-color-picker' : cdns.tui + '/tui-color-picker/latest/tui-color-picker.min',
\t\t\t\t\t\t\t\t'tui-image-editor' : cdns.tui + '/tui-image-editor/'+ver+'/tui-image-editor.min'
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t\trequire(['tui-image-editor'], function(ImageEditor) {
\t\t\t\t\t\t\tloader.resolve(ImageEditor);
\t\t\t\t\t\t});
\t\t\t\t\t} else {
\t\t\t\t\t\tfm.loadScript([
\t\t\t\t\t\t\tcdns.fabric + '/fabric.min.js',
\t\t\t\t\t\t\tcdns.tui + '/tui.code-snippet/latest/tui-code-snippet.min.js'
\t\t\t\t\t\t], function() {
\t\t\t\t\t\t\tfm.loadScript([
\t\t\t\t\t\t\t\tcdns.tui + '/tui-color-picker/latest/tui-color-picker.min.js'
\t\t\t\t\t\t\t], function() {
\t\t\t\t\t\t\t\tfm.loadScript([
\t\t\t\t\t\t\t\t\tcdns.tui + '/tui-image-editor/'+ver+'/tui-image-editor.min.js'
\t\t\t\t\t\t\t\t], function() {
\t\t\t\t\t\t\t\t\tloader.resolve(window.tui.ImageEditor);
\t\t\t\t\t\t\t\t}, {
\t\t\t\t\t\t\t\t\tloadType: 'tag'
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t}, {
\t\t\t\t\t\t\t\tloadType: 'tag'
\t\t\t\t\t\t\t});
\t\t\t\t\t\t}, {
\t\t\t\t\t\t\tloadType: 'tag'
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t\tloader.done(function(editor) {
\t\t\t\t\t\tself.confObj.editor = editor;
\t\t\t\t\t\tinit(editor);
\t\t\t\t\t});
\t\t\t\t} else {
\t\t\t\t\tinit(self.confObj.editor);
\t\t\t\t}
\t\t\t\treturn dfrd;
\t\t\t},
\t\t\tgetContent : function(base) {
\t\t\t\tvar editor = this.editor,
\t\t\t\t\tfm = editor.fm,
\t\t\t\t\t\$base = \$(base),
\t\t\t\t\tquality = \$base.data('quality');
\t\t\t\tif (editor.instance) {
\t\t\t\t\tif (\$base.data('mime') === 'image/jpeg') {
\t\t\t\t\t\tquality = quality || fm.storage('jpgQuality') || fm.option('jpgQuality');
\t\t\t\t\t\tquality = Math.max(0.1, Math.min(1, quality / 100));
\t\t\t\t\t}
\t\t\t\t\treturn editor.instance.toDataURL({
\t\t\t\t\t\tformat: getExtention(\$base.data('mime'), fm, true),
\t\t\t\t\t\tquality: quality
\t\t\t\t\t});
\t\t\t\t}
\t\t\t},
\t\t\tsave : function(base) {
\t\t\t\tvar \$base = \$(base),
\t\t\t\t\tquality = \$base.data('quality'),
\t\t\t\t\thash = \$base.data('hash'),
\t\t\t\t\tfile;
\t\t\t\tthis.instance.deactivateAll();
\t\t\t\tif (typeof quality !== 'undefined') {
\t\t\t\t\tthis.fm.storage('jpgQuality', quality);
\t\t\t\t}
\t\t\t\tif (hash) {
\t\t\t\t\tfile = this.fm.file(hash);
\t\t\t\t\t\$base.data('mime', file.mime);
\t\t\t\t}
\t\t\t}
\t\t},
\t\t{
\t\t\t// Photopea advanced image editor
\t\t\tinfo : {
\t\t\t\tid : 'photopea',
\t\t\t\tname : 'Photopea',
\t\t\t\ticonImg : 'img/editor-icons.png 0 -160',
\t\t\t\tsingle: true,
\t\t\t\tnoContent: true,
\t\t\t\tarrayBufferContent: true,
\t\t\t\topenMaximized: true,
\t\t\t\t// Disable file types that cannot be saved on Photopea.
\t\t\t\tcanMakeEmpty: ['image/jpeg', 'image/png', 'image/gif', 'image/svg+xml', 'image/x-ms-bmp', 'image/tiff', /*'image/x-adobe-dng',*/ 'image/webp', /*'image/x-xcf',*/ 'image/vnd.adobe.photoshop', 'application/pdf', 'image/x-portable-pixmap', 'image/x-sketch', 'image/x-icon', 'image/vnd-ms.dds', /*'application/x-msmetafile'*/],
\t\t\t\tintegrate: {
\t\t\t\t\ttitle: 'Photopea',
\t\t\t\t\tlink: 'https://www.photopea.com/learn/'
\t\t\t\t}
\t\t\t},
\t\t\tmimes : ['image/jpeg', 'image/png', 'image/gif', 'image/svg+xml', 'image/x-ms-bmp', 'image/tiff', 'image/x-adobe-dng', 'image/webp', 'image/x-xcf', 'image/vnd.adobe.photoshop', 'application/pdf', 'image/x-portable-pixmap', 'image/x-sketch', 'image/x-icon', 'image/vnd-ms.dds', 'application/x-msmetafile'],
\t\t\thtml : '<iframe style=\"width:100%;height:100%;border:none;\"></iframe>',
\t\t\t// setup on elFinder bootup
\t\t\tsetup : function(opts, fm) {
\t\t\t\tif (fm.UA.IE || fm.UA.Mobile) {
\t\t\t\t\tthis.disabled = true;
\t\t\t\t}
\t\t\t},
\t\t\t// Initialization of editing node (this: this editors HTML node)
\t\t\tinit : function(id, file, dum, fm) {
\t\t\t\tvar orig = 'https://www.photopea.com',
\t\t\t\t\tifm = \$(this).hide()
\t\t\t\t\t\t//.css('box-sizing', 'border-box')
\t\t\t\t\t\t.on('load', function() {
\t\t\t\t\t\t\t//spnr.remove();
\t\t\t\t\t\t\tifm.show();
\t\t\t\t\t\t})
\t\t\t\t\t\t.on('error', function() {
\t\t\t\t\t\t\tspnr.remove();
\t\t\t\t\t\t\tifm.show();
\t\t\t\t\t\t}),
\t\t\t\t\teditor = this.editor,
\t\t\t\t\tconfObj = editor.confObj,
\t\t\t\t\tspnr = \$('<div class=\"elfinder-edit-spinner elfinder-edit-photopea\"></div>')
\t\t\t\t\t\t.html('<span class=\"elfinder-spinner-text\">' + fm.i18n('nowLoading') + '</span><span class=\"elfinder-spinner\"></span>')
\t\t\t\t\t\t.appendTo(ifm.parent()),
\t\t\t\t\tsaveMimes = fm.arrayFlip(confObj.info.canMakeEmpty),
\t\t\t\t\tgetType = function(mime) {
\t\t\t\t\t\tvar ext = getExtention(mime, fm),
\t\t\t\t\t\t\textmime = ext2mime[ext];

\t\t\t\t\t\tif (!confObj.mimesFlip[extmime]) {
\t\t\t\t\t\t\text = '';
\t\t\t\t\t\t} else if (ext === 'jpeg') {
\t\t\t\t\t\t\text = 'jpg';
\t\t\t\t\t\t}
\t\t\t\t\t\tif (!ext || !saveMimes[extmime]) {
\t\t\t\t\t\t\text = 'psd';
\t\t\t\t\t\t\textmime = ext2mime[ext];
\t\t\t\t\t\t\tifm.closest('.ui-dialog').trigger('changeType', {
\t\t\t\t\t\t\t\textention: ext,
\t\t\t\t\t\t\t\tmime : extmime,
\t\t\t\t\t\t\t\tkeepEditor: true
\t\t\t\t\t\t\t});
\t\t\t\t\t\t}
\t\t\t\t\t\treturn ext;
\t\t\t\t\t},
\t\t\t\t\tmime = file.mime,
\t\t\t\t\tliveMsg, type, quty;
\t\t\t\t
\t\t\t\tif (!confObj.mimesFlip) {
\t\t\t\t\tconfObj.mimesFlip = fm.arrayFlip(confObj.mimes, true);
\t\t\t\t}
\t\t\t\tif (!confObj.liveMsg) {
\t\t\t\t\tconfObj.liveMsg = function(ifm, spnr, file) {
\t\t\t\t\t\tvar wnd = ifm.get(0).contentWindow,
\t\t\t\t\t\t\tphase = 0,
\t\t\t\t\t\t\tdata = null,
\t\t\t\t\t\t\tdfdIni = \$.Deferred().done(function() {
\t\t\t\t\t\t\t\tspnr.remove();
\t\t\t\t\t\t\t\tphase = 1;
\t\t\t\t\t\t\t\twnd.postMessage(data, orig);
\t\t\t\t\t\t\t}),
\t\t\t\t\t\t\tdfdGet;

\t\t\t\t\t\tthis.load = function() {
\t\t\t\t\t\t\treturn fm.getContents(file.hash, 'arraybuffer').done(function(d) {
\t\t\t\t\t\t\t\tdata = d;
\t\t\t\t\t\t\t});
\t\t\t\t\t\t};

\t\t\t\t\t\tthis.receive = function(e) {
\t\t\t\t\t\t\tvar ev = e.originalEvent,
\t\t\t\t\t\t\t\tstate;
\t\t\t\t\t\t\tif (ev.origin === orig && ev.source === wnd) {
\t\t\t\t\t\t\t\tif (ev.data === 'done') {
\t\t\t\t\t\t\t\t\tif (phase === 0) {
\t\t\t\t\t\t\t\t\t\tdfdIni.resolve();
\t\t\t\t\t\t\t\t\t} else if (phase === 1) {
\t\t\t\t\t\t\t\t\t\tphase = 2;
\t\t\t\t\t\t\t\t\t\tifm.trigger('contentsloaded');
\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\tif (dfdGet && dfdGet.state() === 'pending') {
\t\t\t\t\t\t\t\t\t\t\tdfdGet.reject('errDataEmpty');
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t} else if (ev.data === 'Save') {
\t\t\t\t\t\t\t\t\teditor.doSave();
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\tif (dfdGet && dfdGet.state() === 'pending') {
\t\t\t\t\t\t\t\t\t\tif (typeof ev.data === 'object') {
\t\t\t\t\t\t\t\t\t\t\tdfdGet.resolve('data:' + mime + ';base64,' + fm.arrayBufferToBase64(ev.data));
\t\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\t\tdfdGet.reject('errDataEmpty');
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t};

\t\t\t\t\t\tthis.getContent = function() {
\t\t\t\t\t\t\tvar type, q;
\t\t\t\t\t\t\tif (phase > 1) {
\t\t\t\t\t\t\t\tdfdGet && dfdGet.state() === 'pending' && dfdGet.reject();
\t\t\t\t\t\t\t\tdfdGet = null;
\t\t\t\t\t\t\t\tdfdGet = \$.Deferred();
\t\t\t\t\t\t\t\tif (phase === 2) {
\t\t\t\t\t\t\t\t\tphase = 3;
\t\t\t\t\t\t\t\t\tdfdGet.resolve('data:' + mime + ';base64,' + fm.arrayBufferToBase64(data));
\t\t\t\t\t\t\t\t\tdata = null;
\t\t\t\t\t\t\t\t\treturn dfdGet;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tif (ifm.data('mime')) {
\t\t\t\t\t\t\t\t\tmime = ifm.data('mime');
\t\t\t\t\t\t\t\t\ttype = getType(mime);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tif (q = ifm.data('quality')) {
\t\t\t\t\t\t\t\t\ttype += ':' + (q / 100);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\twnd.postMessage('app.activeDocument.saveToOE(\"' + type + '\")', orig);
\t\t\t\t\t\t\t\treturn dfdGet;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t};
\t\t\t\t\t};
\t\t\t\t}

\t\t\t\tifm.parent().css('padding', 0);
\t\t\t\ttype = getType(file.mime);
\t\t\t\tliveMsg = editor.liveMsg = new confObj.liveMsg(ifm, spnr, file);
\t\t\t\t\$(window).on('message.' + fm.namespace, liveMsg.receive);
\t\t\t\tliveMsg.load().done(function() {
\t\t\t\t\tvar d = JSON.stringify({
\t\t\t\t\t\tfiles : [],
\t\t\t\t\t\tenvironment : {
\t\t\t\t\t\t\tlang: fm.lang.replace(/_/g, '-'),
\t\t\t\t\t\t\tcustomIO: {\"save\": \"app.echoToOE(\\\"Save\\\");\"}
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\tifm.attr('src', orig + '/#' + encodeURI(d));
\t\t\t\t}).fail(function(err) {
\t\t\t\t\terr && fm.error(err);
\t\t\t\t\teditor.initFail = true;
\t\t\t\t});

\t\t\t\t// jpeg quality controls
\t\t\t\tif (file.mime === 'image/jpeg' || file.mime === 'image/webp') {
\t\t\t\t\tifm.data('quality', fm.storage('jpgQuality') || fm.option('jpgQuality'));
\t\t\t\t\tquty = \$('<input type=\"number\" class=\"ui-corner-all elfinder-resize-quality elfinder-tabstop\"/>')
\t\t\t\t\t\t.attr('min', '1')
\t\t\t\t\t\t.attr('max', '100')
\t\t\t\t\t\t.attr('title', '1 - 100')
\t\t\t\t\t\t.on('change', function() {
\t\t\t\t\t\t\tvar q = quty.val();
\t\t\t\t\t\t\tifm.data('quality', q);
\t\t\t\t\t\t})
\t\t\t\t\t\t.val(ifm.data('quality'));
\t\t\t\t\t\$('<div class=\"ui-dialog-buttonset elfinder-edit-extras elfinder-edit-extras-quality\"></div>')
\t\t\t\t\t\t.append(
\t\t\t\t\t\t\t\$('<span>').html(fm.i18n('quality') + ' : '), quty, \$('<span></span>')
\t\t\t\t\t\t)
\t\t\t\t\t\t.prependTo(ifm.parent().next());
\t\t\t\t}
\t\t\t},
\t\t\tload : function(base) {
\t\t\t\tvar dfd = \$.Deferred(),
\t\t\t\t\tself = this,
\t\t\t\t\tfm = this.fm,
\t\t\t\t\t\$base = \$(base);
\t\t\t\tif (self.initFail) {
\t\t\t\t\tdfd.reject();
\t\t\t\t} else {
\t\t\t\t\t\$base.on('contentsloaded', function() {
\t\t\t\t\t\tdfd.resolve(self.liveMsg);
\t\t\t\t\t});
\t\t\t\t}
\t\t\t\treturn dfd;
\t\t\t},
\t\t\tgetContent : function() {
\t\t\t\treturn this.editor.liveMsg? this.editor.liveMsg.getContent() : void(0);
\t\t\t},
\t\t\tsave : function(base, liveMsg) {
\t\t\t\tvar \$base = \$(base),
\t\t\t\t\tquality = \$base.data('quality'),
\t\t\t\t\thash = \$base.data('hash'),
\t\t\t\t\tfile;
\t\t\t\tif (typeof quality !== 'undefined') {
\t\t\t\t\tthis.fm.storage('jpgQuality', quality);
\t\t\t\t}
\t\t\t\tif (hash) {
\t\t\t\t\tfile = this.fm.file(hash);
\t\t\t\t\t\$base.data('mime', file.mime);
\t\t\t\t} else {
\t\t\t\t\t\$base.removeData('mime');
\t\t\t\t}
\t\t\t},
\t\t\t// On dialog closed
\t\t\tclose : function(base, liveMsg) {
\t\t\t\t\$(base).attr('src', '');
\t\t\t\tliveMsg && \$(window).off('message.' + this.fm.namespace, liveMsg.receive);
\t\t\t}
\t\t},
\t\t{
\t\t\t// Pixo is cross-platform image editor
\t\t\tinfo : {
\t\t\t\tid : 'pixo',
\t\t\t\tname : 'Pixo Editor',
\t\t\t\ticonImg : 'img/editor-icons.png 0 -208',
\t\t\t\tdataScheme: true,
\t\t\t\tschemeContent: true,
\t\t\t\tsingle: true,
\t\t\t\tcanMakeEmpty: false,
\t\t\t\tintegrate: {
\t\t\t\t\ttitle: 'Pixo Editor',
\t\t\t\t\tlink: 'https://pixoeditor.com/privacy-policy/'
\t\t\t\t}
\t\t\t},
\t\t\t// MIME types to accept
\t\t\tmimes : ['image/jpeg', 'image/png', 'image/gif', 'image/svg+xml', 'image/x-ms-bmp'],
\t\t\t// HTML of this editor
\t\t\thtml : '<div class=\"elfinder-edit-imageeditor\"><img/></div>',
\t\t\t// called on initialization of elFinder cmd edit (this: this editor's config object)
\t\t\tsetup : function(opts, fm) {
\t\t\t\tif (fm.UA.ltIE8 || !opts.extraOptions || !opts.extraOptions.pixo || !opts.extraOptions.pixo.apikey) {
\t\t\t\t\tthis.disabled = true;
\t\t\t\t} else {
\t\t\t\t\tthis.editorOpts = opts.extraOptions.pixo;
\t\t\t\t}
\t\t\t},
\t\t\t// Initialization of editing node (this: this editors HTML node)
\t\t\tinit : function(id, file, content, fm) {
\t\t\t\tinitImgTag.call(this, id, file, content, fm);
\t\t\t},
\t\t\t// Get data uri scheme (this: this editors HTML node)
\t\t\tgetContent : function() {
\t\t\t\treturn \$(this).children('img:first').attr('src');
\t\t\t},
\t\t\t// Launch Pixo editor when dialog open
\t\t\tload : function(base) {
\t\t\t\tvar self = this,
\t\t\t\t\tfm = this.fm,
\t\t\t\t\t\$base = \$(base),
\t\t\t\t\tnode = \$base.children('img:first'),
\t\t\t\t\tdialog = \$base.closest('.ui-dialog'),
\t\t\t\t\telfNode = fm.getUI(),
\t\t\t\t\tdfrd = \$.Deferred(),
\t\t\t\t\tcontainer = \$('#elfinder-pixo-container'),
\t\t\t\t\tinit = function(onload) {
\t\t\t\t\t\tvar opts;
\t\t\t\t\t\t\t
\t\t\t\t\t\tif (!container.length) {
\t\t\t\t\t\t\tcontainer = \$('<div id=\"elfinder-pixo-container\" class=\"ui-front\"></div>').css({
\t\t\t\t\t\t\t\tposition: 'fixed',
\t\t\t\t\t\t\t\ttop: 0,
\t\t\t\t\t\t\t\tright: 0,
\t\t\t\t\t\t\t\twidth: '100%',
\t\t\t\t\t\t\t\theight: \$(window).height(),
\t\t\t\t\t\t\t\toverflow: 'hidden'
\t\t\t\t\t\t\t}).hide().appendTo(elfNode.hasClass('elfinder-fullscreen')? elfNode : 'body');
\t\t\t\t\t\t\t// bind switch fullscreen event
\t\t\t\t\t\t\telfNode.on('resize.'+fm.namespace, function(e, data) {
\t\t\t\t\t\t\t\te.preventDefault();
\t\t\t\t\t\t\t\te.stopPropagation();
\t\t\t\t\t\t\t\tdata && data.fullscreen && container.appendTo(data.fullscreen === 'on'? elfNode : 'body');
\t\t\t\t\t\t\t});
\t\t\t\t\t\t\tfm.bind('destroy', function() {
\t\t\t\t\t\t\t\teditor && editor.cancelEditing();
\t\t\t\t\t\t\t\tcontainer.remove();
\t\t\t\t\t\t\t});
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t// always moves to last
\t\t\t\t\t\t\tcontainer.appendTo(container.parent());
\t\t\t\t\t\t}
\t\t\t\t\t\tnode.on('click', launch);
\t\t\t\t\t\t// Constructor options
\t\t\t\t\t\topts = Object.assign({
\t\t\t\t\t\t\ttype: 'child',
\t\t\t\t\t\t\tparent: container.get(0),
\t\t\t\t\t\t\toutput: {format: 'png'},
\t\t\t\t\t\t\tonSave: function(arg) {
\t\t\t\t\t\t\t\t// Check current file.hash, all callbacks are called on multiple instances
\t\t\t\t\t\t\t\tvar mime = arg.toBlob().type,
\t\t\t\t\t\t\t\t\text = getExtention(mime, fm),
\t\t\t\t\t\t\t\t\tdraw = function(url) {
\t\t\t\t\t\t\t\t\t\tnode.one('load error', function() {
\t\t\t\t\t\t\t\t\t\t\t\tnode.data('loading') && node.data('loading')(true);
\t\t\t\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\t\t\t\t.attr('crossorigin', 'anonymous')
\t\t\t\t\t\t\t\t\t\t\t.attr('src', url);
\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\turl = arg.toDataURL();
\t\t\t\t\t\t\t\tnode.data('loading')();
\t\t\t\t\t\t\t\tdelete base._canvas;
\t\t\t\t\t\t\t\tif (node.data('ext') !== ext) {
\t\t\t\t\t\t\t\t\tchangeImageType(url, self.file.mime).done(function(res, cv) {
\t\t\t\t\t\t\t\t\t\tif (cv) {
\t\t\t\t\t\t\t\t\t\t\tbase._canvas = canvas = cv;
\t\t\t\t\t\t\t\t\t\t\tquty.trigger('change');
\t\t\t\t\t\t\t\t\t\t\tqBase && qBase.show();
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\tdraw(res);
\t\t\t\t\t\t\t\t\t}).fail(function() {
\t\t\t\t\t\t\t\t\t\tdialog.trigger('changeType', {
\t\t\t\t\t\t\t\t\t\t\textention: ext,
\t\t\t\t\t\t\t\t\t\t\tmime : mime
\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\tdraw(url);
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\tdraw(url);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tonClose: function() {
\t\t\t\t\t\t\t\tdialog.removeClass(fm.res('class', 'preventback'));
\t\t\t\t\t\t\t\tfm.toggleMaximize(container, false);
\t\t\t\t\t\t\t\tcontainer.hide();
\t\t\t\t\t\t\t\tfm.toFront(dialog);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}, self.confObj.editorOpts);
\t\t\t\t\t\t// trigger event 'editEditorPrepare'
\t\t\t\t\t\tself.trigger('Prepare', {
\t\t\t\t\t\t\tnode: base,
\t\t\t\t\t\t\teditorObj: Pixo,
\t\t\t\t\t\t\tinstance: void(0),
\t\t\t\t\t\t\topts: opts
\t\t\t\t\t\t});
\t\t\t\t\t\t// make editor instance
\t\t\t\t\t\teditor = new Pixo.Bridge(opts);
\t\t\t\t\t\tdfrd.resolve(editor);
\t\t\t\t\t\t\$base.on('saveAsFail', launch);
\t\t\t\t\t\tif (onload) {
\t\t\t\t\t\t\tonload();
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\tlaunch = function() {
\t\t\t\t\t\tdialog.addClass(fm.res('class', 'preventback'));
\t\t\t\t\t\tfm.toggleMaximize(container, true);
\t\t\t\t\t\tfm.toFront(container);
\t\t\t\t\t\tcontainer.show().data('curhash', self.file.hash);
\t\t\t\t\t\teditor.edit(node.get(0));
\t\t\t\t\t\tnode.data('loading')(true);
\t\t\t\t\t},
\t\t\t\t\tqBase, quty, qutyTm, canvas, editor;

\t\t\t\tnode.data('loading')();

\t\t\t\t// jpeg quality controls
\t\t\t\tif (self.file.mime === 'image/jpeg') {
\t\t\t\t\tquty = \$('<input type=\"number\" class=\"ui-corner-all elfinder-resize-quality elfinder-tabstop\"/>')
\t\t\t\t\t\t.attr('min', '1')
\t\t\t\t\t\t.attr('max', '100')
\t\t\t\t\t\t.attr('title', '1 - 100')
\t\t\t\t\t\t.on('change', function() {
\t\t\t\t\t\t\tvar q = quty.val();
\t\t\t\t\t\t\tqutyTm && cancelAnimationFrame(qutyTm);
\t\t\t\t\t\t\tqutyTm = requestAnimationFrame(function() {
\t\t\t\t\t\t\t\tif (canvas) {
\t\t\t\t\t\t\t\t\tcanvas.toBlob(function(blob) {
\t\t\t\t\t\t\t\t\t\tblob && quty.next('span').text(' (' + fm.formatSize(blob.size) + ')');
\t\t\t\t\t\t\t\t\t}, 'image/jpeg', Math.max(Math.min(q, 100), 1) / 100);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});
\t\t\t\t\t\t})
\t\t\t\t\t\t.val(fm.storage('jpgQuality') || fm.option('jpgQuality'));
\t\t\t\t\tqBase = \$('<div class=\"ui-dialog-buttonset elfinder-edit-extras elfinder-edit-extras-quality\"></div>')
\t\t\t\t\t\t.hide()
\t\t\t\t\t\t.append(
\t\t\t\t\t\t\t\$('<span>').html(fm.i18n('quality') + ' : '), quty, \$('<span></span>')
\t\t\t\t\t\t)
\t\t\t\t\t\t.prependTo(\$base.parent().next());
\t\t\t\t\t\$base.data('quty', quty);
\t\t\t\t}

\t\t\t\t// load script then init
\t\t\t\tif (typeof Pixo === 'undefined') {
\t\t\t\t\tfm.loadScript(['https://pixoeditor.com:8443/editor/scripts/bridge.m.js'], function() {
\t\t\t\t\t\tinit(launch);
\t\t\t\t\t}, {loadType: 'tag'});
\t\t\t\t} else {
\t\t\t\t\tinit();
\t\t\t\t\tlaunch();
\t\t\t\t}
\t\t\t\treturn dfrd;
\t\t\t},
\t\t\t// Convert content url to data uri scheme to save content
\t\t\tsave : function(base) {
\t\t\t\tvar self = this,
\t\t\t\t\t\$base = \$(base),
\t\t\t\t\tnode = \$base.children('img:first'),
\t\t\t\t\tq;
\t\t\t\tif (base._canvas) {
\t\t\t\t\tif (\$base.data('quty')) {
\t\t\t\t\t\tq = \$base.data('quty').val();
\t\t\t\t\t\tq && this.fm.storage('jpgQuality', q);
\t\t\t\t\t}
\t\t\t\t\tnode.attr('src', base._canvas.toDataURL(self.file.mime, q? Math.max(Math.min(q, 100), 1) / 100 : void(0)));
\t\t\t\t} else if (node.attr('src').substr(0, 5) !== 'data:') {
\t\t\t\t\tnode.attr('src', imgBase64(node, this.file.mime));
\t\t\t\t}
\t\t\t},
\t\t\tclose : function(base, editor) {
\t\t\t\teditor && editor.destroy();
\t\t\t}
\t\t},
\t\t{
\t\t\t// ACE Editor
\t\t\t// called on initialization of elFinder cmd edit (this: this editor's config object)
\t\t\tsetup : function(opts, fm) {
\t\t\t\tif (fm.UA.ltIE8 || !fm.options.cdns.ace) {
\t\t\t\t\tthis.disabled = true;
\t\t\t\t}
\t\t\t},
\t\t\t// `mimes` is not set for support everything kind of text file
\t\t\tinfo : {
\t\t\t\tid : 'aceeditor',
\t\t\t\tname : 'ACE Editor',
\t\t\t\ticonImg : 'img/editor-icons.png 0 -96'
\t\t\t},
\t\t\tload : function(textarea) {
\t\t\t\tvar self = this,
\t\t\t\t\tfm   = this.fm,
\t\t\t\t\tdfrd = \$.Deferred(),
\t\t\t\t\tcdn  = fm.options.cdns.ace,
\t\t\t\t\tstart = function() {
\t\t\t\t\t\tvar editor, editorBase, mode,
\t\t\t\t\t\tta = \$(textarea),
\t\t\t\t\t\ttaBase = ta.parent(),
\t\t\t\t\t\tdialog = taBase.parent(),
\t\t\t\t\t\tid = textarea.id + '_ace',
\t\t\t\t\t\text = self.file.name.replace(/^.+\\.([^.]+)|(.+)\$/, '\$1\$2').toLowerCase(),
\t\t\t\t\t\t// MIME/mode map
\t\t\t\t\t\tmimeMode = {
\t\t\t\t\t\t\t'text/x-php'\t\t\t  : 'php',
\t\t\t\t\t\t\t'application/x-php'\t\t  : 'php',
\t\t\t\t\t\t\t'text/html'\t\t\t\t  : 'html',
\t\t\t\t\t\t\t'application/xhtml+xml'\t  : 'html',
\t\t\t\t\t\t\t'text/javascript'\t\t  : 'javascript',
\t\t\t\t\t\t\t'application/javascript'  : 'javascript',
\t\t\t\t\t\t\t'text/css'\t\t\t\t  : 'css',
\t\t\t\t\t\t\t'text/x-c'\t\t\t\t  : 'c_cpp',
\t\t\t\t\t\t\t'text/x-csrc'\t\t\t  : 'c_cpp',
\t\t\t\t\t\t\t'text/x-chdr'\t\t\t  : 'c_cpp',
\t\t\t\t\t\t\t'text/x-c++'\t\t\t  : 'c_cpp',
\t\t\t\t\t\t\t'text/x-c++src'\t\t\t  : 'c_cpp',
\t\t\t\t\t\t\t'text/x-c++hdr'\t\t\t  : 'c_cpp',
\t\t\t\t\t\t\t'text/x-shellscript'\t  : 'sh',
\t\t\t\t\t\t\t'application/x-csh'\t\t  : 'sh',
\t\t\t\t\t\t\t'text/x-python'\t\t\t  : 'python',
\t\t\t\t\t\t\t'text/x-java'\t\t\t  : 'java',
\t\t\t\t\t\t\t'text/x-java-source'\t  : 'java',
\t\t\t\t\t\t\t'text/x-ruby'\t\t\t  : 'ruby',
\t\t\t\t\t\t\t'text/x-perl'\t\t\t  : 'perl',
\t\t\t\t\t\t\t'application/x-perl'\t  : 'perl',
\t\t\t\t\t\t\t'text/x-sql'\t\t\t  : 'sql',
\t\t\t\t\t\t\t'text/xml'\t\t\t\t  : 'xml',
\t\t\t\t\t\t\t'application/docbook+xml' : 'xml',
\t\t\t\t\t\t\t'application/xml'\t\t  : 'xml'
\t\t\t\t\t\t};

\t\t\t\t\t\t// set base height
\t\t\t\t\t\ttaBase.height(taBase.height());

\t\t\t\t\t\t// set basePath of ace
\t\t\t\t\t\tace.config.set('basePath', cdn);

\t\t\t\t\t\t// Base node of Ace editor
\t\t\t\t\t\teditorBase = \$('<div id=\"'+id+'\" style=\"width:100%; height:100%;\"></div>').text(ta.val()).insertBefore(ta.hide());

\t\t\t\t\t\t// Editor flag
\t\t\t\t\t\tta.data('ace', true);

\t\t\t\t\t\t// Aceeditor instance
\t\t\t\t\t\teditor = ace.edit(id);

\t\t\t\t\t\t// Ace editor configure
\t\t\t\t\t\teditor.\$blockScrolling = Infinity;
\t\t\t\t\t\teditor.setOptions({
\t\t\t\t\t\t\ttheme: 'ace/theme/monokai',
\t\t\t\t\t\t\tfontSize: '14px',
\t\t\t\t\t\t\twrap: true,
\t\t\t\t\t\t});
\t\t\t\t\t\tace.config.loadModule('ace/ext/modelist', function() {
\t\t\t\t\t\t\t// detect mode
\t\t\t\t\t\t\tmode = ace.require('ace/ext/modelist').getModeForPath('/' + self.file.name).name;
\t\t\t\t\t\t\tif (mode === 'text') {
\t\t\t\t\t\t\t\tif (mimeMode[self.file.mime]) {
\t\t\t\t\t\t\t\t\tmode = mimeMode[self.file.mime];
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t// show MIME:mode in title bar
\t\t\t\t\t\t\ttaBase.prev().children('.elfinder-dialog-title').append(' (' + self.file.mime + ' : ' + mode.split(/[\\/\\\\]/).pop() + ')');
\t\t\t\t\t\t\teditor.setOptions({
\t\t\t\t\t\t\t\tmode: 'ace/mode/' + mode
\t\t\t\t\t\t\t});
\t\t\t\t\t\t\tif (dfrd.state() === 'resolved') {
\t\t\t\t\t\t\t\tdialog.trigger('resize');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t\tace.config.loadModule('ace/ext/language_tools', function() {
\t\t\t\t\t\t\tace.require('ace/ext/language_tools');
\t\t\t\t\t\t\teditor.setOptions({
\t\t\t\t\t\t\t\tenableBasicAutocompletion: true,
\t\t\t\t\t\t\t\tenableSnippets: true,
\t\t\t\t\t\t\t\tenableLiveAutocompletion: false
\t\t\t\t\t\t\t});
\t\t\t\t\t\t});
\t\t\t\t\t\tace.config.loadModule('ace/ext/settings_menu', function() {
\t\t\t\t\t\t\tace.require('ace/ext/settings_menu').init(editor);
\t\t\t\t\t\t});
\t\t\t\t\t\t
\t\t\t\t\t\t// Short cuts
\t\t\t\t\t\teditor.commands.addCommand({
\t\t\t\t\t\t\tname : \"saveFile\",
\t\t\t\t\t\t\tbindKey: {
\t\t\t\t\t\t\t\twin : 'Ctrl-s',
\t\t\t\t\t\t\t\tmac : 'Command-s'
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\texec: function(editor) {
\t\t\t\t\t\t\t\tself.doSave();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t\teditor.commands.addCommand({
\t\t\t\t\t\t\tname : \"closeEditor\",
\t\t\t\t\t\t\tbindKey: {
\t\t\t\t\t\t\t\twin : 'Ctrl-w|Ctrl-q',
\t\t\t\t\t\t\t\tmac : 'Command-w|Command-q'
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\texec: function(editor) {
\t\t\t\t\t\t\t\tself.doCancel();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});

\t\t\t\t\t\teditor.resize();

\t\t\t\t\t\t// TextArea button and Setting button
\t\t\t\t\t\t\$('<div class=\"ui-dialog-buttonset\"></div>').css('float', 'left')
\t\t\t\t\t\t.append(
\t\t\t\t\t\t\t\$('<button></button>').html(self.fm.i18n('TextArea'))
\t\t\t\t\t\t\t.button()
\t\t\t\t\t\t\t.on('click', function(){
\t\t\t\t\t\t\t\tif (ta.data('ace')) {
\t\t\t\t\t\t\t\t\tta.removeData('ace');
\t\t\t\t\t\t\t\t\teditorBase.hide();
\t\t\t\t\t\t\t\t\tta.val(editor.session.getValue()).show().trigger('focus');
\t\t\t\t\t\t\t\t\t\$(this).text('AceEditor');
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\tta.data('ace', true);
\t\t\t\t\t\t\t\t\teditorBase.show();
\t\t\t\t\t\t\t\t\teditor.setValue(ta.hide().val(), -1);
\t\t\t\t\t\t\t\t\teditor.focus();
\t\t\t\t\t\t\t\t\t\$(this).html(self.fm.i18n('TextArea'));
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t})
\t\t\t\t\t\t)
\t\t\t\t\t\t.append(
\t\t\t\t\t\t\t\$('<button>Ace editor setting</button>')
\t\t\t\t\t\t\t.button({
\t\t\t\t\t\t\t\ticons: {
\t\t\t\t\t\t\t\t\tprimary: 'ui-icon-gear',
\t\t\t\t\t\t\t\t\tsecondary: 'ui-icon-triangle-1-e'
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\ttext: false
\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t.on('click', function(){
\t\t\t\t\t\t\t\teditor.showSettingsMenu();
\t\t\t\t\t\t\t\t\$('#ace_settingsmenu')
\t\t\t\t\t\t\t\t\t.css('font-size', '80%')
\t\t\t\t\t\t\t\t\t.find('div[contains=\"setOptions\"]').hide().end()
\t\t\t\t\t\t\t\t\t.parent().appendTo(\$('#elfinder'));
\t\t\t\t\t\t\t})
\t\t\t\t\t\t)
\t\t\t\t\t\t.prependTo(taBase.next());

\t\t\t\t\t\t// trigger event 'editEditorPrepare'
\t\t\t\t\t\tself.trigger('Prepare', {
\t\t\t\t\t\t\tnode: textarea,
\t\t\t\t\t\t\teditorObj: ace,
\t\t\t\t\t\t\tinstance: editor,
\t\t\t\t\t\t\topts: {}
\t\t\t\t\t\t});
\t\t\t\t\t\t
\t\t\t\t\t\t//dialog.trigger('resize');
\t\t\t\t\t\tdfrd.resolve(editor);
\t\t\t\t\t};

\t\t\t\t// check ace & start
\t\t\t\tif (!self.confObj.loader) {
\t\t\t\t\tself.confObj.loader = \$.Deferred();
\t\t\t\t\tself.fm.loadScript([ cdn+'/ace.js' ], function() {
\t\t\t\t\t\tself.confObj.loader.resolve();
\t\t\t\t\t}, void 0, {obj: window, name: 'ace'});
\t\t\t\t}
\t\t\t\tself.confObj.loader.done(start);

\t\t\t\treturn dfrd;
\t\t\t},
\t\t\tclose : function(textarea, instance) {
\t\t\t\tinstance && instance.destroy();
\t\t\t},
\t\t\tsave : function(textarea, instance) {
\t\t\t\tinstance && \$(textarea).data('ace') && (textarea.value = instance.session.getValue());
\t\t\t},
\t\t\tfocus : function(textarea, instance) {
\t\t\t\tinstance && \$(textarea).data('ace') && instance.focus();
\t\t\t},
\t\t\tresize : function(textarea, instance, e, data) {
\t\t\t\tinstance && instance.resize();
\t\t\t}
\t\t},
\t\t{
\t\t\t// CodeMirror
\t\t\t// called on initialization of elFinder cmd edit (this: this editor's config object)
\t\t\tsetup : function(opts, fm) {
\t\t\t\tif (fm.UA.ltIE10 || !fm.options.cdns.codemirror) {
\t\t\t\t\tthis.disabled = true;
\t\t\t\t}
\t\t\t},
\t\t\t// `mimes` is not set for support everything kind of text file
\t\t\tinfo : {
\t\t\t\tid : 'codemirror',
\t\t\t\tname : 'CodeMirror',
\t\t\t\ticonImg : 'img/editor-icons.png 0 -176'
\t\t\t},
\t\t\tload : function(textarea) {
\t\t\t\tvar fm = this.fm,
\t\t\t\t\tcmUrl = fm.convAbsUrl(fm.options.cdns.codemirror),
\t\t\t\t\tdfrd = \$.Deferred(),
\t\t\t\t\tself = this,
\t\t\t\t\tstart = function(CodeMirror) {
\t\t\t\t\t\tvar ta   = \$(textarea),
\t\t\t\t\t\t\tbase = ta.parent(),
\t\t\t\t\t\t\teditor, editorBase, opts;
\t\t\t\t\t\t
\t\t\t\t\t\t// set base height
\t\t\t\t\t\tbase.height(base.height());
\t\t\t\t\t\t
\t\t\t\t\t\t// CodeMirror configure options
\t\t\t\t\t\topts = {
\t\t\t\t\t\t\tlineNumbers: true,
\t\t\t\t\t\t\tlineWrapping: true,
\t\t\t\t\t\t\textraKeys : {
\t\t\t\t\t\t\t\t'Ctrl-S': function() { self.doSave(); },
\t\t\t\t\t\t\t\t'Ctrl-Q': function() { self.doCancel(); },
\t\t\t\t\t\t\t\t'Ctrl-W': function() { self.doCancel(); }
\t\t\t\t\t\t\t}
\t\t\t\t\t\t};

\t\t\t\t\t\t// trigger event 'editEditorPrepare'
\t\t\t\t\t\tself.trigger('Prepare', {
\t\t\t\t\t\t\tnode: textarea,
\t\t\t\t\t\t\teditorObj: CodeMirror,
\t\t\t\t\t\t\tinstance: void(0),
\t\t\t\t\t\t\topts: opts
\t\t\t\t\t\t});

\t\t\t\t\t\t// CodeMirror configure
\t\t\t\t\t\teditor = CodeMirror.fromTextArea(textarea, opts);
\t\t\t\t\t\t
\t\t\t\t\t\t// return editor instance
\t\t\t\t\t\tdfrd.resolve(editor);
\t\t\t\t\t\t
\t\t\t\t\t\t// Auto mode set
\t\t\t\t\t\tvar info, m, mode, spec;
\t\t\t\t\t\tif (! info) {
\t\t\t\t\t\t\tinfo = CodeMirror.findModeByMIME(self.file.mime);
\t\t\t\t\t\t}
\t\t\t\t\t\tif (! info && (m = self.file.name.match(/.+\\.([^.]+)\$/))) {
\t\t\t\t\t\t\tinfo = CodeMirror.findModeByExtension(m[1]);
\t\t\t\t\t\t}
\t\t\t\t\t\tif (info) {
\t\t\t\t\t\t\tCodeMirror.modeURL = useRequire? 'codemirror/mode/%N/%N.min' : cmUrl + '/mode/%N/%N.min.js';
\t\t\t\t\t\t\tmode = info.mode;
\t\t\t\t\t\t\tspec = info.mime;
\t\t\t\t\t\t\teditor.setOption('mode', spec);
\t\t\t\t\t\t\tCodeMirror.autoLoadMode(editor, mode);
\t\t\t\t\t\t\t// show MIME:mode in title bar
\t\t\t\t\t\t\tbase.prev().children('.elfinder-dialog-title').append(' (' + spec + (mode != 'null'? ' : ' + mode : '') + ')');
\t\t\t\t\t\t}
\t\t\t\t\t\t
\t\t\t\t\t\t// editor base node
\t\t\t\t\t\teditorBase = \$(editor.getWrapperElement()).css({
\t\t\t\t\t\t\t// fix CSS conflict to SimpleMDE
\t\t\t\t\t\t\tpadding: 0,
\t\t\t\t\t\t\tborder: 'none'
\t\t\t\t\t\t});
\t\t\t\t\t\tta.data('cm', true);
\t\t\t\t\t\t
\t\t\t\t\t\t// fit height to base
\t\t\t\t\t\teditorBase.height('100%');
\t\t\t\t\t\t
\t\t\t\t\t\t// TextArea button and Setting button
\t\t\t\t\t\t\$('<div class=\"ui-dialog-buttonset\"></div>').css('float', 'left')
\t\t\t\t\t\t.append(
\t\t\t\t\t\t\t\$('<button></button>').html(self.fm.i18n('TextArea'))
\t\t\t\t\t\t\t.button()
\t\t\t\t\t\t\t.on('click', function(){
\t\t\t\t\t\t\t\tif (ta.data('cm')) {
\t\t\t\t\t\t\t\t\tta.removeData('cm');
\t\t\t\t\t\t\t\t\teditorBase.hide();
\t\t\t\t\t\t\t\t\tta.val(editor.getValue()).show().trigger('focus');
\t\t\t\t\t\t\t\t\t\$(this).text('CodeMirror');
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\tta.data('cm', true);
\t\t\t\t\t\t\t\t\teditorBase.show();
\t\t\t\t\t\t\t\t\teditor.setValue(ta.hide().val());
\t\t\t\t\t\t\t\t\teditor.refresh();
\t\t\t\t\t\t\t\t\teditor.focus();
\t\t\t\t\t\t\t\t\t\$(this).html(self.fm.i18n('TextArea'));
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t})
\t\t\t\t\t\t)
\t\t\t\t\t\t.prependTo(base.next());
\t\t\t\t\t};
\t\t\t\t// load script then start
\t\t\t\tif (!self.confObj.loader) {
\t\t\t\t\tself.confObj.loader = \$.Deferred();
\t\t\t\t\tif (useRequire) {
\t\t\t\t\t\trequire.config({
\t\t\t\t\t\t\tpackages: [{
\t\t\t\t\t\t\t\tname: 'codemirror',
\t\t\t\t\t\t\t\tlocation: cmUrl,
\t\t\t\t\t\t\t\tmain: 'codemirror.min'
\t\t\t\t\t\t\t}],
\t\t\t\t\t\t\tmap: {
\t\t\t\t\t\t\t\t'codemirror': {
\t\t\t\t\t\t\t\t\t'codemirror/lib/codemirror': 'codemirror'
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t\trequire([
\t\t\t\t\t\t\t'codemirror',
\t\t\t\t\t\t\t'codemirror/addon/mode/loadmode.min',
\t\t\t\t\t\t\t'codemirror/mode/meta.min'
\t\t\t\t\t\t], function(CodeMirror) {
\t\t\t\t\t\t\tself.confObj.loader.resolve(CodeMirror);
\t\t\t\t\t\t});
\t\t\t\t\t} else {
\t\t\t\t\t\tself.fm.loadScript([
\t\t\t\t\t\t\tcmUrl + '/codemirror.min.js'
\t\t\t\t\t\t], function() {
\t\t\t\t\t\t\tself.fm.loadScript([
\t\t\t\t\t\t\t\tcmUrl + '/addon/mode/loadmode.min.js',
\t\t\t\t\t\t\t\tcmUrl + '/mode/meta.min.js'
\t\t\t\t\t\t\t], function() {
\t\t\t\t\t\t\t\tself.confObj.loader.resolve(CodeMirror);
\t\t\t\t\t\t\t});
\t\t\t\t\t\t}, {loadType: 'tag'});
\t\t\t\t\t}
\t\t\t\t\tself.fm.loadCss(cmUrl + '/codemirror.css');
\t\t\t\t}
\t\t\t\tself.confObj.loader.done(start);
\t\t\t\treturn dfrd;
\t\t\t},
\t\t\tclose : function(textarea, instance) {
\t\t\t\tinstance && instance.toTextArea();
\t\t\t},
\t\t\tsave : function(textarea, instance) {
\t\t\t\tinstance && \$(textarea).data('cm') && (textarea.value = instance.getValue());
\t\t\t},
\t\t\tfocus : function(textarea, instance) {
\t\t\t\tinstance && \$(textarea).data('cm') && instance.focus();
\t\t\t},
\t\t\tresize : function(textarea, instance, e, data) {
\t\t\t\tinstance && instance.refresh();
\t\t\t}
\t\t},
\t\t{
\t\t\t// SimpleMDE
\t\t\t// called on initialization of elFinder cmd edit (this: this editor's config object)
\t\t\tsetup : function(opts, fm) {
\t\t\t\tif (fm.UA.ltIE10 || !fm.options.cdns.simplemde) {
\t\t\t\t\tthis.disabled = true;
\t\t\t\t}
\t\t\t},
\t\t\tinfo : {
\t\t\t\tid : 'simplemde',
\t\t\t\tname : 'SimpleMDE',
\t\t\t\ticonImg : 'img/editor-icons.png 0 -80'
\t\t\t},
\t\t\texts  : ['md'],
\t\t\tload : function(textarea) {
\t\t\t\tvar self = this,
\t\t\t\t\tfm   = this.fm,
\t\t\t\t\tbase = \$(textarea).parent(),
\t\t\t\t\tdfrd = \$.Deferred(),
\t\t\t\t\tcdn  = fm.options.cdns.simplemde,
\t\t\t\t\tstart = function(SimpleMDE) {
\t\t\t\t\t\tvar h\t = base.height(),
\t\t\t\t\t\t\tdelta = base.outerHeight(true) - h + 14,
\t\t\t\t\t\t\teditor, editorBase, opts;
\t\t\t\t\t\t
\t\t\t\t\t\t// fit height function
\t\t\t\t\t\ttextarea._setHeight = function(height) {
\t\t\t\t\t\t\tvar h\t= height || base.height(),
\t\t\t\t\t\t\t\tctrH = 0,
\t\t\t\t\t\t\t\tareaH;
\t\t\t\t\t\t\tbase.children('.editor-toolbar,.editor-statusbar').each(function() {
\t\t\t\t\t\t\t\tctrH += \$(this).outerHeight(true);
\t\t\t\t\t\t\t});
\t\t\t\t\t\t\tareaH = h - ctrH - delta;
\t\t\t\t\t\t\teditorBase.height(areaH);
\t\t\t\t\t\t\teditor.codemirror.refresh();
\t\t\t\t\t\t\treturn areaH;
\t\t\t\t\t\t};
\t\t\t\t\t\t
\t\t\t\t\t\t// set base height
\t\t\t\t\t\tbase.height(h);
\t\t\t\t\t\t
\t\t\t\t\t\topts = {
\t\t\t\t\t\t\telement: textarea,
\t\t\t\t\t\t\tautofocus: true
\t\t\t\t\t\t};

\t\t\t\t\t\t// trigger event 'editEditorPrepare'
\t\t\t\t\t\tself.trigger('Prepare', {
\t\t\t\t\t\t\tnode: textarea,
\t\t\t\t\t\t\teditorObj: SimpleMDE,
\t\t\t\t\t\t\tinstance: void(0),
\t\t\t\t\t\t\topts: opts
\t\t\t\t\t\t});

\t\t\t\t\t\t// make editor
\t\t\t\t\t\teditor = new SimpleMDE(opts);
\t\t\t\t\t\tdfrd.resolve(editor);
\t\t\t\t\t\t
\t\t\t\t\t\t// editor base node
\t\t\t\t\t\teditorBase = \$(editor.codemirror.getWrapperElement());
\t\t\t\t\t\t
\t\t\t\t\t\t// fit height to base
\t\t\t\t\t\teditorBase.css('min-height', '50px')
\t\t\t\t\t\t\t.children('.CodeMirror-scroll').css('min-height', '50px');
\t\t\t\t\t\ttextarea._setHeight(h);
\t\t\t\t\t};

\t\t\t\t// check SimpleMDE & start
\t\t\t\tif (!self.confObj.loader) {
\t\t\t\t\tself.confObj.loader = \$.Deferred();
\t\t\t\t\tself.fm.loadCss(cdn+'/simplemde.min.css');
\t\t\t\t\tif (useRequire) {
\t\t\t\t\t\trequire([
\t\t\t\t\t\t\tcdn+'/simplemde.min.js'
\t\t\t\t\t\t], function(SimpleMDE) {
\t\t\t\t\t\t\tself.confObj.loader.resolve(SimpleMDE);
\t\t\t\t\t\t});
\t\t\t\t\t} else {
\t\t\t\t\t\tself.fm.loadScript([cdn+'/simplemde.min.js'], function() {
\t\t\t\t\t\t\tself.confObj.loader.resolve(SimpleMDE);
\t\t\t\t\t\t}, {loadType: 'tag'});
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\tself.confObj.loader.done(start);

\t\t\t\treturn dfrd;
\t\t\t},
\t\t\tclose : function(textarea, instance) {
\t\t\t\tinstance && instance.toTextArea();
\t\t\t\tinstance = null;
\t\t\t},
\t\t\tsave : function(textarea, instance) {
\t\t\t\tinstance && (textarea.value = instance.value());
\t\t\t},
\t\t\tfocus : function(textarea, instance) {
\t\t\t\tinstance && instance.codemirror.focus();
\t\t\t},
\t\t\tresize : function(textarea, instance, e, data) {
\t\t\t\tinstance && textarea._setHeight();
\t\t\t}
\t\t},
\t\t{
\t\t\t// CKEditor for html file
\t\t\tinfo : {
\t\t\t\tid : 'ckeditor',
\t\t\t\tname : 'CKEditor',
\t\t\t\ticonImg : 'img/editor-icons.png 0 0'
\t\t\t},
\t\t\texts  : ['htm', 'html', 'xhtml'],
\t\t\tsetup : function(opts, fm) {
\t\t\t\tvar confObj = this;
\t\t\t\tif (!fm.options.cdns.ckeditor) {
\t\t\t\t\tconfObj.disabled = true;
\t\t\t\t} else {
\t\t\t\t\tconfObj.ckeOpts = {};
\t\t\t\t\tif (opts.extraOptions) {
\t\t\t\t\t\tconfObj.ckeOpts = Object.assign({}, opts.extraOptions.ckeditor || {});
\t\t\t\t\t\tif (opts.extraOptions.managerUrl) {
\t\t\t\t\t\t\tconfObj.managerUrl = opts.extraOptions.managerUrl;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t},
\t\t\tload : function(textarea) {
\t\t\t\tvar self = this,
\t\t\t\t\tfm   = this.fm,
\t\t\t\t\tdfrd = \$.Deferred(),
\t\t\t\t\tinit = function() {
\t\t\t\t\t\tvar base = \$(textarea).parent(),
\t\t\t\t\t\t\tdlg = base.closest('.elfinder-dialog'),
\t\t\t\t\t\t\th = base.height(),
\t\t\t\t\t\t\treg = /([&?]getfile=)[^&]+/,
\t\t\t\t\t\t\tloc = self.confObj.managerUrl || window.location.href.replace(/#.*\$/, ''),
\t\t\t\t\t\t\tname = 'ckeditor',
\t\t\t\t\t\t\topts;
\t\t\t\t\t\t
\t\t\t\t\t\t// make manager location
\t\t\t\t\t\tif (reg.test(loc)) {
\t\t\t\t\t\t\tloc = loc.replace(reg, '\$1' + name);
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tloc += '?getfile=' + name;
\t\t\t\t\t\t}
\t\t\t\t\t\t// set base height
\t\t\t\t\t\tbase.height(h);

\t\t\t\t\t\t// CKEditor configure options
\t\t\t\t\t\topts = {
\t\t\t\t\t\t\tstartupFocus : true,
\t\t\t\t\t\t\tfullPage: true,
\t\t\t\t\t\t\tallowedContent: true,
\t\t\t\t\t\t\tfilebrowserBrowseUrl : loc,
\t\t\t\t\t\t\ttoolbarCanCollapse: true,
\t\t\t\t\t\t\ttoolbarStartupExpanded: !fm.UA.Mobile,
\t\t\t\t\t\t\tremovePlugins: 'resize',
\t\t\t\t\t\t\textraPlugins: 'colorbutton,justify,docprops',
\t\t\t\t\t\t\ton: {
\t\t\t\t\t\t\t\t'instanceReady' : function(e) {
\t\t\t\t\t\t\t\t\tvar editor = e.editor;
\t\t\t\t\t\t\t\t\teditor.resize('100%', h);
\t\t\t\t\t\t\t\t\t// re-build on dom move
\t\t\t\t\t\t\t\t\tdlg.one('beforedommove.'+fm.namespace, function() {
\t\t\t\t\t\t\t\t\t\teditor.destroy();
\t\t\t\t\t\t\t\t\t}).one('dommove.'+fm.namespace, function() {
\t\t\t\t\t\t\t\t\t\tself.load(textarea).done(function(editor) {
\t\t\t\t\t\t\t\t\t\t\tself.instance = editor;
\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t// return editor instance
\t\t\t\t\t\t\t\t\tdfrd.resolve(e.editor);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t};

\t\t\t\t\t\t// trigger event 'editEditorPrepare'
\t\t\t\t\t\tself.trigger('Prepare', {
\t\t\t\t\t\t\tnode: textarea,
\t\t\t\t\t\t\teditorObj: CKEDITOR,
\t\t\t\t\t\t\tinstance: void(0),
\t\t\t\t\t\t\topts: opts
\t\t\t\t\t\t});

\t\t\t\t\t\t// CKEditor configure
\t\t\t\t\t\tCKEDITOR.replace(textarea.id, Object.assign(opts, self.confObj.ckeOpts));
\t\t\t\t\t\tCKEDITOR.on('dialogDefinition', function(e) {
\t\t\t\t\t\t\tvar dlg = e.data.definition.dialog;
\t\t\t\t\t\t\tdlg.on('show', function(e) {
\t\t\t\t\t\t\t\tfm.getUI().append(\$('.cke_dialog_background_cover')).append(this.getElement().\$);
\t\t\t\t\t\t\t});
\t\t\t\t\t\t\tdlg.on('hide', function(e) {
\t\t\t\t\t\t\t\t\$('body:first').append(\$('.cke_dialog_background_cover')).append(this.getElement().\$);
\t\t\t\t\t\t\t});
\t\t\t\t\t\t});
\t\t\t\t\t};

\t\t\t\tif (!self.confObj.loader) {
\t\t\t\t\tself.confObj.loader = \$.Deferred();
\t\t\t\t\twindow.CKEDITOR_BASEPATH = fm.options.cdns.ckeditor + '/';
\t\t\t\t\t\$.getScript(fm.options.cdns.ckeditor + '/ckeditor.js', function() {
\t\t\t\t\t\tself.confObj.loader.resolve();
\t\t\t\t\t});
\t\t\t\t}
\t\t\t\tself.confObj.loader.done(init);
\t\t\t\treturn dfrd;
\t\t\t},
\t\t\tclose : function(textarea, instance) {
\t\t\t\tinstance && instance.destroy();
\t\t\t},
\t\t\tsave : function(textarea, instance) {
\t\t\t\tinstance && (textarea.value = instance.getData());
\t\t\t},
\t\t\tfocus : function(textarea, instance) {
\t\t\t\tinstance && instance.focus();
\t\t\t},
\t\t\tresize : function(textarea, instance, e, data) {
\t\t\t\tvar self;
\t\t\t\tif (instance) {
\t\t\t\t\tif (instance.status === 'ready') {
\t\t\t\t\t\tinstance.resize('100%', \$(textarea).parent().height());
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t},
\t\t{
\t\t\t// CKEditor5 balloon mode for html file
\t\t\tinfo : {
\t\t\t\tid : 'ckeditor5',
\t\t\t\tname : 'CKEditor5',
\t\t\t\ticonImg : 'img/editor-icons.png 0 -16'
\t\t\t},
\t\t\texts : ['htm', 'html', 'xhtml'],
\t\t\thtml : '<div class=\"edit-editor-ckeditor5\"></div>',
\t\t\tsetup : function(opts, fm) {
\t\t\t\tvar confObj = this;
\t\t\t\t// check cdn and ES6 support
\t\t\t\tif (!fm.options.cdns.ckeditor5 || typeof window.Symbol !== 'function' || typeof Symbol() !== 'symbol') {
\t\t\t\t\tconfObj.disabled = true;
\t\t\t\t} else {
\t\t\t\t\tconfObj.ckeOpts = {};
\t\t\t\t\tif (opts.extraOptions) {
\t\t\t\t\t\t// @deprecated option extraOptions.ckeditor5Mode
\t\t\t\t\t\tif (opts.extraOptions.ckeditor5Mode) {
\t\t\t\t\t\t\tconfObj.ckeditor5Mode = opts.extraOptions.ckeditor5Mode;
\t\t\t\t\t\t}
\t\t\t\t\t\tconfObj.ckeOpts = Object.assign({}, opts.extraOptions.ckeditor5 || {});
\t\t\t\t\t\tif (confObj.ckeOpts.mode) {
\t\t\t\t\t\t\tconfObj.ckeditor5Mode = confObj.ckeOpts.mode;
\t\t\t\t\t\t\tdelete confObj.ckeOpts.mode;
\t\t\t\t\t\t}
\t\t\t\t\t\tif (opts.extraOptions.managerUrl) {
\t\t\t\t\t\t\tconfObj.managerUrl = opts.extraOptions.managerUrl;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\tfm.bind('destroy', function() {
\t\t\t\t\tconfObj.editor = null;
\t\t\t\t});
\t\t\t},
\t\t\t// Prepare on before show dialog
\t\t\tprepare : function(base, dialogOpts, file) {
\t\t\t\t\$(base).height(base.editor.fm.getUI().height() - 100);
\t\t\t},
\t\t\tinit : function(id, file, data, fm) {
\t\t\t\tvar m = data.match(/^([\\s\\S]*<body[^>]*>)([\\s\\S]+)(<\\/body>[\\s\\S]*)\$/i),
\t\t\t\t\theader = '',
\t\t\t\t\tbody = '',
\t\t\t\t\tfooter ='';
\t\t\t\tthis.css({
\t\t\t\t\twidth: '100%',
\t\t\t\t\theight: '100%',
\t\t\t\t\t'box-sizing': 'border-box'
\t\t\t\t});
\t\t\t\tif (m) {
\t\t\t\t\theader = m[1];
\t\t\t\t\tbody = m[2];
\t\t\t\t\tfooter = m[3];
\t\t\t\t} else {
\t\t\t\t\tbody = data;
\t\t\t\t}
\t\t\t\tthis.data('data', {
\t\t\t\t\theader: header,
\t\t\t\t\tbody: body,
\t\t\t\t\tfooter: footer
\t\t\t\t});
\t\t\t\tthis._setupSelEncoding(data);
\t\t\t},
\t\t\tload : function(editnode) {
\t\t\t\tvar self = this,
\t\t\t\t\tfm   = this.fm,
\t\t\t\t\tdfrd = \$.Deferred(),
\t\t\t\t\tmode = self.confObj.ckeditor5Mode || 'decoupled-document',
\t\t\t\t\tlang = (function() {
\t\t\t\t\t\tvar l = fm.lang.toLowerCase().replace('_', '-');
\t\t\t\t\t\tif (l.substr(0, 2) === 'zh' && l !== 'zh-cn') {
\t\t\t\t\t\t\tl = 'zh';
\t\t\t\t\t\t}
\t\t\t\t\t\treturn l;
\t\t\t\t\t})(),
\t\t\t\t\tinit = function(cEditor) {
\t\t\t\t\t\tvar base = \$(editnode).parent(),
\t\t\t\t\t\t\topts;
\t\t\t\t\t\t
\t\t\t\t\t\t// set base height
\t\t\t\t\t\tbase.height(fm.getUI().height() - 100);

\t\t\t\t\t\t// CKEditor5 configure options
\t\t\t\t\t\topts = Object.assign({
\t\t\t\t\t\t\ttoolbar: [\"heading\", \"|\", \"fontSize\", \"fontFamily\", \"|\", \"bold\", \"italic\", \"underline\", \"strikethrough\", \"highlight\", \"|\", \"alignment\", \"|\", \"numberedList\", \"bulletedList\", \"blockQuote\", \"indent\", \"outdent\", \"|\", \"ckfinder\", \"link\", \"imageUpload\", \"insertTable\", \"mediaEmbed\", \"|\", \"undo\", \"redo\"],
\t\t\t\t\t\t\tlanguage: lang
\t\t\t\t\t\t}, self.confObj.ckeOpts);

\t\t\t\t\t\t// trigger event 'editEditorPrepare'
\t\t\t\t\t\tself.trigger('Prepare', {
\t\t\t\t\t\t\tnode: editnode,
\t\t\t\t\t\t\teditorObj: cEditor,
\t\t\t\t\t\t\tinstance: void(0),
\t\t\t\t\t\t\topts: opts
\t\t\t\t\t\t});

\t\t\t\t\t\tcEditor
\t\t\t\t\t\t\t.create(editnode, opts)
\t\t\t\t\t\t\t.then(function(editor) {
\t\t\t\t\t\t\t\tvar ckf = editor.commands.get('ckfinder'),
\t\t\t\t\t\t\t\t\tfileRepo = editor.plugins.get('FileRepository'),
\t\t\t\t\t\t\t\t\tprevVars = {}, isImage, insertImages;
\t\t\t\t\t\t\t\tif (editor.ui.view.toolbar && (mode === 'classic' || mode === 'decoupled-document')) {
\t\t\t\t\t\t\t\t\t\$(editnode).closest('.elfinder-dialog').children('.ui-widget-header').append(\$(editor.ui.view.toolbar.element).css({marginRight:'-1em',marginLeft:'-1em'}));
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tif (mode === 'classic') {
\t\t\t\t\t\t\t\t\t\$(editnode).closest('.elfinder-edit-editor').css('overflow', 'auto');
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t// Set up this elFinder instead of CKFinder
\t\t\t\t\t\t\t\tif (ckf) {
\t\t\t\t\t\t\t\t\tisImage = function(f) {
\t\t\t\t\t\t\t\t\t\treturn f && f.mime.match(/^image\\//i);
\t\t\t\t\t\t\t\t\t};
\t\t\t\t\t\t\t\t\tinsertImages = function(urls) {
\t\t\t\t\t\t\t\t\t\tvar imgCmd = editor.commands.get('imageUpload');
\t\t\t\t\t\t\t\t\t\tif (!imgCmd.isEnabled) {
\t\t\t\t\t\t\t\t\t\t\tvar ntf = editor.plugins.get('Notification'),
\t\t\t\t\t\t\t\t\t\t\t\ti18 = editor.locale.t;
\t\t\t\t\t\t\t\t\t\t\tntf.showWarning(i18('Could not insert image at the current position.'), {
\t\t\t\t\t\t\t\t\t\t\t\ttitle: i18('Inserting image failed'),
\t\t\t\t\t\t\t\t\t\t\t\tnamespace: 'ckfinder'
\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\teditor.execute('imageInsert', { source: urls });
\t\t\t\t\t\t\t\t\t};
\t\t\t\t\t\t\t\t\t// Take over ckfinder execute()
\t\t\t\t\t\t\t\t\tckf.execute = function() {
\t\t\t\t\t\t\t\t\t\tvar dlg = base.closest('.elfinder-dialog'),
\t\t\t\t\t\t\t\t\t\t\tgf = fm.getCommand('getfile'),
\t\t\t\t\t\t\t\t\t\t\trever = function() {
\t\t\t\t\t\t\t\t\t\t\t\tif (prevVars.hasVar) {
\t\t\t\t\t\t\t\t\t\t\t\t\tdlg.off('resize close', rever);
\t\t\t\t\t\t\t\t\t\t\t\t\tgf.callback = prevVars.callback;
\t\t\t\t\t\t\t\t\t\t\t\t\tgf.options.folders = prevVars.folders;
\t\t\t\t\t\t\t\t\t\t\t\t\tgf.options.multiple = prevVars.multi;
\t\t\t\t\t\t\t\t\t\t\t\t\tfm.commandMap.open = prevVars.open;
\t\t\t\t\t\t\t\t\t\t\t\t\tprevVars.hasVar = false;
\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t};
\t\t\t\t\t\t\t\t\t\tdlg.trigger('togleminimize').one('resize close', rever);
\t\t\t\t\t\t\t\t\t\tprevVars.callback = gf.callback;
\t\t\t\t\t\t\t\t\t\tprevVars.folders = gf.options.folders;
\t\t\t\t\t\t\t\t\t\tprevVars.multi = gf.options.multiple;
\t\t\t\t\t\t\t\t\t\tprevVars.open = fm.commandMap.open;
\t\t\t\t\t\t\t\t\t\tprevVars.hasVar = true;
\t\t\t\t\t\t\t\t\t\tgf.callback = function(files) {
\t\t\t\t\t\t\t\t\t\t\tvar imgs = [];
\t\t\t\t\t\t\t\t\t\t\tif (files.length === 1 && files[0].mime === 'directory') {
\t\t\t\t\t\t\t\t\t\t\t\tfm.one('open', function() {
\t\t\t\t\t\t\t\t\t\t\t\t\tfm.commandMap.open = 'getfile';
\t\t\t\t\t\t\t\t\t\t\t\t}).getCommand('open').exec(files[0].hash);
\t\t\t\t\t\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\tfm.getUI('cwd').trigger('unselectall');
\t\t\t\t\t\t\t\t\t\t\t\$.each(files, function(i, f) {
\t\t\t\t\t\t\t\t\t\t\t\tif (isImage(f)) {
\t\t\t\t\t\t\t\t\t\t\t\t\timgs.push(fm.convAbsUrl(f.url));
\t\t\t\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\t\t\t\teditor.execute('link', fm.convAbsUrl(f.url));
\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\tif (imgs.length) {
\t\t\t\t\t\t\t\t\t\t\t\tinsertImages(imgs);
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\tdlg.trigger('togleminimize');
\t\t\t\t\t\t\t\t\t\t};
\t\t\t\t\t\t\t\t\t\tgf.options.folders = true;
\t\t\t\t\t\t\t\t\t\tgf.options.multiple = true;
\t\t\t\t\t\t\t\t\t\tfm.commandMap.open = 'getfile';
\t\t\t\t\t\t\t\t\t\tfm.toast({
\t\t\t\t\t\t\t\t\t\t\tmode: 'info',
\t\t\t\t\t\t\t\t\t\t\tmsg: fm.i18n('dblclickToSelect')
\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t};
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t// Set up image uploader
\t\t\t\t\t\t\t\tfileRepo.createUploadAdapter = function(loader) {
\t\t\t\t\t\t\t\t\treturn new uploder(loader);
\t\t\t\t\t\t\t\t};
\t\t\t\t\t\t\t\teditor.setData(\$(editnode).data('data').body);
\t\t\t\t\t\t\t\t// move .ck-body to elFinder node for fullscreen mode
\t\t\t\t\t\t\t\tfm.getUI().append(\$('body > div.ck-body'));
\t\t\t\t\t\t\t\t\$('div.ck-balloon-panel').css({
\t\t\t\t\t\t\t\t\t'z-index': fm.getMaximizeCss().zIndex + 1
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\tdfrd.resolve(editor);
\t\t\t\t\t\t\t\t/*fm.log({
\t\t\t\t\t\t\t\t\tdefaultConfig: cEditor.defaultConfig,
\t\t\t\t\t\t\t\t\tplugins: cEditor.builtinPlugins.map(function(p) { return p.pluginName; }),
\t\t\t\t\t\t\t\t\ttoolbars: Array.from(editor.ui.componentFactory.names())
\t\t\t\t\t\t\t\t});*/
\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t['catch'](function(error) { // ['cache'] instead .cache for fix error on ie8 
\t\t\t\t\t\t\t\tfm.error(error);
\t\t\t\t\t\t\t});
\t\t\t\t\t},
\t\t\t\t\tuploder = function(loader) {
\t\t\t\t\t\tvar upload = function(file, resolve, reject) {
\t\t\t\t\t\t\tfm.exec('upload', {files: [file]}, void(0), fm.cwd().hash)
\t\t\t\t\t\t\t\t.done(function(data){
\t\t\t\t\t\t\t\t\tif (data.added && data.added.length) {
\t\t\t\t\t\t\t\t\t\tfm.url(data.added[0].hash, { async: true }).done(function(url) {
\t\t\t\t\t\t\t\t\t\t\tresolve({
\t\t\t\t\t\t\t\t\t\t\t\t'default': fm.convAbsUrl(url)
\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t}).fail(function() {
\t\t\t\t\t\t\t\t\t\t\treject('errFileNotFound');
\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\treject(fm.i18n(data.error? data.error : 'errUpload'));
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\t.fail(function(err) {
\t\t\t\t\t\t\t\t\tvar error = fm.parseError(err);
\t\t\t\t\t\t\t\t\treject(fm.i18n(error? (error === 'userabort'? 'errAbort' : error) : 'errUploadNoFiles'));
\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\t.progress(function(data) {
\t\t\t\t\t\t\t\t\tloader.uploadTotal = data.total;
\t\t\t\t\t\t\t\t\tloader.uploaded = data.progress;
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t};
\t\t\t\t\t\tthis.upload = function() {
\t\t\t\t\t\t\treturn new Promise(function(resolve, reject) {
\t\t\t\t\t\t\t\tif (loader.file instanceof Promise || (loader.file && typeof loader.file.then === 'function')) {
\t\t\t\t\t\t\t\t\tloader.file.then(function(file) {
\t\t\t\t\t\t\t\t\t\tupload(file, resolve, reject);
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\tupload(loader.file, resolve, reject);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});
\t\t\t\t\t\t};
\t\t\t\t\t\tthis.abort = function() {
\t\t\t\t\t\t\tfm.getUI().trigger('uploadabort');
\t\t\t\t\t\t};
\t\t\t\t\t}, loader;

\t\t\t\tif (!self.confObj.editor) {
\t\t\t\t\tloader = \$.Deferred();
\t\t\t\t\tself.fm.loadScript([
\t\t\t\t\t\tfm.options.cdns.ckeditor5 + '/' + mode + '/ckeditor.js'
\t\t\t\t\t], function(editor) {
\t\t\t\t\t\tif (!editor) {
\t\t\t\t\t\t\teditor = window.BalloonEditor || window.InlineEditor || window.ClassicEditor || window.DecoupledEditor;
\t\t\t\t\t\t}
\t\t\t\t\t\tif (fm.lang !== 'en') {
\t\t\t\t\t\t\tself.fm.loadScript([
\t\t\t\t\t\t\t\tfm.options.cdns.ckeditor5 + '/' + mode + '/translations/' + lang + '.js'
\t\t\t\t\t\t\t], function(obj) {
\t\t\t\t\t\t\t\tloader.resolve(editor);
\t\t\t\t\t\t\t}, {
\t\t\t\t\t\t\t\ttryRequire: true,
\t\t\t\t\t\t\t\tloadType: 'tag',
\t\t\t\t\t\t\t\terror: function(obj) {
\t\t\t\t\t\t\t\t\tlang = 'en';
\t\t\t\t\t\t\t\t\tloader.resolve(editor);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tloader.resolve(editor);
\t\t\t\t\t\t}
\t\t\t\t\t}, {
\t\t\t\t\t\ttryRequire: true,
\t\t\t\t\t\tloadType: 'tag'
\t\t\t\t\t});
\t\t\t\t\tloader.done(function(editor) {
\t\t\t\t\t\tself.confObj.editor = editor;
\t\t\t\t\t\tinit(editor);
\t\t\t\t\t});
\t\t\t\t} else {
\t\t\t\t\tinit(self.confObj.editor);
\t\t\t\t}
\t\t\t\treturn dfrd;
\t\t\t},
\t\t\tgetContent : function() {
\t\t\t\tvar data = \$(this).data('data');
\t\t\t\treturn data.header + data.body + data.footer;
\t\t\t},
\t\t\tclose : function(editnode, instance) {
\t\t\t\tinstance && instance.destroy();
\t\t\t},
\t\t\tsave : function(editnode, instance) {
\t\t\t\tvar elm = \$(editnode),
\t\t\t\t\tdata = elm.data('data');
\t\t\t\tif (instance) {
\t\t\t\t\tdata.body = instance.getData();
\t\t\t\t\telm.data('data', data);
\t\t\t\t}
\t\t\t},
\t\t\tfocus : function(editnode, instance) {
\t\t\t\t\$(editnode).trigger('focus');
\t\t\t}
\t\t},
\t\t{
\t\t\t// TinyMCE for html file
\t\t\tinfo : {
\t\t\t\tid : 'tinymce',
\t\t\t\tname : 'TinyMCE',
\t\t\t\ticonImg : 'img/editor-icons.png 0 -64'
\t\t\t},
\t\t\texts  : ['htm', 'html', 'xhtml'],
\t\t\tsetup : function(opts, fm) {
\t\t\t\tvar confObj = this;
\t\t\t\tif (!fm.options.cdns.tinymce) {
\t\t\t\t\tconfObj.disabled = true;
\t\t\t\t} else {
\t\t\t\t\tconfObj.mceOpts = {};
\t\t\t\t\tif (opts.extraOptions) {
\t\t\t\t\t\tconfObj.uploadOpts = Object.assign({}, opts.extraOptions.uploadOpts || {});
\t\t\t\t\t\tconfObj.mceOpts = Object.assign({}, opts.extraOptions.tinymce || {});
\t\t\t\t\t} else {
\t\t\t\t\t\tconfObj.uploadOpts = {};
\t\t\t\t\t}
\t\t\t\t}
\t\t\t},
\t\t\tload : function(textarea) {
\t\t\t\tvar self = this,
\t\t\t\t\tfm   = this.fm,
\t\t\t\t\tdfrd = \$.Deferred(),
\t\t\t\t\tinit = function() {
\t\t\t\t\t\tvar base = \$(textarea).show().parent(),
\t\t\t\t\t\t\tdlg = base.closest('.elfinder-dialog'),
\t\t\t\t\t\t\th = base.height(),
\t\t\t\t\t\t\tdelta = base.outerHeight(true) - h,
\t\t\t\t\t\t\t// hide MCE dialog and modal block
\t\t\t\t\t\t\thideMceDlg = function() {
\t\t\t\t\t\t\t\tvar mceW;
\t\t\t\t\t\t\t\tif (tinymce.activeEditor.windowManager.windows) {
\t\t\t\t\t\t\t\t\tmceW = tinymce.activeEditor.windowManager.windows[0];
\t\t\t\t\t\t\t\t\tmceDlg = \$(mceW? mceW.getEl() : void(0)).hide();
\t\t\t\t\t\t\t\t\tmceCv = \$('#mce-modal-block').hide();
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\tmceDlg = \$('.tox-dialog-wrap').hide();
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t// Show MCE dialog and modal block
\t\t\t\t\t\t\tshowMceDlg = function() {
\t\t\t\t\t\t\t\tmceCv && mceCv.show();
\t\t\t\t\t\t\t\tmceDlg && mceDlg.show();
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\ttVer = tinymce.majorVersion,
\t\t\t\t\t\t\topts, mceDlg, mceCv;

\t\t\t\t\t\t// set base height
\t\t\t\t\t\tbase.height(h);
\t\t\t\t\t\t// fit height function
\t\t\t\t\t\ttextarea._setHeight = function(height) {
\t\t\t\t\t\t\tif (tVer < 5) {
\t\t\t\t\t\t\t\tvar base = \$(this).parent(),
\t\t\t\t\t\t\t\t\th = height || base.innerHeight(),
\t\t\t\t\t\t\t\t\tctrH = 0,
\t\t\t\t\t\t\t\t\tareaH;
\t\t\t\t\t\t\t\tbase.find('.mce-container-body:first').children('.mce-top-part,.mce-statusbar').each(function() {
\t\t\t\t\t\t\t\t\tctrH += \$(this).outerHeight(true);
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\tareaH = h - ctrH - delta;
\t\t\t\t\t\t\t\tbase.find('.mce-edit-area iframe:first').height(areaH);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t};

\t\t\t\t\t\t// TinyMCE configure options
\t\t\t\t\t\topts = {
\t\t\t\t\t\t\tselector: '#' + textarea.id,
\t\t\t\t\t\t\tresize: false,
\t\t\t\t\t\t\tplugins: 'print preview fullpage searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern help',
\t\t\t\t\t\t\ttoolbar: 'formatselect | bold italic strikethrough forecolor backcolor | link image media | alignleft aligncenter alignright alignjustify | numlist bullist outdent indent | removeformat',
\t\t\t\t\t\t\timage_advtab: true,
\t\t\t\t\t\t\tinit_instance_callback : function(editor) {
\t\t\t\t\t\t\t\t// fit height on init
\t\t\t\t\t\t\t\ttextarea._setHeight(h);
\t\t\t\t\t\t\t\t// re-build on dom move
\t\t\t\t\t\t\t\tdlg.one('beforedommove.'+fm.namespace, function() {
\t\t\t\t\t\t\t\t\ttinymce.execCommand('mceRemoveEditor', false, textarea.id);
\t\t\t\t\t\t\t\t}).one('dommove.'+fm.namespace, function() {
\t\t\t\t\t\t\t\t\tself.load(textarea).done(function(editor) {
\t\t\t\t\t\t\t\t\t\tself.instance = editor;
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t// return editor instance
\t\t\t\t\t\t\t\tdfrd.resolve(editor);
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tfile_picker_callback : function (callback, value, meta) {
\t\t\t\t\t\t\t\tvar gf = fm.getCommand('getfile'),
\t\t\t\t\t\t\t\t\trevar = function() {
\t\t\t\t\t\t\t\t\t\tif (prevVars.hasVar) {
\t\t\t\t\t\t\t\t\t\t\tgf.callback = prevVars.callback;
\t\t\t\t\t\t\t\t\t\t\tgf.options.folders = prevVars.folders;
\t\t\t\t\t\t\t\t\t\t\tgf.options.multiple = prevVars.multi;
\t\t\t\t\t\t\t\t\t\t\tfm.commandMap.open = prevVars.open;
\t\t\t\t\t\t\t\t\t\t\tprevVars.hasVar = false;
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\tdlg.off('resize close', revar);
\t\t\t\t\t\t\t\t\t\tshowMceDlg();
\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\tprevVars = {};
\t\t\t\t\t\t\t\tprevVars.callback = gf.callback;
\t\t\t\t\t\t\t\tprevVars.folders = gf.options.folders;
\t\t\t\t\t\t\t\tprevVars.multi = gf.options.multiple;
\t\t\t\t\t\t\t\tprevVars.open = fm.commandMap.open;
\t\t\t\t\t\t\t\tprevVars.hasVar = true;
\t\t\t\t\t\t\t\tgf.callback = function(file) {
\t\t\t\t\t\t\t\t\tvar url, info;

\t\t\t\t\t\t\t\t\tif (file.mime === 'directory') {
\t\t\t\t\t\t\t\t\t\tfm.one('open', function() {
\t\t\t\t\t\t\t\t\t\t\tfm.commandMap.open = 'getfile';
\t\t\t\t\t\t\t\t\t\t}).getCommand('open').exec(file.hash);
\t\t\t\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t// URL normalization
\t\t\t\t\t\t\t\t\turl = fm.convAbsUrl(file.url);
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t// Make file info
\t\t\t\t\t\t\t\t\tinfo = file.name + ' (' + fm.formatSize(file.size) + ')';

\t\t\t\t\t\t\t\t\t// Provide file and text for the link dialog
\t\t\t\t\t\t\t\t\tif (meta.filetype == 'file') {
\t\t\t\t\t\t\t\t\t\tcallback(url, {text: info, title: info});
\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t// Provide image and alt text for the image dialog
\t\t\t\t\t\t\t\t\tif (meta.filetype == 'image') {
\t\t\t\t\t\t\t\t\t\tcallback(url, {alt: info});
\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t// Provide alternative source and posted for the media dialog
\t\t\t\t\t\t\t\t\tif (meta.filetype == 'media') {
\t\t\t\t\t\t\t\t\t\tcallback(url);
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\tdlg.trigger('togleminimize');
\t\t\t\t\t\t\t\t};
\t\t\t\t\t\t\t\tgf.options.folders = true;
\t\t\t\t\t\t\t\tgf.options.multiple = false;
\t\t\t\t\t\t\t\tfm.commandMap.open = 'getfile';
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\thideMceDlg();
\t\t\t\t\t\t\t\tdlg.trigger('togleminimize').one('resize close', revar);
\t\t\t\t\t\t\t\tfm.toast({
\t\t\t\t\t\t\t\t\tmode: 'info',
\t\t\t\t\t\t\t\t\tmsg: fm.i18n('dblclickToSelect')
\t\t\t\t\t\t\t\t});

\t\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\timages_upload_handler : function (blobInfo, success, failure) {
\t\t\t\t\t\t\t\tvar file = blobInfo.blob(),
\t\t\t\t\t\t\t\t\terr = function(e) {
\t\t\t\t\t\t\t\t\t\tvar dlg = e.data.dialog || {};
\t\t                                if (dlg.hasClass('elfinder-dialog-error') || dlg.hasClass('elfinder-confirm-upload')) {
\t\t                                    hideMceDlg();
\t\t                                    dlg.trigger('togleminimize').one('resize close', revert);
\t\t                                    fm.unbind('dialogopened', err);
\t\t                                }
\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\trevert = function() {
\t\t\t\t\t\t\t\t\t\tdlg.off('resize close', revert);
\t\t\t\t\t\t\t\t\t\tshowMceDlg();
\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\tclipdata = true;

\t\t\t\t\t\t\t\t// check file object
\t\t\t\t\t\t\t\tif (file.name) {
\t\t\t\t\t\t\t\t\t// file blob of client side file object
\t\t\t\t\t\t\t\t\tclipdata = void(0);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tfm.bind('dialogopened', err).exec('upload', Object.assign({
\t\t\t\t\t\t\t\t\tfiles: [file],
\t\t\t\t\t\t\t\t\tclipdata: clipdata // to get unique name on connector
\t\t\t\t\t\t\t\t}, self.confObj.uploadOpts), void(0), fm.cwd().hash).done(function(data) {
\t\t\t\t\t\t\t\t\tif (data.added && data.added.length) {
\t\t\t\t\t\t\t\t\t\tfm.url(data.added[0].hash, { async: true }).done(function(url) {
\t\t\t\t\t\t\t\t\t\t\tshowMceDlg();
\t\t\t\t\t\t\t\t\t\t\tsuccess(fm.convAbsUrl(url));
\t\t\t\t\t\t\t\t\t\t}).fail(function() {
\t\t\t\t\t\t\t\t\t\t\tfailure(fm.i18n('errFileNotFound'));
\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\tfailure(fm.i18n(data.error? data.error : 'errUpload'));
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}).fail(function(err) {
\t\t\t\t\t\t\t\t\tvar error = fm.parseError(err);
\t\t\t\t\t\t\t\t\tif (error) {
\t\t\t\t\t\t\t\t\t\tif (error === 'errUnknownCmd') {
\t\t\t\t\t\t\t\t\t\t\terror = 'errPerm';
\t\t\t\t\t\t\t\t\t\t} else if (error === 'userabort') {
\t\t\t\t\t\t\t\t\t\t\terror = 'errAbort';
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\tfailure(fm.i18n(error? error : 'errUploadNoFiles'));
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t}
\t\t\t\t\t\t};

\t\t\t\t\t\t// TinyMCE 5 supports \"height: 100%\"
\t\t\t\t\t\tif (tVer >= 5) {
\t\t\t\t\t\t\topts.height = '100%';
\t\t\t\t\t\t}

\t\t\t\t\t\t// trigger event 'editEditorPrepare'
\t\t\t\t\t\tself.trigger('Prepare', {
\t\t\t\t\t\t\tnode: textarea,
\t\t\t\t\t\t\teditorObj: tinymce,
\t\t\t\t\t\t\tinstance: void(0),
\t\t\t\t\t\t\topts: opts
\t\t\t\t\t\t});

\t\t\t\t\t\t// TinyMCE configure
\t\t\t\t\t\ttinymce.init(Object.assign(opts, self.confObj.mceOpts));
\t\t\t\t\t};
\t\t\t\t
\t\t\t\tif (!self.confObj.loader) {
\t\t\t\t\tself.confObj.loader = \$.Deferred();
\t\t\t\t\tself.fm.loadScript([fm.options.cdns.tinymce + (fm.options.cdns.tinymce.match(/\\.js/)? '' : '/tinymce.min.js')], function() {
\t\t\t\t\t\tself.confObj.loader.resolve();
\t\t\t\t\t}, {
\t\t\t\t\t\tloadType: 'tag'
\t\t\t\t\t});
\t\t\t\t}
\t\t\t\tself.confObj.loader.done(init);
\t\t\t\treturn dfrd;
\t\t\t},
\t\t\tclose : function(textarea, instance) {
\t\t\t\tinstance && tinymce.execCommand('mceRemoveEditor', false, textarea.id);
\t\t\t},
\t\t\tsave : function(textarea, instance) {
\t\t\t\tinstance && instance.save();
\t\t\t},
\t\t\tfocus : function(textarea, instance) {
\t\t\t\tinstance && instance.focus();
\t\t\t},
\t\t\tresize : function(textarea, instance, e, data) {
\t\t\t\t// fit height to base node on dialog resize
\t\t\t\tinstance && textarea._setHeight();
\t\t\t}
\t\t},
\t\t{
\t\t\tinfo : {
\t\t\t\tid : 'zohoeditor',
\t\t\t\tname : 'Zoho Editor',
\t\t\t\ticonImg : 'img/editor-icons.png 0 -32',
\t\t\t\tcmdCheck : 'ZohoOffice',
\t\t\t\tpreventGet: true,
\t\t\t\thideButtons: true,
\t\t\t\tsyncInterval : 15000,
\t\t\t\tcanMakeEmpty: true,
\t\t\t\tintegrate: {
\t\t\t\t\ttitle: 'Zoho Office API',
\t\t\t\t\tlink: 'https://www.zoho.com/officeapi/'
\t\t\t\t}
\t\t\t},
\t\t\tmimes : [
\t\t\t\t'application/msword',
\t\t\t\t'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
\t\t\t\t//'application/pdf',
\t\t\t\t'application/vnd.oasis.opendocument.text',
\t\t\t\t'application/rtf',
\t\t\t\t'text/html',
\t\t\t\t'application/vnd.ms-excel',
\t\t\t\t'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
\t\t\t\t'application/vnd.oasis.opendocument.spreadsheet',
\t\t\t\t'application/vnd.sun.xml.calc',
\t\t\t\t'text/csv',
\t\t\t\t'text/tab-separated-values',
\t\t\t\t'application/vnd.ms-powerpoint',
\t\t\t\t'application/vnd.openxmlformats-officedocument.presentationml.presentation',
\t\t\t\t'application/vnd.openxmlformats-officedocument.presentationml.slideshow',
\t\t\t\t'application/vnd.oasis.opendocument.presentation',
\t\t\t\t'application/vnd.sun.xml.impress'
\t\t\t],
\t\t\thtml : '<iframe style=\"width:100%;max-height:100%;border:none;\"></iframe>',
\t\t\t// setup on elFinder bootup
\t\t\tsetup : function(opts, fm) {
\t\t\t\tif (fm.UA.Mobile || fm.UA.ltIE8) {
\t\t\t\t\tthis.disabled = true;
\t\t\t\t}
\t\t\t},
\t\t\t// Prepare on before show dialog
\t\t\tprepare : function(base, dialogOpts, file) {
\t\t\t\tvar elfNode = base.editor.fm.getUI();
\t\t\t\t\$(base).height(elfNode.height());
\t\t\t\tdialogOpts.width = Math.max(dialogOpts.width || 0, elfNode.width() * 0.8);
\t\t\t},
\t\t\t// Initialization of editing node (this: this editors HTML node)
\t\t\tinit : function(id, file, dum, fm) {
\t\t\t\tvar ta = this,
\t\t\t\t\tifm = \$(this).hide(),
\t\t\t\t\tuiToast = fm.getUI('toast'),
\t\t\t\t\tspnr = \$('<div class=\"elfinder-edit-spinner elfinder-edit-zohoeditor\"></div>')
\t\t\t\t\t\t.html('<span class=\"elfinder-spinner-text\">' + fm.i18n('nowLoading') + '</span><span class=\"elfinder-spinner\"></span>')
\t\t\t\t\t\t.appendTo(ifm.parent()),
\t\t\t\t\tcdata = function() {
\t\t\t\t\t\tvar data = '';
\t\t\t\t\t\t\$.each(fm.customData, function(key, val) {
\t\t\t\t\t\t\tdata += '&' + encodeURIComponent(key) + '=' + encodeURIComponent(val);
\t\t\t\t\t\t});
\t\t\t\t\t\treturn data;
\t\t\t\t\t};
\t\t\t\t
\t\t\t\t\$(ta).data('xhr', fm.request({
\t\t\t\t\tdata: {
\t\t\t\t\t\tcmd: 'editor',
\t\t\t\t\t\tname: ta.editor.confObj.info.cmdCheck,
\t\t\t\t\t\tmethod: 'init',
\t\t\t\t\t\t'args[target]': file.hash,
\t\t\t\t\t\t'args[lang]' : fm.lang,
\t\t\t\t\t\t'args[cdata]' : cdata()
\t\t\t\t\t},
\t\t\t\t\tpreventDefault : true
\t\t\t\t}).done(function(data) {
\t\t\t\t\tvar opts;
\t\t\t\t\tif (data.zohourl) {
\t\t\t\t\t\topts = {
\t\t\t\t\t\t\tcss: {
\t\t\t\t\t\t\t\theight: '100%'
\t\t\t\t\t\t\t}
\t\t\t\t\t\t};
\t\t\t\t\t\t// trigger event 'editEditorPrepare'
\t\t\t\t\t\tta.editor.trigger('Prepare', {
\t\t\t\t\t\t\tnode: ta,
\t\t\t\t\t\t\teditorObj: void(0),
\t\t\t\t\t\t\tinstance: ifm,
\t\t\t\t\t\t\topts: opts
\t\t\t\t\t\t});

\t\t\t\t\t\tifm.attr('src', data.zohourl).show().css(opts.css);
\t\t\t\t\t\tif (data.warning) {
\t\t\t\t\t\t\tuiToast.appendTo(ta.closest('.ui-dialog'));
\t\t\t\t\t\t\tfm.toast({
\t\t\t\t\t\t\t\tmsg: fm.i18n(data.warning),
\t\t\t\t\t\t\t\tmode: 'warning',
\t\t\t\t\t\t\t\ttimeOut: 0,
\t\t\t\t\t\t\t\tonHidden: function() {
\t\t\t\t\t\t\t\t\tuiToast.children().length === 1 && uiToast.appendTo(fm.getUI());
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\tbutton: {
\t\t\t\t\t\t\t\t\ttext: 'btnYes'
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});
\t\t\t\t\t\t}
\t\t\t\t\t} else {
\t\t\t\t\t\tdata.error && fm.error(data.error);
\t\t\t\t\t\tta.elfinderdialog('destroy');
\t\t\t\t\t}
\t\t\t\t}).fail(function(error) {
\t\t\t\t\terror && fm.error(error);
\t\t\t\t\tta.elfinderdialog('destroy');
\t\t\t\t}).always(function() {
\t\t\t\t\tspnr.remove();
\t\t\t\t}));
\t\t\t},
\t\t\tload : function() {},
\t\t\tgetContent : function() {},
\t\t\tsave : function() {},
\t\t\t// Before dialog close
\t\t\tbeforeclose : iframeClose,
\t\t\t// On dialog closed
\t\t\tclose : function(ta) {
\t\t\t\tvar fm = this.fm,
\t\t\t\t\txhr = \$(ta).data('xhr');
\t\t\t\tif (xhr.state() === 'pending') {
\t\t\t\t\txhr.reject();
\t\t\t\t}
\t\t\t}
\t\t},
\t\t{
\t\t\t// Zip Archive with FlySystem
\t\t\tinfo : {
\t\t\t\tid : 'ziparchive',
\t\t\t\tname : 'btnMount',
\t\t\t\ticonImg : 'img/toolbar.png 0 -416',
\t\t\t\tcmdCheck : 'ZipArchive',
\t\t\t\tedit : function(file, editor) {
\t\t\t\t\tvar fm = this,
\t\t\t\t\t\tdfrd = \$.Deferred();
\t\t\t\t\tfm.request({
\t\t\t\t\t\tdata:{
\t\t\t\t\t\t\tcmd: 'netmount',
\t\t\t\t\t\t\tprotocol: 'ziparchive',
\t\t\t\t\t\t\thost: file.hash,
\t\t\t\t\t\t\tpath: file.phash
\t\t\t\t\t\t},
\t\t\t\t\t\tpreventFail: true,
\t\t\t\t\t\tnotify : {type : 'netmount', cnt : 1, hideCnt : true}
\t\t\t\t\t}).done(function(data) {
\t\t\t\t\t\tvar pdir;
\t\t\t\t\t\tif (data.added && data.added.length) {
\t\t\t\t\t\t\tif (data.added[0].phash) {
\t\t\t\t\t\t\t\tif (pdir = fm.file(data.added[0].phash)) {
\t\t\t\t\t\t\t\t\tif (! pdir.dirs) {
\t\t\t\t\t\t\t\t\t\tpdir.dirs = 1;
\t\t\t\t\t\t\t\t\t\tfm.change({ changed: [ pdir ] });
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tfm.one('netmountdone', function() {
\t\t\t\t\t\t\t\tfm.exec('open', data.added[0].hash);
\t\t\t\t\t\t\t\tfm.one('opendone', function() {
\t\t\t\t\t\t\t\t\tdata.toast && fm.toast(data.toast);
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t});
\t\t\t\t\t\t}
\t\t\t\t\t\tdfrd.resolve();
\t\t\t\t\t})
\t\t\t\t\t.fail(function(error) {
\t\t\t\t\t\tdfrd.reject(error);
\t\t\t\t\t});
\t\t\t\t\treturn dfrd;
\t\t\t\t}
\t\t\t},
\t\t\tmimes : ['application/zip'],
\t\t\tload : function() {},
\t\t\tsave : function(){}
\t\t},
\t\t{
\t\t\t// Simple Text (basic textarea editor)
\t\t\tinfo : {
\t\t\t\tid : 'textarea',
\t\t\t\tname : 'TextArea',
\t\t\t\tuseTextAreaEvent : true
\t\t\t},
\t\t\tload : function(textarea) {
\t\t\t\t// trigger event 'editEditorPrepare'
\t\t\t\tthis.trigger('Prepare', {
\t\t\t\t\tnode: textarea,
\t\t\t\t\teditorObj: void(0),
\t\t\t\t\tinstance: void(0),
\t\t\t\t\topts: {}
\t\t\t\t});
\t\t\t\ttextarea.setSelectionRange && textarea.setSelectionRange(0, 0);
\t\t\t\t\$(textarea).trigger('focus').show();
\t\t\t},
\t\t\tsave : function(){}
\t\t},
\t\t{
\t\t\t// File converter with online-convert.com
\t\t\tinfo : {
\t\t\t\tid : 'onlineconvert',
\t\t\t\tname : 'Online Convert',
\t\t\t\ticonImg : 'img/editor-icons.png 0 -144',
\t\t\t\tcmdCheck : 'OnlineConvert',
\t\t\t\tpreventGet: true,
\t\t\t\thideButtons: true,
\t\t\t\tsingle: true,
\t\t\t\tconverter: true,
\t\t\t\tcanMakeEmpty: false,
\t\t\t\tintegrate: {
\t\t\t\t\ttitle: 'ONLINE-CONVERT.COM',
\t\t\t\t\tlink: 'https://online-convert.com'
\t\t\t\t}
\t\t\t},
\t\t\tmimes : ['*'],
\t\t\thtml : '<div style=\"width:100%;max-height:100%;\"></div>',
\t\t\t// setup on elFinder bootup
\t\t\tsetup : function(opts, fm) {
\t\t\t\tvar mOpts = opts.extraOptions.onlineConvert || {maxSize:100,showLink:true};
\t\t\t\tif (mOpts.maxSize) {
\t\t\t\t\tthis.info.maxSize = mOpts.maxSize * 1048576;
\t\t\t\t}
\t\t\t\tthis.set = Object.assign({
\t\t\t\t\turl : 'https://%s.online-convert.com%s?external_url=',
\t\t\t\t\tconv : {
\t\t\t\t\t\tArchive: {'7Z':{}, 'BZ2':{ext:'bz'}, 'GZ':{}, 'ZIP':{}},
\t\t\t\t\t\tAudio: {'MP3':{}, 'OGG':{ext:'oga'}, 'WAV':{}, 'WMA':{}, 'AAC':{}, 'AIFF':{ext:'aif'}, 'FLAC':{}, 'M4A':{}, 'MMF':{}, 'OPUS':{ext:'oga'}},
\t\t\t\t\t\tDocument: {'DOC':{}, 'DOCX':{}, 'HTML':{}, 'ODT':{}, 'PDF':{}, 'PPT':{}, 'PPTX':{}, 'RTF':{}, 'SWF':{}, 'TXT':{}},
\t\t\t\t\t\teBook: {'AZW3':{ext:'azw'}, 'ePub':{}, 'FB2':{ext:'xml'}, 'LIT':{}, 'LRF':{}, 'MOBI':{}, 'PDB':{}, 'PDF':{},'PDF-eBook':{ext:'pdf'}, 'TCR':{}},
\t\t\t\t\t\tHash: {'Adler32':{},  'Apache-htpasswd':{}, 'Blowfish':{}, 'CRC32':{}, 'CRC32B':{}, 'Gost':{}, 'Haval128':{},'MD4':{}, 'MD5':{}, 'RIPEMD128':{}, 'RIPEMD160':{}, 'SHA1':{}, 'SHA256':{}, 'SHA384':{}, 'SHA512':{}, 'Snefru':{}, 'Std-DES':{}, 'Tiger128':{}, 'Tiger128-calculator':{}, 'Tiger128-converter':{}, 'Tiger160':{}, 'Tiger192':{}, 'Whirlpool':{}},
\t\t\t\t\t\tImage: {'BMP':{}, 'EPS':{ext:'ai'}, 'GIF':{}, 'EXR':{}, 'ICO':{}, 'JPG':{}, 'PNG':{}, 'SVG':{}, 'TGA':{}, 'TIFF':{ext:'tif'}, 'WBMP':{}, 'WebP':{}},
\t\t\t\t\t\tVideo: {'3G2':{}, '3GP':{}, 'AVI':{}, 'FLV':{}, 'HLS':{ext:'m3u8'}, 'MKV':{}, 'MOV':{}, 'MP4':{}, 'MPEG-1':{ext:'mpeg'}, 'MPEG-2':{ext:'mpeg'}, 'OGG':{ext:'ogv'}, 'OGV':{}, 'WebM':{}, 'WMV':{}, 'Android':{link:'/convert-video-for-%s',ext:'mp4'}, 'Blackberry':{link:'/convert-video-for-%s',ext:'mp4'}, 'DPG':{link:'/convert-video-for-%s',ext:'avi'}, 'iPad':{link:'/convert-video-for-%s',ext:'mp4'}, 'iPhone':{link:'/convert-video-for-%s',ext:'mp4'}, 'iPod':{link:'/convert-video-for-%s',ext:'mp4'}, 'Nintendo-3DS':{link:'/convert-video-for-%s',ext:'avi'}, 'Nintendo-DS':{link:'/convert-video-for-%s',ext:'avi'}, 'PS3':{link:'/convert-video-for-%s',ext:'mp4'}, 'Wii':{link:'/convert-video-for-%s',ext:'avi'}, 'Xbox':{link:'/convert-video-for-%s',ext:'wmv'}}
\t\t\t\t\t},
\t\t\t\t\tcatExts : {
\t\t\t\t\t\tHash: 'txt'
\t\t\t\t\t},
\t\t\t\t\tlink : '<div class=\"elfinder-edit-onlineconvert-link\"><a href=\"https://www.online-convert.com\" target=\"_blank\"><span class=\"elfinder-button-icon\"></span>ONLINE-CONVERT.COM</a></div>',
\t\t\t\t\tuseTabs : (\$.fn.tabs && !fm.UA.iOS)? true : false // Can't work on iOS, I don't know why.
\t\t\t\t}, mOpts);
\t\t\t},
\t\t\t// Prepare on before show dialog
\t\t\tprepare : function(base, dialogOpts, file) {
\t\t\t\tvar elfNode = base.editor.fm.getUI();
\t\t\t\t\$(base).height(elfNode.height());
\t\t\t\tdialogOpts.width = Math.max(dialogOpts.width || 0, elfNode.width() * 0.8);
\t\t\t},
\t\t\t// Initialization of editing node (this: this editors HTML node)
\t\t\tinit : function(id, file, dum, fm) {
\t\t\t\tvar ta = this,
\t\t\t\t\tconfObj = ta.editor.confObj,
\t\t\t\t\tset = confObj.set,
\t\t\t\t\tuiToast = fm.getUI('toast'),
\t\t\t\t\tidxs = {},
\t\t\t\t\tallowZip = fm.uploadMimeCheck('application/zip', file.phash),
\t\t\t\t\tselfUrl = \$('base').length? document.location.href.replace(/#.*\$/, '') : '',
\t\t\t\t\tgetExt = function(cat, con) {
\t\t\t\t\t\tvar c;
\t\t\t\t\t\tif (set.catExts[cat]) {
\t\t\t\t\t\t\treturn set.catExts[cat];
\t\t\t\t\t\t}
\t\t\t\t\t\tif (set.conv[cat] && (c = set.conv[cat][con])) {
\t\t\t\t\t\t\treturn (c.ext || con).toLowerCase();
\t\t\t\t\t\t}
\t\t\t\t\t\treturn con.toLowerCase();
\t\t\t\t\t},
\t\t\t\t\tsetOptions = function(cat, done) {
\t\t\t\t\t\tvar type, dfdInit, dfd;
\t\t\t\t\t\tif (typeof confObj.api === 'undefined') {
\t\t\t\t\t\t\tdfdInit = fm.request({
\t\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\t\tcmd: 'editor',
\t\t\t\t\t\t\t\t\tname: 'OnlineConvert',
\t\t\t\t\t\t\t\t\tmethod: 'init'
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\tpreventDefault : true
\t\t\t\t\t\t\t});
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tdfdInit = \$.Deferred().resolve({api: confObj.api});
\t\t\t\t\t\t}
\t\t\t\t\t\tcat = cat.toLowerCase();
\t\t\t\t\t\tdfdInit.done(function(data) {
\t\t\t\t\t\t\tconfObj.api = data.api;
\t\t\t\t\t\t\tif (confObj.api) {
\t\t\t\t\t\t\t\tif (cat) {
\t\t\t\t\t\t\t\t\ttype = '?category=' + cat;
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\ttype = '';
\t\t\t\t\t\t\t\t\tcat = 'all';
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tif (!confObj.conversions) {
\t\t\t\t\t\t\t\t\tconfObj.conversions = {};
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tif (!confObj.conversions[cat]) {
\t\t\t\t\t\t\t\t\tdfd = \$.getJSON('https://api2.online-convert.com/conversions' + type);
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\tdfd = \$.Deferred().resolve(confObj.conversions[cat]);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tdfd.done(function(d) {
\t\t\t\t\t\t\t\t\tconfObj.conversions[cat] = d;
\t\t\t\t\t\t\t\t\t\$.each(d, function(i, o) {
\t\t\t\t\t\t\t\t\t\tbtns[set.useTabs? 'children' : 'find']('.onlineconvert-category-' + o.category).children('.onlineconvert-' + o.target).trigger('makeoption', o);
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\tdone && done();
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t},
\t\t\t\t\tbtns = (function() {
\t\t\t\t\t\tvar btns = \$('<div></div>').on('click', 'button', function() {
\t\t\t\t\t\t\t\tvar b = \$(this),
\t\t\t\t\t\t\t\t\topts = b.data('opts') || null,
\t\t\t\t\t\t\t\t\tcat = b.closest('.onlineconvert-category').data('cname'),
\t\t\t\t\t\t\t\t\tcon = b.data('conv');
\t\t\t\t\t\t\t\tif (confObj.api === true) {
\t\t\t\t\t\t\t\t\tapi({
\t\t\t\t\t\t\t\t\t\tcategory: cat,
\t\t\t\t\t\t\t\t\t\tconvert: con,
\t\t\t\t\t\t\t\t\t\toptions: opts
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}).on('change', function(e) {
\t\t\t\t\t\t\t\tvar t = \$(e.target),
\t\t\t\t\t\t\t\t\tp = t.parent(), 
\t\t\t\t\t\t\t\t\tb = t.closest('.elfinder-edit-onlineconvert-button').children('button:first'),
\t\t\t\t\t\t\t\t\to = b.data('opts') || {},
\t\t\t\t\t\t\t\t\tv = p.data('type') === 'boolean'? t.is(':checked') : t.val();
\t\t\t\t\t\t\t\te.stopPropagation();
\t\t\t\t\t\t\t\tif (v) {
\t\t\t\t\t\t\t\t\tif (p.data('type') === 'integer') {
\t\t\t\t\t\t\t\t\t\tv = parseInt(v);
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\tif (p.data('pattern')) {
\t\t\t\t\t\t\t\t\t\tvar reg = new RegExp(p.data('pattern'));
\t\t\t\t\t\t\t\t\t\tif (!reg.test(v)) {
\t\t\t\t\t\t\t\t\t\t\trequestAnimationFrame(function() {
\t\t\t\t\t\t\t\t\t\t\t\tfm.error('\"' + fm.escape(v) + '\" is not match to \"/' + fm.escape(p.data('pattern')) + '/\"');
\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\tv = null;
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tif (v) {
\t\t\t\t\t\t\t\t\to[t.parent().data('optkey')] = v;
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\tdelete o[p.data('optkey')];
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tb.data('opts', o);
\t\t\t\t\t\t\t}),
\t\t\t\t\t\t\tul = \$('<ul></ul>'),
\t\t\t\t\t\t\toform = function(n, o) {
\t\t\t\t\t\t\t\tvar f = \$('<p></p>').data('optkey', n).data('type', o.type),
\t\t\t\t\t\t\t\t\tchecked = '',
\t\t\t\t\t\t\t\t\tdisabled = '',
\t\t\t\t\t\t\t\t\tnozip = false,
\t\t\t\t\t\t\t\t\topts, btn, elm;
\t\t\t\t\t\t\t\tif (o.description) {
\t\t\t\t\t\t\t\t\tf.attr('title', fm.i18n(o.description));
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tif (o.pattern) {
\t\t\t\t\t\t\t\t\tf.data('pattern', o.pattern);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tf.append(\$('<span></span>').text(fm.i18n(n) + ' : '));
\t\t\t\t\t\t\t\tif (o.type === 'boolean') {
\t\t\t\t\t\t\t\t\tif (o['default'] || (nozip = (n === 'allow_multiple_outputs' && !allowZip))) {
\t\t\t\t\t\t\t\t\t\tchecked = ' checked';
\t\t\t\t\t\t\t\t\t\tif (nozip) {
\t\t\t\t\t\t\t\t\t\t\tdisabled = ' disabled';
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\tbtn = this.children('button:first');
\t\t\t\t\t\t\t\t\t\topts = btn.data('opts') || {};
\t\t\t\t\t\t\t\t\t\topts[n] = true;
\t\t\t\t\t\t\t\t\t\tbtn.data('opts', opts);
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\tf.append(\$('<input type=\"checkbox\" value=\"true\"'+checked+disabled+'/>'));
\t\t\t\t\t\t\t\t} else if (o['enum']){
\t\t\t\t\t\t\t\t\telm = \$('<select></select>').append(\$('<option value=\"\"></option>').text('Select...'));
\t\t\t\t\t\t\t\t\t\$.each(o['enum'], function(i, v) {
\t\t\t\t\t\t\t\t\t\telm.append(\$('<option value=\"'+v+'\"></option>').text(v));
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\tf.append(elm);
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\tf.append(\$('<input type=\"text\" value=\"\"/>'));
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\treturn f;
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tmakeOption = function(o) {
\t\t\t\t\t\t\t\tvar elm = this,
\t\t\t\t\t\t\t\t\tb = \$('<span class=\"elfinder-button-icon elfinder-button-icon-preference\"></span>').on('click', function() {
\t\t\t\t\t\t\t\t\t\tf.toggle();
\t\t\t\t\t\t\t\t\t}),
\t\t\t\t\t\t\t\t\tf = \$('<div class=\"elfinder-edit-onlinconvert-options\"></div>').hide();
\t\t\t\t\t\t\t\tif (o.options) {
\t\t\t\t\t\t\t\t\t\$.each(o.options, function(k, v) {
\t\t\t\t\t\t\t\t\t\tk !== 'download_password' && f.append(oform.call(elm, k, v));
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\telm.append(b, f);
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tts = (+new Date()),
\t\t\t\t\t\t\ti = 0;
\t\t\t\t\t\t
\t\t\t\t\t\tif (!confObj.ext2mime) {
\t\t\t\t\t\t\tconfObj.ext2mime = Object.assign(fm.arrayFlip(fm.mimeTypes), ext2mime);
\t\t\t\t\t\t}
\t\t\t\t\t\t\$.each(set.conv, function(t, c) {
\t\t\t\t\t\t\tvar cname = t.toLowerCase(),
\t\t\t\t\t\t\t\tid = 'elfinder-edit-onlineconvert-' + cname + ts,
\t\t\t\t\t\t\t\ttype = \$('<div id=\"' + id + '\" class=\"onlineconvert-category onlineconvert-category-'+cname+'\"></div>').data('cname', t),
\t\t\t\t\t\t\t\tcext;
\t\t\t\t\t\t\t\$.each(c, function(n, o) {
\t\t\t\t\t\t\t\tvar nl = n.toLowerCase(),
\t\t\t\t\t\t\t\t\text = getExt(t, n);
\t\t\t\t\t\t\t\tif (!confObj.ext2mime[ext]) {
\t\t\t\t\t\t\t\t\tif (cname === 'audio' || cname === 'image' || cname === 'video') {
\t\t\t\t\t\t\t\t\t\tconfObj.ext2mime[ext] = cname + '/x-' + nl;
\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\tconfObj.ext2mime[ext] = 'application/octet-stream';
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tif (fm.uploadMimeCheck(confObj.ext2mime[ext], file.phash)) {
\t\t\t\t\t\t\t\t\ttype.append(\$('<div class=\"elfinder-edit-onlineconvert-button onlineconvert-'+nl+'\"></div>').on('makeoption', function(e, data) {
\t\t\t\t\t\t\t\t\t\tvar elm = \$(this);
\t\t\t\t\t\t\t\t\t\tif (!elm.children('.elfinder-button-icon-preference').length) {
\t\t\t\t\t\t\t\t\t\t\tmakeOption.call(elm, data);
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t}).append(\$('<button></button>').text(n).data('conv', n)));
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});
\t\t\t\t\t\t\tif (type.children().length) {
\t\t\t\t\t\t\t\tul.append(\$('<li></li>').append(\$('<a></a>').attr('href', selfUrl + '#' + id).text(t)));
\t\t\t\t\t\t\t\tbtns.append(type);
\t\t\t\t\t\t\t\tidxs[cname] = i++;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t\tif (set.useTabs) {
\t\t\t\t\t\t\tbtns.prepend(ul).tabs({
\t\t\t\t\t\t\t\tbeforeActivate: function(e, ui) {
\t\t\t\t\t\t\t\t\tsetOptions(ui.newPanel.data('cname'));
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\$.each(set.conv, function(t) {
\t\t\t\t\t\t\t\tvar tl = t.toLowerCase();
\t\t\t\t\t\t\t\tbtns.append(\$('<fieldset class=\"onlineconvert-fieldset-' + tl + '\"></fieldset>').append(\$('<legend></legend>').text(t)).append(btns.children('.onlineconvert-category-' + tl)));
\t\t\t\t\t\t\t});
\t\t\t\t\t\t}
\t\t\t\t\t\treturn btns;
\t\t\t\t\t})(),
\t\t\t\t\tselect = \$(this)
\t\t\t\t\t\t.append(
\t\t\t\t\t\t\tbtns,
\t\t\t\t\t\t\t(set.showLink? \$(set.link) : null)
\t\t\t\t\t\t),
\t\t\t\t\tspnr = \$('<div class=\"elfinder-edit-spinner elfinder-edit-onlineconvert\"></div>')
\t\t\t\t\t\t.hide()
\t\t\t\t\t\t.html('<span class=\"elfinder-spinner-text\">' + fm.i18n('nowLoading') + '</span><span class=\"elfinder-spinner\"></span>')
\t\t\t\t\t\t.appendTo(select.parent()),
\t\t\t\t\tprog = \$('<div class=\"elfinder-quicklook-info-progress\"></div>').appendTo(spnr),
\t\t\t\t\t_url = null,
\t\t\t\t\turl = function() {
\t\t\t\t\t\tvar onetime;
\t\t\t\t\t\tif (_url) {
\t\t\t\t\t\t\treturn \$.Deferred().resolve(_url);
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tspnr.show();
\t\t\t\t\t\t\treturn fm.forExternalUrl(file.hash, { progressBar: prog }).done(function(url) {
\t\t\t\t\t\t\t\t_url = url;
\t\t\t\t\t\t\t}).fail(function(error) {
\t\t\t\t\t\t\t\terror && fm.error(error);
\t\t\t\t\t\t\t\tta.elfinderdialog('destroy');
\t\t\t\t\t\t\t}).always(function() {
\t\t\t\t\t\t\t\tspnr.hide();
\t\t\t\t\t\t\t});
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\tapi = function(opts) {
\t\t\t\t\t\t\$(ta).data('dfrd', url().done(function(url) {
\t\t\t\t\t\t\tselect.fadeOut();
\t\t\t\t\t\t\tsetStatus({info: 'Start conversion request.'});
\t\t\t\t\t\t\tfm.request({
\t\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\t\tcmd: 'editor',
\t\t\t\t\t\t\t\t\tname: 'OnlineConvert',
\t\t\t\t\t\t\t\t\tmethod: 'api',
\t\t\t\t\t\t\t\t\t'args[category]' : opts.category.toLowerCase(),
\t\t\t\t\t\t\t\t\t'args[convert]'  : opts.convert.toLowerCase(),
\t\t\t\t\t\t\t\t\t'args[options]'  : JSON.stringify(opts.options),
\t\t\t\t\t\t\t\t\t'args[source]'   : fm.convAbsUrl(url),
\t\t\t\t\t\t\t\t\t'args[filename]' : fm.splitFileExtention(file.name)[0] + '.' + getExt(opts.category, opts.convert),
\t\t\t\t\t\t\t\t\t'args[mime]'     : file.mime
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\tpreventDefault : true
\t\t\t\t\t\t\t}).done(function(data) {
\t\t\t\t\t\t\t\tcheckRes(data.apires, opts.category, opts.convert);
\t\t\t\t\t\t\t}).fail(function(error) {
\t\t\t\t\t\t\t\terror && fm.error(error);
\t\t\t\t\t\t\t\tta.elfinderdialog('destroy');
\t\t\t\t\t\t\t});
\t\t\t\t\t\t}));
\t\t\t\t\t},
\t\t\t\t\tcheckRes = function(res, cat, con) {
\t\t\t\t\t\tvar status, err = [];
\t\t\t\t\t\tif (res && res.id) {
\t\t\t\t\t\t\tstatus = res.status;
\t\t\t\t\t\t\tif (status.code === 'failed') {
\t\t\t\t\t\t\t\tspnr.hide();
\t\t\t\t\t\t\t\tif (res.errors && res.errors.length) {
\t\t\t\t\t\t\t\t\t\$.each(res.errors, function(i, o) {
\t\t\t\t\t\t\t\t\t\to.message && err.push(o.message);
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tfm.error(err.length? err : status.info);
\t\t\t\t\t\t\t\tselect.fadeIn();
\t\t\t\t\t\t\t} else if (status.code === 'completed') {
\t\t\t\t\t\t\t\tupload(res);
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tsetStatus(status);
\t\t\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\t\t\tpolling(res.id);
\t\t\t\t\t\t\t\t}, 1000);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tuiToast.appendTo(ta.closest('.ui-dialog'));
\t\t\t\t\t\t\tif (res.message) {
\t\t\t\t\t\t\t\tfm.toast({
\t\t\t\t\t\t\t\t\tmsg: fm.i18n(res.message),
\t\t\t\t\t\t\t\t\tmode: 'error',
\t\t\t\t\t\t\t\t\ttimeOut: 5000,
\t\t\t\t\t\t\t\t\tonHidden: function() {
\t\t\t\t\t\t\t\t\t\tuiToast.children().length === 1 && uiToast.appendTo(fm.getUI());
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tfm.toast({
\t\t\t\t\t\t\t\tmsg: fm.i18n('editorConvNoApi'),
\t\t\t\t\t\t\t\tmode: 'error',
\t\t\t\t\t\t\t\ttimeOut: 3000,
\t\t\t\t\t\t\t\tonHidden: function() {
\t\t\t\t\t\t\t\t\tuiToast.children().length === 1 && uiToast.appendTo(fm.getUI());
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});
\t\t\t\t\t\t\tspnr.hide();
\t\t\t\t\t\t\tselect.show();
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\tsetStatus = function(status) {
\t\t\t\t\t\tspnr.show().children('.elfinder-spinner-text').text(status.info);
\t\t\t\t\t},
\t\t\t\t\tpolling = function(jobid) {
\t\t\t\t\t\tfm.request({
\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\tcmd: 'editor',
\t\t\t\t\t\t\t\tname: 'OnlineConvert',
\t\t\t\t\t\t\t\tmethod: 'api',
\t\t\t\t\t\t\t\t'args[jobid]': jobid
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tpreventDefault : true
\t\t\t\t\t\t}).done(function(data) {
\t\t\t\t\t\t\tcheckRes(data.apires);
\t\t\t\t\t\t}).fail(function(error) {
\t\t\t\t\t\t\terror && fm.error(error);
\t\t\t\t\t\t\tta.elfinderdialog('destroy');
\t\t\t\t\t\t});
\t\t\t\t\t},
\t\t\t\t\tupload = function(res) {
\t\t\t\t\t\tvar output = res.output,
\t\t\t\t\t\t\tid = res.id,
\t\t\t\t\t\t\turl = '';
\t\t\t\t\t\tspnr.hide();
\t\t\t\t\t\tif (output && output.length) {
\t\t\t\t\t\t\tta.elfinderdialog('destroy');
\t\t\t\t\t\t\t\$.each(output, function(i, o) {
\t\t\t\t\t\t\t\tif (o.uri) {
\t\t\t\t\t\t\t\t\turl += o.uri + '\\n';
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});
\t\t\t\t\t\t\tfm.upload({
\t\t\t\t\t\t\t\ttarget: file.phash,
\t\t\t\t\t\t\t\tfiles: [url],
\t\t\t\t\t\t\t\ttype: 'text',
\t\t\t\t\t\t\t\textraData: {
\t\t\t\t\t\t\t\t\tcontentSaveId: 'OnlineConvert-' + res.id
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\tmode = 'document',
\t\t\t\t\tcl, m;
\t\t\t\tselect.parent().css({overflow: 'auto'}).addClass('overflow-scrolling-touch');
\t\t\t\tif (m = file.mime.match(/^(audio|image|video)/)) {
\t\t\t\t\tmode = m[1];
\t\t\t\t}
\t\t\t\tif (set.useTabs) {
\t\t\t\t\tif (idxs[mode]) {
\t\t\t\t\t\tbtns.tabs('option', 'active', idxs[mode]);
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\tcl = Object.keys(set.conv).length;
\t\t\t\t\t\$.each(set.conv, function(t) {
\t\t\t\t\t\tif (t.toLowerCase() === mode) {
\t\t\t\t\t\t\tsetOptions(t, function() {
\t\t\t\t\t\t\t\t\$.each(set.conv, function(t0) {
\t\t\t\t\t\t\t\t\tt0.toLowerCase() !== mode && setOptions(t0);
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t});
\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t}
\t\t\t\t\t\tcl--;
\t\t\t\t\t});
\t\t\t\t\tif (!cl) {
\t\t\t\t\t\t\$.each(set.conv, function(t) {
\t\t\t\t\t\t\tsetOptions(t);
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t\tselect.parent().scrollTop(btns.children('.onlineconvert-fieldset-' + mode).offset().top);
\t\t\t\t}
\t\t\t},
\t\t\tload : function() {},
\t\t\tgetContent : function() {},
\t\t\tsave : function() {},
\t\t\t// On dialog closed
\t\t\tclose : function(ta) {
\t\t\t\tvar fm = this.fm,
\t\t\t\t\tdfrd = \$(ta).data('dfrd');
\t\t\t\tif (dfrd && dfrd.state() === 'pending') {
\t\t\t\t\tdfrd.reject();
\t\t\t\t}
\t\t\t}
\t\t}
\t];
}, window.elFinder));
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/extras/editors.default.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/extras/editors.default.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/extras/editors.default.js");
    }
}
