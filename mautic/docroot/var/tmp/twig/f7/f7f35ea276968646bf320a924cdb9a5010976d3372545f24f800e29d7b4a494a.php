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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.ja.js */
class __TwigTemplate_9b26418a627d7a4dbdd60d155989b5790a74146dae795310dbc543480d553a0b extends Template
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
 * Japanese translation
 * @author Tomoaki Yoshida <info@yoshida-studio.jp>
 * @author Naoki Sawada <hypweb+elfinder@gmail.com>
 * @version 2020-01-16
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
\telFinder.prototype.i18.ja = {
\t\ttranslator : 'Tomoaki Yoshida &lt;info@yoshida-studio.jp&gt;, Naoki Sawada &lt;hypweb+elfinder@gmail.com&gt;',
\t\tlanguage   : 'Japanese',
\t\tdirection  : 'ltr',
\t\tdateFormat : 'Y/m/d h:i A', // will show like: 2018/08/24 04:37 PM
\t\tfancyDateFormat : '\$1 h:i A', // will show like: 今日 04:37 PM
\t\tnonameDateFormat : 'ymd-His', // noname upload will show like: 180824-163717
\t\tmessages   : {

\t\t\t/********************************** errors **********************************/
\t\t\t'error'                : 'エラー',
\t\t\t'errUnknown'           : '不明なエラーです。',
\t\t\t'errUnknownCmd'        : '不明なコマンドです。',
\t\t\t'errJqui'              : '無効な jQuery UI 設定です。Selectable, Draggable, Droppable コンポーネントを含める必要があります。',
\t\t\t'errNode'              : 'elFinder は DOM Element が必要です。',
\t\t\t'errURL'               : '無効な elFinder 設定です！ URLを設定されていません。',
\t\t\t'errAccess'            : 'アクセスが拒否されました。',
\t\t\t'errConnect'           : 'バックエンドとの接続ができません。',
\t\t\t'errAbort'             : '接続が中断されました。',
\t\t\t'errTimeout'           : '接続がタイムアウトしました。',
\t\t\t'errNotFound'          : 'バックエンドが見つかりません。',
\t\t\t'errResponse'          : '無効なバックエンドレスポンスです。',
\t\t\t'errConf'              : 'バックエンドの設定が有効ではありません。',
\t\t\t'errJSON'              : 'PHP JSON モジュールがインストールされていません。',
\t\t\t'errNoVolumes'         : '読み込み可能なボリュームがありません。',
\t\t\t'errCmdParams'         : 'コマンド \"\$1\"のパラメーターが無効です。',
\t\t\t'errDataNotJSON'       : 'JSONデータではありません。',
\t\t\t'errDataEmpty'         : '空のデータです。',
\t\t\t'errCmdReq'            : 'バックエンドリクエストはコマンド名が必要です。',
\t\t\t'errOpen'              : '\"\$1\" を開くことができません。',
\t\t\t'errNotFolder'         : 'オブジェクトがフォルダではありません。',
\t\t\t'errNotFile'           : 'オブジェクトがファイルではありません。',
\t\t\t'errRead'              : '\"\$1\" を読み込むことができません。',
\t\t\t'errWrite'             : '\"\$1\" に書き込むことができません。',
\t\t\t'errPerm'              : '権限がありません。',
\t\t\t'errLocked'            : '\"\$1\" はロックされているので名前の変更、移動、削除ができません。',
\t\t\t'errExists'            : '\"\$1\" というアイテム名はすでに存在しています。',
\t\t\t'errInvName'           : '無効なファイル名です。',
\t\t\t'errInvDirname'        : '無効なフォルダ名です。',  // from v2.1.24 added 12.4.2017
\t\t\t'errFolderNotFound'    : 'フォルダが見つかりません。',
\t\t\t'errFileNotFound'      : 'ファイルが見つかりません。',
\t\t\t'errTrgFolderNotFound' : 'ターゲットとするフォルダ \"\$1\" が見つかりません。',
\t\t\t'errPopup'             : 'ポップアップウィンドウが開けません。ファイルを開くにはブラウザの設定を変更してください。',
\t\t\t'errMkdir'             : 'フォルダ \"\$1\" を作成することができません。',
\t\t\t'errMkfile'            : 'ファイル \"\$1\" を作成することができません。',
\t\t\t'errRename'            : '\"\$1\" の名前を変更することができません。',
\t\t\t'errCopyFrom'          : '\"\$1\" からのファイルコピーは許可されていません。',
\t\t\t'errCopyTo'            : '\"\$1\" へのファイルコピーは許可されていません。',
\t\t\t'errMkOutLink'         : 'ボリュームルート外へのリンクを作成することはできません。', // from v2.1 added 03.10.2015
\t\t\t'errUpload'            : 'アップロードエラー',  // old name - errUploadCommon
\t\t\t'errUploadFile'        : '\"\$1\" をアップロードすることができません。', // old name - errUpload
\t\t\t'errUploadNoFiles'     : 'アップロードされたファイルはありません。',
\t\t\t'errUploadTotalSize'   : 'データが許容サイズを超えています。', // old name - errMaxSize
\t\t\t'errUploadFileSize'    : 'ファイルが許容サイズを超えています。', //  old name - errFileMaxSize
\t\t\t'errUploadMime'        : '許可されていないファイル形式です。',
\t\t\t'errUploadTransfer'    : '\"\$1\" 転送エラーです。',
\t\t\t'errUploadTemp'        : 'アップロード用一時ファイルを作成できません。', // from v2.1 added 26.09.2015
\t\t\t'errNotReplace'        : 'アイテム \"\$1\" はすでにこの場所にあり、アイテムのタイプが違うので置き換えることはできません。', // new
\t\t\t'errReplace'           : '\"\$1\" を置き換えることができません。',
\t\t\t'errSave'              : '\"\$1\" を保存することができません。',
\t\t\t'errCopy'              : '\"\$1\" をコピーすることができません。',
\t\t\t'errMove'              : '\"\$1\" を移動することができません。',
\t\t\t'errCopyInItself'      : '\"\$1\" をそれ自身の中にコピーすることはできません。',
\t\t\t'errRm'                : '\"\$1\" を削除することができません。',
\t\t\t'errTrash'             : 'ごみ箱に入れることができません。', // from v2.1.24 added 30.4.2017
\t\t\t'errRmSrc'             : '元ファイルを削除することができません。',
\t\t\t'errExtract'           : '\"\$1\" を解凍することができません。',
\t\t\t'errArchive'           : 'アーカイブを作成することができません。',
\t\t\t'errArcType'           : 'サポート外のアーカイブ形式です。',
\t\t\t'errNoArchive'         : 'アーカイブでないかサポートされていないアーカイブ形式です。',
\t\t\t'errCmdNoSupport'      : 'サポートされていないコマンドです。',
\t\t\t'errReplByChild'       : 'フォルダ \"\$1\" に含まれてるアイテムを置き換えることはできません。',
\t\t\t'errArcSymlinks'       : 'シンボリックリンクまたは許容されないファイル名を含むアーカイブはセキュリティ上、解凍できません。', // edited 24.06.2012
\t\t\t'errArcMaxSize'        : 'アーカイブが許容されたサイズを超えています。',
\t\t\t'errResize'            : '\"\$1\" のリサイズまたは回転ができません。',
\t\t\t'errResizeDegree'      : 'イメージの回転角度が不正です。',  // added 7.3.2013
\t\t\t'errResizeRotate'      : 'イメージを回転できません。',  // added 7.3.2013
\t\t\t'errResizeSize'        : '指定されたイメージサイズが不正です。',  // added 7.3.2013
\t\t\t'errResizeNoChange'    : 'イメージサイズなどの変更点がありません。',  // added 7.3.2013
\t\t\t'errUsupportType'      : 'このファイルタイプはサポートされていません。',
\t\t\t'errNotUTF8Content'    : 'ファイル \"\$1\" には UTF-8 以外の文字が含まれているので編集できません。',  // added 9.11.2011
\t\t\t'errNetMount'          : '\"\$1\" をマウントできません。', // added 17.04.2012
\t\t\t'errNetMountNoDriver'  : 'サポートされていないプロトコルです。',     // added 17.04.2012
\t\t\t'errNetMountFailed'    : 'マウントに失敗しました。',         // added 17.04.2012
\t\t\t'errNetMountHostReq'   : 'ホスト名は必須です。', // added 18.04.2012
\t\t\t'errSessionExpires'    : 'アクションがなかったため、セッションが期限切れになりました。',
\t\t\t'errCreatingTempDir'   : '一時ディレクトリを作成できません：\"\$1\"',
\t\t\t'errFtpDownloadFile'   : 'FTP からファイルをダウンロードできません：\"\$1\"',
\t\t\t'errFtpUploadFile'     : 'FTP へファイルをアップロードできません：\"\$1\"',
\t\t\t'errFtpMkdir'          : 'FTP にリモートディレクトリを作成できません：\"\$1\"',
\t\t\t'errArchiveExec'       : 'ファイルのアーカイブ中にエラーが発生しました：\"\$1\"',
\t\t\t'errExtractExec'       : 'ファイルの抽出中にエラーが発生しました：\"\$1\"',
\t\t\t'errNetUnMount'        : 'アンマウントできません。', // from v2.1 added 30.04.2012
\t\t\t'errConvUTF8'          : 'UTF-8 に変換できませんでした。', // from v2.1 added 08.04.2014
\t\t\t'errFolderUpload'      : 'フォルダをアップロードしたいのであれば、モダンブラウザを試してください。', // from v2.1 added 26.6.2015
\t\t\t'errSearchTimeout'     : '\"\$1\" を検索中にタイムアウトしました。検索結果は部分的です。', // from v2.1 added 12.1.2016
\t\t\t'errReauthRequire'     : '再認可が必要です。', // from v2.1.10 added 24.3.2016
\t\t\t'errMaxTargets'        : '選択可能な最大アイテム数は \$1 個です。', // from v2.1.17 added 17.10.2016
\t\t\t'errRestore'           : '宛先の特定ができないため、ごみ箱から戻せません。', // from v2.1.24 added 3.5.2017
\t\t\t'errEditorNotFound'    : 'このファイルタイプのエディターがありません。', // from v2.1.25 added 23.5.2017
\t\t\t'errServerError'       : 'サーバー側でエラーが発生しました。', // from v2.1.25 added 16.6.2017
\t\t\t'errEmpty'             : 'フォルダ\"\$1\"を空にすることができません。', // from v2.1.25 added 22.6.2017
\t\t\t'moreErrors'           : 'さらに \$1 件のエラーがあります。', // from v2.1.44 added 9.12.2018

\t\t\t/******************************* commands names ********************************/
\t\t\t'cmdarchive'   : 'アーカイブ作成',
\t\t\t'cmdback'      : '戻る',
\t\t\t'cmdcopy'      : 'コピー',
\t\t\t'cmdcut'       : 'カット',
\t\t\t'cmddownload'  : 'ダウンロード',
\t\t\t'cmdduplicate' : '複製',
\t\t\t'cmdedit'      : 'ファイル編集',
\t\t\t'cmdextract'   : 'アーカイブを解凍',
\t\t\t'cmdforward'   : '進む',
\t\t\t'cmdgetfile'   : 'ファイル選択',
\t\t\t'cmdhelp'      : 'このソフトウェアについて',
\t\t\t'cmdhome'      : 'ルート',
\t\t\t'cmdinfo'      : '情報',
\t\t\t'cmdmkdir'     : '新規フォルダ',
\t\t\t'cmdmkdirin'   : '新規フォルダへ', // from v2.1.7 added 19.2.2016
\t\t\t'cmdmkfile'    : '新規ファイル',
\t\t\t'cmdopen'      : '開く',
\t\t\t'cmdpaste'     : 'ペースト',
\t\t\t'cmdquicklook' : 'プレビュー',
\t\t\t'cmdreload'    : 'リロード',
\t\t\t'cmdrename'    : 'リネーム',
\t\t\t'cmdrm'        : '削除',
\t\t\t'cmdtrash'     : 'ごみ箱へ', //from v2.1.24 added 29.4.2017
\t\t\t'cmdrestore'   : '復元', //from v2.1.24 added 3.5.2017
\t\t\t'cmdsearch'    : 'ファイルを探す',
\t\t\t'cmdup'        : '親フォルダへ移動',
\t\t\t'cmdupload'    : 'ファイルアップロード',
\t\t\t'cmdview'      : 'ビュー',
\t\t\t'cmdresize'    : 'リサイズと回転',
\t\t\t'cmdsort'      : 'ソート',
\t\t\t'cmdnetmount'  : 'ネットワークボリュームをマウント', // added 18.04.2012
\t\t\t'cmdnetunmount': 'アンマウント', // from v2.1 added 30.04.2012
\t\t\t'cmdplaces'    : 'よく使う項目へ', // added 28.12.2014
\t\t\t'cmdchmod'     : '属性変更', // from v2.1 added 20.6.2015
\t\t\t'cmdopendir'   : 'フォルダを開く', // from v2.1 added 13.1.2016
\t\t\t'cmdcolwidth'  : '列幅リセット', // from v2.1.13 added 12.06.2016
\t\t\t'cmdfullscreen': 'フルスクリーン', // from v2.1.15 added 03.08.2016
\t\t\t'cmdmove'      : '移動', // from v2.1.15 added 21.08.2016
\t\t\t'cmdempty'     : 'フォルダを空に', // from v2.1.25 added 22.06.2017
\t\t\t'cmdundo'      : '元に戻す', // from v2.1.27 added 31.07.2017
\t\t\t'cmdredo'      : 'やり直し', // from v2.1.27 added 31.07.2017
\t\t\t'cmdpreference': '個人設定', // from v2.1.27 added 03.08.2017
\t\t\t'cmdselectall' : 'すべて選択', // from v2.1.28 added 15.08.2017
\t\t\t'cmdselectnone': '選択解除', // from v2.1.28 added 15.08.2017
\t\t\t'cmdselectinvert': '選択を反転', // from v2.1.28 added 15.08.2017
\t\t\t'cmdopennew'   : '新しいウィンドウで開く', // from v2.1.38 added 3.4.2018
\t\t\t'cmdhide'      : '非表示 (個人設定)', // from v2.1.41 added 24.7.2018

\t\t\t/*********************************** buttons ***********************************/
\t\t\t'btnClose'  : '閉じる',
\t\t\t'btnSave'   : '保存',
\t\t\t'btnRm'     : '削除',
\t\t\t'btnApply'  : '適用',
\t\t\t'btnCancel' : 'キャンセル',
\t\t\t'btnNo'     : 'いいえ',
\t\t\t'btnYes'    : 'はい',
\t\t\t'btnMount'  : 'マウント',  // added 18.04.2012
\t\t\t'btnApprove': '\$1へ行き認可する', // from v2.1 added 26.04.2012
\t\t\t'btnUnmount': 'アンマウント', // from v2.1 added 30.04.2012
\t\t\t'btnConv'   : '変換', // from v2.1 added 08.04.2014
\t\t\t'btnCwd'    : 'この場所',      // from v2.1 added 22.5.2015
\t\t\t'btnVolume' : 'ボリューム',    // from v2.1 added 22.5.2015
\t\t\t'btnAll'    : '全て',       // from v2.1 added 22.5.2015
\t\t\t'btnMime'   : 'MIMEタイプ', // from v2.1 added 22.5.2015
\t\t\t'btnFileName':'ファイル名',  // from v2.1 added 22.5.2015
\t\t\t'btnSaveClose': '保存して閉じる', // from v2.1 added 12.6.2015
\t\t\t'btnBackup' : 'バックアップ', // fromv2.1 added 28.11.2015
\t\t\t'btnRename'    : 'リネーム',      // from v2.1.24 added 6.4.2017
\t\t\t'btnRenameAll' : 'リネーム(全て)', // from v2.1.24 added 6.4.2017
\t\t\t'btnPrevious' : '前へ (\$1/\$2)', // from v2.1.24 added 11.5.2017
\t\t\t'btnNext'     : '次へ (\$1/\$2)', // from v2.1.24 added 11.5.2017
\t\t\t'btnSaveAs'   : '別名保存', // from v2.1.25 added 24.5.2017

\t\t\t/******************************** notifications ********************************/
\t\t\t'ntfopen'     : 'フォルダを開いています',
\t\t\t'ntffile'     : 'ファイルを開いています',
\t\t\t'ntfreload'   : 'フォルダを再読込しています',
\t\t\t'ntfmkdir'    : 'フォルダを作成しています',
\t\t\t'ntfmkfile'   : 'ファイルを作成しています',
\t\t\t'ntfrm'       : 'アイテムを削除しています',
\t\t\t'ntfcopy'     : 'アイテムをコピーしています',
\t\t\t'ntfmove'     : 'アイテムを移動しています',
\t\t\t'ntfprepare'  : '既存アイテムを確認しています',
\t\t\t'ntfrename'   : 'ファイル名を変更しています',
\t\t\t'ntfupload'   : 'ファイルをアップロードしています',
\t\t\t'ntfdownload' : 'ファイルをダウンロードしています',
\t\t\t'ntfsave'     : 'ファイルを保存しています',
\t\t\t'ntfarchive'  : 'アーカイブ作成しています',
\t\t\t'ntfextract'  : 'アーカイブを解凍しています',
\t\t\t'ntfsearch'   : 'ファイル検索中',
\t\t\t'ntfresize'   : 'リサイズしています',
\t\t\t'ntfsmth'     : '処理をしています',
\t\t\t'ntfloadimg'  : 'イメージを読み込んでいます',
\t\t\t'ntfnetmount' : 'ネットボリュームをマウント中', // added 18.04.2012
\t\t\t'ntfnetunmount': 'ネットボリュームをアンマウント中', // from v2.1 added 30.04.2012
\t\t\t'ntfdim'      : '画像サイズを取得しています', // added 20.05.2013
\t\t\t'ntfreaddir'  : 'フォルダ情報を読み取っています', // from v2.1 added 01.07.2013
\t\t\t'ntfurl'      : 'リンクURLを取得しています', // from v2.1 added 11.03.2014
\t\t\t'ntfchmod'    : 'ファイル属性を変更しています', // from v2.1 added 20.6.2015
\t\t\t'ntfpreupload': 'アップロードファイル名を検証中', // from v2.1 added 31.11.2015
\t\t\t'ntfzipdl'    : 'ダウンロード用ファイルを作成中', // from v2.1.7 added 23.1.2016
\t\t\t'ntfparents'  : 'パス情報を取得しています', // from v2.1.17 added 2.11.2016
\t\t\t'ntfchunkmerge': 'アップロード済みファイルを処理中', // from v2.1.17 added 2.11.2016
\t\t\t'ntftrash'    : 'ごみ箱に入れています', // from v2.1.24 added 2.5.2017
\t\t\t'ntfrestore'  : 'ごみ箱から元に戻しています', // from v2.1.24 added 3.5.2017
\t\t\t'ntfchkdir'   : '宛先フォルダを確認しています', // from v2.1.24 added 3.5.2017
\t\t\t'ntfundo'     : '前の操作を取り消して元に戻しています', // from v2.1.27 added 31.07.2017
\t\t\t'ntfredo'     : '元に戻した操作をやり直しています', // from v2.1.27 added 31.07.2017
\t\t\t'ntfchkcontent' : 'コンテンツをチェックしています', // from v2.1.41 added 3.8.2018

\t\t\t/*********************************** volumes *********************************/
\t\t\t'volume_Trash' : 'ごみ箱', //from v2.1.24 added 29.4.2017

\t\t\t/************************************ dates **********************************/
\t\t\t'dateUnknown' : '不明',
\t\t\t'Today'       : '今日',
\t\t\t'Yesterday'   : '昨日',
\t\t\t'msJan'       : '1月',
\t\t\t'msFeb'       : '2月',
\t\t\t'msMar'       : '3月',
\t\t\t'msApr'       : '4月',
\t\t\t'msMay'       : '5月',
\t\t\t'msJun'       : '6月',
\t\t\t'msJul'       : '7月',
\t\t\t'msAug'       : '8月',
\t\t\t'msSep'       : '9月',
\t\t\t'msOct'       : '10月',
\t\t\t'msNov'       : '11月',
\t\t\t'msDec'       : '12月',
\t\t\t'January'     : '1月',
\t\t\t'February'    : '2月',
\t\t\t'March'       : '3月',
\t\t\t'April'       : '4月',
\t\t\t'May'         : '5月',
\t\t\t'June'        : '6月',
\t\t\t'July'        : '7月',
\t\t\t'August'      : '8月',
\t\t\t'September'   : '9月',
\t\t\t'October'     : '10月',
\t\t\t'November'    : '11月',
\t\t\t'December'    : '12月',
\t\t\t'Sunday'      : '日曜日',
\t\t\t'Monday'      : '月曜日',
\t\t\t'Tuesday'     : '火曜日',
\t\t\t'Wednesday'   : '水曜日',
\t\t\t'Thursday'    : '木曜日',
\t\t\t'Friday'      : '金曜日',
\t\t\t'Saturday'    : '土曜日',
\t\t\t'Sun'         : '(日)',
\t\t\t'Mon'         : '(月)',
\t\t\t'Tue'         : '(火)',
\t\t\t'Wed'         : '(水)',
\t\t\t'Thu'         : '(木)',
\t\t\t'Fri'         : '(金)',
\t\t\t'Sat'         : '(土)',

\t\t\t/******************************** sort variants ********************************/
\t\t\t'sortname'          : '名前順',
\t\t\t'sortkind'          : '種類順',
\t\t\t'sortsize'          : 'サイズ順',
\t\t\t'sortdate'          : '日付順',
\t\t\t'sortFoldersFirst'  : 'フォルダ優先',
\t\t\t'sortperm'          : '権限順', // from v2.1.13 added 13.06.2016
\t\t\t'sortmode'          : '属性順',       // from v2.1.13 added 13.06.2016
\t\t\t'sortowner'         : 'オーナー順',      // from v2.1.13 added 13.06.2016
\t\t\t'sortgroup'         : 'グループ順',      // from v2.1.13 added 13.06.2016
\t\t\t'sortAlsoTreeview'  : 'ツリービューも',  // from v2.1.15 added 01.08.2016

\t\t\t/********************************** new items **********************************/
\t\t\t'untitled file.txt' : '新規ファイル.txt', // added 10.11.2015
\t\t\t'untitled folder'   : '新規フォルダ',   // added 10.11.2015
\t\t\t'Archive'           : '新規アーカイブ',  // from v2.1 added 10.11.2015
\t\t\t'untitled file'     : '新規ファイル.\$1',  // from v2.1.41 added 6.8.2018
\t\t\t'extentionfile'     : '\$1: ファイル',     // from v2.1.41 added 6.8.2018
\t\t\t'extentiontype'     : '\$1: \$2',      // from v2.1.43 added 17.10.2018

\t\t\t/********************************** messages **********************************/
\t\t\t'confirmReq'      : '処理を実行しますか？',
\t\t\t'confirmRm'       : 'アイテムを完全に削除してもよろしいですか？<br/>この操作は取り消しできません！',
\t\t\t'confirmRepl'     : '古いファイルを新しいファイルで上書きしますか？ (フォルダが含まれている場合は統合されます。置き換える場合は「バックアップ」選択してください。)',
\t\t\t'confirmRest'     : '既存のアイテムをごみ箱のアイテムで上書きしますか？', // fromv2.1.24 added 5.5.2017
\t\t\t'confirmConvUTF8' : 'UTF-8 以外の文字が含まれています。<br/>UTF-8  に変換しますか？<br/>変換後の保存でコンテンツは UTF-8 になります。', // from v2.1 added 08.04.2014
\t\t\t'confirmNonUTF8'  : 'このファイルの文字エンコーディングを判別できませんでした。編集するには一時的に UTF-8 に変換する必要があります。<br/>文字エンコーディングを指定してください。', // from v2.1.19 added 28.11.2016
\t\t\t'confirmNotSave'  : '変更されています。<br/>保存せずに閉じると編集内容が失われます。', // from v2.1 added 15.7.2015
\t\t\t'confirmTrash'    : 'アイテムをごみ箱に移動してもよろしいですか？', //from v2.1.24 added 29.4.2017
\t\t\t'confirmMove'     : 'アイテムを\"\$1\"に移動してもよろしいですか？', //from v2.1.50 added 27.7.2019
\t\t\t'apllyAll'        : '全てに適用します',
\t\t\t'name'            : '名前',
\t\t\t'size'            : 'サイズ',
\t\t\t'perms'           : '権限',
\t\t\t'modify'          : '更新',
\t\t\t'kind'            : '種類',
\t\t\t'read'            : '読み取り',
\t\t\t'write'           : '書き込み',
\t\t\t'noaccess'        : 'アクセス禁止',
\t\t\t'and'             : ',',
\t\t\t'unknown'         : '不明',
\t\t\t'selectall'       : 'すべてのアイテムを選択',
\t\t\t'selectfiles'     : 'アイテム選択',
\t\t\t'selectffile'     : '最初のアイテムを選択',
\t\t\t'selectlfile'     : '最後のアイテムを選択',
\t\t\t'viewlist'        : 'リスト形式で表示',
\t\t\t'viewicons'       : 'アイコン形式で表示',
\t\t\t'viewSmall'       : '小アイコン', // from v2.1.39 added 22.5.2018
\t\t\t'viewMedium'      : '中アイコン', // from v2.1.39 added 22.5.2018
\t\t\t'viewLarge'       : '大アイコン', // from v2.1.39 added 22.5.2018
\t\t\t'viewExtraLarge'  : '特大アイコン', // from v2.1.39 added 22.5.2018
\t\t\t'places'          : 'よく使う項目',
\t\t\t'calc'            : '計算中',
\t\t\t'path'            : 'パス',
\t\t\t'aliasfor'        : 'エイリアス',
\t\t\t'locked'          : 'ロック',
\t\t\t'dim'             : '画素数',
\t\t\t'files'           : 'ファイル',
\t\t\t'folders'         : 'フォルダ',
\t\t\t'items'           : 'アイテム',
\t\t\t'yes'             : 'はい',
\t\t\t'no'              : 'いいえ',
\t\t\t'link'            : 'リンク',
\t\t\t'searcresult'     : '検索結果',
\t\t\t'selected'        : '選択されたアイテム',
\t\t\t'about'           : '概要',
\t\t\t'shortcuts'       : 'ショートカット',
\t\t\t'help'            : 'ヘルプ',
\t\t\t'webfm'           : 'ウェブファイルマネージャー',
\t\t\t'ver'             : 'バージョン',
\t\t\t'protocolver'     : 'プロトコルバージョン',
\t\t\t'homepage'        : 'プロジェクトホーム',
\t\t\t'docs'            : 'ドキュメンテーション',
\t\t\t'github'          : 'Github でフォーク',
\t\t\t'twitter'         : 'Twitter でフォロー',
\t\t\t'facebook'        : 'Facebookグループ に参加',
\t\t\t'team'            : 'チーム',
\t\t\t'chiefdev'        : 'チーフデベロッパー',
\t\t\t'developer'       : 'デベロッパー',
\t\t\t'contributor'     : 'コントリビュータ',
\t\t\t'maintainer'      : 'メインテナー',
\t\t\t'translator'      : '翻訳者',
\t\t\t'icons'           : 'アイコン',
\t\t\t'dontforget'      : 'タオル忘れちゃだめよ～',
\t\t\t'shortcutsof'     : 'ショートカットは利用できません',
\t\t\t'dropFiles'       : 'ここにファイルをドロップ',
\t\t\t'or'              : 'または',
\t\t\t'selectForUpload' : 'ファイルを選択',
\t\t\t'moveFiles'       : 'アイテムを移動',
\t\t\t'copyFiles'       : 'アイテムをコピー',
\t\t\t'restoreFiles'    : 'アイテムを元に戻す', // from v2.1.24 added 5.5.2017
\t\t\t'rmFromPlaces'    : 'ここから削除',
\t\t\t'aspectRatio'     : '縦横比維持',
\t\t\t'scale'           : '表示縮尺',
\t\t\t'width'           : '幅',
\t\t\t'height'          : '高さ',
\t\t\t'resize'          : 'リサイズ',
\t\t\t'crop'            : '切り抜き',
\t\t\t'rotate'          : '回転',
\t\t\t'rotate-cw'       : '90度左回転',
\t\t\t'rotate-ccw'      : '90度右回転',
\t\t\t'degree'          : '度',
\t\t\t'netMountDialogTitle' : 'ネットワークボリュームのマウント', // added 18.04.2012
\t\t\t'protocol'            : 'プロトコル', // added 18.04.2012
\t\t\t'host'                : 'ホスト名', // added 18.04.2012
\t\t\t'port'                : 'ポート', // added 18.04.2012
\t\t\t'user'                : 'ユーザー名', // added 18.04.2012
\t\t\t'pass'                : 'パスワード', // added 18.04.2012
\t\t\t'confirmUnmount'      : '\$1をアンマウントしますか?',  // from v2.1 added 30.04.2012
\t\t\t'dropFilesBrowser': 'ブラウザからファイルをドロップまたは貼り付け', // from v2.1 added 30.05.2012
\t\t\t'dropPasteFiles'  : 'ここにファイルをドロップ または URLリスト, 画像(クリップボード) を貼り付け', // from v2.1 added 07.04.2014
\t\t\t'encoding'        : 'エンコーディング', // from v2.1 added 19.12.2014
\t\t\t'locale'          : 'ロケール',   // from v2.1 added 19.12.2014
\t\t\t'searchTarget'    : '検索範囲: \$1',                // from v2.1 added 22.5.2015
\t\t\t'searchMime'      : '指定した MIME タイプで検索', // from v2.1 added 22.5.2015
\t\t\t'owner'           : 'オーナー', // from v2.1 added 20.6.2015
\t\t\t'group'           : 'グループ', // from v2.1 added 20.6.2015
\t\t\t'other'           : 'その他', // from v2.1 added 20.6.2015
\t\t\t'execute'         : '実行', // from v2.1 added 20.6.2015
\t\t\t'perm'            : 'パーミッション', // from v2.1 added 20.6.2015
\t\t\t'mode'            : '属性', // from v2.1 added 20.6.2015
\t\t\t'emptyFolder'     : '空のフォルダ', // from v2.1.6 added 30.12.2015
\t\t\t'emptyFolderDrop' : '空のフォルダ\\\\Aアイテムを追加するにはここへドロップ', // from v2.1.6 added 30.12.2015
\t\t\t'emptyFolderLTap' : '空のフォルダ\\\\Aアイテムを追加するにはここをロングタップ', // from v2.1.6 added 30.12.2015
\t\t\t'quality'         : '品質', // from v2.1.6 added 5.1.2016
\t\t\t'autoSync'        : '自動更新',  // from v2.1.6 added 10.1.2016
\t\t\t'moveUp'          : '上へ移動',  // from v2.1.6 added 18.1.2016
\t\t\t'getLink'         : 'リンクURLを取得', // from v2.1.7 added 9.2.2016
\t\t\t'selectedItems'   : '選択アイテム (\$1)', // from v2.1.7 added 2.19.2016
\t\t\t'folderId'        : 'フォルダID', // from v2.1.10 added 3.25.2016
\t\t\t'offlineAccess'   : 'オフライン アクセスを可能にする', // from v2.1.10 added 3.25.2016
\t\t\t'reAuth'          : '再認証する', // from v2.1.10 added 3.25.2016
\t\t\t'nowLoading'      : '読み込んでいます...', // from v2.1.12 added 4.26.2016
\t\t\t'openMulti'       : '複数ファイルオープン', // from v2.1.12 added 5.14.2016
\t\t\t'openMultiConfirm': '\$1 個のファイルを開こうとしています。このままブラウザで開きますか？', // from v2.1.12 added 5.14.2016
\t\t\t'emptySearch'     : '検索対象に該当するアイテムはありません。', // from v2.1.12 added 5.16.2016
\t\t\t'editingFile'     : 'ファイルを編集中です。', // from v2.1.13 added 6.3.2016
\t\t\t'hasSelected'     : '\$1 個のアイテムを選択中です。', // from v2.1.13 added 6.3.2016
\t\t\t'hasClipboard'    : '\$1 個のアイテムがクリップボードに入っています。', // from v2.1.13 added 6.3.2016
\t\t\t'incSearchOnly'   : '逐次検索対象は現在のビューのみです。', // from v2.1.13 added 6.30.2016
\t\t\t'reinstate'       : '元に戻す', // from v2.1.15 added 3.8.2016
\t\t\t'complete'        : '\$1 完了', // from v2.1.15 added 21.8.2016
\t\t\t'contextmenu'     : 'コンテキストメニュー', // from v2.1.15 added 9.9.2016
\t\t\t'pageTurning'     : 'ページめくり', // from v2.1.15 added 10.9.2016
\t\t\t'volumeRoots'     : 'ボリュームルート', // from v2.1.16 added 16.9.2016
\t\t\t'reset'           : 'リセット', // from v2.1.16 added 1.10.2016
\t\t\t'bgcolor'         : '背景色', // from v2.1.16 added 1.10.2016
\t\t\t'colorPicker'     : 'カラーピッカー', // from v2.1.16 added 1.10.2016
\t\t\t'8pxgrid'         : '8pxグリッド', // from v2.1.16 added 4.10.2016
\t\t\t'enabled'         : '有効', // from v2.1.16 added 4.10.2016
\t\t\t'disabled'        : '無効', // from v2.1.16 added 4.10.2016
\t\t\t'emptyIncSearch'  : '現在のビュー内に該当するアイテムはありません。\\\\A[Enter]キーで検索対象を拡げます。', // from v2.1.16 added 5.10.2016
\t\t\t'emptyLetSearch'  : '現在のビュー内に指定された文字で始まるアイテムはありません。', // from v2.1.23 added 24.3.2017
\t\t\t'textLabel'       : 'テキストラベル', // from v2.1.17 added 13.10.2016
\t\t\t'minsLeft'        : '残り\$1分', // from v2.1.17 added 13.11.2016
\t\t\t'openAsEncoding'  : '選択したエンコーディングで開き直す', // from v2.1.19 added 2.12.2016
\t\t\t'saveAsEncoding'  : '選択したエンコーディングで保存', // from v2.1.19 added 2.12.2016
\t\t\t'selectFolder'    : 'フォルダを選択', // from v2.1.20 added 13.12.2016
\t\t\t'firstLetterSearch': '一文字目で検索', // from v2.1.23 added 24.3.2017
\t\t\t'presets'         : 'プリセット', // from v2.1.25 added 26.5.2017
\t\t\t'tooManyToTrash'  : 'アイテム数が多すぎるのでごみ箱に入れられません。', // from v2.1.25 added 9.6.2017
\t\t\t'TextArea'        : 'テキストエリア', // from v2.1.25 added 14.6.2017
\t\t\t'folderToEmpty'   : 'フォルダ\"\$1\"を空にします。', // from v2.1.25 added 22.6.2017
\t\t\t'filderIsEmpty'   : 'フォルダ\"\$1\"にアイテムはありません。', // from v2.1.25 added 22.6.2017
\t\t\t'preference'      : '個人設定', // from v2.1.26 added 28.6.2017
\t\t\t'language'        : '言語', // from v2.1.26 added 28.6.2017
\t\t\t'clearBrowserData': 'ブラウザに保存された設定を初期化する', // from v2.1.26 added 28.6.2017
\t\t\t'toolbarPref'     : 'ツールバー設定', // from v2.1.27 added 2.8.2017
\t\t\t'charsLeft'       : '... 残り \$1 文字',  // from v2.1.29 added 30.8.2017
\t\t\t'linesLeft'       : '... 残り \$1 行',  // from v2.1.52 added 16.1.2020
\t\t\t'sum'             : '合計', // from v2.1.29 added 28.9.2017
\t\t\t'roughFileSize'   : '大まかなファイルサイズ', // from v2.1.30 added 2.11.2017
\t\t\t'autoFocusDialog' : 'マウスオーバーでダイアログの要素にフォーカスする',  // from v2.1.30 added 2.11.2017
\t\t\t'select'          : '選択', // from v2.1.30 added 23.11.2017
\t\t\t'selectAction'    : 'ファイル選択時の動作', // from v2.1.30 added 23.11.2017
\t\t\t'useStoredEditor' : '前回使用したエディターで開く', // from v2.1.30 added 23.11.2017
\t\t\t'selectinvert'    : '選択アイテムを反転', // from v2.1.30 added 25.11.2017
\t\t\t'renameMultiple'  : '選択した \$1 個のアイテムを \$2 のようにリネームしますか？<br/>この操作は取り消しできません！', // from v2.1.31 added 4.12.2017
\t\t\t'batchRename'     : '一括リネーム', // from v2.1.31 added 8.12.2017
\t\t\t'plusNumber'      : '+ 連番', // from v2.1.31 added 8.12.2017
\t\t\t'asPrefix'        : '先頭に追加', // from v2.1.31 added 8.12.2017
\t\t\t'asSuffix'        : '末尾に追加', // from v2.1.31 added 8.12.2017
\t\t\t'changeExtention' : '拡張子変更', // from v2.1.31 added 8.12.2017
\t\t\t'columnPref'      : '列項目設定(リストビュー)', // from v2.1.32 added 6.2.2018
\t\t\t'reflectOnImmediate' : '全ての変更は、直ちにアーカイブに反映されます。', // from v2.1.33 added 2.3.2018
\t\t\t'reflectOnUnmount'   : 'このボリュームをアンマウントするまで、変更は反映されません。', // from v2.1.33 added 2.3.2018
\t\t\t'unmountChildren' : 'このボリュームにマウントされている以下のボリュームもアンマウントされます。アンマウントしますか？', // from v2.1.33 added 5.3.2018
\t\t\t'selectionInfo'   : '選択情報', // from v2.1.33 added 7.3.2018
\t\t\t'hashChecker'     : 'ファイルハッシュを表示するアルゴリズム', // from v2.1.33 added 10.3.2018
\t\t\t'infoItems'       : '情報項目 (選択情報パネル)', // from v2.1.38 added 28.3.2018
\t\t\t'pressAgainToExit': 'もう一度押すと終了します。', // from v2.1.38 added 1.4.2018
\t\t\t'toolbar'         : 'ツールバー', // from v2.1.38 added 4.4.2018
\t\t\t'workspace'       : 'ワークスペース', // from v2.1.38 added 4.4.2018
\t\t\t'dialog'          : 'ダイアログ', // from v2.1.38 added 4.4.2018
\t\t\t'all'             : 'すべて', // from v2.1.38 added 4.4.2018
\t\t\t'iconSize'        : 'アイコンサイズ (アイコンビュー)', // from v2.1.39 added 7.5.2018
\t\t\t'editorMaximized' : 'エディターウィンドウを最大化して開く', // from v2.1.40 added 30.6.2018
\t\t\t'editorConvNoApi' : '現在 API による変換は利用できないので、Web サイトで変換を行ってください。', //from v2.1.40 added 8.7.2018
\t\t\t'editorConvNeedUpload' : '変換後に変換されたファイルを保存するには、アイテムの URL またはダウンロードしたファイルをアップロードする必要があります。', //from v2.1.40 added 8.7.2018
\t\t\t'convertOn'       : '\$1 のサイト上で変換する', // from v2.1.40 added 10.7.2018
\t\t\t'integrations'    : '統合', // from v2.1.40 added 11.7.2018
\t\t\t'integrationWith' : 'この elFinder は次の外部サービスが統合されています。それらの利用規約、プライバシーポリシーなどをご確認の上、ご利用ください。', // from v2.1.40 added 11.7.2018
\t\t\t'showHidden'      : '非表示アイテムを表示', // from v2.1.41 added 24.7.2018
\t\t\t'hideHidden'      : '非表示アイテムを隠す', // from v2.1.41 added 24.7.2018
\t\t\t'toggleHidden'    : '非表示アイテムの表示/非表示', // from v2.1.41 added 24.7.2018
\t\t\t'makefileTypes'   : '「新しいファイル」で有効にするファイルタイプ', // from v2.1.41 added 7.8.2018
\t\t\t'typeOfTextfile'  : 'テキストファイルのタイプ', // from v2.1.41 added 7.8.2018
\t\t\t'add'             : '追加', // from v2.1.41 added 7.8.2018
\t\t\t'theme'           : 'テーマ', // from v2.1.43 added 19.10.2018
\t\t\t'default'         : 'デフォルト', // from v2.1.43 added 19.10.2018
\t\t\t'description'     : '説明', // from v2.1.43 added 19.10.2018
\t\t\t'website'         : 'ウェブサイト', // from v2.1.43 added 19.10.2018
\t\t\t'author'          : '作者', // from v2.1.43 added 19.10.2018
\t\t\t'email'           : 'Email', // from v2.1.43 added 19.10.2018
\t\t\t'license'         : 'ライセンス', // from v2.1.43 added 19.10.2018
\t\t\t'exportToSave'    : 'このアイテムは保存できません。 編集内容を失わないようにするには、PCにエクスポートする必要があります。', // from v2.1.44 added 1.12.2018
\t\t\t'dblclickToSelect': 'ファイルをダブルクリックして選択します。', // from v2.1.47 added 22.1.2019
\t\t\t'useFullscreen'   : 'フルスクリーンモードの利用', // from v2.1.47 added 19.2.2019

\t\t\t/********************************** mimetypes **********************************/
\t\t\t'kindUnknown'     : '不明',
\t\t\t'kindRoot'        : 'ボリュームルート', // from v2.1.16 added 16.10.2016
\t\t\t'kindFolder'      : 'フォルダ',
\t\t\t'kindSelects'     : '複数選択', // from v2.1.29 added 29.8.2017
\t\t\t'kindAlias'       : '別名',
\t\t\t'kindAliasBroken' : '宛先不明の別名',
\t\t\t// applications
\t\t\t'kindApp'         : 'アプリケーション',
\t\t\t'kindPostscript'  : 'Postscript ドキュメント',
\t\t\t'kindMsOffice'    : 'Microsoft Office ドキュメント',
\t\t\t'kindMsWord'      : 'Microsoft Word ドキュメント',
\t\t\t'kindMsExcel'     : 'Microsoft Excel ドキュメント',
\t\t\t'kindMsPP'        : 'Microsoft Powerpoint プレゼンテーション',
\t\t\t'kindOO'          : 'Open Office ドキュメント',
\t\t\t'kindAppFlash'    : 'Flash アプリケーション',
\t\t\t'kindPDF'         : 'PDF',
\t\t\t'kindTorrent'     : 'Bittorrent ファイル',
\t\t\t'kind7z'          : '7z アーカイブ',
\t\t\t'kindTAR'         : 'TAR アーカイブ',
\t\t\t'kindGZIP'        : 'GZIP アーカイブ',
\t\t\t'kindBZIP'        : 'BZIP アーカイブ',
\t\t\t'kindXZ'          : 'XZ アーカイブ',
\t\t\t'kindZIP'         : 'ZIP アーカイブ',
\t\t\t'kindRAR'         : 'RAR アーカイブ',
\t\t\t'kindJAR'         : 'Java JAR ファイル',
\t\t\t'kindTTF'         : 'True Type フォント',
\t\t\t'kindOTF'         : 'Open Type フォント',
\t\t\t'kindRPM'         : 'RPM パッケージ',
\t\t\t// texts
\t\t\t'kindText'        : 'Text ドキュメント',
\t\t\t'kindTextPlain'   : 'プレインテキスト',
\t\t\t'kindPHP'         : 'PHP ソース',
\t\t\t'kindCSS'         : 'スタイルシート',
\t\t\t'kindHTML'        : 'HTML ドキュメント',
\t\t\t'kindJS'          : 'Javascript ソース',
\t\t\t'kindRTF'         : 'Rich Text フォーマット',
\t\t\t'kindC'           : 'C ソース',
\t\t\t'kindCHeader'     : 'C ヘッダーソース',
\t\t\t'kindCPP'         : 'C++ ソース',
\t\t\t'kindCPPHeader'   : 'C++ ヘッダーソース',
\t\t\t'kindShell'       : 'Unix shell スクリプト',
\t\t\t'kindPython'      : 'Python ソース',
\t\t\t'kindJava'        : 'Java ソース',
\t\t\t'kindRuby'        : 'Ruby ソース',
\t\t\t'kindPerl'        : 'Perl スクリプト',
\t\t\t'kindSQL'         : 'SQL ソース',
\t\t\t'kindXML'         : 'XML ドキュメント',
\t\t\t'kindAWK'         : 'AWK ソース',
\t\t\t'kindCSV'         : 'CSV',
\t\t\t'kindDOCBOOK'     : 'Docbook XML ドキュメント',
\t\t\t'kindMarkdown'    : 'Markdown テキスト', // added 20.7.2015
\t\t\t// images
\t\t\t'kindImage'       : 'イメージ',
\t\t\t'kindBMP'         : 'BMP イメージ',
\t\t\t'kindJPEG'        : 'JPEG イメージ',
\t\t\t'kindGIF'         : 'GIF イメージ',
\t\t\t'kindPNG'         : 'PNG イメージ',
\t\t\t'kindTIFF'        : 'TIFF イメージ',
\t\t\t'kindTGA'         : 'TGA イメージ',
\t\t\t'kindPSD'         : 'Adobe Photoshop イメージ',
\t\t\t'kindXBITMAP'     : 'X bitmap イメージ',
\t\t\t'kindPXM'         : 'Pixelmator イメージ',
\t\t\t// media
\t\t\t'kindAudio'       : 'オーディオメディア',
\t\t\t'kindAudioMPEG'   : 'MPEG オーディオ',
\t\t\t'kindAudioMPEG4'  : 'MPEG-4 オーディオ',
\t\t\t'kindAudioMIDI'   : 'MIDI オーディオ',
\t\t\t'kindAudioOGG'    : 'Ogg Vorbis オーディオ',
\t\t\t'kindAudioWAV'    : 'WAV オーディオ',
\t\t\t'AudioPlaylist'   : 'MP3 プレイリスト',
\t\t\t'kindVideo'       : 'ビデオメディア',
\t\t\t'kindVideoDV'     : 'DV ムービー',
\t\t\t'kindVideoMPEG'   : 'MPEG ムービー',
\t\t\t'kindVideoMPEG4'  : 'MPEG-4 ムービー',
\t\t\t'kindVideoAVI'    : 'AVI ムービー',
\t\t\t'kindVideoMOV'    : 'Quick Time ムービー',
\t\t\t'kindVideoWM'     : 'Windows Media ムービー',
\t\t\t'kindVideoFlash'  : 'Flash ムービー',
\t\t\t'kindVideoMKV'    : 'Matroska ムービー',
\t\t\t'kindVideoOGG'    : 'Ogg ムービー'
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
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.ja.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.ja.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.ja.js");
    }
}
