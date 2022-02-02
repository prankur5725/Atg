<?php
include('include/connection.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./lib/css/bootstrap.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="./lib/css/animate.css">
    <!-- AOS CSS -->
    <link rel="stylesheet" href="./lib/css/aos.css">
    <!-- nice-select css --> 
    <link rel="stylesheet" href="./lib/css/nice-select.css"> 
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="./lib/css/magnific-popup.css">
    <!-- Slick Slider CSS -->
    <link rel="stylesheet" href="./lib/css/slick.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="./lib/fontawesome/css/all.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="./css/main.style.css">

    <link rel="stylesheet" href="./css/nav.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <title>Glass Products | | ATG TUFF</title>

    <style>
     .col-sm-12{
      padding-left: 0px;
      padding-right: 0px;
     }
     
     #txt{
        padding-top: 60px;
     }
     .bg{
       background:url('img/gp.jpg');
     }
     #txt1{
        display:flex !important;
        justify-content: center !important;
        align-items:center !important;
     }
        
   @media only screen and (max-width:600px){

    img{
        max-width: 380px;
    }
    
    #txt1{
       align-items: flex-start !important;
       margin-bottom: 40px;
    }
    .navbar{
        min-width: 400px;
    }
    .right{
        left: 20px;
    }
    }
  </style>
  <style>
       #scroll {
            position:fixed;
            left:20px;
            bottom:20px;
            cursor:pointer;
            width:40px;
            height:40px;
            background-color:#3498db;
            text-indent:-9999px;
            display:none;
            -webkit-border-radius:60px;
            -moz-border-radius:60px;
            border-radius:60px
        }
        #scroll span {
            position:absolute;
            top:50%;
            left:50%;
            margin-left:-8px;
            margin-top:-12px;
            height:0;
            width:0;
            border:8px solid transparent;
            border-bottom-color:#ffffff;
        }
        #scroll:hover {
            background-color:#e74c3c;
            opacity:1;filter:"alpha(opacity=100)";
            -ms-filter:"alpha(opacity=100)";
        }
    </style>
    
