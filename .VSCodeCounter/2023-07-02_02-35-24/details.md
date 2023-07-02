# Details

Date : 2023-07-02 02:35:24

Directory /home/cold/Documents/programming/rizz/uniclub/backend

Total : 80 files,  11042 codes, 1669 comments, 733 blanks, all 13444 lines

[Summary](results.md) / Details / [Diff Summary](diff.md) / [Diff Details](diff-details.md)

## Files
| filename | language | code | comment | blank | total |
| :--- | :--- | ---: | ---: | ---: | ---: |
| [.gitpod.yml](/.gitpod.yml) | YAML | 3 | 4 | 5 | 12 |
| [README.md](/README.md) | Markdown | 45 | 0 | 22 | 67 |
| [app/Console/Kernel.php](/app/Console/Kernel.php) | PHP | 15 | 7 | 6 | 28 |
| [app/Exceptions/Handler.php](/app/Exceptions/Handler.php) | PHP | 17 | 9 | 5 | 31 |
| [app/Http/Controllers/Api/Auth/AuthController.php](/app/Http/Controllers/Api/Auth/AuthController.php) | PHP | 88 | 14 | 25 | 127 |
| [app/Http/Controllers/Controller.php](/app/Http/Controllers/Controller.php) | PHP | 9 | 0 | 4 | 13 |
| [app/Http/Controllers/clubController.php](/app/Http/Controllers/clubController.php) | PHP | 168 | 5 | 74 | 247 |
| [app/Http/Kernel.php](/app/Http/Kernel.php) | PHP | 40 | 21 | 10 | 71 |
| [app/Http/Middleware/Authenticate.php](/app/Http/Middleware/Authenticate.php) | PHP | 11 | 3 | 4 | 18 |
| [app/Http/Middleware/EncryptCookies.php](/app/Http/Middleware/EncryptCookies.php) | PHP | 8 | 6 | 4 | 18 |
| [app/Http/Middleware/PreventRequestsDuringMaintenance.php](/app/Http/Middleware/PreventRequestsDuringMaintenance.php) | PHP | 8 | 6 | 4 | 18 |
| [app/Http/Middleware/RedirectIfAuthenticated.php](/app/Http/Middleware/RedirectIfAuthenticated.php) | PHP | 20 | 5 | 6 | 31 |
| [app/Http/Middleware/TrimStrings.php](/app/Http/Middleware/TrimStrings.php) | PHP | 11 | 5 | 4 | 20 |
| [app/Http/Middleware/TrustHosts.php](/app/Http/Middleware/TrustHosts.php) | PHP | 12 | 5 | 4 | 21 |
| [app/Http/Middleware/TrustProxies.php](/app/Http/Middleware/TrustProxies.php) | PHP | 14 | 10 | 5 | 29 |
| [app/Http/Middleware/ValidateSignature.php](/app/Http/Middleware/ValidateSignature.php) | PHP | 8 | 11 | 4 | 23 |
| [app/Http/Middleware/VerifyCsrfToken.php](/app/Http/Middleware/VerifyCsrfToken.php) | PHP | 8 | 6 | 4 | 18 |
| [app/Models/Event.php](/app/Models/Event.php) | PHP | 23 | 19 | 8 | 50 |
| [app/Models/FailedJob.php](/app/Models/FailedJob.php) | PHP | 20 | 16 | 7 | 43 |
| [app/Models/Member.php](/app/Models/Member.php) | PHP | 23 | 19 | 8 | 50 |
| [app/Models/PasswordResetToken.php](/app/Models/PasswordResetToken.php) | PHP | 17 | 12 | 7 | 36 |
| [app/Models/PersonalAccessToken.php](/app/Models/PersonalAccessToken.php) | PHP | 25 | 19 | 8 | 52 |
| [app/Models/User.php](/app/Models/User.php) | PHP | 49 | 34 | 13 | 96 |
| [app/Providers/AppServiceProvider.php](/app/Providers/AppServiceProvider.php) | PHP | 12 | 8 | 5 | 25 |
| [app/Providers/AuthServiceProvider.php](/app/Providers/AuthServiceProvider.php) | PHP | 11 | 11 | 5 | 27 |
| [app/Providers/BroadcastServiceProvider.php](/app/Providers/BroadcastServiceProvider.php) | PHP | 12 | 3 | 5 | 20 |
| [app/Providers/EventServiceProvider.php](/app/Providers/EventServiceProvider.php) | PHP | 21 | 12 | 6 | 39 |
| [app/Providers/RouteServiceProvider.php](/app/Providers/RouteServiceProvider.php) | PHP | 24 | 10 | 7 | 41 |
| [bootstrap/app.php](/bootstrap/app.php) | PHP | 17 | 30 | 9 | 56 |
| [composer.json](/composer.json) | JSON | 67 | 0 | 1 | 68 |
| [composer.lock](/composer.lock) | JSON | 8,401 | 0 | 1 | 8,402 |
| [config/app.php](/config/app.php) | PHP | 28 | 131 | 31 | 190 |
| [config/auth.php](/config/auth.php) | PHP | 28 | 74 | 14 | 116 |
| [config/broadcasting.php](/config/broadcasting.php) | PHP | 36 | 23 | 13 | 72 |
| [config/cache.php](/config/cache.php) | PHP | 59 | 34 | 19 | 112 |
| [config/cors.php](/config/cors.php) | PHP | 3 | 29 | 3 | 35 |
| [config/database.php](/config/database.php) | PHP | 83 | 47 | 22 | 152 |
| [config/filesystems.php](/config/filesystems.php) | PHP | 32 | 32 | 13 | 77 |
| [config/hashing.php](/config/hashing.php) | PHP | 12 | 32 | 9 | 53 |
| [config/logging.php](/config/logging.php) | PHP | 79 | 34 | 19 | 132 |
| [config/mail.php](/config/mail.php) | PHP | 54 | 53 | 19 | 126 |
| [config/models.php](/config/models.php) | PHP | 43 | 404 | 60 | 507 |
| [config/queue.php](/config/queue.php) | PHP | 51 | 42 | 17 | 110 |
| [config/sanctum.php](/config/sanctum.php) | PHP | 15 | 41 | 12 | 68 |
| [config/services.php](/config/services.php) | PHP | 17 | 11 | 7 | 35 |
| [config/session.php](/config/session.php) | PHP | 22 | 147 | 33 | 202 |
| [config/view.php](/config/view.php) | PHP | 10 | 20 | 7 | 37 |
| [database/factories/UserFactory.php](/database/factories/UserFactory.php) | PHP | 23 | 11 | 5 | 39 |
| [database/migrations/2014_10_12_000000_create_users_table.php](/database/migrations/2014_10_12_000000_create_users_table.php) | PHP | 23 | 6 | 4 | 33 |
| [database/migrations/2014_10_12_100000_create_password_reset_tokens_table.php](/database/migrations/2014_10_12_100000_create_password_reset_tokens_table.php) | PHP | 19 | 6 | 4 | 29 |
| [database/migrations/2019_08_19_000000_create_failed_jobs_table.php](/database/migrations/2019_08_19_000000_create_failed_jobs_table.php) | PHP | 23 | 6 | 4 | 33 |
| [database/migrations/2019_12_14_000001_create_personal_access_tokens_table.php](/database/migrations/2019_12_14_000001_create_personal_access_tokens_table.php) | PHP | 24 | 6 | 4 | 34 |
| [database/migrations/2023_06_11_171925_create__member_table.php](/database/migrations/2023_06_11_171925_create__member_table.php) | PHP | 24 | 6 | 5 | 35 |
| [database/migrations/2023_06_11_174337_create_event_table.php](/database/migrations/2023_06_11_174337_create_event_table.php) | PHP | 22 | 6 | 4 | 32 |
| [database/migrations/2023_06_11_175250_add_column_to_table_event.php](/database/migrations/2023_06_11_175250_add_column_to_table_event.php) | PHP | 19 | 8 | 4 | 31 |
| [database/migrations/2023_06_11_175426_add_column_to_table_event.php](/database/migrations/2023_06_11_175426_add_column_to_table_event.php) | PHP | 30 | 7 | 4 | 41 |
| [database/migrations/2023_06_11_180205_modify_column_type_in_table_event.php](/database/migrations/2023_06_11_180205_modify_column_type_in_table_event.php) | PHP | 19 | 7 | 4 | 30 |
| [database/migrations/2023_06_12_174711_add_column_to_table_club_token.php](/database/migrations/2023_06_12_174711_add_column_to_table_club_token.php) | PHP | 18 | 8 | 4 | 30 |
| [database/migrations/2023_06_13_212644_adding_description_in_table_event.php](/database/migrations/2023_06_13_212644_adding_description_in_table_event.php) | PHP | 18 | 8 | 4 | 30 |
| [database/migrations/2023_06_14_152754_convert_json_to_array_in_table_name.php](/database/migrations/2023_06_14_152754_convert_json_to_array_in_table_name.php) | PHP | 17 | 7 | 5 | 29 |
| [database/seeders/DatabaseSeeder.php](/database/seeders/DatabaseSeeder.php) | PHP | 15 | 5 | 5 | 25 |
| [package-lock.json](/package-lock.json) | JSON | 682 | 0 | 1 | 683 |
| [package.json](/package.json) | JSON | 13 | 0 | 1 | 14 |
| [phpunit.xml](/phpunit.xml) | XML | 29 | 2 | 1 | 32 |
| [public/index.php](/public/index.php) | PHP | 14 | 30 | 12 | 56 |
| [resources/css/app.css](/resources/css/app.css) | CSS | 0 | 0 | 1 | 1 |
| [resources/js/app.js](/resources/js/app.js) | JavaScript | 1 | 0 | 1 | 2 |
| [resources/js/bootstrap.js](/resources/js/bootstrap.js) | JavaScript | 3 | 23 | 7 | 33 |
| [resources/views/welcome.blade.php](/resources/views/welcome.blade.php) | PHP | 118 | 0 | 23 | 141 |
| [routes/api.php](/routes/api.php) | PHP | 35 | 11 | 14 | 60 |
| [routes/channels.php](/routes/channels.php) | PHP | 5 | 10 | 4 | 19 |
| [routes/console.php](/routes/console.php) | PHP | 6 | 10 | 4 | 20 |
| [routes/web.php](/routes/web.php) | PHP | 5 | 10 | 4 | 19 |
| [tests/CreatesApplication.php](/tests/CreatesApplication.php) | PHP | 13 | 3 | 6 | 22 |
| [tests/Feature/ExampleTest.php](/tests/Feature/ExampleTest.php) | PHP | 11 | 4 | 5 | 20 |
| [tests/TestCase.php](/tests/TestCase.php) | PHP | 7 | 0 | 4 | 11 |
| [tests/Unit/ExampleTest.php](/tests/Unit/ExampleTest.php) | PHP | 10 | 3 | 4 | 17 |
| [vendor/spatie/ignition/resources/compiled/ignition.css](/vendor/spatie/ignition/resources/compiled/ignition.css) | CSS | 1 | 2 | 0 | 3 |
| [vendor/spatie/ignition/resources/compiled/ignition.js](/vendor/spatie/ignition/resources/compiled/ignition.js) | JavaScript | 6 | 0 | 1 | 7 |
| [vite.config.js](/vite.config.js) | JavaScript | 10 | 0 | 2 | 12 |

[Summary](results.md) / Details / [Diff Summary](diff.md) / [Diff Details](diff-details.md)