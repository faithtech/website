var gulp = require('gulp'),
    sass = require('gulp-ruby-sass'),
    cleanCSS = require('gulp-clean-css'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify');

var paths = {
  	css: 'source/sass/**/*',
  	js : 'source/js/**/*'
};

gulp.task('build-css', function () {
    return sass('source/sass/main.sass')
    	.on('error', sass.logError)
        .pipe(cleanCSS())
        .pipe(gulp.dest('static/css'));
});

gulp.task('build-js', function() {
    return gulp.src(paths.js)
        .pipe(concat('all.js'))
        .pipe(uglify())
        .pipe(gulp.dest('public/js'));
});

gulp.task('watch', function() {
    gulp.watch(paths.css, ['build-css']);
	gulp.watch(paths.js, ['build-js', 'build-jshint']);
});

gulp.task('default', ['build-css', 'build-js', 'watch']);