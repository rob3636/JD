var gulp = require('gulp');
var w3cjs = require('gulp-w3cjs');
var concat = require('gulp-concat');
var browserSync = require('browser-sync');
var sass = require('gulp-sass');
var prefixer = require('gulp-autoprefixer');
var notify = require('gulp-notify');
var php = require('gulp-connect-php');
gulp.task('sass', function () {
    return gulp.src('resources/assets/sass/*.scss').pipe(sass({
        outputStyle: 'expanded'
        , precision: 2
        , errLogToConsole: true
    })).on('error', sass.logError).pipe(prefixer()).pipe(gulp.dest('public/css')).pipe(notify({
        message: 'Styles task complete'
    })).pipe(browserSync.reload({
        stream: true
    }));
});
gulp.task('reload', function () {
    browserSync.reload()
});
gulp.task('browser-sync', function () {
    php.server({
        base: 'public'
        , port: 8001
        , keepalive: true
        , stdio: 'ignore'
    })
    browserSync.init({
        open: true
        , proxy: "localhost:8001"
        , port: 8000
        , notify: false
    , });
});
gulp.task('scripts', function () {
    return gulp.src('resources/assets/dev_js/*.js').pipe(concat('all.js')).pipe(gulp.dest('public/js')).pipe(browserSync.reload({
        stream: true
    }));
})
gulp.task('html-validate', function () {
    return gulp.src('*.html').pipe(w3cjs()).pipe(browserSync.reload({
        stream: true
    }));
});
gulp.task('watch', ['browser-sync', 'html-validate', 'scripts', 'sass'], function () {
    gulp.watch('*.html', ['html-validate']);
    gulp.watch('resources/assets/dev_js/*.js', ['scripts']);
    gulp.watch('resources/assets/sass/*.scss', ['sass']);
    gulp.watch(['resources/views/*.php', 'resources/views/**/*.php'], ['reload']);
})
gulp.task('default', ['watch'])