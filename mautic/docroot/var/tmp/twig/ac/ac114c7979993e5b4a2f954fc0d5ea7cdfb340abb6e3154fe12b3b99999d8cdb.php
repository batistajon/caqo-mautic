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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.zh_CN.js */
class __TwigTemplate_0826a79e2504166ff88e811bc923ee38533d079722907628ccbd401bcdb5a175 extends Template
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
 * 简体中文 translation
 * @author 翻译者 deerchao <deerchao@gmail.com>
 * @author Andy Hu <andyhu7@yahoo.com.hk>
 * @author Max Wen<max.wen@qq.com>
 * @author Kejun Chang <changkejun@hotmail.com>
 * @author LDMING <china-live@live.cn>
 * @author Andy Lee <oraclei@126.com>
 * @author Cololi <i@cololi.moe>
 * @version 2020-04-07
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
\telFinder.prototype.i18.zh_CN = {
\t\ttranslator : '翻译者 deerchao &lt;deerchao@gmail.com&gt;, Andy Hu &lt;andyhu7@yahoo.com.hk&gt;, Max Wen&lt;max.wen@qq.com&gt;, Kejun Chang &lt;changkejun@hotmail.com&gt;, LDMING &lt;china-live@live.cn&gt;, Andy Lee &lt;oraclei@126.com&gt;, Cololi &lt;i@cololi.moe&gt;',
\t\tlanguage   : '简体中文',
\t\tdirection  : 'ltr',
\t\tdateFormat : 'Y-m-d H:i', // will show like: 2020-04-07 14:53
\t\tfancyDateFormat : '\$1 H:i', // will show like: 今天 14:53
\t\tnonameDateFormat : 'ymd-His', // noname upload will show like: 200407-145300
\t\tmessages   : {

\t\t\t/********************************** errors **********************************/
\t\t\t'error'                : '错误',
\t\t\t'errUnknown'           : '未知的错误.',
\t\t\t'errUnknownCmd'        : '未知的命令.',
\t\t\t'errJqui'              : '无效的 jQuery UI 配置,必须包含 Selectable、draggable 以及 droppable 组件.',
\t\t\t'errNode'              : 'elFinder 需要能创建 DOM 元素.',
\t\t\t'errURL'               : '无效的 elFinder 配置! URL 选项未配置.',
\t\t\t'errAccess'            : '访问被拒绝.',
\t\t\t'errConnect'           : '不能连接到服务器端.',
\t\t\t'errAbort'             : '连接中止.',
\t\t\t'errTimeout'           : '连接超时.',
\t\t\t'errNotFound'          : '未找到服务器端.',
\t\t\t'errResponse'          : '无效的服务器端响应.',
\t\t\t'errConf'              : '无效的服务器端配置.',
\t\t\t'errJSON'              : 'PHP JSON 模块未安装.',
\t\t\t'errNoVolumes'         : '无可读的卷.',
\t\t\t'errCmdParams'         : '无效的命令 \"\$1\".',
\t\t\t'errDataNotJSON'       : '服务器返回的数据不符合 JSON 格式.',
\t\t\t'errDataEmpty'         : '服务器返回的数据为空.',
\t\t\t'errCmdReq'            : '服务器端请求需要命令名称.',
\t\t\t'errOpen'              : '无法打开 \"\$1\".',
\t\t\t'errNotFolder'         : '对象不是文件夹.',
\t\t\t'errNotFile'           : '对象不是文件.',
\t\t\t'errRead'              : '无法读取 \"\$1\".',
\t\t\t'errWrite'             : '无法写入 \"\$1\".',
\t\t\t'errPerm'              : '没有权限.',
\t\t\t'errLocked'            : '\"\$1\" 已被锁定,不能重命名, 移动或删除.',
\t\t\t'errExists'            : '文件 \"\$1\" 已经存在.',
\t\t\t'errInvName'           : '无效的文件名.',
\t\t\t'errInvDirname'        : '无效的文件夹名.',  // from v2.1.24 added 12.4.2017
\t\t\t'errFolderNotFound'    : '文件夹不存在.',
\t\t\t'errFileNotFound'      : '文件不存在.',
\t\t\t'errTrgFolderNotFound' : '未找到目标文件夹 \"\$1\".',
\t\t\t'errPopup'             : '浏览器拦截了弹出窗口. 请在选项中允许弹出窗口.',
\t\t\t'errMkdir'             : '不能创建文件夹 \"\$1\".',
\t\t\t'errMkfile'            : '不能创建文件 \"\$1\".',
\t\t\t'errRename'            : '不能重命名 \"\$1\".',
\t\t\t'errCopyFrom'          : '不允许从卷 \"\$1\" 复制.',
\t\t\t'errCopyTo'            : '不允许向卷 \"\$1\" 复制.',
\t\t\t'errMkOutLink'         : '无法创建链接到卷根以外的链接.', // from v2.1 added 03.10.2015
\t\t\t'errUpload'            : '上传出错.',  // old name - errUploadCommon
\t\t\t'errUploadFile'        : '无法上传 \"\$1\".', // old name - errUpload
\t\t\t'errUploadNoFiles'     : '未找到要上传的文件.',
\t\t\t'errUploadTotalSize'   : '数据超过了允许的最大大小.', // old name - errMaxSize
\t\t\t'errUploadFileSize'    : '文件超过了允许的最大大小.', //  old name - errFileMaxSize
\t\t\t'errUploadMime'        : '不允许的文件类型.',
\t\t\t'errUploadTransfer'    : '\"\$1\" 传输错误.',
\t\t\t'errUploadTemp'        : '无法为上传文件创建临时文件.', // from v2.1 added 26.09.2015
\t\t\t'errNotReplace'        : ' \"\$1\" 已存在, 不能被替换.', // new
\t\t\t'errReplace'           : '无法替换 \"\$1\".',
\t\t\t'errSave'              : '无法保存 \"\$1\".',
\t\t\t'errCopy'              : '无法复制 \"\$1\".',
\t\t\t'errMove'              : '无法移动 \"\$1\".',
\t\t\t'errCopyInItself'      : '不能移动 \"\$1\" 到原有位置.',
\t\t\t'errRm'                : '无法删除 \"\$1\".',
\t\t\t'errTrash'             : '无法移到回收站.', // from v2.1.24 added 30.4.2017
\t\t\t'errRmSrc'             : '不能删除源文件.',
\t\t\t'errExtract'           : '无法从 \"\$1\" 提取文件.',
\t\t\t'errArchive'           : '无法创建压缩包.',
\t\t\t'errArcType'           : '不支持的压缩格式.',
\t\t\t'errNoArchive'         : '文件不是压缩包, 或者不支持该压缩格式.',
\t\t\t'errCmdNoSupport'      : '服务器端不支持该命令.',
\t\t\t'errReplByChild'       : '不能用文件夹 “\$1” 下的项替换文件夹 “\$1” 自身.',
\t\t\t'errArcSymlinks'       : '出于安全上的考虑，不允许解压包含符号链接的压缩包.', // edited 24.06.2012
\t\t\t'errArcMaxSize'        : '压缩包文件超过最大允许文件大小范围.',
\t\t\t'errResize'            : '无法将调整大小到 \"\$1\".',
\t\t\t'errResizeDegree'      : '无效的旋转角度.',  // added 7.3.2013
\t\t\t'errResizeRotate'      : '无法旋转图片.',  // added 7.3.2013
\t\t\t'errResizeSize'        : '无效的图片尺寸.',  // added 7.3.2013
\t\t\t'errResizeNoChange'    : '图片尺寸未改变.',  // added 7.3.2013
\t\t\t'errUsupportType'      : '不被支持的文件格式.',
\t\t\t'errNotUTF8Content'    : '文件 \"\$1\" 不是 UTF-8 格式, 不能编辑.',  // added 9.11.2011
\t\t\t'errNetMount'          : '无法装载 \"\$1\".', // added 17.04.2012
\t\t\t'errNetMountNoDriver'  : '不支持该协议.',     // added 17.04.2012
\t\t\t'errNetMountFailed'    : '装载失败.',         // added 17.04.2012
\t\t\t'errNetMountHostReq'   : '需要指定主机.', // added 18.04.2012
\t\t\t'errSessionExpires'    : '您的会话由于长时间未活动已过期.',
\t\t\t'errCreatingTempDir'   : '无法创建临时目录 \"\$1\"',
\t\t\t'errFtpDownloadFile'   : '无法从FTP下载文件 \"\$1\" ',
\t\t\t'errFtpUploadFile'     : '无法将文件 \"\$1\" 上传至FTP',
\t\t\t'errFtpMkdir'          : '无法在FTP上创建远程目录 \"\$1\"',
\t\t\t'errArchiveExec'       : '归档文件\"\$1\"时出错.',
\t\t\t'errExtractExec'       : '解压文件\"\$1\"时出错.',
\t\t\t'errNetUnMount'        : '无法卸载.', // from v2.1 added 30.04.2012
\t\t\t'errConvUTF8'          : '未转换至UTF-8', // from v2.1 added 08.04.2014
\t\t\t'errFolderUpload'      : '如果您需要上传目录, 请尝试使用Google Chrome.', // from v2.1 added 26.6.2015
\t\t\t'errSearchTimeout'     : '搜索 \"\$1\" 超时,仅显示部分搜索结果.', // from v2.1 added 12.1.2016
\t\t\t'errReauthRequire'     : '必需重新授权.', // from v2.1.10 added 24.3.2016
\t\t\t'errMaxTargets'        : '最大可选择项目数为 \$1.', // from v2.1.17 added 17.10.2016
\t\t\t'errRestore'           : '无法从回收站中恢复，无法识别还原目的地.', // from v2.1.24 added 3.5.2017
\t\t\t'errEditorNotFound'    : '找不到这个文件的编辑器.', // from v2.1.25 added 23.5.2017
\t\t\t'errServerError'       : '服务端发生错误.', // from v2.1.25 added 16.6.2017
\t\t\t'errEmpty'             : '无法清空文件夹 \"\$1\".', // from v2.1.25 added 22.6.2017
\t\t\t'moreErrors'           : '存在 \$1 多个错误.', // from v2.1.44 added 9.12.2018

\t\t\t/******************************* commands names ********************************/
\t\t\t'cmdarchive'   : '创建压缩包',
\t\t\t'cmdback'      : '后退',
\t\t\t'cmdcopy'      : '复制',
\t\t\t'cmdcut'       : '剪切',
\t\t\t'cmddownload'  : '下载',
\t\t\t'cmdduplicate' : '创建副本',
\t\t\t'cmdedit'      : '编辑文件',
\t\t\t'cmdextract'   : '从压缩包提取文件',
\t\t\t'cmdforward'   : '前进',
\t\t\t'cmdgetfile'   : '选择文件',
\t\t\t'cmdhelp'      : '关于',
\t\t\t'cmdhome'      : '首页',
\t\t\t'cmdinfo'      : '查看详情',
\t\t\t'cmdmkdir'     : '新建文件夹',
\t\t\t'cmdmkdirin'   : '至新文件夹', // from v2.1.7 added 19.2.2016
\t\t\t'cmdmkfile'    : '新建文件',
\t\t\t'cmdopen'      : '打开',
\t\t\t'cmdpaste'     : '粘贴',
\t\t\t'cmdquicklook' : '预览',
\t\t\t'cmdreload'    : '刷新',
\t\t\t'cmdrename'    : '重命名',
\t\t\t'cmdrm'        : '删除',
\t\t\t'cmdtrash'     : '至回收站', //from v2.1.24 added 29.4.2017
\t\t\t'cmdrestore'   : '恢复', //from v2.1.24 added 3.5.2017
\t\t\t'cmdsearch'    : '查找文件',
\t\t\t'cmdup'        : '转到上一级文件夹',
\t\t\t'cmdupload'    : '上传文件',
\t\t\t'cmdview'      : '查看',
\t\t\t'cmdresize'    : '调整大小&旋转',
\t\t\t'cmdsort'      : '排序',
\t\t\t'cmdnetmount'  : '装载网络卷', // added 18.04.2012
\t\t\t'cmdnetunmount': '卸载', // from v2.1 added 30.04.2012
\t\t\t'cmdplaces'    : '添加到收藏夹', // added 28.12.2014
\t\t\t'cmdchmod'     : '改变模式', // from v2.1 added 20.6.2015
\t\t\t'cmdopendir'   : '打开文件夹', // from v2.1 added 13.1.2016
\t\t\t'cmdcolwidth'  : '设置列宽', // from v2.1.13 added 12.06.2016
\t\t\t'cmdfullscreen': '全屏显示', // from v2.1.15 added 03.08.2016
\t\t\t'cmdmove'      : '移动', // from v2.1.15 added 21.08.2016
\t\t\t'cmdempty'     : '清空文件夹', // from v2.1.25 added 22.06.2017
\t\t\t'cmdundo'      : '撤消', // from v2.1.27 added 31.07.2017
\t\t\t'cmdredo'      : '重做', // from v2.1.27 added 31.07.2017
\t\t\t'cmdpreference': '偏好', // from v2.1.27 added 03.08.2017
\t\t\t'cmdselectall' : '全选', // from v2.1.28 added 15.08.2017
\t\t\t'cmdselectnone': '全不选', // from v2.1.28 added 15.08.2017
\t\t\t'cmdselectinvert': '反向选择', // from v2.1.28 added 15.08.2017
\t\t\t'cmdopennew'   : '在新窗口打开', // from v2.1.38 added 3.4.2018
\t\t\t'cmdhide'      : '隐藏 (偏好)', // from v2.1.41 added 24.7.2018

\t\t\t/*********************************** buttons ***********************************/
\t\t\t'btnClose'  : '关闭',
\t\t\t'btnSave'   : '保存',
\t\t\t'btnRm'     : '删除',
\t\t\t'btnApply'  : '应用',
\t\t\t'btnCancel' : '取消',
\t\t\t'btnNo'     : '否',
\t\t\t'btnYes'    : '是',
\t\t\t'btnMount'  : '装载',  // added 18.04.2012
\t\t\t'btnApprove': '至 \$1 并确认', // from v2.1 added 26.04.2012
\t\t\t'btnUnmount': '卸载', // from v2.1 added 30.04.2012
\t\t\t'btnConv'   : '转换', // from v2.1 added 08.04.2014
\t\t\t'btnCwd'    : '这里',      // from v2.1 added 22.5.2015
\t\t\t'btnVolume' : '卷',    // from v2.1 added 22.5.2015
\t\t\t'btnAll'    : '全部',       // from v2.1 added 22.5.2015
\t\t\t'btnMime'   : 'MIME类型', // from v2.1 added 22.5.2015
\t\t\t'btnFileName':'文件名',  // from v2.1 added 22.5.2015
\t\t\t'btnSaveClose': '保存并关闭', // from v2.1 added 12.6.2015
\t\t\t'btnBackup' : '备份', // fromv2.1 added 28.11.2015
\t\t\t'btnRename'    : '重命名',      // from v2.1.24 added 6.4.2017
\t\t\t'btnRenameAll' : '重命名(All)', // from v2.1.24 added 6.4.2017
\t\t\t'btnPrevious' : '向前 (\$1/\$2)', // from v2.1.24 added 11.5.2017
\t\t\t'btnNext'     : '向后 (\$1/\$2)', // from v2.1.24 added 11.5.2017
\t\t\t'btnSaveAs'   : '另存为', // from v2.1.25 added 24.5.2017

\t\t\t/******************************** notifications ********************************/
\t\t\t'ntfopen'     : '打开文件夹',
\t\t\t'ntffile'     : '打开文件',
\t\t\t'ntfreload'   : '刷新文件夹内容',
\t\t\t'ntfmkdir'    : '创建文件夹',
\t\t\t'ntfmkfile'   : '创建文件',
\t\t\t'ntfrm'       : '删除文件',
\t\t\t'ntfcopy'     : '复制文件',
\t\t\t'ntfmove'     : '移动文件',
\t\t\t'ntfprepare'  : '准备复制文件',
\t\t\t'ntfrename'   : '重命名文件',
\t\t\t'ntfupload'   : '上传文件',
\t\t\t'ntfdownload' : '下载文件',
\t\t\t'ntfsave'     : '保存文件',
\t\t\t'ntfarchive'  : '创建压缩包',
\t\t\t'ntfextract'  : '从压缩包提取文件',
\t\t\t'ntfsearch'   : '搜索文件',
\t\t\t'ntfresize'   : '正在更改尺寸',
\t\t\t'ntfsmth'     : '正在忙 >_<',
\t\t\t'ntfloadimg'  : '正在加载图片',
\t\t\t'ntfnetmount' : '正在装载网络卷', // added 18.04.2012
\t\t\t'ntfnetunmount': '卸载网络卷', // from v2.1 added 30.04.2012
\t\t\t'ntfdim'      : '获取图像尺寸', // added 20.05.2013
\t\t\t'ntfreaddir'  : '正在读取文件夹信息', // from v2.1 added 01.07.2013
\t\t\t'ntfurl'      : '正在获取链接地址', // from v2.1 added 11.03.2014
\t\t\t'ntfchmod'    : '正在改变文件模式', // from v2.1 added 20.6.2015
\t\t\t'ntfpreupload': '正在验证上传文件名', // from v2.1 added 31.11.2015
\t\t\t'ntfzipdl'    : '正在创建一个下载文件', // from v2.1.7 added 23.1.2016
\t\t\t'ntfparents'  : '正在取得路径信息', // from v2.1.17 added 2.11.2016
\t\t\t'ntfchunkmerge': '正在处理上传文件', // from v2.1.17 added 2.11.2016
\t\t\t'ntftrash'    : '移动到回收站', // from v2.1.24 added 2.5.2017
\t\t\t'ntfrestore'  : '从回收站恢复', // from v2.1.24 added 3.5.2017
\t\t\t'ntfchkdir'   : '检查目标文件夹', // from v2.1.24 added 3.5.2017
\t\t\t'ntfundo'     : '撤消上一个全局操作', // from v2.1.27 added 31.07.2017
\t\t\t'ntfredo'     : '重做上一全局操作', // from v2.1.27 added 31.07.2017
\t\t\t'ntfchkcontent' : '检查内容', // from v2.1.41 added 3.8.2018

\t\t\t/*********************************** volumes *********************************/
\t\t\t'volume_Trash' : '回收站', //from v2.1.24 added 29.4.2017

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
\t\t\t'sortname'          : '按名称',
\t\t\t'sortkind'          : '按类型',
\t\t\t'sortsize'          : '按大小',
\t\t\t'sortdate'          : '按日期',
\t\t\t'sortFoldersFirst'  : '文件夹优先',
\t\t\t'sortperm'          : '按权限排序', // from v2.1.13 added 13.06.2016
\t\t\t'sortmode'          : '按属性排序',       // from v2.1.13 added 13.06.2016
\t\t\t'sortowner'         : '按所有者排序',      // from v2.1.13 added 13.06.2016
\t\t\t'sortgroup'         : '按组排序',      // from v2.1.13 added 13.06.2016
\t\t\t'sortAlsoTreeview'  : '同时刷新树状目录',  // from v2.1.15 added 01.08.2016

\t\t\t/********************************** new items **********************************/
\t\t\t'untitled file.txt' : '新文件.txt', // added 10.11.2015
\t\t\t'untitled folder'   : '新文件夹',   // added 10.11.2015
\t\t\t'Archive'           : '新压缩包',  // from v2.1 added 10.11.2015
\t\t\t'untitled file'     : '新文件.\$1',  // from v2.1.41 added 6.8.2018
\t\t\t'extentionfile'     : '\$1: 文件',    // from v2.1.41 added 6.8.2018
\t\t\t'extentiontype'     : '\$1: \$2',      // from v2.1.43 added 17.10.2018

\t\t\t/********************************** messages **********************************/
\t\t\t'confirmReq'      : '请确认',
\t\t\t'confirmRm'       : '确定要删除文件吗?<br/>该操作不可撤销!',
\t\t\t'confirmRepl'     : '用新的文件替换原有文件?',
\t\t\t'confirmRest'     : '从回收站替换当前项?', // fromv2.1.24 added 5.5.2017
\t\t\t'confirmConvUTF8' : '文件不是UTF-8格式.<br/>转换为UTF-8吗？<br/>通过在转换后保存,内容变为UTF-8.', // from v2.1 added 08.04.2014
\t\t\t'confirmNonUTF8'  : '无法检测到此文件的字符编码.需要暂时转换此文件为UTF-8编码以进行编辑.<br/>请选择此文件的字符编码.', // from v2.1.19 added 28.11.2016
\t\t\t'confirmNotSave'  : '文件已被编辑.<br/>如果不保存直接关闭,将丢失编辑内容.', // from v2.1 added 15.7.2015
\t\t\t'confirmTrash'    : '确定要将该项移动到回收站么?', //from v2.1.24 added 29.4.2017
\t\t\t'confirmMove'     : '确定要移动该项到 \"\$1\"?', //from v2.1.50 added 27.7.2019
\t\t\t'apllyAll'        : '全部应用',
\t\t\t'name'            : '名称',
\t\t\t'size'            : '大小',
\t\t\t'perms'           : '权限',
\t\t\t'modify'          : '修改于',
\t\t\t'kind'            : '类别',
\t\t\t'read'            : '读取',
\t\t\t'write'           : '写入',
\t\t\t'noaccess'        : '无权限',
\t\t\t'and'             : '和',
\t\t\t'unknown'         : '未知',
\t\t\t'selectall'       : '选择所有文件',
\t\t\t'selectfiles'     : '选择文件',
\t\t\t'selectffile'     : '选择第一个文件',
\t\t\t'selectlfile'     : '选择最后一个文件',
\t\t\t'viewlist'        : '列表视图',
\t\t\t'viewicons'       : '图标视图',
\t\t\t'viewSmall'       : '小图标', // from v2.1.39 added 22.5.2018
\t\t\t'viewMedium'      : '中图标', // from v2.1.39 added 22.5.2018
\t\t\t'viewLarge'       : '大图标', // from v2.1.39 added 22.5.2018
\t\t\t'viewExtraLarge'  : '超大图标', // from v2.1.39 added 22.5.2018
\t\t\t'places'          : '位置',
\t\t\t'calc'            : '计算',
\t\t\t'path'            : '路径',
\t\t\t'aliasfor'        : '别名',
\t\t\t'locked'          : '锁定',
\t\t\t'dim'             : '尺寸',
\t\t\t'files'           : '文件',
\t\t\t'folders'         : '文件夹',
\t\t\t'items'           : '项目',
\t\t\t'yes'             : '是',
\t\t\t'no'              : '否',
\t\t\t'link'            : '链接',
\t\t\t'searcresult'     : '搜索结果',
\t\t\t'selected'        : '选中的项目',
\t\t\t'about'           : '关于',
\t\t\t'shortcuts'       : '快捷键',
\t\t\t'help'            : '帮助',
\t\t\t'webfm'           : '网络文件管理器',
\t\t\t'ver'             : '版本',
\t\t\t'protocolver'     : '协议版本',
\t\t\t'homepage'        : '项目主页',
\t\t\t'docs'            : '文档',
\t\t\t'github'          : '复刻我们的github',
\t\t\t'twitter'         : '关注我们的twitter',
\t\t\t'facebook'        : '加入我们的facebook',
\t\t\t'team'            : '团队',
\t\t\t'chiefdev'        : '首席开发',
\t\t\t'developer'       : '开发',
\t\t\t'contributor'     : '贡献',
\t\t\t'maintainer'      : '维护',
\t\t\t'translator'      : '翻译',
\t\t\t'icons'           : '图标',
\t\t\t'dontforget'      : '别忘了带上你擦汗的毛巾',
\t\t\t'shortcutsof'     : '快捷键已禁用',
\t\t\t'dropFiles'       : '把文件拖到这里',
\t\t\t'or'              : '或者',
\t\t\t'selectForUpload' : '选择要上传的文件',
\t\t\t'moveFiles'       : '移动文件',
\t\t\t'copyFiles'       : '复制文件',
\t\t\t'restoreFiles'    : '恢复文件', // from v2.1.24 added 5.5.2017
\t\t\t'rmFromPlaces'    : '从这里中删除',
\t\t\t'aspectRatio'     : '保持比例',
\t\t\t'scale'           : '缩放比例',
\t\t\t'width'           : '宽',
\t\t\t'height'          : '高',
\t\t\t'resize'          : '调整大小',
\t\t\t'crop'            : '裁切',
\t\t\t'rotate'          : '旋转',
\t\t\t'rotate-cw'       : '顺时针旋转90°',
\t\t\t'rotate-ccw'      : '逆时针旋转90°',
\t\t\t'degree'          : '°',
\t\t\t'netMountDialogTitle' : '装载网络目录', // added 18.04.2012
\t\t\t'protocol'            : '协议', // added 18.04.2012
\t\t\t'host'                : '主机', // added 18.04.2012
\t\t\t'port'                : '端口', // added 18.04.2012
\t\t\t'user'                : '用户', // added 18.04.2012
\t\t\t'pass'                : '密码', // added 18.04.2012
\t\t\t'confirmUnmount'      : '确实要卸载 \$1?',  // from v2.1 added 30.04.2012
\t\t\t'dropFilesBrowser': '从浏览器中拖放或粘贴文件', // from v2.1 added 30.05.2012
\t\t\t'dropPasteFiles'  : '拖放文件，粘贴网址或剪贴板图像', // from v2.1 added 07.04.2014
\t\t\t'encoding'        : '编码', // from v2.1 added 19.12.2014
\t\t\t'locale'          : '语言环境',   // from v2.1 added 19.12.2014
\t\t\t'searchTarget'    : '目标: \$1',                // from v2.1 added 22.5.2015
\t\t\t'searchMime'      : '按输入MIME类型搜索', // from v2.1 added 22.5.2015
\t\t\t'owner'           : '所有者', // from v2.1 added 20.6.2015
\t\t\t'group'           : '组', // from v2.1 added 20.6.2015
\t\t\t'other'           : '其他', // from v2.1 added 20.6.2015
\t\t\t'execute'         : '执行', // from v2.1 added 20.6.2015
\t\t\t'perm'            : '许可', // from v2.1 added 20.6.2015
\t\t\t'mode'            : '属性', // from v2.1 added 20.6.2015
\t\t\t'emptyFolder'     : '文件夹是空的', // from v2.1.6 added 30.12.2015
\t\t\t'emptyFolderDrop' : '文件夹是空的\\\\A 拖放可追加项目', // from v2.1.6 added 30.12.2015
\t\t\t'emptyFolderLTap' : '文件夹是空的\\\\A 长按可添加项目', // from v2.1.6 added 30.12.2015
\t\t\t'quality'         : '品质', // from v2.1.6 added 5.1.2016
\t\t\t'autoSync'        : '自动同步',  // from v2.1.6 added 10.1.2016
\t\t\t'moveUp'          : '向上移动',  // from v2.1.6 added 18.1.2016
\t\t\t'getLink'         : '获取URL链接', // from v2.1.7 added 9.2.2016
\t\t\t'selectedItems'   : '已选择项目 (\$1)', // from v2.1.7 added 2.19.2016
\t\t\t'folderId'        : '目录ID', // from v2.1.10 added 3.25.2016
\t\t\t'offlineAccess'   : '允许离线操作', // from v2.1.10 added 3.25.2016
\t\t\t'reAuth'          : '重新验证', // from v2.1.10 added 3.25.2016
\t\t\t'nowLoading'      : '正在加载...', // from v2.1.12 added 4.26.2016
\t\t\t'openMulti'       : '打开多个文件', // from v2.1.12 added 5.14.2016
\t\t\t'openMultiConfirm': '您正在尝试打开\$1文件.您确定要在浏览器中打开吗?', // from v2.1.12 added 5.14.2016
\t\t\t'emptySearch'     : '搜索目标中没有匹配结果', // from v2.1.12 added 5.16.2016
\t\t\t'editingFile'     : '正在编辑文件.', // from v2.1.13 added 6.3.2016
\t\t\t'hasSelected'     : '已选择 \$1 个项目.', // from v2.1.13 added 6.3.2016
\t\t\t'hasClipboard'    : '剪贴板里有 \$1 个项目.', // from v2.1.13 added 6.3.2016
\t\t\t'incSearchOnly'   : '增量搜索仅来自当前视图.', // from v2.1.13 added 6.30.2016
\t\t\t'reinstate'       : '恢复', // from v2.1.15 added 3.8.2016
\t\t\t'complete'        : '\$1 完成', // from v2.1.15 added 21.8.2016
\t\t\t'contextmenu'     : '上下文菜单', // from v2.1.15 added 9.9.2016
\t\t\t'pageTurning'     : '翻页', // from v2.1.15 added 10.9.2016
\t\t\t'volumeRoots'     : '根目录', // from v2.1.16 added 16.9.2016
\t\t\t'reset'           : '重置', // from v2.1.16 added 1.10.2016
\t\t\t'bgcolor'         : '背景色', // from v2.1.16 added 1.10.2016
\t\t\t'colorPicker'     : '颜色选择器', // from v2.1.16 added 1.10.2016
\t\t\t'8pxgrid'         : '步长(8px)', // from v2.1.16 added 4.10.2016
\t\t\t'enabled'         : '启用', // from v2.1.16 added 4.10.2016
\t\t\t'disabled'        : '关闭', // from v2.1.16 added 4.10.2016
\t\t\t'emptyIncSearch'  : '当前视图下没有匹配结果', // from v2.1.16 added 5.10.2016
\t\t\t'emptyLetSearch'  : '当前视图中的第一个字母搜索结果为空', // from v2.1.23 added 24.3.2017
\t\t\t'textLabel'       : '文本标签', // from v2.1.17 added 13.10.2016
\t\t\t'minsLeft'        : '剩余 \$1 分钟', // from v2.1.17 added 13.11.2016
\t\t\t'openAsEncoding'  : '使用所选编码重新打开', // from v2.1.19 added 2.12.2016
\t\t\t'saveAsEncoding'  : '使用所选编码保存', // from v2.1.19 added 2.12.2016
\t\t\t'selectFolder'    : '选择目录', // from v2.1.20 added 13.12.2016
\t\t\t'firstLetterSearch': '首字母搜索', // from v2.1.23 added 24.3.2017
\t\t\t'presets'         : '预置', // from v2.1.25 added 26.5.2017
\t\t\t'tooManyToTrash'  : '项目太多，不能移动到回收站.', // from v2.1.25 added 9.6.2017
\t\t\t'TextArea'        : '文本区域', // from v2.1.25 added 14.6.2017
\t\t\t'folderToEmpty'   : '清空文件夹 \"\$1\".', // from v2.1.25 added 22.6.2017
\t\t\t'filderIsEmpty'   : '文件夹 \"\$1\" 为空.', // from v2.1.25 added 22.6.2017
\t\t\t'preference'      : '偏好', // from v2.1.26 added 28.6.2017
\t\t\t'language'        : '语言设置', // from v2.1.26 added 28.6.2017
\t\t\t'clearBrowserData': '清除保存在此浏览器中的偏好设置', // from v2.1.26 added 28.6.2017
\t\t\t'toolbarPref'     : '工具栏设置', // from v2.1.27 added 2.8.2017
\t\t\t'charsLeft'       : '... 剩余\$1字符',  // from v2.1.29 added 30.8.2017
\t\t\t'linesLeft'       : '... 剩余\$1行',  // from v2.1.52 added 16.1.2020
\t\t\t'sum'             : '总数', // from v2.1.29 added 28.9.2017
\t\t\t'roughFileSize'   : '粗略的文件大小', // from v2.1.30 added 2.11.2017
\t\t\t'autoFocusDialog' : '鼠标悬停在对话框内可编辑区域时自动获得焦点',  // from v2.1.30 added 2.11.2017
\t\t\t'select'          : '选择', // from v2.1.30 added 23.11.2017
\t\t\t'selectAction'    : '双击选择的文件时', // from v2.1.30 added 23.11.2017
\t\t\t'useStoredEditor' : '用上次使用的编辑器打开', // from v2.1.30 added 23.11.2017
\t\t\t'selectinvert'    : '反向选择', // from v2.1.30 added 25.11.2017
\t\t\t'renameMultiple'  : '确定要重命名选定项 \$1 为 \$2 吗?<br/>该操作不能撤消!', // from v2.1.31 added 4.12.2017
\t\t\t'batchRename'     : '批量重命名', // from v2.1.31 added 8.12.2017
\t\t\t'plusNumber'      : '增加数量', // from v2.1.31 added 8.12.2017
\t\t\t'asPrefix'        : '添加前缀', // from v2.1.31 added 8.12.2017
\t\t\t'asSuffix'        : '添加后缀', // from v2.1.31 added 8.12.2017
\t\t\t'changeExtention' : '变化范围', // from v2.1.31 added 8.12.2017
\t\t\t'columnPref'      : '列设置 (列表视图)', // from v2.1.32 added 6.2.2018
\t\t\t'reflectOnImmediate' : '所有修改将立即反馈到文档.', // from v2.1.33 added 2.3.2018
\t\t\t'reflectOnUnmount'   : '所有修改在卸载本卷之前不会反馈', // from v2.1.33 added 2.3.2018
\t\t\t'unmountChildren' : '安装在本卷上的以下卷也会卸载.你确定要卸载吗?', // from v2.1.33 added 5.3.2018
\t\t\t'selectionInfo'   : '选择信息', // from v2.1.33 added 7.3.2018
\t\t\t'hashChecker'     : '显示文件散列值的算法', // from v2.1.33 added 10.3.2018
\t\t\t'infoItems'       : '信息条目 (选择信息面板)', // from v2.1.38 added 28.3.2018
\t\t\t'pressAgainToExit': '再按退出', // from v2.1.38 added 1.4.2018
\t\t\t'toolbar'         : '工具条', // from v2.1.38 added 4.4.2018
\t\t\t'workspace'       : '工作空间', // from v2.1.38 added 4.4.2018
\t\t\t'dialog'          : '对话框', // from v2.1.38 added 4.4.2018
\t\t\t'all'             : '全部', // from v2.1.38 added 4.4.2018
\t\t\t'iconSize'        : '图标尺寸 (图标视图)', // from v2.1.39 added 7.5.2018
\t\t\t'editorMaximized' : '打开最大化编辑器窗口', // from v2.1.40 added 30.6.2018
\t\t\t'editorConvNoApi' : '由于通过 API 转换功能当前不可用，请到网站上转换.', //from v2.1.40 added 8.7.2018
\t\t\t'editorConvNeedUpload' : '转换后，必须上传条目URL或一个下载的文件,以保存转换后的文件.', //from v2.1.40 added 8.7.2018
\t\t\t'convertOn'       : '在 \$1 站点上转换', // from v2.1.40 added 10.7.2018
\t\t\t'integrations'    : '集成', // from v2.1.40 added 11.7.2018
\t\t\t'integrationWith' : '本 elFinder 集成以下外部服务.使用前请检查使用条款、隐私政策等.', // from v2.1.40 added 11.7.2018
\t\t\t'showHidden'      : '显示已隐藏的条目', // from v2.1.41 added 24.7.2018
\t\t\t'hideHidden'      : '隐藏已隐藏的条目', // from v2.1.41 added 24.7.2018
\t\t\t'toggleHidden'    : '显示/隐藏已隐藏的条目', // from v2.1.41 added 24.7.2018
\t\t\t'makefileTypes'   : '允许\"新文件\"使用的文件类型', // from v2.1.41 added 7.8.2018
\t\t\t'typeOfTextfile'  : '文本文件类型', // from v2.1.41 added 7.8.2018
\t\t\t'add'             : '添加', // from v2.1.41 added 7.8.2018
\t\t\t'theme'           : '主题', // from v2.1.43 added 19.10.2018
\t\t\t'default'         : '缺省', // from v2.1.43 added 19.10.2018
\t\t\t'description'     : '描述', // from v2.1.43 added 19.10.2018
\t\t\t'website'         : '网站', // from v2.1.43 added 19.10.2018
\t\t\t'author'          : '作者', // from v2.1.43 added 19.10.2018
\t\t\t'email'           : '邮箱', // from v2.1.43 added 19.10.2018
\t\t\t'license'         : '许可证', // from v2.1.43 added 19.10.2018
\t\t\t'exportToSave'    : '本条目不能保存. 为避免丢失编辑数据,须要导出到你的电脑.', // from v2.1.44 added 1.12.2018
\t\t\t'dblclickToSelect': '在文件上双击以选中它.', // from v2.1.47 added 22.1.2019
\t\t\t'useFullscreen'   : '使用全屏模式', // from v2.1.47 added 19.2.2019

\t\t\t/********************************** mimetypes **********************************/
\t\t\t'kindUnknown'     : '未知',
\t\t\t'kindRoot'        : '根目录', // from v2.1.16 added 16.10.2016
\t\t\t'kindFolder'      : '文件夹',
\t\t\t'kindSelects'     : '选择', // from v2.1.29 added 29.8.2017
\t\t\t'kindAlias'       : '别名',
\t\t\t'kindAliasBroken' : '错误的别名',
\t\t\t// applications
\t\t\t'kindApp'         : '程序',
\t\t\t'kindPostscript'  : 'Postscript 文档',
\t\t\t'kindMsOffice'    : 'Microsoft Office 文档',
\t\t\t'kindMsWord'      : 'Microsoft Word 文档',
\t\t\t'kindMsExcel'     : 'Microsoft Excel 文档',
\t\t\t'kindMsPP'        : 'Microsoft Powerpoint 演示',
\t\t\t'kindOO'          : 'Open Office 文档',
\t\t\t'kindAppFlash'    : 'Flash 程序',
\t\t\t'kindPDF'         : 'PDF 文档',
\t\t\t'kindTorrent'     : 'Bittorrent 文件',
\t\t\t'kind7z'          : '7z 压缩包',
\t\t\t'kindTAR'         : 'TAR 压缩包',
\t\t\t'kindGZIP'        : 'GZIP 压缩包',
\t\t\t'kindBZIP'        : 'BZIP 压缩包',
\t\t\t'kindXZ'          : 'XZ 压缩包',
\t\t\t'kindZIP'         : 'ZIP 压缩包',
\t\t\t'kindRAR'         : 'RAR 压缩包',
\t\t\t'kindJAR'         : 'Java JAR 文件',
\t\t\t'kindTTF'         : 'True Type 字体',
\t\t\t'kindOTF'         : 'Open Type 字体',
\t\t\t'kindRPM'         : 'RPM 包',
\t\t\t// texts
\t\t\t'kindText'        : '文本文件',
\t\t\t'kindTextPlain'   : '纯文本',
\t\t\t'kindPHP'         : 'PHP 源代码',
\t\t\t'kindCSS'         : '层叠样式表(CSS)',
\t\t\t'kindHTML'        : 'HTML 文档',
\t\t\t'kindJS'          : 'Javascript 源代码',
\t\t\t'kindRTF'         : '富文本格式(RTF)',
\t\t\t'kindC'           : 'C 源代码',
\t\t\t'kindCHeader'     : 'C 头文件',
\t\t\t'kindCPP'         : 'C++ 源代码',
\t\t\t'kindCPPHeader'   : 'C++ 头文件',
\t\t\t'kindShell'       : 'Unix 外壳脚本',
\t\t\t'kindPython'      : 'Python 源代码',
\t\t\t'kindJava'        : 'Java 源代码',
\t\t\t'kindRuby'        : 'Ruby 源代码',
\t\t\t'kindPerl'        : 'Perl 源代码',
\t\t\t'kindSQL'         : 'SQL 脚本',
\t\t\t'kindXML'         : 'XML 文档',
\t\t\t'kindAWK'         : 'AWK 源代码',
\t\t\t'kindCSV'         : '逗号分隔值文件(CSV)',
\t\t\t'kindDOCBOOK'     : 'Docbook XML 文档',
\t\t\t'kindMarkdown'    : 'Markdown 文本', // added 20.7.2015
\t\t\t// images
\t\t\t'kindImage'       : '图片',
\t\t\t'kindBMP'         : 'BMP 图片',
\t\t\t'kindJPEG'        : 'JPEG 图片',
\t\t\t'kindGIF'         : 'GIF 图片',
\t\t\t'kindPNG'         : 'PNG 图片',
\t\t\t'kindTIFF'        : 'TIFF 图片',
\t\t\t'kindTGA'         : 'TGA 图片',
\t\t\t'kindPSD'         : 'Adobe Photoshop 图片',
\t\t\t'kindXBITMAP'     : 'X bitmap 图片',
\t\t\t'kindPXM'         : 'Pixelmator 图片',
\t\t\t// media
\t\t\t'kindAudio'       : '音频',
\t\t\t'kindAudioMPEG'   : 'MPEG 音频',
\t\t\t'kindAudioMPEG4'  : 'MPEG-4 音频',
\t\t\t'kindAudioMIDI'   : 'MIDI 音频',
\t\t\t'kindAudioOGG'    : 'Ogg Vorbis 音频',
\t\t\t'kindAudioWAV'    : 'WAV 音频',
\t\t\t'AudioPlaylist'   : 'MP3 播放列表',
\t\t\t'kindVideo'       : '视频',
\t\t\t'kindVideoDV'     : 'DV 视频',
\t\t\t'kindVideoMPEG'   : 'MPEG 视频',
\t\t\t'kindVideoMPEG4'  : 'MPEG-4 视频',
\t\t\t'kindVideoAVI'    : 'AVI 视频',
\t\t\t'kindVideoMOV'    : 'Quick Time 视频',
\t\t\t'kindVideoWM'     : 'Windows Media 视频',
\t\t\t'kindVideoFlash'  : 'Flash 视频',
\t\t\t'kindVideoMKV'    : 'Matroska 视频',
\t\t\t'kindVideoOGG'    : 'Ogg 视频'
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
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.zh_CN.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.zh_CN.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.zh_CN.js");
    }
}
