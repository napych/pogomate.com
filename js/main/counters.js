let counters = {};

counters.toggleAttacks = function()
{
    const checkbox = $('#specify-attacks');
    if (!checkbox.length) {
        return;
    }
    if (checkbox.prop('checked')) {
        $('#counter-attacks').show();
    } else {
        $('#counter-attacks').hide();
        $('#attack1').val('');
        $('#attack2').val('');
    }
}

$(document).on('change', '#specify-attacks', counters.toggleAttacks);