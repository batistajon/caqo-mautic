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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.nl.js */
class __TwigTemplate_aef3e4f66a6128a3d1f899155d522f67a3f6a846fb219a949a5c432d0ccf9613 extends Template
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
 * Dutch translation
 * @author Barry vd. Heuvel <barry@fruitcakestudio.nl>
 * @author Patrick Tingen <patrick@tingen.net>
 * @version 2019-04-17
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
\telFinder.prototype.i18.nl = {
\t\ttranslator       : 'Barry vd. Heuvel &lt;barry@fruitcakestudio.nl&gt;, Patrick Tingen &lt;patrick@tingen.net&gt;',
\t\tlanguage         : 'Nederlands',
\t\tdirection        : 'ltr',
\t\tdateFormat       : 'd-m-Y H:i', // Mar 13, 2012 05:27 PM
\t\tfancyDateFormat  : '\$1 H:i', // will produce smth like: Today 12:25 PM
\t\tnonameDateFormat : 'ymd-His', // noname upload will show like: 120513-172700
\t\tmessages         : {

\t\t\t/********************************** errors **********************************/
\t\t\t'error'                : 'Fout',
\t\t\t'errUnknown'           : 'Onbekend fout',
\t\t\t'errUnknownCmd'        : 'Onbekend commando',
\t\t\t'errJqui'              : 'Ongeldige jQuery UI configuratie. Selectable, draggable en droppable componenten moeten aanwezig zijn',
\t\t\t'errNode'              : 'Voor elFinder moet een DOM Element gemaakt worden',
\t\t\t'errURL'               : 'Ongeldige elFinder configuratie! URL optie is niet ingesteld',
\t\t\t'errAccess'            : 'Toegang geweigerd',
\t\t\t'errConnect'           : 'Kan geen verbinding met de backend maken',
\t\t\t'errAbort'             : 'Verbinding afgebroken',
\t\t\t'errTimeout'           : 'Verbinding time-out',
\t\t\t'errNotFound'          : 'Backend niet gevonden',
\t\t\t'errResponse'          : 'Ongeldige reactie van de backend',
\t\t\t'errConf'              : 'Ongeldige backend configuratie',
\t\t\t'errJSON'              : 'PHP JSON module niet geïnstalleerd',
\t\t\t'errNoVolumes'         : 'Leesbaar volume is niet beschikbaar',
\t\t\t'errCmdParams'         : 'Ongeldige parameters voor commando \"\$1\"',
\t\t\t'errDataNotJSON'       : 'Data is niet JSON',
\t\t\t'errDataEmpty'         : 'Data is leeg',
\t\t\t'errCmdReq'            : 'Backend verzoek heeft een commando naam nodig',
\t\t\t'errOpen'              : 'Kan \"\$1\" niet openen',
\t\t\t'errNotFolder'         : 'Object is geen map',
\t\t\t'errNotFile'           : 'Object is geen bestand',
\t\t\t'errRead'              : 'Kan \"\$1\" niet lezen',
\t\t\t'errWrite'             : 'Kan niet schrijven in \"\$1\"',
\t\t\t'errPerm'              : 'Toegang geweigerd',
\t\t\t'errLocked'            : '\"\$1\" is vergrendeld en kan niet hernoemd, verplaats of verwijderd worden',
\t\t\t'errExists'            : 'Bestand \"\$1\" bestaat al',
\t\t\t'errInvName'           : 'Ongeldige bestandsnaam',
\t\t\t'errFolderNotFound'    : 'Map niet gevonden',
\t\t\t'errFileNotFound'      : 'Bestand niet gevonden',
\t\t\t'errTrgFolderNotFound' : 'Doelmap \"\$1\" niet gevonden',
\t\t\t'errPopup'             : 'De browser heeft voorkomen dat de pop-up is geopend. Pas de browser instellingen aan om de popup te kunnen openen',
\t\t\t'errMkdir'             : 'Kan map \"\$1\" niet aanmaken',
\t\t\t'errMkfile'            : 'Kan bestand \"\$1\" niet aanmaken',
\t\t\t'errRename'            : 'Kan \"\$1\" niet hernoemen',
\t\t\t'errCopyFrom'          : 'Bestanden kopiëren van \"\$1\" is niet toegestaan',
\t\t\t'errCopyTo'            : 'Bestanden kopiëren naar \"\$1\" is niet toegestaan',
\t\t\t'errMkOutLink'         : 'Kan geen link maken buiten de hoofdmap', // from v2.1 added 03.10.2015
\t\t\t'errUpload'            : 'Upload fout',  // old name - errUploadCommon
\t\t\t'errUploadFile'        : 'Kan \"\$1\" niet uploaden', // old name - errUpload
\t\t\t'errUploadNoFiles'     : 'Geen bestanden gevonden om te uploaden',
\t\t\t'errUploadTotalSize'   : 'Data overschrijdt de maximale grootte', // old name - errMaxSize
\t\t\t'errUploadFileSize'    : 'Bestand overschrijdt de maximale grootte', //  old name - errFileMaxSize
\t\t\t'errUploadMime'        : 'Bestandstype niet toegestaan',
\t\t\t'errUploadTransfer'    : '\"\$1\" overdrachtsfout',
\t\t\t'errUploadTemp'        : 'Kan geen tijdelijk bestand voor de upload maken', // from v2.1 added 26.09.2015
\t\t\t'errNotReplace'        : 'Object \"\$1\" bestaat al op deze locatie en kan niet vervangen worden door een ander type object', // new
\t\t\t'errReplace'           : 'Kan \"\$1\" niet vervangen',
\t\t\t'errSave'              : 'Kan \"\$1\" niet opslaan',
\t\t\t'errCopy'              : 'Kan \"\$1\" niet kopiëren',
\t\t\t'errMove'              : 'Kan \"\$1\" niet verplaatsen',
\t\t\t'errCopyInItself'      : 'Kan \"\$1\" niet in zichzelf kopiëren',
\t\t\t'errRm'                : 'Kan \"\$1\" niet verwijderen',
\t\t\t'errRmSrc'             : 'Kan bronbestanden niet verwijderen',
\t\t\t'errExtract'           : 'Kan de bestanden van \"\$1\" niet uitpakken',
\t\t\t'errArchive'           : 'Kan het archief niet maken',
\t\t\t'errArcType'           : 'Archief type is niet ondersteund',
\t\t\t'errNoArchive'         : 'Bestand is geen archief of geen ondersteund archief type',
\t\t\t'errCmdNoSupport'      : 'Backend ondersteund dit commando niet',
\t\t\t'errReplByChild'       : 'De map \"\$1\" kan niet vervangen worden door een item uit die map',
\t\t\t'errArcSymlinks'       : 'Om veiligheidsredenen kan een bestand met symlinks of bestanden met niet toegestane namen niet worden uitgepakt ', // edited 24.06.2012
\t\t\t'errArcMaxSize'        : 'Archief overschrijdt de maximale bestandsgrootte',
\t\t\t'errResize'            : 'Kan het formaat van \"\$1\" niet wijzigen',
\t\t\t'errResizeDegree'      : 'Ongeldig aantal graden om te draaien',  // added 7.3.2013
\t\t\t'errResizeRotate'      : 'Afbeelding kan niet gedraaid worden',  // added 7.3.2013
\t\t\t'errResizeSize'        : 'Ongeldig afbeelding formaat',  // added 7.3.2013
\t\t\t'errResizeNoChange'    : 'Afbeelding formaat is niet veranderd',  // added 7.3.2013
\t\t\t'errUsupportType'      : 'Bestandstype wordt niet ondersteund',
\t\t\t'errNotUTF8Content'    : 'Bestand \"\$1\" is niet in UTF-8 and kan niet aangepast worden',  // added 9.11.2011
\t\t\t'errNetMount'          : 'Kan \"\$1\" niet mounten', // added 17.04.2012
\t\t\t'errNetMountNoDriver'  : 'Niet ondersteund protocol',     // added 17.04.2012
\t\t\t'errNetMountFailed'    : 'Mount mislukt',         // added 17.04.2012
\t\t\t'errNetMountHostReq'   : 'Host is verplicht', // added 18.04.2012
\t\t\t'errSessionExpires'    : 'Uw sessie is verlopen vanwege inactiviteit',
\t\t\t'errCreatingTempDir'   : 'Kan de tijdelijke map niet aanmaken: \"\$1\" ',
\t\t\t'errFtpDownloadFile'   : 'Kan het bestand niet downloaden vanaf FTP: \"\$1\"',
\t\t\t'errFtpUploadFile'     : 'Kan het bestand niet uploaden naar FTP: \"\$1\"',
\t\t\t'errFtpMkdir'          : 'Kan het externe map niet aanmaken op de FTP-server: \"\$1\"',
\t\t\t'errArchiveExec'       : 'Er is een fout opgetreden bij het archivering van de bestanden: \"\$1\" ',
\t\t\t'errExtractExec'       : 'Er is een fout opgetreden bij het uitpakken van de bestanden: \"\$1\" ',
\t\t\t'errNetUnMount'        : 'Kan niet unmounten', // from v2.1 added 30.04.2012
\t\t\t'errConvUTF8'          : 'Niet om te zetten naar UTF-8', // from v2.1 added 08.04.2014
\t\t\t'errFolderUpload'      : 'Probeer een moderne browser als je bestanden wil uploaden', // from v2.1 added 26.6.2015
\t\t\t'errSearchTimeout'     : 'Time-out bij zoeken naar \"\$1\". Zoekresulataat is niet compleet', // from v2.1 added 12.1.2016
\t\t\t'errReauthRequire'     : 'Je moet je opnieuw aanmelden', // from v2.1.10 added 24.3.2016
\t\t\t'errMaxTargets'        : 'Max aantal selecteerbare items is \$1', // from v2.1.17 added 17.10.2016
\t\t\t'errRestore'           : 'Kan niet herstellen uit prullenbak, weet niet waar het heen moet', // from v2.1.24 added 3.5.2017
\t\t\t'errEditorNotFound'    : 'Geen editor voor dit type bestand', // from v2.1.25 added 23.5.2017
\t\t\t'errServerError'       : 'Fout opgetreden op de server', // from v2.1.25 added 16.6.2017
\t\t\t'errEmpty'             : 'Kan folder \"\$1\" niet legen', // from v2.1.25 added 22.6.2017
\t\t\t'moreErrors'           : 'Er zijn nog \$1 fouten', // from v2.1.44 added 9.12.2018

\t\t\t/******************************* commands names ********************************/
\t\t\t'cmdarchive'           : 'Maak archief',
\t\t\t'cmdback'              : 'Vorige',
\t\t\t'cmdcopy'              : 'Kopieer',
\t\t\t'cmdcut'               : 'Knip',
\t\t\t'cmddownload'          : 'Download',
\t\t\t'cmdduplicate'         : 'Dupliceer',
\t\t\t'cmdedit'              : 'Pas bestand aan',
\t\t\t'cmdextract'           : 'Bestanden uit archief uitpakken',
\t\t\t'cmdforward'           : 'Volgende',
\t\t\t'cmdgetfile'           : 'Kies bestanden',
\t\t\t'cmdhelp'              : 'Over deze software',
\t\t\t'cmdhome'              : 'Home',
\t\t\t'cmdinfo'              : 'Bekijk info',
\t\t\t'cmdmkdir'             : 'Nieuwe map',
\t\t\t'cmdmkdirin'           : 'In nieuwe map', // from v2.1.7 added 19.2.2016
\t\t\t'cmdmkfile'            : 'Nieuw bestand',
\t\t\t'cmdopen'              : 'Open',
\t\t\t'cmdpaste'             : 'Plak',
\t\t\t'cmdquicklook'         : 'Voorbeeld',
\t\t\t'cmdreload'            : 'Vernieuwen',
\t\t\t'cmdrename'            : 'Naam wijzigen',
\t\t\t'cmdrm'                : 'Verwijder',
\t\t\t'cmdtrash'             : 'Naar prullenbak', //from v2.1.24 added 29.4.2017
\t\t\t'cmdrestore'           : 'Herstellen', //from v2.1.24 added 3.5.2017
\t\t\t'cmdsearch'            : 'Zoek bestanden',
\t\t\t'cmdup'                : 'Ga een map hoger',
\t\t\t'cmdupload'            : 'Upload bestanden',
\t\t\t'cmdview'              : 'Bekijk',
\t\t\t'cmdresize'            : 'Formaat wijzigen',
\t\t\t'cmdsort'              : 'Sorteren',
\t\t\t'cmdnetmount'          : 'Mount netwerk volume', // added 18.04.2012
\t\t\t'cmdnetunmount'        : 'Unmount', // from v2.1 added 30.04.2012
\t\t\t'cmdplaces'            : 'Naar Plaatsen', // added 28.12.2014
\t\t\t'cmdchmod'             : 'Wijzig modus', // from v2.1 added 20.6.2015
\t\t\t'cmdopendir'           : 'Open een map', // from v2.1 added 13.1.2016
\t\t\t'cmdcolwidth'          : 'Herstel kolombreedtes', // from v2.1.13 added 12.06.2016
\t\t\t'cmdfullscreen'        : 'Volledig scherm', // from v2.1.15 added 03.08.2016
\t\t\t'cmdmove'              : 'Verplaatsen', // from v2.1.15 added 21.08.2016
\t\t\t'cmdempty'             : 'Map leegmaken', // from v2.1.25 added 22.06.2017
\t\t\t'cmdundo'              : 'Undo', // from v2.1.27 added 31.07.2017
\t\t\t'cmdredo'              : 'Redo', // from v2.1.27 added 31.07.2017
\t\t\t'cmdpreference'        : 'Voorkeuren', // from v2.1.27 added 03.08.2017
\t\t\t'cmdselectall'         : 'Selecteer alles', // from v2.1.28 added 15.08.2017
\t\t\t'cmdselectnone'        : 'Deselecteer alles', // from v2.1.28 added 15.08.2017
\t\t\t'cmdselectinvert'      : 'Selectie omkeren', // from v2.1.28 added 15.08.2017
\t\t\t'cmdopennew'           : 'Open in nieuw venster', // from v2.1.38 added 3.4.2018
\t\t\t'cmdhide'              : 'Verberg (voorkeur)', // from v2.1.41 added 24.7.2018


\t\t\t/*********************************** buttons ***********************************/
\t\t\t'btnClose'             : 'Sluit',
\t\t\t'btnSave'              : 'Opslaan',
\t\t\t'btnRm'                : 'Verwijder',
\t\t\t'btnApply'             : 'Toepassen',
\t\t\t'btnCancel'            : 'Annuleren',
\t\t\t'btnNo'                : 'Nee',
\t\t\t'btnYes'               : 'Ja',
\t\t\t'btnMount'             : 'Mount',  // added 18.04.2012
\t\t\t'btnApprove'           : 'Ga naar \$1 & keur goed', // from v2.1 added 26.04.2012
\t\t\t'btnUnmount'           : 'Unmount', // from v2.1 added 30.04.2012
\t\t\t'btnConv'              : 'Converteer', // from v2.1 added 08.04.2014
\t\t\t'btnCwd'               : 'Hier',      // from v2.1 added 22.5.2015
\t\t\t'btnVolume'            : 'Volume',    // from v2.1 added 22.5.2015
\t\t\t'btnAll'               : 'Alles',       // from v2.1 added 22.5.2015
\t\t\t'btnMime'              : 'MIME Type', // from v2.1 added 22.5.2015
\t\t\t'btnFileName'          : 'Bestandsnaam',  // from v2.1 added 22.5.2015
\t\t\t'btnSaveClose'         : 'Opslaan & Sluiten', // from v2.1 added 12.6.2015
\t\t\t'btnBackup'            : 'Back-up', // fromv2.1 added 28.11.2015
\t\t\t'btnRename'            : 'Hernoemen',      // from v2.1.24 added 6.4.2017
\t\t\t'btnRenameAll'         : 'Hernoem alles', // from v2.1.24 added 6.4.2017
\t\t\t'btnPrevious'          : 'Vorige (\$1/\$2)', // from v2.1.24 added 11.5.2017
\t\t\t'btnNext'              : 'Volgende (\$1/\$2)', // from v2.1.24 added 11.5.2017
\t\t\t'btnSaveAs'            : 'Opslaan als', // from v2.1.25 added 24.5.2017

\t\t\t/******************************** notifications ********************************/
\t\t\t'ntfopen'              : 'Bezig met openen van map',
\t\t\t'ntffile'              : 'Bezig met openen bestand',
\t\t\t'ntfreload'            : 'Herladen map inhoud',
\t\t\t'ntfmkdir'             : 'Bezig met map maken',
\t\t\t'ntfmkfile'            : 'Bezig met Bestanden maken',
\t\t\t'ntfrm'                : 'Verwijderen bestanden',
\t\t\t'ntfcopy'              : 'Kopieer bestanden',
\t\t\t'ntfmove'              : 'Verplaats bestanden',
\t\t\t'ntfprepare'           : 'Voorbereiden kopiëren',
\t\t\t'ntfrename'            : 'Hernoem bestanden',
\t\t\t'ntfupload'            : 'Bestanden uploaden actief',
\t\t\t'ntfdownload'          : 'Bestanden downloaden actief',
\t\t\t'ntfsave'              : 'Bestanden opslaan',
\t\t\t'ntfarchive'           : 'Archief aan het maken',
\t\t\t'ntfextract'           : 'Bestanden uitpakken actief',
\t\t\t'ntfsearch'            : 'Zoeken naar bestanden',
\t\t\t'ntfresize'            : 'Formaat wijzigen van afbeeldingen',
\t\t\t'ntfsmth'              : 'Iets aan het doen',
\t\t\t'ntfloadimg'           : 'Laden van plaatje',
\t\t\t'ntfnetmount'          : 'Mounten van netwerk volume', // added 18.04.2012
\t\t\t'ntfnetunmount'        : 'Unmounten van netwerk volume', // from v2.1 added 30.04.2012
\t\t\t'ntfdim'               : 'Opvragen afbeeldingen dimensies', // added 20.05.2013
\t\t\t'ntfreaddir'           : 'Map informatie lezen', // from v2.1 added 01.07.2013
\t\t\t'ntfurl'               : 'URL van link ophalen', // from v2.1 added 11.03.2014
\t\t\t'ntfchmod'             : 'Bestandsmodus wijzigen', // from v2.1 added 20.6.2015
\t\t\t'ntfpreupload'         : 'Upload bestandsnaam verifiëren', // from v2.1 added 31.11.2015
\t\t\t'ntfzipdl'             : 'Zipbestand aan het maken', // from v2.1.7 added 23.1.2016
\t\t\t'ntfparents'           : 'Verzamelen padinformatie', // from v2.1.17 added 2.11.2016
\t\t\t'ntfchunkmerge'        : 'Aan het verwerken', // from v2.1.17 added 2.11.2016
\t\t\t'ntftrash'             : 'Aan het verwijderen', // from v2.1.24 added 2.5.2017
\t\t\t'ntfrestore'           : 'Aan het herstellen', // from v2.1.24 added 3.5.2017
\t\t\t'ntfchkdir'            : 'Controleren doelmap', // from v2.1.24 added 3.5.2017
\t\t\t'ntfundo'              : 'Vorige bewerking ongedaan maken', // from v2.1.27 added 31.07.2017
\t\t\t'ntfredo'              : 'Opnieuw doen', // from v2.1.27 added 31.07.2017
\t\t\t'ntfchkcontent'        : 'Inhoud controleren', // from v2.1.41 added 3.8.2018

\t\t\t/*********************************** volumes *********************************/
\t\t\t'volume_Trash'         : 'Prullenbak', //from v2.1.24 added 29.4.2017

\t\t\t/************************************ dates **********************************/
\t\t\t'dateUnknown'          : 'onbekend',
\t\t\t'Today'                : 'Vandaag',
\t\t\t'Yesterday'            : 'Gisteren',
\t\t\t'msJan'                : 'Jan',
\t\t\t'msFeb'                : 'Feb',
\t\t\t'msMar'                : 'Mar',
\t\t\t'msApr'                : 'Apr',
\t\t\t'msMay'                : 'Mei',
\t\t\t'msJun'                : 'Jun',
\t\t\t'msJul'                : 'Jul',
\t\t\t'msAug'                : 'Aug',
\t\t\t'msSep'                : 'Sep',
\t\t\t'msOct'                : 'Okt',
\t\t\t'msNov'                : 'Nov',
\t\t\t'msDec'                : 'Dec',
\t\t\t'January'              : 'Januari',
\t\t\t'February'             : 'Februari',
\t\t\t'March'                : 'Maart',
\t\t\t'April'                : 'April',
\t\t\t'May'                  : 'Mei',
\t\t\t'June'                 : 'Juni',
\t\t\t'July'                 : 'Juli',
\t\t\t'August'               : 'Augustus',
\t\t\t'September'            : 'September',
\t\t\t'October'              : 'Oktober',
\t\t\t'November'             : 'November',
\t\t\t'December'             : 'December',
\t\t\t'Sunday'               : 'Zondag',
\t\t\t'Monday'               : 'Maandag',
\t\t\t'Tuesday'              : 'Dinsdag',
\t\t\t'Wednesday'            : 'Woensdag',
\t\t\t'Thursday'             : 'Donderdag',
\t\t\t'Friday'               : 'Vrijdag',
\t\t\t'Saturday'             : 'Zaterdag',
\t\t\t'Sun'                  : 'Zo',
\t\t\t'Mon'                  : 'Ma',
\t\t\t'Tue'                  : 'Di',
\t\t\t'Wed'                  : 'Wo',
\t\t\t'Thu'                  : 'Do',
\t\t\t'Fri'                  : 'Vr',
\t\t\t'Sat'                  : 'Za',

\t\t\t/******************************** sort variants ********************************/
\t\t\t'sortname'             : 'op naam',
\t\t\t'sortkind'             : 'op type',
\t\t\t'sortsize'             : 'op grootte',
\t\t\t'sortdate'             : 'op datum',
\t\t\t'sortFoldersFirst'     : 'Mappen eerst',
\t\t\t'sortperm'             : 'op rechten', // from v2.1.13 added 13.06.2016
\t\t\t'sortmode'             : 'op mode',       // from v2.1.13 added 13.06.2016
\t\t\t'sortowner'            : 'op eigenaar',      // from v2.1.13 added 13.06.2016
\t\t\t'sortgroup'            : 'op groep',      // from v2.1.13 added 13.06.2016
\t\t\t'sortAlsoTreeview'     : 'Als boom',  // from v2.1.15 added 01.08.2016

\t\t\t/********************************** new items **********************************/
\t\t\t'untitled file.txt'    : 'NieuwBestand.txt', // added 10.11.2015
\t\t\t'untitled folder'      : 'NieuweMap',   // added 10.11.2015
\t\t\t'Archive'              : 'NieuwArchief',  // from v2.1 added 10.11.2015
\t\t\t'untitled file'        : 'NieuwBestand.\$1',  // from v2.1.41 added 6.8.2018
\t\t\t'extentionfile'        : '\$1: Bestand',    // from v2.1.41 added 6.8.2018
\t\t\t'extentiontype'        : '\$1: \$2',      // from v2.1.43 added 17.10.2018

\t\t\t/********************************** messages **********************************/
\t\t\t'confirmReq'           : 'Bevestiging nodig',
\t\t\t'confirmRm'            : 'Weet u zeker dat u deze bestanden wil verwijderen?<br/>Deze actie kan niet ongedaan gemaakt worden!',
\t\t\t'confirmRepl'          : 'Oud bestand vervangen door het nieuwe bestand?',
\t\t\t'confirmRest'          : 'Replace existing item with the item in trash?', // fromv2.1.24 added 5.5.2017\t\t\t\t\t\t
\t\t\t'confirmConvUTF8'      : 'Niet in UTF-8<br/>Converteren naar UTF-8?<br/>De inhoud wordt UTF-8 door op te slaan na de conversie', // from v2.1 added 08.04.2014
\t\t\t'confirmNonUTF8'  : 'Character encoding of this file couldn\\'t be detected. It need to temporarily convert to UTF-8 for editting.<br/>Please select character encoding of this file.', // from v2.1.19 added 28.11.2016
\t\t\t'confirmNotSave'       : 'Het is aangepast.<br/>Wijzigingen gaan verloren als je niet opslaat', // from v2.1 added 15.7.2015
\t\t\t'confirmTrash'    : 'Are you sure you want to move items to trash bin?', //from v2.1.24 added 29.4.2017
\t\t\t'apllyAll'             : 'Toepassen op alles',
\t\t\t'name'                 : 'Naam',
\t\t\t'size'                 : 'Grootte',
\t\t\t'perms'                : 'Rechten',
\t\t\t'modify'               : 'Aangepast',
\t\t\t'kind'                 : 'Type',
\t\t\t'read'                 : 'lees',
\t\t\t'write'                : 'schrijf',
\t\t\t'noaccess'             : 'geen toegang',
\t\t\t'and'                  : 'en',
\t\t\t'unknown'              : 'onbekend',
\t\t\t'selectall'            : 'Selecteer alle bestanden',
\t\t\t'selectfiles'          : 'Selecteer bestand(en)',
\t\t\t'selectffile'          : 'Selecteer eerste bestand',
\t\t\t'selectlfile'          : 'Selecteer laatste bestand',
\t\t\t'viewlist'             : 'Lijst weergave',
\t\t\t'viewicons'            : 'Icoon weergave',
\t\t\t'viewSmall'            : 'Klein', // from v2.1.39 added 22.5.2018
\t\t\t'viewMedium'           : 'Middelgroot', // from v2.1.39 added 22.5.2018
\t\t\t'viewLarge'            : 'Groot', // from v2.1.39 added 22.5.2018
\t\t\t'viewExtraLarge'       : 'Extra groot', // from v2.1.39 added 22.5.2018
\t\t\t'places'               : 'Plaatsen',
\t\t\t'calc'                 : 'Bereken',
\t\t\t'path'                 : 'Pad',
\t\t\t'aliasfor'             : 'Alias voor',
\t\t\t'locked'               : 'Vergrendeld',
\t\t\t'dim'                  : 'Dimensies',
\t\t\t'files'                : 'Bestanden',
\t\t\t'folders'              : 'Mappen',
\t\t\t'items'                : 'Items',
\t\t\t'yes'                  : 'ja',
\t\t\t'no'                   : 'nee',
\t\t\t'link'                 : 'Link',
\t\t\t'searcresult'          : 'Zoek resultaten',
\t\t\t'selected'             : 'geselecteerde items',
\t\t\t'about'                : 'Over',
\t\t\t'shortcuts'            : 'Snelkoppelingen',
\t\t\t'help'                 : 'Help',
\t\t\t'webfm'                : 'Web bestandsmanager',
\t\t\t'ver'                  : 'Versie',
\t\t\t'protocolver'          : 'protocol versie',
\t\t\t'homepage'             : 'Project home',
\t\t\t'docs'                 : 'Documentatie',
\t\t\t'github'               : 'Fork ons op Github',
\t\t\t'twitter'              : 'Volg ons op twitter',
\t\t\t'facebook'             : 'Wordt lid op facebook',
\t\t\t'team'                 : 'Team',
\t\t\t'chiefdev'             : 'Hoofd ontwikkelaar',
\t\t\t'developer'            : 'ontwikkelaar',
\t\t\t'contributor'          : 'bijdrager',
\t\t\t'maintainer'           : 'onderhouder',
\t\t\t'translator'           : 'vertaler',
\t\t\t'icons'                : 'Iconen',
\t\t\t'dontforget'           : 'En vergeet je handdoek niet!',
\t\t\t'shortcutsof'          : 'Snelkoppelingen uitgeschakeld',
\t\t\t'dropFiles'            : 'Sleep hier uw bestanden heen',
\t\t\t'or'                   : 'of',
\t\t\t'selectForUpload'      : 'Selecteer bestanden om te uploaden',
\t\t\t'moveFiles'            : 'Verplaats bestanden',
\t\t\t'copyFiles'            : 'Kopieer bestanden',
\t\t\t'restoreFiles'         : 'Items herstellen', // from v2.1.24 added 5.5.2017
\t\t\t'rmFromPlaces'         : 'Verwijder uit Plaatsen',
\t\t\t'aspectRatio'          : 'Aspect ratio',
\t\t\t'scale'                : 'Schaal',
\t\t\t'width'                : 'Breedte',
\t\t\t'height'               : 'Hoogte',
\t\t\t'resize'               : 'Verkleinen',
\t\t\t'crop'                 : 'Bijsnijden',
\t\t\t'rotate'               : 'Draaien',
\t\t\t'rotate-cw'            : 'Draai 90 graden rechtsom',
\t\t\t'rotate-ccw'           : 'Draai 90 graden linksom',
\t\t\t'degree'               : '°',
\t\t\t'netMountDialogTitle'  : 'Mount netwerk volume', // added 18.04.2012
\t\t\t'protocol'             : 'Protocol', // added 18.04.2012
\t\t\t'host'                 : 'Host', // added 18.04.2012
\t\t\t'port'                 : 'Poort', // added 18.04.2012
\t\t\t'user'                 : 'Gebruikersnaams', // added 18.04.2012
\t\t\t'pass'                 : 'Wachtwoord', // added 18.04.2012
\t\t\t'confirmUnmount'       : 'Weet u zeker dat u \$1 wil unmounten?',  // from v2.1 added 30.04.2012
\t\t\t'dropFilesBrowser'     : 'Sleep of plak bestanden vanuit de browser', // from v2.1 added 30.05.2012
\t\t\t'dropPasteFiles'       : 'Sleep of plak bestanden hier', // from v2.1 added 07.04.2014
\t\t\t'encoding'             : 'Encodering', // from v2.1 added 19.12.2014
\t\t\t'locale'               : 'Localisatie',   // from v2.1 added 19.12.2014
\t\t\t'searchTarget'         : 'Doel: \$1',                // from v2.1 added 22.5.2015
\t\t\t'searchMime'           : 'Zoek op invoer MIME Type', // from v2.1 added 22.5.2015
\t\t\t'owner'                : 'Eigenaar', // from v2.1 added 20.6.2015
\t\t\t'group'                : 'Groep', // from v2.1 added 20.6.2015
\t\t\t'other'                : 'Overig', // from v2.1 added 20.6.2015
\t\t\t'execute'              : 'Uitvoeren', // from v2.1 added 20.6.2015
\t\t\t'perm'                 : 'Rechten', // from v2.1 added 20.6.2015
\t\t\t'mode'                 : 'Modus', // from v2.1 added 20.6.2015
\t\t\t'emptyFolder'          : 'Map is leeg', // from v2.1.6 added 30.12.2015
\t\t\t'emptyFolderDrop'      : 'Map is leeg\\\\A Sleep hier naar toe om toe te voegen', // from v2.1.6 added 30.12.2015
\t\t\t'emptyFolderLTap'      : 'Map is leeg\\\\A Lang ingedrukt houden om toe te voegen', // from v2.1.6 added 30.12.2015
\t\t\t'quality'              : 'Kwaliteit', // from v2.1.6 added 5.1.2016
\t\t\t'autoSync'             : 'Auto sync',  // from v2.1.6 added 10.1.2016
\t\t\t'moveUp'               : 'Omhoog',  // from v2.1.6 added 18.1.2016
\t\t\t'getLink'              : 'Geef link', // from v2.1.7 added 9.2.2016
\t\t\t'selectedItems'        : 'Geselecteerde items (\$1)', // from v2.1.7 added 2.19.2016
\t\t\t'folderId'             : 'Map ID', // from v2.1.10 added 3.25.2016
\t\t\t'offlineAccess'        : 'Toestaan offline toegang', // from v2.1.10 added 3.25.2016
\t\t\t'reAuth'               : 'Opnieuw autenticeren', // from v2.1.10 added 3.25.2016
\t\t\t'nowLoading'           : 'Laden..', // from v2.1.12 added 4.26.2016
\t\t\t'openMulti'            : 'Open meerdere bestanden', // from v2.1.12 added 5.14.2016
\t\t\t'openMultiConfirm'     : 'Je probeert het \$1 bestanden te openen. Weet je zeker dat je dat in je browser wil doen?', // from v2.1.12 added 5.14.2016
\t\t\t'emptySearch'          : 'Geen zoekresultaten', // from v2.1.12 added 5.16.2016
\t\t\t'editingFile'          : 'Bestand wordt bewerkt', // from v2.1.13 added 6.3.2016
\t\t\t'hasSelected'          : 'Je hebt \$1 items geselecteerd', // from v2.1.13 added 6.3.2016
\t\t\t'hasClipboard'         : 'Je hebt \$1 items op het clipboard', // from v2.1.13 added 6.3.2016
\t\t\t'incSearchOnly'        : 'Verder zoeken kan alleen vanuit huidige view', // from v2.1.13 added 6.30.2016
\t\t\t'reinstate'            : 'Herstellen', // from v2.1.15 added 3.8.2016
\t\t\t'complete'             : '\$1 compleet', // from v2.1.15 added 21.8.2016
\t\t\t'contextmenu'          : 'Context menu', // from v2.1.15 added 9.9.2016
\t\t\t'pageTurning'          : 'Pagina omslaan', // from v2.1.15 added 10.9.2016
\t\t\t'volumeRoots'          : 'Volume roots', // from v2.1.16 added 16.9.2016
\t\t\t'reset'                : 'Reset', // from v2.1.16 added 1.10.2016
\t\t\t'bgcolor'              : 'Achtergrondkleur', // from v2.1.16 added 1.10.2016
\t\t\t'colorPicker'          : 'Kleurkiezer', // from v2.1.16 added 1.10.2016
\t\t\t'8pxgrid'              : '8px Grid', // from v2.1.16 added 4.10.2016
\t\t\t'enabled'              : 'Actief', // from v2.1.16 added 4.10.2016
\t\t\t'disabled'             : 'Inactief', // from v2.1.16 added 4.10.2016
\t\t\t'emptyIncSearch'       : 'Zoekresultaten zijn leeg in actuele view\\\\ADruk [Enter] om zoekgebied uit te breiden', // from v2.1.16 added 5.10.2016
\t\t\t'emptyLetSearch'       : 'Zoeken op eerste letter is leeg in actuele view', // from v2.1.23 added 24.3.2017
\t\t\t'textLabel'            : 'Tekstlabel', // from v2.1.17 added 13.10.2016
\t\t\t'minsLeft'             : '\$1 minuten over', // from v2.1.17 added 13.11.2016
\t\t\t'openAsEncoding'       : 'Opnieuw openen met geselecteerde encoding', // from v2.1.19 added 2.12.2016
\t\t\t'saveAsEncoding'       : 'Opslaan met geselecteerde encoding', // from v2.1.19 added 2.12.2016
\t\t\t'selectFolder'         : 'Selecteer map', // from v2.1.20 added 13.12.2016
\t\t\t'firstLetterSearch'    : 'Zoeken op eerste letter', // from v2.1.23 added 24.3.2017
\t\t\t'presets'              : 'Voorkeuren', // from v2.1.25 added 26.5.2017
\t\t\t'tooManyToTrash'       : 'Teveel voor in de prullenbak', // from v2.1.25 added 9.6.2017
\t\t\t'TextArea'             : 'Tekstgebied', // from v2.1.25 added 14.6.2017
\t\t\t'folderToEmpty'        : 'Map \"\$1\" legen', // from v2.1.25 added 22.6.2017
\t\t\t'filderIsEmpty'        : 'Er zijn geen items in map \"\$1\"', // from v2.1.25 added 22.6.2017
\t\t\t'preference'           : 'Voorkeur', // from v2.1.26 added 28.6.2017
\t\t\t'language'             : 'Taal', // from v2.1.26 added 28.6.2017
\t\t\t'clearBrowserData'     : 'Initialiseer instellingen van deze browser', // from v2.1.26 added 28.6.2017
\t\t\t'toolbarPref'          : 'Toolbar instellingen', // from v2.1.27 added 2.8.2017
\t\t\t'charsLeft'            : '... \$1 tekens over',  // from v2.1.29 added 30.8.2017
\t\t\t'sum'                  : 'Totaal', // from v2.1.29 added 28.9.2017
\t\t\t'roughFileSize'        : 'Geschatte bestandsgrootte', // from v2.1.30 added 2.11.2017
\t\t\t'autoFocusDialog'      : 'Focus op het dialoogelement met mouseover',  // from v2.1.30 added 2.11.2017
\t\t\t'select'               : 'Selecteren', // from v2.1.30 added 23.11.2017
\t\t\t'selectAction'         : 'Actie als bestand is geselecteerd', // from v2.1.30 added 23.11.2017
\t\t\t'useStoredEditor'      : 'Open met laatstgebruikte editor', // from v2.1.30 added 23.11.2017
\t\t\t'selectinvert'         : 'Selectie omkeren', // from v2.1.30 added 25.11.2017
\t\t\t'renameMultiple'       : 'Weet je zeker dat je \$1 items wil hernoemen naar \$2?<br/>Dit kan niet ongedaan worden gemaakt!', // from v2.1.31 added 4.12.2017
\t\t\t'batchRename'          : 'Batch hernoemen', // from v2.1.31 added 8.12.2017
\t\t\t'plusNumber'           : '+ Nummer', // from v2.1.31 added 8.12.2017
\t\t\t'asPrefix'             : 'Voeg prefix toe', // from v2.1.31 added 8.12.2017
\t\t\t'asSuffix'             : 'Voeg suffix toe', // from v2.1.31 added 8.12.2017
\t\t\t'changeExtention'      : 'Verander extentie', // from v2.1.31 added 8.12.2017
\t\t\t'columnPref'           : 'Kolominstelllingen (List view)', // from v2.1.32 added 6.2.2018
\t\t\t'reflectOnImmediate'   : 'Aanpassingen worden direct toegepast op het archief', // from v2.1.33 added 2.3.2018
\t\t\t'reflectOnUnmount'     : 'Aanpassingen worden pas toegepast na re-mount van dit volume', // from v2.1.33 added 2.3.2018
\t\t\t'unmountChildren'      : 'Deze volume(s) worden ook unmounted. Weet je het zeker?', // from v2.1.33 added 5.3.2018
\t\t\t'selectionInfo'        : 'Selectie informatie', // from v2.1.33 added 7.3.2018
\t\t\t'hashChecker'          : 'Algoritmes voor file hash', // from v2.1.33 added 10.3.2018
\t\t\t'infoItems'            : 'Informatie Items (Selectie Info Panel)', // from v2.1.38 added 28.3.2018
\t\t\t'pressAgainToExit'     : 'Druk nogmaals om te eindigen', // from v2.1.38 added 1.4.2018
\t\t\t'toolbar'              : 'Toolbar', // from v2.1.38 added 4.4.2018
\t\t\t'workspace'            : 'Work Space', // from v2.1.38 added 4.4.2018
\t\t\t'dialog'               : 'Dialoog', // from v2.1.38 added 4.4.2018
\t\t\t'all'                  : 'Alles', // from v2.1.38 added 4.4.2018
\t\t\t'iconSize'             : 'Icoongrootte (Icons view)', // from v2.1.39 added 7.5.2018
\t\t\t'editorMaximized'      : 'Open de maximale editor', // from v2.1.40 added 30.6.2018
\t\t\t'editorConvNoApi'      : 'Conversie via API is niet beschikbaar, converteer aub op de website', //from v2.1.40 added 8.7.2018
\t\t\t'editorConvNeedUpload' : 'After conversion, you must be upload with the item URL or a downloaded file to save the converted file', //from v2.1.40 added 8.7.2018
\t\t\t'convertOn'            : 'Converteer op de site \$1', // from v2.1.40 added 10.7.2018
\t\t\t'integrations'         : 'Integratie', // from v2.1.40 added 11.7.2018
\t\t\t'integrationWith'      : 'Deze elFinder heeft de volgende externe services. Controleer de voorwaarden, privacy policy, etc. voor gebruik', // from v2.1.40 added 11.7.2018
\t\t\t'showHidden'           : 'Toon verborgen items', // from v2.1.41 added 24.7.2018
\t\t\t'hideHidden'           : 'Verberg verborgen items', // from v2.1.41 added 24.7.2018
\t\t\t'toggleHidden'         : 'Toon/verberg verborgen items', // from v2.1.41 added 24.7.2018
\t\t\t'makefileTypes'        : 'File types die aangemaakt mogen worden', // from v2.1.41 added 7.8.2018
\t\t\t'typeOfTextfile'       : 'Type voor tekstbestand', // from v2.1.41 added 7.8.2018
\t\t\t'add'                  : 'Toevoegen', // from v2.1.41 added 7.8.2018
\t\t\t'theme'                : 'Thema', // from v2.1.43 added 19.10.2018
\t\t\t'default'              : 'Default', // from v2.1.43 added 19.10.2018
\t\t\t'description'          : 'Beschrijving', // from v2.1.43 added 19.10.2018
\t\t\t'website'              : 'Website', // from v2.1.43 added 19.10.2018
\t\t\t'author'               : 'Auteur', // from v2.1.43 added 19.10.2018
\t\t\t'email'                : 'Email', // from v2.1.43 added 19.10.2018
\t\t\t'license'              : 'Licensie', // from v2.1.43 added 19.10.2018
\t\t\t'exportToSave'         : 'Dit item kan niet worden opgeslagen, exporteer naar je pc om wijzingen te bewaren', // from v2.1.44 added 1.12.2018

\t\t\t/********************************** mimetypes **********************************/
\t\t\t'kindUnknown'          : 'Onbekend',
\t\t\t'kindRoot'             : 'Volume Root', // from v2.1.16 added 16.10.2016
\t\t\t'kindFolder'           : 'Map',
\t\t\t'kindSelects'          : 'Selecties', // from v2.1.29 added 29.8.2017
\t\t\t'kindAlias'            : 'Alias',
\t\t\t'kindAliasBroken'      : 'Verbroken alias',
\t\t\t
\t\t\t/********************************** applications **********************************/
\t\t\t'kindApp'              : 'Applicatie',
\t\t\t'kindPostscript'       : 'Postscript document',
\t\t\t'kindMsOffice'         : 'Microsoft Office document',
\t\t\t'kindMsWord'           : 'Microsoft Word document',
\t\t\t'kindMsExcel'          : 'Microsoft Excel document',
\t\t\t'kindMsPP'             : 'Microsoft Powerpoint presentation',
\t\t\t'kindOO'               : 'Open Office document',
\t\t\t'kindAppFlash'         : 'Flash applicatie',
\t\t\t'kindPDF'              : 'Portable Document Format (PDF)',
\t\t\t'kindTorrent'          : 'Bittorrent bestand',
\t\t\t'kind7z'               : '7z archief',
\t\t\t'kindTAR'              : 'TAR archief',
\t\t\t'kindGZIP'             : 'GZIP archief',
\t\t\t'kindBZIP'             : 'BZIP archief',
\t\t\t'kindXZ'               : 'XZ archief',
\t\t\t'kindZIP'              : 'ZIP archief',
\t\t\t'kindRAR'              : 'RAR archief',
\t\t\t'kindJAR'              : 'Java JAR bestand',
\t\t\t'kindTTF'              : 'True Type font',
\t\t\t'kindOTF'              : 'Open Type font',
\t\t\t'kindRPM'              : 'RPM package',
\t\t\t
\t\t\t/********************************** texts **********************************/
\t\t\t'kindText'             : 'Tekst bestand',
\t\t\t'kindTextPlain'        : 'Tekst',
\t\t\t'kindPHP'              : 'PHP bronbestand',
\t\t\t'kindCSS'              : 'Cascading style sheet',
\t\t\t'kindHTML'             : 'HTML document',
\t\t\t'kindJS'               : 'Javascript bronbestand',
\t\t\t'kindRTF'              : 'Rich Text Format',
\t\t\t'kindC'                : 'C bronbestand',
\t\t\t'kindCHeader'          : 'C header bronbestand',
\t\t\t'kindCPP'              : 'C++ bronbestand',
\t\t\t'kindCPPHeader'        : 'C++ header bronbestand',
\t\t\t'kindShell'            : 'Unix shell script',
\t\t\t'kindPython'           : 'Python bronbestand',
\t\t\t'kindJava'             : 'Java bronbestand',
\t\t\t'kindRuby'             : 'Ruby bronbestand',
\t\t\t'kindPerl'             : 'Perl bronbestand',
\t\t\t'kindSQL'              : 'SQL bronbestand',
\t\t\t'kindXML'              : 'XML document',
\t\t\t'kindAWK'              : 'AWK bronbestand',
\t\t\t'kindCSV'              : 'Komma gescheiden waardes',
\t\t\t'kindDOCBOOK'          : 'Docbook XML document',
\t\t\t'kindMarkdown'         : 'Markdown tekst', // added 20.7.2015
\t\t\t
\t\t\t/********************************** images **********************************/
\t\t\t
\t\t\t//               
\t\t\t'kindImage'            : 'Afbeelding',
\t\t\t'kindBMP'              : 'BMP afbeelding',
\t\t\t'kindJPEG'             : 'JPEG afbeelding',
\t\t\t'kindGIF'              : 'GIF afbeelding',
\t\t\t'kindPNG'              : 'PNG afbeelding',
\t\t\t'kindTIFF'             : 'TIFF afbeelding',
\t\t\t'kindTGA'              : 'TGA afbeelding',
\t\t\t'kindPSD'              : 'Adobe Photoshop afbeelding',
\t\t\t'kindXBITMAP'          : 'X bitmap afbeelding',
\t\t\t'kindPXM'              : 'Pixelmator afbeelding',
\t\t\t
\t\t\t/********************************** media **********************************/
\t\t\t'kindAudio'            : 'Audio media',
\t\t\t'kindAudioMPEG'        : 'MPEG audio',
\t\t\t'kindAudioMPEG4'       : 'MPEG-4 audio',
\t\t\t'kindAudioMIDI'        : 'MIDI audio',
\t\t\t'kindAudioOGG'         : 'Ogg Vorbis audio',
\t\t\t'kindAudioWAV'         : 'WAV audio',
\t\t\t'AudioPlaylist'        : 'MP3 playlist',
\t\t\t'kindVideo'            : 'Video media',
\t\t\t'kindVideoDV'          : 'DV video',
\t\t\t'kindVideoMPEG'        : 'MPEG video',
\t\t\t'kindVideoMPEG4'       : 'MPEG-4 video',
\t\t\t'kindVideoAVI'         : 'AVI video',
\t\t\t'kindVideoMOV'         : 'Quick Time video',
\t\t\t'kindVideoWM'          : 'Windows Media video',
\t\t\t'kindVideoFlash'       : 'Flash video',
\t\t\t'kindVideoMKV'         : 'Matroska video',
\t\t\t'kindVideoOGG'         : 'Ogg video'
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
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.nl.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.nl.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.nl.js");
    }
}
