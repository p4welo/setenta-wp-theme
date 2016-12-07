module.exports = function (grunt) {
    'use strict';

    var version = generateAndSaveNewVersion('.version');
    var dest_dir = "bin";

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
                "dist",
                dest_dir
                //"footer.php",
                //"header.php"
            ],
            options: {
                force: true
            }
        },
        concat: {
            options: {
                separator: ';'
            },
            vendor: {
                src: [
                    'vendor/jssor/js/jssor.js',
                    'vendor/jssor/js/jssor.slider.js',
                    'vendor/angularjs/angular.js',
                    'vendor/angular-sanitize/angular-sanitize.js',
                    'vendor/angular-translate/angular-translate.js',
                    'vendor/owl.carousel/dist/owl.carousel.js'

                ],
                dest: dest_dir + '/assets/js/vendor.js'
            },
            app : {
                src: [
                    'assets/**/*.js'
                ],
                dest: dest_dir + '/app.js'
            }
        },
        uglify: {
            start: {
                files: [
                    {
                        src: dest_dir + '/app.js',
                        dest: dest_dir + '/app.js'
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
                        src: 'style.css',
                        dest: dest_dir + '/style.css'
                    }
                ]
            }
        },
        copy: {
            main: {
                files: [
                    {
                        expand: true,
                        cwd: 'vendor/bootstrap/dist/fonts/',
                        src: '*',
                        dest: dest_dir + '/assets/fonts/'
                    },
                    {
                        expand: true,
                        cwd: 'vendor/font-awesome/fonts/',
                        src: '*',
                        dest: dest_dir + '/assets/fonts/'
                    },
                    {
                        expand: true,
                        cwd: 'vendor/jssor/img/',
                        src: '**/*',
                        dest: dest_dir + '/assets/img/jssor/'
                    },
                    {
                        expand: true,
                        cwd: 'assets/img/',
                        src: '**/*',
                        dest: dest_dir + '/assets/img/'
                    },
                    {
                        expand: true,
                        cwd: 'assets/fonts/',
                        src: '*',
                        dest: dest_dir + '/assets/fonts/'
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
                        src: ['*.php'],
                        dest: dest_dir + "/"
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

