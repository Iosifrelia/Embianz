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
</script>
