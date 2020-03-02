$('#search-btn').on('click', function () {
    $('#result').load('definitions.php', {word: ***},
        function (result) {
            document.getElementById('result').innerHTML('<strong>result</strong>');
        })
});