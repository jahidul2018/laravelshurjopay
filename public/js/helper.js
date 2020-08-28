var baseurl=window.location.hostname;
function setUpdateProperty(id,  propertyName){
    $("#submit").html("<i class='fa fa-save'></i> Update "+propertyName+"");
    $("#title").html("<i class='fa fa-save'></i> Update "+propertyName+"");
    $("#submit").val(id);
}
function removeUpdateProperty(propertyName){
    $("#submit").html('<i class="fa fa-save"></i> Submit');
    $("#title").html("<i class='fa fa-save'></i> Add "+propertyName+"");
    $("#submit").val(0);
}
function getError(errorMessage){
    $( "div" ).remove( ".text-danger" );
                for (err in errorMessage) {
                $('<div>'+errorMessage[err]+'</div>').insertAfter('#'+err).addClass('text-danger').attr('id','error');
                console.log(err);
    }
}

function successNotification() {
    $.notify({
            title: "Update Complete : ",
            message: "Something cool is just updated!",
            icon: 'fa fa-exclamation-triangle'
        }, {
            type: "success",
            delay: 100,
            timer: 600,

        });
        // setTimeout(function() {window.location.reload();}, 600);
        setTimeout(function() {table.draw()}, 600);
}

function successNotification2() {
    $.notify({
            title: "Update Complete : ",
            message: "Something cool is just updated!",
            icon: 'fa fa-exclamation-triangle'
        }, {
            type: "success",
            delay: 100,
            timer: 600,

        });
         setTimeout(function() {window.location.reload();}, 600);

}
function successNotification3() {
    $.notify({
            title: "Update Complete: ",
            message: "Just updated Your requerted data",
            icon: 'fa fa-exclamation-triangle'
        }, {
            type: "success",
            delay: 100,
            timer: 600,

        });
         //setTimeout(function() {window.location.reload();}, 600);

}

function deleteAttribute(url, id){
    swal({
             title: "Are you sure?",
             text: "You won't be able to recover this data!",
             type: "warning",
             showCancelButton: true,
             confirmButtonText: "Yes, delete it!",
             cancelButtonText: "No, cancel!",
             closeOnConfirm: true,
             closeOnCancel: true,
         }, function(isConfirm) {
             if (isConfirm) {
            //    var url = "{{url('/section/delete')}}";
               $.ajax({
                   url:url+"/"+id,
                   type:"GET",
                   dataType:"json",
                   success:function(data) {
                       console.log(data)
                       table.draw();
                   }
               })


             } else {
                 swal("Cancelled", "Your imaginary file is safe :)", "error");
             }
         });

 }

 function dynamicSectionSelection(){
    $('.admission').change(function (e) {
        e.preventDefault();
        var classId= $("#classId").val();
        var sessionYearId=$('#sessionYear').val();
        var shift=$('input[name="shift"]:checked').val();
        var url='/api/search/section';
        var data= {
            'classId' : classId,
            'sessionYearId' : sessionYearId,
            'shift' : shift,
        }
        console.log(data);
        if(classId>0){
            $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                        },
                    });
            $.ajax({
                type: "post",
                url:url,
                data: data,
                success: function (data) {
                    console.log(data);
                    var option="<option>--Please Select--</option>";
                    data.forEach(element => {

                        option+=("<option value='"+element.id+"'>"+element.sectionName+"</option>");

                    });
                    $('#sectionId').html(option);
                }
            });
        }
    });
 }
 function reloadThePage(){
    document.getElementById("myform").reset();
}
