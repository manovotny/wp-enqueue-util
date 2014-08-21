module.exports = function (grunt) {

    'use strict';

    var config = require('config'),
        expand = true,
        extension = '.min.js',
        source = [
            '**/*.concat.js'
        ];

    grunt.config('uglify', {
        admin: {
            files: [{
                expand: expand,
                cwd: config.paths.admin + '/' + config.paths.js,
                src: source,
                dest: config.paths.admin + '/' + config.paths.js,
                ext: extension
            }]
        },
        site: {
            files: [{
                expand: expand,
                cwd: config.paths.js,
                src: source,
                dest: config.paths.js,
                ext: extension
            }]
        }
    });

};