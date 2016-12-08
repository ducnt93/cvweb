var timer;
function up() {
    alert('da nhan');
    timer = setTimeout(function () {
        var keyword = $('#seach-input').val;
        if(keyword.length>0){
            $.post('http://localhost/laravel/projcv/cvweb/search',[keyword],function (markup) {
                $('search-results').html(markup);
            });
        }
    });

}
function down() {
    clearTimeout(timer);
}