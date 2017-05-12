$(document).ready(function() {
    updateTotal();
});
var click = false;

function lotto() {
    if (click) {
        return false;
    } else {
        click = true;
        $('#lotto-img').attr('src', 'img/lotto.gif');
        $.ajax({
            type: "GET",
            url: "fn/rand.php",
            success: function(msg) {
                $('.result').html(msg.result);
                setTimeout(function() {
                    $('#winner').modal('show');
                    $('#recent-badge').html(msg.total)
                    setTimeout(function() {
                        $('#lotto-img').attr('src', 'img/lotto-static.png');
                        click = false;
                    }, 500);
                }, 3500);
            },
            dataType: 'json'
        });
    }
}

$("ul li").on("click", function() {
    $("li").removeClass("active");
    $(this).addClass("active");
});

function showRecent() {
    $('#lotto-img').hide();
    $.ajax({
        type: "GET",
        url: "fn/recent.php",
        success: function(msg) {
            $('#recent-pick').html(msg);
            $('#recent-pick').show();
        },
        dataType: 'html'
    });
}

function showWheel() {
    $('#lotto-img').show();
    $('#recent-pick').hide();
}

function updateTotal() {
    $.ajax({
        type: 'GET',
        dataType: "json",
        url: "../fn/randed.json",
        success: function(data) {
            $('#recent-badge').html(data.length)
        }
    });
}