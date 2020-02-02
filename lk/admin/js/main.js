function openBlock(block, block2){
    $(block).show();
    $(block2).hide();
}
function relocation(page){
    window.location.href = page;
}
window.onload = function(){
	showUserTable();
}

//show function
function showRemoveModal(Sid){
	$.ajax({
		type: "POST",
		url: "./../admin/handler/accounts.php",
		data: {
			view: 'removeModal',
			id: Sid
		},
		success: function(result){
			$('#modalS').html(result);
			$('#removeModal').modal('show');
		}
	});
}

function showUserTable(){
	$.ajax({
		type: "POST",
		url: "./../admin/handler/accounts.php",
		data:{
			view: 'userTable'
		},
		success: function(result){
			$('#content').html(result);
		}
	});
}

function showEditModal(Sid){
	$.ajax({
		type: "POST",
		url: "./../admin/handler/accounts.php",
		data:{
			view: "editModal",
			id: Sid
		},
		success: function(result){
			$('#modalS').html(result);
			$('#editModal').modal('show');
		}
	});
}

//handle function
function removeUser(Sid){
	$.ajax({
		type: "POST",
		url: "./../admin/handler/accounts.php",
		data: {
			handle: 'removeUser',
			id: Sid
		},
		success: function(result){
			var result2 = result.split(':');
			if(result2[1] != "error"){
				$('.all').html("<script>setTimeout(function(){$('.alert').fadeOut('fast')},5000);</script><div class='alert alert-success al'>" + result2[0] +"</div>");
			}else{
				$('.all').html("<script>setTimeout(function(){$('.alert').fadeOut('fast')},5000);</script><div class='alert alert-danger al'>" + result2[0] +"</div>");
			}
			$('#removeModal').modal('hide');
		}
	});
}

function editUser(Sid){
	user = $('#username').val();
	pass = $('#pass').val();
	email = $('#email').val();
	balance = $('#balance').val();
	realBalance = $('#realBalance').val();
	prefix = $('#prefix').val();
	group = $('#group').val();
	$.ajax({
		type: "POST",
		url: "./../admin/handler/accounts.php",
		data: {
			view: "editUser",
			id: Sid
		},
		success: function(result){
			var result2 = result.split(':');
			if(result2[1] != "error"){
				$('.all').html("<script>setTimeout(function(){$('.alert').fadeOut('fast')},5000);</script><div class='alert alert-success al'>" + result2[0] +"</div>");
			}else{
				$('.all').html("<script>setTimeout(function(){$('.alert').fadeOut('fast')},5000);</script><div class='alert alert-danger al'>" + result2[0] +"</div>");
			}
			$('#removeModal').modal('hide');
		}
	});
}