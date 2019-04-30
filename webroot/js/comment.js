jQuery(document).ready(function(){
	jQuery(".respcomment").on('click',function(e){
		$("#commentEnviado").hide();
		$("#commentNoEnviado").hide();
		
		var este = jQuery(this);
		jQuery(".respcomment").removeClass('activo');
		este.addClass('activo');
		var idComment = este.attr("data-idcomment");
		var idParent = este.attr("data-parent");
		jQuery("#respond h3").show();
		jQuery("#respond").detach().appendTo('#comment-'+idComment);
		jQuery( "#comment" ).focus();
		jQuery(".sendcomment").attr('data-parent',idParent);
	});

	$("#cancel-comment-reply-link").on('click',function(e){
		$("#commentEnviado").hide();
		$("#commentNoEnviado").hide();

		var este = jQuery(this);
		jQuery(".respcomment").removeClass('activo');
		var idParent = este.attr("data-parent");
		jQuery("#respond h3").hide();
		jQuery("#respond").detach().appendTo('#comentarios');
		jQuery(".sendcomment").attr('data-parent','0');
	});
	
	jQuery(document).on('click','.sendcomment',function(e){
		e.preventDefault();
		$("#commentEnviado").hide();
		$("#commentNoEnviado").hide();
		$("#camposincumpletos").hide();
		var este = jQuery('.sendcomment');
		var rex = '/(<([^>]+)>)/ig';
		var nombre = $("#author").val().replace(rex , "");
		var email = $("#email").val().replace(rex , "");
		var commentario = $("#comment").val().replace(rex , "");

		if (nombre!="" && email!="" && commentario!="") {
			grecaptcha.execute();
		}else{
			$("#camposincumpletos").show();
		}
	});
});
function onSubmit(token) {	
	var este = jQuery('.sendcomment');
	var rex = '/(<([^>]+)>)/ig';
	var idParent = este.attr("data-parent");
	var idSeo = este.attr("data-idseo").replace(rex , "");
	var nombre = $("#author").val().replace(rex , "");
	var email = $("#email").val().replace(rex , "");
	var commentario = $("#comment").val().replace(rex , "");
	$.post( "core/section/comment/add_comment.php", { id_seo: idSeo, id_padre_camentario: idParent, nombre: nombre, email: email, descripcion: commentario} ).done(function(data){
		var obj = JSON.parse(data);
		if (obj.code==200) {
			$("#commentEnviado").show('slow');
			document.getElementById("respond").reset();
		}else{
			$("#commentNoEnviado").show('slow');
		}
	});
};