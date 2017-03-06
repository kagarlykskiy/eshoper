<div class="page-buffer"></div>
</div>

<footer id="footer" class="page-footer">
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-right"><a href="https://new.vk.com/kagarlikskiy" class="footer-a">Misha Kaharlykskyi</a> &copy; 2017</p>
            </div>
        </div>
    </div>
</footer>



<script src="../../template/js/jquery.js"></script>
<script src="../../template/js/bootstrap.min.js"></script>
<script src="../../template/js/jquery.scrollUp.min.js"></script>
<script src="../../template/js/price-range.js"></script>
<script src="../../template/js/jquery.prettyPhoto.js"></script>
<!--slider-->
<script src="../../template/js/jquery.cycle2.js"></script>
<script src="../../template/js/jquery.cycle2.carousel.js"></script>
<!--slider-->
<script src="../../template/js/main.js"></script>
<script>
    $(document).ready(function() {
        $(".add-to-cart").click(function() {
            var id = $(this).attr("data-id");
            $.post("/cart/addAjax/" + id, {}, function (data) {
                    $("#cart-count").html(data);
            });
            return false;
        });
    });
</script>
</body>
</html>