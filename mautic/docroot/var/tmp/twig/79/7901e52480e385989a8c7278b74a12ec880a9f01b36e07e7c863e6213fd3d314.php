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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.ug_CN.js */
class __TwigTemplate_a31413298b526f162d8e38f5cc7835bd075d18476d2f9be717414694831c8812 extends Template
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
 * Uyghur translation
 * @author Alim.Boyaq <boyaq@otkur.biz>
 * @version 2014-12-19
 */
(function(root, factory) {
\tif (typeof define === 'function' && define.amd) {
\t\tdefine(['elfinder'], factory);
\t} else if (typeof exports !== 'undefined') {
\t\tmodule.exports = factory(require('elfinder'));
\t} else {
\t\tfactory(root.elFinder);
\t}
}(this, function(elFinder) {
\telFinder.prototype.i18.ug_CN = {
\t\ttranslator : 'تەرجىمە قىلغۇچى:  ئۆتكۈر بىز شىركىتى info@otkur.biz',
\t\tlanguage   : 'ئ‍ۇيغۇرچە',
\t\tdirection  : 'rtl',
\t\tdateFormat : 'Y-m-d H:i',
\t\tfancyDateFormat : '\$1 H:i',
\t\tmessages   : {

\t\t\t/********************************** errors **********************************/
\t\t\t'error'                : 'خاتالىق',
\t\t\t'errUnknown'           : 'كۈتۈلمىگەن خاتالىقكەن.',
\t\t\t'errUnknownCmd'        : 'كۈتۈلمىگەن بۇيرۇقكەن.',
\t\t\t'errJqui'              : 'jQuery UI تەڭشىكى توغرا بولمىغان. چوقۇم Selectable، draggable، droppabl قاتارلىق بۆلەكلەر بولۇشى كېرەك.',
\t\t\t'errNode'              : 'elFinder DOM ئېلىمىنتلىرىنى قۇرالىشى كېرەك.',
\t\t\t'errURL'               : 'elFinder تەڭشىكى توغرا بولمىغان! URL تەڭشىكى يېزىلمىغان.',
\t\t\t'errAccess'            : 'زىيارەت قىلىش چەكلەنگەن.',
\t\t\t'errConnect'           : 'ئارقا سۇپىغا ئۇلاش مەغلۇپ بولدى..',
\t\t\t'errAbort'             : 'ئارقا سۇپىغا توختىتىلدى.',
\t\t\t'errTimeout'           : 'ئارقا سۇپىغا بەلگىلەنگەن ۋاقىتتا ئۇلىيالمىدى.',
\t\t\t'errNotFound'          : 'ئارقا سۇپا تېپىلمىدى.',
\t\t\t'errResponse'          : 'ئارقا سۇپىدىن توغرا بولمىغان ئىنكاس قايتتى.',
\t\t\t'errConf'              : 'ئارقا سۇپا تەڭشىكى توغرا ئەمەس.',
\t\t\t'errJSON'              : 'PHP JSON بۆلىكى قاچىلانمىغان.',
\t\t\t'errNoVolumes'         : 'ئوقۇشقا بولىدىغان ھۈججەت خالتىسى يوق.',
\t\t\t'errCmdParams'         : 'پارامېتىر خاتا، بۇيرۇق: \"\$1\".',
\t\t\t'errDataNotJSON'       : 'ئارقا سۇپا قايتۇرغان سانلىق مەلۇمات توغرا بولغان JSON ئەمەسكەن.',
\t\t\t'errDataEmpty'         : 'ئارقا سۇپا قايتۇرغان سانلىق مەلۇمات قۇرۇقكەن.',
\t\t\t'errCmdReq'            : 'ئارقا سۇپىدىكى بۇيرۇقنىڭ ئ‍سىمى تەمىنلىنىشى كېرەك.',
\t\t\t'errOpen'              : '\"\$1\"نى ئاچالمىدى.',
\t\t\t'errNotFolder'         : 'ئوبىكىت مۇندەرىجە ئەمەسكەن.',
\t\t\t'errNotFile'           : 'ئوبىكىت ھۈججەت ئەمەسكەن.',
\t\t\t'errRead'              : '\"\$1\"نى ئوقۇيالمىدى.',
\t\t\t'errWrite'             : '\"\$1\"نى يازالمىدى.',
\t\t\t'errPerm'              : 'ھوقۇق يوق.',
\t\t\t'errLocked'            : '\"\$1\" تاقالغان,ئۆزگەرتەلمەيسىز.',
\t\t\t'errExists'            : '\"\$1\" ناملىق ھۈججەت باركەن.',
\t\t\t'errInvName'           : 'توغرا بولمىغان ھۈججەت قىسقۇچ ئىسمى.',
\t\t\t'errFolderNotFound'    : 'ھۈججەت قىسقۇچنى تاپالمىدى.',
\t\t\t'errFileNotFound'      : 'ھۈججەتنى تاپالمىدى.',
\t\t\t'errTrgFolderNotFound' : '\"\$1\" ناملىق ھۈججەت قىسقۇچنى تاپالمىدى.',
\t\t\t'errPopup'             : 'سەكرەپ چىققان يېڭى بەتنى تور كۆرگۈچ كۆرسەتمىدى، ئۈستىدىكى ئەسكەرتىشتىن تور كۆرگۈچنى كۆرسىتىشكە تەڭشەڭ.',
\t\t\t'errMkdir'             : '\"\$1\" ناملىق ھۈججەت قىسقۇچنى قۇرالمىدى.',
\t\t\t'errMkfile'            : '\"\$1\" ناملىق ھۈججەتنى قۇرالمىدى.',
\t\t\t'errRename'            : '\"\$1\" ناملىق ھۈججەتنىڭ ئىسمىنى يېڭىلاش مەغلۇپ بولدى.',
\t\t\t'errCopyFrom'          : ' \"\$1\" ناملىق ئورۇندىن ھۈججەت كۆچۈرۈش چەكلەنگەن.',
\t\t\t'errCopyTo'            : '\"\$1\" ناملىق ئورۇنغا ھۈججەت كۆچۈرۈش چەكلەنگەن.',
\t\t\t'errUpload'            : 'يۈكلەشتە خاتالىق كۆرۈلدى.',
\t\t\t'errUploadFile'        : '\"\$1\" ناملىق ھۈججەتنى يۈكلەشتە خاتالىق كۆرۈلدى.',
\t\t\t'errUploadNoFiles'     : 'يۈكلىمەكچى بولغان ھۈججەت تېپىلمىدى.',
\t\t\t'errUploadTotalSize'   : 'سانلىق مەلۇمات چوڭلىقى چەكلىمىدىن ئېشىپ كەتكەن..',
\t\t\t'errUploadFileSize'    : 'ھۈججەت چوڭلىقى چەكلىمىدىن ئېشىپ كەتكەن..',
\t\t\t'errUploadMime'        : 'چەكلەنگەن ھۈججەت شەكلى.',
\t\t\t'errUploadTransfer'    : '\"\$1\" ناملىق ھۈججەتنى يوللاشتا خاتالىق كۆرۈلدى.',
\t\t\t'errNotReplace'        : '\"\$1\" ناملىق ھۈججەت باركەن، ئالماشتۇرۇشقا بولمايدۇ.', // new
\t\t\t'errReplace'           : '\"\$1\" ناملىق ھۈججەتنى ئالماشتۇرۇش مەغلۇپ بولدى.',
\t\t\t'errSave'              : '\"\$1\" ناملىق ھۈججەتنى ساقلاش مەغلۇپ بولدى.',
\t\t\t'errCopy'              : '\"\$1\" ناملىق ھۈججەتنى كۆچۈرۈش مەغلۇپ بولدى.',
\t\t\t'errMove'              : '\"\$1\" ناملىق ھۈججەتنى يۆتكەش مەغلۇپ بولدى.',
\t\t\t'errCopyInItself'      : '\"\$1\" ناملىق ھۈججەتنى ئەسلى ئورنىغا يۆتكەش مەغلۇپ بولدى.',
\t\t\t'errRm'                : '\"\$1\" ناملىق ھۈججەتنى ئۆچۈرۈش مەغلۇپ بولدى.',
\t\t\t'errRmSrc'             : 'ئەسلى ھۈججەتنى ئۆچۈرۈش مەغلۇپ بولدى.',
\t\t\t'errExtract'           : ' \"\$1\" ناملىق مەلۇماتتىن ھۈججەت ئايرىش مەغلۇپ بولدى..',
\t\t\t'errArchive'           : 'پىرىسلانغان ھۈججەت ھاسىللاش مەغلۇپ بولدى.',
\t\t\t'errArcType'           : 'بۇ خىل پىرىسلانغان ھۈججەت شەكلىنى سىستېما بىر تەرەپ قىلالمىدى.',
\t\t\t'errNoArchive'         : 'ھۈججەت پىرىسلانغان ھۈججەت ئەمەس، ياكى توغرا پىرىسلانمىغان.',
\t\t\t'errCmdNoSupport'      : 'بۇ خىل بۇيرۇقنى بىر تەرەپ قىلالمىدى.',
\t\t\t'errReplByChild'       : '“\$1” ناملىق ھۈججەت قىسقۇچنى ئالماشۇتۇرۇشقا بولمايدۇ.',
\t\t\t'errArcSymlinks'       : 'بىخەتەرلىك ئۈچۈن بۇ مەشغۇلات ئەمەلدىن قالدۇرۇلدى..',
\t\t\t'errArcMaxSize'        : 'پىرىسلانغان ھۈججەتنىڭ چوڭلىقى چەكلىمىدىن ئېشىپ كەنكەن.',
\t\t\t'errResize'            : ' \"\$1\" چوڭلۇقنى تەڭشەشكە بولمىدى.',
\t\t\t'errResizeDegree'      : 'توغرا بولمىغان پىقىرىتىش گىرادۇسى',
\t\t\t'errResizeRotate'      : 'رەسىمنى پىقىرىتىشقا بولمىدى.',
\t\t\t'errResizeSize'        : 'توغرا بولمىغان رەسىم چوڭلىقى.',
\t\t\t'errResizeNoChange'    : 'رەسىم چوڭلىقى ئۆزگەرمىگەن.',
\t\t\t'errUsupportType'      : 'قوللىمايدىغان ھۈججەت شەكلى.',
\t\t\t'errNotUTF8Content'    : '\"\$1\" ناملىق ھۈججەتنىڭ كودى  UTF-8ئەمەسكەن،  تەھرىرلىگىلى بولمايدۇ.',  // added 9.11.2011
\t\t\t'errNetMount'          : ' \"\$1\" نى يۈكلەشتە خاتلىق يۈز بەردى..', // added 17.04.2012
\t\t\t'errNetMountNoDriver'  : 'بۇ خىل پروتوكول قوللانمىدى..',     // added 17.04.2012
\t\t\t'errNetMountFailed'    : 'يۈكلەش مەغلۇپ بولدى.',         // added 17.04.2012
\t\t\t'errNetMountHostReq'   : 'مۇلازىمىتىرنى كۆرسىتىپ بېرىڭ.', // added 18.04.2012
\t\t\t'errSessionExpires'    : 'Your session has expired due to inactivity.',
\t\t\t'errCreatingTempDir'   : 'Unable to create temporary directory: \"\$1\"',
\t\t\t'errFtpDownloadFile'   : 'Unable to download file from FTP: \"\$1\"',
\t\t\t'errFtpUploadFile'     : 'Unable to upload file to FTP: \"\$1\"',
\t\t\t'errFtpMkdir'          : 'Unable to create remote directory on FTP: \"\$1\"',
\t\t\t'errArchiveExec'       : 'Error while archiving files: \"\$1\"',
\t\t\t'errExtractExec'       : 'Error while extracting files: \"\$1\"',

\t\t\t/******************************* commands names ********************************/
\t\t\t'cmdarchive'   : 'پىرىسلاش',
\t\t\t'cmdback'      : 'قايتىش',
\t\t\t'cmdcopy'      : 'كۆچۈرۈش',
\t\t\t'cmdcut'       : 'كېسىش',
\t\t\t'cmddownload'  : 'چۈشۈرۈش',
\t\t\t'cmdduplicate' : 'نۇسخىلاش',
\t\t\t'cmdedit'      : 'تەھرىرلەش',
\t\t\t'cmdextract'   : 'پىرىستىن ھۈججەت چىقىرىش',
\t\t\t'cmdforward'   : 'ئ‍الدىغا مېڭىش',
\t\t\t'cmdgetfile'   : 'تاللاش',
\t\t\t'cmdhelp'      : 'ئەپ ھەققىدە',
\t\t\t'cmdhome'      : 'باش بەت',
\t\t\t'cmdinfo'      : 'ئۇچۇرلىرى',
\t\t\t'cmdmkdir'     : 'يېڭى ھۈججەت قىسقۇچ',
\t\t\t'cmdmkfile'    : 'يېڭى ھۈججەت',
\t\t\t'cmdopen'      : 'ئېچىش',
\t\t\t'cmdpaste'     : 'چاپلاش',
\t\t\t'cmdquicklook' : 'كۆرۈش',
\t\t\t'cmdreload'    : 'يېڭىلاش',
\t\t\t'cmdrename'    : 'نام يېڭىلاش',
\t\t\t'cmdrm'        : 'ئۆچۈرۈش',
\t\t\t'cmdsearch'    : 'ھۈججەت ئىزدەش',
\t\t\t'cmdup'        : 'ئالدىنقى مۇندەرىجىگە بېرىش',
\t\t\t'cmdupload'    : 'يۈكلەش',
\t\t\t'cmdview'      : 'كۆرۈش',
\t\t\t'cmdresize'    : 'چوڭلىقىنى تەڭشەش',
\t\t\t'cmdsort'      : 'تەرتىپ',
\t\t\t'cmdnetmount'  : 'توردىن قوشۇش', // added 18.04.2012

\t\t\t/*********************************** buttons ***********************************/
\t\t\t'btnClose'  : 'تاقاش',
\t\t\t'btnSave'   : 'ساقلاش',
\t\t\t'btnRm'     : 'ئۆچۈرۈش',
\t\t\t'btnApply'  : 'ئىشلىتىش',
\t\t\t'btnCancel' : 'بېكارلاش',
\t\t\t'btnNo'     : 'ياق',
\t\t\t'btnYes'    : 'ھەئە',
\t\t\t'btnMount'  : 'يۈكلەش',  // added 18.04.2012

\t\t\t/******************************** notifications ********************************/
\t\t\t'ntfopen'     : 'قىسقۇچنى ئېچىش',
\t\t\t'ntffile'     : 'ھۈججەتنى ئېچىش',
\t\t\t'ntfreload'   : 'يېڭىلاش',
\t\t\t'ntfmkdir'    : 'قىسقۇچ قۇرۇش',
\t\t\t'ntfmkfile'   : 'ھۈججەت قۇرۇش',
\t\t\t'ntfrm'       : 'ئۆچۈرۈش',
\t\t\t'ntfcopy'     : 'كۆچۈرۈش',
\t\t\t'ntfmove'     : 'يۆتكەش',
\t\t\t'ntfprepare'  : 'كۆچۈرۈش تەييارلىقى',
\t\t\t'ntfrename'   : 'نام يېڭىلاش',
\t\t\t'ntfupload'   : 'يۈكلەش',
\t\t\t'ntfdownload' : 'چۈشۈرۈش',
\t\t\t'ntfsave'     : 'ساقلاش',
\t\t\t'ntfarchive'  : 'پىرىسلاش',
\t\t\t'ntfextract'  : 'پىرىستىن يېشىش',
\t\t\t'ntfsearch'   : 'ئىزدەش',
\t\t\t'ntfresize'   : 'چوڭلىقى ئۆزگەرتىلىۋاتىدۇ',
\t\t\t'ntfsmth'     : 'ئالدىراش >_<',
\t\t\t'ntfloadimg'  : 'رەسىم ئېچىلىۋاتىدۇ',
      \t\t'ntfnetmount' : 'تور ھۈججىتى يۈكلىنىۋاتىدۇ', // added 18.04.2012
\t\t\t'ntfdim'      : 'Acquiring image dimension',

\t\t\t/************************************ dates **********************************/
\t\t\t'dateUnknown' : 'ئېنىق ئەمەس',
\t\t\t'Today'       : 'بۈگۈن',
\t\t\t'Yesterday'   : 'تۆنۈگۈن',
\t\t\t'msJan'       : '1-ئاي',
\t\t\t'msFeb'       : '2-ئاي',
\t\t\t'msMar'       : '3-ئاي',
\t\t\t'msApr'       : '4-ئاي',
\t\t\t'msMay'       : '5-ئاي',
\t\t\t'msJun'       : '6-ئاي',
\t\t\t'msJul'       : '7-ئاي',
\t\t\t'msAug'       : '8-ئاي',
\t\t\t'msSep'       : '9-ئ‍اي',
\t\t\t'msOct'       : '10-ئاي',
\t\t\t'msNov'       : '11-ئاي',
\t\t\t'msDec'       : '12-ئاي',
\t\t\t'January'     : '1-ئاي',
\t\t\t'February'    : '2-ئاي',
\t\t\t'March'       : '3-ئاي',
\t\t\t'April'       : '4-ئاي',
\t\t\t'May'         : '5-ئاي',
\t\t\t'June'        : '6-ئاي',
\t\t\t'July'        : '7-ئاي',
\t\t\t'August'      : '8-ئاي',
\t\t\t'September'   : '9-ئاي',
\t\t\t'October'     : '10-ئاي',
\t\t\t'November'    : '11-ئاي',
\t\t\t'December'    : '12-ئاي',
\t\t\t'Sunday'      : 'يەكشەنبە',
\t\t\t'Monday'      : 'دۈشەنبە',
\t\t\t'Tuesday'     : 'سەيشەنبە',
\t\t\t'Wednesday'   : 'چارشەنبە',
\t\t\t'Thursday'    : 'پەيشەنبە',
\t\t\t'Friday'      : 'جۈمە',
\t\t\t'Saturday'    : 'شەنبە',
\t\t\t'Sun'         : 'يە',
\t\t\t'Mon'         : 'دۈ',
\t\t\t'Tue'         : 'سە',
\t\t\t'Wed'         : 'چا',
\t\t\t'Thu'         : 'پە',
\t\t\t'Fri'         : 'جۈ',
\t\t\t'Sat'         : 'شە',

\t\t\t/******************************** sort variants ********************************/
\t\t\t'sortname'          : 'نامى ',
\t\t\t'sortkind'          : 'شەكلى ',
\t\t\t'sortsize'          : 'چوڭلىقى',
\t\t\t'sortdate'          : 'ۋاقتى',
\t\t\t'sortFoldersFirst'  : 'قىسقۇچلار باشتا',

\t\t\t/********************************** messages **********************************/
\t\t\t'confirmReq'      : 'مۇقىملاشتۇرۇڭ',
\t\t\t'confirmRm'       : 'راستىنلا ئۆچۈرەمسىز?<br/>كەينىگە قايتۇرغىلى بولمايدۇ!',
\t\t\t'confirmRepl'     : 'ھازىرقى ھۈججەت بىلەن كونىسىنى ئالماشتۇرامسىز?',
\t\t\t'apllyAll'        : 'ھەممىسىگە ئىشلىتىش',
\t\t\t'name'            : 'نامى',
\t\t\t'size'            : 'چوڭلىقى',
\t\t\t'perms'           : 'ھوقۇق',
\t\t\t'modify'          : 'ئۆزگەرگەن ۋاقتى',
\t\t\t'kind'            : 'تۈرى',
\t\t\t'read'            : 'ئوقۇش',
\t\t\t'write'           : 'يېزىش',
\t\t\t'noaccess'        : 'ھوقۇق يوق',
\t\t\t'and'             : 'ھەم',
\t\t\t'unknown'         : 'ئېنىق ئەمەس',
\t\t\t'selectall'       : 'ھەممىنى تاللاش',
\t\t\t'selectfiles'     : 'تاللاش',
\t\t\t'selectffile'     : 'بىرىنچىسىنى تاللاش',
\t\t\t'selectlfile'     : 'ئەڭ ئاخىرقىسىنى تاللاش',
\t\t\t'viewlist'        : 'جەدۋەللىك كۆرىنىشى',
\t\t\t'viewicons'       : 'رەسىملىك كۆرىنىشى',
\t\t\t'places'          : 'ئورنى',
\t\t\t'calc'            : 'ھېسابلاش',
\t\t\t'path'            : 'ئورنى',
\t\t\t'aliasfor'        : 'باشقا نامى',
\t\t\t'locked'          : 'تاقالغان',
\t\t\t'dim'             : 'چوڭلىقى',
\t\t\t'files'           : 'ھۈججەت',
\t\t\t'folders'         : 'قىسقۇچ',
\t\t\t'items'           : 'تۈرلەر',
\t\t\t'yes'             : 'ھەئە',
\t\t\t'no'              : 'ياق',
\t\t\t'link'            : 'ئۇلىنىش',
\t\t\t'searcresult'     : 'ئىزدەش نەتىجىسى',
\t\t\t'selected'        : 'تاللانغان تۈرلەر',
\t\t\t'about'           : 'چۈشەنچە',
\t\t\t'shortcuts'       : 'تېز كونۇپكىلار',
\t\t\t'help'            : 'ياردەم',
\t\t\t'webfm'           : 'تور ھۈججەتلىرىنى باشقۇرۇش',
\t\t\t'ver'             : 'نەشرى',
\t\t\t'protocolver'     : 'پروتوكول نەشرى',
\t\t\t'homepage'        : 'تۈر باش بېتى',
\t\t\t'docs'            : 'ھۈججەت',
\t\t\t'github'          : 'Fork us on Github',
\t\t\t'twitter'         : 'Follow us on twitter',
\t\t\t'facebook'        : 'Join us on facebook',
\t\t\t'team'            : 'گۇرۇپپا',
\t\t\t'chiefdev'        : 'باش پىروگراممىر',
\t\t\t'developer'       : 'پىروگراممىر',
\t\t\t'contributor'     : 'تۆھپىكار',
\t\t\t'maintainer'      : 'ئاسرىغۇچى',
\t\t\t'translator'      : 'تەرجىمان',
\t\t\t'icons'           : 'سىنبەلگە',
\t\t\t'dontforget'      : 'تەرىڭىزنى سۈرتىدىغان قولياغلىقىڭىزنى ئۇنۇتماڭ جۇمۇ',
\t\t\t'shortcutsof'     : 'تېز كونۇپكىلار چەكلەنگەن',
\t\t\t'dropFiles'       : 'ھۈججەتنى موشۇ يەرگە تاشلاڭ',
\t\t\t'or'              : 'ياكى',
\t\t\t'selectForUpload' : 'يۈكلىمەكچى بولغان ھۈججەتنى تاللاڭ',
\t\t\t'moveFiles'       : 'يۆتكەش',
\t\t\t'copyFiles'       : 'كۆچۈرۈش',
\t\t\t'rmFromPlaces'    : 'ھۈججەتلەرنى ئۆچۈرۈش',
\t\t\t'aspectRatio'     : 'نىسبىتىنى ساقلاش',
\t\t\t'scale'           : 'نىسبىتى',
\t\t\t'width'           : 'ئۇزۇنلىقى',
\t\t\t'height'          : 'ئىگىزلىكى',
\t\t\t'resize'          : 'چوڭلىقىنى تەڭشەش',
\t\t\t'crop'            : 'كېسىش',
\t\t\t'rotate'          : 'پىقىرىتىش',
\t\t\t'rotate-cw'       : 'سائەت ئىستىرىلكىسى بويىچە 90 گىرادۇس پىقىرىتىش',
\t\t\t'rotate-ccw'      : 'سائەت ئىستىرىلكىسىنى تەتۈر يۆنىلىشى بويىچە 90گىرادۇس پىقىرىتىش',
\t\t\t'degree'          : 'گىرادۇس',
\t\t\t'netMountDialogTitle' : 'Mount network volume', // added 18.04.2012
\t\t\t'protocol'            : 'پىروتوكڭل', // added 18.04.2012
\t\t\t'host'                : 'مۇلازىمىتىر', // added 18.04.2012
\t\t\t'port'            : 'پورت', // added 18.04.2012
\t\t\t'user'            : 'ئەزا', // added 18.04.2012
\t\t\t'pass'            : 'ئىم', // added 18.04.2012

\t\t\t/********************************** mimetypes **********************************/
\t\t\t'kindUnknown'     : 'ئېنىق ئەمەس',
\t\t\t'kindFolder'      : 'ھۈججەت قىسقۇچ',
\t\t\t'kindAlias'       : 'باشقا نامى',
\t\t\t'kindAliasBroken' : 'باشقا نامى خاتا',
\t\t\t// applications
\t\t\t'kindApp'         : 'كود ھۈججىتى',
\t\t\t'kindPostscript'  : 'Postscript ھۈججىتى',
\t\t\t'kindMsOffice'    : 'Microsoft Office ھۈججىتى',
\t\t\t'kindMsWord'      : 'Microsoft Word ھۈججىتى',
\t\t\t'kindMsExcel'     : 'Microsoft Excel ھۈججىتى',
\t\t\t'kindMsPP'        : 'Microsoft Powerpoint ھۈججىتى',
\t\t\t'kindOO'          : 'Open Office ھۈججىتى',
\t\t\t'kindAppFlash'    : 'Flash ھۈججىتى',
\t\t\t'kindPDF'         : 'Portable Document Format (PDF)',
\t\t\t'kindTorrent'     : 'Bittorrent ھۈججىتى',
\t\t\t'kind7z'          : '7z ھۈججىتى',
\t\t\t'kindTAR'         : 'TAR ھۈججىتى',
\t\t\t'kindGZIP'        : 'GZIP ھۈججىتى',
\t\t\t'kindBZIP'        : 'BZIP ھۈججىتى',
\t\t\t'kindXZ'          : 'XZ ھۈججىتى',
\t\t\t'kindZIP'         : 'ZIP ھۈججىتى',
\t\t\t'kindRAR'         : 'RAR ھۈججىتى',
\t\t\t'kindJAR'         : 'Java JAR ھۈججىتى',
\t\t\t'kindTTF'         : 'True Type فونت',
\t\t\t'kindOTF'         : 'Open Type فونت',
\t\t\t'kindRPM'         : 'RPM',
\t\t\t// texts
\t\t\t'kindText'        : 'تېكىست',
\t\t\t'kindTextPlain'   : 'تېكىست',
\t\t\t'kindPHP'         : 'PHP ھۈججىتى',
\t\t\t'kindCSS'         : 'CSS ھۈججىتى',
\t\t\t'kindHTML'        : 'HTML ھۈججىتى',
\t\t\t'kindJS'          : 'Javascript ھۈججىتى',
\t\t\t'kindRTF'         : 'RTF ھۈججىتى',
\t\t\t'kindC'           : 'C ھۈججىتى',
\t\t\t'kindCHeader'     : 'C باش ھۈججىتى',
\t\t\t'kindCPP'         : 'C++ ھۈججىتى',
\t\t\t'kindCPPHeader'   : 'C++ باش ھۈججىتى',
\t\t\t'kindShell'       : 'Unix سىكىرىپت ھۈججىتى',
\t\t\t'kindPython'      : 'Python ھۈججىتى',
\t\t\t'kindJava'        : 'Java ھۈججىتى',
\t\t\t'kindRuby'        : 'Ruby ھۈججىتى',
\t\t\t'kindPerl'        : 'Perl ھۈججىتى',
\t\t\t'kindSQL'         : 'SQL ھۈججىتى',
\t\t\t'kindXML'         : 'XML ھۈججىتى',
\t\t\t'kindAWK'         : 'AWK ھۈججىتى',
\t\t\t'kindCSV'         : 'CSV ھۈججىتى',
\t\t\t'kindDOCBOOK'     : 'Docbook XML ھۈججىتى',
\t\t\t// images
\t\t\t'kindImage'       : 'رەسىم',
\t\t\t'kindBMP'         : 'BMP رەسىم',
\t\t\t'kindJPEG'        : 'JPEG رەسىم',
\t\t\t'kindGIF'         : 'GIF رەسىم',
\t\t\t'kindPNG'         : 'PNG رەسىم',
\t\t\t'kindTIFF'        : 'TIFF رەسىم',
\t\t\t'kindTGA'         : 'TGA رەسىم',
\t\t\t'kindPSD'         : 'Adobe Photoshop رەسىم',
\t\t\t'kindXBITMAP'     : 'X bitmap رەسىم',
\t\t\t'kindPXM'         : 'Pixelmator رەسىم',
\t\t\t// media
\t\t\t'kindAudio'       : 'ئاۋاز',
\t\t\t'kindAudioMPEG'   : 'MPEG ئاۋاز',
\t\t\t'kindAudioMPEG4'  : 'MPEG-4 ئاۋاز',
\t\t\t'kindAudioMIDI'   : 'MIDI ئاۋاز',
\t\t\t'kindAudioOGG'    : 'Ogg Vorbis ئاۋاز',
\t\t\t'kindAudioWAV'    : 'WAV ئاۋاز',
\t\t\t'AudioPlaylist'   : 'MP3 قويۇش تىزىملىكى',
\t\t\t'kindVideo'       : 'سىن',
\t\t\t'kindVideoDV'     : 'DV سىن',
\t\t\t'kindVideoMPEG'   : 'MPEG سىن',
\t\t\t'kindVideoMPEG4'  : 'MPEG-4 سىن',
\t\t\t'kindVideoAVI'    : 'AVI سىن',
\t\t\t'kindVideoMOV'    : 'Quick Time سىن',
\t\t\t'kindVideoWM'     : 'Windows Media سىن',
\t\t\t'kindVideoFlash'  : 'Flash سىن',
\t\t\t'kindVideoMKV'    : 'Matroska سىن',
\t\t\t'kindVideoOGG'    : 'Ogg سىن'
\t\t}
\t};
}));
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.ug_CN.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.ug_CN.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.ug_CN.js");
    }
}
