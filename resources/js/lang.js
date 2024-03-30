$(document).ready(function () {
    if (localStorage.getItem('lang')) {
        $('html').attr('lang', localStorage.getItem('lang') == 'en' ? 'en' : 'bg');
    }
    if ($('html').attr('lang') == 'en') {
        $(".lang_label").text('EN');
    } else {
        $(".lang_label").text('BG');
    }
    $(document).on('click', '.lang', function () {
        if ($('html').attr('lang') == 'en') {
            $('html').attr('lang', 'bg');
            $(".lang_label").text('BG');
            localStorage.setItem('lang', 'bg');
            updateText()
        } else if ($('html').attr('lang') == 'bg') {
            $('html').attr('lang', 'en');
            $(".lang_label").text('EN');
            localStorage.setItem('lang', 'en');
            updateText()
        }
    });

    const translations = {
        'en': {
            'aboutCompany': 'About Our Company'
        },
        'bg': {
            'aboutCompany': 'За Нашата Компания'
        }
    };

    function updateText() {
        const lang = localStorage.getItem('lang') || 'en';
        $(".aboutCompany").text(translations[lang]['aboutCompany']);
    }

    // Update text on SPA page change
    $(document).on('splade:load', function () {
        updateText();
    });
    // Call updateText() whenever an AJAX request is sent
    $(document).ajaxSend(function(event, xhr, settings) {
        updateText();
    });

    updateText();

})