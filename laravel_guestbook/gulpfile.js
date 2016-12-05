var gulp = require('gulp'),
    sass = require('gulp-sass'),
    minifycss = require('gulp-minify-css')
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