$(document).ready(function(){
    $('#allTeacher').click(function(){
        alert($(this).text())
        // $(this).child = null
        // $.get('submit',function(data){
        //     console.log(data);
        // })
    })
    getTeacher()
    function createChild(id,name){
        var allTeacher = document.getElementById('allTeacher')
        var option = document.createElement('option')
            option.value = id
            option.text = name
            allTeacher.appendChild(option)
    }
    function getTeacher(){
    $.ajax({
        type:"GET",
        url:"/freeTeacher",
        dataType:"json",
        success:function(response){
            console.log(response);
            for (let teacher = 0; teacher < response.length; teacher++) {
                const element = response[teacher];
                createChild(element.id,element.name)
                // console.log(element.name);

            }
        }
    })
    }

})




