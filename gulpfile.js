const gulp = require('gulp'),
      browserSync = require('browser-sync').create(),
      sass = require('gulp-sass'),
      autoprefixer = require('gulp-autoprefixer'),
      pug = require('gulp-pug');

gulp.task('default', () =>{
  browserSync.init({
    server: './'
  });
  gulp.watch('./**/*.html').on('change',browserSync.reload);
  gulp.watch('./galeria/*.html').on('change',browserSync.reload);
  gulp.watch('./blog/*.html').on('change',browserSync.reload);
  gulp.watch('./preguntas-frecuentes/*.html').on('change',browserSync.reload);
  gulp.watch('./quienes-somos/*.html').on('change',browserSync.reload);
  gulp.watch('./**/*.css').on('change',browserSync.reload);
  gulp.watch('./*.php').on('change',browserSync.reload);
  gulp.watch('./js/*.js').on('change',browserSync.reload);
  gulp.watch('./sass/*.sass', ['sass']);//.on('change', )
  gulp.watch('./jade/*.pug', ['index']);//.on('change', )
  gulp.watch('./galeria/jade/*.pug', ['galeria']);//.on('change', )
  gulp.watch('./blog/jade/*.pug', ['blog']);//.on('change', )
  gulp.watch('./quienes-somos/jade/*.pug', ['quienes']);//.on('change', )
  gulp.watch('./preguntas-frecuentes/jade/*.pug', ['preguntas']);//.on('change', )
})
gulp.task('sass', () =>{
  gulp.src('./sass/*.sass')
    .pipe(sass())
    .pipe(gulp.dest('./css'))
})
gulp.task('index', ()=>{
  gulp.src('./jade/*.pug')
  .pipe(pug({
    pretty: true
  }))
  .pipe(gulp.dest('./'))
})
gulp.task('galeria', ()=>{
  gulp.src('./galeria/jade/index.pug')
  .pipe(pug({
    pretty: true
  }))
  .pipe(gulp.dest('./galeria'))
})
gulp.task('blog', ()=>{
  gulp.src('./blog/jade/*.pug')
  .pipe(pug({
    pretty: true
  }))
  .pipe(gulp.dest('./blog'))
})
gulp.task('quienes', ()=>{
  gulp.src('./quienes-somos/jade/*.pug')
  .pipe(pug({
    pretty: true
  }))
  .pipe(gulp.dest('./quienes-somos'))
})
gulp.task('preguntas', ()=>{
  gulp.src('./preguntas-frecuentes/jade/*.pug')
  .pipe(pug({
    pretty: true
  }))
  .pipe(gulp.dest('./preguntas-frecuentes'))
})
