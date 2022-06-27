<script>
    $('#page_length').on('change', function() {
        window.location.replace('{{ URL::current() }}'+"?limit="+$(this).val());
    });
</script>