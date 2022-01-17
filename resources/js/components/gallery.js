import Dropzone from "dropzone";

const init = function () {
    if ($('#image-upload').length) {
        new Dropzone("#image-upload", {
            maxFilesize: 10,
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            addRemoveLinks: false,
            timeout: 60000,
            dictDefaultMessage: "Buscar fotos"
        });
    }
};

export default init;