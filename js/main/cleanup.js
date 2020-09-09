let cleanup = {};

cleanup.changed = function () {
    $('.cleanup-form').removeClass('unmodified').addClass('modified');
}

$(document).on('change modify input', '.cleanup-form.unmodified input', cleanup.changed);
