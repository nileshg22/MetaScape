var bgvid = document.getElementById("bgvid");
var bgpic = document.getElementById("bgpic");

// Use AJAX to load content
function changePage($this){
    var fileName = $this.getAttribute('data-file')
    switch(fileName) {
        case 'templates/browse.php': 
        bgvid.style.display = "none";
        bgpic.style.display = "inline";
        document.getElementsByTagName("body")[0].style.overflowY = "scroll";
        break;

        case 'templates/manage.php': 
        bgvid.style.display = "none";
        bgpic.style.display = "inline";
        document.getElementsByTagName("body")[0].style.overflowY = "scroll";
        break;

        case 'templates/blank.html':
        bgpic.style.display = "none";
        bgvid.style.display = "inline";
        document.getElementsByTagName("body")[0].style.overflow = "hidden";
        break;
        }
    $('.content_loading_container').load('../'+fileName);
}