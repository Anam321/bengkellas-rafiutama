<!doctype html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/bootstrap/login-form-20/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 31 May 2021 19:52:33 GMT -->

<head>
    <title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url(); ?>assets/backend/auth/css/A.style.css.pagespeed.cf.eQk9-CoeFP.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/backend/auth/css/font-awesome.min.css">
</head>




<body class="img js-fullheight" style="background-image:url(<?= base_url(); ?>assets/backend/auth/images/xbg.jpg.pagespeed.ic.jWFl-8BG3y.jpg)">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Login #10</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <h3 class="mb-4 text-center">Have an account?</h3>


                        <?= $this->session->flashdata('message'); ?>


                        <form action="<?= base_url('admin/auth'); ?>" class="signin-form" method="post">

                            <div class="form-group">
                                <input type="email" id="email" name="email" class="form-control" placeholder="Username" required value="<?= set_value('email'); ?>">
                                <?= form_error('email', 'required'); ?>

                            </div>

                            <div class="form-group">
                                <input id="password" name="password" type="password" class="form-control" placeholder="Password" required>

                                <?= form_error('password', '<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password">', '</span>'); ?>
                            </div>


                            <div class=" form-group">
                                <button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
                            </div>

                        </form>




                    </div>
                </div>
            </div>
        </div>
    </section>



    <script src="<?= base_url(); ?>assets/backend/auth/js/jquery.min.js"></script>
    <script src="<?= base_url(); ?>assets/backend/auth/js/jquery-beacons.min"></script>
    <script src="<?= base_url(); ?>assets/backend/auth/js/popper.js%2bbootstrap.min.js%2bmain.js.pagespeed.jc.9eD6_Mep8S.js"></script>
    <script>
        eval(mod_pagespeed_T07FyiNNgg);
    </script>
    <script>
        eval(mod_pagespeed_zB8NXha7lA);
    </script>
    <script>
        eval(mod_pagespeed_xfgCyuItiV);
    </script>
    <script defer src="../../../../static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"6582be3db903ddab","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.5.2","si":10}'></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/bootstrap/login-form-20/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 31 May 2021 19:52:36 GMT -->

</html>