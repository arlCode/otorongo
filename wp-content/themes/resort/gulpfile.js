var gulp = require('gulp'),
  sass = require('gulp-sass'),
  cleanCSS = require('gulp-clean-css'),
  concat = require('gulp-concat'),
  sourcemaps = require('gulp-sourcemaps'),
  autoprefixer = require('gulp-autoprefixer'),
  runSequence = require('run-sequence'),
  svgstore = require("gulp-svgstore"),
  svgmin = require("gulp-svgmin"),
  cheerio = require("gulp-cheerio"),
  browserSync = require('browser-sync').create(),
  reload = browserSync.reload,
  input = './scss/**',
  inputFile = './scss/styles.scss',
  output = '';
  outputFileName = 'style.css';

var autoprefixerOptions = {
  browsers: ['last 2 versions', '> 5%', 'Firefox ESR']
};

var sassOptions = {
  errLogToConsole: true,
  outputStyle: 'expanded'
};

gulp.task('styles', function() {
  runSequence('sass');
});

gulp.task('sass', function () {
  return gulp
    .src(inputFile)
    // .pipe(sourcemaps.init())
    .pipe(sass(sassOptions).on('error', sass.logError))
    // .pipe(sourcemaps.write('./style/maps'))
    .pipe(autoprefixer(autoprefixerOptions))
    .pipe(sourcemaps.init())
    .pipe(concat(outputFileName))
    .pipe(cleanCSS())
    .pipe(sourcemaps.write())
    .pipe(gulp.dest(output));
});

gulp.task('default', ['styles']);

gulp.task('prod', function () {
  return gulp
    .src(input)
    .pipe(sass({ outputStyle: 'compressed' }))
    .pipe(autoprefixer(autoprefixerOptions))
    .pipe(gulp.dest(output));
});