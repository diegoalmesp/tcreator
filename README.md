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

**index.php** contains the contents of the files inside /public folder. TCreator will **only** include the files that start with a number