let cleanup = {};

cleanup.changed = function () {
    $('.cleanup-form').removeClass('unmodified').addClass('modified');
}

cleanup.submit = async function () {
    const cache = await caches.open('PoGoMate-' + config.buildShort);
    await cache.delete('/cleanup', {ignoreSearch: true, ignoreMethod: true, ignoreVary: true});
}

$(document).on('change modify input', '.cleanup-form.unmodified input', cleanup.changed);
$(document).on('submit', '.cleanup-form', cleanup.submit);
