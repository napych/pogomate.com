let pokemonSearch = {'search': '', 'found_0': '', 'found_1': ''};

pokemonSearch.update = function () {
    const searchStr = $('#pokemon-search').val().toLowerCase();
    pokemonSearch.init(searchStr);
    for (const id in searchList) {
        if (!searchList.hasOwnProperty(id)) {
            continue;
        }
        const idStr = id.toString();
        const name = searchList[id].name;
        const nameL = name.toLowerCase();
        if (idStr === searchStr) {
            pokemonSearch.add(idStr, name, searchList[id].link, true);
        } else if(searchStr.length > 2) {
            const pos = nameL . indexOf(searchStr);
            if (pos < 0) {
                continue;
            }
            const nameS =
                name.substr(0, pos) +
                '<b>' +
                name.substr(pos, searchStr.length) +
                '</b>' +
                name.substr(pos + searchStr.length);
            if (pos === 0) {
                pokemonSearch.add(idStr, nameS, searchList[id].link, true);
            } else {
                pokemonSearch.add(idStr, nameS, searchList[id].link, false);
            }
        }
    }
    pokemonSearch.done();
}

pokemonSearch.init = function (search) {
    $('#pokemon-search-result').empty();
    pokemonSearch.search = search;
    pokemonSearch.found_0 = '';
    pokemonSearch.found_1 = '';
}

pokemonSearch.add = function (id, name, link, priority) {
    const str = '<p><a href="/pokemon/' + link + '">' + name + '</a></p>';
    if (priority) {
        pokemonSearch.found_0 += str;
    } else {
        pokemonSearch.found_1 += str;
    }
}

pokemonSearch.scroll = function () {
    $('html').animate({scrollTop: $('#search').offset().top}, 300);
}

pokemonSearch.done = function () {
    if (pokemonSearch.found_0 === '' && pokemonSearch.found_1 === '' && pokemonSearch.search.length > 2) {
        $('#pokemon-search-result').html('Pokémon not found');
    } else {
        $('#pokemon-search-result').append(pokemonSearch.found_0 + pokemonSearch.found_1);
    }
    pokemonSearch.scroll();
}

$(document).on('input', '#pokemon-search', pokemonSearch.update);
$(document).on('focus', '#pokemon-search', pokemonSearch.scroll);