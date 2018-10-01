$(function () {
    $(document).on('focus click', 'input.datepicker', function () {
        $(this).datepicker({
            autoclose: true,
            todayHighlight: true,
            format: 'dd/mm/yyyy',
        });
    });
    $(document).on('focus click', '.clockpicker', function () {
        $(this).clockpicker({
            donetext: 'Done',
        });
    });

});

//Top Alert
function topAlert(msg, color = 'success') {
    $(".container-fluid").prepend("<div class='alert alert-" + color + " flashMsg'>" + msg + "</div>");

}
//extrae la parte numérica de un string.
function getNumeric(id) {
    var $num = id.replace(/[^\d]+/, '');
    return $num;
}

/**
 * busca un texto seleccionado, ejemplo select option, en una columna de tabla. 
 * */
function findTextTableCol(text, tableId, col) {
    var nCol = parseInt(col) - 1;
    var status = true;
    $("#" + tableId + " tbody tr").each(function () {
        $(this).find('td').each(function (i) {
            if (i == nCol) {
                if ($(this).html() == text) {
                    swal("'" + text + "' ya existe en tu selección.");
                    status = false;
                }
            }
        });
    });
    return status;
}




// Returns the given underscored_word_group as a Human Readable Word Group.
// (Underscores are replaced by spaces and capitalized following words.)
function humanize(underscoredString) {
    return ucwords(underscoredString.replace(/_/g, ' '));
}

// Returns the given lower_case_and_underscored_word as a CamelCased word.
function camelize(underscoredString) {
    return humanize(underscoredString).replace(/ /g, '');
}

// Returns the given camelCasedWord as an underscored_word.
function underscore(camilizedString) {
    return camilizedString.replace(/::/g, '/')
            .replace(/([A-Z]+)([A-Z][a-z])/g, '$1_$2')
            .replace(/([a-z\d])([A-Z])/g, '$1_$2')
            .replace(/-/g, '_')
            .toLowerCase();
}

// Return word in plural form.
function pluralize(word) {
    if (!INFLECTOR['cache']) {
        INFLECTOR['cache'] = {
            pluralize: {}
        };
    }

    if (INFLECTOR['cache']['pluralize'][word]) {
        return INFLECTOR['cache']['pluralize'][word];
    }

    if (!INFLECTOR['plural']['merged']['irregular']) {
        INFLECTOR['plural']['merged']['irregular'] = INFLECTOR['plural']['irregular'];
    }

    if (!INFLECTOR['plural']['merged']['uninflected']) {
        INFLECTOR['plural']['merged']['uninflected'] = array_merge(INFLECTOR['plural']['uninflected'], INFLECTOR['uninflected']);
    }

    if (!INFLECTOR['plural']['cacheUninflected'] || !INFLECTOR['plural']['cacheIrregular']) {
        INFLECTOR['plural']['cacheUninflected'] = '(?:' + implode('|', INFLECTOR['plural']['merged']['uninflected']) + ')';
        INFLECTOR['plural']['cacheIrregular'] = '(?:' + implode('|', array_keys(INFLECTOR['plural']['merged']['irregular'])) + ')';
    }

    var myregexp = eval('/(.*)\\b(' + INFLECTOR['plural']['cacheIrregular'] + ')$/i');
    var regs = myregexp.exec(word);
    if (regs !== null) {
        INFLECTOR['cache']['pluralize'][word] = regs[1] + word.substr(0, 1) + INFLECTOR['plural']['merged']['irregular'][regs[2].toLowerCase()].substr(1);
        return INFLECTOR['cache']['pluralize'][word];
    }

    var myregexp = eval('/^(' + INFLECTOR['plural']['cacheUninflected'] + ')$/i');
    var regs = myregexp.exec(word);
    if (regs !== null) {
        INFLECTOR['cache']['pluralize'][word] = word;
        return word;
    }

    for (var rule in INFLECTOR['plural']['rules']) {
        var myregexp = eval(rule);
        if (myregexp.exec(word)) {
            INFLECTOR['cache']['pluralize'][word] = word.replace(myregexp, INFLECTOR['plural']['rules'][rule]);
            return INFLECTOR['cache']['pluralize'][word];
        }
    }
}
function ucwords(str) {
    //  discuss at: http://phpjs.org/functions/ucwords/
    // original by: Jonas Raoni Soares Silva (http://www.jsfromhell.com)
    // improved by: Waldo Malqui Silva
    // improved by: Robin
    // improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
    // bugfixed by: Onno Marsman
    //    input by: James (http://www.james-bell.co.uk/)
    //   example 1: ucwords('kevin van  zonneveld');
    //   returns 1: 'Kevin Van  Zonneveld'
    //   example 2: ucwords('HELLO WORLD');
    //   returns 2: 'HELLO WORLD'

    return (str + '')
            .replace(/^([a-z\u00E0-\u00FC])|\s+([a-z\u00E0-\u00FC])/g, function ($1) {
                return $1.toUpperCase();
            });
}
