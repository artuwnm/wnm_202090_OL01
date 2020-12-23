const showResults = d => {
    output = '';

    if(d.result.length > 0) {

        var categories = [];
        d.result.forEach(r => {
            if(!categories[r.category]) categories[r.category] = [];
            categories[r.category].push(r);
        });

        var output = "";
        
        for (const [key, value] of Object.entries(categories)) {
            
            output += `<h2 class="uppercase">${key}</h2><div class="grid gap">`;
            output += listItemTemplate(value);
            output += '</div>';
        }

    } else {
        output = "No results";
    }

    return output;

};

const processSearch = () => {
    var search = $('#searchinput').val();
    var collection = $('#select-collection').val();
    var pricerange = $('#select-pricerange').val();
    var sort = $('#select-sort').val();
    
    query({
            type: "products_search",
            search: search,
            collection: collection,
            pricerange: pricerange,
            sort: sort
        }).then(d=>{
        var output = showResults(d);
        $("#product-list").html(output);
    });
};

$(() => {
    $('#searchform').on('submit', function(e) {
        e.preventDefault();
        processSearch();
    });

    query({type:"products_all"}).then(d=>{
    
        var output = showResults(d);
        $("#product-list").html(output);
        
    });
});