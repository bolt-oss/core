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

Change the autoload path:

```diff
  {
      "autoload-dev": {
          "psr-4": {
              "App\\Tests\\": "tests/",
-             "Bolt\\ComposerScripts\\": "vendor/bolt/core/bin/composer-script/"
+             "Bolt\\ComposerScripts\\": "vendor/bolt-oss/core/bin/composer-script/"
          }
      }
   }
```

## Upgrade project configuration

In your `config` folder, search `vendor/bolt/` and replace it with `vendor/bolt-oss/`.

## Update your vendor

Before update, remove the folder `vendor/bolt` and run `composer update`.


