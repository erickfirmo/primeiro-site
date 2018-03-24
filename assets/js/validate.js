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