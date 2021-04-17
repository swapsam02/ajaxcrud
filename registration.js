$(document).ready(function(){
    load();

    function load(){
        $.ajax({
            url : 'view.php',
            type : 'POST',
            data : 'html',
            success: function(data){
                $("#dynamicTable").html(data);
            }
        });
    }

    $("#submitBtn").on('click', function(e){
        e.preventDefault();
        var data = {
            'name': $("#nameId").val(),
            'email': $("#emailId").val(),
            'mobile': $("#mobileId").val(),
            'city': $("#cityId").val(),
        }

        $.ajax({
            url : "insert.php",
            type : "POST",
            data : data,
            success: function (data){
                if (data == 1){
                    load();
                    $("#formsubmitId").trigger('reset');
                }else{
                    alert("Something goes to wrong");
                }
            }
        });
    });

    $(document).on('click', '.edit-btn', function(){
        var data = {
            'userId': $(this).closest("tr").find('td:eq(0)').text(),
            'name': $(this).closest("tr").find('td:eq(1)').text(),
            'email': $(this).closest("tr").find('td:eq(2)').text(),
            'mobile': $(this).closest("tr").find('td:eq(3)').text(),
            'city': $(this).closest("tr").find('td:eq(4)').text(),
        }
        $('#userId').val(data.userId);
        $('#nameId').val(data.name);
        $('#emailId').val(data.email);
        $('#mobileId').val(data.mobile);
        $('#cityId').val(data.city);
    });

    $("#updateBtn").on('click', function(e){
        e.preventDefault();
        var updatData = {
            'userId': $("#userId").val(),
            'name': $("#nameId").val(),
            'email': $("#emailId").val(),
            'mobile': $("#mobileId").val(),
            'city': $("#cityId").val(),
        }

        $.ajax({
            url: "update.php",
            type: "POST",
            data: updatData,
            success: function(data) {
                if (data == 1) {
                    load();
                    $("#formsubmitId").trigger('reset');
                } else {
                    alert("Something goes to wrong");
                }
            }
        });
    });



    $(document).on('click', '.delete-btn', function(){
        var uid = $(this).data('id');
        console.log(uid)
        $.ajax({
            url: 'delete.php',
            type: 'POST',
            data: { id: uid },
            success: function (data) {
                load();
            }
        });    
    });

    
});