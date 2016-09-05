# Template Creator script

## run
    > php bin/tcreator

## create a new template

    > php bin\tcreator template:create myNewFolder

Here "myNewFolder" (required) is the new directory that will be created:

    /myNewFolder
    |-- css
    |   `-- target.css
    `-- index.php

**index.php** contains the contents of the files inside /public folder. TCreator will **only** include the files that **start with a number**.

So, if you want to create a template with header, body and footer, inside the /public folder you should have something like this:

    /public
    |-- 01header.php
    |-- 02body.php
    |-- 03footer.php
    `-- example

The content of those files will be concatenated into the index.php file, except for the *example* file, which is ignored bacause it doesn't start with a number.