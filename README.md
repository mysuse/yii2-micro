Yii 2 Micro Application Template
================================

Yii 2 Micro Application Template is a skeleton Yii 2 application best for
starting totally from scratch.


DIRECTORY STRUCTURE
-------------------

      commands/           contains console commands (controllers)
      config/             contains application configurations
      controllers/        contains Web controller classes
      models/             contains model classes
      runtime/            contains files generated during runtime
      vendor/             contains dependent 3rd-party packages
      web/                contains the entry script and Web resources



REQUIREMENTS
------------

The minimum requirement by this application template that your Web server supports PHP 5.4.0.


INSTALLATION USING DOCKER
------------

docker compose up

~~~
http://localhost:40812/
~~~


CONFIGURATION
-------------

### Database

Edit the file `config/web.php` with real data, for example:

```php
 'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'sqlite:@app/database.sqlite',
        ],
```

**NOTES:**
- Yii won't create the database for you, this has to be done manually before you can access it.
- Check and edit the other files in the `config/` directory to customize your application as required.
