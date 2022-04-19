import Dropzone from "dropzone";
import 'dropzone'
const init = function () {
    if ($('#pdf-upload').length) {
        new Dropzone("#pdf-upload", {
            maxFilesize: 10,
            acceptedFiles: ".pdf",
            addRemoveLinks: false,
            timeout: 60000,
            dictDefaultMessage: "Buscar archivo",
            previewTemplate: "<span data-dz-suc>¡Archivo subido!</span>"
        });
    }
};

export default init;