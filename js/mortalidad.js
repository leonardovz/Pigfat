(function(){
    $(document).ready(function(){
        $('#cerdas').show();
        $('#cerdos').hide();
        $('#camadas').hide();
        //$('#radio').hide();
        $('#tipo').change(function (){
            if($(this).val()=='cerdas'){
                $('#cerdas').show();
                $('#cerdos').hide();
                $('#camadas').hide();
                //$('#radio').hide();
            }else if($(this).val()=='cerdos'){
                $('#cerdas').hide();
                $('#cerdos').show();
                $('#camadas').hide();
                //$('#radio').hide();
            }else if($(this).val()=='camadas'){
                $('#cerdas').hide();
                $('#cerdos').hide();
                $('#camadas').show();
                //$('#radio').show();
            }
        });
    })
 }());