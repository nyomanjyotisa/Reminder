
Runner.pages.PageSettings.addPageEvent('new_group_request',Runner.pages.constants.PAGE_ADD,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){var ctrlTokenType=Runner.getControl(pageid,'token_type');ctrlTokenType.on('change',function(e){if(this.getValue()=='token'){pageObj.toggleItem("integrated_edit_field4",true);}else{pageObj.toggleItem("integrated_edit_field4",false);}});});