var gulp = require('gulp'),
	sass = require('gulp-sass'),
	minifycss = require('gulp-minify-css'),
	autoprefixer = require('gulp-autoprefixer');

var imagemin = require('gulp-imagemin');
var pngquant = require('imagemin-pngquant');

gulp.task('compress-images', function(){

	return gulp.src('assets/img/**/*')
        .pipe(imagemin({
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [pngquant()]
        }))
        .pipe(gulp.dest('assets/img'));

});


gulp.task('sass', function () {
    gulp.src('styles/**/*.sass')
        .pipe(sass({
            indentedSyntax : true,
            indentType: "tab"
        }).on('error', sass.logError))
        .pipe(autoprefixer({
            browsers : ['last 2 versions'],
            cascade : false
        }))
        .pipe(minifycss())
        .pipe(gulp.dest('styles/'));
    });


gulp.task('watch', function(){
	gulp.watch('styles/**/*.sass', ['sass'])	
	gulp.watch('assets/img', ['compress-images'])
});

gulp.task('default', ['watch', 'sass', 'compress-images'], function(){});