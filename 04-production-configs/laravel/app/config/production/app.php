<?php

return array(
    'debug' => false,
    'timezone' => 'Europe/London',
    'cron_token' => '<replace-with-random-hash>',
    'test_email' => '<replace-with-test-email>@abdn.ac.uk', // Not used in this environment but must be defined
    'url' => 'https://www.abdn.ac.uk/laravel-starter/',
    // Make YYYY = 1970 to hide - maintain YYYY-MM-DD HH:MM
    'offline_visible_from' => '1970-01-01 09:00', // Start date/time of offline message
    'offline_start_date' => '1970-01-01 17:00', // Start date/time of offline maintenance mode
    'offline_end_date' => '1970-01-02 05:00' // End date/time of offline maintenance mode
);