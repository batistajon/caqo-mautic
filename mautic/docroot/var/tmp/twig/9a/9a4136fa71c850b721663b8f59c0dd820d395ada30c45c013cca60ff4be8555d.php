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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.pl.js */
class __TwigTemplate_8b1aeb7e7e5cd3de1f28d43e85bf488fd534f59027942010254e5e4916c7d8a0 extends Template
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
 * Polskie tłumaczenie
 * @author Marcin Mikołajczyk <marcin@pjwstk.edu.pl>
 * @author Bogusław Zięba <bobi@poczta.fm>
 * @version 2020-03-29
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
\telFinder.prototype.i18.pl = {
\t\ttranslator : 'Marcin Mikołajczyk &lt;marcin@pjwstk.edu.pl&gt;, Bogusław Zięba &lt;bobi@poczta.fm&gt;, Bogusław Zięba &lt;bobi@poczta.fm&gt;',
\t\tlanguage   : 'Polski',
\t\tdirection  : 'ltr',
\t\tdateFormat : 'd.m.Y H:i', // will show like: 29.03.2020 06:58
\t\tfancyDateFormat : '\$1 H:i', // will show like: Dzisiaj 06:58
\t\tnonameDateFormat : 'ymd-His', // noname upload will show like: 200329-065813
\t\tmessages   : {

\t\t\t/********************************** errors **********************************/
\t\t\t'error'                : 'Błąd',
\t\t\t'errUnknown'           : 'Nieznany błąd.',
\t\t\t'errUnknownCmd'        : 'Nieznane polecenie.',
\t\t\t'errJqui'              : 'Niepoprawna konfiguracja jQuery UI. Muszą być zawarte komponenty selectable, draggable i droppable.',
\t\t\t'errNode'              : 'elFinder wymaga utworzenia obiektu DOM.',
\t\t\t'errURL'               : 'Niepoprawna konfiguracja elFinder! Pole URL nie jest ustawione.',
\t\t\t'errAccess'            : 'Dostęp zabroniony.',
\t\t\t'errConnect'           : 'Błąd połączenia z zapleczem.',
\t\t\t'errAbort'             : 'Połączenie zostało przerwane.',
\t\t\t'errTimeout'           : 'Upłynął czas oczekiwania na połączenie.',
\t\t\t'errNotFound'          : 'Zaplecze nie zostało znalezione.',
\t\t\t'errResponse'          : 'Nieprawidłowa odpowiedź zaplecza.',
\t\t\t'errConf'              : 'Niepoprawna konfiguracja zaplecza.',
\t\t\t'errJSON'              : 'Moduł PHP JSON nie jest zainstalowany.',
\t\t\t'errNoVolumes'         : 'Brak możliwości odczytu katalogów.',
\t\t\t'errCmdParams'         : 'Nieprawidłowe parametry dla polecenia \"\$1\".',
\t\t\t'errDataNotJSON'       : 'Dane nie są JSON.',
\t\t\t'errDataEmpty'         : 'Dane są puste.',
\t\t\t'errCmdReq'            : 'Zaplecze wymaga podania nazwy polecenia.',
\t\t\t'errOpen'              : 'Nie można otworzyć \"\$1\".',
\t\t\t'errNotFolder'         : 'Obiekt nie jest katalogiem.',
\t\t\t'errNotFile'           : 'Obiekt nie jest plikiem.',
\t\t\t'errRead'              : 'Nie można odczytać \"\$1\".',
\t\t\t'errWrite'             : 'Nie można zapisać do \"\$1\".',
\t\t\t'errPerm'              : 'Brak uprawnień.',
\t\t\t'errLocked'            : '\"\$1\" jest zablokowany i nie może zostać zmieniony, przeniesiony lub usunięty.',
\t\t\t'errExists'            : 'Plik \"\$1\" już istnieje.',
\t\t\t'errInvName'           : 'Nieprawidłowa nazwa pliku.',
\t\t\t'errInvDirname'        : 'Nieprawidłowa nazwa folderu.',  // from v2.1.24 added 12.4.2017
\t\t\t'errFolderNotFound'    : 'Nie znaleziono folderu.',
\t\t\t'errFileNotFound'      : 'Plik nie został znaleziony.',
\t\t\t'errTrgFolderNotFound' : 'Katalog docelowy \"\$1\" nie został znaleziony.',
\t\t\t'errPopup'             : 'Przeglądarka zablokowała otwarcie nowego okna. Aby otworzyć plik, zmień ustawienia przeglądarki.',
\t\t\t'errMkdir'             : 'Nie można utworzyć katalogu \"\$1\".',
\t\t\t'errMkfile'            : 'Nie można utworzyć pliku \"\$1\".',
\t\t\t'errRename'            : 'Nie można zmienić nazwy \"\$1\".',
\t\t\t'errCopyFrom'          : 'Kopiowanie z katalogu \"\$1\" nie jest możliwe.',
\t\t\t'errCopyTo'            : 'Kopiowanie do katalogu \"\$1\" nie jest możliwe.',
\t\t\t'errMkOutLink'         : 'Nie można utworzyć link do zewnętrznego katalogu głównego.', // from v2.1 added 03.10.2015
\t\t\t'errUpload'            : 'Błąd wysyłania.',  // old name - errUploadCommon
\t\t\t'errUploadFile'        : 'Nie można wysłać \"\$1\".', // old name - errUpload
\t\t\t'errUploadNoFiles'     : 'Nie znaleziono plików do wysłania.',
\t\t\t'errUploadTotalSize'   : 'Przekroczono dopuszczalny rozmiar wysyłanych plików.', // old name - errMaxSize
\t\t\t'errUploadFileSize'    : 'Plik przekracza dopuszczalny rozmiar.', //  old name - errFileMaxSize
\t\t\t'errUploadMime'        : 'Niedozwolony typ pliku.',
\t\t\t'errUploadTransfer'    : 'Błąd przesyłania \"\$1\".',
\t\t\t'errUploadTemp'        : 'Nie można wykonać tymczasowego pliku do przesłania.', // from v2.1 added 26.09.2015
\t\t\t'errNotReplace'        : 'Obiekt \"\$1\" istnieje już w tej lokalizacji i nie może być zastąpiony przez inny typ obiektu.', // new
\t\t\t'errReplace'           : 'Nie można zastąpić \"\$1\".',
\t\t\t'errSave'              : 'Nie można zapisać \"\$1\".',
\t\t\t'errCopy'              : 'Nie można skopiować \"\$1\".',
\t\t\t'errMove'              : 'Nie można przenieść \"\$1\".',
\t\t\t'errCopyInItself'      : 'Nie można skopiować \"\$1\" w miejsce jego samego.',
\t\t\t'errRm'                : 'Nie można usunąć \"\$1\".',
\t\t\t'errTrash'             : 'Nie można do kosza.', // from v2.1.24 added 30.4.2017
\t\t\t'errRmSrc'             : 'Nie należy usunąć pliku(s) źródłowy.',
\t\t\t'errExtract'           : 'Nie można wypakować plików z \"\$1\".',
\t\t\t'errArchive'           : 'Nie można utworzyć archiwum.',
\t\t\t'errArcType'           : 'Nieobsługiwany typ archiwum.',
\t\t\t'errNoArchive'         : 'Plik nie jest prawidłowym typem archiwum.',
\t\t\t'errCmdNoSupport'      : 'Zaplecze nie obsługuje tego polecenia.',
\t\t\t'errReplByChild'       : 'Nie można zastąpić katalogu \"\$1\" elementem w nim zawartym',
\t\t\t'errArcSymlinks'       : 'Ze względów bezpieczeństwa rozpakowywanie archiwów zawierających dowiązania symboliczne (symlinks) jest niedozwolone.', // edited 24.06.2012
\t\t\t'errArcMaxSize'        : 'Archiwum przekracza maksymalny dopuszczalny rozmiar.',
\t\t\t'errResize'            : 'Nie można zmienić rozmiaru \"\$1\".',
\t\t\t'errResizeDegree'      : 'Nieprawidłowy stopień obracania.',  // added 7.3.2013
\t\t\t'errResizeRotate'      : 'Nie można obrócić obrazu.',  // added 7.3.2013
\t\t\t'errResizeSize'        : 'Nieprawidłowy rozmiar obrazu.',  // added 7.3.2013
\t\t\t'errResizeNoChange'    : 'Nie zmieniono rozmiaru obrazu.',  // added 7.3.2013
\t\t\t'errUsupportType'      : 'Nieobsługiwany typ pliku.',
\t\t\t'errNotUTF8Content'    : 'Plik \"\$1\" nie jest UTF-8 i nie może być edytowany.',  // added 9.11.2011
\t\t\t'errNetMount'          : 'Nie można zamontować \"\$1\".', // added 17.04.2012
\t\t\t'errNetMountNoDriver'  : 'Nieobsługiwany protokół.',     // added 17.04.2012
\t\t\t'errNetMountFailed'    : 'Montowanie nie powiodło się.',         // added 17.04.2012
\t\t\t'errNetMountHostReq'   : 'Host wymagany.', // added 18.04.2012
\t\t\t'errSessionExpires'    : 'Twoja sesja wygasła z powodu nieaktywności.',
\t\t\t'errCreatingTempDir'   : 'Nie można utworzyć katalogu tymczasowego: \"\$1\"',
\t\t\t'errFtpDownloadFile'   : 'Nie można pobrać pliku z FTP: \"\$1\"',
\t\t\t'errFtpUploadFile'     : 'Nie można przesłać pliku na serwer FTP: \"\$1\"',
\t\t\t'errFtpMkdir'          : 'Nie można utworzyć zdalnego katalogu FTP: \"\$1\"',
\t\t\t'errArchiveExec'       : 'Błąd podczas archiwizacji plików: \"\$1\"',
\t\t\t'errExtractExec'       : 'Błąd podczas wyodrębniania plików: \"\$1\"',
\t\t\t'errNetUnMount'        : 'Nie można odmontować', // from v2.1 added 30.04.2012
\t\t\t'errConvUTF8'          : 'Nie wymienialne na UTF-8', // from v2.1 added 08.04.2014
\t\t\t'errFolderUpload'      : 'Wypróbuj Google Chrome, jeśli chcesz przesłać katalog.', // from v2.1 added 26.6.2015
\t\t\t'errSearchTimeout'     : 'Upłynął limit czasu podczas wyszukiwania \"\$1\". Wynik wyszukiwania jest częściowy.', // from v2.1 added 12.1.2016
\t\t\t'errReauthRequire'     : 'Wymagana jest ponowna autoryzacja.', // from v2.1.10 added 24.3.2016
\t\t\t'errMaxTargets'        : 'Maks. liczba elementów do wyboru to \$1.', // from v2.1.17 added 17.10.2016
\t\t\t'errRestore'           : 'Nie można przywrócić z kosza. Nie można zidentyfikować przywrócić docelowego.', // from v2.1.24 added 3.5.2017
\t\t\t'errEditorNotFound'    : 'Nie znaleziono edytora tego typu pliku.', // from v2.1.25 added 23.5.2017
\t\t\t'errServerError'       : 'Wystąpił błąd po stronie serwera .', // from v2.1.25 added 16.6.2017
\t\t\t'errEmpty'             : 'Nie można do pustego folderu \"\$1\".', // from v2.1.25 added 22.6.2017
\t\t\t'moreErrors'           : 'Jest jeszcze \$1 błąd/błędy.', // from v2.1.44 added 9.12.2018

\t\t\t/******************************* commands names ********************************/
\t\t\t'cmdarchive'   : 'Utwórz archiwum',
\t\t\t'cmdback'      : 'Wstecz',
\t\t\t'cmdcopy'      : 'Kopiuj',
\t\t\t'cmdcut'       : 'Wytnij',
\t\t\t'cmddownload'  : 'Pobierz',
\t\t\t'cmdduplicate' : 'Duplikuj',
\t\t\t'cmdedit'      : 'Edytuj plik',
\t\t\t'cmdextract'   : 'Wypakuj pliki z archiwum',
\t\t\t'cmdforward'   : 'Dalej',
\t\t\t'cmdgetfile'   : 'Wybierz pliki',
\t\t\t'cmdhelp'      : 'Informacje o programie',
\t\t\t'cmdhome'      : 'Główny',
\t\t\t'cmdinfo'      : 'Właściwości',
\t\t\t'cmdmkdir'     : 'Nowy katalog',
\t\t\t'cmdmkdirin'   : 'Do nowego katalogu', // from v2.1.7 added 19.2.2016
\t\t\t'cmdmkfile'    : 'Nowy plik',
\t\t\t'cmdopen'      : 'Otwórz',
\t\t\t'cmdpaste'     : 'Wklej',
\t\t\t'cmdquicklook' : 'Podgląd',
\t\t\t'cmdreload'    : 'Odśwież',
\t\t\t'cmdrename'    : 'Zmień nazwę',
\t\t\t'cmdrm'        : 'Usuń',
\t\t\t'cmdtrash'     : 'Do kosza', //from v2.1.24 added 29.4.2017
\t\t\t'cmdrestore'   : 'Przywróć', //from v2.1.24 added 3.5.2017
\t\t\t'cmdsearch'    : 'Wyszukaj pliki',
\t\t\t'cmdup'        : 'Przejdź do katalogu nadrzędnego',
\t\t\t'cmdupload'    : 'Wyślij pliki',
\t\t\t'cmdview'      : 'Widok',
\t\t\t'cmdresize'    : 'Zmień rozmiar i Obróć',
\t\t\t'cmdsort'      : 'Sortuj',
\t\t\t'cmdnetmount'  : 'Zamontuj wolumin sieciowy', // added 18.04.2012
\t\t\t'cmdnetunmount': 'Odmontuj', // from v2.1 added 30.04.2012
\t\t\t'cmdplaces'    : 'Do Miejsc', // added 28.12.2014
\t\t\t'cmdchmod'     : 'Zmiana trybu', // from v2.1 added 20.6.2015
\t\t\t'cmdopendir'   : 'Otwórz katalog', // from v2.1 added 13.1.2016
\t\t\t'cmdcolwidth'  : 'Resetuj szerokość kolumny', // from v2.1.13 added 12.06.2016
\t\t\t'cmdfullscreen': 'Pełny ekran', // from v2.1.15 added 03.08.2016
\t\t\t'cmdmove'      : 'Przenieś', // from v2.1.15 added 21.08.2016
\t\t\t'cmdempty'     : 'Opróżnij folder', // from v2.1.25 added 22.06.2017
\t\t\t'cmdundo'      : 'Cofnij', // from v2.1.27 added 31.07.2017
\t\t\t'cmdredo'      : 'Ponów', // from v2.1.27 added 31.07.2017
\t\t\t'cmdpreference': 'Preferencje', // from v2.1.27 added 03.08.2017
\t\t\t'cmdselectall' : 'Zaznacz wszystko', // from v2.1.28 added 15.08.2017
\t\t\t'cmdselectnone': 'Odznacz wszystko', // from v2.1.28 added 15.08.2017
\t\t\t'cmdselectinvert': 'Odwróć wybór', // from v2.1.28 added 15.08.2017
\t\t\t'cmdopennew'   : 'Otwórz w nowym oknie', // from v2.1.38 added 3.4.2018
\t\t\t'cmdhide'      : 'Ukryj (osobiste)', // from v2.1.41 added 24.7.2018

\t\t\t/*********************************** buttons ***********************************/
\t\t\t'btnClose'  : 'Zamknij',
\t\t\t'btnSave'   : 'Zapisz',
\t\t\t'btnRm'     : 'Usuń',
\t\t\t'btnApply'  : 'Zastosuj',
\t\t\t'btnCancel' : 'Anuluj',
\t\t\t'btnNo'     : 'Nie',
\t\t\t'btnYes'    : 'Tak',
\t\t\t'btnMount'  : 'Montuj',  // added 18.04.2012
\t\t\t'btnApprove': 'Idź do \$1 & zatwierdź', // from v2.1 added 26.04.2012
\t\t\t'btnUnmount': 'Odmontuj', // from v2.1 added 30.04.2012
\t\t\t'btnConv'   : 'Konwertuj', // from v2.1 added 08.04.2014
\t\t\t'btnCwd'    : 'Tutaj',      // from v2.1 added 22.5.2015
\t\t\t'btnVolume' : 'Wolumin',    // from v2.1 added 22.5.2015
\t\t\t'btnAll'    : 'Wszystko',       // from v2.1 added 22.5.2015
\t\t\t'btnMime'   : 'Typ MIME', // from v2.1 added 22.5.2015
\t\t\t'btnFileName':'Nazwa pliku',  // from v2.1 added 22.5.2015
\t\t\t'btnSaveClose': 'Zapisz & Zamknij', // from v2.1 added 12.6.2015
\t\t\t'btnBackup' : 'Kopia zapasowa', // fromv2.1 added 28.11.2015
\t\t\t'btnRename'    : 'Zmień nazwę',      // from v2.1.24 added 6.4.2017
\t\t\t'btnRenameAll' : 'Zmień nazwę(Wszystkie)', // from v2.1.24 added 6.4.2017
\t\t\t'btnPrevious' : 'Poprz (\$1/\$2)', // from v2.1.24 added 11.5.2017
\t\t\t'btnNext'     : 'Nast (\$1/\$2)', // from v2.1.24 added 11.5.2017
\t\t\t'btnSaveAs'   : 'Zapisz Jako', // from v2.1.25 added 24.5.2017

\t\t\t/******************************** notifications ********************************/
\t\t\t'ntfopen'     : 'Otwieranie katalogu',
\t\t\t'ntffile'     : 'Otwórz plik',
\t\t\t'ntfreload'   : 'Odśwież zawartość katalogu',
\t\t\t'ntfmkdir'    : 'Tworzenie katalogu',
\t\t\t'ntfmkfile'   : 'Tworzenie plików',
\t\t\t'ntfrm'       : 'Usuwanie plików',
\t\t\t'ntfcopy'     : 'Kopiowanie plików',
\t\t\t'ntfmove'     : 'Przenoszenie plików',
\t\t\t'ntfprepare'  : 'Przygotowanie do kopiowania plików',
\t\t\t'ntfrename'   : 'Zmiana nazw plików',
\t\t\t'ntfupload'   : 'Wysyłanie plików',
\t\t\t'ntfdownload' : 'Pobieranie plików',
\t\t\t'ntfsave'     : 'Zapisywanie plików',
\t\t\t'ntfarchive'  : 'Tworzenie archiwum',
\t\t\t'ntfextract'  : 'Wypakowywanie plików z archiwum',
\t\t\t'ntfsearch'   : 'Wyszukiwanie plików',
\t\t\t'ntfresize'   : 'Zmiana rozmiaru obrazów',
\t\t\t'ntfsmth'     : 'Robienie czegoś >_<',
\t\t\t'ntfloadimg'  : 'Ładowanie obrazu',
\t\t\t'ntfnetmount' : 'Montaż woluminu sieciowego', // added 18.04.2012
\t\t\t'ntfnetunmount': 'Odłączanie woluminu sieciowego', // from v2.1 added 30.04.2012
\t\t\t'ntfdim'      : 'Pozyskiwanie wymiaru obrazu', // added 20.05.2013
\t\t\t'ntfreaddir'  : 'Odczytywanie informacji katalogu', // from v2.1 added 01.07.2013
\t\t\t'ntfurl'      : 'Pobieranie URL linku', // from v2.1 added 11.03.2014
\t\t\t'ntfchmod'    : 'Zmiana trybu pliku', // from v2.1 added 20.6.2015
\t\t\t'ntfpreupload': 'Weryfikacja nazwy przesłanego pliku', // from v2.1 added 31.11.2015
\t\t\t'ntfzipdl'    : 'Tworzenie pliku do pobrania', // from v2.1.7 added 23.1.2016
\t\t\t'ntfparents'  : 'Uzyskiwanie informacji o ścieżce', // from v2.1.17 added 2.11.2016
\t\t\t'ntfchunkmerge': 'Przetwarzanie przesłanego pliku', // from v2.1.17 added 2.11.2016
\t\t\t'ntftrash'    : 'Wykonuje wrzucanie do kosza', // from v2.1.24 added 2.5.2017
\t\t\t'ntfrestore'  : 'Wykonuje przywracanie z kosza', // from v2.1.24 added 3.5.2017
\t\t\t'ntfchkdir'   : 'Sprawdzanie folderu docelowego', // from v2.1.24 added 3.5.2017
\t\t\t'ntfundo'     : 'Cofanie poprzedniej operacji', // from v2.1.27 added 31.07.2017
\t\t\t'ntfredo'     : 'Ponownie poprzednio cofnięte', // from v2.1.27 added 31.07.2017
\t\t\t'ntfchkcontent' : 'Sprawdzanie zawartości', // from v2.1.41 added 3.8.2018

\t\t\t/*********************************** volumes *********************************/
\t\t\t'volume_Trash' : 'Śmieci', //from v2.1.24 added 29.4.2017

\t\t\t/************************************ dates **********************************/
\t\t\t'dateUnknown' : 'nieznana',
\t\t\t'Today'       : 'Dzisiaj',
\t\t\t'Yesterday'   : 'Wczoraj',
\t\t\t'msJan'       : 'Sty',
\t\t\t'msFeb'       : 'Lut',
\t\t\t'msMar'       : 'Mar',
\t\t\t'msApr'       : 'Kwi',
\t\t\t'msMay'       : 'Maj',
\t\t\t'msJun'       : 'Cze',
\t\t\t'msJul'       : 'Lip',
\t\t\t'msAug'       : 'Sie',
\t\t\t'msSep'       : 'Wrz',
\t\t\t'msOct'       : 'Paź',
\t\t\t'msNov'       : 'Lis',
\t\t\t'msDec'       : 'Gru',
\t\t\t'January'     : 'Styczeń',
\t\t\t'February'    : 'Luty',
\t\t\t'March'       : 'Marzec',
\t\t\t'April'       : 'Kwiecień',
\t\t\t'May'         : 'Maj',
\t\t\t'June'        : 'Czerwiec',
\t\t\t'July'        : 'Lipiec',
\t\t\t'August'      : 'Sierpień',
\t\t\t'September'   : 'Wrzesień',
\t\t\t'October'     : 'Październik',
\t\t\t'November'    : 'Listopad',
\t\t\t'December'    : 'Grudzień',
\t\t\t'Sunday'      : 'Niedziela',
\t\t\t'Monday'      : 'Poniedziałek',
\t\t\t'Tuesday'     : 'Wtorek',
\t\t\t'Wednesday'   : 'Środa',
\t\t\t'Thursday'    : 'Czwartek',
\t\t\t'Friday'      : 'Piątek',
\t\t\t'Saturday'    : 'Sobota',
\t\t\t'Sun'         : 'Nie',
\t\t\t'Mon'         : 'Pon',
\t\t\t'Tue'         : 'Wto',
\t\t\t'Wed'         : 'Śro',
\t\t\t'Thu'         : 'Czw',
\t\t\t'Fri'         : 'Pią',
\t\t\t'Sat'         : 'Sob',

\t\t\t/******************************** sort variants ********************************/
\t\t\t'sortname'          : 'w/g nazwy',
\t\t\t'sortkind'          : 'w/g typu',
\t\t\t'sortsize'          : 'w/g rozmiaru',
\t\t\t'sortdate'          : 'w/g daty',
\t\t\t'sortFoldersFirst'  : 'katalogi pierwsze',
\t\t\t'sortperm'          : 'wg/nazwy', // from v2.1.13 added 13.06.2016
\t\t\t'sortmode'          : 'wg/trybu',       // from v2.1.13 added 13.06.2016
\t\t\t'sortowner'         : 'wg/właściciela',      // from v2.1.13 added 13.06.2016
\t\t\t'sortgroup'         : 'wg/grup',      // from v2.1.13 added 13.06.2016
\t\t\t'sortAlsoTreeview'  : 'Również drzewa katalogów',  // from v2.1.15 added 01.08.2016

\t\t\t/********************************** new items **********************************/
\t\t\t'untitled file.txt' : 'NowyPlik.txt', // added 10.11.2015
\t\t\t'untitled folder'   : 'NowyFolder',   // added 10.11.2015
\t\t\t'Archive'           : 'NoweArchiwum',  // from v2.1 added 10.11.2015
\t\t\t'untitled file'     : 'NowyPlik.\$1',  // from v2.1.41 added 6.8.2018
\t\t\t'extentionfile'     : '\$1 Plik',    // from v2.1.41 added 6.8.2018
\t\t\t'extentiontype'     : '\$1: \$2',      // from v2.1.43 added 17.10.2018

\t\t\t/********************************** messages **********************************/
\t\t\t'confirmReq'      : 'Wymagane potwierdzenie',
\t\t\t'confirmRm'       : 'Czy na pewno chcesz usunąć pliki?<br/>Tej operacji nie można cofnąć!',
\t\t\t'confirmRepl'     : 'Zastąpić stary plik nowym?',
\t\t\t'confirmRest'     : 'Zamienić istniejący element na pozycję w koszu?', // fromv2.1.24 added 5.5.2017
\t\t\t'confirmConvUTF8' : 'Nie w UTF-8<br/>Konwertować na UTF-8?<br/>Zawartość stanie się  UTF-8 poprzez zapisanie po konwersji.', // from v2.1 added 08.04.2014
\t\t\t'confirmNonUTF8'  : 'Nie można wykryć kodowania tego pliku. Musi być tymczasowo przekształcony do UTF-8. <br/> Proszę wybrać kodowanie znaków tego pliku.', // from v2.1.19 added 28.11.2016
\t\t\t'confirmNotSave'  : 'Został zmodyfikowany.<br/>Utracisz pracę, jeśli nie zapiszesz zmian.', // from v2.1 added 15.7.2015
\t\t\t'confirmTrash'    : 'Czy na pewno chcesz przenieść elementy do kosza?', //from v2.1.24 added 29.4.2017
\t\t\t'confirmMove'     : 'Czy na pewno chcesz przenieść elementy do \"\$1\"?', //from v2.1.50 added 27.7.2019
\t\t\t'apllyAll'        : 'Zastosuj do wszystkich',
\t\t\t'name'            : 'Nazwa',
\t\t\t'size'            : 'Rozmiar',
\t\t\t'perms'           : 'Uprawnienia',
\t\t\t'modify'          : 'Zmodyfikowany',
\t\t\t'kind'            : 'Typ',
\t\t\t'read'            : 'odczyt',
\t\t\t'write'           : 'zapis',
\t\t\t'noaccess'        : 'brak dostępu',
\t\t\t'and'             : 'i',
\t\t\t'unknown'         : 'nieznany',
\t\t\t'selectall'       : 'Zaznacz wszystkie pliki',
\t\t\t'selectfiles'     : 'Zaznacz plik(i)',
\t\t\t'selectffile'     : 'Zaznacz pierwszy plik',
\t\t\t'selectlfile'     : 'Zaznacz ostatni plik',
\t\t\t'viewlist'        : 'Widok listy',
\t\t\t'viewicons'       : 'Widok ikon',
\t\t\t'viewSmall'       : 'Małe ikony', // from v2.1.39 added 22.5.2018
\t\t\t'viewMedium'      : 'Średnie ikony', // from v2.1.39 added 22.5.2018
\t\t\t'viewLarge'       : 'Duże ikony', // from v2.1.39 added 22.5.2018
\t\t\t'viewExtraLarge'  : 'Bardzo duże ikony', // from v2.1.39 added 22.5.2018
\t\t\t'places'          : 'Ulubione',
\t\t\t'calc'            : 'Obliczanie',
\t\t\t'path'            : 'Ścieżka',
\t\t\t'aliasfor'        : 'Alias do',
\t\t\t'locked'          : 'Zablokowany',
\t\t\t'dim'             : 'Wymiary',
\t\t\t'files'           : 'Plik(ów)',
\t\t\t'folders'         : 'Katalogi',
\t\t\t'items'           : 'Element(ów)',
\t\t\t'yes'             : 'tak',
\t\t\t'no'              : 'nie',
\t\t\t'link'            : 'Odnośnik',
\t\t\t'searcresult'     : 'Wyniki wyszukiwania',
\t\t\t'selected'        : 'zaznaczonych obiektów',
\t\t\t'about'           : 'O programie',
\t\t\t'shortcuts'       : 'Skróty klawiaturowe',
\t\t\t'help'            : 'Pomoc',
\t\t\t'webfm'           : 'Menedżer plików sieciowych',
\t\t\t'ver'             : 'Wersja',
\t\t\t'protocolver'     : 'wersja protokołu',
\t\t\t'homepage'        : 'Strona projektu',
\t\t\t'docs'            : 'Dokumentacja',
\t\t\t'github'          : 'Obserwuj rozwój projektu na Github',
\t\t\t'twitter'         : 'Śledź nas na Twitterze',
\t\t\t'facebook'        : 'Dołącz do nas na Facebooku',
\t\t\t'team'            : 'Zespół',
\t\t\t'chiefdev'        : 'główny programista',
\t\t\t'developer'       : 'programista',
\t\t\t'contributor'     : 'współautor',
\t\t\t'maintainer'      : 'koordynator',
\t\t\t'translator'      : 'tłumacz',
\t\t\t'icons'           : 'Ikony',
\t\t\t'dontforget'      : 'i nie zapomnij zabrać ręcznika',
\t\t\t'shortcutsof'     : 'Skróty klawiaturowe są wyłączone',
\t\t\t'dropFiles'       : 'Upuść pliki tutaj',
\t\t\t'or'              : 'lub',
\t\t\t'selectForUpload' : 'Wybierz pliki',
\t\t\t'moveFiles'       : 'Przenieś pliki',
\t\t\t'copyFiles'       : 'Kopiuj pliki',
\t\t\t'restoreFiles'    : 'Przywróć elementy', // from v2.1.24 added 5.5.2017
\t\t\t'rmFromPlaces'    : 'Usuń z miejsc',
\t\t\t'aspectRatio'     : 'Zachowaj proporcje',
\t\t\t'scale'           : 'Skala',
\t\t\t'width'           : 'Szerokość',
\t\t\t'height'          : 'Wysokość',
\t\t\t'resize'          : 'Zmień rozmiar',
\t\t\t'crop'            : 'Przytnij',
\t\t\t'rotate'          : 'Obróć',
\t\t\t'rotate-cw'       : 'Obróć 90° w lewo',
\t\t\t'rotate-ccw'      : 'Obróć 90° w prawo',
\t\t\t'degree'          : '°',
\t\t\t'netMountDialogTitle' : 'Montaż woluminu sieciowego', // added 18.04.2012
\t\t\t'protocol'            : 'Protokół', // added 18.04.2012
\t\t\t'host'                : 'Host', // added 18.04.2012
\t\t\t'port'                : 'Port', // added 18.04.2012
\t\t\t'user'                : 'Użytkownik', // added 18.04.2012
\t\t\t'pass'                : 'Hasło', // added 18.04.2012
\t\t\t'confirmUnmount'      : 'Czy chcesz odmontować \$1?',  // from v2.1 added 30.04.2012
\t\t\t'dropFilesBrowser': 'Upuść lub Wklej pliki z przeglądarki', // from v2.1 added 30.05.2012
\t\t\t'dropPasteFiles'  : 'Upuść lub Wklej tutaj pliki i adresy URL', // from v2.1 added 07.04.2014
\t\t\t'encoding'        : 'Kodowanie', // from v2.1 added 19.12.2014
\t\t\t'locale'          : 'Lokalne',   // from v2.1 added 19.12.2014
\t\t\t'searchTarget'    : 'Docelowo: \$1',                // from v2.1 added 22.5.2015
\t\t\t'searchMime'      : 'Wyszukiwanie poprzez wpisanie typu MIME', // from v2.1 added 22.5.2015
\t\t\t'owner'           : 'Właściciel', // from v2.1 added 20.6.2015
\t\t\t'group'           : 'Grupa', // from v2.1 added 20.6.2015
\t\t\t'other'           : 'Inne', // from v2.1 added 20.6.2015
\t\t\t'execute'         : 'Wykonaj', // from v2.1 added 20.6.2015
\t\t\t'perm'            : 'Uprawnienia', // from v2.1 added 20.6.2015
\t\t\t'mode'            : 'Tryb', // from v2.1 added 20.6.2015
\t\t\t'emptyFolder'     : 'Katalog jest pusty', // from v2.1.6 added 30.12.2015
\t\t\t'emptyFolderDrop' : 'Katalog jest pusty\\\\AUpuść aby dodać pozycje', // from v2.1.6 added 30.12.2015
\t\t\t'emptyFolderLTap' : 'Katalog jest pusty\\\\ADotknij dłużej aby dodać pozycje', // from v2.1.6 added 30.12.2015
\t\t\t'quality'         : 'Jakość', // from v2.1.6 added 5.1.2016
\t\t\t'autoSync'        : 'Auto synchronizacja',  // from v2.1.6 added 10.1.2016
\t\t\t'moveUp'          : 'Przenieś w górę',  // from v2.1.6 added 18.1.2016
\t\t\t'getLink'         : 'Pobierz URL linku', // from v2.1.7 added 9.2.2016
\t\t\t'selectedItems'   : 'Wybrane pozycje (\$1)', // from v2.1.7 added 2.19.2016
\t\t\t'folderId'        : 'ID Katalogu', // from v2.1.10 added 3.25.2016
\t\t\t'offlineAccess'   : 'Zezwól na dostęp offline', // from v2.1.10 added 3.25.2016
\t\t\t'reAuth'          : 'Aby ponownie uwierzytelnić', // from v2.1.10 added 3.25.2016
\t\t\t'nowLoading'      : 'Teraz ładuję...', // from v2.1.12 added 4.26.2016
\t\t\t'openMulti'       : 'Otwieranie wielu plików', // from v2.1.12 added 5.14.2016
\t\t\t'openMultiConfirm': 'Próbujesz otworzyć \$1 plików. Czy na pewno chcesz, aby otworzyć w przeglądarce?', // from v2.1.12 added 5.14.2016
\t\t\t'emptySearch'     : 'Wynik wyszukiwania jest pusty', // from v2.1.12 added 5.16.2016
\t\t\t'editingFile'     : 'Edytujesz plik.', // from v2.1.13 added 6.3.2016
\t\t\t'hasSelected'     : 'Masz wybranych \$1 pozycji.', // from v2.1.13 added 6.3.2016
\t\t\t'hasClipboard'    : 'Masz \$1 pozycji w schowku.', // from v2.1.13 added 6.3.2016
\t\t\t'incSearchOnly'   : 'Wyszukiwanie przyrostowe jest wyłącznie z bieżącego widoku.', // from v2.1.13 added 6.30.2016
\t\t\t'reinstate'       : 'Przywracanie', // from v2.1.15 added 3.8.2016
\t\t\t'complete'        : '\$1 zakończone', // from v2.1.15 added 21.8.2016
\t\t\t'contextmenu'     : 'Menu kontekstowe', // from v2.1.15 added 9.9.2016
\t\t\t'pageTurning'     : 'Obracanie strony', // from v2.1.15 added 10.9.2016
\t\t\t'volumeRoots'     : 'Wolumin główny', // from v2.1.16 added 16.9.2016
\t\t\t'reset'           : 'Resetuj', // from v2.1.16 added 1.10.2016
\t\t\t'bgcolor'         : 'Kolor tła', // from v2.1.16 added 1.10.2016
\t\t\t'colorPicker'     : 'Wybierania kolorów', // from v2.1.16 added 1.10.2016
\t\t\t'8pxgrid'         : '8px Kratka', // from v2.1.16 added 4.10.2016
\t\t\t'enabled'         : 'Włączone', // from v2.1.16 added 4.10.2016
\t\t\t'disabled'        : 'Wyłączone', // from v2.1.16 added 4.10.2016
\t\t\t'emptyIncSearch'  : 'Wyniki wyszukiwania są puste w bieżącym widoku.\\\\AWciśnij [Enter] aby poszerzyć zakres wyszukiwania.', // from v2.1.16 added 5.10.2016
\t\t\t'emptyLetSearch'  : 'Wyszukiwanie pierwszej litery brak wyników w bieżącym widoku.', // from v2.1.23 added 24.3.2017
\t\t\t'textLabel'       : 'Etykieta tekstowa', // from v2.1.17 added 13.10.2016
\t\t\t'minsLeft'        : '\$1 min pozostało', // from v2.1.17 added 13.11.2016
\t\t\t'openAsEncoding'  : 'Otwórz ponownie z wybranym kodowaniem', // from v2.1.19 added 2.12.2016
\t\t\t'saveAsEncoding'  : 'Zapisz z wybranym kodowaniem', // from v2.1.19 added 2.12.2016
\t\t\t'selectFolder'    : 'Wybierz katalog', // from v2.1.20 added 13.12.2016
\t\t\t'firstLetterSearch': 'Wyszukiwanie pierwszej litery', // from v2.1.23 added 24.3.2017
\t\t\t'presets'         : 'Wstępnie ustalone', // from v2.1.25 added 26.5.2017
\t\t\t'tooManyToTrash'  : 'To zbyt wiele rzeczy, więc nie mogą być w koszu.', // from v2.1.25 added 9.6.2017
\t\t\t'TextArea'        : 'PoleTekstowe', // from v2.1.25 added 14.6.2017
\t\t\t'folderToEmpty'   : 'Opróżnij folder \"\$1\".', // from v2.1.25 added 22.6.2017
\t\t\t'filderIsEmpty'   : 'Brak elementów w folderze \"\$1\".', // from v2.1.25 added 22.6.2017
\t\t\t'preference'      : 'Preferencje', // from v2.1.26 added 28.6.2017
\t\t\t'language'        : 'Ustawienie języka', // from v2.1.26 added 28.6.2017
\t\t\t'clearBrowserData': 'Zainicjuj ustawienia zapisane w tej przeglądarce', // from v2.1.26 added 28.6.2017
\t\t\t'toolbarPref'     : 'Ustawienia paska narzędzi', // from v2.1.27 added 2.8.2017
\t\t\t'charsLeft'       : '... pozostało \$1 znak(ów).',  // from v2.1.29 added 30.8.2017
\t\t\t'linesLeft'       : '... pozostało \$1 lini.',  // from v2.1.52 added 16.1.2020
\t\t\t'sum'             : 'Suma', // from v2.1.29 added 28.9.2017
\t\t\t'roughFileSize'   : 'Przybliżony rozmiar pliku', // from v2.1.30 added 2.11.2017
\t\t\t'autoFocusDialog' : 'Skoncentruj się na elemencie dialogowym po najechaniu myszą',  // from v2.1.30 added 2.11.2017
\t\t\t'select'          : 'Wybierz', // from v2.1.30 added 23.11.2017
\t\t\t'selectAction'    : 'Działanie po wybraniu pliku', // from v2.1.30 added 23.11.2017
\t\t\t'useStoredEditor' : 'Otwórz za pomocą ostatnio używanego edytora', // from v2.1.30 added 23.11.2017
\t\t\t'selectinvert'    : 'Odwróć zaznaczenie', // from v2.1.30 added 25.11.2017
\t\t\t'renameMultiple'  : 'Czy na pewno chcesz zmienić nazwę \$1 wybranych elementów takich jak \$2?<br/>Tego nie da się cofnąć!', // from v2.1.31 added 4.12.2017
\t\t\t'batchRename'     : 'Zmień partiami', // from v2.1.31 added 8.12.2017
\t\t\t'plusNumber'      : '+ Liczba', // from v2.1.31 added 8.12.2017
\t\t\t'asPrefix'        : 'Dodaj prefix', // from v2.1.31 added 8.12.2017
\t\t\t'asSuffix'        : 'Dodaj suffix', // from v2.1.31 added 8.12.2017
\t\t\t'changeExtention' : 'Zmień rozszerzenie', // from v2.1.31 added 8.12.2017
\t\t\t'columnPref'      : 'Ustawienia kolumn (Widok listy)', // from v2.1.32 added 6.2.2018
\t\t\t'reflectOnImmediate' : 'Wszystkie zmiany widoczne natychmiast w archiwum.', // from v2.1.33 added 2.3.2018
\t\t\t'reflectOnUnmount'   : 'Wszelkie zmiany nie będą widoczne, dopóki nie odłączysz tego woluminu.', // from v2.1.33 added 2.3.2018
\t\t\t'unmountChildren' : 'Następujący wolumin (y), zamontowany na tym urządzeniu również niezamontowany. Czy na pewno chcesz go odmontować?', // from v2.1.33 added 5.3.2018
\t\t\t'selectionInfo'   : 'Informacje Wyboru', // from v2.1.33 added 7.3.2018
\t\t\t'hashChecker'     : 'Algorytmy do pokazywania hash pliku', // from v2.1.33 added 10.3.2018
\t\t\t'infoItems'       : 'Info Elementów (Wybór Panelu Informacyjnego)', // from v2.1.38 added 28.3.2018
\t\t\t'pressAgainToExit': 'Naciśnij ponownie, aby wyjść.', // from v2.1.38 added 1.4.2018
\t\t\t'toolbar'         : 'Pasek narzędziowy', // from v2.1.38 added 4.4.2018
\t\t\t'workspace'       : 'Obszar Pracy', // from v2.1.38 added 4.4.2018
\t\t\t'dialog'          : 'Dialog', // from v2.1.38 added 4.4.2018
\t\t\t'all'             : 'Wszystko', // from v2.1.38 added 4.4.2018
\t\t\t'iconSize'        : 'Rozmiar Ikony (Podgląd ikon)', // from v2.1.39 added 7.5.2018
\t\t\t'editorMaximized' : 'Otwórz zmaksymalizowane okno edytora', // from v2.1.40 added 30.6.2018
\t\t\t'editorConvNoApi' : 'Ponieważ konwersja przez API nie jest obecnie dostępna, należy dokonać konwersji w witrynie.', //from v2.1.40 added 8.7.2018
\t\t\t'editorConvNeedUpload' : 'Po konwersji musisz przesłać z adresem URL pozycji lub pobranym plikiem, aby zapisać przekonwertowany plik.', //from v2.1.40 added 8.7.2018
\t\t\t'convertOn'       : 'Konwertuj na stronie \$1', // from v2.1.40 added 10.7.2018
\t\t\t'integrations'    : 'Integracje', // from v2.1.40 added 11.7.2018
\t\t\t'integrationWith' : 'Ten elFinder ma zintegrowane następujące usługi zewnętrzne. Przed użyciem ich sprawdź warunki użytkowania, politykę prywatności itp.', // from v2.1.40 added 11.7.2018
\t\t\t'showHidden'      : 'Pokaż ukryte pozycje', // from v2.1.41 added 24.7.2018
\t\t\t'hideHidden'      : 'Ukryj ukryte pozycje', // from v2.1.41 added 24.7.2018
\t\t\t'toggleHidden'    : 'Pokaż/Ukryj ukryte pozycje', // from v2.1.41 added 24.7.2018
\t\t\t'makefileTypes'   : 'Typy plików, które można włączyć za pomocą \"Nowy plik\"', // from v2.1.41 added 7.8.2018
\t\t\t'typeOfTextfile'  : 'Typ pliku tekstowego', // from v2.1.41 added 7.8.2018
\t\t\t'add'             : 'Dodaj', // from v2.1.41 added 7.8.2018
\t\t\t'theme'           : 'Motyw', // from v2.1.43 added 19.10.2018
\t\t\t'default'         : 'Domyślnie', // from v2.1.43 added 19.10.2018
\t\t\t'description'     : 'Opis', // from v2.1.43 added 19.10.2018
\t\t\t'website'         : 'Witryna', // from v2.1.43 added 19.10.2018
\t\t\t'author'          : 'Autor', // from v2.1.43 added 19.10.2018
\t\t\t'email'           : 'E-mail', // from v2.1.43 added 19.10.2018
\t\t\t'license'         : 'Licencja', // from v2.1.43 added 19.10.2018
\t\t\t'exportToSave'    : 'Tego elementu nie można zapisać. Aby uniknąć utraty zmian, musisz wyeksportować go na swój komputer.', // from v2.1.44 added 1.12.2018
\t\t\t'dblclickToSelect': 'Kliknij dwukrotnie plik, aby go wybrać.', // from v2.1.47 added 22.1.2019
\t\t\t'useFullscreen'   : 'Użyj trybu pełnoekranowego', // from v2.1.47 added 19.2.2019

\t\t\t/********************************** mimetypes **********************************/
\t\t\t'kindUnknown'     : 'Nieznany',
\t\t\t'kindRoot'        : 'Główny Wolumin', // from v2.1.16 added 16.10.2016
\t\t\t'kindFolder'      : 'Katalog',
\t\t\t'kindSelects'     : 'Zaznaczenie', // from v2.1.29 added 29.8.2017
\t\t\t'kindAlias'       : 'Alias',
\t\t\t'kindAliasBroken' : 'Utracony alias',
\t\t\t// applications
\t\t\t'kindApp'         : 'Aplikacja',
\t\t\t'kindPostscript'  : 'Dokument Postscript',
\t\t\t'kindMsOffice'    : 'Dokument Office',
\t\t\t'kindMsWord'      : 'Dokument Word',
\t\t\t'kindMsExcel'     : 'Dokument Excel',
\t\t\t'kindMsPP'        : 'Prezentacja PowerPoint',
\t\t\t'kindOO'          : 'Dokument OpenOffice',
\t\t\t'kindAppFlash'    : 'Aplikacja Flash',
\t\t\t'kindPDF'         : 'Dokument przenośny PDF',
\t\t\t'kindTorrent'     : 'Plik BitTorrent',
\t\t\t'kind7z'          : 'Archiwum 7z',
\t\t\t'kindTAR'         : 'Archiwum TAR',
\t\t\t'kindGZIP'        : 'Archiwum GZIP',
\t\t\t'kindBZIP'        : 'Archiwum BZIP',
\t\t\t'kindXZ'          : 'Archiwum XZ',
\t\t\t'kindZIP'         : 'Archiwum ZIP',
\t\t\t'kindRAR'         : 'Archiwum RAR',
\t\t\t'kindJAR'         : 'Plik Java JAR',
\t\t\t'kindTTF'         : 'Czcionka TrueType',
\t\t\t'kindOTF'         : 'Czcionka OpenType',
\t\t\t'kindRPM'         : 'Pakiet RPM',
\t\t\t// texts
\t\t\t'kindText'        : 'Dokument tekstowy',
\t\t\t'kindTextPlain'   : 'Zwykły tekst',
\t\t\t'kindPHP'         : 'Kod źródłowy PHP',
\t\t\t'kindCSS'         : 'Kaskadowe arkusze stylów',
\t\t\t'kindHTML'        : 'Dokument HTML',
\t\t\t'kindJS'          : 'Kod źródłowy Javascript',
\t\t\t'kindRTF'         : 'Tekst sformatowany RTF',
\t\t\t'kindC'           : 'Kod źródłowy C',
\t\t\t'kindCHeader'     : 'Plik nagłówka C',
\t\t\t'kindCPP'         : 'Kod źródłowy C++',
\t\t\t'kindCPPHeader'   : 'Plik nagłówka C++',
\t\t\t'kindShell'       : 'Skrypt powłoki Unix',
\t\t\t'kindPython'      : 'Kod źródłowy Python',
\t\t\t'kindJava'        : 'Kod źródłowy Java',
\t\t\t'kindRuby'        : 'Kod źródłowy Ruby',
\t\t\t'kindPerl'        : 'Skrypt Perl',
\t\t\t'kindSQL'         : 'Kod źródłowy SQL',
\t\t\t'kindXML'         : 'Dokument XML',
\t\t\t'kindAWK'         : 'Kod źródłowy AWK',
\t\t\t'kindCSV'         : 'Tekst rozdzielany przecinkami CSV',
\t\t\t'kindDOCBOOK'     : 'Dokument Docbook XML',
\t\t\t'kindMarkdown'    : 'Tekst promocyjny', // added 20.7.2015
\t\t\t// images
\t\t\t'kindImage'       : 'Obraz',
\t\t\t'kindBMP'         : 'Obraz BMP',
\t\t\t'kindJPEG'        : 'Obraz JPEG',
\t\t\t'kindGIF'         : 'Obraz GIF',
\t\t\t'kindPNG'         : 'Obraz PNG',
\t\t\t'kindTIFF'        : 'Obraz TIFF',
\t\t\t'kindTGA'         : 'Obraz TGA',
\t\t\t'kindPSD'         : 'Obraz Adobe Photoshop',
\t\t\t'kindXBITMAP'     : 'Obraz X BitMap',
\t\t\t'kindPXM'         : 'Obraz Pixelmator',
\t\t\t// media
\t\t\t'kindAudio'       : 'Plik dźwiękowy',
\t\t\t'kindAudioMPEG'   : 'Plik dźwiękowy MPEG',
\t\t\t'kindAudioMPEG4'  : 'Plik dźwiękowy MPEG-4',
\t\t\t'kindAudioMIDI'   : 'Plik dźwiękowy MIDI',
\t\t\t'kindAudioOGG'    : 'Plik dźwiękowy Ogg Vorbis',
\t\t\t'kindAudioWAV'    : 'Plik dźwiękowy WAV',
\t\t\t'AudioPlaylist'   : 'Lista odtwarzania MP3',
\t\t\t'kindVideo'       : 'Plik wideo',
\t\t\t'kindVideoDV'     : 'Plik wideo DV',
\t\t\t'kindVideoMPEG'   : 'Plik wideo MPEG',
\t\t\t'kindVideoMPEG4'  : 'Plik wideo MPEG-4',
\t\t\t'kindVideoAVI'    : 'Plik wideo AVI',
\t\t\t'kindVideoMOV'    : 'Plik wideo Quick Time',
\t\t\t'kindVideoWM'     : 'Plik wideo Windows Media',
\t\t\t'kindVideoFlash'  : 'Plik wideo Flash',
\t\t\t'kindVideoMKV'    : 'Plik wideo Matroska',
\t\t\t'kindVideoOGG'    : 'Plik wideo Ogg'
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
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.pl.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.pl.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.pl.js");
    }
}
