module.exports = function (grunt) {

    'use strict';

    var config = require('config');

    grunt.config('jshint', {
        options: {
            jshintrc: config.paths.config + '/' + config.files.jshint
        },
        js: {
            src: [
                config.paths.admin + '/' + config.paths.js + '/**/*.js',
                config.paths.js + '/**/*.js',

                '!' + config.paths.admin + '/' + config.paths.js + '/**/*.min.js',
                '!' + config.paths.js + '/**/*.min.js'
            ]
        }
    });

};