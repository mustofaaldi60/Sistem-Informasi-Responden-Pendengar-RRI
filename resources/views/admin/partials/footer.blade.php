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
  <!-- Eloquent Sluggable -->
  <script>
    const nama = document.getElementById('nama');
    const slug = document.getElementById('slug');

    nama.addEventListener('change', function() {
      fetch('/siaran/checkSlug?nama=' + nama.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });
  </script>


</body>
</html>
