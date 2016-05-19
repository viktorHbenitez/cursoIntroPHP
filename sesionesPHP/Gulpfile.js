var gulp         = require('gulp');
var browserSync  = require('browser-sync').create();
var sass         = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var concat = require('gulp-concat');
var gulIf = require('gulp-if');
var useRef = require('gulp-useref');
var uglify = require('gulp-uglify');
var uglifyCss = require('gulp-uglifycss');


// Static Server + watching  scss,html,php,css files
// browser-sync para los archivos que estará revisando por cambios
gulp.task('browserSync', ['sass'], function() {

    browserSync.init({
        proxy: "localhost/CursoPHP/sesionesPHP/app/texto.php",
        notify: false
    });

});
gulp.task('watch',['browserSync','sass'], function(){
    gulp.watch("scss/*.scss", ['sass']);
    gulp.watch("app/*.php").on('change', browserSync.reload);
    gulp.watch("app/**/*.php").on('change', browserSync.reload);
    gulp.watch("app/css/*.css").on('change', browserSync.reload);
}) 

// Compile sass into CSS & auto-inject into browsers
gulp.task('sass', function() {
    return gulp.src("scss/*.scss") // toma una cadena coincidda con uno o mas archivos
        .pipe(sass())
        .pipe(autoprefixer()) //retorna un stream que puede ser dada a un plugin o tarea
        .pipe(gulp.dest("app/css")) //destino al compilar sass
        .pipe(browserSync.reload({stream: true}));
});
gulp.task('useRef', function(){
    return gulp.src('app/*.php')
        .pipe(useRef())
        .pipe(gulIf('*.js', uglify()))
        .pipe(gulIf('*.css', uglifyCss()))
        .pipe(gulp.dest('dist'));
    });

gulp.task('default', ['watch'], function(){
        gulp.watch("app/*.php").on('change', browserSync.reload);
        gulp.watch("scss/**/*.scss").on('change', browserSync.reload);
    });
