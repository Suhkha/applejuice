//require('./bootstrap');
import PicturesProfile from './components/pictures-profile'
import Tabs from './components/tabs'
import Gallery from './components/gallery'
import Pdf from './components/pdf'
import GenericDelete from './components/generic-delete'
import CustomTextarea from './components/custom-textarea'
import CancelAppointment from './components/cancel-appointment'

function main() {
    PicturesProfile()
    Tabs()
    Gallery()
    Pdf()
    GenericDelete()
    CustomTextarea()
    CancelAppointment()
}

$(document).ready(main)
