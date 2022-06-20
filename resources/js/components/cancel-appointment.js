import Swal from 'sweetalert2'
import 'sweetalert2/src/sweetalert2.scss'

const init = function () {

    $(document).ready(function() {
      $('.cancel-appointment').on('click', onClickCancelAppointment);
    });

    function onClickCancelAppointment() {
      let urlDelete = $(this).data('delete');

      Swal.fire({
          icon: 'error',
          title: '¿Desea cancelar esta cita?',
          text: "La cita no se podrá recuperar y se deberá re-agendar.",
          type: 'error',
          showCancelButton: true,
          confirmButtonColor: '#ef4444',
          cancelButtonText: 'No cancelar cita',
          confirmButtonText: 'Sí, cancelar cita'
      }).then((result) => {
        if (result.value) {
          location.href = urlDelete;
        }
      });
    }
};

export default init;