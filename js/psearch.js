
function search()
{
	var query=document.getElementById('query').value;
	
	var results=document.getElementById("search");
	
	$.ajax({

		url:"https://www.googleapis.com/books/v1/volumes?q="+query,
		dataType: "json",
		success: function(data) {
			for(i=0;i<data.items.length;i++)
			{
				results.innerHTML+="<h2><a href=\"https://books.google.co.in/books?id="+data.items[i].id+"\">"+data.items[i].volumeInfo.title+"</a></h2>";
				results.innerHTML+="<h3 id=\"authors\">Authors:</h3>";
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
				
				results.innerHTML+="<img src=\""+data.items[i].volumeInfo.imageLinks.smallThumbnail+"\" alt=\""+data.items[i].volumeInfo.title+"\">";
				results.innerHTML+="<form action=\"../shelves/like.php\" method=\"POST\" style=\"margin:0;\"><input name=\"title\" value=\""+data.items[i].volumeInfo.title+"\" style=\"display:none;\" /><input name=\"id\" value=\""+data.items[i].id+"\"  style=\"display:none;\"/><br><button name=\"like\" type=\"submit\">Like</button></form><hr>";
				
			}
		},
		type: "GET"

	});
}


document.getElementById('btn').addEventListener('click',search,false);