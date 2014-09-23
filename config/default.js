module.exports = (function () {

    'use strict';

    return {
        author: {
            email: 'manovotny@gmail.com',
            name: 'Michael Novotny',
            url: 'http://manovotny.com',
            username: 'manovotny'
        },
        files: {
            browserify: 'bundle'
        },
        paths: {
            curl: 'curl_downloads',
            source: 'src',
            translations: 'lang'
        },
        project: {
            composer: 'manovotny/wp-enqueue-util',
            description: 'A convenient enqueuing utility for WordPress.',
            git: 'git://github.com/manovotny/wp-enqueue-util.git',
            name: 'WP Enqueue Util',
            slug: 'wp-enqueue-util',
            type: 'plugin', // Should be `plugin` or `theme`.
            url: 'https://github.com/manovotny/wp-enqueue-util',
            version: '1.1.1'
        }
    };

}());
