  <!-- jQuery -->
  <script src="{{ asset('AdminLTE/plugins/jquery/jquery.min.js') }}"></script>
  <!-- Bootstrap 5 -->
  <script src="{{ asset('Bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('AdminLTE/dist/js/adminlte.min.js') }}"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{ asset('AdminLTE/dist/js/demo.js') }}"></script>
  <!-- date-range-picker -->
  <script src="{{ asset('AdminLTE/plugins/daterangepicker/daterangepicker.js') }}"></script>

  <script src="{{asset('js/app.js')}}"></script>
  <!-- Eloquent Sluggable -->
  <script>
    const nama = document.getElementById('nama');
    const slug = document.getElementById('slug');

    nama.addEventListener('change', function() {
      fetch('/siaran/checkSlug?nama=' + nama.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });

    function showPreview(objFileInput) {
            if (objFileInput.files[0]) {
                var fileReader = new FileReader();
                fileReader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                    $("#targetLayer").html('<img src="'+e.target.result+'" class="img-fluid w-25 h-25 m-md-2" />');
                    $("#targetLayer").css('opacity','0.7');
                    $(".icon-choose-image").css('opacity','0.5');
                }
                fileReader.readAsDataURL(objFileInput.files[0]);
            }
        }
  </script>


</body>
</html>
