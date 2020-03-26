# Installation
- In the root of the application please run `composer install`.
- Run `php script.php` to see the result, however it will take a long time to see the result in the console. I could have chuncked or paginated the result but this wasn't mentioned in the description.
- I have pulled [JSON Machine](https://github.com/halaxa/json-machine) package which is efficient drop-in replacement for inefficient iteration of big JSONs files or streams because the JSON is reprentation of API. There are lots of packages out there for memoly limit solutions.
- It took me an hour and half, not to do this but to research how to do it.
- I have not used any php frameworks as I tought it's not needed but only one package.

# Waldo Backend PHP Developer Test

These scripts present a problem related to sorting large datasets.
To execute the task, you should use your console to execute `script.php` using the PHP CLI.

In the data directory, you will find two files with junk personal data in them, `junk-data.json` and `junk-data-full.json`. These files are referenced in the `$dataFiles` array in `script.php`.
The `script.php` file utilizes the `Sort` class, which reads the data from either one of these file at a time, and sorts the values in order according to the `registered` attribute, in ascending order.

The `Sort` class is successfully able to sort and parse the `junk-data.json`, however, it will fail when using `junk-data-full.json`. Your task is to refactor the application so that it is able to successfully
read and parse the `junk-data-full.json` data file (100,000 records) and dump each item in order according to the `registered` attribute, in ascending order.

You are free to use any PHP bolt-ons / additions you find via composer / external applications. If you do so, please note which ones and why you've chosen to use them.

## Estimated Time To Complete

1-2 Hours. Please let us know how long you spent on the task when submitting your code.
