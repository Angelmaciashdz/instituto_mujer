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




    $("#frm-preinscripcion").validate({
        rules: {
          //datos de las personas
          paterno:{
            required: true,
            minlength: 3
              },
          materno:{
            required: true,
            minlength: 3
              },
          nombres:{ 
            required: true,
            minlength: 3
              },
          edad:{
          required: true,
          minlength: 2,
          maxlength:3
              },
          curp:{ required: true,
          minlength: 10,
          maxlength: 18
              },
          telefono:{ 
          required: true,
          minlength: 8,
          maxlength:10},

              //datos de domicilio
          calle:{
            required: true,
            minlength: 3
              },
          num_exterior:{
            required: true,
            maxlength:5 
              },
          num_int:{ 
            maxlength: 5
              },
          calle1:{
          required: true,
          minlength: 4
              },
          calle2:{ required: true,
          required: true,
          minlength: 4
              },
          barrio_colonia:{ 
          required: true,
          minlength: 4
              },
               //datos del curso
          id_programa:{
            required: true
              },
            //comentario
          comentario:{
            required: true,
            maxlength:500,
            minlength:10
          },
        },

        //For custom messages
        messages: {
          //datos de las personas
            paterno:{
                required: "Introduce tu apellido paterno",
                minlength:"introduce una palabra de 5 caracteres"
            },
            materno:{
                required: "Introduce tu apellido materno",
                minlength:"introduce una palabra de 5 caracteres"
            },
            nombres:{
                required: "Introduce tu nombre o nombres",
                minlength:"introduce una palabra de 5 caracteres"
            },
            edad:{
                required: "Introduce tu edad",
                minlength:"la edad minima es de 18 años"
            },
            curp:{
                required: "Introduce tu apellido materno",
            },
            telefono:{
                required: "Introduce tu numero telefonico",
                maxlength:"numero de digitos invalido",
            },
            //datos de domicilio
            calle:{
            required: "Introduce tu apellido paterno",
            minlength:"introduce una palabra de 5 caracteres"
            },
            num_exterior:{
                required: "Introduce el numero exterior de tu domicilio",
                 maxlength:"numero de digitos invalido",
            },
            num_int:{
                 maxlength:"numero de digitos invalido",
            },
            calle1:{
                required: "Introduce el nombre de las calles entre las que se encuentra tu calle",
            },
            calle2:{
                required: "Introduce el nombre de las calles entre las que se encuentra tu calle",
            },
            barrio_colonia:{
                required: "Introduce el nombre de el barrio o colonia",
            },
            //comentarios
            comentario:{
                required: "Introduce tu comentario",
                maxlength:"Numero de caracteres excedido",
                minlength:"el minimo de caracteres es 10"
            },
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