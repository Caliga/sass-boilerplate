'use strict';

var gulp            = require('gulp'),
    gutil           = require('gulp-util'),
    sass            = require('gulp-sass'),
    sourcemaps      = require('gulp-sourcemaps'),
    autoprefixer    = require('gulp-autoprefixer');

var config  = {
    source: './source',
    build:  './build',
    sass: {
        errLogToConsole: true,
        //outputStyle: 'compressed'
        outputStyle: 'expanded'
    },
    autoprefixer: {
        browsers: ['last 3 versions']
    }
};

gulp.task('compile:sass', function() {
    return gulp
        .src([
            `${config.source}/style.scss`
        ])
        .pipe(sourcemaps.init())
        .pipe(sass(config.sass).on('error', sass.logError))
        .pipe(autoprefixer(config.autoprefixer))
        .pipe(gulp.dest(`${config.build}`))
        .resume();
});

gulp.task('watch', function(){
    gulp.watch(`${config.source}/**/*.scss`, ['compile:sass']);
});

gulp.task('default', ['watch']);

function handleError(e)
{
    gutil.log(e);
}
