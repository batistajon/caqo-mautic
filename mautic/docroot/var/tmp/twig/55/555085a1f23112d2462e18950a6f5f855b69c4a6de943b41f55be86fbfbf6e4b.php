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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.bg.js */
class __TwigTemplate_3d201edae137a9f3a9cf83da1624a211f808612d9ef5fc834cb71cf3a63bef68 extends Template
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
 * Bulgarian translation
 * @author Stamo Petkov <stamo.petkov@gmail.com>
 * @author Nikolay Petkov <office@cmstory.com>
 * @version 2018-07-28
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
\telFinder.prototype.i18.bg = {
\t\ttranslator : 'Stamo Petkov &lt;stamo.petkov@gmail.com&gt;, Nikolay Petkov &lt;office@cmstory.com&gt;',
\t\tlanguage   : 'Bulgarian',
\t\tdirection  : 'ltr',
\t\tdateFormat : 'd.m.Y H:i', // Mar 13, 2012 05:27 PM
\t\tfancyDateFormat : '\$1 H:i', // will produce smth like: Today 12:25 PM
\t\tnonameDateFormat : 'Ymd-His', // to apply if upload file is noname: 120513172700
\t\tmessages   : {

\t\t\t/********************************** errors **********************************/
\t\t\t'error'                : 'Грешка',
\t\t\t'errUnknown'           : 'Непозната грешка.',
\t\t\t'errUnknownCmd'        : 'Непозната команда.',
\t\t\t'errJqui'              : 'Грешна конфигурация на jQuery UI. Компонентите selectable, draggable и droppable трябва да са включени.',
\t\t\t'errNode'              : 'elFinder изисква да бъде създаден DOM елемент.',
\t\t\t'errURL'               : 'Грешка в настройките на elFinder! не е зададена стойност на URL.',
\t\t\t'errAccess'            : 'Достъп отказан.',
\t\t\t'errConnect'           : 'Няма връзка със сървъра.',
\t\t\t'errAbort'             : 'Връзката е прекъсната.',
\t\t\t'errTimeout'           : 'Просрочена връзка.',
\t\t\t'errNotFound'          : 'Сървърът не е намерен.',
\t\t\t'errResponse'          : 'Грешен отговор от сървъра.',
\t\t\t'errConf'              : 'Грешни настройки на сървъра.',
\t\t\t'errJSON'              : 'Не е инсталиран модул на PHP за JSON.',
\t\t\t'errNoVolumes'         : 'Няма дялове достъпни за четене.',
\t\t\t'errCmdParams'         : 'Грешни параметри на командата \"\$1\".',
\t\t\t'errDataNotJSON'       : 'Данните не са JSON.',
\t\t\t'errDataEmpty'         : 'Липсват данни.',
\t\t\t'errCmdReq'            : 'Запитването от сървъра изисква име на команда.',
\t\t\t'errOpen'              : 'Неуспешно отваряне на \"\$1\".',
\t\t\t'errNotFolder'         : 'Обектът не е папка.',
\t\t\t'errNotFile'           : 'Обектът не е файл.',
\t\t\t'errRead'              : 'Неуспешно прочитане на \"\$1\".',
\t\t\t'errWrite'             : 'Неуспешен запис в \"\$1\".',
\t\t\t'errPerm'              : 'Разрешение отказано.',
\t\t\t'errLocked'            : '\"\$1\" е заключен и не може да бъде преименуван, местен или премахван.',
\t\t\t'errExists'            : 'Вече съществува файл с име \"\$1\"',
\t\t\t'errInvName'           : 'Грешно име на файл.',
\t\t\t'errInvDirname'        : 'Невалидно име на папка.',  // from v2.1.24 added 12.4.2017
\t\t\t'errFolderNotFound'    : 'Папката не е открита.',
\t\t\t'errFileNotFound'      : 'Файлът не е открит.',
\t\t\t'errTrgFolderNotFound' : 'Целевата папка \"\$1\" не е намерена.',
\t\t\t'errPopup'             : 'Браузъра блокира отварянето на прозорец. За да отворите файла, разрешете отварянето в настройките на браузъра.',
\t\t\t'errMkdir'             : 'Неуспешно създаване на папка \"\$1\".',
\t\t\t'errMkfile'            : 'Неуспешно създаване на файл \"\$1\".',
\t\t\t'errRename'            : 'Неуспешно преименуване на \"\$1\".',
\t\t\t'errCopyFrom'          : 'Копирането на файлове от том \"\$1\" не е разрешено.',
\t\t\t'errCopyTo'            : 'Копирането на файлове в том \"\$1\" не е разрешено.',
\t\t\t'errMkOutLink'         : 'Неуспех при създаване на връзка извън началото на ресурса.', // from v2.1 added 03.10.2015
\t\t\t'errUpload'            : 'Грешка при качване.',  // old name - errUploadCommon
\t\t\t'errUploadFile'        : 'Неуспешно качване на \"\$1\".', // old name - errUpload
\t\t\t'errUploadNoFiles'     : 'Не са намерени файлове за качване.',
\t\t\t'errUploadTotalSize'   : 'Данните превишават максимално допостумия размер.', // old name - errMaxSize
\t\t\t'errUploadFileSize'    : 'Файлът превишава максимално допустимия размер.', //  old name - errFileMaxSize
\t\t\t'errUploadMime'        : 'Непозволен тип на файла.',
\t\t\t'errUploadTransfer'    : '\"\$1\" грешка при предаване.',
\t\t\t'errUploadTemp'        : 'Неуспешно създаване на временен файл за качване.', // from v2.1 added 26.09.2015
\t\t\t'errNotReplace'        : 'Обект \"\$1\" вече съществува на това място и не може да бъде заменен от обект от друг тип.', // new
\t\t\t'errReplace'           : 'Не може да се замени \"\$1\".',
\t\t\t'errSave'              : 'Не може да се запише \"\$1\".',
\t\t\t'errCopy'              : 'Не може да се копира \"\$1\".',
\t\t\t'errMove'              : 'Не може да се премести \"\$1\".',
\t\t\t'errCopyInItself'      : 'Не може да се копира \"\$1\" върху самия него.',
\t\t\t'errRm'                : 'Не може да се премахне \"\$1\".',
\t\t\t'errTrash'             : 'Не може да се премести в кошчето', // from v2.1.24 added 30.4.2017
\t\t\t'errRmSrc'             : 'Не може да се премахне изходния файл(ове).',
\t\t\t'errExtract'           : 'Не може да се извлекат файловете от \"\$1\".',
\t\t\t'errArchive'           : 'Не може да се създаде архив.',
\t\t\t'errArcType'           : 'Неподдържан тип на архива.',
\t\t\t'errNoArchive'         : 'Файлът не е архив или е от неподдържан тип.',
\t\t\t'errCmdNoSupport'      : 'Сървъра не поддържа тази команда.',
\t\t\t'errReplByChild'       : 'Папката “\$1” не може да бъде заменена от съдържащ се в нея елемент.',
\t\t\t'errArcSymlinks'       : 'От съображения за сигурност няма да бъдат разопаковани архиви съдържащи symlinks.', // edited 24.06.2012
\t\t\t'errArcMaxSize'        : 'Архивните файлове превишават максимално допустимия размер.',
\t\t\t'errResize'            : 'Не може да се преоразмери \"\$1\".',
\t\t\t'errResizeDegree'      : 'Невалиден градус за ротация.',  // added 7.3.2013
\t\t\t'errResizeRotate'      : 'Изображението не е ротирано.',  // added 7.3.2013
\t\t\t'errResizeSize'        : 'Невалиден размер на изображение.',  // added 7.3.2013
\t\t\t'errResizeNoChange'    : 'Размерът на изображението не е променен.',  // added 7.3.2013
\t\t\t'errUsupportType'      : 'Неподдържан тип на файл.',
\t\t\t'errNotUTF8Content'    : 'Файл \"\$1\" не е в UTF-8 формат и не може да бъде редактиран.',  // added 9.11.2011
\t\t\t'errNetMount'          : 'Не може да се монтира \"\$1\".', // added 17.04.2012
\t\t\t'errNetMountNoDriver'  : 'Неподдържан протокол.',     // added 17.04.2012
\t\t\t'errNetMountFailed'    : 'Монтирането не е успешно.',         // added 17.04.2012
\t\t\t'errNetMountHostReq'   : 'Хост се изисква.', // added 18.04.2012
\t\t\t'errSessionExpires'    : 'Сесията ви изтече поради липса на активност.',
\t\t\t'errCreatingTempDir'   : 'Не може да се създаде временна директория: \"\$1\"',
\t\t\t'errFtpDownloadFile'   : 'Не може да се изтегли файл от FTP: \"\$1\"',
\t\t\t'errFtpUploadFile'     : 'Не може да се качи файл на FTP: \"\$1\"',
\t\t\t'errFtpMkdir'          : 'Не може да се създаде директория на FTP: \"\$1\"',
\t\t\t'errArchiveExec'       : 'Грешка при архивиране на файлове: \"\$1\"',
\t\t\t'errExtractExec'       : 'Грешка при разархивиране на файлове: \"\$1\"',
\t\t\t'errNetUnMount'        : 'Не може да се размонтира', // from v2.1 added 30.04.2012
\t\t\t'errConvUTF8'          : 'Не е конвертируем до UTF-8', // from v2.1 added 08.04.2014
\t\t\t'errFolderUpload'      : 'Опитайте Google Chrome, ако искате да качите папка.', // from v2.1 added 26.6.2015
\t\t\t'errSearchTimeout'     : 'Времето изтече при търсенето на \"\$1\". Резултатът от търсенето е частичен.', // from v2.1 added 12.1.2016
\t\t\t'errReauthRequire'     : 'Необходимо е повторно оторизиране.', // from v2.1.10 added 24.3.2016
\t\t\t'errMaxTargets'        : 'Максималният брой избрани файлове е \$ 1.', // from v2.1.17 added 17.10.2016
\t\t\t'errRestore'           : 'Не може да се възстанови от кошчето. Не може да се определи местоположението за възстановяване.', // from v2.1.24 added 3.5.2017
\t\t\t'errEditorNotFound'    : 'Не е намерен редактор за този тип файл.', // from v2.1.25 added 23.5.2017
\t\t\t'errServerError'       : 'Възникна грешка на сървъра.', // from v2.1.25 added 16.6.2017
\t\t\t'errEmpty'             : 'Папката \"\$1\" не може да се изпразни.', // from v2.1.25 added 22.6.2017

\t\t\t/******************************* commands names ********************************/
\t\t\t'cmdarchive'   : 'Създай архив',
\t\t\t'cmdback'      : 'Назад',
\t\t\t'cmdcopy'      : 'Копирай',
\t\t\t'cmdcut'       : 'Изрежи',
\t\t\t'cmddownload'  : 'Свали',
\t\t\t'cmdduplicate' : 'Дублирай',
\t\t\t'cmdedit'      : 'Редактирай файл',
\t\t\t'cmdextract'   : 'Извлечи файловете от архива',
\t\t\t'cmdforward'   : 'Напред',
\t\t\t'cmdgetfile'   : 'Избери файлове',
\t\t\t'cmdhelp'      : 'За тази програма',
\t\t\t'cmdhome'      : 'Начало',
\t\t\t'cmdinfo'      : 'Информация',
\t\t\t'cmdmkdir'     : 'Нова папка',
\t\t\t'cmdmkdirin'   : 'В нова папка', // from v2.1.7 added 19.2.2016
\t\t\t'cmdmkfile'    : 'Нов файл',
\t\t\t'cmdopen'      : 'Отвори',
\t\t\t'cmdpaste'     : 'Вмъкни',
\t\t\t'cmdquicklook' : 'Преглед',
\t\t\t'cmdreload'    : 'Презареди',
\t\t\t'cmdrename'    : 'Преименувай',
\t\t\t'cmdrm'        : 'Изтрий',
\t\t\t'cmdtrash'     : 'В кошчето', //from v2.1.24 added 29.4.2017
\t\t\t'cmdrestore'   : 'Възстанови', //from v2.1.24 added 3.5.2017
\t\t\t'cmdsearch'    : 'Намери файлове',
\t\t\t'cmdup'        : 'Една директория нагоре',
\t\t\t'cmdupload'    : 'Качи файлове',
\t\t\t'cmdview'      : 'Виж',
\t\t\t'cmdresize'    : 'Промени изображение',
\t\t\t'cmdsort'      : 'Подреди',
\t\t\t'cmdnetmount'  : 'Монтирай мрежов ресурс', // added 18.04.2012
\t\t\t'cmdnetunmount': 'Размонтирай', // from v2.1 added 30.04.2012
\t\t\t'cmdplaces'    : 'Към избрани', // added 28.12.2014
\t\t\t'cmdchmod'     : 'Промяна на вид', // from v2.1 added 20.6.2015
\t\t\t'cmdopendir'   : 'Отвори папка', // from v2.1 added 13.1.2016
\t\t\t'cmdcolwidth'  : 'Нулирай ширината на колоната', // from v2.1.13 added 12.06.2016
\t\t\t'cmdfullscreen': 'Цял екран', // from v2.1.15 added 03.08.2016
\t\t\t'cmdmove'      : 'Премести', // from v2.1.15 added 21.08.2016
\t\t\t'cmdempty'     : 'Изпразни папката', // from v2.1.25 added 22.06.2017
\t\t\t'cmdundo'      : 'Отмени', // from v2.1.27 added 31.07.2017
\t\t\t'cmdredo'      : 'Преправи', // from v2.1.27 added 31.07.2017
\t\t\t'cmdpreference': 'Настройки', // from v2.1.27 added 03.08.2017
\t\t\t'cmdselectall' : 'Избери всичко', // from v2.1.28 added 15.08.2017
\t\t\t'cmdselectnone': 'Избери нищо', // from v2.1.28 added 15.08.2017
\t\t\t'cmdselectinvert': 'Обърни селекцията', // from v2.1.28 added 15.08.2017
\t\t\t'cmdopennew'   : 'Отвори в нов прозорец', // from v2.1.38 added 3.4.2018
\t\t\t'cmdhide'      : 'Скрий (лично)', // from v2.1.41 added 24.7.2018

\t\t\t/*********************************** buttons ***********************************/
\t\t\t'btnClose'  : 'Затвори',
\t\t\t'btnSave'   : 'Запиши',
\t\t\t'btnRm'     : 'Премахни',
\t\t\t'btnApply'  : 'Приложи',
\t\t\t'btnCancel' : 'Отказ',
\t\t\t'btnNo'     : 'Не',
\t\t\t'btnYes'    : 'Да',
\t\t\t'btnMount'  : 'Монтирай',  // added 18.04.2012
\t\t\t'btnApprove': 'Отиди на \$1 и одобри', // from v2.1 added 26.04.2012
\t\t\t'btnUnmount': 'Размонтирай', // from v2.1 added 30.04.2012
\t\t\t'btnConv'   : 'Конвертирай', // from v2.1 added 08.04.2014
\t\t\t'btnCwd'    : 'Тук',      // from v2.1 added 22.5.2015
\t\t\t'btnVolume' : 'Ресурс',    // from v2.1 added 22.5.2015
\t\t\t'btnAll'    : 'Всички',       // from v2.1 added 22.5.2015
\t\t\t'btnMime'   : 'MIME тип', // from v2.1 added 22.5.2015
\t\t\t'btnFileName':'Име',  // from v2.1 added 22.5.2015
\t\t\t'btnSaveClose': 'Запази и затвори', // from v2.1 added 12.6.2015
\t\t\t'btnBackup' : 'Архивирай', // fromv2.1 added 28.11.2015
\t\t\t'btnRename'    : 'Преименувай',      // from v2.1.24 added 6.4.2017
\t\t\t'btnRenameAll' : 'Преименувай(Всички)', // from v2.1.24 added 6.4.2017
\t\t\t'btnPrevious' : 'Пред (\$1/\$2)', // from v2.1.24 added 11.5.2017
\t\t\t'btnNext'     : 'След (\$1/\$2)', // from v2.1.24 added 11.5.2017
\t\t\t'btnSaveAs'   : 'Запази като', // from v2.1.25 added 24.5.2017

\t\t\t/******************************** notifications ********************************/
\t\t\t'ntfopen'     : 'Отваряне на папка',
\t\t\t'ntffile'     : 'Отваряне на файл',
\t\t\t'ntfreload'   : 'Презареждане съдържанието на папка',
\t\t\t'ntfmkdir'    : 'Създава се директория',
\t\t\t'ntfmkfile'   : 'Създава се файл',
\t\t\t'ntfrm'       : 'Изтриване на файлове',
\t\t\t'ntfcopy'     : 'Копиране на файлове',
\t\t\t'ntfmove'     : 'Преместване на файлове',
\t\t\t'ntfprepare'  : 'Подготовка за копиране на файлове',
\t\t\t'ntfrename'   : 'Преименуване на файлове',
\t\t\t'ntfupload'   : 'Качват се файлове',
\t\t\t'ntfdownload' : 'Свалят се файлове',
\t\t\t'ntfsave'     : 'Запис на файлове',
\t\t\t'ntfarchive'  : 'Създава се архив',
\t\t\t'ntfextract'  : 'Извличат се файловете от архив',
\t\t\t'ntfsearch'   : 'Търсят се файлове',
\t\t\t'ntfresize'   : 'Преоразмеряват се изображения',
\t\t\t'ntfsmth'     : 'Зает съм >_<',
\t\t\t'ntfloadimg'  : 'Зареждат се изображения',
\t\t\t'ntfnetmount' : 'Монтира се мрежов ресурс', // added 18.04.2012
\t\t\t'ntfnetunmount': 'Размонтира се мрежов ресурс', // from v2.1 added 30.04.2012
\t\t\t'ntfdim'      : 'Извличат се размерите на изображение', // added 20.05.2013
\t\t\t'ntfreaddir'  : 'Извлича се информация за папка', // from v2.1 added 01.07.2013
\t\t\t'ntfurl'      : 'Взима се URL от връзка', // from v2.1 added 11.03.2014
\t\t\t'ntfchmod'    : 'Променя се вида на файл', // from v2.1 added 20.6.2015
\t\t\t'ntfpreupload': 'Проверка на името на файла за качване', // from v2.1 added 31.11.2015
\t\t\t'ntfzipdl'    : 'Създаване на файл за изтегляне', // from v2.1.7 added 23.1.2016
\t\t\t'ntfparents'  : 'Получава се информация за пътя', // from v2.1.17 added 2.11.2016
\t\t\t'ntfchunkmerge': 'Обработка на качения файл', // from v2.1.17 added 2.11.2016
\t\t\t'ntftrash'    : 'Прехвърлят се позиции в кошчето', // from v2.1.24 added 2.5.2017
\t\t\t'ntfrestore'  : 'Извършва се възстановяване от кошчето', // from v2.1.24 added 3.5.2017
\t\t\t'ntfchkdir'   : 'Проверка на целевата папка', // from v2.1.24 added 3.5.2017
\t\t\t'ntfundo'     : 'Отмяна на предишната операция', // from v2.1.27 added 31.07.2017
\t\t\t'ntfredo'     : 'Възстановяване на предходните отменени', // from v2.1.27 added 31.07.2017

\t\t\t/*********************************** volumes *********************************/
\t\t\t'volume_Trash' : 'Кошче', //from v2.1.24 added 29.4.2017

\t\t\t/************************************ dates **********************************/
\t\t\t'dateUnknown' : 'неизвестна',
\t\t\t'Today'       : 'днес',
\t\t\t'Yesterday'   : 'вчера',
\t\t\t'msJan'       : 'яну',
\t\t\t'msFeb'       : 'фев',
\t\t\t'msMar'       : 'мар',
\t\t\t'msApr'       : 'апр',
\t\t\t'msMay'       : 'май',
\t\t\t'msJun'       : 'юни',
\t\t\t'msJul'       : 'юли',
\t\t\t'msAug'       : 'авг',
\t\t\t'msSep'       : 'сеп',
\t\t\t'msOct'       : 'окт',
\t\t\t'msNov'       : 'ное',
\t\t\t'msDec'       : 'дек',
\t\t\t'January'     : 'януари',
\t\t\t'February'    : 'февруари',
\t\t\t'March'       : 'март',
\t\t\t'April'       : 'април',
\t\t\t'May'         : 'май',
\t\t\t'June'        : 'юни',
\t\t\t'July'        : 'юли',
\t\t\t'August'      : 'август',
\t\t\t'September'   : 'септември',
\t\t\t'October'     : 'октомври',
\t\t\t'November'    : 'ноември',
\t\t\t'December'    : 'декември',
\t\t\t'Sunday'      : 'неделя',
\t\t\t'Monday'      : 'понеделник',
\t\t\t'Tuesday'     : 'вторник',
\t\t\t'Wednesday'   : 'сряда',
\t\t\t'Thursday'    : 'четвъртък',
\t\t\t'Friday'      : 'петък',
\t\t\t'Saturday'    : 'събота',
\t\t\t'Sun'         : 'нед',
\t\t\t'Mon'         : 'пон',
\t\t\t'Tue'         : 'вто',
\t\t\t'Wed'         : 'сря',
\t\t\t'Thu'         : 'чет',
\t\t\t'Fri'         : 'пет',
\t\t\t'Sat'         : 'съб',

\t\t\t/******************************** sort variants ********************************/
\t\t\t'sortname'          : 'по име',
\t\t\t'sortkind'          : 'по вид',
\t\t\t'sortsize'          : 'по размер',
\t\t\t'sortdate'          : 'по дата',
\t\t\t'sortFoldersFirst'  : 'Папките първи',
\t\t\t'sortperm'          : 'по права', // from v2.1.13 added 13.06.2016
\t\t\t'sortmode'          : 'по вид',       // from v2.1.13 added 13.06.2016
\t\t\t'sortowner'         : 'по собственик',      // from v2.1.13 added 13.06.2016
\t\t\t'sortgroup'         : 'по група',      // from v2.1.13 added 13.06.2016
\t\t\t'sortAlsoTreeview'  : 'Също дървовиден изглед',  // from v2.1.15 added 01.08.2016

\t\t\t/********************************** new items **********************************/
\t\t\t'untitled file.txt' : 'NewFile.txt', // added 10.11.2015
\t\t\t'untitled folder'   : 'NewFolder',   // added 10.11.2015
\t\t\t'Archive'           : 'NewArchive',  // from v2.1 added 10.11.2015

\t\t\t/********************************** messages **********************************/
\t\t\t'confirmReq'      : 'Изисква се подтвърждение',
\t\t\t'confirmRm'       : 'Сигурни ли сте, че желаете да премахнете файловете?<br/>Това действие е необратимо!',
\t\t\t'confirmRepl'     : 'Да заменя ли стария файл с новия?',
\t\t\t'confirmRest'     : 'Да се замени ли съществуващата позиция с тази в кошчето?', // fromv2.1.24 added 5.5.2017
\t\t\t'confirmConvUTF8' : 'Не е в UTF-8 формат<br/>Конвертиране до UTF-8?<br/>Съдържанието става в UTF-8 формат при запазване след конверсията.', // from v2.1 added 08.04.2014
\t\t\t'confirmNonUTF8'  : 'Кодирането на този файл не може да бъде открито. Необходимо е временно да се преобразува в UTF-8 за редактиране. <br/> Моля, изберете кодиране на този файл.', // from v2.1.19 added 28.11.2016
\t\t\t'confirmNotSave'  : 'Има направени промени.<br/>Те ще бъдат загубени, ако не запишете промените.', // from v2.1 added 15.7.2015
\t\t\t'confirmTrash'    : 'Наистина ли искате да преместите позиции в кошчето за боклук?', //from v2.1.24 added 29.4.2017
\t\t\t'apllyAll'        : 'Приложи за всички',
\t\t\t'name'            : 'Име',
\t\t\t'size'            : 'Размер',
\t\t\t'perms'           : 'Права',
\t\t\t'modify'          : 'Променено',
\t\t\t'kind'            : 'Вид',
\t\t\t'read'            : 'четене',
\t\t\t'write'           : 'запис',
\t\t\t'noaccess'        : 'без достъп',
\t\t\t'and'             : 'и',
\t\t\t'unknown'         : 'непознат',
\t\t\t'selectall'       : 'Избери всички файлове',
\t\t\t'selectfiles'     : 'Избери файл(ове)',
\t\t\t'selectffile'     : 'Избери първият файл',
\t\t\t'selectlfile'     : 'Избери последният файл',
\t\t\t'viewlist'        : 'Изглед списък',
\t\t\t'viewicons'       : 'Изглед икони',
\t\t\t'viewSmall'       : 'Малки икони', // from v2.1.39 added 22.5.2018
\t\t\t'viewMedium'      : 'Средни икони', // from v2.1.39 added 22.5.2018
\t\t\t'viewLarge'       : 'Големи икони', // from v2.1.39 added 22.5.2018
\t\t\t'viewExtraLarge'  : 'Много големи икони', // from v2.1.39 added 22.5.2018
\t\t\t'places'          : 'Избрани',
\t\t\t'calc'            : 'Изчисли',
\t\t\t'path'            : 'Път',
\t\t\t'aliasfor'        : 'Връзка към',
\t\t\t'locked'          : 'Заключен',
\t\t\t'dim'             : 'Размери',
\t\t\t'files'           : 'Файлове',
\t\t\t'folders'         : 'Папки',
\t\t\t'items'           : 'Позиции',
\t\t\t'yes'             : 'да',
\t\t\t'no'              : 'не',
\t\t\t'link'            : 'Връзка',
\t\t\t'searcresult'     : 'Резултати от търсенето',
\t\t\t'selected'        : 'Избрани позиции',
\t\t\t'about'           : 'За',
\t\t\t'shortcuts'       : 'Бързи клавиши',
\t\t\t'help'            : 'Помощ',
\t\t\t'webfm'           : 'Файлов менажер за Интернет',
\t\t\t'ver'             : 'Версия',
\t\t\t'protocolver'     : 'версия на протокола',
\t\t\t'homepage'        : 'Начало',
\t\t\t'docs'            : 'Документация',
\t\t\t'github'          : 'Разклонение в Github',
\t\t\t'twitter'         : 'Последвайте ни в Twitter',
\t\t\t'facebook'        : 'Присъединете се към нас във Facebook',
\t\t\t'team'            : 'Екип',
\t\t\t'chiefdev'        : 'Главен разработчик',
\t\t\t'developer'       : 'разработчик',
\t\t\t'contributor'     : 'сътрудник',
\t\t\t'maintainer'      : 'поддръжка',
\t\t\t'translator'      : 'преводач',
\t\t\t'icons'           : 'Икони',
\t\t\t'dontforget'      : 'и не забравяйте да си вземете кърпата',
\t\t\t'shortcutsof'     : 'Преките пътища са изключени',
\t\t\t'dropFiles'       : 'Пуснете файловете тук',
\t\t\t'or'              : 'или',
\t\t\t'selectForUpload' : 'Избери файлове',
\t\t\t'moveFiles'       : 'Премести файлове',
\t\t\t'copyFiles'       : 'Копирай файлове',
\t\t\t'restoreFiles'    : 'Възстанови файлове', // from v2.1.24 added 5.5.2017
\t\t\t'rmFromPlaces'    : 'Премахни от избрани',
\t\t\t'aspectRatio'     : 'Отношение',
\t\t\t'scale'           : 'Мащаб',
\t\t\t'width'           : 'Ширина',
\t\t\t'height'          : 'Височина',
\t\t\t'resize'          : 'Преоразмери',
\t\t\t'crop'            : 'Отрежи',
\t\t\t'rotate'          : 'Ротирай',
\t\t\t'rotate-cw'       : 'Ротирай 90 градуса CW',
\t\t\t'rotate-ccw'      : 'Ротирай 90 градуса CCW',
\t\t\t'degree'          : '°',
\t\t\t'netMountDialogTitle' : 'Монтиране на мрежов ресурс', // added 18.04.2012
\t\t\t'protocol'            : 'Протокол', // added 18.04.2012
\t\t\t'host'                : 'Хост', // added 18.04.2012
\t\t\t'port'                : 'Порт', // added 18.04.2012
\t\t\t'user'                : 'Потребител', // added 18.04.2012
\t\t\t'pass'                : 'Парола', // added 18.04.2012
\t\t\t'confirmUnmount'      : 'Ще размонтирате \$1?',  // from v2.1 added 30.04.2012
\t\t\t'dropFilesBrowser': 'Пусни или вмъкни файлове от браузера', // from v2.1 added 30.05.2012
\t\t\t'dropPasteFiles'  : 'Тук поснете файловете, URL адресите или изображенията от клипборда', // from v2.1 added 07.04.2014
\t\t\t'encoding'        : 'Кодировка', // from v2.1 added 19.12.2014
\t\t\t'locale'          : 'Локали',   // from v2.1 added 19.12.2014
\t\t\t'searchTarget'    : 'Цел: \$1',                // from v2.1 added 22.5.2015
\t\t\t'searchMime'      : 'Търсене по въведен MIME тип', // from v2.1 added 22.5.2015
\t\t\t'owner'           : 'Собственик', // from v2.1 added 20.6.2015
\t\t\t'group'           : 'Група', // from v2.1 added 20.6.2015
\t\t\t'other'           : 'Други', // from v2.1 added 20.6.2015
\t\t\t'execute'         : 'Изпълнява', // from v2.1 added 20.6.2015
\t\t\t'perm'            : 'Разрешение', // from v2.1 added 20.6.2015
\t\t\t'mode'            : 'Вид', // from v2.1 added 20.6.2015
\t\t\t'emptyFolder'     : 'Папката е празна', // from v2.1.6 added 30.12.2015
\t\t\t'emptyFolderDrop' : 'Папката е празна\\\\A Влачи и пусни за да добавите файлове', // from v2.1.6 added 30.12.2015
\t\t\t'emptyFolderLTap' : 'Папката е празна\\\\A Докоснете дълго за да добавите позиции', // from v2.1.6 added 30.12.2015
\t\t\t'quality'         : 'Качество', // from v2.1.6 added 5.1.2016
\t\t\t'autoSync'        : 'Автоматично синхронизиране',  // from v2.1.6 added 10.1.2016
\t\t\t'moveUp'          : 'Премести нагоре',  // from v2.1.6 added 18.1.2016
\t\t\t'getLink'         : 'Вземи URL връзка', // from v2.1.7 added 9.2.2016
\t\t\t'selectedItems'   : 'Избрани позиции (\$1)', // from v2.1.7 added 2.19.2016
\t\t\t'folderId'        : 'Папка ID', // from v2.1.10 added 3.25.2016
\t\t\t'offlineAccess'   : 'Позволи офлайн достъп', // from v2.1.10 added 3.25.2016
\t\t\t'reAuth'          : 'За повторно удостоверяване', // from v2.1.10 added 3.25.2016
\t\t\t'nowLoading'      : 'Сега се зарежда...', // from v2.1.12 added 4.26.2016
\t\t\t'openMulti'       : 'Отваряне на няколко файла', // from v2.1.12 added 5.14.2016
\t\t\t'openMultiConfirm': 'Опитвате се да отворите \$1 файла. Наистина ли искате да ги отворите в браузъра?', // from v2.1.12 added 5.14.2016
\t\t\t'emptySearch'     : 'Няма резултат от търсенето.', // from v2.1.12 added 5.16.2016
\t\t\t'editingFile'     : 'Редактира се файл.', // from v2.1.13 added 6.3.2016
\t\t\t'hasSelected'     : 'Вие сте избрали \$1 позиции.', // from v2.1.13 added 6.3.2016
\t\t\t'hasClipboard'    : 'Имате \$1 позиции в клипборда.', // from v2.1.13 added 6.3.2016
\t\t\t'incSearchOnly'   : 'Инкременталното търсене е само от текущия изглед.', // from v2.1.13 added 6.30.2016
\t\t\t'reinstate'       : 'Възстановяване', // from v2.1.15 added 3.8.2016
\t\t\t'complete'        : '\$1 завършени', // from v2.1.15 added 21.8.2016
\t\t\t'contextmenu'     : 'Контекстно меню', // from v2.1.15 added 9.9.2016
\t\t\t'pageTurning'     : 'Завъртане на страницата', // from v2.1.15 added 10.9.2016
\t\t\t'volumeRoots'     : 'Начала на ресурси', // from v2.1.16 added 16.9.2016
\t\t\t'reset'           : 'Нулиране', // from v2.1.16 added 1.10.2016
\t\t\t'bgcolor'         : 'Цвят на фона', // from v2.1.16 added 1.10.2016
\t\t\t'colorPicker'     : 'Средство за избиране на цвят', // from v2.1.16 added 1.10.2016
\t\t\t'8pxgrid'         : '8px мрежа', // from v2.1.16 added 4.10.2016
\t\t\t'enabled'         : 'Активно', // from v2.1.16 added 4.10.2016
\t\t\t'disabled'        : 'Неактивно', // from v2.1.16 added 4.10.2016
\t\t\t'emptyIncSearch'  : 'Няма резултат от търсенето в текущия изглед.\\\\AНатиснете [Enter] за да разширите целта на търсене.', // from v2.1.16 added 5.10.2016
\t\t\t'emptyLetSearch'  : 'Резултатите от търсенето на първата буква са празни в текущия изглед.', // from v2.1.23 added 24.3.2017
\t\t\t'textLabel'       : 'Текстов етикет', // from v2.1.17 added 13.10.2016
\t\t\t'minsLeft'        : '\$1 мин остават', // from v2.1.17 added 13.11.2016
\t\t\t'openAsEncoding'  : 'Отваряне отново с избрано кодиране', // from v2.1.19 added 2.12.2016
\t\t\t'saveAsEncoding'  : 'Запазете с избраното кодиране', // from v2.1.19 added 2.12.2016
\t\t\t'selectFolder'    : 'Избери папка', // from v2.1.20 added 13.12.2016
\t\t\t'firstLetterSearch': 'Търсене по първа буква', // from v2.1.23 added 24.3.2017
\t\t\t'presets'         : 'Мостри', // from v2.1.25 added 26.5.2017
\t\t\t'tooManyToTrash'  : 'Прекалено много позиции, не може да премести в кошчето.', // from v2.1.25 added 9.6.2017
\t\t\t'TextArea'        : 'Текстово поле', // from v2.1.25 added 14.6.2017
\t\t\t'folderToEmpty'   : 'Изпразнете папка \"\$1\".', // from v2.1.25 added 22.6.2017
\t\t\t'filderIsEmpty'   : 'В папка \"\$1\" няма позиции.', // from v2.1.25 added 22.6.2017
\t\t\t'preference'      : 'Настройки', // from v2.1.26 added 28.6.2017
\t\t\t'language'        : 'Настройка на езика', // from v2.1.26 added 28.6.2017
\t\t\t'clearBrowserData': 'Инициализирайте настройките запаметени в този браузър', // from v2.1.26 added 28.6.2017
\t\t\t'toolbarPref'     : 'Настройки на лентата с инструменти', // from v2.1.27 added 2.8.2017
\t\t\t'charsLeft'       : '... \$1 символа остават.',  // from v2.1.29 added 30.8.2017
\t\t\t'sum'             : 'Сумарно', // from v2.1.29 added 28.9.2017
\t\t\t'roughFileSize'   : 'Груб размер на файла', // from v2.1.30 added 2.11.2017
\t\t\t'autoFocusDialog' : 'Фокусирайте върху елемента в диалоговия прозорец с мишката',  // from v2.1.30 added 2.11.2017
\t\t\t'select'          : 'Избери', // from v2.1.30 added 23.11.2017
\t\t\t'selectAction'    : 'Действие при избор на файл', // from v2.1.30 added 23.11.2017
\t\t\t'useStoredEditor' : 'Отворете с редактора, използван за последен път', // from v2.1.30 added 23.11.2017
\t\t\t'selectinvert'    : 'Обърнете селекцията', // from v2.1.30 added 25.11.2017
\t\t\t'renameMultiple'  : 'Наистина ли искате да преименувате \$1 избрани позиции като \$2? <br/> Това не може да бъде отменено!', // from v2.1.31 added 4.12.2017
\t\t\t'batchRename'     : 'Групово преименуване', // from v2.1.31 added 8.12.2017
\t\t\t'plusNumber'      : '+ Номер', // from v2.1.31 added 8.12.2017
\t\t\t'asPrefix'        : 'Добави префикс', // from v2.1.31 added 8.12.2017
\t\t\t'asSuffix'        : 'Добави суфикс', // from v2.1.31 added 8.12.2017
\t\t\t'changeExtention' : 'Промени разширение', // from v2.1.31 added 8.12.2017
\t\t\t'columnPref'      : 'Настройки за колони (Изглед в списък)', // from v2.1.32 added 6.2.2018
\t\t\t'reflectOnImmediate' : 'Всички промени ще се отразят незабавно в архива.', // from v2.1.33 added 2.3.2018
\t\t\t'reflectOnUnmount'   : 'Промените няма да се отразят, докато не размонтирате този диск.', // from v2.1.33 added 2.3.2018
\t\t\t'unmountChildren' : 'The following volume(s) mounted on this volume also unmounted. Are you sure to unmount it?', // from v2.1.33 added 5.3.2018
\t\t\t'selectionInfo'   : 'Информация за селекцията', // from v2.1.33 added 7.3.2018
\t\t\t'hashChecker'     : 'Алгоритми за показване на файловия хеш', // from v2.1.33 added 10.3.2018
\t\t\t'infoItems'       : 'Info Items (Selection Info Panel)', // from v2.1.38 added 28.3.2018
\t\t\t'pressAgainToExit': 'Натиснете отново, за да излезете.', // from v2.1.38 added 1.4.2018
\t\t\t'toolbar'         : 'Лента с инструменти', // from v2.1.38 added 4.4.2018
\t\t\t'workspace'       : 'Работно пространство', // from v2.1.38 added 4.4.2018
\t\t\t'dialog'          : 'Диалог', // from v2.1.38 added 4.4.2018
\t\t\t'all'             : 'Всички', // from v2.1.38 added 4.4.2018
\t\t\t'iconSize'        : 'Размер на иконите (изглед с икони)', // from v2.1.39 added 7.5.2018
\t\t\t'editorMaximized' : 'Отваря максимизиран прозорец на редактора', // from v2.1.40 added 30.6.2018
\t\t\t'editorConvNoApi' : 'Тъй като в момента не е налична API за конверсията, моля, конвертирайте в уебсайта.', //from v2.1.40 added 8.7.2018
\t\t\t'editorConvNeedUpload' : 'След конверсията трябва да го качите с URL адреса или изтегления файл, за да запазите конвертирания файл.', //from v2.1.40 added 8.7.2018
\t\t\t'convertOn'       : 'Конвертиране на сайта от \$1', // from v2.1.40 added 10.7.2018
\t\t\t'integrations'    : 'Интеграции', // from v2.1.40 added 11.7.2018
\t\t\t'integrationWith' : 'Този elFinder има следните интегрирани външни услуги. Моля, проверете условията за ползване, декларацията за поверителност и т.н., преди да ги използвате.', // from v2.1.40 added 11.7.2018
\t\t\t'showHidden'      : 'Покажи скритите елементи', // from v2.1.41 added 24.7.2018
\t\t\t'hideHidden'      : 'Скрий скритите елементи', // from v2.1.41 added 24.7.2018
\t\t\t'toggleHidden'    : 'Покажи/скрий скритите елементи', // from v2.1.41 added 24.7.2018

\t\t\t/********************************** mimetypes **********************************/
\t\t\t'kindUnknown'     : 'Непознат',
\t\t\t'kindRoot'        : 'Начало на ресурс', // from v2.1.16 added 16.10.2016
\t\t\t'kindFolder'      : 'Папка',
\t\t\t'kindSelects'     : 'Селекции', // from v2.1.29 added 29.8.2017
\t\t\t'kindAlias'       : 'Връзка',
\t\t\t'kindAliasBroken' : 'Счупена връзка',
\t\t\t// applications
\t\t\t'kindApp'         : 'Приложение',
\t\t\t'kindPostscript'  : 'Postscript документ',
\t\t\t'kindMsOffice'    : 'Microsoft Office документ',
\t\t\t'kindMsWord'      : 'Microsoft Word документ',
\t\t\t'kindMsExcel'     : 'Microsoft Excel документ',
\t\t\t'kindMsPP'        : 'Microsoft Powerpoint презентация',
\t\t\t'kindOO'          : 'Open Office документ',
\t\t\t'kindAppFlash'    : 'Flash приложение',
\t\t\t'kindPDF'         : 'PDF документ',
\t\t\t'kindTorrent'     : 'Bittorrent файл',
\t\t\t'kind7z'          : '7z архив',
\t\t\t'kindTAR'         : 'TAR архив',
\t\t\t'kindGZIP'        : 'GZIP архив',
\t\t\t'kindBZIP'        : 'BZIP архив',
\t\t\t'kindXZ'          : 'XZ архив',
\t\t\t'kindZIP'         : 'ZIP архив',
\t\t\t'kindRAR'         : 'RAR архив',
\t\t\t'kindJAR'         : 'Java JAR файл',
\t\t\t'kindTTF'         : 'True Type шрифт',
\t\t\t'kindOTF'         : 'Open Type шрифт',
\t\t\t'kindRPM'         : 'RPM пакет',
\t\t\t// texts
\t\t\t'kindText'        : 'Текстов документ',
\t\t\t'kindTextPlain'   : 'Чист текст',
\t\t\t'kindPHP'         : 'PHP изходен код',
\t\t\t'kindCSS'         : 'CSS таблица със стилове',
\t\t\t'kindHTML'        : 'HTML документ',
\t\t\t'kindJS'          : 'Javascript изходен код',
\t\t\t'kindRTF'         : 'RTF текстови файл',
\t\t\t'kindC'           : 'C изходен код',
\t\t\t'kindCHeader'     : 'C header изходен код',
\t\t\t'kindCPP'         : 'C++ изходен код',
\t\t\t'kindCPPHeader'   : 'C++ header изходен код',
\t\t\t'kindShell'       : 'Unix shell изходен код',
\t\t\t'kindPython'      : 'Python изходен код',
\t\t\t'kindJava'        : 'Java изходен код',
\t\t\t'kindRuby'        : 'Ruby изходен код',
\t\t\t'kindPerl'        : 'Perl изходен код',
\t\t\t'kindSQL'         : 'SQL изходен код',
\t\t\t'kindXML'         : 'XML документ',
\t\t\t'kindAWK'         : 'AWK изходен код',
\t\t\t'kindCSV'         : 'CSV стойности разделени със запетая',
\t\t\t'kindDOCBOOK'     : 'Docbook XML документ',
\t\t\t'kindMarkdown'    : 'Markdown текст', // added 20.7.2015
\t\t\t// images
\t\t\t'kindImage'       : 'Изображение',
\t\t\t'kindBMP'         : 'BMP изображение',
\t\t\t'kindJPEG'        : 'JPEG изображение',
\t\t\t'kindGIF'         : 'GIF изображение',
\t\t\t'kindPNG'         : 'PNG изображение',
\t\t\t'kindTIFF'        : 'TIFF изображение',
\t\t\t'kindTGA'         : 'TGA изображение',
\t\t\t'kindPSD'         : 'Adobe Photoshop изображение',
\t\t\t'kindXBITMAP'     : 'X bitmap изображение',
\t\t\t'kindPXM'         : 'Pixelmator изображение',
\t\t\t// media
\t\t\t'kindAudio'       : 'Аудио медия',
\t\t\t'kindAudioMPEG'   : 'MPEG звук',
\t\t\t'kindAudioMPEG4'  : 'MPEG-4 звук',
\t\t\t'kindAudioMIDI'   : 'MIDI звук',
\t\t\t'kindAudioOGG'    : 'Ogg Vorbis звук',
\t\t\t'kindAudioWAV'    : 'WAV звук',
\t\t\t'AudioPlaylist'   : 'MP3 списък за изпълнение',
\t\t\t'kindVideo'       : 'Видео медия',
\t\t\t'kindVideoDV'     : 'DV филм',
\t\t\t'kindVideoMPEG'   : 'MPEG филм',
\t\t\t'kindVideoMPEG4'  : 'MPEG-4 филм',
\t\t\t'kindVideoAVI'    : 'AVI филм',
\t\t\t'kindVideoMOV'    : 'Quick Time филм',
\t\t\t'kindVideoWM'     : 'Windows Media филм',
\t\t\t'kindVideoFlash'  : 'Flash филм',
\t\t\t'kindVideoMKV'    : 'Matroska филм',
\t\t\t'kindVideoOGG'    : 'Ogg филм'
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
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.bg.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.bg.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.bg.js");
    }
}
