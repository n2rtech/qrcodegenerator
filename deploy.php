<?php
namespace Deployer;

require 'recipe/laravel.php';
require 'contrib/npm.php';

// Config

set('repository', 'git@gitlab.n2rtechnologies.com:nurulhasan/qrcodegenerator.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts
host('portfolio')
    ->set('hostname','216.158.239.213' )
    ->set('branch', 'master')
    ->set('remote_user', 'root')
    ->set('deploy_path', '/var/www/qrcodegenerator')
    ->set ('ssh_multiplexing', false);

task('deploy', [
    'deploy:prepare',
    'deploy:vendors',
    'artisan:storage:link',
    'artisan:view:cache',
    'artisan:config:cache',
    'artisan:migrate',
    // 'npm:install',
    'npm:run:prod',
    'deploy:publish',
]);

task('npm:run:prod', function () {
    cd('{{release_or_current_path}}');
    run('composer install');
    // run('npm run build');
});

// Hooks

after('deploy:failed', 'deploy:unlock');
