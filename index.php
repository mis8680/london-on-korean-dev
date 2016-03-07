<html>
<head>
    <title>Angular 2 QuickStart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="include/bootstrap-3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main.css">

</head>

<!-- 3. Display the application -->
<body>
<div class="app">
    <!-- top header -->
    <header class="header header-fixed navbar">
        <?php require_once "include/header.php"?>
    </header>

    <section class="layout">
        <!-- sidebar menu -->
        <?php require_once "include/side_bar.php"?>
        <!-- /sidebar menu -->
        <!-- main content -->
        <section class="main-content">
            <!-- content wrapper -->
            <div class="content-wrap">
                <!-- content goes here -->
                <my-app>Loading...</my-app>
            </div>
            <!-- /content wrapper -->
            <a class="exit-offscreen"></a>
        </section>
        <!-- /main content -->
    </section>
</div>
</body>
<!-- 1. Load libraries -->
<!-- IE required polyfills, in this exact order -->
<script src="node_modules/es6-shim/es6-shim.min.js"></script>
<script src="node_modules/systemjs/dist/system-polyfills.js"></script>
<script src="node_modules/angular2/es6/dev/src/testing/shims_for_IE.js"></script>

<script src="node_modules/angular2/bundles/angular2-polyfills.js"></script>
<script src="node_modules/systemjs/dist/system.src.js"></script>
<script src="node_modules/rxjs/bundles/Rx.js"></script>
<script src="node_modules/angular2/bundles/angular2.dev.js"></script>

<!-- 2. Configure SystemJS -->
<script>
    System.config({
        packages: {
            app: {
                format: 'register',
                defaultExtension: 'js'
            }
        }
    });
    System.import('app/main')
            .then(null, console.error.bind(console));
</script>
<script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
<script src="include/bootstrap-3.3.6/js/bootstrap.min.js"></script>
</html>
