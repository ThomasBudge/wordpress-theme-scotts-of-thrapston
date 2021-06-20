import Slider from './components/Slider'
import Header from './components/Header'
import Rellax from 'rellax'
import AOS from 'aos'

AOS.init()
const rellax = new Rellax('.rellax');

const components = {
    'header': Header,
    'slider': Slider
}

window.initialisedComponents = []

Object.keys(components).forEach((key) => {
    document.querySelectorAll(`[data-${key}]`).forEach((element) => {
        window.initialisedComponents.push(new components[key](element))
    })
})

