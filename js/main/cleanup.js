let cleanup = {};

cleanup.changed = function () {
    $('.cleanup-form').removeClass('unmodified').addClass('modified');
}

cleanup.submit = async function () {
    console.log('cleanup submit #2');
    const cache = await caches.open('PoGoMate-' + config.buildShort);
    await cache.delete(window.location, {ignoreSearch: true, ignoreMethod: true, ignoreVary: true});
}

$(document).on('change modify input', '.cleanup-form.unmodified input', cleanup.changed);
$(document).on('submit', '.cleanup-form', cleanup.submit);
