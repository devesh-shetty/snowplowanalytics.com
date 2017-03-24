    <?php include_once('header.php'); ?>
    <link href="assets/css/snowplow-company-get-started/get-started.css" rel="stylesheet" type="text/css">
    </head>

    <body class="get-started">

        <?php include_once ('header.menu.php') ?>

        <!--
            MAIN AREA
        -->

        <section class="hero no-gutter-vertical">
            <div class="container theme-light text-center">
                <h5 class="text-uppercase">get started</h5>
                <h1 class="text-primary">Interested in Snowplow? <br/>Request a demo.</h1>
                <h4>We empower analysts, engineers, product managers, marketers, <br/>operations and other specialists to use digital event data <br/>to do transformative things with this data.</h4>
            </div>
            <div class="container spacer-top-50">
                <form class="col-md-8 col-md-push-2 well no-border">
                    <div class="clearfix no-gutter">
                        <div class="form-group col-md-6">
                            <label class="control-label" for="form-name">First Name</label>
                            <input type="text" class="form-control" id="form-name" aria-describedby="name" placeholder="Your first name">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label" for="form-company">Company</label>
                            <input type="text" class="form-control" id="form-company" aria-describedby="company" placeholder="Your company">
                        </div>
                    </div>
                    <div class="clearfix no-gutter spacer-top-30">
                        <div class="form-group col-md-6 has-error has-feedback">
                            <label class="control-label" for="form-email">Email</label>
                            <input type="email" class="form-control" id="form-email" aria-describedby="email" placeholder="Your email">
                            <span class="help-inline">Please correct the error</span>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label" for="form-phone">Phone</label>
                            <input type="tel" class="form-control" id="form-phone" aria-describedby="phone" placeholder="Your phone number">
                        </div>
                    </div>
                    <div class="clearfix no-gutter spacer-top-30">
                        <p>Please check the products you are interested in</p>
                        <div class="form-check">
                            <div class="form-group col-md-6">
                                <div class="form-check-label">
                                    <input type="checkbox" class="form-check-input" id="form-product-insights" checked="">
                                    <label class="control-label" for="form-product-insights">Snowplow Insights</label>
                                    <span class="help-inline">Please correct the error</span>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="form-check-label">
                                    <input type="checkbox" class="form-check-input" id="form-product-beta">
                                    <label class="control-label" for="form-product-beta">Snowplow React <sup>BETA</sup></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary spacer-top-30">Request a Demo</button>
                </form>
            </div>
        </section>


        <?php include_once('footer.php'); ?>
        <?php include_once('footer-scripts.php'); ?>

    </body>
</html>