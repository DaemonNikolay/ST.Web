let gulp = require("gulp"),
    less = require("gulp-less"),
    notify = require("gulp-notify");

gulp.task('lessToCss', () => {
    return gulp.src('app.less')
        .pipe(less())
        .on("error", notify.onError({
            message: "Error: <%= error.message %>",
            title: "Less to css error"
        }))
        .pipe(gulp.dest('./'));
});

gulp.task('watcher', () => {
    gulp.watch('inc/*.less', gulp.series('lessToCss'));
});

gulp.task('default', gulp.series(
    'lessToCss',
    'watcher'
));