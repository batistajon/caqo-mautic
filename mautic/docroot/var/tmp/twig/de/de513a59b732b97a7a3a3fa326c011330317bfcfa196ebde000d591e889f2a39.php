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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.zh_TW.js */
class __TwigTemplate_01781b691879d66d9eed9852052b3483bd50bbec8e108ddf94920680fc84451c extends Template
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
 * Traditional Chinese translation
 * @author Yuwei Chuang <ywchuang.tw@gmail.com>
 * @author Danny Lin <danny0838@gmail.com>
 * @author TCC <john987john987@gmail.com>
 * @version 2017-09-28
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
\telFinder.prototype.i18.zh_TW = {
\t\ttranslator : 'Yuwei Chuang &lt;ywchuang.tw@gmail.com&gt;, Danny Lin &lt;danny0838@gmail.com&gt;, TCC &lt;john987john987@gmail.com&gt;',
\t\tlanguage   : '正體中文',
\t\tdirection  : 'ltr',
\t\tdateFormat : 'Y/m/d H:i', // Mar 13, 2012 05:27 PM
\t\tfancyDateFormat : '\$1 H:i', // will produce smth like: Today 12:25 PM
\t\tnonameDateFormat : 'ymd-His', // to apply if upload file is noname: 120513172700
\t\tmessages   : {

\t\t\t/********************************** errors **********************************/
\t\t\t'error'                : '錯誤',
\t\t\t'errUnknown'           : '未知的錯誤.',
\t\t\t'errUnknownCmd'        : '未知的指令.',
\t\t\t'errJqui'              : '無效的 jQuery UI 設定. 必須包含 Selectable, draggable 以及 droppable 元件.',
\t\t\t'errNode'              : 'elFinder 需要能建立 DOM 元素.',
\t\t\t'errURL'               : '無效的 elFinder 設定! 尚未設定 URL 選項.',
\t\t\t'errAccess'            : '拒絕存取.',
\t\t\t'errConnect'           : '無法連線至後端.',
\t\t\t'errAbort'             : '連線中斷.',
\t\t\t'errTimeout'           : '連線逾時.',
\t\t\t'errNotFound'          : '後端不存在.',
\t\t\t'errResponse'          : '無效的後端回復.',
\t\t\t'errConf'              : '無效的後端設定.',
\t\t\t'errJSON'              : '未安裝 PHP JSON 模組.',
\t\t\t'errNoVolumes'         : '無可讀取的 volumes.',
\t\t\t'errCmdParams'         : '無效的參數, 指令: \"\$1\".',
\t\t\t'errDataNotJSON'       : '資料不是 JSON 格式.',
\t\t\t'errDataEmpty'         : '沒有資料.',
\t\t\t'errCmdReq'            : '後端請求需要命令名稱.',
\t\t\t'errOpen'              : '無法開啟 \"\$1\".',
\t\t\t'errNotFolder'         : '非資料夾.',
\t\t\t'errNotFile'           : '非檔案.',
\t\t\t'errRead'              : '無法讀取 \"\$1\".',
\t\t\t'errWrite'             : '無法寫入 \"\$1\".',
\t\t\t'errPerm'              : '無權限.',
\t\t\t'errLocked'            : '\"\$1\" 被鎖定,不能重新命名, 移動或删除.',
\t\t\t'errExists'            : '檔案 \"\$1\" 已經存在了.',
\t\t\t'errInvName'           : '無效的檔案名稱.',
\t\t\t'errInvDirname'        : '無效的資料夾名稱',  // from v2.1.24 added 12.4.2017
\t\t\t'errFolderNotFound'    : '未找到資料夾.',
\t\t\t'errFileNotFound'      : '未找到檔案.',
\t\t\t'errTrgFolderNotFound' : '未找到目標資料夾 \"\$1\".',
\t\t\t'errPopup'             : '連覽器攔截了彈跳視窗. 請在瀏覽器選項允許彈跳視窗.',
\t\t\t'errMkdir'             : '不能建立資料夾 \"\$1\".',
\t\t\t'errMkfile'            : '不能建立檔案 \"\$1\".',
\t\t\t'errRename'            : '不能重新命名 \"\$1\".',
\t\t\t'errCopyFrom'          : '不允許從磁碟 \"\$1\" 複製.',
\t\t\t'errCopyTo'            : '不允複製到磁碟 \"\$1\".',
\t\t\t'errMkOutLink'         : '無法建立連結到磁碟根目錄外面.', // from v2.1 added 03.10.2015
\t\t\t'errUpload'            : '上傳錯誤.',  // old name - errUploadCommon
\t\t\t'errUploadFile'        : '無法上傳 \"\$1\".', // old name - errUpload
\t\t\t'errUploadNoFiles'     : '未找到要上傳的檔案.',
\t\t\t'errUploadTotalSize'   : '資料超過了最大允許大小.', // old name - errMaxSize
\t\t\t'errUploadFileSize'    : '檔案超過了最大允許大小.', //  old name - errFileMaxSize
\t\t\t'errUploadMime'        : '不允許的檔案類型.',
\t\t\t'errUploadTransfer'    : '\"\$1\" 傳輸錯誤.',
\t\t\t'errUploadTemp'        : '無法建立暫存檔以供上傳.', // from v2.1 added 26.09.2015
\t\t\t'errNotReplace'        : '\"\$1\" 已經存在此位置, 不能被其他的替换.', // new
\t\t\t'errReplace'           : '無法替换 \"\$1\".',
\t\t\t'errSave'              : '無法保存 \"\$1\".',
\t\t\t'errCopy'              : '無法複製 \"\$1\".',
\t\t\t'errMove'              : '無法移動 \"\$1\".',
\t\t\t'errCopyInItself'      : '無法移動 \"\$1\" 到原有位置.',
\t\t\t'errRm'                : '無法删除 \"\$1\".',
\t\t\t'errTrash'             : '無法丟入垃圾桶', // from v2.1.24 added 30.4.2017
\t\t\t'errRmSrc'             : '無法删除來源檔案.',
\t\t\t'errExtract'           : '無法從 \"\$1\" 解壓縮檔案.',
\t\t\t'errArchive'           : '無法建立壓縮膽.',
\t\t\t'errArcType'           : '不支援的壓縮格式.',
\t\t\t'errNoArchive'         : '檔案不是壓縮檔, 或者不支援該壓缩格式.',
\t\t\t'errCmdNoSupport'      : '後端不支援該指令.',
\t\t\t'errReplByChild'       : '資料夾 “\$1” 不能被它所包含的檔案(資料夾)替换.',
\t\t\t'errArcSymlinks'       : '由於安全考量，拒絕解壓縮符號連結或含有不允許檔名的檔案.', // edited 24.06.2012
\t\t\t'errArcMaxSize'        : '待壓縮檔案的大小超出上限.',
\t\t\t'errResize'            : '無法重新調整大小 \"\$1\".',
\t\t\t'errResizeDegree'      : '無效的旋轉角度.',  // added 7.3.2013
\t\t\t'errResizeRotate'      : '無法旋轉圖片.',  // added 7.3.2013
\t\t\t'errResizeSize'        : '無效的圖片大小.',  // added 7.3.2013
\t\t\t'errResizeNoChange'    : '圖片大小未更改.',  // added 7.3.2013
\t\t\t'errUsupportType'      : '不支援的檔案格式.',
\t\t\t'errNotUTF8Content'    : '檔案 \"\$1\" 不是 UTF-8 格式, 不能編輯.',  // added 9.11.2011
\t\t\t'errNetMount'          : '無法掛載 \"\$1\".', // added 17.04.2012
\t\t\t'errNetMountNoDriver'  : '不支援該通訊協議.',     // added 17.04.2012
\t\t\t'errNetMountFailed'    : '掛載失敗.',         // added 17.04.2012
\t\t\t'errNetMountHostReq'   : '需要指定主機位置.', // added 18.04.2012
\t\t\t'errSessionExpires'    : '由於過久無活動, session 已過期.',
\t\t\t'errCreatingTempDir'   : '無法建立暫時目錄: \"\$1\"',
\t\t\t'errFtpDownloadFile'   : '無法從 FTP 下載檔案: \"\$1\"',
\t\t\t'errFtpUploadFile'     : '無法上傳檔案到 FTP: \"\$1\"',
\t\t\t'errFtpMkdir'          : '無法在 FTP 建立遠端目錄: \"\$1\"',
\t\t\t'errArchiveExec'       : '壓縮檔案時發生錯誤: \"\$1\"',
\t\t\t'errExtractExec'       : '解壓縮檔案時發生錯誤: \"\$1\"',
\t\t\t'errNetUnMount'        : '無法卸載', // from v2.1 added 30.04.2012
\t\t\t'errConvUTF8'          : '無法轉換為 UTF-8', // from v2.1 added 08.04.2014
\t\t\t'errFolderUpload'      : '如要上傳這個資料夾, 請嘗試 Google Chrome.', // from v2.1 added 26.6.2015
\t\t\t'errSearchTimeout'     : '搜尋 \"\$1\" 逾時. 只列出部分搜尋結果.', // from v2.1 added 12.1.2016
\t\t\t'errReauthRequire'     : '需要重新驗證權限.', // from v2.1.10 added 24.3.2016
\t\t\t'errMaxTargets'        : '最多可選擇 \$1 個物件.', // from v2.1.17 added 17.10.2016
\t\t\t'errRestore'           : '無法從垃圾桶恢復。 無法識別恢復目的地。', // from v2.1.24 added 3.5.2017
\t\t\t'errEditorNotFound'    : '編輯器找不到此文件類型。', // from v2.1.25 added 23.5.2017
\t\t\t'errServerError'       : '服務器發生錯誤。', // from v2.1.25 added 16.6.2017
\t\t\t'errEmpty'             : '無法清空\"\$1\"文件夾', // from v2.1.25 added 22.6.2017

\t\t\t/******************************* commands names ********************************/
\t\t\t'cmdarchive'   : '建立壓縮檔',
\t\t\t'cmdback'      : '後退',
\t\t\t'cmdcopy'      : '複製',
\t\t\t'cmdcut'       : '剪下',
\t\t\t'cmddownload'  : '下載',
\t\t\t'cmdduplicate' : '建立副本',
\t\t\t'cmdedit'      : '編輯檔案',
\t\t\t'cmdextract'   : '從壓縮檔解壓縮',
\t\t\t'cmdforward'   : '前進',
\t\t\t'cmdgetfile'   : '選擇檔案',
\t\t\t'cmdhelp'      : '關於本軟體',
\t\t\t'cmdhome'      : '首頁',
\t\t\t'cmdinfo'      : '查看關於',
\t\t\t'cmdmkdir'     : '建立資料夾',
\t\t\t'cmdmkdirin'   : '移入新資料夾', // from v2.1.7 added 19.2.2016
\t\t\t'cmdmkfile'    : '建立文檔',
\t\t\t'cmdopen'      : '開啟',
\t\t\t'cmdpaste'     : '貼上',
\t\t\t'cmdquicklook' : '預覽',
\t\t\t'cmdreload'    : '更新',
\t\t\t'cmdrename'    : '重新命名',
\t\t\t'cmdrm'        : '删除',
\t\t\t'cmdtrash'     : '丟到垃圾桶', //from v2.1.24 added 29.4.2017
\t\t\t'cmdrestore'   : '恢復', //from v2.1.24 added 3.5.2017
\t\t\t'cmdsearch'    : '搜尋檔案',
\t\t\t'cmdup'        : '移到上一層資料夾',
\t\t\t'cmdupload'    : '上傳檔案',
\t\t\t'cmdview'      : '檢視',
\t\t\t'cmdresize'    : '調整大小及旋轉',
\t\t\t'cmdsort'      : '排序',
\t\t\t'cmdnetmount'  : '掛載網路磁碟', // added 18.04.2012
\t\t\t'cmdnetunmount': '卸載', // from v2.1 added 30.04.2012
\t\t\t'cmdplaces'    : '加到\"位置\"', // added 28.12.2014
\t\t\t'cmdchmod'     : '更改權限', // from v2.1 added 20.6.2015
\t\t\t'cmdopendir'   : '開啟資料夾', // from v2.1 added 13.1.2016
\t\t\t'cmdcolwidth'  : '重設欄寬', // from v2.1.13 added 12.06.2016
\t\t\t'cmdfullscreen': '全螢幕', // from v2.1.15 added 03.08.2016
\t\t\t'cmdmove'      : '移動', // from v2.1.15 added 21.08.2016
\t\t\t'cmdempty'     : '清空資料夾', // from v2.1.25 added 22.06.2017
\t\t\t'cmdundo'      : '上一步', // from v2.1.27 added 31.07.2017
\t\t\t'cmdredo'      : '下一步', // from v2.1.27 added 31.07.2017
\t\t\t'cmdpreference': '優先權', // from v2.1.27 added 03.08.2017
\t\t\t'cmdselectall' : '全選', // from v2.1.28 added 15.08.2017
\t\t\t'cmdselectnone': '取消選取', // from v2.1.28 added 15.08.2017
\t\t\t'cmdselectinvert': '反向選取', // from v2.1.28 added 15.08.2017

\t\t\t/*********************************** buttons ***********************************/
\t\t\t'btnClose'  : '關閉',
\t\t\t'btnSave'   : '儲存',
\t\t\t'btnRm'     : '删除',
\t\t\t'btnApply'  : '使用',
\t\t\t'btnCancel' : '取消',
\t\t\t'btnNo'     : '否',
\t\t\t'btnYes'    : '是',
\t\t\t'btnMount'  : '掛載',  // added 18.04.2012
\t\t\t'btnApprove': '移到 \$1 並批准', // from v2.1 added 26.04.2012
\t\t\t'btnUnmount': '卸載', // from v2.1 added 30.04.2012
\t\t\t'btnConv'   : '轉換', // from v2.1 added 08.04.2014
\t\t\t'btnCwd'    : '這裡',      // from v2.1 added 22.5.2015
\t\t\t'btnVolume' : '磁碟',    // from v2.1 added 22.5.2015
\t\t\t'btnAll'    : '全部',       // from v2.1 added 22.5.2015
\t\t\t'btnMime'   : 'MIME 類型', // from v2.1 added 22.5.2015
\t\t\t'btnFileName':'檔名',  // from v2.1 added 22.5.2015
\t\t\t'btnSaveClose': '儲存並關閉', // from v2.1 added 12.6.2015
\t\t\t'btnBackup' : '備份', // fromv2.1 added 28.11.2015
\t\t\t'btnRename'    : '重新命名',      // from v2.1.24 added 6.4.2017
\t\t\t'btnRenameAll' : '重新命名全部', // from v2.1.24 added 6.4.2017
\t\t\t'btnPrevious' : '上一頁 (\$1/\$2)', // from v2.1.24 added 11.5.2017
\t\t\t'btnNext'     : '下一頁 (\$1/\$2)', // from v2.1.24 added 11.5.2017
\t\t\t'btnSaveAs'   : '另存新檔', // from v2.1.25 added 24.5.2017

\t\t\t/******************************** notifications ********************************/
\t\t\t'ntfopen'     : '開啟資料夾',
\t\t\t'ntffile'     : '開啟檔案',
\t\t\t'ntfreload'   : '更新資料夾内容',
\t\t\t'ntfmkdir'    : '建立資料夾',
\t\t\t'ntfmkfile'   : '建立檔案',
\t\t\t'ntfrm'       : '删除檔案',
\t\t\t'ntfcopy'     : '複製檔案',
\t\t\t'ntfmove'     : '移動檔案',
\t\t\t'ntfprepare'  : '準備複製檔案',
\t\t\t'ntfrename'   : '重新命名檔案',
\t\t\t'ntfupload'   : '上傳檔案',
\t\t\t'ntfdownload' : '下載檔案',
\t\t\t'ntfsave'     : '儲存檔案',
\t\t\t'ntfarchive'  : '建立壓縮檔',
\t\t\t'ntfextract'  : '從壓縮檔解壓縮',
\t\t\t'ntfsearch'   : '搜尋檔案',
\t\t\t'ntfresize'   : '正在更改圖片大小',
\t\t\t'ntfsmth'     : '正在忙 >_<',
\t\t\t'ntfloadimg'  : '正在讀取圖片',
\t\t\t'ntfnetmount' : '正在掛載網路磁碟', // added 18.04.2012
\t\t\t'ntfnetunmount': '正在卸載網路磁碟', // from v2.1 added 30.04.2012
\t\t\t'ntfdim'      : '取得圖片大小', // added 20.05.2013
\t\t\t'ntfreaddir'  : '正在讀取資料夾資訊', // from v2.1 added 01.07.2013
\t\t\t'ntfurl'      : '正在取得連結 URL', // from v2.1 added 11.03.2014
\t\t\t'ntfchmod'    : '更改檔案模式', // from v2.1 added 20.6.2015
\t\t\t'ntfpreupload': '正在驗證上傳檔案名稱', // from v2.1 added 31.11.2015
\t\t\t'ntfzipdl'    : '正在建立縮檔以供下載', // from v2.1.7 added 23.1.2016
\t\t\t'ntfparents'  : '正在取得路徑資訊', // from v2.1.17 added 2.11.2016
\t\t\t'ntfchunkmerge': '正在處理上傳的檔案', // from v2.1.17 added 2.11.2016
\t\t\t'ntftrash'    : '正在丟到垃圾桶', // from v2.1.24 added 2.5.2017
\t\t\t'ntfrestore'  : '正從垃圾桶恢復', // from v2.1.24 added 3.5.2017
\t\t\t'ntfchkdir'   : '正在檢查目標資料夾', // from v2.1.24 added 3.5.2017
\t\t\t'ntfundo'     : '正在撤銷上一步動作', // from v2.1.27 added 31.07.2017
\t\t\t'ntfredo'     : '正在重做上一步動作', // from v2.1.27 added 31.07.2017

\t\t\t/*********************************** volumes *********************************/
\t\t\t'volume_Trash' : '垃圾桶', //from v2.1.24 added 29.4.2017

\t\t\t/************************************ dates **********************************/
\t\t\t'dateUnknown' : '未知',
\t\t\t'Today'       : '今天',
\t\t\t'Yesterday'   : '昨天',
\t\t\t'msJan'       : '一月',
\t\t\t'msFeb'       : '二月',
\t\t\t'msMar'       : '三月',
\t\t\t'msApr'       : '四月',
\t\t\t'msMay'       : '五月',
\t\t\t'msJun'       : '六月',
\t\t\t'msJul'       : '七月',
\t\t\t'msAug'       : '八月',
\t\t\t'msSep'       : '九月',
\t\t\t'msOct'       : '十月',
\t\t\t'msNov'       : '十一月',
\t\t\t'msDec'       : '十二月',
\t\t\t'January'     : '一月',
\t\t\t'February'    : '二月',
\t\t\t'March'       : '三月',
\t\t\t'April'       : '四月',
\t\t\t'May'         : '五月',
\t\t\t'June'        : '六月',
\t\t\t'July'        : '七月',
\t\t\t'August'      : '八月',
\t\t\t'September'   : '九月',
\t\t\t'October'     : '十月',
\t\t\t'November'    : '十一月',
\t\t\t'December'    : '十二月',
\t\t\t'Sunday'      : '星期日',
\t\t\t'Monday'      : '星期一',
\t\t\t'Tuesday'     : '星期二',
\t\t\t'Wednesday'   : '星期三',
\t\t\t'Thursday'    : '星期四',
\t\t\t'Friday'      : '星期五',
\t\t\t'Saturday'    : '星期六',
\t\t\t'Sun'         : '周日',
\t\t\t'Mon'         : '周一',
\t\t\t'Tue'         : '周二',
\t\t\t'Wed'         : '周三',
\t\t\t'Thu'         : '周四',
\t\t\t'Fri'         : '周五',
\t\t\t'Sat'         : '周六',

\t\t\t/******************************** sort variants ********************************/
\t\t\t'sortname'          : '按名稱',
\t\t\t'sortkind'          : '按類型',
\t\t\t'sortsize'          : '按大小',
\t\t\t'sortdate'          : '按日期',
\t\t\t'sortFoldersFirst'  : '資料夾置前',
\t\t\t'sortperm'          : '按權限', // from v2.1.13 added 13.06.2016
\t\t\t'sortmode'          : '按模式',       // from v2.1.13 added 13.06.2016
\t\t\t'sortowner'         : '按擁有者',      // from v2.1.13 added 13.06.2016
\t\t\t'sortgroup'         : '按群組',      // from v2.1.13 added 13.06.2016
\t\t\t'sortAlsoTreeview'  : '也套用於樹狀圖',  // from v2.1.15 added 01.08.2016

\t\t\t/********************************** new items **********************************/
\t\t\t'untitled file.txt' : '新檔案.txt', // added 10.11.2015
\t\t\t'untitled folder'   : '新資料夾',   // added 10.11.2015
\t\t\t'Archive'           : '新壓縮檔',  // from v2.1 added 10.11.2015

\t\t\t/********************************** messages **********************************/
\t\t\t'confirmReq'      : '請確認',
\t\t\t'confirmRm'       : '確定要删除檔案嗎?<br/>此操作無法回復!',
\t\t\t'confirmRepl'     : '用新檔案取代原檔案?',
\t\t\t'confirmRest'     : '用垃圾桶中的項目替換現有項目？', // fromv2.1.24 added 5.5.2017
\t\t\t'confirmConvUTF8' : '不是 UTF-8 檔案<br/>轉換為 UTF-8 嗎?<br/>轉換後儲存會把內容變成 UTF-8.', // from v2.1 added 08.04.2014
\t\t\t'confirmNonUTF8'  : '無法偵測此檔案的字元編碼, 須暫時轉換為 UTF-8 以供編輯.<br/>請選擇此檔案的字元編碼.', // from v2.1.19 added 28.11.2016
\t\t\t'confirmNotSave'  : '此檔案已修改.<br/>若未儲存將遺失目前的工作.', // from v2.1 added 15.7.2015
\t\t\t'confirmTrash'    : '確定要將項目丟到垃圾桶嗎？', //from v2.1.24 added 29.4.2017
\t\t\t'apllyAll'        : '全部套用',
\t\t\t'name'            : '名稱',
\t\t\t'size'            : '大小',
\t\t\t'perms'           : '權限',
\t\t\t'modify'          : '修改於',
\t\t\t'kind'            : '類別',
\t\t\t'read'            : '讀取',
\t\t\t'write'           : '寫入',
\t\t\t'noaccess'        : '無權限',
\t\t\t'and'             : '和',
\t\t\t'unknown'         : '未知',
\t\t\t'selectall'       : '選擇所有檔案',
\t\t\t'selectfiles'     : '選擇檔案',
\t\t\t'selectffile'     : '選擇第一個檔案',
\t\t\t'selectlfile'     : '選擇最後一個檔案',
\t\t\t'viewlist'        : '列表檢視',
\t\t\t'viewicons'       : '圖示檢視',
\t\t\t'places'          : '位置',
\t\t\t'calc'            : '計算',
\t\t\t'path'            : '路徑',
\t\t\t'aliasfor'        : '别名',
\t\t\t'locked'          : '鎖定',
\t\t\t'dim'             : '圖片大小',
\t\t\t'files'           : '檔案',
\t\t\t'folders'         : '資料夾',
\t\t\t'items'           : '項目',
\t\t\t'yes'             : '是',
\t\t\t'no'              : '否',
\t\t\t'link'            : '連結',
\t\t\t'searcresult'     : '搜尋结果',
\t\t\t'selected'        : '選取的項目',
\t\t\t'about'           : '關於',
\t\t\t'shortcuts'       : '快捷鍵',
\t\t\t'help'            : '協助',
\t\t\t'webfm'           : '網路檔案總管',
\t\t\t'ver'             : '版本',
\t\t\t'protocolver'     : '協定版本',
\t\t\t'homepage'        : '首頁',
\t\t\t'docs'            : '文件',
\t\t\t'github'          : '在 Github 建立我們的分支',
\t\t\t'twitter'         : '在 Twitter 追蹤我們',
\t\t\t'facebook'        : '在 Facebook 加入我們',
\t\t\t'team'            : '團隊',
\t\t\t'chiefdev'        : '主要開發者',
\t\t\t'developer'       : '開發者',
\t\t\t'contributor'     : '貢獻者',
\t\t\t'maintainer'      : '維護者',
\t\t\t'translator'      : '翻譯者',
\t\t\t'icons'           : '圖示',
\t\t\t'dontforget'      : '别忘了帶上你擦汗的毛巾',
\t\t\t'shortcutsof'     : '快捷鍵已停用',
\t\t\t'dropFiles'       : '把檔案拖到此處',
\t\t\t'or'              : '或',
\t\t\t'selectForUpload' : '選擇要上傳的檔案',
\t\t\t'moveFiles'       : '移動檔案',
\t\t\t'copyFiles'       : '複製檔案',
\t\t\t'restoreFiles'    : '恢復項目', // from v2.1.24 added 5.5.2017
\t\t\t'rmFromPlaces'    : '從\"位置\"中删除',
\t\t\t'aspectRatio'     : '保持比例',
\t\t\t'scale'           : '寬高比',
\t\t\t'width'           : '寬',
\t\t\t'height'          : '高',
\t\t\t'resize'          : '重新調整大小',
\t\t\t'crop'            : '裁切',
\t\t\t'rotate'          : '旋轉',
\t\t\t'rotate-cw'       : '順時針旋轉90度',
\t\t\t'rotate-ccw'      : '逆時針旋轉90度',
\t\t\t'degree'          : '度',
\t\t\t'netMountDialogTitle' : '掛載網路磁碟', // added 18.04.2012
\t\t\t'protocol'            : '通訊協定', // added 18.04.2012
\t\t\t'host'                : '主機', // added 18.04.2012
\t\t\t'port'                : '連接埠', // added 18.04.2012
\t\t\t'user'                : '使用者', // added 18.04.2012
\t\t\t'pass'                : '密碼', // added 18.04.2012
\t\t\t'confirmUnmount'      : '確定要卸載 \$1?',  // from v2.1 added 30.04.2012
\t\t\t'dropFilesBrowser': '從瀏覽器拖放或貼上檔案', // from v2.1 added 30.05.2012
\t\t\t'dropPasteFiles'  : '拖放檔案或從剪貼簿貼上 URL 或圖片至此', // from v2.1 added 07.04.2014
\t\t\t'encoding'        : '編碼', // from v2.1 added 19.12.2014
\t\t\t'locale'          : '語系',   // from v2.1 added 19.12.2014
\t\t\t'searchTarget'    : '目標: \$1',                // from v2.1 added 22.5.2015
\t\t\t'searchMime'      : '根據輸入的 MIME 類型搜尋', // from v2.1 added 22.5.2015
\t\t\t'owner'           : '擁有者', // from v2.1 added 20.6.2015
\t\t\t'group'           : '群組', // from v2.1 added 20.6.2015
\t\t\t'other'           : '其他', // from v2.1 added 20.6.2015
\t\t\t'execute'         : '執行', // from v2.1 added 20.6.2015
\t\t\t'perm'            : '權限', // from v2.1 added 20.6.2015
\t\t\t'mode'            : '模式', // from v2.1 added 20.6.2015
\t\t\t'emptyFolder'     : '資料夾是空的', // from v2.1.6 added 30.12.2015
\t\t\t'emptyFolderDrop' : '資料夾是空的\\\\A 拖曳以增加項目', // from v2.1.6 added 30.12.2015
\t\t\t'emptyFolderLTap' : '資料夾是空的\\\\A 長按以增加項目', // from v2.1.6 added 30.12.2015
\t\t\t'quality'         : '品質', // from v2.1.6 added 5.1.2016
\t\t\t'autoSync'        : '自動同步',  // from v2.1.6 added 10.1.2016
\t\t\t'moveUp'          : '上移',  // from v2.1.6 added 18.1.2016
\t\t\t'getLink'         : '取得 URL 連結', // from v2.1.7 added 9.2.2016
\t\t\t'selectedItems'   : '選取的項目 (\$1)', // from v2.1.7 added 2.19.2016
\t\t\t'folderId'        : '資料夾 ID', // from v2.1.10 added 3.25.2016
\t\t\t'offlineAccess'   : '允許離線存取', // from v2.1.10 added 3.25.2016
\t\t\t'reAuth'          : '重新驗證權限', // from v2.1.10 added 3.25.2016
\t\t\t'nowLoading'      : '正在載入...', // from v2.1.12 added 4.26.2016
\t\t\t'openMulti'       : '開啟多個檔案', // from v2.1.12 added 5.14.2016
\t\t\t'openMultiConfirm': '確定要在瀏覽器開啟 \$1 個檔案嗎?', // from v2.1.12 added 5.14.2016
\t\t\t'emptySearch'     : '在搜尋目標中的搜尋結果是空的.', // from v2.1.12 added 5.16.2016
\t\t\t'editingFile'     : '正在編輯檔案.', // from v2.1.13 added 6.3.2016
\t\t\t'hasSelected'     : '己選取 \$1 個項目.', // from v2.1.13 added 6.3.2016
\t\t\t'hasClipboard'    : '剪貼簿裡有 \$1 個項目.', // from v2.1.13 added 6.3.2016
\t\t\t'incSearchOnly'   : '增量搜尋只來自目前視圖.', // from v2.1.13 added 6.30.2016
\t\t\t'reinstate'       : '恢復原狀', // from v2.1.15 added 3.8.2016
\t\t\t'complete'        : '\$1完成', // from v2.1.15 added 21.8.2016
\t\t\t'contextmenu'     : '情境選單', // from v2.1.15 added 9.9.2016
\t\t\t'pageTurning'     : '正在換頁', // from v2.1.15 added 10.9.2016
\t\t\t'volumeRoots'     : '磁碟根目錄', // from v2.1.16 added 16.9.2016
\t\t\t'reset'           : '重設', // from v2.1.16 added 1.10.2016
\t\t\t'bgcolor'         : '背景頻色', // from v2.1.16 added 1.10.2016
\t\t\t'colorPicker'     : '顏色選擇器', // from v2.1.16 added 1.10.2016
\t\t\t'8pxgrid'         : '8px 網格', // from v2.1.16 added 4.10.2016
\t\t\t'enabled'         : '啟用', // from v2.1.16 added 4.10.2016
\t\t\t'disabled'        : '停用', // from v2.1.16 added 4.10.2016
\t\t\t'emptyIncSearch'  : '目前視圖的搜尋結果是空的.\\\\A按 [Enter] 擴大搜尋目標.', // from v2.1.16 added 5.10.2016
\t\t\t'emptyLetSearch'  : '目前視圖中的第一個字母的搜索結果是空的。', // from v2.1.23 added 24.3.2017
\t\t\t'textLabel'       : '文字標示', // from v2.1.17 added 13.10.2016
\t\t\t'minsLeft'        : '剩下 \$1 分鐘', // from v2.1.17 added 13.11.2016
\t\t\t'openAsEncoding'  : '以選擇的編碼重新開啟', // from v2.1.19 added 2.12.2016
\t\t\t'saveAsEncoding'  : '以選擇的編碼儲存', // from v2.1.19 added 2.12.2016
\t\t\t'selectFolder'    : '選擇資料夾', // from v2.1.20 added 13.12.2016
\t\t\t'firstLetterSearch': '首字母搜索', // from v2.1.23 added 24.3.2017
\t\t\t'presets'         : '預置', // from v2.1.25 added 26.5.2017
\t\t\t'tooManyToTrash'  : '有太多項目，所以不能丟入垃圾桶。', // from v2.1.25 added 9.6.2017
\t\t\t'TextArea'        : '文字區域', // from v2.1.25 added 14.6.2017
\t\t\t'folderToEmpty'   : '\$1\" 資料夾是空的', // from v2.1.25 added 22.6.2017
\t\t\t'filderIsEmpty'   : '\"\$1\" 資料夾中沒有任何項目', // from v2.1.25 added 22.6.2017
\t\t\t'preference'      : '偏好', // from v2.1.26 added 28.6.2017
\t\t\t'language'        : '語言設置', // from v2.1.26 added 28.6.2017
\t\t\t'clearBrowserData': '初始化保存在此瀏覽器中的設置', // from v2.1.26 added 28.6.2017
\t\t\t'toolbarPref'     : '工具欄設置', // from v2.1.27 added 2.8.2017
\t\t\t'charsLeft'       : '... 剩下 \$1 個字元',  // from v2.1.29 added 30.8.2017

\t\t\t/********************************** mimetypes **********************************/
\t\t\t'kindUnknown'     : '未知',
\t\t\t'kindRoot'        : '磁碟根目錄', // from v2.1.16 added 16.10.2016
\t\t\t'kindFolder'      : '資料夾',
\t\t\t'kindSelects'     : '選擇', // from v2.1.29 added 29.8.2017
\t\t\t'kindAlias'       : '别名',
\t\t\t'kindAliasBroken' : '毀損的别名',
\t\t\t// applications
\t\t\t'kindApp'         : '應用程式',
\t\t\t'kindPostscript'  : 'Postscript 文件',
\t\t\t'kindMsOffice'    : 'Microsoft Office 文件',
\t\t\t'kindMsWord'      : 'Microsoft Word 文件',
\t\t\t'kindMsExcel'     : 'Microsoft Excel 文件',
\t\t\t'kindMsPP'        : 'Microsoft Powerpoint 簡報',
\t\t\t'kindOO'          : 'Open Office 文件',
\t\t\t'kindAppFlash'    : 'Flash 應用程式',
\t\t\t'kindPDF'         : '可攜式文件格式(PDF)',
\t\t\t'kindTorrent'     : 'Bittorrent 檔案',
\t\t\t'kind7z'          : '7z 壓縮檔',
\t\t\t'kindTAR'         : 'TAR 壓縮檔',
\t\t\t'kindGZIP'        : 'GZIP 壓縮檔',
\t\t\t'kindBZIP'        : 'BZIP 壓縮檔',
\t\t\t'kindXZ'          : 'XZ 壓縮檔',
\t\t\t'kindZIP'         : 'ZIP 壓縮檔',
\t\t\t'kindRAR'         : 'RAR 壓縮檔',
\t\t\t'kindJAR'         : 'Java JAR 檔案',
\t\t\t'kindTTF'         : 'True Type 字體',
\t\t\t'kindOTF'         : 'Open Type 字體',
\t\t\t'kindRPM'         : 'RPM 封裝檔',
\t\t\t// texts
\t\t\t'kindText'        : '文字檔案',
\t\t\t'kindTextPlain'   : '純文字',
\t\t\t'kindPHP'         : 'PHP 原始碼',
\t\t\t'kindCSS'         : '階層樣式表(CSS)',
\t\t\t'kindHTML'        : 'HTML 文件',
\t\t\t'kindJS'          : 'Javascript 原始碼',
\t\t\t'kindRTF'         : '富文本(RTF)',
\t\t\t'kindC'           : 'C 原始碼',
\t\t\t'kindCHeader'     : 'C 標頭原始碼',
\t\t\t'kindCPP'         : 'C++ 原始碼',
\t\t\t'kindCPPHeader'   : 'C++ 標頭原始碼',
\t\t\t'kindShell'       : 'Unix Shell 脚本',
\t\t\t'kindPython'      : 'Python 原始碼',
\t\t\t'kindJava'        : 'Java 原始碼',
\t\t\t'kindRuby'        : 'Ruby 原始碼',
\t\t\t'kindPerl'        : 'Perl 原始碼',
\t\t\t'kindSQL'         : 'SQL 原始碼',
\t\t\t'kindXML'         : 'XML 文件',
\t\t\t'kindAWK'         : 'AWK 原始碼',
\t\t\t'kindCSV'         : '逗號分隔值(CSV)',
\t\t\t'kindDOCBOOK'     : 'Docbook XML 文件',
\t\t\t'kindMarkdown'    : 'Markdown 文本', // added 20.7.2015
\t\t\t// images
\t\t\t'kindImage'       : '圖片',
\t\t\t'kindBMP'         : 'BMP 圖片',
\t\t\t'kindJPEG'        : 'JPEG 圖片',
\t\t\t'kindGIF'         : 'GIF 圖片',
\t\t\t'kindPNG'         : 'PNG 圖片',
\t\t\t'kindTIFF'        : 'TIFF 圖片',
\t\t\t'kindTGA'         : 'TGA 圖片',
\t\t\t'kindPSD'         : 'Adobe Photoshop 圖片',
\t\t\t'kindXBITMAP'     : 'X bitmap 圖片',
\t\t\t'kindPXM'         : 'Pixelmator 圖片',
\t\t\t// media
\t\t\t'kindAudio'       : '音訊',
\t\t\t'kindAudioMPEG'   : 'MPEG 音訊',
\t\t\t'kindAudioMPEG4'  : 'MPEG-4 音訊',
\t\t\t'kindAudioMIDI'   : 'MIDI 音訊',
\t\t\t'kindAudioOGG'    : 'Ogg Vorbis 音訊',
\t\t\t'kindAudioWAV'    : 'WAV 音訊',
\t\t\t'AudioPlaylist'   : 'MP3 播放清單',
\t\t\t'kindVideo'       : '影片',
\t\t\t'kindVideoDV'     : 'DV 影片',
\t\t\t'kindVideoMPEG'   : 'MPEG 影片',
\t\t\t'kindVideoMPEG4'  : 'MPEG-4 影片',
\t\t\t'kindVideoAVI'    : 'AVI 影片',
\t\t\t'kindVideoMOV'    : 'Quick Time 影片',
\t\t\t'kindVideoWM'     : 'Windows Media 影片',
\t\t\t'kindVideoFlash'  : 'Flash 影片',
\t\t\t'kindVideoMKV'    : 'Matroska 影片',
\t\t\t'kindVideoOGG'    : 'Ogg 影片'
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
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.zh_TW.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.zh_TW.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.zh_TW.js");
    }
}
