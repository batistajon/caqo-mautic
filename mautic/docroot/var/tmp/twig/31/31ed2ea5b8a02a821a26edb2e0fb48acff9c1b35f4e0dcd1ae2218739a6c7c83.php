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

/* @bundles/CoreBundle/Tests/Unit/Helper/Update/Github/json/releases.json */
class __TwigTemplate_5892aefcf656fe9480a130f1679c5e08c5b8e3171df64515dfc7a2d00bb0e2c8 extends Template
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
    \"url\": \"https://api.github.com/repos/mautic/mautic/releases/23649226\",
    \"assets_url\": \"https://api.github.com/repos/mautic/mautic/releases/23649226/assets\",
    \"upload_url\": \"https://uploads.github.com/repos/mautic/mautic/releases/23649226/assets{?name,label}\",
    \"html_url\": \"https://github.com/mautic/mautic/releases/tag/2.16.0\",
    \"id\": 23649226,
    \"node_id\": \"MDc6UmVsZWFzZTIzNjQ5MjI2\",
    \"tag_name\": \"2.16.0\",
    \"target_commitish\": \"master\",
    \"name\": \"2.16.0\",
    \"draft\": false,
    \"author\": {
      \"login\": \"dennisameling\",
      \"id\": 17739158,
      \"node_id\": \"MDQ6VXNlcjE3NzM5MTU4\",
      \"avatar_url\": \"https://avatars1.githubusercontent.com/u/17739158?v=4\",
      \"gravatar_id\": \"\",
      \"url\": \"https://api.github.com/users/dennisameling\",
      \"html_url\": \"https://github.com/dennisameling\",
      \"followers_url\": \"https://api.github.com/users/dennisameling/followers\",
      \"following_url\": \"https://api.github.com/users/dennisameling/following{/other_user}\",
      \"gists_url\": \"https://api.github.com/users/dennisameling/gists{/gist_id}\",
      \"starred_url\": \"https://api.github.com/users/dennisameling/starred{/owner}{/repo}\",
      \"subscriptions_url\": \"https://api.github.com/users/dennisameling/subscriptions\",
      \"organizations_url\": \"https://api.github.com/users/dennisameling/orgs\",
      \"repos_url\": \"https://api.github.com/users/dennisameling/repos\",
      \"events_url\": \"https://api.github.com/users/dennisameling/events{/privacy}\",
      \"received_events_url\": \"https://api.github.com/users/dennisameling/received_events\",
      \"type\": \"User\",
      \"site_admin\": false
    },
    \"prerelease\": false,
    \"created_at\": \"2020-02-13T15:33:46Z\",
    \"published_at\": \"2020-02-13T16:12:39Z\",
    \"assets\": [
      {
        \"url\": \"https://api.github.com/repos/mautic/mautic/releases/assets/18006961\",
        \"id\": 18006961,
        \"node_id\": \"MDEyOlJlbGVhc2VBc3NldDE4MDA2OTYx\",
        \"name\": \"2.16.0-update.zip\",
        \"label\": null,
        \"uploader\": {
          \"login\": \"dennisameling\",
          \"id\": 17739158,
          \"node_id\": \"MDQ6VXNlcjE3NzM5MTU4\",
          \"avatar_url\": \"https://avatars1.githubusercontent.com/u/17739158?v=4\",
          \"gravatar_id\": \"\",
          \"url\": \"https://api.github.com/users/dennisameling\",
          \"html_url\": \"https://github.com/dennisameling\",
          \"followers_url\": \"https://api.github.com/users/dennisameling/followers\",
          \"following_url\": \"https://api.github.com/users/dennisameling/following{/other_user}\",
          \"gists_url\": \"https://api.github.com/users/dennisameling/gists{/gist_id}\",
          \"starred_url\": \"https://api.github.com/users/dennisameling/starred{/owner}{/repo}\",
          \"subscriptions_url\": \"https://api.github.com/users/dennisameling/subscriptions\",
          \"organizations_url\": \"https://api.github.com/users/dennisameling/orgs\",
          \"repos_url\": \"https://api.github.com/users/dennisameling/repos\",
          \"events_url\": \"https://api.github.com/users/dennisameling/events{/privacy}\",
          \"received_events_url\": \"https://api.github.com/users/dennisameling/received_events\",
          \"type\": \"User\",
          \"site_admin\": false
        },
        \"content_type\": \"application/zip\",
        \"state\": \"uploaded\",
        \"size\": 50261186,
        \"download_count\": 935,
        \"created_at\": \"2020-02-13T15:53:53Z\",
        \"updated_at\": \"2020-02-13T15:54:39Z\",
        \"browser_download_url\": \"https://github.com/mautic/mautic/releases/download/2.16.0/2.16.0-update.zip\"
      },
      {
        \"url\": \"https://api.github.com/repos/mautic/mautic/releases/assets/18006946\",
        \"id\": 18006946,
        \"node_id\": \"MDEyOlJlbGVhc2VBc3NldDE4MDA2OTQ2\",
        \"name\": \"2.16.0.zip\",
        \"label\": null,
        \"uploader\": {
          \"login\": \"dennisameling\",
          \"id\": 17739158,
          \"node_id\": \"MDQ6VXNlcjE3NzM5MTU4\",
          \"avatar_url\": \"https://avatars1.githubusercontent.com/u/17739158?v=4\",
          \"gravatar_id\": \"\",
          \"url\": \"https://api.github.com/users/dennisameling\",
          \"html_url\": \"https://github.com/dennisameling\",
          \"followers_url\": \"https://api.github.com/users/dennisameling/followers\",
          \"following_url\": \"https://api.github.com/users/dennisameling/following{/other_user}\",
          \"gists_url\": \"https://api.github.com/users/dennisameling/gists{/gist_id}\",
          \"starred_url\": \"https://api.github.com/users/dennisameling/starred{/owner}{/repo}\",
          \"subscriptions_url\": \"https://api.github.com/users/dennisameling/subscriptions\",
          \"organizations_url\": \"https://api.github.com/users/dennisameling/orgs\",
          \"repos_url\": \"https://api.github.com/users/dennisameling/repos\",
          \"events_url\": \"https://api.github.com/users/dennisameling/events{/privacy}\",
          \"received_events_url\": \"https://api.github.com/users/dennisameling/received_events\",
          \"type\": \"User\",
          \"site_admin\": false
        },
        \"content_type\": \"application/zip\",
        \"state\": \"uploaded\",
        \"size\": 50824100,
        \"download_count\": 442,
        \"created_at\": \"2020-02-13T15:53:05Z\",
        \"updated_at\": \"2020-02-13T15:53:53Z\",
        \"browser_download_url\": \"https://github.com/mautic/mautic/releases/download/2.16.0/2.16.0.zip\"
      }
    ],
    \"tarball_url\": \"https://api.github.com/repos/mautic/mautic/tarball/2.16.0\",
    \"zipball_url\": \"https://api.github.com/repos/mautic/mautic/zipball/2.16.0\",
    \"body\": \"\"
  },
  {
    \"url\": \"https://api.github.com/repos/mautic/mautic/releases/23742490\",
    \"assets_url\": \"https://api.github.com/repos/mautic/mautic/releases/23742490/assets\",
    \"upload_url\": \"https://uploads.github.com/repos/mautic/mautic/releases/23742490/assets{?name,label}\",
    \"html_url\": \"https://github.com/mautic/mautic/releases/tag/3.0.1-beta\",
    \"id\": 23742490,
    \"node_id\": \"MDc6UmVsZWFzZTIzNzQyNDkw\",
    \"tag_name\": \"3.0.1-beta\",
    \"target_commitish\": \"3.x\",
    \"name\": \"3.0.1-beta\",
    \"draft\": false,
    \"author\": {
      \"login\": \"alanhartless\",
      \"id\": 63312,
      \"node_id\": \"MDQ6VXNlcjYzMzEy\",
      \"avatar_url\": \"https://avatars3.githubusercontent.com/u/63312?v=4\",
      \"gravatar_id\": \"\",
      \"url\": \"https://api.github.com/users/alanhartless\",
      \"html_url\": \"https://github.com/alanhartless\",
      \"followers_url\": \"https://api.github.com/users/alanhartless/followers\",
      \"following_url\": \"https://api.github.com/users/alanhartless/following{/other_user}\",
      \"gists_url\": \"https://api.github.com/users/alanhartless/gists{/gist_id}\",
      \"starred_url\": \"https://api.github.com/users/alanhartless/starred{/owner}{/repo}\",
      \"subscriptions_url\": \"https://api.github.com/users/alanhartless/subscriptions\",
      \"organizations_url\": \"https://api.github.com/users/alanhartless/orgs\",
      \"repos_url\": \"https://api.github.com/users/alanhartless/repos\",
      \"events_url\": \"https://api.github.com/users/alanhartless/events{/privacy}\",
      \"received_events_url\": \"https://api.github.com/users/alanhartless/received_events\",
      \"type\": \"User\",
      \"site_admin\": false
    },
    \"prerelease\": true,
    \"created_at\": \"2020-02-17T17:52:59Z\",
    \"published_at\": \"2020-02-17T18:09:12Z\",
    \"assets\": [
      {
        \"url\": \"https://api.github.com/repos/mautic/mautic/releases/assets/18098709\",
        \"id\": 18098709,
        \"node_id\": \"MDEyOlJlbGVhc2VBc3NldDE4MDk4NzA5\",
        \"name\": \"3.0.1-beta-update.zip\",
        \"label\": null,
        \"uploader\": {
          \"login\": \"alanhartless\",
          \"id\": 63312,
          \"node_id\": \"MDQ6VXNlcjYzMzEy\",
          \"avatar_url\": \"https://avatars3.githubusercontent.com/u/63312?v=4\",
          \"gravatar_id\": \"\",
          \"url\": \"https://api.github.com/users/alanhartless\",
          \"html_url\": \"https://github.com/alanhartless\",
          \"followers_url\": \"https://api.github.com/users/alanhartless/followers\",
          \"following_url\": \"https://api.github.com/users/alanhartless/following{/other_user}\",
          \"gists_url\": \"https://api.github.com/users/alanhartless/gists{/gist_id}\",
          \"starred_url\": \"https://api.github.com/users/alanhartless/starred{/owner}{/repo}\",
          \"subscriptions_url\": \"https://api.github.com/users/alanhartless/subscriptions\",
          \"organizations_url\": \"https://api.github.com/users/alanhartless/orgs\",
          \"repos_url\": \"https://api.github.com/users/alanhartless/repos\",
          \"events_url\": \"https://api.github.com/users/alanhartless/events{/privacy}\",
          \"received_events_url\": \"https://api.github.com/users/alanhartless/received_events\",
          \"type\": \"User\",
          \"site_admin\": false
        },
        \"content_type\": \"application/zip\",
        \"state\": \"uploaded\",
        \"size\": 64155991,
        \"download_count\": 3,
        \"created_at\": \"2020-02-17T18:04:16Z\",
        \"updated_at\": \"2020-02-17T18:06:16Z\",
        \"browser_download_url\": \"https://github.com/mautic/mautic/releases/download/3.0.1-beta/3.0.1-beta-update.zip\"
      },
      {
        \"url\": \"https://api.github.com/repos/mautic/mautic/releases/assets/18098756\",
        \"id\": 18098756,
        \"node_id\": \"MDEyOlJlbGVhc2VBc3NldDE4MDk4NzU2\",
        \"name\": \"3.0.1-beta.zip\",
        \"label\": null,
        \"uploader\": {
          \"login\": \"alanhartless\",
          \"id\": 63312,
          \"node_id\": \"MDQ6VXNlcjYzMzEy\",
          \"avatar_url\": \"https://avatars3.githubusercontent.com/u/63312?v=4\",
          \"gravatar_id\": \"\",
          \"url\": \"https://api.github.com/users/alanhartless\",
          \"html_url\": \"https://github.com/alanhartless\",
          \"followers_url\": \"https://api.github.com/users/alanhartless/followers\",
          \"following_url\": \"https://api.github.com/users/alanhartless/following{/other_user}\",
          \"gists_url\": \"https://api.github.com/users/alanhartless/gists{/gist_id}\",
          \"starred_url\": \"https://api.github.com/users/alanhartless/starred{/owner}{/repo}\",
          \"subscriptions_url\": \"https://api.github.com/users/alanhartless/subscriptions\",
          \"organizations_url\": \"https://api.github.com/users/alanhartless/orgs\",
          \"repos_url\": \"https://api.github.com/users/alanhartless/repos\",
          \"events_url\": \"https://api.github.com/users/alanhartless/events{/privacy}\",
          \"received_events_url\": \"https://api.github.com/users/alanhartless/received_events\",
          \"type\": \"User\",
          \"site_admin\": false
        },
        \"content_type\": \"application/zip\",
        \"state\": \"uploaded\",
        \"size\": 64561667,
        \"download_count\": 1,
        \"created_at\": \"2020-02-17T18:06:16Z\",
        \"updated_at\": \"2020-02-17T18:08:21Z\",
        \"browser_download_url\": \"https://github.com/mautic/mautic/releases/download/3.0.1-beta/3.0.1-beta.zip\"
      }
    ],
    \"tarball_url\": \"https://api.github.com/repos/mautic/mautic/tarball/3.0.1-beta\",
    \"zipball_url\": \"https://api.github.com/repos/mautic/mautic/zipball/3.0.1-beta\",
    \"body\": \"\"
  },
  {
    \"url\": \"https://api.github.com/repos/mautic/mautic/releases/22759426\",
    \"assets_url\": \"https://api.github.com/repos/mautic/mautic/releases/22759426/assets\",
    \"upload_url\": \"https://uploads.github.com/repos/mautic/mautic/releases/22759426/assets{?name,label}\",
    \"html_url\": \"https://github.com/mautic/mautic/releases/tag/3.0.1-alpha\",
    \"id\": 22759426,
    \"node_id\": \"MDc6UmVsZWFzZTIyNzU5NDI2\",
    \"tag_name\": \"3.0.1-alpha\",
    \"target_commitish\": \"3.x\",
    \"name\": \"3.0.1-alpha\",
    \"draft\": false,
    \"author\": {
      \"login\": \"alanhartless\",
      \"id\": 63312,
      \"node_id\": \"MDQ6VXNlcjYzMzEy\",
      \"avatar_url\": \"https://avatars3.githubusercontent.com/u/63312?v=4\",
      \"gravatar_id\": \"\",
      \"url\": \"https://api.github.com/users/alanhartless\",
      \"html_url\": \"https://github.com/alanhartless\",
      \"followers_url\": \"https://api.github.com/users/alanhartless/followers\",
      \"following_url\": \"https://api.github.com/users/alanhartless/following{/other_user}\",
      \"gists_url\": \"https://api.github.com/users/alanhartless/gists{/gist_id}\",
      \"starred_url\": \"https://api.github.com/users/alanhartless/starred{/owner}{/repo}\",
      \"subscriptions_url\": \"https://api.github.com/users/alanhartless/subscriptions\",
      \"organizations_url\": \"https://api.github.com/users/alanhartless/orgs\",
      \"repos_url\": \"https://api.github.com/users/alanhartless/repos\",
      \"events_url\": \"https://api.github.com/users/alanhartless/events{/privacy}\",
      \"received_events_url\": \"https://api.github.com/users/alanhartless/received_events\",
      \"type\": \"User\",
      \"site_admin\": false
    },
    \"prerelease\": true,
    \"created_at\": \"2020-01-11T03:11:14Z\",
    \"published_at\": \"2020-01-11T03:26:29Z\",
    \"assets\": [
      {
        \"url\": \"https://api.github.com/repos/mautic/mautic/releases/assets/17272250\",
        \"id\": 17272250,
        \"node_id\": \"MDEyOlJlbGVhc2VBc3NldDE3MjcyMjUw\",
        \"name\": \"3.0.1-alpha.zip\",
        \"label\": null,
        \"uploader\": {
          \"login\": \"alanhartless\",
          \"id\": 63312,
          \"node_id\": \"MDQ6VXNlcjYzMzEy\",
          \"avatar_url\": \"https://avatars3.githubusercontent.com/u/63312?v=4\",
          \"gravatar_id\": \"\",
          \"url\": \"https://api.github.com/users/alanhartless\",
          \"html_url\": \"https://github.com/alanhartless\",
          \"followers_url\": \"https://api.github.com/users/alanhartless/followers\",
          \"following_url\": \"https://api.github.com/users/alanhartless/following{/other_user}\",
          \"gists_url\": \"https://api.github.com/users/alanhartless/gists{/gist_id}\",
          \"starred_url\": \"https://api.github.com/users/alanhartless/starred{/owner}{/repo}\",
          \"subscriptions_url\": \"https://api.github.com/users/alanhartless/subscriptions\",
          \"organizations_url\": \"https://api.github.com/users/alanhartless/orgs\",
          \"repos_url\": \"https://api.github.com/users/alanhartless/repos\",
          \"events_url\": \"https://api.github.com/users/alanhartless/events{/privacy}\",
          \"received_events_url\": \"https://api.github.com/users/alanhartless/received_events\",
          \"type\": \"User\",
          \"site_admin\": false
        },
        \"content_type\": \"application/zip\",
        \"state\": \"uploaded\",
        \"size\": 55844942,
        \"download_count\": 251,
        \"created_at\": \"2020-01-11T03:24:33Z\",
        \"updated_at\": \"2020-01-11T03:25:57Z\",
        \"browser_download_url\": \"https://github.com/mautic/mautic/releases/download/3.0.1-alpha/3.0.1-alpha.zip\"
      },
      {
        \"url\": \"https://api.github.com/repos/mautic/mautic/releases/assets/17272250\",
        \"id\": 17272250,
        \"node_id\": \"MDEyOlJlbGVhc2VBc3NldDE3MjcyMjUw\",
        \"name\": \"3.0.1-alpha-update.zip\",
        \"label\": null,
        \"uploader\": {
          \"login\": \"alanhartless\",
          \"id\": 63312,
          \"node_id\": \"MDQ6VXNlcjYzMzEy\",
          \"avatar_url\": \"https://avatars3.githubusercontent.com/u/63312?v=4\",
          \"gravatar_id\": \"\",
          \"url\": \"https://api.github.com/users/alanhartless\",
          \"html_url\": \"https://github.com/alanhartless\",
          \"followers_url\": \"https://api.github.com/users/alanhartless/followers\",
          \"following_url\": \"https://api.github.com/users/alanhartless/following{/other_user}\",
          \"gists_url\": \"https://api.github.com/users/alanhartless/gists{/gist_id}\",
          \"starred_url\": \"https://api.github.com/users/alanhartless/starred{/owner}{/repo}\",
          \"subscriptions_url\": \"https://api.github.com/users/alanhartless/subscriptions\",
          \"organizations_url\": \"https://api.github.com/users/alanhartless/orgs\",
          \"repos_url\": \"https://api.github.com/users/alanhartless/repos\",
          \"events_url\": \"https://api.github.com/users/alanhartless/events{/privacy}\",
          \"received_events_url\": \"https://api.github.com/users/alanhartless/received_events\",
          \"type\": \"User\",
          \"site_admin\": false
        },
        \"content_type\": \"application/zip\",
        \"state\": \"uploaded\",
        \"size\": 55844942,
        \"download_count\": 251,
        \"created_at\": \"2020-01-11T03:24:33Z\",
        \"updated_at\": \"2020-01-11T03:25:57Z\",
        \"browser_download_url\": \"https://github.com/mautic/mautic/releases/download/3.0.1-alpha/3.0.1-alpha-update.zip\"
      }
    ],
    \"tarball_url\": \"https://api.github.com/repos/mautic/mautic/tarball/3.0.1-alpha\",
    \"zipball_url\": \"https://api.github.com/repos/mautic/mautic/zipball/3.0.1-alpha\",
    \"body\": \"\"
  },
  {
    \"url\": \"https://api.github.com/repos/mautic/mautic/releases/23742490\",
    \"assets_url\": \"https://api.github.com/repos/mautic/mautic/releases/23742490/assets\",
    \"upload_url\": \"https://uploads.github.com/repos/mautic/mautic/releases/23742490/assets{?name,label}\",
    \"html_url\": \"https://github.com/mautic/mautic/releases/tag/3.0.0\",
    \"id\": 23742490,
    \"node_id\": \"MDc6UmVsZWFzZTIzNzQyNDkw\",
    \"tag_name\": \"3.0.0\",
    \"target_commitish\": \"3.x\",
    \"name\": \"3.0.0\",
    \"draft\": false,
    \"author\": {
      \"login\": \"alanhartless\",
      \"id\": 63312,
      \"node_id\": \"MDQ6VXNlcjYzMzEy\",
      \"avatar_url\": \"https://avatars3.githubusercontent.com/u/63312?v=4\",
      \"gravatar_id\": \"\",
      \"url\": \"https://api.github.com/users/alanhartless\",
      \"html_url\": \"https://github.com/alanhartless\",
      \"followers_url\": \"https://api.github.com/users/alanhartless/followers\",
      \"following_url\": \"https://api.github.com/users/alanhartless/following{/other_user}\",
      \"gists_url\": \"https://api.github.com/users/alanhartless/gists{/gist_id}\",
      \"starred_url\": \"https://api.github.com/users/alanhartless/starred{/owner}{/repo}\",
      \"subscriptions_url\": \"https://api.github.com/users/alanhartless/subscriptions\",
      \"organizations_url\": \"https://api.github.com/users/alanhartless/orgs\",
      \"repos_url\": \"https://api.github.com/users/alanhartless/repos\",
      \"events_url\": \"https://api.github.com/users/alanhartless/events{/privacy}\",
      \"received_events_url\": \"https://api.github.com/users/alanhartless/received_events\",
      \"type\": \"User\",
      \"site_admin\": false
    },
    \"prerelease\": true,
    \"created_at\": \"2020-02-17T17:52:59Z\",
    \"published_at\": \"2020-02-17T18:09:12Z\",
    \"assets\": [
      {
        \"url\": \"https://api.github.com/repos/mautic/mautic/releases/assets/18098709\",
        \"id\": 18098709,
        \"node_id\": \"MDEyOlJlbGVhc2VBc3NldDE4MDk4NzA5\",
        \"name\": \"3.0.0-update.zip\",
        \"label\": null,
        \"uploader\": {
          \"login\": \"alanhartless\",
          \"id\": 63312,
          \"node_id\": \"MDQ6VXNlcjYzMzEy\",
          \"avatar_url\": \"https://avatars3.githubusercontent.com/u/63312?v=4\",
          \"gravatar_id\": \"\",
          \"url\": \"https://api.github.com/users/alanhartless\",
          \"html_url\": \"https://github.com/alanhartless\",
          \"followers_url\": \"https://api.github.com/users/alanhartless/followers\",
          \"following_url\": \"https://api.github.com/users/alanhartless/following{/other_user}\",
          \"gists_url\": \"https://api.github.com/users/alanhartless/gists{/gist_id}\",
          \"starred_url\": \"https://api.github.com/users/alanhartless/starred{/owner}{/repo}\",
          \"subscriptions_url\": \"https://api.github.com/users/alanhartless/subscriptions\",
          \"organizations_url\": \"https://api.github.com/users/alanhartless/orgs\",
          \"repos_url\": \"https://api.github.com/users/alanhartless/repos\",
          \"events_url\": \"https://api.github.com/users/alanhartless/events{/privacy}\",
          \"received_events_url\": \"https://api.github.com/users/alanhartless/received_events\",
          \"type\": \"User\",
          \"site_admin\": false
        },
        \"content_type\": \"application/zip\",
        \"state\": \"uploaded\",
        \"size\": 64155991,
        \"download_count\": 3,
        \"created_at\": \"2020-02-17T18:04:16Z\",
        \"updated_at\": \"2020-02-17T18:06:16Z\",
        \"browser_download_url\": \"https://github.com/mautic/mautic/releases/download/3.0.0/3.0.0-update.zip\"
      },
      {
        \"url\": \"https://api.github.com/repos/mautic/mautic/releases/assets/18098756\",
        \"id\": 18098756,
        \"node_id\": \"MDEyOlJlbGVhc2VBc3NldDE4MDk4NzU2\",
        \"name\": \"3.0.0.zip\",
        \"label\": null,
        \"uploader\": {
          \"login\": \"alanhartless\",
          \"id\": 63312,
          \"node_id\": \"MDQ6VXNlcjYzMzEy\",
          \"avatar_url\": \"https://avatars3.githubusercontent.com/u/63312?v=4\",
          \"gravatar_id\": \"\",
          \"url\": \"https://api.github.com/users/alanhartless\",
          \"html_url\": \"https://github.com/alanhartless\",
          \"followers_url\": \"https://api.github.com/users/alanhartless/followers\",
          \"following_url\": \"https://api.github.com/users/alanhartless/following{/other_user}\",
          \"gists_url\": \"https://api.github.com/users/alanhartless/gists{/gist_id}\",
          \"starred_url\": \"https://api.github.com/users/alanhartless/starred{/owner}{/repo}\",
          \"subscriptions_url\": \"https://api.github.com/users/alanhartless/subscriptions\",
          \"organizations_url\": \"https://api.github.com/users/alanhartless/orgs\",
          \"repos_url\": \"https://api.github.com/users/alanhartless/repos\",
          \"events_url\": \"https://api.github.com/users/alanhartless/events{/privacy}\",
          \"received_events_url\": \"https://api.github.com/users/alanhartless/received_events\",
          \"type\": \"User\",
          \"site_admin\": false
        },
        \"content_type\": \"application/zip\",
        \"state\": \"uploaded\",
        \"size\": 64561667,
        \"download_count\": 1,
        \"created_at\": \"2020-02-17T18:06:16Z\",
        \"updated_at\": \"2020-02-17T18:08:21Z\",
        \"browser_download_url\": \"https://github.com/mautic/mautic/releases/download/3.0.0/3.0.0.zip\"
      }
    ],
    \"tarball_url\": \"https://api.github.com/repos/mautic/mautic/tarball/3.0.0\",
    \"zipball_url\": \"https://api.github.com/repos/mautic/mautic/zipball/3.0.0\",
    \"body\": \"\"
  },
  {
    \"url\": \"https://api.github.com/repos/mautic/mautic/releases/23649226\",
    \"assets_url\": \"https://api.github.com/repos/mautic/mautic/releases/23649226/assets\",
    \"upload_url\": \"https://uploads.github.com/repos/mautic/mautic/releases/23649226/assets{?name,label}\",
    \"html_url\": \"https://github.com/mautic/mautic/releases/tag/2.15.0\",
    \"id\": 23649226,
    \"node_id\": \"MDc6UmVsZWFzZTIzNjQ5MjI2\",
    \"tag_name\": \"2.15.0\",
    \"target_commitish\": \"master\",
    \"name\": \"2.15.0\",
    \"draft\": false,
    \"author\": {
      \"login\": \"dennisameling\",
      \"id\": 17739158,
      \"node_id\": \"MDQ6VXNlcjE3NzM5MTU4\",
      \"avatar_url\": \"https://avatars1.githubusercontent.com/u/17739158?v=4\",
      \"gravatar_id\": \"\",
      \"url\": \"https://api.github.com/users/dennisameling\",
      \"html_url\": \"https://github.com/dennisameling\",
      \"followers_url\": \"https://api.github.com/users/dennisameling/followers\",
      \"following_url\": \"https://api.github.com/users/dennisameling/following{/other_user}\",
      \"gists_url\": \"https://api.github.com/users/dennisameling/gists{/gist_id}\",
      \"starred_url\": \"https://api.github.com/users/dennisameling/starred{/owner}{/repo}\",
      \"subscriptions_url\": \"https://api.github.com/users/dennisameling/subscriptions\",
      \"organizations_url\": \"https://api.github.com/users/dennisameling/orgs\",
      \"repos_url\": \"https://api.github.com/users/dennisameling/repos\",
      \"events_url\": \"https://api.github.com/users/dennisameling/events{/privacy}\",
      \"received_events_url\": \"https://api.github.com/users/dennisameling/received_events\",
      \"type\": \"User\",
      \"site_admin\": false
    },
    \"prerelease\": false,
    \"created_at\": \"2020-02-13T15:33:46Z\",
    \"published_at\": \"2020-02-13T16:12:39Z\",
    \"assets\": [
      {
        \"url\": \"https://api.github.com/repos/mautic/mautic/releases/assets/18006961\",
        \"id\": 18006961,
        \"node_id\": \"MDEyOlJlbGVhc2VBc3NldDE4MDA2OTYx\",
        \"name\": \"2.15.0-update.zip\",
        \"label\": null,
        \"uploader\": {
          \"login\": \"dennisameling\",
          \"id\": 17739158,
          \"node_id\": \"MDQ6VXNlcjE3NzM5MTU4\",
          \"avatar_url\": \"https://avatars1.githubusercontent.com/u/17739158?v=4\",
          \"gravatar_id\": \"\",
          \"url\": \"https://api.github.com/users/dennisameling\",
          \"html_url\": \"https://github.com/dennisameling\",
          \"followers_url\": \"https://api.github.com/users/dennisameling/followers\",
          \"following_url\": \"https://api.github.com/users/dennisameling/following{/other_user}\",
          \"gists_url\": \"https://api.github.com/users/dennisameling/gists{/gist_id}\",
          \"starred_url\": \"https://api.github.com/users/dennisameling/starred{/owner}{/repo}\",
          \"subscriptions_url\": \"https://api.github.com/users/dennisameling/subscriptions\",
          \"organizations_url\": \"https://api.github.com/users/dennisameling/orgs\",
          \"repos_url\": \"https://api.github.com/users/dennisameling/repos\",
          \"events_url\": \"https://api.github.com/users/dennisameling/events{/privacy}\",
          \"received_events_url\": \"https://api.github.com/users/dennisameling/received_events\",
          \"type\": \"User\",
          \"site_admin\": false
        },
        \"content_type\": \"application/zip\",
        \"state\": \"uploaded\",
        \"size\": 50261186,
        \"download_count\": 935,
        \"created_at\": \"2020-02-13T15:53:53Z\",
        \"updated_at\": \"2020-02-13T15:54:39Z\",
        \"browser_download_url\": \"https://github.com/mautic/mautic/releases/download/2.15.0/2.15.0-update.zip\"
      },
      {
        \"url\": \"https://api.github.com/repos/mautic/mautic/releases/assets/18006946\",
        \"id\": 18006946,
        \"node_id\": \"MDEyOlJlbGVhc2VBc3NldDE4MDA2OTQ2\",
        \"name\": \"2.15.0.zip\",
        \"label\": null,
        \"uploader\": {
          \"login\": \"dennisameling\",
          \"id\": 17739158,
          \"node_id\": \"MDQ6VXNlcjE3NzM5MTU4\",
          \"avatar_url\": \"https://avatars1.githubusercontent.com/u/17739158?v=4\",
          \"gravatar_id\": \"\",
          \"url\": \"https://api.github.com/users/dennisameling\",
          \"html_url\": \"https://github.com/dennisameling\",
          \"followers_url\": \"https://api.github.com/users/dennisameling/followers\",
          \"following_url\": \"https://api.github.com/users/dennisameling/following{/other_user}\",
          \"gists_url\": \"https://api.github.com/users/dennisameling/gists{/gist_id}\",
          \"starred_url\": \"https://api.github.com/users/dennisameling/starred{/owner}{/repo}\",
          \"subscriptions_url\": \"https://api.github.com/users/dennisameling/subscriptions\",
          \"organizations_url\": \"https://api.github.com/users/dennisameling/orgs\",
          \"repos_url\": \"https://api.github.com/users/dennisameling/repos\",
          \"events_url\": \"https://api.github.com/users/dennisameling/events{/privacy}\",
          \"received_events_url\": \"https://api.github.com/users/dennisameling/received_events\",
          \"type\": \"User\",
          \"site_admin\": false
        },
        \"content_type\": \"application/zip\",
        \"state\": \"uploaded\",
        \"size\": 50824100,
        \"download_count\": 442,
        \"created_at\": \"2020-02-13T15:53:05Z\",
        \"updated_at\": \"2020-02-13T15:53:53Z\",
        \"browser_download_url\": \"https://github.com/mautic/mautic/releases/download/2.15.0/2.15.0.zip\"
      }
    ],
    \"tarball_url\": \"https://api.github.com/repos/mautic/mautic/tarball/2.15.0\",
    \"zipball_url\": \"https://api.github.com/repos/mautic/mautic/zipball/2.15.0\",
    \"body\": \"\"
  }
]";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Tests/Unit/Helper/Update/Github/json/releases.json";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Helper/Update/Github/json/releases.json", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Tests/Unit/Helper/Update/Github/json/releases.json");
    }
}
