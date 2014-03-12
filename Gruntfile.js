module.exports = function(grunt) {

  // register tasks
  grunt.registerTask('default', 'Watch and compile CSS', ['watch']);

  // project config
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    sass: {
      dist: {
        files: {
          // target .css : source .sass
          "app/static/css/app.css": "app/static/sass/app.sass"
        }
      }    
    },
    watch: {
      styles: {
        files: ['app/static/sass/*.sass'],
        tasks: ['sass'],
        options: {
          livereload: true
        }
      }
    }
  });

  // load tasks
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
}