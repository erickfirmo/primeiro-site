$(document).ready(function() {

   $("#formContato").validate({
      rules: {
         nome: {
            required: true
         },
   
         email: {
            required: true,
            email: true
         },
   
         confEmail: {
            required: true,
            email: true,
            equalTo: "#email"
   
         }
      },

      messages: {
         nome: "<span class='alert-danger custom-error'>O preenchimento do campo nome é obrigatório !</span>",

         email: {
            required: "<span class='alert-danger custom-error'>O preenchimento do campo email é obrigatório !</span>",
            equalTo: "<span class='alert-danger custom-error'>Os campos de email não correspondem. Confirme os dados e tente novamente !</span>"
         },

         confEmail: {
            required: "<span class='alert-danger custom-error'>O preenchimento do campo confirmar email é obrigatório ! </span>",
            equalTo: "<span class='alert-danger custom-error'>Os campos de email não correspondem. Confirme os dados e tente novamente !</span>"
         }

      }
   }
      
   );

}
);