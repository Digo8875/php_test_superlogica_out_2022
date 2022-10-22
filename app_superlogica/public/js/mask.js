$(document).ready(function($){

    $(".mask-zipcode").mask("00000-000");

    $(".submit-unmask").submit(function() {
        $(".mask-zipcode").unmask();
    });
});
