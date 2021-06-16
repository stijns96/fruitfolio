// Initialize modules
// Gulp
const { src, dest, watch, series, parallel } = require("gulp"),
    clean = require("gulp-clean"),
    concat = require("gulp-concat"),
    htmlmin = require("gulp-htmlmin"),
    imagemin = require("gulp-imagemin"),
    postcss = require("gulp-postcss"),
    rename = require("gulp-rename"),
    sass = require("gulp-sass"),
    sourcemaps = require("gulp-sourcemaps"),
    uglify = require("gulp-uglify"),
    // Other
    autoprefixer = require("autoprefixer"),
    cssnano = require("cssnano"),
    merge = require("merge-stream"),
    gradient = require("postcss-easing-gradients"),
    // Server
    browserSync = require("browser-sync").create();

// File path variables
const paths = {
    // Assets
    animations: {
        src: "dist/assets/animations/**/*.{json,png}",
        dest: "public/assets/animations/",
    },

    images: {
        src: "dist/assets/images/**/*.{jpg,jpeg,png,gif,svg}",
        dest: "public/assets/images/",
    },

    scripts: {
        src: "dist/assets/js/**/*.js",
        dest: "public/assets/js/",
    },

    styles: {
        src: "dist/assets/scss/**/*.scss",
        dest: "public/assets/css/",
    },

    // Inlcudes
    includes: {
        src: "dist/includes/**/*.php",
        dest: "public/includes/",
    },

    // Pages
    pages: {
        src: "dist/pages/**/*.php",
        dest: "public/pages/",
    },

    // Vendor
    vendor: {
        cssSrc: "dist/vendor/**/*.{css,scss}",
        jsSrc: "dist/vendor/**/*.js",
        dest: "public/vendor/",
    },

    // Index
    index: {
        src: "dist/*.php",
        dest: "public/",
    },
};

// Browser Sync Task
function browserSyncTask() {
    browserSync.init({
        proxy: "stijn.loc/school/fruitfolio/public/",
    });
}

function cleanAssets() {
    return src("public/assets/", {
        allowEmpty: true,
    }).pipe(clean());
}

// Animation Task
function animationTask() {
    return src(paths.animations.src).pipe(dest(paths.animations.dest));
}

// Image Task
function imageTask() {
    return src(paths.images.src).pipe(imagemin()).pipe(dest(paths.images.dest));
}

// JS Taks
function jsTask() {
    return src(paths.scripts.src)
        .pipe(sourcemaps.init())
        .pipe(concat("scripts.js"))
        .pipe(uglify())
        .pipe(
            rename({
                suffix: ".min",
            })
        )
        .pipe(sourcemaps.write("."))
        .pipe(dest(paths.scripts.dest))
        .pipe(browserSync.stream());
}

// CSS Task
function cssTask() {
    return src(paths.styles.src)
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(postcss([autoprefixer(), cssnano(), gradient()]))
        .pipe(
            rename({
                suffix: ".min",
            })
        )
        .pipe(sourcemaps.write("."))
        .pipe(dest(paths.styles.dest))
        .pipe(browserSync.stream());
}

// Vendor Task
// function vendorTask() {
//     const vendorCss = src(paths.vendor.cssSrc)
//         .pipe(sourcemaps.init())
//         .pipe(sass())
//         .pipe(postcss([autoprefixer(), cssnano(), gradient()]))
//         .pipe(rename({
//             suffix: '.min'
//         }))
//         .pipe(sourcemaps.write('.'))
//         .pipe(dest(paths.vendor.dest))

//     const vendorJs = src(paths.vendor.jsSrc)
//         .pipe(sourcemaps.init())
//         .pipe(uglify())
//         .pipe(rename({
//             suffix: '.min'
//         }))
//         .pipe(sourcemaps.write('.'))
//         .pipe(dest(paths.vendor.dest))

//     return merge(vendorCss, vendorJs)
//         .pipe(browserSync.stream())
// }

// PHP Task
function phpTask() {
    const includes = src(paths.includes.src)
        .pipe(
            htmlmin({
                collapseWhitespace: true,
                includeAutoGeneratedTags: false,
                ignoreCustomFragments: [/<%[\s\S]*?%>/, /<\?[=|php]?[\s\S]*?\?>/],
            })
        )
        .pipe(dest(paths.includes.dest));

    const pages = src(paths.pages.src)
        .pipe(
            htmlmin({
                collapseWhitespace: true,
                includeAutoGeneratedTags: false,
                ignoreCustomFragments: [/<%[\s\S]*?%>/, /<\?[=|php]?[\s\S]*?\?>/],
            })
        )
        .pipe(dest(paths.pages.dest));

    const index = src(paths.index.src)
        .pipe(
            htmlmin({
                collapseWhitespace: true,
                includeAutoGeneratedTags: false,
                ignoreCustomFragments: [/<%[\s\S]*?%>/, /<\?[=|php]?[\s\S]*?\?>/],
            })
        )
        .pipe(dest(paths.index.dest));

    return merge(includes, pages, index).pipe(browserSync.stream());
}

// Watch Task
function watchTask() {
    watch(
        [
            paths.animations.src,
            paths.scripts.src,
            paths.styles.src,
            paths.includes.src,
            /* paths.vendor.cssSrc, paths.vendor.jsSrc,*/ paths.pages.src,
            paths.index.src,
        ],
        series(parallel(animationTask, jsTask, cssTask, /* vendorTask,*/ phpTask))
    );
}

exports.sync = browserSyncTask;
exports.clean = cleanAssets;

exports.anim = animationTask;
exports.img = imageTask;
exports.js = jsTask;
exports.css = cssTask;
// exports.vendor = vendorTask;
exports.php = phpTask;

exports.watch = parallel(watchTask, browserSyncTask);

exports.default = series(
    parallel(animationTask, jsTask, cssTask, /* vendorTask,*/ phpTask),
    parallel(watchTask, browserSyncTask)
);