</head>
<body >

  
    <a href="#" title="Back to top" id="scroll" style="display: none;"><span></span></a>


    
        <!-- Nvabar Strat  -->

         <?php
         include('include/header.php');
         ?>
        
        <!-- Nvabar end  -->

   
      <!-- Details section start -->
    <section class="details mb-4">

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12" data-aos="fade-right" data-aos-duration="3000">
                <div class="cimg" style="padding-top: 0px;">
                    <img src="img/gp.jpg" width="100%" height="370px;">
                </div>
            </div>
        </div>
        <div class="container">
        <div class="row" id="txt">
                <div class="col-sm-12">
                   <h2 style="font-weight: bold;letter-spacing:4px;">GLASS PRODUCTS</h2>
                   <div>
                     <p style="padding-bottom: 20px;font-weight:bold;">ATG TUFF creates a wide range of glass products in a fantastic choice of finishes. We are experts in glass toughening cut to any size you want. You could also say we have cornered the market in glass shower screens toughened for safety and strength and then sandblasted for privacy and panache.</p>
                     
                     <h2 style="font-weight: bold;font-size: 24px;">What glass products does ATG TUFF offer?</h2>
                     <p>Adapt at creating premium glass products custom-made as both one-off pieces and in large batches, we boast a high degree of technical expertise and technology as well as a crack team of master craftsmen who can provide hand-cut pieces. Our glass product range includes:</p>
                       
                   </div>
                </div>
                
                <div class="col-sm-12">
                    <div class="row">
                        <?php
                        $sel33 = mysqli_query($con,"select * from products");
                        while($row33 = mysqli_fetch_assoc($sel33))
                        {
                        ?>
                        <div class="col-sm-4 col-md-4 col-lg-4 mt-4">
                             <a href="product_details.php?id=<?= $row33['id'] ?>" style="color:black;text-decoration:none;" title="<?= $row33['pname'] ?>">
                            <div class="atgserv">
                                <img src="../admin/img/products_images/<?= $row33['pimage'] ?>" alt="no img" height="200px" width="400px;">
                            </div>
                            <div style="margin-top:9px;">
                                <h5 style="text-transform:uppercase;font-weight:bold;">
                                    <?= $row33['pname'] ?>
                                </h5>
                            </div>
                            </a>
                        </div>
                        <?php
                        }
                        ?>
                         
                        
                        
                    </div>
                </div>
                <div class="col-sm-12" >
                  <p style="padding-top: 40px;"></p>
                  <ul style="padding-left: 60px;">
                    <li><b>Glass splash backs</b> – We can produce glass splash backs and wall paneling for kitchens, bathrooms and other interior spaces in various thicknesses and sizes with either painted, printed, frosted.</li>
                    <li><b>Glass shelves & table tops -</b> The pinnacle of contemporary interior design, glass shelves offer modern flair to any space. We can create glass shelves cut to size for units. Our glass table tops are also crafted from quality toughened glass for a perfect finish and peace of mind.</li>
                    <li><b>Glass shower screens –</b> – A frameless shower enclosure is the height of bathroom luxury. With our advanced CNC capabilities, we can produce precision-cut frameless shower screens and enclosures in 8, 10 or 12mm glass. You can choose from clear, extra clear, or tinted glass. We also offer a sandblasted finish and easy clean coating to all glass shower screens.</li>
                    <li><b>Glass balustrades & balconies –</b> The ATG TUFF team can produce toughened, laminated or toughened and laminated glass balustrades for indoor and outdoor use. These are available in a choice of glass thicknesses with almost limitless size and shape possibilities. Glass balustrades can be produced in clear glass or with interlayers to produce colored and frosted effects.</li>
                    <li><b>Glass partitions –</b> With our modern glass toughening, we are able to accommodate sizes up to 4.m x 2.5m. This means we can produce interior glass partitioning in a variety of sizes, shapes, shades, designs and finishes for domestic or commercial use.</li>
                  </ul>
                </div>

                
        </div>
      </div>
        <div class="container-fluid mt-5 mb-3 pl-4">
          <div class="row bg" >
                <div class="col-sm-12 col-md-6 col-lg-6 pb-4 bg-light">
                    <div class="details-text" data-aos="fade-right" data-aos-duration="3000">
                        <h2><span>For more about ATG TUFF Glass:</span></h2>
                        <h3><b id="bol">Download our latest brochure</b></h3>
                        <p class="mb-4"style="margin-left: 10px;" >Find out more about ATG Glass </p>
                        <a href="" id="btn1" class="btn-custom mt-4" style="margin-left: 10px;"><i class="fa fa-file-pdf"></i>&nbsp; Download our Brouchure</a>
                    </div>
                </div>     
          </div>
        </div>
        <div class="container">
        <div class="row" style="padding-top: 40px;">
          <div class="col-sm-12">
              <h2 style="font-weight: bold;font-size: 24px;">From glass processing to installation</h2>
          

              <p style="padding-bottom: 15px;">As well as being glass manufacturers who provide a quick turnaround without compromising quality and finish, ATGTUFF offers a measure and installation service for selected glass products.</p>

          </div>
          <div class="col-sm-12">
              <h2 style="font-weight: bold;font-size: 24px;">Quality glass products that are clear to see</h2>
          
              <p style="padding-bottom: 15px;">The plentiful range of bespoke products created by our skilled and experienced glass manufacturers – and how these have been used in projects throughout the Punjab – is testament to their quality and value.</p>

              <p style="padding-bottom: 15px;">Check out our gallery to see how stunning our glass, glass splash backs, glass partitions and glass balustrades are in site. Please get in touch if you’d like more information or a quote for any of our glass products.</p>
          </div>
        </div>
      </div>
    </div>

    </section>

      <!-- Details section end -->

   

<?php

include('include/footer.php');

?>















 <!-- jquery plugins here-->
 <script src="./lib/js/jquery-1.12.1.min.js"></script>
 <!-- popper js -->
 <script src="./lib/js/popper.min.js"></script>
 <!-- bootstrap js -->
 <script src="./lib/js/bootstrap.min.js"></script>
 <!-- magnific js -->
 <script src="./lib/js/jquery.magnific-popup.min.js"></script>
 <!-- carousel js -->
 <script src="./lib/js/owl.carousel.min.js"></script>
 <script src="./lib/js/slick.min.js"></script>

 <!-- easing js -->
 <script src="./lib/js/jquery.easing.min.js"></script>
 <!--masonry js-->
 <script src="./lib/js/masonry.pkgd.min.js"></script>
 <script src="./lib/js/masonry.pkgd.js"></script>
 <!--form validation js-->
 <script src="./lib/js/jquery.nice-select.min.js"></script>
  <script src="./lib/js/aos.js"></script>
  <script src="./lib/js/jquery.ajaxchimp.min.js"></script>
  <script src="./lib/js/jquery.form.js"></script>
  <script src="./lib/js/jquery.validate.min.js"></script>
  <script src="./lib/js/mail-script.js"></script>
 <!-- counter js -->
 <script src="./lib/js/jquery.counterup.min.js"></script>
 <script src="./lib/js/waypoints.min.js"></script>
 <script src="./js/main.custom.js"></script>
 <script>
    
$(document).ready(function(){ 
    $(window).scroll(function(){ 
        if ($(this).scrollTop() > 100) { 
            $('#scroll').fadeIn(); 
        } else { 
            $('#scroll').fadeOut(); 
        } 
    }); 
    $('#scroll').click(function(){ 
        $("html, body").animate({ scrollTop: 0 }, 1500); 
        return false; 
    }); 
});
</script>
</body>
</html>