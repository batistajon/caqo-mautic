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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.fo.js */
class __TwigTemplate_a421b5c48f8b9e4cf6b5dd6494f661b5df49458e8ecb945e87a8ad32669e90a4 extends Template
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
 * Faroese translation
 * @author Marius Hammer <marius@vrg.fo>
 * @version 2015-12-03
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
\telFinder.prototype.i18.fo = {
\t\ttranslator : 'Marius Hammer &lt;marius@vrg.fo&gt;',
\t\tlanguage   : 'Faroese',
\t\tdirection  : 'ltr',
\t\tdateFormat : 'd.m.Y H:i', // Mar 13, 2012 05:27 PM
\t\tfancyDateFormat : '\$1 H:i', // will produce smth like: Today 12:25 PM
\t\tmessages   : {

\t\t\t/********************************** errors **********************************/
\t\t\t'error'                : 'Villa íkomin',
\t\t\t'errUnknown'           : 'Ókend villa.',
\t\t\t'errUnknownCmd'        : 'Ókend boð.',
\t\t\t'errJqui'              : 'Ógildig jQuery UI konfiguratión. Vælbærar, sum kunnu hálast runt og kunnu sleppast skulu takast við.',
\t\t\t'errNode'              : 'elFinder krevur DOM Element stovna.',
\t\t\t'errURL'               : 'Ugyldig elFinder konfiguration! URL stilling er ikki ásett.',
\t\t\t'errAccess'            : 'Atgongd nokta.',
\t\t\t'errConnect'           : 'Far ikki samband við backend.',
\t\t\t'errAbort'             : 'Sambandi avbrotið.',
\t\t\t'errTimeout'           : 'Sambandi broti av.',
\t\t\t'errNotFound'          : 'Backend ikki funnið.',
\t\t\t'errResponse'          : 'Ógildugt backend svar.',
\t\t\t'errConf'              : 'Ógildugt backend konfiguratión.',
\t\t\t'errJSON'              : 'PHP JSON modulið er ikki innstallera.',
\t\t\t'errNoVolumes'         : 'Lesiligar mappur er ikki atkomulig.',
\t\t\t'errCmdParams'         : 'Ógildigar stillingar fyri kommando \"\$1\".',
\t\t\t'errDataNotJSON'       : 'Dáta er ikki JSON.',
\t\t\t'errDataEmpty'         : 'Dáta er tømt.',
\t\t\t'errCmdReq'            : 'Backend krevur eitt kommando navn.',
\t\t\t'errOpen'              : 'Kundi ikki opna \"\$1\".',
\t\t\t'errNotFolder'         : 'Luturin er ikki ein mappa.',
\t\t\t'errNotFile'           : 'Luturin er ikki ein fíla.',
\t\t\t'errRead'              : 'Kundi ikki lesa til \"\$1\".',
\t\t\t'errWrite'             : 'Kundi ikki skriva til \"\$1\".',
\t\t\t'errPerm'              : 'Atgongd nokta.',
\t\t\t'errLocked'            : '\"\$1\" er løst og kann ikki umdoybast, flytast ella strikast.',
\t\t\t'errExists'            : 'Tað finst longu ein fíla við navn \"\$1\".',
\t\t\t'errInvName'           : 'Ógildugt fíla navn.',
\t\t\t'errFolderNotFound'    : 'Mappa ikki funnin.',
\t\t\t'errFileNotFound'      : 'Fíla ikki funnin.',
\t\t\t'errTrgFolderNotFound' : 'Mappan \"\$1\" bleiv ikke funnin.',
\t\t\t'errPopup'             : 'Kagin forðaði í at opna eitt popup-vindeyga. Fyri at opna fíluna, aktivera popup-vindeygu í tínum kaga stillingum.',
\t\t\t'errMkdir'             : '\\'Kundi ikki stovna mappu \"\$1\".',
\t\t\t'errMkfile'            : 'Kundi ikki stovna mappu \"\$1\".',
\t\t\t'errRename'            : 'Kundi ikki umdoyba \"\$1\".',
\t\t\t'errCopyFrom'          : 'Kopiering av fílum frá mappuni \"\$1\" er ikke loyvt.',
\t\t\t'errCopyTo'            : 'Kopiering av fílum til mappuna \"\$1\" er ikke loyvt.',
\t\t\t'errMkOutLink'         : 'Ikki ført fyri at stovna leinkju til uttanfyri \\'volume\\' rót.', // from v2.1 added 03.10.2015
\t\t\t'errUpload'            : 'Innlegginar feilur.',  // old name - errUploadCommon
\t\t\t'errUploadFile'        : 'Kundi ikki leggja \"\$1\" inn.', // old name - errUpload
\t\t\t'errUploadNoFiles'     : 'Ongar fílar funnir at leggja inn.',
\t\t\t'errUploadTotalSize'   : 'Dátain er størri enn mest loyvda støddin.', // old name - errMaxSize
\t\t\t'errUploadFileSize'    : 'Fíla er størri enn mest loyvda støddin.', //  old name - errFileMaxSize
\t\t\t'errUploadMime'        : 'Fílu slag ikki góðkent.',
\t\t\t'errUploadTransfer'    : '\"\$1\" innleggingar feilur.',
\t\t\t'errUploadTemp'        : 'Ikki ført fyri at gera fyribils fílu fyri innlegging.', // from v2.1 added 26.09.2015
\t\t\t'errNotReplace'        : 'Lutur \"\$1\" finst longu á hesum stað og can ikki skiftast út av lutið av øðrum slag.', // new
\t\t\t'errReplace'           : 'Ikki ført fyri at erstattae \"\$1\".',
\t\t\t'errSave'              : 'Kundi ikki goyma \"\$1\".',
\t\t\t'errCopy'              : 'Kundi ikki kopiera \"\$1\".',
\t\t\t'errMove'              : 'Kundi ikki flyta \"\$1\".',
\t\t\t'errCopyInItself'      : 'Kundi ikki kopiera \"\$1\" inn í seg sjálva.',
\t\t\t'errRm'                : 'Kundi ikki strika \"\$1\".',
\t\t\t'errRmSrc'             : 'Ikki ført fyri at strika keldu fíla(r).',
\t\t\t'errExtract'           : 'Kundi ikki útpakka fílar frá \"\$1\".',
\t\t\t'errArchive'           : 'Kundi ikki stovna arkiv.',
\t\t\t'errArcType'           : 'Arkiv slagið er ikki stuðla.',
\t\t\t'errNoArchive'         : 'Fílan er ikki eitt arkiv ella er ikki eitt stuðla arkiva slag.',
\t\t\t'errCmdNoSupport'      : 'Backend stuðlar ikki hesi boð.',
\t\t\t'errReplByChild'       : 'appan \"\$1\" kann ikki erstattast av einari vøru, hon inniheldur.',
\t\t\t'errArcSymlinks'       : 'Av trygdarávum grundum, noktaði skipanin at pakka út arkivir ið innihalda symlinks ella fílur við nøvn ið ikki eru loyvd.', // edited 24.06.2012
\t\t\t'errArcMaxSize'        : 'Arkiv fílar fylla meir enn mest loyvda støddin.',
\t\t\t'errResize'            : 'Kundi ikki broyta støddina á \"\$1\".',
\t\t\t'errResizeDegree'      : 'Ógildugt roterings stig.',  // added 7.3.2013
\t\t\t'errResizeRotate'      : 'Ikki ført fyri at rotera mynd.',  // added 7.3.2013
\t\t\t'errResizeSize'        : 'Ógildug myndastødd.',  // added 7.3.2013
\t\t\t'errResizeNoChange'    : 'Mynda stødd ikki broytt.',  // added 7.3.2013
\t\t\t'errUsupportType'      : 'Ikki stuðla fíla slag.',
\t\t\t'errNotUTF8Content'    : 'Fílan \"\$1\" er ikki í UTF-8 og kann ikki vera rættað.',  // added 9.11.2011
\t\t\t'errNetMount'          : 'Kundi ikki \"mounta\" \"\$1\".', // added 17.04.2012
\t\t\t'errNetMountNoDriver'  : 'Ikki stuðla protokol.',     // added 17.04.2012
\t\t\t'errNetMountFailed'    : 'Mount miseydnaðist.',         // added 17.04.2012
\t\t\t'errNetMountHostReq'   : 'Host kravt.', // added 18.04.2012
\t\t\t'errSessionExpires'    : 'Tín seta er útgingin vegna óvirkniy.',
\t\t\t'errCreatingTempDir'   : 'Ikki ført fyri at stovna fyribils fíluskrá: \"\$1\"',
\t\t\t'errFtpDownloadFile'   : 'Ikki ført fyri at taka fílu niður frá FTP: \"\$1\"',
\t\t\t'errFtpUploadFile'     : 'Ikki ført fyri at leggja fílu til FTP: \"\$1\"',
\t\t\t'errFtpMkdir'          : 'Ikki ført fyri at stovna fjar-fílaskrá á FTP: \"\$1\"',
\t\t\t'errArchiveExec'       : 'Villa íkomin undir arkiveran af fílar: \"\$1\"',
\t\t\t'errExtractExec'       : 'Villa íkomin undir útpakking af fílum: \"\$1\"',
\t\t\t'errNetUnMount'        : 'Unable to unmount', // from v2.1 added 30.04.2012
\t\t\t'errConvUTF8'          : 'Kann ikki broytast til UTF-8', // from v2.1 added 08.04.2014
\t\t\t'errFolderUpload'      : 'Royn Google Chrome, um tú ynskir at leggja mappu innn.', // from v2.1 added 26.6.2015

\t\t\t/******************************* commands names ********************************/
\t\t\t'cmdarchive'   : 'Stovna arkiv',
\t\t\t'cmdback'      : 'Aftur\\'',
\t\t\t'cmdcopy'      : 'Kopier',
\t\t\t'cmdcut'       : 'Klipp',
\t\t\t'cmddownload'  : 'Tak niður',
\t\t\t'cmdduplicate' : 'Tvífalda',
\t\t\t'cmdedit'      : 'Rætta fílu',
\t\t\t'cmdextract'   : 'Pakka út fílar úr arkiv',
\t\t\t'cmdforward'   : 'Fram',
\t\t\t'cmdgetfile'   : 'Vel fílar',
\t\t\t'cmdhelp'      : 'Um hesa software',
\t\t\t'cmdhome'      : 'Heim',
\t\t\t'cmdinfo'      : 'Fá upplýsingar',
\t\t\t'cmdmkdir'     : 'Nýggja mappu',
\t\t\t'cmdmkfile'    : 'Nýggja fílu',
\t\t\t'cmdopen'      : 'Opna',
\t\t\t'cmdpaste'     : 'Set inn',
\t\t\t'cmdquicklook' : 'Forsýning',
\t\t\t'cmdreload'    : 'Les inn umaftur',
\t\t\t'cmdrename'    : 'Umdoyp',
\t\t\t'cmdrm'        : 'Strika',
\t\t\t'cmdsearch'    : 'Finn fílar',
\t\t\t'cmdup'        : 'Eitt stig upp',
\t\t\t'cmdupload'    : 'Legg fílar inn',
\t\t\t'cmdview'      : 'Síggj',
\t\t\t'cmdresize'    : 'Tillaga stødd & Roter',
\t\t\t'cmdsort'      : 'Raða',
\t\t\t'cmdnetmount'  : 'Mount network volume', // added 18.04.2012
\t\t\t'cmdnetunmount': 'Unmount', // from v2.1 added 30.04.2012
\t\t\t'cmdplaces'    : 'Til støð', // added 28.12.2014
\t\t\t'cmdchmod'     : 'Broytir stíl', // from v2.1 added 20.6.2015

\t\t\t/*********************************** buttons ***********************************/
\t\t\t'btnClose'  : 'Lat aftur',
\t\t\t'btnSave'   : 'Goym',
\t\t\t'btnRm'     : 'Strika',
\t\t\t'btnApply'  : 'Brúka',
\t\t\t'btnCancel' : 'Angra',
\t\t\t'btnNo'     : 'Nei',
\t\t\t'btnYes'    : 'Ja',
\t\t\t'btnMount'  : 'Mount',  // added 18.04.2012
\t\t\t'btnApprove': 'Goto \$1 & approve', // from v2.1 added 26.04.2012
\t\t\t'btnUnmount': 'Unmount', // from v2.1 added 30.04.2012
\t\t\t'btnConv'   : 'Konverter', // from v2.1 added 08.04.2014
\t\t\t'btnCwd'    : 'Her',      // from v2.1 added 22.5.2015
\t\t\t'btnVolume' : 'Volume',    // from v2.1 added 22.5.2015
\t\t\t'btnAll'    : 'Øll',       // from v2.1 added 22.5.2015
\t\t\t'btnMime'   : 'MIME Slag', // from v2.1 added 22.5.2015
\t\t\t'btnFileName':'Fílunavn',  // from v2.1 added 22.5.2015
\t\t\t'btnSaveClose': 'Goym & Lat aftur', // from v2.1 added 12.6.2015
\t\t\t'btnBackup' : 'Backup', // fromv2.1 added 28.11.2015

\t\t\t/******************************** notifications ********************************/
\t\t\t'ntfopen'     : 'Opna mappu',
\t\t\t'ntffile'     : '\\'Opna fílu',
\t\t\t'ntfreload'   : 'Les innaftur mappu innihald',
\t\t\t'ntfmkdir'    : 'Stovnar mappu',
\t\t\t'ntfmkfile'   : 'Stovnar fílur',
\t\t\t'ntfrm'       : 'Strikar fílur',
\t\t\t'ntfcopy'     : 'Kopierar fílur',
\t\t\t'ntfmove'     : 'Flytur fílar',
\t\t\t'ntfprepare'  : 'Ger klárt at kopiera fílar',
\t\t\t'ntfrename'   : 'Umdoyp fílar',
\t\t\t'ntfupload'   : 'Leggur inn fílar',
\t\t\t'ntfdownload' : 'Tekur fílar niður',
\t\t\t'ntfsave'     : 'Goymir fílar',
\t\t\t'ntfarchive'  : 'Stovnar arkiv',
\t\t\t'ntfextract'  : 'Útpakkar fílar frá arkiv',
\t\t\t'ntfsearch'   : 'Leitar eftir fílum',
\t\t\t'ntfresize'   : 'Broytir stødd á fílur',
\t\t\t'ntfsmth'     : '\\'Ger okkurt >_<',
\t\t\t'ntfloadimg'  : 'Lesur mynd inn',
\t\t\t'ntfnetmount' : 'Mounting network volume', // added 18.04.2012
\t\t\t'ntfnetunmount': 'Unmounting network volume', // from v2.1 added 30.04.2012
\t\t\t'ntfdim'      : 'Tekur mynda vídd', // added 20.05.2013
\t\t\t'ntfreaddir'  : 'Lesur mappu upplýsingar', // from v2.1 added 01.07.2013
\t\t\t'ntfurl'      : 'Far URL af leinkju', // from v2.1 added 11.03.2014
\t\t\t'ntfchmod'    : 'Broyti fílu stíl', // from v2.1 added 20.6.2015
\t\t\t'ntfpreupload': 'Kannar fílunavnið á fílu', // from v2.1 added 31.11.2015

\t\t\t/************************************ dates **********************************/
\t\t\t'dateUnknown' : 'ókent',
\t\t\t'Today'       : 'Í dag',
\t\t\t'Yesterday'   : 'Í gjár',
\t\t\t'msJan'       : 'Jan',
\t\t\t'msFeb'       : 'Feb',
\t\t\t'msMar'       : 'Mar',
\t\t\t'msApr'       : 'Apr',
\t\t\t'msMay'       : 'Mai',
\t\t\t'msJun'       : 'Jun',
\t\t\t'msJul'       : 'Jul',
\t\t\t'msAug'       : 'Aug',
\t\t\t'msSep'       : 'Sep',
\t\t\t'msOct'       : 'Okt',
\t\t\t'msNov'       : 'Nov',
\t\t\t'msDec'       : 'Des',
\t\t\t'January'     : 'Januar',
\t\t\t'February'    : 'Februar',
\t\t\t'March'       : 'Mars',
\t\t\t'April'       : 'Apríl',
\t\t\t'May'         : 'Mai',
\t\t\t'June'        : 'Juni',
\t\t\t'July'        : 'Juli',
\t\t\t'August'      : 'August',
\t\t\t'September'   : 'September',
\t\t\t'October'     : 'Oktober',
\t\t\t'November'    : 'November',
\t\t\t'December'    : 'Desember',
\t\t\t'Sunday'      : 'Sunnudag',
\t\t\t'Monday'      : 'Mánadag',
\t\t\t'Tuesday'     : 'Týsdag',
\t\t\t'Wednesday'   : 'Mikudag',
\t\t\t'Thursday'    : 'Hósdag',
\t\t\t'Friday'      : 'Fríggjadag',
\t\t\t'Saturday'    : 'Leygardag',
\t\t\t'Sun'         : 'Sun',
\t\t\t'Mon'         : 'Mán',
\t\t\t'Tue'         : 'Týs',
\t\t\t'Wed'         : 'Mik',
\t\t\t'Thu'         : 'Hós',
\t\t\t'Fri'         : 'Frí',
\t\t\t'Sat'         : 'Ley',

\t\t\t/******************************** sort variants ********************************/
\t\t\t'sortname'          : 'eftir navn',
\t\t\t'sortkind'          : 'eftir slag',
\t\t\t'sortsize'          : 'eftir stødd',
\t\t\t'sortdate'          : 'eftir dato',
\t\t\t'sortFoldersFirst'  : 'mappur fyrst',

\t\t\t/********************************** new items **********************************/
\t\t\t'untitled file.txt' : 'NýggjaFílu.txt', // added 10.11.2015
\t\t\t'untitled folder'   : 'NýggjaMappu',   // added 10.11.2015
\t\t\t'Archive'           : 'NýtArkiv',  // from v2.1 added 10.11.2015

\t\t\t/********************************** messages **********************************/
\t\t\t'confirmReq'      : 'Váttan kravd',
\t\t\t'confirmRm'       : 'Ert tú vísur í at tú ynskir at strika fílarnar?<br/>Hetta kann ikki angrast!',
\t\t\t'confirmRepl'     : 'Erstatta gomlu fílu við nýggja?',
\t\t\t'confirmConvUTF8' : 'Brúka á øll', // from v2.1 added 08.04.2014
\t\t\t'confirmNotSave'  : 'Er blivi rættað.<br/>Missir sínar broytingar um tú ikki goymir.', // from v2.1 added 15.7.2015
\t\t\t'apllyAll'        : 'Brúka til øll',
\t\t\t'name'            : 'Navn',
\t\t\t'size'            : 'Stødd',
\t\t\t'perms'           : 'Rættindi',
\t\t\t'modify'          : 'Rættað',
\t\t\t'kind'            : 'Slag',
\t\t\t'read'            : 'síggja',
\t\t\t'write'           : 'broyta',
\t\t\t'noaccess'        : 'onga atgongd',
\t\t\t'and'             : 'og',
\t\t\t'unknown'         : 'ókent',
\t\t\t'selectall'       : 'Vel allar fílur',
\t\t\t'selectfiles'     : 'Vel fílu(r)',
\t\t\t'selectffile'     : 'Vel fyrstu fílu',
\t\t\t'selectlfile'     : 'Vel síðstu fílu',
\t\t\t'viewlist'        : 'Lista vísing',
\t\t\t'viewicons'       : 'Ikon vísing',
\t\t\t'places'          : 'Støð',
\t\t\t'calc'            : 'Rokna',
\t\t\t'path'            : 'Stiga',
\t\t\t'aliasfor'        : 'Hjánavn fyri',
\t\t\t'locked'          : 'Læst',
\t\t\t'dim'             : 'Vídd',
\t\t\t'files'           : 'Fílur',
\t\t\t'folders'         : 'Mappur',
\t\t\t'items'           : 'Myndir',
\t\t\t'yes'             : 'ja',
\t\t\t'no'              : 'nei',
\t\t\t'link'            : 'Leinkja',
\t\t\t'searcresult'     : 'Leiti úrslit',
\t\t\t'selected'        : 'valdar myndir',
\t\t\t'about'           : 'Um',
\t\t\t'shortcuts'       : 'Snarvegir',
\t\t\t'help'            : 'Hjálp',
\t\t\t'webfm'           : 'Web fílu umsitan',
\t\t\t'ver'             : 'Útgáva',
\t\t\t'protocolver'     : 'protokol versión',
\t\t\t'homepage'        : 'Verkætlan heim',
\t\t\t'docs'            : 'Skjalfesting',
\t\t\t'github'          : 'Mynda okkum á Github',
\t\t\t'twitter'         : 'Fylg okkum á twitter',
\t\t\t'facebook'        : 'Fylg okkum á facebook',
\t\t\t'team'            : 'Lið',
\t\t\t'chiefdev'        : 'forritaleiðari',
\t\t\t'developer'       : 'forritari',
\t\t\t'contributor'     : 'stuðulsveitari',
\t\t\t'maintainer'      : 'viðlíkahaldari',
\t\t\t'translator'      : 'umsetari',
\t\t\t'icons'           : 'Ikonir',
\t\t\t'dontforget'      : 'and don\\'t forget to take your towel',
\t\t\t'shortcutsof'     : 'Snarvegir sligi frá',
\t\t\t'dropFiles'       : 'Slepp fílur her',
\t\t\t'or'              : 'ella',
\t\t\t'selectForUpload' : 'Vel fílur at leggja inn',
\t\t\t'moveFiles'       : 'Flyt fílur',
\t\t\t'copyFiles'       : 'Kopier fílur',
\t\t\t'rmFromPlaces'    : 'Flyt frá støð',
\t\t\t'aspectRatio'     : 'Skermformat',
\t\t\t'scale'           : 'Skalera',
\t\t\t'width'           : 'Longd',
\t\t\t'height'          : 'Hædd',
\t\t\t'resize'          : 'Tilliga stødd',
\t\t\t'crop'            : 'Sker til',
\t\t\t'rotate'          : 'Rotera',
\t\t\t'rotate-cw'       : 'Rotera 90 gradir við urið',
\t\t\t'rotate-ccw'      : 'otera 90 gradir móti urið',
\t\t\t'degree'          : '°',
\t\t\t'netMountDialogTitle' : 'Mount network volume', // added 18.04.2012
\t\t\t'protocol'            : 'Protokol', // added 18.04.2012
\t\t\t'host'                : 'Host', // added 18.04.2012
\t\t\t'port'                : 'Port', // added 18.04.2012
\t\t\t'user'                : 'Brúkari', // added 18.04.2012
\t\t\t'pass'                : 'Loyniorð', // added 18.04.2012
\t\t\t'confirmUnmount'      : 'Are you unmount \$1?',  // from v2.1 added 30.04.2012
\t\t\t'dropFilesBrowser': 'Hála ella set innn fílar frá kaga', // from v2.1 added 30.05.2012
\t\t\t'dropPasteFiles'  : 'Hála ella set inn fílar frá URls her', // from v2.1 added 07.04.2014
\t\t\t'encoding'        : 'Encoding', // from v2.1 added 19.12.2014
\t\t\t'locale'          : 'Locale',   // from v2.1 added 19.12.2014
\t\t\t'searchTarget'    : 'Target: \$1',                // from v2.1 added 22.5.2015
\t\t\t'searchMime'      : 'Leita við input MIME Type', // from v2.1 added 22.5.2015
\t\t\t'owner'           : 'Eigari', // from v2.1 added 20.6.2015
\t\t\t'group'           : 'Bólkur', // from v2.1 added 20.6.2015
\t\t\t'other'           : 'Annað', // from v2.1 added 20.6.2015
\t\t\t'execute'         : 'Útfør', // from v2.1 added 20.6.2015
\t\t\t'perm'            : 'Rættindi', // from v2.1 added 20.6.2015
\t\t\t'mode'            : 'Mode', // from v2.1 added 20.6.2015

\t\t\t/********************************** mimetypes **********************************/
\t\t\t'kindUnknown'     : 'Ókent',
\t\t\t'kindFolder'      : 'Mappa',
\t\t\t'kindAlias'       : 'Hjánavn',
\t\t\t'kindAliasBroken' : 'Óvirki hjánavn',
\t\t\t// applications
\t\t\t'kindApp'         : 'Applikatión',
\t\t\t'kindPostscript'  : 'Postscript skjal',
\t\t\t'kindMsOffice'    : 'Microsoft Office skjal',
\t\t\t'kindMsWord'      : 'Microsoft Word skjal',
\t\t\t'kindMsExcel'     : 'Microsoft Excel skjal',
\t\t\t'kindMsPP'        : 'Microsoft Powerpoint framløga',
\t\t\t'kindOO'          : 'Open Office skjal',
\t\t\t'kindAppFlash'    : 'Flash applikatión',
\t\t\t'kindPDF'         : 'Portable Document Format (PDF)',
\t\t\t'kindTorrent'     : 'Bittorrent fíla',
\t\t\t'kind7z'          : '7z arkiv',
\t\t\t'kindTAR'         : 'TAR arkiv',
\t\t\t'kindGZIP'        : 'GZIP arkiv',
\t\t\t'kindBZIP'        : 'BZIP arkiv',
\t\t\t'kindXZ'          : 'XZ arkiv',
\t\t\t'kindZIP'         : 'ZIP arkiv',
\t\t\t'kindRAR'         : 'RAR arkiv',
\t\t\t'kindJAR'         : 'Java JAR ffílaile',
\t\t\t'kindTTF'         : 'True Type font',
\t\t\t'kindOTF'         : 'Open Type font',
\t\t\t'kindRPM'         : 'RPM pakki',
\t\t\t// texts
\t\t\t'kindText'        : 'Text skjal',
\t\t\t'kindTextPlain'   : 'Reinur tekstur',
\t\t\t'kindPHP'         : 'PHP kelda',
\t\t\t'kindCSS'         : 'Cascading style sheet (CSS)',
\t\t\t'kindHTML'        : 'HTML skjal',
\t\t\t'kindJS'          : 'Javascript kelda',
\t\t\t'kindRTF'         : 'Rich Text Format (RTF)',
\t\t\t'kindC'           : 'C kelda',
\t\t\t'kindCHeader'     : 'C header kelda',
\t\t\t'kindCPP'         : 'C++ kelda',
\t\t\t'kindCPPHeader'   : 'C++ header kelda',
\t\t\t'kindShell'       : 'Unix shell script',
\t\t\t'kindPython'      : 'Python kelda',
\t\t\t'kindJava'        : 'Java kelda',
\t\t\t'kindRuby'        : 'Ruby kelda',
\t\t\t'kindPerl'        : 'Perl script',
\t\t\t'kindSQL'         : 'SQL kelda',
\t\t\t'kindXML'         : 'XML skjal',
\t\t\t'kindAWK'         : 'AWK kelda',
\t\t\t'kindCSV'         : 'Comma separated values (CSV)',
\t\t\t'kindDOCBOOK'     : 'Docbook XML skjal',
\t\t\t'kindMarkdown'    : 'Markdown text', // added 20.7.2015
\t\t\t// images
\t\t\t'kindImage'       : 'Mynd',
\t\t\t'kindBMP'         : 'BMP mynd',
\t\t\t'kindJPEG'        : 'JPEG mynd',
\t\t\t'kindGIF'         : 'GIF mynd',
\t\t\t'kindPNG'         : 'PNG mynd',
\t\t\t'kindTIFF'        : 'TIFF mynd',
\t\t\t'kindTGA'         : 'TGA mynd',
\t\t\t'kindPSD'         : 'Adobe Photoshop mynd',
\t\t\t'kindXBITMAP'     : 'X bitmap mynd',
\t\t\t'kindPXM'         : 'Pixelmator mynd',
\t\t\t// media
\t\t\t'kindAudio'       : 'Audio media',
\t\t\t'kindAudioMPEG'   : 'MPEG ljóðfíla',
\t\t\t'kindAudioMPEG4'  : 'MPEG-4 ljóðfíla',
\t\t\t'kindAudioMIDI'   : 'MIDI ljóðfíla',
\t\t\t'kindAudioOGG'    : 'Ogg Vorbis ljóðfíla',
\t\t\t'kindAudioWAV'    : 'WAV ljóðfíla',
\t\t\t'AudioPlaylist'   : 'MP3 playlisti',
\t\t\t'kindVideo'       : 'Video media',
\t\t\t'kindVideoDV'     : 'DV filmur',
\t\t\t'kindVideoMPEG'   : 'MPEG filmur',
\t\t\t'kindVideoMPEG4'  : 'MPEG-4 filmur',
\t\t\t'kindVideoAVI'    : 'AVI filmur',
\t\t\t'kindVideoMOV'    : 'Quick Time filmur',
\t\t\t'kindVideoWM'     : 'Windows Media filmur',
\t\t\t'kindVideoFlash'  : 'Flash filmur',
\t\t\t'kindVideoMKV'    : 'Matroska filmur',
\t\t\t'kindVideoOGG'    : 'Ogg filmur'
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
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.fo.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.fo.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.fo.js");
    }
}
