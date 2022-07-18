var gulp= require('gulp');
var sass= require("gulp-sass");
var concat= require("gulp-concat");


gulp.task('css', function() {
return gulp.src('./assets/sass/*.css')
.pipe(concat('style.css'))
.pipe(gulp.dest('./assets/css'));
});

gulp.task('sass', function() {
    return gulp.src('./assets/sass/*.scss')
    .pipe(sass().on('error',sass.logError))
    .pipe(concat('scss-style.css'))
    .pipe(gulp.dest('./assets/sass'));
    });

gulp.task('scripts', function() {
    return gulp.src('./assets/js/jss/*.js')
    .pipe(concat('scripts.js'))
    .pipe(gulp.dest('./assets/js'));
    });

   

gulp.task('watch',function(){
    
        gulp.watch('./assets/sass/*.scss',gulp.series('sass'));
        gulp.watch('./assets/sass/*.css',gulp.series('css'));
        gulp.watch('./assets/js/jss/*.js',gulp.series('scripts'));
    });
