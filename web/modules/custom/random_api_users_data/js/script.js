(function ($, Drupal, once) {
    Drupal.behaviors.randonApiUsersDataTable = {
      attach: function (context, settings) {
        $(once('dataTable', '#random_api_users_data_table', context)).DataTable();
      }
    };
  })(jQuery, Drupal, once);
