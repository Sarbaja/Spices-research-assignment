$(document).ready(function(){

    $.validator.addMethod("alphabets", function(value, element) {
        return this.optional(element) || /^[a-zA-Z]+$/.test(value);
    },
    "Your name must consist of alphabets only. No spaces allowed"
    );

    $("#inputForm").validate({
        rules:{
            text:{
            required: true,
            alphabets: true
            }
        },
        messages:{
            text:{
                required:"Please provide your input"
            }
        }
    });
    
});