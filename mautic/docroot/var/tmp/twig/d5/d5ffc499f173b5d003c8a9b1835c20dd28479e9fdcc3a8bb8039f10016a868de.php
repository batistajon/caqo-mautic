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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.ru.js */
class __TwigTemplate_14694cc313e40ba5e363ec80b4817549904f53fcdf3bb4b3d58ee640bf1216b0 extends Template
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
 * Русский язык translation
 * @author Dmitry \"dio\" Levashov <dio@std42.ru>
 * @author Andrew Berezovsky <andrew.berezovsky@gmail.com>
 * @author Alex Yashkin <alex@yashkin.by>
 * @version 2020-01-24
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
\telFinder.prototype.i18.ru = {
\t\ttranslator : 'Dmitry \"dio\" Levashov &lt;dio@std42.ru&gt;, Andrew Berezovsky &lt;andrew.berezovsky@gmail.com&gt;, Alex Yashkin &lt;alex@yashkin.by&gt;',
\t\tlanguage   : 'Русский язык',
\t\tdirection  : 'ltr',
\t\tdateFormat : 'd M Y H:i', // will show like: 24 Янв 2020 15:00
\t\tfancyDateFormat : '\$1 H:i', // will show like: Сегодня 15:00
\t\tnonameDateFormat : 'ymd-His', // noname upload will show like: 200124-150054
\t\tmessages   : {

\t\t\t/********************************** errors **********************************/
\t\t\t'error'                : 'Ошибка',
\t\t\t'errUnknown'           : 'Неизвестная ошибка.',
\t\t\t'errUnknownCmd'        : 'Неизвестная команда.',
\t\t\t'errJqui'              : 'Отсутствуют необходимые компоненты jQuery UI - selectable, draggable и droppable.',
\t\t\t'errNode'              : 'Отсутствует DOM элемент для инициализации elFinder.',
\t\t\t'errURL'               : 'Неверная конфигурация elFinder! Не указан URL.',
\t\t\t'errAccess'            : 'Доступ запрещен.',
\t\t\t'errConnect'           : 'Не удалось соединиться с сервером.',
\t\t\t'errAbort'             : 'Соединение прервано.',
\t\t\t'errTimeout'           : 'Таймаут соединения.',
\t\t\t'errNotFound'          : 'Сервер не найден.',
\t\t\t'errResponse'          : 'Некорректный ответ сервера.',
\t\t\t'errConf'              : 'Некорректная настройка сервера.',
\t\t\t'errJSON'              : 'Модуль PHP JSON не установлен.',
\t\t\t'errNoVolumes'         : 'Отсутствуют корневые директории достуные для чтения.',
\t\t\t'errCmdParams'         : 'Некорректные параметры команды \"\$1\".',
\t\t\t'errDataNotJSON'       : 'Данные не в формате JSON.',
\t\t\t'errDataEmpty'         : 'Данные отсутствуют.',
\t\t\t'errCmdReq'            : 'Для запроса к серверу необходимо указать имя команды.',
\t\t\t'errOpen'              : 'Не удалось открыть \"\$1\".',
\t\t\t'errNotFolder'         : 'Объект не является папкой.',
\t\t\t'errNotFile'           : 'Объект не является файлом.',
\t\t\t'errRead'              : 'Ошибка чтения \"\$1\".',
\t\t\t'errWrite'             : 'Ошибка записи в \"\$1\".',
\t\t\t'errPerm'              : 'Доступ запрещен.',
\t\t\t'errLocked'            : '\"\$1\" защищен и не может быть переименован, перемещен или удален.',
\t\t\t'errExists'            : 'В папке уже существует файл с именем \"\$1\".',
\t\t\t'errInvName'           : 'Недопустимое имя файла.',
\t\t\t'errInvDirname'        : 'Недопустимое имя папки.',  // from v2.1.24 added 12.4.2017
\t\t\t'errFolderNotFound'    : 'Папка не найдена.',
\t\t\t'errFileNotFound'      : 'Файл не найден.',
\t\t\t'errTrgFolderNotFound' : 'Целевая папка \"\$1\" не найдена.',
\t\t\t'errPopup'             : 'Браузер заблокировал открытие нового окна. Чтобы открыть файл, измените настройки браузера.',
\t\t\t'errMkdir'             : 'Ошибка создания папки \"\$1\".',
\t\t\t'errMkfile'            : 'Ошибка создания файла \"\$1\".',
\t\t\t'errRename'            : 'Ошибка переименования \"\$1\".',
\t\t\t'errCopyFrom'          : 'Копирование файлов из директории \"\$1\" запрещено.',
\t\t\t'errCopyTo'            : 'Копирование файлов в директорию \"\$1\" запрещено.',
\t\t\t'errMkOutLink'         : 'Невозможно создать ссылку вне корня раздела.', // from v2.1 added 03.10.2015
\t\t\t'errUpload'            : 'Ошибка загрузки.',  // old name - errUploadCommon
\t\t\t'errUploadFile'        : 'Невозможно загрузить \"\$1\".', // old name - errUpload
\t\t\t'errUploadNoFiles'     : 'Нет файлов для загрузки.',
\t\t\t'errUploadTotalSize'   : 'Превышен допустимый размер загружаемых данных.', // old name - errMaxSize
\t\t\t'errUploadFileSize'    : 'Размер файла превышает допустимый.', //  old name - errFileMaxSize
\t\t\t'errUploadMime'        : 'Недопустимый тип файла.',
\t\t\t'errUploadTransfer'    : 'Ошибка передачи файла \"\$1\".',
\t\t\t'errUploadTemp'        : 'Невозможно создать временный файл для загрузки.', // from v2.1 added 26.09.2015
\t\t\t'errNotReplace'        : 'Объект \"\$1\" по этому адресу уже существует и не может быть заменен объектом другого типа.', // new
\t\t\t'errReplace'           : 'Невозможно заменить \"\$1\".',
\t\t\t'errSave'              : 'Невозможно сохранить \"\$1\".',
\t\t\t'errCopy'              : 'Невозможно скопировать \"\$1\".',
\t\t\t'errMove'              : 'Невозможно переместить \"\$1\".',
\t\t\t'errCopyInItself'      : 'Невозможно скопировать \"\$1\" в самого себя.',
\t\t\t'errRm'                : 'Невозможно удалить \"\$1\".',
\t\t\t'errTrash'             : 'Невозможно переместить в корзину.', // from v2.1.24 added 30.4.2017
\t\t\t'errRmSrc'             : 'Невозможно удалить файлы источника.',
\t\t\t'errExtract'           : 'Невозможно извлечь фалы из \"\$1\".',
\t\t\t'errArchive'           : 'Невозможно создать архив.',
\t\t\t'errArcType'           : 'Неподдерживаемый тип архива.',
\t\t\t'errNoArchive'         : 'Файл не является архивом или неподдерживаемый тип архива.',
\t\t\t'errCmdNoSupport'      : 'Сервер не поддерживает эту команду.',
\t\t\t'errReplByChild'       : 'Невозможно заменить папку \"\$1\" содержащимся в ней объектом.',
\t\t\t'errArcSymlinks'       : 'По соображениям безопасности запрещена распаковка архивов, содержащих ссылки (symlinks) или файлы с недопустимыми именами.', // edited 24.06.2012
\t\t\t'errArcMaxSize'        : 'Размер файлов в архиве превышает максимально разрешенный.',
\t\t\t'errResize'            : 'Не удалось изменить размер \"\$1\".',
\t\t\t'errResizeDegree'      : 'Некорректный градус поворота.',  // added 7.3.2013
\t\t\t'errResizeRotate'      : 'Невозможно повернуть изображение.',  // added 7.3.2013
\t\t\t'errResizeSize'        : 'Некорректный размер изображения.',  // added 7.3.2013
\t\t\t'errResizeNoChange'    : 'Размер изображения не изменился.',  // added 7.3.2013
\t\t\t'errUsupportType'      : 'Неподдерживаемый тип файла.',
\t\t\t'errNotUTF8Content'    : 'Файл \"\$1\" содержит текст в кодировке отличной от UTF-8 и не может быть отредактирован.',  // added 9.11.2011
\t\t\t'errNetMount'          : 'Невозможно подключить \"\$1\".', // added 17.04.2012
\t\t\t'errNetMountNoDriver'  : 'Неподдерживаемый протокол.',     // added 17.04.2012
\t\t\t'errNetMountFailed'    : 'Ошибка монтирования.',         // added 17.04.2012
\t\t\t'errNetMountHostReq'   : 'Требуется указать хост.', // added 18.04.2012
\t\t\t'errSessionExpires'    : 'Сессия была завершена так как превышено время отсутствия активности.',
\t\t\t'errCreatingTempDir'   : 'Невозможно создать временную директорию: \"\$1\"',
\t\t\t'errFtpDownloadFile'   : 'Невозможно скачать файл с FTP: \"\$1\"',
\t\t\t'errFtpUploadFile'     : 'Невозможно загрузить файл на FTP: \"\$1\"',
\t\t\t'errFtpMkdir'          : 'Невозможно создать директорию на FTP: \"\$1\"',
\t\t\t'errArchiveExec'       : 'Ошибка при выполнении архивации: \"\$1\"',
\t\t\t'errExtractExec'       : 'Ошибка при выполнении распаковки: \"\$1\"',
\t\t\t'errNetUnMount'        : 'Невозможно отключить', // from v2.1 added 30.04.2012
\t\t\t'errConvUTF8'          : 'Не конвертируется в UTF-8', // from v2.1 added 08.04.2014
\t\t\t'errFolderUpload'      : 'Если вы хотите загружать папки, попробуйте Google Chrome.', // from v2.1 added 26.6.2015
\t\t\t'errSearchTimeout'     : 'Превышено время ожидания при поиске \"\$1\". Результаты поиска частичные.', // from v2.1 added 12.1.2016
\t\t\t'errReauthRequire'     : 'Требуется повторная авторизация.', // from v2.1.10 added 24.3.2016
\t\t\t'errMaxTargets'        : 'Максимальное число выбираемых файлов: \$1.', // from v2.1.17 added 17.10.2016
\t\t\t'errRestore'           : 'Невозможно восстановить из корзины. Не удалось определить путь для восстановления.', // from v2.1.24 added 3.5.2017
\t\t\t'errEditorNotFound'    : 'Не найден редактор для этого типа файлов.', // from v2.1.25 added 23.5.2017
\t\t\t'errServerError'       : 'Возникла ошибка на стороне сервера.', // from v2.1.25 added 16.6.2017
\t\t\t'errEmpty'             : 'Невозможно очистить папку \"\$1\".', // from v2.1.25 added 22.6.2017
\t\t\t'moreErrors'           : 'Еще ошибок: \$1', // from v2.1.44 added 9.12.2018

\t\t\t/******************************* commands names ********************************/
\t\t\t'cmdarchive'   : 'Создать архив',
\t\t\t'cmdback'      : 'Назад',
\t\t\t'cmdcopy'      : 'Копировать',
\t\t\t'cmdcut'       : 'Вырезать',
\t\t\t'cmddownload'  : 'Скачать',
\t\t\t'cmdduplicate' : 'Сделать копию',
\t\t\t'cmdedit'      : 'Редактировать файл',
\t\t\t'cmdextract'   : 'Распаковать архив',
\t\t\t'cmdforward'   : 'Вперед',
\t\t\t'cmdgetfile'   : 'Выбрать файлы',
\t\t\t'cmdhelp'      : 'О программе',
\t\t\t'cmdhome'      : 'Домой',
\t\t\t'cmdinfo'      : 'Свойства',
\t\t\t'cmdmkdir'     : 'Новая папка',
\t\t\t'cmdmkdirin'   : 'В новую папку', // from v2.1.7 added 19.2.2016
\t\t\t'cmdmkfile'    : 'Новый файл',
\t\t\t'cmdopen'      : 'Открыть',
\t\t\t'cmdpaste'     : 'Вставить',
\t\t\t'cmdquicklook' : 'Быстрый просмотр',
\t\t\t'cmdreload'    : 'Обновить',
\t\t\t'cmdrename'    : 'Переименовать',
\t\t\t'cmdrm'        : 'Удалить',
\t\t\t'cmdtrash'     : 'Переместить в корзину', //from v2.1.24 added 29.4.2017
\t\t\t'cmdrestore'   : 'Восстановить', //from v2.1.24 added 3.5.2017
\t\t\t'cmdsearch'    : 'Поиск файлов',
\t\t\t'cmdup'        : 'Наверх',
\t\t\t'cmdupload'    : 'Загрузить файлы',
\t\t\t'cmdview'      : 'Вид',
\t\t\t'cmdresize'    : 'Изменить размер и повернуть',
\t\t\t'cmdsort'      : 'Сортировать',
\t\t\t'cmdnetmount'  : 'Подключить сетевой раздел', // added 18.04.2012
\t\t\t'cmdnetunmount': 'Отключить', // from v2.1 added 30.04.2012
\t\t\t'cmdplaces'    : 'В избранное', // added 28.12.2014
\t\t\t'cmdchmod'     : 'Изменить права доступа', // from v2.1 added 20.6.2015
\t\t\t'cmdopendir'   : 'Открыть папку', // from v2.1 added 13.1.2016
\t\t\t'cmdcolwidth'  : 'Сбросить ширину колонок', // from v2.1.13 added 12.06.2016
\t\t\t'cmdfullscreen': 'Полный экран', // from v2.1.15 added 03.08.2016
\t\t\t'cmdmove'      : 'Переместить', // from v2.1.15 added 21.08.2016
\t\t\t'cmdempty'     : 'Очистить папку', // from v2.1.25 added 22.06.2017
\t\t\t'cmdundo'      : 'Отменить', // from v2.1.27 added 31.07.2017
\t\t\t'cmdredo'      : 'Вернуть', // from v2.1.27 added 31.07.2017
\t\t\t'cmdpreference': 'Предпочтения', // from v2.1.27 added 03.08.2017
\t\t\t'cmdselectall' : 'Выбрать все', // from v2.1.28 added 15.08.2017
\t\t\t'cmdselectnone': 'Отменить выбор', // from v2.1.28 added 15.08.2017
\t\t\t'cmdselectinvert': 'Инвертировать выбор', // from v2.1.28 added 15.08.2017
\t\t\t'cmdopennew'   : 'Открыть в новом окне', // from v2.1.38 added 3.4.2018
\t\t\t'cmdhide'      : 'Скрыть (персонально)', // from v2.1.41 added 24.7.2018

\t\t\t/*********************************** buttons ***********************************/
\t\t\t'btnClose'  : 'Закрыть',
\t\t\t'btnSave'   : 'Сохранить',
\t\t\t'btnRm'     : 'Удалить',
\t\t\t'btnApply'  : 'Применить',
\t\t\t'btnCancel' : 'Отмена',
\t\t\t'btnNo'     : 'Нет',
\t\t\t'btnYes'    : 'Да',
\t\t\t'btnMount'  : 'Подключить',  // added 18.04.2012
\t\t\t'btnApprove': 'Перейти в \$1 и применить', // from v2.1 added 26.04.2012
\t\t\t'btnUnmount': 'Отключить', // from v2.1 added 30.04.2012
\t\t\t'btnConv'   : 'Конвертировать', // from v2.1 added 08.04.2014
\t\t\t'btnCwd'    : 'Здесь',      // from v2.1 added 22.5.2015
\t\t\t'btnVolume' : 'Раздел',    // from v2.1 added 22.5.2015
\t\t\t'btnAll'    : 'Все',       // from v2.1 added 22.5.2015
\t\t\t'btnMime'   : 'MIME тип', // from v2.1 added 22.5.2015
\t\t\t'btnFileName':'Имя файла',  // from v2.1 added 22.5.2015
\t\t\t'btnSaveClose': 'Сохранить и закрыть', // from v2.1 added 12.6.2015
\t\t\t'btnBackup' : 'Резервная копия', // fromv2.1 added 28.11.2015
\t\t\t'btnRename'    : 'Переименовать',      // from v2.1.24 added 6.4.2017
\t\t\t'btnRenameAll' : 'Переименовать (все)', // from v2.1.24 added 6.4.2017
\t\t\t'btnPrevious' : 'Пред. (\$1/\$2)', // from v2.1.24 added 11.5.2017
\t\t\t'btnNext'     : 'След. (\$1/\$2)', // from v2.1.24 added 11.5.2017
\t\t\t'btnSaveAs'   : 'Сохранить как', // from v2.1.25 added 24.5.2017

\t\t\t/******************************** notifications ********************************/
\t\t\t'ntfopen'     : 'Открыть папку',
\t\t\t'ntffile'     : 'Открыть файл',
\t\t\t'ntfreload'   : 'Обновить текущую папку',
\t\t\t'ntfmkdir'    : 'Создание папки',
\t\t\t'ntfmkfile'   : 'Создание файлов',
\t\t\t'ntfrm'       : 'Удалить файлы',
\t\t\t'ntfcopy'     : 'Скопировать файлы',
\t\t\t'ntfmove'     : 'Переместить файлы',
\t\t\t'ntfprepare'  : 'Подготовка к копированию файлов',
\t\t\t'ntfrename'   : 'Переименовать файлы',
\t\t\t'ntfupload'   : 'Загрузка файлов',
\t\t\t'ntfdownload' : 'Скачивание файлов',
\t\t\t'ntfsave'     : 'Сохранить файлы',
\t\t\t'ntfarchive'  : 'Создание архива',
\t\t\t'ntfextract'  : 'Распаковка архива',
\t\t\t'ntfsearch'   : 'Поиск файлов',
\t\t\t'ntfresize'   : 'Изменение размеров изображений',
\t\t\t'ntfsmth'     : 'Занят важным делом',
\t\t\t'ntfloadimg'  : 'Загрузка изображения',
\t\t\t'ntfnetmount' : 'Подключение сетевого диска', // added 18.04.2012
\t\t\t'ntfnetunmount': 'Отключение сетевого диска', // from v2.1 added 30.04.2012
\t\t\t'ntfdim'      : 'Получение размеров изображения', // added 20.05.2013
\t\t\t'ntfreaddir'  : 'Чтение информации о папке', // from v2.1 added 01.07.2013
\t\t\t'ntfurl'      : 'Получение URL ссылки', // from v2.1 added 11.03.2014
\t\t\t'ntfchmod'    : 'Изменение прав доступа к файлу', // from v2.1 added 20.6.2015
\t\t\t'ntfpreupload': 'Проверка измени загруженного файла', // from v2.1 added 31.11.2015
\t\t\t'ntfzipdl'    : 'Создание файла для скачки', // from v2.1.7 added 23.1.2016
\t\t\t'ntfparents'  : 'Получение информации о пути', // from v2.1.17 added 2.11.2016
\t\t\t'ntfchunkmerge': 'Обработка загруженного файла', // from v2.1.17 added 2.11.2016
\t\t\t'ntftrash'    : 'Перемещение в корзину', // from v2.1.24 added 2.5.2017
\t\t\t'ntfrestore'  : 'Восстановление из корзины', // from v2.1.24 added 3.5.2017
\t\t\t'ntfchkdir'   : 'Проверка папки назначения', // from v2.1.24 added 3.5.2017
\t\t\t'ntfundo'     : 'Отмена предыдущей операции', // from v2.1.27 added 31.07.2017
\t\t\t'ntfredo'     : 'Восстановление предыдущей операции', // from v2.1.27 added 31.07.2017
\t\t\t'ntfchkcontent' : 'Проверка содержимого', // from v2.1.41 added 3.8.2018

\t\t\t/*********************************** volumes *********************************/
\t\t\t'volume_Trash' : 'Корзина', //from v2.1.24 added 29.4.2017

\t\t\t/************************************ dates **********************************/
\t\t\t'dateUnknown' : 'неизвестно',
\t\t\t'Today'       : 'Сегодня',
\t\t\t'Yesterday'   : 'Вчера',
\t\t\t'msJan'       : 'Янв',
\t\t\t'msFeb'       : 'Фев',
\t\t\t'msMar'       : 'Мар',
\t\t\t'msApr'       : 'Апр',
\t\t\t'msMay'       : 'Май',
\t\t\t'msJun'       : 'Июн',
\t\t\t'msJul'       : 'Июл',
\t\t\t'msAug'       : 'Авг',
\t\t\t'msSep'       : 'Сен',
\t\t\t'msOct'       : 'Окт',
\t\t\t'msNov'       : 'Ноя',
\t\t\t'msDec'       : 'Дек',
\t\t\t'January'     : 'Январь',
\t\t\t'February'    : 'Февраль',
\t\t\t'March'       : 'Март',
\t\t\t'April'       : 'Апрель',
\t\t\t'May'         : 'Май',
\t\t\t'June'        : 'Июнь',
\t\t\t'July'        : 'Июль',
\t\t\t'August'      : 'Август',
\t\t\t'September'   : 'Сентябрь',
\t\t\t'October'     : 'Октябрь',
\t\t\t'November'    : 'Ноябрь',
\t\t\t'December'    : 'Декабрь',
\t\t\t'Sunday'      : 'Воскресенье',
\t\t\t'Monday'      : 'Понедельник',
\t\t\t'Tuesday'     : 'Вторник',
\t\t\t'Wednesday'   : 'Среда',
\t\t\t'Thursday'    : 'Четверг',
\t\t\t'Friday'      : 'Пятница',
\t\t\t'Saturday'    : 'Суббота',
\t\t\t'Sun'         : 'Вск',
\t\t\t'Mon'         : 'Пнд',
\t\t\t'Tue'         : 'Втр',
\t\t\t'Wed'         : 'Срд',
\t\t\t'Thu'         : 'Чтв',
\t\t\t'Fri'         : 'Птн',
\t\t\t'Sat'         : 'Сбт',

\t\t\t/******************************** sort variants ********************************/
\t\t\t'sortname'          : 'по имени',
\t\t\t'sortkind'          : 'по типу',
\t\t\t'sortsize'          : 'по размеру',
\t\t\t'sortdate'          : 'по дате',
\t\t\t'sortFoldersFirst'  : 'Папки в начале',
\t\t\t'sortperm'          : 'по разрешениям', // from v2.1.13 added 13.06.2016
\t\t\t'sortmode'          : 'по режиму',       // from v2.1.13 added 13.06.2016
\t\t\t'sortowner'         : 'по владельцу',      // from v2.1.13 added 13.06.2016
\t\t\t'sortgroup'         : 'по группе',      // from v2.1.13 added 13.06.2016
\t\t\t'sortAlsoTreeview'  : 'Также и дерево каталогов',  // from v2.1.15 added 01.08.2016

\t\t\t/********************************** new items **********************************/
\t\t\t'untitled file.txt' : 'НовыйФайл.txt', // added 10.11.2015
\t\t\t'untitled folder'   : 'НоваяПапка',   // added 10.11.2015
\t\t\t'Archive'           : 'НовыйАрхив',  // from v2.1 added 10.11.2015
\t\t\t'untitled file'     : 'НовыйФайл.\$1',  // from v2.1.41 added 6.8.2018
\t\t\t'extentionfile'     : '\$1 Файл',    // from v2.1.41 added 6.8.2018
\t\t\t'extentiontype'     : '\$1: \$2',      // from v2.1.43 added 17.10.2018

\t\t\t/********************************** messages **********************************/
\t\t\t'confirmReq'      : 'Необходимо подтверждение',
\t\t\t'confirmRm'       : 'Вы уверены, что хотите удалить файлы?<br>Действие необратимо!',
\t\t\t'confirmRepl'     : 'Заменить старый файл новым?',
\t\t\t'confirmRest'     : 'Заменить существующий файл файлом из корзины?', // fromv2.1.24 added 5.5.2017
\t\t\t'confirmConvUTF8' : 'Не UTF-8<br/>Сконвертировать в UTF-8?<br/>Данные станут UTF-8 при сохранении после конвертации.', // from v2.1 added 08.04.2014
\t\t\t'confirmNonUTF8'  : 'Невозможно определить кодировку файла. Необходима предварительная конвертация файла в UTF-8 для дальнейшего редактирования.<br/>Выберите кодировку файла.', // from v2.1.19 added 28.11.2016
\t\t\t'confirmNotSave'  : 'Произошли изменения.<br/>Если не сохраните изменения, то потеряете их.', // from v2.1 added 15.7.2015
\t\t\t'confirmTrash'    : 'Вы уверены, что хотите переместить файлы в корзину?', //from v2.1.24 added 29.4.2017
\t\t\t'confirmMove'     : 'Вы уверены, что хотите переместить файлы в \"\$1\"?', //from v2.1.50 added 27.7.2019
\t\t\t'apllyAll'        : 'Применить для всех',
\t\t\t'name'            : 'Имя',
\t\t\t'size'            : 'Размер',
\t\t\t'perms'           : 'Доступ',
\t\t\t'modify'          : 'Изменен',
\t\t\t'kind'            : 'Тип',
\t\t\t'read'            : 'чтение',
\t\t\t'write'           : 'запись',
\t\t\t'noaccess'        : 'нет доступа',
\t\t\t'and'             : 'и',
\t\t\t'unknown'         : 'неизвестно',
\t\t\t'selectall'       : 'Выбрать все файлы',
\t\t\t'selectfiles'     : 'Выбрать файл(ы)',
\t\t\t'selectffile'     : 'Выбрать первый файл',
\t\t\t'selectlfile'     : 'Выбрать последний файл',
\t\t\t'viewlist'        : 'В виде списка',
\t\t\t'viewicons'       : 'В виде иконок',
\t\t\t'viewSmall'       : 'Маленькие иконки', // from v2.1.39 added 22.5.2018
\t\t\t'viewMedium'      : 'Средние иконки', // from v2.1.39 added 22.5.2018
\t\t\t'viewLarge'       : 'Большие иконки', // from v2.1.39 added 22.5.2018
\t\t\t'viewExtraLarge'  : 'Очень большие иконки', // from v2.1.39 added 22.5.2018
\t\t\t'places'          : 'Избранное',
\t\t\t'calc'            : 'Вычислить',
\t\t\t'path'            : 'Путь',
\t\t\t'aliasfor'        : 'Указывает на',
\t\t\t'locked'          : 'Защита',
\t\t\t'dim'             : 'Размеры',
\t\t\t'files'           : 'Файлы',
\t\t\t'folders'         : 'Папки',
\t\t\t'items'           : 'Объекты',
\t\t\t'yes'             : 'да',
\t\t\t'no'              : 'нет',
\t\t\t'link'            : 'Ссылка',
\t\t\t'searcresult'     : 'Результаты поиска',
\t\t\t'selected'        : 'выбрано',
\t\t\t'about'           : 'О программе',
\t\t\t'shortcuts'       : 'Горячие клавиши',
\t\t\t'help'            : 'Помощь',
\t\t\t'webfm'           : 'Файловый менеджер для Web',
\t\t\t'ver'             : 'Версия',
\t\t\t'protocolver'     : 'версия протокола',
\t\t\t'homepage'        : 'Сайт проекта',
\t\t\t'docs'            : 'Документация',
\t\t\t'github'          : 'Форкните на GitHub',
\t\t\t'twitter'         : 'Следите в Twitter',
\t\t\t'facebook'        : 'Присоединяйтесь на Facebook',
\t\t\t'team'            : 'Команда',
\t\t\t'chiefdev'        : 'ведущий разработчик',
\t\t\t'developer'       : 'разработчик',
\t\t\t'contributor'     : 'участник',
\t\t\t'maintainer'      : 'сопровождение проекта',
\t\t\t'translator'      : 'переводчик',
\t\t\t'icons'           : 'Иконки',
\t\t\t'dontforget'      : 'и не забудьте взять своё полотенце',
\t\t\t'shortcutsof'     : 'Горячие клавиши отключены',
\t\t\t'dropFiles'       : 'Перетащите файлы сюда',
\t\t\t'or'              : 'или',
\t\t\t'selectForUpload' : 'Выбрать файлы для загрузки',
\t\t\t'moveFiles'       : 'Переместить файлы',
\t\t\t'copyFiles'       : 'Скопировать файлы',
\t\t\t'restoreFiles'    : 'Восстановить файлы', // from v2.1.24 added 5.5.2017
\t\t\t'rmFromPlaces'    : 'Удалить из избранного',
\t\t\t'aspectRatio'     : 'Соотношение сторон',
\t\t\t'scale'           : 'Масштаб',
\t\t\t'width'           : 'Ширина',
\t\t\t'height'          : 'Высота',
\t\t\t'resize'          : 'Изменить размер',
\t\t\t'crop'            : 'Обрезать',
\t\t\t'rotate'          : 'Повернуть',
\t\t\t'rotate-cw'       : 'Повернуть на 90 градусов по часовой стрелке',
\t\t\t'rotate-ccw'      : 'Повернуть на 90 градусов против часовой стрелке',
\t\t\t'degree'          : '°',
\t\t\t'netMountDialogTitle' : 'Подключить сетевой диск', // added 18.04.2012
\t\t\t'protocol'            : 'Протокол', // added 18.04.2012
\t\t\t'host'                : 'Хост', // added 18.04.2012
\t\t\t'port'                : 'Порт', // added 18.04.2012
\t\t\t'user'                : 'Пользователь', // added 18.04.2012
\t\t\t'pass'                : 'Пароль', // added 18.04.2012
\t\t\t'confirmUnmount'      : 'Вы хотите отключить \$1?',  // from v2.1 added 30.04.2012
\t\t\t'dropFilesBrowser': 'Перетащите или вставьте файлы из браузера', // from v2.1 added 30.05.2012
\t\t\t'dropPasteFiles'  : 'Перетащите или вставьте файлы и ссылки сюда', // from v2.1 added 07.04.2014
\t\t\t'encoding'        : 'Кодировка', // from v2.1 added 19.12.2014
\t\t\t'locale'          : 'Локаль',   // from v2.1 added 19.12.2014
\t\t\t'searchTarget'    : 'Цель: \$1',                // from v2.1 added 22.5.2015
\t\t\t'searchMime'      : 'Поиск по введенному MIME типу', // from v2.1 added 22.5.2015
\t\t\t'owner'           : 'Владелец', // from v2.1 added 20.6.2015
\t\t\t'group'           : 'Группа', // from v2.1 added 20.6.2015
\t\t\t'other'           : 'Остальные', // from v2.1 added 20.6.2015
\t\t\t'execute'         : 'Исполнить', // from v2.1 added 20.6.2015
\t\t\t'perm'            : 'Разрешение', // from v2.1 added 20.6.2015
\t\t\t'mode'            : 'Режим', // from v2.1 added 20.6.2015
\t\t\t'emptyFolder'     : 'Папка пуста', // from v2.1.6 added 30.12.2015
\t\t\t'emptyFolderDrop' : 'Папка пуста\\\\A Перетащите чтобы добавить', // from v2.1.6 added 30.12.2015
\t\t\t'emptyFolderLTap' : 'Папка пуста\\\\A Долгое нажатие чтобы добавить', // from v2.1.6 added 30.12.2015
\t\t\t'quality'         : 'Качество', // from v2.1.6 added 5.1.2016
\t\t\t'autoSync'        : 'Авто синхронизация',  // from v2.1.6 added 10.1.2016
\t\t\t'moveUp'          : 'Передвинуть вверх',  // from v2.1.6 added 18.1.2016
\t\t\t'getLink'         : 'Получить URL ссылку', // from v2.1.7 added 9.2.2016
\t\t\t'selectedItems'   : 'Выбранные объекты (\$1)', // from v2.1.7 added 2.19.2016
\t\t\t'folderId'        : 'ID папки', // from v2.1.10 added 3.25.2016
\t\t\t'offlineAccess'   : 'Позволить автономный доступ', // from v2.1.10 added 3.25.2016
\t\t\t'reAuth'          : 'Авторизоваться повторно', // from v2.1.10 added 3.25.2016
\t\t\t'nowLoading'      : 'Загружается...', // from v2.1.12 added 4.26.2016
\t\t\t'openMulti'       : 'Открыть несколько файлов', // from v2.1.12 added 5.14.2016
\t\t\t'openMultiConfirm': 'Вы пытаетесь открыть \$1 файл(а/ов). Вы уверены, что хотите открыть их в браузере?', // from v2.1.12 added 5.14.2016
\t\t\t'emptySearch'     : 'Ничего не найдено', // from v2.1.12 added 5.16.2016
\t\t\t'editingFile'     : 'Это редактируемый файл.', // from v2.1.13 added 6.3.2016
\t\t\t'hasSelected'     : 'Вы выбрали \$1 файл(-ов).', // from v2.1.13 added 6.3.2016
\t\t\t'hasClipboard'    : 'У вас \$1 файл(-ов) в буфере обмена.', // from v2.1.13 added 6.3.2016
\t\t\t'incSearchOnly'   : 'Инкрементный поиск возможен только из текущего вида.', // from v2.1.13 added 6.30.2016
\t\t\t'reinstate'       : 'Восстановить', // from v2.1.15 added 3.8.2016
\t\t\t'complete'        : '\$1 завершен', // from v2.1.15 added 21.8.2016
\t\t\t'contextmenu'     : 'Контекстное меню', // from v2.1.15 added 9.9.2016
\t\t\t'pageTurning'     : 'Переключение страницы', // from v2.1.15 added 10.9.2016
\t\t\t'volumeRoots'     : 'Корни томов', // from v2.1.16 added 16.9.2016
\t\t\t'reset'           : 'Сбросить', // from v2.1.16 added 1.10.2016
\t\t\t'bgcolor'         : 'Фоновый цвет', // from v2.1.16 added 1.10.2016
\t\t\t'colorPicker'     : 'Выбор цвета', // from v2.1.16 added 1.10.2016
\t\t\t'8pxgrid'         : '8px сетка', // from v2.1.16 added 4.10.2016
\t\t\t'enabled'         : 'Включено', // from v2.1.16 added 4.10.2016
\t\t\t'disabled'        : 'Отключено', // from v2.1.16 added 4.10.2016
\t\t\t'emptyIncSearch'  : 'Ничего не найдено в текущем виде.\\\\AНажмите [Enter] для развертывания цели поиска.', // from v2.1.16 added 5.10.2016
\t\t\t'emptyLetSearch'  : 'Поиск по первому символу не дал результатов в текущем виде.', // from v2.1.23 added 24.3.2017
\t\t\t'textLabel'       : 'Текстовая метка', // from v2.1.17 added 13.10.2016
\t\t\t'minsLeft'        : '\$1 минут осталось', // from v2.1.17 added 13.11.2016
\t\t\t'openAsEncoding'  : 'Переоткрыть с выбранной кодировкой', // from v2.1.19 added 2.12.2016
\t\t\t'saveAsEncoding'  : 'Сохранить с выбранной кодировкой', // from v2.1.19 added 2.12.2016
\t\t\t'selectFolder'    : 'Выбрать папку', // from v2.1.20 added 13.12.2016
\t\t\t'firstLetterSearch': 'Поиск по первому символу', // from v2.1.23 added 24.3.2017
\t\t\t'presets'         : 'Пресеты', // from v2.1.25 added 26.5.2017
\t\t\t'tooManyToTrash'  : 'Слишком много файлов для перемещения в корзину.', // from v2.1.25 added 9.6.2017
\t\t\t'TextArea'        : 'Текстовая область', // from v2.1.25 added 14.6.2017
\t\t\t'folderToEmpty'   : 'Очистить папку \"\$1\".', // from v2.1.25 added 22.6.2017
\t\t\t'filderIsEmpty'   : 'Нет файлов в паке \"\$1\".', // from v2.1.25 added 22.6.2017
\t\t\t'preference'      : 'Настройки', // from v2.1.26 added 28.6.2017
\t\t\t'language'        : 'Язык', // from v2.1.26 added 28.6.2017
\t\t\t'clearBrowserData': 'Сбросить настройки для этого браузера', // from v2.1.26 added 28.6.2017
\t\t\t'toolbarPref'     : 'Настройки панели', // from v2.1.27 added 2.8.2017
\t\t\t'charsLeft'       : '... еще символов: \$1.',  // from v2.1.29 added 30.8.2017
\t\t\t'linesLeft'       : '... еще строк: \$1.',  // from v2.1.52 added 16.1.2020
\t\t\t'sum'             : 'Общий размер', // from v2.1.29 added 28.9.2017
\t\t\t'roughFileSize'   : 'Приблизительный размер файла', // from v2.1.30 added 2.11.2017
\t\t\t'autoFocusDialog' : 'Фокус на элементе диалога при наведении мыши',  // from v2.1.30 added 2.11.2017
\t\t\t'select'          : 'Выбрать', // from v2.1.30 added 23.11.2017
\t\t\t'selectAction'    : 'Действие при выборе файла', // from v2.1.30 added 23.11.2017
\t\t\t'useStoredEditor' : 'Открывать в редакторе, выбранном в прошлый раз', // from v2.1.30 added 23.11.2017
\t\t\t'selectinvert'    : 'Выбрать элементы с инвертированием', // from v2.1.30 added 25.11.2017
\t\t\t'renameMultiple'  : 'Переименовать выбранные элементы (\$1 шт.) в \$2?<br/>Действие нельзя отменить!', // from v2.1.31 added 4.12.2017
\t\t\t'batchRename'     : 'Групповое переименование', // from v2.1.31 added 8.12.2017
\t\t\t'plusNumber'      : '+ Число', // from v2.1.31 added 8.12.2017
\t\t\t'asPrefix'        : 'Добавить префикс', // from v2.1.31 added 8.12.2017
\t\t\t'asSuffix'        : 'Добавить суффикс', // from v2.1.31 added 8.12.2017
\t\t\t'changeExtention' : 'Изменить расширение', // from v2.1.31 added 8.12.2017
\t\t\t'columnPref'      : 'Настройки колонок (для просмотра в виде списка)', // from v2.1.32 added 6.2.2018
\t\t\t'reflectOnImmediate' : 'Все изменения будут немедленно отражены в архиве.', // from v2.1.33 added 2.3.2018
\t\t\t'reflectOnUnmount'   : 'Изменения не вступят в силу до тех пор, пока вы не размонтируете этот том.', // from v2.1.33 added 2.3.2018
\t\t\t'unmountChildren' : 'Тома, смонтированные на этом томе, также будут размонтированы. Вы хотите отключить его?', // from v2.1.33 added 5.3.2018
\t\t\t'selectionInfo'   : 'Свойства', // from v2.1.33 added 7.3.2018
\t\t\t'hashChecker'     : 'Алгоритмы для отображения хеш-сумм файлов', // from v2.1.33 added 10.3.2018
\t\t\t'infoItems'       : 'Элементы в панели свойств', // from v2.1.38 added 28.3.2018
\t\t\t'pressAgainToExit': 'Нажмите снова для выхода.', // from v2.1.38 added 1.4.2018
\t\t\t'toolbar'         : 'Панель', // from v2.1.38 added 4.4.2018
\t\t\t'workspace'       : 'Рабочая область', // from v2.1.38 added 4.4.2018
\t\t\t'dialog'          : 'Диалог', // from v2.1.38 added 4.4.2018
\t\t\t'all'             : 'Все', // from v2.1.38 added 4.4.2018
\t\t\t'iconSize'        : 'Размер иконок (В виде иконок)', // from v2.1.39 added 7.5.2018
\t\t\t'editorMaximized' : 'Открывать редактор в развернутом виде', // from v2.1.40 added 30.6.2018
\t\t\t'editorConvNoApi' : 'Так как конвертация с помощью API недоступно, произведите конвертацию на веб-сайте.', //from v2.1.40 added 8.7.2018
\t\t\t'editorConvNeedUpload' : 'После конвертации вы должны загрузить скачанный файл, чтобы сохранить его.', //from v2.1.40 added 8.7.2018
\t\t\t'convertOn'       : 'Конвертировать на сайте \$1', // from v2.1.40 added 10.7.2018
\t\t\t'integrations'    : 'Интеграции', // from v2.1.40 added 11.7.2018
\t\t\t'integrationWith' : 'Менеджер elFinder интегрирован со следующими внешними сервисами. Ознакомьтесь с правилами пользования, политиками безопасности и др. перед их использованием.', // from v2.1.40 added 11.7.2018
\t\t\t'showHidden'      : 'Показать скрытые элементы', // from v2.1.41 added 24.7.2018
\t\t\t'hideHidden'      : 'Скрыть скрытые элементы', // from v2.1.41 added 24.7.2018
\t\t\t'toggleHidden'    : 'Показать/скрыть скрытые элементы', // from v2.1.41 added 24.7.2018
\t\t\t'makefileTypes'   : 'Типы файлов в меню \"Новый файл\"', // from v2.1.41 added 7.8.2018
\t\t\t'typeOfTextfile'  : 'Тип текстового файла', // from v2.1.41 added 7.8.2018
\t\t\t'add'             : 'Добавить', // from v2.1.41 added 7.8.2018
\t\t\t'theme'           : 'Тема', // from v2.1.43 added 19.10.2018
\t\t\t'default'         : 'По умолчанию', // from v2.1.43 added 19.10.2018
\t\t\t'description'     : 'Описание', // from v2.1.43 added 19.10.2018
\t\t\t'website'         : 'Веб-сайт', // from v2.1.43 added 19.10.2018
\t\t\t'author'          : 'Автор', // from v2.1.43 added 19.10.2018
\t\t\t'email'           : 'Email', // from v2.1.43 added 19.10.2018
\t\t\t'license'         : 'Лицензия', // from v2.1.43 added 19.10.2018
\t\t\t'exportToSave'    : 'Невозможно сохранить файл. Чтобы не потерять изменения, экспортируйте их на свой ПК.', // from v2.1.44 added 1.12.2018
\t\t\t'dblclickToSelect': 'Двойной клик по файлу для его выбора.', // from v2.1.47 added 22.1.2019
\t\t\t'useFullscreen'   : 'Использовать полноэкранный режим', // from v2.1.47 added 19.2.2019

\t\t\t/********************************** mimetypes **********************************/
\t\t\t'kindUnknown'     : 'Неизвестный',
\t\t\t'kindRoot'        : 'Корень тома', // from v2.1.16 added 16.10.2016
\t\t\t'kindFolder'      : 'Папка',
\t\t\t'kindSelects'     : 'Выбор', // from v2.1.29 added 29.8.2017
\t\t\t'kindAlias'       : 'Ссылка',
\t\t\t'kindAliasBroken' : 'Битая ссылка',
\t\t\t// applications
\t\t\t'kindApp'         : 'Приложение',
\t\t\t'kindPostscript'  : 'Документ Postscript',
\t\t\t'kindMsOffice'    : 'Документ Microsoft Office',
\t\t\t'kindMsWord'      : 'Документ Microsoft Word',
\t\t\t'kindMsExcel'     : 'Документ Microsoft Excel',
\t\t\t'kindMsPP'        : 'Презентация Microsoft Powerpoint',
\t\t\t'kindOO'          : 'Документ Open Office',
\t\t\t'kindAppFlash'    : 'Приложение Flash',
\t\t\t'kindPDF'         : 'Документ PDF',
\t\t\t'kindTorrent'     : 'Файл Bittorrent',
\t\t\t'kind7z'          : 'Архив 7z',
\t\t\t'kindTAR'         : 'Архив TAR',
\t\t\t'kindGZIP'        : 'Архив GZIP',
\t\t\t'kindBZIP'        : 'Архив BZIP',
\t\t\t'kindXZ'          : 'Архив XZ',
\t\t\t'kindZIP'         : 'Архив ZIP',
\t\t\t'kindRAR'         : 'Архив RAR',
\t\t\t'kindJAR'         : 'Файл Java JAR',
\t\t\t'kindTTF'         : 'Шрифт True Type',
\t\t\t'kindOTF'         : 'Шрифт Open Type',
\t\t\t'kindRPM'         : 'Пакет RPM',
\t\t\t// texts
\t\t\t'kindText'        : 'Текстовый документ',
\t\t\t'kindTextPlain'   : 'Простой текст',
\t\t\t'kindPHP'         : 'Исходник PHP',
\t\t\t'kindCSS'         : 'Таблицы стилей CSS',
\t\t\t'kindHTML'        : 'Документ HTML',
\t\t\t'kindJS'          : 'Исходник Javascript',
\t\t\t'kindRTF'         : 'Rich Text Format',
\t\t\t'kindC'           : 'Исходник C',
\t\t\t'kindCHeader'     : 'Заголовочный файл C',
\t\t\t'kindCPP'         : 'Исходник C++',
\t\t\t'kindCPPHeader'   : 'Заголовочный файл C++',
\t\t\t'kindShell'       : 'Скрипт Unix shell',
\t\t\t'kindPython'      : 'Исходник Python',
\t\t\t'kindJava'        : 'Исходник Java',
\t\t\t'kindRuby'        : 'Исходник Ruby',
\t\t\t'kindPerl'        : 'Исходник Perl',
\t\t\t'kindSQL'         : 'Исходник SQL',
\t\t\t'kindXML'         : 'Документ XML',
\t\t\t'kindAWK'         : 'Исходник AWK',
\t\t\t'kindCSV'         : 'Текст с разделителями',
\t\t\t'kindDOCBOOK'     : 'Документ Docbook XML',
\t\t\t'kindMarkdown'    : 'Текст Markdown', // added 20.7.2015
\t\t\t// images
\t\t\t'kindImage'       : 'Изображение',
\t\t\t'kindBMP'         : 'Изображение BMP',
\t\t\t'kindJPEG'        : 'Изображение JPEG',
\t\t\t'kindGIF'         : 'Изображение GIF',
\t\t\t'kindPNG'         : 'Изображение PNG',
\t\t\t'kindTIFF'        : 'Изображение TIFF',
\t\t\t'kindTGA'         : 'Изображение TGA',
\t\t\t'kindPSD'         : 'Изображение Adobe Photoshop',
\t\t\t'kindXBITMAP'     : 'Изображение X bitmap',
\t\t\t'kindPXM'         : 'Изображение Pixelmator',
\t\t\t// media
\t\t\t'kindAudio'       : 'Аудио файл',
\t\t\t'kindAudioMPEG'   : 'Аудио MPEG',
\t\t\t'kindAudioMPEG4'  : 'Аудио MPEG-4',
\t\t\t'kindAudioMIDI'   : 'Аудио MIDI',
\t\t\t'kindAudioOGG'    : 'Аудио Ogg Vorbis',
\t\t\t'kindAudioWAV'    : 'Аудио WAV',
\t\t\t'AudioPlaylist'   : 'Плейлист MP3',
\t\t\t'kindVideo'       : 'Видео файл',
\t\t\t'kindVideoDV'     : 'Видео DV',
\t\t\t'kindVideoMPEG'   : 'Видео MPEG',
\t\t\t'kindVideoMPEG4'  : 'Видео MPEG-4',
\t\t\t'kindVideoAVI'    : 'Видео AVI',
\t\t\t'kindVideoMOV'    : 'Видео Quick Time',
\t\t\t'kindVideoWM'     : 'Видео Windows Media',
\t\t\t'kindVideoFlash'  : 'Видео Flash',
\t\t\t'kindVideoMKV'    : 'Видео Matroska',
\t\t\t'kindVideoOGG'    : 'Видео Ogg'
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
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.ru.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.ru.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.ru.js");
    }
}
