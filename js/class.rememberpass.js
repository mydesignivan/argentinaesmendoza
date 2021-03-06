/* 
 * Clase RememberPass
 *
 * Su funcion:
 *  - Envia form para pedir el reseteo de contraseña.
 *  - Envia form para resetear la contraseña.
 *
 */

var RememberPass = new (function(){

    /* PUBLIC METHODS
     **************************************************************************/
    this.initializer = function(error){
        if( $('#form1').length>0 ){
            f = $('#form1')[0];

            $.validator.setting('#form1 .validate', {
                effect_show     : 'slidefade',
                activeBlur      : true
            });

            $(f.txtField).validator({
                v_required   : true,
                container    : '#msgbox-field'
            });
            $(f.txtCaptcha).validator({
                v_required   : true
            });

            if( error=="userinactive"||error=="notexists" ){
                var msg="";
                if( error=="userinactive" ) msg = "El usuario se encuentra inactivo.";
                else msg = 'La direcci&oacute;n de correo electr&oacute;nico o el usuario que has puesto no la reconocemos. Por favor int&eacute;ntalo de nuevo o ponte en contacto con el <a href="'+baseURI+'contacto" class="link4">administrador</a>.';

                $.validator.show(f.txtField, {
                    message : msg
                });
            }
        }else if( $('#form2').length>0 ){
            f = $('#form2')[0];

            $.validator.setting('#form2 .validate', {
                effect_show     : 'slidefade',
                validateOne     : true
            });
            $(f.txtPass).validator({
                v_required   : true,
                v_password   : [8,10]
            });
            $(f.txtPass2).validator({
                v_required   : true,
                v_compare    : '#txtPass'
            });
        }

    };

    this.send = function(){
        if( working ) return false;

        $.validator.validate('#'+f.id+' .validate', function(error){
            if( !error ){
                $.post(baseURI+'recordarcontrasenia/ajax_check_captcha', "captcha="+f.txtCaptcha.value, function(data){
                    if( data=="error"){
                        show_error(f.txtCaptcha, 'El c&oacute;digo ingresado es incorrecto.');
                        working=false;
                    }else f.submit();
                });
            }else working=false;
        });

        return false;
    };
    
    /* PRIVATE PROPERTIES
     **************************************************************************/
    var f=false;
    var working=false;

})();