var timer;
function up()
{
	timer = setTimeout(function()
	{
		var keywords = $('#search-input').val();

		if (keywords.length > 0) 
			{
				$.post('http://localhost:8000/search/executeSearch', {keywords: keywords}, function(markup)
				{
					$('#search-results').html(markup);
				});
			}
	}, 600);
}
function down()
{
	clearTimeout(timer);
}