<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.js">

</script>

<footer class="sticky-footer bg-primary text-white ">
  <div class="container">
    <div class="row">
                <!--First column-->
                <div class="col-md-3">
                   <h4 class=""><strong><?php echo $nombreapp; ?></strong></h4>

                     <p>Versíon: 1.0</p>
                </div>
                <!--/.First column-->
    </div>
  </div>
  <div class="footer-copyright">
      <div class="container">
        <center>
        <strong>©2019 <a href="https://brannar.com"><b>BrannAR</b></a></strong>
        </center>
      </div>
  </div>
</footer>
<script>
new WOW().init();
</script>
<script type="text/javascript">
   $(document).ready(function () {
         (function ($) {
             $('#yobusco').keyup(function () {
                 var rex = new RegExp($(this).val(), 'i');
                 $('.buscar').hide();
                 $('.buscar').filter(function () {
                     return rex.test($(this).text());
                 }).show();
             })
         }(jQuery));
     });
  </script>