import tinymce from 'tinymce';
import 'tinymce/icons/default';
import 'tinymce/themes/silver';
import 'tinymce/skins/ui/oxide/skin.css';

const init = function () {
    tinymce.init({
        selector: 'textarea',
    });
}

export default init