String.prototype.template=function(map){
    return $(this.replace(/{([^}]+)}/g, function(m,g) {
        var segments = g.split('.');
        var val = map;
        for(var i in segments) {
            val=val[segments[i]];
        }
        return val;
    }));
};
 
    
$(function(){
    var link_template = '<li class="{class}"><a href="{url}">{title}</a></li>'
    var links = [
        {url:'index.html',title:'home'},
        {url:'catalog.html#boys',title:'boys'},
        {url:'catalog.html#girls',title:'girls'},
        {url:'catalog.html#skort.front',title:'skorts'}
    ];
    
    var n = $('#nav');
    n.empty();
    var href = location.pathname == '/' ? 'index.html' : location.href;
    $(links).each(function() {
        this['class'] = href.indexOf(this.url) == -1 ? '' : 'selected'
        n.append(link_template.template(this));
    });

});