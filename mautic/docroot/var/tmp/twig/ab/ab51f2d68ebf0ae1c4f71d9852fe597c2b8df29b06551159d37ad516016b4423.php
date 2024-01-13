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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.sk.js */
class __TwigTemplate_fd55c3dee8a155d13938a9828ed74dff44f215a4eef7e4daa96f7d908b241796 extends Template
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
 * Slovak translation
 * @author RobiNN <kelcakrobo@gmail.com>
 * @author Jakub Ďuraš <jkblmr@gmail.com>
 * @version 2020-03-15
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
\telFinder.prototype.i18.sk = {
\t\ttranslator : 'RobiNN &lt;kelcakrobo@gmail.com&gt;, Jakub Ďuraš &lt;jkblmr@gmail.com&gt;',
\t\tlanguage   : 'Slovenčina',
\t\tdirection  : 'ltr',
\t\tdateFormat : 'd.m.Y H:i', // will show like: 15.03.2020 16:42
\t\tfancyDateFormat : '\$1 H:i', // will show like: Dnes 16:42
\t\tnonameDateFormat : 'ymd-His', // noname upload will show like: 200315-164238
\t\tmessages   : {

\t\t\t/********************************** errors **********************************/
\t\t\t'error'                : 'Chyba',
\t\t\t'errUnknown'           : 'Neznáma chyba.',
\t\t\t'errUnknownCmd'        : 'Neznámy príkaz.',
\t\t\t'errJqui'              : 'Nesprávna jQuery UI konfigurácia. Selectable, draggable a droppable musia byť načítané.',
\t\t\t'errNode'              : 'elFinder vyžaduje vytvorenie DOM elementu.',
\t\t\t'errURL'               : 'Nesprávna elFinder konfigurácia! URL nie je definovaná.',
\t\t\t'errAccess'            : 'Prístup zamietnutý.',
\t\t\t'errConnect'           : 'Nepodarilo sa pripojiť do backendu.',
\t\t\t'errAbort'             : 'Spojenie bolo prerušené.',
\t\t\t'errTimeout'           : 'Časový limit vypršal.',
\t\t\t'errNotFound'          : 'Backend nenájdený.',
\t\t\t'errResponse'          : 'Nesprávna backend odpoveď.',
\t\t\t'errConf'              : 'Nesprávna backend konfigurácia.',
\t\t\t'errJSON'              : 'PHP JSON modul nie je nainštalovaný.',
\t\t\t'errNoVolumes'         : 'Nie sú dostupné žiadne čitateľné média.',
\t\t\t'errCmdParams'         : 'Nesprávne parametre pre príkaz \"\$1\".',
\t\t\t'errDataNotJSON'       : 'Dáta nie sú formátu JSON.',
\t\t\t'errDataEmpty'         : 'Prázdne dáta.',
\t\t\t'errCmdReq'            : 'Backend požiadavka požaduje názov príkazu.',
\t\t\t'errOpen'              : 'Nie je možné otvoriť \"\$1\".',
\t\t\t'errNotFolder'         : 'Objekt nie je priečinok.',
\t\t\t'errNotFile'           : 'Objekt nie je súbor.',
\t\t\t'errRead'              : 'Nie je možné prečítať \"\$1\".',
\t\t\t'errWrite'             : 'Nie je možné písať do \"\$1\".',
\t\t\t'errPerm'              : 'Prístup zamietnutý.',
\t\t\t'errLocked'            : '\"\$1\" je uzamknutý a nemôže byť premenovaný, presunutý alebo odstránený.',
\t\t\t'errExists'            : 'Položka s názvom \"\$1\" už existuje.',
\t\t\t'errInvName'           : 'Neplatný názov súboru.',
\t\t\t'errInvDirname'        : 'Neplatný názov priečinka.',  // from v2.1.24 added 12.4.2017
\t\t\t'errFolderNotFound'    : 'Priečinok nebol nájdený.',
\t\t\t'errFileNotFound'      : 'Súbor nenájdený.',
\t\t\t'errTrgFolderNotFound' : 'Cieľový priečinok \"\$1\" sa nenašiel.',
\t\t\t'errPopup'             : 'Prehliadač zabránil otvoreniu vyskakovacieho okna. Pre otvorenie súboru povoľte vyskakovacie okná.',
\t\t\t'errMkdir'             : 'Nepodarilo sa vytvoriť priečinok \"\$1\".',
\t\t\t'errMkfile'            : 'Nepodarilo sa vytvoriť súbor \"\$1\".',
\t\t\t'errRename'            : 'Nepodarilo sa premenovať \"\$1\".',
\t\t\t'errCopyFrom'          : 'Kopírovanie súborov z média \"\$1\" nie je povolené.',
\t\t\t'errCopyTo'            : 'Kopírovanie súborov na médium \"\$1\" nie je povolené.',
\t\t\t'errMkOutLink'         : 'Nie je možné vytvoriť odkaz mimo koreňového zväzku.', // from v2.1 added 03.10.2015
\t\t\t'errUpload'            : 'Chyba pri nahrávaní.',  // old name - errUploadCommon
\t\t\t'errUploadFile'        : 'Nepodarilo sa nahrať \"\$1\".', // old name - errUpload
\t\t\t'errUploadNoFiles'     : 'Neboli nájdené žiadne súbory na nahranie.',
\t\t\t'errUploadTotalSize'   : 'Dáta prekračujú maximálnu povolenú veľkosť.', // old name - errMaxSize
\t\t\t'errUploadFileSize'    : 'Súbor prekračuje maximálnu povolenú veľkosť.', //  old name - errFileMaxSize
\t\t\t'errUploadMime'        : 'Nepovolený typ súboru.',
\t\t\t'errUploadTransfer'    : 'Problém s nahrávaním \"\$1\".',
\t\t\t'errUploadTemp'        : 'Nepodarilo sa vytvoriť dočasný súbor na nahranie.', // from v2.1 added 26.09.2015
\t\t\t'errNotReplace'        : 'Objekt \"\$1\" na tomto mieste už existuje a nemôže byť nahradený objektom iného typu.', // new
\t\t\t'errReplace'           : 'Nie je možné nahradiť \"\$1\".',
\t\t\t'errSave'              : 'Nie je možné uložiť \"\$1\".',
\t\t\t'errCopy'              : 'Nie je možné kopírovať \"\$1\".',
\t\t\t'errMove'              : 'Nie je možné preniesť \"\$1\".',
\t\t\t'errCopyInItself'      : 'Nie je možné kopírovať \"\$1\" do seba.',
\t\t\t'errRm'                : 'Nie je možné vymazať \"\$1\".',
\t\t\t'errTrash'             : 'Nie je možné presunúť do koša.', // from v2.1.24 added 30.4.2017
\t\t\t'errRmSrc'             : 'Nie je možné odstrániť zdrojový/é súbor/y.',
\t\t\t'errExtract'           : 'Nie je možné extrahovať súbory z \"\$1\".',
\t\t\t'errArchive'           : 'Nie je možné vytvoriť archív.',
\t\t\t'errArcType'           : 'Nepodporovaný typ archívu.',
\t\t\t'errNoArchive'         : 'Súbor nie je archív alebo má nepodporovaný typ archívu.',
\t\t\t'errCmdNoSupport'      : 'Backend nepodporuje tento príkaz.',
\t\t\t'errReplByChild'       : 'Priečinok \"\$1\" nemôže byť nahradený položkou, ktorú už obsahuje.',
\t\t\t'errArcSymlinks'       : 'Z bezpečnostných dôvodov bolo zakázané extrahovanie archívov obsahujúcich symlinky, alebo súborov s nepovolenými názvami.', // edited 24.06.2012
\t\t\t'errArcMaxSize'        : 'Súbory archívu prekračujú maximálnu povolenú veľkosť.',
\t\t\t'errResize'            : 'Nie je možné zmeniť veľkosť \"\$1\".',
\t\t\t'errResizeDegree'      : 'Neplatný stupeň otočenia.',  // added 7.3.2013
\t\t\t'errResizeRotate'      : 'Nie je možné otočiť obrázok.',  // added 7.3.2013
\t\t\t'errResizeSize'        : 'Neplatná veľkosť obrázka.',  // added 7.3.2013
\t\t\t'errResizeNoChange'    : 'Veľkosť obrázku sa nezmenila.',  // added 7.3.2013
\t\t\t'errUsupportType'      : 'Nepodporovaný typ súboru.',
\t\t\t'errNotUTF8Content'    : 'Súbor \"\$1\" nie je v UTF-8 a nemôže byť upravený.',  // added 9.11.2011
\t\t\t'errNetMount'          : 'Nie je možné pripojiť \"\$1\".', // added 17.04.2012
\t\t\t'errNetMountNoDriver'  : 'Nepodporovaný protokol.',     // added 17.04.2012
\t\t\t'errNetMountFailed'    : 'Pripájanie zlyhalo.',         // added 17.04.2012
\t\t\t'errNetMountHostReq'   : 'Hosť je požadovaný.', // added 18.04.2012
\t\t\t'errSessionExpires'    : 'Vaša relácia vypršala kvôli nečinnosti.',
\t\t\t'errCreatingTempDir'   : 'Nepodarilo sa vytvoriť dočasný adresár: \"\$1\"',
\t\t\t'errFtpDownloadFile'   : 'Nie je možné stiahnuť súbor z FTP: \"\$1\"',
\t\t\t'errFtpUploadFile'     : 'Nie je možné nahrať súbor na FTP: \"\$1\"',
\t\t\t'errFtpMkdir'          : 'Nedá sa vytvoriť vzdialený adresár na FTP: \"\$1\"',
\t\t\t'errArchiveExec'       : 'Chyba pri archivácii súborov: \"\$1\"',
\t\t\t'errExtractExec'       : 'Chyba pri extrahovaní súborov: \"\$1\"',
\t\t\t'errNetUnMount'        : 'Nepodarilo sa odpojiť', // from v2.1 added 30.04.2012
\t\t\t'errConvUTF8'          : 'Nie je prevoditeľný na UTF-8', // from v2.1 added 08.04.2014
\t\t\t'errFolderUpload'      : 'Vyskúšajte moderný prehliadač, ak chcete nahrať priečinok.', // from v2.1 added 26.6.2015
\t\t\t'errSearchTimeout'     : 'Vypršal časový limit pri hľadaní \"\$1\". Výsledok vyhľadávania je čiastočný.', // from v2.1 added 12.1.2016
\t\t\t'errReauthRequire'     : 'Opätovné povolenie je potrebné.', // from v2.1.10 added 24.3.2016
\t\t\t'errMaxTargets'        : 'Maximálny počet voliteľných položiek je \$1.', // from v2.1.17 added 17.10.2016
\t\t\t'errRestore'           : 'Nepodarilo sa obnoviť z koša. Cieľ obnovenia nie je možné identifikovať.', // from v2.1.24 added 3.5.2017
\t\t\t'errEditorNotFound'    : 'Editor tohto typu súboru nebol nájdený.', // from v2.1.25 added 23.5.2017
\t\t\t'errServerError'       : 'Vyskytla sa chyba na strane servera.', // from v2.1.25 added 16.6.2017
\t\t\t'errEmpty'             : 'Nepodarilo sa vyprázdniť priečinok \"\$1\".', // from v2.1.25 added 22.6.2017
\t\t\t'moreErrors'           : 'Existujú ešte ďalšie \$1 chyby.', // from v2.1.44 added 9.12.2018

\t\t\t/******************************* commands names ********************************/
\t\t\t'cmdarchive'   : 'Vytvoriť archív',
\t\t\t'cmdback'      : 'Späť',
\t\t\t'cmdcopy'      : 'Kopírovať',
\t\t\t'cmdcut'       : 'Vystrihnúť',
\t\t\t'cmddownload'  : 'Stiahnuť',
\t\t\t'cmdduplicate' : 'Duplikovať',
\t\t\t'cmdedit'      : 'Upraviť súbor',
\t\t\t'cmdextract'   : 'Extrahovať súbory z archívu',
\t\t\t'cmdforward'   : 'Ďalej',
\t\t\t'cmdgetfile'   : 'Vybrať súbory',
\t\t\t'cmdhelp'      : 'O tomto softvéri',
\t\t\t'cmdhome'      : 'Domov',
\t\t\t'cmdinfo'      : 'Info',
\t\t\t'cmdmkdir'     : 'Nový priečinok',
\t\t\t'cmdmkdirin'   : 'Do novej zložky', // from v2.1.7 added 19.2.2016
\t\t\t'cmdmkfile'    : 'Nový súbor',
\t\t\t'cmdopen'      : 'Otvoriť',
\t\t\t'cmdpaste'     : 'Vložiť',
\t\t\t'cmdquicklook' : 'Náhľad',
\t\t\t'cmdreload'    : 'Obnoviť',
\t\t\t'cmdrename'    : 'Premenovať',
\t\t\t'cmdrm'        : 'Vymazať',
\t\t\t'cmdtrash'     : 'Do koša', //from v2.1.24 added 29.4.2017
\t\t\t'cmdrestore'   : 'Obnoviť', //from v2.1.24 added 3.5.2017
\t\t\t'cmdsearch'    : 'Nájsť súbory',
\t\t\t'cmdup'        : 'Prejsť do nadradeného priečinka',
\t\t\t'cmdupload'    : 'Nahrať súbory',
\t\t\t'cmdview'      : 'Pozrieť',
\t\t\t'cmdresize'    : 'Zmeniť veľkosť obrázku',
\t\t\t'cmdsort'      : 'Zoradiť',
\t\t\t'cmdnetmount'  : 'Pripojiť sieťové médium', // added 18.04.2012
\t\t\t'cmdnetunmount': 'Odpojiť', // from v2.1 added 30.04.2012
\t\t\t'cmdplaces'    : 'Do umiestnení', // added 28.12.2014
\t\t\t'cmdchmod'     : 'Zmeniť režim', // from v2.1 added 20.6.2015
\t\t\t'cmdopendir'   : 'Otvoriť priečinok', // from v2.1 added 13.1.2016
\t\t\t'cmdcolwidth'  : 'Resetovať šírku stĺpca', // from v2.1.13 added 12.06.2016
\t\t\t'cmdfullscreen': 'Celá obrazovka', // from v2.1.15 added 03.08.2016
\t\t\t'cmdmove'      : 'Posúvať', // from v2.1.15 added 21.08.2016
\t\t\t'cmdempty'     : 'Vyprázdniť priečinok', // from v2.1.25 added 22.06.2017
\t\t\t'cmdundo'      : 'Krok späť', // from v2.1.27 added 31.07.2017
\t\t\t'cmdredo'      : 'Vykonať znova', // from v2.1.27 added 31.07.2017
\t\t\t'cmdpreference': 'Preferencie', // from v2.1.27 added 03.08.2017
\t\t\t'cmdselectall' : 'Vybrať všetko', // from v2.1.28 added 15.08.2017
\t\t\t'cmdselectnone': 'Nič nevyberať', // from v2.1.28 added 15.08.2017
\t\t\t'cmdselectinvert': 'Invertovať výber', // from v2.1.28 added 15.08.2017
\t\t\t'cmdopennew'   : 'Otvoriť v novom okne', // from v2.1.38 added 3.4.2018
\t\t\t'cmdhide'      : 'Skryť (Predvoľba)', // from v2.1.41 added 24.7.2018

\t\t\t/*********************************** buttons ***********************************/
\t\t\t'btnClose'  : 'Zavrieť',
\t\t\t'btnSave'   : 'Uložiť',
\t\t\t'btnRm'     : 'Vymazať',
\t\t\t'btnApply'  : 'Použiť',
\t\t\t'btnCancel' : 'Zrušiť',
\t\t\t'btnNo'     : 'Nie',
\t\t\t'btnYes'    : 'Áno',
\t\t\t'btnMount'  : 'Pripojiť',  // added 18.04.2012
\t\t\t'btnApprove': 'Ísť na \$1 & schváliť', // from v2.1 added 26.04.2012
\t\t\t'btnUnmount': 'Odpojiť', // from v2.1 added 30.04.2012
\t\t\t'btnConv'   : 'Previesť', // from v2.1 added 08.04.2014
\t\t\t'btnCwd'    : 'Tu',      // from v2.1 added 22.5.2015
\t\t\t'btnVolume' : 'Médium',    // from v2.1 added 22.5.2015
\t\t\t'btnAll'    : 'Všetko',       // from v2.1 added 22.5.2015
\t\t\t'btnMime'   : 'MIME typ', // from v2.1 added 22.5.2015
\t\t\t'btnFileName':'Názov súboru',  // from v2.1 added 22.5.2015
\t\t\t'btnSaveClose': 'Uložiť & zavrieť', // from v2.1 added 12.6.2015
\t\t\t'btnBackup' : 'Zálohovať', // fromv2.1 added 28.11.2015
\t\t\t'btnRename'    : 'Premenovať',      // from v2.1.24 added 6.4.2017
\t\t\t'btnRenameAll' : 'Premenovať všetko', // from v2.1.24 added 6.4.2017
\t\t\t'btnPrevious' : 'Predchádzajúce (\$1/\$2)', // from v2.1.24 added 11.5.2017
\t\t\t'btnNext'     : 'Ďalšie (\$1/\$2)', // from v2.1.24 added 11.5.2017
\t\t\t'btnSaveAs'   : 'Uložiť ako', // from v2.1.25 added 24.5.2017

\t\t\t/******************************** notifications ********************************/
\t\t\t'ntfopen'     : 'Otváranie priečinka',
\t\t\t'ntffile'     : 'Otváranie súboru',
\t\t\t'ntfreload'   : 'Znovu-načítanie obsahu priečinka',
\t\t\t'ntfmkdir'    : 'Vytváranie priečinka',
\t\t\t'ntfmkfile'   : 'Vytváranie súborov',
\t\t\t'ntfrm'       : 'Vymazanie položiek',
\t\t\t'ntfcopy'     : 'Kopírovanie položiek',
\t\t\t'ntfmove'     : 'Premiestnenie položiek',
\t\t\t'ntfprepare'  : 'Kontrola existujúcich položiek',
\t\t\t'ntfrename'   : 'Premenovanie súborov',
\t\t\t'ntfupload'   : 'Nahrávanie súborov',
\t\t\t'ntfdownload' : 'Sťahovanie súborov',
\t\t\t'ntfsave'     : 'Uloženie súborov',
\t\t\t'ntfarchive'  : 'Vytváranie archívu',
\t\t\t'ntfextract'  : 'Extrahovanie súborov z archívu',
\t\t\t'ntfsearch'   : 'Vyhľadávanie súborov',
\t\t\t'ntfresize'   : 'Zmena veľkosti obrázkov',
\t\t\t'ntfsmth'     : 'Počkajte prosím...',
\t\t\t'ntfloadimg'  : 'Načítavanie obrázka',
\t\t\t'ntfnetmount' : 'Pripájanie sieťového média', // added 18.04.2012
\t\t\t'ntfnetunmount': 'Odpájanie sieťového média', // from v2.1 added 30.04.2012
\t\t\t'ntfdim'      : 'Získanie rozmeru obrázka', // added 20.05.2013
\t\t\t'ntfreaddir'  : 'Čítajú sa informácie o priečinku', // from v2.1 added 01.07.2013
\t\t\t'ntfurl'      : 'Získanie adresy URL odkazu', // from v2.1 added 11.03.2014
\t\t\t'ntfchmod'    : 'Zmena súboru', // from v2.1 added 20.6.2015
\t\t\t'ntfpreupload': 'Overenie názvu nahravaného súboru', // from v2.1 added 31.11.2015
\t\t\t'ntfzipdl'    : 'Vytvorenie súboru na stiahnutie', // from v2.1.7 added 23.1.2016
\t\t\t'ntfparents'  : 'Získanie informácií o ceste', // from v2.1.17 added 2.11.2016
\t\t\t'ntfchunkmerge': 'Spracovanie nahraného súboru', // from v2.1.17 added 2.11.2016
\t\t\t'ntftrash'    : 'Vhadzovanie do koša', // from v2.1.24 added 2.5.2017
\t\t\t'ntfrestore'  : 'Vykonávanie obnovy z koša', // from v2.1.24 added 3.5.2017
\t\t\t'ntfchkdir'   : 'Kontrola cieľového priečinka', // from v2.1.24 added 3.5.2017
\t\t\t'ntfundo'     : 'Zrušiť predchádzajúcu operáciu', // from v2.1.27 added 31.07.2017
\t\t\t'ntfredo'     : 'Obnovenie predchádzajúceho zrušenia', // from v2.1.27 added 31.07.2017
\t\t\t'ntfchkcontent' : 'Kontrola obsahu', // from v2.1.41 added 3.8.2018

\t\t\t/*********************************** volumes *********************************/
\t\t\t'volume_Trash' : 'Kôš', //from v2.1.24 added 29.4.2017

\t\t\t/************************************ dates **********************************/
\t\t\t'dateUnknown' : 'neznámy',
\t\t\t'Today'       : 'Dnes',
\t\t\t'Yesterday'   : 'Včera',
\t\t\t'msJan'       : 'Jan',
\t\t\t'msFeb'       : 'Feb',
\t\t\t'msMar'       : 'Mar',
\t\t\t'msApr'       : 'Apr',
\t\t\t'msMay'       : 'Maj',
\t\t\t'msJun'       : 'Jun',
\t\t\t'msJul'       : 'Júl',
\t\t\t'msAug'       : 'Aug',
\t\t\t'msSep'       : 'Sep',
\t\t\t'msOct'       : 'Okt',
\t\t\t'msNov'       : 'Nov',
\t\t\t'msDec'       : 'Dec',
\t\t\t'January'     : 'Január',
\t\t\t'February'    : 'Február',
\t\t\t'March'       : 'Marec',
\t\t\t'April'       : 'Apríl',
\t\t\t'May'         : 'Máj',
\t\t\t'June'        : 'Jún',
\t\t\t'July'        : 'Júl',
\t\t\t'August'      : 'August',
\t\t\t'September'   : 'September',
\t\t\t'October'     : 'Október',
\t\t\t'November'    : 'November',
\t\t\t'December'    : 'December',
\t\t\t'Sunday'      : 'Nedeľa',
\t\t\t'Monday'      : 'Pondelok',
\t\t\t'Tuesday'     : 'Utorok',
\t\t\t'Wednesday'   : 'Streda',
\t\t\t'Thursday'    : 'Štvrtok',
\t\t\t'Friday'      : 'Piatok',
\t\t\t'Saturday'    : 'Sobota',
\t\t\t'Sun'         : 'Ned',
\t\t\t'Mon'         : 'Pon',
\t\t\t'Tue'         : 'Ut',
\t\t\t'Wed'         : 'Str',
\t\t\t'Thu'         : 'Štv',
\t\t\t'Fri'         : 'Pia',
\t\t\t'Sat'         : 'Sob',

\t\t\t/******************************** sort variants ********************************/
\t\t\t'sortname'          : 'podľa názvu',
\t\t\t'sortkind'          : 'podľa druhu',
\t\t\t'sortsize'          : 'podľa veľkosti',
\t\t\t'sortdate'          : 'podľa dátumu',
\t\t\t'sortFoldersFirst'  : 'Najskôr priečinky',
\t\t\t'sortperm'          : 'podľa povolenia', // from v2.1.13 added 13.06.2016
\t\t\t'sortmode'          : 'podľa módu',       // from v2.1.13 added 13.06.2016
\t\t\t'sortowner'         : 'podľa majiteľa',      // from v2.1.13 added 13.06.2016
\t\t\t'sortgroup'         : 'podľa skupiny',      // from v2.1.13 added 13.06.2016
\t\t\t'sortAlsoTreeview'  : 'Tiež stromové zobrazenie',  // from v2.1.15 added 01.08.2016

\t\t\t/********************************** new items **********************************/
\t\t\t'untitled file.txt' : 'Nový súbor.txt', // added 10.11.2015
\t\t\t'untitled folder'   : 'Nový priečinok',   // added 10.11.2015
\t\t\t'Archive'           : 'Nový archív',  // from v2.1 added 10.11.2015
\t\t\t'untitled file'     : 'Nový súbor.\$1',  // from v2.1.41 added 6.8.2018
\t\t\t'extentionfile'     : '\$1 súbor',    // from v2.1.41 added 6.8.2018
\t\t\t'extentiontype'     : '\$1: \$2',      // from v2.1.43 added 17.10.2018

\t\t\t/********************************** messages **********************************/
\t\t\t'confirmReq'      : 'Potrebné potvrdenie',
\t\t\t'confirmRm'       : 'Určite chcete vymazať súbory?<br/>Nie je to možné vrátiť späť!',
\t\t\t'confirmRepl'     : 'Nahradiť starý súbor za nový? (Ak obsahuje priečinky, bude zlúčené. Ak chcete zálohovať a nahradiť, vyberte možnosť Zálohovať.)',
\t\t\t'confirmRest'     : 'Nahradiť existujúcu položku s položkou v koši?', // fromv2.1.24 added 5.5.2017
\t\t\t'confirmConvUTF8' : 'Nie je v UTF-8<br/>Previesť na UTF-8?<br/>Obsah bude v UTF-8 po uložení konverzie.', // from v2.1 added 08.04.2014
\t\t\t'confirmNonUTF8'  : 'Kódovanie tohto súboru nemohlo byť detekované. Pre úpravu dočasne potrebujete previesť na UTF-8 .<br/>Prosím, vyberte kódovanie znakov tohto súboru.', // from v2.1.19 added 28.11.2016
\t\t\t'confirmNotSave'  : 'Bol upravený.<br/>Ak zmeny neuložíte, stratíte vykonanú prácu.', // from v2.1 added 15.7.2015
\t\t\t'confirmTrash'    : 'Naozaj chcete presunúť položky do koša?', //from v2.1.24 added 29.4.2017
\t\t\t'confirmMove'     : 'Naozaj chcete presunúť položky do \"\$1\"?', //from v2.1.50 added 27.7.2019
\t\t\t'apllyAll'        : 'Použiť na všetky',
\t\t\t'name'            : 'Názov',
\t\t\t'size'            : 'Veľkosť',
\t\t\t'perms'           : 'Povolenia',
\t\t\t'modify'          : 'Zmenené',
\t\t\t'kind'            : 'Druh',
\t\t\t'read'            : 'čítať',
\t\t\t'write'           : 'zapisovať',
\t\t\t'noaccess'        : 'bez prístupu',
\t\t\t'and'             : 'a',
\t\t\t'unknown'         : 'neznámy',
\t\t\t'selectall'       : 'Vybrať všetky položky',
\t\t\t'selectfiles'     : 'Vybrať položku(y)',
\t\t\t'selectffile'     : 'Vybrať prvú položku',
\t\t\t'selectlfile'     : 'Vybrať poslednú položku',
\t\t\t'viewlist'        : 'Zoznam',
\t\t\t'viewicons'       : 'Ikony',
\t\t\t'viewSmall'       : 'Malé ikony', // from v2.1.39 added 22.5.2018
\t\t\t'viewMedium'      : 'Stredné ikony', // from v2.1.39 added 22.5.2018
\t\t\t'viewLarge'       : 'Veľké ikony', // from v2.1.39 added 22.5.2018
\t\t\t'viewExtraLarge'  : 'Extra veľké ikony', // from v2.1.39 added 22.5.2018
\t\t\t'places'          : 'Miesta',
\t\t\t'calc'            : 'Prepočítavanie',
\t\t\t'path'            : 'Cesta',
\t\t\t'aliasfor'        : 'Alias pre',
\t\t\t'locked'          : 'Uzamknuté',
\t\t\t'dim'             : 'Rozmery',
\t\t\t'files'           : 'Súbory',
\t\t\t'folders'         : 'Priečinky',
\t\t\t'items'           : 'Položky',
\t\t\t'yes'             : 'áno',
\t\t\t'no'              : 'nie',
\t\t\t'link'            : 'Odkaz',
\t\t\t'searcresult'     : 'Výsledky hľadania',
\t\t\t'selected'        : 'zvolené položky',
\t\t\t'about'           : 'O aplikácii',
\t\t\t'shortcuts'       : 'Skratky',
\t\t\t'help'            : 'Pomoc',
\t\t\t'webfm'           : 'Webový správca súborov',
\t\t\t'ver'             : 'Verzia',
\t\t\t'protocolver'     : 'verzia protokolu',
\t\t\t'homepage'        : 'Domovská stránka',
\t\t\t'docs'            : 'Dokumentácia',
\t\t\t'github'          : 'Pozri nás na Githube',
\t\t\t'twitter'         : 'Nasleduj nás na Twitteri',
\t\t\t'facebook'        : 'Pripoj sa k nám na Facebooku',
\t\t\t'team'            : 'Tím',
\t\t\t'chiefdev'        : 'Hlavný vývojár',
\t\t\t'developer'       : 'Vývojár',
\t\t\t'contributor'     : 'Prispievateľ',
\t\t\t'maintainer'      : 'Správca',
\t\t\t'translator'      : 'Prekladateľ',
\t\t\t'icons'           : 'Ikony',
\t\t\t'dontforget'      : 'a nezabudnite si plavky',
\t\t\t'shortcutsof'     : 'Skratky nie sú povolené',
\t\t\t'dropFiles'       : 'Sem pretiahnite súbory',
\t\t\t'or'              : 'alebo',
\t\t\t'selectForUpload' : 'Vyberte súbory',
\t\t\t'moveFiles'       : 'Premiestniť súbory',
\t\t\t'copyFiles'       : 'Kopírovať súbory',
\t\t\t'restoreFiles'    : 'Obnoviť položky', // from v2.1.24 added 5.5.2017
\t\t\t'rmFromPlaces'    : 'Odstrániť z umiestnení',
\t\t\t'aspectRatio'     : 'Pomer zobrazenia',
\t\t\t'scale'           : 'Mierka',
\t\t\t'width'           : 'Šírka',
\t\t\t'height'          : 'Výška',
\t\t\t'resize'          : 'Zmeniť veľkosť',
\t\t\t'crop'            : 'Orezať',
\t\t\t'rotate'          : 'Otočiť',
\t\t\t'rotate-cw'       : 'Otočiť o 90 stupňov (v smere h.r.)',
\t\t\t'rotate-ccw'      : 'Otočiť o 90 stupňov (proti smeru)',
\t\t\t'degree'          : '°',
\t\t\t'netMountDialogTitle' : 'Pripojiť sieťové médium', // added 18.04.2012
\t\t\t'protocol'            : 'Protokol', // added 18.04.2012
\t\t\t'host'                : 'Hosť', // added 18.04.2012
\t\t\t'port'                : 'Port', // added 18.04.2012
\t\t\t'user'                : 'Užívateľ', // added 18.04.2012
\t\t\t'pass'                : 'Heslo', // added 18.04.2012
\t\t\t'confirmUnmount'      : 'Naozaj chcete odpojiť \$1?',  // from v2.1 added 30.04.2012
\t\t\t'dropFilesBrowser': 'Premiestnite alebo presuňte súbory z prehliadača', // from v2.1 added 30.05.2012
\t\t\t'dropPasteFiles'  : 'Tu premiestnite alebo presuňte súbory a adresy URL', // from v2.1 added 07.04.2014
\t\t\t'encoding'        : 'Kódovanie', // from v2.1 added 19.12.2014
\t\t\t'locale'          : 'Lokalizácia',   // from v2.1 added 19.12.2014
\t\t\t'searchTarget'    : 'Cieľ: \$1',                // from v2.1 added 22.5.2015
\t\t\t'searchMime'      : 'Vyhľadávanie podľa vstupného MIME typu', // from v2.1 added 22.5.2015
\t\t\t'owner'           : 'Majiteľ', // from v2.1 added 20.6.2015
\t\t\t'group'           : 'Skupina', // from v2.1 added 20.6.2015
\t\t\t'other'           : 'Ostatné', // from v2.1 added 20.6.2015
\t\t\t'execute'         : 'Spustiť', // from v2.1 added 20.6.2015
\t\t\t'perm'            : 'Povolenie', // from v2.1 added 20.6.2015
\t\t\t'mode'            : 'Režim', // from v2.1 added 20.6.2015
\t\t\t'emptyFolder'     : 'Priečinok je prázdny', // from v2.1.6 added 30.12.2015
\t\t\t'emptyFolderDrop' : 'Priečinok je prázdny\\\\A Premiestnite alebo presuňte položky', // from v2.1.6 added 30.12.2015
\t\t\t'emptyFolderLTap' : 'Priečinok je prázdny\\\\A Dlhým kliknutím pridáte položky', // from v2.1.6 added 30.12.2015
\t\t\t'quality'         : 'Kvalita', // from v2.1.6 added 5.1.2016
\t\t\t'autoSync'        : 'Automatická synchronizácia',  // from v2.1.6 added 10.1.2016
\t\t\t'moveUp'          : 'Posunúť nahor',  // from v2.1.6 added 18.1.2016
\t\t\t'getLink'         : 'Získať URL odkaz', // from v2.1.7 added 9.2.2016
\t\t\t'selectedItems'   : 'Vybraté položky (\$1)', // from v2.1.7 added 2.19.2016
\t\t\t'folderId'        : 'ID priečinka', // from v2.1.10 added 3.25.2016
\t\t\t'offlineAccess'   : 'Povoliť prístup v offline režime', // from v2.1.10 added 3.25.2016
\t\t\t'reAuth'          : 'Znova overiť', // from v2.1.10 added 3.25.2016
\t\t\t'nowLoading'      : 'Práve načítava...', // from v2.1.12 added 4.26.2016
\t\t\t'openMulti'       : 'Otvorenie viacerých súborov', // from v2.1.12 added 5.14.2016
\t\t\t'openMultiConfirm': 'Pokúšate sa otvoriť súbor \$1. Naozaj ho chcete otvoriť v prehliadači?', // from v2.1.12 added 5.14.2016
\t\t\t'emptySearch'     : 'Výsledky vyhľadávania sú prázdne v hľadanom cieli.', // from v2.1.12 added 5.16.2016
\t\t\t'editingFile'     : 'Je to úprava súboru.', // from v2.1.13 added 6.3.2016
\t\t\t'hasSelected'     : 'Vybrali ste \$1 položky.', // from v2.1.13 added 6.3.2016
\t\t\t'hasClipboard'    : 'Máte \$1 položky v schránke.', // from v2.1.13 added 6.3.2016
\t\t\t'incSearchOnly'   : 'Prírastkové hľadanie je iba z aktuálneho zobrazenia.', // from v2.1.13 added 6.30.2016
\t\t\t'reinstate'       : 'Obnovovanie', // from v2.1.15 added 3.8.2016
\t\t\t'complete'        : '\$1: kompletné', // from v2.1.15 added 21.8.2016
\t\t\t'contextmenu'     : 'Kontextové menu', // from v2.1.15 added 9.9.2016
\t\t\t'pageTurning'     : 'Otáčanie stránky', // from v2.1.15 added 10.9.2016
\t\t\t'volumeRoots'     : 'Korene média', // from v2.1.16 added 16.9.2016
\t\t\t'reset'           : 'Resetovať', // from v2.1.16 added 1.10.2016
\t\t\t'bgcolor'         : 'Farba pozadia', // from v2.1.16 added 1.10.2016
\t\t\t'colorPicker'     : 'Výber farby', // from v2.1.16 added 1.10.2016
\t\t\t'8pxgrid'         : '8px mriežka', // from v2.1.16 added 4.10.2016
\t\t\t'enabled'         : 'Povolené', // from v2.1.16 added 4.10.2016
\t\t\t'disabled'        : 'Zakázané', // from v2.1.16 added 4.10.2016
\t\t\t'emptyIncSearch'  : 'Výsledky vyhľadávania sú prázdne v aktuálnom zobrazení. Stlačením tlačidla [Enter] rozšírite vyhľadávanie cieľa.', // from v2.1.16 added 5.10.2016
\t\t\t'emptyLetSearch'  : 'Výsledky vyhľadávania prvého listu sú v aktuálnom zobrazení prázdne.', // from v2.1.23 added 24.3.2017
\t\t\t'textLabel'       : 'Nápis textu', // from v2.1.17 added 13.10.2016
\t\t\t'minsLeft'        : '\$1 minút ostáva', // from v2.1.17 added 13.11.2016
\t\t\t'openAsEncoding'  : 'Otvoriť s vybratým kódovaním', // from v2.1.19 added 2.12.2016
\t\t\t'saveAsEncoding'  : 'Uložiť s vybratým kódovaním', // from v2.1.19 added 2.12.2016
\t\t\t'selectFolder'    : 'Vyberte priečinok', // from v2.1.20 added 13.12.2016
\t\t\t'firstLetterSearch': 'Hľadanie prvého listu', // from v2.1.23 added 24.3.2017
\t\t\t'presets'         : 'Presety', // from v2.1.25 added 26.5.2017
\t\t\t'tooManyToTrash'  : 'Je to príliš veľa položiek, takže sa nemôže dostať do koša.', // from v2.1.25 added 9.6.2017
\t\t\t'TextArea'        : 'Textarea', // from v2.1.25 added 14.6.2017
\t\t\t'folderToEmpty'   : 'Vyprázdniť priečinok \"\$1\".', // from v2.1.25 added 22.6.2017
\t\t\t'filderIsEmpty'   : 'V priečinku \"\$1\" nie sú žiadne položky.', // from v2.1.25 added 22.6.2017
\t\t\t'preference'      : 'Preferencie', // from v2.1.26 added 28.6.2017
\t\t\t'language'        : 'Nastavenie jazyka', // from v2.1.26 added 28.6.2017
\t\t\t'clearBrowserData': 'Inicializujte nastavenia uložené v tomto prehliadači', // from v2.1.26 added 28.6.2017
\t\t\t'toolbarPref'     : 'Nastavenie panela s nástrojmi', // from v2.1.27 added 2.8.2017
\t\t\t'charsLeft'       : '...\$1 znakov ostáva.',  // from v2.1.29 added 30.8.2017
\t\t\t'linesLeft'       : '...\$1 riadkov ostáva.',  // from v2.1.52 added 16.1.2020
\t\t\t'sum'             : 'Súčet', // from v2.1.29 added 28.9.2017
\t\t\t'roughFileSize'   : 'Hrubá veľkosť súboru', // from v2.1.30 added 2.11.2017
\t\t\t'autoFocusDialog' : 'Zameranie na prvok dialógu s mouseover',  // from v2.1.30 added 2.11.2017
\t\t\t'select'          : 'Vybrať', // from v2.1.30 added 23.11.2017
\t\t\t'selectAction'    : 'Akcia pri vybranom súbore', // from v2.1.30 added 23.11.2017
\t\t\t'useStoredEditor' : 'Otvoriť pomocou naposledy použitého editora', // from v2.1.30 added 23.11.2017
\t\t\t'selectinvert'    : 'Invertovať výber položiek', // from v2.1.30 added 25.11.2017
\t\t\t'renameMultiple'  : 'Naozaj chcete premenovať \$1 vybraných položiek, ako napríklad \$2<br/>Nie je to možné vrátiť späť!', // from v2.1.31 added 4.12.2017
\t\t\t'batchRename'     : 'Batch premenovanie', // from v2.1.31 added 8.12.2017
\t\t\t'plusNumber'      : '+ Číslo', // from v2.1.31 added 8.12.2017
\t\t\t'asPrefix'        : 'Pridať predponu', // from v2.1.31 added 8.12.2017
\t\t\t'asSuffix'        : 'Pridať príponu', // from v2.1.31 added 8.12.2017
\t\t\t'changeExtention' : 'Zmeniť príponu', // from v2.1.31 added 8.12.2017
\t\t\t'columnPref'      : 'Nastavenia stĺpcov (zoznamové zobrazenie)', // from v2.1.32 added 6.2.2018
\t\t\t'reflectOnImmediate' : 'Všetky zmeny sa okamžite premietnu do archívu.', // from v2.1.33 added 2.3.2018
\t\t\t'reflectOnUnmount'   : 'Akékoľvek zmeny sa neodzrkadľujú, kým sa toto médium neodinštaluje.', // from v2.1.33 added 2.3.2018
\t\t\t'unmountChildren' : 'Nasledujúce médium(a) pripojené v tomto médiu je tiež odpojené. Určite ho odpojiť?', // from v2.1.33 added 5.3.2018
\t\t\t'selectionInfo'   : 'Informácie o výbere', // from v2.1.33 added 7.3.2018
\t\t\t'hashChecker'     : 'Algoritmy na zobrazenie hashu súborov', // from v2.1.33 added 10.3.2018
\t\t\t'infoItems'       : 'Informačné položky (panel s informáciami o výbere)', // from v2.1.38 added 28.3.2018
\t\t\t'pressAgainToExit': 'Opätovným stlačením opustíte.', // from v2.1.38 added 1.4.2018
\t\t\t'toolbar'         : 'Panel nástrojov', // from v2.1.38 added 4.4.2018
\t\t\t'workspace'       : 'Pracovný priestor', // from v2.1.38 added 4.4.2018
\t\t\t'dialog'          : 'Dialóg', // from v2.1.38 added 4.4.2018
\t\t\t'all'             : 'Všetko', // from v2.1.38 added 4.4.2018
\t\t\t'iconSize'        : 'Veľkosť ikony (zobrazenie ikon)', // from v2.1.39 added 7.5.2018
\t\t\t'editorMaximized' : 'Otvorte maximalizované okno editora', // from v2.1.40 added 30.6.2018
\t\t\t'editorConvNoApi' : 'Pretože konverzia podľa rozhrania API momentálne nie je k dispozícii, skonvertujte na webovej stránke.', //from v2.1.40 added 8.7.2018
\t\t\t'editorConvNeedUpload' : 'Po konverzii musíte nahrať skonvertovaný súbor pomocou URL položky alebo stiahnutý súbor na uloženie skonvertovaného súboru.', //from v2.1.40 added 8.7.2018
\t\t\t'convertOn'       : 'Konvertovať na stránke \$1', // from v2.1.40 added 10.7.2018
\t\t\t'integrations'    : 'Integrácie', // from v2.1.40 added 11.7.2018
\t\t\t'integrationWith' : 'Tento elFinder má integrované nasledujúce externé služby. Pred použitím skontrolujte podmienky používania, zásady ochrany osobných údajov atď.', // from v2.1.40 added 11.7.2018
\t\t\t'showHidden'      : 'Zobraziť skryté položky', // from v2.1.41 added 24.7.2018
\t\t\t'hideHidden'      : 'Skryť skryté položky', // from v2.1.41 added 24.7.2018
\t\t\t'toggleHidden'    : 'Zobraziť/skryť skryté položky', // from v2.1.41 added 24.7.2018
\t\t\t'makefileTypes'   : 'Typy súborov, ktoré sa majú povoliť pomocou \"Nový súbor\"', // from v2.1.41 added 7.8.2018
\t\t\t'typeOfTextfile'  : 'Typ textového súboru', // from v2.1.41 added 7.8.2018
\t\t\t'add'             : 'Pridať', // from v2.1.41 added 7.8.2018
\t\t\t'theme'           : 'Téma', // from v2.1.43 added 19.10.2018
\t\t\t'default'         : 'Predvolená', // from v2.1.43 added 19.10.2018
\t\t\t'description'     : 'Popis', // from v2.1.43 added 19.10.2018
\t\t\t'website'         : 'Stránka', // from v2.1.43 added 19.10.2018
\t\t\t'author'          : 'Autor', // from v2.1.43 added 19.10.2018
\t\t\t'email'           : 'E-mail', // from v2.1.43 added 19.10.2018
\t\t\t'license'         : 'Licencia', // from v2.1.43 added 19.10.2018
\t\t\t'exportToSave'    : 'Túto položku nemožno uložiť. Ak chcete zabrániť strate úprav, musíte ju exportovať do počítača.', // from v2.1.44 added 1.12.2018
\t\t\t'dblclickToSelect': 'Dvakrát kliknite na súbor a vyberte ho.', // from v2.1.47 added 22.1.2019
\t\t\t'useFullscreen'   : 'Použiť režim celej obrazovky', // from v2.1.47 added 19.2.2019

\t\t\t/********************************** mimetypes **********************************/
\t\t\t'kindUnknown'     : 'Neznámy',
\t\t\t'kindRoot'        : 'Koreň média', // from v2.1.16 added 16.10.2016
\t\t\t'kindFolder'      : 'Priečinok',
\t\t\t'kindSelects'     : 'Výbery', // from v2.1.29 added 29.8.2017
\t\t\t'kindAlias'       : 'Alias',
\t\t\t'kindAliasBroken' : 'Porušený alias',
\t\t\t// applications
\t\t\t'kindApp'         : 'Aplikácia',
\t\t\t'kindPostscript'  : 'Postscript dokument',
\t\t\t'kindMsOffice'    : 'Microsoft Office dokument',
\t\t\t'kindMsWord'      : 'Microsoft Word dokument',
\t\t\t'kindMsExcel'     : 'Microsoft Excel dokument',
\t\t\t'kindMsPP'        : 'Microsoft Powerpoint prezentácia',
\t\t\t'kindOO'          : 'Open Office dokument',
\t\t\t'kindAppFlash'    : 'Flashová aplikácia',
\t\t\t'kindPDF'         : 'Portable Document Format (PDF)',
\t\t\t'kindTorrent'     : 'Bittorrent súbor',
\t\t\t'kind7z'          : '7z archív',
\t\t\t'kindTAR'         : 'TAR archív',
\t\t\t'kindGZIP'        : 'GZIP archív',
\t\t\t'kindBZIP'        : 'BZIP archív',
\t\t\t'kindXZ'          : 'XZ archív',
\t\t\t'kindZIP'         : 'ZIP archív',
\t\t\t'kindRAR'         : 'RAR archív',
\t\t\t'kindJAR'         : 'Java JAR súbor',
\t\t\t'kindTTF'         : 'True Type font',
\t\t\t'kindOTF'         : 'Open Type font',
\t\t\t'kindRPM'         : 'RPM balík',
\t\t\t// texts
\t\t\t'kindText'        : 'Textový document',
\t\t\t'kindTextPlain'   : 'Obyčajný text',
\t\t\t'kindPHP'         : 'PHP zdrojový kód',
\t\t\t'kindCSS'         : 'Cascading style sheet (CSS)',
\t\t\t'kindHTML'        : 'HTML dokument',
\t\t\t'kindJS'          : 'Javascript zdrojový kód',
\t\t\t'kindRTF'         : 'Rich Text Format',
\t\t\t'kindC'           : 'C zdrojový kód',
\t\t\t'kindCHeader'     : 'C header zdrojový kód',
\t\t\t'kindCPP'         : 'C++ zdrojový kód',
\t\t\t'kindCPPHeader'   : 'C++ header zdrojový kód',
\t\t\t'kindShell'       : 'Unix shell skript',
\t\t\t'kindPython'      : 'Python zdrojový kód',
\t\t\t'kindJava'        : 'Java zdrojový kód',
\t\t\t'kindRuby'        : 'Ruby zdrojový kód',
\t\t\t'kindPerl'        : 'Perl zdrojový kód',
\t\t\t'kindSQL'         : 'SQL zdrojový kód',
\t\t\t'kindXML'         : 'XML dokument',
\t\t\t'kindAWK'         : 'AWK zdrojový kód',
\t\t\t'kindCSV'         : 'Čiarkou oddeľované hodnoty',
\t\t\t'kindDOCBOOK'     : 'Docbook XML dokument',
\t\t\t'kindMarkdown'    : 'Markdown text', // added 20.7.2015
\t\t\t// images
\t\t\t'kindImage'       : 'Obrázok',
\t\t\t'kindBMP'         : 'BMP obrázok',
\t\t\t'kindJPEG'        : 'JPEG obrázok',
\t\t\t'kindGIF'         : 'GIF obrázok',
\t\t\t'kindPNG'         : 'PNG obrázok',
\t\t\t'kindTIFF'        : 'TIFF obrázok',
\t\t\t'kindTGA'         : 'TGA obrázok',
\t\t\t'kindPSD'         : 'Adobe Photoshop obrázok',
\t\t\t'kindXBITMAP'     : 'X bitmap obrázok',
\t\t\t'kindPXM'         : 'Pixelmator obrázok',
\t\t\t// media
\t\t\t'kindAudio'       : 'Zvukový súbor',
\t\t\t'kindAudioMPEG'   : 'MPEG zvuk',
\t\t\t'kindAudioMPEG4'  : 'MPEG-4 zvuk',
\t\t\t'kindAudioMIDI'   : 'MIDI zvuk',
\t\t\t'kindAudioOGG'    : 'Ogg Vorbis zvuk',
\t\t\t'kindAudioWAV'    : 'WAV zvuk',
\t\t\t'AudioPlaylist'   : 'MP3 playlist',
\t\t\t'kindVideo'       : 'Video súbor',
\t\t\t'kindVideoDV'     : 'DV video',
\t\t\t'kindVideoMPEG'   : 'MPEG video',
\t\t\t'kindVideoMPEG4'  : 'MPEG-4 video',
\t\t\t'kindVideoAVI'    : 'AVI video',
\t\t\t'kindVideoMOV'    : 'Quick Time video',
\t\t\t'kindVideoWM'     : 'Windows Media video',
\t\t\t'kindVideoFlash'  : 'Flash video',
\t\t\t'kindVideoMKV'    : 'Matroska video',
\t\t\t'kindVideoOGG'    : 'Ogg video'
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
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.sk.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.sk.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.sk.js");
    }
}
