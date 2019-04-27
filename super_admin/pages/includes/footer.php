<footer>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
              &copy; <?php echo date('Y'); ?>&nbsp;&nbsp;<strong>NACOSSUNN</strong>. All Rights Reserved
              </p>
            </div>
            <div class="credits">
              Powered by the&nbsp;<strong><a href="https://sdcunn.com/">SDC Group</a></strong>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
<!--/#footer-->

<!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Custom Script --->
    <script>
   var tmp =  $(function(){
        $('#alert-box').slideDown(700).delay(10000).slideUp(700)

        function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                pre = input.parentNode;
                pre = pre.parentNode;
                pre = pre.parentNode;
                image = 'url("' + e.target.result + ' ") '
                pre.style.backgroundImage = image
                pre.style.backgroundSize = 'cover'
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $(".profile-img").change(function(){
        readURL(this);
    });

    });
    </script>

</body>

</html>
  </body>