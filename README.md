SalvaPdfJsBundle
================

[![Build Status](https://secure.travis-ci.org/nibsirahsieu/SalvaPdfJsBundle.png?branch=master)](http://travis-ci.org/nibsirahsieu/SalvaPdfJsBundle)

This bundle provides a simple integration of the "[PDF.JS library](https://github.com/mozilla/pdf.js)" from mozilla into Symfony2.

Installation
============

### 1) Download SalvaPdfJsBundle

**Using the vendors script**

### Add the following lines to the `deps` file at the root of your project file:

```
[SalvaPdfJsBundle]
    git=http://github.com/nibsirahsieu/SalvaPdfJsBundle.git
    target=bundles/Salva/PdfJsBundle
```

Next, update your vendors by running:

``` bash
$ ./bin/vendors install
```

**Using composer**

Tell composer to download the bundle by running the command:

``` bash
$ php composer.phar require salva/pdfjs-bundle:dev-master
```

### 2) Configure the autoloader (no needed for composer)

Add the following entry to your autoloader:

``` php
<?php
// app/autoload.php

$loader->registerNamespaces(array(
    // ...

    'Salva'        => __DIR__.'/../vendor/bundles',
));
```

### 3) Enable the bundle

Finally, enable the bundle in the kernel:

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...

        new Salva\PdfJsBundle\SalvaPdfJsBundle(),
    );
}
```

## Basic Usage

``` php
<?php

$file = '/uploads/yourpdf.pdf'; //relative to your website root directory

return $this->get('salva_pdf_js.controller')->renderPdf($file);

```

