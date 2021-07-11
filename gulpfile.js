'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass')(require('node-sass'));
var concat = require('gulp-concat');
sass.compiler = require('node-sass');

var themeDir = 'wp-content/themes/wp-base';

gulp.task('compile-sass', function (done) {
    gulp.src(`${themeDir}/scss/**/*.scss`)
   .pipe(sass().on('error', sass.logError))
   .pipe(gulp.dest(`${themeDir}/css/`))
   done();
});

gulp.task('watch', function(done){
    gulp.watch(`${themeDir}/scss/**/*.scss`, gulp.series('compile-sass'));
    done();
});