import Dropzone from "dropzone";

const init = function () {
    let myDropzone = new Dropzone("#image-upload", {
        maxFilesize: 10,
        acceptedFiles: ".jpeg,.jpg,.png,.gif",
        addRemoveLinks: false,
        timeout: 60000,
        dictDefaultMessage: "Buscar fotos"
    });
};

export default init;