(function() {
	tinymce.PluginManager.add( 'tboot_mce_button', function( editor, url ) {
		editor.addButton( 'tboot_mce_button', {
			title: 'Bootstrap Shortcodes',
			type: 'menubutton',
			icon: 'icon tboot-icon',
			menu: [


				/** Columns **/
				{
					text: 'Columns',
					menu: [

						/* Columns */
						{
							text: 'Two Columns',
							onclick: function() {
								editor.insertContent( '[tboot_column_wrap]<br />[tboot_column size="6"]<br />Content in column 1<br />[/tboot_column]<br />[tboot_column size="6"]<br />Content in column 2<br />[/tboot_column][/tboot_column_wrap]');
							}
						}, // End Columns

						/* Columns */
						{
							text: 'Three Columns',
							onclick: function() {
								editor.insertContent( '[tboot_column_wrap]<br />[tboot_column size="4"]<br />Content in column 1<br />[/tboot_column]<br />[tboot_column size="4"]<br />Content in column 2<br />[/tboot_column]<br />[tboot_column size="4"]<br />Content in column 3<br />[/tboot_column]<br />[/tboot_column_wrap]');
							}
						}, // End Columns

						/* Columns */
						{
							text: 'Four Columns',
							onclick: function() {
								editor.insertContent( '[tboot_column_wrap]<br />[tboot_column size="3"]<br />Content in column 1<br />[/tboot_column]<br />[tboot_column size="3"]<br />Content in column 2<br />[/tboot_column]<br />[tboot_column size="3"]<br />Content in column 3<br />[/tboot_column]<br />[tboot_column size="3"]<br />Content in column 4<br />[/tboot_column]<br />[/tboot_column_wrap]');
							}
						}, // End Columns
					

					]
				}, // End Columns Section


				/** Icons **/
				{
					text: 'Icons',
					menu: [

						/* Icon */
						{
							text: 'Icon',
							onclick: function() {
								editor.insertContent( '[tboot_icon icon="spinner" size="2x" spin="yes" border="yes" muted="yes" align="left" rotate="180" flip="vertical"][/tboot_icon]');
							}
						}, // End Icon

						/* Icon Stacked */
						{
							text: 'Icon Stacked',
							onclick: function() {
								editor.insertContent( '[tboot_iconstack icon="check-empty" top="twitter"][/tboot_iconstack]');
							}
						}, // End Icon Stacked

						/* Icon List */
						{
							text: 'Icon List',
							onclick: function() {
								editor.insertContent( '[tboot_iconlist]<br />[tboot_iconitem icon="youtube"]YouTube[/tboot_iconitem]<br />[tboot_iconitem icon="facebook"]Facebook[/tboot_iconitem]<br />[tboot_iconitem icon="twitter"]Twitter[/tboot_iconitem]<br />[/tboot_iconlist]');
							}
						}, // End Icon List

					]
				}, // End Icons Section


				/** Popover **/
				{
					text: 'Popovers',
					menu: [

						/* Popover */
						{
							text: 'Popover',
							onclick: function() {
								editor.insertContent( '[tboot_popover placement="top" popcontent="Content in Popover" title="Title in Popover"]Click this text for Popover[/tboot_popover]');
							}
						}, // End Popover

						/* Button Popover */
						{
							text: 'Button Popover',
							onclick: function() {
								editor.insertContent( '[tboot_button color="primary" size="lg" popplacement="top" poptitle="Title" popcontent="Content of popover"]Button Text[/tboot_button]');
							}
						}, // End Popover

					]
				}, // End Popovers Section


				/** Buttons **/
				{
					text: 'Buttons',
					menu: [

						/* Buttons */
						{
							text: 'Button',
							onclick: function() {
								editor.windowManager.open( {
									title: 'Insert Button',
									body: [

									// Button Text
									{
										type: 'textbox',
										name: 'buttonText',
										label: 'Button: Text',
										value: 'Download'
									},

									// Button URL
									{
										type: 'textbox',
										name: 'buttonUrl',
										label: 'Button: URL',
										value: 'http://www.#.com/'
									},

									// Button Color
									{
										type: 'listbox',
										name: 'buttonColor',
										label: 'Button: Color',
										'values': [
											{text: 'Default', value: 'default'},
											{text: 'Primary', value: 'primary'},
											{text: 'Success', value: 'success'},
											{text: 'Info', value: 'info'},
											{text: 'Warning', value: 'warning'},
											{text: 'Danger', value: 'danger'},
											{text: 'Link', value: 'link'}
										]
									},

									// Button Size
									{
										type: 'listbox',
										name: 'buttonSize',
										label: 'Button: Size',
										'values': [
											{text: 'Default', value: ''},
											{text: 'Extra Small', value: 'xs'},
											{text: 'Small', value: 'sm'},
											{text: 'Large', value: 'lg'}
										]
									},

									// Button Link Target
									{
										type: 'listbox',
										name: 'buttonLinkTarget',
										label: 'Button: Link Target',
										'values': [
											{text: 'Self', value: 'self'},
											{text: 'Blank', value: 'blank'}
										]
									},

									// Button Rel
									{
										type: 'listbox',
										name: 'buttonRel',
										label: 'Button: Rel',
										'values': [
											{text: 'None', value: ''},
											{text: 'Nofollow', value: 'nofollow'}
										]
									},

								 ],
									onsubmit: function( e ) {
										editor.insertContent( '[tboot_button url="' + e.data.buttonUrl + '" color="' + e.data.buttonColor + '" size="' + e.data.buttonSize + '" target="' + e.data.buttonLinkTarget + '" rel="' + e.data.buttonRel + '"]' + e.data.buttonText + '[/tboot_button]');
									}
								});
							}
						}, // End button

						/* Button Dropdown */
						{
							text: 'Button Dropdown',
							onclick: function() {
								editor.insertContent( '[tboot_button_dropdown label="Button Text" icon="info-sign" color="danger" size="lg"]<br />[tboot_dropdown_link icon="pencil" url="http://#.com/" target="blank"]Button Text[/tboot_dropdown_link]<br />[tboot_dropdown_link icon="comment" url="http://#.com/" target="blank"]Dropdown Link[/tboot_dropdown_link]<br />[tboot_dropdown_link icon="cog" url="http://#.com/" target="blank"]Button Text[/tboot_dropdown_link]<br />[tboot_dropdown_divider]<br />[tboot_dropdown_link url="http://#.com/" target="blank"]Button Text[/tboot_dropdown_link]<br />[/tboot_button_dropdown]');
							}
						}, // End Button Dropdown

						/* Button Split Dropdown */
						{
							text: 'Button Split Dropdown',
							onclick: function() {
								editor.insertContent( '[tboot_button_split_dropdown label="Button Text" color="primary" size="lg" url="http://#.com/" target="blank"]<br />[tboot_dropdown_link icon="pencil" url="http://#.com/" target="blank"]Button Text[/tboot_dropdown_link]<br />[/tboot_button_split_dropdown]');
							}
						}, // Button Split Dropdown

						/* Button Group */
						{
							text: 'Button Group',
							onclick: function() {
								editor.insertContent( '[tboot_button_group size="lg" ]<br />[tboot_button color="primary" url="http://#.com/" title="Visit Site" target="blank"]Button Text[/tboot_button][tboot_button color="danger" url="http://#.com/" title="Visit Site" target="blank"]Button Text[/tboot_button]<br />[/tboot_button_group]');
							}
						}, // Button Group

						/* Vertical Button Group */
						{
							text: 'Vertical Button Group',
							onclick: function() {
								editor.insertContent( '[tboot_button_group_vertical size="xs" ]<br />[tboot_button color="primary" url="http://#.com/" title="Visit Site" target="blank"]Button Text[/tboot_button][tboot_button color="danger" url="http://#.com/" title="Visit Site" target="blank"]Button Text[/tboot_button]<br />[/tboot_button_group_vertical]');
							}
						}, // Vertical Button Group

					]
				}, // End Buttons Section


				/** Tabs and Toggles **/
				{
				text: 'Tabs and Toggles',
				menu: [

						/* Bootstrap Accordion */
						{
							text: 'Accordion',
							onclick: function() {
								editor.insertContent( '[tboot_accordion_bootstrap name="UniqueName"]<br />[tboot_accordion_bootstrap_section color="primary" name="UniqueName" heading="Container One Title" number="1" open="yes"]<br />Accordion Bootstrap Content<br />[/tboot_accordion_bootstrap_section]<br />[tboot_accordion_bootstrap_section color="primary" name="UniqueName" heading="Container Two Title" number="2"]<br />Accordion Bootstrap Content<br />[/tboot_accordion_bootstrap_section]<br />[/tboot_accordion_bootstrap]');
							}
						}, // End bootstrap accordion

						/* Tabs */
						{
							text: 'Tabs',
							onclick: function() {
								editor.insertContent( '[tboot_tab_bootstrap]<br />[tboot_tab_titlesection type="tabs"]<br />[tboot_tab_tabtitle active="yes" number="1"]Tab 1[/tboot_tab_tabtitle]<br />[tboot_tab_tabtitle number="2"]Tab 2[/tboot_tab_tabtitle]<br />[/tboot_tab_titlesection]<br />[tboot_tab_contentsection]<br />[tboot_tab_tabcontent active="yes" number="1"]Tab 1 Content[/tboot_tab_tabcontent]<br />[tboot_tab_tabcontent number="2"]Tab 2 Content[/tboot_tab_tabcontent]<br />[/tboot_tab_contentsection]<br />[/tboot_tab_bootstrap]');
							}
						}, // End tabs

					]
				}, // End Tabs and Toggles section



				/** Tooltips **/
				{
				text: 'Tooltips',
				menu: [

						/* Tooltip */
						{
							text: 'Tooltip',
							onclick: function() {
								editor.insertContent( '[tboot_tooltip text="Text in tooltip" placement="top"]Link for tooltip[/tboot_tooltip]');
							}
						}, // End Tooltip

						/* Button Tooltip */
						{
							text: 'Button Tooltip',
							onclick: function() {
								editor.insertContent( '[tboot_tooltip text="Text in tooltip" placement="top" color="primary" size="lg"]Link for tooltip[/tboot_tooltip]');
							}
						}, // End Button Tooltip

					]
				}, // End tooltip section


				/** Popover **/
				{
					text: 'Progress Bar',
					menu: [

						/* Single Progress Bar */
						{
							text: 'Single Progress Bar',
							onclick: function() {
								editor.insertContent( '[tboot_progress_bar style="success" strip="yes" animate="yes" width="20"][/tboot_progress_bar]');
							}
						}, // End Single Progress Bar

						/* Progress Bar - Stacked */
						{
							text: 'Progress Bar - Stacked',
							onclick: function() {
								editor.insertContent( '[tboot_stacked_progress_bar]<br />[tboot_single_stacked_bar style="success" width="20"][/tboot_single_stacked_bar]<br />[tboot_single_stacked_bar style="warning" width="30"][/tboot_single_stacked_bar]<br />[tboot_single_stacked_bar style="danger" width="30"][/tboot_single_stacked_bar]<br />[/tboot_stacked_progress_bar]');
							}
						}, // End Progress Bar - Stacked

					]
				}, // End Popovers Section


				/** Bootstrap Components **/
				{
					text: 'Bootstrap Components',
					menu: [

						/* Alert */
						{
							text: 'Alert',
							onclick: function() {
								editor.insertContent( '[tboot_alert color="danger"]Alert Content[/tboot_alert]');
							}
						}, // End Alert

						/* Badge*/
						{
							text: 'Badge',
							onclick: function() {
								editor.insertContent( '[tboot_badge]Label[/tboot_badge]');
							}
						}, // End Badge

						/* Carousel */
						{
							text: 'Carousel',
							onclick: function() {
								editor.insertContent( '[tboot_carousel name="ExampleCarousel"]<br />[tboot_carousel_image first="yes" title="Image Title" caption="Caption example text" link="http://domain.com/images/pic.jpg"]<br />[tboot_carousel_image title="Second Image Title" caption="Caption for second image" link="http://domain.com/images/pic.jpg"]<br />[tboot_carousel_image title="Third Image Title" caption="Caption for third image" link="http://domain.com/images/pic.jpg"]<br />[/tboot_carousel] ');
							}
						}, // End Carousel

						/* Jumotron */
						{
							text: 'Jumotron',
							onclick: function() {
								editor.insertContent( '[tboot_jumbotron]Content of the Jumbotron <br />[tboot_button color="primary" size="lg" url="http://#.com/" title="Visit Site" target="blank"]Button Text[/tboot_button][/tboot_jumbotron]');
							}
						}, // End Jumotron

						/* Label */
						{
							text: 'Label',
							onclick: function() {
								editor.insertContent( '[tboot_label color="warning"]Label[/tboot_label]');
							}
						}, // End Label

						/* Modal */
						{
							text: 'Modal',
							onclick: function() {
								editor.insertContent( '[tboot_modal id="1" header="Title of Modal" color="danger" size="lg" msize="modal-sm" text="Click Here"]Here is he content[/tboot_modal]');
							}
						}, // End Modal

						/* Panel */
						{
							text: 'Panel',
							onclick: function() {
								editor.insertContent( '[tboot_panel color="primary" title="Title of Panel" footer="Panel Footer"]Here is the content of the panel[/tboot_panel]');
							}
						}, // End Panel

						/* Table */
						{
							text: 'Table',
							onclick: function() {
								editor.insertContent( '[tboot_table strip="yes" border="yes" condense="yes" hover="yes" cols="names,values" data="name1,25,name2,409"][/tboot_table]');
							}
						}, // End Table

						/* Well */
						{
							text: 'Well',
							onclick: function() {
								editor.insertContent( '[tboot_well width="50%"]Your Well Content[/tboot_well]');
							}
						}, // End Well

					]
				}, // End Bootstrap Components Section


				/** Extras **/
				{
				text: 'Extras',
				menu: [

					/* Spacing */
						{
							text: 'Spacing',
							onclick: function() {
								editor.windowManager.open( {
									title: 'Insert Spacing',
									body: [ {
										type: 'textbox', 
										name: 'spacingSize', 
										label: 'Height In Pixels',
										value: '30'
									} ],
									onsubmit: function( e ) {
										editor.insertContent( '[tboot_spacing size="' + e.data.spacingSize + '"]');
									}
								});
							}
						}, // End spacing

						/* Highlight */
						{
							text: 'Highlight',
							onclick: function() {
								editor.insertContent( '[tboot_highlight color="yellow"]highlighted text[/tboot_highlight]');
							}
						}, // End Highlight

						/* Testimonial */
						{
							text: 'Testimonial',
							onclick: function() {
								editor.insertContent( '[tboot_testimonial by="Person Name"]Your testimonial[/tboot_testimonial]');
							}
						}, // End Testimonial

						/* Pricing Table */
						{
							text: 'Pricing Table',
							onclick: function() {
								editor.insertContent( '[tboot_pricing_table]<br />[tboot_pricing  size="4" plan="Basic" cost="$9.99" per="per month" button_url="#" button_text="Sign Up"  button_target="self" button_rel="nofollow"]<br /><ul><li>Feature One</li><li>Feature Two</li><li>Feature Three</li><li>Feature Four</li><li>Feature Five</li></ul>[/tboot_pricing]<br />[tboot_pricing featured="yes" size="4" plan="Best" cost="$19.99" per="per month" button_url="#" button_text="Sign Up" button_color="danger" button_target="self" button_rel="nofollow"]<br /><ul><li>Feature One</li><li>Feature Two</li><li>Feature Three</li><li>Feature Four</li><li>Feature Five</li></ul>[/tboot_pricing]<br />[tboot_pricing  size="4" plan="Great" cost="$29.99" per="per month" button_url="#" button_text="Sign Up" button_target="self" button_rel="nofollow"]<br /><ul><li>Feature One</li><li>Feature Two</li><li>Feature Three</li><li>Feature Four</li><li>Feature Five</li></ul>[/tboot_pricing]<br />[/tboot_pricing_table]');
							}
						}, // End Pricing Table

						/* Clear Floats */
						{
							text: 'Clear Floats',
							onclick: function() {
								editor.insertContent( '[tboot_clear_floats]');
							}
						}, // End Clear Floats

					]
				} // End extras section

			]
		});
	});
})();
	