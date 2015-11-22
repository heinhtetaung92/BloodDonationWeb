var gulp = require('gulp');
var serve = require('gulp-serve');
var watch = require('gulp-watch');
 
gulp.task('load',function(){
	gulp.src("./src/**/*")
	.pipe(watch("./src/**/*"))
	.pipe(gulp.dest('build/'));
});
gulp.task('serve', serve('src'));
//gulp.task('serve-build', serve(['app', 'build']));
/*gulp.task('serve-prod', serve({
  root: ['app', 'build'],
  port: 80,
  middleware: function(req, res) {
    // custom optional middleware 
  }
}));*/

gulp.task('default', ['load','serve']);