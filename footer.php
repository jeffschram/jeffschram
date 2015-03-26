			
			</main>
			
			<footer class="site-footer">
        <div class="container">
          <nav class="site-nav">
            <a href="index.html">Home</a>
            <a href="example-grids.html">Grids</a>
            <a href="example-modules.html">Modules</a>
            <a href="example-forms.html">Forms</a>
            <a href="http://skyline.is">Skyline</a>
          </nav>
          <small class="site-credits">&copy; 2014 Site Name</small>
        </div>
      </footer>

    </div><!--/.site-->

  <script src="js/jquery.js"></script>
  <script src="js/skyline-dev-guides.js"></script>
  <script>
    function rando(a, b) {
      return Math.floor(Math.random() * b) + a;
    }
    
    function decorate() {
      $(".decoration").empty();
      var boxes_n = rando(5, 10);
      var i = 0;
      while ( i < boxes_n ) {
        i++;
        var size = rando(150, 200);
        var half = size * -.5;
        var xn = 100/boxes_n;
        var x = i*xn;
        var y = 50;
        $(".decoration").append("<div style='z-index: "+size+"; width: "+size+"px; height: "+size+"px; top: "+y+"%; left: "+x+"%; margin-top: "+half+"px; margin-left: "+half+"px;'></div>");
      }
    }
  
    // decorate();

  </script>


  </body>


</html>