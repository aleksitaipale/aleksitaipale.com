module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),


    sass: {
      options: {
      },
      dist: {
        options: {
          outputStyle: 'compressed'
        },
        files: {
          'css/custom_styles.css': 'scss/custom_styles.scss'
        }
      }
    },

    imagemin: {
      dynamic: {
        files: [{
          expand: true,
          cwd: 'img/',
          src: ['**/*.{png,jpg,gif}'],
          dest: 'build/'
        }]
      }
    },

    responsive_images: {
      resizeAll: {
        options: {
          engine:"im",
          sizes: [{
            name:"retina",
            width: '100%',
            height:'100%'
          },{
            name:"large",
            width: '70%',
            height:'70%'

          },{
            name:"small",
            width: '40%',
            height:'40%'
          }]
        },
        files: [{
          expand: true,
          src: ['**.{jpg,gif,png}'],
          cwd: 'img/',
          dest: 'img/resized/'
        }]
      }
    },

    jshint: {
      all: ['js/production.js']
    },

    scsslint: {
      allFiles: [
      'scss/*.scss',
      ],
      options: {
        bundleExec:false,
        config: null,
        reporterOutput: 'scss-lint-report.xml',
        colorizeOutput: true
      },
    },

    cacheBust: {
      options: {
        encoding: 'utf8',
        algorithm: 'md5',
        length: 16
      },
      assets: {
        files: [{
          src: ['index.html']
        }]
      }
    },

/*
    autoprefixer: {
      dist: {
        files: {
          'css/custom_styles.css': 'css/custom_styles.css'
        }
      }
    },
    */

    watch: {
      grunt: { files: ['Gruntfile.js'] },

      sass: {
        files: 'scss/*.scss',
        tasks: ['sass']
      },

      
    }
  });

grunt.loadNpmTasks('grunt-sass');
grunt.loadNpmTasks('grunt-scss-lint');
grunt.loadNpmTasks('grunt-contrib-jshint');
grunt.loadNpmTasks('grunt-contrib-imagemin');
grunt.loadNpmTasks('grunt-autoprefixer');
grunt.loadNpmTasks('grunt-responsive-images');
grunt.loadNpmTasks('grunt-contrib-watch');
grunt.loadNpmTasks('grunt-cache-bust');
//,'autoprefixer'
grunt.registerTask('build', ['sass']);
grunt.registerTask('default', ['build','responsive_images','imagemin', 'cacheBust','jshint','watch']);
};
