<?php
namespace Deployer;

require 'recipe/common.php';

// Configuration
set('shared_files', [
    'app/etc/env.php',
    'var/.maintenance.ip',
]);
set('shared_dirs', [
    'pub/media',
]);
set('writable_dirs', [
    'var',
    'pub/static',
    'pub/media',
]);
set('clear_paths', [
    'CHANGELOG.md',
    'COPYING.txt',
    'LICENSE.txt',
    'LICENSE_AFL.txt',
    'LICENSE_EE.txt',
    'README_EE.md',
    'SECURITY.md',
    '.github',
    '*.sample',
    '.*.sample'
]);
