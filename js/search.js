function bookSearch() {

	var search=document.getElementById("search").value;
	var results=document.getElementById("results")
	results.innerHTML="";


	$.ajax({
		
		url:"https://www.googleapis.com/books/v1/volumes?q="+search ,
		dataType: "json",
		success: function(data) {
			for(i=0;i<data.items.length;i++)
			{
				results.innerHTML+="<h2><a href=\"https://books.google.co.in/books?id="+data.items[i].id+"\">"+data.items[i].volumeInfo.title+"</a></h2>";
				results.innerHTML+="<h3>Authors:</h3>";
				if(data.items[i].volumeInfo.authors) 
				{
					for(j=0;j<data.items[i].volumeInfo.authors.length;j++)
					{
						results.innerHTML+="<h3>"+data.items[i].volumeInfo.authors[j]+"   </h3>";
					}
				}
				else
				{
					results.innerHTML+="<h3>Not Available</h3>";
				}
				
				results.innerHTML+="<img src=\""+data.items[i].volumeInfo.imageLinks.smallThumbnail+"\" alt=\""+data.items[i].volumeInfo.title+"\"><br><hr>";
				
			}
		},
		type:"GET"
	});

	
}



document.getElementById("searchbtn").addEventListener('click',bookSearch, false);