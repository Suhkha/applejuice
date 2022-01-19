import Swal from 'sweetalert2'
import 'sweetalert2/src/sweetalert2.scss'

const init = function () {

    $(document).ready(function() {
      $('.delete-item').on('click', onClickItemDelete);
    });

    function onClickItemDelete() {
      let urlDelete = $(this).data('delete');

      Swal.fire({
          icon: 'error',
          title: '¿Desea eliminar este registro?',
          text: "La información no se podrá recuperar.",
          type: 'error',
          showCancelButton: true,
          confirmButtonColor: '#ef4444',
          cancelButtonText: 'Cancelar',
          confirmButtonText: 'Sí, eliminar'
      }).then((result) => {
        if (result.value) {
          location.href = urlDelete;
        }
      });
    }
};

export default init;