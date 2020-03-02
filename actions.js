$('#search-btn').on('click', function () {

    let searchVal = $('#terms').val();

    $('#result').load('definitions.php', {word: searchVal},
        function (result) {
        $('#result').html(result);
            //document.getElementById('result').innerHTML('<strong>result</strong>');
        })
});