function changeSidebar(){
  if(document.getElementById("sidebar").className == "sidebar block-group"){
    document.getElementById("sidebar").className = 'noSidebar block-group';
    document.getElementById("hider").className = 'hide';
  } else if (document.getElementById("sidebar").className == "noSidebar block-group") {
    document.getElementById("sidebar").className = 'sidebar block-group';
    document.getElementById("hider").className = 'show';
  }
}