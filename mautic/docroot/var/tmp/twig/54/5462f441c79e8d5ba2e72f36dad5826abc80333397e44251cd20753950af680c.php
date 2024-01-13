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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.hu.js */
class __TwigTemplate_9b39e71d776c350be083b185621f2ee88ce76dcd6de449807258b43d7e252303 extends Template
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
 * magyar translation
 * @author Gáspár Lajos <info@glsys.eu>
 * @version 2016-06-29
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
\telFinder.prototype.i18.hu = {
\t\ttranslator : 'Gáspár Lajos &lt;info@glsys.eu&gt;',
\t\tlanguage   : 'magyar',
\t\tdirection  : 'ltr',
\t\tdateFormat : 'Y.F.d H:i:s', // Mar 13, 2012 05:27 PM
\t\tfancyDateFormat : '\$1 H:i', // will produce smth like: Today 12:25 PM
\t\tmessages   : {

\t\t\t/********************************** errors **********************************/
\t\t\t'error'                : 'Hiba',
\t\t\t'errUnknown'           : 'Ismeretlen hiba.',
\t\t\t'errUnknownCmd'        : 'Ismeretlen parancs.',
\t\t\t'errJqui'              : 'Hibás jQuery UI konfiguráció. A \"selectable\", \"draggable\" és a \"droppable\" komponensek szükségesek.',
\t\t\t'errNode'              : 'Az elFinder \"DOM\" elem létrehozását igényli.',
\t\t\t'errURL'               : 'Hibás elFinder konfiguráció! \"URL\" paraméter nincs megadva.',
\t\t\t'errAccess'            : 'Hozzáférés megtagadva.',
\t\t\t'errConnect'           : 'Nem sikerült csatlakozni a kiszolgálóhoz.',
\t\t\t'errAbort'             : 'Kapcsolat megszakítva.',
\t\t\t'errTimeout'           : 'Kapcsolat időtúllépés.',
\t\t\t'errNotFound'          : 'A backend nem elérhető.',
\t\t\t'errResponse'          : 'Hibás backend válasz.',
\t\t\t'errConf'              : 'Hibás backend konfiguráció.',
\t\t\t'errJSON'              : 'PHP JSON modul nincs telepítve.',
\t\t\t'errNoVolumes'         : 'Nem állnak rendelkezésre olvasható kötetek.',
\t\t\t'errCmdParams'         : 'érvénytelen paraméterek a parancsban. (\"\$1\")',
\t\t\t'errDataNotJSON'       : 'A válasz nem JSON típusú adat.',
\t\t\t'errDataEmpty'         : 'Nem érkezett adat.',
\t\t\t'errCmdReq'            : 'A backend kérelem parancsnevet igényel.',
\t\t\t'errOpen'              : '\"\$1\" megnyitása nem sikerült.',
\t\t\t'errNotFolder'         : 'Az objektum nem egy mappa.',
\t\t\t'errNotFile'           : 'Az objektum nem egy fájl.',
\t\t\t'errRead'              : '\"\$1\" olvasása nem sikerült.',
\t\t\t'errWrite'             : '\"\$1\" írása nem sikerült.',
\t\t\t'errPerm'              : 'Engedély megtagadva.',
\t\t\t'errLocked'            : '\"\$1\" zárolás alatt van, és nem lehet átnevezni, mozgatni vagy eltávolítani.',
\t\t\t'errExists'            : '\"\$1\" nevű fájl már létezik.',
\t\t\t'errInvName'           : 'Érvénytelen fáljnév.',
\t\t\t'errFolderNotFound'    : 'Mappa nem található.',
\t\t\t'errFileNotFound'      : 'Fájl nem található.',
\t\t\t'errTrgFolderNotFound' : 'Cél mappa nem található. (\"\$1\")',
\t\t\t'errPopup'             : 'A böngésző megakadályozta egy felugró ablak megnyitását. A fájl megnyitását tegye lehetővé a böngésző beállitásaiban.',
\t\t\t'errMkdir'             : '\"\$1\" mappa létrehozása sikertelen.',
\t\t\t'errMkfile'            : '\"\$1\" fájl létrehozása sikertelen.',
\t\t\t'errRename'            : '\"\$1\" átnevezése sikertelen.',
\t\t\t'errCopyFrom'          : 'Fájlok másolása a kötetről nem megengedett. (\"\$1\")',
\t\t\t'errCopyTo'            : 'Fájlok másolása a kötetre nem megengedett. (\"\$1\")',
\t\t\t'errMkOutLink'         : 'Hivatkozás létrehozása a root köteten kívül nem megengedett.', // from v2.1 added 03.10.2015
\t\t\t'errUpload'            : 'Feltöltési hiba.',  // old name - errUploadCommon
\t\t\t'errUploadFile'        : 'Nem sikerült a fájlt feltölteni. (\$1)', // old name - errUpload
\t\t\t'errUploadNoFiles'     : 'Nem található fájl feltöltéshez.',
\t\t\t'errUploadTotalSize'   : 'Az adat meghaladja a maximálisan megengedett méretet.', // old name - errMaxSize
\t\t\t'errUploadFileSize'    : 'A fájl meghaladja a maximálisan megengedett méretet.', //  old name - errFileMaxSize
\t\t\t'errUploadMime'        : 'A fájltípus nem engedélyezett.',
\t\t\t'errUploadTransfer'    : '\"\$1\" transzfer hiba.',
\t\t\t'errUploadTemp'        : 'Sikertelen az ideiglenes fájl léterhezozása feltöltéshez.', // from v2.1 added 26.09.2015
\t\t\t'errNotReplace'        : 'Az objektum \"\$1\" már létezik ezen a helyen, és nem lehet cserélni másik típusra', // new
\t\t\t'errReplace'           : '\"\$1\" nem cserélhető.',
\t\t\t'errSave'              : '\"\$1\" mentése nem sikerült.',
\t\t\t'errCopy'              : '\"\$1\" másolása nem sikerült.',
\t\t\t'errMove'              : '\"\$1\" áthelyezése nem sikerült.',
\t\t\t'errCopyInItself'      : '\"\$1\" nem másolható saját magára.',
\t\t\t'errRm'                : '\"\$1\" törlése nem sikerült.',
\t\t\t'errRmSrc'             : 'Forrásfájl(ok) eltávolítása sikertelen.',
\t\t\t'errExtract'           : 'Unable to extract files from \"\$1\".',
\t\t\t'errArchive'           : 'Unable to create archive.',
\t\t\t'errArcType'           : 'Nem támogatott archívum típus.',
\t\t\t'errNoArchive'         : 'File is not archive or has unsupported archive type.',
\t\t\t'errCmdNoSupport'      : 'Backend does not support this command.',
\t\t\t'errReplByChild'       : 'The folder “\$1” can’t be replaced by an item it contains.',
\t\t\t'errArcSymlinks'       : 'For security reason denied to unpack archives contains symlinks or files with not allowed names.', // edited 24.06.2012
\t\t\t'errArcMaxSize'        : 'Archive files exceeds maximum allowed size.',
\t\t\t'errResize'            : 'Unable to resize \"\$1\".',
\t\t\t'errResizeDegree'      : 'Invalid rotate degree.',  // added 7.3.2013
\t\t\t'errResizeRotate'      : 'Unable to rotate image.',  // added 7.3.2013
\t\t\t'errResizeSize'        : 'Invalid image size.',  // added 7.3.2013
\t\t\t'errResizeNoChange'    : 'Image size not changed.',  // added 7.3.2013
\t\t\t'errUsupportType'      : 'Unsupported file type.',
\t\t\t'errNotUTF8Content'    : 'File \"\$1\" is not in UTF-8 and cannot be edited.',  // added 9.11.2011
\t\t\t'errNetMount'          : 'Unable to mount \"\$1\".', // added 17.04.2012
\t\t\t'errNetMountNoDriver'  : 'Unsupported protocol.',     // added 17.04.2012
\t\t\t'errNetMountFailed'    : 'Mount failed.',         // added 17.04.2012
\t\t\t'errNetMountHostReq'   : 'Host required.', // added 18.04.2012
\t\t\t'errSessionExpires'    : 'Your session has expired due to inactivity.',
\t\t\t'errCreatingTempDir'   : 'Unable to create temporary directory: \"\$1\"',
\t\t\t'errFtpDownloadFile'   : 'Unable to download file from FTP: \"\$1\"',
\t\t\t'errFtpUploadFile'     : 'Unable to upload file to FTP: \"\$1\"',
\t\t\t'errFtpMkdir'          : 'Unable to create remote directory on FTP: \"\$1\"',
\t\t\t'errArchiveExec'       : 'Error while archiving files: \"\$1\"',
\t\t\t'errExtractExec'       : 'Error while extracting files: \"\$1\"',
\t\t\t'errNetUnMount'        : 'Unable to unmount', // from v2.1 added 30.04.2012
\t\t\t'errConvUTF8'          : 'Not convertible to UTF-8', // from v2.1 added 08.04.2014
\t\t\t'errFolderUpload'      : 'Try Google Chrome, If you\\'d like to upload the folder.', // from v2.1 added 26.6.2015
\t\t\t'errSearchTimeout'     : 'Timed out while searching \"\$1\". Search result is partial.', // from v2.1 added 12.1.2016
\t\t\t'errReauthRequire'     : 'Re-authorization is required.', // from v2.1.10 added 3.24.2016

\t\t\t/******************************* commands names ********************************/
\t\t\t'cmdarchive'   : 'Archívum létrehozása',
\t\t\t'cmdback'      : 'Vissza',
\t\t\t'cmdcopy'      : 'Másolás',
\t\t\t'cmdcut'       : 'Kivágás',
\t\t\t'cmddownload'  : 'Letöltés',
\t\t\t'cmdduplicate' : 'Másolat készítés',
\t\t\t'cmdedit'      : 'Szerkesztés',
\t\t\t'cmdextract'   : 'Kibontás',
\t\t\t'cmdforward'   : 'Előre',
\t\t\t'cmdgetfile'   : 'Fájlok kijelölése',
\t\t\t'cmdhelp'      : 'Erről a programról...',
\t\t\t'cmdhome'      : 'Főkönyvtár',
\t\t\t'cmdinfo'      : 'Tulajdonságok',
\t\t\t'cmdmkdir'     : 'Új mappa',
\t\t\t'cmdmkdirin'   : 'Into new folder', // from v2.1.7 added 19.2.2016
\t\t\t'cmdmkfile'    : 'Új fájl',
\t\t\t'cmdopen'      : 'Megnyitás',
\t\t\t'cmdpaste'     : 'Beillesztés',
\t\t\t'cmdquicklook' : 'Előnézet',
\t\t\t'cmdreload'    : 'Frissítés',
\t\t\t'cmdrename'    : 'Átnevezés',
\t\t\t'cmdrm'        : 'Törlés',
\t\t\t'cmdsearch'    : 'Keresés',
\t\t\t'cmdup'        : 'Ugrás a szülőmappába',
\t\t\t'cmdupload'    : 'Feltöltés',
\t\t\t'cmdview'      : 'View',
\t\t\t'cmdresize'    : 'Resize & Rotate',
\t\t\t'cmdsort'      : 'Sort',
\t\t\t'cmdnetmount'  : 'Mount network volume', // added 18.04.2012
\t\t\t'cmdnetunmount': 'Unmount', // from v2.1 added 30.04.2012
\t\t\t'cmdplaces'    : 'To Places', // added 28.12.2014
\t\t\t'cmdchmod'     : 'Change mode', // from v2.1 added 20.6.2015
\t\t\t'cmdopendir'   : 'Open a folder', // from v2.1 added 13.1.2016
\t\t\t'cmdcolwidth'  : 'Reset column width', // from v2.1.13 added 12.06.2016

\t\t\t/*********************************** buttons ***********************************/
\t\t\t'btnClose'  : 'Bezár',
\t\t\t'btnSave'   : 'Ment',
\t\t\t'btnRm'     : 'Töröl',
\t\t\t'btnApply'  : 'Apply',
\t\t\t'btnCancel' : 'Mégsem',
\t\t\t'btnNo'     : 'Nem',
\t\t\t'btnYes'    : 'Igen',
\t\t\t'btnMount'  : 'Mount',  // added 18.04.2012
\t\t\t'btnApprove': 'Goto \$1 & approve', // from v2.1 added 26.04.2012
\t\t\t'btnUnmount': 'Unmount', // from v2.1 added 30.04.2012
\t\t\t'btnConv'   : 'Convert', // from v2.1 added 08.04.2014
\t\t\t'btnCwd'    : 'Here',      // from v2.1 added 22.5.2015
\t\t\t'btnVolume' : 'Volume',    // from v2.1 added 22.5.2015
\t\t\t'btnAll'    : 'All',       // from v2.1 added 22.5.2015
\t\t\t'btnMime'   : 'MIME Type', // from v2.1 added 22.5.2015
\t\t\t'btnFileName':'Filename',  // from v2.1 added 22.5.2015
\t\t\t'btnSaveClose': 'Save & Close', // from v2.1 added 12.6.2015
\t\t\t'btnBackup' : 'Backup', // fromv2.1 added 28.11.2015

\t\t\t/******************************** notifications ********************************/
\t\t\t'ntfopen'     : 'Mappa megnyitás',
\t\t\t'ntffile'     : 'Fájl megnyitás',
\t\t\t'ntfreload'   : 'Reload folder content',
\t\t\t'ntfmkdir'    : 'Mappa létrehozása',
\t\t\t'ntfmkfile'   : 'Creating files',
\t\t\t'ntfrm'       : 'Fájlok törélse',
\t\t\t'ntfcopy'     : 'Fájlok másolása',
\t\t\t'ntfmove'     : 'Fájlok áthelyezése',
\t\t\t'ntfprepare'  : 'Prepare to copy files',
\t\t\t'ntfrename'   : 'Fájlok átnevezése',
\t\t\t'ntfupload'   : 'Fájlok feltöltése',
\t\t\t'ntfdownload' : 'Fájlok letöltése',
\t\t\t'ntfsave'     : 'Fájlok mentése',
\t\t\t'ntfarchive'  : 'Archívum létrehozása',
\t\t\t'ntfextract'  : 'Kibontás archívumból',
\t\t\t'ntfsearch'   : 'Fájlok keresése',
\t\t\t'ntfresize'   : 'Resizing images',
\t\t\t'ntfsmth'     : 'Doing something >_<',
\t\t\t'ntfloadimg'  : 'Loading image',
\t\t\t'ntfnetmount' : 'Mounting network volume', // added 18.04.2012
\t\t\t'ntfnetunmount': 'Unmounting network volume', // from v2.1 added 30.04.2012
\t\t\t'ntfdim'      : 'Acquiring image dimension', // added 20.05.2013
\t\t\t'ntfreaddir'  : 'Reading folder infomation', // from v2.1 added 01.07.2013
\t\t\t'ntfurl'      : 'Getting URL of link', // from v2.1 added 11.03.2014
\t\t\t'ntfchmod'    : 'Changing file mode', // from v2.1 added 20.6.2015
\t\t\t'ntfpreupload': 'Verifying upload file name', // from v2.1 added 31.11.2015
\t\t\t'ntfzipdl'    : 'Creating a file for download', // from v2.1.7 added 23.1.2016

\t\t\t/************************************ dates **********************************/
\t\t\t'dateUnknown' : 'Ismeretlen',
\t\t\t'Today'       : 'Ma',
\t\t\t'Yesterday'   : 'Tegnap',
\t\t\t'msJan'       : 'jan',
\t\t\t'msFeb'       : 'febr',
\t\t\t'msMar'       : 'márc',
\t\t\t'msApr'       : 'ápr',
\t\t\t'msMay'       : 'máj',
\t\t\t'msJun'       : 'jún',
\t\t\t'msJul'       : 'júl',
\t\t\t'msAug'       : 'aug',
\t\t\t'msSep'       : 'szept',
\t\t\t'msOct'       : 'okt',
\t\t\t'msNov'       : 'nov',
\t\t\t'msDec'       : 'dec',
\t\t\t'January'     : 'January',
\t\t\t'February'    : 'February',
\t\t\t'March'       : 'March',
\t\t\t'April'       : 'April',
\t\t\t'May'         : 'May',
\t\t\t'June'        : 'June',
\t\t\t'July'        : 'July',
\t\t\t'August'      : 'August',
\t\t\t'September'   : 'September',
\t\t\t'October'     : 'October',
\t\t\t'November'    : 'November',
\t\t\t'December'    : 'December',
\t\t\t'Sunday'      : 'Sunday',
\t\t\t'Monday'      : 'Monday',
\t\t\t'Tuesday'     : 'Tuesday',
\t\t\t'Wednesday'   : 'Wednesday',
\t\t\t'Thursday'    : 'Thursday',
\t\t\t'Friday'      : 'Friday',
\t\t\t'Saturday'    : 'Saturday',
\t\t\t'Sun'         : 'Sun',
\t\t\t'Mon'         : 'Mon',
\t\t\t'Tue'         : 'Tue',
\t\t\t'Wed'         : 'Wed',
\t\t\t'Thu'         : 'Thu',
\t\t\t'Fri'         : 'Fri',
\t\t\t'Sat'         : 'Sat',

\t\t\t/******************************** sort variants ********************************/
\t\t\t'sortname'          : 'by name',
\t\t\t'sortkind'          : 'by kind',
\t\t\t'sortsize'          : 'by size',
\t\t\t'sortdate'          : 'by date',
\t\t\t'sortFoldersFirst'  : 'Folders first',
\t\t\t'sortperm'          : 'by permission', // from v2.1.13 added 13.06.2016
\t\t\t'sortmode'          : 'by mode',       // from v2.1.13 added 13.06.2016
\t\t\t'sortowner'         : 'by owner',      // from v2.1.13 added 13.06.2016
\t\t\t'sortgroup'         : 'by group',      // from v2.1.13 added 13.06.2016

\t\t\t/********************************** new items **********************************/
\t\t\t'untitled file.txt' : 'NewFile.txt', // added 10.11.2015
\t\t\t'untitled folder'   : 'NewFolder',   // added 10.11.2015
\t\t\t'Archive'           : 'NewArchive',  // from v2.1 added 10.11.2015

\t\t\t/********************************** messages **********************************/
\t\t\t'confirmReq'      : 'Confirmation required',
\t\t\t'confirmRm'       : 'Valóban törölni akarja a kijelölt adatokat?<br/>Ez később nem fordítható vissza!',
\t\t\t'confirmRepl'     : 'Replace old file with new one?',
\t\t\t'confirmConvUTF8' : 'Not in UTF-8<br/>Convert to UTF-8?<br/>Contents become UTF-8 by saving after conversion.', // from v2.1 added 08.04.2014
\t\t\t'confirmNotSave'  : 'It has been modified.<br/>Losing work if you do not save changes.', // from v2.1 added 15.7.2015
\t\t\t'apllyAll'        : 'Apply to all',
\t\t\t'name'            : 'Név',
\t\t\t'size'            : 'Méret',
\t\t\t'perms'           : 'Jogok',
\t\t\t'modify'          : 'Módosítva',
\t\t\t'kind'            : 'Típus',
\t\t\t'read'            : 'olvasás',
\t\t\t'write'           : 'írás',
\t\t\t'noaccess'        : '-',
\t\t\t'and'             : 'és',
\t\t\t'unknown'         : 'ismeretlen',
\t\t\t'selectall'       : 'Összes kijelölése',
\t\t\t'selectfiles'     : 'Fájlok kijelölése',
\t\t\t'selectffile'     : 'Első fájl kijelölése',
\t\t\t'selectlfile'     : 'Utolsó fájl kijelölése',
\t\t\t'viewlist'        : 'Lista nézet',
\t\t\t'viewicons'       : 'Ikon nézet',
\t\t\t'places'          : 'Helyek',
\t\t\t'calc'            : 'Calculate',
\t\t\t'path'            : 'Útvonal',
\t\t\t'aliasfor'        : 'Cél',
\t\t\t'locked'          : 'Zárolt',
\t\t\t'dim'             : 'Méretek',
\t\t\t'files'           : 'Fájlok',
\t\t\t'folders'         : 'Mappák',
\t\t\t'items'           : 'Elemek',
\t\t\t'yes'             : 'igen',
\t\t\t'no'              : 'nem',
\t\t\t'link'            : 'Parancsikon',
\t\t\t'searcresult'     : 'Keresés eredménye',
\t\t\t'selected'        : 'kijelölt elemek',
\t\t\t'about'           : 'Névjegy',
\t\t\t'shortcuts'       : 'Gyorsbillenytyűk',
\t\t\t'help'            : 'Súgó',
\t\t\t'webfm'           : 'Web file manager',
\t\t\t'ver'             : 'Verzió',
\t\t\t'protocolver'     : 'protokol verzió',
\t\t\t'homepage'        : 'Projekt honlap',
\t\t\t'docs'            : 'Dokumentáció',
\t\t\t'github'          : 'Hozz létre egy új verziót a Github-on',
\t\t\t'twitter'         : 'Kövess minket a twitter-en',
\t\t\t'facebook'        : 'Csatlakozz hozzánk a facebook-on',
\t\t\t'team'            : 'Csapat',
\t\t\t'chiefdev'        : 'vezető fejlesztő',
\t\t\t'developer'       : 'fejlesztő',
\t\t\t'contributor'     : 'külsős hozzájáruló',
\t\t\t'maintainer'      : 'karbantartó',
\t\t\t'translator'      : 'fordító',
\t\t\t'icons'           : 'Ikonok',
\t\t\t'dontforget'      : 'törölközőt ne felejts el hozni!',
\t\t\t'shortcutsof'     : 'Shortcuts disabled',
\t\t\t'dropFiles'       : 'Fájlok dobása ide',
\t\t\t'or'              : 'vagy',
\t\t\t'selectForUpload' : 'fájlok böngészése',
\t\t\t'moveFiles'       : 'Fájlok áthelyezése',
\t\t\t'copyFiles'       : 'Fájlok másolása',
\t\t\t'rmFromPlaces'    : 'Remove from places',
\t\t\t'aspectRatio'     : 'Aspect ratio',
\t\t\t'scale'           : 'Scale',
\t\t\t'width'           : 'Width',
\t\t\t'height'          : 'Height',
\t\t\t'resize'          : 'Resize',
\t\t\t'crop'            : 'Crop',
\t\t\t'rotate'          : 'Rotate',
\t\t\t'rotate-cw'       : 'Rotate 90 degrees CW',
\t\t\t'rotate-ccw'      : 'Rotate 90 degrees CCW',
\t\t\t'degree'          : '°',
\t\t\t'netMountDialogTitle' : 'Mount network volume', // added 18.04.2012
\t\t\t'protocol'            : 'Protocol', // added 18.04.2012
\t\t\t'host'                : 'Host', // added 18.04.2012
\t\t\t'port'                : 'Port', // added 18.04.2012
\t\t\t'user'                : 'User', // added 18.04.2012
\t\t\t'pass'                : 'Password', // added 18.04.2012
\t\t\t'confirmUnmount'      : 'Are you unmount \$1?',  // from v2.1 added 30.04.2012
\t\t\t'dropFilesBrowser': 'Drop or Paste files from browser', // from v2.1 added 30.05.2012
\t\t\t'dropPasteFiles'  : 'Drop or Paste files and URLs here', // from v2.1 added 07.04.2014
\t\t\t'encoding'        : 'Encoding', // from v2.1 added 19.12.2014
\t\t\t'locale'          : 'Locale',   // from v2.1 added 19.12.2014
\t\t\t'searchTarget'    : 'Target: \$1',                // from v2.1 added 22.5.2015
\t\t\t'searchMime'      : 'Search by input MIME Type', // from v2.1 added 22.5.2015
\t\t\t'owner'           : 'Owner', // from v2.1 added 20.6.2015
\t\t\t'group'           : 'Group', // from v2.1 added 20.6.2015
\t\t\t'other'           : 'Other', // from v2.1 added 20.6.2015
\t\t\t'execute'         : 'Execute', // from v2.1 added 20.6.2015
\t\t\t'perm'            : 'Permission', // from v2.1 added 20.6.2015
\t\t\t'mode'            : 'Mode', // from v2.1 added 20.6.2015
\t\t\t'emptyFolder'     : 'Folder is empty', // from v2.1.6 added 30.12.2015
\t\t\t'emptyFolderDrop' : 'Folder is empty\\\\A Drop to add items', // from v2.1.6 added 30.12.2015
\t\t\t'emptyFolderLTap' : 'Folder is empty\\\\A Long tap to add items', // from v2.1.6 added 30.12.2015
\t\t\t'quality'         : 'Quality', // from v2.1.6 added 5.1.2016
\t\t\t'autoSync'        : 'Auto sync',  // from v2.1.6 added 10.1.2016
\t\t\t'moveUp'          : 'Move up',  // from v2.1.6 added 18.1.2016
\t\t\t'getLink'         : 'Get URL link', // from v2.1.7 added 9.2.2016
\t\t\t'selectedItems'   : 'Selected items (\$1)', // from v2.1.7 added 2.19.2016
\t\t\t'folderId'        : 'Folder ID', // from v2.1.10 added 3.25.2016
\t\t\t'offlineAccess'   : 'Allow offline access', // from v2.1.10 added 3.25.2016
\t\t\t'reAuth'          : 'To re-authenticate', // from v2.1.10 added 3.25.2016
\t\t\t'nowLoading'      : 'Now loading...', // from v2.1.12 added 4.26.2016
\t\t\t'openMulti'       : 'Open multiple files', // from v2.1.12 added 5.14.2016
\t\t\t'openMultiConfirm': 'You are trying to open the \$1 files. Are you sure you want to open in browser?', // from v2.1.12 added 5.14.2016
\t\t\t'emptySearch'     : 'Search results is empty', // from v2.1.12 added 5.16.2016
\t\t\t'editingFile'     : 'You are editing a file.', // from v2.1.13 added 6.3.2016
\t\t\t'hasSelected'     : 'You have selected \$1 items.', // from v2.1.13 added 6.3.2016
\t\t\t'hasClipboard'    : 'You have \$1 items in the clipboard.', // from v2.1.13 added 6.3.2016

\t\t\t/********************************** mimetypes **********************************/
\t\t\t'kindUnknown'     : 'Ismeretlen',
\t\t\t'kindFolder'      : 'Mappa',
\t\t\t'kindAlias'       : 'Parancsikon',
\t\t\t'kindAliasBroken' : 'Hibás parancsikon',
\t\t\t// applications
\t\t\t'kindApp'         : 'Alkalmazás',
\t\t\t'kindPostscript'  : 'Postscript dokumentum',
\t\t\t'kindMsOffice'    : 'Microsoft Office dokumentum',
\t\t\t'kindMsWord'      : 'Microsoft Word dokumentum',
\t\t\t'kindMsExcel'     : 'Microsoft Excel dokumentum',
\t\t\t'kindMsPP'        : 'Microsoft Powerpoint bemutató',
\t\t\t'kindOO'          : 'Open Office dokumentum',
\t\t\t'kindAppFlash'    : 'Flash alkalmazás',
\t\t\t'kindPDF'         : 'Portable Document Format (PDF)',
\t\t\t'kindTorrent'     : 'Bittorrent fájl',
\t\t\t'kind7z'          : '7z archívum',
\t\t\t'kindTAR'         : 'TAR archívum',
\t\t\t'kindGZIP'        : 'GZIP archívum',
\t\t\t'kindBZIP'        : 'BZIP archívum',
\t\t\t'kindXZ'          : 'XZ archívum',
\t\t\t'kindZIP'         : 'ZIP archívum',
\t\t\t'kindRAR'         : 'RAR archívum',
\t\t\t'kindJAR'         : 'Java JAR fájl',
\t\t\t'kindTTF'         : 'True Type font',
\t\t\t'kindOTF'         : 'Open Type font',
\t\t\t'kindRPM'         : 'RPM csomag',
\t\t\t// texts
\t\t\t'kindText'        : 'Szöveges dokumentum',
\t\t\t'kindTextPlain'   : 'Plain text',
\t\t\t'kindPHP'         : 'PHP forráskód',
\t\t\t'kindCSS'         : 'Cascading style sheet',
\t\t\t'kindHTML'        : 'HTML dokumentum',
\t\t\t'kindJS'          : 'Javascript forráskód',
\t\t\t'kindRTF'         : 'Rich Text Format',
\t\t\t'kindC'           : 'C forráskód',
\t\t\t'kindCHeader'     : 'C header forráskód',
\t\t\t'kindCPP'         : 'C++ forráskód',
\t\t\t'kindCPPHeader'   : 'C++ header forráskód',
\t\t\t'kindShell'       : 'Unix shell script',
\t\t\t'kindPython'      : 'Python forráskód',
\t\t\t'kindJava'        : 'Java forráskód',
\t\t\t'kindRuby'        : 'Ruby forráskód',
\t\t\t'kindPerl'        : 'Perl script',
\t\t\t'kindSQL'         : 'SQL forráskód',
\t\t\t'kindXML'         : 'XML dokumentum',
\t\t\t'kindAWK'         : 'AWK forráskód',
\t\t\t'kindCSV'         : 'Comma separated values',
\t\t\t'kindDOCBOOK'     : 'Docbook XML dokumentum',
\t\t\t'kindMarkdown'    : 'Markdown text', // added 20.7.2015
\t\t\t// images
\t\t\t'kindImage'       : 'Kép',
\t\t\t'kindBMP'         : 'BMP kép',
\t\t\t'kindJPEG'        : 'JPEG kép',
\t\t\t'kindGIF'         : 'GIF kép',
\t\t\t'kindPNG'         : 'PNG kép',
\t\t\t'kindTIFF'        : 'TIFF kép',
\t\t\t'kindTGA'         : 'TGA kép',
\t\t\t'kindPSD'         : 'Adobe Photoshop kép',
\t\t\t'kindXBITMAP'     : 'X bitmap image',
\t\t\t'kindPXM'         : 'Pixelmator image',
\t\t\t// media
\t\t\t'kindAudio'       : 'Hangfájl',
\t\t\t'kindAudioMPEG'   : 'MPEG hangfájl',
\t\t\t'kindAudioMPEG4'  : 'MPEG-4 hangfájl',
\t\t\t'kindAudioMIDI'   : 'MIDI hangfájl',
\t\t\t'kindAudioOGG'    : 'Ogg Vorbis hangfájl',
\t\t\t'kindAudioWAV'    : 'WAV hangfájl',
\t\t\t'AudioPlaylist'   : 'MP3 playlist',
\t\t\t'kindVideo'       : 'Film',
\t\t\t'kindVideoDV'     : 'DV film',
\t\t\t'kindVideoMPEG'   : 'MPEG film',
\t\t\t'kindVideoMPEG4'  : 'MPEG-4 film',
\t\t\t'kindVideoAVI'    : 'AVI film',
\t\t\t'kindVideoMOV'    : 'Quick Time film',
\t\t\t'kindVideoWM'     : 'Windows Media film',
\t\t\t'kindVideoFlash'  : 'Flash film',
\t\t\t'kindVideoMKV'    : 'Matroska film',
\t\t\t'kindVideoOGG'    : 'Ogg film'
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
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.hu.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.hu.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.hu.js");
    }
}
