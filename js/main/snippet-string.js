function snippetStringCopy(event) {
    clipboard.writeText($(event.target).closest('.string').data('string'));
}

function snippetStringReveal(event) {
    let btn = $(event.target);
    btn.replaceWith(
        $('<span class="string-revealed"><a href="#" class="string-conceal">Conceal</a><br><p>' + btn.closest('.string').data('string') + '</p></span>')
    );
}

function snippetStringConceal(event) {
    $(event.target).closest('.string-revealed').replaceWith(
        $('<a href="#" class="string-reveal">Reveal</a>')
    );
}

$(document).on('click dblclick touchend', '.string .string-copy', snippetStringCopy);
$(document).on('click dblclick touchend', '.string .string-reveal', snippetStringReveal);
$(document).on('click dblclick touchend', '.string .string-conceal', snippetStringConceal);
