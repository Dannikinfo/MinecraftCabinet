jQuery.support.cors = true;

$(function(){
	$('#authForm').submit(function(e){
		e.preventDefault();
		var m_method=$(this).attr('method');
		var m_data=$(this).serialize();
		$.ajax({
			type: m_method,
			url: 'lib/auth.php',
			data: m_data,
			success: function(result){
				var result2 = result.split(':');
				if(result2[1] != "error"){
					relocation(result2[0]);
				}else{
					$('.all').html("<script>setTimeout(function(){$('.alert').fadeOut('fast')},5000);</script><div class='alert alert-danger al'>" + result2[0] +"</div>");
				}
			}
		});
	});
});

$(function(){
	$('#regForm').submit(function(e){
		e.preventDefault();
		var m_method=$(this).attr('method');
		var m_data=$(this).serialize();
		$.ajax({
			type: m_method,
			url: 'lib/reg.php',
			data: m_data,
			success: function(result){
				var result2 = result.split(':');
				if(result2[1] != "error"){
					relocation(result2[0]);
				}else{
					$('.all').html("<script>setTimeout(function(){$('.alert').fadeOut('fast')},5000);</script><div class='alert alert-danger al'>" + result2[0] + "</div>");
				}
			}
		});
	});
});