module.exports = function (grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        watch: {
            files: ['<%= jshint.files %>'],
            tasks: ['jshint']
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
        concat: {
            options: {
                separator: ';'
            },
            dist: {
                src: [
                    'vendor/jquery/dist/jquery.js',
                    'vendor/bootstrap/dist/js/bootstrap.js',
                    'vendor/jssor/js/jssor.js',
                    'vendor/jssor/js/jssor.slider.js',
                    'vendor/angularjs/angular.js',
                    'vendor/angular-sanitize/angular-sanitize.js',
                    'vendor/angular-resource/angular-resource.js',
                    'vendor/angular-translate/angular-translate.js',
                    'vendor/lodash/lodash.js',
                    'vendor/moment/min/moment-with-locales.js',
                    'vendor/fullcalendar/dist/fullcalendar.js',
                    'vendor/owl.carousel/dist/owl.carousel.js',
                    'assets/**/*.js'
                ],
                dest: 'dist/<%= pkg.name %>.js'
            }
        },
        uglify: {
            options: {
                banner: '/*! <%= pkg.name %> <%= grunt.template.today("dd-mm-yyyy") %> */\n',
                sourceMap: true
            },
            dist: {
                files: {
                    'dist/<%= pkg.name %>.min.js': ['<%= concat.dist.dest %>']
                }
            }
        },
        htmlmin: {                                     // Task
            dist: {                                      // Target
                options: {                                 // Target options
                    removeComments: true,
                    collapseWhitespace: true
                },
                files: {                                   // Dictionary of files
                    'dist/index.php': '../new-index.php'
                }
            }
        }
    });
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-qunit');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-htmlmin');

    grunt.registerTask('default', ['jshint', 'concat', 'uglify']);
};

