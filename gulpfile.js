// bower install
// sudo npm install gulp gulp-uglify gulp-rename gulp-less gulp-concat gulp-plumber gulp-cache-bust gulp-replace --save-dev

// Required

var gulp = require('gulp'),
    uglify = require('gulp-uglify'),
	rename = require('gulp-rename'),
    less = require('gulp-less'),
    concat = require('gulp-concat'),
    plumber = require('gulp-plumber'),
    cachebust = require('gulp-cache-bust'),
    replace = require('gulp-replace');

// Scripts Task

gulp.task('scripts', function(){
    // Copy js source files from bower packages to js/vendor/ folder
	gulp.src(['bower_components/bootstrap/dist/js/bootstrap.js',
			  'bower_components/jquery/dist/jquery.js',
		  ])
        .pipe(plumber())                    // prevents breaking and has to go first here
        .pipe(gulp.dest('js/vendor/'));

    // Concat vendor javascript and our javascript
    gulp.src(['js/vendor/jquery.js',
              'js/vendor/bootstrap.js',
			  'js/main.js'
		  ])
        .pipe(plumber())                    // prevents breaking and has to go first here
        .pipe(concat('selimlab.js'))
        .pipe(uglify())
        .pipe(rename({suffix: '.min'}))
		.pipe(gulp.dest('js/'));
});

// LESS Task

gulp.task('styles', function(){
    gulp.src('css/less/selimlab.less')
        .pipe(plumber())                    // prevents breaking
        .pipe(less())
        .pipe(gulp.dest('css/'));
});

// CacheBust https://www.npmjs.com/package/gulp-cache-bust

gulp.task('cache', function(){
    gulp.src('./*.html')
        .pipe(replace(/(\?t=(\d)*)*/g, ''))    // http://www.cheatography.com/davechild/cheat-sheets/regular-expressions/ https://regex101.com/#javascript
	    .pipe(cachebust({type: 'timestamp'}))
	    .pipe(gulp.dest('./'));
});

// Watch task (primarily for LESS)

gulp.task('watch', function(){
    gulp.watch('js/main.js', ['scripts', 'cache']);
    gulp.watch('css/less/*.less', ['styles', 'cache']);
});

// Default task (calls other tasks)

gulp.task('default', ['scripts', 'styles', 'watch', 'cache']);
