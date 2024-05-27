# Brown-University-Coding-Test

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