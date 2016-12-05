var gulp = require('gulp'),
    cache = require('gulp-cache'),
    clean = require('gulp-clean'),
    concat = require('gulp-concat'),
    del = require('gulp-rimraf'),
    less = require('gulp-sass'),
    imagemin = require('gulp-imagemin'),
    minifyhtml = require('gulp-minify-html'),
    minifycss = require('gulp-minify-css'),
    rev = require('gulp-rev'),
    uglify = require('gulp-uglify'),
    notify = require('gulp-notify'),//加控制台文字描述用的
    usemin = require('gulp-usemin');

//路径设定
var paths = {
    cssRoot: 'resources/assets/css/',
    sassRoot: 'resources/assets/sass/'
}

//编译sass文件
gulp.task('sass', function(){
    return gulp.src(paths.sassRoot+'app.scss')
        .pipe(sass())
        .pipe(gulp.dest(paths.cssRoot));
});

//监控
gulp.task('watch', function() {
    //监控所有.sass
    gulp.watch(paths.sassRoot+'app.scss', ['sass']);
});