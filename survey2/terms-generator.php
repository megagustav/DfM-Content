<script>
let terms = [
            {
                "description": "The matte finish _waves_ on this wedding band contrast with the high polish borders. This sharp and elegant design was finely crafted in Japan.",
                "wordId": "1",
                "source": "12"
            },
            {
                "description": "This elegant _ring_ has an Akoya cultured pearl with a band of bezel-set round diamonds making it perfect for her to wear to work or the night out.",
                "wordId": "2",
                "source": "123"
            }
        ];
$.each(terms, function(i, item){
    let match = item.description.match(/_(.+)_/);
    let result = item.description.replace(match[0], '<span class="hl" id="' + item.wordId + '">' + match[1] + '</span>');
   $('ol.generated').append('<li class="definition">' + result + '<sup class="source"><a href="#' + item.source + '">' + item.source + '</a></sup>' + '</li>' );
});
</script>