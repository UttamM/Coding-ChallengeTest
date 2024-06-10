# Coding-Challenge
### Assignment:

### Create a custom module for Drupal 10 which parses and displays data from a public API. Feel free to use any additional JS libraries, frameworks, or utilities as you see fit to complete the task. Provide instructions for installing and running the module on a local machine assuming that we're using Lando.dev with PHP 8.2.

### Public API: https://randomuser.me

### Requirements:

### Make a call to the randomuser.me API and get 100 users. Display the following fields for each user:
### First name
### Last name
### Country
### Date of birth
### Create and display an additional “Birthday” field whose value is dynamically calculated. The value should identify if the user’s birthday: a) already happened, b) is today(!), or c) has yet to occur, based on today’s date for the current year.

### Implement sorting functionality on a column or columns of your choice e.g. ascending / descending order.


## Installation Setups

### Install drupal 10 dependency via composer
lando composer install

### Composer can timeout on install for some machines, if that happens, run the following command and then re-run the previous lando composer command:
lando composer config --global process-timeout 2000

### Start it up
lando start

### Install a site local drush
lando composer require drush/drush

### Install drupal Database
lando drush site:install --db-url=mysql://drupal10:drupal10@database/drupal10 -y

### Enable the custom module
lando drush en random_api_users_data

### Visit the page
Go to Config in the admin menu and click on "Random API Users Data".
