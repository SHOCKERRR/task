$(document).ready(function () {
    $('#TaskBar').dataTable({
        "pageLength": 3
    }, {
        "info": false
    }, {
        columnDefs: [{
            targets: [0],
            orderData: [0, 1]
        }, {
            targets: [1],
            orderData: [1, 0]
        }, {
            targets: [4],
            orderData: [4, 0]
        }]
    });

    
});

$(function () {

    $('#Login').on('submit', function (e) {
        e.preventDefault();
        var login = $('#User').val();
        var password = $('#Pass').val();
        $.ajax({
            type: 'post',
            url: 'db/login.php',
            data: {
                login: login,
                password: password
            },
            success: function (msg) {
                $("#log").html(msg);
            },
            error: function (jqXhr, textStatus, errorMessage) {
                $('#log').append('Ошибка: ' + errorMessage);
            }
        });
    });

});

$(function () {

    $('#AddTasks').on('submit', function (e) {
        e.preventDefault();
        var e_mail = $('#Email').val();
        var name = $('#Name').val();
        var task = $('#Task').val();
        $.ajax({
            type: 'post',
            url: 'db/addTask.php',
            data: {
                e_mail: e_mail,
                name: name,
                task: task
            },
            success: function (data, status, xhr) {
                $('#logT').append(data);
            },
            error: function (jqXhr, textStatus, errorMessage) {
                $('#logT').append('Ошибка: ' + errorMessage);
            }
        });

    });

});

$(function () {
    $('#logOut').click(function () {
        var ok = 1;
        alert('Выходим?');
        $.ajax({
            type: 'post',
            url: 'db/logout.php',
            data: {
                ok: ok
            },
            success: function (data, status, xhr) {
                $('#logT').append(data);
            },
            error: function (jqXhr, textStatus, errorMessage) {
                $('#logT').append('Ошибка: ' + errorMessage);
            }
        });
    });
});

jQuery(function($){
    $(document).on( 'click', '#StatusBtn', function(event) {
    event.preventDefault();
    var taskid = $(this).data("id");
    $.ajax({
        url: "db/status.php",
        method: 'post',
        data: {
            taskid: taskid
        },
        success: function (data, status, xhr) {
            alert(data);
        }
     
    });

});
});


jQuery(function($){
    $(document).on( 'click', '#EditBtn', function(event) {
    event.preventDefault();
    document.getElementById("FormEditOverlay").style.display="block";
    var taskid = $(this).data("id");
    $.ajax({
        url: "db/edit.php",
        method: 'post',
        data: {
            taskid: taskid
        },
        success: function (data, status, xhr) {
            document.getElementById("Overlay").style.display="block";
            $('#FormEditOverlay').append(data);
        }
    });

});
});

jQuery(function($){
    $(document).on( 'click', '#EditTaskBtn', function(event) {
    event.preventDefault();
    var taskid = $(this).data("id");
    var task = $('#NewTask').val();
    $.ajax({
        url: "db/editTask.php",
        method: 'post',
        data: {
            taskid: taskid,
            task: task
        },
        success: function (data, status, xhr) {
            document.getElementById("Overlay").style.display="none";
            $('#FormEditOverlay').append(data);
            document.getElementById("FormEditOverlay").style.display="none";
        }
    });

});
});

jQuery(function($){
    $(document).mouseup(function (e){
        var block = $("#FormEditOverlay");
        if (!block.is(e.target)
            && block.has(e.target).length === 0) {
            block.hide();
            document.getElementById("Overlay").style.display="none";
            $("#FormEditOverlay").empty();
        }
    });
});