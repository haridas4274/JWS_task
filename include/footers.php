<footer class="site-footer style-1">

    <!-- Footer Top -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="widget widget_about">
                        <div class="footer-logo logo-white">
                            <a href="index.html"><img src="https://jayamwebsolutions.com/images/logo.png" alt=""></a>
                        </div>
                        <p class="text">Over the years of experience, we gained reputation in web design services, SEO services, web development and mobile app development services. We take pride in saying that we have completed more than 1700+ projects till date.</p>
                        <div class="dz-social-icon style-1">
                            <ul>
                                <li><a href="#" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <h3>footer Section</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Top End -->


</footer>
<!-- Footer End -->

<button class="scroltop" type="button"><i class="fas fa-arrow-up"></i></button>
</div>
<!-- JAVASCRIPT FILES ========================================= -->
<script src="assets/js/jquery.min.js"></script><!-- JQUERY MIN JS -->
<script src="assets/vendor/wow/wow.min.js"></script><!-- WOW JS -->
<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script><!-- BOOTSTRAP MIN JS -->
<script src="assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script><!-- BOOTSTRAP SELECT MIN JS -->
<script src="assets/vendor/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
<script src="assets/vendor/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script><!-- SWIPER JS -->
<script src="assets/js/dz.carousel.js"></script><!-- DZ CAROUSEL JS -->
<script src="assets/js/dz.ajax.js"></script><!-- AJAX -->
<script src="assets/js/custom.js"></script><!-- CUSTOM JS -->

<script src="assets/js/main.js"></script>
</body>

<script>
    function cartCount() {
        var cartcount=0;
        $.ajax({
            url: "functions/cart_data.php",
            type: "POST",
            data: {
                user_id: <?= $_SESSION['user_id'] ?>,
                type: 'count'
            },

            success: function(response) {
                // console.log(response);
                 cartcount=response;
                $('#cartCount').text(cartcount);
            },
            error: function(error) {
                console.log(error);
            }
        });
    }
    cartCount();

    function cartList() {
        // alert("haridas");
        $.ajax({
            url: "functions/cart_data.php",
            type: "POST",
            data: {
                user_id: <?= $_SESSION['user_id'] ?>,
                type: 'data'
            },
            success: function(response) {
                // console.log(response.JSON.parse);
                var html="";
                var total=0;
                let totalAmount = 0
                for (const i of JSON.parse(response)){
                    // console.log(iterator); 
                    var price=Number(i.pro_price);
                    totalAmount += price;
                    html += `
                <tr>
                    <td class="product-item-img"><img src="${i.pro_image}" alt=""></td>
                    <td class="product-item-name">${i.pro_name}</td>
                    <td class="product-item-price">₹ ${i.pro_price}</td>
                    <td class="product-item-quantity">
                        <div class="quantity btn-quantity style-1 me-3">
                            <input id="demo_vertical2" type="text" value="${i.pro_quantity}" name="demo_vertical2"/>
                        </div>
                    </td>
                    <td class="product-item-close"><a href="javascript:void(0);" onClict="removeCart(${i.cart_id})" class="ti-close"></a></td>
                </tr>
                `;
                }
                $("#cartDatas").html(html);
                $("#totalPrice").text('₹ '+totalAmount);

                

            },
            error: function(error) {
                console.log(error);
            }
        });
    }
    cartList();

    function addCart(proid) {
        $.ajax({
            url: "functions/add_cart.php",
            type: "POST",
            data: {
                user_id: <?= $_SESSION['user_id'] ?>,
                type: 'data'
            },
            success: function(response) {
                // console.log(response);
                if (response == 1) {
                    alert('Product Successully Added in Cart List');
                    cartList();
                    cartCount();
                }
            },
            error: function(error) {
                console.log(error);
            }
        });
    }
</script>

</html>