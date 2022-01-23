 /* Import TinyMCE */
import tinymce from 'tinymce';

 /* Default icons are required for TinyMCE 5.3 or above */
import 'tinymce/icons/default';

 /* A theme is also required */
import 'tinymce/themes/silver';

 /* Import the skin */
import 'tinymce/skins/ui/oxide/skin.css';

 /* Import plugins */
import 'tinymce/plugins/advlist';
import 'tinymce/plugins/emoticons';
import 'tinymce/plugins/emoticons/js/emojis';
import 'tinymce/plugins/link';
import 'tinymce/plugins/lists';
import 'tinymce/plugins/table';

const init = function () {
    tinymce.init({
        selector: 'textarea',
        plugins: 'advlist emoticons link lists table',
        toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
            'bullist numlist outdent indent | link | print preview media fullscreen | ' +
            'forecolor backcolor emoticons',
        skin: false,
        content_css: false,
        content_style: 'body { font-family:Helvetica,Arial,sans-serif; }'
    });
}

export default init