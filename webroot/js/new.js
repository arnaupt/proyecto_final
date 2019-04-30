if ($('.grid').length) {
	var $grid = $('.grid').isotope({
		itemSelector: '.grid-item',
		layoutMode: 'fitRows',
		getSortData: {
			date: '.date',
			name: '.name'
		}
	});
}
jQuery(document).ready(function(){
	jQuery("#statusbutton").click();
});
function vreate(item) {
	if (item.likes_suyo == 0) {
		mio = 'fa-heart-o';
	} else {
		mio = 'fa-heart';
	}
	if (item.nombre_usuario) {
		var bloque_usuario = '<span><img src="https://editor.relevant-cms.com/files/user/avatar/' + item.imagen_usuario + '" alt="' + item.nombre_usuario + ' ' + item.apellidos_usuario + '" style="height: 30px;width: 30px;border-radius: 50%;margin-right: 10px;"><a>' + item.nombre_usuario + ' ' + item.apellidos_usuario + '</a></span>';
	} else {
		var bloque_usuario = '';
	}
	var newItems = $('<div class="col-md-6 grid-item new-' + item.id_tematica + '" data-noticia="' + item.id_noticia + '"><article class="post"><div class="post-date" style="position: absolute;margin: -10px;box-shadow: 0px 0px 20px #888888;background-color: #ffffff;"><span class="day">' + item.fecha_dia + '</span><span class="month">' + item.fecha_mes + '</span></div><div><picture><source srcset="relevant_media/original/' + item.imagen_media + '" media="(max-width: 768px)"><source srcset="relevant_media/sm/' + item.imagen_media + '" media="(min-width: 768px) and (max-width: 992px)"><source srcset="relevant_media/md/' + item.imagen_media + '" media="(min-width: 992px) and (max-width: 1200px)"><source srcset="relevant_media/lg/' + item.imagen_media + '" media="(min-width: 1200px)"><img srcset="relevant_media/lg/' + item.imagen_media + '" alt="'+item.imagen+'" title="'+item.imagen+'" style="width:100%;"></picture></div><div class="post-content"><h2 style="text-align: center;"><a href="' + item.siglas + '/' + item.url_real + '">' + item.titulo + '</a></h2><p>' + item.descripcion_previa.replace(/<.*?>/g, '') + '</p><div class="post-meta"> ' + bloque_usuario + '<span class="jm-post-like likes" data-post_id="' + item.id_seo + '" title="Like"><i class="fa ' + mio + '"></i><span class="count">' + item.likes + '</span></span><a href="' + item.siglas + '/' + item.url_real + '#comentarios" class="comments"><i class="fa fa-comment-o"></i>' + item.comentarios + '</a></div></div></article></div>');
	return newItems;
}
$('#filters li').on('click', 'a', function() {
	if (!$(this).parent('li').hasClass('desactivo') && !$(this).parent('li').hasClass('activo')) {
		$('#filters li').removeClass('activo');
		$('#filters li').addClass('desactivo');
		$(this).parent('li').addClass('activo');
		var texto = $(this).text();
		$("#nombreTematica").text(texto);
		$('header').show();
		var id_tematica = $(this).attr('data-filter').replace('.new-', '');
		$(".pagina a").attr("data-filter", id_tematica);
		$(".pagina a").attr("data-pagina", 1);
		$(".pagina a").removeClass("desactivo");
		$("#statusbutton").show();
		$("#statusbuttonnomore").hide();
		$("#statusbuttonload").hide();
		$grid.isotope('remove', $grid.isotope('getItemElements'));
		$.post("core/section/new/load_new.php", {
			id_tematica: id_tematica,
			pagina: $(".pagina a").attr('data-pagina')
		}).done(function(data) {

			var pasg = parseInt($(".pagina a").attr('data-pagina'))+1;
			$(".pagina a").attr('data-pagina',pasg);
			
			var obj = JSON.parse(data);
			$.each(obj, function(i, item) {
				var $newItems = vreate(item);
				$grid.isotope('insert', $newItems);
			});
			if (id_tematica == 0) {
				$grid.imagesLoaded(function() {
					$grid.isotope({
						filter: '*'
					});
					$('#filters li').removeClass('desactivo');
				});
			} else {
				$grid.imagesLoaded(function() {
					$grid.isotope({
						filter: '.new-' + id_tematica
					});
					$('#filters li').removeClass('desactivo');
				});
			}
		});
	}
});
$(document).on('click', 'div.category a', function() {
	$("html, body").animate({
		scrollTop: 0
	}, "slow");
	$('#filters li').removeClass('activo');
	$(this).parent('li').addClass('activo');
	for (var i = 0; i < $('#filters li').length; i++) {
		var filt = $('#filters li a').eq(i).attr("data-filter");
		if (filt == $(this).attr('data-filter')) {
			$('#filters li a').eq(i).parent('li').addClass('activo');
		}
	}
	var texto = $(this).text();
	$("#nombreTematica").text(texto);
	$('header').show();
	var id_tematica = $(this).attr('data-filter').replace('.new-', '');
	$(".pagina a").attr("data-filter", id_tematica);
	$(".pagina a").attr("data-pagina", 1);
	$(".pagina a").removeClass("desactivo");
	$(".pagina a").html('<i class="fa fa-align-left" style="margin-right: 10px;"></i>More Posts')
	$.post("core/section/new/load_new.php", {
		id_tematica: id_tematica
	}).done(function(data) {
		var obj = JSON.parse(data);
		$grid.isotope('remove', $grid.isotope('getItemElements'));
		$.each(obj, function(i, item) {
			var $newItems = vreate(item);
			$grid.isotope('insert', $newItems);
		});
		if (id_tematica == 0) {
			$grid.imagesLoaded(function() {
				$grid.isotope({
					filter: '*'
				});
			});
		} else {
			$grid.imagesLoaded(function() {
				$grid.isotope({
					filter: '.new-' + id_tematica
				});
			});
		}
	});
});
$('#sorts').on('click', 'button', function() {
	var sortByValue = $(this).attr('data-sort-by');
	$grid.isotope({
		sortBy: sortByValue
	});
});
$('.button-group').each(function(i, buttonGroup) {
	var $buttonGroup = $(buttonGroup);
	$buttonGroup.on('click', 'button', function() {
		$buttonGroup.find('.is-checked').removeClass('is-checked');
		$(this).addClass('is-checked');
	});
});
$('#statusbutton').on('click', function(event) {
	var elem = $(this);
	if (!elem.hasClass('desactivo')) {
		elem.hide();
		$("#statusbuttonload").show();
		elem.addClass('desactivo');
		event.preventDefault();
		var pagina = $(this).attr('data-pagina');
		var id_tematica = $(this).attr('data-filter');
		var nextpage = parseInt(pagina) + 1;
		$(this).attr('data-pagina', nextpage);
		$.post("core/section/new/load_new.php", {
			id_tematica: id_tematica,
			pagina: pagina
		}).done(function(data) {
			var obj = JSON.parse(data);
			if (Object.keys(obj).length === 0) {
				$("#statusbuttonload").hide();
				$("#statusbuttonnomore").show();
			} else {
				elem.removeClass('desactivo');
				$.each(obj, function(i, item) {
					var $newItems = vreate(item);
					$grid.isotope('insert', $newItems);
				});
				$grid.imagesLoaded(function() {
					setTimeout(function(){ 
						$grid.isotope('layout');
					}, 100);
				});
				$("#statusbuttonload").hide();
				elem.show();
			}
		});
	}
});
$(document).on('click', '.jm-post-like.likes', function(event) {
	var elem = $(this);
	if (!elem.hasClass('desactivo')) {
		elem.addClass('desactivo');
		var id_seo = $(this).attr("data-post_id");
		$.post("core/section/new/like_new.php", {
			id_seo: id_seo
		}).done(function(data) {
			var obj = JSON.parse(data);
			if (obj.code == 200) {
				if (obj.msg == 1) {
					elem.children('i').removeClass('fa-heart-o').addClass('fa-heart');
					if (elem.children('span').hasClass('count')) {
						var count = parseInt(elem.children('span').text());
						elem.children('span').text(count + 1);
					}
				} else {
					elem.children('i').removeClass('fa-heart').addClass('fa-heart-o');
					if (elem.children('span').hasClass('count')) {
						var count = parseInt(elem.children('span').text());
						if (count > 0) {
							elem.children('span').text(count - 1);
						}
					}
				}
			} else {
				alert("Se ha producido un error inesperado!");
			}
			elem.removeClass('desactivo');
		});
	}
});