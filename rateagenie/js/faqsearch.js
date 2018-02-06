var lastResFind = ""; // last good result
var copy_page = ""; // copy of the page in its original form

function CreateAccordion(){
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight){
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    }
}

function TrimStr(s) {
    s = s.replace(/^\s+/g, '');
    return s.replace(/\s+$/g, '');
}
function FindOnPage(inputId) {//searches for text on the page, the ID is passed to the parameter for input
    var obj = window.document.getElementById(inputId);
    var textToFind;

    if (obj) {
        textToFind = TrimStr(obj.value);//crop the blanks
    } else {
        alert("The entered search query was not found");
        return;
    }

    if (textToFind == "") {
        alert("Please enter a search query");
        return;
    }

    if (textToFind.length < 2) {
        alert("Too short text")
        return;
    }

    var searcharea = document.getElementById('quest-answ');

    if (copy_page.length > 0)
        searcharea.innerHTML = copy_page;
    else copy_page = searcharea.innerHTML;
    searcharea.innerHTML = searcharea.innerHTML.replace(eval("/name=" + lastResFind + "/gi"), " ");// erase previous results
    searcharea.innerHTML = searcharea.innerHTML.replace(eval("/" + textToFind + "/gi"), "<span class=\"wordSelected\">" + textToFind  + "</span>"); //Replace the text found to text with span
    lastResFind = textToFind; // save the phrase for the search
    CreateAccordion();
    openFind();
    GoToFirstFind();
    KeyPressSearch();
}

function FindOnPage2(inputId) {
    var obj = window.document.getElementById(inputId);
    var textToFind;
    if (obj) {
        textToFind = TrimStr(obj.value);//crop the blanks
    } else {
        alert("The entered search query was not found");
        return;
    }

    if (textToFind == "") {
        alert("Please enter a search query");
        return;
    }

    if (textToFind.length < 2) {
        alert("Too short text")
        return;
    }

    $('#quest-answ h5').each(function() {
        var text = $(this).text();
        $(this).text(text.replace(textToFind, "<span class=\"wordSelected\">" + textToFind  + "</span>"));
    });

    /***/
    function findA() {
        var s = 'How';
        $("#quest-answ div h5:contains('" + s + "')").each( function() {
            var text = $(this).text(); $(this).html( text.replace( RegExp(s, 'gi'), "<span class=\"wordSelected\">" + s + "</span>" ))});
    }

 // эта конструкция ищет только текстовые элементы
    $("#quest-answ *").filter(function() {
        return this.innerText == "" ? this.innerHTML.length > 0 : this.innerText == this.innerHTML;
    })
    //Уже в рамках неё нужно делать
        .each( function() {
            var text = $(this).text(); $(this).html( text.replace( RegExp(s, 'gi'), "<span class=\"wordSelected\">" + s  + "</span>" ))
        })
    //Нужно перед очередным поиском убрать у найденных слов <span class=\"wordSelected\">




}

function openFind() {
    $('span.wordSelected').parents('div.accordionwrap').children('h5').trigger('click');
}

function GoToFirstFind(){
    $('html, body').animate({
        scrollTop: $("span.wordSelected").first().offset().top
    }, 2000);
}

//$('span.find:first').offset
KeyPressSearch();
function KeyPressSearch(){

    $('input[type=text]#query').on('keyup', function(e) {
        if (e.which == 13) {
            $('input#faqs-search').trigger('click');
            e.preventDefault();
        }
    });

};

CreateAccordion();