$('document').ready(function(){

    $('#fillUpButton').on('click', function(){
        var fillUpCash = $('#fillUpInput').val();
        if (fillUpCash && fillUpCash > 0){
            $.ajax({
                type: 'POST',
                url: 'index.php',
                data: 'fillUp=' + fillUpCash,
                success: function(msg) {
                    alert (msg);
                }
            })
        }
    });

    $('#setGroupButton').on('click', function(){
        var group = $('#setGroup').val();
        if (group && group != ''){
            $.ajax({
                type: 'POST',
                url: 'index.php',
                data: 'setGroup=' + group,
                success: function(msg) {
                    alert (msg);
                }
            })
        }
    });

    $('#setPrefixButton').on('click', function(){
        var prefix = $('#setPrefix').val();
        if (prefix && prefix != ''){
            $.ajax({
                type: 'POST',
                url: 'index.php',
                data: 'setPrefix=' + prefix,
                success: function(msg) {
                    alert (msg);
                }
            })
        }
    });

    $('#setSkinButton').on('click', function(){
        var a = document.getElementById('setSkin').files[0];
        var formData = new FormData;
        formData.append("Skin", a);
        xhr = new XMLHttpRequest();
        xhr.open("POST", "index.php");
        xhr.send(formData);
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4) {
                if (xhr.status == 200) {
                    alert(xhr.responseText);
                }
            }
        };
    });


});
