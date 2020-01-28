$(document).on("change","#classe_id",function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: "/getStudent",
        method: "post",
        data: {
            classe_id: $(this).val()
        },
        success: function (data) {
            $('#student_id').empty();
          $.each(data,function(i,value){
              $('#student_id').append('<option value="'+data[i].id+'">'+data[i].fullname+'</option>');
            })          
        },
        error: function () {
        
        }
    });
});