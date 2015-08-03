<?php
require_once("header.php");
?>
      <script type="text/javascript">
         var image1=new Image()
         image1.src="img/pizzapak.jpg"
         var image2=new Image()
         image2.src="img/testipizza.jpg"
         var image3=new Image()
         image3.src="img/pizza1.jpg"
         var image4=new Image()
         image4.src="img/pizza2.jpg"
         var image5=new Image()
         image5.src="img/pizza5.jpg"
         var image6=new Image()
         image6.src="img/pizza3.jpg"
         var image7=new Image()
         image7.src="img/pizza6.jpg"
        
      </script>
            <img class="img-responsive slider" src="img/pizza.jpg"  name="slide">
            <script>
               var step=1
               function slideit(){
               if (!document.images)
               return
               document.images.slide.src=eval("image"+step+".src")
               if (step<7)
               step++
               else
               step=1
               setTimeout("slideit()",4200)
               }
               slideit()
            </script>
               <h3>Da Angelo Pizza </h3>
               <blockquote class="content-block">
                  <p>Leckeres Essen bei Da Angelo Pizza online bestellen.</p>
                  <p>Die besten Spezialitaten werden Dir schnell und heiss Nachhause geliefert.</p>
                  <p>Diese Leistung wurde kürzlich vom Bestellportal Foodarena mit der Auszeichnung <a href="http://st-galler-nachrichten.ch/lifestyle/detail/article/bei-den-besten-bestellen-005331/">100-Top-Lieferdienste</a>der Schweiz ausgezeichnet.</p>
                  <p>Die Auszeichnung erfolgte aufgrund guter Kundenbewertungen bei Qualität und Service.</p>
                  <p>Da Angelo Pizza - Dein Lieferservice für St. Gallen und Umgebung.</p>
               </blockquote>
                  </br></br></br>
                      <h4>Unsere Aktionen</h4>
                      <p>Zurzeit keine Aktionen</p>
               <img id="logo" src="img/logo.png" class="img-responsive">
                  <div id="footer">
                  &copy; 2015<a href="mailto: nagendram@muster.com"> Nithuja Nagendram</a>
            </div>

   </body>
</html>