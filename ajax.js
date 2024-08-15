




$(document).ready(function() {
    $('#infoForm').submit(function(event) {
        event.preventDefault();       
        let isValid = true;       
        $('input[type="text"], input[type="email"], input[type="number"]').each(function() {
            if ($(this).val() === '') {
                isValid = false;
                $(this).css('border', '1px solid red');
            } else {
                $(this).css('border', '');
            }
        });


        const email = $('input[name="email"]').val();
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            isValid = false;
            $('input[name="email"]').css('border', '0.1px solid red');
        } else {
            $('input[name="email"]').css('border', '');
        }
        // console.log($('#cc').val().length);
        if ($('#cc').val() === null) {
            isValid = false;
            $('#cc').css('border', '1px solid red');
        } else if ($('#cc').val().length===5){
            // console.log("Indiana");
            if(!($('#phone').val().length === 10 )){
                isValid = false;
                $('#phone').css('border', '1px solid red');
            }else{
                $('#phone').css('border', '');
                $('#cc').css('border','');
            }
        }
        else if($('#cc').val().length===2){
            if(!($('#phone').val().length === 11) ){
                isValid = false;
               
                $('#phone').css('border', '1px solid red');
            }else{
                $('#phone').css('border', '');
                $('#cc').css('border','');

            }

        }
       
        //console.log($('#phone').val().length);
       
        if (!$('input[name="gender"]:checked').val()) {
            isValid = false;
            $('input[name="gender"]').parent().css('color', 'red');
        } else {
            $('input[name="gender"]').parent().css('color', '');
        }
        
        
        if ($('#study').val() === null) {
            isValid = false;
            $('#study').css('border', '1px solid red');
        } else {
            $('#study').css('border', '');
        }

       

        if ($('.item-container').length===0) {
            isValid = false;
            $('.input-container').css('border', '1px solid red');
        } else {
            $('.input-container').css('border', '');
        }
        


        if (isValid) {

            $('#submit').text('Loading...');
            $('#submit').attr('disabled',true);
            


            
            $.ajax({
                url: 'submit.php',
                type: 'POST',
                data: $(this).serialize(),
                success: function(response) {
                    alert('Form submitted successfully!');
                    $('#infoForm')[0].reset();
                    $('.item-container').remove();
                    $('#submit').attr('disabled',false);
                    $('#submit').text('submit');
                },
                error: function(xhr, status, error) {
                    alert('An error occurred: ' + error);
                    $('#submit').attr('disabled',false);
                    $('#submit').text('submit');
                }
            });
        } else {
            alert('Please fill all the fields properly.');
        }
    });
});


