module.exports = function (grunt) {
  'use strict';

  require('jit-grunt')(grunt);

  var version = generateAndSaveNewVersion('.version');
  var dest_dir = 'bin';

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
      files: ['Gruntfile.js', 'js/**/*.js'],
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
        src: [],
        dest: dest_dir + '/vendor.js'
      },
      app: {
        src: 'js/vendor_plugins.js',
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
    less: {
      options: {
        compress: true,
        yuicompress: true,
        optimization: 2
      },
      files: {
        src: 'less/index.less',
        dest: dest_dir + '/style.css'
      }
    },
    copy: {
      main: {
        files: [
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

  grunt.registerTask('default', ['bower-install-simple', 'jshint', 'clean', 'concat', 'uglify', 'less', 'copy', 'replace']);
};

