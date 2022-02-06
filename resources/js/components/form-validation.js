import $ from 'jquery'  
import "parsleyjs";

const init = function () {
    $('.svelfit-form').parsley().options.requiredMessage = "Campo obligatorio.";
};

export default init;