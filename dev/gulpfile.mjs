import gulp from "gulp";
import rename from "gulp-rename";
import uglify from "gulp-uglify";

const paths = {
	input: "js/**/*.js",
	output: "../assets/js",
};

const minifyJs = () => {
	return gulp
		.src(paths.input)
		.pipe(uglify())
		.pipe(rename({ suffix: ".min" }))
		.pipe(gulp.dest(paths.output));
};

const watchFiles = () => {
	gulp.watch(paths.input, minifyJs);
};

const build = gulp.series(minifyJs);

const defaultTask = gulp.series(minifyJs, watchFiles);

export { build, defaultTask as default };
