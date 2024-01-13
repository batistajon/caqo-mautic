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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.si.js */
class __TwigTemplate_84d0dddfa3302f05d842e1fed22d0792db1d838284723f0affae72946fb77763 extends Template
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
 * Sinhala translation
 * @author CodeLyokoXtEAM <XcodeLyokoTEAM@gmail.com>
 * @version 2018-03-26
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
\telFinder.prototype.i18.si = {
\t\ttranslator : 'CodeLyokoXtEAM &lt;XcodeLyokoTEAM@gmail.com&gt;',
\t\tlanguage   : 'Sinhala',
\t\tdirection  : 'ltr',
\t\tdateFormat : 'Y.m.d h:i A', // Mar 13, 2012 05:27 PM
\t\tfancyDateFormat : '\$1 h:i A', // will produce smth like: Today 12:25 PM
\t\tnonameDateFormat : 'Ymd-His', // to apply if upload file is noname: 120513172700
\t\tmessages   : {

\t\t\t/********************************** errors **********************************/
\t\t\t'error'                : 'දෝෂයකි.',
\t\t\t'errUnknown'           : 'නොදන්නා දෝෂයකි.',
\t\t\t'errUnknownCmd'        : 'නොදන්නා විධානයකි.',
\t\t\t'errJqui'              : 'වලංගු නොවන jQuery UI සැකැස්මකි. තේරිය හැකි, ඇදගෙන යාම සහ ඇද දැමිය හැකි කොටස් ඇතුළත් කළ යුතුය.',
\t\t\t'errNode'              : 'ElFinder විසින් DOM Element නිර්මාණය කිරීමට අවශ්‍යව අැත.',
\t\t\t'errURL'               : 'වලංගු නොවන elFinder සැකැස්මකි! URL විකල්පය සැකසා නැත.',
\t\t\t'errAccess'            : 'භාවිතය අත්හිටුවා ඇත.',
\t\t\t'errConnect'           : 'පසුබිම(Backend) වෙත සම්බන්ධ වීමට නොහැකිය.',
\t\t\t'errAbort'             : 'සම්බන්ධතාවය වසාදමා ඇත.',
\t\t\t'errTimeout'           : 'සම්බන්ධතා කල් ඉකුත්වී ඇත.',
\t\t\t'errNotFound'          : 'පසුබිම(Backend) සොයාගත නොහැකි විය.',
\t\t\t'errResponse'          : 'වලංගු නොවන පසුබිම(Backend) ප්‍රතිචාරය.',
\t\t\t'errConf'              : 'වලංගු නොවන Backend සැකැස්මකි.',
\t\t\t'errJSON'              : 'PHP JSON මොඩියුලය ස්ථාපනය කර නැත.',
\t\t\t'errNoVolumes'         : 'කියවිය හැකි එ්කක(volumes) නොමැත.',
\t\t\t'errCmdParams'         : '\"\$1\" නම් විධානය වලංගු නොවන පරාමිතියකි.',
\t\t\t'errDataNotJSON'       : 'JSON දත්ත නොවේ.',
\t\t\t'errDataEmpty'         : 'හිස් දත්තයකි.',
\t\t\t'errCmdReq'            : 'Backend සඳහා ඉල්ලන ලද විධානයේ නම අවශ්‍ය වේ.',
\t\t\t'errOpen'              : '\"\$1\" විවෘත කළ නොහැක.',
\t\t\t'errNotFolder'         : 'අායිත්තම(object) ෆොල්ඩරයක් නොවේ.',
\t\t\t'errNotFile'           : 'අායිත්තම(object) ගොනුවක් නොවේ.',
\t\t\t'errRead'              : '\"\$1\" කියවීමට නොහැක.',
\t\t\t'errWrite'             : '\"\$1\" තුල ලිවීමට නොහැකිය.',
\t\t\t'errPerm'              : 'අවසරය නොමැත.',
\t\t\t'errLocked'            : '\"\$1\" අගුළු දමා ඇති අතර එය නැවත නම් කිරීම, සම්පූර්ණයෙන් විස්ථාපනය කිරීම හෝ ඉවත් කිරීම කළ නොහැක.',
\t\t\t'errExists'            : '\"\$1\" නම් ගොනුව දැනටමත් පවතී.',
\t\t\t'errInvName'           : 'ගොනු නම වලංගු නොවේ.',
\t\t\t'errInvDirname'        : 'ෆෝල්ඩර් නම වලංගු නොවේ.',  // from v2.1.24 added 12.4.2017
\t\t\t'errFolderNotFound'    : 'ෆෝල්ඩරය හමු නොවිණි.',
\t\t\t'errFileNotFound'      : 'ගොනුව හමු නොවිණි.',
\t\t\t'errTrgFolderNotFound' : 'ඉලක්කගත ෆෝල්ඩරය \"\$1\" හමු නොවිනි.',
\t\t\t'errPopup'             : 'බ්‍රවුසරය උත්පතන කවුළුව විවෘත කිරීම වළක්වයි. ගොනු විවෘත කිරීම සඳහා බ්‍රවුසරයේ විකල්ප තුළ එය සක්රිය කරන්න.',
\t\t\t'errMkdir'             : '\"\$1\" ෆෝල්ඩරය සෑදීමට නොහැකිය.',
\t\t\t'errMkfile'            : '\"\$1\" ගොනුව සෑදිය නොහැක.',
\t\t\t'errRename'            : '\"\$1\" නැවත නම් කිරීමට නොහැකි විය.',
\t\t\t'errCopyFrom'          : '\"\$1\" volume යෙන් ගොනු පිටපත් කිරීම තහනම්ය.',
\t\t\t'errCopyTo'            : '\"\$1\" volume යට ගොනු පිටපත් කිරීම තහනම්ය.',
\t\t\t'errMkOutLink'         : 'volume root යෙන් පිටතට සබැඳිය(link) නිර්මාණය කිරීමට නොහැකි විය.', // from v2.1 added 03.10.2015
\t\t\t'errUpload'            : 'උඩුගත(upload) කිරීමේ දෝෂයකි.',  // old name - errUploadCommon
\t\t\t'errUploadFile'        : '\"\$1\" උඩුගත(upload) කිරීමට නොහැකි විය.', // old name - errUpload
\t\t\t'errUploadNoFiles'     : 'උඩුගත(upload) කිරීම සඳහා ගොනු කිසිවක් සොයාගත නොහැකි විය.',
\t\t\t'errUploadTotalSize'   : 'දත්ත අවසර දී අැති උපරිම ප්‍රමාණය ඉක්මවා ඇත.', // old name - errMaxSize
\t\t\t'errUploadFileSize'    : 'ගොනු අවසර දී අැති උපරිම ප්‍රමාණය ඉක්මවා ඇත.', //  old name - errFileMaxSize
\t\t\t'errUploadMime'        : 'ගොනු වර්ගයට අවසර නැත.',
\t\t\t'errUploadTransfer'    : '\"\$1\" ව මාරු කිරීමේ දෝෂයකි.',
\t\t\t'errUploadTemp'        : 'upload කිරීම සඳහා තාවකාලික ගොනුව සෑදිය නොහැක.', // from v2.1 added 26.09.2015
\t\t\t'errNotReplace'        : '\"\$1\" අායිත්තම(object) දැනටමත් මෙම ස්ථානයේ පවතී, වෙනත් වර්ගයකිනි ප්‍රතිස්ථාපනය කළ නොහැක.', // new
\t\t\t'errReplace'           : '\"\$1\" ප්‍රතිස්ථාපනය කළ නොහැක.',
\t\t\t'errSave'              : '\"\$1\" සුරැකීමට නොහැක.',
\t\t\t'errCopy'              : '\"\$1\" පිටපත් කිරීමට නොහැක.',
\t\t\t'errMove'              : '\"\$1\" සම්පූර්ණයෙන් විස්ථාපනය කිරීමට නොහැක.',
\t\t\t'errCopyInItself'      : '\"\$1\" තුලට පිටපත් කිරීමට නොහැක.',
\t\t\t'errRm'                : '\"\$1\" ඉවත් කිරීමට නොහැකි විය.',
\t\t\t'errTrash'             : 'කුණු-කූඩය තුලට දැමීමට නොහැක.', // from v2.1.24 added 30.4.2017
\t\t\t'errRmSrc'             : 'මූලාශ්‍රය ගොනු(ව) ඉවත් කළ නොහැක.',
\t\t\t'errExtract'           : '\"\$1\" වෙතින් ගොනු දිග හැරීමට නොහැක.',
\t\t\t'errArchive'           : 'සංරක්ෂිතය සෑදීමට නොහැකි විය.',
\t\t\t'errArcType'           : 'නොගැලපෙන සංරක්ෂණ වර්ගයකි.',
\t\t\t'errNoArchive'         : 'ගොනුව නොගැලපෙන සංරක්ෂණ වර්ගයක් හෝ සංරක්ෂිතයක් නොවේ.',
\t\t\t'errCmdNoSupport'      : 'පසුබිම(Backend) මෙම විධානය නොදනී.',
\t\t\t'errReplByChild'       : '\"\$1\" ෆෝල්ඩරය එහිම අඩංගු අයිතමයක් මගින් ප්‍රතිස්ථාපනය කළ නොහැක.',
\t\t\t'errArcSymlinks'       : 'ආරක්ෂිත හේතුව නිසා අනුමත නොකෙරෙන සබැඳි සම්බන්දතා හෝ ලිපිගොනු නම් අඩංගු බැවින් සංරක්ෂිතය දිග හැරීම කිරීමට ඉඩ නොදෙන.', // edited 24.06.2012
\t\t\t'errArcMaxSize'        : 'සංරක්ෂිතය ලිපිගොනු උපරිම ප්‍රමාණය ඉක්මවා ඇත.',
\t\t\t'errResize'            : 'ප්‍රතිප්‍රමාණය කිරීමට නොහැකි විය.',
\t\t\t'errResizeDegree'      : 'වලංගු නොවන භ්‍රමණ කෝණයකි.',  // added 7.3.2013
\t\t\t'errResizeRotate'      : 'රූපය භ්‍රමණය කිරීමට නොහැකි විය.',  // added 7.3.2013
\t\t\t'errResizeSize'        : 'රූපයේ ප්‍රමාණය වලංගු නොවේ.',  // added 7.3.2013
\t\t\t'errResizeNoChange'    : 'රූපයේ ප්‍රමාණය වෙනස් නොවුණි.',  // added 7.3.2013
\t\t\t'errUsupportType'      : 'නොගැලපෙන ගොනු වර්ගයකි.',
\t\t\t'errNotUTF8Content'    : '\"\$1\" ගොනුව UTF-8 හි නොමැති අතර සංස්කරණය කළ නොහැක.',  // added 9.11.2011
\t\t\t'errNetMount'          : '\"\$1\" සවි(mount) කිරීමට නොහැක.', // added 17.04.2012
\t\t\t'errNetMountNoDriver'  : 'ප්‍රොටොකෝලය(protocol) නොගැලපේ.',     // added 17.04.2012
\t\t\t'errNetMountFailed'    : 'සවි කිරීම(mount කිරීම) අසාර්ථක විය.',         // added 17.04.2012
\t\t\t'errNetMountHostReq'   : 'ධාරකය(Host) අවශ්‍ය වේ.', // added 18.04.2012
\t\t\t'errSessionExpires'    : 'ඔබේ අක්‍රියතාව හේතුවෙන් සැසිය(session) කල් ඉකුත් වී ඇත.',
\t\t\t'errCreatingTempDir'   : 'තාවකාලික ඩිරෙක්ටරයක්(directory) ​​සෑදිය නොහැක: \"\$1\"',
\t\t\t'errFtpDownloadFile'   : 'FTP වලින් ගොනුව බාගත(download) කිරීමට නොහැකි විය: \"\$1\"',
\t\t\t'errFtpUploadFile'     : 'ගොනුව FTP වෙත උඩුගත(upload) කිරීමට නොහැකි විය: \"\$1\"',
\t\t\t'errFtpMkdir'          : 'FTP මත දුරස්ථ නාමාවලියක්(remote directory) නිර්මාණය කිරීමට නොහැකි විය: \"\$1\"',
\t\t\t'errArchiveExec'       : 'ගොනු සංරක්ෂණය(archiving) කිරීමේදී දෝෂයක් ඇතිවිය: \"\$1\"',
\t\t\t'errExtractExec'       : 'ගොනු දිගහැරීමේදී(extracting) දෝෂයක් ඇතිවිය: \"\$1\"',
\t\t\t'errNetUnMount'        : 'විසන්ධි කිරීමට(unmount) නොහැක.', // from v2.1 added 30.04.2012
\t\t\t'errConvUTF8'          : 'UTF-8 වෙත පරිවර්තනය කළ නොහැක.', // from v2.1 added 08.04.2014
\t\t\t'errFolderUpload'      : 'ඔබ ෆෝල්ඩරය උඩුගත(upload) කිරීමට කැමති නම් නවීන බ්‍රවුසරයකින් උත්සාහ කරන්න.', // from v2.1 added 26.6.2015
\t\t\t'errSearchTimeout'     : '\"\$1\" සෙවීම කල් ඉකුත්වී ඇත. සෙවුම් ප්‍රතිඵල අර්ධ වශයෙන් දිස්වේ.', // from v2.1 added 12.1.2016
\t\t\t'errReauthRequire'     : 'නැවත බලය(Re-authorization) ලබා දීම අවශ්‍ය වේ.', // from v2.1.10 added 24.3.2016
\t\t\t'errMaxTargets'        : 'තෝරා ගත හැකි උපරිම අයිතම සංඛ්‍යාව \$1 ක් වේ.', // from v2.1.17 added 17.10.2016
\t\t\t'errRestore'           : 'කුණු කූඩයෙන් නැවත ලබා ගත නොහැක. යළි පිහිටුවීමේ ගමනාන්තය(restore destination) හඳුනාගත නොහැක.', // from v2.1.24 added 3.5.2017
\t\t\t'errEditorNotFound'    : 'මෙම ගොනු වර්ගයේ සංස්කාරකය හමු නොවිණි.', // from v2.1.25 added 23.5.2017
\t\t\t'errServerError'       : 'සේවාදායකයේ පැත්තෙන්(server side) දෝශයක් ඇතිවිය.', // from v2.1.25 added 16.6.2017
\t\t\t'errEmpty'             : '\"\$1\" ෆෝල්ඩරය හිස් කිරීමට නොහැක.', // from v2.1.25 added 22.6.2017

\t\t\t/******************************* commands names ********************************/
\t\t\t'cmdarchive'   : 'සංරක්ෂිතය(archive) නිර්මාණය කරන්න',
\t\t\t'cmdback'      : 'ආපසු',
\t\t\t'cmdcopy'      : 'පිටපත් කරන්න',
\t\t\t'cmdcut'       : 'මුළුමනින්ම පිටපත් කරන්න(Cut)',
\t\t\t'cmddownload'  : 'බාගත කරන්න(Download)',
\t\t\t'cmdduplicate' : 'අනුපිටපත් කරන්න(Duplicate)',
\t\t\t'cmdedit'      : 'ගොනුව සංස්කරණය කරන්න',
\t\t\t'cmdextract'   : 'සංරක්ෂිතයේ ගොනු දිගහරින්න(Extract)',
\t\t\t'cmdforward'   : 'ඉදිරියට',
\t\t\t'cmdgetfile'   : 'ගොනු තෝරන්න',
\t\t\t'cmdhelp'      : 'මෙම මෘදුකාංගය පිළිබඳව',
\t\t\t'cmdhome'      : 'නිවහන(Home)',
\t\t\t'cmdinfo'      : 'තොරතුරු ලබාගන්න',
\t\t\t'cmdmkdir'     : 'අළුත් ෆෝල්ඩරයක්',
\t\t\t'cmdmkdirin'   : 'අළුත් ෆෝල්ඩරයක් තුළට', // from v2.1.7 added 19.2.2016
\t\t\t'cmdmkfile'    : 'නව ගොනුවක්',
\t\t\t'cmdopen'      : 'විවෘත කරන්න',
\t\t\t'cmdpaste'     : 'දමන්න(Paste)',
\t\t\t'cmdquicklook' : 'පූර්ව දර්ශනයක්(Preview)',
\t\t\t'cmdreload'    : 'නැවත අළුත් කරන්න(Reload)',
\t\t\t'cmdrename'    : 'නම වෙනස් කරන්න',
\t\t\t'cmdrm'        : 'මකන්න',
\t\t\t'cmdtrash'     : 'කුණු කූඩයට දමන්න', //from v2.1.24 added 29.4.2017
\t\t\t'cmdrestore'   : 'යළි පිහිටුවන්න(Restore)', //from v2.1.24 added 3.5.2017
\t\t\t'cmdsearch'    : 'ගොනු සොයන්න',
\t\t\t'cmdup'        : 'ප්‍ර්‍රධාන නාමාවලිය(parent directory) වෙත යන්න',
\t\t\t'cmdupload'    : 'ගොනු උඩුගත(Upload) කරන්න',
\t\t\t'cmdview'      : 'දර්ශනය(View)',
\t\t\t'cmdresize'    : 'ප්‍රථිප්‍රමාණය සහ භ්‍රමණය',
\t\t\t'cmdsort'      : 'වර්ගීකරණය කරන්න',
\t\t\t'cmdnetmount'  : 'ජාල එ්කකයක් සවි කරන්න(Mount network volume)', // added 18.04.2012
\t\t\t'cmdnetunmount': 'ගලවන්න(Unmount)', // from v2.1 added 30.04.2012
\t\t\t'cmdplaces'    : 'පහසු ස්ථානයට(To Places)', // added 28.12.2014
\t\t\t'cmdchmod'     : 'ක්‍රමය වෙනස් කරන්න', // from v2.1 added 20.6.2015
\t\t\t'cmdopendir'   : 'ෆෝල්ඩරය විවෘත කරන්න', // from v2.1 added 13.1.2016
\t\t\t'cmdcolwidth'  : 'නැවත තීරු පළල පිහිටුවන්න', // from v2.1.13 added 12.06.2016
\t\t\t'cmdfullscreen': 'පුළුල් තිරය', // from v2.1.15 added 03.08.2016
\t\t\t'cmdmove'      : 'මාරු කරන්න(Move)', // from v2.1.15 added 21.08.2016
\t\t\t'cmdempty'     : 'ෆෝල්ඩරය හිස් කරන්න', // from v2.1.25 added 22.06.2017
\t\t\t'cmdundo'      : 'නිෂ්ප්‍රභ කරන්න', // from v2.1.27 added 31.07.2017
\t\t\t'cmdredo'      : 'නැවත කරන්න', // from v2.1.27 added 31.07.2017
\t\t\t'cmdpreference': 'අභිමතයන් (Preferences)', // from v2.1.27 added 03.08.2017
\t\t\t'cmdselectall' : 'සියල්ල තෝරන්න', // from v2.1.28 added 15.08.2017
\t\t\t'cmdselectnone': 'කිසිවක් තෝරන්න එපා', // from v2.1.28 added 15.08.2017
\t\t\t'cmdselectinvert': 'විරුද්ධ අාකාරයට තෝරන්න', // from v2.1.28 added 15.08.2017

\t\t\t/*********************************** buttons ***********************************/
\t\t\t'btnClose'  : 'වසන්න',
\t\t\t'btnSave'   : 'සුරකින්න',
\t\t\t'btnRm'     : 'ඉවත් කරන්න',
\t\t\t'btnApply'  : 'යොදන්න(Apply)',
\t\t\t'btnCancel' : 'අවලංගු කරන්න',
\t\t\t'btnNo'     : 'නැත',
\t\t\t'btnYes'    : 'ඔව්',
\t\t\t'btnMount'  : 'සවිකිරීම(Mount)',  // added 18.04.2012
\t\t\t'btnApprove': 'කරුණාකර \$1 අනුමත කරන්න', // from v2.1 added 26.04.2012
\t\t\t'btnUnmount': 'ගලවන්න(Unmount)', // from v2.1 added 30.04.2012
\t\t\t'btnConv'   : 'පරිවර්තනය කරන්න', // from v2.1 added 08.04.2014
\t\t\t'btnCwd'    : 'මෙතන',      // from v2.1 added 22.5.2015
\t\t\t'btnVolume' : 'එ්කකය(Volume)',    // from v2.1 added 22.5.2015
\t\t\t'btnAll'    : 'සියල්ල',       // from v2.1 added 22.5.2015
\t\t\t'btnMime'   : 'MIME වර්ගය', // from v2.1 added 22.5.2015
\t\t\t'btnFileName':'ගොනුවේ නම',  // from v2.1 added 22.5.2015
\t\t\t'btnSaveClose': 'සුරකින්න සහ වසන්න', // from v2.1 added 12.6.2015
\t\t\t'btnBackup' : 'උපස්ථ(Backup) කරන්න', // fromv2.1 added 28.11.2015
\t\t\t'btnRename'    : 'නම වෙනස් කරන්න',      // from v2.1.24 added 6.4.2017
\t\t\t'btnRenameAll' : 'නම වෙනස් කරන්න(සියල්ල)', // from v2.1.24 added 6.4.2017
\t\t\t'btnPrevious' : 'පෙර (\$1/\$2)', // from v2.1.24 added 11.5.2017
\t\t\t'btnNext'     : 'ඊළඟ (\$1/\$2)', // from v2.1.24 added 11.5.2017
\t\t\t'btnSaveAs'   : 'වෙනත් නමකින් සුරකිමින්(Save As)', // from v2.1.25 added 24.5.2017

\t\t\t/******************************** notifications ********************************/
\t\t\t'ntfopen'     : 'ෆෝල්ඩරය විවෘත කරමින්',
\t\t\t'ntffile'     : 'ගොනුව විවෘත කරමින්',
\t\t\t'ntfreload'   : 'ෆෝල්ඩර් අන්තර්ගතය නැවත අළුත් කරමින්(Reloading)',
\t\t\t'ntfmkdir'    : 'ෆෝල්ඩරයක් නිර්මාණය කරමින්',
\t\t\t'ntfmkfile'   : 'ගොනුව නිර්මාණය කරමින්',
\t\t\t'ntfrm'       : 'අයිතමයන් මකමින්',
\t\t\t'ntfcopy'     : 'අයිතමයන් පිටපත් කරමින්',
\t\t\t'ntfmove'     : 'අයිතමයන් සම්පූර්ණයෙන් විස්ථාපනය කරමින්',
\t\t\t'ntfprepare'  : 'පවතින අයිතම පිරික්සමින්',
\t\t\t'ntfrename'   : 'ගොනු නැවත නම් කරමින්',
\t\t\t'ntfupload'   : 'ගොනු උඩුගත(uploading) කරමින්',
\t\t\t'ntfdownload' : 'ගොනු බාගත(downloading) කරමින්',
\t\t\t'ntfsave'     : 'ගොනු සුරකිමින්',
\t\t\t'ntfarchive'  : 'සංරක්ෂණය(archive) සාදමින්',
\t\t\t'ntfextract'  : 'සංරක්ෂණයෙන්(archive) ගොනු දිගහරිමින්(Extracting)',
\t\t\t'ntfsearch'   : 'ගොනු සොයමින්',
\t\t\t'ntfresize'   : 'රූප ප්‍රමාණය වෙනස් කරමින්',
\t\t\t'ntfsmth'     : 'දෙයක් කරමින්',
\t\t\t'ntfloadimg'  : 'පින්තූරය පූරණය කරමින්(Loading)',
\t\t\t'ntfnetmount' : 'ජාල එ්කකයක් සවිකරමින්(Mounting network volume)', // added 18.04.2012
\t\t\t'ntfnetunmount': 'ජාල එ්කකයක් ගලවමින්(Unmounting network volume)', // from v2.1 added 30.04.2012
\t\t\t'ntfdim'      : 'පිංතූරයේ මානය(dimension) ලබාගනිමින්', // added 20.05.2013
\t\t\t'ntfreaddir'  : 'ෆෝල්ඩරයේ තොරතුරු කියවමින්', // from v2.1 added 01.07.2013
\t\t\t'ntfurl'      : 'Getting URL of link', // from v2.1 added 11.03.2014
\t\t\t'ntfchmod'    : 'ගොනු ආකරය වෙනස් කරමින්', // from v2.1 added 20.6.2015
\t\t\t'ntfpreupload': 'උඩුගත(upload) කරන ලද ගොනු නාමය සත්‍යාපනය කරමින්(Verifying)', // from v2.1 added 31.11.2015
\t\t\t'ntfzipdl'    : 'බාගත කරගැනීම(download) සඳහා ගොනුවක් නිර්මාණය කරමින්', // from v2.1.7 added 23.1.2016
\t\t\t'ntfparents'  : 'මාර්ග(path) තොරතුරු ලබා ගනිමින්', // from v2.1.17 added 2.11.2016
\t\t\t'ntfchunkmerge': 'උඩුගත කරන ලද(uploaded) ගොනුව සකසමින්', // from v2.1.17 added 2.11.2016
\t\t\t'ntftrash'    : 'කුණු කූඩයට දමමින්', // from v2.1.24 added 2.5.2017
\t\t\t'ntfrestore'  : 'කුණු කූඩයට දැමීම යළි පිහිටුවමින්(Doing restore)', // from v2.1.24 added 3.5.2017
\t\t\t'ntfchkdir'   : 'ගමනාන්ත(destination) ෆෝල්ඩරය පරීක්ෂා කරමින්', // from v2.1.24 added 3.5.2017
\t\t\t'ntfundo'     : 'පෙර මෙහෙයුම(operation) ඉවත් කරමින්', // from v2.1.27 added 31.07.2017
\t\t\t'ntfredo'     : 'පෙර ආපසු හැරවීම යළි සැකසමින්', // from v2.1.27 added 31.07.2017

\t\t\t/*********************************** volumes *********************************/
\t\t\t'volume_Trash' : 'කුණු කූඩය', //from v2.1.24 added 29.4.2017

\t\t\t/************************************ dates **********************************/
\t\t\t'dateUnknown' : 'නොදනී',
\t\t\t'Today'       : 'අද',
\t\t\t'Yesterday'   : 'ඊයේ',
\t\t\t'msJan'       : 'ජනවා.',
\t\t\t'msFeb'       : 'පෙබ.',
\t\t\t'msMar'       : 'මාර්.',
\t\t\t'msApr'       : 'අප්‍රේ.',
\t\t\t'msMay'       : 'මැයි',
\t\t\t'msJun'       : 'ජූනි',
\t\t\t'msJul'       : 'ජුලි',
\t\t\t'msAug'       : 'අගෝ.',
\t\t\t'msSep'       : 'සැප්.',
\t\t\t'msOct'       : 'ඔක්තෝ.',
\t\t\t'msNov'       : 'නොවැ.',
\t\t\t'msDec'       : 'දෙසැ.',
\t\t\t'January'     : 'ජනවාරි',
\t\t\t'February'    : 'පෙබරවාරි',
\t\t\t'March'       : 'මාර්තු',
\t\t\t'April'       : 'අප්‍රේල්',
\t\t\t'May'         : 'මැයි',
\t\t\t'June'        : 'ජූනි',
\t\t\t'July'        : 'ජුලි',
\t\t\t'August'      : 'අගෝස්තු',
\t\t\t'September'   : 'සැප්තැම්බර්',
\t\t\t'October'     : 'ඔක්තෝම්බර්',
\t\t\t'November'    : 'නොවැම්බර්',
\t\t\t'December'    : 'දෙසැම්බර්',
\t\t\t'Sunday'      : 'ඉරිදා',
\t\t\t'Monday'      : 'සඳුදා',
\t\t\t'Tuesday'     : 'අඟහරුවාදා',
\t\t\t'Wednesday'   : 'බදාදා',
\t\t\t'Thursday'    : 'බ්‍රහස්පතින්දා',
\t\t\t'Friday'      : 'සිකුරාදා',
\t\t\t'Saturday'    : 'සෙනසුරාදා',
\t\t\t'Sun'         : 'ඉරිදා',
\t\t\t'Mon'         : 'සඳු.',
\t\t\t'Tue'         : 'අඟහ.',
\t\t\t'Wed'         : 'බදාදා',
\t\t\t'Thu'         : 'බ්‍රහස්.',
\t\t\t'Fri'         : 'සිකු.',
\t\t\t'Sat'         : 'සෙන.',

\t\t\t/******************************** sort variants ********************************/
\t\t\t'sortname'          : 'නම අනුව',
\t\t\t'sortkind'          : 'වර්ගය අනුව',
\t\t\t'sortsize'          : 'ප්‍රමාණය අනුව',
\t\t\t'sortdate'          : 'දිනය අනුව',
\t\t\t'sortFoldersFirst'  : 'ෆෝල්ඩර වලට පළමු තැන',
\t\t\t'sortperm'          : 'අවසරය අනුව', // from v2.1.13 added 13.06.2016
\t\t\t'sortmode'          : 'අාකාරය අනුව',       // from v2.1.13 added 13.06.2016
\t\t\t'sortowner'         : 'හිමිකරු අනුව',      // from v2.1.13 added 13.06.2016
\t\t\t'sortgroup'         : 'කණ්ඩායම අනුව',      // from v2.1.13 added 13.06.2016
\t\t\t'sortAlsoTreeview'  : 'එලෙසටම රුක්සටහනත්(Treeview)',  // from v2.1.15 added 01.08.2016

\t\t\t/********************************** new items **********************************/
\t\t\t'untitled file.txt' : 'NewFile.txt', // added 10.11.2015
\t\t\t'untitled folder'   : 'නව ෆෝල්ඩරයක්',   // added 10.11.2015
\t\t\t'Archive'           : 'NewArchive',  // from v2.1 added 10.11.2015

\t\t\t/********************************** messages **********************************/
\t\t\t'confirmReq'      : 'තහවුරු කිරීම අවශ්‍යයි',
\t\t\t'confirmRm'       : 'අයිතමයන් සදහටම ඉවත් කිරීමට අවශ්‍ය බව ඔබට විශ්වාසද?<br/>මෙය අාපසු හැරවිය නොහැකිය!',
\t\t\t'confirmRepl'     : 'පැරණි අයිතමය නව එකක මගින් ප්‍රතිස්ථාපනය කරන්නද?',
\t\t\t'confirmRest'     : 'දැනට පවතින අයිතමය කුණු කූඩය තුළ පවතින අයිතමය මගින් ප්‍රතිස්ථාපනය කරන්නද?', // fromv2.1.24 added 5.5.2017
\t\t\t'confirmConvUTF8' : 'UTF-8 හි නොවේ<br/> UTF-8 වෙත පරිවර්තනය කරන්න ද?<br/>සුරැකීමෙන් පසු අන්තර්ගතය UTF-8 බවට පරිවර්තනය වේ.', // from v2.1 added 08.04.2014
\t\t\t'confirmNonUTF8'  : 'මෙම ගොනුවෙහි කේතන කේත(Character encoding) හඳුනාගත නොහැකි විය. සංස්කරණ කිරීමට එය තාවකාලිකව UTF-8 වෙත පරිවර්තනය කිරීම අවශ්‍ය වේ.<br/>කරුණාකර මෙම ගොනුවෙහි අක්ෂර කේතන කේත(character encoding) තෝරන්න.', // from v2.1.19 added 28.11.2016
\t\t\t'confirmNotSave'  : 'මෙය වෙනස් කර ඇත.<br/>ඔබට වෙනස්කම් සුරැකීමට නොහැකි නම් සිදු කරනු ලැබූ වෙනස්කම් අහිමි වේ.', // from v2.1 added 15.7.2015
\t\t\t'confirmTrash'    : 'කුණු කූඩය තුලට අයිතමය යැවීමට ඔබට අවශ්‍ය ද?', //from v2.1.24 added 29.4.2017
\t\t\t'apllyAll'        : 'සියල්ලටම යොදන්න',
\t\t\t'name'            : 'නම',
\t\t\t'size'            : 'ප්‍රමාණය',
\t\t\t'perms'           : 'අවසරය',
\t\t\t'modify'          : 'නවීකරණය කෙරුණ ලද්දේ',
\t\t\t'kind'            : 'ජාතිය',
\t\t\t'read'            : 'කියවන්න',
\t\t\t'write'           : 'ලියන්න',
\t\t\t'noaccess'        : 'ප්‍රවේශයක් නොමැත',
\t\t\t'and'             : 'සහ',
\t\t\t'unknown'         : 'නොහඳුනයි',
\t\t\t'selectall'       : 'සියලු ගොනු තෝරන්න',
\t\t\t'selectfiles'     : 'ගොනු(ව) තෝරන්න',
\t\t\t'selectffile'     : 'පළමු ගොනුව තෝරන්න',
\t\t\t'selectlfile'     : 'අවසාන ගොනුව තෝරන්න',
\t\t\t'viewlist'        : 'ලැයිස්තු අාකාරය',
\t\t\t'viewicons'       : 'අයිකන අාකාරය',
\t\t\t'places'          : 'Places',
\t\t\t'calc'            : 'ගණනය කරන්න',
\t\t\t'path'            : 'මාර්ගය',
\t\t\t'aliasfor'        : 'Alias for',
\t\t\t'locked'          : 'අගුළු දමා ඇත',
\t\t\t'dim'             : 'මාන(Dimensions)',
\t\t\t'files'           : 'ගොනු',
\t\t\t'folders'         : 'ෆෝල්ඩර',
\t\t\t'items'           : 'අයිතම(Items)',
\t\t\t'yes'             : 'ඔව්',
\t\t\t'no'              : 'නැත',
\t\t\t'link'            : 'සබැඳිය(Link)',
\t\t\t'searcresult'     : 'සෙවුම් ප්‍රතිඵල',
\t\t\t'selected'        : 'තෝරාගත් අයිතම',
\t\t\t'about'           : 'මේ ගැන',
\t\t\t'shortcuts'       : 'කෙටිමං',
\t\t\t'help'            : 'උදව්',
\t\t\t'webfm'           : 'වෙබ් ගොනු කළමනාකරු',
\t\t\t'ver'             : 'අනුවාදය(version)',
\t\t\t'protocolver'     : 'ප්‍රොටොකෝලය අනුවාදය(protocol version)',
\t\t\t'homepage'        : 'ව්‍යාපෘතිය නිවහන',
\t\t\t'docs'            : 'ලේඛනගත කිරීම',
\t\t\t'github'          : 'Github හරහා සංවාදයේ යෙදෙන්න',
\t\t\t'twitter'         : 'Twitter හරහා අපව සම්බන්ධ වන්න',
\t\t\t'facebook'        : 'Facebook හරහා අප සමඟ එකතු වන්න',
\t\t\t'team'            : 'කණ්ඩායම',
\t\t\t'chiefdev'        : 'ප්‍රධාන සංස්කරු(chief developer)',
\t\t\t'developer'       : 'සංස්කරු(developer)',
\t\t\t'contributor'     : 'දායකයා(contributor)',
\t\t\t'maintainer'      : 'නඩත්තු කරන්නා(maintainer)',
\t\t\t'translator'      : 'පරිවර්තකයා',
\t\t\t'icons'           : 'අයිකන',
\t\t\t'dontforget'      : 'and don\\'t forget to take your towel',
\t\t\t'shortcutsof'     : 'කෙටිමං අක්‍රීය කර ඇත',
\t\t\t'dropFiles'       : 'ගොනු මෙතැනට ඇද දමන්න',
\t\t\t'or'              : 'හෝ',
\t\t\t'selectForUpload' : 'ගොනු තෝරන්න',
\t\t\t'moveFiles'       : 'අායිත්තම සම්පූර්ණයෙන් විස්ථාපනය',
\t\t\t'copyFiles'       : 'අයිතමයන් පිටපත් කරන්න',
\t\t\t'restoreFiles'    : 'Restore items', // from v2.1.24 added 5.5.2017
\t\t\t'rmFromPlaces'    : 'Remove from places',
\t\t\t'aspectRatio'     : 'දර්ශන අනුපාතය(Aspect ratio)',
\t\t\t'scale'           : 'පරිමාණය',
\t\t\t'width'           : 'පළල',
\t\t\t'height'          : 'උස',
\t\t\t'resize'          : 'ප්‍රතිප්‍රමානණය',
\t\t\t'crop'            : 'Crop',
\t\t\t'rotate'          : 'කැරකැවීම',
\t\t\t'rotate-cw'       : 'අංශක 90කින් කරකවන්න CW',
\t\t\t'rotate-ccw'      : 'අංශක 90කින් කරකවන්න CCW',
\t\t\t'degree'          : '°',
\t\t\t'netMountDialogTitle' : 'Mount network volume', // added 18.04.2012
\t\t\t'protocol'            : 'Protocol', // added 18.04.2012
\t\t\t'host'                : 'Host', // added 18.04.2012
\t\t\t'port'                : 'Port', // added 18.04.2012
\t\t\t'user'                : 'පරිශීලක', // added 18.04.2012
\t\t\t'pass'                : 'මුරපදය', // added 18.04.2012
\t\t\t'confirmUnmount'      : 'Are you unmount \$1?',  // from v2.1 added 30.04.2012
\t\t\t'dropFilesBrowser': 'Drop or Paste files from browser', // from v2.1 added 30.05.2012
\t\t\t'dropPasteFiles'  : 'Drop files, Paste URLs or images(clipboard) here', // from v2.1 added 07.04.2014
\t\t\t'encoding'        : 'කේතීකරණය(Encoding)', // from v2.1 added 19.12.2014
\t\t\t'locale'          : 'Locale',   // from v2.1 added 19.12.2014
\t\t\t'searchTarget'    : 'ඉලක්කය: \$1',                // from v2.1 added 22.5.2015
\t\t\t'searchMime'      : 'Search by input MIME Type', // from v2.1 added 22.5.2015
\t\t\t'owner'           : 'හිමිකරු', // from v2.1 added 20.6.2015
\t\t\t'group'           : 'සමූහය', // from v2.1 added 20.6.2015
\t\t\t'other'           : 'වෙනත්', // from v2.1 added 20.6.2015
\t\t\t'execute'         : 'ක්‍රයාත්මක කරන්න', // from v2.1 added 20.6.2015
\t\t\t'perm'            : 'අවසරය', // from v2.1 added 20.6.2015
\t\t\t'mode'            : 'Mode', // from v2.1 added 20.6.2015
\t\t\t'emptyFolder'     : 'ෆෝල්ඩරය හිස්', // from v2.1.6 added 30.12.2015
\t\t\t'emptyFolderDrop' : 'ෆාේල්ඩරය හිස්\\\\A අායිත්තම අතහැරීමෙන් අැතුලු කරන්න', // from v2.1.6 added 30.12.2015
\t\t\t'emptyFolderLTap' : 'ෆාේල්ඩරය හිස්\\\\A දිර්ඝ එබීමෙන් අායිත්තම අැතුලු කරන්න', // from v2.1.6 added 30.12.2015
\t\t\t'quality'         : 'ගුණාත්මකභාවය', // from v2.1.6 added 5.1.2016
\t\t\t'autoSync'        : 'Auto sync',  // from v2.1.6 added 10.1.2016
\t\t\t'moveUp'          : 'Move up',  // from v2.1.6 added 18.1.2016
\t\t\t'getLink'         : 'Get URL link', // from v2.1.7 added 9.2.2016
\t\t\t'selectedItems'   : 'තෝරාගත් අයිතම (\$1)', // from v2.1.7 added 2.19.2016
\t\t\t'folderId'        : 'Folder ID', // from v2.1.10 added 3.25.2016
\t\t\t'offlineAccess'   : 'Allow offline access', // from v2.1.10 added 3.25.2016
\t\t\t'reAuth'          : 'To re-authenticate', // from v2.1.10 added 3.25.2016
\t\t\t'nowLoading'      : 'Now loading...', // from v2.1.12 added 4.26.2016
\t\t\t'openMulti'       : 'බහු ගොනු විවෘත කරන්න', // from v2.1.12 added 5.14.2016
\t\t\t'openMultiConfirm': 'ඔබ \$1 ගොනු විවෘත කිරීමට උත්සාහ කරයි. බ්‍රව්සරයෙන් ඔබට විවෘත කිරීමට අවශ්‍ය බව ඔබට විශ්වාසද?', // from v2.1.12 added 5.14.2016
\t\t\t'emptySearch'     : 'සෙවුම් ඉලක්කයේ ගවේෂණ ප්‍රතිඵල නොමැත.', // from v2.1.12 added 5.16.2016
\t\t\t'editingFile'     : 'එය ගොනුව සංස්කරණය කිරීමකි.', // from v2.1.13 added 6.3.2016
\t\t\t'hasSelected'     : 'ඔබ අයිතම \$1 ප්‍රමාණයක් තෝරාගෙන ඇත.', // from v2.1.13 added 6.3.2016
\t\t\t'hasClipboard'    : 'You have \$1 items in the clipboard.', // from v2.1.13 added 6.3.2016
\t\t\t'incSearchOnly'   : 'Incremental search is only from the current view.', // from v2.1.13 added 6.30.2016
\t\t\t'reinstate'       : 'යථා තත්ත්වයට පත් කරන්න', // from v2.1.15 added 3.8.2016
\t\t\t'complete'        : '\$1 සම්පූර්ණයි', // from v2.1.15 added 21.8.2016
\t\t\t'contextmenu'     : 'Context menu', // from v2.1.15 added 9.9.2016
\t\t\t'pageTurning'     : 'Page turning', // from v2.1.15 added 10.9.2016
\t\t\t'volumeRoots'     : 'Volume roots', // from v2.1.16 added 16.9.2016
\t\t\t'reset'           : 'යළි පිහිටුවන්න(Reset)', // from v2.1.16 added 1.10.2016
\t\t\t'bgcolor'         : 'පසුබිම් වර්ණය', // from v2.1.16 added 1.10.2016
\t\t\t'colorPicker'     : 'Color picker', // from v2.1.16 added 1.10.2016
\t\t\t'8pxgrid'         : 'පික්සල් 8ක දැල', // from v2.1.16 added 4.10.2016
\t\t\t'enabled'         : 'සක්‍රීයයි', // from v2.1.16 added 4.10.2016
\t\t\t'disabled'        : 'අක්‍රීයයි', // from v2.1.16 added 4.10.2016
\t\t\t'emptyIncSearch'  : 'වර්තමාන දර්ශනය තුළ සෙවුම් ප්‍රතිපල හිස්ව ඇත. \\\\A සෙවුම් ඉලක්කය පුළුල් කිරීම සඳහා [Enter] යතුර ඔබන්න.', // from v2.1.16 added 5.10.2016
\t\t\t'emptyLetSearch'  : 'වර්තමාන දර්ශනයේ පළමු අකුර සෙවුම් ප්‍රතිපල හිස්ව පවතී.', // from v2.1.23 added 24.3.2017
\t\t\t'textLabel'       : 'ලේබල්වල නම්', // from v2.1.17 added 13.10.2016
\t\t\t'minsLeft'        : 'විනාඩි \$1 ක් ගතවේ', // from v2.1.17 added 13.11.2016
\t\t\t'openAsEncoding'  : 'Reopen with selected encoding', // from v2.1.19 added 2.12.2016
\t\t\t'saveAsEncoding'  : 'Save with the selected encoding', // from v2.1.19 added 2.12.2016
\t\t\t'selectFolder'    : 'ෆෝල්ඩරය තෝරන්න', // from v2.1.20 added 13.12.2016
\t\t\t'firstLetterSearch': 'පළමු අකුරෙන් සෙවීම', // from v2.1.23 added 24.3.2017
\t\t\t'presets'         : 'Presets', // from v2.1.25 added 26.5.2017
\t\t\t'tooManyToTrash'  : 'It\\'s too many items so it can\\'t into trash.', // from v2.1.25 added 9.6.2017
\t\t\t'TextArea'        : 'TextArea', // from v2.1.25 added 14.6.2017
\t\t\t'folderToEmpty'   : 'Empty the folder \"\$1\".', // from v2.1.25 added 22.6.2017
\t\t\t'filderIsEmpty'   : 'There are no items in a folder \"\$1\".', // from v2.1.25 added 22.6.2017
\t\t\t'preference'      : 'Preference', // from v2.1.26 added 28.6.2017
\t\t\t'language'        : 'Language setting', // from v2.1.26 added 28.6.2017
\t\t\t'clearBrowserData': 'Initialize the settings saved in this browser', // from v2.1.26 added 28.6.2017
\t\t\t'toolbarPref'     : 'Toolbar setting', // from v2.1.27 added 2.8.2017
\t\t\t'charsLeft'       : '... \$1 ක් අකුරු ඉතිරිව පවතී',  // from v2.1.29 added 30.8.2017
\t\t\t'sum'             : 'එකතුව', // from v2.1.29 added 28.9.2017
\t\t\t'roughFileSize'   : 'Rough file size', // from v2.1.30 added 2.11.2017
\t\t\t'autoFocusDialog' : 'Focus on the element of dialog with mouseover',  // from v2.1.30 added 2.11.2017
\t\t\t'select'          : 'තෝරන්න', // from v2.1.30 added 23.11.2017
\t\t\t'selectAction'    : 'ගොනුවක් තේරූ විට සිදුකල යුතු දේ', // from v2.1.30 added 23.11.2017
\t\t\t'useStoredEditor' : 'Open with the editor used last time', // from v2.1.30 added 23.11.2017
\t\t\t'selectinvert'    : 'ප්‍රතිවිරුද්ධ අාකාරයට තෝරන්න', // from v2.1.30 added 25.11.2017
\t\t\t'renameMultiple'  : 'Are you sure you want to rename \$1 selected items like \$2?<br/>This cannot be undone!', // from v2.1.31 added 4.12.2017
\t\t\t'batchRename'     : 'Batch rename', // from v2.1.31 added 8.12.2017
\t\t\t'plusNumber'      : '+ Number', // from v2.1.31 added 8.12.2017
\t\t\t'asPrefix'        : 'Add prefix', // from v2.1.31 added 8.12.2017
\t\t\t'asSuffix'        : 'Add suffix', // from v2.1.31 added 8.12.2017
\t\t\t'changeExtention' : 'Change extention', // from v2.1.31 added 8.12.2017
\t\t\t'columnPref'      : 'Columns settings (List view)', // from v2.1.32 added 6.2.2018
\t\t\t'reflectOnImmediate' : 'All changes will reflect immediately to the archive.', // from v2.1.33 added 2.3.2018
\t\t\t'reflectOnUnmount'   : 'Any changes will not reflect until un-mount this volume.', // from v2.1.33 added 2.3.2018
\t\t\t'unmountChildren' : 'The following volume(s) mounted on this volume also unmounted. Are you sure to unmount it?', // from v2.1.33 added 5.3.2018
\t\t\t'selectionInfo'   : 'තෝරාගැනීම්වල තොරතුරු', // from v2.1.33 added 7.3.2018
\t\t\t'hashChecker'     : 'Algorithms to show the file hash', // from v2.1.33 added 10.3.2018

\t\t\t/********************************** mimetypes **********************************/
\t\t\t'kindUnknown'     : 'නොදන්නා',
\t\t\t'kindRoot'        : 'Volume Root', // from v2.1.16 added 16.10.2016
\t\t\t'kindFolder'      : 'ෆෝල්ඩරය',
\t\t\t'kindSelects'     : 'තේරීම්', // from v2.1.29 added 29.8.2017
\t\t\t'kindAlias'       : 'Alias',
\t\t\t'kindAliasBroken' : 'Broken alias',
\t\t\t// applications
\t\t\t'kindApp'         : 'Application',
\t\t\t'kindPostscript'  : 'Postscript ලේඛනය',
\t\t\t'kindMsOffice'    : 'Microsoft Office ලේඛනය',
\t\t\t'kindMsWord'      : 'Microsoft Word ලේඛනය',
\t\t\t'kindMsExcel'     : 'Microsoft Excel ලේඛනය',
\t\t\t'kindMsPP'        : 'Microsoft Powerpoint presentation',
\t\t\t'kindOO'          : 'Open Office ලේඛනය',
\t\t\t'kindAppFlash'    : 'Flash application',
\t\t\t'kindPDF'         : 'Portable Document Format (PDF)',
\t\t\t'kindTorrent'     : 'Bittorrent file',
\t\t\t'kind7z'          : '7z archive',
\t\t\t'kindTAR'         : 'TAR archive',
\t\t\t'kindGZIP'        : 'GZIP archive',
\t\t\t'kindBZIP'        : 'BZIP archive',
\t\t\t'kindXZ'          : 'XZ archive',
\t\t\t'kindZIP'         : 'ZIP archive',
\t\t\t'kindRAR'         : 'RAR archive',
\t\t\t'kindJAR'         : 'Java JAR file',
\t\t\t'kindTTF'         : 'True Type font',
\t\t\t'kindOTF'         : 'Open Type font',
\t\t\t'kindRPM'         : 'RPM package',
\t\t\t// texts
\t\t\t'kindText'        : 'Text ලේඛනය',
\t\t\t'kindTextPlain'   : 'Plain text',
\t\t\t'kindPHP'         : 'PHP මූලාශ්‍රය',
\t\t\t'kindCSS'         : 'Cascading style sheet',
\t\t\t'kindHTML'        : 'HTML ලේඛනය',
\t\t\t'kindJS'          : 'Javascript මූලාශ්‍රය',
\t\t\t'kindRTF'         : 'Rich Text Format',
\t\t\t'kindC'           : 'C මූලාශ්‍රය',
\t\t\t'kindCHeader'     : 'C header මූලාශ්‍රය',
\t\t\t'kindCPP'         : 'C++ මූලාශ්‍රය',
\t\t\t'kindCPPHeader'   : 'C++ header මූලාශ්‍රය',
\t\t\t'kindShell'       : 'Unix shell රචනයකි',
\t\t\t'kindPython'      : 'Python මූලාශ්‍රය',
\t\t\t'kindJava'        : 'Java මූලාශ්‍රය',
\t\t\t'kindRuby'        : 'Ruby මූලාශ්‍රය',
\t\t\t'kindPerl'        : 'Perl රචනයකි',
\t\t\t'kindSQL'         : 'SQL මූලාශ්‍රය',
\t\t\t'kindXML'         : 'XML ලේඛනය',
\t\t\t'kindAWK'         : 'AWK මූලාශ්‍රය',
\t\t\t'kindCSV'         : 'කොමාවන් වෙන් කළ අගයන්',
\t\t\t'kindDOCBOOK'     : 'Docbook XML ලේඛනය',
\t\t\t'kindMarkdown'    : 'Markdown text', // added 20.7.2015
\t\t\t// images
\t\t\t'kindImage'       : 'පින්තූරය',
\t\t\t'kindBMP'         : 'BMP පින්තූරය',
\t\t\t'kindJPEG'        : 'JPEG පින්තූරය',
\t\t\t'kindGIF'         : 'GIF පින්තූරය',
\t\t\t'kindPNG'         : 'PNG පින්තූරය',
\t\t\t'kindTIFF'        : 'TIFF පින්තූරය',
\t\t\t'kindTGA'         : 'TGA පින්තූරය',
\t\t\t'kindPSD'         : 'Adobe Photoshop පින්තූරය',
\t\t\t'kindXBITMAP'     : 'X bitmap පින්තූරය',
\t\t\t'kindPXM'         : 'Pixelmator පින්තූරය',
\t\t\t// media
\t\t\t'kindAudio'       : 'ශබ්ධ මාධ්‍ය',
\t\t\t'kindAudioMPEG'   : 'MPEG ශබ්ධපටය',
\t\t\t'kindAudioMPEG4'  : 'MPEG-4 ශබ්ධපටය',
\t\t\t'kindAudioMIDI'   : 'MIDI ශබ්ධපටය',
\t\t\t'kindAudioOGG'    : 'Ogg Vorbis ශබ්ධපටය',
\t\t\t'kindAudioWAV'    : 'WAV ශබ්ධපටය',
\t\t\t'AudioPlaylist'   : 'MP3 playlist',
\t\t\t'kindVideo'       : 'Video මාධ්‍ය',
\t\t\t'kindVideoDV'     : 'DV චිත්‍රපටය',
\t\t\t'kindVideoMPEG'   : 'MPEG චිත්‍රපටය',
\t\t\t'kindVideoMPEG4'  : 'MPEG-4 චිත්‍රපටය',
\t\t\t'kindVideoAVI'    : 'AVI චිත්‍රපටය',
\t\t\t'kindVideoMOV'    : 'Quick Time චිත්‍රපටය',
\t\t\t'kindVideoWM'     : 'Windows Media චිත්‍රපටය',
\t\t\t'kindVideoFlash'  : 'Flash චිත්‍රපටය',
\t\t\t'kindVideoMKV'    : 'Matroska චිත්‍රපටය',
\t\t\t'kindVideoOGG'    : 'Ogg චිත්‍රපටය'
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
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.si.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.si.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.si.js");
    }
}
