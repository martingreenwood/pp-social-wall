jQuery(function(){var e=jQuery(".grid").isotope({itemSelector:".grid-item",percentPosition:!0,masonry:{columnWidth:".grid-sizer"}}),i=jQuery(".ppsw-card").width();e.isotope("shuffle"),jQuery(window).resize(function(){i=jQuery(".ppsw-card").width(),jQuery(".ppsw-card").height(i),e.isotope("layout")}).resize()});