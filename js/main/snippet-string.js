function snippetStringCopy(event) {
    clipboard.writeText($(event.target).closest('.string').data('string'));
    event.preventDefault();
}

function snippetStringReveal(event) {
    let btn = $(event.target);
    btn.replaceWith(
        $('<span class="string-revealed"><a href="#" class="string-conceal btn btn-secondary">Conceal</a><br><p>' + btn.closest('.string').data('string') + '</p></span>')
    );
    event.preventDefault();
}

function snippetStringConceal(event) {
    $(event.target).closest('.string-revealed').replaceWith(
        $('<a href="#" class="string-reveal btn btn-outline-secondary">Reveal</a>')
    );
    event.preventDefault();
}

$(document).on('click dblclick', '.string .string-copy', snippetStringCopy);
$(document).on('click dblclick', '.string .string-reveal', snippetStringReveal);
$(document).on('click dblclick', '.string .string-conceal', snippetStringConceal);
