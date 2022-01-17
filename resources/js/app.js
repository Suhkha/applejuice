//require('./bootstrap');
import AddRemoveInput from './components/add-remove-input'
import PicturesProfile from './components/pictures-profile'
import Tabs from './components/tabs'
import Gallery from './components/gallery'
import Pdf from './components/pdf'
import GenericDelete from './components/generic-delete'

function main() {
    // AddRemoveInput()
    PicturesProfile()
    Tabs()
    Gallery()
    Pdf()
    GenericDelete()
}

$(document).ready(main)
