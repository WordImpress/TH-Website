/**
 *  CAGIX Gulp File
 *
 *  @description: Compiles LESS & runs Live Reload
 *  @author: Devin
 *  @created: 11/17/2014
 */

var gulp = require( 'gulp' );
var less = require( 'gulp-less' );
var watch = require( 'gulp-watch' );
var prefixer = require( 'gulp-autoprefixer' );
var plumber = require( 'gulp-plumber' );
var livereload = require( 'gulp-livereload' );
var path = require( 'path' );
var gutil = require( 'gulp-util' );
var sourcemaps = require( 'gulp-sourcemaps' );
var minifyCSS = require( 'gulp-minify-css' );
var rename = require( 'gulp-rename' );

gulp.task( 'less', function () {
	return gulp.src( './assets/less/app.less' )  // only compile the entry file
		.pipe( sourcemaps.init() )
		.pipe( less( {compress: true} )
			.on( 'error', function ( err ) {
				var displayErr = gutil.colors.red( err );
				gutil.log( displayErr );
				gutil.beep();
				gulp.task('watch');
			} ) )

		.pipe( minifyCSS( {keepBreaks: false} ) )
		.pipe( rename( 'main.min.css' ) )
		.pipe( sourcemaps.write() )
		.pipe( gulp.dest( './assets/css' ) )
		.pipe( livereload() );
} );
gulp.task( 'watch', function () {
	livereload.listen();
	gulp.watch( ['./assets/less/**/*.less'], ['less'] );  // Watch all the .less files, then run the less task
	gulp.watch( ['./*php'], ['less'] );  // Watch all the .less files, then run the less task
} );

gulp.task( 'default', ['watch'] ); // Default will run the 'entry' watch task