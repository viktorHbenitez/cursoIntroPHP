var gulp = require('gulp');
var connect = require('gulp-connect-php');
var sass = require('gulp-sass');
var browserSync = require('browser-sync');
var reload = browserSync.reload;  /*llamada  al atributo reload*/
var autoprefixer = require('gulp-autoprefixer');

/* 2. definimos las tareas que realizara*/
gulp.task('sass', function() {
  gulp.src('scss/app.scss')
    .pipe(autoprefixer()) 
    .pipe(sass({
      includePaths: ['scss'] //compila  de sass a css
    }))
    .pipe(gulp.dest('app/css'));  //lo guarda en el destino app/css
});

// browser-sync para los archivos que estará revisando por cambios
gulp.task('serve',['sass'],function(){
  //listado de archivos
  var files = [
    "app/css/*.css",
    "app/js/*.js",
    "app/*.html",
    "app/*.php"
  ];
  //configurar browsersync
   browserSync.init(files, {
      //browser sync para un servidor php necesita proxy, por eso lo usamos aqui
     proxy: "localhost/CursoPHP/formularioPHP",
     notify: false
    });
});
gulp.task('watch',['sass', 'serve'], function(){
  gulp.watch(['scss/**/*.scss'],['sass']);
});


gulp.task('default',['watch']); /*Asignar un tarea que se ejecutara terminal> gulp*/