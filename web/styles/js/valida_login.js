           <script>
  $(document).ready(function(){
    $('select').material_select();
  });   


$(function(){

  $('.validanumericos').keypress(function(e) {
  if(isNaN(this.value + String.fromCharCode(e.charCode))) 
     return false;
  })
  .on("cut copy paste",function(e){
  e.preventDefault();
  });

});




   $("#login").validate({
        rules: {
          //datos de las personas
          usuario:{
            required: true,
            minlength: 3
              },
          password:{
            required: true,
            minlength: 3
              },

        //For custom messages
        messages: {
          //datos de las personas
            usuario:{
                required: "Introduce tu apellido paterno",
                minlength:"introduce una palabra de 5 caracteres"
            },
            password:{
                required: "Introduce tu apellido materno",
                minlength:"introduce una palabra de 5 caracteres"
           
        },
        errorElement : 'div',
        errorPlacement: function(error, element) {
          var placement = $(element).data('error');
          if (placement) {
            $(placement).append(error)
          } else {
            error.insertAfter(element);
          }
        }
     });
    </script>