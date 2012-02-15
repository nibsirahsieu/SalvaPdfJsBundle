SalvaPdfJsBundle
================

This bundle provides a simple integration of the "[PDF.JS library](https://github.com/mozilla/pdf.js)" from mozilla into Symfony2.

## Installation

### Step 1: Installation using the `bin/vendors.php` method

If you're using the `bin/vendors.php` method to manage your vendor libraries,
add the following lines to the `deps` file at the root of your project file:

```
[SalvaPdfJsBundle]
    git=http://github.com/nibsirahsieu/SalvaPdfJsBundle.git
    target=bundles/Salva/PdfJsBundle
```

Next, update your vendors by running:

``` bash
$ ./bin/vendors install
```

### Step2: Configure the autoloader

Add the following entry to your autoloader:

``` php
<?php
// app/autoload.php

$loader->registerNamespaces(array(
    // ...

    'Salva'        => __DIR__.'/../vendor/bundles',
));
```

### Step3: Enable the bundle

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

