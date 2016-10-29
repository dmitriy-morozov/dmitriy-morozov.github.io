var gulp = require('gulp');
var less = require('gulp-less');

gulp.task('less', function() {
	gulp.src("less/style.less")
		.pipe(less())
		.pipe(gulp.dest("css"));

});

var watch = require('gulp-watch');

gulp.task('css:watch', function () {  
  watch({
    glob: 'less/**/*.less',
    emit: 'one',
    emitOnGlob: false
  }, function(files) {
    return files
      .pipe(less({
        paths: [ path.join(__dirname, 'less', 'includes') ]
       }))
      .pipe(gulp.dest('/css'))
      .on('error', gutil.log);
  });
});