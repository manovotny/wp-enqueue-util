module.exports = (function () {

    'use strict';

    var date = new Date();

    return {
        author: {
            email: 'manovotny@gmail.com',
            name: 'Michael Novotny',
            url: 'http://manovotny.com',
            username: 'manovotny'
        },
        files: {
            bower: 'bower.json',
            composer: 'composer.json',
            composerLock: 'composer.lock',
            grunt: 'Gruntfile.js',
            jshint: '.jshintrc',
            package: 'package.json',
            readme: 'README.md',
            replace: 'replace.js',
            sassLint: '.scss-lint.yml',
            style: 'style.css'
        },
        paths: {
            admin: 'admin',
            bower: 'bower_components',
            classes: 'classes',
            composer: 'vendor',
            config: 'config',
            css: 'css',
            grunt: 'grunt',
            inc: 'inc',
            js: 'js',
            lib: 'lib',
            phpunit: 'vendor/bin/phpunit',
            sass: 'sass',
            tests: 'tests',
            translations: 'lang',
            views: 'views'
        },
        project: {
            composer: 'manovotny/wp-enqueue-util',
            copyright: date.getFullYear() + ' Michael Novotny',
            description: 'An enqueuing utility for WordPress.',
            git: 'git://github.com/manovotny/wp-enqueue-util.git',
            name: 'WP Enqueue Util',
            package: 'WP_Enqueue_Util',
            slug: 'wp-enqueue-util',
            type: 'plugin', // Should be `plugin` or `theme`.
            url: 'https://github.com/manovotny/wp-enqueue-util',
            version: '0.1.1'
        }
    };

}());
