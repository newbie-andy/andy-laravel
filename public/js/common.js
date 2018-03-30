var Apis = {
    'regist': '/register',
    'login': '',
}
/*ajax请求的公共函数*/
function ajaxPost(urlAdress, ajaxType, data, beforeSend, success, error) {
    $.ajax({
        url : urlAdress, 
        type : ajaxType,
        data : data, 
        dataType : 'json',
        beforeSend : function(XMLHttpRequest){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        },
        success: function (data) {
            success.call(data,data);
        },
        error: function (err) {
            error.call(err, err);
        }
    })
}