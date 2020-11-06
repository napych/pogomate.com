let a2hs = {};

a2hs.installPrompt = null;

a2hs.install = function (event) {
    $('#a2hs').hide();
    if (a2hs.installPrompt === null) {
        return;
    }
    a2hs.installPrompt.prompt();
    a2hs.installPrompt.userChoice.then((choiceResult) => {
        if (choiceResult.outcome === 'accepted') {
            console.log('User accepted the A2HS prompt');
        } else {
            console.log('User dismissed the A2HS prompt');
        }
        a2hs.installPrompt = null;
    });
}

a2hs.before = function (event) {
    event.preventDefault();
    a2hs.installPrompt = event;
    $('#a2hs').show();
}

$(document).on('click', '.a2hs-install', a2hs.install);
// $(window).on('beforeinstallprompt', a2hs.before);
