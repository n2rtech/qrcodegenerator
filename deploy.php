<?php
namespace Deployer;

require 'recipe/laravel.php';

// Config

set('repository', 'git@gitlab.n2rtechnologies.com:nurulhasan/qrcodegenerator.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('216.158.239.213')
    ->set('remote_user', 'root')
    ->set('deploy_path', '/var/www/qrcodegenerator')
    ->set ('ssh_multiplexing', false);

host('portfolio')
    ->set('hostname','216.158.239.213' )
    ->set('branch', 'portfolio')
    ->set('remote_user', 'root')
    ->set('deploy_path', '/var/www/qrcodegenerator')
    ->set ('ssh_multiplexing', false);

// Hooks

after('deploy:failed', 'deploy:unlock');
