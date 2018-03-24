<!-- Boostrap -->
<script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
<!-- JQuery -->
<script src="node_modules/jquery/dist/jquery.js"></script>
<!-- Mask Plugin -->
<script src="node_modules/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
<!--- Validation Plugin-->
<script src="node_modules/jquery-validation/dist/jquery-validate.min.js"></script>

<!-- Custom Mask Forms -->
<script src="assets/js/mask.js"></script>
<!-- Custom Validation -->
<script src="assets/js/validate.js"></script>




<script>

$(".contato").validate({
   rules: {

      nome: "required",

      email: {
         required: true,
         email: true
      },

      confEmail: {
         required: true,
         email: true,
         equalTo: "#email"

      }



      

   }
}
   

);


</script>