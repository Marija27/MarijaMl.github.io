var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('default', function() {
  // place code for your default task here
});


gulp.task('sass', function(){
	return gulp.src('sass/**/*.scss')
	.pipe(sass({outputStyle: 'expanded'}))
	.pipe(gulp.dest('css/'))
});


gulp.task('watch', function(){
	gulp.watch('sass/**/*.scss', ['sass'])
});