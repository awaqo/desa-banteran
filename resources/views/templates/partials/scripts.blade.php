<!-- Flowbite JS -->
<script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

{{-- AOS --}}
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

<!-- AlpineJS -->
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<script>
    $(document).ready(function() {
        $(document).on('click', '.deleteBtn', function (e) {
            e.preventDefault();

            var d_id = $(this).val();
            $('#delete_id').val(d_id);

            $('#cekBantuan').modal('show');
        });
    })
</script>