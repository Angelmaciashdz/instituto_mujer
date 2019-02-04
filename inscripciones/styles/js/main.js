$(document).ready(function(){
	$('.btn-sideBar-SubMenu').on('click', function(){
		var SubMenu=$(this).next('ul');
		var iconBtn=$(this).children('.zmdi-caret-down');
		if(SubMenu.hasClass('show-sideBar-SubMenu')){
			iconBtn.removeClass('zmdi-hc-rotate-180');
			SubMenu.removeClass('show-sideBar-SubMenu');
		}else{
			iconBtn.addClass('zmdi-hc-rotate-180');
			SubMenu.addClass('show-sideBar-SubMenu');
		}
	});
	$('.btn-exit-system').on('click', function(){
		swal({
		  	title: 'Estas Seguro?',
		  	text: "Cerrar Sesion...",
		  	type: 'warning',
		  	showCancelButton: true,
		  	confirmButtonColor: '#03A9F4',
		  	cancelButtonColor: '#F44336',
		  	confirmButtonText: '<i class="zmdi zmdi-run"></i> Si, Salir!',
		  	cancelButtonText: '<i class="zmdi zmdi-close-circle"></i> No, Cancelar!'
		}).then(function () {
			window.location.href="../login/logout.php";
		});
	});
	$('.btn-menu-dashboard').on('click', function(){
		var body=$('.dashboard-contentPage');
		var sidebar=$('.dashboard-sideBar');
		if(sidebar.css('pointer-events')=='none'){
			body.removeClass('no-paddin-left');
			sidebar.removeClass('hide-sidebar').addClass('show-sidebar');
		}else{
			body.addClass('no-paddin-left');
			sidebar.addClass('hide-sidebar').removeClass('show-sidebar');
		}
	});
	$('.btn-Notifications-area').on('click', function(){
		var NotificationsArea=$('.Notifications-area');
		if(NotificationsArea.css('opacity')=="0"){
			NotificationsArea.addClass('show-Notification-area');
		}else{
			NotificationsArea.removeClass('show-Notification-area');
		}
	});
	$('.btn-search').on('click', function(){
		swal({
		  title: 'Que estas buscando?',
		  confirmButtonText: '<i class="zmdi zmdi-search"></i>  Buscar',
		  confirmButtonColor: '#03A9F4',
		  showCancelButton: true,
		  cancelButtonColor: '#F44336',
		  cancelButtonText: '<i class="zmdi zmdi-close-circle"></i> Cancelar',
		  html: '<div class="form-group label-floating">'+
			  		'<label class="control-label" for="InputSearch">write here</label>'+
			  		'<input class="form-control" id="InputSearch" type="text">'+
				'</div>'
		}).then(function () {
		  swal(
		    'You wrote',
		    ''+$('#InputSearch').val()+'',
		    'success'
		  )
		});
	});
	$('.btn-modal-help').on('click', function(){
		$('#Dialog-Help').modal('show');
	});
});
(function($){
    $(window).on("load",function(){
        $(".dashboard-sideBar-ct").mCustomScrollbar({
        	theme:"light-thin",
        	scrollbarPosition: "inside",
        	autoHideScrollbar: true,
        	scrollButtons: {enable: true}
        });
        $(".dashboard-contentPage, .Notifications-body").mCustomScrollbar({
        	theme:"dark-thin",
        	scrollbarPosition: "inside",
        	autoHideScrollbar: true,
        	scrollButtons: {enable: true}
        });
    });
})(jQuery);


$(buscar_datos());

function buscar_datos(consulta){
	$.ajax({
			url: '../ocultos/index.php',
			type: 'POST',
			datatype: 'html',
			data: {consulta: consulta},
	})
	.done(function(respuesta){
	$("#datos").html(respuesta);
	})
	.fail(function(){
	console.log("error");
	})

}


$(document).on('keyup', '#caja_busqueda', function(){
	var valor = $(this).val();
	if (valor != "") {
		buscar_datos(valor);
	}else{
		buscar_datos();
	}
});


$(buscar_datos_dos());

function buscar_datos_dos(consulta){
	$.ajax({
			url: 'buscar_dos.php',
			type: 'POST',
			datatype: 'html',
			data: {consulta: consulta},
	})
	.done(function(respuesta){
	$("#datos_dos").html(respuesta);
	})
	.fail(function(){
	console.log("error");
	})

}

function Volver(){
history.back();
};

jQuery(function(){
	$('#fecha_inicio').datepicker({
		dateFormat: "yy-mm-dd"
	});
	$('#fecha_termina').datepicker({
		dateFormat: "yy-mm-dd"
	});
})


$(document).on('keyup', '#caja_busqueda_dos', function(){
	var valor = $(this).val();
	if (valor != "") {
		buscar_datos_dos(valor);
	}else{
		buscar_datos_dos();
	}
});