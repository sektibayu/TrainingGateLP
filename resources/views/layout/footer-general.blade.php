    <script src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
    <!-- <script src="{{asset('js/jQuery-2.1.4.min.js')}}"></script> -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/chart.min.js')}}"></script>
    <script src="{{asset('js/chart-data.js')}}"></script>
    <script src="{{asset('js/easypiechart.js')}}"></script>
    <script src="{{asset('js/easypiechart-data.js')}}"></script>
    <script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('js/bootstrap-table.js')}}"></script>
    <script>
        $('#calendar').datepicker({
        });

        !function ($) {
            $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
                $(this).find('em:first').toggleClass("glyphicon-minus");      
            }); 
            $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
        }(window.jQuery);

        $(window).on('resize', function () {
          if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
        })
        $(window).on('resize', function () {
          if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
        })
        // $(function () {
        // // Replace the <textarea id="editor1"> with a CKEditor
        // // instance, using default configuration.
        // CKEDITOR.replace('editor1');
        // //bootstrap WYSIHTML5 - text editor
        // $(".textarea").wysihtml5();
      });
    </script>   
</body>

</html>
