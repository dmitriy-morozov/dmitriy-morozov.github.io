"use strict";

// подключаем компоненты gulp
var gulp = require("gulp");
var less = require("gulp-less");
var plumber = require("gulp-plumber");
var postcss = require("gulp-postcss");
var autoprefixer = require("autoprefixer");
var mqpacker = require("css-mqpacker");
var minify = require("gulp-csso");
var rename = require("gulp-rename");
var imagemin = require("gulp-imagemin");
var svgstore = require("gulp-svgstore");
var svgmin = require("gulp-svgmin");
var run = require("run-sequence");
var del = require("del");
var uglify = require('gulp-uglify');
var watch = require('gulp-watch');
var pump = require('pump');
var path = require('path');
var swPrecache = require('sw-precache');



gulp.task("style", function () {
    gulp.src("src/css/style.css")
        .pipe(plumber())
        .pipe(postcss([
            autoprefixer({
                browsers: [
                    "last 1 version",
                    "last 2 Chrome versions",
                    "last 2 Firefox versions",
                    "last 2 Opera versions",
                    "last 2 Edge versions"
                ]
            }),
            mqpacker({
                sort: true
            })
        ]))
        .pipe(minify())
        .pipe(rename("style.min.css"))
        .pipe(gulp.dest("assets/css"));
});

gulp.task('scripts', function (cb) {
    pump([
            gulp.src('src/js/*.js'),
            uglify(),
            gulp.dest('assets/js')
        ],
        cb
    );
});

gulp.task("images", function () {
    return gulp.src("src/images/**/*.{png,jpg,gif}")
        .pipe(imagemin([
            imagemin.optipng({optimizationLevel: 3}),
            imagemin.jpegtran({progressive: true})
        ]))
        .pipe(gulp.dest("assets/images"));
});

gulp.task("symbols", function () {
    return gulp.src("src/images/*.svg")
        .pipe(svgmin())
        .pipe(svgstore({
            inlineSvg: true
        }))
        .pipe(gulp.dest("assets/images"));
});

gulp.task("copy", function () {
    return gulp.src([
        "src/fonts/**/*.{woff,woff2,ttf,otf,svg,eot}",
        "src/images/**",
        "src/js/**",
        "src/css/**",
        "src/bootstrap/**"

    ], {
        base: "src"
    })
        .pipe(gulp.dest("./assets"));
});

gulp.task("clean", function () {
    return del("assets");
});

gulp.task('sw', function (callback) {
    var rootDir = '.';
    swPrecache.write(path.join('precache-config.js'), {
        staticFileGlobs: [
            rootDir + '/assets/**/*.{js,html,css,png,jpg,JPG,gif,svg,eot,ttf,woff,woff2}',
            rootDir + '/favicons/*.{js,html,css,png,jpg,JPG,gif,svg,eot,ttf,woff,woff2}',
            'index.html'
         ],
        stripPrefix: '/'
    }, callback);
});

gulp.task("build", function (fn) {
    run(
        "clean",
        "copy",
        "style",
        "scripts",
        "images",
        "symbols",
        "sw",
        fn
    );
});

gulp.task('watcher', function(){
    gulp.watch("./**/*.css", ['style']);
    gulp.watch("./**/*.js", ['scripts']);
    console.log('watch');
});




