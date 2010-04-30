/* 
 * Clase Account
 *
 */

var Fly = new (function(){

    /* PUBLIC METHODS
     **************************************************************************/
    this.initializer = function(){

        $('input.datepicker').datepicker({
            dateFormat : 'dd/mm/yy',
            onClose : function(value){

            }
        });

    };

    this.send = function(){
        if( working ) return false;

    };


    /* PRIVATE PROPERTIES
     **************************************************************************/
    var working=false;
    var f=false;

    /* PRIVATE METHODS
     **************************************************************************/

})();
