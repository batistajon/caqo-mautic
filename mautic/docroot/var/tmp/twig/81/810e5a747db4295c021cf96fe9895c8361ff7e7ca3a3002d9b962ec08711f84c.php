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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/proxy/elFinderSupportVer1.js */
class __TwigTemplate_20e9c7acdb26c2631f6aa5af697be76135477a28a4269f1c297ca0b8bea7b5b1 extends Template
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
        echo "/**
 * elFinder transport to support old protocol.
 *
 * @example
 * \$('selector').elfinder({
 *   .... 
 *   transport : new elFinderSupportVer1()
 * })
 *
 * @author Dmitry (dio) Levashov
 **/
window.elFinderSupportVer1 = function(upload) {
\t\"use strict\";
\tvar self = this,
\t\tdateObj, today, yesterday,
\t\tgetDateString = function(date) {
\t\t\treturn date.replace('Today', today).replace('Yesterday', yesterday);
\t\t};
\t
\tdateObj = new Date();
\ttoday = dateObj.getFullYear() + '/' + (dateObj.getMonth() + 1) + '/' + dateObj.getDate();
\tdateObj = new Date(Date.now() - 86400000);
\tyesterday = dateObj.getFullYear() + '/' + (dateObj.getMonth() + 1) + '/' + dateObj.getDate();
\t
\tthis.upload = upload || 'auto';
\t
\tthis.init = function(fm) {
\t\tthis.fm = fm;
\t\tthis.fm.parseUploadData = function(text) {
\t\t\tvar data;

\t\t\tif (!\$.trim(text)) {
\t\t\t\treturn {error : ['errResponse', 'errDataEmpty']};
\t\t\t}

\t\t\ttry {
\t\t\t\tdata = JSON.parse(text);
\t\t\t} catch (e) {
\t\t\t\treturn {error : ['errResponse', 'errDataNotJSON']};
\t\t\t}
\t\t\t
\t\t\treturn self.normalize('upload', data);
\t\t};
\t};
\t
\t
\tthis.send = function(opts) {
\t\tvar self = this,
\t\t\tfm = this.fm,
\t\t\tdfrd = \$.Deferred(),
\t\t\tcmd = opts.data.cmd,
\t\t\targs = [],
\t\t\t_opts = {},
\t\t\tdata,
\t\t\txhr;
\t\t\t
\t\tdfrd.abort = function() {
\t\t\tif (xhr.state() == 'pending') {
\t\t\t\txhr.quiet = true;
\t\t\t\txhr.abort();
\t\t\t}
\t\t};
\t\t
\t\tswitch (cmd) {
\t\t\tcase 'open':
\t\t\t\topts.data.tree = 1;
\t\t\t\tbreak;
\t\t\tcase 'parents':
\t\t\tcase 'tree':
\t\t\t\treturn dfrd.resolve({tree : []});
\t\t\tcase 'get':
\t\t\t\topts.data.cmd = 'read';
\t\t\t\topts.data.current = fm.file(opts.data.target).phash;
\t\t\t\tbreak;
\t\t\tcase 'put':
\t\t\t\topts.data.cmd = 'edit';
\t\t\t\topts.data.current = fm.file(opts.data.target).phash;
\t\t\t\tbreak;
\t\t\tcase 'archive':
\t\t\tcase 'rm':
\t\t\t\topts.data.current = fm.file(opts.data.targets[0]).phash;
\t\t\t\tbreak;
\t\t\tcase 'extract':
\t\t\tcase 'rename':
\t\t\tcase 'resize':
\t\t\t\topts.data.current = fm.file(opts.data.target).phash;
\t\t\t\tbreak;
\t\t\tcase 'duplicate':
\t\t\t\t_opts = \$.extend(true, {}, opts);

\t\t\t\t\$.each(opts.data.targets, function(i, hash) {
\t\t\t\t\t\$.ajax(Object.assign(_opts, {data : {cmd : 'duplicate', target : hash, current : fm.file(hash).phash}}))
\t\t\t\t\t\t.fail(function(error) {
\t\t\t\t\t\t\tfm.error(fm.res('error', 'connect'));
\t\t\t\t\t\t})
\t\t\t\t\t\t.done(function(data) {
\t\t\t\t\t\t\tdata = self.normalize('duplicate', data);
\t\t\t\t\t\t\tif (data.error) {
\t\t\t\t\t\t\t\tfm.error(data.error);
\t\t\t\t\t\t\t} else if (data.added) {
\t\t\t\t\t\t\t\tfm.trigger('add', {added : data.added});
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t});
\t\t\t\treturn dfrd.resolve({});
\t\t\t\t
\t\t\tcase 'mkdir':
\t\t\tcase 'mkfile':
\t\t\t\topts.data.current = opts.data.target;
\t\t\t\tbreak;
\t\t\tcase 'paste':
\t\t\t\topts.data.current = opts.data.dst;
\t\t\t\tif (! opts.data.tree) {
\t\t\t\t\t\$.each(opts.data.targets, function(i, h) {
\t\t\t\t\t\tif (fm.file(h) && fm.file(h).mime === 'directory') {
\t\t\t\t\t\t\topts.data.tree = '1';
\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t}
\t\t\t\tbreak;
\t\t\t\t
\t\t\tcase 'size':
\t\t\t\treturn dfrd.resolve({error : fm.res('error', 'cmdsupport')});
\t\t\tcase 'search':
\t\t\t\treturn dfrd.resolve({error : fm.res('error', 'cmdsupport')});
\t\t\t\t
\t\t\tcase 'file':
\t\t\t\topts.data.cmd = 'open';
\t\t\t\topts.data.current = fm.file(opts.data.target).phash;
\t\t\t\tbreak;
\t\t}
\t\t// cmd = opts.data.cmd
\t\t
\t\txhr = \$.ajax(opts)
\t\t\t.fail(function(error) {
\t\t\t\tdfrd.reject(error);
\t\t\t})
\t\t\t.done(function(raw) {
\t\t\t\tdata = self.normalize(cmd, raw);
\t\t\t\tdfrd.resolve(data);
\t\t\t});
\t\t\t
\t\treturn dfrd;
\t};
\t
\t// fix old connectors errors messages as possible
\t// this.errors = {
\t// \t'Unknown command'                                  : 'Unknown command.',
\t// \t'Invalid backend configuration'                    : 'Invalid backend configuration.',
\t// \t'Access denied'                                    : 'Access denied.',
\t// \t'PHP JSON module not installed'                    : 'PHP JSON module not installed.',
\t// \t'File not found'                                   : 'File not found.',
\t// \t'Invalid name'                                     : 'Invalid file name.',
\t// \t'File or folder with the same name already exists' : 'File named \"\$1\" already exists in this location.',
\t// \t'Not allowed file type'                            : 'Not allowed file type.',
\t// \t'File exceeds the maximum allowed filesize'        : 'File exceeds maximum allowed size.',
\t// \t'Unable to copy into itself'                       : 'Unable to copy \"\$1\" into itself.',
\t// \t'Unable to create archive'                         : 'Unable to create archive.',
\t// \t'Unable to extract files from archive'             : 'Unable to extract files from \"\$1\".'
\t// }
\t
\tthis.normalize = function(cmd, data) {
\t\tvar self = this,
\t\t\tfm   = this.fm,
\t\t\tfiles = {}, 
\t\t\tfilter = function(file) { return file && file.hash && file.name && file.mime ? file : null; },
\t\t\tgetDirs = function(items) {
\t\t\t\treturn \$.grep(items, function(i) {
\t\t\t\t\treturn i && i.mime && i.mime === 'directory'? true : false;
\t\t\t\t});
\t\t\t},
\t\t\tgetTreeDiff = function(files) {
\t\t\t\tvar dirs = getDirs(files);
\t\t\t\ttreeDiff = fm.diff(dirs, null, ['date', 'ts']);
\t\t\t\tif (treeDiff.added.length) {
\t\t\t\t\ttreeDiff.added = getDirs(treeDiff.added);
\t\t\t\t}
\t\t\t\tif (treeDiff.changed.length) {
\t\t\t\t\ttreeDiff.changed = getDirs(treeDiff.changed);
\t\t\t\t}
\t\t\t\tif (treeDiff.removed.length) {
\t\t\t\t\tvar removed = [];
\t\t\t\t\t\$.each(treeDiff.removed, function(i, h) {
\t\t\t\t\t\tvar item;
\t\t\t\t\t\tif ((item = fm.file(h)) && item.mime === 'directory') {
\t\t\t\t\t\t\tremoved.push(h);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\ttreeDiff.removed = removed;
\t\t\t\t}
\t\t\t\treturn treeDiff;
\t\t\t},
\t\t\tphash, diff, isCwd, treeDiff;

\t\tif ((cmd == 'tmb' || cmd == 'get')) {
\t\t\treturn data;
\t\t}
\t\t
\t\t// if (data.error) {
\t\t// \t\$.each(data.error, function(i, msg) {
\t\t// \t\tif (self.errors[msg]) {
\t\t// \t\t\tdata.error[i] = self.errors[msg];
\t\t// \t\t}
\t\t// \t});
\t\t// }
\t\t
\t\tif (cmd == 'upload' && data.error && data.cwd) {
\t\t\tdata.warning = Object.assign({}, data.error);
\t\t\tdata.error = false;
\t\t}
\t\t
\t\t
\t\tif (data.error) {
\t\t\treturn data;
\t\t}
\t\t
\t\tif (cmd == 'put') {

\t\t\tphash = fm.file(data.target.hash).phash;
\t\t\treturn {changed : [this.normalizeFile(data.target, phash)]};
\t\t}
\t\t
\t\tphash = data.cwd.hash;

\t\tisCwd = (phash == fm.cwd().hash);
\t\t
\t\tif (data.tree) {
\t\t\t\$.each(this.normalizeTree(data.tree), function(i, file) {
\t\t\t\tfiles[file.hash] = file;
\t\t\t});
\t\t}
\t\t
\t\t\$.each(data.cdc||[], function(i, file) {
\t\t\tvar hash = file.hash,
\t\t\t\tmcts;

\t\t\tif (files[hash]) {
\t\t\t\tif (file.date) {
\t\t\t\t\tmcts = Date.parse(getDateString(file.date));
\t\t\t\t\tif (mcts && !isNaN(mcts)) {
\t\t\t\t\t\tfiles[hash].ts = Math.floor(mcts / 1000);
\t\t\t\t\t} else {
\t\t\t\t\t\tfiles[hash].date = file.date || fm.formatDate(file);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\tfiles[hash].locked = file.hash == phash ? true : file.rm === void(0) ? false : !file.rm;
\t\t\t} else {
\t\t\t\tfiles[hash] = self.normalizeFile(file, phash, data.tmb);
\t\t\t}
\t\t});
\t\t
\t\tif (!data.tree) {
\t\t\t\$.each(fm.files(), function(hash, file) {
\t\t\t\tif (!files[hash] && file.phash != phash && file.mime == 'directory') {
\t\t\t\t\tfiles[hash] = file;
\t\t\t\t}
\t\t\t});
\t\t}
\t\t
\t\tif (cmd == 'open') {
\t\t\treturn {
\t\t\t\t\tcwd     : files[phash] || this.normalizeFile(data.cwd),
\t\t\t\t\tfiles   : \$.map(files, function(f) { return f; }),
\t\t\t\t\toptions : self.normalizeOptions(data),
\t\t\t\t\tinit    : !!data.params,
\t\t\t\t\tdebug   : data.debug
\t\t\t\t};
\t\t}
\t\t
\t\tif (isCwd) {
\t\t\tdiff = fm.diff(\$.map(files, filter));
\t\t} else {
\t\t\tif (data.tree && cmd !== 'paste') {
\t\t\t\tdiff = getTreeDiff(files);
\t\t\t} else {
\t\t\t\tdiff = {
\t\t\t\t\tadded   : [],
\t\t\t\t\tremoved : [],
\t\t\t\t\tchanged : []
\t\t\t\t};
\t\t\t\tif (cmd === 'paste') {
\t\t\t\t\tdiff.sync = true;
\t\t\t\t}
\t\t\t}
\t\t}
\t\t
\t\treturn Object.assign({
\t\t\tcurrent : data.cwd.hash,
\t\t\terror   : data.error,
\t\t\twarning : data.warning,
\t\t\toptions : {tmb : !!data.tmb}
\t\t}, diff);
\t\t
\t};
\t
\t/**
\t * Convert old api tree into plain array of dirs
\t *
\t * @param  Object  root dir
\t * @return Array
\t */
\tthis.normalizeTree = function(root) {
\t\tvar self     = this,
\t\t\tresult   = [],
\t\t\ttraverse = function(dirs, phash) {
\t\t\t\tvar i, dir;
\t\t\t\t
\t\t\t\tfor (i = 0; i < dirs.length; i++) {
\t\t\t\t\tdir = dirs[i];
\t\t\t\t\tresult.push(self.normalizeFile(dir, phash));
\t\t\t\t\tdir.dirs.length && traverse(dir.dirs, dir.hash);
\t\t\t\t}
\t\t\t};

\t\ttraverse([root]);

\t\treturn result;
\t};
\t
\t/**
\t * Convert file info from old api format into new one
\t *
\t * @param  Object  file
\t * @param  String  parent dir hash
\t * @return Object
\t */
\tthis.normalizeFile = function(file, phash, tmb) {
\t\tvar mime = file.mime || 'directory',
\t\t\tsize = mime == 'directory' && !file.linkTo ? 0 : file.size,
\t\t\tmcts = file.date? Date.parse(getDateString(file.date)) : void 0,
\t\t\tinfo = {
\t\t\t\turl    : file.url,
\t\t\t\thash   : file.hash,
\t\t\t\tphash  : phash,
\t\t\t\tname   : file.name,
\t\t\t\tmime   : mime,
\t\t\t\tts     : file.ts,
\t\t\t\tsize   : size,
\t\t\t\tread   : file.read,
\t\t\t\twrite  : file.write,
\t\t\t\tlocked : !phash ? true : file.rm === void(0) ? false : !file.rm
\t\t\t};
\t\t
\t\tif (! info.ts) {
\t\t\tif (mcts && !isNaN(mcts)) {
\t\t\t\tinfo.ts = Math.floor(mcts / 1000);
\t\t\t} else {
\t\t\t\tinfo.date = file.date || this.fm.formatDate(file);
\t\t\t}
\t\t}
\t\t
\t\tif (file.mime == 'application/x-empty' || file.mime == 'inode/x-empty') {
\t\t\tinfo.mime = 'text/plain';
\t\t}
\t\t
\t\tif (file.linkTo) {
\t\t\tinfo.alias = file.linkTo;
\t\t}

\t\tif (file.linkTo) {
\t\t\tinfo.linkTo = file.linkTo;
\t\t}
\t\t
\t\tif (file.tmb) {
\t\t\tinfo.tmb = file.tmb;
\t\t} else if (info.mime.indexOf('image/') === 0 && tmb) {
\t\t\tinfo.tmb = 1;
\t\t\t
\t\t}

\t\tif (file.dirs && file.dirs.length) {
\t\t\tinfo.dirs = true;
\t\t}
\t\tif (file.dim) {
\t\t\tinfo.dim = file.dim;
\t\t}
\t\tif (file.resize) {
\t\t\tinfo.resize = file.resize;
\t\t}
\t\treturn info;
\t};
\t
\tthis.normalizeOptions = function(data) {
\t\tvar opts = {
\t\t\t\tpath          : data.cwd.rel,
\t\t\t\tdisabled      : \$.merge((data.disabled || []), [ 'search', 'netmount', 'zipdl' ]),
\t\t\t\ttmb           : !!data.tmb,
\t\t\t\tcopyOverwrite : true
\t\t\t};
\t\t
\t\tif (data.params) {
\t\t\topts.api      = 1;
\t\t\topts.url      = data.params.url;
\t\t\topts.archivers = {
\t\t\t\tcreate  : data.params.archives || [],
\t\t\t\textract : data.params.extract || []
\t\t\t};
\t\t}
\t\t
\t\tif (opts.path.indexOf('/') !== -1) {
\t\t\topts.separator = '/';
\t\t} else if (opts.path.indexOf('\\\\') !== -1) {
\t\t\topts.separator = '\\\\';
\t\t}
\t\treturn opts;
\t};
};
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/proxy/elFinderSupportVer1.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/proxy/elFinderSupportVer1.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/proxy/elFinderSupportVer1.js");
    }
}
