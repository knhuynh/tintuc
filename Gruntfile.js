module.exports = function (grunt) {
    // Project configuration.
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        //watch
        watch: {
            sass: {
                files: ['app/scss/**/*.scss'],
                tasks: ['sass']
            },
            //concat
            concat: {
                files: ['app/js/**/*.js'],
                tasks: ['concat']
            }
        },
        //sass
        sass: {
            dist: {
                files: {
                    'css/all.css': ['app/scss/all.scss']
                }
            }
        },
        //concat
        concat: {
            dist: {
                files: {
                    'js/all.js': ['app/js/**/*.js']
                }
            }
        }
    });
    //Load the plugin
   
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-concat');
    // Default task(s).
    grunt.registerTask('build', ['sass','concat']);


};