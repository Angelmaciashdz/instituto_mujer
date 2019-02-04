

$(function(){

  $('.validanumericos').keypress(function(e) {
  if(isNaN(this.value + String.fromCharCode(e.charCode))) 
     return false;
  })
  .on("cut copy paste",function(e){
  e.preventDefault();
  });

});


//inicio
function activeInicio() {
	var btn_inicio = $("#btn_inicio");
	btn_inicio.css('background','#E5E5E5'); 
	btn_inicio.css('border-bottom', '2px solid #B70FCE'); 

}
//Nosotros
function activeNosotros() {
	var btn_nos = $("#btn_nos");
	btn_nos.css('background','#E5E5E5'); 
	btn_nos.css('border-bottom', '2px solid #B70FCE'); 

}
//Galeria
function activeGal() {
	var btn_gal = $("#btn_gal");
	btn_gal.css('background','#E5E5E5'); 
	btn_gal.css('border-bottom', '2px solid #B70FCE'); 

}
//Programas
function activeProg() {
	var btn_prog = $("#btn_prog");
	btn_prog.css('background','#E5E5E5'); 
	btn_prog.css('border-bottom', '2px solid #B70FCE'); 

}
//Contacto
function activeContacto() {
	var btn_cont = $("#btn_cont");
	btn_cont.css('background','#E5E5E5'); 
	btn_cont.css('border-bottom', '2px solid #B70FCE'); 

}








$(document).ready(function(){

    $('.button-collapse').sideNav();
    $('.parallax').parallax();
    $('.dropdown').dropdown({
    	hover: false,
    	onCloseStart:null
    });
     $('.slider').slider({
     	indicators:false
     });
    $('select').material_select();
  });   


 function limpiarFormulario() {
 	document.getElementById("frm-preinscripcion").reset();
 };


function inicio(){	
	Push.create("Bienvenido",{
		body: "Instituto Municipal de la Mujer",
		icon: "public/imagenes/logos/mujer1.jpg",
		timeout: 3000,
		onClick: function () {
			window.location="https://nickersoft.github.io/push.js/";
			this.close();
		}
	});
};

function inicio2(){	
	Push.create("Bienvenido",{
		body: "Instituto Municipal de la Mujer",
		icon: "../../public/imagenes/logos/mujer1.jpg",
		timeout: 3000,
		onClick: function () {
			window.location="https://nickersoft.github.io/push.js/";
			this.close();
		}
	});
};
	
	function Nota(){	
	Push.create("Registro exitoso",{
		body: "Instituto Municipal de la Mujer",
		icon: "../../public/imagenes/logos/mujer1.jpg",
		timeout: 3000,
		onClick: function () {
			window.location="pdf.php";
			this.close();
		}
	});
};


function nota1(){	
	var formulario = document.getElementById("frm-preinscripcion");	
	var dato = formulario[0];
	if (dato.value=="enviar"){
	
alert("Debe de completar el campo ");
			formulario.submit();
		return true;
	} else {
		alert("No se envía el formulario");

		return false;
	}
};
   