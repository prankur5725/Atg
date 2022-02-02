<div class="whatsapp">
<a href="https://api.whatsapp.com/send?phone=918558833531" target="new"><i class="fa fa-whatsapp"></i></a>
</div>

<footer class="bg-dark text-light pt-5 pb-5 ">
  <div class="container">
   <div class="row">
    <div class="col-lg-4 pr-4">
      <h3><span class="footer_spn">ATG TUFF </span></h3>
      <p class="mt-4">Processed glass specialist servicing PAN India.</p>

      
        <ul class="foo-social" id="">
           <li class="foo-li"><a href="https://www.facebook.com/atgtuff/" title="Facebook" class="nav-link"><i class="fa fa-facebook"></i></a></li>

            <li class="foo-li"><a href="https://twitter.com/atgtuff1" title="Twitter" class="nav-link"><i class="fa fa-twitter"></i></a></li>

            <li class="foo-li"><a href="https://www.instagram.com/atg_tuff/" title="Instagram" class="nav-link"><i class="fa fa-instagram"></i></a></li>

            <li class="foo-li"><a href="mailto:sales@atgglasses.in" class="nav-link"><i class="fa fa-envelope"></i></a></li>
           
        </ul>
   

    </div>
    
    <div class="col-lg-8 ">
      <div class="wrap">
        <div class="row ml-lg-4">
          <div class="col-lg-4 ">
            <h4><span class="footer_spn">QUICK LINKS</span></h4>
              <ul class="foo-helper">
                <li><a class="linkr" href="brouchure.php">Brochure</a></li>
                <li><a class="linkr" href="gallery">Gallery</a></li>
                <li><a class="linkr" href="career">Career</a></li>
                <li><a class="linkr" href="about">About Us</a></li>

              </ul>


          </div>
          <div class="col-lg-4">
            <h4><span class="footer_spn">PRODUCTS</span></h4>
            <ul class="foo-helper">
                
                <?php
                  
                  $sel2 = mysqli_query($con,"select * from products");
                  while($row2 = mysqli_fetch_assoc($sel2))
                  {
                  ?>
                    <li><a class="linkr"  href="product_details.php?id=<?= $row2['id'] ?>"><?= ucwords($row2['pname']) ?></a></li>
                  <?php
                  }
                  
                  ?>
            
            </ul>
          </div>
          <div class="col-lg-4">
            <h4><span class="footer_spn">CONTACT US</span></h4>
            <ul class="foo-helper">
              <li class="d-flex "><div><i class="fas fa-map-marker-alt"></i></div> <div class="ml-2"><a href="https://goo.gl/maps/g5iS7zsoEvKghZuB9" target="new"> D-24, Industrial Growth Center, Mansa Road, Bathinda, Punjab 151001</a></div></li>
              <li class="d-flex"><div ><i class="fa fa-phone"></i></div> <div class="ml-2"><a class="linkr"  href="tel:+918558833534">+91-8558833534, 42</a></div></li>
             
            </ul>
          </div>
        </div>

      </div>
    </div>

   </div>





  </div>

</footer>
<footer class="bg-dark text-danger d-flex justify-content-center align-items-center pt-2 pb-2" style="margin-top:1px">
  <P class="m-0">
     &copy;&nbsp;<script>document.write(new Date().getFullYear());</script> ATG TUFF |  All rights reserved.
    </P>
</footer>