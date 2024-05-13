

document.addEventListener('DOMContentLoaded', () => {

    // Init AOS
    if (window.AOS !== undefined) {
        AOS.init({
            duration: 1000,
            disable: 'mobile',
            once: true
        });
    }

    //  fix for images with loading="lazy" attribute
    document.querySelectorAll('img').forEach(img => {
        img.addEventListener('load', () => {
            AOS.refresh()
        })
    })

    // add .scrolled class to header when page is scrolled
    const header = document.querySelector('header');
    if (header) {
        window.addEventListener('scroll', () => {
            if (window.scrollY >= 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    }


    // slides 

    const sliders = [...document.querySelectorAll('[data-slick]')]
    if (sliders.length > 0) {
        sliders.forEach(slider => {
            $(slider).slick()
        })
    }

    // list/grid switcher

    const switchers = [...document.querySelectorAll('[data-layout-switcher]')]
    const layout = document.querySelector('[data-layout]')
    if (switchers.length > 0) {

        switchers.forEach(switcher => {
            switcher.addEventListener('click', () => {
                const layoutType = switcher.dataset.layoutSwitcher
                layout.dataset.layout = layoutType
                switchers.forEach(s => s.classList.remove('text-opacity-25'))
                switcher.classList.add('text-opacity-25')
            })
        })


    }


})