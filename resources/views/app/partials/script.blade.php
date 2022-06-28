<script>
    function initSelect2()
    {
        $(".select2").select2({
            width: '100%',
            allowClear: true,
            placeholder: $(this).data('placeholder')
        });
    }
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {'X-CSRF-Token': '{{ csrf_token() }}'}
        });

        initSelect2();
    });
    $('#page_length').on('change', function() {
        window.location.replace('{{ URL::current() }}'+"?limit="+$(this).val());
    });

    $(document).on('submit', '#create_update_form', function (event) {
        event.preventDefault();
        let action = $(this).attr('action');
        let submitBtn = $(this).find('button[type=submit]').first();
        let btnTxt = 'Submit';
        if ( $(submitBtn).data('original-text') ) {
            btnTxt = $(submitBtn).data('original-text');
        }

        $(this).find('button[type=submit]').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> '+btnTxt);
        $(this).find('button[type=submit]').prop("disabled", true);

        $.ajax({
            url: action,
            type: 'POST',
            data: new FormData(this),
            dataType: 'JSON',
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function (){
                $(document).find('input,select,textarea').removeClass('is-invalid')
                $(document).find('.invalid-feedback').addClass('d-none');
                $(document).find('span.select2').css( "border" , "unset" );
            },
            success: function (response) {
                location.reload(); // $(location).attr('href')
            },
            error: function (data) {
                console.log(data);
                let errors = data.responseJSON.errors;
                $.each(errors, function( key, value ) {
                    let obj = $("#create_update_form [name=" + key + "]" );
                    obj.addClass( "is-invalid" );
                    obj.next('span.select2').css( "border" , "1px solid #ec2d38" );
                    obj.nextAll('.invalid-feedback').text(value);
                    obj.nextAll('.invalid-feedback').removeClass('d-none');
                });
            },
            complete: function (data) {
                submitBtn.html(btnTxt);
                submitBtn.prop('disabled', false);
            }
        })
    });

    $(document).on('click', '.editBtn,#createBtn', function () {
        let url = $(this).data('url');
        let modalTitle = 'Update';
        if ( $(this).data('title') ) {
            modalTitle = $(this).data('title');
        }

        $.ajax({
            url: url,
            method: "GET",
            success: function (response) {
                $('#create_update_modal .modal-title').text(modalTitle);
                $('#create_update_modal .modal-body').html(response);
                $('#create_update_modal').modal({
                    backdrop: 'static',
                    keyboard: true,
                    show: true
                });
            }
        });
    });

    $(document).on("click", ".deleteBtn", function(e){
        if(!confirm("Do you want to delete this item?")) {
            return false;
        }
        e.preventDefault();
        let url = $(this).attr('href');
        $('#deleteFrom').attr('action', url).submit();
    });
</script>
