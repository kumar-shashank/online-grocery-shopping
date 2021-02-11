<script>
var toggle = true;

$(".sidebar-icon").click(function() {                
if (toggle)
{
$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
$("#menu span").css({"position":"absolute"});
}
else
{
$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
setTimeout(function() {
$("#menu span").css({"position":"relative"});
}, 400);
}

toggle = !toggle;
});
</script>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>