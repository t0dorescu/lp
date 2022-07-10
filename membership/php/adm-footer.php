
<footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>ICE STATION ZEBRA SRL</span></strong>. All Rights Reserved
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/apexcharts/apexcharts.min.js<?= v_adm() ?>"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js<?= v_adm() ?>"></script>
<script src="assets/vendor/chart.js<?= v_adm() ?>/chart.min.js<?= v_adm() ?>"></script>
<script src="assets/vendor/echarts/echarts.min.js<?= v_adm() ?>"></script>
<script src="assets/vendor/quill/quill.min.js<?= v_adm() ?>"></script>
<script src="assets/vendor/simple-datatables/simple-datatables.js<?= v_adm() ?>"></script>
<script src="assets/vendor/tinymce/tinymce.min.js<?= v_adm() ?>"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js<?= v_adm() ?>"></script>

<script>
    window.member = <?= json_encode($session['member']) ?>;
    window.member = Array.isArray(member) ? {} : member;
</script>