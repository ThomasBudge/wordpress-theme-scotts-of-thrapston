/**
 * Component: Slider
 * ------------------------------------------------------------------------------
 * 
 */
import Swiper  from 'swiper'
Swiper.use([])

class Slider {
    constructor (element) {
        this.element = element

        this._settings = {
            ...JSON.parse(element.getAttribute('data-slider') || '{}')
        }

        this._selectors = {
            control: '[data-slider-control]',
            swiper: '[data-slider-swiper]',
            nextArrow: '[data-slider-next]',
            prevArrow: '[data-slider-prev]',
            slides: '.swiper-slide'
        }

        this._nodeSelectors = {
            control: element.querySelectorAll(this._selectors.control),
            swiper: element.querySelector(this._selectors.swiper),
            nextArrow: element.querySelectorAll(this._selectors.nextArrow),
            prevArrow: element.querySelectorAll(this._selectors.prevArrow),
            slides: null
        }

        this._swiper = null

        this.init()
    }

    init () {
        this._setEventListeners()
        this._initialiseSwiper()
    }

    _setEventListeners() {
        this._nodeSelectors.control.forEach((button) => {
            button.addEventListener('click', (e) => this._handleClick(button))
        })

        this._nodeSelectors.nextArrow.forEach((element) => {
            element.addEventListener('click', (e) => this._nextSlide())
        })

        this._nodeSelectors.prevArrow.forEach((element) => {
            element.addEventListener('click', (e) => this._prevSlide())
        })
    }


    _initialiseSwiper() {
        this._swiper = new Swiper(this._nodeSelectors.swiper)
        this._nodeSelectors.slides = this._nodeSelectors.swiper.querySelectorAll(this._selectors.slides)
        this._swiper.on('slideNextTransitionStart', () => this._handleSlideAnimation())
        this._swiper.on('slidePrevTransitionStart', () => this._handleSlideAnimation())
    }

    _handleSlideAnimation() {
        this._removeAnimationClass()
        this._nodeSelectors.swiper.querySelector('.swiper-slide-active').classList.add('animating')
    }


    _removeAnimationClass() {
        this._nodeSelectors.slides.forEach((slide) => {
            slide.classList.remove('animating')
        })
    }

    _nextSlide() {
        this._swiper.slideNext()
    }

    _prevSlide() {
        this._swiper.slidePrev()
    }

    _handleClick(e) {
        for(let i = 0; i < this._nodeSelectors.control.length; i++) {
            const button = this._nodeSelectors.control[i]

            if (button.classList.contains('active')) {
                button.classList.remove('active')
                break
            }
        }

        e.classList.add('active')
        const slideIndex = e.getAttribute('data-slider-control')
        this._swiper.slideTo(slideIndex)
    }
}

export default Slider
