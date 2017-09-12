
<section id="main"><!-- Main page container -->

						<div class="row-fluid">
                            <div class="span12">
                                <h3 class="popover-title">
                                    My genealogy
                                </h3>
								<div class="panel-content">
								
								<div id="basicdiagram" style=" height: 600px; border-style: dotted; border-width: 1px;" />
								
								
								 </div>
                                <br />
                            </div>
                        </div>
</section> <!-- End #main -->
</div><!-- End wrapper -->
	
		
		
		<script type='text/javascript'>//<![CDATA[ 
        $(window).load(function () {
            var maximumId = 90;
            var options = new primitives.orgdiagram.Config();

            var items = <?php echo $item ?>

            var buttons = [];
            buttons.push(new primitives.orgdiagram.ButtonConfig("add", "ui-icon-person", "Add"));

            options.items = items;
            options.cursorItem = 0;
            options.onHighlightChanged = function (e, data) {
                var message = (data.context != null) ? "User hovers mouse over item <b>'" + data.context.title + "'</b>." : "";

                $( "ul.ui-widget li" ).replaceWith( "<li data-buttonname='add' class='orgdiagrambutton ui-button ui-widget ui-state-default ui-corner-all ui-button-icon-only' role='button' aria-disabled='false' title='' style='position: absolute; top: 5px; left: 0px; width: 16px; height: 16px; padding: 3px;'><span class='ui-button-icon-primary ui-icon ui-icon-person'></span><span class='ui-button-text'></span></li>" );
            };
			options.buttons = buttons;
            options.hasButtons = primitives.common.Enabled.True;
            options.hasSelectorCheckbox = primitives.common.Enabled.False;
            var click = 0;
			options.onButtonClick = function (e, data) {
                /* get items collection */
                        //alert (click);
						if(click >0)
						{
							return false;
						}
						
						var items = jQuery("#basicdiagram").orgDiagram("option", "items");
                        /* block the button click */
						for(var i=0;i<items.length;i++){
							//alert(items[i]['parent']);
							if(items[i]['parent'] == data.context.id){
								alert("already loaded")
								return false;
							}
						}
						click++;
						/* ajax call for data */
						//alert( "http://www.blcearnmoney.com/cake/genealogy/ajaxforadd/?username=" + data.context.title + "&id=" + data.context.id);
						
						var url = "<?php echo Router::url(array('controller'=>'genealogy','action'=>'ajaxforadd', 'username' => 'ravi','id' => '1',));?>";
							var usernamee = data.context.title;
							var	iddd = data.context.id;
							var	color = data.context.description;
							url = "/cake/genealogy/ajaxforaddcolor/?username=";
							url = url.concat(usernamee);
							url = url.concat("&id=");
							url = url.concat(iddd);
							url = url.concat("&nid=");
							url = url.concat(items.length);
							url = url.concat("&color=");
							url = url.concat(color);
							//alert(url);
							
							$.ajax({url:url,success:function(result){
							//alert(result);
							var valNew=result.split('///');
							for(var i=0;i<valNew.length;i++){
								//alert(valNew[i]);
								/* create new item thanks to eval :D */
								var newItem = eval(valNew[i]);
								/* add it to items collection and put it back to chart, actually it is the same reference*/
								if(items.push(newItem)){
								}
							}
							jQuery("#basicdiagram").orgDiagram({
                            items: items,
								cursorItem: newItem.id
							});
							/* updating chart options does not fire its referesh, so it should be call explicitly */
							jQuery("#basicdiagram").orgDiagram("update", /*Refresh: use fast refresh to update chart*/ primitives.orgdiagram.UpdateMode.Refresh);
							click--;
						}});
						
						
						
						
                        
						
					
                
            };
			options.cursorItem = 0;
            options.templates = [getContactTemplate()];
            options.onItemRender = onTemplateRender;

            function onTemplateRender(event, data) {
                var hrefElement = data.element.find("[name=readmore]");
                var emailElement = data.element.find("[name=email]");
                switch (data.renderingMode) {
                    case primitives.common.RenderingMode.Create:
                        /* Initialize widgets here */
                        hrefElement.click(function (e) {
                            /* Block mouse click propogation in order to avoid layout updates before server postback*/
                            primitives.common.stopPropagation(e);
                        });
                        emailElement.click(function (e) {
                            /* Block mouse click propogation in order to avoid layout updates before server postback*/
                            primitives.common.stopPropagation(e);
                        });
                        break;
                    case primitives.common.RenderingMode.Update:
                        /* Update widgets here */
                        break;
                }

                var itemConfig = data.context;

                if (data.templateName == "contactTemplate") {
                    data.element.find("[name=titleBackground]").css({ "background": itemConfig.itemTitleColor });


                    data.element.find("[name=photo]").attr({ "src": itemConfig.image });
                    hrefElement.attr({ "href": itemConfig.href });
                    emailElement.attr({ "href": ("mailto:" + itemConfig.email + "?Subject=Hello%20again") });


                    var fields = ["title", "description", "phone", "email"];
                    for (var index = 0; index < fields.length; index++) {
                        var field = fields[index];

                        var element = data.element.find("[name=" + field + "]");
                        if (element.text() != itemConfig[field]) {
                            element.text(itemConfig[field]);
                        }
                    }
                }
            }

            function getContactTemplate() {
                var result = new primitives.orgdiagram.TemplateConfig();
                result.name = "contactTemplate";

                result.itemSize = new primitives.common.Size(119, 99);
                result.minimizedItemSize = new primitives.common.Size(3, 3);
                result.highlightPadding = new primitives.common.Thickness(2, 2, 2, 2);


                var itemTemplate = jQuery(
                  '<div class="bp-item bp-corner-all bt-item-frame">'
                    + '<div name="titleBackground" class="bp-item bp-corner-all bp-title-frame" style="top: 2px; left: 2px; width: 114px; height: 18px;">'
                        + '<div name="title" class="bp-item bp-title" style="top: 3px; left: 6px; width: 114px; height: 18px;">'
                        + '</div>'
                    + '</div>'
                    + '<div class="bp-item bp-photo-frame" style="top: 26px; left: 2px; width: 50px; height: 60px;">'
                        + '<img name="photo" style="height=60px; width=50px;" />'
                    + '</div>'
                    + '<div name="description" class="bp-item" style="top: 20px; left: 56px; width: 58px; height: 36px; font-size: 10px;"></div>'
                    + '<a target="_blank" name="readmore" class="bp-item" style="top: 60px; left: 4px; width: 116px; height: 20px; font-size: 10px; font-family: Arial; text-align: right; font-weight: bold; text-decoration: none;">Register...</a>'
                + '</div>'
                ).css({
                    width: result.itemSize.width + "px",
                    height: result.itemSize.height + "px"
                }).addClass("bp-item bp-corner-all bt-item-frame");

                result.itemTemplate = itemTemplate.wrap('<div>').parent().html();

                return result;
            }
            jQuery("#basicdiagram").orgDiagram(options);
			
			
        });//]]>  

        function getSubItemsForParent(items, parentItem) {
            var children = {},
                itemsById = {},
                index, len, item;
            for (index = 0, len = items.length; index < len; index += 1) {
                var item = items[index];
                if (children[item.parent] == null) {
                    children[item.parent] = [];
                }
                children[item.parent].push(item);
            }
            var newChildren = children[parentItem.id];
            var result = {};
            if (newChildren != null) {
                while (newChildren.length > 0) {
                    var tempChildren = [];
                    for (var index = 0; index < newChildren.length; index++) {
                        var item = newChildren[index];
                        result[item.id] = item;
                        if (children[item.id] != null) {
                            tempChildren = tempChildren.concat(children[item.id]);
                        }
                    }
                    newChildren = tempChildren;
                }
            }
            return result;
        
			
			
		};

    </script>