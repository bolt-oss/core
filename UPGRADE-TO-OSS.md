# Bolt OSS Migration guide

## Update composer.json

Change the dependencies:

* `bolt/article` to `bolt-oss/article`
* `bolt/assets` to `bolt-oss/assets`
* `bolt/common` to `bolt-oss/common`
* `bolt/core` to `bolt-oss/core`
* `bolt/newswidget` to `bolt-oss/newswidget`
* `bolt/redactor` to `bolt-oss/redactor`
* `bolt/themes` to `bolt-oss/themes`
* `bolt/users` to `bolt-oss/users`

## Upgrade project configuration

In your `config` folder, search `vendor/bolt/core` and replace it with `vendor/bolt-oss/core`.
