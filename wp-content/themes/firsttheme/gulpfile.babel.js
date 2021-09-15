import gulp from 'gulp';
import yargs from 'yargs';
import dartSass from 'sass';
import gulpSass from 'gulp-sass';
const sass = gulpSass( dartSass );
import cleanCSS from 'gulp-clean-css';
import gulpif from 'gulp-if';

const PRODUCTION = yargs.argv.prod;

export const styles = () => {
    return gulp.src('src/assets/scss/bundle.scss')
        .pipe(sass())
        .pipe(gulpif(PRODUCTION, cleanCSS({'compatibility': 'ie8'})))
        .pipe(gulp.dest('dist/assets/css'));
}