'use strict';

var Fiber = require('fibers');
var gulp = require('gulp');
var sass = require('gulp-dart-sass');
var sourcemaps = require('gulp-sourcemaps');
var browserSync = require('browser-sync').create();
var jsonminify = require('gulp-jsonminify');
var flatten = require('gulp-flatten');

const { series } = require('gulp');
const cleanCSS = require('gulp-clean-css');
const minify = require('gulp-minify');
const imagemin = require('gulp-imagemin');

//COMPILE SASS CODE
gulp.task('sass', function () {
  return gulp.src('./*.scss')
  .pipe(sass({fiber: Fiber}).on('error', sass.logError))
  .pipe(sourcemaps.init())  
  .pipe(sass().on('error', sass.logError))
  //MINIFY
  .pipe(cleanCSS({compatibility: 'ie8'}))
  .pipe(sourcemaps.write())
  .pipe(gulp.dest('./public/build/styling'))  
});

//MINIFY JSON
gulp.task('json-minify', function () {
  return gulp.src('./src/**/*.json')
      .pipe(jsonminify({noSource: true}))
      .pipe(flatten())
      .pipe(gulp.dest('./public/build/js'));
});

//OPTIMIZE IMAGES
gulp.task('image-minify', function () {
  return gulp.src('./src/images/*')
    .pipe(imagemin())
    .pipe(flatten())
    .pipe(gulp.dest('./public/build/images'));
});

//COMPRESS JS CODE
gulp.task('js-minify', function() {
  return gulp.src('./src/**/*.js')
    .pipe(minify({noSource: true}))
    .pipe(flatten())
    .pipe(gulp.dest('./public/build/js'));
});

// Static Server + watching scss/html files
gulp.task('serve', function() {
  browserSync.init({
    proxy: "http://localhost/public/"
  });
  gulp.watch("./src/**/*.scss", gulp.parallel('sass')).on('change', browserSync.reload); 
  gulp.watch("./src/**/*.php").on('change', browserSync.reload);
  gulp.watch("./src/**/*.js", gulp.parallel('js-minify')).on('change', browserSync.reload);
  gulp.watch("./src/**/*.json").on('change', browserSync.reload);
});

exports.default = series('js-minify', 'json-minify', 'sass', 'serve');