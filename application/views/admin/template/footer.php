<footer class="app-footer">
    <div class="copyright"> Copyright © <script>
            document.write(new Date().getFullYear());
        </script>. All right reserved. </div>
</footer>

</main>
</div>
<!-- BEGIN BASE JS -->
<script src="<?= base_url() ?>assets/backend/dashboard/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/backend/dashboard/vendor/popper.js/umd/popper.min.js"></script>
<script src="<?= base_url() ?>assets/backend/dashboard/vendor/bootstrap/js/bootstrap.min.js"></script>
<!-- END BASE JS -->

<!-- BEGIN PLUGINS JS -->
<script src="<?= base_url() ?>assets/backend/dashboard/vendor/pace-progress/pace.min.js"></script>
<script src="<?= base_url() ?>assets/backend/dashboard/vendor/stacked-menu/js/stacked-menu.min.js"></script>
<script src="<?= base_url() ?>assets/backend/dashboard/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="<?= base_url() ?>assets/backend/dashboard/vendor/flatpickr/flatpickr.min.js"></script>
<script src="<?= base_url() ?>assets/backend/dashboard/vendor/easy-pie-chart/jquery.easypiechart.min.js"></script>
<script src="<?= base_url() ?>assets/backend/dashboard/vendor/chart.js/Chart.min.js"></script>
<script src="<?= base_url() ?>assets/backend/dashboard/vendor/summernote/summernote-bs4.min.js"></script>
<script src="<?= base_url() ?>assets/backend/dashboard/vendor/sortablejs/Sortable.min.js"></script>
<script src="<?= base_url() ?>assets/backend/dashboard/vendor/nestable2/jquery.nestable.min.js"></script>

<script src="<?= base_url() ?>assets/backend/dashboard/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/backend/dashboard/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url() ?>assets/backend/dashboard/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url() ?>assets/backend/dashboard/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url() ?>assets/backend/dashboard/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<!-- END PLUGINS JS -->

<!-- BEGIN THEME JS -->
<script src="<?= base_url() ?>assets/backend/dashboard/javascript/pages/summernote-demo.js"></script>
<script src="<?= base_url() ?>assets/backend/dashboard/javascript/theme.min.js"></script>
<!-- END THEME JS -->

<!-- BEGIN PAGE LEVEL JS -->
<script src="<?= base_url() ?>assets/backend/dashboard/javascript/pages/dataTables.bootstrap.js"></script>
<!-- <script src="<?= base_url() ?>assets/backend/javascript/pages/datatables-demo.js"></script> -->
<!-- END PAGE LEVEL JS -->
<script type="text/javascript">
    $(function() {
        $('.menu a').filter(function() {
            return this.href == location.href
        }).parent().addClass('has-active').siblings().removeClass('has-active')
        $('.menu a').click(function() {
            $(this).parent().addClass('has-active').siblings().removeClass('has-active')
        })
    })
</script>
</body>

</html>