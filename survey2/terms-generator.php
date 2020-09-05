<script>

    <?php include "terms.php";?>

    $.each(terms, function(i, item){
        let match = item.description.match(/_(.+)_/);
        let result = item.description.replace(match[0], '<span class="word">' + match[1] + '</span>');
    $('ol.generator').append('<li class="definition" id="' + item.wordId + '">' + result + '<sup class="source"><a href="#' + item.source + '">' + item.source + '</a></sup>' + '</li>' );
    });
    
</script>