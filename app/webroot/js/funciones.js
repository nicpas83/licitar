var WWW = window.location.origin + "/";
var btn_download = "<i class='fas fa-download'></i>";

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

    $('.initDt').DataTable({
        pageLength: 25,
        aaSorting: [],
        dom: 'Bfrtip',
        buttons: [{
                extend: 'excel',
                text: '',
                
            }],
        language: {
            search: "_INPUT_",
            searchPlaceholder: " Buscar...",
        }
    });

    $("a.buttons-excel span").html(btn_download);


});


//FILES JS
$('.dropify').dropify();

//Alerts
function topAlert(msg, color = 'success') {
    $("html, body").animate({scrollTop: 0}, "slow");
    $(".container-fluid").prepend("<div class='alert alert-" + color + " flashMsg'>" + msg + "</div>");
}
function beforeAlert(msg, element, color = 'success') {
    $("" + element + "").prepend("<div class='alert alert-" + color + " flashMsg'>" + msg + "</div>");
}
function goTop() {
    $("html, body").animate({scrollTop: 0}, "slow");
}



function alertEnd() {
    window.setTimeout(function () {
        $(".alert").fadeTo(1000, 0).slideUp(1000, function () {
            $(this).remove();
        });
    }, 4000);
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
function getPlural(word) {
    if (!INFLECTOR['cache']) {
        INFLECTOR['cache'] = {
            pluralize: {}
        };
    }

    if (INFLECTOR['cache']['pluralize'][word]) {
        return INFLECTOR['cache']['pluralize'][word];
    }

    if (!INFLECTOR['plural']['merged']) {
        INFLECTOR['plural']['merged'] = {};
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

function array_merge() {
    //  discuss at: http://phpjs.org/functions/array_merge/
    // original by: Brett Zamir (http://brett-zamir.me)
    // bugfixed by: Nate
    // bugfixed by: Brett Zamir (http://brett-zamir.me)
    //    input by: josh
    //   example 1: arr1 = {"color": "red", 0: 2, 1: 4}
    //   example 1: arr2 = {0: "a", 1: "b", "color": "green", "shape": "trapezoid", 2: 4}
    //   example 1: array_merge(arr1, arr2)
    //   returns 1: {"color": "green", 0: 2, 1: 4, 2: "a", 3: "b", "shape": "trapezoid", 4: 4}
    //   example 2: arr1 = []
    //   example 2: arr2 = {1: "data"}
    //   example 2: array_merge(arr1, arr2)
    //   returns 2: {0: "data"}

    var args = Array.prototype.slice.call(arguments),
            argl = args.length,
            arg,
            retObj = {},
            k = '',
            argil = 0,
            j = 0,
            i = 0,
            ct = 0,
            toStr = Object.prototype.toString,
            retArr = true;

    for (i = 0; i < argl; i++) {
        if (toStr.call(args[i]) !== '[object Array]') {
            retArr = false;
            break;
        }
    }

    if (retArr) {
        retArr = [];
        for (i = 0; i < argl; i++) {
            retArr = retArr.concat(args[i]);
        }
        return retArr;
    }

    for (i = 0, ct = 0; i < argl; i++) {
        arg = args[i];
        if (toStr.call(arg) === '[object Array]') {
            for (j = 0, argil = arg.length; j < argil; j++) {
                retObj[ct++] = arg[j];
            }
        } else {
            for (k in arg) {
                if (arg.hasOwnProperty(k)) {
                    if (parseInt(k, 10) + '' === k) {
                        retObj[ct++] = arg[k];
                    } else {
                        retObj[k] = arg[k];
                    }
                }
            }
        }
    }
    return retObj;
}
function implode(glue, pieces) {
    //  discuss at: http://phpjs.org/functions/implode/
    // original by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
    // improved by: Waldo Malqui Silva
    // improved by: Itsacon (http://www.itsacon.net/)
    // bugfixed by: Brett Zamir (http://brett-zamir.me)
    //   example 1: implode(' ', ['Kevin', 'van', 'Zonneveld']);
    //   returns 1: 'Kevin van Zonneveld'
    //   example 2: implode(' ', {first:'Kevin', last: 'van Zonneveld'});
    //   returns 2: 'Kevin van Zonneveld'

    var i = '',
            retVal = '',
            tGlue = '';
    if (arguments.length === 1) {
        pieces = glue;
        glue = '';
    }
    if (typeof pieces === 'object') {
        if (Object.prototype.toString.call(pieces) === '[object Array]') {
            return pieces.join(glue);
        }
        for (i in pieces) {
            retVal += tGlue + pieces[i];
            tGlue = glue;
        }
        return retVal;
    }
    return pieces;
}
function array_keys(input, search_value, argStrict) {
    //  discuss at: http://phpjs.org/functions/array_keys/
    // original by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
    //    input by: Brett Zamir (http://brett-zamir.me)
    //    input by: P
    // bugfixed by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
    // bugfixed by: Brett Zamir (http://brett-zamir.me)
    // improved by: jd
    // improved by: Brett Zamir (http://brett-zamir.me)
    //   example 1: array_keys( {firstname: 'Kevin', surname: 'van Zonneveld'} );
    //   returns 1: {0: 'firstname', 1: 'surname'}

    var search = typeof search_value !== 'undefined',
            tmp_arr = [],
            strict = !!argStrict,
            include = true,
            key = '';

    if (input && typeof input === 'object' && input.change_key_case) { // Duck-type check for our own array()-created PHPJS_Array
        return input.keys(search_value, argStrict);
    }

    for (key in input) {
        if (input.hasOwnProperty(key)) {
            include = true;
            if (search) {
                if (strict && input[key] !== search_value) {
                    include = false;
                } else if (input[key] != search_value) {
                    include = false;
                }
            }

            if (include) {
                tmp_arr[tmp_arr.length] = key;
            }
        }
    }

    return tmp_arr;
}