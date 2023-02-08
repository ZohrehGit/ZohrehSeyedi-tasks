
    </div>
  </div>
  <div class="row">
<footer style="background-color: rgb(0, 110 , 110); color: white;">

<!-- My own link to CSS 
<link rel="stylesheet" href="style.css">
-->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">
    <p style="font-size: large;">Contact us:</p>
    <p style="font-size: medium;">Phone: 044 123 456 <br> 
    Email: cool.restaurant@gmail.com <br> 
    Address: Feikkikatu 7, Hämeenlinna </P>
  </div>

  <div class="footer-copyright text-center py-3" >© 2020 Copyright <br>
    <?php
     

        $fname = basename($_SERVER['php_self']);
        $last_modified = basename($fname);
        echo "last modified: " . date ("F d Y H:i a", filemtime($last_modified));
    ?>
  </div>



  

</footer>
</div>
</div>

<!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
    </html>