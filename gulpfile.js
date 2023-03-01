const gulp = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const autoprefixer = require("gulp-autoprefixer");
const cleanCSS = require("gulp-clean-css");
const rename = require("gulp-rename");
const concat = require("gulp-concat");
const terser = require("gulp-terser");

gulp.task("sass", function () {
    return gulp
        .src("./src/scss/style.scss")
        .pipe(sass().on("error", sass.logError))
        .pipe(
            autoprefixer({
                cascade: false,
            })
        )
        .pipe(
            cleanCSS({
                compatibility: "ie8",
            })
        )
        .pipe(rename("main.min.css"))
        .pipe(gulp.dest("./dist/css"));
});

gulp.task("js", function () {
    return gulp
        .src("./src/js/**/*.js")
        .pipe(concat("main.js"))
        .pipe(
            terser({
                output: {
                    comments: false,
                },
            })
        )
        .pipe(
            rename({
                suffix: ".min",
            })
        )
        .pipe(gulp.dest("./dist/js"));
});

gulp.task("watch", function () {
    gulp.watch("./src/scss/**/*.scss", gulp.series("sass"));
    gulp.watch("./src/js/**/*.js", gulp.series("js"));
});

gulp.task("default", gulp.series("sass", "js", "watch"));
