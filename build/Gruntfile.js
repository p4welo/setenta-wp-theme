module.exports = function (grunt) {
    'use strict';

    var version = generateAndSaveNewVersion('.version');
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        watch: {
            files: ['<%= jshint.files %>'],
            tasks: ['jshint']
        },
        "bower-install-simple": {
            options: {
                color: true
            },
            "prod": {
                options: {
                    production: true
                }
            }
        },
        jshint: {
            files: ['Gruntfile.js', 'assets/**/*.js'],
            options: {
                globals: {
                    jQuery: true,
                    console: true,
                    module: true
                }
            }
        },
        clean: {
            files: [
                "../dist",
                "../*.php"
            ],
            options: {
                force: true
            }
        },
        concat: {
            options: {
                separator: ';'
            },
            dist: {
                src: [
                    '../vendor/jquery/dist/jquery.js',
                    '../vendor/bootstrap/dist/js/bootstrap.js',
                    '../vendor/jssor/js/jssor.js',
                    '../vendor/jssor/js/jssor.slider.js',
                    '../vendor/angularjs/angular.js',
                    '../vendor/angular-sanitize/angular-sanitize.js',
                    '../vendor/angular-resource/angular-resource.js',
                    '../vendor/angular-translate/angular-translate.js',
                    '../vendor/lodash/lodash.js',
                    '../vendor/moment/min/moment-with-locales.js',
                    '../vendor/fullcalendar/dist/fullcalendar.js',
                    '../vendor/owl.carousel/dist/owl.carousel.js',
                    '../assets/**/*.js'
                ],
                dest: '../dist/assets/js/main.js'
            }
        },
        uglify: {
            start: {
                files: [
                    {
                        src: '../dist/assets/js/main.js',
                        dest: '../dist/assets/js/main-' + version +'.js'
                    }
                ]
            }
        },
        cssmin: {
            target: {
                options: {
                    keepSpecialComments: 0,
                    preserveLicenseComments: false,
                    rebase: false
                },
                files: [
                    {
                        src: '../assets/css/style.css',
                        dest: '../dist/assets/css/style-' + version + ".css"
                    }
                ]
            }
        },
        copy: {
            main: {
                files: [
                    {
                        expand: true,
                        cwd: '../vendor/bootstrap/dist/fonts/',
                        src: '*',
                        dest: '../dist/assets/fonts/'
                    },
                    {
                        expand: true,
                        cwd: '../vendor/font-awesome/fonts/',
                        src: '*',
                        dest: '../dist/assets/fonts/'
                    },
                    {
                        expand: true,
                        cwd: '../assets/img/',
                        src: '**/*',
                        dest: '../dist/assets/img/'
                    }
                ]
            }
        },
        replace: {
            dist: {
                options: {
                    patterns: [
                        {
                            json: {
                                "version": version
                            }
                        }
                    ]
                },
                files: [
                    {
                        expand: true,
                        flatten: true,
                        src: ['../src/*.php'],
                        dest: '../'
                    }
                ]
            }
        }
    });

    function generateAndSaveNewVersion(path) {
        var version = new Date().getTime();
        grunt.file.write(path, version);
        return version;
    }

    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-clean');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-replace');
    grunt.loadNpmTasks("grunt-bower-install-simple");

    grunt.registerTask('default', ['bower-install-simple', 'jshint', 'clean', 'concat', 'uglify', 'cssmin', 'copy', 'replace']);
};

