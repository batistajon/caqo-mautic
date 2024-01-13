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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.pt_BR.js */
class __TwigTemplate_5f4ded3d2c534d4321f07e2c9098d49f93739b478710880c4f0692ed375485d5 extends Template
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
 * Português translation
 * @author Leandro Carvalho <contato@leandrowebdev.net>
 * @author Wesley Osorio<wesleyfosorio@hotmail.com>
 * @author Fernando H. Bandeira <fernando.bandeira94@gmail.com>
 * @author Gustavo Brito <britopereiragustavo@gmail.com>
 * @version 2019-10-22
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
\telFinder.prototype.i18.pt_BR = {
\t\ttranslator : 'Leandro Carvalho &lt;contato@leandrowebdev.net&gt;, Wesley Osorio&lt;wesleyfosorio@hotmail.com&gt;, Fernando H. Bandeira &lt;fernando.bandeira94@gmail.com&gt;, Gustavo Brito &lt;britopereiragustavo@gmail.com&gt;',
\t\tlanguage   : 'Português',
\t\tdirection  : 'ltr',
\t\tdateFormat : 'd M Y H:i', // will show like: 22 Out 2019 11:34
\t\tfancyDateFormat : '\$1 H:i', // will show like: Hoje 11:34
\t\tnonameDateFormat : 'ymd-His', // noname upload will show like: 191022-113433
\t\tmessages   : {

\t\t\t/********************************** errors **********************************/
\t\t\t'error'                : 'Erro',
\t\t\t'errUnknown'           : 'Erro desconhecido.',
\t\t\t'errUnknownCmd'        : 'Comando desconhecido.',
\t\t\t'errJqui'              : 'Configuração inválida do JQuery UI. Verifique se os componentes selectable, draggable e droppable estão incluídos.',
\t\t\t'errNode'              : 'elFinder requer um elemento DOM para ser criado.',
\t\t\t'errURL'               : 'Configuração inválida do elFinder! Você deve setar a opção da URL.',
\t\t\t'errAccess'            : 'Acesso negado.',
\t\t\t'errConnect'           : 'Incapaz de conectar ao backend.',
\t\t\t'errAbort'             : 'Conexão abortada.',
\t\t\t'errTimeout'           : 'Tempo de conexão excedido',
\t\t\t'errNotFound'          : 'Backend não encontrado.',
\t\t\t'errResponse'          : 'Resposta inválida do backend.',
\t\t\t'errConf'              : 'Configuração inválida do backend.',
\t\t\t'errJSON'              : 'Módulo PHP JSON não está instalado.',
\t\t\t'errNoVolumes'         : 'Não existe nenhum volume legível disponivel.',
\t\t\t'errCmdParams'         : 'Parâmetro inválido para o comando \"\$1\".',
\t\t\t'errDataNotJSON'       : 'Dados não estão no formato JSON.',
\t\t\t'errDataEmpty'         : 'Dados vazios.',
\t\t\t'errCmdReq'            : 'Requisição do Backend requer nome de comando.',
\t\t\t'errOpen'              : 'Incapaz de abrir \"\$1\".',
\t\t\t'errNotFolder'         : 'Objeto não é uma pasta.',
\t\t\t'errNotFile'           : 'Objeto não é um arquivo.',
\t\t\t'errRead'              : 'Incapaz de ler \"\$1\".',
\t\t\t'errWrite'             : 'Incapaz de escrever em \"\$1\".',
\t\t\t'errPerm'              : 'Permissão negada.',
\t\t\t'errLocked'            : '\"\$1\" está bloqueado e não pode ser renomeado, movido ou removido.',
\t\t\t'errExists'            : 'O nome do arquivo \"\$1\" já existe neste local.',
\t\t\t'errInvName'           : 'Nome do arquivo inválido.',
\t\t\t'errInvDirname'        : 'Nome da pasta inválida.',  // from v2.1.24 added 12.4.2017
\t\t\t'errFolderNotFound'    : 'Pasta não encontrada.',
\t\t\t'errFileNotFound'      : 'Arquivo não encontrado.',
\t\t\t'errTrgFolderNotFound' : 'Pasta de destino \"\$1\" não encontrada.',
\t\t\t'errPopup'             : 'O seu navegador está bloqueando popup\\'s. Para abrir o arquivo, altere esta opção no seu Navegador.',
\t\t\t'errMkdir'             : 'Incapaz de criar a pasta \"\$1\".',
\t\t\t'errMkfile'            : 'Incapaz de criar o arquivo \"\$1\".',
\t\t\t'errRename'            : 'Incapaz de renomear \"\$1\".',
\t\t\t'errCopyFrom'          : 'Copia dos arquivos do volume \"\$1\" não permitida.',
\t\t\t'errCopyTo'            : 'Copia dos arquivos para o volume \"\$1\" não permitida.',
\t\t\t'errMkOutLink'         : 'Incapaz de criar um link fora da unidade raiz.', // from v2.1 added 03.10.2015
\t\t\t'errUpload'            : 'Erro no upload.',  // old name - errUploadCommon
\t\t\t'errUploadFile'        : 'Não foi possível fazer o upload \"\$1\".', // old name - errUpload
\t\t\t'errUploadNoFiles'     : 'Não foi encontrado nenhum arquivo para upload.',
\t\t\t'errUploadTotalSize'   : 'Os dados excedem o tamanho máximo permitido.', // old name - errMaxSize
\t\t\t'errUploadFileSize'    : 'Arquivo excede o tamanho máximo permitido.', //  old name - errFileMaxSize
\t\t\t'errUploadMime'        : 'Tipo de arquivo não permitido.',
\t\t\t'errUploadTransfer'    : '\"\$1\" erro na transferência.',
\t\t\t'errUploadTemp'        : 'Incapaz de criar um arquivo temporário para upload.', // from v2.1 added 26.09.2015
\t\t\t'errNotReplace'        : 'Objeto \"\$1\" já existe neste local e não pode ser substituído por um objeto com outro tipo.', // new
\t\t\t'errReplace'           : 'Incapaz de substituir \"\$1\".',
\t\t\t'errSave'              : 'Incapaz de salvar \"\$1\".',
\t\t\t'errCopy'              : 'Incapaz de copiar \"\$1\".',
\t\t\t'errMove'              : 'Incapaz de mover \"\$1\".',
\t\t\t'errCopyInItself'      : 'Incapaz de copiar \"\$1\" nele mesmo.',
\t\t\t'errRm'                : 'Incapaz de remover \"\$1\".',
\t\t\t'errTrash'             : 'Incapaz de deletar.', // from v2.1.24 added 30.4.2017
\t\t\t'errRmSrc'             : 'Incapaz de remover o(s) arquivo(s) fonte.',
\t\t\t'errExtract'           : 'Incapaz de extrair os arquivos de \"\$1\".',
\t\t\t'errArchive'           : 'Incapaz de criar o arquivo.',
\t\t\t'errArcType'           : 'Tipo de arquivo não suportado.',
\t\t\t'errNoArchive'         : 'Arquivo inválido ou é de um tipo não suportado.',
\t\t\t'errCmdNoSupport'      : 'Backend não suporta este comando.',
\t\t\t'errReplByChild'       : 'A pasta “\$1” não pode ser substituída por um item que contém.',
\t\t\t'errArcSymlinks'       : 'Por razões de segurança, negada a permissão para descompactar arquivos que contenham links ou arquivos com nomes não permitidos.', // edited 24.06.2012
\t\t\t'errArcMaxSize'        : 'Arquivo excede o tamanho máximo permitido.',
\t\t\t'errResize'            : 'Incapaz de redimensionar \"\$1\".',
\t\t\t'errResizeDegree'      : 'Grau de rotação inválido.',  // added 7.3.2013
\t\t\t'errResizeRotate'      : 'Incapaz de rotacionar a imagem.',  // added 7.3.2013
\t\t\t'errResizeSize'        : 'Tamanho inválido de imagem.',  // added 7.3.2013
\t\t\t'errResizeNoChange'    : 'Tamanho da imagem não alterado.',  // added 7.3.2013
\t\t\t'errUsupportType'      : 'Tipo de arquivo não suportado.',
\t\t\t'errNotUTF8Content'    : 'Arquivo \"\$1\" não está em UTF-8 e não pode ser editado.',  // added 9.11.2011
\t\t\t'errNetMount'          : 'Incapaz de montar montagem \"\$1\".', // added 17.04.2012
\t\t\t'errNetMountNoDriver'  : 'Protocolo não suportado.',     // added 17.04.2012
\t\t\t'errNetMountFailed'    : 'Montagem falhou.',         // added 17.04.2012
\t\t\t'errNetMountHostReq'   : 'Servidor requerido.', // added 18.04.2012
\t\t\t'errSessionExpires'    : 'Sua sessão expirou por inatividade.',
\t\t\t'errCreatingTempDir'   : 'Não foi possível criar um diretório temporário: \"\$1\"',
\t\t\t'errFtpDownloadFile'   : 'Não foi possível fazer o download do arquivo do FTP: \"\$1\"',
\t\t\t'errFtpUploadFile'     : 'Não foi possível fazer o upload do arquivo para o FTP: \"\$1\"',
\t\t\t'errFtpMkdir'          : 'Não foi possível criar um diretório remoto no FTP: \"\$1\"',
\t\t\t'errArchiveExec'       : 'Erro ao arquivar os arquivos: \"\$1\"',
\t\t\t'errExtractExec'       : 'Erro na extração dos arquivos: \"\$1\"',
\t\t\t'errNetUnMount'        : 'Incapaz de desmontar', // from v2.1 added 30.04.2012
\t\t\t'errConvUTF8'          : 'Não conversivel para UTF-8', // from v2.1 added 08.04.2014
\t\t\t'errFolderUpload'      : 'Tente utilizar o Google Chrome, se você deseja enviar uma pasta.', // from v2.1 added 26.6.2015
\t\t\t'errSearchTimeout'     : 'Tempo limite atingido para a busca \"\$1\". O resultado da pesquisa é parcial.', // from v2.1 added 12.1.2016
\t\t\t'errReauthRequire'     : 'Re-autorização é necessária.', // from v2.1.10 added 24.3.2016
\t\t\t'errMaxTargets'        : 'O número máximo de itens selecionáveis ​​é \$1.', // from v2.1.17 added 17.10.2016
\t\t\t'errRestore'           : 'Não foi possível restaurar a partir do lixo. Não é possível identificar o destino da restauração.', // from v2.1.24 added 3.5.2017
\t\t\t'errEditorNotFound'    : 'Editor não encontrado para este tipo de arquivo.', // from v2.1.25 added 23.5.2017
\t\t\t'errServerError'       : 'Ocorreu um erro no lado do servidor.', // from v2.1.25 added 16.6.2017
\t\t\t'errEmpty'             : 'Não foi possível esvaziar a pasta \"\$1\".', // from v2.1.25 added 22.6.2017
\t\t\t'moreErrors'           : 'Existem mais \$1 erros.', // from v2.1.44 added 9.12.2018

\t\t\t/******************************* commands names ********************************/
\t\t\t'cmdarchive'   : 'Criar arquivo',
\t\t\t'cmdback'      : 'Voltar',
\t\t\t'cmdcopy'      : 'Copiar',
\t\t\t'cmdcut'       : 'Cortar',
\t\t\t'cmddownload'  : 'Baixar',
\t\t\t'cmdduplicate' : 'Duplicar',
\t\t\t'cmdedit'      : 'Editar arquivo',
\t\t\t'cmdextract'   : 'Extrair arquivo de ficheiros',
\t\t\t'cmdforward'   : 'Avançar',
\t\t\t'cmdgetfile'   : 'Selecionar arquivos',
\t\t\t'cmdhelp'      : 'Sobre este software',
\t\t\t'cmdhome'      : 'Home',
\t\t\t'cmdinfo'      : 'Propriedades',
\t\t\t'cmdmkdir'     : 'Nova pasta',
\t\t\t'cmdmkdirin'   : 'Em uma nova pasta', // from v2.1.7 added 19.2.2016
\t\t\t'cmdmkfile'    : 'Novo arquivo',
\t\t\t'cmdopen'      : 'Abrir',
\t\t\t'cmdpaste'     : 'Colar',
\t\t\t'cmdquicklook' : 'Pré-vizualização',
\t\t\t'cmdreload'    : 'Recarregar',
\t\t\t'cmdrename'    : 'Renomear',
\t\t\t'cmdrm'        : 'Deletar',
\t\t\t'cmdtrash'     : 'Mover para a lixeira', //from v2.1.24 added 29.4.2017
\t\t\t'cmdrestore'   : 'Restaurar', //from v2.1.24 added 3.5.2017
\t\t\t'cmdsearch'    : 'Achar arquivos',
\t\t\t'cmdup'        : 'Ir para o diretório pai',
\t\t\t'cmdupload'    : 'Fazer upload de arquivo',
\t\t\t'cmdview'      : 'Vizualizar',
\t\t\t'cmdresize'    : 'Redimencionar & Rotacionar',
\t\t\t'cmdsort'      : 'Ordenar',
\t\t\t'cmdnetmount'  : 'Montar unidade de rede', // added 18.04.2012
\t\t\t'cmdnetunmount': 'Desmontar', // from v2.1 added 30.04.2012
\t\t\t'cmdplaces'    : 'Para locais', // added 28.12.2014
\t\t\t'cmdchmod'     : 'Alterar permissão', // from v2.1 added 20.6.2015
\t\t\t'cmdopendir'   : 'Abrir pasta', // from v2.1 added 13.1.2016
\t\t\t'cmdcolwidth'  : 'Redefinir largura da coluna', // from v2.1.13 added 12.06.2016
\t\t\t'cmdfullscreen': 'Tela cheia', // from v2.1.15 added 03.08.2016
\t\t\t'cmdmove'      : 'Mover', // from v2.1.15 added 21.08.2016
\t\t\t'cmdempty'     : 'Esvaziar a pasta', // from v2.1.25 added 22.06.2017
\t\t\t'cmdundo'      : 'Desfazer', // from v2.1.27 added 31.07.2017
\t\t\t'cmdredo'      : 'Refazer', // from v2.1.27 added 31.07.2017
\t\t\t'cmdpreference': 'Preferências', // from v2.1.27 added 03.08.2017
\t\t\t'cmdselectall' : 'Selecionar tudo', // from v2.1.28 added 15.08.2017
\t\t\t'cmdselectnone': 'Selecionar nenhum', // from v2.1.28 added 15.08.2017
\t\t\t'cmdselectinvert': 'Inverter seleção', // from v2.1.28 added 15.08.2017
\t\t\t'cmdopennew'   : 'Abrir em nova janela', // from v2.1.38 added 3.4.2018
\t\t\t'cmdhide'      : 'Ocultar (preferência)', // from v2.1.41 added 24.7.2018

\t\t\t/*********************************** buttons ***********************************/
\t\t\t'btnClose'  : 'Fechar',
\t\t\t'btnSave'   : 'Salvar',
\t\t\t'btnRm'     : 'Remover',
\t\t\t'btnApply'  : 'Aplicar',
\t\t\t'btnCancel' : 'Cancelar',
\t\t\t'btnNo'     : 'Não',
\t\t\t'btnYes'    : 'Sim',
\t\t\t'btnMount'  : 'Montar',  // added 18.04.2012
\t\t\t'btnApprove': 'Vá para \$1 & aprove', // from v2.1 added 26.04.2012
\t\t\t'btnUnmount': 'Desmontar', // from v2.1 added 30.04.2012
\t\t\t'btnConv'   : 'Converter', // from v2.1 added 08.04.2014
\t\t\t'btnCwd'    : 'Aqui',      // from v2.1 added 22.5.2015
\t\t\t'btnVolume' : 'Volume',    // from v2.1 added 22.5.2015
\t\t\t'btnAll'    : 'Todos',       // from v2.1 added 22.5.2015
\t\t\t'btnMime'   : 'Tipo MIME', // from v2.1 added 22.5.2015
\t\t\t'btnFileName':'Nome do arquivo',  // from v2.1 added 22.5.2015
\t\t\t'btnSaveClose': 'Salvar & Fechar', // from v2.1 added 12.6.2015
\t\t\t'btnBackup' : 'Backup', // fromv2.1 added 28.11.2015
\t\t\t'btnRename'    : 'Renomear',      // from v2.1.24 added 6.4.2017
\t\t\t'btnRenameAll' : 'Renomear (tudo)', // from v2.1.24 added 6.4.2017
\t\t\t'btnPrevious' : 'Anterior (\$1/\$2)', // from v2.1.24 added 11.5.2017
\t\t\t'btnNext'     : 'Próximo (\$1/\$2)', // from v2.1.24 added 11.5.2017
\t\t\t'btnSaveAs'   : 'Salvar como', // from v2.1.25 added 24.5.2017

\t\t\t/******************************** notifications ********************************/
\t\t\t'ntfopen'     : 'Abrir pasta',
\t\t\t'ntffile'     : 'Abrir arquivo',
\t\t\t'ntfreload'   : 'Recarregar conteudo da pasta',
\t\t\t'ntfmkdir'    : 'Criar diretório',
\t\t\t'ntfmkfile'   : 'Criar arquivos',
\t\t\t'ntfrm'       : 'Deletar arquivos',
\t\t\t'ntfcopy'     : 'Copiar arquivos',
\t\t\t'ntfmove'     : 'Mover arquivos',
\t\t\t'ntfprepare'  : 'Preparando para copiar arquivos',
\t\t\t'ntfrename'   : 'Renomear arquivos',
\t\t\t'ntfupload'   : 'Subindo os arquivos',
\t\t\t'ntfdownload' : 'Baixando os arquivos',
\t\t\t'ntfsave'     : 'Salvando os arquivos',
\t\t\t'ntfarchive'  : 'Criando os arquivos',
\t\t\t'ntfextract'  : 'Extraindo arquivos compactados',
\t\t\t'ntfsearch'   : 'Procurando arquivos',
\t\t\t'ntfresize'   : 'Redimensionando imagens',
\t\t\t'ntfsmth'     : 'Fazendo alguma coisa',
\t\t\t'ntfloadimg'  : 'Carregando Imagem',
\t\t\t'ntfnetmount' : 'Montando unidade de rede', // added 18.04.2012
\t\t\t'ntfnetunmount': 'Desmontando unidade de rede', // from v2.1 added 30.04.2012
\t\t\t'ntfdim'      : 'Adquirindo dimensão da imagem', // added 20.05.2013
\t\t\t'ntfreaddir'  : 'Lendo informações da pasta', // from v2.1 added 01.07.2013
\t\t\t'ntfurl'      : 'Recebendo URL do link', // from v2.1 added 11.03.2014
\t\t\t'ntfchmod'    : 'Alterando permissões do arquivo', // from v2.1 added 20.6.2015
\t\t\t'ntfpreupload': 'Verificando o nome do arquivo de upload', // from v2.1 added 31.11.2015
\t\t\t'ntfzipdl'    : 'Criando um arquivo para download', // from v2.1.7 added 23.1.2016
\t\t\t'ntfparents'  : 'Obtendo informações do caminho', // from v2.1.17 added 2.11.2016
\t\t\t'ntfchunkmerge': 'Processando o arquivo carregado', // from v2.1.17 added 2.11.2016
\t\t\t'ntftrash'    : 'Movendo para a lixeira', // from v2.1.24 added 2.5.2017
\t\t\t'ntfrestore'  : 'Restaurando da lixeira', // from v2.1.24 added 3.5.2017
\t\t\t'ntfchkdir'   : 'Verificando a pasta de destino', // from v2.1.24 added 3.5.2017
\t\t\t'ntfundo'     : 'Desfazendo a operação anterior', // from v2.1.27 added 31.07.2017
\t\t\t'ntfredo'     : 'Refazendo o desfazer anterior', // from v2.1.27 added 31.07.2017
\t\t\t'ntfchkcontent' : 'Verificando conteúdos', // from v2.1.41 added 3.8.2018

\t\t\t/*********************************** volumes *********************************/
\t\t\t'volume_Trash' : 'Lixo', //from v2.1.24 added 29.4.2017

\t\t\t/************************************ dates **********************************/
\t\t\t'dateUnknown' : 'Desconhecido',
\t\t\t'Today'       : 'Hoje',
\t\t\t'Yesterday'   : 'Ontem',
\t\t\t'msJan'       : 'Jan',
\t\t\t'msFeb'       : 'Fev',
\t\t\t'msMar'       : 'Mar',
\t\t\t'msApr'       : 'Abr',
\t\t\t'msMay'       : 'Mai',
\t\t\t'msJun'       : 'Jun',
\t\t\t'msJul'       : 'Jul',
\t\t\t'msAug'       : 'Ago',
\t\t\t'msSep'       : 'Set',
\t\t\t'msOct'       : 'Out',
\t\t\t'msNov'       : 'Nov',
\t\t\t'msDec'       : 'Dez',
\t\t\t'January'     : 'Janeiro',
\t\t\t'February'    : 'Fevereiro',
\t\t\t'March'       : 'Março',
\t\t\t'April'       : 'Abril',
\t\t\t'May'         : 'Maio',
\t\t\t'June'        : 'Junho',
\t\t\t'July'        : 'Julho',
\t\t\t'August'      : 'Agosto',
\t\t\t'September'   : 'Setembro',
\t\t\t'October'     : 'Outubro',
\t\t\t'November'    : 'Novembro',
\t\t\t'December'    : 'Dezembro',
\t\t\t'Sunday'      : 'Domingo',
\t\t\t'Monday'      : 'Segunda-feira',
\t\t\t'Tuesday'     : 'Terça-feira',
\t\t\t'Wednesday'   : 'Quarta-feira',
\t\t\t'Thursday'    : 'Quinta-feira',
\t\t\t'Friday'      : 'Sexta-feira',
\t\t\t'Saturday'    : 'Sábado',
\t\t\t'Sun'         : 'Dom',
\t\t\t'Mon'         : 'Seg',
\t\t\t'Tue'         : 'Ter',
\t\t\t'Wed'         : 'Qua',
\t\t\t'Thu'         : 'Qui',
\t\t\t'Fri'         : 'Sex',
\t\t\t'Sat'         : 'Sáb',

\t\t\t/******************************** sort variants ********************************/
\t\t\t'sortname'          : 'por nome',
\t\t\t'sortkind'          : 'por tipo',
\t\t\t'sortsize'          : 'por tam.',
\t\t\t'sortdate'          : 'por data',
\t\t\t'sortFoldersFirst'  : 'Pastas primeiro',
\t\t\t'sortperm'          : 'Com permissão', // from v2.1.13 added 13.06.2016
\t\t\t'sortmode'          : 'Por modo',       // from v2.1.13 added 13.06.2016
\t\t\t'sortowner'         : 'Por proprietário',      // from v2.1.13 added 13.06.2016
\t\t\t'sortgroup'         : 'Por grupo',      // from v2.1.13 added 13.06.2016
\t\t\t'sortAlsoTreeview'  : 'Vizualizar em árvore',  // from v2.1.15 added 01.08.2016

\t\t\t/********************************** new items **********************************/
\t\t\t'untitled file.txt' : 'NovoArquivo.txt', // added 10.11.2015
\t\t\t'untitled folder'   : 'NovaPasta',   // added 10.11.2015
\t\t\t'Archive'           : 'NovoArquivo',  // from v2.1 added 10.11.2015
\t\t\t'untitled file'     : 'NovoArquivo.\$1',  // from v2.1.41 added 6.8.2018
\t\t\t'extentionfile'     : '\$1: Arquivo',    // from v2.1.41 added 6.8.2018
\t\t\t'extentiontype'     : '\$1: \$2',      // from v2.1.43 added 17.10.2018

\t\t\t/********************************** messages **********************************/
\t\t\t'confirmReq'      : 'Confirmação requerida',
\t\t\t'confirmRm'       : 'Você tem certeza que deseja remover os arquivos?<br />Isto não pode ser desfeito!',
\t\t\t'confirmRepl'     : 'Substituir arquivo velho com este novo?',
\t\t\t'confirmRest'     : 'Substituir o item existente pelo item na lixeira?', // fromv2.1.24 added 5.5.2017
\t\t\t'confirmConvUTF8' : 'Não está em UTF-8<br/>Converter para UTF-8?<br/>Conteúdo se torna UTF-8 após salvar as conversões.', // from v2.1 added 08.04.2014
\t\t\t'confirmNonUTF8'  : 'Não foi possível detectar a codificação de caracteres deste arquivo. Ele precisa ser convertido temporariamente em UTF-8 para edição. Por favor, selecione a codificação de caracteres deste arquivo.', // from v2.1.19 added 28.11.2016
\t\t\t'confirmNotSave'  : 'Isto foi modificado.<br/>Você vai perder seu trabalho caso não salve as mudanças.', // from v2.1 added 15.7.2015
\t\t\t'confirmTrash'    : 'Tem certeza de que deseja mover itens para a lixeira?', //from v2.1.24 added 29.4.2017
\t\t\t'confirmMove'     : 'Tem certeza de que deseja mover itens para \"\$1\"?', //from v2.1.50 added 27.7.2019
\t\t\t'apllyAll'        : 'Aplicar a todos',
\t\t\t'name'            : 'Nome',
\t\t\t'size'            : 'Tamanho',
\t\t\t'perms'           : 'Permissões',
\t\t\t'modify'          : 'Modificado',
\t\t\t'kind'            : 'Tipo',
\t\t\t'read'            : 'Ler',
\t\t\t'write'           : 'Escrever',
\t\t\t'noaccess'        : 'Inacessível',
\t\t\t'and'             : 'e',
\t\t\t'unknown'         : 'Desconhecido',
\t\t\t'selectall'       : 'Selecionar todos arquivos',
\t\t\t'selectfiles'     : 'Selecionar arquivo(s)',
\t\t\t'selectffile'     : 'Selecionar primeiro arquivo',
\t\t\t'selectlfile'     : 'Slecionar último arquivo',
\t\t\t'viewlist'        : 'Exibir como lista',
\t\t\t'viewicons'       : 'Exibir como ícones',
\t\t\t'viewSmall'       : 'Ícones pequenos', // from v2.1.39 added 22.5.2018
\t\t\t'viewMedium'      : 'Ícones médios', // from v2.1.39 added 22.5.2018
\t\t\t'viewLarge'       : 'Ícones grandes', // from v2.1.39 added 22.5.2018
\t\t\t'viewExtraLarge'  : 'Ícones gigantes', // from v2.1.39 added 22.5.2018
\t\t\t'places'          : 'Lugares',
\t\t\t'calc'            : 'Calcular',
\t\t\t'path'            : 'Caminho',
\t\t\t'aliasfor'        : 'Alias para',
\t\t\t'locked'          : 'Bloqueado',
\t\t\t'dim'             : 'Dimesões',
\t\t\t'files'           : 'Arquivos',
\t\t\t'folders'         : 'Pastas',
\t\t\t'items'           : 'Itens',
\t\t\t'yes'             : 'sim',
\t\t\t'no'              : 'não',
\t\t\t'link'            : 'Link',
\t\t\t'searcresult'     : 'Resultados da pesquisa',
\t\t\t'selected'        : 'itens selecionados',
\t\t\t'about'           : 'Sobre',
\t\t\t'shortcuts'       : 'Atalhos',
\t\t\t'help'            : 'Ajuda',
\t\t\t'webfm'           : 'Gerenciador de arquivos web',
\t\t\t'ver'             : 'Versão',
\t\t\t'protocolver'     : 'Versão do protocolo',
\t\t\t'homepage'        : 'Home do projeto',
\t\t\t'docs'            : 'Documentação',
\t\t\t'github'          : 'Fork us on Github',
\t\t\t'twitter'         : 'Siga-nos no twitter',
\t\t\t'facebook'        : 'Junte-se a nós no Facebook',
\t\t\t'team'            : 'Time',
\t\t\t'chiefdev'        : 'Desenvolvedor chefe',
\t\t\t'developer'       : 'Desenvolvedor',
\t\t\t'contributor'     : 'Contribuinte',
\t\t\t'maintainer'      : 'Mantenedor',
\t\t\t'translator'      : 'Tradutor',
\t\t\t'icons'           : 'Ícones',
\t\t\t'dontforget'      : 'e não se esqueça de levar a sua toalha',
\t\t\t'shortcutsof'     : 'Atalhos desabilitados',
\t\t\t'dropFiles'       : 'Solte os arquivos aqui',
\t\t\t'or'              : 'ou',
\t\t\t'selectForUpload' : 'Selecione arquivos para upload',
\t\t\t'moveFiles'       : 'Mover arquivos',
\t\t\t'copyFiles'       : 'Copiar arquivos',
\t\t\t'restoreFiles'    : 'Restaurar itens', // from v2.1.24 added 5.5.2017
\t\t\t'rmFromPlaces'    : 'Remover de Lugares',
\t\t\t'aspectRatio'     : 'Manter aspecto',
\t\t\t'scale'           : 'Tamanho',
\t\t\t'width'           : 'Largura',
\t\t\t'height'          : 'Altura',
\t\t\t'resize'          : 'Redimencionar',
\t\t\t'crop'            : 'Cortar',
\t\t\t'rotate'          : 'Rotacionar',
\t\t\t'rotate-cw'       : 'Girar 90 graus CW',
\t\t\t'rotate-ccw'      : 'Girar 90 graus CCW',
\t\t\t'degree'          : '°',
\t\t\t'netMountDialogTitle' : 'Montar Unidade de rede', // added 18.04.2012
\t\t\t'protocol'            : 'Protocolo', // added 18.04.2012
\t\t\t'host'                : 'Servidor', // added 18.04.2012
\t\t\t'port'                : 'Porta', // added 18.04.2012
\t\t\t'user'                : 'Usuário', // added 18.04.2012
\t\t\t'pass'                : 'Senha', // added 18.04.2012
\t\t\t'confirmUnmount'      : 'Deseja desmontar \$1?',  // from v2.1 added 30.04.2012
\t\t\t'dropFilesBrowser': 'Soltar ou colar arquivos do navegador', // from v2.1 added 30.05.2012
\t\t\t'dropPasteFiles'  : 'Solte ou cole arquivos aqui', // from v2.1 added 07.04.2014
\t\t\t'encoding'        : 'Codificação', // from v2.1 added 19.12.2014
\t\t\t'locale'          : 'Local',   // from v2.1 added 19.12.2014
\t\t\t'searchTarget'    : 'Alvo: \$1',                // from v2.1 added 22.5.2015
\t\t\t'searchMime'      : 'Perquisar por input MIME Type', // from v2.1 added 22.5.2015
\t\t\t'owner'           : 'Dono', // from v2.1 added 20.6.2015
\t\t\t'group'           : 'Grupo', // from v2.1 added 20.6.2015
\t\t\t'other'           : 'Outro', // from v2.1 added 20.6.2015
\t\t\t'execute'         : 'Executar', // from v2.1 added 20.6.2015
\t\t\t'perm'            : 'Permissão', // from v2.1 added 20.6.2015
\t\t\t'mode'            : 'Modo', // from v2.1 added 20.6.2015
\t\t\t'emptyFolder'     : 'Pasta vazia', // from v2.1.6 added 30.12.2015
\t\t\t'emptyFolderDrop' : 'Pasta vazia\\\\A Arraste itens para os adicionar', // from v2.1.6 added 30.12.2015
\t\t\t'emptyFolderLTap' : 'Pasta vazia\\\\A De um toque longo para adicionar itens', // from v2.1.6 added 30.12.2015
\t\t\t'quality'         : 'Qualidade', // from v2.1.6 added 5.1.2016
\t\t\t'autoSync'        : 'Auto sincronização',  // from v2.1.6 added 10.1.2016
\t\t\t'moveUp'          : 'Mover para cima',  // from v2.1.6 added 18.1.2016
\t\t\t'getLink'         : 'Obter link', // from v2.1.7 added 9.2.2016
\t\t\t'selectedItems'   : 'Itens selecionados (\$1)', // from v2.1.7 added 2.19.2016
\t\t\t'folderId'        : 'ID da pasta', // from v2.1.10 added 3.25.2016
\t\t\t'offlineAccess'   : 'Permitir acesso offline', // from v2.1.10 added 3.25.2016
\t\t\t'reAuth'          : 'Se autenticar novamente', // from v2.1.10 added 3.25.2016
\t\t\t'nowLoading'      : 'Carregando...', // from v2.1.12 added 4.26.2016
\t\t\t'openMulti'       : 'Abrir múltiplos arquivos', // from v2.1.12 added 5.14.2016
\t\t\t'openMultiConfirm': 'Você está tentando abrir os arquivos \$1. Tem certeza de que deseja abrir no navegador?', // from v2.1.12 added 5.14.2016
\t\t\t'emptySearch'     : 'Os resultados da pesquisa estão vazios no destino da pesquisa.', // from v2.1.12 added 5.16.2016
\t\t\t'editingFile'     : 'Arquivo sendo editado.', // from v2.1.13 added 6.3.2016
\t\t\t'hasSelected'     : 'Voce selecionou \$1 itens.', // from v2.1.13 added 6.3.2016
\t\t\t'hasClipboard'    : 'Você tem \$1 itens na área de transferência.', // from v2.1.13 added 6.3.2016
\t\t\t'incSearchOnly'   : 'A pesquisa incremental é apenas da visualização atual.', // from v2.1.13 added 6.30.2016
\t\t\t'reinstate'       : 'Restabelecer', // from v2.1.15 added 3.8.2016
\t\t\t'complete'        : '\$1 completo', // from v2.1.15 added 21.8.2016
\t\t\t'contextmenu'     : 'Menu contextual', // from v2.1.15 added 9.9.2016
\t\t\t'pageTurning'     : 'Virar página', // from v2.1.15 added 10.9.2016
\t\t\t'volumeRoots'     : 'Raízes de volume', // from v2.1.16 added 16.9.2016
\t\t\t'reset'           : 'Resetar', // from v2.1.16 added 1.10.2016
\t\t\t'bgcolor'         : 'Cor de fundo', // from v2.1.16 added 1.10.2016
\t\t\t'colorPicker'     : 'Seletor de cores', // from v2.1.16 added 1.10.2016
\t\t\t'8pxgrid'         : 'Grade 8px', // from v2.1.16 added 4.10.2016
\t\t\t'enabled'         : 'Ativado', // from v2.1.16 added 4.10.2016
\t\t\t'disabled'        : 'Desativado', // from v2.1.16 added 4.10.2016
\t\t\t'emptyIncSearch'  : 'Os resultados da pesquisa estão vazios na exibição atual.\\\\APressione [Enter] para expandir o alvo da pesquisa.', // from v2.1.16 added 5.10.2016
\t\t\t'emptyLetSearch'  : 'Os resultados da pesquisa da primeira letra estão vazios na exibição atual.', // from v2.1.23 added 24.3.2017
\t\t\t'textLabel'       : 'Texto do rótulo', // from v2.1.17 added 13.10.2016
\t\t\t'minsLeft'        : '\$1 minutos restantes', // from v2.1.17 added 13.11.2016
\t\t\t'openAsEncoding'  : 'Reabrir com a codificação selecionada', // from v2.1.19 added 2.12.2016
\t\t\t'saveAsEncoding'  : 'Salvar com a codificação selecionada', // from v2.1.19 added 2.12.2016
\t\t\t'selectFolder'    : 'Selecione a pasta', // from v2.1.20 added 13.12.2016
\t\t\t'firstLetterSearch': 'Buscar primeira letra', // from v2.1.23 added 24.3.2017
\t\t\t'presets'         : 'Predefinições', // from v2.1.25 added 26.5.2017
\t\t\t'tooManyToTrash'  : 'São muitos itens, portanto não podem ser jogados no lixo.', // from v2.1.25 added 9.6.2017
\t\t\t'TextArea'        : 'TextArea', // from v2.1.25 added 14.6.2017
\t\t\t'folderToEmpty'   : 'Esvaziar a pasta \"\$1\".', // from v2.1.25 added 22.6.2017
\t\t\t'filderIsEmpty'   : 'Não há itens em uma pasta \"\$1\".', // from v2.1.25 added 22.6.2017
\t\t\t'preference'      : 'Preferência', // from v2.1.26 added 28.6.2017
\t\t\t'language'        : 'Língua', // from v2.1.26 added 28.6.2017
\t\t\t'clearBrowserData': 'Inicialize as configurações salvas neste navegador', // from v2.1.26 added 28.6.2017
\t\t\t'toolbarPref'     : 'Barra de ferramentas', // from v2.1.27 added 2.8.2017
\t\t\t'charsLeft'       : '... \$1 caracteres restantes.',  // from v2.1.29 added 30.8.2017
\t\t\t'sum'             : 'Somar', // from v2.1.29 added 28.9.2017
\t\t\t'roughFileSize'   : 'Tamanho aproximado do arquivo', // from v2.1.30 added 2.11.2017
\t\t\t'autoFocusDialog' : 'Focar no elemento do diálogo com o mouse por cima',  // from v2.1.30 added 2.11.2017
\t\t\t'select'          : 'Selecione', // from v2.1.30 added 23.11.2017
\t\t\t'selectAction'    : 'Ação ao selecionar arquivo', // from v2.1.30 added 23.11.2017
\t\t\t'useStoredEditor' : 'Abrir com o editor usado pela última vez', // from v2.1.30 added 23.11.2017
\t\t\t'selectinvert'    : 'Inverter seleção', // from v2.1.30 added 25.11.2017
\t\t\t'renameMultiple'  : 'Tem certeza de que deseja renomear \$1 itens selecionados como \$2?<br/>Isto não poderá ser desfeito!', // from v2.1.31 added 4.12.2017
\t\t\t'batchRename'     : 'Renomear Batch', // from v2.1.31 added 8.12.2017
\t\t\t'plusNumber'      : '+ Número', // from v2.1.31 added 8.12.2017
\t\t\t'asPrefix'        : 'Adicionar prefixo', // from v2.1.31 added 8.12.2017
\t\t\t'asSuffix'        : 'Adicionar sufixo', // from v2.1.31 added 8.12.2017
\t\t\t'changeExtention' : 'Alterar extensão', // from v2.1.31 added 8.12.2017
\t\t\t'columnPref'      : 'Configurações de colunas (exibição em lista)', // from v2.1.32 added 6.2.2018
\t\t\t'reflectOnImmediate' : 'Todas as alterações serão refletidas imediatamente no arquivo.', // from v2.1.33 added 2.3.2018
\t\t\t'reflectOnUnmount'   : 'Quaisquer alterações não serão refletidas até desmontar este volume.', // from v2.1.33 added 2.3.2018
\t\t\t'unmountChildren' : 'O(s) seguinte(s) volume(s) montado neste volume também desmontado. Você tem certeza que quer desmontá-lo(s)?', // from v2.1.33 added 5.3.2018
\t\t\t'selectionInfo'   : 'Informações da seleção', // from v2.1.33 added 7.3.2018
\t\t\t'hashChecker'     : 'Algoritmos para mostrar o hash do arquivo', // from v2.1.33 added 10.3.2018
\t\t\t'infoItems'       : 'Itens de informação (painel Informações de seleção)', // from v2.1.38 added 28.3.2018
\t\t\t'pressAgainToExit': 'Pressione novamente para sair.', // from v2.1.38 added 1.4.2018
\t\t\t'toolbar'         : 'Barra de ferramentas', // from v2.1.38 added 4.4.2018
\t\t\t'workspace'       : 'Área de trabalho', // from v2.1.38 added 4.4.2018
\t\t\t'dialog'          : 'Diálogo', // from v2.1.38 added 4.4.2018
\t\t\t'all'             : 'Tudo', // from v2.1.38 added 4.4.2018
\t\t\t'iconSize'        : 'Tamanho do ícone (Visualização de ícones)', // from v2.1.39 added 7.5.2018
\t\t\t'editorMaximized' : 'Abra a janela maximizada do editor', // from v2.1.40 added 30.6.2018
\t\t\t'editorConvNoApi' : 'Como a conversão por API não está disponível no momento, faça a conversão no site.', //from v2.1.40 added 8.7.2018
\t\t\t'editorConvNeedUpload' : 'Após a conversão, você deve fazer o upload com o URL do item ou um arquivo baixado para salvar o arquivo convertido.', //from v2.1.40 added 8.7.2018
\t\t\t'convertOn'       : 'Converter no site \$1', // from v2.1.40 added 10.7.2018
\t\t\t'integrations'    : 'Integrações', // from v2.1.40 added 11.7.2018
\t\t\t'integrationWith' : 'Este elFinder possui os seguintes serviços externos integrados. Por favor, verifique os termos de uso, política de privacidade, etc. antes de usá-lo.', // from v2.1.40 added 11.7.2018
\t\t\t'showHidden'      : 'Mostrar itens ocultos', // from v2.1.41 added 24.7.2018
\t\t\t'hideHidden'      : 'Ocultar itens ocultos', // from v2.1.41 added 24.7.2018
\t\t\t'toggleHidden'    : 'Mostrar/Ocultar itens ocultos', // from v2.1.41 added 24.7.2018
\t\t\t'makefileTypes'   : 'Tipos de arquivo para ativar com \"Novo arquivo\"', // from v2.1.41 added 7.8.2018
\t\t\t'typeOfTextfile'  : 'Tipo do arquivo de texto', // from v2.1.41 added 7.8.2018
\t\t\t'add'             : 'Adicionar', // from v2.1.41 added 7.8.2018
\t\t\t'theme'           : 'Tema', // from v2.1.43 added 19.10.2018
\t\t\t'default'         : 'Padrão', // from v2.1.43 added 19.10.2018
\t\t\t'description'     : 'Descrição', // from v2.1.43 added 19.10.2018
\t\t\t'website'         : 'Site da internet', // from v2.1.43 added 19.10.2018
\t\t\t'author'          : 'Autor', // from v2.1.43 added 19.10.2018
\t\t\t'email'           : 'Email', // from v2.1.43 added 19.10.2018
\t\t\t'license'         : 'Licença', // from v2.1.43 added 19.10.2018
\t\t\t'exportToSave'    : 'Este item não pode ser salvo. Para evitar perder as edições, você precisa exportar para o seu PC.', // from v2.1.44 added 1.12.2018
\t\t\t'dblclickToSelect': 'Clique duas vezes no arquivo para selecioná-lo.', // from v2.1.47 added 22.1.2019
\t\t\t'useFullscreen'   : 'Usar o modo de tela cheia', // from v2.1.47 added 19.2.2019

\t\t\t/********************************** mimetypes **********************************/
\t\t\t'kindUnknown'     : 'Desconhecio',
\t\t\t'kindRoot'        : 'Raiz do volume', // from v2.1.16 added 16.10.2016
\t\t\t'kindFolder'      : 'Pasta',
\t\t\t'kindSelects'     : 'Seleções', // from v2.1.29 added 29.8.2017
\t\t\t'kindAlias'       : 'Alias',
\t\t\t'kindAliasBroken' : 'Alias inválido',
\t\t\t// applications
\t\t\t'kindApp'         : 'Aplicação',
\t\t\t'kindPostscript'  : 'Documento Postscript',
\t\t\t'kindMsOffice'    : 'Documento Microsoft Office',
\t\t\t'kindMsWord'      : 'Documento Microsoft Word',
\t\t\t'kindMsExcel'     : 'Documento Microsoft Excel',
\t\t\t'kindMsPP'        : 'Apresentação Microsoft Powerpoint',
\t\t\t'kindOO'          : 'Documento Open Office',
\t\t\t'kindAppFlash'    : 'Aplicação Flash',
\t\t\t'kindPDF'         : 'Formato de Documento Portátil (PDF)',
\t\t\t'kindTorrent'     : 'Arquivo Bittorrent',
\t\t\t'kind7z'          : 'Arquivo 7z',
\t\t\t'kindTAR'         : 'Arquivo TAR',
\t\t\t'kindGZIP'        : 'Arquivo GZIP',
\t\t\t'kindBZIP'        : 'Arquivo BZIP',
\t\t\t'kindXZ'          : 'Arquivo XZ',
\t\t\t'kindZIP'         : 'Arquivo ZIP',
\t\t\t'kindRAR'         : 'Arquivo RAR',
\t\t\t'kindJAR'         : 'Arquivo JAR',
\t\t\t'kindTTF'         : 'Tipo verdadeiro da fonte',
\t\t\t'kindOTF'         : 'Abrir tipo de fonte',
\t\t\t'kindRPM'         : 'Pacote RPM',
\t\t\t// texts
\t\t\t'kindText'        : 'Arquivo de texto',
\t\t\t'kindTextPlain'   : 'Texto simples',
\t\t\t'kindPHP'         : 'PHP',
\t\t\t'kindCSS'         : 'CSS',
\t\t\t'kindHTML'        : 'Documento HTML',
\t\t\t'kindJS'          : 'Javascript',
\t\t\t'kindRTF'         : 'Formato Rich Text',
\t\t\t'kindC'           : 'C',
\t\t\t'kindCHeader'     : 'C cabeçalho',
\t\t\t'kindCPP'         : 'C++',
\t\t\t'kindCPPHeader'   : 'C++ cabeçalho',
\t\t\t'kindShell'       : 'Unix shell script',
\t\t\t'kindPython'      : 'Python',
\t\t\t'kindJava'        : 'Java',
\t\t\t'kindRuby'        : 'Ruby',
\t\t\t'kindPerl'        : 'Perl',
\t\t\t'kindSQL'         : 'SQL',
\t\t\t'kindXML'         : 'Documento XML',
\t\t\t'kindAWK'         : 'AWK',
\t\t\t'kindCSV'         : 'Valores separados por vírgula',
\t\t\t'kindDOCBOOK'     : 'Documento Docbook XML',
\t\t\t'kindMarkdown'    : 'Texto Markdown', // added 20.7.2015
\t\t\t// images
\t\t\t'kindImage'       : 'Imagem',
\t\t\t'kindBMP'         : 'Imagem BMP',
\t\t\t'kindJPEG'        : 'Imagem JPEG',
\t\t\t'kindGIF'         : 'Imagem GIF',
\t\t\t'kindPNG'         : 'Imagem PNG',
\t\t\t'kindTIFF'        : 'Imagem TIFF',
\t\t\t'kindTGA'         : 'Imagem TGA',
\t\t\t'kindPSD'         : 'Imagem Adobe Photoshop',
\t\t\t'kindXBITMAP'     : 'Imagem X bitmap',
\t\t\t'kindPXM'         : 'Imagem Pixelmator',
\t\t\t// media
\t\t\t'kindAudio'       : 'Arquivo de audio',
\t\t\t'kindAudioMPEG'   : 'Audio MPEG',
\t\t\t'kindAudioMPEG4'  : 'Audio MPEG-4',
\t\t\t'kindAudioMIDI'   : 'Audio MIDI',
\t\t\t'kindAudioOGG'    : 'Audio Ogg Vorbis',
\t\t\t'kindAudioWAV'    : 'Audio WAV',
\t\t\t'AudioPlaylist'   : 'Lista de reprodução MP3 ',
\t\t\t'kindVideo'       : 'Arquivo de video',
\t\t\t'kindVideoDV'     : 'DV filme',
\t\t\t'kindVideoMPEG'   : 'Video MPEG',
\t\t\t'kindVideoMPEG4'  : 'Video MPEG-4',
\t\t\t'kindVideoAVI'    : 'Video AVI',
\t\t\t'kindVideoMOV'    : 'Filme rápido',
\t\t\t'kindVideoWM'     : 'Video Windows Media',
\t\t\t'kindVideoFlash'  : 'Video Flash',
\t\t\t'kindVideoMKV'    : 'MKV',
\t\t\t'kindVideoOGG'    : 'Video Ogg'
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
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.pt_BR.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.pt_BR.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/elfinder/dist/js/i18n/elfinder.pt_BR.js");
    }
}
