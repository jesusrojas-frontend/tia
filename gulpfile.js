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
  gulp.watch('./vistas/*.html').on('change',browserSync.reload);
  gulp.watch('./css/*.css').on('change',browserSync.reload);
  gulp.watch('./*.php').on('change',browserSync.reload);
  gulp.watch('./js/*.js').on('change',browserSync.reload);
  gulp.watch('./js/servicios/*.js').on('change',browserSync.reload);
  gulp.watch('./js/controladores/*.js').on('change',browserSync.reload);
  gulp.watch('./sass/*.sass', ['sass']);//.on('change', )
  gulp.watch('./jade/*.pug', ['pug']);//.on('change', )
})
gulp.task('sass', () =>{
  gulp.src('./sass/*.sass')
    .pipe(sass())
    .pipe(gulp.dest('./css'))
})
gulp.task('pug', ()=>{
  gulp.src('./jade/*.pug')
  .pipe(pug({
    pretty: true
  }))
  .pipe(gulp.dest('./'))
})
