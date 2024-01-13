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

/* @bundles/CoreBundle/Tests/Fixtures/releases.json */
class __TwigTemplate_59bd4634ee1498cd0deb8b0ce32c09252a80ffc8cea9aa46b1b682d42d5dea7b extends Template
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
        echo "[
    {
      \"url\": \"https://api.github.com/repos/mautic/mautic/releases/53407206\",
      \"assets_url\": \"https://api.github.com/repos/mautic/mautic/releases/53407206/assets\",
      \"upload_url\": \"https://uploads.github.com/repos/mautic/mautic/releases/53407206/assets{?name,label}\",
      \"html_url\": \"https://github.com/mautic/mautic/releases/tag/4.0.2\",
      \"id\": 53407206,
      \"author\": {
        \"login\": \"github-actions[bot]\",
        \"id\": 41898282,
        \"node_id\": \"MDM6Qm90NDE4OTgyODI=\",
        \"avatar_url\": \"https://avatars.githubusercontent.com/in/15368?v=4\",
        \"gravatar_id\": \"\",
        \"url\": \"https://api.github.com/users/github-actions%5Bbot%5D\",
        \"html_url\": \"https://github.com/apps/github-actions\",
        \"followers_url\": \"https://api.github.com/users/github-actions%5Bbot%5D/followers\",
        \"following_url\": \"https://api.github.com/users/github-actions%5Bbot%5D/following{/other_user}\",
        \"gists_url\": \"https://api.github.com/users/github-actions%5Bbot%5D/gists{/gist_id}\",
        \"starred_url\": \"https://api.github.com/users/github-actions%5Bbot%5D/starred{/owner}{/repo}\",
        \"subscriptions_url\": \"https://api.github.com/users/github-actions%5Bbot%5D/subscriptions\",
        \"organizations_url\": \"https://api.github.com/users/github-actions%5Bbot%5D/orgs\",
        \"repos_url\": \"https://api.github.com/users/github-actions%5Bbot%5D/repos\",
        \"events_url\": \"https://api.github.com/users/github-actions%5Bbot%5D/events{/privacy}\",
        \"received_events_url\": \"https://api.github.com/users/github-actions%5Bbot%5D/received_events\",
        \"type\": \"Bot\",
        \"site_admin\": false
      },
      \"node_id\": \"RE_kwDOALo4c84DLu3m\",
      \"tag_name\": \"4.0.2\",
      \"target_commitish\": \"99450ca7a9f66f30b130c16fff0b0547538c403e\",
      \"name\": \"Mautic Community 4.0.2\",
      \"draft\": false,
      \"prerelease\": false,
      \"created_at\": \"2021-11-15T17:09:23Z\",
      \"published_at\": \"2021-11-15T17:20:10Z\",
      \"assets\": [
        {
          \"url\": \"https://api.github.com/repos/mautic/mautic/releases/assets/49483172\",
          \"id\": 49483172,
          \"node_id\": \"RA_kwDOALo4c84C8w2k\",
          \"name\": \"4.0.2-update.zip\",
          \"label\": \"\",
          \"uploader\": {
            \"login\": \"github-actions[bot]\",
            \"id\": 41898282,
            \"node_id\": \"MDM6Qm90NDE4OTgyODI=\",
            \"avatar_url\": \"https://avatars.githubusercontent.com/in/15368?v=4\",
            \"gravatar_id\": \"\",
            \"url\": \"https://api.github.com/users/github-actions%5Bbot%5D\",
            \"html_url\": \"https://github.com/apps/github-actions\",
            \"followers_url\": \"https://api.github.com/users/github-actions%5Bbot%5D/followers\",
            \"following_url\": \"https://api.github.com/users/github-actions%5Bbot%5D/following{/other_user}\",
            \"gists_url\": \"https://api.github.com/users/github-actions%5Bbot%5D/gists{/gist_id}\",
            \"starred_url\": \"https://api.github.com/users/github-actions%5Bbot%5D/starred{/owner}{/repo}\",
            \"subscriptions_url\": \"https://api.github.com/users/github-actions%5Bbot%5D/subscriptions\",
            \"organizations_url\": \"https://api.github.com/users/github-actions%5Bbot%5D/orgs\",
            \"repos_url\": \"https://api.github.com/users/github-actions%5Bbot%5D/repos\",
            \"events_url\": \"https://api.github.com/users/github-actions%5Bbot%5D/events{/privacy}\",
            \"received_events_url\": \"https://api.github.com/users/github-actions%5Bbot%5D/received_events\",
            \"type\": \"Bot\",
            \"site_admin\": false
          },
          \"content_type\": \"application/zip\",
          \"state\": \"uploaded\",
          \"size\": 72992870,
          \"download_count\": 1143,
          \"created_at\": \"2021-11-15T17:13:25Z\",
          \"updated_at\": \"2021-11-15T17:13:27Z\",
          \"browser_download_url\": \"https://github.com/mautic/mautic/releases/download/4.0.2/4.0.2-update.zip\"
        },
        {
          \"url\": \"https://api.github.com/repos/mautic/mautic/releases/assets/49483169\",
          \"id\": 49483169,
          \"node_id\": \"RA_kwDOALo4c84C8w2h\",
          \"name\": \"4.0.2.zip\",
          \"label\": \"\",
          \"uploader\": {
            \"login\": \"github-actions[bot]\",
            \"id\": 41898282,
            \"node_id\": \"MDM6Qm90NDE4OTgyODI=\",
            \"avatar_url\": \"https://avatars.githubusercontent.com/in/15368?v=4\",
            \"gravatar_id\": \"\",
            \"url\": \"https://api.github.com/users/github-actions%5Bbot%5D\",
            \"html_url\": \"https://github.com/apps/github-actions\",
            \"followers_url\": \"https://api.github.com/users/github-actions%5Bbot%5D/followers\",
            \"following_url\": \"https://api.github.com/users/github-actions%5Bbot%5D/following{/other_user}\",
            \"gists_url\": \"https://api.github.com/users/github-actions%5Bbot%5D/gists{/gist_id}\",
            \"starred_url\": \"https://api.github.com/users/github-actions%5Bbot%5D/starred{/owner}{/repo}\",
            \"subscriptions_url\": \"https://api.github.com/users/github-actions%5Bbot%5D/subscriptions\",
            \"organizations_url\": \"https://api.github.com/users/github-actions%5Bbot%5D/orgs\",
            \"repos_url\": \"https://api.github.com/users/github-actions%5Bbot%5D/repos\",
            \"events_url\": \"https://api.github.com/users/github-actions%5Bbot%5D/events{/privacy}\",
            \"received_events_url\": \"https://api.github.com/users/github-actions%5Bbot%5D/received_events\",
            \"type\": \"Bot\",
            \"site_admin\": false
          },
          \"content_type\": \"application/zip\",
          \"state\": \"uploaded\",
          \"size\": 73474722,
          \"download_count\": 345,
          \"created_at\": \"2021-11-15T17:13:20Z\",
          \"updated_at\": \"2021-11-15T17:13:24Z\",
          \"browser_download_url\": \"https://github.com/mautic/mautic/releases/download/4.0.2/4.0.2.zip\"
        }
      ],
      \"tarball_url\": \"https://api.github.com/repos/mautic/mautic/tarball/4.0.2\",
      \"zipball_url\": \"https://api.github.com/repos/mautic/mautic/zipball/4.0.2\",
      \"body\": \"## Bugs 🐞 \\r\\n\\r\\n- Fixed mautic:unusedip:delete [#10589](https://github.com/mautic/mautic/pull/10589) [#10536](https://github.com/mautic/mautic/pull/10536)\\r\\n- Fix Amazon SES API transport multiple unsubscribe header using send immediately [#10557](https://github.com/mautic/mautic/pull/10557)\\r\\n- Fix sync salesforce if company has name with html entity code of singlequote [#10535](https://github.com/mautic/mautic/pull/10535)\\r\\n- Do not write to console when updating segments if quiet flag is specified [#10533](https://github.com/mautic/mautic/pull/10533) [#10531](https://github.com/mautic/mautic/issues/10531)\\r\\n- Focus: hide form If we use notice type of popups  [#10527](https://github.com/mautic/mautic/pull/10527)\\r\\n- Fix email translations lost and overwritten by parent [#10525](https://github.com/mautic/mautic/pull/10525)\\r\\n- Fix salesforce sync companies even are disabled [#10497](https://github.com/mautic/mautic/pull/10497)\\r\\n- Fix Preference Center Javascript issue [#10495](https://github.com/mautic/mautic/pull/10495)\\r\\n- Fix set values from properties for state field [#10486](https://github.com/mautic/mautic/pull/10486)\\r\\n- Fix form field campaign condition with special character in value [#10470](https://github.com/mautic/mautic/pull/10470)\\r\\n- Fix Invalid clickthrough value exception [#10444](https://github.com/mautic/mautic/pull/10444)\\r\\n- Fix date range  in segments and reports does not trigger ajax request [#10421](https://github.com/mautic/mautic/pull/10421)\\r\\n- Fix Illegal Address - Enclosing sender name with double quotes [#10326](https://github.com/mautic/mautic/pull/10326)\\r\\n- Guzzle Http refactor [#10308](https://github.com/mautic/mautic/pull/10308)\\r\\n- Fix API creating tag duplicates [#10270](https://github.com/mautic/mautic/pull/10270)\\r\\n- Fix form submit messages length [#10266](https://github.com/mautic/mautic/pull/10266)\\r\\n- Fix dashboard report line graphs [#10209](https://github.com/mautic/mautic/pull/10209)\\r\\n- Fix display zero values in reports [#10167](https://github.com/mautic/mautic/pull/10167)\\r\\n- Unable to perform \\\"Change campaign\\\" Action for removing a contact from one and adding to another campaign [#10151](https://github.com/mautic/mautic/pull/10151)\\r\\n- Fix process string in contact's audit log [#10061](https://github.com/mautic/mautic/pull/10061)\\r\\n- Salesforce: Check DNC status [#9956](https://github.com/mautic/mautic/pull/9956)\\r\\n- Some winner criteria not working properly in A/B Tests [#9936](https://github.com/mautic/mautic/pull/9936)\\r\\n- Add select/multiselect to NormalizedValueDAO from internal object [#9919](https://github.com/mautic/mautic/pull/9919)\\r\\n- Fix duplicate entry for key campaign_rotation [#9639](https://github.com/mautic/mautic/pull/9639)\\r\\n- Fix campaign trigger inactive schedule decision after scheduled event [#9486](https://github.com/mautic/mautic/pull/9486)\\r\\n- Fix A new entity was found through the relationship 'Mautic\\\\LeadBundle\\\\Entity\\\\Company#owner [#9328](https://github.com/mautic/mautic/pull/9328)\\r\\n- Fix campaign membership syncing when an issue such as api limits occur [#7514](https://github.com/mautic/mautic/pull/7514)\\r\\n\\r\\n## :heart: Contributors\\r\\n\\r\\nWe'd like to thank all the contributors who worked on this release!\\r\\n\\r\\n- [@alanhartless](https://github.com/alanhartless)\\r\\n- [@alfredoct96](https://github.com/alfredoct96)\\r\\n- [@mabumusa1](https://github.com/mabumusa1)\\r\\n- [@kuzmany](https://github.com/kuzmany)\\r\\n- [@dadarya0](https://github.com/dadarya0)\\r\\n- [@giomasce](https://github.com/giomasce)\\r\\n- [@pedroegg](https://github.com/pedroegg)\\r\\n- [@patrykgruszka](https://github.com/patrykgruszka)\\r\\n- [@dennisameling](https://github.com/dennisameling)\\r\\n- [@julienWebmecanik](https://github.com/julienWebmecanik)\\r\\n- [@luguenth](https://github.com/luguenth)\\r\\n- [@ts-navghane](https://github.com/ts-navghane)\\r\\n- [@fedys](https://github.com/fedys)\\r\\n\\r\\nSHA1(4.0.2.zip)= c989ccadf14e8282d7a5e24048e696ad4b4d70ea\\r\\nSHA1(4.0.2-update.zip)= 7e9ec4dfd966eeedc8a5ce368d7be0a517ba3bec\",
      \"reactions\": {
        \"url\": \"https://api.github.com/repos/mautic/mautic/releases/53407206/reactions\",
        \"total_count\": 3,
        \"+1\": 0,
        \"-1\": 0,
        \"laugh\": 0,
        \"hooray\": 0,
        \"confused\": 0,
        \"heart\": 3,
        \"rocket\": 0,
        \"eyes\": 0
      }
    }
]";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Fixtures/releases.json";
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
        return new Source("", "@bundles/CoreBundle/Tests/Fixtures/releases.json", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Fixtures/releases.json");
    }
}