window.onload=function(){
	var SearchResult = document.getElementById("SearchResult");
	document.onclick = function(event){
		if(event.target.id !='SearchResult'){
			SearchResult.style.display = "block";
		}
		if(event.target.id !== 'SearchInput'){
			SearchResult.style.display = "none";
		}
	}
}