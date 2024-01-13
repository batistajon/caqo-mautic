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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.uk.js */
class __TwigTemplate_986986859e605010731379736984d1f1f3f6c95cda80727a28f52a1908ab84b3 extends Template
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
 * Українська мова translation
 * @author ITLancer
 * @author cjayho <cj.fooser@gmail.com>
 * @version 2020-02-10
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
\telFinder.prototype.i18.uk = {
\t\ttranslator : 'ITLancer, cjayho &lt;cj.fooser@gmail.com&gt;',
\t\tlanguage   : 'Українська мова',
\t\tdirection  : 'ltr',
\t\tdateFormat : 'd.m.Y H:i', // will show like: 10.02.2020 16:52
\t\tfancyDateFormat : '\$1 H:i', // will show like: сьогодні 16:52
\t\tnonameDateFormat : 'ymd-His', // noname upload will show like: 200210-165246
\t\tmessages   : {

\t\t\t/********************************** errors **********************************/
\t\t\t'error'                : 'Помилка',
\t\t\t'errUnknown'           : 'Невідома помилка.',
\t\t\t'errUnknownCmd'        : 'Невідома команда.',
\t\t\t'errJqui'              : 'Неправильне налаштування jQuery UI. Відсутні компоненти: selectable, draggable, droppable.',
\t\t\t'errNode'              : 'Відсутній елемент DOM для створення elFinder.',
\t\t\t'errURL'               : 'Неправильне налаштування! Не вказана опція URL.',
\t\t\t'errAccess'            : 'Доступ заборонено.',
\t\t\t'errConnect'           : 'Не вдалося з’єднатися з backend.',
\t\t\t'errAbort'             : 'З’єднання розірване.',
\t\t\t'errTimeout'           : 'Тайм-аут з’єднання.',
\t\t\t'errNotFound'          : 'Не знайдено backend.',
\t\t\t'errResponse'          : 'Неправильна відповідь від backend.',
\t\t\t'errConf'              : 'Неправильне налаштування backend.',
\t\t\t'errJSON'              : 'Модуль PHP JSON не встановлено.',
\t\t\t'errNoVolumes'         : 'Немає доступних для читання директорій.',
\t\t\t'errCmdParams'         : 'Неправильні параметри для команди \"\$1\".',
\t\t\t'errDataNotJSON'       : 'Дані не у форматі JSON.',
\t\t\t'errDataEmpty'         : 'Дані відсутні.',
\t\t\t'errCmdReq'            : 'Backend вимагає назву команди.',
\t\t\t'errOpen'              : 'Неможливо відкрити \"\$1\".',
\t\t\t'errNotFolder'         : 'Об’єкт не є папкою.',
\t\t\t'errNotFile'           : 'Об’єкт не є файлом.',
\t\t\t'errRead'              : 'Неможливо прочитати \"\$1\".',
\t\t\t'errWrite'             : 'Неможливо записати в \"\$1\".',
\t\t\t'errPerm'              : 'Помилка доступу.',
\t\t\t'errLocked'            : 'Файл \"\$1\" заблоковано і його неможливо перемістити, перейменувати чи вилучити.',
\t\t\t'errExists'            : 'Файл з назвою \"\$1\" вже існує.',
\t\t\t'errInvName'           : 'Недійсна назва файла.',
\t\t\t'errInvDirname'        : 'Недійсна назва теки.',  // from v2.1.24 added 12.4.2017
\t\t\t'errFolderNotFound'    : 'Теку не знайдено.',
\t\t\t'errFileNotFound'      : 'Файл не знайдено.',
\t\t\t'errTrgFolderNotFound' : 'Цільову теку \"\$1\" не знайдено.',
\t\t\t'errPopup'             : 'Браузер забороняє відкривати popup-вікно. Дозвольте у налаштування браузера, щоб відкрити файл.',
\t\t\t'errMkdir'             : 'Неможливо створити теку \"\$1\".',
\t\t\t'errMkfile'            : 'Неможливо створити файл \"\$1\".',
\t\t\t'errRename'            : 'Неможливо перейменувати файл \"\$1\".',
\t\t\t'errCopyFrom'          : 'Копіювання файлів з тому \"\$1\" не дозволено.',
\t\t\t'errCopyTo'            : 'Копіювання файлів на том \"\$1\" не дозволено.',
\t\t\t'errMkOutLink'         : 'Неможливо створити посилання у місце за межами кореневої теки носія.', // from v2.1 added 03.10.2015
\t\t\t'errUpload'            : 'Помилка відвантаження.',  // old name - errUploadCommon
\t\t\t'errUploadFile'        : 'Неможливо відвантажити файл \"\$1\".', // old name - errUpload
\t\t\t'errUploadNoFiles'     : 'Не знайдено файлів для відвантаження.',
\t\t\t'errUploadTotalSize'   : 'Об\\'єм даних перевищив встановлений ліміт.', // old name - errMaxSize
\t\t\t'errUploadFileSize'    : 'Об\\'єм файла перевищив встановлений ліміт.', //  old name - errFileMaxSize
\t\t\t'errUploadMime'        : 'Файли цього типу заборонені.',
\t\t\t'errUploadTransfer'    : '\"\$1\" : помилка передачі.',
\t\t\t'errUploadTemp'        : 'Неможливо створити тимчасовий файл для відвантаження.', // from v2.1 added 26.09.2015
\t\t\t'errNotReplace'        : 'Об\\'єкт \"\$1\" вже існує тут та не може бути заміненим на об\\'єкт іншого типу.', // new
\t\t\t'errReplace'           : 'Неможливо замінити \"\$1\".',
\t\t\t'errSave'              : 'Неможливо записати \"\$1\".',
\t\t\t'errCopy'              : 'Неможливо скопіювати \"\$1\".',
\t\t\t'errMove'              : 'Неможливо перенести \"\$1\".',
\t\t\t'errCopyInItself'      : 'Неможливо скопіювати \"\$1\" сам у себе.',
\t\t\t'errRm'                : 'Неможливо вилучити \"\$1\".',
\t\t\t'errTrash'             : 'Неможливо пересунути до смітника.', // from v2.1.24 added 30.4.2017
\t\t\t'errRmSrc'             : 'Неможливо видалити оригінальний(і) файл(и).',
\t\t\t'errExtract'           : 'Неможливо розпакувати файли з \"\$1\".',
\t\t\t'errArchive'           : 'Неможливо створити архів.',
\t\t\t'errArcType'           : 'Тип архіву не підтримується.',
\t\t\t'errNoArchive'         : 'Файл не є архівом, або є архівом, тип якого не підтримується.',
\t\t\t'errCmdNoSupport'      : 'Серверна частина не підтримує цієї команди.',
\t\t\t'errReplByChild'       : 'Папка “\$1” не може бути замінена елементом, який вона містить.',
\t\t\t'errArcSymlinks'       : 'З міркувань безпеки заборонено розпаковувати архіви з символічними посиланнями.', // edited 24.06.2012
\t\t\t'errArcMaxSize'        : 'Розмір файлів архіву перевищує допустиме значення.',
\t\t\t'errResize'            : 'Неможливо масштабувати \"\$1\".',
\t\t\t'errResizeDegree'      : 'Недійсний кут обертання.',  // added 7.3.2013
\t\t\t'errResizeRotate'      : 'Неможливо повернути світлину.',  // added 7.3.2013
\t\t\t'errResizeSize'        : 'Недійсний розмір світлини.',  // added 7.3.2013
\t\t\t'errResizeNoChange'    : 'Розмір світлини не змінено.',  // added 7.3.2013
\t\t\t'errUsupportType'      : 'Непідтримуваний тип файла.',
\t\t\t'errNotUTF8Content'    : 'Файл \"\$1\" не в UTF-8 і не може бути відредагований.',  // added 9.11.2011
\t\t\t'errNetMount'          : 'Неможливо змонтувати \"\$1\".', // added 17.04.2012
\t\t\t'errNetMountNoDriver'  : 'Непідтримуваний протокл.',     // added 17.04.2012
\t\t\t'errNetMountFailed'    : 'В процесі монтування сталася помилка.',         // added 17.04.2012
\t\t\t'errNetMountHostReq'   : 'Необхідно вказати хост.', // added 18.04.2012
\t\t\t'errSessionExpires'    : 'Час сеансу минув через неактивність.',
\t\t\t'errCreatingTempDir'   : 'НЕможливо створити тимчасову директорію: \"\$1\"',
\t\t\t'errFtpDownloadFile'   : 'Неможливо завантажити файл з FTP: \"\$1\"',
\t\t\t'errFtpUploadFile'     : 'Неможливо завантажити файл на FTP: \"\$1\"',
\t\t\t'errFtpMkdir'          : 'Неможливо створити віддалений каталог на FTP: \"\$1\"',
\t\t\t'errArchiveExec'       : 'Помилка при архівації файлів: \"\$1\"',
\t\t\t'errExtractExec'       : 'Помилка при розархівуванні файлів: \"\$1\"',
\t\t\t'errNetUnMount'        : 'Неможливо демонтувати', // from v2.1 added 30.04.2012
\t\t\t'errConvUTF8'          : 'Неможливо конвертувати в UTF - 8', // from v2.1 added 08.04.2014
\t\t\t'errFolderUpload'      : 'Використовуйте Google Chrome, якщо ви хочете завантажити папку', // from v2.1 added 26.6.2015
\t\t\t'errSearchTimeout'     : 'Час пошуку \"\$1\" вийшов. Результат пошуку частковий', // from v2.1 added 12.1.2016
\t\t\t'errReauthRequire'     : 'Необхідна повторна авторизація.', // from v2.1.10 added 24.3.2016
\t\t\t'errMaxTargets'        : 'Максимальна кількість об\\'єктів що можна обрати складає \$1.', // from v2.1.17 added 17.10.2016
\t\t\t'errRestore'           : 'Неможливо відновити зі смітника: неможливо визначити місце куди відновлювати.', // from v2.1.24 added 3.5.2017
\t\t\t'errEditorNotFound'    : 'Для цього типу файлів не знайдено редактора.', // from v2.1.25 added 23.5.2017
\t\t\t'errServerError'       : 'Помилка на боці сервера.', // from v2.1.25 added 16.6.2017
\t\t\t'errEmpty'             : 'Неможливо спорожнити теку \"\$1\".', // from v2.1.25 added 22.6.2017
\t\t\t'moreErrors'           : 'Є також ще \$1 помилок.', // from v2.1.44 added 9.12.2018

\t\t\t/******************************* commands names ********************************/
\t\t\t'cmdarchive'   : 'Архівувати',
\t\t\t'cmdback'      : 'Назад',
\t\t\t'cmdcopy'      : 'Копівати',
\t\t\t'cmdcut'       : 'Вирізати',
\t\t\t'cmddownload'  : 'Завантажити',
\t\t\t'cmdduplicate' : 'Дублювати',
\t\t\t'cmdedit'      : 'Редагувати файл',
\t\t\t'cmdextract'   : 'Розпакувати файли з архіву',
\t\t\t'cmdforward'   : 'Вперед',
\t\t\t'cmdgetfile'   : 'Вибрати файли',
\t\t\t'cmdhelp'      : 'Про програму',
\t\t\t'cmdhome'      : 'Додому',
\t\t\t'cmdinfo'      : 'Інформація',
\t\t\t'cmdmkdir'     : 'Створити теку',
\t\t\t'cmdmkdirin'   : 'До нової теки', // from v2.1.7 added 19.2.2016
\t\t\t'cmdmkfile'    : 'Створити файл',
\t\t\t'cmdopen'      : 'Відкрити',
\t\t\t'cmdpaste'     : 'Вставити',
\t\t\t'cmdquicklook' : 'Попередній перегляд',
\t\t\t'cmdreload'    : 'Перечитати',
\t\t\t'cmdrename'    : 'Перейменувати',
\t\t\t'cmdrm'        : 'Вилучити',
\t\t\t'cmdtrash'     : 'До смітника', //from v2.1.24 added 29.4.2017
\t\t\t'cmdrestore'   : 'Відновити', //from v2.1.24 added 3.5.2017
\t\t\t'cmdsearch'    : 'Шукати файли',
\t\t\t'cmdup'        : 'На 1 рівень вгору',
\t\t\t'cmdupload'    : 'Відвантажити файли',
\t\t\t'cmdview'      : 'Перегляд',
\t\t\t'cmdresize'    : 'Масштабувати зображення',
\t\t\t'cmdsort'      : 'Сортування',
\t\t\t'cmdnetmount'  : 'Змонтувати мережевий диск', // added 18.04.2012
\t\t\t'cmdnetunmount': 'Розмонтувати', // from v2.1 added 30.04.2012
\t\t\t'cmdplaces'    : 'До Місць', // added 28.12.2014
\t\t\t'cmdchmod'     : 'Змінити права', // from v2.1 added 20.6.2015
\t\t\t'cmdopendir'   : 'Відкрии директорію', // from v2.1 added 13.1.2016
\t\t\t'cmdcolwidth'  : 'Скинути ширину стовпчика', // from v2.1.13 added 12.06.2016
\t\t\t'cmdfullscreen': 'Повний екран', // from v2.1.15 added 03.08.2016
\t\t\t'cmdmove'      : 'Пересунути', // from v2.1.15 added 21.08.2016
\t\t\t'cmdempty'     : 'Спорожнити теку', // from v2.1.25 added 22.06.2017
\t\t\t'cmdundo'      : 'Скасувати', // from v2.1.27 added 31.07.2017
\t\t\t'cmdredo'      : 'Відновити', // from v2.1.27 added 31.07.2017
\t\t\t'cmdpreference': 'Налаштування', // from v2.1.27 added 03.08.2017
\t\t\t'cmdselectall' : 'Вибрати усі', // from v2.1.28 added 15.08.2017
\t\t\t'cmdselectnone': 'Зняти вибір', // from v2.1.28 added 15.08.2017
\t\t\t'cmdselectinvert': 'Інвертувати вибір', // from v2.1.28 added 15.08.2017
\t\t\t'cmdopennew'   : 'Відкрити у новому вікні', // from v2.1.38 added 3.4.2018
\t\t\t'cmdhide'      : 'Сховати (Налаштування)', // from v2.1.41 added 24.7.2018

\t\t\t/*********************************** buttons ***********************************/
\t\t\t'btnClose'  : 'Закрити',
\t\t\t'btnSave'   : 'Зберегти',
\t\t\t'btnRm'     : 'Вилучити',
\t\t\t'btnApply'  : 'Застосувати',
\t\t\t'btnCancel' : 'Скасувати',
\t\t\t'btnNo'     : 'Ні',
\t\t\t'btnYes'    : 'Так',
\t\t\t'btnMount'  : 'Підключити',  // added 18.04.2012
\t\t\t'btnApprove': 'Перейти в \$1 і прийняти', // from v2.1 added 26.04.2012
\t\t\t'btnUnmount': 'Відключити', // from v2.1 added 30.04.2012
\t\t\t'btnConv'   : 'Конвертувати', // from v2.1 added 08.04.2014
\t\t\t'btnCwd'    : 'Тут',      // from v2.1 added 22.5.2015
\t\t\t'btnVolume' : 'Розділ',    // from v2.1 added 22.5.2015
\t\t\t'btnAll'    : 'Всі',       // from v2.1 added 22.5.2015
\t\t\t'btnMime'   : 'MIME тип', // from v2.1 added 22.5.2015
\t\t\t'btnFileName':'Назва файла',  // from v2.1 added 22.5.2015
\t\t\t'btnSaveClose': 'Зберегти і вийти', // from v2.1 added 12.6.2015
\t\t\t'btnBackup' : 'Резервна копія', // fromv2.1 added 28.11.2015
\t\t\t'btnRename'    : 'Перейменувати',      // from v2.1.24 added 6.4.2017
\t\t\t'btnRenameAll' : 'Перейменуваті(Усі)', // from v2.1.24 added 6.4.2017
\t\t\t'btnPrevious' : 'Попер. (\$1/\$2)', // from v2.1.24 added 11.5.2017
\t\t\t'btnNext'     : 'Наступ. (\$1/\$2)', // from v2.1.24 added 11.5.2017
\t\t\t'btnSaveAs'   : 'Зберегти як', // from v2.1.25 added 24.5.2017

\t\t\t/******************************** notifications ********************************/
\t\t\t'ntfopen'     : 'Відкрити теку',
\t\t\t'ntffile'     : 'Відкрити файл',
\t\t\t'ntfreload'   : 'Перечитати вміст теки',
\t\t\t'ntfmkdir'    : 'Створення теки',
\t\t\t'ntfmkfile'   : 'Створення файлів',
\t\t\t'ntfrm'       : 'Вилучити файли',
\t\t\t'ntfcopy'     : 'Копіювати файли',
\t\t\t'ntfmove'     : 'Перенести файли',
\t\t\t'ntfprepare'  : 'Підготовка до копіювання файлів',
\t\t\t'ntfrename'   : 'Перейменувати файли',
\t\t\t'ntfupload'   : 'Відвантажити файли',
\t\t\t'ntfdownload' : 'Завантажити файли',
\t\t\t'ntfsave'     : 'Записати файли',
\t\t\t'ntfarchive'  : 'Створення архіву',
\t\t\t'ntfextract'  : 'Розпаковування архіву',
\t\t\t'ntfsearch'   : 'Пошук файлів',
\t\t\t'ntfresize'   : 'Зміна розміру світлини',
\t\t\t'ntfsmth'     : 'Виконуємо',
\t\t\t'ntfloadimg'  : 'Завантаження зображення',
\t\t\t'ntfnetmount' : 'Монтування мережевого диска', // added 18.04.2012
\t\t\t'ntfnetunmount': 'Розмонтування мережевого диска', // from v2.1 added 30.04.2012
\t\t\t'ntfdim'      : 'Визначення розміру світлини', // added 20.05.2013
\t\t\t'ntfreaddir'  : 'Читання інформації директорії', // from v2.1 added 01.07.2013
\t\t\t'ntfurl'      : 'отримання URL посилання', // from v2.1 added 11.03.2014
\t\t\t'ntfchmod'    : 'Зміна прав файлу', // from v2.1 added 20.6.2015
\t\t\t'ntfpreupload': 'Перевірка імені завантажуваного файла', // from v2.1 added 31.11.2015
\t\t\t'ntfzipdl'    : 'Створення файлу для завантаження', // from v2.1.7 added 23.1.2016
\t\t\t'ntfparents'  : 'Отримання інформації про шлях', // from v2.1.17 added 2.11.2016
\t\t\t'ntfchunkmerge': 'Обробка вивантаженого файлу', // from v2.1.17 added 2.11.2016
\t\t\t'ntftrash'    : 'Переміщуємо до смітника', // from v2.1.24 added 2.5.2017
\t\t\t'ntfrestore'  : 'Відновлюємо зі смітника', // from v2.1.24 added 3.5.2017
\t\t\t'ntfchkdir'   : 'Перевіряємо теку призначення', // from v2.1.24 added 3.5.2017
\t\t\t'ntfundo'     : 'Скасування попередньої дії', // from v2.1.27 added 31.07.2017
\t\t\t'ntfredo'     : 'Повторення раніше скасованої дії', // from v2.1.27 added 31.07.2017
\t\t\t'ntfchkcontent' : 'Перевірка вмісту', // from v2.1.41 added 3.8.2018

\t\t\t/*********************************** volumes *********************************/
\t\t\t'volume_Trash' : 'Смітник', //from v2.1.24 added 29.4.2017

\t\t\t/************************************ dates **********************************/
\t\t\t'dateUnknown' : 'невідомо',
\t\t\t'Today'       : 'сьогодні',
\t\t\t'Yesterday'   : 'вчора',
\t\t\t'msJan'       : 'Січ',
\t\t\t'msFeb'       : 'Лют',
\t\t\t'msMar'       : 'Бер',
\t\t\t'msApr'       : 'Кві',
\t\t\t'msMay'       : 'Тра',
\t\t\t'msJun'       : 'Чер',
\t\t\t'msJul'       : 'Лип',
\t\t\t'msAug'       : 'Сер',
\t\t\t'msSep'       : 'Вер',
\t\t\t'msOct'       : 'Жов',
\t\t\t'msNov'       : 'Лис',
\t\t\t'msDec'       : 'Гру',
\t\t\t'January'     : 'січня',
\t\t\t'February'    : 'лютого',
\t\t\t'March'       : 'березня',
\t\t\t'April'       : 'квітня',
\t\t\t'May'         : 'травня',
\t\t\t'June'        : 'червня',
\t\t\t'July'        : 'липня',
\t\t\t'August'      : 'серпня',
\t\t\t'September'   : 'вересня',
\t\t\t'October'     : 'жовтня',
\t\t\t'November'    : 'листопада',
\t\t\t'December'    : 'грудня',
\t\t\t'Sunday'      : 'Неділя',
\t\t\t'Monday'      : 'Понеділок',
\t\t\t'Tuesday'     : 'Вівторок',
\t\t\t'Wednesday'   : 'Середа',
\t\t\t'Thursday'    : 'Четвер',
\t\t\t'Friday'      : 'П’ятниця',
\t\t\t'Saturday'    : 'Субота',
\t\t\t'Sun'         : 'Нд',
\t\t\t'Mon'         : 'Пн',
\t\t\t'Tue'         : 'Вт',
\t\t\t'Wed'         : 'Ср',
\t\t\t'Thu'         : 'Чт',
\t\t\t'Fri'         : 'Пт',
\t\t\t'Sat'         : 'Сб',

\t\t\t/******************************** sort variants ********************************/
\t\t\t'sortname'          : 'за назвою',
\t\t\t'sortkind'          : 'за типом',
\t\t\t'sortsize'          : 'за розміром',
\t\t\t'sortdate'          : 'за датою',
\t\t\t'sortFoldersFirst'  : 'Список тек',
\t\t\t'sortperm'          : 'за дозволами', // from v2.1.13 added 13.06.2016
\t\t\t'sortmode'          : 'за режимом',       // from v2.1.13 added 13.06.2016
\t\t\t'sortowner'         : 'за власником',      // from v2.1.13 added 13.06.2016
\t\t\t'sortgroup'         : 'за групою',      // from v2.1.13 added 13.06.2016
\t\t\t'sortAlsoTreeview'  : 'Також вигляд дерева',  // from v2.1.15 added 01.08.2016

\t\t\t/********************************** new items **********************************/
\t\t\t'untitled file.txt' : 'неназваний файл.txt', // added 10.11.2015
\t\t\t'untitled folder'   : 'неназвана тека',   // added 10.11.2015
\t\t\t'Archive'           : 'НовийАрхів',  // from v2.1 added 10.11.2015
\t\t\t'untitled file'     : 'НовийФайл.\$1',  // from v2.1.41 added 6.8.2018
\t\t\t'extentionfile'     : '\$1: Файл',    // from v2.1.41 added 6.8.2018
\t\t\t'extentiontype'     : '\$1: \$2 ',      // from v2.1.43 added 17.10.2018

\t\t\t/********************************** messages **********************************/
\t\t\t'confirmReq'      : 'Необхідне підтвердження',
\t\t\t'confirmRm'       : 'Ви справді хочете вилучити файли?<br/>Операція незворотня!',
\t\t\t'confirmRepl'     : 'Замінити старий файл новим? (при наявності тек вони будуть об\\'єднані. Для резервної копії та заміни оберіть Резервну Копію)',
\t\t\t'confirmRest'     : 'Замінити існуючий об\\'єкт об\\'єктом зі смітника?', // fromv2.1.24 added 5.5.2017
\t\t\t'confirmConvUTF8' : 'Не у UTF-8<br/>Конвертувати у UTF-8?<br/>Вміст стане у UTF-8 збереженням після конвертації.', // from v2.1 added 08.04.2014
\t\t\t'confirmNonUTF8'  : 'Кодування символів цього файлу неможливо визначити. Потрібно тимчасово конвертувати його у UTF-8 для редагування.<br/>Оберіть кодування цього файлу.', // from v2.1.19 added 28.11.2016
\t\t\t'confirmNotSave'  : 'Було внесено зміни.<br/>Якщо ії не зберегти, їх буде втрачено.', // from v2.1 added 15.7.2015
\t\t\t'confirmTrash'    : 'Ви точно бажаєте перемістити ці об\\'єкти до смітника?', //from v2.1.24 added 29.4.2017
\t\t\t'confirmMove'     : 'Ви точно бажаєте перемістити об\\'єкти до \"\$1\"?', //from v2.1.50 added 27.7.2019
\t\t\t'apllyAll'        : 'Застосувати до всіх',
\t\t\t'name'            : 'Назва',
\t\t\t'size'            : 'Розмір',
\t\t\t'perms'           : 'Доступи',
\t\t\t'modify'          : 'Змінено',
\t\t\t'kind'            : 'Тип',
\t\t\t'read'            : 'читання',
\t\t\t'write'           : 'запис',
\t\t\t'noaccess'        : 'недоступно',
\t\t\t'and'             : 'і',
\t\t\t'unknown'         : 'невідомо',
\t\t\t'selectall'       : 'Вибрати всі файли',
\t\t\t'selectfiles'     : 'Вибрати файл(и)',
\t\t\t'selectffile'     : 'Вибрати перший файл',
\t\t\t'selectlfile'     : 'Вибрати останній файл',
\t\t\t'viewlist'        : 'Списком',
\t\t\t'viewicons'       : 'Значками',
\t\t\t'viewSmall'       : 'Маленькі значки', // from v2.1.39 added 22.5.2018
\t\t\t'viewMedium'      : 'Середні значки', // from v2.1.39 added 22.5.2018
\t\t\t'viewLarge'       : 'Великі значки', // from v2.1.39 added 22.5.2018
\t\t\t'viewExtraLarge'  : 'Дуже великі значки', // from v2.1.39 added 22.5.2018
\t\t\t'places'          : 'Розташування',
\t\t\t'calc'            : 'Вирахувати',
\t\t\t'path'            : 'Шлях',
\t\t\t'aliasfor'        : 'Аліас для',
\t\t\t'locked'          : 'Заблоковано',
\t\t\t'dim'             : 'Розміри',
\t\t\t'files'           : 'Файли',
\t\t\t'folders'         : 'теки',
\t\t\t'items'           : 'Елементи',
\t\t\t'yes'             : 'так',
\t\t\t'no'              : 'ні',
\t\t\t'link'            : 'Посилання',
\t\t\t'searcresult'     : 'Результати пошуку',
\t\t\t'selected'        : 'Вибрані елементи',
\t\t\t'about'           : 'Про',
\t\t\t'shortcuts'       : 'Ярлики',
\t\t\t'help'            : 'Допомога',
\t\t\t'webfm'           : 'Web-менеджер файлів',
\t\t\t'ver'             : 'Версія',
\t\t\t'protocolver'     : 'версія протоколу',
\t\t\t'homepage'        : 'Сторінка проекту',
\t\t\t'docs'            : 'Документація',
\t\t\t'github'          : 'Fork us on Github',
\t\t\t'twitter'         : 'Слідкуйте у Твітері',
\t\t\t'facebook'        : 'Приєднуйтесь у фейсбуці',
\t\t\t'team'            : 'Автори',
\t\t\t'chiefdev'        : 'головний розробник',
\t\t\t'developer'       : 'розробник',
\t\t\t'contributor'     : 'учасник',
\t\t\t'maintainer'      : 'супроводжувач',
\t\t\t'translator'      : 'перекладач',
\t\t\t'icons'           : 'Значки',
\t\t\t'dontforget'      : 'і не забудьте рушничок',
\t\t\t'shortcutsof'     : 'Створення посилань вимкнено',
\t\t\t'dropFiles'       : 'Кидайте файли сюди',
\t\t\t'or'              : 'або',
\t\t\t'selectForUpload' : 'Виберіть файли для відвантаження',
\t\t\t'moveFiles'       : 'Перемістити файли',
\t\t\t'copyFiles'       : 'Копіювати файли',
\t\t\t'restoreFiles'    : 'Відновити об\\'єкти', // from v2.1.24 added 5.5.2017
\t\t\t'rmFromPlaces'    : 'Вилучити з розташувань',
\t\t\t'aspectRatio'     : 'Співвідношення',
\t\t\t'scale'           : 'Масштаб',
\t\t\t'width'           : 'Ширина',
\t\t\t'height'          : 'Висота',
\t\t\t'resize'          : 'Змінити розмір',
\t\t\t'crop'            : 'Обрізати',
\t\t\t'rotate'          : 'Повернути',
\t\t\t'rotate-cw'       : 'Повернути на 90 градусів за год. стр.',
\t\t\t'rotate-ccw'      : 'Повернути на 90 градусів проти год. стр.',
\t\t\t'degree'          : 'Градус',
\t\t\t'netMountDialogTitle' : 'Змонтувати носій у мережі', // added 18.04.2012
\t\t\t'protocol'            : 'версія протоколу', // added 18.04.2012
\t\t\t'host'                : 'Хост', // added 18.04.2012
\t\t\t'port'                : 'Порт', // added 18.04.2012
\t\t\t'user'                : 'Логін', // added 18.04.2012
\t\t\t'pass'                : 'Пароль', // added 18.04.2012
\t\t\t'confirmUnmount'      : 'Ви відмонтовуєте \$1?',  // from v2.1 added 30.04.2012
\t\t\t'dropFilesBrowser': 'Перетягніть або вставте файли з оглядача', // from v2.1 added 30.05.2012
\t\t\t'dropPasteFiles'  : 'Перетягніть файли, Вставте URL або світлини (з буфера обміну) сюди', // from v2.1 added 07.04.2014
\t\t\t'encoding'        : 'Кодування', // from v2.1 added 19.12.2014
\t\t\t'locale'          : 'Локаль',   // from v2.1 added 19.12.2014
\t\t\t'searchTarget'    : 'Призначення: \$1',                // from v2.1 added 22.5.2015
\t\t\t'searchMime'      : 'Пошук за введеним типом MIME', // from v2.1 added 22.5.2015
\t\t\t'owner'           : 'Власник', // from v2.1 added 20.6.2015
\t\t\t'group'           : 'Група', // from v2.1 added 20.6.2015
\t\t\t'other'           : 'Інші', // from v2.1 added 20.6.2015
\t\t\t'execute'         : 'Виконання', // from v2.1 added 20.6.2015
\t\t\t'perm'            : 'Дозвіл', // from v2.1 added 20.6.2015
\t\t\t'mode'            : 'Режим', // from v2.1 added 20.6.2015
\t\t\t'emptyFolder'     : 'Тека порожня', // from v2.1.6 added 30.12.2015
\t\t\t'emptyFolderDrop' : 'Тека порожня\\\\A Перетягніть об\\'єкти для додавання', // from v2.1.6 added 30.12.2015
\t\t\t'emptyFolderLTap' : 'Тека порожня\\\\A Для додавання об\\'єктів торкніть та утримуйте', // from v2.1.6 added 30.12.2015
\t\t\t'quality'         : 'Якість', // from v2.1.6 added 5.1.2016
\t\t\t'autoSync'        : 'Авто синх.',  // from v2.1.6 added 10.1.2016
\t\t\t'moveUp'          : 'Пересунути вгору',  // from v2.1.6 added 18.1.2016
\t\t\t'getLink'         : 'Отримати URL', // from v2.1.7 added 9.2.2016
\t\t\t'selectedItems'   : 'Обрані об\\'єкти (\$1)', // from v2.1.7 added 2.19.2016
\t\t\t'folderId'        : 'ID теки', // from v2.1.10 added 3.25.2016
\t\t\t'offlineAccess'   : 'Дозволити доступ офлайн', // from v2.1.10 added 3.25.2016
\t\t\t'reAuth'          : 'Для реаутентифікації', // from v2.1.10 added 3.25.2016
\t\t\t'nowLoading'      : 'Зараз завантажуємо...', // from v2.1.12 added 4.26.2016
\t\t\t'openMulti'       : 'Відкрити декілька файлів', // from v2.1.12 added 5.14.2016
\t\t\t'openMultiConfirm': 'Ви намагаєтесь відкрити \$1 файлів. Ви впевнені що хочете відкрити ії у оглядачі?', // from v2.1.12 added 5.14.2016
\t\t\t'emptySearch'     : 'Пошук не дав результатів у обраному місці.', // from v2.1.12 added 5.16.2016
\t\t\t'editingFile'     : 'Редагує файл.', // from v2.1.13 added 6.3.2016
\t\t\t'hasSelected'     : 'Ви обрали \$1 об\\'єктів.', // from v2.1.13 added 6.3.2016
\t\t\t'hasClipboard'    : 'У вас є \$1 об\\'єктів у буфері обміну.', // from v2.1.13 added 6.3.2016
\t\t\t'incSearchOnly'   : 'Інкрементний пошук є тільки для поточного перегляду.', // from v2.1.13 added 6.30.2016
\t\t\t'reinstate'       : 'Відновити', // from v2.1.15 added 3.8.2016
\t\t\t'complete'        : '\$1 виконано', // from v2.1.15 added 21.8.2016
\t\t\t'contextmenu'     : 'Контекстне меню', // from v2.1.15 added 9.9.2016
\t\t\t'pageTurning'     : 'Обертання сторінки', // from v2.1.15 added 10.9.2016
\t\t\t'volumeRoots'     : 'Кореневі теки носіїв', // from v2.1.16 added 16.9.2016
\t\t\t'reset'           : 'Обнулити', // from v2.1.16 added 1.10.2016
\t\t\t'bgcolor'         : 'Колір фону', // from v2.1.16 added 1.10.2016
\t\t\t'colorPicker'     : 'Обрати колір', // from v2.1.16 added 1.10.2016
\t\t\t'8pxgrid'         : 'сітка 8px', // from v2.1.16 added 4.10.2016
\t\t\t'enabled'         : 'Увімкнено', // from v2.1.16 added 4.10.2016
\t\t\t'disabled'        : 'Вимкнено', // from v2.1.16 added 4.10.2016
\t\t\t'emptyIncSearch'  : 'Результати пошуку у поточному перегляді відсутні.\\\\AНатисніть [Enter] для розширення критеріїв пошуку.', // from v2.1.16 added 5.10.2016
\t\t\t'emptyLetSearch'  : 'Результати пошуку за першою літерою відсутні у поточному перегляді.', // from v2.1.23 added 24.3.2017
\t\t\t'textLabel'       : 'Текстова мітка', // from v2.1.17 added 13.10.2016
\t\t\t'minsLeft'        : '\$1 хв. залишилось', // from v2.1.17 added 13.11.2016
\t\t\t'openAsEncoding'  : 'Відкрити знову з обраним кодуванням', // from v2.1.19 added 2.12.2016
\t\t\t'saveAsEncoding'  : 'Зберегти з обраним кодуванням', // from v2.1.19 added 2.12.2016
\t\t\t'selectFolder'    : 'Обрати теку', // from v2.1.20 added 13.12.2016
\t\t\t'firstLetterSearch': 'Пошук за першою літерою', // from v2.1.23 added 24.3.2017
\t\t\t'presets'         : 'Шаблони', // from v2.1.25 added 26.5.2017
\t\t\t'tooManyToTrash'  : 'Дуже багато об\\'єктів для переміщення у смітник.', // from v2.1.25 added 9.6.2017
\t\t\t'TextArea'        : 'ТекстовеПоле', // from v2.1.25 added 14.6.2017
\t\t\t'folderToEmpty'   : 'Спорожнити теку \"\$1\".', // from v2.1.25 added 22.6.2017
\t\t\t'filderIsEmpty'   : 'Тека \"\$1\" порожня.', // from v2.1.25 added 22.6.2017
\t\t\t'preference'      : 'Налаштування', // from v2.1.26 added 28.6.2017
\t\t\t'language'        : 'Мова', // from v2.1.26 added 28.6.2017
\t\t\t'clearBrowserData': 'Ініціювати налаштування збережені у цьому оглядачі', // from v2.1.26 added 28.6.2017
\t\t\t'toolbarPref'     : 'Налаштування лотку інструментів', // from v2.1.27 added 2.8.2017
\t\t\t'charsLeft'       : '... \$1 символів залишилось.',  // from v2.1.29 added 30.8.2017
\t\t\t'linesLeft'       : '... \$1 рядків залишилось.',  // from v2.1.52 added 16.1.2020
\t\t\t'sum'             : 'Сума', // from v2.1.29 added 28.9.2017
\t\t\t'roughFileSize'   : 'Приблизний розмір файу', // from v2.1.30 added 2.11.2017
\t\t\t'autoFocusDialog' : 'Фокусувати елемент діалога при наведенні курсора миші',  // from v2.1.30 added 2.11.2017
\t\t\t'select'          : 'Обрати', // from v2.1.30 added 23.11.2017
\t\t\t'selectAction'    : 'Дія при виборі файла', // from v2.1.30 added 23.11.2017
\t\t\t'useStoredEditor' : 'Відкрити редактором, що використовувався крайній раз.', // from v2.1.30 added 23.11.2017
\t\t\t'selectinvert'    : 'Інвертувати вибір', // from v2.1.30 added 25.11.2017
\t\t\t'renameMultiple'  : 'Ви точно хочете перейменувати \$1 обраних об\\'єктів на кшталт \$2?<br/>Це незворотна дія!', // from v2.1.31 added 4.12.2017
\t\t\t'batchRename'     : 'Пакетне перейменування', // from v2.1.31 added 8.12.2017
\t\t\t'plusNumber'      : '+ Число', // from v2.1.31 added 8.12.2017
\t\t\t'asPrefix'        : 'Додати префікс', // from v2.1.31 added 8.12.2017
\t\t\t'asSuffix'        : 'Додати суфікс', // from v2.1.31 added 8.12.2017
\t\t\t'changeExtention' : 'Змінити розширення', // from v2.1.31 added 8.12.2017
\t\t\t'columnPref'      : 'Налаштування стовпчиків (вигляд списку)', // from v2.1.32 added 6.2.2018
\t\t\t'reflectOnImmediate' : 'Усі зміни будуть негайно застосовані у архіві.', // from v2.1.33 added 2.3.2018
\t\t\t'reflectOnUnmount'   : 'Деякі зміни не буде видно до розмонтування носія.', // from v2.1.33 added 2.3.2018
\t\t\t'unmountChildren' : 'Наступний(і) носій(ї) на цьому носії також не змонтовані. Ви точно хочете відмонтувати носій?', // from v2.1.33 added 5.3.2018
\t\t\t'selectionInfo'   : 'Інформація про обране', // from v2.1.33 added 7.3.2018
\t\t\t'hashChecker'     : 'Алгоритми для показу хешу файла', // from v2.1.33 added 10.3.2018
\t\t\t'infoItems'       : 'Інформаційні об\\'єкти (Панель інформації про обране)', // from v2.1.38 added 28.3.2018
\t\t\t'pressAgainToExit': 'Натисніть знову для виходу.', // from v2.1.38 added 1.4.2018
\t\t\t'toolbar'         : 'Панель інструментів', // from v2.1.38 added 4.4.2018
\t\t\t'workspace'       : 'Робочий простір', // from v2.1.38 added 4.4.2018
\t\t\t'dialog'          : 'Діалог', // from v2.1.38 added 4.4.2018
\t\t\t'all'             : 'Усі', // from v2.1.38 added 4.4.2018
\t\t\t'iconSize'        : 'Розмір значків (вигляд значків)', // from v2.1.39 added 7.5.2018
\t\t\t'editorMaximized' : 'Відкрити розгорнуте вікно редактора', // from v2.1.40 added 30.6.2018
\t\t\t'editorConvNoApi' : 'Через неможливість конвертування API, сконвертуйте на вебсайті.', //from v2.1.40 added 8.7.2018
\t\t\t'editorConvNeedUpload' : 'Після конвертування вам треба завантажити за допомогою URL або збереженого файу, для збереження конвертованого файлу.', //from v2.1.40 added 8.7.2018
\t\t\t'convertOn'       : 'Конвертувати сайт з \$1', // from v2.1.40 added 10.7.2018
\t\t\t'integrations'    : 'Інтеграції', // from v2.1.40 added 11.7.2018
\t\t\t'integrationWith' : 'Цей elFinder має наступні інтегровані сервіси. Перевірте умови використання, політику приватності та інше перед використанням.', // from v2.1.40 added 11.7.2018
\t\t\t'showHidden'      : 'Показати приховані об\\'єкти', // from v2.1.41 added 24.7.2018
\t\t\t'hideHidden'      : 'Сховати приховані об\\'єкти', // from v2.1.41 added 24.7.2018
\t\t\t'toggleHidden'    : 'Показати/Сховати приховані о\\'єкти', // from v2.1.41 added 24.7.2018
\t\t\t'makefileTypes'   : 'Типи файлів, які можна створювати', // from v2.1.41 added 7.8.2018
\t\t\t'typeOfTextfile'  : 'Тип текстового файлу', // from v2.1.41 added 7.8.2018
\t\t\t'add'             : 'Додати', // from v2.1.41 added 7.8.2018
\t\t\t'theme'           : 'Тема', // from v2.1.43 added 19.10.2018
\t\t\t'default'         : 'Як зазвичай', // from v2.1.43 added 19.10.2018
\t\t\t'description'     : 'Опис', // from v2.1.43 added 19.10.2018
\t\t\t'website'         : 'Веб-сайт', // from v2.1.43 added 19.10.2018
\t\t\t'author'          : 'Автор', // from v2.1.43 added 19.10.2018
\t\t\t'email'           : 'E-mail', // from v2.1.43 added 19.10.2018
\t\t\t'license'         : 'Ліцензія', // from v2.1.43 added 19.10.2018
\t\t\t'exportToSave'    : 'Об\\'єкт неможливо зберегти. Щоб уникнути втрати правок вам треба експортувати ії до себе у пристрій.', // from v2.1.44 added 1.12.2018
\t\t\t'dblclickToSelect': 'Двічі клацніть файл для вибору.', // from v2.1.47 added 22.1.2019
\t\t\t'useFullscreen'   : 'Використовувати повноекранний режим', // from v2.1.47 added 19.2.2019

\t\t\t/********************************** mimetypes **********************************/
\t\t\t'kindUnknown'     : 'Невідомо',
\t\t\t'kindRoot'        : 'Коренева тека носія', // from v2.1.16 added 16.10.2016
\t\t\t'kindFolder'      : 'Папка',
\t\t\t'kindSelects'     : 'Вибір', // from v2.1.29 added 29.8.2017
\t\t\t'kindAlias'       : 'Аліас',
\t\t\t'kindAliasBroken' : 'Пошкоджений аліас',
\t\t\t// applications
\t\t\t'kindApp'         : 'Програма',
\t\t\t'kindPostscript'  : 'Документ Postscript',
\t\t\t'kindMsOffice'    : 'Документ Microsoft Office',
\t\t\t'kindMsWord'      : 'Документ Microsoft Word',
\t\t\t'kindMsExcel'     : 'Документ Microsoft Excel',
\t\t\t'kindMsPP'        : 'Презентація Microsoft Powerpoint',
\t\t\t'kindOO'          : 'Документ Open Office',
\t\t\t'kindAppFlash'    : 'Flash-додаток',
\t\t\t'kindPDF'         : 'Портативний формат документів (PDF)',
\t\t\t'kindTorrent'     : 'Файл Bittorrent',
\t\t\t'kind7z'          : 'Архів 7z',
\t\t\t'kindTAR'         : 'Архів TAR',
\t\t\t'kindGZIP'        : 'Архів GZIP',
\t\t\t'kindBZIP'        : 'Архів BZIP',
\t\t\t'kindXZ'          : 'Архів XZ',
\t\t\t'kindZIP'         : 'Архів ZIP',
\t\t\t'kindRAR'         : 'Архів RAR',
\t\t\t'kindJAR'         : 'Файл Java JAR',
\t\t\t'kindTTF'         : 'Шрифт True Type',
\t\t\t'kindOTF'         : 'Шрифт Open Type',
\t\t\t'kindRPM'         : 'Пакунок RPM',
\t\t\t// texts
\t\t\t'kindText'        : 'Текстовий документ',
\t\t\t'kindTextPlain'   : 'Простий текст',
\t\t\t'kindPHP'         : 'Код PHP',
\t\t\t'kindCSS'         : 'Каскадна таблиця стилів (CSS)',
\t\t\t'kindHTML'        : 'Документ HTML',
\t\t\t'kindJS'          : 'Код Javascript',
\t\t\t'kindRTF'         : 'Файл RTF',
\t\t\t'kindC'           : 'Код C',
\t\t\t'kindCHeader'     : 'Заголовковий код C',
\t\t\t'kindCPP'         : 'Код C++',
\t\t\t'kindCPPHeader'   : 'Заголовковий код C++',
\t\t\t'kindShell'       : 'Скрипт Unix shell',
\t\t\t'kindPython'      : 'Код Python',
\t\t\t'kindJava'        : 'Код Java',
\t\t\t'kindRuby'        : 'Код Ruby',
\t\t\t'kindPerl'        : 'Код Perl',
\t\t\t'kindSQL'         : 'Код SQL',
\t\t\t'kindXML'         : 'Документ XML',
\t\t\t'kindAWK'         : 'Код AWK',
\t\t\t'kindCSV'         : 'Значення розділені комою (CSV)',
\t\t\t'kindDOCBOOK'     : 'Документ Docbook XML',
\t\t\t'kindMarkdown'    : 'Текст Markdown', // added 20.7.2015
\t\t\t// images
\t\t\t'kindImage'       : 'Зображення',
\t\t\t'kindBMP'         : 'Зображення BMP',
\t\t\t'kindJPEG'        : 'Зображення JPEG',
\t\t\t'kindGIF'         : 'Зображення GIF',
\t\t\t'kindPNG'         : 'Зображення PNG',
\t\t\t'kindTIFF'        : 'Зображення TIFF',
\t\t\t'kindTGA'         : 'Зображення TGA',
\t\t\t'kindPSD'         : 'Зображення Adobe Photoshop',
\t\t\t'kindXBITMAP'     : 'Зображення X bitmap',
\t\t\t'kindPXM'         : 'Зображення Pixelmator',
\t\t\t// media
\t\t\t'kindAudio'       : 'Аудіо',
\t\t\t'kindAudioMPEG'   : 'Аудіо MPEG',
\t\t\t'kindAudioMPEG4'  : 'Аудіо MPEG-4',
\t\t\t'kindAudioMIDI'   : 'Аудіо MIDI',
\t\t\t'kindAudioOGG'    : 'Аудіо Ogg Vorbis',
\t\t\t'kindAudioWAV'    : 'Аудіо WAV',
\t\t\t'AudioPlaylist'   : 'Список відтворення MP3',
\t\t\t'kindVideo'       : 'Відео',
\t\t\t'kindVideoDV'     : 'Відео DV',
\t\t\t'kindVideoMPEG'   : 'Відео MPEG',
\t\t\t'kindVideoMPEG4'  : 'Відео MPEG-4',
\t\t\t'kindVideoAVI'    : 'Відео AVI',
\t\t\t'kindVideoMOV'    : 'Відео Quick Time',
\t\t\t'kindVideoWM'     : 'Відео Windows Media',
\t\t\t'kindVideoFlash'  : 'Відео Flash',
\t\t\t'kindVideoMKV'    : 'Відео Matroska',
\t\t\t'kindVideoOGG'    : 'Відео Ogg'
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
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.uk.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.uk.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.uk.js");
    }
}
