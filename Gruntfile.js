//task definitions
var defaultTasks = ['concat', 'uglify', 'cssmin', 'imagemin'];
var withWatcher = defaultTasks.concat(['watch:js', 'watch:css', 'watch:images']);

//define the files that needs to be optimized, javascript should follow loading hierarchy
var jsTargetFiles = ['js/jquery.js', 'js/bootstrap.min.js', 'js/**/*.js'];
var cssTargetFiles = ['css/**/*.css'];
var imageTargetFiles = ['img/*.{png,jpg,gif}'];

//iiiiiiIIIIITTTTTS.... TIME!
module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        concat: {
            options: {
                separator: ';'
            },
            dist: {
                src: jsTargetFiles,
                dest: 'src/<%= pkg.name %>.js'
            }
        },
        uglify: {
            options: {
                banner: '/*! <%= pkg.name %> <%= grunt.template.today("dd-mm-yyyy") %> */\n'
            },
            dis: {
                files: {
                    'dist/<%= pkg.name %>.min.js': ['<%= concat.dist.dest %>']
                }
            }
        },
        cssmin: {
            options: {
                shorthandCompacting: false,
                roundingPrecision: -1
            },
            target: {
                files: {
                    'dist/<%= pkg.name %>.min.css': cssTargetFiles
                }
            }
        },
        imagemin: {
            dist: {
                options: {
                    optimizationLevel: 7
                },
                files: [{
                    expand: true,
                    cwd: 'img',
                    src: imageTargetFiles,
                    dest: 'dist/'
                }]
            }
        },
        watch: {
            js: {
                files: ['<%= concat.dist.src %>'],
                tasks: ['concat', 'uglify']
            },
            css: {
                files: cssTargetFiles,
                tasks: ['cssmin']
            },
            images: {
                files: imageTargetFiles,
                tasks: ['imagemin']

            }
        },
        concurrent: {
            options: {
                logConcurrentOutput: true
            },
            default: {
                tasks: defaultTasks
            },
            watcherTasks: {
                tasks: withWatcher
            }
        }
    });

    //
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-imagemin');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-concurrent');

    //we use concurrent as we'll be watching multiple directories with assigned specific tasks for them
    grunt.registerTask('default', ['concurrent:default']);
    grunt.registerTask('with-watcher', ['concurrent:watcherTasks']);
};