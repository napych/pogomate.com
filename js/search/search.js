let pokemonSearch = {};

pokemonSearch.update = function () {
    pokemonSearch.clear();
    const searchStr = $('#pokemon-search').val().toLowerCase();
    let found = false;
    for (const id in searchList) {
        if (!searchList.hasOwnProperty(id)) {
            continue;
        }
        const idStr = id.toString();
        const name = searchList[id].name;
        if (idStr === searchStr || (searchStr.length > 2 && name.toLowerCase().indexOf(searchStr) >= 0)) {
            found = true;
            const link = searchList.hasOwnProperty('link') ? searchList[id].link : name;
            pokemonSearch.add(idStr, name, link);
        }
    }
    if (!found && searchStr.length > 2) {
        pokemonSearch.notFound();
    }
}

pokemonSearch.clear = function () {
    $('#pokemon-search-result').empty();
}

pokemonSearch.add = function (id, name, link) {
    $('#pokemon-search-result').append('<p><a href="/pokemon/' + link + '">#' + id + ' ' + name + '</a></p>')
}

pokemonSearch.notFound = function () {
    $('#pokemon-search-result').html('Pokémon not found');
}

$(document).on('input', '#pokemon-search', pokemonSearch.update);