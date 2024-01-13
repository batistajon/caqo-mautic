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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.ko.js */
class __TwigTemplate_a0235bfbb18f40fe4c12321e0f9f869158eab9c2d9ec2899908bd8558524a71e extends Template
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
 * Korea-한국어 translation
 * @author Hwang Ahreum; <luckmagic@naver.com>
 * @author Park Sungyong; <sungyong@gmail.com>
 * @author Yeonjeong Woo <eat_sweetly@naver.com>
 * @author Kwon Hyungjoo <hyung778@gmail.com>
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
\telFinder.prototype.i18.ko = {
\t\ttranslator : 'Hwang Ahreum; &lt;luckmagic@naver.com&gt;, Park Sungyong; &lt;sungyong@gmail.com&gt;, Yeonjeong Woo &lt;eat_sweetly@naver.com&gt;, Kwon Hyungjoo &lt;hyung778@gmail.com&gt;',
\t\tlanguage   : 'Korea-한국어',
\t\tdirection  : 'ltr',
\t\tdateFormat : 'Y-m-d H:i', // will show like: 2020-04-07 10:24
\t\tfancyDateFormat : '\$1 H:i', // will show like: 오늘 10:24
\t\tnonameDateFormat : 'ymd-His', // noname upload will show like: 200407-102404
\t\tmessages   : {

\t\t\t/********************************** errors **********************************/
\t\t\t'error'                : '오류',
\t\t\t'errUnknown'           : '알 수 없는 오류.',
\t\t\t'errUnknownCmd'        : '알 수 없는 명령어.',
\t\t\t'errJqui'              : 'jQuery UI 설정이 올바르지 않습니다. Selectable, draggable 및 droppable 구성 요소가 포함되어 있어야 합니다.',
\t\t\t'errNode'              : 'elFinder를 생성하기 위해서는 DOM Element를 요구합니다.',
\t\t\t'errURL'               : 'elFinder 환경설정이 올바르지 않습니다! URL 옵션이 설정되지 않았습니다.',
\t\t\t'errAccess'            : '접근 제한.',
\t\t\t'errConnect'           : 'Backend에 연결할 수 없습니다.',
\t\t\t'errAbort'             : '연결 실패.',
\t\t\t'errTimeout'           : '연결시간 초과.',
\t\t\t'errNotFound'          : 'Backend를 찾을 수 없습니다.',
\t\t\t'errResponse'          : 'Backend가 응답하지 않습니다.',
\t\t\t'errConf'              : 'Backend 환경설정이 올바르지 않습니다.',
\t\t\t'errJSON'              : 'PHP JSON 모듈이 설치되지 않았습니다.',
\t\t\t'errNoVolumes'         : '읽을 수 있는 볼륨이 없습니다.',
\t\t\t'errCmdParams'         : '\"\$1\" 명령에 잘못된 매개 변수가 있습니다.',
\t\t\t'errDataNotJSON'       : '데이터가 JSON이 아닙니다.',
\t\t\t'errDataEmpty'         : '데이터가 비어있습니다.',
\t\t\t'errCmdReq'            : 'Backend 요청에는 명령어 이름이 필요합니다.',
\t\t\t'errOpen'              : '\"\$1\"을(를) 열 수 없습니다.',
\t\t\t'errNotFolder'         : '폴더가 아닙니다.',
\t\t\t'errNotFile'           : '파일이 아닙니다.',
\t\t\t'errRead'              : '\"\$1\"을(를) 읽을 수 없습니다.',
\t\t\t'errWrite'             : '\"\$1\"에 쓸 수 없습니다.',
\t\t\t'errPerm'              : '권한이 없습니다.',
\t\t\t'errLocked'            : '\"\$1\"이(가) 잠겨 있습니다, 이동, 삭제가 불가능합니다',
\t\t\t'errExists'            : '이미 \"\$1\"파일이 존재합니다.',
\t\t\t'errInvName'           : '파일명에 올바르지 않은 문자가 포함되었습니다.',
\t\t\t'errInvDirname'        : '폴더명에 올바르지 않은 문자가 포함되었습니다.',  // from v2.1.24 added 12.4.2017
\t\t\t'errFolderNotFound'    : '폴더를 찾을 수 없습니다.',
\t\t\t'errFileNotFound'      : '파일을 찾을 수 없습니다.',
\t\t\t'errTrgFolderNotFound' : '\"\$1\" 폴더를 찾을 수 없습니다.',
\t\t\t'errPopup'             : '브라우저에서 팝업을 차단하였습니다. 팝업을 허용하려면 브라우저 옵션을 변경하세요.',
\t\t\t'errMkdir'             : '\"\$1\" 폴더를 생성할 수 없습니다.',
\t\t\t'errMkfile'            : '\"\$1\" 파일을 생성할 수 없습니다.',
\t\t\t'errRename'            : '\"\$1\"의 이름을 변경할 수 없습니다.',
\t\t\t'errCopyFrom'          : '볼률 \"\$1\"으(로)부터 파일을 복사할 수 없습니다.',
\t\t\t'errCopyTo'            : '볼률 \"\$1\"에 파일을 복사할 수 없습니다.',
\t\t\t'errMkOutLink'         : 'root 볼륨 외부에 링크를 만들 수 없습니다.', // from v2.1 added 03.10.2015
\t\t\t'errUpload'            : '업로드 오류.',  // old name - errUploadCommon
\t\t\t'errUploadFile'        : '\"\$1\"을(를) 업로드할 수 없습니다.', // old name - errUpload
\t\t\t'errUploadNoFiles'     : '업로드할 파일이 없습니다.',
\t\t\t'errUploadTotalSize'   : '데이터가 허용된 최대크기를 초과하였습니다.', // old name - errMaxSize
\t\t\t'errUploadFileSize'    : '파일이 허용된 최대크기를 초과하였습니다.', //  old name - errFileMaxSize
\t\t\t'errUploadMime'        : '잘못된 파일형식입니다.',
\t\t\t'errUploadTransfer'    : '\"\$1\" 전송 오류.',
\t\t\t'errUploadTemp'        : '업로드에 필요한 임시파일 생성을 할 수 없습니다.', // from v2.1 added 26.09.2015
\t\t\t'errNotReplace'        : '\"\$1\"개체가 현재 위치에 이미 존재하며 다른 유형의 개체로 대체 할 수 없습니다.', // new
\t\t\t'errReplace'           : '\"\$1\"을(를) 변경할 수 없습니다.',
\t\t\t'errSave'              : '\"\$1\"을(를) 저장할 수 없습니다.',
\t\t\t'errCopy'              : '\"\$1\"을(를) 복사할 수 없습니다.',
\t\t\t'errMove'              : '\"\$1\"을(를) 이동할 수 없습니다.',
\t\t\t'errCopyInItself'      : '\"\$1\"을(를) 자기 자신에게 복사할 수 없습니다.',
\t\t\t'errRm'                : '\"\$1\"의 이름을 변경할 수 없습니다.',
\t\t\t'errTrash'             : '휴지통으로 보낼 수 없습니다.', // from v2.1.24 added 30.4.2017
\t\t\t'errRmSrc'             : '원본 파일을 제거할 수 없습니다.',
\t\t\t'errExtract'           : '\"\$1\"에 압축을 풀 수 없습니다.',
\t\t\t'errArchive'           : '압축파일을 생성할 수 없습니다.',
\t\t\t'errArcType'           : '지원하지 않는 압축파일 형식입니다.',
\t\t\t'errNoArchive'         : '압축파일이 아니거나 지원하지 않는 압축파일 형식입니다.',
\t\t\t'errCmdNoSupport'      : 'Backend에서 이 명령을 지원하지 않습니다.',
\t\t\t'errReplByChild'       : '\"\$1\" 폴더에 덮어쓸수 없습니다.',
\t\t\t'errArcSymlinks'       : '보안상의 이유로 압축파일이 심볼릭 링크를 포함하거나 허용되지 않는 이름이 있을 경우 압축 해제가 불가능합니다.', // edited 24.06.2012
\t\t\t'errArcMaxSize'        : '압축파일이 허용된 최대크기를 초과하였습니다.',
\t\t\t'errResize'            : '\"\$1\"의 크기 변경을 할 수 없습니다.',
\t\t\t'errResizeDegree'      : '회전가능한 각도가 아닙니다.',  // added 7.3.2013
\t\t\t'errResizeRotate'      : '이미지를 회전할 수 없습니다.',  // added 7.3.2013
\t\t\t'errResizeSize'        : '올바르지 않은 크기의 이미지입니다.',  // added 7.3.2013
\t\t\t'errResizeNoChange'    : '이미지 크기가 변경되지 않았습니다.',  // added 7.3.2013
\t\t\t'errUsupportType'      : '지원하지 않는 파일 형식.',
\t\t\t'errNotUTF8Content'    : '파일 \"\$1\"은 UTF-8 형식이 아니어서 편집할 수 없습니다.',  // added 9.11.2011
\t\t\t'errNetMount'          : '\"\$1\"을(를) 마운트할 수 없습니다.', // added 17.04.2012
\t\t\t'errNetMountNoDriver'  : '지원되지 않는 프로토콜.',     // added 17.04.2012
\t\t\t'errNetMountFailed'    : '마운드 실패.',         // added 17.04.2012
\t\t\t'errNetMountHostReq'   : '호스트가 필요합니다.', // added 18.04.2012
\t\t\t'errSessionExpires'    : '활동이 없어 세션이 만료되었습니다.',
\t\t\t'errCreatingTempDir'   : '임시 폴더 생성에 실패했습니다: \"\$1\"',
\t\t\t'errFtpDownloadFile'   : 'FTP를 통한 다운로드에 실패했습니다: \"\$1\"',
\t\t\t'errFtpUploadFile'     : 'FTP에 업로드 실패했습니다: \"\$1\"',
\t\t\t'errFtpMkdir'          : 'FTP에서 폴더 생성에 실패했습니다: \"\$1\"',
\t\t\t'errArchiveExec'       : '압축중 오류가 발생했습니다: \"\$1\"',
\t\t\t'errExtractExec'       : '압축해제중 오류가 발생했습니다: \"\$1\"',
\t\t\t'errNetUnMount'        : '마운트를 해제할 수 없습니다.', // from v2.1 added 30.04.2012
\t\t\t'errConvUTF8'          : 'UTF-8로 변환할 수 없습니다.', // from v2.1 added 08.04.2014
\t\t\t'errFolderUpload'      : '폴더를 업로드 하려면 최신 브라우저를 사용하세요.', // from v2.1 added 26.6.2015
\t\t\t'errSearchTimeout'     : '\"\$1\" 검색중 시간을 초과하였습니다. 일부 결과만 표시됩니다.', // from v2.1 added 12.1.2016
\t\t\t'errReauthRequire'     : '재인증이 필요합니다.', // from v2.1.10 added 24.3.2016
\t\t\t'errMaxTargets'        : '선택 가능한 최대 개수는 \$1개입니다.', // from v2.1.17 added 17.10.2016
\t\t\t'errRestore'           : '휴지통에서 복원할 수 없습니다. 복원할 위치를 확인할 수 없습니다.', // from v2.1.24 added 3.5.2017
\t\t\t'errEditorNotFound'    : '이 파일 형식을 위한 편집기를 찾지 못했습니다.', // from v2.1.25 added 23.5.2017
\t\t\t'errServerError'       : '서버측에서 오류가 발생했습니다.', // from v2.1.25 added 16.6.2017
\t\t\t'errEmpty'             : '\"\$1\" 폴더를 비울 수 없습니다.', // from v2.1.25 added 22.6.2017
\t\t\t'moreErrors'           : '\$1개의 오류가 더 발생했습니다.', // from v2.1.44 added 9.12.2018

\t\t\t/******************************* commands names ********************************/
\t\t\t'cmdarchive'   : '압축파일생성',
\t\t\t'cmdback'      : '뒤로',
\t\t\t'cmdcopy'      : '복사',
\t\t\t'cmdcut'       : '자르기',
\t\t\t'cmddownload'  : '다운로드',
\t\t\t'cmdduplicate' : '사본',
\t\t\t'cmdedit'      : '편집',
\t\t\t'cmdextract'   : '압축풀기',
\t\t\t'cmdforward'   : '앞으로',
\t\t\t'cmdgetfile'   : '선택',
\t\t\t'cmdhelp'      : '이 소프트웨어는',
\t\t\t'cmdhome'      : '홈',
\t\t\t'cmdinfo'      : '파일정보',
\t\t\t'cmdmkdir'     : '새 폴더',
\t\t\t'cmdmkdirin'   : '새 폴더로', // from v2.1.7 added 19.2.2016
\t\t\t'cmdmkfile'    : '새 파일',
\t\t\t'cmdopen'      : '열기',
\t\t\t'cmdpaste'     : '붙여넣기',
\t\t\t'cmdquicklook' : '미리보기',
\t\t\t'cmdreload'    : '새로고침',
\t\t\t'cmdrename'    : '이름바꾸기',
\t\t\t'cmdrm'        : '삭제',
\t\t\t'cmdtrash'     : '휴지통으로', //from v2.1.24 added 29.4.2017
\t\t\t'cmdrestore'   : '복원', //from v2.1.24 added 3.5.2017
\t\t\t'cmdsearch'    : '파일찾기',
\t\t\t'cmdup'        : '상위폴더',
\t\t\t'cmdupload'    : '업로드',
\t\t\t'cmdview'      : '보기',
\t\t\t'cmdresize'    : '이미지 크기 변경 & 회전',
\t\t\t'cmdsort'      : '정렬',
\t\t\t'cmdnetmount'  : '네트워크 볼륨 마운트', // added 18.04.2012
\t\t\t'cmdnetunmount': '마운트 해제', // from v2.1 added 30.04.2012
\t\t\t'cmdplaces'    : '즐겨찾기로', // added 28.12.2014
\t\t\t'cmdchmod'     : '모드 변경', // from v2.1 added 20.6.2015
\t\t\t'cmdopendir'   : '폴더 열기', // from v2.1 added 13.1.2016
\t\t\t'cmdcolwidth'  : '컬럼 넓이 초기화', // from v2.1.13 added 12.06.2016
\t\t\t'cmdfullscreen': '전체 화면', // from v2.1.15 added 03.08.2016
\t\t\t'cmdmove'      : '이동', // from v2.1.15 added 21.08.2016
\t\t\t'cmdempty'     : '폴더 비우기', // from v2.1.25 added 22.06.2017
\t\t\t'cmdundo'      : '실행 취소', // from v2.1.27 added 31.07.2017
\t\t\t'cmdredo'      : '다시 실행', // from v2.1.27 added 31.07.2017
\t\t\t'cmdpreference': '환경설정', // from v2.1.27 added 03.08.2017
\t\t\t'cmdselectall' : '전체 선택', // from v2.1.28 added 15.08.2017
\t\t\t'cmdselectnone': '선택 취소', // from v2.1.28 added 15.08.2017
\t\t\t'cmdselectinvert': '선택 반전', // from v2.1.28 added 15.08.2017
\t\t\t'cmdopennew'   : '새 창으로 열기', // from v2.1.38 added 3.4.2018
\t\t\t'cmdhide'      : '숨기기 (환경설정)', // from v2.1.41 added 24.7.2018

\t\t\t/*********************************** buttons ***********************************/
\t\t\t'btnClose'  : '닫기',
\t\t\t'btnSave'   : '저장',
\t\t\t'btnRm'     : '삭제',
\t\t\t'btnApply'  : '적용',
\t\t\t'btnCancel' : '취소',
\t\t\t'btnNo'     : '아니오',
\t\t\t'btnYes'    : '예',
\t\t\t'btnMount'  : '마운트',  // added 18.04.2012
\t\t\t'btnApprove': '\$1로 이동 및 승인', // from v2.1 added 26.04.2012
\t\t\t'btnUnmount': '마운트 해제', // from v2.1 added 30.04.2012
\t\t\t'btnConv'   : '변환', // from v2.1 added 08.04.2014
\t\t\t'btnCwd'    : '여기',      // from v2.1 added 22.5.2015
\t\t\t'btnVolume' : '볼륨',    // from v2.1 added 22.5.2015
\t\t\t'btnAll'    : '전체',       // from v2.1 added 22.5.2015
\t\t\t'btnMime'   : 'MIME 타입', // from v2.1 added 22.5.2015
\t\t\t'btnFileName':'파일 이름',  // from v2.1 added 22.5.2015
\t\t\t'btnSaveClose': '저장후 닫기', // from v2.1 added 12.6.2015
\t\t\t'btnBackup' : '백업', // fromv2.1 added 28.11.2015
\t\t\t'btnRename'    : '이름변경',      // from v2.1.24 added 6.4.2017
\t\t\t'btnRenameAll' : '전체이름 변경', // from v2.1.24 added 6.4.2017
\t\t\t'btnPrevious' : '이전 (\$1/\$2)', // from v2.1.24 added 11.5.2017
\t\t\t'btnNext'     : '다음 (\$1/\$2)', // from v2.1.24 added 11.5.2017
\t\t\t'btnSaveAs'   : '다른 이름으로 저장하기', // from v2.1.25 added 24.5.2017

\t\t\t/******************************** notifications ********************************/
\t\t\t'ntfopen'     : '폴더 열기',
\t\t\t'ntffile'     : '파일 열기',
\t\t\t'ntfreload'   : '새로고침',
\t\t\t'ntfmkdir'    : '폴더 생성',
\t\t\t'ntfmkfile'   : '파일 생성',
\t\t\t'ntfrm'       : '삭제',
\t\t\t'ntfcopy'     : '복사',
\t\t\t'ntfmove'     : '이동',
\t\t\t'ntfprepare'  : '복사 준비',
\t\t\t'ntfrename'   : '이름바꾸기',
\t\t\t'ntfupload'   : '업로드',
\t\t\t'ntfdownload' : '다운로드',
\t\t\t'ntfsave'     : '저장하기',
\t\t\t'ntfarchive'  : '압축파일만들기',
\t\t\t'ntfextract'  : '압축풀기',
\t\t\t'ntfsearch'   : '검색',
\t\t\t'ntfresize'   : '이미지 크기 변경',
\t\t\t'ntfsmth'     : '작업중 >_<',
\t\t\t'ntfloadimg'  : '이미지 불러오는 중',
\t\t\t'ntfnetmount' : '네트워크 볼륨 마운트 중', // added 18.04.2012
\t\t\t'ntfnetunmount': '네트워크 볼륨 마운트 해제 중', // from v2.1 added 30.04.2012
\t\t\t'ntfdim'      : '이미지 해상도 가져오는 중', // added 20.05.2013
\t\t\t'ntfreaddir'  : '폴더 정보 읽는 중', // from v2.1 added 01.07.2013
\t\t\t'ntfurl'      : '링크 URL 가져오는 중', // from v2.1 added 11.03.2014
\t\t\t'ntfchmod'    : '파일 모드 변경하는 중', // from v2.1 added 20.6.2015
\t\t\t'ntfpreupload': '업로드된 파일명 검증 중', // from v2.1 added 31.11.2015
\t\t\t'ntfzipdl'    : '다운로드할 파일 생성 중', // from v2.1.7 added 23.1.2016
\t\t\t'ntfparents'  : '경로 정보 가져오는 중', // from v2.1.17 added 2.11.2016
\t\t\t'ntfchunkmerge': '업로드된 파일 처리 중', // from v2.1.17 added 2.11.2016
\t\t\t'ntftrash'    : '휴지통으로 이동 중', // from v2.1.24 added 2.5.2017
\t\t\t'ntfrestore'  : '휴지통에서 복원 중', // from v2.1.24 added 3.5.2017
\t\t\t'ntfchkdir'   : '대상 폴더 점검 중', // from v2.1.24 added 3.5.2017
\t\t\t'ntfundo'     : '이전 작업 취소 중', // from v2.1.27 added 31.07.2017
\t\t\t'ntfredo'     : '취소된 작업 다시 하는 중', // from v2.1.27 added 31.07.2017
\t\t\t'ntfchkcontent' : '내용 확인 중', // from v2.1.41 added 3.8.2018

\t\t\t/*********************************** volumes *********************************/
\t\t\t'volume_Trash' : '휴지통', //from v2.1.24 added 29.4.2017

\t\t\t/************************************ dates **********************************/
\t\t\t'dateUnknown' : '알 수 없음',
\t\t\t'Today'       : '오늘',
\t\t\t'Yesterday'   : '내일',
\t\t\t'msJan'       : '1월',
\t\t\t'msFeb'       : '2월',
\t\t\t'msMar'       : '3월',
\t\t\t'msApr'       : '4월',
\t\t\t'msMay'       : '5월',
\t\t\t'msJun'       : '6월',
\t\t\t'msJul'       : '7월',
\t\t\t'msAug'       : '8월',
\t\t\t'msSep'       : '9월',
\t\t\t'msOct'       : '10월',
\t\t\t'msNov'       : '11월',
\t\t\t'msDec'       : '12월',
\t\t\t'January'     : '1월',
\t\t\t'February'    : '2월',
\t\t\t'March'       : '3월',
\t\t\t'April'       : '4월',
\t\t\t'May'         : '5월',
\t\t\t'June'        : '6월',
\t\t\t'July'        : '7월',
\t\t\t'August'      : '8월',
\t\t\t'September'   : '9월',
\t\t\t'October'     : '10월',
\t\t\t'November'    : '11월',
\t\t\t'December'    : '12월',
\t\t\t'Sunday'      : '일요일',
\t\t\t'Monday'      : '월요일',
\t\t\t'Tuesday'     : '화요일',
\t\t\t'Wednesday'   : '수요일',
\t\t\t'Thursday'    : '목요일',
\t\t\t'Friday'      : '금요일',
\t\t\t'Saturday'    : '토요일',
\t\t\t'Sun'         : '일',
\t\t\t'Mon'         : '월',
\t\t\t'Tue'         : '화',
\t\t\t'Wed'         : '수',
\t\t\t'Thu'         : '목',
\t\t\t'Fri'         : '금',
\t\t\t'Sat'         : '토',

\t\t\t/******************************** sort variants ********************************/
\t\t\t'sortname'          : '이름',
\t\t\t'sortkind'          : '종류',
\t\t\t'sortsize'          : '크기',
\t\t\t'sortdate'          : '날짜',
\t\t\t'sortFoldersFirst'  : '폴더 먼저',
\t\t\t'sortperm'          : '퍼미션별', // from v2.1.13 added 13.06.2016
\t\t\t'sortmode'          : '모드별',       // from v2.1.13 added 13.06.2016
\t\t\t'sortowner'         : '소유자별',      // from v2.1.13 added 13.06.2016
\t\t\t'sortgroup'         : '그룹별',      // from v2.1.13 added 13.06.2016
\t\t\t'sortAlsoTreeview'  : '트리뷰도 같이',  // from v2.1.15 added 01.08.2016

\t\t\t/********************************** new items **********************************/
\t\t\t'untitled file.txt' : '새파일.txt', // added 10.11.2015
\t\t\t'untitled folder'   : '새폴더',   // added 10.11.2015
\t\t\t'Archive'           : '새아카이브',  // from v2.1 added 10.11.2015
\t\t\t'untitled file'     : '새파일.\$1',  // from v2.1.41 added 6.8.2018
\t\t\t'extentionfile'     : '\$1: 파일',    // from v2.1.41 added 6.8.2018
\t\t\t'extentiontype'     : '\$1: \$2',      // from v2.1.43 added 17.10.2018

\t\t\t/********************************** messages **********************************/
\t\t\t'confirmReq'      : '확인',
\t\t\t'confirmRm'       : '이 파일을 정말로 삭제 하겠습니까?<br/>실행 후 되돌릴 수 없습니다!',
\t\t\t'confirmRepl'     : '오래된 파일을 새 파일로 바꾸시겠습니까? (폴더가 포함되어 있으면 병합됩니다. 백업 및 교체하려면 백업을 선택하세요.)',
\t\t\t'confirmRest'     : '이미 있는 파일을 휴지통에 있는 파일로 교체하시겠습니까?', // fromv2.1.24 added 5.5.2017
\t\t\t'confirmConvUTF8' : 'UTF-8이 아닙니다<br/>UTF-8로 변환할까요?<br/>변환후 저장하면 UTF-8로 바뀝니다.', // from v2.1 added 08.04.2014
\t\t\t'confirmNonUTF8'  : '이 파일의 인코딩 타입을 알아내지 못했습니다. 편집하려면 임시로 UTF-8로 변환해야 합니다.<br/>이 파일의 인코딩을 선택해주세요.', // from v2.1.19 added 28.11.2016
\t\t\t'confirmNotSave'  : '변경된 부분이 있습니다.<br/>저장하지 않는다면 현재 작업중인 내용을 잃을 수 있습니다.', // from v2.1 added 15.7.2015
\t\t\t'confirmTrash'    : '휴지통으로 이동하시겠습니까?', //from v2.1.24 added 29.4.2017
\t\t\t'confirmMove'     : '이 파일을 정말 \"\$1\"(으)로 이동하시겠습니까?', //from v2.1.50 added 27.7.2019
\t\t\t'apllyAll'        : '모두 적용',
\t\t\t'name'            : '이름',
\t\t\t'size'            : '크기',
\t\t\t'perms'           : '권한',
\t\t\t'modify'          : '수정된 시간',
\t\t\t'kind'            : '종류',
\t\t\t'read'            : '읽기',
\t\t\t'write'           : '쓰기',
\t\t\t'noaccess'        : '액세스 불가',
\t\t\t'and'             : '와',
\t\t\t'unknown'         : '알 수 없음',
\t\t\t'selectall'       : '모든 파일 선택',
\t\t\t'selectfiles'     : '파일 선택',
\t\t\t'selectffile'     : '첫번째 파일 선택',
\t\t\t'selectlfile'     : '마지막 파일 선택',
\t\t\t'viewlist'        : '리스트 보기',
\t\t\t'viewicons'       : '아이콘 보기',
\t\t\t'viewSmall'       : '작은 아이콘', // from v2.1.39 added 22.5.2018
\t\t\t'viewMedium'      : '중간 아이콘', // from v2.1.39 added 22.5.2018
\t\t\t'viewLarge'       : '큰 아이콘', // from v2.1.39 added 22.5.2018
\t\t\t'viewExtraLarge'  : '아주 큰 아이콘', // from v2.1.39 added 22.5.2018
\t\t\t'places'          : '즐겨찾기',
\t\t\t'calc'            : '계산',
\t\t\t'path'            : '경로',
\t\t\t'aliasfor'        : '별명',
\t\t\t'locked'          : '잠금',
\t\t\t'dim'             : '크기',
\t\t\t'files'           : '파일',
\t\t\t'folders'         : '폴더',
\t\t\t'items'           : '아이템',
\t\t\t'yes'             : '예',
\t\t\t'no'              : '아니오',
\t\t\t'link'            : '링크',
\t\t\t'searcresult'     : '검색 결과',
\t\t\t'selected'        : '아이템 선택',
\t\t\t'about'           : '이 프로그램은..',
\t\t\t'shortcuts'       : '단축아이콘',
\t\t\t'help'            : '도움말',
\t\t\t'webfm'           : '웹 파일매니저',
\t\t\t'ver'             : '버전',
\t\t\t'protocolver'     : '프로토콜 버전',
\t\t\t'homepage'        : '홈페이지',
\t\t\t'docs'            : '문서',
\t\t\t'github'          : 'Github에서 포크하기',
\t\t\t'twitter'         : '트위터에서 팔로우하기',
\t\t\t'facebook'        : '페이스북에서 가입하기',
\t\t\t'team'            : '팀',
\t\t\t'chiefdev'        : '개발팀장',
\t\t\t'developer'       : '개발자',
\t\t\t'contributor'     : '공헌자',
\t\t\t'maintainer'      : '관리자',
\t\t\t'translator'      : '번역',
\t\t\t'icons'           : '아이콘',
\t\t\t'dontforget'      : '그리고 수건 가져가는 것을 잊지 마세요',
\t\t\t'shortcutsof'     : '단축아이콘 사용불가',
\t\t\t'dropFiles'       : '여기로 이동하기',
\t\t\t'or'              : '또는',
\t\t\t'selectForUpload' : '업로드 파일 선택',
\t\t\t'moveFiles'       : '파일 이동',
\t\t\t'copyFiles'       : '파일 복사',
\t\t\t'restoreFiles'    : '복원하기', // from v2.1.24 added 5.5.2017
\t\t\t'rmFromPlaces'    : '현재 폴더에서 삭제하기',
\t\t\t'aspectRatio'     : '화면비율',
\t\t\t'scale'           : '크기',
\t\t\t'width'           : '가로',
\t\t\t'height'          : '세로',
\t\t\t'resize'          : '사이즈 변경',
\t\t\t'crop'            : '자르기',
\t\t\t'rotate'          : '회전',
\t\t\t'rotate-cw'       : '반시계방향 90도 회전',
\t\t\t'rotate-ccw'      : '시계방향 90도 회전',
\t\t\t'degree'          : '도',
\t\t\t'netMountDialogTitle' : '네트워크 볼륨 마운트', // added 18.04.2012
\t\t\t'protocol'            : '프로토콜', // added 18.04.2012
\t\t\t'host'                : '호스트', // added 18.04.2012
\t\t\t'port'                : '포트', // added 18.04.2012
\t\t\t'user'                : '사용자', // added 18.04.2012
\t\t\t'pass'                : '비밀번호', // added 18.04.2012
\t\t\t'confirmUnmount'      : '\$1을(를) 마운트 해제하시겠습니까?',  // from v2.1 added 30.04.2012
\t\t\t'dropFilesBrowser': '브라우저에서 파일을 끌어오거나 붙여넣으세요', // from v2.1 added 30.05.2012
\t\t\t'dropPasteFiles'  : '파일을 끌어오거나, 클립보드의 URL이나 이미지들을 붙여넣으세요', // from v2.1 added 07.04.2014
\t\t\t'encoding'        : '인코딩', // from v2.1 added 19.12.2014
\t\t\t'locale'          : '로케일',   // from v2.1 added 19.12.2014
\t\t\t'searchTarget'    : '대상: \$1',                // from v2.1 added 22.5.2015
\t\t\t'searchMime'      : '입력한 MIME 타입으로 검색하기', // from v2.1 added 22.5.2015
\t\t\t'owner'           : '소유자', // from v2.1 added 20.6.2015
\t\t\t'group'           : '그룹', // from v2.1 added 20.6.2015
\t\t\t'other'           : '그외', // from v2.1 added 20.6.2015
\t\t\t'execute'         : '실행', // from v2.1 added 20.6.2015
\t\t\t'perm'            : '권한', // from v2.1 added 20.6.2015
\t\t\t'mode'            : '모드', // from v2.1 added 20.6.2015
\t\t\t'emptyFolder'     : '빈 폴더입니다', // from v2.1.6 added 30.12.2015
\t\t\t'emptyFolderDrop' : '빈 폴더입니다\\\\A 드래드 앤 드롭으로 파일을 추가하세요', // from v2.1.6 added 30.12.2015
\t\t\t'emptyFolderLTap' : '빈 폴더입니다\\\\A 길게 눌러 파일을 추가하세요', // from v2.1.6 added 30.12.2015
\t\t\t'quality'         : '품질', // from v2.1.6 added 5.1.2016
\t\t\t'autoSync'        : '자동 동기',  // from v2.1.6 added 10.1.2016
\t\t\t'moveUp'          : '위로 이동',  // from v2.1.6 added 18.1.2016
\t\t\t'getLink'         : 'URL 링크 가져오기', // from v2.1.7 added 9.2.2016
\t\t\t'selectedItems'   : '선택된 항목 (\$1)', // from v2.1.7 added 2.19.2016
\t\t\t'folderId'        : '폴더 ID', // from v2.1.10 added 3.25.2016
\t\t\t'offlineAccess'   : '오프라인 접근 허용', // from v2.1.10 added 3.25.2016
\t\t\t'reAuth'          : '재인증하기', // from v2.1.10 added 3.25.2016
\t\t\t'nowLoading'      : '로딩중...', // from v2.1.12 added 4.26.2016
\t\t\t'openMulti'       : '여러 파일 열기', // from v2.1.12 added 5.14.2016
\t\t\t'openMultiConfirm': '\$1 파일을 열려고 합니다. 브라우저에서 열겠습니까?', // from v2.1.12 added 5.14.2016
\t\t\t'emptySearch'     : '검색결과가 없습니다.', // from v2.1.12 added 5.16.2016
\t\t\t'editingFile'     : '편집중인 파일입니다.', // from v2.1.13 added 6.3.2016
\t\t\t'hasSelected'     : '\$1개를 선택했습니다.', // from v2.1.13 added 6.3.2016
\t\t\t'hasClipboard'    : '클립보드에 \$1개가 있습니다.', // from v2.1.13 added 6.3.2016
\t\t\t'incSearchOnly'   : '증분 검색은 현재 보기에서만 가능합니다.', // from v2.1.13 added 6.30.2016
\t\t\t'reinstate'       : '복원', // from v2.1.15 added 3.8.2016
\t\t\t'complete'        : '\$1 완료', // from v2.1.15 added 21.8.2016
\t\t\t'contextmenu'     : '컨텍스트 메뉴', // from v2.1.15 added 9.9.2016
\t\t\t'pageTurning'     : '페이지 전환', // from v2.1.15 added 10.9.2016
\t\t\t'volumeRoots'     : '볼륨 루트', // from v2.1.16 added 16.9.2016
\t\t\t'reset'           : '초기화', // from v2.1.16 added 1.10.2016
\t\t\t'bgcolor'         : '배경색', // from v2.1.16 added 1.10.2016
\t\t\t'colorPicker'     : '색 선택기', // from v2.1.16 added 1.10.2016
\t\t\t'8pxgrid'         : '8px 그리드', // from v2.1.16 added 4.10.2016
\t\t\t'enabled'         : '활성', // from v2.1.16 added 4.10.2016
\t\t\t'disabled'        : '비활성', // from v2.1.16 added 4.10.2016
\t\t\t'emptyIncSearch'  : '현재 보기에는 검색결과가 없습니다.\\\\A[Enter]를 눌러 검색 대상을 확장하세요.', // from v2.1.16 added 5.10.2016
\t\t\t'emptyLetSearch'  : '현재 보기에는 첫 글자 검색 결과가 없습니다.', // from v2.1.23 added 24.3.2017
\t\t\t'textLabel'       : '텍스트 라벨', // from v2.1.17 added 13.10.2016
\t\t\t'minsLeft'        : '\$1 분 남았습니다', // from v2.1.17 added 13.11.2016
\t\t\t'openAsEncoding'  : '선택한 인코딩으로 다시 열기', // from v2.1.19 added 2.12.2016
\t\t\t'saveAsEncoding'  : '선택한 인코딩으로 저장하기', // from v2.1.19 added 2.12.2016
\t\t\t'selectFolder'    : '폴더 선택', // from v2.1.20 added 13.12.2016
\t\t\t'firstLetterSearch': '첫 글자 검색', // from v2.1.23 added 24.3.2017
\t\t\t'presets'         : '프리셋', // from v2.1.25 added 26.5.2017
\t\t\t'tooManyToTrash'  : '휴지통으로 옮기기엔 항목이 너무 많습니다.', // from v2.1.25 added 9.6.2017
\t\t\t'TextArea'        : '글자영역', // from v2.1.25 added 14.6.2017
\t\t\t'folderToEmpty'   : '\"\$1\" 폴더를 비우세요.', // from v2.1.25 added 22.6.2017
\t\t\t'filderIsEmpty'   : '\"\$1\" 폴더에 아무것도 없습니다.', // from v2.1.25 added 22.6.2017
\t\t\t'preference'      : '환경설정', // from v2.1.26 added 28.6.2017
\t\t\t'language'        : '언어 설정', // from v2.1.26 added 28.6.2017
\t\t\t'clearBrowserData': '이 브라우저에 저장된 설정값 초기화하기', // from v2.1.26 added 28.6.2017
\t\t\t'toolbarPref'     : '툴바 설정', // from v2.1.27 added 2.8.2017
\t\t\t'charsLeft'       : '... \$1 글자 남았습니다.',  // from v2.1.29 added 30.8.2017
\t\t\t'linesLeft'       : '... \$1 줄 남았습니다.',  // from v2.1.52 added 16.1.2020
\t\t\t'sum'             : '합계', // from v2.1.29 added 28.9.2017
\t\t\t'roughFileSize'   : '대략적인 파일 크기', // from v2.1.30 added 2.11.2017
\t\t\t'autoFocusDialog' : '마우스를 가져갈 때 대화창 요소에 초점 맞추기',  // from v2.1.30 added 2.11.2017
\t\t\t'select'          : '선택', // from v2.1.30 added 23.11.2017
\t\t\t'selectAction'    : '파일 선택시 동작', // from v2.1.30 added 23.11.2017
\t\t\t'useStoredEditor' : '마지막 사용한 편집기로 열기', // from v2.1.30 added 23.11.2017
\t\t\t'selectinvert'    : '선택 반전', // from v2.1.30 added 25.11.2017
\t\t\t'renameMultiple'  : '선택한 \$1을(를) \$2와 같이 바꾸겠습니까?<br/>이 작업은 되돌릴 수 없습니다!', // from v2.1.31 added 4.12.2017
\t\t\t'batchRename'     : '일괄 이름 바꾸기', // from v2.1.31 added 8.12.2017
\t\t\t'plusNumber'      : '+ 숫자', // from v2.1.31 added 8.12.2017
\t\t\t'asPrefix'        : '접두사 추가', // from v2.1.31 added 8.12.2017
\t\t\t'asSuffix'        : '접미사 추가', // from v2.1.31 added 8.12.2017
\t\t\t'changeExtention' : '확장자 변경', // from v2.1.31 added 8.12.2017
\t\t\t'columnPref'      : '사이드바 설정 (리스트 보기)', // from v2.1.32 added 6.2.2018
\t\t\t'reflectOnImmediate' : '모든 변경은 아카이브에 즉시 반영됩니다.', // from v2.1.33 added 2.3.2018
\t\t\t'reflectOnUnmount'   : '이 볼륨의 마운트를 해제할 때까지는 어떠한 변경사항도 반영되지 않습니다.', // from v2.1.33 added 2.3.2018
\t\t\t'unmountChildren' : '아래의 볼륨들도 이 볼륨과 함께 마운트가 해제됩니다. 계속하시겠습니까?', // from v2.1.33 added 5.3.2018
\t\t\t'selectionInfo'   : '선택 정보', // from v2.1.33 added 7.3.2018
\t\t\t'hashChecker'     : '파일 해쉬 알고리즘', // from v2.1.33 added 10.3.2018
\t\t\t'infoItems'       : '정보 (선택 정보 패널)', // from v2.1.38 added 28.3.2018
\t\t\t'pressAgainToExit': '나가기 위해서 한 번 더 누르세요.', // from v2.1.38 added 1.4.2018
\t\t\t'toolbar'         : '툴바', // from v2.1.38 added 4.4.2018
\t\t\t'workspace'       : '작업공간', // from v2.1.38 added 4.4.2018
\t\t\t'dialog'          : '대화상자', // from v2.1.38 added 4.4.2018
\t\t\t'all'             : '전체', // from v2.1.38 added 4.4.2018
\t\t\t'iconSize'        : '아이콘 크기 (아이콘 보기)', // from v2.1.39 added 7.5.2018
\t\t\t'editorMaximized' : '최대화된 편집기 창을 엽니다', // from v2.1.40 added 30.6.2018
\t\t\t'editorConvNoApi' : '현재 API를 통한 변환이 불가능하므로 웹 사이트에서 변환하시기 바랍니다.', //from v2.1.40 added 8.7.2018
\t\t\t'editorConvNeedUpload' : '변환 후 변환된 파일을 저장하기 위해서는 파일 URL이나 다운로드받은 파일을 업로드 해야 합니다.', //from v2.1.40 added 8.7.2018
\t\t\t'convertOn'       : '\$1 사이트에서 변환하시기 바랍니다.', // from v2.1.40 added 10.7.2018
\t\t\t'integrations'    : '통합', // from v2.1.40 added 11.7.2018
\t\t\t'integrationWith' : 'elFinder에는 다음과 같은 외부 서비스가 통합되어 있습니다. 이용하기 전에 이용 약관, 개인정보 보호정책 등을 확인하시기 바랍니다.', // from v2.1.40 added 11.7.2018
\t\t\t'showHidden'      : '숨겨진 파일 표시', // from v2.1.41 added 24.7.2018
\t\t\t'hideHidden'      : '숨겨진 파일 숨기기', // from v2.1.41 added 24.7.2018
\t\t\t'toggleHidden'    : '숨겨진 항목 표시/숨기기', // from v2.1.41 added 24.7.2018
\t\t\t'makefileTypes'   : '\"새 파일\"에서 사용할 파일 형식', // from v2.1.41 added 7.8.2018
\t\t\t'typeOfTextfile'  : '텍스트 파일 유형', // from v2.1.41 added 7.8.2018
\t\t\t'add'             : '추가', // from v2.1.41 added 7.8.2018
\t\t\t'theme'           : '테마', // from v2.1.43 added 19.10.2018
\t\t\t'default'         : '기본값', // from v2.1.43 added 19.10.2018
\t\t\t'description'     : '설명', // from v2.1.43 added 19.10.2018
\t\t\t'website'         : '웹사이트', // from v2.1.43 added 19.10.2018
\t\t\t'author'          : '저자', // from v2.1.43 added 19.10.2018
\t\t\t'email'           : '이메일', // from v2.1.43 added 19.10.2018
\t\t\t'license'         : '라이선스', // from v2.1.43 added 19.10.2018
\t\t\t'exportToSave'    : '이 파일은 저장될 수 없습니다. 편집한 내용을 유지하려면 PC로 내보내시기 바랍니다.', // from v2.1.44 added 1.12.2018
\t\t\t'dblclickToSelect': '파일을 두 번 클릭하여 선택하세요.', // from v2.1.47 added 22.1.2019
\t\t\t'useFullscreen'   : '전체 화면 모드 사용', // from v2.1.47 added 19.2.2019

\t\t\t/********************************** mimetypes **********************************/
\t\t\t'kindUnknown'     : '알 수 없음',
\t\t\t'kindRoot'        : 'Root 볼륨', // from v2.1.16 added 16.10.2016
\t\t\t'kindFolder'      : '폴더',
\t\t\t'kindSelects'     : '선택', // from v2.1.29 added 29.8.2017
\t\t\t'kindAlias'       : '별칭',
\t\t\t'kindAliasBroken' : '손상된 별칭',
\t\t\t// applications
\t\t\t'kindApp'         : '응용프로그램',
\t\t\t'kindPostscript'  : 'Postscript 문서',
\t\t\t'kindMsOffice'    : 'Microsoft Office 문서',
\t\t\t'kindMsWord'      : 'Microsoft Word 문서',
\t\t\t'kindMsExcel'     : 'Microsoft Excel 문서',
\t\t\t'kindMsPP'        : 'Microsoft Powerpoint 프레젠테이션',
\t\t\t'kindOO'          : 'Open Office 문서',
\t\t\t'kindAppFlash'    : '플래쉬 파일',
\t\t\t'kindPDF'         : 'PDF 문서',
\t\t\t'kindTorrent'     : '비트토렌트 파일',
\t\t\t'kind7z'          : '7z 압축파일',
\t\t\t'kindTAR'         : 'TAR 압축파일',
\t\t\t'kindGZIP'        : 'GZIP 압축파일',
\t\t\t'kindBZIP'        : 'BZIP 압축파일',
\t\t\t'kindXZ'          : 'XZ 압축파일',
\t\t\t'kindZIP'         : 'ZIP 압축파일',
\t\t\t'kindRAR'         : 'RAR 압축파일',
\t\t\t'kindJAR'         : '자바 JAR 파일',
\t\t\t'kindTTF'         : '트루 타입 글꼴',
\t\t\t'kindOTF'         : '오픈 타입 글꼴',
\t\t\t'kindRPM'         : 'RPM 패키지',
\t\t\t// texts
\t\t\t'kindText'        : '텍스트 문서',
\t\t\t'kindTextPlain'   : '일반 텍스트',
\t\t\t'kindPHP'         : 'PHP 소스',
\t\t\t'kindCSS'         : 'CSS 문서',
\t\t\t'kindHTML'        : 'HTML 문서',
\t\t\t'kindJS'          : '자바스크립트 소스',
\t\t\t'kindRTF'         : 'RTF 형식',
\t\t\t'kindC'           : 'C 소스',
\t\t\t'kindCHeader'     : 'C 헤더 소스',
\t\t\t'kindCPP'         : 'C++ 소스',
\t\t\t'kindCPPHeader'   : 'C++ 헤더 소스',
\t\t\t'kindShell'       : '유닉스 쉘 스크립트',
\t\t\t'kindPython'      : '파이썬 소스',
\t\t\t'kindJava'        : '자바 소스',
\t\t\t'kindRuby'        : '루비 소스',
\t\t\t'kindPerl'        : '펄 스크립트',
\t\t\t'kindSQL'         : 'SQL 소스',
\t\t\t'kindXML'         : 'XML 문서',
\t\t\t'kindAWK'         : 'AWK 소스',
\t\t\t'kindCSV'         : 'CSV 파일',
\t\t\t'kindDOCBOOK'     : '닥북 XML 문서',
\t\t\t'kindMarkdown'    : '마크다운 문서', // added 20.7.2015
\t\t\t// images
\t\t\t'kindImage'       : '이미지',
\t\t\t'kindBMP'         : 'BMP 이미지',
\t\t\t'kindJPEG'        : 'JPEG 이미지',
\t\t\t'kindGIF'         : 'GIF 이미지',
\t\t\t'kindPNG'         : 'PNG 이미지',
\t\t\t'kindTIFF'        : 'TIFF 이미지',
\t\t\t'kindTGA'         : 'TGA 이미지',
\t\t\t'kindPSD'         : 'Adobe Photoshop 이미지',
\t\t\t'kindXBITMAP'     : 'X 비트맵 이미지',
\t\t\t'kindPXM'         : 'Pixelmator 이미지',
\t\t\t// media
\t\t\t'kindAudio'       : '오디오 미디어',
\t\t\t'kindAudioMPEG'   : 'MPEG 오디오',
\t\t\t'kindAudioMPEG4'  : 'MPEG-4 오디오',
\t\t\t'kindAudioMIDI'   : 'MIDI 오디오',
\t\t\t'kindAudioOGG'    : 'Ogg Vorbis 오디오',
\t\t\t'kindAudioWAV'    : 'WAV 오디오',
\t\t\t'AudioPlaylist'   : 'MP3 플레이 리스트',
\t\t\t'kindVideo'       : '동영상 미디어',
\t\t\t'kindVideoDV'     : 'DV 동영상',
\t\t\t'kindVideoMPEG'   : 'MPEG 동영상',
\t\t\t'kindVideoMPEG4'  : 'MPEG-4 동영상',
\t\t\t'kindVideoAVI'    : 'AVI 동영상',
\t\t\t'kindVideoMOV'    : '퀵 타임 동영상',
\t\t\t'kindVideoWM'     : '윈도우 미디어 플레이어 동영상',
\t\t\t'kindVideoFlash'  : '플래쉬 동영상',
\t\t\t'kindVideoMKV'    : 'Matroska 동영상',
\t\t\t'kindVideoOGG'    : 'Ogg 동영상'
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
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.ko.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.ko.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.ko.js");
    }
}
