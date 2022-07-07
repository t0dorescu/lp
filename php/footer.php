<script>
    window.member = <?= json_encode($session['member']) ?>
    window.member = Array.isArray(member) ? {} : member
</script>