module.exports = function(grunt) {

    // 1. All configuration goes here 
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

      // make a zipfile
      compress: {
        main: {
          options: {
            archive: '<%= pkg.name %>-<%= pkg.version %>.zip'
          },
          files: [
            {
                expand: true,
                cwd: '<%= pkg.mainDirectory %><%= pkg.subDirectory %>',
                src: ['**/*','!.git/**','!bin/**','!node_modules/**','!**.zip','!gruntfile.js','!LICENSE','!package-lock.json','!package.json'],
                dest: '/'
            }, // makes all src relative to cwd
          ]
        }
      }    

    });

    // 3. Where we tell Grunt we plan to use this plug-in.
    grunt.loadNpmTasks('grunt-contrib-compress');


    // 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
    grunt.registerTask('default', ['compress']);
    
};