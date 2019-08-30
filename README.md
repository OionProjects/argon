<h1 align="left">
    Argon Dashboard
</h1>
<hr>

Argon Dashboard and components for Yii 2.0 Framework.

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

> Note: This theme is still under development stages.

Either run

```
composer require bolante93/bols "dev-master"
```

or add

```
"bolante93/bols": "dev-master"
```

to the ```require``` section of your `composer.json` file.


## Usage

If you're using Yii app advanced template, configure your <code>main.php</code> file in <code>frontend/config/</code> and add the following lines inside components.

```
'view' => [
    'theme' => [
        //'basePath' => '@frontend/views/argon/web',
        'baseUrl' => '@frontend/views/argon/web',
        'pathMap' => [
            '@app/views' => '@vendor/bolante93/bols'
        ],
    ],
],
```

## Screenshot
<div class="row">
    <div class="col-lg-6">
        <img src="https://github.com/OionProjects/argon/blob/master/screenshots/login.png" alt="Argon Login"/>
    </div>
    <div class="col-lg-6">
        <img src="https://github.com/OionProjects/argon/blob/master/screenshots/index.png" alt="Argon Dashboard"/>
    </div>
</div>



## License

**Argon Dashboard** is released under the MIT License.
