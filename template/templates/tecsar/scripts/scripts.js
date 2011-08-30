window.addEvent('domready', function () {
	var columnGroups = $$('.columns');
	
	columnGroups.each(function (column) {
		var columns, height;
		columns = column.getElements('.module > div > div');
		height = 0;
		
		columns.each(function (column) {
			height = Math.max(height, column.getSize().y);
		});
		
		columns.setStyle('height', height + 'px');
	});
});