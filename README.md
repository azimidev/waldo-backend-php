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
