var gulp = require('gulp'),//подключаем установленный модуль gulp через переменную gulp
    less = require('gulp-less'),//подключаем предварительно установленный плагин gulp-less через переменную less
    autoprefixer = require('gulp-autoprefixer'),
    spritesmith = require('gulp.spritesmith'),
    browserSync = require('browser-sync'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglifyjs'),
    cssMinify = require('gulp-cssnano'),
    cssRename =  require('gulp-rename'),
    del = require('del'),
    imagemin = require('gulp-imagemin'),
    pngquant = require('imagemin-pngquant'),
    cache = require('gulp-cache');

//Sprites
gulp.task('sprite', function () {
  var spriteData = gulp.src('images/sprites/*.png').pipe(spritesmith({
    imgName: 'gulp-sprite.png',
    cssName: 'gulp-sprite.css'
  }));
  return spriteData.pipe(gulp.dest('app/images/sprites'));
});

//Компиляция less->css
gulp.task('less', function () {
	// body...
	return gulp.src('less/**/*.less')//берем из папки less (и всех ее подпапок все файлы с расширением .less (путь указывается отноительно файла gulpfile.js)
	.pipe(less())//вызываем плагин 
  .pipe(autoprefixer(['last 15 versions', '> 1%', 'ie 8', 'ie 7'], {cascade: true}))//после компиляции расставляем автопрефиксы
	.pipe(gulp.dest('css')) //указываем относительный путь в папку, в которую нужно сохранить скомпилированные файлы
  /*.pipe(browserSync.reload({
    stream: true,
  }))*/
});

//minify scripts
//gulp.task ('scripts', function () {
  // body...
  //return gulp.src([
    //'app/libs/masonry.js',
    //'libs/isotope.pkgd.min.js',
    //'libs/masonry.pkgd.min.js',
   //'libs/imagesLoaded.pkgd.min.js',
    //'app/libs/isotope.js',
    //'app/libs/jquery.min.js',
 //    ])
//.pipe(concat('libs.min.js'))
//.pipe(uglify())
//.pipe(gulp.dest('app/js'))
//});


//minify css
gulp.task('cssminify', function() {
  return gulp.src('css/*.css')
  .pipe(cssMinify())
  .pipe(cssRename({suffix: '.min'}))
  .pipe(gulp.dest('css'))
});

//create server
gulp.task('browser-sync', function () {
  // body...
browserSync ({
	proxy: 'localhost/litmanovich',
  /*server: {
    baseDir: 'rush-in-alaskan-dumplings'
  },  */
  notify: false
});

});

//удаляем папку "dist" (выполнять этот таск нужно в процессе сборки,т.е в таске 'build')
gulp.task('clean', function () {
  // body...
  return del.sync('dist')
});

//очистка кэша. Запускается вручную по мере необходимости
gulp.task('clear', function () {
  // body...
  return cache.clearAll();
});

//сжатие изображений с кэшированием
gulp.task('img', function () {
  // body...
  return gulp.src('img/**/*')
  .pipe(imagemin({
    interlaced: true,
    progressive: true,
    svgoPlugins: [{removeViewBox: false}],
    une: [pngquant()]
  }))
  .pipe(gulp.dest('images'));
})


//watch on changes
gulp.task('watch', ['browser-sync', 'less'/*, 'cssminify', 'scripts'*/], function () {//в квадратных скобках пишем задачи, которые должны быть выполнены 
                                                    // до watch
  // body...
  gulp.watch('less/*.less', ['less']);//**-иыбрать все вложенные папки
  gulp.watch('*.php', browserSync.reload);
  gulp.watch('css/*.css', browserSync.reload);
  gulp.watch('js/**/*.js', browserSync.reload);
});






















//сборка файлов проекта
gulp.task('build', ['clean', 'img', 'less', 'scripts'], function () {
  // body...
  var buildCss = gulp.src([//переносим css
    'app/css/styles.css',
    'app/css/styles.min.css',
    'app/css/reset.css',
    //можно указать несколько файлов
    ])
  .pipe(gulp.dest('dist/css'));

  var buildFonts = gulp.src('app/fonts/**/*')//переносим шрифты
    .pipe(gulp.dest('dist/fonts'));

  var buildjs = gulp.src('app/js/*')//переносим js
    .pipe(gulp.dest('dist/js'));

  var buildlibs = gulp.src([//переносим не сжавшиеся js-файлы библиотек, оставшиеся в папке libs
    'app/libs/masonry.js',
    'app/libs/isotope.js',
    ])
  .pipe(gulp.dest('dist/libs'));

  var buildHtml = gulp.src('app/*.html')//переносим html
  .pipe(gulp.dest('dist'));
});
