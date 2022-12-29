<script>
    $(document).ready(function() {
        $('#category_table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('category') }}",
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'parrent',
                    name: 'parrent'
                },
                {
                    data: 'short_description',
                    name: 'short_description'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ]
        });

    });
</script>
<script>
    $(document).on('click', '.view', function(event) {
        event.preventDefault();
        var id = $(this).attr('id');

        $.ajax({
            url: "/edit_category/" + id + "/",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            dataType: "json",
            success: function(data) {
                $('#category_name').val(data.result.name);
                $('#category_parrent').val(data.result.parrent);
                $('#category_long_description').val(data.result.long_description);
                $('#category_short_description').val(data.result.short_description);
                $('#category_sequence').val(data.result.sequence);
                $('#category_start_date').val(data.result.start_date);
                $('#category_end_date').val(data.result.end_date);
                $('#hidden_id').val(id);
                $('.modal-title').text('Update - ' + data.result.name + ' - category');
                document.getElementById('editmodal-category').style.display = 'block';

            },
            error: function(data) {
                var errors = data.responseJSON;
                console.log(errors);
            }
        });
        

    });
</script>
<script>
    /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
            } else {
                dropdownContent.style.display = "block";
            }

        });
    }

    var modaluser = document.getElementById("modal-user");
    window.onclick = function(event) {
        if (event.target == modaluser) {
            modaluser.style.display = "none";
        }
    }
    var modalcategory = document.getElementById("modal-category");
    window.onclick = function(event) {
        if (event.target == modalcategory) {
            modalcategory.style.display = "none";
        }
    }
    var modaleditcategory = document.getElementById("editmodal-category");
    window.onclick = function(event) {
        if (event.target == modaleditcategory) {
            modaleditcategory.style.display = "none";
        }
    }
</script>
