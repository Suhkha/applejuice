//require('./bootstrap');
import AddRemoveInput from './components/add-remove-input'
import PicturesProfile from './components/pictures-profile'
import Tabs from './components/tabs'
import Gallery from './components/gallery'

function main() {
    // AddRemoveInput()
    PicturesProfile()
    Tabs()
    Gallery()
}

$(document).ready(main)
