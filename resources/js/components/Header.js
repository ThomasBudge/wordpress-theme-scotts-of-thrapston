/**
 * Component: Slider
 * ------------------------------------------------------------------------------
 * 
 */
import Swiper  from 'swiper'
Swiper.use([])

class Header {
    constructor (element) {
        this.element = element

        this._settings = {
            ...JSON.parse(element.getAttribute('data-slider') || '{}')
        }

        this._selectors = {
            control: '[data-slider-control]',
            swiper: '[data-slider-swiper]',
            nextArrow: '[data-slider-next]',
            prevArrow: '[data-slider-prev]'
        }

        this._nodeSelectors = {
            control: element.querySelectorAll(this._selectors.control),
            swiper: element.querySelector(this._selectors.swiper),
            nextArrow: element.querySelectorAll(this._selectors.nextArrow),
            prevArrow: element.querySelectorAll(this._selectors.prevArrow)
        }

        this.init()
    }

    init () {
        this._setEventListeners()
    }

    _setEventListeners () {
        window.addEventListener('scroll', () => this._handleScroll())
    }

    _handleScroll() {
        if(window.pageYOffset > 100) {
            this.element.classList.add('active')
        } else {
            this.element.classList.remove('active')
        }
    }
}

export default Header
