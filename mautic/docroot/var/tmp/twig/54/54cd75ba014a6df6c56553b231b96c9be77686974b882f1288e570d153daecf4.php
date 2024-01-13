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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.cs.js */
class __TwigTemplate_5ed091894b7ea5ef94557f6a5c127fa57abf263018fd7b9d86497189f46796dd extends Template
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
 * Czech translation
 * @author RobiNN <kelcakrobo@gmail.com>
 * @author Jay Gridley <gridley.jay@hotmail.com>
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
\telFinder.prototype.i18.cs = {
\t\ttranslator : 'RobiNN &lt;kelcakrobo@gmail.com&gt;, Jay Gridley &lt;gridley.jay@hotmail.com&gt;',
\t\tlanguage   : 'Čeština',
\t\tdirection  : 'ltr',
\t\tdateFormat : 'd. m. Y H:i', // will show like: 15. 03. 2020 16:45
\t\tfancyDateFormat : '\$1 H:i', // will show like: Dnes 16:45
\t\tnonameDateFormat : 'ymd-His', // noname upload will show like: 200315-164551
\t\tmessages   : {

\t\t\t/********************************** errors **********************************/
\t\t\t'error'                : 'Chyba',
\t\t\t'errUnknown'           : 'Neznámá chyba.',
\t\t\t'errUnknownCmd'        : 'Neznámý příkaz.',
\t\t\t'errJqui'              : 'Nedostačující konfigurace jQuery UI. Musí být zahrnuty komponenty Selectable, Draggable a Droppable.',
\t\t\t'errNode'              : 'elFinder vyžaduje vytvořený DOM Elementu.',
\t\t\t'errURL'               : 'Chybná konfigurace elFinderu! Není nastavena hodnota URL.',
\t\t\t'errAccess'            : 'Přístup zamítnut.',
\t\t\t'errConnect'           : 'Nepodařilo se připojit k backendu.',
\t\t\t'errAbort'             : 'Připojení zrušeno.',
\t\t\t'errTimeout'           : 'Vypšel limit pro připojení.',
\t\t\t'errNotFound'          : 'Backend nenalezen.',
\t\t\t'errResponse'          : 'Nesprávná odpověď backendu.',
\t\t\t'errConf'              : 'Nepsrávná konfigurace backendu.',
\t\t\t'errJSON'              : 'PHP modul JSON není nainstalován.',
\t\t\t'errNoVolumes'         : 'Není dostupný čitelný oddíl.',
\t\t\t'errCmdParams'         : 'Nesprávné parametry příkazu \"\$1\".',
\t\t\t'errDataNotJSON'       : 'Data nejsou ve formátu JSON.',
\t\t\t'errDataEmpty'         : 'Data jsou prázdná.',
\t\t\t'errCmdReq'            : 'Dotaz backendu vyžaduje název příkazu.',
\t\t\t'errOpen'              : 'Chyba při otevírání \"\$1\".',
\t\t\t'errNotFolder'         : 'Objekt není složka.',
\t\t\t'errNotFile'           : 'Objekt není soubor.',
\t\t\t'errRead'              : 'Chyba při čtení \"\$1\".',
\t\t\t'errWrite'             : 'Chyba při zápisu do \"\$1\".',
\t\t\t'errPerm'              : 'Přístup odepřen.',
\t\t\t'errLocked'            : '\"\$1\" je uzamčený a nemůže být přejmenován, přesunut nebo smazán.',
\t\t\t'errExists'            : 'Soubor s názvem \"\$1\" již existuje.',
\t\t\t'errInvName'           : 'Nesprávný název souboru.',
\t\t\t'errInvDirname'        : 'Neplatný název adresáře.',  // from v2.1.24 added 12.4.2017
\t\t\t'errFolderNotFound'    : 'Složka nenalezena.',
\t\t\t'errFileNotFound'      : 'Soubor nenalezen.',
\t\t\t'errTrgFolderNotFound' : 'Cílová složka \"\$1\" nenalezena.',
\t\t\t'errPopup'             : 'Prohlížeč zabránil otevření vyskakovacího okna. K otevření souboru, povolte vyskakovací okno v prohlížeči.',
\t\t\t'errMkdir'             : 'Nepodařilo se vytvořit složku \"\$1\".',
\t\t\t'errMkfile'            : 'Nepodařilo se vytvořit soubor \"\$1\".',
\t\t\t'errRename'            : 'Nepodařilo se přejmenovat \"\$1\".',
\t\t\t'errCopyFrom'          : 'Kopírování souborů z oddílu \"\$1\" není povoleno.',
\t\t\t'errCopyTo'            : 'Kopírování souborů do oddílu \"\$1\" není povoleno.',
\t\t\t'errMkOutLink'         : 'Nelze vytvořit odkaz mimo kořenového svazku.', // from v2.1 added 03.10.2015
\t\t\t'errUpload'            : 'Chyba nahrávání.',  // old name - errUploadCommon
\t\t\t'errUploadFile'        : 'Nepodařilo se nahrát \"\$1\".', // old name - errUpload
\t\t\t'errUploadNoFiles'     : 'Nejsou vybrány žádné soubory k nahrání.',
\t\t\t'errUploadTotalSize'   : 'Překročena maximální povolená velikost dat.', // old name - errMaxSize
\t\t\t'errUploadFileSize'    : 'Překročena maximální povolená velikost souboru.', //  old name - errFileMaxSize
\t\t\t'errUploadMime'        : 'Nepovolený typ souboru.',
\t\t\t'errUploadTransfer'    : '\"\$1\" chyba přenosu.',
\t\t\t'errUploadTemp'        : 'Nelze vytvořit dočasný soubor pro upload.', // from v2.1 added 26.09.2015
\t\t\t'errNotReplace'        : 'Objekt \"\$1\" v tomto umístění již existuje a nelze jej nahradit s jiným typem objektu.', // new
\t\t\t'errReplace'           : 'Nelze nahradit \"\$1\".',
\t\t\t'errSave'              : '\"\$1\" nelze uložit.',
\t\t\t'errCopy'              : '\"\$1\" nelze zkopírovat.',
\t\t\t'errMove'              : '\"\$1\" nelze přemístit.',
\t\t\t'errCopyInItself'      : '\"\$1\" nelze zkopírovat do sebe sama.',
\t\t\t'errRm'                : '\"\$1\" nelze odstranit.',
\t\t\t'errTrash'             : 'Nelze se dostat do koše.', // from v2.1.24 added 30.4.2017
\t\t\t'errRmSrc'             : 'Nelze odstranit zdrojový soubor(y).',
\t\t\t'errExtract'           : 'Nelze extrahovat soubory z \"\$1\".',
\t\t\t'errArchive'           : 'Nelze vytvořit archív.',
\t\t\t'errArcType'           : 'Nepodporovaný typ archívu.',
\t\t\t'errNoArchive'         : 'Soubor není archív nebo má nepodporovaný formát.',
\t\t\t'errCmdNoSupport'      : 'Backend tento příkaz nepodporuje.',
\t\t\t'errReplByChild'       : 'Složka \"\$1\" nemůže být nahrazena souborem, který sama obsahuje.',
\t\t\t'errArcSymlinks'       : 'Z bezpečnostních důvodů je zakázáno rozbalit archívy obsahující symlinky.', // edited 24.06.2012
\t\t\t'errArcMaxSize'        : 'Soubory archívu překračují maximální povolenou velikost.',
\t\t\t'errResize'            : 'Nepodařilo se změnit velikost obrázku \"\$1\".',
\t\t\t'errResizeDegree'      : 'Neplatný stupeň rotace.',  // added 7.3.2013
\t\t\t'errResizeRotate'      : 'Nelze otočit obrázek.',  // added 7.3.2013
\t\t\t'errResizeSize'        : 'Neplatná velikost obrázku.',  // added 7.3.2013
\t\t\t'errResizeNoChange'    : 'Velikost obrazu se nezmění.',  // added 7.3.2013
\t\t\t'errUsupportType'      : 'Nepodporovaný typ souboru.',
\t\t\t'errNotUTF8Content'    : 'Soubor \"\$1\" nemá ani obsah kódovaný v UTF-8 a nelze změnit.',  // added 9.11.2011
\t\t\t'errNetMount'          : 'Není možné se připojit \"\$ 1\".', // added 17.04.2012
\t\t\t'errNetMountNoDriver'  : 'Nepodporovaný protokol.',     // added 17.04.2012
\t\t\t'errNetMountFailed'    : 'Připojení se nezdařilo.',         // added 17.04.2012
\t\t\t'errNetMountHostReq'   : 'Hostitel se vyžaduje.', // added 18.04.2012
\t\t\t'errSessionExpires'    : 'Relace byla ukončena z důvodu nečinnosti.',
\t\t\t'errCreatingTempDir'   : 'Nelze vytvořit dočasný adresář: \"\$1\"',
\t\t\t'errFtpDownloadFile'   : 'Nelze stáhnout soubor z FTP: \"\$1\"',
\t\t\t'errFtpUploadFile'     : 'Nelze nahrát soubor na FTP: \"\$1\"',
\t\t\t'errFtpMkdir'          : 'Nepodařilo se vytvořit vzdálený adresář na FTP: \"\$1\"',
\t\t\t'errArchiveExec'       : 'Při archivaci do souboru došlo k chybě: \"\$1\"',
\t\t\t'errExtractExec'       : 'Chyba při extrahování souboru: \"\$1\"',
\t\t\t'errNetUnMount'        : 'Nepodařilo se odpojit', // from v2.1 added 30.04.2012
\t\t\t'errConvUTF8'          : 'Nelze převést na UTF-8', // from v2.1 added 08.04.2014
\t\t\t'errFolderUpload'      : 'Chcete-li nahrát složku, zkuste moderní prohlížeč.', // from v2.1 added 26.6.2015
\t\t\t'errSearchTimeout'     : 'Vypršení časového limitu při hledání \"\$1\". Je částečně výsledkem hledání.', // from v2.1 added 12.1.2016
\t\t\t'errReauthRequire'     : 'Opětovné povolení je nutné.', // from v2.1.10 added 24.3.2016
\t\t\t'errMaxTargets'        : 'Maximální počet volitelných předmětů je \$1.', // from v2.1.17 added 17.10.2016
\t\t\t'errRestore'           : 'Nelze obnovit z koše. Nelze identifikovat cíl obnovení.', // from v2.1.24 added 3.5.2017
\t\t\t'errEditorNotFound'    : 'Editor tohoto typu souboru nebyl nalezen.', // from v2.1.25 added 23.5.2017
\t\t\t'errServerError'       : 'Došlo k chybě na straně serveru.', // from v2.1.25 added 16.6.2017
\t\t\t'errEmpty'             : 'Nelze vyprázdnit složku \"\$1\".', // from v2.1.25 added 22.6.2017
\t\t\t'moreErrors'           : 'Existují ještě další \$1 chyby.', // from v2.1.44 added 9.12.2018

\t\t\t/******************************* commands names ********************************/
\t\t\t'cmdarchive'   : 'Vytvořit archív',
\t\t\t'cmdback'      : 'Zpět',
\t\t\t'cmdcopy'      : 'Kopírovat',
\t\t\t'cmdcut'       : 'Vyjmout',
\t\t\t'cmddownload'  : 'Stáhnout',
\t\t\t'cmdduplicate' : 'Duplikovat',
\t\t\t'cmdedit'      : 'Upravit soubor',
\t\t\t'cmdextract'   : 'Rozbalit archív',
\t\t\t'cmdforward'   : 'Vpřed',
\t\t\t'cmdgetfile'   : 'Vybrat soubory',
\t\t\t'cmdhelp'      : 'O softwaru',
\t\t\t'cmdhome'      : 'Domů',
\t\t\t'cmdinfo'      : 'Zobrazit informace',
\t\t\t'cmdmkdir'     : 'Nová složka',
\t\t\t'cmdmkdirin'   : 'Do nové složky', // from v2.1.7 added 19.2.2016
\t\t\t'cmdmkfile'    : 'Nový soubor',
\t\t\t'cmdopen'      : 'Otevřít',
\t\t\t'cmdpaste'     : 'Vložit',
\t\t\t'cmdquicklook' : 'Náhled',
\t\t\t'cmdreload'    : 'Obnovit',
\t\t\t'cmdrename'    : 'Přejmenovat',
\t\t\t'cmdrm'        : 'Smazat',
\t\t\t'cmdtrash'     : 'Do koše', //from v2.1.24 added 29.4.2017
\t\t\t'cmdrestore'   : 'Obnovit', //from v2.1.24 added 3.5.2017
\t\t\t'cmdsearch'    : 'Najít soubory',
\t\t\t'cmdup'        : 'Přejít do nadřazené složky',
\t\t\t'cmdupload'    : 'Nahrát soubor(y)',
\t\t\t'cmdview'      : 'Zobrazit',
\t\t\t'cmdresize'    : 'Změnit velikost',
\t\t\t'cmdsort'      : 'Seřadit',
\t\t\t'cmdnetmount'  : 'Připojit síťovou jednotku', // added 18.04.2012
\t\t\t'cmdnetunmount': 'Odpojit', // from v2.1 added 30.04.2012
\t\t\t'cmdplaces'    : 'Umístění', // added 28.12.2014
\t\t\t'cmdchmod'     : 'Změnit režim', // from v2.1 added 20.6.2015
\t\t\t'cmdopendir'   : 'Otevření složky', // from v2.1 added 13.1.2016
\t\t\t'cmdcolwidth'  : 'Obnovení šířku sloupce', // from v2.1.13 added 12.06.2016
\t\t\t'cmdfullscreen': 'Celá obrazovka', // from v2.1.15 added 03.08.2016
\t\t\t'cmdmove'      : 'Posouvat', // from v2.1.15 added 21.08.2016
\t\t\t'cmdempty'     : 'Vyprázdnit složku', // from v2.1.25 added 22.06.2017
\t\t\t'cmdundo'      : 'Krok zpět', // from v2.1.27 added 31.07.2017
\t\t\t'cmdredo'      : 'Udělat to znovu', // from v2.1.27 added 31.07.2017
\t\t\t'cmdpreference': 'Preference', // from v2.1.27 added 03.08.2017
\t\t\t'cmdselectall' : 'Vyberat vše', // from v2.1.28 added 15.08.2017
\t\t\t'cmdselectnone': 'Nic nevyberať', // from v2.1.28 added 15.08.2017
\t\t\t'cmdselectinvert': 'Invertovat výběr', // from v2.1.28 added 15.08.2017
\t\t\t'cmdopennew'   : 'Otevři v novém okně', // from v2.1.38 added 3.4.2018
\t\t\t'cmdhide'      : 'Skrýt (Předvolba)', // from v2.1.41 added 24.7.2018

\t\t\t/*********************************** buttons ***********************************/
\t\t\t'btnClose'  : 'Zavřít',
\t\t\t'btnSave'   : 'Uložit',
\t\t\t'btnRm'     : 'Odstranit',
\t\t\t'btnApply'  : 'Použít',
\t\t\t'btnCancel' : 'Zrušit',
\t\t\t'btnNo'     : 'Ne',
\t\t\t'btnYes'    : 'Ano',
\t\t\t'btnMount'  : 'Připojit',  // added 18.04.2012
\t\t\t'btnApprove': 'Přejít do části 1 \$ & schválit', // from v2.1 added 26.04.2012
\t\t\t'btnUnmount': 'Odpojit', // from v2.1 added 30.04.2012
\t\t\t'btnConv'   : 'Převést', // from v2.1 added 08.04.2014
\t\t\t'btnCwd'    : 'Tu',      // from v2.1 added 22.5.2015
\t\t\t'btnVolume' : 'Médium',    // from v2.1 added 22.5.2015
\t\t\t'btnAll'    : 'Všechno',       // from v2.1 added 22.5.2015
\t\t\t'btnMime'   : 'MIME typ', // from v2.1 added 22.5.2015
\t\t\t'btnFileName':'Název souboru',  // from v2.1 added 22.5.2015
\t\t\t'btnSaveClose': 'Uložit & zavřít', // from v2.1 added 12.6.2015
\t\t\t'btnBackup' : 'Zálohovat', // fromv2.1 added 28.11.2015
\t\t\t'btnRename'    : 'Přejmenovat',      // from v2.1.24 added 6.4.2017
\t\t\t'btnRenameAll' : 'Přejmenovat vše', // from v2.1.24 added 6.4.2017
\t\t\t'btnPrevious' : 'Předch (\$1/\$2)', // from v2.1.24 added 11.5.2017
\t\t\t'btnNext'     : 'Další (\$1/\$2)', // from v2.1.24 added 11.5.2017
\t\t\t'btnSaveAs'   : 'Uložit jako', // from v2.1.25 added 24.5.2017

\t\t\t/******************************** notifications ********************************/
\t\t\t'ntfopen'     : 'Otevírání složky',
\t\t\t'ntffile'     : 'Otevírání souboru',
\t\t\t'ntfreload'   : 'Obnovování obsahu složky',
\t\t\t'ntfmkdir'    : 'Vytváření složky',
\t\t\t'ntfmkfile'   : 'Vytváření souborů',
\t\t\t'ntfrm'       : 'Vymazání položek',
\t\t\t'ntfcopy'     : 'Kopírování položek',
\t\t\t'ntfmove'     : 'Přemístění položek',
\t\t\t'ntfprepare'  : 'Kontrola existujících položek',
\t\t\t'ntfrename'   : 'Přejmenovávání souborů',
\t\t\t'ntfupload'   : 'Nahrávání souborů',
\t\t\t'ntfdownload' : 'Stahování souborů',
\t\t\t'ntfsave'     : 'Ukládání souborů',
\t\t\t'ntfarchive'  : 'Vytváření archívu',
\t\t\t'ntfextract'  : 'Rozbalování souborů z archívu',
\t\t\t'ntfsearch'   : 'Vyhledávání souborů',
\t\t\t'ntfresize'   : 'Změna velikosti obrázků',
\t\t\t'ntfsmth'     : 'Čekejte prosím...',
\t\t\t'ntfloadimg'  : 'Načítání obrázků',
\t\t\t'ntfnetmount' : 'Připojení síťového média', // added 18.04.2012
\t\t\t'ntfnetunmount': 'Odpojení síťového média', // from v2.1 added 30.04.2012
\t\t\t'ntfdim'      : 'Získejte rozměr obrazu', // added 20.05.2013
\t\t\t'ntfreaddir'  : 'Přečtěte si informace o složce', // from v2.1 added 01.07.2013
\t\t\t'ntfurl'      : 'Získejte adresu URL odkazu', // from v2.1 added 11.03.2014
\t\t\t'ntfchmod'    : 'Změna souboru', // from v2.1 added 20.6.2015
\t\t\t'ntfpreupload': 'Zkontrolujte název nahravaného souboru', // from v2.1 added 31.11.2015
\t\t\t'ntfzipdl'    : 'Vytvořit soubor ke stažení', // from v2.1.7 added 23.1.2016
\t\t\t'ntfparents'  : 'Získání informací o cestě', // from v2.1.17 added 2.11.2016
\t\t\t'ntfchunkmerge': 'Zpracování nahraného souboru', // from v2.1.17 added 2.11.2016
\t\t\t'ntftrash'    : 'Hodit do koše', // from v2.1.24 added 2.5.2017
\t\t\t'ntfrestore'  : 'Obnova z koše', // from v2.1.24 added 3.5.2017
\t\t\t'ntfchkdir'   : 'Kontrola cílové složky', // from v2.1.24 added 3.5.2017
\t\t\t'ntfundo'     : 'Zrušit  předchozí operaci', // from v2.1.27 added 31.07.2017
\t\t\t'ntfredo'     : 'Obnovit předchozí zrušení', // from v2.1.27 added 31.07.2017
\t\t\t'ntfchkcontent' : 'Kontrola obsahu', // from v2.1.41 added 3.8.2018

\t\t\t/*********************************** volumes *********************************/
\t\t\t'volume_Trash' : 'Koš', //from v2.1.24 added 29.4.2017

\t\t\t/************************************ dates **********************************/
\t\t\t'dateUnknown' : 'neznámý',
\t\t\t'Today'       : 'Dnes',
\t\t\t'Yesterday'   : 'Včera',
\t\t\t'msJan'       : 'Led',
\t\t\t'msFeb'       : 'Úno',
\t\t\t'msMar'       : 'Bře',
\t\t\t'msApr'       : 'Dub',
\t\t\t'msMay'       : 'Kvě',
\t\t\t'msJun'       : 'Čer',
\t\t\t'msJul'       : 'Čec',
\t\t\t'msAug'       : 'Srp',
\t\t\t'msSep'       : 'Zář',
\t\t\t'msOct'       : 'Říj',
\t\t\t'msNov'       : 'Lis',
\t\t\t'msDec'       : 'Pro',
\t\t\t'January'     : 'Leden',
\t\t\t'February'    : 'Únor',
\t\t\t'March'       : 'Březen',
\t\t\t'April'       : 'Duben',
\t\t\t'May'         : 'Květen',
\t\t\t'June'        : 'Červen',
\t\t\t'July'        : 'Červenec',
\t\t\t'August'      : 'Srpen',
\t\t\t'September'   : 'Září',
\t\t\t'October'     : 'Říjen',
\t\t\t'November'    : 'Listopad',
\t\t\t'December'    : 'Prosinec',
\t\t\t'Sunday'      : 'Neděle',
\t\t\t'Monday'      : 'Pondělí',
\t\t\t'Tuesday'     : 'Úterý',
\t\t\t'Wednesday'   : 'Středa',
\t\t\t'Thursday'    : 'Čtvrtek',
\t\t\t'Friday'      : 'Pátek',
\t\t\t'Saturday'    : 'Sobota',
\t\t\t'Sun'         : 'Ne',
\t\t\t'Mon'         : 'Po',
\t\t\t'Tue'         : 'Út',
\t\t\t'Wed'         : 'St',
\t\t\t'Thu'         : 'Čt',
\t\t\t'Fri'         : 'Pá',
\t\t\t'Sat'         : 'So',

\t\t\t/******************************** sort variants ********************************/
\t\t\t'sortname'          : 'dle jména',
\t\t\t'sortkind'          : 'dle typu',
\t\t\t'sortsize'          : 'dle velikosti',
\t\t\t'sortdate'          : 'dle data',
\t\t\t'sortFoldersFirst'  : 'Napřed složky',
\t\t\t'sortperm'          : 'dle povolení', // from v2.1.13 added 13.06.2016
\t\t\t'sortmode'          : 'dle módu',       // from v2.1.13 added 13.06.2016
\t\t\t'sortowner'         : 'dle majitele',      // from v2.1.13 added 13.06.2016
\t\t\t'sortgroup'         : 'dle skupiny',      // from v2.1.13 added 13.06.2016
\t\t\t'sortAlsoTreeview'  : 'Také stromové zobrazení',  // from v2.1.15 added 01.08.2016

\t\t\t/********************************** new items **********************************/
\t\t\t'untitled file.txt' : 'Nový soubor.txt', // added 10.11.2015
\t\t\t'untitled folder'   : 'Nová složka',   // added 10.11.2015
\t\t\t'Archive'           : 'Nový archiv',  // from v2.1 added 10.11.2015
\t\t\t'untitled file'     : 'Nový soubor.\$1',  // from v2.1.41 added 6.8.2018
\t\t\t'extentionfile'     : '\$1 soubor',    // from v2.1.41 added 6.8.2018
\t\t\t'extentiontype'     : '\$1: \$2',      // from v2.1.43 added 17.10.2018

\t\t\t/********************************** messages **********************************/
\t\t\t'confirmReq'      : 'Požadováno potvrzení',
\t\t\t'confirmRm'       : 'Opravdu chcete odstranit tyto soubory?<br/>Operace nelze vrátit!',
\t\t\t'confirmRepl'     : 'Nahradit staré soubory novými?',
\t\t\t'confirmRest'     : 'Nahradit stávající položku položkou z koše?', // fromv2.1.24 added 5.5.2017
\t\t\t'confirmConvUTF8' : 'Není v UTF-8, převést do UTF-8?<br/>Obsah po převodu se stává UTF-8.', // from v2.1 added 08.04.2014
\t\t\t'confirmNonUTF8'  : 'Kódování tohoto souboru nemoholo rozpoznán. Pro úpravy je třeba dočasně převést do kódování UTF-8.<br/>Prosím, vyberte kódování znaků souboru.', // from v2.1.19 added 28.11.2016
\t\t\t'confirmNotSave'  : 'Byl změněn.<br/>Pokud obsahuje neuložené změny, dojde ke ztrátě práce.', // from v2.1 added 15.7.2015
\t\t\t'confirmTrash'    : 'Opravdu chcete položky přesunout do koše?', //from v2.1.24 added 29.4.2017
\t\t\t'confirmMove'     : 'Opravdu chcete položky přesunout do \"\$1\"?', //from v2.1.50 added 27.7.2019
\t\t\t'apllyAll'        : 'Pro všechny',
\t\t\t'name'            : 'Název',
\t\t\t'size'            : 'Velikost',
\t\t\t'perms'           : 'Práva',
\t\t\t'modify'          : 'Upravený',
\t\t\t'kind'            : 'Typ',
\t\t\t'read'            : 'čtení',
\t\t\t'write'           : 'zápis',
\t\t\t'noaccess'        : 'přístup odepřen',
\t\t\t'and'             : 'a',
\t\t\t'unknown'         : 'neznámý',
\t\t\t'selectall'       : 'Vybrat všechny položky',
\t\t\t'selectfiles'     : 'Vybrat položku(y)',
\t\t\t'selectffile'     : 'Vybrat první položku',
\t\t\t'selectlfile'     : 'Vybrat poslední položku',
\t\t\t'viewlist'        : 'Seznam',
\t\t\t'viewicons'       : 'Ikony',
\t\t\t'viewSmall'       : 'Malé ikony', // from v2.1.39 added 22.5.2018
\t\t\t'viewMedium'      : 'Střední ikony', // from v2.1.39 added 22.5.2018
\t\t\t'viewLarge'       : 'Velké ikony', // from v2.1.39 added 22.5.2018
\t\t\t'viewExtraLarge'  : 'Extra velké ikony', // from v2.1.39 added 22.5.2018
\t\t\t'places'          : 'Místa',
\t\t\t'calc'            : 'Vypočítat',
\t\t\t'path'            : 'Cesta',
\t\t\t'aliasfor'        : 'Zástupce pro',
\t\t\t'locked'          : 'Uzamčený',
\t\t\t'dim'             : 'Rozměry',
\t\t\t'files'           : 'Soubory',
\t\t\t'folders'         : 'Složky',
\t\t\t'items'           : 'Položky',
\t\t\t'yes'             : 'ano',
\t\t\t'no'              : 'ne',
\t\t\t'link'            : 'Odkaz',
\t\t\t'searcresult'     : 'Výsledky hledání',
\t\t\t'selected'        : 'vybrané položky',
\t\t\t'about'           : 'O softwaru',
\t\t\t'shortcuts'       : 'Zkratky',
\t\t\t'help'            : 'Nápověda',
\t\t\t'webfm'           : 'Webový správce souborů',
\t\t\t'ver'             : 'Verze',
\t\t\t'protocolver'     : 'verze protokolu',
\t\t\t'homepage'        : 'Domovská stránka projektu',
\t\t\t'docs'            : 'Dokumentace',
\t\t\t'github'          : 'Najdete nás na Gitgube',
\t\t\t'twitter'         : 'Následujte nás na Twitteri',
\t\t\t'facebook'        : 'Připojte se k nám na Facebooku',
\t\t\t'team'            : 'Tým',
\t\t\t'chiefdev'        : 'séf vývojářů',
\t\t\t'developer'       : 'vývojár',
\t\t\t'contributor'     : 'spolupracovník',
\t\t\t'maintainer'      : 'údržba',
\t\t\t'translator'      : 'překlad',
\t\t\t'icons'           : 'Ikony',
\t\t\t'dontforget'      : 'a nezapomeňte si vzít plavky',
\t\t\t'shortcutsof'     : 'Zkratky nejsou povoleny',
\t\t\t'dropFiles'       : 'Sem přetáhněte soubory',
\t\t\t'or'              : 'nebo',
\t\t\t'selectForUpload' : 'Vyberte soubory',
\t\t\t'moveFiles'       : 'Přesunout sobory',
\t\t\t'copyFiles'       : 'Zkopírovat soubory',
\t\t\t'restoreFiles'    : 'Obnovit položky', // from v2.1.24 added 5.5.2017
\t\t\t'rmFromPlaces'    : 'Odstranit z míst',
\t\t\t'aspectRatio'     : 'Poměr stran',
\t\t\t'scale'           : 'Měřítko',
\t\t\t'width'           : 'Šířka',
\t\t\t'height'          : 'Výška',
\t\t\t'resize'          : 'Změnit vel.',
\t\t\t'crop'            : 'Ořezat',
\t\t\t'rotate'          : 'Otočit',
\t\t\t'rotate-cw'       : 'Otočit o +90 stupňů',
\t\t\t'rotate-ccw'      : 'Otočit o -90 stupňů',
\t\t\t'degree'          : ' stupňů',
\t\t\t'netMountDialogTitle' : 'Připojení síťového média', // added 18.04.2012
\t\t\t'protocol'            : 'Protokol', // added 18.04.2012
\t\t\t'host'                : 'Host', // added 18.04.2012
\t\t\t'port'                : 'Port', // added 18.04.2012
\t\t\t'user'                : 'Uživatel', // added 18.04.2012
\t\t\t'pass'                : 'Heslo', // added 18.04.2012
\t\t\t'confirmUnmount'      : 'Chcete odpojit \$1?',  // from v2.1 added 30.04.2012
\t\t\t'dropFilesBrowser': 'Přemístěte nebo přesuňte soubory z prohlížeče', // from v2.1 added 30.05.2012
\t\t\t'dropPasteFiles'  : 'Zde přemístěte nebo přesuňte soubory a adresy URL', // from v2.1 added 07.04.2014
\t\t\t'encoding'        : 'Kódování', // from v2.1 added 19.12.2014
\t\t\t'locale'          : 'Lokalizce',   // from v2.1 added 19.12.2014
\t\t\t'searchTarget'    : 'Cíl: \$1',                // from v2.1 added 22.5.2015
\t\t\t'searchMime'      : 'Vyhledávání podle vstupního MIME typu', // from v2.1 added 22.5.2015
\t\t\t'owner'           : 'Majitel', // from v2.1 added 20.6.2015
\t\t\t'group'           : 'Skupina', // from v2.1 added 20.6.2015
\t\t\t'other'           : 'Ostatní', // from v2.1 added 20.6.2015
\t\t\t'execute'         : 'Spustit', // from v2.1 added 20.6.2015
\t\t\t'perm'            : 'Povolení', // from v2.1 added 20.6.2015
\t\t\t'mode'            : 'Režim', // from v2.1 added 20.6.2015
\t\t\t'emptyFolder'     : 'Složka je prázdná', // from v2.1.6 added 30.12.2015
\t\t\t'emptyFolderDrop' : 'Složka je prázdná, přesunout nebo zkontrolovat položky', // from v2.1.6 added 30.12.2015
\t\t\t'emptyFolderLTap' : 'Složka je prázdná, dlouhim kliknutím přidáte položky', // from v2.1.6 added 30.12.2015
\t\t\t'quality'         : 'Kvalita', // from v2.1.6 added 5.1.2016
\t\t\t'autoSync'        : 'Automatická synchronizace',  // from v2.1.6 added 10.1.2016
\t\t\t'moveUp'          : 'Přesunout nahoru',  // from v2.1.6 added 18.1.2016
\t\t\t'getLink'         : 'Získat URL odkaz', // from v2.1.7 added 9.2.2016
\t\t\t'selectedItems'   : 'Vybrané položky (\$1)', // from v2.1.7 added 2.19.2016
\t\t\t'folderId'        : 'ID složky', // from v2.1.10 added 3.25.2016
\t\t\t'offlineAccess'   : 'Povolit přístup offline', // from v2.1.10 added 3.25.2016
\t\t\t'reAuth'          : 'Znovu ověřit', // from v2.1.10 added 3.25.2016
\t\t\t'nowLoading'      : 'Načítání...', // from v2.1.12 added 4.26.2016
\t\t\t'openMulti'       : 'Otevření více souborů', // from v2.1.12 added 5.14.2016
\t\t\t'openMultiConfirm': 'Pokoušíte se otevřít soubor \$1. Chcete jej otevřít v prohlížeči?', // from v2.1.12 added 5.14.2016
\t\t\t'emptySearch'     : 'Výsledky hledání jsou prázdné', // from v2.1.12 added 5.16.2016
\t\t\t'editingFile'     : 'Upravujete soubor.', // from v2.1.13 added 6.3.2016
\t\t\t'hasSelected'     : 'Vybrali jste \$1 položky.', // from v2.1.13 added 6.3.2016
\t\t\t'hasClipboard'    : 'Máte \$1 položky v schránce.', // from v2.1.13 added 6.3.2016
\t\t\t'incSearchOnly'   : 'Inkrementální hledání je pouze z aktuálního zobrazení.', // from v2.1.13 added 6.30.2016
\t\t\t'reinstate'       : 'Obnovit', // from v2.1.15 added 3.8.2016
\t\t\t'complete'        : '\$1 kompletní', // from v2.1.15 added 21.8.2016
\t\t\t'contextmenu'     : 'Kontextové menu', // from v2.1.15 added 9.9.2016
\t\t\t'pageTurning'     : 'Otáčení stránky', // from v2.1.15 added 10.9.2016
\t\t\t'volumeRoots'     : 'Kořeny média', // from v2.1.16 added 16.9.2016
\t\t\t'reset'           : 'Obnovit', // from v2.1.16 added 1.10.2016
\t\t\t'bgcolor'         : 'Barva pozadí', // from v2.1.16 added 1.10.2016
\t\t\t'colorPicker'     : 'Výběr barvy', // from v2.1.16 added 1.10.2016
\t\t\t'8pxgrid'         : '8px mřížka', // from v2.1.16 added 4.10.2016
\t\t\t'enabled'         : 'Povoleno', // from v2.1.16 added 4.10.2016
\t\t\t'disabled'        : 'Zakázáno', // from v2.1.16 added 4.10.2016
\t\t\t'emptyIncSearch'  : 'Výsledky hledání jsou prázdné v aktuálním zobrazení.\\\\Stisknutím tlačítka [Enter] rozšíříte vyhledávání cíle.', // from v2.1.16 added 5.10.2016
\t\t\t'emptyLetSearch'  : 'Výsledky vyhledávání prvního listu jsou v aktuálním zobrazení prázdné.', // from v2.1.23 added 24.3.2017
\t\t\t'textLabel'       : 'Nápis textu', // from v2.1.17 added 13.10.2016
\t\t\t'minsLeft'        : '\$1 minut zůstává', // from v2.1.17 added 13.11.2016
\t\t\t'openAsEncoding'  : 'Otevřít pomocí zvoleného kódování', // from v2.1.19 added 2.12.2016
\t\t\t'saveAsEncoding'  : 'Uložit s vybraným kódováním', // from v2.1.19 added 2.12.2016
\t\t\t'selectFolder'    : 'Vyberte složku', // from v2.1.20 added 13.12.2016
\t\t\t'firstLetterSearch': 'Hledání prvního listu', // from v2.1.23 added 24.3.2017
\t\t\t'presets'         : 'Předvolby', // from v2.1.25 added 26.5.2017
\t\t\t'tooManyToTrash'  : 'Je to příliš mnoho položek, takže se nemohou dostat do koše.', // from v2.1.25 added 9.6.2017
\t\t\t'TextArea'        : 'Textarea', // from v2.1.25 added 14.6.2017
\t\t\t'folderToEmpty'   : 'Vyprázdnit složku \"\$1\".', // from v2.1.25 added 22.6.2017
\t\t\t'filderIsEmpty'   : 'Ve složce \"\$1\" nejsou žádné položky.', // from v2.1.25 added 22.6.2017
\t\t\t'preference'      : 'Předvolby', // from v2.1.26 added 28.6.2017
\t\t\t'language'        : 'Nastavte jazyk', // from v2.1.26 added 28.6.2017
\t\t\t'clearBrowserData': 'Inicializujte nastavení uložená v tomto prohlížeči', // from v2.1.26 added 28.6.2017
\t\t\t'toolbarPref'     : 'Nastavení panelu nástrojů', // from v2.1.27 added 2.8.2017
\t\t\t'charsLeft'       : '...\$1 znaků zbývá.',  // from v2.1.29 added 30.8.2017
\t\t\t'linesLeft'       : '...\$1 řádků zůstává.',  // from v2.1.52 added 16.1.2020
\t\t\t'sum'             : 'Součet', // from v2.1.29 added 28.9.2017
\t\t\t'roughFileSize'   : 'Hrubá velikost souboru', // from v2.1.30 added 2.11.2017
\t\t\t'autoFocusDialog' : 'Zaměření na prvek dialogu s mouseover',  // from v2.1.30 added 2.11.2017
\t\t\t'select'          : 'Vybrat', // from v2.1.30 added 23.11.2017
\t\t\t'selectAction'    : 'Akce při vybraném souboru', // from v2.1.30 added 23.11.2017
\t\t\t'useStoredEditor' : 'Otevřít pomocí naposledy použitého editoru', // from v2.1.30 added 23.11.2017
\t\t\t'selectinvert'    : 'Obrátit výběr položek', // from v2.1.30 added 25.11.2017
\t\t\t'renameMultiple'  : 'Opravdu chcete přejmenovat \$1 vybraných položek, jako například \$2<br/>Není to možné vrátit zpět!', // from v2.1.31 added 4.12.2017
\t\t\t'batchRename'     : 'Batch přejmenování', // from v2.1.31 added 8.12.2017
\t\t\t'plusNumber'      : '+ Číslo', // from v2.1.31 added 8.12.2017
\t\t\t'asPrefix'        : 'Přidat předponu', // from v2.1.31 added 8.12.2017
\t\t\t'asSuffix'        : 'Přidat příponu', // from v2.1.31 added 8.12.2017
\t\t\t'changeExtention' : 'Změnit příponu', // from v2.1.31 added 8.12.2017
\t\t\t'columnPref'      : 'Nastavení sloupců (Zobrazení seznamu)', // from v2.1.32 added 6.2.2018
\t\t\t'reflectOnImmediate' : 'Všechny změny se okamžitě projeví v archivu.', // from v2.1.33 added 2.3.2018
\t\t\t'reflectOnUnmount'   : 'Jakékoliv změny se nebudou odrážet, dokud nebude tento svazek odpojen.', // from v2.1.33 added 2.3.2018
\t\t\t'unmountChildren' : 'Následující svazky namontované na tomto svazku jsou také odpojeny. Opravdu ji odpojíte?', // from v2.1.33 added 5.3.2018
\t\t\t'selectionInfo'   : 'Informace o výběru', // from v2.1.33 added 7.3.2018
\t\t\t'hashChecker'     : 'Algoritmy pro zobrazení hashování souborů', // from v2.1.33 added 10.3.2018
\t\t\t'infoItems'       : 'Informační položky (panel s informacemi o výběru)', // from v2.1.38 added 28.3.2018
\t\t\t'pressAgainToExit': 'Dalším stisknutím opustíte.', // from v2.1.38 added 1.4.2018
\t\t\t'toolbar'         : 'Panel nástrojů', // from v2.1.38 added 4.4.2018
\t\t\t'workspace'       : 'Pracovní prostor', // from v2.1.38 added 4.4.2018
\t\t\t'dialog'          : 'Dialog', // from v2.1.38 added 4.4.2018
\t\t\t'all'             : 'Všechno', // from v2.1.38 added 4.4.2018
\t\t\t'iconSize'        : 'Velikost ikony (zobrazení ikon)', // from v2.1.39 added 7.5.2018
\t\t\t'editorMaximized' : 'Otevřete maximalizované okno editora', // from v2.1.40 added 30.6.2018
\t\t\t'editorConvNoApi' : 'Protože konverze podle API momentálně není k dispozici, převeďte na webové stránce.', //from v2.1.40 added 8.7.2018
\t\t\t'editorConvNeedUpload' : 'Po konverzi musíte nahrát převeden soubor pomocí URL položky nebo stažený soubor k uložení převedeného souboru.', //from v2.1.40 added 8.7.2018
\t\t\t'convertOn'       : 'Převést na stránce \$1', // from v2.1.40 added 10.7.2018
\t\t\t'integrations'    : 'Integrace', // from v2.1.40 added 11.7.2018
\t\t\t'integrationWith' : 'Tento elFinder má integrované následující externí služby. Před použitím zkontrolujte podmínky používání, zásady ochrany osobních údajů atd.', // from v2.1.40 added 11.7.2018
\t\t\t'showHidden'      : 'Zobrazit skryté položky', // from v2.1.41 added 24.7.2018
\t\t\t'hideHidden'      : 'Skrýt skryté položky', // from v2.1.41 added 24.7.2018
\t\t\t'toggleHidden'    : 'Zobrazit/skrýt skryté položky', // from v2.1.41 added 24.7.2018
\t\t\t'makefileTypes'   : 'Typy souborů, jež mají být povoleny pomocí \"Nový soubor\"', // from v2.1.41 added 7.8.2018
\t\t\t'typeOfTextfile'  : 'Typ textového souboru', // from v2.1.41 added 7.8.2018
\t\t\t'add'             : 'Přidat', // from v2.1.41 added 7.8.2018
\t\t\t'theme'           : 'Téma', // from v2.1.43 added 19.10.2018
\t\t\t'default'         : 'Výchozí', // from v2.1.43 added 19.10.2018
\t\t\t'description'     : 'Popis', // from v2.1.43 added 19.10.2018
\t\t\t'website'         : 'Stránka', // from v2.1.43 added 19.10.2018
\t\t\t'author'          : 'Autor', // from v2.1.43 added 19.10.2018
\t\t\t'email'           : 'E-mail', // from v2.1.43 added 19.10.2018
\t\t\t'license'         : 'Licence', // from v2.1.43 added 19.10.2018
\t\t\t'exportToSave'    : 'Tuto položku nelze uložit. Abyste se vyhnuli ztrátě úprav, musíte je exportovat do počítače.', // from v2.1.44 added 1.12.2018
\t\t\t'dblclickToSelect': 'Poklepáním na soubor jej vyberte.', // from v2.1.47 added 22.1.2019
\t\t\t'useFullscreen'   : 'Použít režim celé obrazovky', // from v2.1.47 added 19.2.2019

\t\t\t/********************************** mimetypes **********************************/
\t\t\t'kindUnknown'     : 'Neznámý',
\t\t\t'kindRoot'        : 'Kořen média', // from v2.1.16 added 16.10.2016
\t\t\t'kindFolder'      : 'Složka',
\t\t\t'kindSelects'     : 'Výběry', // from v2.1.29 added 29.8.2017
\t\t\t'kindAlias'       : 'Alias',
\t\t\t'kindAliasBroken' : 'Zlomený alias',
\t\t\t// applications
\t\t\t'kindApp'         : 'Aplikace',
\t\t\t'kindPostscript'  : 'Dokument Postscriptu',
\t\t\t'kindMsOffice'    : 'Dokument Microsoft Office',
\t\t\t'kindMsWord'      : 'Dokument Microsoft Word',
\t\t\t'kindMsExcel'     : 'Dokument Microsoft Excel',
\t\t\t'kindMsPP'        : 'Prezentace Microsoft Powerpoint',
\t\t\t'kindOO'          : 'Otevřít dokument Office',
\t\t\t'kindAppFlash'    : 'Flash aplikace',
\t\t\t'kindPDF'         : 'PDF',
\t\t\t'kindTorrent'     : 'Soubor BitTorrent',
\t\t\t'kind7z'          : 'Archív 7z',
\t\t\t'kindTAR'         : 'Archív TAR',
\t\t\t'kindGZIP'        : 'Archív GZIP',
\t\t\t'kindBZIP'        : 'Archív BZIP',
\t\t\t'kindXZ'          : 'Archív XZ',
\t\t\t'kindZIP'         : 'Archív ZIP',
\t\t\t'kindRAR'         : 'Archív RAR',
\t\t\t'kindJAR'         : 'Soubor Java JAR',
\t\t\t'kindTTF'         : 'True Type font',
\t\t\t'kindOTF'         : 'Open Type font',
\t\t\t'kindRPM'         : 'RPM balíček',
\t\t\t// texts
\t\t\t'kindText'        : 'Textový dokument',
\t\t\t'kindTextPlain'   : 'Čistý text',
\t\t\t'kindPHP'         : 'PHP zdrojový kód',
\t\t\t'kindCSS'         : 'Kaskádové styly',
\t\t\t'kindHTML'        : 'HTML dokument',
\t\t\t'kindJS'          : 'Javascript zdrojový kód',
\t\t\t'kindRTF'         : 'Rich Text Format',
\t\t\t'kindC'           : 'C zdrojový kód',
\t\t\t'kindCHeader'     : 'C hlavička',
\t\t\t'kindCPP'         : 'C++ zdrojový kód',
\t\t\t'kindCPPHeader'   : 'C++ hlavička',
\t\t\t'kindShell'       : 'Unix shell skript',
\t\t\t'kindPython'      : 'Python zdrojový kód',
\t\t\t'kindJava'        : 'Java zdrojový kód',
\t\t\t'kindRuby'        : 'Ruby zdrojový kód',
\t\t\t'kindPerl'        : 'Perl skript',
\t\t\t'kindSQL'         : 'SQL zdrojový kód',
\t\t\t'kindXML'         : 'Dokument XML',
\t\t\t'kindAWK'         : 'AWK zdrojový kód',
\t\t\t'kindCSV'         : 'CSV',
\t\t\t'kindDOCBOOK'     : 'Docbook XML dokument',
\t\t\t'kindMarkdown'    : 'Markdown text', // added 20.7.2015
\t\t\t// images
\t\t\t'kindImage'       : 'Obrázek',
\t\t\t'kindBMP'         : 'Obrázek BMP',
\t\t\t'kindJPEG'        : 'Obrázek JPEG',
\t\t\t'kindGIF'         : 'Obrázek GIF',
\t\t\t'kindPNG'         : 'Obrázek PNG',
\t\t\t'kindTIFF'        : 'Obrázek TIFF',
\t\t\t'kindTGA'         : 'Obrázek TGA',
\t\t\t'kindPSD'         : 'Obrázek Adobe Photoshop',
\t\t\t'kindXBITMAP'     : 'Obrázek X bitmapa',
\t\t\t'kindPXM'         : 'Obrázek Pixelmator',
\t\t\t// media
\t\t\t'kindAudio'       : 'Audio sobory',
\t\t\t'kindAudioMPEG'   : 'MPEG audio',
\t\t\t'kindAudioMPEG4'  : 'MPEG-4 audio',
\t\t\t'kindAudioMIDI'   : 'MIDI audio',
\t\t\t'kindAudioOGG'    : 'Ogg Vorbis audio',
\t\t\t'kindAudioWAV'    : 'WAV audio',
\t\t\t'AudioPlaylist'   : 'MP3 playlist',
\t\t\t'kindVideo'       : 'Video sobory',
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
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.cs.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.cs.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.cs.js");
    }
}
